@extends('layouts.admin')
@section('title')
    <title>Kelas</title>
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Kelas</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Kelas</a></div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Data Kelas</h2>
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
                                                        <th scope="col">Kelas</th>
                                                        <th scope="col">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($kelas as $item)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $item->nama_kelas }}</td>
                                                            <td>
                                                                <form action="{{ route('kelas.destroy', $item->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <a href="#"
                                                                        data-target="#editKelas{{ $item->id }}"
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
                    <h5 class="modal-title" id="exampleModalLabel">Data Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('kelas.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nama Kelas</label>
                            <input type="text" name="nama_kelas" class="form-control">
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
    @foreach ($kelas as $k)
        <div class="modal fade" id="editKelas{{ $k->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Kelas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('kelas.update', $k->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Nama Kelas</label>
                                <input type="text" name="nama_kelas" value="{{ $k->nama_kelas }}" class="form-control">
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
    @endforeach
@endsection
