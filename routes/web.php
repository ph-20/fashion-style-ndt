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

//  Login Custommer
Route::get('/login', ['as' => 'getLogin', 'uses' => 'ShopController@getLogin']);

Route::post('/login', ['as' => 'postLogin', 'uses' => 'ShopController@postLogin']);

// Register Custommer
Route::get('/register', ['as' => 'getRegister', 'uses' => 'ShopController@getRegister']);

Route::post('/register', ['as' => 'postRegister', 'uses' => 'ShopController@postRegister']);

Route::get('/', ['as' => 'index', 'uses' => 'ShopController@index']);

Route::get('/404', ['as' => 'error404', 'uses' => 'ShopController@error404']);

Route::get('/about', ['as' => 'about', 'uses' => 'ShopController@about']);

Route::get('/contact', ['as' => 'contact', 'uses' => 'ShopController@contact']);

Route::get('/checkout', ['as' => 'checkout', 'uses' => 'ShopController@checkout']);

Route::get('/cart', ['as' => 'cart', 'uses' => 'ShopController@cart']);

Route::get('/category', ['as' => 'category', 'uses' => 'ShopController@category']);

Route::get('/product', ['as' => 'product', 'uses' => 'ShopController@product']);

//=========================================
//  Back End
//=========================================
Route::get('/admin/login', ['as' => 'login-admin', 'uses' => 'AdminController@login']);

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'AdminController@dashboard']);

    //  User Resource
    Route::resource('/users', 'UserController');
});

