@extends('layouts.admin')

@section('content')
<h2 class="text-3xl font-semibold mb-6">Manajemen User & Store</h2>

<div class="bg-white p-6 rounded-xl shadow-md border border-[#A3D9C9]">

    <table class="w-full border-collapse">
        <thead class="bg-[#B8E0D2]">
            <tr>
                <th class="p-3 text-left">Name</th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-left">Role</th>
                <th class="p-3 text-left">Store</th>
                <th class="p-3 text-left">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr class="border-b">
                <td class="p-3">{{ $user->name }}</td>
                <td class="p-3">{{ $user->email }}</td>
                <td class="p-3 capitalize">{{ $user->role }}</td>
                <td class="p-3">
                    {{ $user->store->store_name ?? '-' }}
                </td>

                <td class="p-3">
                    <a href="/admin/users/{{ $user->id }}" 
                       class="px-4 py-2 bg-[#A3D9C9] rounded-lg font-medium hover:opacity-80">
                        Detail
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>
@endsection
