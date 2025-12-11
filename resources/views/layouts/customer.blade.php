<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'moin') }}</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-white">

<header class="w-full py-4 bg-white shadow-sm">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6">

        <!-- Logo -->
        <img src="/assets/images/logo.png" class="h-16" alt="Lovellea Logo">

        <!-- NAV MENU -->
        <nav class="hidden md:flex gap-12 text-sm font-semibold text-gray-700 absolute left-1/2 -translate-x-1/2">
            <a href="/" class="hover:text-[#8BAE8E]">Home</a>
            <a href="/about" class="hover:text-[#8BAE8E]">About</a>
            <a href="/products" class="hover:text-[#8BAE8E]">Product</a>
            <a href="/history" class="hover:text-[#8BAE8E]">History</a>
            <a href="/topup" class="hover:text-[#8BAE8E]">Topup</a>
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
