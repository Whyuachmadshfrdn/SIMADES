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
                                    <h2 class="mb-0">Tambah Surat</h2>
                                    <p class="mb-0 text-sm">Kelola Surat </p>
                                </div>
                                <div class="mb-3">
                                    <a href="{{ Route('index') }}" class="btn btn-success" title="Kembali"><i
                                            class="fas fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.alert')
    <div class="row">
        <div class="col">
            <div class="card bg-secondary shadow h-100">
                <div class="card-header bg-white border-0">
                    <h3 class="mb-0">Tambah Surat</h3>
                </div>
                <div class="card-body">
                    <form autocomplete="off" action="{{ Route('add-kategori') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted">Detail Surat</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Nama Surat</label>
                                        <input class="form-control form-control-alternative" name="jenis_surat">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Icon</label>
                                        @include('components.icon')
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Deskripsi</label>
                                <textarea class="form-control form-control-alternative @error('deskripsi') is-invalid @enderror" name="deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Persyaratan</label>
                                <textarea class="form-control form-control-alternative @error('persyaratan') is-invalid @enderror" name="persyaratan"
                                    placeholder="Masukkan persyaratan untuk membuat surat yang ditujukan untuk warga"></textarea>
                            </div>
                            <div class="form-group col-lg-4 col-md-6">
                                <label class="form-control-label" for="foto">Templete Surat</label>
                                <input type="file" class="form-control @error('templete_surat') is-invalid @enderror" name="templete_surat" id="customFile" />
                                @error('templete_surat')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Isian Input Surat</label>
                                <textarea class="form-control form-control-alternative @error('isian') is-invalid @enderror" name="isian"
                                    placeholder="contoh: Nama,Bidang Usaha,Nama Suami,DLL" ></textarea>
                            </div>
                        </div>
                    </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary btn-block" id="simpan">SIMPAN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/surat.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".ikon").val("fa-file-text-o");
            $("input:checkbox").change(function() {
                if ($(this).prop('checked') == true) {
                    $(this).next().val('1');
                } else {
                    $(this).next().val('0');
                }
            });
        });
    </script>
@endpush