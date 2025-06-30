<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CfProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cfproducts')->insert([
            // Hot Drinks (Minuman Panas)
            [
                'ProductName' => 'Espresso',
                'Category'    => '1',
                'Price'       => '25000',
                'Description' => 'Kopi espresso pekat dengan crema halus, memberikan rasa kuat dan aroma kaya, sempurna untuk memulai hari Anda.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'ProductName' => 'Cappuccino',
                'Category'    => '1',
                'Price'       => '30000',
                'Description' => 'Perpaduan sempurna antara espresso, susu panas, dan busa lembut, menghadirkan keseimbangan rasa yang lembut dan hangat.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

            // Cold Drinks (Minuman Dingin)
            [
                'ProductName' => 'Iced Coffee',
                'Category'    => '2',
                'Price'       => '28000',
                'Description' => 'Kopi dingin disajikan dengan es batu dan sirup ringan, menyegarkan dahaga dengan sentuhan kafein.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'ProductName' => 'Iced Latte',
                'Category'    => '2',
                'Price'       => '32000',
                'Description' => 'Espresso lembut dicampur susu dingin dan es, memberikan sensasi creamy yang menyegarkan.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

            // Juices (Jus)
            [
                'ProductName' => 'Orange Juice',
                'Category'    => '3',
                'Price'       => '20000',
                'Description' => 'Jus jeruk segar perasan sendiri, kaya vitamin C dan aroma buah alami.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'ProductName' => 'Apple Juice',
                'Category'    => '3',
                'Price'       => '22000',
                'Description' => 'Jus apel manis alami, menyegarkan dengan rasa buah yang renyah dan menyehatkan.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

            // Food (Makanan)
            [
                'ProductName' => 'Sandwich',
                'Category'    => '4',
                'Price'       => '35000',
                'Description' => 'Roti lapis isi sayuran segar, keju leleh, dan daging pilihan, cocok untuk makan siang praktis.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'ProductName' => 'Pasta',
                'Category'    => '4',
                'Price'       => '40000',
                'Description' => 'Pasta al dente dengan saus krim atau tomat, dipadu topping pilihan untuk cita rasa Italia otentik.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],

            // Desserts (Makanan Penutup)
            [
                'ProductName' => 'Cheesecake',
                'Category'    => '5',
                'Price'       => '28000',
                'Description' => 'Lembutnya keju krim di atas dasar biskuit renyah, manisnya pas untuk menutup santap Anda.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'ProductName' => 'Brownie',
                'Category'    => '5',
                'Price'       => '25000',
                'Description' => 'Kue cokelat padat dan fudgy, memberikan ledakan rasa cokelat intens di setiap gigitan.',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
