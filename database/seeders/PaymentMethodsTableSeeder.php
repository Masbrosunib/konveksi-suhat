<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('payment_methods')->insert([
            [
                'payment_name' => 'Credit Card',
                'payment_value' => '12345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'payment_name' => 'Bank Mandiri',
                'payment_value' => '12345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'payment_name' => 'PayPal',
                'payment_value' => '12345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'payment_name' => 'Cash on Delivery',
                'payment_value' => 'COD',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
