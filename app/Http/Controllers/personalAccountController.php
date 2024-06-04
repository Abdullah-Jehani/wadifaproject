<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personalAccountController extends Controller
{
    public function index()
    {
        return view('auth.personalAccount');
    }

    public function store(Request $request)
    {
    }
}
