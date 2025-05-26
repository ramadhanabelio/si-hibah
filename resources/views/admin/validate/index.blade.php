@extends('layouts.app')

@section('title', 'Pengajuan Dana Hibah')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('admin.dashboard') }}">Dashboard</a> / Pengajuan Dana Hibah
                </h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title mb-0">Pengajuan Dana Hibah</div>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success text-center">{{ session('success') }}</div>
                                @endif
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
                                        @forelse($validates as $index => $validate)
                                            <tr>
                                                <td>{{ $loop->iteration }}.</td>
                                                <td>{{ $validate->name_institution }}</td>
                                                <td>{{ $validate->type }}</td>
                                                <td>{{ $validate->subdistrict }}</td>
                                                <td>{{ $validate->year_submission }}</td>
                                                <td>
                                                    @if ($validate->status === 'diproses')
                                                        <span class="badge badge-warning">Diproses</span>
                                                    @elseif ($validate->status === 'diterima')
                                                        <span class="badge badge-success">Diterima</span>
                                                    @elseif ($validate->status === 'ditolak')
                                                        <span class="badge badge-danger">Ditolak</span>
                                                    @else
                                                        <span
                                                            class="badge badge-secondary">{{ ucfirst($validate->status) }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($validate->proposal)
                                                        <a href="{{ asset('storage/' . $validate->proposal) }}"
                                                            target="_blank" class="badge badge-info">
                                                            File Proposal
                                                        </a>
                                                    @else
                                                        <span class="text-muted">Belum ada</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($validate->status === 'diproses')
                                                        <form action="{{ route('admin.validate.accept', $validate->id) }}"
                                                            method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="btn btn-sm btn-success"
                                                                onclick="return confirm('Terima pengajuan ini?')">Terima</button>
                                                        </form>

                                                        <form action="{{ route('admin.validate.reject', $validate->id) }}"
                                                            method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('PATCH')
                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Tolak pengajuan ini?')">Tolak</button>
                                                        </form>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">Belum ada data pengajuan.</td>
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
