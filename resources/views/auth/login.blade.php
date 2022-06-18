@extends('layouts.auth')
@push('after-style')
    <style>
        h4,
        h5,
        p,
        .simple-footer {
            color: white;
        }

        .title {
            text-align: center;
        }

        /* .btn-primary {
                                                                                                                                                                background-color: #21678B;
                                                                                                                                                            } */

        .card-header h4 {
            text-align: : center !important;
            color: #21678B !important;
        }
    </style>
@endpush
@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{{ asset('assets/img/stisla-fill.svg') }}" alt="logo" width="120"
                            class="shadow shadow-md rounded-circle">
                    </div>
                    <div class="title mb-3">
                        <h5 class="title-mobile">TAHFIDZ QUR'AN</h5>
                    </div>
                    <div class="card rounded-lg">
                        <div class="card-header">
                            <h4>Silahkan Login!</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" tabindex="1" required autocomplete="off">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                        <div class="float-right">
                                            <a href="#" class="text-small">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    </div>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" tabindex="2" required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                            id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="simple-footer">
                        <marquee behavior="scroll" direction="left"> Copyright &copy; Evi !! Selamat Datang </marquee>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
