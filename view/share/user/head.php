<?php
include "model/MyDBConnetion.php";
$db = new DB();
$db->connect();
?>
<!doctype html>
<html lang="en">
<head>
    <title>Colorlib Balita &mdash; Minimal Blog Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="/asset/user/css/bootstrap.css">
    <link rel="stylesheet" href="/asset/user/css/animate.css">
    <link rel="stylesheet" href="/asset/user/css/owl.carousel.min.css">

    <!-- <link rel="stylesheet" href="/asset/user/fonts/ionicons/ionicons.min.css"> -->
    <link rel="stylesheet" href="/asset/user/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/asset/user/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="/asset/user/css/style.css">
</head>
<body>



<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-9 social">
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-instagram"></span></a>
                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                </div>
                <div class="col-3 search-top">
                    <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                    <form action="#" class="search-top-form">
                        <span class="icon fa fa-search"></span>
                        <input type="text" id="s" placeholder="Nhập để tìm kiếm...">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container logo-wrap">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                <h1 class="site-logo"><a href="index.html">divadi</a></h1>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">


            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Đi</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="category.html">Bắc</a>
                            <a class="dropdown-item" href="category.html">Trung</a>
                            <a class="dropdown-item" href="category.html">Nam</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Bán áo =)))</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên hệ</a>
                    </li>
                </ul>

            </div>
        </div
    </nav>
</header>
<!-- END header -->