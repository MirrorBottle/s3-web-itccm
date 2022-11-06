<?php require_once('../../layouts/admin/header.php') ?>

<?php
  $company_id = $_SESSION['user']->company_id;
  $examinations = examination_list("WHERE examinations.company_id=$company_id AND examinations.status IN (1, 2, 3)", [
    'with_auditors' => true,
    'with_schedules' => true
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
              <th>Status</th>
              <th>Examination Number</th>
              <th>Standar</th>
              <th>Auditor</th>
              <th>Tanggal</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($examinations as $examination): ?>
              <tr>
                <td><?= $examination->status_label ?></td>
                <td><?= $examination->examination_number ?></td>
                <td><?= $examination->standard_name ?></td>
                <td>
                  <?php foreach($examination->auditors as $auditor): ?>
                    <span><?= $auditor->name ?></span><br>
                  <?php endforeach ?>
                </td>
                <td><?= format_date($examination->examination_start_date, "d/m/Y") ?> ~ <?= format_date($examination->examination_end_date, "d/m/Y") ?></td>
              </tr>
            <?php endforeach ?>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<?php require_once('../../layouts/admin/footer.php') ?>