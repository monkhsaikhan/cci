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

Route::get('/', 'HomeController@index');

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth'], 'namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('/', 'AdminController@index')->name('dashboard');

    Route::resource('users', 'UsersController');

    Route::resource('post', 'PostController');

    Route::resource('page', 'PageController');

    Route::group(['prefix' => 'api', 'as' => 'api.'], function(){
        Route::get('posts', 'ApiController@posts')->name('posts');
        Route::get('contentBlock', 'ApiController@contentBlock')->name('contentBLock');
        Route::get('image/collection', 'ApiController@imageCollection')->name('imageCollection');
        Route::get('big/slider', 'ApiController@bigSlider')->name('bigSlider');
        Route::get('custom/text', 'ApiController@customText')->name('customText');
        Route::post('page/save', 'ApiController@pageSave')->name('pageSave');
    });
});
