<?php

namespace Shop\Http\Controllers;

use Shop\Http\Requests\ChangePassRequest;
use Shop\Http\Requests\LoginRequest;
use Auth;
use Shop\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'getLoginAdmin']);
    }

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
        if (Auth::attempt($auth, $remember = false)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('getLoginAdmin')->with(['message' => 'Email hoặc mật khẩu không đúng.']);
        }
    }

    public function logoutAdmin()
    {
        Auth::logout();
        return redirect()->route('getLoginAdmin');
    }

    public function getChangePass()
    {
        return view('back-end.changePass');
    }

    public function postChangePass(ChangePassRequest $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('getChangePass')
            ->with(['message' => 'Đổi mật khẩu thành công.', 'alert' => 'success']);
    }
}
