<?php include "../header.php"; ?>
<?php include "sidebar-admin.php"; ?>

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Keluarga</h3>
      </div>
      <form action="input" method="post" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap Kepala Keluarga</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Lengkap">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No. Kartu Keluarga(KK)</label>
            <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan jabatan">
          </div>
        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include "../footer.php"; ?>  