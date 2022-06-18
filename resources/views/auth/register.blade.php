@extends('layouts.auth')
<style>
    .title,
    h4 {
        text-transform: uppercase;
        color: #000 !important;
    }

    .card-header {
        display: inline !important;
    }
</style>
@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="card card-primary">
                        <div class="card-header ">
                            <div class="title text-center">
                                <h4>SISTEM INFORMASI UMKM SEBAGAI PENDUKUNG PROSES</h4>
                                <h4>RANTAI PASOK UMKM DI KSB MALL</h4>
                            </div>
                        </div>
                        <hr>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="umkm">DAFTAR SEBAGAI</label>
                                    <input type="hidden" name="role" value="umkm" id="">
                                    <input id="umkm" type="text" class="form-control" value="UMKM" readonly
                                        autocomplete="">
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input id="name" type="text" class="form-control" name="name" autocomplete=""
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">Telepon</label>
                                    <input id="no_hp" type="text" class="form-control" name="no_hp" autocomplete=""
                                        required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" required>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="password" class="d-block">Password</label>
                                        <input id="password" type="password" class="form-control pwstrength"
                                            data-indicator="pwindicator" name="password" required>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="password2" class="d-block">Konfirmasi Password</label>
                                        <input id="password2" type="password" class="form-control" required
                                            name="password_confirmation">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Daftar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        <marquee behavior="scroll" direction="left"> Copyright &copy; UMKM !! Selamat Datang </marquee>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
