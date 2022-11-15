@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Warga</h3>
                </div>
                <form action="/add-warga" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input name="nama_warga" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Masukan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIK</label>
                            <input name="nik_warga" type="number" class="form-control" id="exampleInputEmail1"
                                placeholder="Masukan NIK">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">No.KK</label>
                            <input name="kk" type="number" class="form-control" id="exampleInputEmail1"
                                placeholder="Masukan No. Kartu Keluarga">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tempat Lahir</label>
                            <input name="tmpt_lahir" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Masukan Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Golongan Darah</label>
                            <input name="gol_darah" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Masukan Golongan Darah">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <input name="agama" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Masukan Agama">
                        </div>
                        <div class="form-group">
                            <label>Status Perkawinan</label>
                            <select name="status_perkawinan" class="form-control">
                                <option selected disabled>Pilih Status</option>
                                <option>Kawin</option>
                                <option>Belum Kawin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>SHDK</label>
                            <select name="shdk" class="form-control">
                                <option selected disabled>Pilih</option>
                                <option>Kepala Keluarga</option>
                                <option>Istri</option>
                                <option>Anak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pendidikan Akhir</label>
                            <input name="pendidikan_akhir" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Masukan Pendidikan Terakhir">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pekerjaan</label>
                            <input name="pekerjaan" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Masukan Pekerjaan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ibu</label>
                            <input name="nama_ibu" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Masukan Nama Ibu">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ayah</label>
                            <input name="nama_ayah" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Masukan Nama Ayah">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input name="alamat" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Masukan Alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kelurahan</label>
                            <input name="kelurahan" type="text" class="form-control" id="exampleInputEmail1"
                                placeholder="Masukan Kelurahan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">RT</label>
                            <input name="rt" type="number" class="form-control" id="exampleInputEmail1"
                                placeholder="Masukan RT">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Foto</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="foto" type="file" class="custom-file-input"
                                        id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    @error('image')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
