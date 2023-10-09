<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function registration(){
        return view('auth.registration');
    }
    public function registration_post(Request $request){
        dd($request->all());
        

    }

}
