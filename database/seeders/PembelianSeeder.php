<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pembelian')->insert([
            [
                'id' => 1,
                'tanggal_pembelian' => '2024-09-21',
                'total_harga' => 123000,
                'users_id' => 2,
                'barang_id' => 1,
            ],
            [
                'id' => 2,
                'tanggal_pembelian' => '2024-09-22',
                'total_harga' => 110000,
                'users_id' => 3,
                'barang_id' => 2,
            ]
        ]);
    }
}
