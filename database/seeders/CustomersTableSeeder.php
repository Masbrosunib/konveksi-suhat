<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        $customers = [];
        for ($i = 1; $i <= 10; $i++) {
            $customers[] = [
                'nama' => 'Customer ' . $i,
                'email' => 'customer' . $i . '@example.com',
                'phone' => '08123456789' . $i,
                'address' => '123 Customer St, Jakarta',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        foreach ($customers as $key => $value) {
            Customer::create($value);
        }
        // DB::table('customers')->insert($customers);
    }
}
