<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/users', [UserController::class, 'index'])->name('user.page.index');
Route::get('user/{id}', [UserController::class, 'show' ])->name('user.page.show');