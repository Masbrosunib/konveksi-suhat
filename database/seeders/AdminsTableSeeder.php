<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Admin One',
                'email' => 'admin1@example.com',
                'phone' => '081234567890',
                'address' => '123 Admin St, Jakarta',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Admin Two',
                'email' => 'admin2@example.com',
                'phone' => '081234567891',
                'address' => '124 Admin St, Jakarta',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('admins')->insert($data);
    }
}
