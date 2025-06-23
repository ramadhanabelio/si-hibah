<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubmissionPeriod;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubmissionPeriodController extends Controller
{
    public function index(Request $request)
    {
        $periods = SubmissionPeriod::latest()->get();

        $editPeriod = $request->filled('edit') ? SubmissionPeriod::find($request->edit) : null;

        return view('admin.period.index', compact('periods', 'editPeriod'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
        ]);

        $status = $this->determineStatus($validated['start_date'], $validated['end_date']);

        SubmissionPeriod::create([
            'start_date' => $validated['start_date'],
            'end_date'   => $validated['end_date'],
            'status'     => $status,
        ]);

        return redirect()->route('admin.periods.index')->with('success', 'Periode berhasil ditambahkan.');
    }

    public function update(Request $request, SubmissionPeriod $period)
    {
        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
        ]);

        $status = $this->determineStatus($validated['start_date'], $validated['end_date']);

        $period->update([
            'start_date' => $validated['start_date'],
            'end_date'   => $validated['end_date'],
            'status'     => $status,
        ]);

        return redirect()->route('admin.periods.index')->with('success', 'Periode berhasil diperbarui.');
    }

    private function determineStatus($start, $end)
    {
        $today = now()->toDateString();

        return ($start <= $today && $end >= $today) ? 'aktif' : 'nonaktif';
    }
}
