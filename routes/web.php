<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   return view("welcome");
});


Route::View("contact", 'contact');
// Route::View("contact", 'contact')
// Route::get("/user", [User ::class,'index']);

// Route::get('/user/{name}' ,function ($name){
//     return view("users", ['name' =>$name]);
// });
// Route::get("user/{name}",[UsersController::class,'loadView']);
Route::get('user',[UsersController::class,'loadView'] );

