<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//  new route restored
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


Route::get('/posts', [PostController::class, 'index']);
Route::get('/gret/{title}', [GreetingController::class, 'showMsg']);

resource controller er jonno route
Route::resource('photos', PhotoController::class);

rout for single controller

Route::get('single', SingleController::class);

route group
Route::prefix('admin')->group(function () {
controller list
Route::controller(PostController::class)->group(function () {

Route::get('posts', 'index')->name('post.index');
// Route::get('post/create', 'create');
// Route::post('post/store', 'store')->name('post.store');
// Route::get('post/show/{id}', 'show');
// Route::get('post/edit/{id}', 'edit');
// Route::put('post/update/{id}', 'update');
// Route::get('post/delete/{id}', 'delete');
// //learn hunter
// Route::get('hunter/contact', 'contact');
// Route::post('hunter/store', 'hunterstore')->name('hunter.store');
