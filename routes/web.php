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
    Route::resource('videos', 'VideoController');
    Route::resource('socialmedias', 'SocialMediaController');
    Route::resource('telephones', 'TelephoneController');
    Route::resource('emails', 'EmailController');
    Route::resource('users', 'UserController');
    
    Route::resource('post_categories', 'PostCategoryController');
    Route::resource('posts', 'PostController');

    Route::resource('landing_pages', 'LandingPageController');

    Route::resource('ebooks', 'EbookController');

    //Upload
    Route::get('upload', 'UploadController@index');
    Route::get('/upload/tinymce', 'UploadController@index');
    Route::get('upload/many', 'UploadController@index');
    Route::post('/upload/many/list', 'UploadController@manyImages');
    Route::post('upload/upload', 'UploadController@upload')->name('upload.upload');
    Route::get('upload/delete/{file}', 'UploadController@delete')->name('upload.delete');

    //Ativo/Inativo
    Route::post('/activate-inactivate', 'ActivateController@activateInactivate')->name('activate-inactivate');

    //Validações Video
    Route::post('videos/verificaUrlCurta', 'VideoController@verifyShortenUrl')->name('videos.verificaUrlCurta');
    Route::post('videos/verificaUrlYoutubeValida', 'VideoController@verifyValidYoutubeUrl')->name('videos.verificaUrlYoutubeValida');
    Route::post('videos/obtemImagemYoutube', 'VideoController@getYoutubeThumb')->name('videos.obtemImagemYoutube');
});

/*
 * SITE
 */

Route::group([
                'namespace' => 'Site',
                'middleware' => ['getSocialMedia', 'getTelephones', 'getEmails'],
                'as' => 'site.'
            ], function() 
{
    Route::get('/', 'IndexController@index')->name('home');
    Route::get('/contato', 'IndexController@index')->name('contato.index');
    Route::post('/contato/send', 'ContactController@send')->name('contact.send');
    Route::get('/portfolio/{id}', 'PortfolioController@show')->name('portfolio');

    Route::get('/services/search/{service}', 'ServiceController@search')->name('services.search');
    Route::get('/services/{service}', 'ServiceController@index')->name('services.index');
    Route::get('/services/{service}/{subservice}', 'ServiceController@form')->name('services.form');
    Route::post('/services/send', 'ServiceController@send')->name('services.send');

    Route::get('/teste', function(){
        return 'teste';
    });
});

/*
 * BLOG
 */
Route::group([
                'prefix' => 'blog',
                'namespace' => 'Blog',
                'middleware' => ['getSocialMedia', 'getTelephones', 'blogSidebar'],
                'as' => 'blog.'
            ], function() 
{
    Route::get('/', 'BlogController@index')->name('index');
    Route::get('/materia/{title}/{id}', 'BlogController@show')->name('show');
    Route::get('/categoria/{category}/{id}', 'BlogController@category')->name('category');
    Route::get('/arquivo/{year}/{month}', 'BlogController@archive')->name('archive');
    Route::post('/search', 'BlogController@search')->name('search');
});


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