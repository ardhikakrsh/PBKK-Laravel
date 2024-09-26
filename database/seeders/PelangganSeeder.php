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
                'nomor_telepon' => '08123456789',
                'users_id' => 2
            ],
            [
                'id' => 2,
                'NIK' => '7233846273849384',
                'nomor_telepon' => '082736253463',
                'users_id' => 3
            ]
        ]);
    }
}
