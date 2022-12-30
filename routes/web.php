<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;

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


// Route::get('/user/{id?}/{name?}', function ($userid=null,$userName=null) {
//     return view('user.index',
//     ['UserId'=>$userid,
//     'UserName'=>$userName,
//    ]);
// });


// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/gret/{title}', [GreetingController::class, 'showMsg']);

// resource controller er jonno route

//Route::resource('photos', PhotoController::class);

//rout for single controller 

//Route::get('single', SingleController::class);

Route::get('post/create', [PostController::class, 'create']);
Route::POST('post/store', [PostController::class, 'store']);

Route::get('posts', [PostController::class, 'index']);
Route::get('post/show/{id}', [PostController::class, 'show']);
Route::get('post/edit/{id}', [PostController::class, 'edit']);
Route::put('post/update/{id}', [PostController::class, 'update']);
Route::get('post/delete/{id}', [PostController::class, 'delete']);








