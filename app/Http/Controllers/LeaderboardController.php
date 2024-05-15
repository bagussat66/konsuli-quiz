<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LeaderboardController extends Controller
{
    public function index()
    {
        $users = User::orderBy('score', 'desc')->paginate(10);
        return view('leaderboard.index', compact('users'));
    }
}
