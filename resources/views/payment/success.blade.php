@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pembayaran Berhasil</h2>
    <p>Saldo Anda telah diperbarui.</p>

    <a href="{{ route('wallet.index') }}" class="btn btn-primary">Kembali ke Wallet</a>
</div>
@endsection
