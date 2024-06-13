<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone' => '08123456789',
                'password' => bcrypt('admin123'),
                'role' => 'admin'
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'phone' => '08123456789',
                'password' => bcrypt('user123'),
                'role' => 'user'
            ],
        ];
        foreach ($userdata as $key => $val) {
            User::create($val);
        }
    }
}
