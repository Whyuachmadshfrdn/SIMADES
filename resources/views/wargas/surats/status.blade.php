@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Status Pengajuan Surat</h1>
            </div>
        </div>

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Jenis Surat</th>
                                        <th>Nama Pengaju</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Status Surat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengajuans as $pengajuan)
                                        <tr>
                                            <td>{{ $pengajuan->kategori->jenis_surat }}</td>
                                            <td>{{ $pengajuan->user->name }}</td>
                                            <td>{{ $pengajuan->created_at }}</td>
                                            <td>
                                                @if ($pengajuan->status == 'menunggu verifikasi staff')
                                                    <mark style="background-color: yellow">Menunggu verifikasi staff</mark>
                                                @elseif($pengajuan->status == 'menunggu verifikasi kades')
                                                    <mark style="background-color: blue">Menunggu verifikasi kepala
                                                        desa</mark>
                                                @elseif($pengajuan->status == 'selesai')
                                                    <mark style="background-color: green">Selesai</mark>
                                                @else
                                                    <mark style="background-color: red">Ditolak</mark>
                                                @endif
                                            </td>
                                            <td class="d-flex">
                                                @if (auth()->user()->role == 'kades' || auth()->user()->role == 'staff')
                                                    <div class="col">
                                                        <a href="/suratdelete/{{ $pengajuan->id }}">
                                                            <button type="button" class="btn btn-xs btn-danger">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="/lampiran/{{ $pengajuan->id }}">
                                                            <button type="button" class="btn btn-xs btn-danger">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                @endif
                                                @if ($pengajuan->status == 'selesai')
                                                    <div class="col">
                                                        <a
                                                            href="{{ Storage::url('public/surat/surat-pengajuan/') . $pengajuan->file }}">
                                                            <button type="button" class="btn btn-xs btn-info">
                                                                <i class="fa fa-download" aria-hidden="true"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                @endif
                                                @if (auth()->user()->role == 'kades' && $pengajuan->status == 'menunggu verifikasi kades')
                                                    <div class="col">
                                                        <a href="/kades-verifikasi?id={{ $pengajuan->id }}&status=1">
                                                            <button type="button" class="btn btn-xs btn-success">
                                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="/kades-verifikasi?id={{ $pengajuan->id }}&status=2">
                                                            <button type="button" class="btn btn-xs btn-danger">
                                                                <i class="fa fa-times" aria-hidden="true"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                @endif
                                                @if (auth()->user()->role == 'staff' && $pengajuan->status == 'menunggu verifikasi staff')
                                                    <div class="col">
                                                        <a href="/staff-verifikasi?id={{ $pengajuan->id }}&status=1">
                                                            <button type="button" class="btn btn-xs btn-success">
                                                                <i class="fa fa-check" aria-hidden="true"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="/staff-verifikasi?id={{ $pengajuan->id }}&status=2">
                                                            <button type="button" class="btn btn-xs btn-danger">
                                                                <i class="fa fa-times" aria-hidden="true"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
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
