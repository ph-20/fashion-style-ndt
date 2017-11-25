<?php
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

//Tìm kiem san pham
Route::get('/search', ['as' => 'search', 'uses' => 'ShopController@getSearch']);

//=========================================
//  Back End
//=========================================
Route::get('/admin/login', ['as' => 'login-admin', 'uses' => 'AdminController@login']);

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'AdminController@dashboard']);

    //  User Resource
    Route::resource('/users', 'UserController');
});

Route::get('mail', function () {
    Mail::send('email', ['data' => 'Noi dung'], function ($m) {
        $m->from('15i3lethiduong97@gmail.com', 'Tên người gửi');
        $m->to('thanhxuan82763@gmail.com', 'Tên người nhận')->subject('Tiêu đề mail!');
    });
});
