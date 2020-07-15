<section class="thw-section form1 cid-s0CCjXmN0d thw-parallax-background" id="form1-5m">



    <div class="thw-overlay" style="opacity: 0.5; background-color: rgb(193, 193, 193);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="thw-section-title align-center pb-3 thw-fonts-style display-2">
                    <strong>GÓP Ý</strong></h2>
                <h3 class="thw-section-subtitle align-center thw-light pb-3 thw-fonts-style display-5"><strong>Gửi ý
                        kiến phản hồi của bạn ở đây !!!</strong></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="" method="POST" class="thw-form form-with-styler" data-form-title="thw Form"><input type="hidden" name="email" data-form-email="true" value="6ms2MKpU2C8vQEPhhCWlRC1tTzatLZ0rBEHty79nvYpSWPyBqqdGhZL8r+vVtnnDamCLUGr2YcrGOattaS42IUAtv9BBGMlruJ4ItKWQJSW+9i0aJvuudFAKu8aetA85">
                    <?php if(isset($_SESSION['send_feedback_success'])) { ?>
                    <div class="row">
                        <div data-form-alert="" class="alert alert-success col-12 display-7"> <?php echo $_SESSION['send_feedback_success'] ?> </div>
                    </div>
                    <?php } ?>
                    <div class="dragArea row">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-5m" class="form-control-label thw-fonts-style display-7">Họ và Tên</label>
                            <input name="name" data-form-field="Name" value="<?php echo $_SESSION['lgFullname'] ?? "" ?>" required="required" class="form-control display-7" type="text" placeholder="Lê Văn Đạt" id="name-form1-5m">
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-5m" class="form-control-label thw-fonts-style display-7">Email</label>
                            <input type="email" name="email" value="<?php echo $_SESSION['lgEmail'] ?? "" ?>" data-form-field="Email" required="required" class="form-control display-7" placeholder="datvl123@gmail.com" id="email-form1-5m">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-5m" class="form-control-label thw-fonts-style display-7">Số điện thoại</label>
                            <input type="tel" name="phone" value="<?php echo $_SESSION['lgPhone'] ?? "" ?>" data-form-field="Phone" class="form-control display-7" placeholder="0909123456" id="phone-form1-5m">
                        </div>
                        <div data-for="message" class="col-md-12 form-group">
                            <label for="message-form1-5m" class="form-control-label thw-fonts-style display-7">Phản hồi</label>
                            <textarea name="message" data-form-field="Message" class="form-control display-7" placeholder="Phản hồi ..." id="message-form1-5m"></textarea>
                        </div>
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" name="btnFeedback" class="btn btn-primary btn-form display-4">Gửi</button></div>
                    </div>
                </form>
                <!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>