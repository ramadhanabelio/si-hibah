<?php

namespace App\Http\Controllers\Admin;

use App\Models\Submission;
use App\Models\Notification;
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

        // if ($request->filled('status')) {
        //     $query->where('status', $request->status);
        // } else {
        //     $query->where('status', 'diproses');
        // }

        if ($request->filled('year_submission')) {
            $query->where('year_submission', $request->year_submission);
        }

        $validates = $query->latest()->get();

        $subdistricts = Submission::select('subdistrict')->distinct()->pluck('subdistrict');
        $types = Submission::select('type')->distinct()->pluck('type');
        $statuses = ['diproses', 'diterima', 'ditolak', 'direvisi'];
        $years = Submission::select('year_submission')->distinct()->pluck('year_submission');

        return view('admin.validate.index', compact('validates', 'subdistricts', 'types', 'statuses', 'years'));
    }

    public function show(Submission $submission)
    {
        return view('admin.validate.show', compact('submission'));
    }

    public function accept(Submission $submission)
    {
        $submission->update(['status' => 'diterima']);

        Notification::create([
            'user_id' => $submission->user_id,
            'title' => 'Pengajuan Diterima',
            'message' => 'Pengajuan Anda sudah diterima.',
        ]);

        return redirect()->route('admin.validate.index')->with('success', 'Pengajuan berhasil diterima.');
    }

    public function reject(Submission $submission)
    {
        $submission->update(['status' => 'ditolak']);

        Notification::create([
            'user_id' => $submission->user_id,
            'title' => 'Pengajuan Ditolak',
            'message' => 'Pengajuan Anda ditolak.',
        ]);

        return redirect()->route('admin.validate.index')->with('success', 'Pengajuan berhasil ditolak.');
    }

    public function revise(Request $request, Submission $submission)
    {
        $request->validate([
            'note' => 'required|string|max:500',
        ]);

        $submission->update([
            'status' => 'direvisi',
            'note' => $request->note,
        ]);

        Notification::create([
            'user_id' => $submission->user_id,
            'title' => 'Revisi Pengajuan',
            'message' => 'Pengajuan Anda butuh revisi, silahkan lihat apa yang perlu direvisi.',
        ]);

        return redirect()->route('admin.validate.index')->with('success', 'Pengajuan berhasil direvisi.');
    }
}
