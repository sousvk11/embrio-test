<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function homepage(){
        return view('welcome');
    }

    public function howItWorks(){
        return view('works');
    }
}
