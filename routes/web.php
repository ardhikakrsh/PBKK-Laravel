<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Welcome']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Supremadu', 'posts' => Post::all()]);
});

Route::get('posts/{slug}', function ($post){
    $post = Post::find($slug);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Here to order']);
});

Route::get('/product', function () {
    return view('product', ['title' => 'Product']);
});