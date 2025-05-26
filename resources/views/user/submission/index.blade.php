@extends('layouts.app')

@section('title', 'Pendaftaran Hibah')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('user.dashboard') }}">Dashboard</a> / Pendaftaran Hibah
                </h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title mb-0">Pendaftaran Hibah</div>
                                <a href="{{ route('user.submission.create') }}" class="btn btn-success">
                                    Ajukan Sekarang
                                </a>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Masjid/Mushola</th>
                                            <th scope="col">Jenis Hibah</th>
                                            <th scope="col">Kecamatan</th>
                                            <th scope="col">Tahun</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">File Proposal</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($submissions as $index => $submission)
                                            <tr>
                                                <td>{{ $loop->iteration }}.</td>
                                                <td>{{ $submission->name_institution }}</td>
                                                <td>{{ $submission->type }}</td>
                                                <td>{{ $submission->subdistrict }}</td>
                                                <td>{{ $submission->year_submission }}</td>
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
                                                    @if ($submission->status !== 'diterima')
                                                        <a href="{{ route('user.submission.edit', $submission) }}"
                                                            class="btn btn-sm btn-warning">Edit</a>
                                                        <form action="{{ route('user.submission.destroy', $submission) }}"
                                                            method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Hapus pendaftaran ini?')">Hapus</button>
                                                        </form>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">Belum ada data pendaftaran.</td>
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
