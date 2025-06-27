<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('admin123'),
                'role' => 'a',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Verwandi',
                'email' => 'verwandi@email.com',
                'password' => Hash::make('verwandi123'),
                'role' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Otto',
                'email' => 'otto@email.com',
                'password' => Hash::make('otto123'),
                'role' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bara',
                'email' => 'Bara@email.com',
                'password' => Hash::make('bara123'),
                'role' => 'b',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fernandez',
                'email' => 'fernandez@email.com',
                'password' => Hash::make('fernandez123'),
                'role' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Romeo',
                'email' => 'romeo@email.com',
                'password' => Hash::make('romeo123'),
                'role' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ali',
                'email' => 'ali@email.com',
                'password' => Hash::make('ali123'),
                'role' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Abby',
                'email' => 'abby@email.com',
                'password' => Hash::make('abby123'),
                'role' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Vivi',
                'email' => 'vivi@email.com',
                'password' => Hash::make('vivi123'),
                'role' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Marlin',
                'email' => 'marlin@email.com',
                'password' => Hash::make('marlin123'),
                'role' => 'c',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
