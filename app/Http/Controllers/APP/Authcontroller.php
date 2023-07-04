<?php

namespace App\Http\Controllers\APP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Authcontroller extends Controller
{
    //
    public function register(Request $request){
    // validation of the request
    $validator = Validator::make($request->all(), [
        'name'=>'required',
        'email'=>'required',
        'password'=>'required'
    ]);   

    if($validator->fails()){
       $response = [
        'success' => true,
        'message' => $validator->errors()
       ];
       return response()->json($response,400);
    }
    
    $input = $request->all();
    $input['name'] = $input['name'];
    $input['email'] = $input['email'];
    $input['password'] = $input['password'];

    $user =User::create($input);
    $success['token'] = $user->createToken('MyApp')->plainTextToken;
    $success['name'] = $user->name;

    $response = [
     'success' => true,
     'data' => $success,
     'message' => 'User created successfully'
    ];
    return response()->json($response,200);
    }

    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
          $user = Auth::user();
          $success['token'] = $user->createToken('MyApp')->plainTextToken;
          $success['name'] = $user->name;
          $response = [
            'success' => true,
            'data' => $success,
            'message' => 'User Login successfully'
           ];
           return response()->json($response,200);

        }else{
            $response = [
                'success' => false,
                'data' => 'Unauthorized',
                'message' => 'User Login successfully'
               ];
               return response()->json($response); 
        }
    }
}
