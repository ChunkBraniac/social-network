<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Main routes
Route::get('/', [UserController::class, 'home'])->name('home');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');

Route::post('/register', [UserController::class, 'create_account'])->name('create_account');
Route::post('/login', [UserController::class, 'authenticate'])->name('authenticate');