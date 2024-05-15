@extends('layouts.app')

@section('title', 'Mengerjakan Kuis')

@section('content')
    <h1><i class="fas fa-tasks"></i> Mengerjakan Kuis</h1>

    <h2>{{ $quiz->title }}</h2>

    <form action="{{ route('quizzes.submit', $quiz->id) }}" method="POST">
        @csrf

        @foreach ($quiz->questions as $index => $question)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Pertanyaan {{ $index + 1 }}</h5>
                    <p class="card-text">{{ $question->question }}</p>

                    @if ($question->question_type === 'multiple_choice')
                        @foreach ($question->answers as $answer)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="answer-{{ $answer->id }}" value="{{ $answer->id }}">
                                <label class="form-check-label" for="answer-{{ $answer->id }}">
                                    {{ $answer->answer }}
                                </label>
                            </div>
                        @endforeach
                    @elseif ($question->question_type === 'true_false')
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="answer-true-{{ $question->id }}" value="1">
                            <label class="form-check-label" for="answer-true-{{ $question->id }}">
                                Benar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answers[{{ $question->id }}]" id="answer-false-{{ $question->id }}" value="0">
                            <label class="form-check-label" for="answer-false-{{ $question->id }}">
                                Salah
                            </label>
                        </div>
                    @elseif ($question->question_type === 'short_answer')
                        <div class="form-group">
                            <input type="text" class="form-control" name="answers[{{ $question->id }}]" placeholder="Masukkan jawaban singkat">
                        </div>
                    @endif
                </div>
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-check-circle"></i> Selesai
        </button>
    </form>
@endsection
