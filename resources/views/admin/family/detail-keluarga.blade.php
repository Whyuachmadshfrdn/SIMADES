@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Detail Kepala Keluarga</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div>
                            <h3 class="card-title">NO. KARTU KELUARGA</h3>
                            <p class="h5">{{ $kepala_keluarga->kk }} </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        @foreach ($wargas as $item)
                        <div>
                            <h3 class="card-title">Anggota Keluarga ({{ $item->shdk }})</h3>
                        </div>
                        <div>
                            <p class="h6"><b>Nama</b></p>
                            <p class="h5">{{ $item->nama_warga }}</p>
                        </div>
                        <div>
                            <p class="h6"><b>NIK</b></p>
                            <p class="h5">{{ $item->nik_warga }}</p>
                        </div>
                        <div>
                            <p>----------------------------------</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection
