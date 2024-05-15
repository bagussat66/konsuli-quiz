@extends('layouts.app')

@section('title', $quiz->title)

@section('content')
    <h1><i class="fas fa-tasks"></i> {{ $quiz->title }}</h1>

    <div class="card mb-4">
        <div class="card-body">
            <p class="card-text">{{ $quiz->description }}</p>
            <a href="{{ route('quizzes.attempt', $quiz->id) }}" class="btn btn-primary">
                <i class="fas fa-play"></i> Mulai Kuis
            </a>
        </div>
    </div>

    <h2><i class="fas fa-question-circle"></i> Daftar Pertanyaan</h2>

    <div class="row">
        @foreach ($quiz->questions as $question)
            <div class="col-md-6 mb-4">
                @include('partials.question-card', ['question' => $question])
            </div>
        @endforeach
    </div>
@endsection
