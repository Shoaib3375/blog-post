<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;



Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/all', [BlogController::class, 'showBlogs'])->name('blog.all');
Route::get('/blogs/{id}', [BlogController::class, 'singleBlog'])->name('blog.single');

