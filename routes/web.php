<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
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
Route::resource('authors', AuthorController::class);
Route::get('/', [AuthorController::class,'index'] )->name('index');
Route::get('/index', [AuthorController::class,'index'] )->name('index');
Route::get('/location', [AuthorController::class,'location'] )->name('location');
Route::get('/create', [AuthorController::class,'create'] )->name('create');
Route::post('/form',[AuthorController::class,'store'])->name('form');
Route::get('edit/{id}',[AuthorController::class,'edit'])->name('edit');
Route::put('/update/{id}',[AuthorController::class,'update'])->name('update');
Route::post('changeStatus', [AuthorController::class,'changeStatus'])->name('changeStatus');