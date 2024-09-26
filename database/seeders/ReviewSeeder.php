<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('review')->insert([
            [
                'id' => 1,
                'pesan_review' => 'Madu sangat enak!',
                'users_id' => 2,
                'barang_id' => 1
            ],
            [
                'id' => 2,
                'pesan_review' => 'Asli dari sarangnya langsung.',
                'users_id' => 3,
                'barang_id' => 2
            ]
        ]);
    }
}
