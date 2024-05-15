@extends('layouts.app')

@section('title', 'Buat Jawaban Baru')

@section('content')
    <h1><i class="fas fa-plus-circle"></i> Buat Jawaban Baru</h1>

    <form action="{{ route('answers.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="answer">Jawaban</label>
            <textarea class="form-control" id="answer" name="answer" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="is_correct" name="is_correct">
                <label class="form-check-label" for="is_correct">
                    Jawaban Benar
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Simpan Jawaban
        </button>
    </form>
@endsection
