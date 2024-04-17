<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use \App\Models\City;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function index()
    {
        $city = City::orderBy('kota', 'asc')->get();
        return view("register.index", compact('city'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:users|size:16',
            'no_kk' => 'required|size:16',
            'nama_lengkap' => 'required',
            'telepon' => 'required|min:12',
            'domisili' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'confirmpass' => 'required|same:password'
        ]);

        $emailcheck = User::where('email', $request->email)->value('email');
        if($emailcheck)
        {
            return back()->with('email','Email Sudah Terdaftar!');
        }

        $request->merge(['confirmpass' => null])->except('confirmpass');
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        return redirect('/login')->with('message','Registration Success');
    }
}
