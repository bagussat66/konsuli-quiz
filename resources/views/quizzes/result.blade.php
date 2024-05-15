@extends('layouts.app')

@section('title', 'Hasil Kuis')

@section('content')
    <h1><i class="fas fa-trophy"></i> Hasil Kuis</h1>

    <h2>{{ $quiz->title }}</h2>

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Skor Anda</h5>
            <p class="card-text">{{ $score }} dari {{ $totalQuestions }}</p>
        </div>
    </div>

    <h3>Pembahasan</h3>

    @foreach ($quiz->questions as $index => $question)
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Pertanyaan {{ $index + 1 }}</h5>
                <p class="card-text">{{ $question->question }}</p>

                <p><strong>Jawaban Anda:</strong> {{ $userAnswers[$question->id] ?? '-' }}</p>
                <p><strong>Jawaban Benar:</strong> {{ $question->correctAnswer->answer }}</p>

                <p>{{ $question->explanation }}</p>
            </div>
        </div>
    @endforeach

    <a href="{{ route('quizzes.index') }}" class="btn btn-primary">
        <i class="fas fa-arrow-left"></i> Kembali ke Daftar Kuis
    </a>
@endsection
