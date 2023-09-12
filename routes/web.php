<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
    // welcome.php atau welcome.blade.php
});

Route::get('/login', [LoginController::class, 'borangLogin']);
Route::post('/login', [LoginController::class, 'checkLogin']);

Route::get('/dashboard', DashboardController::class)->name('name.dashboard'); // invokable function/method

// Route::resource('/users', UserController::class);
Route::get('/users', [UserController::class, 'index'])->name('users.index'); // perlu bagitau nama method
Route::get('/users/add', [UserController::class, 'create'])->name('users.create');
Route::post('/users/add', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::patch('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');


