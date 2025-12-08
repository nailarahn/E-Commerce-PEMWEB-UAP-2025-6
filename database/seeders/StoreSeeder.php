<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;
use App\Models\User;

class StoreSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil member pertama (Aurelia)
        $member = User::where('role', 'member')->first();

        Store::create([
            'user_id' => $member->id,
            'name' => 'GlowBeauty Official',
            'description' => 'Toko kecantikan yang menjual produk-produk best seller Indonesia.',
        ]);

    }
}
