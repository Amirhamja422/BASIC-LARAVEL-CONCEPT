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
    public function loginView(){
        return view('admin.loginform');

    }

    // public function loginViewData(){
    //     return view('admin.loginform');

    // }
}
