<?php require_once('../../layouts/admin/header.php') ?>

<?php
  $auditor_id = $_SESSION['user']->auditor_id;
  $examinations = examination_list("", ['with_auditors' => true, 'with_schedules' => true], $auditor_id);
?>

<section>
  <div class="card">
    <div class="card-header">
      <h3>Profile</h3>
    </div>
    <div class="card-body">
        
    </div>
  </div>
</section>
<?php require_once('../../layouts/admin/footer.php') ?>