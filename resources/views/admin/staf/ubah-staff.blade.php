@extends('layouts.master')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="header bg-gradient-primary pb-6 pt-5 pt-md-6">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow h-100">
                                <div class="card-header border-0">
                                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between text-center text-md-left">
                                        <div class="mb-3">
                                            <h2 class="mb-0">Edit Staff</h2>
                                            <p class="mb-0 text-sm">Kelola Staff</p>
                                        </div>
                                        <div class="mb-3">
                                            <a href="{{ Route('staff') }}" class="btn btn-success" title="Kembali"><i class="fas fa-arrow-left"></i> Kembali</a>
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
                        <div class="card-body">
                            <form autocomplete="off" action="{{ Route('update-staff' ,$staff->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label class="form-control-label" for="nik">Nama Lengkap Staff</label>
                                        <input type="text" class="form-control @error('nama_staff') is-invalid @enderror" name="nama_staff" placeholder="Masukkan Nama Lengkap ..." value="{{ $staff->nama_staff }}">
                                        @error('nama_staff')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label class="form-control-label" for="nik">NIP</label>
                                        <input type="number" class="form-control @error('nip_staff') is-invalid @enderror" name="nip_staff" placeholder="Masukkan NIP ..." value="{{ $staff->nip_staff }}">
                                        @error('nip_staff')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label class="form-control-label" for="nik">Tempat Lahir</label>
                                        <input type="text" class="form-control @error('tmpt_lahir') is-invalid @enderror" name="tmpt_lahir" placeholder="Masukkan Tempat ..." value="{{ $staff->tmpt_lahir }}">
                                        @error('tmpt_lahir')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label class="form-control-label" for="nik">Tanggal Lahir</label>
                                        <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir ..." value="{{ $staff->tgl_lahir ? $staff->tgl_lahir->format('Y-m-d') : '2000-01-01' }}">
                                        @error('tgl_lahir')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label class="form-control-label" for="nik">No. Telpon</label>
                                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" placeholder="Masukkan Nomer Telpon ..." value="{{ $staff->no_telp }}">
                                        @error('no_telp')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label class="form-control-label" for="nik">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Masukkan Email Aktif ..." value="{{ $staff->email }}">
                                        @error('email')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin">
                                            <option selected value="">Pilih Jenis Kelamin</option>
                                            <option {{ $staff->jenis_kelamin == 'Perempuan' ? 'selected=selected' : '' }}>Perempuan</option>
                                            <option {{ $staff->jenis_kelamin == 'Laki-laki' ? 'selected=selected' : '' }}>Laki-laki</option>
                                        </select>
                                        @error('jenis_kelamin')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label class="form-control-label" for="nik">Jabatan</label>
                                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" placeholder="Masukkan Jabatan ..." value="{{ $staff->jabatan }}">
                                        @error('jabatan')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label class="form-control-label" for="foto">Foto</label>
                                        <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="customFile" />
                                        @error('foto')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block" id="simpan">SIMPAN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
