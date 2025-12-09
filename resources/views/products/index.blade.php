@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-bold text-pink-600 mb-8 text-center">
        ✨ Lovellea Beauty Collection ✨
    </h1>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

        @foreach ($products as $product)
            <a href="{{ route('products.show', $product->slug) }}"
               class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4 border border-pink-100">

                {{-- Image Thumbnail --}}
                @if($product->images->first())
                    <img src="{{ asset($product->images->first()->image) }}"
                         class="w-full h-40 object-cover rounded-xl">
                @endif

                <h3 class="mt-3 font-semibold text-gray-800">
                    {{ $product->name }}
                </h3>

                <p class="text-pink-500 font-bold mt-1">
                    Rp{{ number_format($product->price) }}
                </p>
            </a>
        @endforeach

    </div>

</div>
@endsection
