<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;

class AnswerController extends Controller
{
    public function create(Question $question)
    {
        return view('answers.create', compact('question'));
    }

    public function store(Request $request, Question $question)
    {
        $request->validate([
            'answer_text' => 'required',
            'is_correct' => 'required|boolean',
        ]);

        $answer = $question->answers()->create($request->all());

        return redirect()->route('quizzes.show', $question->quiz->id);
    }

    public function edit(Answer $answer)
    {
        return view('answers.edit', compact('answer'));
    }

    public function update(Request $request, Answer $answer)
    {
        $request->validate([
            'answer_text' => 'required',
            'is_correct' => 'required|boolean',
        ]);

        $answer->update($request->all());

        return redirect()->route('quizzes.show', $answer->question->quiz->id);
    }

    public function destroy(Answer $answer)
    {
        $answer->delete();
        return redirect()->route('quizzes.show', $answer->question->quiz->id);
    }
}
