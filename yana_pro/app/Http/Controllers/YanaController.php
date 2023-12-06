<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class YanaController extends Controller
{
    public function Index(){
        $user = Auth::user();
        return view('index', compact('user'));
    }
}
