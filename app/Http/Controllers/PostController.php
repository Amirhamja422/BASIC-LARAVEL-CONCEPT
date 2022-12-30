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



     
   public function show($id){
    $data['post'] = DB::table('test')->where('id',$id)->first();
    //dd($data);
    return view('post/show',$data);
     }
  
       
     public function edit($id){
      $data['post'] = DB::table('test')->where('id',$id)->first();
      //dd($data);
      return view('post/edit',$data);
       }

   public function create(){
      return view('post/create');
     }
  // for insert
   public function update(Request $request , $id){
      $data['name'] = $request->name;
      $data['email'] = $request->email;
      DB::table('test')->where('id',$id)->update($data);
      //dd(DB::table('test')->get());
     // return view('post/create');
     return redirect('posts');


     }
  

}
