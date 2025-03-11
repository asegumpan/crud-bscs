<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);