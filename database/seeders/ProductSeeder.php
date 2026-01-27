<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;

class ProductSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stores = User::where('role', 'store')->with('productCategories')->get();

        $availableImages = [
            'products/Delicious Ramen Bowl.png',
            'products/Delicious Thai Food Still Life.png',
            'products/Frappe Coffee White.png',
            'products/Fried Chicken High Angle Shot.png',
            'products/find-image.png',
            'products/ramen.png',
        ];

        $productTemplates = [
            'Minuman' => [
                ['Es Teh Manis', 8000, 'Teh manis dingin'],
                ['Es Jeruk Segar', 10000, 'Jeruk segar dengan es'],
            ],
            'Dessert' => [
                ['Es Campur', 15000, 'Campuran buah-buahan dengan santan dan susu'],
                ['Pisang Goreng', 12000, 'Pisang goreng dengan topping madu'],
            ],
            'Jajanan' => [
                ['Batagor', 15000, 'Bakso tahu goreng dengan bumbu kacang'],
                ['Siomay', 12000, 'Siomay ikan dengan kentang dan telur'],
            ],
            'Ayam' => [
                ['Ayam Geprek Level 1-5', 25000, 'Ayam geprek dengan sambal level pedas'],
                ['Ayam Penyet', 22000, 'Ayam goreng penyet dengan sambal'],
            ],
            'Kuah' => [
                ['Sop Buntut', 45000, 'Sop buntut sapi dengan sayuran'],
                ['Soto Betawi', 25000, 'Soto Betawi dengan jeroan'],
            ],
        ];

        foreach ($stores as $store) {
            foreach ($store->productCategories as $category) {
                if (isset($productTemplates[$category->name])) {
                    $products = $productTemplates[$category->name];
                    
                    foreach ($products as [$name, $price, $description]) {
                        $imagePath = $availableImages[array_rand($availableImages)];
                        
                        Product::create([
                            'name' => $name,
                            'description' => $description,
                            'price' => $price,
                            'image' => $imagePath,
                            'product_category_id' => $category->id,
                            'user_id' => $store->id,
                            'is_popular' => false,
                            'rating' => 0,
                        ]);
                    }
                }
            }
        }
    }
}
