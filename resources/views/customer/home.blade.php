@extends('layouts.customer')

@section('content')

<!-- HERO SECTION -->
<section class="relative w-full">
    <img src="/images/hero-bg.jpg"
         class="w-full h-[650px] object-cover opacity-90">

    <!-- Overlay Content -->
    <div class="absolute inset-0 flex flex-col justify-center px-10 lg:px-20">
        <h1 class="text-white text-5xl font-extrabold drop-shadow-lg">
            Solid in Stick
        </h1>

        <p class="text-white text-xl max-w-2xl mt-4 drop-shadow-lg leading-relaxed">
            The answer to a quick and easy skin care experience.  
            Travel-friendly, perfect for days you’re on the go.
        </p>

        <a href="#"
           class="mt-8 bg-white px-8 py-3 text-lg font-semibold rounded-md shadow hover:bg-gray-100 w-max">
            BUY NOW
        </a>
    </div>
</section>

<!-- PRODUCT SECTION -->
<section class="max-w-7xl mx-auto py-20 px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

        <!-- Product 1 -->
        <div class="p-6 rounded-xl shadow-lg bg-white">
            <img src="/images/product-stick1.png"
                 class="w-full object-cover mb-4">
            <h3 class="text-xl font-bold">Hydrating Protecting Stick</h3>
            <p class="text-gray-600 mt-2">Barrier Protecting Hydrating Stick</p>
        </div>

        <!-- Product 2 -->
        <div class="p-6 rounded-xl shadow-lg bg-white">
            <img src="/images/product-stick2.png"
                 class="w-full object-cover mb-4">
            <h3 class="text-xl font-bold">Calming Cleansing Stick</h3>
            <p class="text-gray-600 mt-2">Gentle Purifying Formula</p>
        </div>

        <!-- Product 3 -->
        <div class="p-6 rounded-xl shadow-lg bg-white">
            <img src="/images/product-box.png"
                 class="w-full object-cover mb-4">
            <h3 class="text-xl font-bold">moin Cleansing Box</h3>
            <p class="text-gray-600 mt-2">Calming Cleansing Stick</p>
        </div>

    </div>
</section>

@endsection