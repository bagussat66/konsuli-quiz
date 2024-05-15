@extends('layouts.app')

@section('title', 'Buat Tag Baru')

@section('content')
    <h1><i class="fas fa-plus-circle"></i> Buat Tag Baru</h1>

    <form action="{{ route('tags.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nama Tag</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Simpan Tag
        </button>
    </form>
@endsection
