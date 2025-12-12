@extends('layouts.seller')

@section('title','Gambar Produk')

@section('content')
<h1 class="text-2xl font-bold mb-4">Gambar Produk: {{ $product->name }}</h1>

<form action="{{ route('seller.products.images.store',$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Tambah Gambar (Multiple)</label>
    <input type="file" name="images[]" multiple class="w-full mb-4">

    <button class="px-4 py-2 bg-blue-600 text-white rounded">Upload</button>
</form>

<div class="grid grid-cols-4 gap-4 mt-6">
    @foreach ($images as $img)
        <div class="bg-white p-2 rounded shadow text-center">
            <img src="{{ asset('storage/' . $img->image) }}" class="w-full h-32 object-cover rounded mb-2">

            <form action="{{ route('seller.products.images.delete',[$product->id,$img->id]) }}" method="POST">
                @csrf @method('DELETE')
                <button class="px-3 py-1 bg-red-600 text-white rounded">Hapus</button>
            </form>
        </div>
    @endforeach
</div>

@endsection
