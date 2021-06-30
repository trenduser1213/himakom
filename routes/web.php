<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminMisiController;
use App\Http\Controllers\AdminVisiController;


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

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/admin/article',[ArticleController::class,'index'])->name('article.index');
    Route::get('/admin/article/create',[ArticleController::class,'create'])->name('article.create');
    Route::post('/admin/article',[ArticleController::class,'store'])->name('article.store');
    Route::get('/admin/article/{article}',[ArticleController::class,'show'])->name('article.show');
    Route::get('/admin/article/{article}/edit',[ArticleController::class,'edit'])->name('article.edit');
    Route::put('/admin/article/{article}',[ArticleController::class,'update'])->name('article.update');
    Route::get('/admin/article/delete/{article}',[ArticleController::class,'destroy'])->name('article.delete');
    Route::get('/admin/Misi',[AdminMisiController::class,'index'])->name('misi.index');
    Route::get('/admin/Misi/create',[AdminMisiController::class,'create'])->name('misi.create'); 
    Route::post('/admin/Misi',[AdminMisiController::class,'store'])->name('misi.store');
    Route::get('/admin/Misi/{misi}/edit',[AdminMisiController::class,'edit'])->name('misi.edit');
    Route::put('/admin/Misi/{misi}',[AdminMisiController::class,'update'])->name('misi.update');
    Route::get('/admin/visi',[AdminVisiController::class,'index'])->name('visi.index');
    Route::get('/admin/visi/create',[AdminVisiController::class,'create'])->name('visi.create'); 
    Route::post('/admin/visi',[AdminVisiController::class,'store'])->name('visi.store');
    Route::get('/admin/visi/{visi}/edit',[AdminVisiController::class,'edit'])->name('visi.edit');
    Route::put('/admin/visi/{visi}',[AdminVisiController::class,'update'])->name('visi.update');
    Route::get('/admin/visi/delete/{visi}',[AdminVisiController::class,'destroy'])->name('visi.delete');
});