@extends('layouts.app')

@section('title', 'Kesalahan Server')

@section('content')
    <h1><i class="fas fa-server"></i> 500 - Kesalahan Server</h1>

    <p>Maaf, terjadi kesalahan pada server. Silakan coba lagi nanti.</p>

    <a href="{{ route('home') }}" class="btn btn-primary">
        <i class="fas fa-home"></i> Kembali ke Beranda
    </a>
@endsection
