<?php require_once('../../layouts/admin/header.php') ?>

<?php

if (!isset($_GET['id'])) {
  header('Location: ./index.php');
}

$examination = examination_show($_GET['id']);

?>

<section id="registration">
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
            <div class="description-value"><?= $examination->company_name ?></div>
          </div>
        </div>
        <div class="col col-6">
          <div class="description-item">
            <div class="description-label">Registration Number</div>
            <div class="description-value"><?= $examination->registration_number ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3">
    <div class="card-header">
      <div class="d-flex align-items-center justify-content-between">
        <h3>Detail Examination</h3>
        <a href="./create.php" class="btn btn-warning">
          <i class="fa-solid fa-pen"></i>
          <span>Ubah Examination</span>
        </a>
      </div>
    </div>
    <div class="card-body">
      <div class="row descriptions">
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Examination Number</div>
            <div class="description-value"><?= $examination->examination_number ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Standar</div>
            <div class="description-value"><?= $examination->standard_name ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Tanggal Registrasi</div>
            <div class="description-value"><?= format_date($examination->registration_date) ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Tanggal Mulai Examination</div>
            <div class="description-value"><?= format_date($examination->examination_start_date) ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Tanggal Selesai Examination</div>
            <div class="description-value"><?= format_date($examination->examination_end_date) ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Tanggal Kadaluwarsa Sertifikat</div>
            <div class="description-value"><?= format_date($examination->expiration_date) ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3">
    <div class="card-header">
      <div class="d-flex align-items-center justify-content-between">
        <h3>Anggota Tim</h3>
        <a href="./create.php" class="btn btn-warning">
          <i class="fa-solid fa-pen"></i>
          <span>Ubah Penjadwalan</span>
        </a>
      </div>
    </div>
    <div class="card-body">
      <?php foreach($examination->auditors as $auditor): ?>
        <div class="row descriptions mb-3">
          <div class="col col-2">
            <img src="../../storage/auditors/<?= $auditor->photo ?>" alt="">
          </div>
          <div class="col col-10">
            <div class="row descriptions">
              <div class="col col-12">
                <div class="description-item">
                  <div class="description-label">Nama</div>
                  <div class="description-value"><?= $auditor->name ?></div>
                </div>
              </div>
              <div class="col col-12">
                <div class="description-item">
                  <div class="description-label">Posisi</div>
                  <div class="description-value"><?= $auditor->position == 1 ? 'Team Leader' : 'Member' ?></div>
                </div>
              </div>
              <div class="col col-12">
                <div class="description-item">
                  <div class="description-label">Email</div>
                  <div class="description-value"><?= $auditor->email ?></div>
                </div>
              </div>
              <div class="col col-12">
                <div class="description-item">
                  <div class="description-label">No. Kontak</div>
                  <div class="description-value"><?= $auditor->phone_number ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="card mb-3">
    <div class="card-header">
      <div class="d-flex align-items-center justify-content-between">
        <h3>Dokumen</h3>
      </div>
    </div>
    <div class="card-body">
      <div class="row descriptions">
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Examination Number</div>
            <div class="description-value"><?= $examination->examination_number ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Standar</div>
            <div class="description-value"><?= $examination->standard_name ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Tanggal Registrasi</div>
            <div class="description-value"><?= format_date($examination->registration_date) ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Tanggal Mulai Examination</div>
            <div class="description-value"><?= format_date($examination->examination_start_date) ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Tanggal Selesai Examination</div>
            <div class="description-value"><?= format_date($examination->examination_end_date) ?></div>
          </div>
        </div>
        <div class="col col-12">
          <div class="description-item">
            <div class="description-label small">Tanggal Kadaluwarsa Sertifikat</div>
            <div class="description-value"><?= format_date($examination->expiration_date) ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php require_once('../../layouts/admin/footer.php') ?>