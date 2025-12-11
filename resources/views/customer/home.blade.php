@extends('layouts.customer')

@section('content')

<!-- HERO SECTION -->
<section class="relative w-full">
    <img src="/assets/images/barenbliss.jpg"
         class="w-full h-[650px] object-cover opacity-90">

    <!-- Hanya tombol -->
    <a href="#"
       class="absolute left-10 lg:left-20 bottom-24 bg-white px-8 py-3 text-lg font-semibold rounded-md shadow hover:bg-gray-100 w-max">
        BUY NOW
    </a>
</section>

<section class="max-w-7xl mx-auto px-6 mt-14">
    <h2 class="text-xl font-bold mb-4">Cleanser</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        @php
            $products = [
                ['img' => '1/Skintific-cleanser.png', 'name' => 'Skintific', 'desc' => 'Skintific 5X Ceramide Low pH Cleanser', 'price' => '65.000'],
                ['img' => '2/Cosrx-cleanser.jpg', 'name' => 'Cosrx', 'desc' => 'Low pH Good Morning Gel Cleanser', 'price' => '130.000']
            ];
        @endphp

        @foreach ($products as $p)
            <div class="bg-white rounded-xl shadow p-4">
                <img src="/assets/images/products/{{ $p['img'] }}"
                        class="rounded-lg h-60 w-full object-scale-down object-center">

                <h3 class="mt-3 font-semibold">{{ $p['name'] }}</h3>
                <p class="text-gray-500 text-sm">{{ $p['desc'] }}</p>
                <p class="mt-1 font-bold">Rp. {{ $p['price'] }}</p>

                <button class="mt-3 w-full py-2 bg-[#8BAE8E] text-white rounded-lg hover:opacity-90">
                    Product Details
                </button>
            </div>
        @endforeach

    </div>
</section>

<section class="max-w-7xl mx-auto px-6 mt-14">
    <h2 class="text-xl font-bold mb-4">Toner</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        @php
            $products = [
                ['img' => '3/Somethinc-Toner.jpg', 'name' => 'Somethinc Glow Maker', 'desc' => 'AHA BHA PHA Clarifying Toner', 'price' => '119.000'],
                ['img' => '4/Lightening-Toner.jpg', 'name' => 'Wardah', 'desc' => 'Lightening Face Toner', 'price' => '23.000']
            ];
        @endphp

        @foreach ($products as $p)
            <div class="bg-white rounded-xl shadow p-4">
                <img src="/assets/images/products/{{ $p['img'] }}"
                        class="rounded-lg h-60 w-full object-scale-down object-center">

                <h3 class="mt-3 font-semibold">{{ $p['name'] }}</h3>
                <p class="text-gray-500 text-sm">{{ $p['desc'] }}</p>
                <p class="mt-1 font-bold">Rp. {{ $p['price'] }}</p>

                <button class="mt-3 w-full py-2 bg-[#8BAE8E] text-white rounded-lg hover:opacity-90">
                    Product Details
                </button>
            </div>
        @endforeach

    </div>
</section>

<section class="max-w-7xl mx-auto px-6 mt-14">
    <h2 class="text-xl font-bold mb-4">Serum</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        @php
            $products = [
                ['img' => '5/Niacinamid-Serum.jpg', 'name' => 'Avoskin YSB', 'desc' => 'Niacinamide 12%', 'price' => '115.000'],
                ['img' => '6/Retinol-Serum.png', 'name' => 'Glad2Glow', 'desc' => 'Peach Retinol Serum', 'price' => '38.000']
            ];
        @endphp

        @foreach ($products as $p)
            <div class="bg-white rounded-xl shadow p-4">
                <img src="/assets/images/products/{{ $p['img'] }}"
                        class="rounded-lg h-60 w-full object-scale-down object-center">

                <h3 class="mt-3 font-semibold">{{ $p['name'] }}</h3>
                <p class="text-gray-500 text-sm">{{ $p['desc'] }}</p>
                <p class="mt-1 font-bold">Rp. {{ $p['price'] }}</p>

                <button class="mt-3 w-full py-2 bg-[#8BAE8E] text-white rounded-lg hover:opacity-90">
                    Product Details
                </button>
            </div>
        @endforeach

    </div>
</section>

