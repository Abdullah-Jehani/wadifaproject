<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'email' => 'required|email|unique:employees',
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

        $employee = new Employee([
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

        $employee->save();

        return redirect('/login');
    }

    public function companyRegister(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:companies',
            'specialization' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
            'phone_number' => 'required|min:10',
            'location' => 'required|min:3',
            'establishment_date' => 'required',
            'registration_number' => 'required',
            'company_name' => 'required'
        ]);
        $company = new Company([
            'email' => $request->email,
            'specialization' => $request->specialization,
            'password' => $request->password,
            'phone_number' => $request->phone_number,
            'location' => $request->location,
            'establishment_date' => $request->establishment_date,
            'registration_number' => $request->registration_number,
            'company_name' => $request->company_name,
        ]);
        $company->save();
        return redirect('/login');
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
            'accountType' => 'required', // Validate account type
        ]);

        $credentials = $request->only('email', 'password');

        if ($request->input('accountType') === 'company') {
            // Attempt to log in a company user
            if (auth()->guard('company')->attempt($credentials)) {
                $company = auth()->guard('company')->user(); // Get the company user
                $token = $company->createToken('auth_token')->plainTextToken; // Generate token
                return redirect('/jobs'); // Redirect to the home page
            }
        } elseif ($request->input('accountType') === 'employee') {
            // Attempt to log in an employee user
            if (auth()->guard('employee')->attempt($credentials)) {
                $employee = auth()->guard('employee')->user(); // Get the employee user
                $token = $employee->createToken('auth_token')->plainTextToken; // Generate token
                return redirect('/jobs'); // Redirect to the home page
            }
        }

        // If login fails for either company or employee
        return redirect()->back()->withInput()->withErrors(['email' => 'البريد الالكتروني او رمز المرور غير صحيحتان', 'password' => 'البريد الالكتروني او رمز المرور غير صحيحتان']);
    }

    public function logout()
    {
        auth()->guard('company')->logout();
        auth()->guard('employee')->logout();
        return redirect('/login');
    }
}
