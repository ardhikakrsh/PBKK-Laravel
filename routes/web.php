<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;




Route::get('/', [DashboardController::class, 'index']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/posts', [DashboardController::class, 'about']);
Route::get('/contact', [DashboardController::class, 'contact']);
Route::get('/review', [DashboardController::class, 'review']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'signIn'])->name('login');
    Route::post('/login', [AuthController::class, 'signInStore']);
    Route::get('/register', [AuthController::class, 'signUp'])->name('register');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'admin']);
    // Route::get('/', [DashboardController::class, 'user']);
});


