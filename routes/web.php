<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/greeting', function () {
//     return 'Hello World';
// });


// Route::get('/user/{id?}/{name?}', function ($userid=null,$userName=null) {
//     return 'User Id is'.$userid."User Name is".$userName;
// });


// return er value gulo view file dekhate hole jevabe korte hoi

// Route::get('/greeting', function () {
//    return view('greeting');
// });


Route::get('/user/{id?}/{name?}', function ($userid=null,$userName=null) {
    return view('user.index',
    ['UserId'=>$userid,
    'UserName'=>$userName,
   ]);
});


//Route::get('/user', [UserController::class, 'index']);
