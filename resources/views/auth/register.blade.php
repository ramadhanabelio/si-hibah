@extends('layouts.landing-page')

@section('title', 'Daftar')

@section('content')
    <br><br>
    <main class="main pt-5 mt-4 mb-5">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="col-md-7">
                <div class="card shadow p-4 border-0 auth-form">
                    <h2 class="text-center mb-3">Daftar</h2>
                    <p class="text-center mb-3">
                        <span class="info-link">
                            Formulir yang disediakan dan menggunakan akun email <br>
                            untuk melakukan pengajuan dana hibah di website
                        </span>
                    </p>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3 text-start">
                            <label for="name" class="form-label">Nama Lembaga Organisasi Pemohon</label>
                            <input type="text" class="form-control custom-input" id="name" name="name" required>
                        </div>

                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control custom-input" id="email" name="email" required>
                        </div>

                        <div class="mb-3 text-start">
                            <label for="username" class="form-label">Username <span class="text-muted">(Tanpa
                                    Spasi)</span></label>
                            <input type="text" class="form-control custom-input" id="username" name="username" required>
                        </div>

                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control custom-input" id="password" name="password"
                                required>
                        </div>

                        <div class="mb-4 text-start">
                            <label for="password_confirmation" class="form-label">Ulangi Password</label>
                            <input type="password" class="form-control custom-input" id="password_confirmation"
                                name="password_confirmation" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success rounded-pill px-4">Daftar</button>
                        </div>
                    </form>
                    <p class="text-center">
                        <a href="{{ route('login.form') }}" class="info-link pt-3">
                            Sudah punya akun klik <span class="fw-bold">Masuk</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
