<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

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



//Route::resource('user', 'UserController');
/*
Route::prefix('user')->group(function(){
    Route::get('/',[UserController::class,'index'])->name('index');
    Route::get('create',[UserController::class,'create'])->name('create');
    Route::post('create',[UserController::class,'store'])->name('store-test');
});
*/
Route::prefix('admin')->group(function(){
    Route::resource('user','UserController');
    Route::resource('role','RoleController');
  //  Route::resource('create','UserController');
});
/*
Route::prefix('role')->group(function(){
    Route::get('/',[RoleController::class,'index']);
});
*/