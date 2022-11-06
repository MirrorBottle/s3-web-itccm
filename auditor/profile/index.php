<?php require_once('../../layouts/admin/header.php') ?>

<?php
  $auditor_id = $_SESSION['user']->auditor_id;
  
  $auditor = find("auditors", $_SESSION['user']->auditor_id);

  $qualifications = query("
  SELECT
    auditor_qualifications.*,
    standards.name as standard_name
  FROM
    auditor_qualifications
    JOIN standards ON auditor_qualifications.standard_id = standards.id
    WHERE auditor_qualifications.auditor_id = $auditor_id
  ");

?>

<section>
<div class="card mb-3">
    <div class="card-header">
      <div class="d-flex align-items-center justify-content-between">
        <h3>Detail Auditor</h3>
      </div>
    </div>
    <div class="card-body">
      <div class="row descriptions">
        <div class="col col-2">
          <img src="../../storage/auditors/<?= $auditor->photo ?>" alt="">
        </div>
        <div class="col col-10">
          <div class="row descriptions">
            <div class="col col-6">
              <div class="description-item">
                <div class="description-label">Nama Depan</div>
                <div class="description-value"><?= $auditor->first_name ?></div>
              </div>
            </div>
            <div class="col col-6">
              <div class="description-item">
                <div class="description-label">Nama Belakang</div>
                <div class="description-value"><?= $auditor->last_name ?></div>
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
            <div class="col col-12">
              <div class="description-item">
                <div class="description-label">Tanggal Lahir</div>
                <div class="description-value"><?= format_date($auditor->birthday) ?></div>
              </div>
            </div>
            <div class="col col-12">
              <div class="description-item">
                <div class="description-label">Alamat</div>
                <div class="description-value"><?= $auditor->address ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3">
    <div class="card-header">
      <div class="d-flex align-items-center justify-content-between">
        <h3>Kualifikasi Auditor</h3>
      </div>
    </div>
    <div class="card-body">
      <table id="auditor-qualifications" class="datatable">
        <thead>
          <tr>
            <th>Standard</th>
            <th>Tanggal Kadaluarsa</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($qualifications as $qualification) : ?>
            <tr>
              <td><?= $qualification->standard_name ?></td>
              <td><?= format_date($qualification->expiration_date) ?></td>
            </tr>
          <?php endforeach ?>

        </tbody>
      </table>
    </div>
  </div>
</section>
<?php require_once('../../layouts/admin/footer.php') ?>