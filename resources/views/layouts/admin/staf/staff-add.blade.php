@extends('layouts.master')

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Staff</h3>
      </div>
      <form action="{{ route('staff.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap Staff</label>
            <input name="nama_staff" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Lengkap">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">NIP</label>
            <input name="nip_staff" type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIP">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tempat Lahir</label>
            <input name="tmpt_lahir" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tempat Lahir">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No. Telpon</label>
            <input name="no_telp" type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukan nomer telpon yang aktif">
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
            <label for="exampleInputEmail1">Jabatan</label>
            <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jabatan">
          </div>
          <label for="exampleInputFile">Foto</label>
          <div class="input-group">
            <div class="custom-file">
              <input name="foto" type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              @error('image')
              <div class="alert alert-danger mt-2">
                  {{ $message }}
              </div>
              @enderror
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