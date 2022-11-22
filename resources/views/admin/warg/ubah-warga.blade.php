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
                                                <h2 class="mb-0">Edit Warga</h2>
                                                <p class="mb-0 text-sm">Kelola Warga</p>
                                            </div>
                                            <div class="mb-3">
                                                <a href="/warga" class="btn btn-success" title="Kembali"><i class="fas fa-arrow-left"></i> Kembali</a>
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
                                <form autocomplete="off" action="/updatewarga/{{ $wargas->id }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="nik">NIK</label>
                                            <input type="number" class="form-control @error('nik_warga') is-invalid @enderror" name="nik_warga" placeholder="Masukkan NIK ..." value="{{ $wargas->nik_warga }}">
                                            @error('nik_warga')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="kk">No.KK</label>
                                            <input type="number" class="form-control @error('kk') is-invalid @enderror" name="kk" placeholder="Masukkan KK ..." value="{{ $wargas->kk }}">
                                            @error('kk')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="nama">Nama Lengkap</label>
                                            <input type="text" class="form-control @error('nama_warga') is-invalid @enderror" name="nama_warga" placeholder="Masukkan Nama ..." value="{{ $wargas->nama_warga }}">
                                            @error('nama_warga')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="tmpt_lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control @error('tmpt_lahir') is-invalid @enderror" name="tmpt_lahir" placeholder="Masukkan Tempat Lahir ..." value="{{ $wargas->tmpt_lahir }}">
                                            @error('tmpt_lahir')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="tgl_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir ..." value="{{ $wargas->tgl_lahir ? $wargas->tgl_lahir->format('Y-m-d') : '2000-01-01' }}">
                                            @error('tgl_lahir')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                            <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin">
                                                <option disabled>Pilih Jenis Kelamin</option>
                                                <option {{ $wargas->jenis_kelamin == 'Perempuan' ? 'selected=selected' : '' }}>Perempuan</option>
                                                <option {{ $wargas->jenis_kelamin == 'Laki-laki' ? 'selected=selected' : '' }}>Laki-laki</option>
                                            </select>
                                            @error('jenis_kelamin')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="gol_darah">Golongan Darah</label>
                                            <input type="text" class="form-control @error('gol_darah') is-invalid @enderror" name="gol_darah" placeholder="Masukkan Golongan Darah ..." value="{{ $wargas->gol_darah }}">
                                            @error('gol_darah')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="agama">Agama</label>
                                            <input type="text" class="form-control @error('agama') is-invalid @enderror" name="agama" placeholder="Masukkan Agama ..." value="{{ $wargas->agama }}">
                                            @error('agama')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="status_perkawinan">Status Perkawinan</label>
                                            <select class="form-control @error('status_perkawinan') is-invalid @enderror" name="status_perkawinan" id="status_perkawinan">
                                                <option disabled>Pilih Status</option>
                                                <option {{ $wargas->status_perkawinan == 'Kawin' ? 'selected=selected' : '' }}>Kawin</option>
                                                <option {{ $wargas->status_perkawinan == 'Belum Kawin' ? 'selected=selected' : '' }}>Belum Kawin</option>
                                            </select>
                                            @error('status_perkawinan')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="shdk">SHDK</label>
                                            <select class="form-control @error('shdk') is-invalid @enderror" name="shdk" id="shdk">
                                                <option disabled>Pilih Status</option>
                                                <option {{ $wargas->shdk == 'Kepala Keluarga' ? 'selected=selected' : '' }}>Kepala Keluarga</option>
                                                <option {{ $wargas->shdk == 'Istri' ? 'selected=selected' : '' }}>Istri</option>
                                                <option {{ $wargas->shdk == 'Anak' ? 'selected=selected' : '' }}>Anak</option>
                                            </select>
                                            @error('shdk')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="pendidikan_akhir">Pendidikan Terakhir</label>
                                            <input type="text" class="form-control @error('pendidikan_akhir') is-invalid @enderror" name="pendidikan_akhir" placeholder="Masukkan Pendidikan Terakhir ..." value="{{ $wargas->pendidikan_akhir }}">
                                            @error('pendidikan_akhir')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                            <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" placeholder="Masukkan Pekerjaan ..." value="{{ $wargas->pekerjaan }}">
                                            @error('pekerjaan')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="nama_ibu">Nama Ibu</label>
                                            <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu" placeholder="Masukkan Nama Ibu ..." value="{{ $wargas->nama_ibu }}">
                                            @error('nama_ibu')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="nama_ayah">Nama Ayah</label>
                                            <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah" placeholder="Masukkan Nama Ayah ..." value="{{ $wargas->nama_ayah }}">
                                            @error('nama_ayah')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="alamat">Alamat</label>
                                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" placeholder="Masukkan Alamat ..." value="{{ $wargas->alamat }}">
                                            @error('alamat')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="kelurahan">Kelurahan</label>
                                            <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" placeholder="Masukkan Kelurahan ..." value="{{ $wargas->kelurahan }}">
                                            @error('kelurahan')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="rt">RT</label>
                                            <input type="text" class="form-control @error('rt') is-invalid @enderror" name="rt" placeholder="Masukkan RT ..." value="{{ $wargas->rt }}">
                                            @error('rt')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
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

{{-- <div class="form-group">
    <label for="exampleInputFile">Foto</label>
    <div class="input-group">
        <div class="custom-file">
            <input name="foto" type="file" class="custom-file-input"
                id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
    </div>
</div>
</div> --}}
