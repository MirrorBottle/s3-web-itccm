<?php require_once('../../layouts/admin/header.php') ?>

<?php

if (!isset($_GET['company_id'])) {
  header('Location: ./index.php');
}

$company = find("companies", $_GET['company_id']);


?>

<section>
  <div class="card mb-3">
    <div class="card-header">
      <div class="d-flex align-items-center justify-content-between">
        <h3>Detail Singkat Company</h3>
      </div>
    </div>
    <div class="card-body">
      <div class="row descriptions">
        <div class="col col-6">
          <div class="description-item">
            <div class="description-label">Nama Perusahaan</div>
            <div class="description-value"><?= $company->name ?></div>
          </div>
        </div>
        <div class="col col-6">
          <div class="description-item">
            <div class="description-label">Registration Number</div>
            <div class="description-value"><?= $company->registration_number ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <div class="d-flex align-items-center justify-content-between">
        <h3>Pendaftaran Examination</h3>
      </div>
    </div>
    <div class="card-body">
      <form class="form" action="" method="POST">
        <div class="form-control">
          <label for="">Standar</label>
          <div class="input-wrapper">
            <input type="text" class="w-100" name="registration_number" required>
          </div>
        </div>
        <div class="form-control">
          <label for="">Examination Number</label>
          <div class="input-wrapper">
            <input type="text" class="w-100" name="registration_number" required>
          </div>
        </div>
        <div class="form-control">
          <label for="">Nama Perusahaan</label>
          <div class="input-wrapper">
            <input type="text" class="w-100" name="name" required>
          </div>
        </div>
        <div class="form-control">
          <label for="">Email Perusahaan</label>
          <div class="input-wrapper">
            <input type="email" class="w-100" name="email" required>
          </div>
        </div>
        <div class="form-control">
          <label for="">Nomor Kontak</label>
          <div class="input-wrapper">
            <input type="tel" class="w-100" name="phone_number" required>
          </div>
        </div>
        <div class="form-control">
          <label for="">Alamat</label>
          <div class="input-wrapper">
            <textarea name="address" id="address" cols="30" rows="5" class="w-100" required></textarea>
          </div>
        </div>
        <div class="form-control">
          <label for="">Nomor FAX</label>
          <div class="input-wrapper">
            <input type="text" class="w-100" name="fax_number">
          </div>
        </div>
        <div class="form-control">
          <label for="">Homepage</label>
          <div class="input-wrapper">
            <input type="url" class="w-100" name="homepage">
          </div>
        </div>
        <div class="text-right mt-3">
          <button class="btn" type="submit">
            <span>Simpan</span>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
<?php require_once('../../layouts/admin/footer.php') ?>