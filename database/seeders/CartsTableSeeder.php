<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('carts')->insert([
            [
                'customer_id' => 1,
                'product_id' => 1,
                'quantity' => 2,
                'price' => 50000,
                'description' => 'Customer 1 Product 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2,
                'product_id' => 2,
                'quantity' => 1,
                'price' => 60000,
                'description' => 'Customer 2 Product 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 3,
                'product_id' => 3,
                'quantity' => 3,
                'price' => 70000,
                'description' => 'Customer 3 Product 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 4,
                'product_id' => 4,
                'quantity' => 4,
                'price' => 80000,
                'description' => 'Customer 4 Product 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 5,
                'product_id' => 5,
                'quantity' => 5,
                'price' => 90000,
                'description' => 'Customer 5 Product 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
