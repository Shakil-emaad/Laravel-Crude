<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\MainController;

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


Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('logout');
Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');

    Route::get('/admin/dashboard',[MainController::class, 'dashboard']);
    Route::get('/admin/settings',[MainController::class,'settings']);
    Route::get('/admin/profile',[MainController::class,'profile']);
    Route::get('/admin/staff',[MainController::class,'staff']);
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
