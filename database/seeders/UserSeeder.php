<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
    User::create([
        'name' => 'Nadia Putri',
        'email' => 'nadia@example.com',
        'password' => Hash::make('password'),
        'role' => 'member'
    ]);

    User::create([
        'name' => 'Rafi Hidayat',
        'email' => 'rafi@example.com',
        'password' => Hash::make('password'),
        'role' => 'member'
    ]);

    }
}
