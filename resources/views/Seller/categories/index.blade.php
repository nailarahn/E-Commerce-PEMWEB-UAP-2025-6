@extends('layouts.seller')

@section('title','Kategori')

@section('content')
<h1 class="text-2xl font-bold mb-4">Kategori</h1>

<a href="{{ route('seller.categories.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Tambah Kategori</a>

<table class="w-full mt-6 bg-white rounded shadow">
    <tr class="border-b">
        <th class="p-2">Nama</th>
        <th class="p-2">Aksi</th>
    </tr>

    @foreach ($categories as $cat)
    <tr class="border-b">
        <td class="p-2">{{ $cat->name }}</td>
        <td class="p-2 flex gap-2">
            <a href="{{ route('seller.categories.edit',$cat->id) }}" class="text-blue-600">Edit</a>

            <form action="{{ route('seller.categories.destroy',$cat->id) }}" method="POST">
                @csrf @method('DELETE')
                <button class="text-red-600">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
@endsection
