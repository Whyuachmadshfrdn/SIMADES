@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Detail Warga</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ Storage::url('public/warga/') . $wargas->foto }}" class="rounded" width="250px">
                        </div>
                        <div class="col-md-4">
                            <div>
                                <p class="h6"><b>Nama Lengkap</b></p>
                                <p class="h5">{{ $wargas->nama_warga }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>NIK</b></p>
                                <p class="h5">{{ $wargas->nik_warga }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>No. KK</b></p>
                                <p class="h5">{{ $wargas->kk }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>Tempat, Tanggal Lahir</b></p>
                                <p class="h5">{{ $wargas->tmpt_lahir }}, {{ $wargas->tgl_lahir }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>Jenis Kelamin</b></p>
                                <p class="h5">{{ $wargas->jenis_kelamin }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>Golongan Darah</b></p>
                                <p class="h5">{{ $wargas->gol_darah }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>Agama</b></p>
                                <p class="h5">{{ $wargas->agama }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <p class="h6"><b>Status Perkawinan</b></p>
                                <p class="h5">{{ $wargas->status_perkawinan }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>SHDK</b></p>
                                <p class="h5">{{ $wargas->shdk }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>Pendidikan Akhir</b></p>
                                <p class="h5">{{ $wargas->pendidikan_akhir }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>Pekerjaan</b></p>
                                <p class="h5">{{ $wargas->pekerjaan }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>Nama Ibu</b></p>
                                <p class="h5">{{ $wargas->nama_ibu }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>Nama Ayah</b></p>
                                <p class="h5">{{ $wargas->nama_ayah }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>alamat</b></p>
                                <p class="h5">{{ $wargas->alamat }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>Kelurahan</b></p>
                                <p class="h5">{{ $wargas->kelurahan }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>RT</b></p>
                                <p class="h5">{{ $wargas->rt }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
