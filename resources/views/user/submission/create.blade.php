@extends('layouts.app')

@section('title', 'Pendaftaran Hibah')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('user.dashboard') }}" class="dashboard-text">Dashboard</a> / <a
                        href="{{ route('user.submission.index') }}" class="dashboard-text">Pendaftaran Hibah</a> / Pendaftaran
                    Dana Hibah Baru
                </h4>
                <div class="row">
                    <div class="col-md-8">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif

                        <form action="{{ route('user.submission.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Pendaftaran Dana Hibah Baru</div>
                                </div>
                                <div class="card-body">

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
                                        <label for="name_manager">Nama Pengurus</label>
                                        <input type="text" name="name_manager" class="form-control" id="name_manager"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="category">Kategori Hibah</label>
                                        <input type="text" name="category" class="form-control" id="category" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="type">Jenis Pendanaan</label>
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
                                        <label for="ward_village">Kelurahan/Desa</label>
                                        <input type="text" name="ward_village" class="form-control" id="ward_village"
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
                                        <label for="deed_of_establishment">Upload Akta Pendirian</label>
                                        <input type="file" name="deed_of_establishment" class="form-control-file"
                                            id="deed_of_establishment" accept=".pdf,.doc,.docx" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="npwp">Upload NPWP</label>
                                        <input type="file" name="npwp" class="form-control-file" id="npwp"
                                            accept=".pdf,.jpg,.jpeg,.png" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="account_book">Upload Buku Rekening</label>
                                        <input type="file" name="account_book" class="form-control-file"
                                            id="account_book" accept=".pdf,.jpg,.jpeg,.png" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="rab_renovation">Upload RAB Renovasi</label>
                                        <input type="file" name="rab_renovation" class="form-control-file"
                                            id="rab_renovation" accept=".pdf,.doc,.docx,.xls,.xlsx" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="photo">Upload Foto Pendukung (Opsional)</label>
                                        <input type="file" name="photo" class="form-control-file" id="photo"
                                            accept="image/*">
                                    </div>
                                </div>

                                <div class="card-action">
                                    <button type="submit" class="btn btn-custom">Simpan</button>
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
