@extends('layouts.seller')

@section('title','Edit Kategori')

@section('content')
<h1 class="text-2xl font-bold mb-4">Edit Kategori</h1>

<form action="{{ route('seller.categories.update',$category->id) }}" method="POST">
    @csrf @method('PUT')

    <label>Nama Kategori</label>
    <input type="text" name="name" value="{{ $category->name }}" class="w-full border p-2 rounded mb-4">

    <button class="px-4 py-2 bg-green-600 text-white rounded">Update</button>
</form>
@endsection
