<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $products = [
            ['category_id' => 1, 'name' => 'Redmi Note 8 Pro', 'price' => '18000'],
            ['category_id' => 1, 'name' => 'One Plus Nord CE2', 'price' => '23000'],
            ['category_id' => 1, 'name' => 'Vivo v16', 'price' => '18000'],
            ['category_id' => 1, 'name' => 'HTC', 'price' => '21000'],
            ['category_id' => 1, 'name' => 'Blackberry', 'price' => '19000'],
            ['category_id' => 1, 'name' => 'Redmi A1', 'price' => '12000'],
            ['category_id' => 1, 'name' => 'Realme s2', 'price' => '16000'],
        ];

        foreach ($products as $product) {
            Product::create([
                'category_id' => $product['category_id'],
                'name' => $product['name'],
                'price' => $product['price'],
            ]);
        }
    }
}
