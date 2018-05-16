<?php

namespace App\Http\Controllers\Admin;

use App\Phrase;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $phrase = Phrase::count();
        $user = User::count();

        return view('admin.dashboard', compact('phrase', 'user'));
    }
}
