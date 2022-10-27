@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Warga</h1>
        </div>
    </div>

<section class="content">
    <div class="container-fluid">

        @if ($message = Session::get('succes'))
        <div class="alert alert-success alert-dismissble">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-times"></i></button>
        <h4><i class="icon fa fa-check"></i>Success!</h4>
        </div>
        @endif

        <a href="{{ route('warga.create') }}">
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
                                    <th>Nama</th>
                                    <th>NIK</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($wargas as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->nama_warga}}</td>
                                    <td>{{$item->nik_warga}}</td>
                                    <td width="7%">
                                        <a href="{{ route('warga.show', $item->id) }}">
                                        <button type="button" class="btn btn-block btn-primary">Lihat</button>
                                        </a>
                                    </td>
                                    <td width="7%">
                                        <a href="{{ route('warga.edit', $item->id) }}">
                                        <button type="button" class="btn btn-block btn-warning">Ubah</button>
                                        </a>
                                    </td>
                                    <td width="7%">
                                    <form method="post" action="{{route('warga.destroy',$item->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-block btn-danger">Hapus</button>
                                    </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Warga belum Tersedia.
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