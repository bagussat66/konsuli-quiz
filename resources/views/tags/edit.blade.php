@extends('layouts.app')

@section('title', 'Edit Tag')

@section('content')
    <h1><i class="fas fa-edit"></i> Edit Tag</h1>

    <form action="{{ route('tags.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama Tag</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $tag->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Simpan Perubahan
        </button>
    </form>
@endsection
