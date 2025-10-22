<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'logo' => 'default.png',
            'name' => 'Admin Emenu',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123'),
            'role' => 'admin',
        ]);
    }
}
