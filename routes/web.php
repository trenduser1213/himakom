<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


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

Route::get('/', function () {
    return view('profile');
});

Route::view('/podcast','podcast');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/article',[ArticleController::class,'index'])->name('article.index');
Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');
Route::post('/article',[ArticleController::class,'store'])->name('article.store');
Route::get('/article/{article}',[ArticleController::class,'show'])->name('article.show');
Route::get('/article/{article}/edit',[ArticleController::class,'edit'])->name('article.edit');
Route::put('/article/{article}',[ArticleController::class,'update'])->name('article.update');
Route::get('/article/delete/{article}',[ArticleController::class,'destroy'])->name('article.delete');