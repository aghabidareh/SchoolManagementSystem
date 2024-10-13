<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Auth.login');
});

Route::get('/admin/dashboard', function () {
    return view('Admin.dashboard');
});
