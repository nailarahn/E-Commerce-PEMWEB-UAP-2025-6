@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-10">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        {{-- LEFT: PRODUCT IMAGES --}}
        <div>
            {{-- Thumbnail besar --}}
            <img src="{{ asset($product->images->first()->image) }}"
                 class="w-full h-80 object-cover rounded-2xl shadow">

            {{-- Gallery kecil --}}
            <div class="flex gap-3 mt-4">
                @foreach ($product->images as $img)
                    <img src="{{ asset($img->image) }}"
                         class="w-20 h-20 object-cover rounded-lg border hover:scale-105 transition">
                @endforeach
            </div>
        </div>

        {{-- RIGHT: PRODUCT DETAILS --}}
        <div>
            <h1 class="text-3xl font-bold text-pink-600">
                {{ $product->name }}
            </h1>

            <p class="text-2xl text-pink-500 font-semibold mt-3">
                Rp{{ number_format($product->price) }}
            </p>

            <p class="mt-6 text-gray-700 leading-relaxed">
                {{ $product->description }}
            </p>

            <div class="mt-6 space-y-1">
                <p><strong>Stok:</strong> {{ $product->stock }}</p>
                <p><strong>Berat:</strong> {{ $product->weight }} gr</p>
            </div>

            {{-- Checkout Button --}}
            <a href="{{ route('checkout.page', $product->id) }}"
               class="mt-8 inline-block bg-pink-500 text-white px-6 py-3 rounded-xl shadow hover:bg-pink-600 transition">
                Beli Sekarang 💗
            </a>
        </div>

    </div>

</div>
@endsection
