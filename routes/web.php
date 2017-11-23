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

Route::get('/', ['as' => 'index', 'uses' => 'ShopController@index']);

Route::get('/404', ['as' => 'error404', 'uses' => 'ShopController@error404']);

Route::get('/login', ['as' => 'login', 'uses' => 'ShopController@login']);

Route::get('/register', ['as' => 'register', 'uses' => 'ShopController@register']);

Route::get('/about', ['as' => 'about', 'uses' => 'ShopController@about']);

Route::get('/contact', ['as' => 'contact', 'uses' => 'ShopController@contact']);

Route::get('/checkout', ['as' => 'checkout', 'uses' => 'ShopController@checkout']);

Route::get('/cart', ['as' => 'cart', 'uses' => 'ShopController@cart']);

Route::get('/category', ['as' => 'category', 'uses' => 'ShopController@category']);

Route::get('/product/{id}', ['as' => 'product', 'uses' => 'ShopController@product']);

Route::get('/admin/', ['as' => 'dashboard', 'uses' => 'AdminController@dashboard']);

Route::get('/admin/login', ['as' => 'login-admin', 'uses' => 'AdminController@login']);

//Route::get('danhmucsanpham','ShopController@getmenuproduct');
//Route::get('loaisp/{type}','ShopController@getloaisp');