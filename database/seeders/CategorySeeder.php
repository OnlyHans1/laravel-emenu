<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
use App\Models\User;

class CategorySeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stores = User::where('role', 'store')->get();

        $categories = [
            ['name' => 'Minuman', 'icon' => 'drink.png'],
            ['name' => 'Dessert', 'icon' => 'desert.png'],
            ['name' => 'Jajanan', 'icon' => 'all-menu.png'],
            ['name' => 'Ayam', 'icon' => 'chicken.png'],
            ['name' => 'Kuah', 'icon' => 'ramen.png'],
        ];

        foreach ($stores as $store) {
            foreach ($categories as $category) {
                ProductCategory::create([
                    'name' => $category['name'],
                    'slug' => strtolower(str_replace(' ', '-', $category['name'])),
                    'icon' => 'categories/' . $category['icon'],
                    'user_id' => $store->id,
                ]);
            }
        }
    }
}
