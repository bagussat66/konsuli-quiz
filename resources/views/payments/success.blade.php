@extends('layouts.app')

@section('title', 'Pembayaran Berhasil')

@section('content')
    <h1><i class="fas fa-check-circle"></i> Pembayaran Berhasil</h1>

    <p>Terima kasih atas pembayaran Anda. Transaksi telah berhasil diproses.</p>

    <a href="{{ route('home') }}" class="btn btn-primary">
        <i class="fas fa-home"></i> Kembali ke Beranda
    </a>
@endsection
