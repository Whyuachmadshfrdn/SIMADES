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
                                    <h2 class="mb-0">Detail Surat Masuk</h2>
                                </div>
                                <div class="mb-3">
                                    <a href="#" class="btn btn-success" title="Kembali"><i
                                            class="fas fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <p class="h6"><b>Nama Lengkap</b></p>
                    <p class="h5">Wahyu Achmad Shafardan</p>
                </div>
                <div>
                    <p class="h6"><b>NIK</b></p>
                    <p class="h5">6409***********04</p>
                </div>
                <div>
                    <p class="h6"><b>Tempat, Tanggal lahir</b></p>
                    <p class="h5">Girimukti, 20 MEI 2000</p>
                </div>
                <div>
                    <p class="h6"><b>Jenis Kelamin</b></p>
                    <p class="h5">Laki-laki</p>
                </div>
                <div>
                    <p class="h6"><b>Agama</b></p>
                    <p class="h5">Islam</p>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <p class="h6"><b>Status</b></p>
                    <p class="h5">Belum Kawin</p>
                </div>
                <div>
                    <p class="h6"><b>Pekerjaan</b></p>
                    <p class="h5">Mahasiswa</p>
                </div>
                <div>
                    <p class="h6"><b>alamat</b></p>
                    <p class="h5">Desa Girimukti KM 16 STRAT 06 RT 07 Nomer 33</p>
                </div>
                <div>
                    <p class="h6"><b>Isian Input Surat</b></p>
                    @foreach ($isian_kategori as $item)
                        <p class="h5">{{ $item->item }}</p>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <p class="h6"><b>Persyaratan</b></p>
                    <img src="../../assert/img/pas foto.jpg" class="img-thumbnail" width="100px">
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
