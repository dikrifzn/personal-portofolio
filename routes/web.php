<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/message', [HomeController::class, 'store'])->name('message');

Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog-detile');
Route::post('/blog/{id}/comment', [BlogController::class, 'store'])->name('blog-comment');
Route::post('/blog/{id}/like', [BlogController::class, 'like'])->name('blog-like');


