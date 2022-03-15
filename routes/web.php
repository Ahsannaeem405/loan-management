<?php

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
return redirect('login');
});

Auth::routes();


Route::prefix('admin')->middleware(['auth','admin'])->group(function () {
    Route::get('/index',[\App\Http\Controllers\AdminController::class,'dashboard']);
    Route::get('/myprofile',[\App\Http\Controllers\AdminController::class,'myprofile']);
});


Route::prefix('user')->middleware(['auth','user'])->group(function () {
    Route::get('/index',[\App\Http\Controllers\UserController::class,'dashboard']);
    Route::get('/upload',[\App\Http\Controllers\UserController::class,'upload']);
    Route::get('/status',[\App\Http\Controllers\UserController::class,'status']);
    Route::get('/report',[\App\Http\Controllers\UserController::class,'report']);
    Route::get('/myprofile',[\App\Http\Controllers\UserController::class,'myprofile']);
    Route::get('/refrel',[\App\Http\Controllers\UserController::class,'refrel']);
    Route::get('/history',[\App\Http\Controllers\UserController::class,'history']);
});

Route::get('logout',function (){
    Auth::logout();
    return redirect('/');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
