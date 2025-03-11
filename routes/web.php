<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
Route::get('/', function () {
    return view('welcome');
});

// <<<<<<< crud-delacruz/branch
// Route::resource('users', UserController::class);
// =======

Route::get('/users', [UserController::class, 'index'])->name('user.page.index');
Route::get('user/{id}', [UserController::class, 'show'])->name('user.page.show');
Route::get('user/edit', [UserController::class, 'edit'])->name('user.page.edit');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/index', [UserController::class, 'store'])->name('users.store');




// >>>>>>> main
