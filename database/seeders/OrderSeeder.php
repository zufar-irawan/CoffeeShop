<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $customers = DB::table('users')->where('role', 'c')->get();
        $products = DB::table('cfproduct')->get();
        $cities = ['Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta', 'Medan', 'Denpasar'];

        foreach ($customers as $customer) {
            // Random jumlah order per customer (1–3)
            $numOrders = rand(1, 3);

            for ($i = 0; $i < $numOrders; $i++) {
                $orderDetails = [];
                $totalPrice = 0;
                $numItems = rand(1, 4); // Jumlah item dalam satu order

                for ($j = 0; $j < $numItems; $j++) {
                    $product = $products->random();
                    $quantity = rand(1, 3);
                    $price = $product->Price;
                    $subtotal = $price * $quantity;

                    $orderDetails[] = [
                        'ProductID' => $product->ID,
                        'Quantity' => $quantity,
                        'Subtotal' => $subtotal,
                    ];

                    $totalPrice += $subtotal;
                }

                // Insert into cforders
                $orderID = DB::table('cforders')->insertGetId([
                    'CustomerID' => $customer->id,
                    'OrderDate' => now()->subDays(rand(0, 10)),
                    'TotalPrice' => $totalPrice,
                    'Payment' => ['Cash', 'E-Wallet'][rand(0, 1)],
                    'Address' => $cities[array_rand($cities)],
                    'Status' => "Selesai",
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                // Insert into cfordersdetail
                foreach ($orderDetails as $detail) {
                    DB::table('cfordersdetail')->insert([
                        'OrderID' => $orderID,
                        'ProductID' => $detail['ProductID'],
                        'Quantity' => $detail['Quantity'],
                        'Subtotal' => $detail['Subtotal'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
