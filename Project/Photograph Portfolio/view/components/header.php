<?php
if (!isset($_SESSION)) session_start();
//print_r($_SESSION)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title ?? 'Фотограф Игорь Пронькин'?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/lightgallery.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/swiper.css">

    <link rel="stylesheet" href="css/aos.css">
<!--    <link rel="stylesheet" href="css/my-style.scss">-->

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>




    <header class="site-navbar py-3" role="banner">

        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2" data-aos="fade-down">
                    <h1 class="mb-0"><a href="about.php" class="text-white h2 mb-0">Beardo.live</a></h1>
                </div>
                <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
                    <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                        <ul class="site-menu js-clone-navd-none d-lg-block">
                         <!--   <li class="active"><a href="./">Home</a></li>
                            <li class="has-children"> -->
                                <li><a href="./">портфолио</a>
                              <!--  <ul class="dropdown">
                                    <li><a href="#">Nature</a></li>
                                    <li><a href="#">Portrait</a></li>
                                    <li><a href="#">People</a></li>
                                    <li><a href="#">Architecture</a></li>
                                    <li><a href="#">Animals</a></li>
                                    <li><a href="#">Sports</a></li>
                                    <li><a href="#">Travel</a></li>
                                </ul> -->
                            </li>
                            <li><a href="services.php">услуги</a></li>
                            <li><a href="about.php">обо мне</a></li>
                            <li><a href="contact.php">обратная связь</a></li>
                            <?php if(isset($_SESSION['validUser'])):?>
                                <li><a href="moderate.php">Привет, <?=$_SESSION['validUser']?></a></li>
                                <li><a href="core/exit.php">Выход</a></li>
                            <?php endif;?>
                        </ul>
                    </nav>
                </div>

                <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
                    <div class="d-none d-xl-inline-block">
                        <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                            <li>
                                <a href="http://vk.com/igor100fit" target="_blank" class="pl-0 pr-3"><span
                                            class="icon-vk"></span></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/beardo.live/" target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            </li>
                            <li>
                                <a href="https://t.me/dcd11" class="pl-3 pr-3" target="_blank"><span
                                            class="icon-telegram"></span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                </div>

            </div>
        </div>

    </header>