<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pembayaran')->insert([
            [
                'id' => 1,
                'metode_pembayaran' => 'Credit Card',
                'jumlah_pembayaran' => 123000,
                'bukti_pembayaran' => 'receipt001.jpg',
                'status_sewa' => 'berhasil',
                'pembelian_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'metode_pembayaran' => 'Bank Transfer',
                'jumlah_pembayaran' => 110000,
                'bukti_pembayaran' => 'receipt002.jpg',
                'status_sewa' => 'berhasil',
                'pembelian_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
