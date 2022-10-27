<?php include "../header.php"; ?>
<?php include "sidebar-admin.php"; ?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Konfirmasi Pengajuan</h1>
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
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Surat</th>
                                    <th>Tanggal Pengajuan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Wahyu Achmad Shafardan</td>
                                    <td>SK Menikah</td>
                                    <td>2022-05-20</td>
                                    <td> 
                                        <mark style="background-color: yellow"> menunggu persetujuan</mark>
                                        <!-- <mark style="background-color: red; color: white;">Ditolak</mark>
                                        <mark style="background-color: green; color: white;">Diterima</mark> -->
                                    </td>
                                    <td width="7%">
                                        <a href="lihat-pengajuan.php">
                                        <button type="button" class="btn btn-block btn-primary">Lihat</button>
                                        </a>
                                    </td>
                                    <td width="7%">
                                        <a href="ubah-warga.php">
                                        <button type="button" class="btn btn-block btn-success">Terima</button>
                                        </a>
                                    </td>
                                    <td width="7%">
                                    <a href="blank.html">    
                                    <button type="button" class="btn btn-block btn-danger">Tolak</button>
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