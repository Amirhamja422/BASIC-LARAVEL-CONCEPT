<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    
   // public function index(){
   //  return view('post.index');
   // }


   public function index(){
      $data['test'] = DB::table('test')->get();
      //dd($data);
     return view('post/view',$data);
     }
  

   public function create(){
      return view('post/create');
     }
  

   public function store(Request $request){
      $data['name'] = $request->name;
      $data['email'] = $request->email;
      DB::table('test')->insert($data);
      //dd(DB::table('test')->get());
     // return view('post/create');
     return redirect('posts');


     }
  

}
