@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="header bg-gradient-primary pb-0 pt-5 pt-md-6">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col">
                        <div class="card shadow h-100">
                            <div class="card-header border-0">
                                <div
                                    class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between text-center text-md-left">
                                    <div class="mb-3">
                                        <h2 class="mb-0">Staff</h2>
                                        <p class="mb-0 text-sm">Kelola Data Staff</p>
                                    </div>
                                    <div class="mb-3">
                                        <a href="{{ Route('staff-add') }}" class="btn btn-success" title="Tambah"><i
                                                class="fas fa-plus"></i> Tambah Staff</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xl-3 col-md-6 col-sm-6 mb-3">
                        <div class="card card-stats shadow h-100">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Staff</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $staff->count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 mb-3">
                        <div class="card card-stats shadow h-100">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Staff Laki-laki</h5>
                                        <span
                                            class="h2 font-weight-bold mb-0">{{ $staff->where('jenis_kelamin', 'Laki-laki')->count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 mb-3">
                        <div class="card card-stats shadow h-100">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Staff Perempuan</h5>
                                        <span
                                            class="h2 font-weight-bold mb-0">{{ $staff->where('jenis_kelamin', 'Perempuan')->count() }}</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-pink text-white rounded-circle shadow">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table id="table_id" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Staf</th>
                                    <th>NIP</th>
                                    <th>Jabatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($staff as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_staff }}</td>
                                        <td>{{ $item->nip_staff }}</td>
                                        <td>{{ $item->jabatan }}</td>
                                        <td width="7%">
                                            <a href="{{ Route('staff-detail' ,$item->id) }}">
                                                <button type="button" class="btn btn-block btn-primary">Lihat</button>
                                            </a>
                                            <a href="{{ Route('staff-edit' ,$item->id) }}">
                                                <button type="button" class="btn btn-block btn-warning">Ubah</button>
                                            </a>
                                            <form action="{{ Route('staffdelete' ,$item->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-block btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Staff belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="pull-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
