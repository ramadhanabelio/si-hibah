@extends('layouts.app')

@section('title', 'Tambah Periode Hibah')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('admin.dashboard') }}" class="dashboard-text">Dashboard</a> /
                    <a href="{{ route('admin.periods.index') }}" class="dashboard-text">Periode Pendaftaran Hibah</a> /
                    Tambah Periode Baru
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

                        <form action="{{ route('admin.periods.store') }}" method="POST">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Tambah Periode Pendaftaran</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="start_date">Tanggal Mulai</label>
                                        <input type="date" name="start_date" id="start_date" class="form-control"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="end_date">Tanggal Selesai</label>
                                        <input type="date" name="end_date" id="end_date" class="form-control" required>
                                    </div>
                                </div>

                                <div class="card-action">
                                    <button type="submit" class="btn btn-custom">Simpan</button>
                                    <a href="{{ route('admin.periods.index') }}" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
