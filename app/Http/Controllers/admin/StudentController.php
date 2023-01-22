<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //
    // $students=DB::table('students')->orderBy('roll','asc')->get();

       // join two tables with the same name and column names and return   
       $students = DB::table('students')
       ->join('test', 'students.class_id', 'test.id')->paginate(4);
    //    ->join('sections', 'class.id', 'section.class_id')->get();
    //    ->select('users.*', 'contacts.phone', 'orders.price')
    //    dd($students);


    // Eloquent Orm using model binding 
    $students = Student::all();
    return response()->json($students);
    die();

       return view('admin.students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      $students = DB::table('test')->get();  
      return view('admin.students.create',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        $data['class_id'] = $request->class_id;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['roll'] = $request->roll;
        $data['phone'] = $request->phone;
        DB::table('students')->insert($data);
        return redirect()->route('students.index')->with('success','Students added sucessfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $class = DB::table('test')->get();
        $students = DB::table('students')->where('id',$id)->first();    
        return view('admin.students.edit',compact('class','students'));
         return redirect()->route('students.index')->with('success','Students added sucessfully.');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data['class_id'] = $request->class_id;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['roll'] = $request->roll;
        $data['phone'] = $request->phone;
        DB::table('students')->where('id',$id)->update($data);
        return redirect()->route('students.index')->with('success','Update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
      DB::table('students')->where('id', $id)->delete();  
    }
}