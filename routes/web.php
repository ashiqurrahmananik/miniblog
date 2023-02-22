<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Dashboard;


Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[Dashboard::class, 'show_post'])->name('dashboard');
    Route::get('/post',[PostController::class, 'index'])->name('post_index');
    Route::post('/post',[PostController::class, 'create'])->name('post_create');
    Route::get('/post/edit/{id}',[PostController::class, 'edit'])->name('post_edit');
    Route::post('/post/edit/{id}',[PostController::class, 'update'])->name('post_update');
    Route::get('/post/delete/{id}',[PostController::class, 'destroy'])->name('destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
