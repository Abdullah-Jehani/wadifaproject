<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class businessAccountController extends Controller
{
    public function index()
    {
        return view('auth.businessAccount');
    }

    public function store(Request $request)
    {
    }
}
