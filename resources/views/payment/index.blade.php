@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Pilih Metode Pembayaran</h2>

    <a href="{{ route('payment.va') }}" class="btn btn-outline-primary">
        Virtual Account
    </a>
</div>
@endsection
