@extends('layouts.master')

@section('content')
  <div class="container-fluid">
      <div class="card card-primary">
          <div class="card-header">
              <h3 class="card-title">Detail Panduan</h3>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col-md-4">
                      <div>
                          <p class="h4"><b>Judul Panduan</b></p>
                          <p class="h5">{{ $panduans->judul }}</p>
                      </div>
                      <div>
                          <p class="h4"><b>Isi Panduan</b></p>
                          <p class="h5">{!! $panduans->deskripsi !!}</p>
                      </div>
                      <div>
                        <p class="h4"><b>Gambar</b></p>
                        <img src="{{ Storage::url('public/panduan/') . $panduans->gambar }}" class="rounded" width="1000px">
                    </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
@endsection  