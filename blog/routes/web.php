<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Home;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MembersController;

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
    return view('hello');
});

route::get('list',[MembersController::class,'show']);
route::post('add',[MembersController::class,'addData']);
route::get('delete/{id}',[MembersController::class,'delete']);
route::get('edit/{id}',[MembersController::class,'showData']);
route::post('edit',[MembersController::class,'update']);
Route::view('add','addmembers');
//Route::view("list","list");
route::get("Users/{user}",[Users::class,'index']);
route::get("Users",[UserController::class,'index']);
Route::view("hello","hello");
Route::view("about","about");
 Route::post("main",[Home::class,'getData']);
 Route::view("login","home")->name('test');
//route('name',array());
Route::view("home","mdlhome");
Route::view("user","mdluser");
Route::view("noaccess","noaccess");
Route::view("upload","upload");
Route::post("upload",[UploadController::class,'index']);
Route::group(['middleware'=>['protectedPage']],function(){
    Route::view("home","mdlhome");
});