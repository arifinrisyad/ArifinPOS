<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\customercontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\UserController;


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
    return view('welcome');
})->middleware('auth'); 

Route::get('/', function () {
    return view('dashboard',[
        "title"=>"Dashboard"
    ]);
})->middleware('auth'); 

Route::resource('kategori',CategoryController::class)
->except('show','destroy','create')->middleware('auth'); 

Route::resource('pelanggan',customercontroller::class)->except('destroy')->middleware('auth'); 

Route::resource('produk',ProductController::class)->middleware('auth'); 

Route::resource('pengguna',UserController::class)->except('destroy','create','show','update','edit')->middleware('auth'); 

Route::get('login',[LoginController::class,'loginView'])->name('login'); 

Route::post('login',[LoginController::class,'authenticate']); 

Route::post('logout',[LoginController::class,'logout'])->middleware('auth');
