@extends('layouts.customer')

@section('content')
<div class="max-w-6xl mx-auto py-10">

    <h2 class="text-3xl font-bold mb-6">Semua Produk</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($products as $product)
        <a href="{{ route('customer.product', $product->slug) }}" class="p-4 bg-white shadow rounded-lg">
            <img src="{{ $product->productImages->first()->image_url ?? '' }}" class="w-full h-48 object-cover mb-3 rounded">
            <h3 class="font-semibold text-lg">{{ $product->name }}</h3>
            <p class="text-gray-600">Rp {{ number_format($product->price) }}</p>
        </a>
        @endforeach
    </div>

</div>
@endsection
