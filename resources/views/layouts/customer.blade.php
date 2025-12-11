<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'moin') }}</title>

    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-white">

<header class="w-full py-4 bg-white shadow-sm">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6">

        <!-- Logo -->
        <img src="/assets/images/logo.png" class="h-16" alt="Lovellea Logo">

        <!-- NAV MENU -->
        <nav class="hidden md:flex gap-12 text-sm font-semibold text-gray-700 absolute left-1/2 -translate-x-1/2">

            <!-- HOME -->
            <a href="#" class="hover:text-[#8BAE8E]">Home</a>

            <!-- ABOUT -->
            <div x-data="{ open:false }" class="relative">
                <button @mouseenter="open = true"
                        @click.away="open=false"
                        class="hover:text-[#8BAE8E] flex items-center gap-1">
                    About
                    <svg class="w-3 h-3 mt-0.5" fill="none" stroke="#8BAE8E" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                    </svg>
                </button>

                <div x-show="open" x-transition
                     @mouseenter="open=true"
                     class="absolute left-0 mt-2 w-40 bg-white shadow-lg border rounded-md py-2 z-50">

                    <a class="block px-4 py-2 hover:bg-gray-100" href="#">Company</a>
                    <a class="block px-4 py-2 hover:bg-gray-100" href="#">Teams</a>
                    <a class="block px-4 py-2 hover:bg-gray-100" href="#">FAQ</a>
                </div>
            </div>

            <!-- ALL PRODUCT -->
            <div x-data="{ open:false, sub:'' }" class="relative">

                <button @mouseenter="open = true"
                        @click.away="open=false"
                        class="hover:text-[#8BAE8E] flex items-center gap-1">

                    All Product
                    <svg class="w-3 h-3 mt-0.5" fill="none" stroke="#8BAE8E" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                    </svg>
                </button>

                <!-- Main Panel -->
                <div x-show="open" x-transition
                     @mouseenter="open=true"
                     class="absolute left-0 mt-2 bg-white shadow-xl border rounded-xl w-64 py-4 px-2 z-50">

                    <div class="space-y-1">

                        <!-- CLEANSER -->
                        <div class="relative">
                            <button @mouseenter="sub='cleanser'"
                                    class="w-full flex justify-between px-3 py-2 hover:bg-gray-50 rounded-md">
                                Cleanser <span>›</span>
                            </button>

                            <div x-show="sub==='cleanser'"
                                 @mouseenter="sub='cleanser'"
                                 x-transition
                                 class="absolute top-0 left-full ml-2 bg-white w-60 shadow-xl border rounded-xl p-4">

                                <a class="block py-1 hover:text-[#8BAE8E]" href="#">Calming Cleansing Stick</a>
                                <a class="block py-1 hover:text-[#8BAE8E]" href="#">Clarifying Cleansing Mousse</a>
                            </div>
                        </div>

                        <!-- MOISTURIZER -->
                        <div class="relative">
                            <button @mouseenter="sub='moist'"
                                    class="w-full flex justify-between px-3 py-2 hover:bg-gray-50 rounded-md">
                                Moisturizer <span>›</span>
                            </button>

                            <div x-show="sub==='moist'"
                                 @mouseenter="sub='moist'"
                                 x-transition
                                 class="absolute top-0 left-full ml-2 bg-white w-60 shadow-xl border rounded-xl p-4">

                                <a class="block py-1 hover:text-[#8BAE8E]" href="#">Hydra Glow Gel</a>
                                <a class="block py-1 hover:text-[#8BAE8E]" href="#">Deep Moist Cream</a>
                            </div>
                        </div>

                        <!-- SERUM -->
                        <div class="relative">
                            <button @mouseenter="sub='serum'"
                                    class="w-full flex justify-between px-3 py-2 hover:bg-gray-50 rounded-md">
                                Serum <span>›</span>
                            </button>

                            <div x-show="sub==='serum'"
                                 @mouseenter="sub='serum'"
                                 x-transition
                                 class="absolute top-0 left-full ml-2 bg-white w-60 shadow-xl border rounded-xl p-4">

                                <a class="block py-1 hover:text-[#8BAE8E]" href="#">Brightening Serum</a>
                                <a class="block py-1 hover:text-[#8BAE8E]" href="#">Repair Booster</a>
                            </div>
                        </div>

                        <a class="block px-3 py-2 hover:bg-gray-50 rounded-md" href="#">Bundles</a>

                    </div>
                </div>
            </div>

            <a href="#" class="hover:text-[#8BAE8E]">History</a>
            <a href="#" class="hover:text-[#8BAE8E]">Topup</a>
        </nav>

        <!-- RIGHT ICONS -->
        <div class="flex items-center space-x-8">

            <!-- Search -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.6" stroke="#1f3b5a" class="w-7 h-7 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 105.1 5.1a7.5 7.5 0 0011.55 11.55z" />
            </svg>

            <!-- Bag -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24" stroke-width="1.6" stroke="#1f3b5a"
                 class="w-7 h-7 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M6.5 10h11l-1 10.5H7.5L6.5 10zM9 6.5A3 3 0 1115 6.5v3.5H9V6.5z" />
            </svg>

            <!-- USER -->
            <div x-data="{ open:false }" class="relative">
                <svg @click="open = !open"
                     xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke-width="1.6"
                     stroke="#1f3b5a" class="w-7 h-7 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.75 7.5a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 1115 0v.75H4.5v-.75z" />
                </svg>

                <div x-show="open"
                     x-transition
                     @click.away="open=false"
                     class="absolute right-0 mt-3 w-40 bg-white rounded-md shadow-md border py-2 z-50">

                    <a href="{{ route('profile.edit') }}"
                       class="block px-4 py-2 hover:bg-gray-100">Profile</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</header>

<main>
    @yield('content')
</main>

</body>
</html>