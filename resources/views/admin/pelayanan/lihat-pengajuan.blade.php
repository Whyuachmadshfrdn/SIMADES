@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <style>
        .ikon {
            font-family: fontAwesome;
        }
    </style>
@endsection

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
                                    <h2 class="mb-0">Detail Pengajuan Surat</h2>
                                    <p class="mb-0 text-sm">Kelola Surat</p>
                                </div>
                                <div class="mb-3">
                                    <a href="/surat" class="btn btn-success" title="Kembali"><i
                                            class="fas fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card bg-secondary shadow h-100">
                <div class="card-header bg-white border-0">
                    <h3 class="mb-0">Detail Pengajuan Surat</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="../../assert/img/pas foto.jpg" class="img-thumbnail" width="250px">
                        </div>
                        <div class="col-md-4">
                            <div>
                                <p class="h6"><b>nama lengkap</b></p>
                                <p class="h5">Wahyu Achmad Shafardan</p>
                            </div>
                            <div>
                                <p class="h6"><b>NIK</b></p>
                                <p class="h5">6409***********04</p>
                            </div>
                            <div>
                                <p class="h6"><b>tempat, tanggal lahir</b></p>
                                <p class="h5">Girimukti, 20 MEI 2000</p>
                            </div>
                            <div>
                                <p class="h6"><b>pekerjaan</b></p>
                                <p class="h5">Mahasiswa</p>
                            </div>
                            <div>
                                <p class="h6"><b>jenis kelamin</b></p>
                                <p class="h5">Laki-laki</p>
                            </div>
                            <div>
                                <p class="h6"><b>golongan darah</b></p>
                                <p class="h5">A</p>
                            </div>
                            <div>
                                <p class="h6"><b>kewarganegaraan</b></p>
                                <p class="h5">WNI</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <p class="h6"><b>status perkawinan</b></p>
                                <p class="h5">Belum Kawin</p>
                            </div>
                            <div>
                                <p class="h6"><b>Agama</b></p>
                                <p class="h5">Islam</p>
                            </div>
                            <div>
                                <p class="h6"><b>RT/RW</b></p>
                                <p class="h5">07/00</p>
                            </div>
                            <div>
                                <p class="h6"><b>kelurahan/desa</b></p>
                                <p class="h5">Girimukti</p>
                            </div>
                            <div>
                                <p class="h6"><b>kecamatan</b></p>
                                <p class="h5">Penajam</p>
                            </div>
                            <div>
                                <p class="h6"><b>alamat</b></p>
                                <p class="h5">Desa Girimukti KM 16 STRAT 06 RT 07 Nomer 33</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <p class="h6"><b>KEPERLUAN</b></p>
                                <p class="h5">pengajuan SKCK sebagai persyaratan berkas pendaftaran kerja </p>
                            </div>
                            <br>
                            <div>
                                <p class="h6"><b>PERSYARATAN</b></p>
                                <img src="../../assert/img/_ktm.jpeg" class="img-thumbnail" width="250px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    @endsection
