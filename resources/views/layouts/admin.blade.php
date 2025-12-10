<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Skincare</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#FFF8E7] text-[#2F3E46]">
    <div class="min-h-screen flex">

        <!-- SIDEBAR -->
        <aside class="w-64 bg-[#B8E0D2] shadow-xl p-6">
            <h1 class="text-2xl font-bold mb-8 tracking-wide">Admin Panel</h1>

            <nav class="space-y-4">
                <a href="/admin/dashboard" class="block font-medium hover:text-[#2F3E46]">Dashboard</a>
                <a href="/admin/verification" class="block font-medium hover:text-[#2F3E46]">Verifikasi Toko</a>
                <a href="/admin/users" class="block font-medium hover:text-[#2F3E46]">Users & Stores</a>
            </nav>
        </aside>

        <!-- CONTENT -->
        <main class="flex-1 p-10">
            @yield('content')
        </main>

    </div>
</body>
</html>
