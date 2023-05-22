<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $categories = [
            ['name' => 'Mobile'],
            ['name' => 'Laptop'],
            ['name' => 'Accessories'],
            ['name' => 'Fashion'],
            ['name' => 'Grocery'],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
            ]);
        }
    }
}
