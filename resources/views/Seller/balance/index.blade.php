@extends('layouts.seller')

@section('title','Saldo')

@section('content')
<h1 class="text-2xl font-bold mb-4">Saldo Toko</h1>

<div class="bg-white p-6 rounded shadow">
    <h3 class="text-xl font-bold">Rp {{ number_format($balance->balance ?? 0) }}</h3>
</div>
@endsection
