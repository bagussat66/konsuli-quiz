@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <h1><i class="fas fa-info-circle"></i> Tentang Kami</h1>

    <p>Konsuli-Quiz adalah platform kuis online yang bertujuan untuk membantu pengguna meningkatkan pengetahuan mereka melalui kuis-kuis interaktif.</p>

    <p>Kami percaya bahwa belajar harus menyenangkan dan mudah diakses oleh siapa saja. Dengan Konsuli-Quiz, Anda dapat membuat, mengerjakan, dan berbagi kuis dengan mudah.</p>

    <p>Tim kami terdiri dari individu-individu yang berdedikasi dan bersemangat dalam menciptakan pengalaman belajar yang menarik dan efektif bagi pengguna kami.</p>

    <p>Jika Anda memiliki pertanyaan atau saran, jangan ragu untuk menghubungi kami melalui halaman <a href="{{ route('contact') }}">Kontak Kami</a>.</p>
@endsection
