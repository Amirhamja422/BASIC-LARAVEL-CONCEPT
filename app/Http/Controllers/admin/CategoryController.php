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
    return redirect()->back()->witH('message', 'Your registration was successful');

    //dd(DB::table('test')->get());
   // return view('post/create');
  // return redirect('posts');
  }


  public function delete($id){
    DB::table('test')->where('id',$id)->delete();
    return redirect()->back()->with('message', 'Your registration was successfully deleted');

  } 


  public function edit($id){
    $data['test'] = DB::table('test')->where('id',$id)->first();
    //dd($data);
    return view('admin.class.edit',$data);
     }

  public function update(Request $request , $id){
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        DB::table('test')->where('id',$id)->update($data);
      return redirect()->route('class.index')->with('message', 'Your registration was successfully updated');

  }


}
