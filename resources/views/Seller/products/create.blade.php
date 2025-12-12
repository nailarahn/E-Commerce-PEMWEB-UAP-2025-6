@extends('layouts.seller')

@section('title','Tambah Produk')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>

<form action="{{ route('seller.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="name" class="w-full border rounded p-2">
    </div>

    <div class="mb-3">
        <label>Kategori</label>
        <select name="category_id" class="w-full border rounded p-2">
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="price" class="w-full border rounded p-2">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="w-full border rounded p-2"></textarea>
    </div>

    <div class="mb-3">
        <label>Gambar Produk (bisa banyak)</label>
        <input type="file" name="images[]" class="w-full" multiple>
    </div>

    <button class="bg-blue-700 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection
