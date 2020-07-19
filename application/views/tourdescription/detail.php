<section class="thw-section info1 cid-s0mzz4vPkA" id="info1-2a" style="background-image: url(/upload_img/<?php echo $tour['Banner'] ?>)">



    <div class="thw-overlay" style="opacity: 0; background-color: rgb(239, 239, 239);">



    </div>



    <div class="container">



        <div class="row justify-content-center content-row">



            <div class="media-container-column title col-12 col-lg-7 col-md-6">



                <h3 class="thw-section-subtitle align-left thw-light pb-3 thw-fonts-style display-5">



                    <br><br>



                    <strong>



                        <?php echo "Tour du lịch " . $tour['Name'] . ' ' . $tour['NoDay'] . " ngày " . $tour['NoNight'] . " đêm "; ?>



                    </strong>



                    <div><br></div>



                </h3>



            </div>



            <div class="media-container-column col-12 col-lg-3 col-md-4">



                <div class="thw-section-btn align-right py-4"><a class="btn btn-danger display-4" href="<?= site_url("cart?id=$tour[IdTour]") ?>">Đặt vé</a></div>



            </div>



        </div>



    </div>



</section>



<?php foreach ($tourdescription as $des) { ?>



    <section class="features12 cid-s0mzNphvZ5" id="features12-2c">



        <div class="container">



            <h3 class="thw-section-subtitle pb-3 thw-fonts-style display-5"><?= $des['Timeline'] ?>



            </h3>



            <div class="media-container-row pt-5">



                <div class="block-content align-right">



                    <div class="card pl-3 pr-3">



                        <div class="thw-card-img-title">



                            <div class="thw-crt-title">



                            </div>



                        </div>



                        <div class="card-box">



                            <p class="thw-text thw-section-text thw-fonts-style display-7"><?php echo explode('*', $des['Description'])[0] ?></p>



                        </div>



                    </div>



                </div>



                <div class="thw-figure m-auto" style="width: 50%;">



                    <img src="/upload_img/<?= $des['Image'] ?>" alt="thw" title="">



                </div>



                <div class="block-content align-left">



                    <div class="card pl-3 pr-3">



                        <div class="thw-card-img-title">



                            <div class="thw-crt-title">



                            </div>



                        </div>



                        <div class="card-box">



                            <p class="thw-text thw-section-text thw-fonts-style display-7"><?php echo explode('*', $des['Description'])[1] ?></p>



                        </div>



                    </div>



                </div>



            </div>



        </div>



    </section>



<?php } ?>







<section class="services1 cid-s0mI4fNCuo" id="services1-2i">



    <div class="container">



        <div class="row justify-content-center">



            <!--Titles-->



            <div class="title pb-5 col-12">



                <h2 class="align-left pb-3 thw-fonts-style display-5">Tour du lịch cùng loại</h2>



            </div>



            <!--Card-1-->
            <div class='scrollmenu'>
                <?php foreach ($tourbytype as $tt) { ?>
                    <div class="card col-12 col-md-6 p-3 col-lg-3">
                        <div class="card-img">
                            <a href="<?= site_url("tourdescription/detail?id=$tt[IdTour]") ?>"><img src="/upload_img/<?php echo $tt['Banner'] ?>" alt="thw" title=""></a>
                        </div>
                        <div class="card-box">
                            <a href="<?= site_url("tourdescription/detail?id=$tt[IdTour]") ?>" class="text-danger">
                                <h4 class="card-title thw-fonts-style display-6 description">
                                    <?php
                                    echo $tt['Name'];
                                    // if ($tt['Note'] != '') {
                                    //     echo " - " . $tt['Note'];
                                    // }
                                    ?>
                                </h4>
                            </a>
                            <p class="thw-text thw-fonts-style display-7">
                                <h7 class="description thw-text thw-fonts-style display-7"><strong>Lịch trình</strong>: <?php echo $tt['Schedule'] ?></h7>
                                <h7 class="description thw-text thw-fonts-style display-7"><strong>Điểm khởi hành</strong>: <?php echo $tt['Start'] ?></h7>
                                <h7 class="description thw-text thw-fonts-style display-7"><strong>Thời gian</strong>: <?php echo $tt['NoDay'] . " ngày" ?> <?php echo $tt['NoNight'] > 0 ? $tt['NoNight'] . " đêm" : null ?></h7>
                                <h7 class="description thw-text thw-fonts-style display-7"><strong>Phương tiện</strong>: <?php echo $tt['Vehicle'] ?></h7>
                                <h7><strong>Khách sạn</strong>: <?php echo $tt['Hotel'] ?></h7>
                            </p>
                            <!--Btn-->
                            <div class="thw-section-btn align-left">
                                <a href="<?= site_url("tourdescription/detail?id=$tt[IdTour]") ?>" class="btn btn-danger-outline display-4"><?php echo number_format("$tt[Price]") . "đ" ?></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>