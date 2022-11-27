@extends('layouts.master')

@section('content')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card shadow h-100">
                        <div class="card-header border-0">
                            <div
                                class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between text-center text-md-left">
                                <div class="mb-3">
                                    <h2 class="mb-0">Detail Surat Keluar</h2>
                                </div>
                                <form action="{{ Route('laporan-export') }}">
                                    <i>
                                        <input type="date" name="tgl_awal">
                                    </i>
                                    <i>
                                        <input type="date" name="tgl_akhir">
                                    </i>
                                    <button type="submit" class="btn btn-xs btn-success m-2 p-2">
                                        <i class="fa fa-print" aria-hidden="true"></i>Cetak Laporan
                                    </button>
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
                                            </form>
                                            <a href="{{ Storage::url('public/surat/surat-pengajuan/') .$item->file }}">
                                                <button type="button" class="btn btn-xs btn-info m-2 p-2">
                                                    <i class="fa fa-download" aria-hidden="true"></i>
                                                </button>
                                            </a>
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
