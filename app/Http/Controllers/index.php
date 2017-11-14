<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    //index class

    public function index()
    {
    	//return 'hello world from controller : )';
    	return view('login/main');
    }

    public function userLogin()
    {
    	$input = Input::all();
    	return view('login/dashboard',array("input" => $input));
    }
}
