<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?= $web['title']; ?> - <?= $title; ?></title>

        <meta name="description" content="<?= strip_tags($web['description']); ?>">
        <meta name="keywords" content="<?= strip_tags($web['keywords']); ?>">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>

        <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/<?= $web['logo']; ?>">
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/simplebar/css/simplebar.css">
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/animate.css">
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/icons.css">
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/horizontal-menu.css">
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/app-style.css">
        <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style-main.css">

        <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

        <style>
        
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700;800;900&display=swap');
            
            :root {
                --warna: #edf2f7;
                --warna_2: #ffff;
                --warna_3: #16c92a;
                --warna_4: rgba(22, 201, 42, 0.29);
            }
            body {
                background: var(--warna);
                color : #000;
            }
            
            .bg-hijau{
                background: var(--warna_3);
                color : #fff;
            }

            @media only screen and (max-width: 768px) {
                .sm-none{
                    display : none;
                }
            }

            .navbar-light .navbar-toggler {
                border-color: var(--warna_3);
            }
            
            .navbar-light .navbar-toggler-icon  {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 128, 0, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
            }

            .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
                color: var(--warna_2);
            }

            .navbar-light .navbar-nav .nav-link {
                color: #000;
            }

            .h1, .h2, .h3, .h4, .h5, .h6, .a, .p .span, .label, h1, h2, h3, h4, h5, h6, a, p, span, label {
                font-weight: 500;
                color: #000;
            }

            .login {
                font-weight: 700;
                color: #5d596c;
                font-family: 'Public Sans', sans-serif;
            }

            .btn-tab{
                background-color : var(--warna);
                border: 1px solid var(--warna_3) ;
            }

            .btn-tab:not(:disabled):not(.disabled).active, .btn-tab:not(:disabled):not(.disabled):active, .show>.btn-tab.dropdown-toggle {
                color: #fff;
                border-color: var(--warna_3);
                background-color: var(--warna_3);
            }
            
            .form-control {
                background: var(--warna_5);
                border-color : var(--warna_3);
            }

            .form-control:focus{
                border-color : var(--warna_3);
            }
            
            .text-end {
                text-align: end !important;
            }
            .content {
                padding-top: 110px;
                min-height: 446px;
            }
            .table-white tr th, .table-white tr td {
                color: #000;
                border-color: #242f3a;
            }

            label {
                font-weight: 500;
                text-transform: none;
                color: #000;
            }

            .fw-bold {
                font-weight: 600;
            }
            .col-form-label {
                padding-top: calc(.375rem + 3px);
            }
            .card-tools {
                float: right;
                margin-top: -25px;
            }
            .cursor-pointer {
                cursor: pointer;
            }
            .category a {
                display: inline-block;
                text-decoration: none;
                font-size: 14px;
                color: #fff;
                border: 1px solid var(--warna_2);
                width: 100%;
                padding: 12px;
                border-radius: 8px;
                margin-bottom: 6px;
            }
            .category a.active {
                background: var(--warna_2);
            }
            .category a img {
                width: 26px;
                margin-right: 10px;
            }
            .menu-user a {
                padding: 10px 16px;
                border-radius: 5px;
            }
            .menu-user a:hover {
                background: var(--warna_3);
            }
            .menu-user a i {
                font-size: 19px;
                width: 20px;
            }
            .menu-user {
                margin-bottom: 26px;
            }
            .daterangepicker td, .daterangepicker th {
                color: #626262;
            }
            .border {
                border-radius: 10px;
                border-color: var(--warna)
            }
            .circle-primary {
                background: var(--warna_3);
            }
            .bg-circle-primary {
                background: var(--warna_3);
            }
           .num-page {
                font-family: 'Poppins', sans-serif;
                width: 40px;
                height: 40px;
                border-radius: 12px 4px;
                text-align: center;
                font-size: 18px;
                background: var(--warna_3);
                color: #fff;
                line-height: 40px;
                float: left;
                font-weight: 600;
            }
            .intruction {
                font-family: 'Poppons', sans-serif;
                font-weight: 700;
                color: #000;
            }
            .bg-footer {
                background-color: var(--warna);
            }
            .bg-theme1, .bg-custom, .card {
                background: var(--warna_2) !important;
            }
            .btn-topup, .back-to-top {
                background: var(--warna_3);
            }
            .section {
                background: var(--warna_2);
            }

            /* nominal layanan */
            .radio-nominal + label, .radio-nominale + label {
                background: var(--warna);
                color: #000;
                font-weight: 600px;
                border: 1px solid var(--warna_3);
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            }
            
            .radio-nominale:checked + label, .radio-nominal:checked + label {
                
                background: var(--warna_4);
                color: #000;
                border: 1px solid var(--warna_3);
            }
            /* end nominal */
            
            .num-produk {
                font-size: 13px;
                font-weight: 600;
                color: #000;
            }
            .rounded-top {
                border-top-left-radius: var(--bs-border-radius)!important;
                border-top-right-radius: var(--bs-border-radius)!important;
            }
            .fs-12 {
                font-size: 12px;
            }
            .fs-14 {
                font-size: 14px;
            }
            .strip-primary {
                background: var(--warna_3);
            }
            .btn-primary {
                background: var(--warna_3) !important;
                border-color: var(--warna_3) !important;
            }
            .sidenav {
                background: var(--warna_2);
            }
            .radio-nominal:checked + label, .table-white tr th, .table-white tr td {
                border-color: var(--warna);
            }
            .menu-utama div a {
                margin: 0 4px;
            }
            .menu-utama div a:hover, .menu-utama div a.active {
                background: var(--warna_3);
                border-radius: 14px 4px;
            }
            .navbar-collapse {
                background: var(--warna_2);
            }
            .menu-list {
                list-style: none;
                padding-left: 0;
            }
            .menu-list li a {
                display: block;
                padding: 10px 0;
                border-bottom: 1px dashed var(--warna_3);
                transition: .4s;
            }
            .menu-list li a:hover {
                padding-left: 6px;
                color: #fff;
            }
            .table-responsive::-webkit-scrollbar {
                width: 0;
            }
            
            .fab-container {
                position: fixed;
                bottom: 70px;
                right: 10px;
                z-index: 999;
                cursor: pointer;
            }
            .fab-icon-holder {
                width: 45px;
                height: 45px;
                bottom: 140px;
                left: 10px;
                color: #fff;
                background: #ff0;
                border-radius: 10px;
                text-align: center;
                font-size: 30px;
                z-index: 99999;
            }
            .fab-options {
                list-style-type: none;
                margin: 0;
                position: absolute;
                bottom: 48px;
                left: -47px;
                opacity: 0;
                transition: all 0.3s ease;
                transform: scale(0);
                transform-origin: 85% bottom;
            }
            .fab-options li {
                display: flex;
                justify-content: flex-start;
                padding: 5px;
            }
            .fab:hover + .fab-options,
            .fab-options:hover {
                opacity: 1;
                transform: scale(1);
            }
            #promoClose {
                position: absolute;
                top: 0;
                right: 0;
                display: block;
                line-height: 16px;
                text-align: right;
                padding: 24px 28px;
                color: #fff;
                z-index: 9992;
                font-size: 17px;
                opacity: 0.6;
                text-decoration: none;
            }


            /* accordion */
            #main {
                margin: 50px 0;
            }

            #main #faq .card {
                margin-bottom: 30px;
                border: 0;
            }

            #main #faq .card .card-header {
                border: 0;
                -webkit-box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
                        box-shadow: 0 0 20px 0 rgba(213, 213, 213, 0.5);
                border-radius: 2px;
                padding: 0;
            }

            #main #faq .card .card-header .btn-header-link {
                color: #fff;
                display: block;
                text-align: left;
                background: var(--warna_3);
                padding: 20px;
                font-weight : bold;
                font-size : 12px;
            }

            #main #faq .card .card-header .btn-header-link:after {
                content: "\f107";
                color: #fff;
                font-family: 'Font Awesome 5 Free';
                font-weight: 1000;
                float: right;
            }

            #main #faq .card .card-header .btn-header-link.collapsed {
                background: var(--warna_3);
            }

            #main #faq .card .card-header .btn-header-link.collapsed:after {
                content: "\f106";
                color: #fff;
                font-family: 'Font Awesome 5 Free';;
            }

            #main #faq .card .collapsing {
                background: var(--warna);
                line-height: 30px;
            }

            #main #faq .card .collapse {
                border: 0;
            }

            #main #faq .card .collapse.show {
                background: var(--warna);
                line-height: 30px;
                color: #222;
            }


            /* game list */
            .mobile {
                width: 90%;
                top: 62.27%;
                bottom: 32.81%;
                background: rgba(255, 255, 255, 0.3);
                backdrop-filter: blur(1.5px);
                border-radius: 5px;
                font-weight: bold;
                margin: 0 auto;
                color : #fff;
                font-size : 11px;
            }
            .game-populer {
                filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.05));
                border-radius: 3px;
            }
            .card-product {
                transition: .3s;
                background: rgba(22, 201, 42, 0.80);
                backdrop-filter: blur(1.5px);
                border-radius: 10px;
                overflow: hidden;
                cursor: pointer;
                text-align: center;
            }
            .card-product .product-dsc {
                padding: 6px;
            }
            .card-product p {
                font-size: 10px;
                line-height: 14px;
                color: #fff;
                font-weight: 600;
            }
            .card-product .product-title {
                margin-top: 0;
                margin-bottom: 0;
                color: #fff;
                text-shadow: #fff;
                font-family: 'Poppins', sans-serif;
                font-size: 14px;
                font-weight: 800;
            }
            .card-product .product-title, .card-product p {
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }
            .card-product .btn {
                width: 100%;
                display: inline-block;
                background: var(--warna_3);
                backdrop-filter: blur(2px);
                box-sizing: border-box;
                border-radius: 10px;
                text-align: center;
                font-weight: 700;
                font-size: 12px;
                color: #fff;
                padding: 5px;
            }
            .judul-web {
                color: #000;
                text-shadow: #000;
                font-family: 'Poppins', sans-serif;
                font-size: 30px;
                font-weight: 800;
            }
        </style>

        <?php $this->renderSection('css'); ?>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <nav class="navbar custom-toggler navbar-expand-lg fixed-top navbar-light shadow-sm bg-custom">
                    <div class="container">
                        <a class="navbar-brand" href="<?= base_url(); ?>">
                            <img src="<?= base_url(); ?>/assets/images/<?= $web['logo']; ?>" width="50" alt="logo icon" class="rounded">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse menu-utama" id="navbarNavAltMarkup">
                            <div class="navbar-nav ml-auto">
                                <a class="nav-item nav-link <?= $menu_active == 'Home' ? 'active' : ''; ?>" href="<?= base_url(); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                Home
                                </a>
                                <a class="nav-item nav-link <?= $menu_active == 'Cek' ? 'active' : ''; ?>" href="<?= base_url(); ?>/payment">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                Cek Pesanan
                                </a>
                                <?php if ($users == false): ?>
                                <a class="nav-item nav-link <?= $menu_active == 'Login' ? 'active' : ''; ?>" href="<?= base_url(); ?>/login">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
                                Login Member
                                </a>
                                <?php endif ?>
                                <?php if ($admin !== false): ?>
                                <a class="nav-item nav-link" href="<?= base_url(); ?>/admin">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    Administrator</a>
                                <?php endif ?>
                                <?php if ($users !== false): ?>
                                    <a class="nav-item nav-link <?= $menu_active == 'User' ? 'active' : ''; ?>" href="<?= base_url(); ?>/user">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    User Area</a>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <?php $this->renderSection('content'); ?>
            
            <footer id="aboutus" class="bg-footer">
                <img src="<?= base_url(); ?>/assets/images/waves.png" alt="" width="100%">
                <div style="background: var(--warna_2);margin-top: -4px;">
                    <div class="pt-5 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-sm-3">
                                    <div class="mb-3 d-flex text-align-center">
                                        <img src="<?= base_url(); ?>/assets/images/<?= $web['logo']; ?>" height="40" alt="logo icon">
                                        <h5 class="mt-2 ml-2 judul-web"><?= $web['title']; ?></h5>
                                    </div>
                                    <?= $web['description']; ?>
                                </div>
                                <div class="col-lg-4 col-sm-4 mt-3">
                                    <h5 class="pb-2">Games Terpopuler</h5>
                                    <div class="row">
                                        <?php foreach ($games_populer as $loop): ?>
                                            <?php if ($loop['status'] == 'On') { ?>
                                            <div class="col-4 p-2">
                                                <a href="<?= base_url(); ?>/games/<?= $loop['slug']; ?>">
                                                    <img src="<?= base_url(); ?>/assets/images/games/<?= $loop['image']; ?>" alt="" width="100%" style="border-radius: 10px;">
                                                </a>
                                            </div>
                                            <?php } ?>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <!--<div class="col-lg-4 col-sm-3 mt-3">
                                <h5 class="pb-2">Metode Pembayaran</h5>
                                    <div class="payment-channels-track marquee ml-1">
                                        <marquee width="100%" direction="left" scrollamount="5">
                                            <div class="footer-pc-marquee">
                                                <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/ovo.png" width="80" alt="ovo" loading="DS" src="<?= base_url() ?>/assets/images/footer/ovo.png">
                                                <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/dana.png" width="80" alt="dana" loading="DS" src="<?= base_url() ?>/assets/images/footer/dana.png">
                                                <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/shopeepay.png" width="80" alt="shopeepay" loading="DS" src="<?= base_url() ?>/assets/images/footer/shopeepay.png">
                                                <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/gopay.png" width="80" alt="gopay" loading="DS" src="<?= base_url() ?>/assets/images/footer/gopay.png">
                                                <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/alfamart.png" width="80" alt="alfamart" loading="DS" src="<?= base_url() ?>/assets/images/footer/alfamart.png">
                                                <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/indomaret.png" width="80" alt="indomaret" loading="DS" src="<?= base_url() ?>/assets/images/footer/indomaret.png">
                                                <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/qris.png" width="80" alt="qris" loading="DS" src="<?= base_url() ?>/assets/images/footer/qris.png">
                                            </div>
                                        </marquee>
                                        <marquee width="100%" direction="right" scrollamount="5">
                                           <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/balance.png" width="80" alt="balance" loading="DS" src="<?= base_url() ?>/assets/images/footer/balance.png">
                                            <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/bri.png" width="80" alt="bri" loading="DS" src="<?= base_url() ?>/assets/images/footer/bri.png">
                                            <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/mandiri.png" width="80" alt="mandiri" loading="DS" src="<?= base_url() ?>/assets/images/footer/mandiri.png">
                                            <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/bca.png" width="80" alt="bca" loading="DS" src="<?= base_url() ?>/assets/images/footer/bca.png">
                                            <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/bsi.png" width="80" alt="bsi" loading="DS" src="<?= base_url() ?>/assets/images/footer/bsi.png">
                                            <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/bni.png" width="80" alt="bni" loading="DS" src="<?= base_url() ?>/assets/images/footer/bni.png">
                                            <img draggable="false" class="footer-pc-icon running-text ls-is-cached DSloaded rounded" data-src="<?= base_url() ?>/assets/images/footer/cimb.png" width="80" alt="cimb" loading="DS" src="<?= base_url() ?>/assets/images/footer/cimb.png">
                                        </marquee>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-theme1 text-center pb-4"> Copyright © 2022 <?= $web['title']; ?>. All Rights Reserved </div>
            </footer>
        </div>

        <a href="javaScript:void();" class="back-to-top">
            <i class="fa fa-angle-double-up"></i>
        </a>

        <!--End wrapper-->
        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/popper.min.js"></script>
        <script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
        <!-- simplebar js -->
        <script src="<?= base_url(); ?>/assets/plugins/simplebar/js/simplebar.js"></script>
        <!-- Custom scripts -->
        <!--<script src="<?= base_url(); ?>/assets/js/app-script.js"></script>-->
        <script src="<?= base_url(); ?>/assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
        <!--Select Plugins Js-->
        <script src="<?= base_url(); ?>/assets/plugins/select2/js/select2.min.js"></script>
        <!--Data Tables js-->
        <script src="<?= base_url(); ?>/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url(); ?>/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function (){
                setTimeout(function () {
                    $("#modal-popup").modal('show');
                    
                    setTimeout(function () {
                        $("#modal-popup").modal('hide');
                    }, 15000);
                }, 1000);
            });
        </script>

        <script>
            // $(document).ready(function() {
            //     $('#default-datatable').DataTable();
            // });

            function openNav() {
                document.getElementById("mySidenav").style.width = "300px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
        
        <div style="display: none" class="ubey-RecordingScreen-count-down ubey-RecordingScreen-count-down-container">
            <style>
                .ubey-RecordingScreen-count-down-container {
                    position: fixed;
                    height: 100vh;
                    width: 100vw;
                    top: 0;
                    left: 0;
                    z-index: 9999999999999;
                    background-color: rgba(0, 0, 0, 0.2);
                }

                .ubey-RecordingScreen-count-down-content {
                    position: absolute;
                    display: flex;
                    top: 50%;
                    left: 50%;
                    justify-content: center;
                    align-items: center;
                    color: white;
                    height: 15em;
                    width: 15em;
                    transform: translate(-50%, -100%);
                    background-color: rgba(0, 0, 0, 0.6);
                    border-radius: 50%;
                }

                #ubey-RecordingScreen-count-count {
                    font-size: 14em;
                    transform: translateY(-2%);
                }
            </style>
            <div class="ubey-RecordingScreen-count-down-content">
                <span id="ubey-RecordingScreen-count-count"></span>
            </div>
        </div>
    
        <script>
            <?php if ($admin !== false): ?>
            function hapus(link) {
                Swal.fire({
                    title: 'Anda yakin?',
                    text: "Data akan dihapus permanen",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Tetap hapus'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link;
                    }
                });
            }
            <?php endif; ?>

        </script>
        
        <div class="fab-container">
            <div class="fab fab-icon-holder" style="background-color:#FFF; padding:5px">
                <img src="<?= base_url(); ?>/assets/images/callcenter.png" class="img-fluid" alt="" style=";">
            </div>
            <ul class="fab-options">
                
                <?php foreach($sosmed as $loop): ?>
                <li>
                    <a href="<?= $loop['link']; ?>" class="text-decoration-none" target="_blank">
                        <div class="fab-icon-holder bg-white">
                            <img src="<?= base_url(); ?>/assets/images/sosmed/<?= $loop['image']; ?>" width="45" style="margin-top: -8px;">
                        </div>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <a href="#" class="act-btn-top text-decoration-none" onclick="toTop()" style="display: none; background-color: #bd4cae; bottom: 19px;">
                <i class="fas fa-angle-up mt-2"></i>
            </a>
        </div>
        
        <?php $this->renderSection('js'); ?>
    </body>
</html>