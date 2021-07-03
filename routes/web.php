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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/',[\App\Http\Controllers\CarController::class,'index']);


//Route::post('/create', [
//    "uses" => "CarController@create",
//    "as" => "cars.create"
//]);


Route::post('/create',[\App\Http\Controllers\CarController::class,'create'])->name('create');

Route::delete('{id}/delete',[\App\Http\Controllers\CarController::class,'delete'])->name('delete');
