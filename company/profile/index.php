<?php require_once('../../layouts/admin/header.php') ?>

<?php
  $company = find("companies", $_SESSION['user']->company_id);
?>

<section>
<div class="card mb-3">
    <div class="card-header">
      <div class="d-flex align-items-center justify-content-between">
        <h3>Detail Company</h3>
      </div>
    </div>
    <div class="card-body">
      <div class="row descriptions">
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Nama Perusahaan</div>
            <div class="description-value"><?= $company->name ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Registration Number</div>
            <div class="description-value"><?= $company->registration_number ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Email Perusahaan</div>
            <div class="description-value"><?= $company->email ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Nomor Kontak</div>
            <div class="description-value"><?= $company->phone_number ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Alamat</div>
            <div class="description-value"><?= $company->address ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Nomor FAX</div>
            <div class="description-value"><?= $company->fax_number ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Homepage</div>
            <div class="description-value"><?= $company->homepage ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once('../../layouts/admin/footer.php') ?>