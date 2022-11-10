            {{-- <body id="page-top"> --}}
                <div id="wrapper">
                    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard-admin">
                            <div class="sidebar-brand-icon rotate-n-0">
                                <div class="text-center">
                                    <img class="img-fluid px-4 px-sm-4 mt-5 mb-2" style="width: 25rem;"
                                        src="../../assert/img/logo-simades.png" alt="...">
                                </div>
                            </div>
                        </a> <br>
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard-admin">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <span>Dashboard</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fa fa-database" aria-hidden="true"></i>
                                <span>Master Data</span>
                            </a>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="/warga">Warga</a>
                                    <a class="collapse-item" href="data-keluarga.php">Keluarga</a>
                                    <a class="collapse-item" href="{{route('staff.index')}}">Staff</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                                aria-expanded="true" aria-controls="collapseUtilities">
                                <i class="fa fa-plus-square" aria-hidden="true"></i>
                                <span>Pelayanan</span>
                            </a>
                            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <a class="collapse-item" href="tambah-pelayanan.php">Tambah Pelayanan</a>
                                    <a class="collapse-item" href="konfirmasi-pengajuan.php">Konfirmasi Pengajuan</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="status.php">
                                <i class='fa fa-retweet'></i>
                                <span>Status Surat</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pengaturan.php">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span>Pengaturan</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('panduan.index')}}">
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                <span>Panduan</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>Manajemen User</span></a>
                        </li>
                        <div class="sidebar-heading">
                        </div>
                        <hr class="sidebar-divider d-none d-md-block">
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>
                    </ul>
                    <div id="content-wrapper" class="d-flex flex-column">
                        <div id="content" class="st-wrapper">
                            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                    <i class="fa fa-bars"></i>
                                </button>
                                
                                <ul class="navbar-nav ml-auto">
            
                                    <li class="nav-item dropdown no-arrow mx-1">
                                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-bell fa-fw"></i>
                                            <span class="badge badge-danger badge-counter">1</span>
                                        </a>
            
                                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="alertsDropdown">
                                            <h6 class="dropdown-header">
                                                Alerts Center
                                            </h6>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <div class="mr-3">
                                                    <div class="icon-circle bg-primary">
                                                        <i class="fas fa-file-alt text-white"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="small text-gray-500">December 12, 2021</div>
                                                    <span class="font-weight-bold">Pengajuan SP KTP</span>
                                                </div>
                                            </a>
                                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                        </div>
                                    </li>
            
                                    <div class="topbar-divider d-none d-sm-block"></div>
            
                                    <li class="nav-item dropdown no-arrow">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                            <img class="img-profile rounded-circle"
                                                src="../../assert/img/undraw_profile.svg">
                                        </a>
                                        
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="profile.php">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Profile
                                            </a>
            
                                            <div class="dropdown-divider"></div>
            
                                            <a class="dropdown-item" href="../login.php" data-toggle="modal" data-target="#logoutModal">
                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Logout
                                            </a>
                                        </div>
                                        <a class="scroll-to-top rounded" href="#page-top">
                                        <i class="fas fa-angle-up"></i>
                                        </a>
            
                                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Siap untuk logout?</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Pilih "Logout" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                        <a class="btn btn-primary" href="../login.php">Logout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                        {{-- </div> --}}
                    {{-- </div> --}}
                {{-- </div> --}}