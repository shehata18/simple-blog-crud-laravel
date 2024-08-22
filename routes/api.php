<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/cats',[\App\Http\Controllers\ApiCatController::class,'index']);
Route::get('/cats/{id}',[\App\Http\Controllers\ApiCatController::class,'show']);
Route::post('/cats/store',[\App\Http\Controllers\ApiCatController::class,'store']);
Route::get('/cats/update/{id}',[\App\Http\Controllers\ApiCatController::class,'update']);
Route::get('/cats/delete/{id}',[\App\Http\Controllers\ApiCatController::class,'delete']);

Route::get('/books',[\App\Http\Controllers\ApiBookController::class,'index']);
Route::get('/books/{id}',[\App\Http\Controllers\ApiBookController::class,'show']);


Route::post('/users/register',[\App\Http\Controllers\ApiAuthController::class,'register']);


