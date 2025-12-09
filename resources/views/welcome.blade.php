<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovellea Beauty</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        .swiper-button-next,
        .swiper-button-prev {
            width: 35px;
            height: 35px;
            background: white;
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 22px;
            font-weight: 600;
            color: #7a7a7a;
        }

        .swiper-button-next::after {
            content: '>';
        }

        .swiper-button-prev::after {
            content: '<';
        }

        .swiper-button-next {
            right: 15px;
        }

        .swiper-button-prev {
            left: 15px;
        }

        .myHeroSwiper .swiper-button-next,
        .myHeroSwiper .swiper-button-prev {
            top: 50% !important;
            transform: translateY(-50%);
        }

        .myHeroSwiper .swiper-pagination {
            bottom: 15px !important;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-[#fdf7f7] text-gray-800">

    <!-- NAVBAR FIXED -->
    <nav class="w-full bg-white py-4 shadow-sm fixed top-0 left-0 z-50">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between relative">

            <!-- LEFT : LOGO -->
            <div class="flex items-center gap-3">
                <img src="/assets/images/logo.png" class="h-16" alt="Lovellea Logo">
            </div>

            <!-- CENTER : MENU (ABSOLUTE CENTER) -->
            <div class="hidden md:flex gap-10 text-sm font-semibold text-gray-700 
                        absolute left-1/2 transform -translate-x-1/2">
                <a href="#" class="hover:text-[#8BAE8E]">New</a>
                <a href="#" class="hover:text-[#8BAE8E]">Brands</a>
                <a href="#" class="hover:text-[#8BAE8E]">About</a>
                <a href="#" class="hover:text-[#8BAE8E]">Contact</a>
            </div>

            <!-- RIGHT : BUTTONS + ICONS -->
            <div class="flex items-center gap-4 text-gray-700">

                @auth
                    <a href="/dashboard" class="text-sm font-semibold hover:text-pink-600">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                    class="bg-[#8BAE8E] text-white px-7 py-1 rounded-lg hover:opacity-90">
                        Login
                    </a>

                    <a href="{{ route('register') }}"
                    class="bg-white text-[#8BAE8E] border border-[#8BAE8E] px-5 py-1 rounded-lg 
                            hover:bg-[#8BAE8E] hover:text-white transition">
                        Register
                    </a>
                @endauth

                <i class="fa-regular fa-user text-xl"></i>
                <i class="fa-regular fa-heart text-xl"></i>
                <i class="fa-solid fa-bag-shopping text-xl"></i>
            </div>

        </div>
    </nav>

    <!-- SPACE SUPAYA KONTEN TIDAK TERTUTUP NAVBAR -->
    <div class="pt-24"></div>

    <!-- HERO SECTION -->
    <section class="w-full max-w-7xl mx-auto px-6 py-8">

        <div class="swiper myHeroSwiper relative" style="height: 450px;">

            <div class="swiper-wrapper">

                <!-- SLIDE 1 -->
                <div class="swiper-slide">
                    <div class="bg-[#D8ECF8] rounded-2xl flex flex-col md:flex-row items-center p-10 h-full">

                        <!-- IMAGE -->
                        <div class="w-full md:w-1/2 flex justify-center">
                            <img src="/assets/images/product1.png"
                                class="w-64 md:w-80 drop-shadow-lg" alt="">
                        </div>

                        <!-- TEXT -->
                        <div class="w-full md:w-1/2 mt-6 md:mt-0 md:pl-10 text-center md:text-left">
                            <h2 class="text-4xl md:text-5xl font-extrabold text-[#2F4C98] leading-tight">
                                2 по цене 1
                            </h2>
                            <p class="text-gray-700 mt-3">
                                Успей приобрести! Предложение действует<br>
                                до 1 апреля 2024 года
                            </p>

                            <a href="#"
                            class="inline-block mt-6 bg-[#4D7CFE] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#3b63d6] transition">
                            КУПИТЬ СЕЙЧАС
                            </a>
                        </div>

                    </div>
                </div>

                <!-- SLIDE 2 -->
                 <div class="swiper-slide">
                    <div class="bg-[#FDE7EA] rounded-2xl flex flex-col md:flex-row items-center p-10 h-full">

                        <!-- IMAGE -->
                        <div class="w-full md:w-1/2 flex justify-center">
                            <img src="/assets/images/product1.png"
                                class="w-64 md:w-80 drop-shadow-lg" alt="">
                        </div>

                        <!-- TEXT -->
                        <div class="w-full md:w-1/2 mt-6 md:mt-0 md:pl-10 text-center md:text-left">
                            <h2 class="text-4xl md:text-5xl font-extrabold text-[#2F4C98] leading-tight">
                                2 по цене 1
                            </h2>
                            <p class="text-gray-700 mt-3">
                                Успей приобрести! Предложение действует<br>
                                до 1 апреля 2024 года
                            </p>

                            <a href="#"
                            class="inline-block mt-6 bg-[#4D7CFE] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#3b63d6] transition">
                            КУПИТЬ СЕЙЧАС
                            </a>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Buttons -->
            <div class="swiper-button-next !text-gray-600"></div>
            <div class="swiper-button-prev !text-gray-600"></div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>

        </div>
    </section>


    <!-- BEST SELLERS -->
    <section class="max-w-7xl mx-auto px-6 mt-14">
        <h2 class="text-xl font-bold mb-4">BEST SELLERS</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- CARD 1 -->
            <div class="bg-white rounded-xl shadow p-4">
                <img src="https://images.unsplash.com/photo-1611075381418-364fba124bb8"
                     class="rounded-lg h-40 w-full object-cover">
                <h3 class="mt-3 font-semibold">Airy Tone Blusher</h3>
                <p class="text-gray-500 text-sm">All Take Mood Like Palette</p>
                <p class="mt-1 font-bold">$20.50</p>
                <button class="mt-3 w-full py-2 bg-[#8BAE8E] text-white rounded-lg hover:opacity-90">
                    ADD TO BAG
                </button>
            </div>

            <!-- CARD 2 -->
            <div class="bg-white rounded-xl shadow p-4">
                <img src="https://images.unsplash.com/photo-1607779097040-4289c2243d59"
                     class="rounded-lg h-40 w-full object-cover">
                <h3 class="mt-3 font-semibold">Glazing Morning Balm</h3>
                <p class="text-gray-500 text-sm">Moist & Shine</p>
                <p class="mt-1 font-bold">$17.90</p>
                <button class="mt-3 w-full py-2 bg-[#8BAE8E] text-white rounded-lg hover:opacity-90">
                    ADD TO BAG
                </button>
            </div>

            <!-- CARD 3 -->
            <div class="bg-white rounded-xl shadow p-4">
                <img src="https://images.unsplash.com/photo-1601042873368-9b5c0b3a67c1"
                     class="rounded-lg h-40 w-full object-cover">
                <h3 class="mt-3 font-semibold">Rose Dewy Lip Serum</h3>
                <p class="text-gray-500 text-sm">Soft Tint Liquid Blush</p>
                <p class="mt-1 font-bold">$23.00</p>
                <button class="mt-3 w-full py-2 bg-[#8BAE8E] text-white rounded-lg hover:opacity-90">
                    ADD TO BAG
                </button>
            </div>

            <!-- CARD 4 -->
            <div class="bg-white rounded-xl shadow p-4">
                <img src="https://images.unsplash.com/photo-1590156223778-7141e85282da"
                     class="rounded-lg h-40 w-full object-cover">
                <h3 class="mt-3 font-semibold">Bliss Jelly Set</h3>
                <p class="text-gray-500 text-sm">Berry Tint + Balm Set</p>
                <p class="mt-1 font-bold">$30.00</p>
                <button class="mt-3 w-full py-2 bg-[#8BAE8E] text-white rounded-lg hover:opacity-90">
                    ADD TO BAG
                </button>
            </div>
        </div>
    </section>

    <!-- PROMO BANNER -->
    <section class="max-w-7xl mx-auto px-6 mt-16">
        <div class="bg-[#feeef5] rounded-xl p-10 flex flex-col md:flex-row items-center gap-10">
            <img src="https://images.unsplash.com/photo-1611075381418-364fba124bb8"
                 class="h-48 rounded-xl object-cover">

            <div>
                <h3 class="text-2xl font-semibold text-[#516c5d]">Limited Edition Gift</h3>
                <p class="mt-2 text-gray-600">SAVE 10% on exclusive skincare + soft cream bundle.</p>

                <a href="#"
                   class="mt-4 inline-block bg-[#8BAE8E] text-white px-6 py-3 rounded-lg hover:opacity-90">
                    Shop now
                </a>
            </div>
        </div>
    </section>

    <!-- SHOP BY CATEGORY -->
    <section class="max-w-7xl mx-auto px-6 mt-16 mb-20">
        <h2 class="text-xl font-bold mb-4">SHOP BY CATEGORY</h2>

        <div class="flex gap-6 overflow-x-auto pb-2 scrollbar-hide">

            <!-- Item -->
            <div class="min-w-[200px] md:min-w-[250px] rounded-xl overflow-hidden relative group flex-shrink-0">
                <img src="https://images.unsplash.com/photo-1601042873368-9b5c0b3a67c1"
                    class="object-cover h-40 w-full group-hover:scale-110 transition">
                <p class="absolute bottom-2 left-3 text-white font-bold drop-shadow">Face Wash</p>
            </div>

            <div class="min-w-[200px] md:min-w-[250px] rounded-xl overflow-hidden relative group flex-shrink-0">
                <img src="https://images.unsplash.com/photo-1607779097040-4289c2243d59"
                    class="object-cover h-40 w-full group-hover:scale-110 transition">
                <p class="absolute bottom-2 left-3 text-white font-bold drop-shadow">Toner</p>
            </div>

            <div class="min-w-[200px] md:min-w-[250px] rounded-xl overflow-hidden relative group flex-shrink-0">
                <img src="https://images.unsplash.com/photo-1611075381418-364fba124bb8"
                    class="object-cover h-40 w-full group-hover:scale-110 transition">
                <p class="absolute bottom-2 left-3 text-white font-bold drop-shadow">Serum</p>
            </div>

            <div class="min-w-[200px] md:min-w-[250px] rounded-xl overflow-hidden relative group flex-shrink-0">
                <img src="https://images.unsplash.com/photo-1611075381418-364fba124bb8"
                    class="object-cover h-40 w-full group-hover:scale-110 transition">
                <p class="absolute bottom-2 left-3 text-white font-bold drop-shadow">Moisturizer</p>
            </div>

            <div class="min-w-[200px] md:min-w-[250px] rounded-xl overflow-hidden relative group flex-shrink-0">
                <img src="https://images.unsplash.com/photo-1590156223778-7141e85282da"
                    class="object-cover h-40 w-full group-hover:scale-110 transition">
                <p class="absolute bottom-2 left-3 text-white font-bold drop-shadow">Sunscreen</p>
            </div>
        </div>
    </section>

    <script>
        var swiper = new Swiper(".myHeroSwiper", {
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

</body>
</html>