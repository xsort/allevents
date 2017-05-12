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
Route::group(['middleware' => ['web', 'shared']], function () {

    Route::get('logout', 'Auth\AuthController@logout');

    Route::get('/', [
        'as'    => 'cap',
        'uses'  => 'HomeController@cap'
    ]);

    Route::get('/index', [
        'as'    => 'index',
        'uses'  => 'HomeController@index'
    ]);

    Route::get('news/{slug}', ['uses'  => 'NewsController@getNews', 'as' => 'get-news']);

    Route::get('news', ['uses' => 'NewsController@getNewsList', 'as' => 'news']);

    Route::get('promo', ['uses' => 'NewsController@getPromoList', 'as' => 'promo']);

    Route::get('afisha', ['uses' => 'NewsController@getAfishaTagList', 'as' => 'afisha']);
    Route::get('afisha/{slug}', ['uses' => 'NewsController@getAfishaNewsByTag', 'as' => 'get-afisha-news']);

    Route::get('reports', ['uses' => 'NewsController@getReportsTagList', 'as' => 'reports']);
    Route::get('reports/{slug}', ['uses' => 'NewsController@getReportsNewsByTag', 'as' => 'get-reports-news']);

    Route::get('get-shop-product/{id}', ['uses' => 'ProductsController@getShopProduct', 'as' => 'get-shop-product']);

    Route::get('categories', ['uses' => 'CategoriesController@getCategoriesList', 'as' => 'categories'] );

    Route::get('{slug}/photo', ['uses'=>'ProductsController@getPhotos', 'as' => 'get_galleries']);

    Route::get('{slug}/photo/{name}', ['uses'=>'ProductsController@getGallery', 'as' => 'get_gallery']);

    Route::get('{slug}/video', ['uses'=>'ProductsController@getVideos', 'as' => 'get_videos']);

    Route::get('{slug}/promo', ['uses'=>'ProductsController@getPromo', 'as' => 'get_promo']);

    Route::get('{slug}/shop', ['uses'=>'ProductsController@getMenu', 'as' => 'get_menu']);

    Route::get('{slug}/shop/{slug_menu}', ['uses'=>'ProductsController@getMenuProducts', 'as' => 'get_menu_products']);

    Route::get('{slug}/plan', ['uses'=>'ProductsController@getPlan', 'as' => 'get_plan']);

    Route::get('{slug}/reservation', ['uses'=>'ProductsController@getReservation', 'as' => 'get_reservation']);

    Route::get('cart', ['uses'=> 'ProductsController@getCart', 'as' => 'cart']);

    Route::get('search', ['uses'=>'CommonController@getSearch', 'as'=>'search']);

    Route::get('admin', 'Admin\AdminController@index');

    Route::get('tag/{slug}', ['uses' => 'NewsController@getNewsByTagSlug', 'as' => 'get-tag']);

    Route::post('make-event',    ['uses'=>'MailController@makeEvent', 'as'=>'make-event']);

    Route::post('put-event',    ['uses'=>'MailController@putEvent', 'as'=>'put-event']);

    Route::post('make-contact',    ['uses'=>'MailController@makeContact', 'as'=>'make-contact']);

    Route::post('send-email',    ['uses'=>'MailController@sendEmail', 'as'=>'send-email']);

    Route::post('send-card',    ['uses'=>'MailController@sendCard', 'as'=>'send-card']);

    Route::post('manager-question',    ['uses'=>'MailController@managerQuestion', 'as'=>'manager-question']);

    Route::post('inst-reservation',    ['uses'=>'MailController@reservation', 'as'=>'inst-reservation']);

    Route::get('users', ['uses'=>'UserController@index']);

    Route::get('tags', ['uses'=>'TagsController@index']);


    //!!!!этот роут должен быть всегда последним!!!!! 
    Route::get('{slug}', ['uses'=>'CommonController@getSlug', 'as'=>'get_slug']);
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

Route::group(['middleware' => ['web', 'manager']], function () {
    Route::get('admin', 'Admin\AdminController@index');
});

Route::group(['middleware' => ['web'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::group(['middleware' => ['admin']], function () {
        Route::controllers(['json' => 'Admin\JsonController']);

        Route::resource('content', 'Admin\ContentController');

        Route::resource('tags', 'Admin\TagsController');

        Route::resource('links', 'Admin\LinksController');

        Route::resource('categories', 'Admin\CategoriesController');

        Route::resource('menucategories', 'Admin\MenuCategoriesController');

        Route::resource('users', 'Admin\UserController');

        Route::resource('translations', 'Admin\TranslationsController');

        Route::get('relations/{id}', ['uses' => 'Admin\LinksController@getRelations', 'as' => 'relations']);
        Route::post('relations/{id}', ['uses' => 'Admin\LinksController@storeRelations', 'as' => 'relations.store']);

        Route::get('links/custom/{id}', ['uses' => 'Admin\LinksController@getCustomLink', 'as' => 'links.custom']);
        Route::post('links/custom/{id}', ['uses' => 'Admin\LinksController@postCustomLink', 'as' => 'links.custom.store']);
    });

    Route::group(['middleware' => ['manager']], function () {

        Route::resource('products', 'Admin\ProductsController');
        Route::resource('news', 'Admin\NewsController');
        Route::resource('galleries', 'Admin\GalleriesController');
        Route::resource('videos', 'Admin\VideosController');

        Route::get('product-menu/{id}', ['uses' => 'Admin\MenuProductsController@index', 'as' => 'menu']);
        Route::get('product-menu/create/{id}', ['uses' => 'Admin\MenuProductsController@create', 'as' => 'menu.create']);
        Route::get('product-menu/edit/{id}', ['uses' => 'Admin\MenuProductsController@edit', 'as' => 'menu.edit']);
        Route::post('product-menu/{id}', ['uses' => 'Admin\MenuProductsController@store', 'as' => 'menu.store']);
        Route::put('product-menu/{id}', ['uses' => 'Admin\MenuProductsController@update', 'as' => 'menu.update']);
        Route::delete('product-menu/{id}', ['uses' => 'Admin\MenuProductsController@destroy', 'as' => 'menu.delete']);


    });
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