@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Staff</h1>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <a href="/staff-add">
                    <button type="button" class="btn btn-success mb-1">Tambah Data</button>
                </a>
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
                                        @forelse ($staffs as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_staff }}</td>
                                                <td>{{ $item->nip_staff }}</td>
                                                <td>{{ $item->jabatan }}</td>
                                                <td width="7%">
                                                    <a href="/staff-detail/{{ $item->id }}">
                                                        <button type="button"
                                                            class="btn btn-block btn-primary">Lihat</button>
                                                    </a>
                                                    <a href="/staff-edit/{{ $item->id }}">
                                                        <button type="button"
                                                            class="btn btn-block btn-warning">Ubah</button>
                                                    </a>
                                                    <form action="/staffdelete/{{ $item->id }}">
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
