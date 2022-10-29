<?php 

session_start();
include_once('../../core/config.php');
include_once('../../core/functions.php');

?>

<?php require_once('../../layouts/web/header.php') ?>

<!-- Products Start -->
<main class="container-fluid">
  <h1 class="heading">Pencarian Organisasi Sertifikasi Manajemen</h1>


  <section style="margin-top: 5rem;">
    <h2 class="sub-heading">Pencarian</h2>
    <hr class="mb-4">
    <div class="bg-gray p-4">
      <form class="form" action="">
        <div class="form-control">
          <label for="">Nama Perusahaan</label>
          <div class="input-wrapper">
            <input type="text" class="w-100">
          </div>
        </div>

        <div class="text-right mt-3">
          <button class="btn" type="submit">
            <i class="fa-solid fa-search mr-2"></i>
            <span>Cari</span>
          </button>
        </div>
      </form>
    </div>
  </section>

  <section style="margin-top: 5rem; margin-bottom: 10rem;">
    <h2 class="sub-heading">Hasil Pencarian</h2>
    <hr class="mb-4">
    <table class="datatable-min">
      <thead>
        <tr>
          <th>Registration Number</th>
          <th>Examination Number</th>
          <th>Standar</th>
          <th>Tanggal Examination</th>
        </tr>
      </thead>
    </table>
  </section>
</main>

<?php require_once('../../layouts/web/footer.php') ?>