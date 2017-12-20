<?php

namespace Shop\Http\Controllers;

use Illuminate\Http\Request;
use Shop\Http\Requests\UserRequest;
use Shop\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = User::orderBy('id', 'DESC')->paginate(5);
        return view('back-end.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->fullname = $request->name;
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->status = '1';
        $user->role = $request->role;
        $user->save();

        return redirect()->route('users.index')
            ->with(['message' => 'Thêm mới thành công', 'alert' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('back-end.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('back-end.users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->status = $request->status;
        $user->role = $request->role;
        $user->save();

        return redirect()->route('users.index')
            ->with(['message' => 'Chỉnh sửa thành công', 'alert' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->role == 0) {
            return redirect()->route('users.index')
                ->with([
                    'message' => 'Không thể khóa tài khoản này! Tài khoản này là Admin.',
                    'alert' => 'danger'
                ]);
        }
        if ($user->status == 0){
            $user->status = 1;
            $user->save();

            return redirect()->route('users.index')
                ->with(['message' => 'Khóa thành công', 'alert' => 'success']);
        } else {
            $user->status = 0;
            $user->save();

            return redirect()->route('users.index')
                ->with(['message' => 'Mở khóa thành công', 'alert' => 'success']);
        }
    }
}
