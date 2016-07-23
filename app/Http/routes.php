<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
 *
 * FRONTEND
 *
 */
Route::group(['middleware' => ['web']], function () {
	
	Route::get('logout', 'Auth\AuthController@logout');
	
    Route::get('/', [
        'as'    => 'index',
        'uses'  => 'HomeController@index'
    ]);

    Route::get('news/{slug}', [
        'as'    => 'get-news',
        'uses'  => 'NewsController@getNews'
    ]);
    
    Route::get('news', 'NewsController@getNewsList');
    
    Route::get('categories', 'CategoriesController@getCategoriesList');
    
    Route::get('{slug}/photo', 'ProductsController@getPhotos');
    
    Route::get('{slug}/video', 'ProductsController@getVideos');
    
    Route::get('{slug}/promo', 'NewsController@getPromo');
    
    Route::get('{slug}/menu', 'ProductsController@getMenu');
    
    Route::get('{slug}/plan', 'ProductsController@getPlan');

    Route::get('{slug}/interier', 'ProductsController@getInterier');

    Route::get('{slug}/reservation', 'ProductsController@reservation');

    Route::get('card', 'ProductsController@getCard');

    Route::get('search', 'CommonController@getSearch');
    
    Route::get('admin', 'Admin\AdminController@index');
    
    Route::get('{slug}', 'CommonController@getSlug');

    Route::get('tag/{id}', 'NewsController@getNewsByTagID');

});



/*
 *
 *  admin panel
 *
 */
 
 
Route::get('admin/login', [
    'uses'          => 'Admin\AdminController@getLogin',
    'middleware'    => ['web']
]);

Route::post('admin/login',[
    'uses'          => 'Admin\AdminController@postLogin',
    'middleware'    => ['web']
]);

Route::group(['middleware' => ['web', 'admin']], function () {
    Route::get('admin', 'Admin\AdminController@index');
});

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::controllers(['json' => 'Admin\JsonController']);

    Route::resource('content',          'Admin\ContentController');

    Route::resource('news',             'Admin\NewsController');
    
    Route::resource('categories',       'Admin\CategoriesController');
    
    Route::resource('products',         'Admin\ProductsController');

    Route::resource('galleries',        'Admin\GalleriesController');

    Route::resource('videos',           'Admin\VideosController');

    Route::resource('menucategories',   'Admin\MenuCategoriesController');

    Route::get('menu/{id}',             ['uses' => 'Admin\MenuProductsController@index',    'as' => 'menu']);
    Route::get('menu/create/{id}',      ['uses' => 'Admin\MenuProductsController@create',   'as' => 'menu.create']);
    Route::get('menu/edit/{id}',        ['uses' => 'Admin\MenuProductsController@edit',     'as' => 'menu.edit']);
    Route::post('menu/{id}',            ['uses' => 'Admin\MenuProductsController@store',    'as' => 'menu.store']);
    Route::put('menu/{id}',             ['uses' => 'Admin\MenuProductsController@update',   'as' => 'menu.update']);
    Route::delete('menu/{id}',          ['uses' => 'Admin\MenuProductsController@delete',   'as' => 'menu.delete']);

});

/*
 *
 *  photomanager
 *
 */
//////TODO middleware

    // upload
    Route::any('photos/upload', 'Admin\PhotosController@upload');
    Route::get('photos/getphotos', 'Admin\PhotosController@getJSONPhotos');
    Route::get('photos/changesort', 'Admin\PhotosController@changesort');
    Route::get('photos/delete/{id}', 'Admin\PhotosController@destroy');

//URL get content
//Route::get('{slug}', ['as' => 'getURL', 'uses' => 'ContentController@getBySlug', 'middleware'  => ['web']]);

/*
 * Route patterns
 *
 */
Route::pattern('id', '\d+');
Route::pattern('hash', '[a-z0-9]+');
Route::pattern('hex', '[a-f0-9]+');
Route::pattern('uuid', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}');
Route::pattern('base', '[a-zA-Z0-9]+');
Route::pattern('slug', '[a-z0-9-]+');
Route::pattern('username', '[a-z0-9_-]{3,16}');