<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

/*
 * PAINEL
 */
Route::group([
                
                'domain' => 'painel.'.str_replace('https://','',env('APP_URL')),
                'namespace' => 'Painel',
                'middleware' => ['auth', 'activeUser']
            ], function() 
{
    Route::get('/', 'PainelController@index');
    Route::resource('banners', 'BannerController');
    Route::resource('services', 'ServiceController');
    Route::resource('subservices', 'SubserviceController');
    Route::resource('portfolios', 'PortfolioController');
    Route::resource('clients', 'ClientController');
    Route::resource('socialmedias', 'SocialMediaController');
    Route::resource('telephones', 'TelephoneController');
    Route::resource('users', 'UserController');
    
    Route::resource('post_categories', 'PostCategoryController');
    Route::resource('posts', 'PostController');

    Route::resource('landing_pages', 'LandingPageController');

    Route::resource('ebooks', 'EbookController');

    Route::get('upload', 'UploadController@index');
    Route::get('/upload/tinymce', 'UploadController@index');
    Route::post('upload/upload', 'UploadController@upload')->name('upload.upload');
    Route::get('upload/delete/{file}', 'UploadController@delete')->name('upload.delete');

    //Ativo/Inativo
    Route::post('/activate-inactivate', 'ActivateController@activateInactivate')->name('activate-inactivate');
});

/*
 * SITE
 */

Route::group([
                'namespace' => 'Site',
                'middleware' => ['getSocialMedia', 'getTelephones'],
                'as' => 'site.'
            ], function() 
{
    Route::get('/', 'IndexController@index')->name('home');
    Route::get('/contato', 'IndexController@index')->name('contato.index');
    Route::post('/contato/send', 'ContactController@send')->name('contact.send');
    Route::get('/portfolio/{id}', 'PortfolioController@show')->name('portfolio');

    Route::get('/services/{service}', 'ServiceController@index')->name('services.index');

    Route::get('/teste', function(){
        return 'teste';
    });
});

/*
 * BLOG
 */
/*Route::group([
                'prefix' => 'blog',
                'namespace' => 'Blog',
                'middleware' => ['getSocialMedia', 'getTelephones']
            ], function() 
{
    Route::get('/', 'BlogController@index')->name('blog.index');
    Route::get('/post/{id}/{title}', 'BlogController@show')->name('blog.post');
    Route::get('/arquivo/{ano}/{mes}', 'BlogController@arquivo')->name('blog.arquivo');
    Route::post('/post-like', 'BlogController@like')->name('blog.post.like');
});*/


/*
 * Landing Pages
 */
/*Route::group([
                'prefix' => 'landing-page',
                'namespace' => 'LandingPages',
                'middleware' => 'getSocialMedia'
            ], function() 
{
    Route::get('/{title}', 'PageController@index')->name('landing-page.index');
    Route::get('/{title}/obrigado', 'PageController@thanks')->name('landing-page.thanks');
});*/


/*
 * Ebooks
 */
/*Route::group([
                'prefix' => 'ebooks',
                'namespace' => 'Ebooks',
                'middleware' => 'getSocialMedia'
            ], function() 
{
    Route::get('/', 'EbookController@index')->name('ebooks.index');
});*/