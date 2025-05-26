<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Models\Submission;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalContact = Contact::count();
        $totalSubmission = Submission::count();

        return view('admin.dashboard', compact('totalContact', 'totalSubmission'));
    }
}
