<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Book</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../assets/web/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block"></div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border pl-3 mr-1">My</span>Book</h1>
                </a>
            </div>
            <div class="col-lg-9 col-9 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari bukumu...">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Kategori</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <?php
                    $link = $_SERVER['PHP_SELF'];
                    $link_array = explode('/',$link);
                ?>
                <?php if(in_array("home", $link_array)): ?>
                    <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                        <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                            <a href="" class="nav-item nav-link">Algoritma Pemrograman Lanjut</a>
                            <a href="" class="nav-item nav-link">Kecerdasan Buatan</a>
                            <a href="" class="nav-item nav-link">Probabilitas Statismatika</a>
                            <a href="" class="nav-item nav-link">Struktru Data</a>
                            <a href="" class="nav-item nav-link">Kalkulus I</a>
                            <a href="" class="nav-item nav-link">Kalkulus II</a>
                            <a href="" class="nav-item nav-link">Novel Romansa</a>
                            <a href="" class="nav-item nav-link">Manga</a>
                            <a href="" class="nav-item nav-link">Lainnya</a>
                        </div>
                    </nav>
                <?php else: ?>
                    <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                        <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                            <a href="" class="nav-item nav-link">Algoritma Pemrograman Lanjut</a>
                            <a href="" class="nav-item nav-link">Kecerdasan Buatan</a>
                            <a href="" class="nav-item nav-link">Probabilitas Statismatika</a>
                            <a href="" class="nav-item nav-link">Struktru Data</a>
                            <a href="" class="nav-item nav-link">Kalkulus I</a>
                            <a href="" class="nav-item nav-link">Kalkulus II</a>
                            <a href="" class="nav-item nav-link">Novel Romansa</a>
                            <a href="" class="nav-item nav-link">Manga</a>
                            <a href="" class="nav-item nav-link">Lainnya</a>
                        </div>
                    </nav>
                <?php endif; ?>
                
            </div>
            <div class="col-lg-9">
                <?php require_once('navbar.php') ?>
                <?php if(in_array("home", $link_array)): ?>
                    <div id="header-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 410px;">
                                <img class="img-fluid" src="https://images.unsplash.com/photo-1592496431122-2349e0fbc666?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1512&q=80" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">About Future</h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Physchology of Money</h3>
                                        <a href="" class="btn btn-light py-2 px-3">Lihat Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 410px;">
                                <img class="img-fluid" src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1512&q=80" alt="Image">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">Matt Ridley</h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">How Inovation Working</h3>
                                        <a href="" class="btn btn-light py-2 px-3">Lihat Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-prev-icon mb-n2"></span>
                            </div>
                        </a>
                        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                                <span class="carousel-control-next-icon mb-n2"></span>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>