<?php

namespace App\Http\Controllers\User;

use App\Models\Submission;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $submissions = Submission::latest()->get();
        $totalSubmission = Submission::where('user_id', Auth::id())->count();

        return view('user.dashboard', compact('totalSubmission', 'submissions'));
    }
}
