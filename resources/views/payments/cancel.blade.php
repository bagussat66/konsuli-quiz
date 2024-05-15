@extends('layouts.app')

@section('title', 'Pembayaran Dibatalkan')

@section('content')
    <h1><i class="fas fa-times-circle"></i> Pembayaran Dibatalkan</h1>

    <p>Pembayaran telah dibatalkan. Silakan coba lagi nanti.</p>

    <a href="{{ route('home') }}" class="btn btn-primary">
        <i class="fas fa-home"></i> Kembali ke Beranda
    </a>
@endsection
