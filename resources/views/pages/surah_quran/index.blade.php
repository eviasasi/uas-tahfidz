@extends('layouts.admin')
@section('title')
    <title>Surah</title>
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Surah Qur'an</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Surah Qur'an</a></div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Data Surah Qur'an</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#exampleModal"><i class="fa fa-plus-circle"></i> Tambah
                                            Data </a>
                                    </div>
                                    @if (Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                            {{ Session::get('message') }}</p>
                                    @endif
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-sm text-center">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Surah</th>
                                                        <th scope="col">Jumlah Ayat</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($surah as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->nama_surah }}</td>
                                                            <td>{{ $item->jumlah_ayat }}</td>
                                                            <td>
                                                                <form
                                                                    action="{{ route('surah_quran.destroy', $item->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <a href="#"
                                                                        data-target="#editSurah{{ $item->id }}"
                                                                        data-toggle="modal" class="btn btn-success btn-sm">
                                                                        <i class="fas fa-pen-square"></i> Edit</a>
                                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                                            class="fas fa-trash"></i> Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Surah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('surah_quran.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama Surah</label>
                            <input type="text" name="nama_surah" class="form-control">

                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Ayat</label>
                            <input type="number" name="jumlah_ayat" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- edit modal --}}
    @foreach ($surah as $s)
        <div class="modal fade" id="editSurah{{ $s->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('surah_quran.update', $s->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Nama Surah</label>
                                <input type="text" name="nama_surah" class="form-control"
                                    value="{{ $s->nama_surah }}">

                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Ayat</label>
                                <input type="number" name="jumlah_ayat" class="form-control"
                                    value="{{ $s->jumlah_ayat }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
