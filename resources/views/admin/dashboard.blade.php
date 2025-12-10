@extends('layouts.admin')

@section('content')
<div>
    <h2 class="text-3xl font-semibold mb-6">Dashboard Admin</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-xl shadow-md border border-[#A3D9C9]">
            <h3 class="text-xl font-semibold mb-2">Total Users</h3>
            <p class="text-4xl font-bold text-[#2F3E46]">{{ $totalUsers }}</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-xl shadow-md border border-[#A3D9C9]">
            <h3 class="text-xl font-semibold mb-2">Total Stores</h3>
            <p class="text-4xl font-bold text-[#2F3E46]">{{ $totalStores }}</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 rounded-xl shadow-md border border-[#A3D9C9]">
            <h3 class="text-xl font-semibold mb-2">Pending Verification</h3>
            <p class="text-4xl font-bold text-[#2F3E46]">{{ $waitingVerification }}</p>
        </div>
    </div>
</div>
@endsection
