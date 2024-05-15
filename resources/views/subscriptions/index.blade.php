@extends('layouts.app')

@section('title', 'Langganan')

@section('content')
    <h1><i class="fas fa-certificate"></i> Langganan</h1>

    <div class="row">
        @foreach ($subscriptionPlans as $plan)
            <div class="col-md-4 mb-4">
                @include('partials.subscription-plan', ['plan' => $plan])
            </div>
        @endforeach
    </div>
@endsection
