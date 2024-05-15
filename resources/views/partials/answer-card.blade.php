<div class="card mb-3">
    <div class="card-body">
        <p class="card-text">{{ $answer->answer }}</p>
        @if ($answer->is_correct)
            <span class="badge badge-success">Jawaban Benar</span>
        @endif
    </div>
</div>