<section class="max-w-7xl mx-auto px-6 mt-14">
    <h2 class="text-xl font-bold mb-4">Moisturizer</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        @php
            $products = [
                ['img' => '7/Skintific-moist.png', 'name' => 'Skintific MSH Niacinamide', 'desc' => 'Brightening Moisture Gel', 'price' => '140.000'],
                ['img' => '8/Somethinc-moist.jpg', 'name' => 'Somethinc', 'desc' => 'Ceramic Skin Saviour Moisturizer Gel', 'price' => '299.000']
            ];
        @endphp

        @foreach ($products as $p)
            <div class="bg-white rounded-xl shadow p-4">
                <img src="/assets/images/products/{{ $p['img'] }}"
                        class="rounded-lg h-60 w-full object-scale-down object-center">

                <h3 class="mt-3 font-semibold">{{ $p['name'] }}</h3>
                <p class="text-gray-500 text-sm">{{ $p['desc'] }}</p>
                <p class="mt-1 font-bold">Rp. {{ $p['price'] }}</p>

                <button class="mt-3 w-full py-2 bg-[#8BAE8E] text-white rounded-lg hover:opacity-90">
                    Product Details
                </button>
            </div>
        @endforeach

    </div>
</section>

<section class="max-w-7xl mx-auto px-6 mt-14">
    <h2 class="text-xl font-bold mb-4">Sunscreen</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        @php
            $products = [
                ['img' => '9/Azarine-sunscreen.jpg', 'name' => 'Azarine Hydrasoothe', 'desc' => 'Sunscreen Gel SPF45', 'price' => '49.000'],
                ['img' => '10/SkinAqua-sunscreen.jpg', 'name' => 'Skin Aqua', 'desc' => 'UV Moisture Milk SPF50', 'price' => '48.000']
            ];
        @endphp

        @foreach ($products as $p)
            <div class="bg-white rounded-xl shadow p-4">
                <img src="/assets/images/products/{{ $p['img'] }}"
                        class="rounded-lg h-60 w-full object-scale-down object-center">

                <h3 class="mt-3 font-semibold">{{ $p['name'] }}</h3>
                <p class="text-gray-500 text-sm">{{ $p['desc'] }}</p>
                <p class="mt-1 font-bold">Rp. {{ $p['price'] }}</p>

                <button class="mt-3 w-full py-2 bg-[#8BAE8E] text-white rounded-lg hover:opacity-90">
                    Product Details
                </button>
            </div>
        @endforeach

    </div>
</section>

    <!-- FOOTER -->
    <footer class="bg-white mt-20 pt-12 pb-6 border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10">

            <!-- ABOUT -->
            <div>
                <h4 class="font-bold text-gray-700 mb-3">ABOUT</h4>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li><a href="#" class="hover:text-[#8BAE8E]">Company</a></li>
                    <li><a href="#" class="hover:text-[#8BAE8E]">Community</a></li>
                    <li><a href="#" class="hover:text-[#8BAE8E]">Careers</a></li>
                </ul>
            </div>

            <!-- BLOG -->
            <div>
                <h4 class="font-bold text-gray-700 mb-3">BLOG</h4>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li><a href="#" class="hover:text-[#8BAE8E]">Tech</a></li>
                    <li><a href="#" class="hover:text-[#8BAE8E]">Music</a></li>
                    <li><a href="#" class="hover:text-[#8BAE8E]">Video</a></li>
                </ul>
            </div>

            <!-- PRODUCTS -->
            <div>
                <h4 class="font-bold text-gray-700 mb-3">PRODUCTS</h4>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li><a href="#" class="hover:text-[#8BAE8E]">Lovellea App</a></li>
                    <li><a href="#" class="hover:text-[#8BAE8E]">Lovellea Desktop</a></li>
                    <li><a href="#" class="hover:text-[#8BAE8E]">Lovellea Cloud</a></li>
                </ul>
            </div>

            <!-- LOGO + SOCIAL -->
            <div class="flex flex-col items-start md:items-end">
                <img src="/assets/images/logo.png" class="h-14 mb-2" alt="Lovellea Logo">
                <p class="text-gray-600 text-sm mb-4">It's all about your beauty</p>

                <div class="flex gap-4 text-gray-500 text-xl">
                    <a href="#"><i class="fa-brands fa-facebook hover:text-[#8BAE8E]"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter hover:text-[#8BAE8E]"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram hover:text-[#8BAE8E]"></i></a>
                </div>
            </div>
        </div>

        <!-- BOTTOM COPYRIGHT -->
        <div class="max-w-7xl mx-auto px-6 mt-10 flex flex-col md:flex-row justify-between text-gray-500 text-sm border-t border-gray-200 pt-4">
            <p>Jl. Mawar 21, Malang, Indonesia</p>
            <p>© 2025 Lovellea, Made With Love</p>
        </div>
    </footer>

@endsection