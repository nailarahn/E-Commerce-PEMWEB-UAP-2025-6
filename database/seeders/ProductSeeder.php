<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $store = Store::first();

        $products = [
            [
                'name' => 'Skintific 5X Ceramide Low pH Cleanser',
                'product_category_id' => 1,
                'price' => 65000,
                'description' => 'Cleanser gentle dengan Ceramide untuk skin barrier.',
                'weight' => 120,
                'stock' => 50,
            ],
            [
                'name' => 'Low pH Good Morning Gel Cleanser',
                'product_category_id' => 1,
                'price' => 130000,
                'description' => 'Facial wash untuk semua jenis kulit.',
                'weight' => 100,
                'stock' => 40,
            ],
            [
                'name' => 'Somethinc SUPERTONER Glow Maker',
                'product_category_id' => 2,
                'price' => 199000,
                'description' => 'Toner eksfoliasi AHA + PHA.',
                'weight' => 150,
                'stock' => 25,
            ],
            [
                'name' => 'Wardah Lightening Face Toner',
                'product_category_id' => 2,
                'price' => 23000,
                'description' => 'Toner basic Wardah untuk semua jenis kulit.',
                'weight' => 150,
                'stock' => 20,
            ],
            [
                'name' => 'Avoskin YSB Niacinamide 12%',
                'product_category_id' => 3,
                'price' => 115000,
                'description' => 'Serum pencerah dengan Niacinamide tinggi.',
                'weight' => 50,
                'stock' => 30,
            ],
            [
                'name' => 'Glad2Glow Peach Retinol Serum',
                'product_category_id' => 3,
                'price' => 38000,
                'description' => 'Serum khusus mencegah penuaan.',
                'weight' => 50,
                'stock' => 35,
            ],
            [
                'name' => 'Skintific MSH Niacinamide Brightening Moisture Gel',
                'product_category_id' => 4,
                'price' => 140000,
                'description' => 'Moisturizer untuk mengontrol minyak & mencerahkan.',
                'weight' => 100,
                'stock' => 30,
            ],
            [
                'name' => 'Somethinc Ceramic Skin Saviour Moisturizer Gel',
                'product_category_id' => 4,
                'price' => 299000,
                'description' => 'Moisturizer aman untuk kulit sensitif.',
                'weight' => 100,
                'stock' => 20,
            ],
            [
                'name' => 'Azarine Hydrasoothe Sunscreen Gel SPF45',
                'product_category_id' => 5,
                'price' => 49000,
                'description' => 'Sunscreen gel ringan cepat meresap.',
                'weight' => 50,
                'stock' => 40,
            ],
            [
                'name' => 'Skin Aqua UV Moisture Milk SPF50',
                'product_category_id' => 5,
                'price' => 48000,
                'description' => 'Sunscreen populer untuk semua jenis kulit.',
                'weight' => 60,
                'stock' => 50,
            ],
        ];


        foreach ($products as $item) {
            Product::create([
                'store_id' => $store->id,
                'product_category_id' => $item['product_category_id'],
                'name' => $item['name'],
                'slug' => Str::slug($item['name']),
                'description' => $item['description'],
                'condition' => 'new',
                'price' => $item['price'],
                'weight' => $item['weight'],
                'stock' => $item['stock'],
            ]);
        }

    }
}
