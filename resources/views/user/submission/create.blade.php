@extends('layouts.app')

@section('title', 'Pendaftaran Hibah')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('user.dashboard') }}">Dashboard</a> / <a
                        href="{{ route('user.submission.index') }}">Pendaftaran Hibah</a> / Pendaftaran Dana Hibah Baru
                </h4>
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{ route('user.submission.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Pendaftaran Dana Hibah Baru</div>
                                </div>
                                <div class="card-body">
                                    <p>Deadline Pendaftaran Hibah APBD : 30 Juni, Deadline Perubahan APBD : 30 April</p>

                                    <div class="form-group">
                                        <label for="title">Judul</label>
                                        <input type="text" name="title" class="form-control" id="title" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="name_institution">Nama Badan / Lembaga Organisasi Pemohon</label>
                                        <input type="text" name="name_institution" class="form-control"
                                            id="name_institution" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="type">Jenis Hibah</label>
                                        <input type="text" name="type" class="form-control" id="type" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="date_submission">Tanggal/Bulan Pengajuan</label>
                                        <input type="date" name="date_submission" class="form-control"
                                            id="date_submission" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="year_submission">Tahun Pengajuan</label>
                                        <input type="number" name="year_submission" class="form-control"
                                            id="year_submission" min="2024" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="subdistrict">Kecamatan</label>
                                        <input type="text" name="subdistrict" class="form-control" id="subdistrict"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Alamat Lengkap</label>
                                        <input type="text" name="address" class="form-control" id="address" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="grand_total">Jumlah Dana Diajukan</label>
                                        <input type="number" name="grand_total" class="form-control" id="grand_total"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="proposal">Upload Proposal</label>
                                        <input type="file" name="proposal" class="form-control-file" id="proposal"
                                            accept=".pdf,.doc,.docx" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="photo">Upload Foto Pendukung (Opsional)</label>
                                        <input type="file" name="photo" class="form-control-file" id="photo"
                                            accept="image/*">
                                    </div>
                                </div>

                                <div class="card-action">
                                    <button type="submit" class="btn btn-success">Simpan</button>
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
