<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthUsers extends Controller
{
    //
    public function showLoginForm()
    {
        return view("admin.login");
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email_user', 'password_user');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/dasboard');
        }
    
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }
}
