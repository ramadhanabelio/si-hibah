@extends('layouts.app')

@section('title', 'Detail Pengajuan')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('user.dashboard') }}" class="dashboard-text">Dashboard</a> /
                    <a href="{{ route('user.submission.index') }}" class="dashboard-text">Pengajuan</a> /
                    Detail Pengajuan
                </h4>

                @if ($submission->status === 'ditolak')
                    <div class="alert alert-danger">
                        <strong>Detail pengajuan:</strong> Silahkan perbaiki dokumen sesuai catatan di bawah dan ajukan
                        kembali.
                    </div>
                @elseif ($submission->status === 'perlu revisi')
                    <div class="alert alert-warning">
                        <strong>Status: Perlu Revisi</strong><br>Silahkan perbaiki dokumen sesuai catatan di bawah dan
                        ajukan kembali.
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Riwayat Pengajuan</h5>

                        <div class="status-card border-start-warning mb-3">
                            <div class="status-header">
                                <span class="badge bg-warning text-white">Diproses</span>
                                <small class="text-muted ml-2">{{ $submission->created_at->format('d M Y') }}</small>
                            </div>
                            <div class="status-body mt-2">
                                <p>{{ $submission->title }}</p>
                            </div>
                        </div>

                        @if ($submission->status === 'ditolak')
                            <div class="status-card border-start-danger mb-3">
                                <div class="status-header">
                                    <span class="badge bg-danger text-white">Ditolak</span>
                                </div>
                                <div class="status-body mt-2">
                                    <strong>Catatan:</strong> Dokumen tidak valid atau tidak lengkap.
                                </div>
                            </div>
                        @elseif ($submission->status === 'direvisi')
                            <div class="status-card border-start-secondary mb-3">
                                <div class="status-header">
                                    <span class="badge bg-secondary text-white">Perlu Revisi</span>
                                </div>
                                <div class="status-body mt-2">
                                    <strong>Catatan:</strong> {{ $submission->note }}.
                                </div>
                            </div>
                        @elseif ($submission->status === 'diterima')
                            <div class="status-card border-start-success mb-3">
                                <div class="status-header">
                                    <span class="badge bg-success text-white">Diterima</span>
                                </div>
                                <div class="status-body mt-2">
                                    <strong>Catatan:</strong> Pengajuan disetujui dan akan diproses lebih lanjut.
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .status-card {
            padding: 1rem;
            border-left: 6px solid #ccc;
            background-color: #f9f9f9;
            border-radius: 6px;
        }

        .border-start-warning {
            border-left-color: #ffc107 !important;
        }

        .border-start-danger {
            border-left-color: #dc3545 !important;
        }

        .border-start-success {
            border-left-color: #198754 !important;
        }

        .status-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .status-body {
            font-size: 0.95rem;
        }
    </style>
@endsection
