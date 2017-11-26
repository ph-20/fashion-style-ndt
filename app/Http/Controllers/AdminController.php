<?php

namespace Shop\Http\Controllers;

use Shop\Http\Requests\ChangePassRequest;
use Shop\Http\Requests\LoginRequest;
use Auth;
use Shop\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('back-end.index');
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
