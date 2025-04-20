<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Container\Attributes\Auth;

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/product', [ProductController::class, 'getProduct'])->name('products.index');
Route::get('/product/{product}/edit', [ProductController::class, 'editProduct'])->name('products.edit');
Route::put('/product/{product}/update', [ProductController::class, 'updateProduct'])->name('products.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroyProduct'])->name('products.destroy');

Route::post('/users/store',[UserController::class, 'store'])->name('users.store');
Route::post('/contacts/store',[ContactController::class, 'store'])->name('contacts.store');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');