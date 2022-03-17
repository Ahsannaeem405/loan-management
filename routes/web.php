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


    //users
    Route::get('/user',[\App\Http\Controllers\AdminController::class,'user']);
    Route::get('/user/delete/{id}',[\App\Http\Controllers\AdminController::class,'userDelete']);

    //laon
    Route::get('/loan',[\App\Http\Controllers\AdminController::class,'loan']);
    Route::get('/loan/delete/{id}',[\App\Http\Controllers\AdminController::class,'loanDelete']);
    Route::get('/loan/detail/{id}',[\App\Http\Controllers\AdminController::class,'loanDetail']);


    //companies
    Route::get('/companies',[\App\Http\Controllers\AdminController::class,'companies']);
    Route::post('/add/company',[\App\Http\Controllers\AdminController::class,'Addcompanies']);
    Route::get('company/delete/{id}',[\App\Http\Controllers\AdminController::class,'CompanyDelete']);
    Route::post('update/company/{id}',[\App\Http\Controllers\AdminController::class,'CompanyUpdate']);

    //profile
    Route::get('/myprofile',[\App\Http\Controllers\AdminController::class,'myprofile']);
    Route::post('/profile/update',[\App\Http\Controllers\AdminController::class,'myprofileUpdate']);
    Route::post('/password/update',[\App\Http\Controllers\AdminController::class,'passwordUpdate']);

});


Route::prefix('user')->middleware(['auth','user'])->group(function () {
    Route::get('/index',[\App\Http\Controllers\UserController::class,'dashboard']);

    //loan
    Route::get('/upload',[\App\Http\Controllers\UserController::class,'upload']);
    Route::post('/upload/loan',[\App\Http\Controllers\UserController::class,'uploadLoan']);

    Route::get('/status',[\App\Http\Controllers\UserController::class,'status']);
    Route::get('/report',[\App\Http\Controllers\UserController::class,'report']);


    Route::get('/history',[\App\Http\Controllers\UserController::class,'history']);

    //refrel
    Route::get('/refrel',[\App\Http\Controllers\UserController::class,'refrel']);
    //profile
    Route::get('/myprofile',[\App\Http\Controllers\UserController::class,'myprofile']);
    Route::post('/profile/update',[\App\Http\Controllers\AdminController::class,'myprofileUpdate']);
    Route::post('/password/update',[\App\Http\Controllers\AdminController::class,'passwordUpdate']);
});

Route::get('logout',function (){
    Auth::logout();
    return redirect('/');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
