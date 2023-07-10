<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::delete('/posts/{id}', [PostController::class, 'delete'])->name('posts.delete');

Route::get('/categories/{id}/posts', [CategoryController::class, 'getPosts'])->name('categories.posts');

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

