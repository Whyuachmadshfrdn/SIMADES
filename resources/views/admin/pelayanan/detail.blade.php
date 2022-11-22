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
                                    <h2 class="mb-0">Detail Kategori Surat</h2>
                                    <p class="mb-0 text-sm">Kelola Surat</p>
                                </div>
                                <div class="mb-3">
                                    <a href="/index" class="btn btn-success" title="Kembali"><i
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
                    <h3 class="mb-0">Detail Kategori Surat</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <p class="h6"><b>Nama Surat</b></p>
                                <p class="h5">{{ $kategori->jenis_surat }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>Deskripsi</b></p>
                                <p class="h5">{{ $kategori->deskripsi }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>Persyaratan</b></p>
                                <p class="h5">{{ $kategori->persyaratan }}</p>
                            </div>
                            <div class="col-md-8">
                                <p class="h6"><b>Templete Surat</b></p>
                                <a href="{{ Storage::url('public/kategori/templete-surat/') .$kategori->templete_surat }}">
                                    <button href="" type="button" class="btn btn-success btn-block mt-2">Download Templete</button>
                                </a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
