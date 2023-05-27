<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        // Profile route logic
    })->name('profile');

    Route::get('/settings', function () {
        // Settings route logic
    })->name('settings');
});


Route::get('/', [HomeController::class, 'index']);

Auth::routes();
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegistrationController::class, 'create'])->name('register');
Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/products', ProductController::class);

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit']);

Route::resource('/posts', PostController::class);

Route::get('/welcome',[Controller::class,'index']);


// Route::redirect('/home', '/dashboard', 302);

