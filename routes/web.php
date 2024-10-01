<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store'); 
Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit'); 
Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update'); 
