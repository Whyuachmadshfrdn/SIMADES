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
                                <div class="mb-3">
                                    <a href="#" class="btn btn-success" title="Kembali"><i
                                            class="fas fa-arrow-left"></i>Cetak Laporan</a>
                                </div>
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
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Surat</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Wahyu Achmad Shafardan</td>
                                    <td>SK Menikah</td>
                                    <td>2022-05-20</td>
                                    <td>
                                        <mark style="background-color: rgb(7, 218, 42)">Selesai</mark>
                                    </td>
                                    <td width="7%">
                                        <a href="#">
                                            <button type="button" class="btn btn-block btn-primary">Download</button>
                                        </a>
                                    </td>
                                    <td width="7%">
                                        <a href="#">
                                            <button type="button" class="btn btn-block btn-success">Hapus</button>
                                        </a>
                                    </td>
                                </tr>
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
