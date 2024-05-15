@extends('layouts.app')

@section('title', 'Berlangganan')

@section('content')
    <h1><i class="fas fa-shopping-cart"></i> Berlangganan</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $plan->name }}</h5>
            <p class="card-text">{{ $plan->description }}</p>
            <h6 class="card-subtitle mb-2 text-muted">Harga: {{ $plan->price }}</h6>
            <form action="{{ route('subscriptions.store') }}" method="POST">
                @csrf
                <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-shopping-cart"></i> Konfirmasi Langganan
                </button>
            </form>
        </div>
    </div>
@endsection
