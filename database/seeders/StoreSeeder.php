<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    public function run(): void
    {
        Store::create([
            'user_id' => 2,
            'name' => 'Glowify Beauty Store',
            'logo' => 'glowify-logo.png',
            'about' => 'Toko kecantikan yang menyediakan skincare dan makeup original di Indonesia.',
            'phone' => '081234567890',

            'address_id' => 'ADDR-001',
            'city' => 'Jakarta',
            'address' => 'Jl. Mawar No. 1',
            'postal_code' => '12345',

            'is_verified' => true,
        ]);


    }
}
