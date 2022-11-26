@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="header bg-gradient-primary pb-0 pt-5 pt-md-6">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col">
                        <div class="card shadow h-100">
                            <div class="card-header border-0">
                                <div
                                    class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between text-center text-md-left">
                                    <div class="mb-3">
                                        <h2 class="mb-0">Warga</h2>
                                        <p class="mb-0 text-sm">Kelola Data Warga</p>
                                    </div>
                                    <div class="mb-3">
                                        <a href="{{ Route('warga-add') }}" class="btn btn-success" title="Tambah"><i
                                                class="fas fa-plus"></i> Tambah Warga</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xl-3 col-md-6 col-sm-6 mb-3">
                        <div class="card card-stats shadow h-100">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Penduduk</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $wargas->count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 mb-3">
                        <div class="card card-stats shadow h-100">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Laki-laki</h5>
                                        <span
                                            class="h2 font-weight-bold mb-0">{{ $wargas->where('jenis_kelamin', 'Laki-laki')->count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 mb-3">
                        <div class="card card-stats shadow h-100">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Perempuan</h5>
                                        <span
                                            class="h2 font-weight-bold mb-0">{{ $wargas->where('jenis_kelamin', 'Perempuan')->count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-pink text-white rounded-circle shadow">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="m-0 btn btn-success btn-block mt-2" data-toggle="modal" data-target="#exampleModal">
            Import Data
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload File Excel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('wargaimport') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="excel" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary mt-3" type="submit" id="button-addon2">Import</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('wargaexport') }}">
        <button href="{{ route('wargaexport') }}" type="button" class="btn btn-success btn-block mt-2">Export Data</button>
    </a>
    <a href="{{ asset('assert/templete_import/warga.xlsx') }}">
        <button href="" type="button" class="btn btn-success btn-block mt-2">Download Templete</button>
    </a>

    @if (auth()->user()->role == 'admin')
        <a href="{{ route('create-akun') }}">
            <button href="" type="button" class="btn btn-success btn-block mt-2">Buat Akun Warga</button>
        </a>
    @endif

    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table id="table_id" class=" table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>RT</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($wargas as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_warga }}</td>
                                    <td>{{ $item->nik_warga }}</td>
                                    <td>{{ $item->rt }}</td>
                                    <td width="7%">
                                        <a href="{{ Route('warga-detail', $item->id) }}">
                                            <button type="button" class="btn btn-block btn-primary">Lihat</button>
                                        </a>
                                        <a href="{{ Route('ubah-warga' ,$item->id) }}">
                                            <button type="button" class="btn btn-block btn-warning">Ubah</button>
                                        </a>
                                        <form action="{{ Route('wargadelete' ,$item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-block btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Warga belum Tersedia.
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="pull-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
@endsection
