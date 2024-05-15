<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class HomeController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::latest()->take(10)->get();
        return view('home.index', compact('quizzes'));
    }
}
