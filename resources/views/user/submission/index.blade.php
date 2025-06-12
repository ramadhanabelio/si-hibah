@extends('layouts.app')

@section('title', 'Pendaftaran Hibah')

@section('content')
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
                                <a href="{{ route('user.submission.create') }}" class="btn btn-custom">
                                    Ajukan Sekarang
                                </a>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success text-center">{{ session('success') }}</div>
                                @endif
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
                                                    @if ($submission->status !== 'diterima')
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
                                                                    <i class="la la-trash"></i> </button>
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
@endsection
