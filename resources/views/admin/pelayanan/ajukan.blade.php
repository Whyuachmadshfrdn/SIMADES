@extends('layouts.master')

@section('styles')
    <meta name="description"
        content="Website Resmi Pemerintah Desa {{ $desa->nama_desa }}, Kecamatan {{ $desa->nama_kecamatan }}, Kabupaten {{ $desa->nama_kabupaten }}. Melayani pembuatan surat keterangan secara online">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <style>
        .ikon {
            font-family: fontAwesome;
        }

        .animate-up:hover {
            top: -5px;
        }
    </style>
@endsection

@section('content')
    <div class="row mt-4 justify-content-center">
        @forelse ($surat as $item)
            <div class="col-lg-4 col-md-6 surats">
                <div class="single-service bg-white rounded shadow p-3 animate-up">
                    <a href="{{ route('buat-surat', ['id' => $item->id, 'slug' => Str::slug($item->nama)]) }}">
                        <i class="fas {{ $item->icon }} ikon fa-5x mb-3"></i>
                        <h4>{{ $item->nama }}</h4>
                    </a>
                    <p>{{ $item->deskripsi }}</p>
                </div>
            </div>
        @empty
            <div class="col">
                <div class="single-service bg-white rounded shadow">
                    <h4>Data belum tersedia</h4>
                </div>
            </div>
        @endforelse
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#cari").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".surats").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endpush