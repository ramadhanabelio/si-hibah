<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Submission;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\SubmissionPeriod;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SubmissionController extends Controller
{
    public function index()
    {
        $submissions = Submission::where('user_id', Auth::id())->latest()->get();
        return view('user.submission.index', compact('submissions'));
    }

    public function indexRe()
    {
        $submissions = Submission::where('user_id', Auth::id())
            ->whereIn('status', ['direvisi', 'ditolak'])
            ->orderByDesc('created_at')
            ->get();

        return view('user.submission.index-re', compact('submissions'));
    }

    public function show(Submission $submission)
    {
        $submission->load('validation');
        return view('user.submission.show', compact('submission'));
    }

    public function history(Submission $submission)
    {
        return view('user.submission.history', compact('submission'));
    }

    public function create()
    {
        if (!SubmissionPeriod::isActive()) {
            return redirect()->route('user.submission.index')
                ->with('error', 'Pendaftaran hibah sudah ditutup.');
        }

        return view('user.submission.create');
    }

    public function store(Request $request)
    {
        if (!SubmissionPeriod::isActive()) {
            return back()->with('error', 'Pendaftaran hibah sudah ditutup.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'name_institution' => 'required|string|max:255',
            'name_manager' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'type' => 'required|string|max:100',
            'date_submission' => 'required|date',
            'year_submission' => 'required|digits:4|integer',
            'subdistrict' => 'required|string|max:100',
            'ward_village' => 'required|string|max:100',
            'address' => 'required|string|max:255',
            'grand_total' => 'required|numeric',

            'proposal' => 'required|mimes:pdf,doc,docx|max:2048',
            'deed_of_establishment' => 'required|mimes:pdf,doc,docx|max:2048',
            'npwp' => 'required|mimes:pdf,jpeg,png,jpg|max:2048',
            'account_book' => 'required|mimes:pdf,jpeg,png,jpg|max:2048',
            'rab_renovation' => 'required|mimes:pdf,doc,docx,xls,xlsx|max:2048',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'proposal.max' => 'File Proposal terlalu besar. Maksimal ukuran adalah 2MB.',
            'deed_of_establishment.max' => 'File Akta Pendirian terlalu besar. Maksimal ukuran adalah 2MB.',
            'npwp.max' => 'File NPWP terlalu besar. Maksimal ukuran adalah 2MB.',
            'account_book.max' => 'File Buku Rekening terlalu besar. Maksimal ukuran adalah 2MB.',
            'rab_renovation.max' => 'File RAB Renovasi terlalu besar. Maksimal ukuran adalah 2MB.',
            'photo.max' => 'File Foto terlalu besar. Maksimal ukuran adalah 2MB.',
        ]);

        $proposalPath = $request->file('proposal')->store('proposal', 'public');
        $deedPath = $request->file('deed_of_establishment')->store('akta_pendirian', 'public');
        $npwpPath = $request->file('npwp')->store('npwp', 'public');
        $accountBookPath = $request->file('account_book')->store('buku_rekening', 'public');
        $rabPath = $request->file('rab_renovation')->store('rab', 'public');
        $photoPath = $request->file('photo') ? $request->file('photo')->store('photos', 'public') : null;

        $submission = Submission::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'name_institution' => $request->name_institution,
            'name_manager' => $request->name_manager,
            'category' => $request->category,
            'type' => $request->type,
            'date_submission' => $request->date_submission,
            'year_submission' => $request->year_submission,
            'subdistrict' => $request->subdistrict,
            'ward_village' => $request->ward_village,
            'address' => $request->address,
            'grand_total' => $request->grand_total,
            'proposal' => $proposalPath,
            'deed_of_establishment' => $deedPath,
            'npwp' => $npwpPath,
            'account_book' => $accountBookPath,
            'rab_renovation' => $rabPath,
            'photo' => $photoPath,
            'status' => 'diproses',
        ]);

        Notification::create([
            'user_id' => Auth::id(),
            'title' => 'Pengajuan Baru Dikirim',
            'message' => 'Pengajuan Anda sedang diproses, silakan tunggu beberapa saat lagi untuk validasi.',
        ]);

        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            Notification::create([
                'user_id' => $admin->id,
                'title' => 'Permohonan Baru',
                'message' => "{$submission->name_manager} mengajukan permohonan pada " . now()->format('d M Y'),
            ]);
        }

        return redirect()->route('user.submission.index')->with('success', 'Pendaftaran hibah berhasil diajukan.');
    }

    public function edit(Submission $submission)
    {
        if (!SubmissionPeriod::isActive()) {
            return redirect()->route('user.submission.index')
                ->with('error', 'Periode pengajuan telah berakhir. Tidak dapat mengedit.');
        }

        return view('user.submission.edit', compact('submission'));
    }

    public function update(Request $request, Submission $submission)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'name_institution' => 'required|string|max:255',
            'name_manager' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'type' => 'required|string|max:100',
            'date_submission' => 'required|date',
            'year_submission' => 'required|digits:4|integer|min:2024',
            'subdistrict' => 'required|string|max:100',
            'ward_village' => 'required|string|max:100',
            'address' => 'required|string|max:255',
            'grand_total' => 'required|numeric',

            'proposal' => 'nullable|mimes:pdf,doc,docx|max:2048',
            'deed_of_establishment' => 'nullable|mimes:pdf,doc,docx|max:2048',
            'npwp' => 'nullable|mimes:pdf,jpeg,png,jpg|max:2048',
            'account_book' => 'nullable|mimes:pdf,jpeg,png,jpg|max:2048',
            'rab_renovation' => 'nullable|mimes:pdf,doc,docx,xls,xlsx|max:2048',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'proposal.max' => 'File Proposal terlalu besar. Maksimal ukuran adalah 2MB.',
            'deed_of_establishment.max' => 'File Akta Pendirian terlalu besar. Maksimal ukuran adalah 2MB.',
            'npwp.max' => 'File NPWP terlalu besar. Maksimal ukuran adalah 2MB.',
            'account_book.max' => 'File Buku Rekening terlalu besar. Maksimal ukuran adalah 2MB.',
            'rab_renovation.max' => 'File RAB Renovasi terlalu besar. Maksimal ukuran adalah 2MB.',
            'photo.max' => 'File Foto terlalu besar. Maksimal ukuran adalah 2MB.',
        ]);

        if ($request->hasFile('proposal')) {
            Storage::disk('public')->delete($submission->proposal);
            $submission->proposal = $request->file('proposal')->store('proposal', 'public');
        }

        if ($request->hasFile('deed_of_establishment')) {
            Storage::disk('public')->delete($submission->deed_of_establishment);
            $submission->deed_of_establishment = $request->file('akta_pendirian')->store('deeds', 'public');
        }

        if ($request->hasFile('npwp')) {
            Storage::disk('public')->delete($submission->npwp);
            $submission->npwp = $request->file('npwp')->store('npwp', 'public');
        }

        if ($request->hasFile('account_book')) {
            Storage::disk('public')->delete($submission->account_book);
            $submission->account_book = $request->file('account_book')->store('buku_rekening', 'public');
        }

        if ($request->hasFile('rab_renovation')) {
            Storage::disk('public')->delete($submission->rab_renovation);
            $submission->rab_renovation = $request->file('rab_renovation')->store('rab', 'public');
        }

        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($submission->photo);
            $submission->photo = $request->file('photo')->store('photos', 'public');
        }

        $submission->status = 'diproses';

        $submission->update($request->except([
            'proposal',
            'deed_of_establishment',
            'npwp',
            'account_book',
            'rab_renovation',
            'photo'
        ]) + [
            'proposal' => $submission->proposal,
            'deed_of_establishment' => $submission->deed_of_establishment,
            'npwp' => $submission->npwp,
            'account_book' => $submission->account_book,
            'rab_renovation' => $submission->rab_renovation,
            'photo' => $submission->photo,
            'status' => $submission->status,
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
