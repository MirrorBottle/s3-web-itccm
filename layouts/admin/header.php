<?php
    session_start();
    include("../../core/config.php");
    include("../../core/functions.php");
    if($_SESSION['status']!="login"){
      header("location:../../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>ITCCM | Indonesia Testing Center for Construction Materials</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link type="text/css" href="../../assets/dashboard/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
  <link type="text/css" href="../../assets/dashboard/vendor/notyf/notyf.min.css" rel="stylesheet">
  <link type="text/css" href="../../assets/dashboard/css/volt.css" rel="stylesheet">

  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/298ddad7ce.js" crossorigin="anonymous"></script>

  <!-- SELECT2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  
  <!-- DATATABLE -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/datatables.min.css"/>

  <!-- DATETIME PICKER -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- QUILL -->
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
<?php require_once('navbar.php') ?>
