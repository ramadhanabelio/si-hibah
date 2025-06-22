@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">Dashboard</h4>
                <div class="row">

                    <div class="col-md-3">
                        <a href="{{ route('user.submission.index') }}">
                            <div class="card card-stats card-warning">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-edit"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Pendaftaran</p>
                                                <h4 class="card-title">{{ $totalSubmission }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-title mb-0">Daftar Pengajuan Hibah</div>
                            </div>
                            <div class="card-body">
                                <p class="mb-3"><span class="fw-bold">Selamat Datang di Portal Pengajuan Hibah!</span>
                                    Kami senang Anda kembali. Di sini, Anda bisa dengan mudah mengelola dan memantau status
                                    semua pengajuan hibah Anda. Kami berkomitmen untuk memberikan transparansi dan kemudahan
                                    dalam setiap langkah".</p>
                                @if (session('success'))
                                    <div class="alert alert-success text-center">{{ session('success') }}
                                    </div>
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
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="12" class="text-center">Belum ada data
                                                    pendaftaran.</td>
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
