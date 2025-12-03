@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Top Up Wallet</h2>

    <form action="{{ route('payment.va.create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nominal Topup</label>
            <input type="number" name="amount" class="form-control" required min="1000">
        </div>
        <button type="submit" class="btn btn-success">Lanjutkan</button>
    </form>
</div>
@endsection
