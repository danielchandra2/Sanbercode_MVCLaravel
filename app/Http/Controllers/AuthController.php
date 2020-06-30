<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(){
    //
   	return view('register');
   	}

   	public function register_post(request $request){
    //
   	$fname=$request["fname"];
   	$lname=$request["lname"];
   	return view('welcome', ["fname"=>$fname , "lname"=>$lname ]);
   	}

   	public function welcome(){
    //
   	return view('welcome');
   	}

}
