<?php include "../header.php"; ?>
<?php include "sidebar-admin.php"; ?>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">Admin</span>
                <span class="text-black-50">admin@gmail.com</span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <p class="h6"><b>Nama Lengkap</b></p>
                        <p class="h5">Admin</p>
                    </div>
                    <div class="col-md-12">
                        <p class="h6"><b>NIP</b></p>
                        <p class="h5">19****56</p>
                    </div>
                    <div class="col-md-12">
                        <p class="h6"><b>Jabatan</b></p>
                        <p class="h5">KASI PELAYANAN</p>
                    </div>
                <div class="mt-5 text-center">
                    <a href="edit-profile.php">
                        <button class="btn btn-primary profile-button" type="button">Ubah Profil</button>
                    </a>
                    <a href="ubah-katasandi.php">
                        <button class="btn btn-primary profile-button" type="button">Ubah Kata Sandi</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php include "../footer.php"; ?>  