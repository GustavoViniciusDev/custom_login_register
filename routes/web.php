<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Auth\UpdateUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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

Route::get('/forgotPass', function (){
    return view('auth/forgotPass');
})->name('forgotPass');

// Route::view('auth/forgotPass', 'auth.forgotPass')->name('forgotPass');

Route::view('auth/account/config', 'auth.account.config')->name('config');

Route::controller(UpdateUserController::class)->group(function(){
    Route::put('auth/account/config', 'auth.account.config')->name('config');
});
