<?php require_once('../../layouts/admin/header.php') ?>


<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Tambah Buku</h1>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="birthday">Judul</label>
                        <input class="form-control" id="birthday" type="text" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="type">Kategori</label>
                        <select class="form-select select2" id="type" name="type" aria-label="Default select example">
                            <option value="Algoritma Pemrograman Dasar">Algoritma Pemrograman Dasar</option>
                            <option value="Probas">Probas</option>
                            <option value="Kecerdasan Buatan">Kecerdasan Buatan</option>
                            <option value="Novel">Novel</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="birthday">Total Halaman</label>
                        <input class="form-control" id="birthday" type="number" required>
                    </div>
                    <div class="col-md-8 mb-3">
                        <label for="birthday">Tanggal Rilis</label>
                        <input class="form-control" id="birthday" type="date" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="formFile" class="form-label">Cover</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="formFile" class="form-label">File</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>