<?php

namespace App\Http\Controllers\User;

use App\Models\Submission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = Submission::latest()->get();
        return view('user.submission.index', compact('submissions'));
    }

    public function create()
    {
        return view('user.submission.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'name_institution' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'date_submission' => 'required|date',
            'year_submission' => 'required|digits:4|integer',
            'subdistrict' => 'required|string|max:100',
            'address' => 'required|string|max:255',
            'grand_total' => 'required|numeric',
            'proposal' => 'required|mimes:pdf,doc,docx|max:2048',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $proposalPath = $request->file('proposal')->store('proposals', 'public');
        $photoPath = $request->file('photo') ? $request->file('photo')->store('photos', 'public') : null;

        Submission::create([
            'title' => $request->title,
            'name_institution' => $request->name_institution,
            'type' => $request->type,
            'date_submission' => $request->date_submission,
            'year_submission' => $request->year_submission,
            'subdistrict' => $request->subdistrict,
            'address' => $request->address,
            'grand_total' => $request->grand_total,
            'proposal' => $proposalPath,
            'photo' => $photoPath,
            'status' => 'diproses',
        ]);

        return redirect()->route('user.submission.index')->with('success', 'Pendaftaran hibah berhasil diajukan.');
    }

    public function edit(Submission $submission)
    {
        return view('user.submission.edit', compact('submission'));
    }

    public function update(Request $request, Submission $submission)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'name_institution' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'date_submission' => 'required|date',
            'year_submission' => 'required|digits:4|integer',
            'subdistrict' => 'required|string|max:100',
            'address' => 'required|string|max:255',
            'grand_total' => 'required|numeric',
            'proposal' => 'nullable|mimes:pdf,doc,docx|max:2048',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('proposal')) {
            Storage::disk('public')->delete($submission->proposal);
            $submission->proposal = $request->file('proposal')->store('proposals', 'public');
        }

        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($submission->photo);
            $submission->photo = $request->file('photo')->store('photos', 'public');
        }

        $submission->update($request->except(['proposal', 'photo']) + [
            'proposal' => $submission->proposal,
            'photo' => $submission->photo,
        ]);

        return redirect()->route('user.submission.index')->with('success', 'Pendaftaran hibah berhasil diperbarui.');
    }

    public function destroy(Submission $submission)
    {
        Storage::delete([$submission->proposal, $submission->photo]);
        $submission->delete();

        return redirect()->route('user.submission.index')->with('success', 'Pendaftaran hibah berhasil dihapus.');
    }
}
