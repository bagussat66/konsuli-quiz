@extends('layouts.app')

@section('title', 'Edit Pertanyaan')

@section('content')
    <h1><i class="fas fa-edit"></i> Edit Pertanyaan</h1>

    <form action="{{ route('questions.update', $question->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="question">Pertanyaan</label>
            <textarea class="form-control" id="question" name="question" rows="3" required>{{ $question->question }}</textarea>
        </div>

        <div class="form-group">
            <label for="question_type">Tipe Pertanyaan</label>
            <select class="form-control" id="question_type" name="question_type" required>
                <option value="multiple_choice" {{ $question->question_type === 'multiple_choice' ? 'selected' : '' }}>Pilihan Ganda</option>
                <option value="true_false" {{ $question->question_type === 'true_false' ? 'selected' : '' }}>Benar/Salah</option>
                <option value="short_answer" {{ $question->question_type === 'short_answer' ? 'selected' : '' }}>Jawaban Singkat</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Simpan Perubahan
        </button>
    </form>
@endsection
