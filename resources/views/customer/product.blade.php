@extends('layouts.customer')

@section('content')
<div class="max-w-5xl mx-auto py-10">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <div>
            <img src="{{ $product->images->first()->image_url ?? '' }}" class="rounded-lg shadow w-full">
        </div>

        <div>
            <h1 class="text-3xl font-bold mb-3">{{ $product->name }}</h1>
            <p class="text-gray-600 mb-3">Toko: {{ $product->store->name }}</p>
            <p class="text-2xl font-semibold mb-5">Rp {{ number_format($product->price) }}</p>

            <a href="/checkout?product_id={{ $product->id }}" 
                class="bg-blue-600 px-5 py-2 rounded text-white">
                Beli
            </a>
        </div>
    </div>

</div>
@endsection
