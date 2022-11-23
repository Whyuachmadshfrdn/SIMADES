<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard-Admin</title>

    <link href="{{ asset('assert/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="{{ asset('assert/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="{{ asset('/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ asset('/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
    @yield('styles')

    <link href="{{ asset('assert/css/design.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script src="{{ asset('assert/vendor/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assert/vendor/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <style>
        thead input {
            width: 100%;
        }
    </style>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/fixedheader/3.2.3/css/fixedHeader.dataTables.min.css"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>




{{-- @section('content') --}}
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-12 col-md-9">
                <div class="card o-hidden border-5 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h1 text-gray-900 mb-4, font-weight-bold">Selamat Datang</h1>
                                        <h1 class="h4 text-primary, font-weight-bold">Aplikasi Pelayanan Administrasi</h1>                                       
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="nik" class="form-control form-control-user"
                                                id="6409***********04" aria-describedby="NIKHelp"
                                                placeholder="Masukan NIK Anda">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href="admin/dashboard.php" class="btn btn-primary btn-user btn-block">
                                            Masuk
                                        </a>
                                    </form>                               
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}