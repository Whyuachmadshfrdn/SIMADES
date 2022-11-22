<?php include "../header.php"; ?>
<?php include "sidebar-admin.php"; ?>

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Ubah Data Kepala Keluarga</h3>
      </div>
      <form action="input" method="post" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap Kepala Keluarga</label>
            <input name="nama_staf" type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan nama lengkap staf" value="Wahyu">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No. Kartu Keluarga(KK)</label>
            <input name="nip" type="text" class="form-control" id="exampleInputEmail1" placeholder="masukan NIP" value="19**********">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Foto</label>
            <div class="input-group">
              <div class="custom-file">
                <input name="foto_profile" type="file" class="custom-file-input" id="exampleInputFile">
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