<?php

namespace Shop\Http\Controllers;

use Shop\Http\Requests\LoginRequest;
use Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('back-end.index');
    }

    public function getLoginAdmin()
    {
        return view('back-end.login');
    }

    public function postLoginAdmin(LoginRequest $request)
    {
        $auth = array(
            'email' => $request->email,
            'password' => $request->password
        );
        if (Auth::attempt($auth, $remember = false)){
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('getLoginAdmin')->with(['message'=> 'Email hoặc mật khẩu không đúng.']);
        }
    }

    public function logoutAdmin(){
        Auth::logout();
        return redirect()->route('getLoginAdmin');
    }
}
