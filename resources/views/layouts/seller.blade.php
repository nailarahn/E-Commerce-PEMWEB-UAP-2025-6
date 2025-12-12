<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Panel - @yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

<div class="flex">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white shadow-md min-h-screen">
        <div class="p-6 border-b">
            <h2 class="text-xl font-bold">Seller Panel</h2>
        </div>

        <nav class="p-4 space-y-2">
            <a href="{{ route('seller.dashboard') }}" class="block p-2 hover:bg-gray-200 rounded">Dashboard</a>
            <a href="{{ route('seller.store.profile') }}" class="block p-2 hover:bg-gray-200 rounded">Profil Toko</a>

            <a href="{{ route('seller.categories.index') }}" class="block p-2 hover:bg-gray-200 rounded">Kategori</a>

            <a href="{{ route('seller.products.index') }}" class="block p-2 hover:bg-gray-200 rounded">Produk</a>

            <a href="{{ route('seller.orders.index') }}" class="block p-2 hover:bg-gray-200 rounded">Pesanan</a>

            <a href="{{ route('seller.balance.index') }}" class="block p-2 hover:bg-gray-200 rounded">Saldo</a>

            <a href="{{ route('seller.withdrawals.index') }}" class="block p-2 hover:bg-gray-200 rounded">Penarikan Dana</a>
        </nav>
    </aside>

    <!-- CONTENT -->
    <main class="flex-1 p-8">
        @yield('content')
    </main>

</div>

</body>
</html>
