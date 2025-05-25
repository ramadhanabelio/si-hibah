@extends('layouts.landing-page')

@section('title', 'Masuk')

@section('content')
    <main class="main mt-5">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="col-md-6">
                <div class="card shadow-lg p-4 border-0 auth-form">
                    <h2 class="text-center mb-3">Masuk</h2>
                    <p class="text-center mb-3">
                        <a href="#" class="info-link">
                            Masuk menggunakan akun email <br>
                            untuk melakukan pengajuan dana hibah di website
                        </a>
                    </p>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Username/Email</label>
                            <input type="text" class="form-control custom-input" id="email" name="email" required>
                        </div>

                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control custom-input" id="password" name="password"
                                required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-success rounded-pill px-4">Masuk</button>
                        </div>
                    </form>
                    <p class="text-center">
                        <a href="{{ route('register.form') }}" class="info-link pt-3">
                            Jika belum punya akun klik <span class="fw-bold">Daftar</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
