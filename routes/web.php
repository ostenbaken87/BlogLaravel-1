<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\MainController::class, 'index'])->name('index');
});
