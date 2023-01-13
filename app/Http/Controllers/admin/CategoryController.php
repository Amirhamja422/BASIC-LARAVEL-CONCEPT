<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

   // index method for  all class from  database 
   
   public function index(){
    $class = DB :: table('test')->get();
    // dd($class);
    //echo "ok";
    return view('admin.class.index',compact('class'));
   }

   public function create(){
    return view('admin.class.create');
   }

// for insert
public function store(Request $request){
    $data['name'] = $request->name;
    $data['email'] = $request->email;
    DB::table('test')->insert($data);
    return view('admin.class.create')->with('message', 'Your registration was successful');

    //dd(DB::table('test')->get());
   // return view('post/create');
  // return redirect('posts');
  }



}
