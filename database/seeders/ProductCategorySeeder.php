<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Skincare',
            'Makeup',
            'Hair Care',
            'Body Care',
            'Fragrance',
        ];

        foreach ($categories as $category) {
            ProductCategory::create([
                'name' => $category
            ]);
        }
    }
}
