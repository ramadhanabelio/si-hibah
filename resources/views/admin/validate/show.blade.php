@extends('layouts.app')

@section('title', 'Verifikasi Proposal Hibah')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid d-flex justify-content-center">
                <div class="card shadow-lg rounded w-100">
                    <div class="card-body">
                        <h4 class="card-title text-center font-weight-bold mb-4">Verifikasi Proposal Hibah</h4>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="mb-2">Kategori Hibah</label>
                                <input type="text" class="form-control" value="{{ $submission->type }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="mb-2">Nama Masjid/Musholla</label>
                                <input type="text" class="form-control" value="{{ $submission->name_institution }}"
                                    disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="mb-2">Tahun</label>
                                <input type="text" class="form-control" value="{{ $submission->year_submission }}"
                                    disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="mb-2">Kecamatan</label>
                                <input type="text" class="form-control" value="{{ $submission->subdistrict }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="mb-2">Alamat</label>
                                <input type="text" class="form-control" value="{{ $submission->address }}" disabled>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="mb-2">Status</label><br>
                                @php
                                    $badge =
                                        [
                                            'menunggu verifikasi' => 'warning',
                                            'ditolak' => 'danger',
                                            'diterima' => 'success',
                                            'diproses' => 'secondary',
                                        ][$submission->status] ?? 'light';
                                @endphp
                                <span class="badge badge-{{ $badge }} p-2">{{ ucfirst($submission->status) }}</span>
                            </div>
                        </div>

                        <hr>

                        <div class="row text-center">
                            @php
                                $docs = [
                                    'proposal' => 'Proposal',
                                    'akte_pendirian' => 'Akte Pendirian',
                                    'npwp' => 'NPWP',
                                    'buku_rekening' => 'Buku Rekening',
                                    'rab_renovasi' => 'RAB Renovasi',
                                    'foto_kondisi' => 'Foto Kondisi',
                                ];
                            @endphp

                            @foreach ($docs as $key => $label)
                                <div class="col-md-4 mb-4">
                                    <div class="border p-3 rounded bg-white">
                                        <strong class="d-block mb-2">PDF {{ $label }}</strong>
                                        @if ($submission->$key)
                                            <a href="{{ asset('storage/' . $submission->$key) }}" target="_blank"
                                                class="btn btn-success btn-sm">Lihat</a>
                                        @else
                                            <span class="text-muted">Belum ada</span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="text-center mb-3">
                            <a href="{{ route('admin.validate.index') }}" class="btn btn-success px-4">Cek Verifikasi
                                Pengajuan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
