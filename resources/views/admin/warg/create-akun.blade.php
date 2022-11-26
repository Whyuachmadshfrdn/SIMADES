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
                                        <h2 class="mb-0">Buat Akun Warga</h2>
                                        <p class="mb-0 text-sm">Data Warga belum memiliki akun</p>
                                    </div>
                                    <div class="mb-3">
                                        <a href="{{ Route('warga') }}" class="btn btn-success" title="Kembali"><i
                                                class="fas fa-arrow-left"></i> Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ Route('create-account') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success btn-block mt-2">Create Account</button>
                </form>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table id="table_id" class=" table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($wargas as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama_warga }}</td>
                                                <td>{{ $item->nik_warga }}</td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                Semua data telah memiliki account.
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
        @endsection
