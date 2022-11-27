<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <link href="{{ asset('/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
        <link href="{{ asset('/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
    
    </head>

    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-0">
                <img class="px-4 px-sm-4 mt-2 mb-3" style="width: 18rem; "
                src="../../assert/img/logo-penajam.png" alt="...">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Send Feedback</span>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-xl-25 col-lg-12 col-md-2">
                        <div class="card o-hidden border-5 shadow-lg my-5">
                            <div class="card-body p-0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h1 text-gray-900 mb-4, font-weight-bold">WEBSITE PELAYANAN SURAT RESMI DESA GIRIMUKTI</h1>
                                            </div>
                                            <div class="text-center mb-4">
                                                <img height="150px" src="{{ url('/assert/img/Group 576.png') }}" alt="logo">
                                            </div>
                                            <div class="text-left">
                                                <h1 class="h4 text-gray, font-weight-bold">LOGIN WARGA</h1>
                                            </div>
                                            <form method="POST" action="{{ route('login') }}" class="user">
                                                @csrf
                                                <div class="form-group">
                                                    <input name="email" type="nik" class="form-control form-control-user"
                                                        id="6409***********04" aria-describedby="NIKHelp"
                                                        placeholder="Masukan NIK Anda" autofocus>
                                                </div>
                                                <div class="form-group">
                                                    <input name="password" type="password"
                                                        class="form-control form-control-user" id="exampleInputPassword"
                                                        placeholder="Password berupa NIK Anda">
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox small">
                                                        <input name="remember" type="checkbox" class="custom-control-input"
                                                            id="customCheck">
                                                        <label class="custom-control-label" for="customCheck">Remember
                                                            Me</label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    Masuk
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <body>
            @if ($panduans->count() > 0)
                <section class="mb-5">
                    <div class="row">
                        <div class="col-md">
                            <div class="header-body text-center mt-5 mb-3">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-6 border-bottom">
                                        <h2 class="text-grey">Alur Pengajuan Surat Online</h2>
                                        <p class="text-grey">Pemerintahan Desa, masyarakat dapat dengan mudah untuk melakukan pembuatan surat dengan adanya aplikasi ini.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($panduans as $item)
                    <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-10 mb-10">
                                <div class="card animate-up shadow">
                                    <div class="card-body text-center">
                                        <a>
                                            <h3>{{ $item->judul }}</h3>
                                        </a>
                                    </div>
                                    <a>
                                        <img src="{{ Storage::url('public/panduan/') . $item->gambar }}" class="img-center" height="500px" width="1000px">
                                    </a>
                                    <div class="card-body text-center">
                                        <a>
                                            <h3>{!! $item->deskripsi !!}</h3>
                                        </a>
                                    </div>
                                    <div class="card-body text-center">
                                        <a>
                                            <h3>---</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
            @endif
        </body>

        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-grey-50 small">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2022 Desa Girimukti Kab. Penajam Paser Utara
                            <br>. All Right Reserved
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('assert/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
   

