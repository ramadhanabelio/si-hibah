@extends('layouts.app')

@section('title', 'Perbarui Pendaftaran Hibah')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('user.dashboard') }}">Dashboard</a> / <a
                        href="{{ route('user.submission.index') }}">Pendaftaran Hibah</a> / Perbarui Pendaftaran Hibah
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
                                        <label for="type">Jenis Hibah</label>
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
                                    <button type="submit" class="btn btn-success">Perbarui</button>
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
