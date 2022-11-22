@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Ubah Data Staff</h3>
                </div>
                <form action="/update-staff/{{ $staff->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap Staf</label>
                            <input name="nama_staff" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan nama lengkap staf" value="{{ $staff->nama_staff }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIP</label>
                            <input name="nip_staff" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan NIP" value="{{ $staff->nip_staff }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir</label>
                            <input name="tmpt_lahir" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan tempat lahir" value="{{ $staff->tmpt_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan tanggal lahir" value="{{ $staff->tgl_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No.tlp</label>
                            <input name="no.telp" type="number" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan pekerjaan" value="{{ $staff->no_telp }}">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option disabled>Pilih Jenis Kelamin</option>
                                <option {{ $staff->jenis_kelamin == 'Laki-laki' ? 'selected=selected' : '' }}>Laki-laki
                                </option>
                                <option {{ $staff->jenis_kelamin == 'Perempuan' ? 'selected=selected' : '' }}>Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan jabatan" value="{{ $staff->jabatan }}">
                        </div>
                        <div class="form-group col-lg-4 col-md-6">
                            <label class="form-control-label" for="foto">Foto</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" id="customFile" />
                            @error('foto')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
