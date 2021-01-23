<?php

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

use App\Http\Controllers\adminController;
use App\Http\Controllers\VisiteurController;

//Route visiteur
Route::get('/', [VisiteurController::class, 'index']);

//Route admin 
Route::get('/admin', [adminController::class, 'index']);


