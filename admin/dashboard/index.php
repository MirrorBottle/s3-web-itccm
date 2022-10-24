<?php require_once('../../layouts/admin/header.php') ?>


<div id="main" class="min-vh-100 pt-4">
    <div class="row">
        <div class="col-12 mb-4">
            <h2 class="h4">Selamat Datang, <?= $_SESSION['username'] ?></h2>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="fs-5 fw-bold mb-0">Daftar Pengguna</h2>
                            </div>
                            <div class="col text-end"><a href="#" class="btn btn-sm btn-primary">Lihat Semua</a></div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">Nama</th>
                                    <th class="border-bottom" scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-gray-900" scope="row">Ananta</th>
                                    <td class="fw-bolder text-gray-500">ananta@pt-anandita.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>