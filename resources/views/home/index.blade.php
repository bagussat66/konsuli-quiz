@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Selamat datang di Konsuli-Quiz!</h1>
        <p class="lead">Platform kuis online terbaik untuk meningkatkan pengetahuan Anda.</p>
        <hr class="my-4">
        <p>Mulai belajar dengan mengerjakan kuis-kuis menarik dari berbagai topik.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('quizzes.index') }}" role="button">
            <i class="fas fa-play"></i> Mulai Mengerjakan Kuis
        </a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-plus-circle"></i> Buat Kuis</h5>
                    <p class="card-text">Buat kuis Anda sendiri dengan mudah dan bagikan dengan orang lain.</p>
                    <a href="{{ route('quizzes.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Buat Kuis Baru
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-tasks"></i> Kerjakan Kuis</h5>
                    <p class="card-text">Kerjakan kuis-kuis menarik dan tingkatkan pengetahuan Anda.</p>
                    <a href="{{ route('quizzes.index') }}" class="btn btn-primary">
                        <i class="fas fa-list"></i> Lihat Kuis
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-share-alt"></i> Bagikan Kuis</h5>
                    <p class="card-text">Bagikan kuis Anda dengan teman-teman dan tantang mereka.</p>
                    <a href="{{ route('quizzes.index') }}" class="btn btn-primary">
                        <i class="fas fa-share"></i> Bagikan Kuis
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
