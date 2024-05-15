<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $plan->name }}</h5>
        <p class="card-text">{{ $plan->description }}</p>
        <h6 class="card-subtitle mb-2 text-muted">Harga: {{ $plan->price }}</h6>
        <a href="{{ route('subscriptions.create', ['plan' => $plan->id]) }}" class="btn btn-primary">
            <i class="fas fa-shopping-cart"></i> Berlangganan
        </a>
    </div>
</div>
