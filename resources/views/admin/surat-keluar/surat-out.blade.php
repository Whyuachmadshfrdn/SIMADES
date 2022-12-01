@extends('layouts.master')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card shadow h-100">
                        <div class="card-header border-0">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between text-center text-md-left">
                                <div class="mb-0">
                                    <h2 class="mb-0">Detail Surat Keluar</h2>
                                </div>
                                <form action="{{ Route('laporan-export') }}" class="d-flex justify-content-center align-items-center" style="width: 70%;">
                                    <div class="form-row align-items-end" style="width: 100%">
                                        <div class="form-group col-md-4 mb-0 offset-md-1">
                                            <label for="tanggalAwal">Tanggal Awal</label>
                                            <input type="date" class="form-control" id="tanggalAwal" name="tgl_awal">
                                        </div>
                                        <div class="form-group col-md-4 mb-0">
                                            <label for="tanggalAkhir">Tanggal Akhir</label>
                                            <input type="date" class="form-control" id="tanggalAkhir" name="tgl_akhir">
                                        </div>
                                        <div class="form-group col-md-3 mb-0">
                                            <button class="btn btn-md btn-success" type="submit" style="height: 46px!important;">
                                                <i class="fa fa-print mr-2" aria-hidden="true"></i>Cetak Laporan
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table id="table_id" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Surat</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pengajuan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->file }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <form action="{{ Route('suratdelete' ,$item->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-xs btn-danger m-2 p-2">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                                <a href="{{ Storage::url('public/surat/surat-pengajuan/') .$item->file }}">
                                                    <button type="button" class="btn btn-xs btn-info m-2 p-2">
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Surat keluar belum Tersedia.
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
@endsection
