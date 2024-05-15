@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Daftar Kuis</h1>
            <a href="{{ route('quizzes.create') }}" class="btn btn-primary mb-3">Buat Kuis Baru</a>
            
            @if ($quizzes->count() > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quizzes as $quiz)
                            <tr>
                                <td>{{ $quiz->title }}</td>
                                <td>{{ $quiz->description }}</td>
                                <td>{{ $quiz->created_at->format('d M Y') }}</td>
                                <td>
                                    <a href="{{ route('quizzes.show', $quiz) }}" class="btn btn-info">Lihat</a>
                                    <a href="{{ route('quizzes.edit', $quiz) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('quizzes.destroy', $quiz) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kuis ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Belum ada kuis yang dibuat.</p>
            @endif
        </div>
    </div>
</div>
@endsection
