<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthManager::class, 'login'])->name('login');

Route::post('login', [AuthManager::class, 'loginpost'])->name('login.post');
