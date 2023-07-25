<?php

use App\Http\Controllers\BlogPostController;

Route::get('/blog-posts', [BlogPostController::class, 'index'])->name('blog-posts.index');
Route::get('/blog-posts/create', [BlogPostController::class, 'create'])->name('blog-posts.create');
Route::post('/blog-posts', [BlogPostController::class, 'store'])->name('blog-posts.store');
Route::get('/blog-posts/{id}', [BlogPostController::class, 'show'])->name('blog-posts.show');
