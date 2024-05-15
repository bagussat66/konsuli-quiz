<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $question->question }}</h5>
        <p class="card-text">Tipe: {{ $question->question_type }}</p>
        <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-primary">
            <i class="fas fa-edit"></i> Edit Pertanyaan
        </a>
    </div>
</div>
