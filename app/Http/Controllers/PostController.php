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


// delete data

  public function delete($id){
    DB::table('test')->where('id',$id)->delete();
    //dd($data);
    return redirect('posts');
  }

  // insert form run       
  public function create(){
      return view('post/create');
     }


  // for update
  public function update(Request $request , $id){
      $data['name'] = $request->name;
      $data['email'] = $request->email;
      DB::table('test')->where('id',$id)->update($data);
      //dd(DB::table('test')->get());
     // return view('post/create');
     return redirect('posts');


     }

// for insert
public function store(Request $request){
  $data['name'] = $request->name;
  $data['email'] = $request->email;
  DB::table('test')->insert($data);
  //dd(DB::table('test')->get());
 // return view('post/create');
 return redirect('posts');
}

// learn hunter tutorial

 public function contact(){
    return view('hunter/contact');
   }

   // for insert
public function hunterstore(Request $request){
   $validated = $request->validate([
    'name' => 'required',
    'email' => 'required|unique:test|max:255',
  ]);
 // dd($request->all());
  // $data['name'] = $request->name;
  // $data['email'] = $request->email;
  // DB::table('test')->insert($data);
  //dd(DB::table('test')->get());
 // return view('post/create');
//  return redirect('posts');
}


}