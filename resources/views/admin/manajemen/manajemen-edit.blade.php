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
                                                <h2 class="mb-0">Edit User</h2>
                                                <p class="mb-0 text-sm">Manajemen User</p>
                                            </div>
                                            <div class="mb-3">
                                                <a href="{{ Route('manajemen-index') }}" class="btn btn-success" title="Kembali"><i class="fas fa-arrow-left"></i> Kembali</a>
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
                                <form autocomplete="off" action="{{ route('add-manajemen', $users->id) }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="nik">NAMA</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Masukkan Nama ..." value="{{ $users->name }}">
                                            @error('name')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="kk">Email</label>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Masukkan Email ..." value="{{ $users->email }}">
                                            @error('email')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="role">Role</label>
                                            <select class="form-control @error('role') is-invalid @enderror" name="role" id="role">
                                                <option selected value="">Pilih Role</option> 
                                                <option {{ $users->role == 'admin' ? 'selected=selected' : '' }}>admin</option>
                                                <option {{ $users->role == 'kades' ? 'selected=selected' : '' }}>kades</option>
                                                <option {{ $users->role == 'staff' ? 'selected=selected' : '' }}>staff</option>
                                                <option {{ $users->role == 'warga' ? 'selected=selected' : '' }}>warga</option>
                                            </select>
                                            @error('role')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-group col-lg-4 col-md-6">
                                            <label class="form-control-label" for="password">New Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password ..." value="">
                                            @error('password')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
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
