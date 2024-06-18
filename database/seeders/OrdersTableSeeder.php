<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        $orders = [];
        for ($i = 1; $i <= 20; $i++) {
            $orders[] = [
                'customer_id' => rand(1, 10),
                'product_id' => rand(1, 10),
                'order_date' => now(),
                'order_estimation_date' => now()->addDays(rand(1, 14)),
                'total_price' => rand(50000, 150000),
                'payment_id' => rand(1, 4),
                'quantity' => rand(1, 5),
                'order_status' => ['Pending', 'On Production', 'Completed'][rand(0, 2)],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('orders')->insert($orders);
    }
}
