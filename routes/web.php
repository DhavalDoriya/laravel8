<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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
    return view('welcome',['test' => '']);
})->name('allroute');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Auth::routes();

Route::get('/one',[TestController::class , 'one']);

Route::get('/url',[TestController::class , 'index']);

Route::post('/', [TestController::class , 'savefile'])->name('fileupload');

Route::resource('/user', UserController::class);


//user curd




//DB Facades
Route::get('/db/{page?}',  [DatabaseController::class, 'show'])->name('products');

Route::get('/db/sort/{sortby}',  [DatabaseController::class, 'sortby'])->name('sort');

Route::get('/search',  [DatabaseController::class, 'search'])->name('search');


Route::get('/dbtest',  [DatabaseController::class, 'dbtest'])->name('dbtest');


Route::get('/saveuser',  [DatabaseController::class, 'saveuser'])->name('saveuser');

// UserController

// Route::get('/users' , [ UserController::class ,'user']);






// Route::view('/', 'welcome');
// Route::view('/welcome', 'welcome');

// <------------------------------------ Ex1 -------------------------> 

// 1. Check your application environment
Route::get('/q1', function () {
    return env('APP_ENV');
});

// 2. Get value of “url” variable from “config/app.php” file.
Route::get('/q2', function () {
    return config('app.url');
});

//3.
Route::get('/q3', function () {
    config(['app.timezone' => 'IST']);
    return config('app.timezone');
});


// 4.
// php artisan down --secret="secretkey"

// 5. 
// php artisan down --redirect=https://webcodegenie.com/


// 6. Write a command for disable maintenance mode.
// php artisan up

// 7. Create below routes methods and give name to all routes
// a. Using match method
Route::match(['get', 'post'], '/q7a', function () {
    return view('welcome');
});

// b. Using view method
Route::view('/q7b', 'welcome');

// c. Using any method
Route::any('/q7c', function () {
    return view('welcome');
});

// d. Using redirect route method
Route::redirect('/welcome', '/user');

//e.Using required parameter which accept id in numeric value only and return that id value;
Route::get('/q7e/{id}', function ($id) {
    return $id;
})->where('id', '[0-9]+');

//f
Route::get('/q7f/{country?}', function ($country = 'india') {
    return $country;
})->whereAlpha('country');

// 8. Write a command to clear your route cache
// php artisan route:clear

// 9. Create one controller which returns one view file with parameter value.
Route::get('/q9/{key}',  [TestController::class, 'show']);


// 10A.
//  For middleware 
// Route::get('/user', function () {
//     return view('user', ['fname' => 'Dhaval', 'lname' => 'Doriya', 'email' => 'Dhaval@mail.com', 'age' => '12']);
// })->name('user');

Route::get('/vaccine',  [TestController::class, 'vaccine'])->middleware('check.age')->name('vaccine');


Route::get('/restricted', function () {
    return view('restricted');
})->name('restricted');

//11
// php artisan make:controller VaccineController --resource
Route::resource('/vaccines',  VaccineController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
