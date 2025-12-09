<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductImage;
use App\Models\Product;

class ProductImageSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil semua product
        $products = Product::all();

        foreach ($products as $product) {
            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product-' . $product->id . '-1.jpg',
                'is_thumbnail' => true,
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product-' . $product->id . '-2.jpg',
                'is_thumbnail' => false,
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product-' . $product->id . '-3.jpg',
                'is_thumbnail' => false,
            ]);
        }
    }
}
