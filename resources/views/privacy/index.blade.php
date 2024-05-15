@extends('layouts.app')

@section('title', 'Kebijakan Privasi')

@section('content')
    <h1><i class="fas fa-lock"></i> Kebijakan Privasi</h1>

    <p>Di Konsuli-Quiz, kami menghargai privasi pengguna kami. Kebijakan Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi Anda.</p>

    <h2>Pengumpulan Informasi</h2>
    <p>Kami mengumpulkan informasi pribadi seperti nama, alamat email, dan informasi lainnya yang Anda berikan saat mendaftar atau menggunakan layanan kami.</p>

    <h2>Penggunaan Informasi</h2>
    <p>Informasi yang kami kumpulkan digunakan untuk menyediakan layanan, meningkatkan pengalaman pengguna, mengirimkan pembaruan dan penawaran, serta untuk tujuan internal seperti analisis data dan penelitian.</p>

    <h2>Perlindungan Informasi</h2>
    <p>Kami menerapkan langkah-langkah keamanan yang sesuai untuk melindungi informasi pribadi Anda dari akses yang tidak sah, penggunaan yang tidak tepat, atau pengungkapan yang tidak diizinkan.</p>

    <h2>Berbagi Informasi</h2>
    <p>Kami tidak akan menjual, menyewakan, atau membagikan informasi pribadi Anda kepada pihak ketiga, kecuali jika diwajibkan oleh hukum atau dengan persetujuan Anda.</p>

    <p>Untuk informasi lebih lanjut tentang praktik privasi kami, silakan lihat <a href="{{ route('privacy') }}">Kebijakan Privasi</a> lengkap kami.</p>
@endsection
