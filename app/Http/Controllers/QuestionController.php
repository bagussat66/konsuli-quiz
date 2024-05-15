<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;

class QuestionController extends Controller
{
    public function create(Quiz $quiz)
    {
        return view('questions.create', compact('quiz'));
    }

    public function store(Request $request, Quiz $quiz)
    {
        $request->validate([
            'question_text' => 'required',
            // Tambahkan validasi untuk field lainnya
        ]);

        $question = $quiz->questions()->create($request->all());

        return redirect()->route('quizzes.show', $quiz->id);
    }

    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question)
    {
        $request->validate([
            'question_text' => 'required',
            // Tambahkan validasi untuk field lainnya
        ]);

        $question->update($request->all());

        return redirect()->route('quizzes.show', $question->quiz->id);
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('quizzes.show', $question->quiz->id);
    }
}
