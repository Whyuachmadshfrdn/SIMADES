@extends('layouts.master')

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Panduan</h3>
      </div>
      <form action="{{ route('panduan.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input name="judul" type="text" class="form-control" id="judul" placeholder="Masukan Nama Judul">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Deskripsi</label>
            {{-- <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Blog">{{ old('content', $blog->content) }}</textarea> --}}
                            
            <input name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan isi panduan">
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