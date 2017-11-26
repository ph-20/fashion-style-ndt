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

//  Logout Custommer
Route::get('/logout', ['as' => 'logout', 'uses' => 'ShopController@logout']);

// Register Custommer
Route::get('/register', ['as' => 'getRegister', 'uses' => 'ShopController@getRegister']);

Route::post('/register', ['as' => 'postRegister', 'uses' => 'ShopController@postRegister']);

//  Edit Customer
Route::get('/profile', ['as' => 'getProfile', 'uses' => 'ShopController@getProfile']);

Route::post('/profile', ['as' => 'postProfile', 'uses' => 'ShopController@postProfile']);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', ['as' => 'index', 'uses' => 'ShopController@index']);

Route::get('/404', ['as' => 'error404', 'uses' => 'ShopController@error404']);

Route::get('/about', ['as' => 'about', 'uses' => 'ShopController@about']);

Route::get('/contact', ['as' => 'contact', 'uses' => 'ShopController@contact']);

Route::get('/checkout', ['as' => 'checkout', 'uses' => 'ShopController@checkout']);

Route::get('/cart', ['as' => 'cart', 'uses' => 'ShopController@cart']);

Route::get('/category/{slug}', ['as' => 'category', 'uses' => 'ShopController@category']);

Route::get('/product', ['as' => 'product', 'uses' => 'ShopController@product']);

//=========================================
//  Back End
//=========================================

//  Reset Password
Route::get('/password/reset',
    [
        'as' => 'password.request',
        'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
    ]);

Route::post('/password/reset', ['uses' => 'Auth\ResetPasswordController@reset']);

Route::post('/password/email',
    [
        'as' => 'password.email',
        'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
    ]);

Route::get('/password/reset/{token}',
    [
        'as' => 'password.reset',
        'uses' => 'Auth\ResetPasswordController@showResetForm'
    ]);

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'AdminController@dashboard']);

    //  Change Pass
    Route::get('/change-pass', ['as' => 'getChangePass', 'uses' => 'AdminController@getChangePass']);

    Route::post('/change-pass', ['as' => 'postChangePass', 'uses' => 'AdminController@postChangePass']);

    //  User Resource
    Route::resource('/users', 'UserController');

    //  Product Resource
    Route::resource('/products', 'ProductController');
});
