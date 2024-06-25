<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('personal-account');
        }

        return back()->withErrors(['email' => 'The provided credentials are incorrect.']);
    }
}
