<?php

use App\Http\Controllers\BookController;
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

Route::get('/',[BookController::class,'viewdata']);


Route::get('/contact',[BookController::class,'contact']);

Route::get('/detail/{id}',[BookController::class,'detaildata']);

Route::get('/publisher',[BookController::class,'publisherview']);

Route::get('/detail_publisher/{id}',[BookController::class,'detailpublisher']);

Route::get('/category/{id}',[BookController::class,'categoryfilter']);









