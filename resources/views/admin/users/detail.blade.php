@extends('layouts.admin')

@section('content')

<h2 class="text-3xl font-semibold mb-6">Detail User</h2>

<div class="grid md:grid-cols-2 gap-8">

    <!-- USER CARD -->
    <div class="bg-white p-6 rounded-xl shadow-md border border-[#A3D9C9]">
        <h3 class="text-2xl font-bold mb-4">User Information</h3>

        <p class="mb-2"><strong>Name:</strong> {{ $user->name }}</p>
        <p class="mb-2"><strong>Email:</strong> {{ $user->email }}</p>
        <p class="mb-2"><strong>Role:</strong> {{ $user->role }}</p>
    </div>

    <!-- STORE CARD -->
    <div class="bg-white p-6 rounded-xl shadow-md border border-[#A3D9C9]">
        <h3 class="text-2xl font-bold mb-4">Store Information</h3>

        @if($user->store)
            <p class="mb-2"><strong>Store Name:</strong> {{ $user->store->store_name }}</p>
            <p class="mb-2"><strong>Phone:</strong> {{ $user->store->phone }}</p>
            <p class="mb-2"><strong>Address:</strong> {{ $user->store->address }}</p>
            <p class="mb-2"><strong>Verified:</strong> 
                {{ $user->store->is_verified ? 'Yes' : 'No' }}
            </p>
        @else
            <p class="italic text-gray-500">User does not own a store.</p>
        @endif
    </div>

</div>

@endsection
