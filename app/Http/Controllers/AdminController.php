<?php

namespace Shop\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('back-end.index');
    }

    public function login()
    {
        return view('back-end.login');
    }
}
