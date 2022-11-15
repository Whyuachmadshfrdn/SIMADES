@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Ubah Data Warga</h3>
                </div>
                <form action="/updatewarga/{{ $wargas->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input name="nama_warga" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan nama lengkap" value="{{ $wargas->nama_warga }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIK</label>
                            <input name="nik_warga" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan NIK" value="{{ $wargas->nik_warga }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No. KK</label>
                            <input name="kk" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan nomor KK" value="{{ $wargas->kk }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir</label>
                            <input name="tmpt_lahir" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan tempat lahir" value="{{ $wargas->tmpt_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan tanggal lahir"
                                value="{{ $wargas->tgl_lahir ? $wargas->tgl_lahir->format('Y-m-d') : '2000-01-01' }}">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option disabled>Pilih Jenis Kelamin</option>
                                <option {{ $wargas->jenis_kelamin == 'Perempuan' ? 'selected=selected' : '' }}>Perempuan
                                </option>
                                <option {{ $wargas->jenis_kelamin == 'Laki-laki' ? 'selected=selected' : '' }}>Laki-laki
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Golongan Darah</label>
                            <input name="gol_darah" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan golongan darah" value="{{ $wargas->gol_darah }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan agama" value="{{ $wargas->agama }}">
                        </div>
                        <div class="form-group">
                            <label>Status Perkawinan</label>
                            <select name="status_perkawinan" class="form-control" value="{{ $wargas->status_perkawinan }}">
                                <option disabled>Pilih Status</option>
                                <option {{ $wargas->status_perkawinan == 'Kawin' ? 'selected=selected' : '' }}>Kawin
                                </option>
                                <option {{ $wargas->status_perkawinan == 'Belum Kawin' ? 'selected=selected' : '' }}>
                                    Belum Kawin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>SHDK</label>
                            <select name="shdk" class="form-control" value="{{ $wargas->shdk }}">
                                <option selected disabled>Pilih</option>
                                <option {{ $wargas->shdk == 'Kepala Keluarga' ? 'selected=selected' : '' }}>Kepala
                                    Keluarga</option>
                                <option {{ $wargas->shdk == 'Istri' ? 'selected=selected' : '' }}>Istri</option>
                                <option {{ $wargas->shdk == 'Anak' ? 'selected=selected' : '' }}>Anak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pendidikan Akhir</label>
                            <input name="pendidikan_akhir" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan Nama Ibu" value="{{ $wargas->pendidikan_akhir }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pekerjaan</label>
                            <input name="pekerjaan" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan Nama Ibu" value="{{ $wargas->pekerjaan }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ibu</label>
                            <input name="nama_ibu" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan Nama Ibu" value="{{ $wargas->nama_ibu }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ayah</label>
                            <input name="nama_ayah" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan Nama Ayah" value="{{ $wargas->nama_ayah }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan alamat" value="{{ $wargas->alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kelurahan</label>
                            <input name="kelurahan" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan kelurahan/desa" value="{{ $wargas->kelurahan }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">RT</label>
                            <input name="rt" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="masukan RT" value="{{ $wargas->rt }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Foto</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="foto" type="file" class="custom-file-input"
                                        id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
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
