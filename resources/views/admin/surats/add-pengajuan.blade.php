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
                                        <h2 class="mb-0">Ajukan Surat</h2>
                                        <p class="mb-0 text-sm">Isi Kolom Dibawah</p>
                                    </div>
                                    <div class="mb-3">
                                        <a href="/ajukan" class="btn btn-success" title="Kembali"><i
                                                class="fas fa-arrow-left"></i> Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card bg-secondary shadow h-100">
                            <div class="card-body">
                                <div class="form-group col-lg-12 col-md-6">
                                    <form autocomplete="off" action="/add-warga" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12">
                                            <fieldset disabled>
                                            <div class="fo w-100">
                                                <label class="form-control-label">Data Warga</label>
                                                <input type="text" class="form-control form-control- w-100" name="">
                                            </div>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            @foreach ($isian as $item)
                                            <div class="form-group">
                                                <label class="form-control-label">{{ $item->item }}</label>
                                                <input class="form-control form-control-alternative" name="{{ $item->item }}">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" id="simpan">AJUKAN</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
