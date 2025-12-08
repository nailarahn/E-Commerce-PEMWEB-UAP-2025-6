@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Checkout</h2>

    <div class="card p-3 mb-3">
        <h4>Produk:</h4>
        <p>{{ $product->name }}</p>
        <p>Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</p>
    </div>

    <form action="{{ route('checkout.process') }}" method="POST">
        @csrf
        <button class="btn btn-success">Bayar Menggunakan Wallet</button>
    </form>
</div>
@endsection
