<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::namespace("Authentication")->group(function () {
    Route::get('/' , [AuthController::class , 'loginP'])->name('login');
    Route::get('register', [AuthController::class ,'register'])->name('register');

    Route::post('/', [AuthController::class ,'login'])->name('logInAccount');
    Route::post('register' , [AuthController::class ,'store'])->name('registerMember');

    Route::get('logout', [AuthController::class ,'logout'])->name('logout');
});

Route::namespace("Dashboard")->group(function() {
    Route::prefix('dashboard')->group(function() {
        Route::get('/' , function() {
            echo 'hi';
        });
    });
});