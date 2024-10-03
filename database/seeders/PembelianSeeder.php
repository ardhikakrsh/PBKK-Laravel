<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'user_id' => 2,
                'barang_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'tanggal_pembelian' => '2024-09-22',
                'total_harga' => 110000,
                'user_id' => 3,
                'barang_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'tanggal_pembelian' => '2024-09-24',
                'total_harga' => 110000,
                'user_id' => 2,
                'barang_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'tanggal_pembelian' => '2024-09-24',
                'total_harga' => 123000,
                'user_id' => 4,
                'barang_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'tanggal_pembelian' => '2024-09-25',
                'total_harga' => 123000,
                'user_id' => 5,
                'barang_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'tanggal_pembelian' => '2024-09-26',
                'total_harga' => 110000,
                'user_id' => 5,
                'barang_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
