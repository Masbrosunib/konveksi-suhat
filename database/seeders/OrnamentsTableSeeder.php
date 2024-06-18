<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrnamentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('ornaments')->insert([
            [
                'ornament_name' => 'Patch',
                'ornament_description' => 'Description for Ornament A',
                'ornament_price' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ornament_name' => 'Button',
                'ornament_description' => 'Description for Ornament B',
                'ornament_price' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ornament_name' => 'Zipper',
                'ornament_description' => 'Description for Ornament C',
                'ornament_price' => 2500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ornament_name' => 'Sablon',
                'ornament_description' => 'Description for Ornament D',
                'ornament_price' => 6000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ornament_name' => 'Embroider',
                'ornament_description' => 'Description for Ornament E',
                'ornament_price' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
