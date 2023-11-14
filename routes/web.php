<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPassController;
use App\Http\Controllers\Auth\UpdateUserController;
use App\Http\Controllers\Auth\LoginRegisterController;



Route::get('/', function () {
    return view('auth/home');
});


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
    
});



Route::view('auth/account/config', 'auth.account.config')->name('config');

Route::controller(UpdateUserController::class)->group(function(){
    Route::put('auth/account/config', 'auth.account.config')->name('config');
});


Route::controller(ForgotPassController::class)->group(function(){
    Route::get('/forgotPass', 'index')->name('forgotPass.index');
    Route::post('/forgotPass', 'store')->name('forgotPass.store');
});

// Route::get('auth/forgotPass', [ForgotPassController::class, 'forgotPass'])->name('forgotPass.index');
// Route::post('auth/forgotPass', [ForgotPassController::class, 'store'])->name('forgotPass.store');
