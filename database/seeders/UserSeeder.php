<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Enums\RolesType;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'id' => 1,
                'nama' => 'Nadhif Ikmal',
                'email' => 'nadhif@madu.com',
                'password' => hash::make('nadhif123'),
                'role' => RolesType::admin,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'nama' => 'Ardhika Krishna',
                'email' => 'dhika@madu.com',
                'password' => hash::make('dhika123'),
                'role' => RolesType::user,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'nama' => 'Nabhyla Niagara',
                'email' => 'nabhyy@madu.com',
                'password' => hash::make('nabhyy123'),
                'role' => RolesType::user,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'nama' => 'Fayza Aqila',
                'email' => 'ara@madu.com',
                'password' => hash::make('ara123'),
                'role' => RolesType::user,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'nama' => 'Muhammad Iqbal Ramadhan',
                'email' => 'iqbal@madu.com',
                'password' => hash::make('iqbal123'),
                'role' => RolesType::user,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
