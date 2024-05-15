@extends('layouts.app')

@section('title', 'Tag')

@section('content')
    <h1><i class="fas fa-tags"></i> Tag</h1>

    <a href="{{ route('tags.create') }}" class="btn btn-primary mb-4">
        <i class="fas fa-plus"></i> Buat Tag Baru
    </a>

    @if ($tags->isEmpty())
        <p>Tidak ada tag.</p>
    @else
        <div class="row">
            @foreach ($tags as $tag)
                <div class="col-md-4 mb-4">
                    @include('partials.tag-card', ['tag' => $tag])
                </div>
            @endforeach
        </div>
    @endif
@endsection
