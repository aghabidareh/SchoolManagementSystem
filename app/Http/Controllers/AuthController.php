<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginP(){
        return view("Auth.login");
    }

    public function login(Request $request){
        echo "login";
    }

    public function register(){
        return view("Auth.register");
    }

    public function store(Request $request){
        echo "Store";
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("login")->with('info' ,'you are loged out, now login.');
    }
}
