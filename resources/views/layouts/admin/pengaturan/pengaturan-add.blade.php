<?php include "../header.php"; ?>
<?php include "sidebar-admin.php"; ?>

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Pengaturan</h3>
      </div>
      <form action="input" method="post" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Lengkap">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jabatan</label>
            <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan jabatan">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Tanda Tangan</label>
            <div class="input-group">
              <div class="custom-file">
                <input name="tanda_tangan" type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Stempel</label>
            <div class="input-group">
              <div class="custom-file">
                <input name="stempel" type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
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