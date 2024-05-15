@extends('layouts.app')

@section('title', 'Buat Kuis Baru')

@section('content')
    <h1><i class="fas fa-plus-circle"></i> Buat Kuis Baru</h1>

    <form action="{{ route('quizzes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Judul Kuis</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi Kuis</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Simpan Kuis
        </button>
    </form>
@endsection
