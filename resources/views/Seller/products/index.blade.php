@extends('layouts.seller')

@section('title','Produk')

@section('content')
<h1 class="text-2xl font-bold mb-4">Produk</h1>

<a href="{{ route('seller.products.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Tambah Produk</a>

<div class="grid grid-cols-3 gap-6 mt-6">

@foreach ($products as $p)
<div class="bg-white p-4 rounded shadow">

    <img src="{{ asset('storage/' . $p->thumbnail) }}" class="w-full h-40 object-cover rounded">

    <h3 class="mt-3 text-lg font-bold">{{ $p->name }}</h3>
    <p>Rp {{ number_format($p->price) }}</p>

    <div class="mt-4 flex gap-2">
        <a href="{{ route('seller.products.edit',$p->id) }}" class="text-blue-600">Edit</a>
        <a href="{{ route('seller.products.images',$p->id) }}" class="text-orange-600">Gambar</a>

        <form action="{{ route('seller.products.destroy',$p->id) }}" method="POST">
            @csrf @method('DELETE')
            <button class="text-red-600">Hapus</button>
        </form>
    </div>

</div>
@endforeach

</div>

@endsection
