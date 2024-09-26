<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;




Route::get('/', [DashboardController::class, 'home']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'signIn']);
});



Route::get('/product', [AuthController::class, 'product']);
Route::get('/posts', [AuthController::class, 'about']);
Route::get('/contact', [AuthController::class, 'contact']);