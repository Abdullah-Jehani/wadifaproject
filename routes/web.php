<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\businessAccountController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\personalAccountController;
use Illuminate\Support\Facades\Route;



route::get('/', [AuthController::class, 'accountType'])->name('auth.accountType');

Route::get('/personal-account', [AuthController::class, 'employeeIndex'])->name('personal-account');
Route::post('/personal-account/register', [AuthController::class, 'employeeRegister'])->name('personal-account.register');

Route::get('/business-account', [AuthController::class, 'companyIndex'])->name('business-account');
Route::post('/business-account/register', [AuthController::class, 'companyRegister'])->name('business-account.register');

route::get('/login', [AuthController::class, 'index'])->name('auth.index');
route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');

route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
