<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::resource('posts', PostController::class);
});
