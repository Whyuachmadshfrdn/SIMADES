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
                          <p class="h5">{{ $panduans->deskripsi }}</p>
                      </div>
                    <div class="col-md-4">
                        {{-- <img src="{{ Storage::url('public/staff/') . $staff->foto }}" class="rounded" width="250px"> --}}
                    </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
@endsection  