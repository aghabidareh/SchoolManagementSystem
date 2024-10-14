<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('Auth.login');
    }
    public function loginTo(Request $request){
        if(Auth::attempt(['email'=>$request->email , 'password'=>$request->password] , true)){
            if(Auth::user()->is_admin == 1){
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('Home');
            }
        }else{
            return redirect()->back()->with('error' , 'Email or Password is wrong!');
        }
    }
    public function register(){
        return view('Auth.register');
    }
    public function store(Request $request){
        $saver = new User();
        $saver->name = $request->name;
        $saver->email = $request->email;
        $saver->password = Hash::make($request->password);
        $saver->save();

        return redirect()->route('login')->with('success' , 'New Account SuccessFully Created!');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
