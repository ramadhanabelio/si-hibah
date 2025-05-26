<?php

namespace App\Http\Controllers\Admin;

use App\Models\Submission;
use App\Http\Controllers\Controller;

class ValidateController extends Controller
{
    public function index()
    {
        $validates = Submission::latest()->get();
        return view('admin.validate.index', compact('validates'));
    }

    public function accept(Submission $submission)
    {
        $submission->update(['status' => 'diterima']);
        return redirect()->route('admin.validate.index')->with('success', 'Pengajuan berhasil diterima.');
    }

    public function reject(Submission $submission)
    {
        $submission->update(['status' => 'ditolak']);
        return redirect()->route('admin.validate.index')->with('success', 'Pengajuan berhasil ditolak.');
    }
}
