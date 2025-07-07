@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <!-- Header Section with Welcome Message -->
                <h4 class="page-title">Dashboard Pengajuan Hibah</h4>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card bg-gradient-primary text-white">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h2 class="text-white mb-2"> Selamat Datang di Pengajuan Hibah Masjid</h2>
                                        <p class="text-white-75 mb-0">
                                            Sistem Informasi mempermudah masyarakat Kabupaten Kepulauan Meranti 
                                            dalam mengajukan berkas hibah. Sistem ini dirancang untuk memberikan transparansi, kemudahan, 
                                            dan efisiensi dalam proses pengajuan. <strong>Mari bersama-sama membangun daerah yang lebih maju!</strong> 🚀
                                        </p>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <i class="la la-mosque" style="font-size: 4rem; opacity: 0.3;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Table Section -->
                <div class="container-fluid">
                    <div class="card shadow-lg border-0 rounded-4">
                        <div class="card-header bg-gradient-info text-white rounded-top-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title mb-0">📋 Daftar Pengajuan Hibah Anda</h5>
                                    <small class="text-white-90">Pantau status dan progress berkas pengajuan hibah secara real-time</small>
                                </div>
                                <div>
                                    <i class="la la-list-alt" style="font-size: 1.5rem;"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4">

                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="la la-check-circle"></i> {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            <!-- Enhanced Table -->
                            <div class="table-responsive">
                                <table class="table table-hover custom-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="text-center">No</th>
                                            <th scope="col">Kategori Hibah</th>
                                            <th scope="col">Masjid/Mushola</th>
                                            <th scope="col">Kecamatan</th>
                                            <th scope="col">Kelurahan</th>
                                            <th scope="col">Tahun</th>
                                            <th scope="col">Jenis Pendanaan</th>
                                            <th scope="col" class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($submissions as $index => $submission)
                                            <tr class="table-row-hover">
                                                <td class="text-center">{{ $loop->iteration }}.</td>
                                                <td class="fw-semibold">{{ $submission->category }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <i class="la la-mosque text-primary me-2"></i>
                                                        {{ $submission->name_institution }}
                                                    </div>
                                                </td>
                                                <td>{{ $submission->subdistrict }}</td>
                                                <td>{{ $submission->ward_village }}</td>
                                                <td>
                                                    <span class="badge bg-light text-dark">{{ $submission->year_submission }}</span>
                                                </td>
                                                <td>{{ $submission->type }}</td>
                                                <td class="text-center">
                                                    @if ($submission->status === 'diproses')
                                                        <span class="badge badge-warning">
                                                            <i class="la la-clock"></i> Diproses
                                                        </span>
                                                    @elseif ($submission->status === 'diterima')
                                                        <span class="badge badge-success">
                                                            <i class="la la-check"></i> Diterima
                                                        </span>
                                                    @elseif ($submission->status === 'ditolak')
                                                        <span class="badge badge-danger">
                                                            <i class="la la-times"></i> Ditolak
                                                        </span>
                                                    @else
                                                        <span class="badge badge-secondary">
                                                            {{ ucfirst($submission->status) }}
                                                        </span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center py-5">
                                                    <div class="empty-state">
                                                        <i class="la la-inbox" style="font-size: 3rem; color: #ccc;"></i>
                                                        <h5 class="mt-3 text-muted">Belum ada data pendaftaran</h5>
                                                        <p class="text-muted">Mulai ajukan hibah pertama Anda sekarang!</p>
                                                        <a href="{{ route('user.submission.index') }}" class="btn btn-primary">
                                                            <i class="la la-plus"></i> Ajukan Hibah
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <!-- Footer Message -->
                            @if($submissions->count() > 0)
                                <div class="mt-4 p-3 bg-light rounded-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <small class="text-muted">
                                                <i class="la la-info-circle"></i>
                                                <strong>Informasi:</strong> Pantau status berkas pengajuan Anda secara berkala. 
                                                Untuk bantuan teknis, hubungi Dinas terkait Kabupaten Kepulauan Meranti.
                                            </small>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <small class="text-muted">
                                                Total Berkas: <strong>{{ $submissions->count() }}</strong> pengajuan
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-gradient-primary {
            background: #316d62 ;
        }
        
        .bg-gradient-info {
            background: #316d62;
        }
        
        .rounded-4 {
            border-radius: 15px !important;
        }
        
        .rounded-top-4 {
            border-top-left-radius: 15px !important;
            border-top-right-radius: 15px !important;
        }
        
        .rounded-3 {
            border-radius: 10px !important;
        }
        
        .hover-scale:hover {
            transform: translateY(-8px);
            transition: all 0.4s ease;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
        }
        
        .shadow-lg {
            box-shadow: 0 15px 35px rgba(0,0,0,0.12) !important;
        }
        
        .border-left-primary {
            border-left: 5px solid #1aaa96fc!important;
        }
        
        .table-row-hover:hover {
            background-color: #f8f9fa;
            transform: scale(1.02);
            transition: all 0.3s ease;
            border-radius: 8px;
        }
        
        .empty-state {
            padding: 3rem;
        }
        
        .card-stats:hover {
            transform: translateY(-5px);
            transition: all 0.4s ease;
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .text-white-75 {
            color: rgba(255,255,255,0.75) !important;
        }
        
        .text-white-90 {
            color: rgba(255,255,255,0.9) !important;
        }
        
        .card {
            border: none;
            overflow: hidden;
        }
        
        .table {
            border-radius: 10px;
            overflow: hidden;
        }
        
        .badge {
            border-radius: 20px;
            padding: 0.5rem 1rem;
        }
    </style>
@endsection