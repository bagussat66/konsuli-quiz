@extends('layouts.app')

@section('title', 'Pencapaian')

@section('content')
    <h1><i class="fas fa-trophy"></i> Pencapaian</h1>

    <div class="row">
        @foreach ($achievements as $achievement)
            <div class="col-md-4 mb-4">
                @include('partials.achievement-card', ['achievement' => $achievement])
            </div>
        @endforeach
    </div>
@endsection
