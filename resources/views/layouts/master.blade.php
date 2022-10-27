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
            <link href="{{ asset('assert/css/design.css') }}" rel="stylesheet">

        </head>
        <body>
            @include('layouts.navbar')
                @if($errors->any())
                @foreach ($errors->all() as $error)
                    
                
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
                @endforeach
                @endif
            @yield('content')
        </body>

        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; 2022 Pemerintahan Kab. Penajam Paser Utara 
                        <br>. All Right Reserved
                    </span>
                </div>
            </div>
        </footer>

 
    
    

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assert/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assert/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assert/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assert/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assert/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assert/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assert/js/demo/chart-pie-demo.js') }}"></script>
    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</html>