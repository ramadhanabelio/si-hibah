@extends('layouts.app')

@section('title', 'Pendaftaran Hibah')

@section('content')
    <style>
        .main-panel {
            background: #f2fff8;
            min-height: 100vh;
            padding: 20px 0;
        }
        
        .page-title {
            color: white;
            font-weight: 600;
            font-size: 24px;
            margin-bottom: 30px;
        }
        
        .dashboard-text {
            color: rgb(46, 92, 36);
            text-decoration: none;
        }
        
        .dashboard-text:hover {
            color: white;
            text-decoration: none;
        }
        
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            background: white;
        }
        
        .card-header {
            background: #316d62;
            color: white;
            border: none;
            padding: 25px 30px;
            border-radius: 20px 20px 0 0 !important;
        }
        
        .card-title {
            font-size: 20px;
            font-weight: 600;
            margin: 0;
        }
        
        .btn-custom {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            border: none;
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-custom:hover:not(.disabled) {
            transform: translateY(-2px);
            color: white;
        }
        
        .btn-custom.disabled {
            background: #bdc3c7;
            cursor: not-allowed;
        }
        
        .alert {
            border: none;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 25px;
            font-weight: 500;
        }
        
        .alert-success {
            background: #197e6b;
            color: white;
        }
        
        .alert-info {
            background:rgba(82, 136, 95, 0.99);
            color: white;
        }
        
        .table-responsive {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        .custom-table {
            border-radius: 15px;
            overflow: hidden;
            min-width: 1200px;
            margin-bottom: 0;
        }
        
        .custom-table thead {
            background: #316d62;
        }
        
        .custom-table thead th {
            color: white;
            font-weight: 600;
            border: none;
            padding: 18px 15px;
            text-align: center;
        }
        
        .custom-table tbody tr:hover {
            background: #f8f9ff;
        }
        
        .custom-table tbody td {
            padding: 15px;
            border: none;
            vertical-align: middle;
            text-align: center;
        }
        
        .badge {
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 11px;
        }
        
        .badge-warning {
            background: linear-gradient(135deg, #f39c12 0%, #f1c40f 100%);
            color: white;
            border: none;
        }
        
        .badge-success {
            background: linear-gradient(135deg, #27ae60 0%, #2ecc71 100%);
            color: white;
            border: none;
        }
        
        .badge-danger {
            background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
            color: white;
            border: none;
        }
        
        .badge-primary {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
            border: none;
        }
        
        .badge-info {
            background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
            color: white;
            border: none;
        }
        
        .badge-secondary {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
            color: white;
            border: none;
        }
        
        .btn-round {
            border-radius: 50%;
            width: 35px;
            height: 35px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            border: none;
            margin: 0 2px;
        }
        
        .btn-warning.btn-round {
            background: linear-gradient(135deg, #f39c12 0%, #f1c40f 100%);
            color: white;
        }
        
        .btn-danger.btn-round {
            background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
            color: white;
        }
        
        /* Scroll styling */
        .table-responsive::-webkit-scrollbar {
            height: 8px;
        }
        
        .table-responsive::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .table-responsive::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
        }
        
        .table-responsive::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
        }
    </style>

    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('user.dashboard') }}" class="dashboard-text">Dashboard</a> / Pendaftaran Hibah
                </h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title mb-0">Pendaftaran Hibah</div>
                                @php
                                    $isActive = \App\Models\SubmissionPeriod::isActive();
                                @endphp

                                <a href="{{ $isActive ? route('user.submission.create') : '#' }}"
                                    class="btn btn-custom {{ $isActive ? '' : 'disabled' }}">
                                    Ajukan Hibah
                                </a>

                                @if (!$isActive)
                                    <p class="text-danger mt-2">Pendaftaran sudah ditutup.</p>
                                @endif
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success text-center">{{ session('success') }}</div>
                                @endif

                                @php
                                    $period = \App\Models\SubmissionPeriod::orderByDesc('id')->first();
                                @endphp

                                @if ($period)
                                    <div class="alert alert-info">
                                        <strong>Periode Pengajuan:</strong><br>
                                        Dibuka: {{ \Carbon\Carbon::parse($period->start_date)->format('d M Y') }}
                                        Ditutup: {{ \Carbon\Carbon::parse($period->end_date)->format('d M Y') }}
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-hover custom-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Kategori Hibah</th>
                                            <th scope="col">Masjid/Mushola</th>
                                            <th scope="col">Kecamatan</th>
                                            <th scope="col">Kelurahan</th>
                                            <th scope="col">Tahun</th>
                                            <th scope="col">Jenis Pendanaan</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Riwayat</th>
                                            <th scope="col">File Proposal</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($submissions as $index => $submission)
                                            <tr>
                                                <td>{{ $loop->iteration }}.</td>
                                                <td>{{ $submission->category }}</td>
                                                <td>{{ $submission->name_institution }}</td>
                                                <td>{{ $submission->subdistrict }}</td>
                                                <td>{{ $submission->ward_village }}</td>
                                                <td>{{ $submission->year_submission }}</td>
                                                <td>{{ $submission->type }}</td>
                                                <td>
                                                    @if ($submission->status === 'diproses')
                                                        <span class="badge badge-warning">Diproses</span>
                                                    @elseif ($submission->status === 'diterima')
                                                        <span class="badge badge-success">Diterima</span>
                                                    @elseif ($submission->status === 'ditolak')
                                                        <span class="badge badge-danger">Ditolak</span>
                                                    @else
                                                        <span
                                                            class="badge badge-secondary">{{ ucfirst($submission->status) }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('user.submission.history', $submission->id) }}"
                                                        class="badge badge-primary" style="cursor:pointer;">
                                                        Lihat Riwayat
                                                    </a>
                                                </td>
                                                <td>
                                                    @if ($submission->proposal)
                                                        <a href="{{ asset('storage/' . $submission->proposal) }}"
                                                            target="_blank" class="badge badge-info">
                                                            File Proposal
                                                        </a>
                                                    @else
                                                        <span class="text-muted">Belum ada</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('user.submission.show', $submission->id) }}"
                                                        class="badge badge-warning" style="cursor:pointer;">
                                                        Cek Validasi
                                                    </a>
                                                </td>
                                                <td>
                                                    @if ($submission->status === 'direvisi' || $submission->status === 'diproses')
                                                        <div class="d-inline-flex gap-1">
                                                            <a href="{{ route('user.submission.edit', $submission) }}"
                                                                class="btn btn-warning btn-round mr-2">
                                                                <i class="la la-pencil-square"></i>
                                                            </a>
                                                            <form
                                                                action="{{ route('user.submission.destroy', $submission) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-round"
                                                                    onclick="return confirm('Hapus pendaftaran ini?')">
                                                                    <i class="la la-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="12" class="text-center">Belum ada data pendaftaran.</td>
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
    </div>
@endsection