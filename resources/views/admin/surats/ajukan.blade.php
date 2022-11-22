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
                                        <p class="mb-0 text-sm">Pilih Kategori Surat</p>
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
                                <div class="form-group col-lg-4 col-md-6">
                                    <form autocomplete="off" action="/add-pengajuan" method="get" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <label class="form-control-label" for="pilih_kategori">Kategori Surat</label>
                                            <select required class="form-control @error('pilih_kategori') is-invalid @enderror" name="pilih_kategori" id="pilih_kategori">
                                                <option selected value="">Pilih Kategori</option>
                                                @foreach ($kategori as $item)
                                                    <option value="{{ $item->id }}">{{ $item->jenis_surat }}</option>
                                                @endforeach
                                            </select>
                                            @error('pilih_kategori')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" id="simpan">LANJUT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
