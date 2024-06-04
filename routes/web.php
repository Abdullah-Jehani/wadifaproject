<?php

use App\Http\Controllers\businessAccountController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\personalAccountController;
use Illuminate\Support\Facades\Route;



Route::get('/account-type', function () {
    return view('accountType');
});

Route::get('/personal-account', [personalAccountController::class, 'index'])->name('personal-account');
Route::post('/personal-account/register', [personalAccountController::class, 'store'])->name('personal-account.register');

Route::get('/business-account', [businessAccountController::class, 'index'])->name('business-account');
Route::get('/business-account/register', [businessAccountController::class, 'store'])->name('business-account.register');

route::get('/login', [loginController::class, 'index'])->name('auth.index');
