<nav id="navbar" class="p-3 row">
  <a href="" class="col-2">
    <img src="../../assets/img/logo_horizontal.png" alt="" style="height: 50px;">
  </a>
  <div class="d-flex align-items-center justify-content-end col-10">
    <p class="mr-3"><?= $_SESSION['user']->username ?></p>
    <a href="../../auth/logout.php" class="btn btn-sm btn-danger">Logout</a>
  </div>
</nav>