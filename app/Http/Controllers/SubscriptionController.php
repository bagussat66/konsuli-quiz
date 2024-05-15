<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Auth::user()->subscriptions;
        return view('subscriptions.index', compact('subscriptions'));
    }

    public function create()
    {
        return view('subscriptions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'plan' => 'required',
            // Tambahkan validasi untuk field lainnya
        ]);

        $subscription = Auth::user()->subscriptions()->create($request->all());

        return redirect()->route('subscriptions.index');
    }
}
