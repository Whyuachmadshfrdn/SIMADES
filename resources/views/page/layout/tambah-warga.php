<?php include "../header.php"; ?>
<?php include "sidebar-admin.php"; ?>

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Tambah Data Warga</h3>
      </div>
      <form action="input" method="post" enctype="multipart/form-data">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Lengkap">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">NIK</label>
            <input name="nik" type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIK">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tempat Lahir</label>
            <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tempat Lahir">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Pekerjaan</label>
            <input name="pekerjaan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Pekerjaan">
          </div>
          <div class="form-group">  
            <label>Jenis Kelamin</label>  
            <select name="jenis_kelamin" class="form-control"> 
                <option selected disabled>Pilih Jenis Kelamin</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select> 
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Golongan Darah</label>
            <input name="golongan_darah" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Golongan Darah">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kewarganegaraan</label>
            <input name="kewarganegaraan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan kewarganegaraan">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Agama</label>
            <input name="agama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Agama">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">RT</label>
            <input name="rt" type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukan RT">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">RW</label>
            <input name="rw" type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukan RW">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kelurahan/Desa</label>
            <input name="kelurahan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Kelurahan/Desa">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Kecamatan</label>
            <input name="kecamatan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Kecamatan">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Alamat">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Foto</label>
            <div class="input-group">
              <div class="custom-file">
                <input name="foto_profile" type="file" class="custom-file-input" id="exampleInputFile">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <!-- <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div> -->
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