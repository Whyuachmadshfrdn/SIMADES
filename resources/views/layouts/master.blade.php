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
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
            <script src="js/jquery.min.js" type="text/javascript"></script>
            <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
            <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">  
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
            
        
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
        <script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );
        </script>

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
    {{-- <script src="{{ asset('assert/vendor/jquery/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('assert/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    {{-- <script src="{{ asset('assert/vendor/jquery-easing/jquery.easing.min.js') }}"></script> --}}

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