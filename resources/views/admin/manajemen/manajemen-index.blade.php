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
                                        <h2 class="mb-0">User</h2>
                                        <p class="mb-0 text-sm">Manajemen User</p>
                                    </div>
                                    <div class="mb-3">
                                        <a href="{{ route('manajemen-add') }}" class="btn btn-success" title="Tambah"><i
                                                class="fas fa-plus"></i> Tambah User</a>
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total User</h5>
                                        <span class="h2 font-weight-bold mb-0">{{ $users->count() }}</span>
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
                </div>
            </div>
        </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table id="table_id" class=" table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama User</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td width="7%">
                                        <a href="{{ route('manajemen-detail', $item->id) }}">
                                            <button type="button" class="btn btn-block btn-primary">Lihat</button>
                                        </a>
                                        <a href="{{ route('manajemen-edit', $item->id) }}}">
                                            <button type="button" class="btn btn-block btn-warning">Ubah</button>
                                        </a>
                                        <form action="{{ route('manajemendelete', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-block btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data User belum Tersedia.
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
