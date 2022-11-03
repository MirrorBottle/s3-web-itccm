<?php require_once('../../layouts/admin/header.php') ?>

<?php
  $auditor_id = $_SESSION['user']->auditor_id;
  $examinations = examination_list("", [
    'with_auditors' => true,
    'with_schedules' => true,
    'auditor_id' => $auditor_id
  ]);
?>

<section>
  <div class="card">
    <div class="card-header">
      <h3>Examination Berlangsung</h3>
    </div>
    <div class="card-body">
      <div class="table-wrapper">

        <table class="datatable">
          <thead>
            <tr>
              <th>Company</th>
              <th>Registration Number</th>
              <th>Examination Number</th>
              <th>Auditor</th>
              <th>Tanggal</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($examinations as $examination): ?>
              <tr>
                <td><?= $examination->company_name ?></td>
                <td><?= $examination->registration_number ?></td>
                <td><?= $examination->examination_number ?></td>
                <td>
                  <?php foreach($examination->auditors as $auditor): ?>
                    <span><?= $auditor->name ?></span><br>
                  <?php endforeach ?>
                </td>
                <td><?= format_date($examination->examination_start_date, "d/m/Y") ?> ~ <?= format_date($examination->examination_end_date, "d/m/Y") ?></td>
                <td><?= $examination->status_label ?></td>
              </tr>
            <?php endforeach ?>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<?php require_once('../../layouts/admin/footer.php') ?>