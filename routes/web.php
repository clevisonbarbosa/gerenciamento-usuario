<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginProcess'])->name('login.process');
Route::get('/logout', [LoginController::class, 'destroy'])->name('login.destroy');
Route::get('/create-user-login', [LoginController::class, 'create'])->name('login.create-user');
Route::post('/store-user-login', [LoginController::class, 'store'])->name('login.store-user');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/index-user', [UserController::class, 'index'])->name('user.index');
    Route::get('/create-user', [UserController::class, 'create'])->name('user.create');
    Route::post('/store-user', [UserController::class, 'store'])->name('user.store');
    Route::get('/show-user/{user}', [UserController::class, 'show'])->name('user.show');
    Route::get('/edit-user/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/update-user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/destroy-user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
});
