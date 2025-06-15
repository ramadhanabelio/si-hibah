@extends('layouts.app')

@section('title', 'Pendaftaran Hibah')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('user.dashboard') }}" class="dashboard-text">Dashboard</a> / Pengajuan Ulang
                </h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title mb-0">Pengajuan Ulang</div>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success text-center">{{ session('success') }}</div>
                                @endif
                                <table class="table table-hover custom-table">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kategori Hibah</th>
                                            <th>Masjid/Mushola</th>
                                            <th>Kecamatan</th>
                                            <th>Kelurahan</th>
                                            <th>Tahun</th>
                                            <th>Jenis Pendanaan</th>
                                            <th>Status</th>
                                            <th>Riwayat</th>
                                            <th>File Proposal</th>
                                            <th>Detail</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($submissions as $submission)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $submission->category }}</td>
                                                <td>{{ $submission->name_institution }}</td>
                                                <td>{{ $submission->subdistrict }}</td>
                                                <td>{{ $submission->ward_village }}</td>
                                                <td>{{ $submission->year_submission }}</td>
                                                <td>{{ $submission->type }}</td>
                                                <td>
                                                    @if ($submission->status === 'ditolak')
                                                        <span class="badge badge-danger">Ditolak</span>
                                                    @elseif ($submission->status === 'direvisi')
                                                        <span class="badge badge-secondary">Direvisi</span>
                                                    @else
                                                        <span
                                                            class="badge badge-light">{{ ucfirst($submission->status) }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('user.submission.history', $submission->id) }}"
                                                        class="badge badge-primary">
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
                                                        class="badge badge-warning">
                                                        Cek Validasi
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('user.submission.edit', $submission) }}"
                                                        class="btn btn-warning btn-round">
                                                        <i class="la la-pencil-square"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="12" class="text-center">Tidak ada data revisi atau penolakan.
                                                </td>
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
