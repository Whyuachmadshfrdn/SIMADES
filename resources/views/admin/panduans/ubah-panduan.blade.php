@extends('layouts.master')

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Ubah Panduan</h3>
      </div>
      <form action="{{route('panduan.update',$panduans->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input name="judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Judul" value="{{$panduans->judul}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Deskripsi</label>
            <input name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan isi panduan" Value="{{$panduans->deskripsi}}">
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