<?php

namespace App\Http\Controllers\Admin;

use App\Phrase;
use App\User;
use App\Vote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $phrase = Phrase::count();

        $phrasePending = Phrase::where('status','PENDING')
        ->count();

        $phraseReject = Phrase::where('status','REJECTED')
        ->count();

        $user = User::count();

        $rankings = Vote::orderBy('vote', 'DESC')
            ->paginate(10);

        return view('admin.dashboard', compact('phrase', 'user','rankings','phrasePending','phraseReject'));
    }
}
