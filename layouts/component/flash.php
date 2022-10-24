<?php if(isset($_SESSION['flash']['success'])): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo $_SESSION['flash']['success']; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<?php if(isset($_SESSION['flash']['error'])): ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo $_SESSION['flash']['error']; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<?php unset($_SESSION['flash']); ?>
