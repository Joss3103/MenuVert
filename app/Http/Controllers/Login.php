<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index(){
        return view('auth.loginbackoffice');
    }
public function store(){
$credentials=request()->only('email','password');
/* dd($credentials); */
if(Auth::attempt($credentials)){
    request()->session()->regenerate();
return redirect('layouts.dashboard');
}
return redirect('auth.loginbackoffice');;
}
}
