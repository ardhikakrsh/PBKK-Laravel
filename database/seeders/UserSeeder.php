<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'nama' => 'Nadhif Ikmal',
                'email' => 'nadhif@madu.com',
                'password' => hash::make('nadhif123'),
                'role' => RolesType::ADMIN,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'nama' => 'Ardhika Krishna',
                'email' => 'dhika@madu.com',
                'password' => hash::make('dhika123'),
                'role' => RolessType::USER,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'nama' => 'Nabhyla Niagara',
                'email' => 'nabhyy@madu.com',
                'password' => hash::make('nabhyy123'),
                'role' => RolesType::USER,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
