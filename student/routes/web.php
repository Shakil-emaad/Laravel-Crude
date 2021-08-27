<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;

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

route::post('add',[Register::class,'addData']);
Route::view('add','register_form');
route::get('list',[Register::class,'display_data']);
route::get('edit/{id}',[Register::class,'showData']);
route::post('edit',[Register::class,'update']);
route::get('delete/{id}',[Register::class,'delete']);
// Route::view('list','list');