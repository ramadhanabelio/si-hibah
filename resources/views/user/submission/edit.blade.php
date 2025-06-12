@extends('layouts.app')

@section('title', 'Perbarui Pendaftaran Hibah')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('user.dashboard') }}" class="dashboard-text">Dashboard</a> / <a
                        href="{{ route('user.submission.index') }}" class="dashboard-text">Pendaftaran Hibah</a> / Perbarui
                    Pendaftaran Hibah
                </h4>
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{ route('user.submission.update', $submission->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Perbarui Pendaftaran Hibah</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Judul</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                            value="{{ old('title', $submission->title) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="name_institution">Nama Badan / Lembaga Organisasi Pemohon</label>
                                        <input type="text" name="name_institution" class="form-control"
                                            id="name_institution"
                                            value="{{ old('name_institution', $submission->name_institution) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="name_manager">Nama Pengurus</label>
                                        <input type="text" name="name_manager" class="form-control" id="name_manager"
                                            value="{{ old('name_manager', $submission->name_manager) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="category">Kategori Hibah</label>
                                        <input type="text" name="category" class="form-control" id="category"
                                            value="{{ old('category', $submission->category) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="type">Jenis Pendanaan</label>
                                        <input type="text" name="type" class="form-control" id="type"
                                            value="{{ old('type', $submission->type) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="date_submission">Tanggal/Bulan Pengajuan</label>
                                        <input type="date" name="date_submission" class="form-control"
                                            id="date_submission"
                                            value="{{ old('date_submission', $submission->date_submission) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="year_submission">Tahun Pengajuan</label>
                                        <input type="number" name="year_submission" class="form-control"
                                            id="year_submission"
                                            value="{{ old('year_submission', $submission->year_submission) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="subdistrict">Kecamatan</label>
                                        <input type="text" name="subdistrict" class="form-control" id="subdistrict"
                                            value="{{ old('subdistrict', $submission->subdistrict) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="ward_village">Kelurahan/Desa</label>
                                        <input type="text" name="ward_village" class="form-control" id="ward_village"
                                            value="{{ old('ward_village', $submission->ward_village) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Alamat Lengkap</label>
                                        <textarea name="address" class="form-control" id="address" rows="3" required>{{ old('address', $submission->address) }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="grand_total">Jumlah Dana Diajukan</label>
                                        <input type="number" name="grand_total" class="form-control" id="grand_total"
                                            value="{{ old('grand_total', $submission->grand_total) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="proposal">Upload Proposal</label>
                                        <input type="file" name="proposal" class="form-control-file" id="proposal">
                                        @if ($submission->proposal)
                                            <a href="{{ asset('storage/' . $submission->proposal) }}" target="_blank"
                                                class="badge badge-info mt-2">Lihat Proposal Lama</a>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="deed_of_establishment">Upload Akta Pendirian</label>
                                        <input type="file" name="deed_of_establishment" class="form-control-file"
                                            id="deed_of_establishment">
                                        @if ($submission->deed_of_establishment)
                                            <a href="{{ asset('storage/' . $submission->deed_of_establishment) }}"
                                                target="_blank" class="badge badge-info mt-2">Lihat Akta Pendirian
                                                Lama</a>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="npwp">Upload NPWP</label>
                                        <input type="file" name="npwp" class="form-control-file" id="npwp">
                                        @if ($submission->npwp)
                                            <a href="{{ asset('storage/' . $submission->npwp) }}" target="_blank"
                                                class="badge badge-info mt-2">Lihat NPWP Lama</a>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="account_book">Upload Buku Rekening</label>
                                        <input type="file" name="account_book" class="form-control-file"
                                            id="account_book">
                                        @if ($submission->account_book)
                                            <a href="{{ asset('storage/' . $submission->account_book) }}" target="_blank"
                                                class="badge badge-info mt-2">Lihat Buku Rekening Lama</a>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="rab_renovation">Upload RAB Renovasi</label>
                                        <input type="file" name="rab_renovation" class="form-control-file"
                                            id="rab_renovation">
                                        @if ($submission->rab_renovation)
                                            <a href="{{ asset('storage/' . $submission->rab_renovation) }}"
                                                target="_blank" class="badge badge-info mt-2">Lihat RAB Renovasi Lama</a>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="photo">Upload Foto Pendukung (Opsional)</label>
                                        <input type="file" name="photo" class="form-control-file" id="photo">
                                        @if ($submission->photo)
                                            <div class="mt-2">
                                                <img src="{{ asset('storage/' . $submission->photo) }}" alt="Foto"
                                                    width="120">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" class="btn btn-custom">Perbarui</button>
                                    <a href="{{ route('user.submission.index') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
