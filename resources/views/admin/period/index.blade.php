@extends('layouts.app')

@section('title', 'Periode Pendaftaran Hibah')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('admin.dashboard') }}" class="dashboard-text">Dashboard</a> / Periode Pendaftaran Hibah
                </h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title mb-0">Daftar Periode Pendaftaran Hibah</div>
                            </div>

                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success text-center">{{ session('success') }}</div>
                                @endif

                                {{-- Form Tambah / Edit --}}
                                <form method="POST"
                                    action="{{ isset($editPeriod) ? route('admin.periods.update', $editPeriod->id) : route('admin.periods.store') }}"
                                    class="mb-4">
                                    @csrf
                                    @if (isset($editPeriod))
                                        @method('PUT')
                                    @endif

                                    <div class="row align-items-end">
                                        <div class="col-md-5">
                                            <label for="start_date">Tanggal Mulai</label>
                                            <input type="date" id="start_date" name="start_date" class="form-control"
                                                value="{{ old('start_date', $editPeriod->start_date ?? '') }}" required>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="end_date">Tanggal Selesai</label>
                                            <input type="date" id="end_date" name="end_date" class="form-control"
                                                value="{{ old('end_date', $editPeriod->end_date ?? '') }}" required>
                                        </div>

                                        {{-- Optional: Status hidden field for edit --}}
                                        <input type="hidden" name="status"
                                            value="{{ $editPeriod->status ?? 'nonaktif' }}">

                                        <div class="col-md-2">
                                            <button type="submit"
                                                class="btn btn-{{ isset($editPeriod) ? 'warning' : 'success' }} btn-block">
                                                {{ isset($editPeriod) ? 'Update' : 'Tambah' }}
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                {{-- Tabel --}}
                                <table class="table table-hover custom-table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($periods as $index => $period)
                                            <tr>
                                                <td>{{ $loop->iteration }}.</td>
                                                <td>{{ \Carbon\Carbon::parse($period->start_date)->format('d M Y') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($period->end_date)->format('d M Y') }}</td>
                                                <td>
                                                    @php
                                                        $badgeClass =
                                                            [
                                                                'aktif' => 'success',
                                                                'nonaktif' => 'secondary',
                                                            ][$period->status] ?? 'dark';
                                                    @endphp
                                                    <span class="badge badge-{{ $badgeClass }}">
                                                        {{ ucfirst($period->status) }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.periods.index', ['edit' => $period->id]) }}"
                                                        class="badge badge-warning">Edit</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">Belum ada periode terdaftar.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
