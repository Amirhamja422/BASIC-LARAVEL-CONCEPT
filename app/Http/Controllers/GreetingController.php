<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    
    public function showMsg($greeting){
        return view('greeting',
        ['greetings'=>$greeting
       ]);
    }
}
