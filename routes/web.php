<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ResirvationController;

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


Auth::routes();

Route::get('/home', [BookController::class, 'index'])->name('book.home');
Route::get('/', [BookController::class, 'index'])->name('book.home');
Route::get('/showbook', [BookController::class , 'show'])->name('show.book');
Route::post('/showbook', [BookController::class , 'store'])->name('book.store');
Route::delete('/delete/{id}', [BookController::class , 'delete'])->name('delete.book');
Route::put('/edite/{book}', [BookController::class , 'update'])->name('edite.book');
route::get('/detail/{id}',[BookController::class , 'detail'] )->name('reserver.book');
route::post('/reservation',[ResirvationController::class , 'reserver'] )->name('make.reservation.book');