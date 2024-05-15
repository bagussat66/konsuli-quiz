@extends('layouts.app')

@section('title', 'Edit Jawaban')

@section('content')
    <h1><i class="fas fa-edit"></i> Edit Jawaban</h1>

    <form action="{{ route('answers.update', $answer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="answer">Jawaban</label>
            <textarea class="form-control" id="answer" name="answer" rows="3" required>{{ $answer->answer }}</textarea>
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="is_correct" name="is_correct" {{ $answer->is_correct ? 'checked' : '' }}>
                <label class="form-check-label" for="is_correct">
                    Jawaban Benar
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Simpan Perubahan
        </button>
    </form>
@endsection
