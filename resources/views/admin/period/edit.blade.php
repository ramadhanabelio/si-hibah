@extends('layouts.app')

@section('title', 'Edit Periode Hibah')

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <h4 class="page-title">
                    <a href="{{ route('admin.dashboard') }}" class="dashboard-text">Dashboard</a> /
                    <a href="{{ route('admin.periods.index') }}" class="dashboard-text">Periode Pendaftaran Hibah</a> /
                    Edit Periode
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

                        <form action="{{ route('admin.periods.update', $period->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Edit Periode Pendaftaran</div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="start_date">Tanggal Mulai</label>
                                        <input type="date" name="start_date" id="start_date" class="form-control"
                                            value="{{ old('start_date', $period->start_date) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="end_date">Tanggal Selesai</label>
                                        <input type="date" name="end_date" id="end_date" class="form-control"
                                            value="{{ old('end_date', $period->end_date) }}" required>
                                    </div>
                                </div>

                                <div class="card-action">
                                    <button type="submit" class="btn btn-custom">Perbarui</button>
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
