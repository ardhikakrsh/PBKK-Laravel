<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['title' => 'Welcome']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Supremadu', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/penciptas/{user}', function (User $user){
    return view('posts', ['title' => 'Made by ' . $user->name, 'posts' => $user->posts]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Here to order']);
});

Route::get('/product', function () {
    return view('product', ['title' => 'Product']);
});