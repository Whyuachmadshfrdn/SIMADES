@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Detail Staff</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ Storage::url('public/staff/') . $staff->foto }}" class="rounded" width="250px">
                        </div>
                        <div class="col-md-4">
                            <div>
                                <p class="h6"><b>NAMA LENGKAP STAFF</b></p>
                                <p class="h5">{{ $staff->nama_staff }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>NIP</b></p>
                                <p class="h5">{{ $staff->nip_staff }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>TEMPAT, TANGGAL LAHIR</b></p>
                                <p class="h5">{{ $staff->tmpt_lahir }}, {{ $staff->tgl_lahir }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>NOMOR TELEPON</b></p>
                                <p class="h5">{{ $staff->no_telp }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>JENIS KELAMIN</b></p>
                                <p class="h5">{{ $staff->jenis_kelamin }}</p>
                            </div>
                            <div>
                                <p class="h6"><b>JABATAN</b></p>
                                <p class="h5">{{ $staff->jabatan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
