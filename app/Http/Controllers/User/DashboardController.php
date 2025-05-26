<?php

namespace App\Http\Controllers\User;

use App\Models\Submission;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSubmission = Submission::count();

        return view('user.dashboard', compact('totalSubmission'));
    }
}
