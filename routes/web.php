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



Route::get('/',[\App\Http\Controllers\CarController::class,'index']);

Route::get('/add',[\App\Http\Controllers\CarController::class,'add_car'])->middleware('auth');

Route::get('/register',[\App\Http\Controllers\UserController::class,'register']);

Route::post('/register/user',[\App\Http\Controllers\UserController::class,'register_user'])->name('register_user');


Route::get('/login',[\App\Http\Controllers\UserController::class,'login'])->name('login');

Route::post('/login/user',[\App\Http\Controllers\UserController::class,'login_user'])->name('login_user');

Route::post('/logout',[\App\Http\Controllers\UserController::class,'log_out'])->name('log_out');


Route::post('/create',[\App\Http\Controllers\CarController::class,'create'])->name('create');

Route::delete('{id}/delete',[\App\Http\Controllers\CarController::class,'delete'])->name('delete');

Route::get('{id}/edit',[\App\Http\Controllers\CarController::class,'edit'])->name('edit');
