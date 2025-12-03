@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Virtual Account Payment</h2>

    <div class="card p-3">
        <p>Nomor VA Kamu:</p>
        <h3>{{ $va->va_number }}</h3>

        <p class="mt-3">Nominal yang harus dibayar:</p>
        <h3>Rp {{ number_format($va->amount, 0, ',', '.') }}</h3>

        <p class="text-muted mt-3">
            Silakan lakukan pembayaran melalui bank yang mendukung virtual account.
        </p>

        <a href="{{ route('payment.success') }}" class="btn btn-success mt-3">
            Sudah Bayar
        </a>
    </div>
</div>
@endsection
