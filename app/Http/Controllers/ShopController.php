<?php

namespace Shop\Http\Controllers;

use Illuminate\Http\Request;
use Shop\Http\Requests\ShopRequest;
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

    public function getRegister()
    {
        return view('front-end.pages.register');
    }

    public function postRegister(ShopRequest $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;
        $user->avatar = 'avatar.jpg';
        $user->fullname = $request->name;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = '2';
        $user->gender = $request->gender;
        $user->status = '1';
        $user->save();
        return redirect()->route('login')->with('alert', 'Đăng kí thành công, vui lòng đăng nhập!');
    }


}
