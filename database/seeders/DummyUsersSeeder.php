<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
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
        ]);

        // $userdata = [
        //     [
        //         'name' => 'Admin',
        //         'email' => 'admin@gmail.com',
        //         'phone' => '08123456789',
        //         'password' => bcrypt('admin123'),
        //         'role' => 'admin'
        //     ],
        //     [
        //         'name' => 'User',
        //         'email' => 'user@gmail.com',
        //         'phone' => '08123456789',
        //         'password' => bcrypt('user123'),
        //         'role' => 'user'
        //     ],
        // ];
        // foreach ($userdata as $key => $val) {
        //     User::create($val);
        // }
    }
}
