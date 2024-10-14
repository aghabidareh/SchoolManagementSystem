<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::namespace('Auth')->group(function(){
    Route::get('/', [AuthController::class , 'login'])->name('login');
    Route::post('login' , [AuthController::class , 'loginTo'])->name('loginTo');
    Route::get('register', [AuthController::class , 'register'])->name('register');
    Route::post('register', [AuthController::class , 'store'])->name('store');
});

Route::group(['middleware'=>'adminadmin'] , function(){
    Route::prefix('dashboard')->group(function(){
        Route::get('/', function () {
            return view('Admin.dashboard');
        })->name('dashboard');
    });
});

Route::get('home' , function(){
    return view('Home.Home');
})->name('Home');
