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
                                        <p class="mb-0 text-sm">Isi Dengan Lengkap Kolom Dibawah</p>
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
                                    
                                        <div class="col-md-12">
                                            <fieldset disabled>
                                            <div class="fo w-100">
                                                <label class="form-control-label">Nama</label>
                                                <input type="text" class="form-control form-control- w-100" name="" value="{{Auth::user()->name ?? ''}}">
                                            </div>
                                            <div class="fo w-100">
                                                <label class="form-control-label">NIK</label>
                                                <input type="text" class="form-control form-control- w-100" name="" value="{{Auth::user()->warga->nik_warga ?? ''}}">
                                            </div>
                                            <div class="fo w-100">
                                                <label class="form-control-label">Tempat, Tanggal Lahir</label>
                                                <input type="text" class="form-control form-control- w-100" name="" value="{{Auth::user()->warga->tmpt_lahir ?? ''}}, {{Auth::user()->warga->tgl_lahir ?? ''}}">
                                            </div>
                                            <div class="fo w-100">
                                                <label class="form-control-label">Jenis Kelamin</label>
                                                <input type="text" class="form-control form-control- w-100" name="" value="{{Auth::user()->warga->jenis_kelamin ?? ''}}">
                                            </div>
                                            <div class="fo w-100">
                                                <label class="form-control-label">Agama</label>
                                                <input type="text" class="form-control form-control- w-100" name="" value="{{Auth::user()->warga->agama ?? ''}}">
                                            </div>
                                            <div class="fo w-100">
                                                <label class="form-control-label">Status</label>
                                                <input type="text" class="form-control form-control- w-100" name="" value="{{Auth::user()->warga->status_perkawinan ?? ''}}">
                                            </div>
                                            <div class="fo w-100">
                                                <label class="form-control-label">Pekerjaan</label>
                                                <input type="text" class="form-control form-control- w-100" name="" value="{{Auth::user()->warga->pekerjaan ?? ''}}">
                                            </div>
                                            <div class="fo w-100">
                                                <label class="form-control-label">Alamat</label>
                                                <input type="text" class="form-control form-control- w-100" name="" value="{{Auth::user()->warga->alamat ?? ''}}">
                                            </div>
                                            </fieldset>
                                        </div>
                                        <form autocomplete="off" action="/add-surat" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input class="form-control form-control-alternative" type="text" name="kategori_id" value="{{$kategori_id}}" hidden>
                                            <div class="col-md-12">
                                                <p class="mt-3">Silahkan lengkapi lampiran dibawah ini</p>
                                                @foreach ($lampiran as $item)
                                                <div class="form-group">
                                                    <label class="form-control-label">{{ $item->title }}</label>
                                                    <input class="form-control form-control-alternative" type="file" name="{{ $item->name }}" required>
                                                </div>
                                                @endforeach
                                            </div>

                                            <div class="col-md-12">
                                                <p class="mt-3">Silahkan lengkapi data dibawah ini</p>
                                                @foreach ($isian as $item)
                                                <div class="form-group">
                                                    <label class="form-control-label">{{ $item->title }}</label>
                                                    <input class="form-control form-control-alternative" name="{{ $item->name }}" required>
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
