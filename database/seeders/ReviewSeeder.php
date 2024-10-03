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
                'pesan_review' => 'mantapppp madunya sdh d terima josss banget,, madu asli ini beneran dan tempatnya juga usefull bgt klo dah habis bisa buat kecap dll d dapur,, semoga tambah sukses',
                'foto' => 'reviewmadu1.webp',
                'user_id' => 2,
                'barang_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'pesan_review' => 'ini pesanan ke 2 sy dan pemakaian ke 5 soal rasa ttp gak berbeda semenjak pemakaian pertama. packing super aman dan barang sesuai pesanan mantab pokoknya',
                'foto' => 'reviewmadu2.webp',
                'user_id' => 3,
                'barang_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'pesan_review' => 'madu nya enak banget, packing rapi dan aman, pengiriman cepat, terimakasih',
                'foto' => 'reviewmadu3.webp',
                'user_id' => 2,
                'barang_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'pesan_review' => 'Sesuai pesanan. Packing super sekali, balutan plastic buble tebal, sehingga botol madu tidak ada yg cacat. Rasa madu enak',
                'foto' => 'reviewmadu4.webp',
                'user_id' => 4,
                'barang_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'pesan_review' => 'packing: terjaga, walau tidak bisa dihindari yah pakai bbwrap berlapis. isi dalamnya sudah pakai paper wrap ramah lingkungan. top banget botol dan kardusnya. walau belum dicoba yah maunya. cepat pengiriman. mantap',
                'foto' => 'reviewmadu5.webp',
                'user_id' => 5,
                'barang_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
