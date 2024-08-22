<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cats',[\App\Http\Controllers\CatController::class,'index']);
Route::get('cats/show/{id}',[\App\Http\Controllers\CatController::class,'show']);

Route::get('/cats/create',[\App\Http\Controllers\CatController::class,'create'])->middleware('auth');
Route::post('/cats/store',[\App\Http\Controllers\CatController::class,'store'])->middleware('auth');

Route::get('/cats/edit/{id}',[\App\Http\Controllers\CatController::class,'edit'])->middleware('auth');
Route::post('/cats/update/{id}',[\App\Http\Controllers\CatController::class,'update'])->middleware('auth');

Route::get('/cats/delete/{id}',[\App\Http\Controllers\CatController::class,'delete'])->middleware('auth');

Route::get('cats/latest/{num}',[\App\Http\Controllers\CatController::class,'latest']);

Route::get('cats/search',[\App\Http\Controllers\CatController::class,'search']);

Route::get('/books',[\App\Http\Controllers\BookController::class,'index']);
Route::get('/books/show',[\App\Http\Controllers\BookController::class,'show']);

Route::get('/register',[\App\Http\Controllers\AuthController::class,'registerForm'])->middleware('guest');
Route::post('/register',[\App\Http\Controllers\AuthController::class,'register'])->middleware('guest');

Route::get('/login',[\App\Http\Controllers\AuthController::class,'loginForm'])->middleware('guest');
Route::post('/login',[\App\Http\Controllers\AuthController::class,'login'])->middleware('guest');

Route::get('logout',[\App\Http\Controllers\AuthController::class,'logout'])->middleware('auth');

Route::get('users',[\App\Http\Controllers\UserController::class,'index'])->middleware(['auth','is-admin']);

