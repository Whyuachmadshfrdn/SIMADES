@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Panduan</h1>
        </div>
    </div>

<section class="content">
    <div class="container-fluid">
        <a href="{{ route('panduan.create') }}">
            <button type="button" class="btn btn-success mb-1">Tambah Data</button>
        </a>
        <div class="row">
            <div class="col-12">
                <div class="card">                
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($panduans as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->judul}}</td>
                                    <td>{{$item->deskripsi}}</td>
                                    <td width="7%">
                                        <a href="{{ route('panduan.show', $item->id) }}">
                                        <button type="button" class="btn btn-block btn-primary">Lihat</button>
                                        </a>
                                    </td>
                                    <td width="7%">
                                        <a href="{{ route('panduan.edit', $item->id) }}">
                                        <button type="button" class="btn btn-block btn-warning">Ubah</button>
                                        </a>
                                    </td>
                                    <td width="7%">
                                        <form method="post" action="{{route('panduan.destroy',$item->id)}}">
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