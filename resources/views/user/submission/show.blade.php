@extends('layouts.app')

@section('title', 'Verifikasi Proposal Hibah')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid d-flex justify-content-center">
                <div class="card shadow-lg rounded w-100">
                    <div class="card-body m-2">
                        <h5 class="font-weight-bold text-center mb-4">Verifikasi Proposal Hibah</h5>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="mb-2">Kategori Hibah</label>
                                <input type="text" class="form-control" value="{{ $submission->category }}" disabled>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="mb-2">Kelurahan</label>
                                <input type="text" class="form-control" value="{{ $submission->ward_village }}" disabled>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="mb-2">Tahun</label>
                                <input type="text" class="form-control" value="{{ $submission->year_submission }}"
                                    disabled>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="mb-2">Nama Masjid/Musholla</label>
                                <input type="text" class="form-control" value="{{ $submission->name_institution }}"
                                    disabled>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="mb-2">Alamat</label>
                                <input type="text" class="form-control" value="{{ $submission->address }}" disabled>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="mb-2">Jenis Pendanaan</label>
                                <input type="text" class="form-control" value="{{ $submission->type }}" disabled>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="mb-2">Kecamatan</label>
                                <input type="text" class="form-control" value="{{ $submission->subdistrict }}" disabled>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="mb-2">Nama Pengurus</label>
                                <input type="text" class="form-control" value="{{ $submission->name_manager }}" disabled>
                            </div>
                            <div class="col-md-4 mb-3">
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
                                    'deed_of_establishment' => 'Akta Pendirian',
                                    'npwp' => 'NPWP',
                                    'account_book' => 'Buku Rekening',
                                    'rab_renovation' => 'RAB Renovasi',
                                    'photo' => 'Foto Kondisi',
                                ];
                            @endphp

                            @foreach ($docs as $key => $label)
                                <div class="col-md-4 mb-4">
                                    <div class="border p-3 rounded bg-white">
                                        <strong class="d-block mb-2">PDF <br> {{ $label }}</strong>
                                        @if ($submission->$key)
                                            <a href="{{ asset('storage/' . $submission->$key) }}" target="_blank"
                                                class="badge badge-success">Lihat</a>
                                        @else
                                            <span class="text-muted">Belum ada</span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <hr>

                        <div class="mt-2 mb-4">
                            <h4 class="font-weight-bold text-center mt-4 mb-4">Persyaratan Proposal</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="font-weight-bold">Aspek Legalitas (Pasal 12 ayat 3)</h6>
                                    <label class="form-check-label mb-2">
                                        <input class="form-check-input" type="checkbox"
                                            {{ $submission->validation?->valid_name_institution ? 'checked' : '' }}
                                            disabled>
                                        <span class="form-check-sign">Nama Badan/Lembaga Organisasi Pemohon</span>
                                    </label> <br>
                                    <label class="form-check-label mb-2">
                                        <input class="form-check-input" type="checkbox"
                                            {{ $submission->validation?->valid_deed ? 'checked' : '' }} disabled>
                                        <span class="form-check-sign">Akta Pendirian</span>
                                    </label> <br>
                                    <label class="form-check-label mb-2">
                                        <input class="form-check-input" type="checkbox"
                                            {{ $submission->validation?->valid_npwp ? 'checked' : '' }} disabled>
                                        <span class="form-check-sign">NPWP Organisasi Aktif</span>
                                    </label> <br>
                                    <label class="form-check-label mb-2">
                                        <input class="form-check-input" type="checkbox"
                                            {{ $submission->validation?->valid_account_book ? 'checked' : '' }} disabled>
                                        <span class="form-check-sign">Buku Rekening Organisasi</span>
                                    </label>

                                    <h6 class="font-weight-bold mt-4">Aspek Administratif (Pasal 12 ayat 4)</h6>
                                    <label class="form-check-label mb-2">
                                        <input class="form-check-input" type="checkbox"
                                            {{ $submission->validation?->valid_proposal ? 'checked' : '' }} disabled>
                                        <span class="form-check-sign">Proposal</span>
                                    </label> <br>

                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"
                                            {{ $submission->validation?->valid_rab ? 'checked' : '' }} disabled>
                                        <span class="form-check-sign">Rencana Anggaran Biaya</span>
                                    </label>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="font-weight-bold">Dokumentasi</h6>
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"
                                            {{ $submission->validation?->valid_photo ? 'checked' : '' }} disabled>
                                        <span class="form-check-sign">Foto Kondisi saat ini</span>
                                    </label>

                                    <h6 class="font-weight-bold mt-4">Persyaratan Substantif (Pasal 12 ayat 5)</h6>
                                    <label class="form-check-label mb-2">
                                        <input class="form-check-input" type="checkbox"
                                            {{ $submission->validation?->subst_goal ? 'checked' : '' }} disabled>
                                        <span class="form-check-sign">Program sesuai dengan tujuan (dijelaskan dalam
                                            proposal)</span>
                                    </label>
                                    <label class="form-check-label mb-2">
                                        <input class="form-check-input" type="checkbox"
                                            {{ $submission->validation?->subst_benefit ? 'checked' : '' }} disabled>
                                        <span class="form-check-sign">Manfaat jelas untuk jamaah (dijelaskan dalam
                                            proposal)</span>
                                    </label>
                                    <label class="form-check-label mb-2">
                                        <input class="form-check-input" type="checkbox"
                                            {{ $submission->validation?->subst_timeline ? 'checked' : '' }} disabled>
                                        <span class="form-check-sign">Timeline pelaksanaan realistis (dijelaskan dalam
                                            proposal)</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mb-3">
                            <a href="{{ route('user.submission.index') }}" class="btn btn-success px-4">Cek Verifikasi
                                Pengajuan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
