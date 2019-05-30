<?php

namespace App\Http\Controllers\Blog;

use App\Criteria\Blog\ArchiveCriteria;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Util\UrlController;
use App\Repositories\PostRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    private $repository;

    /**
     * Initiate repository, load cached recent posts, liked posts, and post's dates
     * @param PostRepository $repository [description]
     */
    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;

        $this->getRecentPosts();
        $this->getLikedPosts();
        $this->getPostDates();
    }

    /**
     * Blog's First Page
     * @return [view] Blog's Index
     */
    public function index()
    {
        $posts = $this->repository->scopeQuery(function($query){
            return $query
                ->where(['active' => 1])
                ->orderBy('created_at', 'DESC');
        })->paginate(10);

        $recentPosts = Cache::get('recentPosts');
        $likedPosts = Cache::get('likedPosts');
        $postDates = Cache::get('postDates');

        return view('blog.index', compact('posts', 'recentPosts', 'likedPosts', 'postDates'));
    }

    /**
     * Show especific post
     * @param  [string] $title  Title of post
     * @return [view]           Post Page
     */
    public function show($id, $title)
    {
        $title = UrlController::translateFriendlyUrl($title);

        $post = $this->repository->find($id); 

        $recentPosts = Cache::get('recentPosts');
        $likedPosts = Cache::get('likedPosts');
        $postDates = Cache::get('postDates');

        return view('blog.pages.post', compact('post', 'recentPosts', 'likedPosts', 'postDates'));
    }

    /**
     * Like or Dislike Post (AJAX Call)
     * @param  Request $request Post's ID, Action (like or dislike), 
     * @return AJAX Data
     */
    public function like(Request $request) {
        $data = $request->all();

        $post = $this->repository->find($data['id']);

        if($data['action'] == 'like') 
            $likes = $post->likes + 1;
        else if($data['action'] == 'dislike') 
            $likes = $post->likes - 1;

        $this->repository->update(['likes' => $likes], $data['id']);

        $this->setCookie($data['id'], $data['action']);

        return [$data, $likes];
    }

    /**
     * Cache Recent Posts for an Hour
     */
    private function getRecentPosts() 
    {
        $recentPosts = DB::table('posts')->latest()->limit(10)->get();

        $expiresAt = Carbon::now()->addHour();

        Cache::add('recentPosts', $recentPosts, $expiresAt);
    }

    /**
     * Cache Liked Posts for a Day
     * @return [type] [description]
     */
    private function getLikedPosts() 
    {
        $likedPosts = DB::table('posts')->orderby('likes', 'DESC')->limit(10)->get();

        $expiresAt = Carbon::now()->addDay();

        Cache::add('likedPosts', $likedPosts, $expiresAt);
    }

    /**
     * Cache List of Months and Years that have at least on post
     * @return [type] [description]
     */
    private function getPostDates() 
    {
        $postDates = DB::table('posts')
            ->select(DB::raw("
                YEAR(created_at) as year, 
                MONTH(created_at) as month
            "))
            ->groupBy('month')
            ->groupBy('year')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();

        $expiresAt = Carbon::now()->addDay();

        Cache::add('postDates', $postDates, $expiresAt);
    }

    /**
     * Set Cookie for an Year, used in like or dislike button
     * @param [integer] $id     [Post's ID]
     * @param [action]  $action [like or dislike]
     */
    private function setCookie($id, $action)
    {
        $cookie = Cookie::get('postLike');

        if($cookie == null)
            $cookie = [];

        //Like, add id in array
        if($action == 'like'){
            if(!in_array($id, $cookie)){
                $cookie[] = $id;
            }
        }
        //Dislike, remove id from array
        else if($action == 'dislike'){
            if(in_array($id, $cookie)){
                //Remove param 2 from array in parameter 1
                array_diff( $cookie, [$id]);
            }
        }

        //Set cookie for 1 year (60 minutos, 24 hours, 365 days)
        Cookie::queue(cookie('postLike', $cookie, 60*24*365));
    }

    public function arquivo($ano, $mes)
    {
        $posts = $this
                    ->repository
                    ->pushCriteria(new ArchiveCriteria($ano, $mes))
                    ->paginate(10);

        $recentPosts = Cache::get('recentPosts');
        $likedPosts = Cache::get('likedPosts');
        $postDates = Cache::get('postDates');

        return view('blog.index', compact('posts', 'recentPosts', 'likedPosts', 'postDates'));
    }
}
