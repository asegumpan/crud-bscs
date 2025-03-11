<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [UserController::class, 'index'])->name('user.page.index');
Route::get('user/{id}', [UserController::class, 'show'])->name('user.page.show');
Route::get('user/edit', [UserController::class, 'edit'])->name('user.page.edit');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
