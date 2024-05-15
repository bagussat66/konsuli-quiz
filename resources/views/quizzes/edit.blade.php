@extends('layouts.app')

@section('title', 'Edit Kuis')

@section('content')
    <h1><i class="fas fa-edit"></i> Edit Kuis</h1>

    <form action="{{ route('quizzes.update', $quiz->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Judul Kuis</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $quiz->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi Kuis</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $quiz->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Simpan Perubahan
        </button>
    </form>
@endsection
