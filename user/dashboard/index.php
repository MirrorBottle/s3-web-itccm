<?php require_once('../../layouts/admin/header.php') ?>


<div id="main" class="min-vh-100 pt-4">
    <div class="row">
        <div class="col-12 mb-4">
          <h2 class="h4">Selamat Datang, <?= $_SESSION['username'] ?></h2>
        </div>
        <div class="col-12 d-flex align-items-center justify-content-center flex-column text-center" style="min-height: 60vh">
            <i class="fa-regular fa-face-sad-cry text-primary fa-5x mb-3"></i>
            <h5 style="font-weight: bold;">Mari membaca, oke? <br>Segera tambahkan buku favoritmu!</h5>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>