@extends('layouts.admin')

@section('content')

<h2 class="text-3xl font-semibold mb-6">Verifikasi Toko</h2>

<div class="bg-white p-6 rounded-xl shadow-md border border-[#A3D9C9]">

    <table class="w-full border-collapse">
        <thead class="bg-[#B8E0D2]">
            <tr>
                <th class="p-3 text-left">Store Name</th>
                <th class="p-3 text-left">Owner</th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-left">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($stores as $store)
            <tr class="border-b">
                <td class="p-3">{{ $store->store_name }}</td>
                <td class="p-3">{{ $store->owner->name }}</td>
                <td class="p-3">{{ $store->owner->email }}</td>

                <td class="p-3 flex gap-2">
                    <form action="{{ route('admin.verification.verify', $store->id) }}" method="POST">
                        @csrf
                        <button class="px-4 py-2 bg-[#A3D9C9] text-[#2F3E46] rounded-lg font-medium hover:opacity-80">
                            Verify
                        </button>
                    </form>

                    <form action="{{ route('admin.verification.reject', $store->id) }}" method="POST">
                        @csrf
                        <button class="px-4 py-2 bg-red-300 text-red-900 rounded-lg font-medium hover:opacity-80">
                            Reject
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
