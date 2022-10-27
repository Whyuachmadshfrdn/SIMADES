<?php include "../header.php"; ?>
<?php include "sidebar-admin.php"; ?>


<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Keluarga</h1>
        </div>
    </div>

<section class="content">
    <div class="container-fluid">
        <div class="alert alert-success alert-dismissble">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fas fa-times"></i></button>
        <h4><i class="icon fa fa-check"></i>Success!</h4>
        </div>
        <a href="tambah-keluarga.php">
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
                                    <th>Nama Warga</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Wahyu</td>
                                    <td>Kepala Keluarga</td>
                                    <td width="7%">
                                        <a href="detail-keluarga.php">
                                        <button type="button" class="btn btn-block btn-primary">Lihat</button>
                                        </a>
                                    </td>
                                    <td width="7%">
                                        <a href="ubah-keluarga.php">
                                        <button type="button" class="btn btn-block btn-warning">Ubah</button>
                                        </a>
                                    </td>
                                    <td width="7%">
                                    <a href="blank.html">    
                                    <button type="button" class="btn btn-block btn-danger">Hapus</button>
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