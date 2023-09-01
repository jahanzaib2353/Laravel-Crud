<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/index', [UserController::class, 'index']);
Route::get('/list', [UserController::class, 'list']);
Route::post('/add', [UserController::class, 'add']);
Route::view('add','add');
Route::get('/delete/{id}', [UserController::class, 'delete']);
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::post('/edit/{id}', [UserController::class, 'edit']);
Route::post('edit', [UserController::class, 'update']);