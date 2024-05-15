@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
    <h1><i class="fas fa-exclamation-triangle"></i> 404 - Halaman Tidak Ditemukan</h1>

    <p>Maaf, halaman yang Anda cari tidak ditemukan.</p>

    <a href="{{ route('home') }}" class="btn btn-primary">
        <i class="fas fa-home"></i> Kembali ke Beranda
    </a>
@endsection
