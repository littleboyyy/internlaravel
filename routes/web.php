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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('user')->group(function(){
    Route::get('/',[UserController::class,'index'])->name('index');
    Route::get('create',[UserController::class,'create'])->name('create');
    Route::post('create',[UserController::class,'store'])->name('store-test');
});
//Route::get('/create',[UserController::class,'create'])->name('create');
//Route::post('/create',[UserController::class,'store'])->name('store-test');
/*
Route::post('/userss', function () {
    echo "day la dai tieng noi viet nam phat thanh tu ha noi thu do nuoc CHXHCN Viet Nam ";

})->name('testne');
*/
Route::prefix('role')->group(function(){
    Route::get('/',[RoleController::class,'index']);
});
