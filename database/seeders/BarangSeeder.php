<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'id' => 1,
                'nama' => 'Madu Calliandra',
                'harga' => 123000,
                'ukuran' => 330,
                'deskripsi' => 'Madu Calliandra adalah madu yang dihasilkan oleh lebah dari nektar bunga calliandra. Madu ini memiliki rasa yang manis dan aroma yang khas.',
                'foto' => 'calliandra.jpg'
            ],
            [
                'id' => 2,
                'nama' => 'Madu Pure Honey',
                'harga' => 110000,
                'ukuran' => 330,
                'deskripsi' => 'Madu Pure Honey adalah madu murni yang dihasilkan oleh lebah dari nektar bunga-bunga liar. Madu ini memiliki rasa yang manis dan aroma yang khas.',
                'foto' => 'pure.jpg'
            ],
            [
                'id' => 3,
                'nama' => 'Madu Mangga',
                'harga' => 110000,
                'ukuran' => 330,
                'deskripsi' => 'Madu Mangga adalah madu yang dihasilkan oleh lebah dari nektar bunga mangga. Madu ini memiliki rasa yang manis dan aroma yang khas.',
                'foto' => 'mangga.jpg'
            ]
        ]);
    }
}
