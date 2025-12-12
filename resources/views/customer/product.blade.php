<!-- resources/views/customer/product.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Product Image -->
        <div class="flex flex-col items-center">
            <img src="/images/product-main.jpg" alt="Product" class="w-64 h-auto rounded shadow">
            <div class="grid grid-cols-4 gap-2 mt-4">
                <img src="/images/thumb1.jpg" class="w-20 h-20 rounded shadow" />
                <img src="/images/thumb2.jpg" class="w-20 h-20 rounded shadow" />
                <img src="/images/thumb3.jpg" class="w-20 h-20 rounded shadow" />
                <img src="/images/thumb4.jpg" class="w-20 h-20 rounded shadow" />
            </div>
        </div>

        <!-- Product Details -->
        <div>
            <p class="text-sm text-gray-500 mb-2">Body Care</p>
            <h1 class="text-2xl font-bold mb-3">Deep Body Cleanser Avoskin My Serendipity No.0 200ml - Kulit Berjerawat</h1>

            <div class="flex items-center mb-4">
                <span class="text-yellow-500 text-lg">★</span>
                <span class="ml-1 text-gray-600">5 (12 Penilaian)</span>
                <a href="#" class="ml-3 text-green-700 underline">Lihat Penilaian</a>
            </div>

            <div class="flex items-center space-x-3 mb-6">
                <p class="text-2xl font-bold text-green-700">Rp 50.000</p>
                <p class="line-through text-gray-400">Rp 109.000</p>
                <span class="bg-orange-400 text-white text-sm px-2 py-1 rounded">54%</span>
            </div>

            <!-- Quantity -->
            <div class="flex items-center mb-6">
                <button class="px-3 py-1 bg-gray-200">-</button>
                <span class="px-4">1</span>
                <button class="px-3 py-1 bg-gray-200">+</button>
                <span class="ml-4 text-gray-600">Stock Tersedia: 10</span>
            </div>

            <div class="flex space-x-4 mb-6">
                <button class="bg-green-700 text-white px-6 py-2 rounded shadow">Keranjang</button>
                <button class="border border-green-700 text-green-700 px-6 py-2 rounded shadow">Beli Sekarang</button>
                <button class="border p-2 rounded-full">♡</button>
            </div>

            <!-- Tabs -->
            <div>
                <div class="flex space-x-6 border-b mb-4">
                    <button class="pb-2 border-b-2 border-green-700 font-semibold">Description</button>
                    <button class="pb-2 text-gray-500">How To Use</button>
                    <button class="pb-2 text-gray-500">Ingredients</button>
                    <button class="pb-2 text-gray-500">For Who</button>
                </div>

                <p class="text-gray-700 leading-relaxed">
                    Membersihkan badan terasa lebih menyegarkan dan menyenangkan dengan Avoskin My Serendipity No.0 Deep Body Cleanser ... (isi lengkap deskripsi di sini)
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
