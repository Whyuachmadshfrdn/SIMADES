@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Status Pengajuan Surat</h1>
        </div>
    </div>

<section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">                
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lampiran_categories as $key => $lampiran)
                                    <tr>
                                        <td>{{$lampiran->title}}</td>
                                        <td class="d-flex">
                                            <div class="col">
                                            <a href="{{ Storage::url('public/surat/lampiran/') .$lampirans[$key]->value }}">
                                            <button type="button" class="btn btn-xs btn-info">
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </button>
                                            </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                
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