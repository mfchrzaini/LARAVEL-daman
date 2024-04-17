<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("login.index");
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
    
            if ($user->role === 'admin') {
                return redirect('/admin');
            } else {
                return redirect('/dashboard');
            }
        }

        return back()->with('message', 'Login Failed');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
