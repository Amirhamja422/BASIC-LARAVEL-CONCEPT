<?php
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\IncomController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ChartController;
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


// Route::get('/', function () {
//     return view('frontend.dashboard');
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

//route group
// Route::prefix('admin')->group(function () {
//controller list





///////////////////////////////////////////////// admin portal start ///////////////////////////////////////////////

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

/////class  crud start/////////////////////////////////////////////////////////////////////////////////////

// Route::get('test', [CategoryController::class, 'index'])->name('class.index');
// Route::get('create', [CategoryController::class, 'create'])->name('class.create');
// Route::post('store', [CategoryController::class, 'store'])->name('class.store');
// Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('class.delete');
// Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('class.edit');
// Route::put('update/{id}', [CategoryController::class, 'update'])->name('class.update');

// Route::get('/', function () {
//     return view('welcome');
// });

/////////////////////////////////////////////////class crud end /////////////////////////////////////////////////


///////////////////////////////////////////////// crud student start////////////////////////////////////////////


// Route::resource('students',StudentController::class);


////////////////////////////////h///////////////// crud student end //////////////////////////////////////////////






///////////////////////////////////////////////// admin portal  end ///////////////////////////////////////////////


///////////////////////////////////////////////// static web page start /////////////////////////////////////////////
// Route::get('/greeting', function () {
//     return 'Hello World';
// });

// Route::view('/', 'frontend.dashboard')->name('home');
// Route::view('/about', 'frontend.about')->name('about');
// Route::view('/service', 'frontend.service')->name('service');
// Route::view('/portfolio', 'frontend.portfolio')->name('portfolio');
// Route::view('/contact', 'frontend.contact')->name('contact');


///////////////////////////////////////////////// static web page end ///////////////////////////////////////////////


//  Route::get('form', [IncomController::class, 'formView'])->name('admin.form');
//  Route::get('formLive', [IncomController::class, 'liveView'])->name('admin.live');

##File Upload used in livewired
//  Route::get('formLogin', [IncomController::class, 'loginView'])->name('admin.login');
//  Route::post('logView', [IncomController::class, 'loginViewData'])->name('admin.logView');


 ## Jetstream Livewire CRUD with Tailwind Modal

//  Route::get('/countries', [mainController::class, 'index'])->name('admin.test');

 ## spatie permission for laravel




///////////////////////////////////////////////// Edit update delete start ////////////////////////////////////////////

//     Route::controller(PostController::class)->group(function () {

//     Route::get('posts', 'index')->name('post.index');
//     Route::get('post/create', 'create');
//     Route::post('post/store', 'store')->name('post.store');
//     Route::get('post/show/{id}', 'show')->name('post.show');
//     Route::get('post/edit/{id}', 'edit')->name('post.edit');
//     Route::put('post/update/{id}', 'update')->name('post.update');
//     Route::get('post/delete/{id}', 'delete')->name('post.delete');
//     //learn hunter web
//     Route::get('hunter/contact', 'contact');
//     Route::post('hunter/store', 'hunterstore')->name('hunter.store');
// });

///////////////////////////////////////////////// edit update delete end ///////////////////////////////////////////////


///////////////////////////////////////////////// crud image start ////////////////////////////////////////////////////



///////////////////////////////////////////////// crud image end /////////////////////////////////////////////////////


///////////////////////////////////////////////// graph start ////////////////////////////////////////////////////

  Route::get('/chart', [ChartController::class, 'LinearChart'])->name('admin.linearChart');



/////////////////////////////////////////////////graph end /////////////////////////////////////////////////////



///////////////////////////////////////////////// graph start ////////////////////////////////////////////////////

Route::get('/cart', [ChartController::class, 'cartView'])->name('admin.cartView');



/////////////////////////////////////////////////graph end /////////////////////////////////////////////////////
