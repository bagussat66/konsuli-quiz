<div class="media">
    <i class="fas fa-bell mr-3"></i>
    <div class="media-body">
        <h5 class="mt-0">{{ $notification->title }}</h5>
        <p>{{ $notification->message }}</p>
        <small>{{ $notification->created_at->diffForHumans() }}</small>
    </div>
</div>
