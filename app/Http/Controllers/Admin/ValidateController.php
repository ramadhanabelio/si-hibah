<?php

namespace App\Http\Controllers\Admin;

use App\Models\Submission;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubmissionValidation;

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

    public function store(Request $request, Submission $submission)
    {
        $data = $request->only([
            'valid_proposal',
            'valid_deed',
            'valid_npwp',
            'valid_account_book',
            'valid_rab',
            'valid_photo',

            'valid_name_institution',
            'valid_name_manager',
            'valid_address',
            'valid_subdistrict',
            'valid_ward_village',
            'valid_category',
            'valid_type',

            'subst_goal',
            'subst_benefit',
            'subst_timeline',
        ]);

        foreach ($data as $key => $value) {
            $data[$key] = $value ? 1 : 0;
        }

        $data['submission_id'] = $submission->id;

        SubmissionValidation::updateOrCreate(
            ['submission_id' => $submission->id],
            $data
        );

        return redirect()->route('admin.validate.index')->with('success', 'Validasi berhasil disimpan.');
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
