<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductImage;
use App\Models\Product;

class ProductImageSeeder extends Seeder
{
    public function run(): void
    {
        $products = Product::all();

        foreach ($products as $product) {
            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product-' . $product->id . 'public/assets/images/Skintific-cleanser.png',
                'is_thumbnail' => true,
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product-' . $product->id . 'public/assets/images/Cosrx-cleanser.jpg',
                'is_thumbnail' => true,
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product-' . $product->id . 'public/assets/images/Somethinc-Toner.jpg',
                'is_thumbnail' => true,
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product-' . $product->id . 'public/assets/images/Lightening-Toner.jpg',
                'is_thumbnail' => true,
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product-' . $product->id . 'public/assets/images/Niacinamid-Serum.jpg',
                'is_thumbnail' => true,
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product-' . $product->id . 'public/assets/images/Retinol-Serum.png',
                'is_thumbnail' => true,
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product-' . $product->id . 'public/assets/images/Skintific-moist.png',
                'is_thumbnail' => true,
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product-' . $product->id . 'public/assets/images/Somethinc-moist.jpg',
                'is_thumbnail' => true,
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product-' . $product->id . 'public/assets/images/Azarine-sunscreen.jpg',
                'is_thumbnail' => true,
            ]);

            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'product-' . $product->id . 'public/assets/images/SkinAqua-sunscreen.jpg',
                'is_thumbnail' => true,
            ]);
        }
    }
}
