<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lovellea Beauty - Customer</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    {{-- NAVBAR --}}
    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            {{-- Logo --}}
            <a href="{{ route('customer.home') }}" 
               class="text-2xl font-bold text-pink-500">
                Lovellea Beauty
            </a>

            {{-- Menu --}}
            <div class="flex items-center space-x-6">

                <a href="{{ route('customer.home') }}" 
                   class="text-gray-700 hover:text-pink-500">Home</a>

                <a href="{{ route('customer.history') }}" 
                   class="text-gray-700 hover:text-pink-500">History</a>

                <a href="{{ route('customer.wallet.topup') }}" 
                   class="text-gray-700 hover:text-pink-500">Topup</a>

                {{-- Dropdown User --}}
<div class="relative group">

    <button class="flex items-center space-x-2 text-gray-700 hover:text-pink-500">
        <span>{{ auth()->user()->name }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="h-5 w-5" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" 
                  stroke-linejoin="round" 
                  stroke-width="2"
                  d="M19 9l-7 7-7-7" />
        </svg>
    </button>

                        {{-- Dropdown Menu --}}
                        <div class="absolute hidden group-hover:block bg-white shadow-md rounded right-0 w-40 
                                    pt-2 pointer-events-auto">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="w-full text-left px-4 py-2 hover:bg-gray-100">
                                    Logout
                                </button>
                            </form>
                        </div>

                    </div>


                    {{-- Dropdown Menu --}}
                    <div class="absolute hidden group-hover:block bg-white shadow-md rounded mt-2 right-0 w-40">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="w-full text-left px-4 py-2 hover:bg-gray-100">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    {{-- CONTENT --}}
    <main class="min-h-screen py-8">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-white shadow py-6 text-center text-gray-600">
        © 2025 Lovellea Beauty. All Rights Reserved.
    </footer>

</body>
</html>
