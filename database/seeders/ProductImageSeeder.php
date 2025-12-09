<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    public function run(): void
    {
        $images = [
            1 => 'Skintific-cleanser.png',
            2 => 'Hanasui-facial-wash.jpg',
            3 => 'Somethinc-toner.jpg',
            4 => 'Wardah-toner.jpg',
            5 => 'Avoskin-niacinamide.jpg',
            6 => 'Scarlett-acne-serum.jpg',
            7 => 'Skintific-moist.png',
            8 => 'Somethinc-moist.jpg',
            9 => 'Azarine-sunscreen.jpg',
            10 => 'SkinAqua-sunscreen.jpg',
        ];

        foreach ($images as $productId => $filename) {
            ProductImage::create([
                'product_id'   => $productId,
                'image'        => 'products/' . $productId . '/' . $filename,
                'is_thumbnail' => true,
            ]);
        }
    }
}
