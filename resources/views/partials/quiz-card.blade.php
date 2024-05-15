<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $quiz->title }}</h5>
        <p class="card-text">{{ $quiz->description }}</p>
        <a href="{{ route('quizzes.show', $quiz->id) }}" class="btn btn-primary">
            <i class="fas fa-eye"></i> Lihat Kuis
        </a>
    </div>
</div>
