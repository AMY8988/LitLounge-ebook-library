<?php

use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Role;
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

Route::get('/', [HomeController::class , 'index'])->name('home');
Route::get('register' , [HomeController::class , 'register'])->name('register');
Route::post('registered' , [UserController::class , 'store'])->name('user.registered');
Route::get('login' , [HomeController::class , 'login'])->name('login');
Route::post('loginCheck' , [UserController::class , 'loginCheck'])->name('user.loginCheck');
Route::get('logout' , [UserController::class , 'logout'])->name('user.logout');

Route::get('dashboard' , function(){
    return view('dashboard.home');
})->name('dashboard')->middleware('isAdmin&Author');

Route::get('dashboard/book' , [BookController::class , 'index'])->name('book.index');

Route::middleware('isAdmin&Author')->prefix('dashboard')->group(function(){
    Route::resource('book', BookController::class);
    Route::resource('category', CategoryController::class)->middleware('isAdmin');
    Route::resource('user', UserController::class)->middleware('isAdmin');
    Route::resource('bookCategory' , BookCategoryController::class);
});
