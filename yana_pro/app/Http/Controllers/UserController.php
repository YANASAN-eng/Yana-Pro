<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Http\Requests\LoginCheckRequest;

class UserController extends Controller
{
    public function registrationForm(){
        return view('auth.registration');
    }
    public function registration(UserRequest $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('index');
    }
    public function loginForm(){
        return view('auth.login');
    }
    public function login(LoginCheckRequest $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect('index');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('index');
    }
}
