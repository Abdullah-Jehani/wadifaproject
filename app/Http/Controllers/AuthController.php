<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function accountType()
    {
        return view('auth.accountType');
    }
    public function companyIndex()
    {
        return view('auth.businessAccount');
    }
    public function employeeIndex()
    {
        return view('auth.personalAccount');
    }

    public function employeeRegister(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'username' => 'required|min:3',
            'phone_number' => 'required|min:10',
            'location' => 'required|min:3',
            'specialization' => 'required',
            'education' => 'required',
            'jobtitle' => 'required',
            'titlename' => 'required',
            'confirmpassword' => 'required|same:password',
        ]);

        Employee::create([
            'username' => $request->username,
            'titlename' => $request->titlename,
            'location' => $request->location,
            'email' => $request->email,
            'education' => $request->education,
            'specialization' => $request->specialization,
            'jobtitle' => $request->jobtitle,
            'phone_number' => $request->phone_number,
            'password' => $request->password,
        ]);

        return redirect('/login');
    }

    public function companyRegister(Request $request)
    {
    }
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
    }
}
