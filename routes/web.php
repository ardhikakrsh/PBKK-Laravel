<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Welcome']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Supremadu', 'posts' => [
        [
            'id' => 1,
            'slug' => 'madu-calliandra-1',
            'title' => 'Madu Calliandra',
            'price' => 'Rp123.000',
            'description' => 'Madu Calliandra adalah madu yang dihasilkan oleh lebah dari nektar bunga calliandra. Madu ini memiliki rasa yang manis dan aroma yang khas.'
        ],
        [
            'id' => 2,
            'slug' => 'madu-pure-honey-2',
            'title' => 'Madu Pure Honey',
            'price' => 'Rp110.000',
            'description' => 'Madu Pure Honey adalah madu murni yang dihasilkan oleh lebah dari nektar bunga-bunga liar. Madu ini memiliki rasa yang manis dan aroma yang khas.'
        ],
        [
            'id' => 3,
            'slug' => 'madu-mangga-3',
            'title' => 'Madu Mangga',
            'price' => 'Rp110.000',
            'description' => 'Madu Mangga adalah madu yang dihasilkan oleh lebah dari nektar bunga mangga. Madu ini memiliki rasa yang manis dan aroma yang khas.'
        ]
    ]]);
});

Route::get('posts/{slug}', function ($slug){
    $posts = [
        [
            'id' => 1,
            'slug'=> 'madu-calliandra-1',
            'title' => 'Madu Calliandra',
            'price' => 'Rp123.000',
            'description' => 'Madu Calliandra adalah madu yang dihasilkan oleh lebah dari nektar bunga calliandra. Madu ini memiliki rasa yang manis dan aroma yang khas.'
        ],
        [
            'id' => 2,
            'slug' => 'madu-pure-honey-2',
            'title' => 'Madu Pure Honey',
            'price' => 'Rp110.000',
            'description' => 'Madu Pure Honey adalah madu murni yang dihasilkan oleh lebah dari nektar bunga-bunga liar. Madu ini memiliki rasa yang manis dan aroma yang khas.'
        ],
        [
            'id' => 3,
            'slug' => 'madu-mangga-3',
            'title' => 'Madu Mangga',
            'price' => 'Rp110.000',
            'description' => 'Madu Mangga adalah madu yang dihasilkan oleh lebah dari nektar bunga mangga. Madu ini memiliki rasa yang manis dan aroma yang khas.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Here to order']);
});

Route::get('/product', function () {
    return view('product', ['title' => 'Product']);
});