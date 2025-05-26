<?php

namespace App\Http\Controllers\Admin;

use App\Models\Submission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ValidateController extends Controller
{
    public function index(Request $request)
    {
        $query = Submission::query();

        if ($request->filled('subdistrict')) {
            $query->where('subdistrict', $request->subdistrict);
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('year_submission')) {
            $query->where('year_submission', $request->year_submission);
        }

        $validates = $query->latest()->get();

        $subdistricts = Submission::select('subdistrict')->distinct()->pluck('subdistrict');
        $types = Submission::select('type')->distinct()->pluck('type');
        $statuses = ['diproses', 'diterima', 'ditolak'];
        $years = Submission::select('year_submission')->distinct()->pluck('year_submission');

        return view('admin.validate.index', compact('validates', 'subdistricts', 'types', 'statuses', 'years'));
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
