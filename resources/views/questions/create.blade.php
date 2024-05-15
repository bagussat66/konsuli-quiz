@extends('layouts.app')

@section('title', 'Buat Pertanyaan Baru')

@section('content')
    <h1><i class="fas fa-plus-circle"></i> Buat Pertanyaan Baru</h1>

    <form action="{{ route('questions.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="question">Pertanyaan</label>
            <textarea class="form-control" id="question" name="question" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="question_type">Tipe Pertanyaan</label>
            <select class="form-control" id="question_type" name="question_type" required>
                <option value="multiple_choice">Pilihan Ganda</option>
                <option value="true_false">Benar/Salah</option>
                <option value="short_answer">Jawaban Singkat</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Simpan Pertanyaan
        </button>
    </form>
@endsection
