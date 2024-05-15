@extends('layouts.app')

@section('title', $achievement->name)

@section('content')
    <h1><i class="fas fa-trophy"></i> {{ $achievement->name }}</h1>

    <div class="card">
        <div class="card-body">
            <p class="card-text">{{ $achievement->description }}</p>
            <p class="card-text"><small class="text-muted">Diperoleh oleh {{ $achievement->users_count }} pengguna</small></p>
        </div>
    </div>
@endsection
