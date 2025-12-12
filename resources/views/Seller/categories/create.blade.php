@extends('layouts.seller')

@section('title','Tambah Kategori')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tambah Kategori</h1>

<form action="{{ route('seller.categories.store') }}" method="POST">
    @csrf

    <label>Nama Kategori</label>
    <input type="text" name="name" class="w-full border p-2 rounded mb-4">

    <button class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
</form>
@endsection
