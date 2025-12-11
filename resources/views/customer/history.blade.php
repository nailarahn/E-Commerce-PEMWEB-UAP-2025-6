@extends('layouts.customer')

@section('content')
<div class="max-w-5xl mx-auto py-10">

    <h2 class="text-2xl font-bold mb-6">Riwayat Transaksi</h2>

    @foreach($transactions as $trx)
    <div class="bg-white p-4 shadow rounded mb-4">
        <div class="flex justify-between">
            <div>
                <h3 class="font-semibold">Invoice #{{ $trx->id }}</h3>
                <p class="text-gray-600">{{ $trx->created_at->format('d M Y') }}</p>
            </div>

            <p class="font-bold text-lg">Rp {{ number_format($trx->total_price + $trx->shipping_cost) }}</p>
        </div>

        <div class="mt-3">
            @foreach($trx->details as $item)
                <p>- {{ $item->product->name }} (x{{ $item->qty }})</p>
            @endforeach
        </div>
    </div>
    @endforeach

</div>
@endsection
