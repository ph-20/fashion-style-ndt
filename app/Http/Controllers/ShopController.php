<?php

namespace Shop\Http\Controllers;

use Illuminate\Http\Request;

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

    public function register()
    {
        return view('front-end.pages.register');
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
