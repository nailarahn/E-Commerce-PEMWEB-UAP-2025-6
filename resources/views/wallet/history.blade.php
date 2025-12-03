@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Riwayat Wallet</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Nominal</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($histories as $h)
                <tr>
                    <td>{{ $h->created_at }}</td>
                    <td>{{ $h->type }}</td>
                    <td>
                        @if($h->type == 'topup')
                            + Rp {{ number_format($h->amount, 0, ',', '.') }}
                        @else
                            - Rp {{ number_format($h->amount, 0, ',', '.') }}
                        @endif
                    </td>
                </tr>
            @empty
                <tr><td colspan="3">Belum ada riwayat.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
