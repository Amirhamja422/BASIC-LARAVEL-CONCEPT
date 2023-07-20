<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomController extends Controller
{
    //
    public  function formView(){
    return view('admin.form');
    }

    public function liveView(){
        return view('admin.livewireform');

    }
}
