<?php include "../header.php"; ?>
<?php include "sidebar-admin.php"; ?>

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
                                    <th>Jenis Surat</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Status Surat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SK Domisili</td>
                                    <td>2022-05-20</td>
                                    <td> <mark style="background-color: green">selesai</mark>
                                    </td>
                                    <td>
                                        <a href="#">
                                        <button type="button" class="btn btn-xs btn-info">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">
                                        <button type="button" class="btn btn-xs btn-info">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                        </button>
                                        </a>
                                    </td>
                                </tr>
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

<?php include "../footer.php"; ?>