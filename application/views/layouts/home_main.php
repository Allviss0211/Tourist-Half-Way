<!DOCTYPE html>

<html>



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="generator" content="thw v4.12.3, index.html">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <link rel="shortcut icon" href="/resources/images/Logo_web.png" type="image/x-icon">

    <meta name="description" content="">



    <title><?php echo $title ?></title>

    <link rel="stylesheet" href="/resources/web/assets/thw-icons-bold/thw-icons-bold.css">

    <link rel="stylesheet" href="/resources/web/assets/thw-icons/thw-icons.css">

    <link rel="stylesheet" href="/resources/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="/resources/bootstrap/css/bootstrap-grid.min.css">

    <link rel="stylesheet" href="/resources/bootstrap/css/bootstrap-reboot.min.css">

    <link rel="stylesheet" href="/resources/tether/tether.min.css">

    <link rel="stylesheet" href="/resources/dropdown/css/style.css">

    <link rel="stylesheet" href="/resources/socicon/css/styles.css">

    <link rel="stylesheet" href="/resources/theme/css/style.css">

    <link rel="preload" as="style" href="/resources/thw/css/thw-additional.css">

    <link rel="stylesheet" href="/resources/thw/css/thw-additional.css" type="text/css">

    <link rel="stylesheet" href="/resources/css/style.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>



</head>



<body>

    <!-- Header-->

    <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

        <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            </button>

            <div class="menu-logo">

                <div class="navbar-brand">

                    <span class="navbar-logo">

                        <a href="<?= base_url("home") ?>">

                            <img src="/resources/images/Logo_web.png" alt="thw" title="" style="height: 3.8rem;">

                        </a>

                    </span>

                    <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="<?= base_url("home") ?>">Tourist Half Way</a></span>

                </div>

            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">

                    <li class="nav-item">

                        <a class="nav-link link text-primary display-4" href="index.html">

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link link text-primary display-4" href="<?= base_url("home") ?>">

                            <span class="thwib-home thw-iconfont thw-iconfont-btn"></span>Trang chủ &nbsp;</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link link text-primary display-4" href="<?= base_url("tour/event") ?>">

                            <span class="thwib-gift thw-iconfont thw-iconfont-btn"></span>Sự kiện &nbsp;</a></li>

                    <li class="nav-item">

                        <a class="nav-link link text-primary display-4" href="<?= base_url("intro") ?>">

                            <span class="thwib-contact-form thw-iconfont thw-iconfont-btn"></span>

                            Giới thiệu &nbsp;</a>

                    </li>

                    <?php

                    if (isset($_SESSION["isLogin"])) {

                        if (isset($_SESSION["lgRole"]) && $_SESSION["lgRole"] == 1) { ?>

                            <li class="nav-item">

                                <a class="nav-link link text-primary display-4" href="<?= base_url("dashboard?id={$_SESSION['lgIdUser']}") ?>"><span class="thwib-user thw-iconfont thw-iconfont-btn">

                                    </span><?php echo $_SESSION["lgFullname"] ?> &nbsp;

                                </a>

                            </li>

                        <?php } else { ?>

                            <li class="nav-item">

                                <a class="nav-link link text-primary display-4" href="<?= base_url("user/edit_user/{$_SESSION['lgIdUser']}") ?>"><span class="thwib-user thw-iconfont thw-iconfont-btn">

                                    </span><?php echo $_SESSION["lgFullname"] ?>&nbsp;

                                </a>

                            </li>

                            <li class="nav-item">

                                <a class="nav-link link text-primary display-4" href="<?php echo base_url('user/logout') ?>"><span class="thwib-login thw-iconfont thw-iconfont-btn">

                                    </span> Đăng xuất &nbsp;

                                </a>

                            </li>

                        <?php }
                    } else { ?>

                        <li class="nav-item">

                            <a class="nav-link link text-primary display-4" href="<?php echo base_url("user/login") ?>"><span class="thwib-lock thw-iconfont thw-iconfont-btn">

                                </span>Đăng nhập &nbsp;

                            </a>

                        </li>

                    <?php  }

                    ?>


                </ul>

            </div>

        </nav>

    </section>

    <!-- Content-->

    <div class="content-wrapper">

        <!-- Main content -->

        <section class="content">

            <?php

            if (isset($_view) && $_view)

                $this->load->view($_view);

            ?>

        </section>

        <!-- /.content -->

        <!-- Footer-->

        <section class="cid-s0ao5PIJhv" id="footer2-8">

            <div class="container">

                <div class="media-container-row content thw-white">

                    <div class="col-12 col-md-3 thw-fonts-style display-7">

                        <p class="thw-text"><strong>Địa Chỉ:</strong><br> 280 đường An Dương Vương, Phường 4, Quận 5, Thành

                            phố hồ Chí Minh.<br><br><strong>Liên hệ:</strong><br>Email:

                            touristhalfway@gmail.com<br>Hotline:&nbsp;0909.113.115<br>Tư vấn và đặt dịch vụ:

                            1900.1508<br><br><strong><a href="<?= base_url("feedback") ?>">Góp ý về Tourist Half Way</a></strong><br></p>

                    </div>

                    <div class="col-12 col-md-3 thw-fonts-style display-7">

                        <p class="thw-text">&nbsp;&nbsp;</p>

                    </div>

                    <div class="col-12 col-md-6">

                        <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1959.8282399895065!2d106.681882!3d10.760936!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2fb4502ebd044212!2sHo%20Chi%20Minh%20City%20University%20of%20Education!5e0!3m2!1sen!2sus!4v1590561186918!5m2!1sen!2sus" allowfullscreen=""></iframe></div>

                    </div>

                </div>

                <div class="footer-lower">

                    <div class="media-container-row">

                        <div class="col-sm-12">

                            <hr>

                        </div>

                    </div>

                    <div class="media-container-row thw-white">

                        <div class="col-sm-6 copyright">

                            <p class="thw-text thw-fonts-style display-7">

                                © Tourist Half Way - We will fill your life with lots of joy</p>

                        </div>

                        <div class="col-md-6">

                            <div class="social-list align-right">

                                <div class="soc-item">

                                    <a href="https://www.facebook.com/Tourist-Half-Way-106931774377216/?modal=admin_todo_tour" target="_blank">

                                        <span class="thw-iconfont thw-iconfont-social socicon-facebook socicon"></span>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>





        <script src="/resources/web/assets/jquery/jquery.min.js"></script>

        <script src="/resources/popper/popper.min.js"></script>

        <script src="/resources/bootstrap/js/bootstrap.min.js"></script>

        <script src="/resources/tether/tether.min.js"></script>

        <script src="/resources/dropdown/js/nav-dropdown.js"></script>

        <script src="/resources/dropdown/js/navbar-dropdown.js"></script>

        <script src="/resources/touchswipe/jquery.touch-swipe.min.js"></script>

        <script src="/resources/smoothscroll/smooth-scroll.js"></script>

        <script src="/resources/theme/js/script.js"></script>

        <script src="/resources/ytplayer/jquery.mb.ytplayer.min.js"></script>

        <script src="/resources/vimeoplayer/jquery.mb.vimeo_player.js"></script>



</body>



</html>