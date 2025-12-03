@extends('layouts.app')

@section('content')
<div class="container">
    <h2>My Wallet</h2>
    <div class="card p-3 mb-3">
        <h4>Saldo Saat Ini:</h4>
        <h2>Rp {{ number_format($balance->balance ?? 0, 0, ',', '.') }}</h2>
        <a href="{{ route('wallet.topup') }}" class="btn btn-primary mt-3">Top Up Saldo</a>
    </div>

    <h4>Riwayat Transaksi</h4>
    <a href="{{ route('wallet.history') }}">Lihat semua →</a>
</div>
@endsection
