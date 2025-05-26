@extends('layouts.app')

@section('title', 'Pengajuan Dana Hibah')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('admin.dashboard') }}" class="dashboard-text">Dashboard</a> / Daftar Pengajuan Dana
                    Hibah
                </h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title mb-0">Daftar Pengajuan Dana Hibah</div>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success text-center">{{ session('success') }}</div>
                                @endif

                                <form method="GET" class="mb-4">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select name="subdistrict" class="form-control form-control-sm">
                                                <option value="">Semua Kecamatan</option>
                                                @foreach ($subdistricts as $subdistrict)
                                                    <option value="{{ $subdistrict }}"
                                                        {{ request('subdistrict') == $subdistrict ? 'selected' : '' }}>
                                                        {{ $subdistrict }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="type" class="form-control form-control-sm">
                                                <option value="">Semua Jenis</option>
                                                @foreach ($types as $type)
                                                    <option value="{{ $type }}"
                                                        {{ request('type') == $type ? 'selected' : '' }}>
                                                        {{ $type }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select name="status" class="form-control form-control-sm">
                                                <option value="">Semua Status</option>
                                                @foreach ($statuses as $status)
                                                    <option value="{{ $status }}"
                                                        {{ request('status') == $status ? 'selected' : '' }}>
                                                        {{ ucfirst($status) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select name="year_submission" class="form-control form-control-sm">
                                                <option value="">Semua Tahun</option>
                                                @foreach ($years as $year)
                                                    <option value="{{ $year }}"
                                                        {{ request('year_submission') == $year ? 'selected' : '' }}>
                                                        {{ $year }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-custom btn-block btn-sm">Filter</button>
                                        </div>
                                    </div>
                                </form>

                                <table class="table table-hover custom-table">
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
