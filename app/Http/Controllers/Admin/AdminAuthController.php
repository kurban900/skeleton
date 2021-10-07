<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController
{
    public function login(): View
    {
        return view('admin.auth');
    }

    public function auth(Request $request)
    {
        if (!Auth::attempt(['email' => $request['email'], 'password' => $request['password']],true)) {
            return back()->withErrors('Не верный email или пароль')->withInput();
        }

        return redirect('/admin')->withSuccess('Вы авторизовались как администратор');
    }
}
