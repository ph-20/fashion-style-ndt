<?php

namespace Shop\Http\Controllers;

use Shop\Http\Requests\UserRequest;
use Shop\User;

class ShopController extends Controller
{
    public function index()
    {
        return view('front-end.pages.index');
    }

    public function error404()
    {
        return view('front-end.pages.404');
    }

    public function login()
    {
        return view('front-end.pages.login');
    }

//    Register Custommer
    public function getRegister()
    {
        return view('front-end.pages.register');
    }

    public function postRegister(UserRequest $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;
        $user->fullname = $request->name;
        $user->birthday = $request->birthday;
        $user->avatar = 'avatar.jpg';
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->role = '2';
        $user->status = '1';
        $user->save();

        return redirect()->route('login')->with('alert', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }

    public function about()
    {
        return view('front-end.pages.about');
    }

    public function contact()
    {
        return view('front-end.pages.contact');
    }

    public function checkout()
    {
        return view('front-end.pages.checkout');
    }

    public function cart()
    {
        return view('front-end.pages.cart');
    }

    public function category()
    {
        return view('front-end.pages.category');
    }

    public function product()
    {
        return view('front-end.pages.product');
    }
}
