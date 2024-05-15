<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::latest()->paginate(10);
        return view('quizzes.index', compact('quizzes'));
    }

    public function create()
    {
        return view('quizzes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Tambahkan validasi untuk field lainnya
        ]);

        $quiz = Quiz::create($request->all());

        return redirect()->route('quizzes.show', $quiz->id);
    }

    public function show(Quiz $quiz)
    {
        return view('quizzes.show', compact('quiz'));
    }

    public function edit(Quiz $quiz)
    {
        return view('quizzes.edit', compact('quiz'));
    }

    public function update(Request $request, Quiz $quiz)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            // Tambahkan validasi untuk field lainnya
        ]);

        $quiz->update($request->all());

        return redirect()->route('quizzes.show', $quiz->id);
    }

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect()->route('quizzes.index');
    }

    public function attempt(Quiz $quiz)
    {
        return view('quizzes.attempt', compact('quiz'));
    }

    public function submit(Request $request, Quiz $quiz)
    {
        $answers = $request->input('answers');
        $correctAnswers = 0;

        foreach ($quiz->questions as $question) {
            $userAnswer = $answers[$question->id] ?? null;
            $correctAnswer = $question->answers()->where('is_correct', true)->first();

            if ($userAnswer == $correctAnswer->id) {
                $correctAnswers++;
            }
        }

        $score = ($correctAnswers / $quiz->questions->count()) * 100;

        // Save the user's score or perform any other necessary actions

        return view('quizzes.result', [
            'quiz' => $quiz,
            'score' => $score,
            'correctAnswers' => $correctAnswers,
            'totalQuestions' => $quiz->questions->count(),
        ]);
    }
}
