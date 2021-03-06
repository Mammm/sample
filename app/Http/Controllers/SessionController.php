<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            session()->flash('success', '登录成功');
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            session()->flash('danger', '邮箱或者密码错误');
            return redirect()->back();
        }
    }
}
