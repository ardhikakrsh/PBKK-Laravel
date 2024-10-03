<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelanggan')->insert([
            [
                'id' => 1,
                'NIK' => '9284627362718373',
                'nomor_telepon' => '081935116638',
                'user_id' => 2
            ],
            [
                'id' => 2,
                'NIK' => '7233846273849384',
                'nomor_telepon' => '082234122306',
                'user_id' => 3
            ],
            [
                'id' => 3,
                'NIK' => '8273647283748293',
                'nomor_telepon' => '081286958787',
                'user_id' => 4
            ],
            [
                'id' => 4,
                'NIK' => '8273647283748293',
                'nomor_telepon' => '0083879776551',
                'user_id' => 5
            ]
        ]);
    }
}
