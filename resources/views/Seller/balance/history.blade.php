@extends('layouts.seller')

@section('title','Riwayat Saldo')

@section('content')
<h1 class="text-2xl font-bold mb-4">Riwayat Saldo</h1>

<table class="w-full bg-white rounded shadow">
<tr>
    <th class="p-2">Keterangan</th>
    <th class="p-2">Jumlah</th>
</tr>

@foreach ($transactions as $t)
<tr class="border-b">
    <td class="p-2">{{ $t->description }}</td>
    <td class="p-2">Rp {{ number_format($t->amount) }}</td>
</tr>
@endforeach

</table>

@endsection

