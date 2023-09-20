<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
   function LinearChart(){
    return view('line-chart');

   }
}
