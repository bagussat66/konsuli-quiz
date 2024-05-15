@extends('layouts.app')

@section('title', $tag->name)

@section('content')
    <h1><i class="fas fa-tag"></i> {{ $tag->name }}</h1>

    <p>Kuis-kuis dengan tag "{{ $tag->name }}":</p>

    <div class="row">
        @foreach ($quizzes as $quiz)
            <div class="col-md-4 mb-4">
                @include('partials.quiz-card', ['quiz' => $quiz])
            </div>
        @endforeach
    </div>
@endsection
