@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Warga</h1>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                @if ($message = Session::get('succes'))
                    <div class="alert alert-success alert-dismissble">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i
                                class="fas fa-times"></i></button>
                        <h4><i class="icon fa fa-check"></i>Success!</h4>
                    </div>
                @endif
                <a href="{{ route('warga-add') }}">
                    <button type="button" class="btn btn-primary mb-1">Tambah Data</button>
                </a>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
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
                <button href="{{ route('wargaexport') }}" type="button" class="btn btn-success mb-1">Export Data</button>
            </a>
            <a href="{{ asset('assert/templete_import/warga.xlsx') }}">
                <button href="" type="button" class="btn btn-success mb-1">Download Templete</button>
            </a>
            <div class="row">
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
                                                <a href="{{ route('warga-detail', $item->id) }}">
                                                    <button type="button" class="btn btn-block btn-primary">Lihat</button>
                                                </a>
                                                <a href="{{ route('ubah-warga', $item->id) }}">
                                                    <button type="button" class="btn btn-block btn-warning">Ubah</button>
                                                </a>
                                                <form method="post" action="{{ route('warga.destroy', $item->id) }}">
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
