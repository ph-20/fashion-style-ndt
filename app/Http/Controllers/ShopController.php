<?php

namespace Shop\Http\Controllers;

use Shop\Http\Requests\LoginRequest;
use Shop\Http\Requests\UserRequest;
use Shop\User;
use Auth;

class ShopController extends Controller
{
    public function index()
    {
        return view('front-end.pages.index');
    }

    //  Register Custommer
    public function getRegister()
    {
        return view('front-end.pages.register');
    }

    public function postRegister(UserRequest $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->fullname = $request->name;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->role = '2';
        $user->status = '1';
        $user->save();

        return redirect()->route('getLogin')->with('alert', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }

    //  Login Custommer
    public function getLogin()
    {
        return view('front-end.pages.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $auth = array(
            'email' => $request->email,
            'password' => $request->password
        );
        if (Auth::attempt($auth)){
            echo 'Đăng nhập thành công';
        } else {
            echo 'Đăng nhập thất bại';
        }
    }

    public function error404()
    {
        return view('front-end.pages.404');
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
