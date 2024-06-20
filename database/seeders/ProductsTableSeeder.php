<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Product A',
                'product_description' => 'Description for Product A',
                'product_price' => 50000,
                'product_image' => 'product_a.jpg',
                'product_categories' => 'Kemeja',
                'quantity' => 12,
                'ornament_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Product B',
                'product_description' => 'Description for Product B',
                'product_price' => 60000,
                'product_image' => 'product_b.jpg',
                'product_categories' => 'Celana',
                'quantity' => 12,
                'ornament_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Product C',
                'product_description' => 'Description for Product C',
                'product_price' => 70000,
                'product_image' => 'product_c.jpg',
                'product_categories' => 'Seragam',
                'quantity' => 12,
                'ornament_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Product D',
                'product_description' => 'Description for Product D',
                'product_price' => 80000,
                'product_image' => 'product_d.jpg',
                'product_categories' => 'Kemeja',
                'quantity' => 12,
                'ornament_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Product E',
                'product_description' => 'Description for Product E',
                'product_price' => 90000,
                'product_image' => 'product_e.jpg',
                'product_categories' => 'Celana',
                'quantity' => 12,
                'ornament_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Product F',
                'product_description' => 'Description for Product F',
                'product_price' => 100000,
                'product_image' => 'product_f.jpg',
                'product_categories' => 'Seragam',
                'quantity' => 12,
                'ornament_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Product G',
                'product_description' => 'Description for Product G',
                'product_price' => 110000,
                'product_image' => 'product_g.jpg',
                'product_categories' => 'Kemeja',
                'quantity' => 12,
                'ornament_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Product H',
                'product_description' => 'Description for Product H',
                'product_price' => 120000,
                'product_image' => 'product_h.jpg',
                'product_categories' => 'Celana',
                'quantity' => 12,
                'ornament_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Product I',
                'product_description' => 'Description for Product I',
                'product_price' => 130000,
                'product_image' => 'product_i.jpg',
                'product_categories' => 'Seragam',
                'quantity' => 12,
                'ornament_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_name' => 'Product J',
                'product_description' => 'Description for Product J',
                'product_price' => 140000,
                'product_image' => 'product_j.jpg',
                'product_categories' => 'Kemeja',
                'quantity' => 12,
                'ornament_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
