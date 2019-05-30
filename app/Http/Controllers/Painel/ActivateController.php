<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Repositories\SocialMediaRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ActivateController extends Controller
{
    private $socialMediaRepository;

    public function __construct(SocialMediaRepository $socialMediaRepository)
    {
        $this->socialMediaRepository = $socialMediaRepository;
    }

    public function activateInactivate(Request $request)
    {
        $data = $request->all();
        $model = '\\App\\Models\\'.$data['model'];
        $id = $data['id'];

        try {
            $item = call_user_func($model.'::find', $id);
            $item->active = !$item->active;
            $item->save();

            if($data['model'] == 'SocialMedia')
                $this->storeSocialMediaInCache();
        }
        catch(\Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    private function storeSocialMediaInCache()
    {
        $socialMedias = $this->socialMediaRepository->findWhere([
            ['active', '=', 1],
            ['url', '<>', null],
        ]);

        Cache::forever('socialmedias', $socialMedias);
    }
}
