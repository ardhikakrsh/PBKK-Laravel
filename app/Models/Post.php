<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
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
            'title' => 'Madu Calliandra',
            'price' => 'Rp110.000',
            'description' => 'Madu Pure Honey adalah madu murni yang dihasilkan oleh lebah dari nektar bunga-bunga liar. Madu ini memiliki rasa yang manis dan aroma yang khas.'
        ],

        [
            'id' => 3,
            'slug' => 'madu-mangga-3',
            'title' => 'Madu Mangga',
            'price' => 'Rp110.000',
            'description' => 'Madu Mangga adalah madu yang dihasilkan oleh lebah dari nektar bunga mangga. Madu ini memiliki rasa yang manis dan aroma yang khas.'
        ],
    ];
    }

    public static function find($slug){
        $posts = static::all();
        return Arr::first($posts, fn($post) => $post['slug'] == $slug);
    }
}
