@extends('layouts.app')

@section('title', 'Notifikasi')

@section('content')
    <h1><i class="fas fa-bell"></i> Notifikasi</h1>

    @if ($notifications->isEmpty())
        <p>Tidak ada notifikasi.</p>
    @else
        <ul class="list-group">
            @foreach ($notifications as $notification)
                <li class="list-group-item">
                    @include('partials.notification-item', ['notification' => $notification])
                </li>
            @endforeach
        </ul>
    @endif
@endsection
