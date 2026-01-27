<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class StoreSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stores = [
            [
                'logo' => 'stores/find-image.png',
                'name' => 'Warung Rasa',
                'username' => 'warsa',
                'email' => 'warsa@example.com',
                'password' => Hash::make('password'),
                'role' => 'store',
            ],
            [
                'logo' => 'stores/Delicious Ramen Bowl.png',
                'name' => 'Nasi Goreng Mas',
                'username' => 'nasgormas',
                'email' => 'nasgormas@example.com',
                'password' => Hash::make('password'),
                'role' => 'store',
            ],
        ];

        foreach ($stores as $store) {
            User::create($store);
        }
    }
}
