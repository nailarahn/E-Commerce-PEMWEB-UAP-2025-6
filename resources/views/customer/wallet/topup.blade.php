@extends('layouts.customer')

@section('content')
<div class="max-w-xl mx-auto py-10">

    <h2 class="text-2xl font-bold mb-6">Topup Saldo</h2>

    <form action="{{ route('customer.wallet.submit') }}" method="POST">
        @csrf

        <label class="font-semibold">Nominal Topup</label>
        <input type="number" name="amount" class="w-full border p-2 rounded mb-6" placeholder="Minimal 10.000" required>

        <button class="w-full bg-blue-600 py-2 rounded text-white">Top Up</button>
    </form>

</div>
@endsection
