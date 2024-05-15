<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::all();
        return view('achievements.index', compact('achievements'));
    }

    public function show(Achievement $achievement)
    {
        return view('achievements.show', compact('achievement'));
    }
}
