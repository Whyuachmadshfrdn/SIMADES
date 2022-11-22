<?php include "../header.php"; ?>
<?php include "sidebar-admin.php"; ?>

<div class="col-md-6 offset-md-3">
    <span class="anchor" id="formChangePassword"></span>
    <hr class="mb-5">

    <div class="card card-outline-secondary">
        <div class="card-header">
            <h3 class="mb-0">Ubah Kata Sandi</h3>
        </div>
        <div class="card-body">
            <form class="form" role="form" autocomplete="off">
                <div class="form-group">
                    <label for="inputPasswordOld">Kata Sandi Lama</label>
                    <input type="password" class="form-control" id="inputPasswordOld" required="">
                </div>
                <div class="form-group">
                    <label for="inputPasswordNew">Kata Sandi Baru</label>
                    <input type="password" class="form-control" id="inputPasswordNew" required="">
                    <span class="form-text small text-muted">
                        Kata sandi harus terdiri dari 8-20 karakter, dan <em>tidak</em> boleh mengandung spasi.
                        </span>
                </div>
                <div class="form-group">
                    <label for="inputPasswordNewVerify">Ulangi Kata Sandi Baru</label>
                    <input type="password" class="form-control" id="inputPasswordNewVerify" required="">
                    <span class="form-text small text-muted">
                            Untuk mengonfirmasi, ketik kembali kata sandi baru.
                        </span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg float-right">Simpan</button>
                </div>
            </form>
        </div>
    </div>

<?php include "../footer.php"; ?>  