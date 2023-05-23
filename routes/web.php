<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class , 'index']);

Route::get('dashboard' , function(){
    return view('layout.master');
});

Route::get('dashboard/book' , [BookController::class , 'index'])->name('book.index');

Route::resource('book', BookController::class);
Route::resource('category', CategoryController::class);
Route::resource('user', UserController::class);
