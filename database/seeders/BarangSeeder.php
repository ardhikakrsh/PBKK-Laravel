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
                'ukuran' => 360,
                'deskripsi' => 'Madu Calliandra adalah madu yang dihasilkan oleh lebah dari nektar bunga calliandra. Madu ini memiliki rasa yang manis dan aroma yang khas.',
                'foto' => 'calliandra.jpg'
            ],
            [
                'id' => 2,
                'nama' => 'Madu Pure Honey',
                'harga' => 110000,
                'ukuran' => 360,
                'deskripsi' => 'Madu Pure Honey adalah madu murni yang dihasilkan oleh lebah dari nektar bunga-bunga liar. Madu ini memiliki rasa yang manis dan aroma yang khas.',
                'foto' => 'pure.jpg'
            ],
            [
                'id' => 3,
                'nama' => 'Madu Mangga',
                'harga' => 110000,
                'ukuran' => 360,
                'deskripsi' => 'Madu Mangga adalah madu yang dihasilkan oleh lebah dari nektar bunga mangga. Madu ini memiliki rasa yang manis dan aroma yang khas.',
                'foto' => 'mangga.jpg'
            ],
            [
                'id' => 4,
                'nama' => 'Madu Calliandra',
                'harga' => 270000,
                'ukuran' => 800,
                'deskripsi' => 'Madu Calliandra adalah madu yang dihasilkan oleh lebah dari nektar bunga calliandra. Madu ini memiliki rasa yang manis dan aroma yang khas.',
                'foto' => 'calliandra.jpg'
            ],
            [
                'id' => 5,
                'nama' => 'Madu Pure Honey',
                'harga' => 190000,
                'ukuran' => 800,
                'deskripsi' => 'Madu Pure Honey adalah madu murni yang dihasilkan oleh lebah dari nektar bunga-bunga liar. Madu ini memiliki rasa yang manis dan aroma yang khas.',
                'foto' => 'pure.jpg'
            ],
            [
                'id' => 6,
                'nama' => 'Madu Mangga',
                'harga' => 190000,
                'ukuran' => 800,
                'deskripsi' => 'Madu Mangga adalah madu yang dihasilkan oleh lebah dari nektar bunga mangga. Madu ini memiliki rasa yang manis dan aroma yang khas.',
                'foto' => 'mangga.jpg'
            ],
            [
                'id' => 7,
                'nama' => 'Bundle Madu Calliandra',
                'harga' => 350000,
                'ukuran' => 1160,
                'deskripsi' => 'Madu Calliandra adalah madu yang dihasilkan oleh lebah dari nektar bunga calliandra. Madu ini memiliki rasa yang manis dan aroma yang khas.',
                'foto' => 'calliandra.jpg'
            ],
            [
                'id' => 8,
                'nama' => 'Bundle Madu Pure Honey',
                'harga' => 300000,
                'ukuran' => 1160,
                'deskripsi' => 'Madu Pure Honey adalah madu murni yang dihasilkan oleh lebah dari nektar bunga-bunga liar. Madu ini memiliki rasa yang manis dan aroma yang khas.',
                'foto' => 'pure.jpg'
            ],
            [
                'id' => 9,
                'nama' => 'Bundle Madu Mangga',
                'harga' => 300000,
                'ukuran' => 1160,
                'deskripsi' => 'Madu Mangga adalah madu yang dihasilkan oleh lebah dari nektar bunga mangga. Madu ini memiliki rasa yang manis dan aroma yang khas.',
                'foto' => 'mangga.jpg'
            ],
        ]);
    }
}
