<section class="thw-section form1 cid-s0CCjXmN0d thw-parallax-background" id="form1-67">

    <div class="thw-overlay" style="opacity: 0.6; background-color: rgb(193, 193, 193);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="thw-section-title align-center pb-3 thw-fonts-style display-2"><strong>Đặt vé</strong>
                </h2>
                <h3 class="thw-section-subtitle align-center thw-light pb-3 thw-fonts-style display-5">
                    <strong>Hãy nhanh tay đặt vé và tận hưởng những chuyến đi thú vị cùng Tourist Half Way nào !!!</strong>
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="" method="POST" class="thw-form form-with-styler" data-form-title="thw Form"><input type="hidden" name="email" data-form-email="true" value="wg7DkqIkqddSRUAnHMjrpqPxB9Zz2EIwaeR33ELMPyOZU7hJ89ihFDNEVwY/+m1TvrAPHlMcIBUQ4oieWhRwcvFSlARwAn7UFu8ffBgf35PKooiUW4NIgaTrYwvOnNeQ">
                <?php if(isset($_SESSION['send_cart_success'])) { ?>
                    <div class="row">
                        <div data-form-alert="" class="alert alert-success col-12 display-7"> <?php echo $_SESSION['send_cart_success'] ?> </div>
                    </div>
                    <?php } ?>
                    <div class="dragArea row">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-67" class="form-control-label thw-fonts-style display-7">Họ và Tên</label>
                            <input type="text" value="<?= $user['Fullname'] ?? '' ?>" name="name" data-form-field="Name" required="required" class="form-control display-7" placeholder="Lê Văn Đạt" id="name-form1-67">
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-67" class="form-control-label thw-fonts-style display-7">Email</label>
                            <input type="email" value="<?= $user['Email'] ?? '' ?>" name="email" data-form-field="Email" required="required" class="form-control display-7" placeholder="datvl123@gmail.com" id="email-form1-67">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-67" class="form-control-label thw-fonts-style display-7">Số điện thoại</label>
                            <input type="tel" value="<?= $user['Phone'] ?? '' ?>" name="phone" data-form-field="Phone" class="form-control display-7" placeholder="0909123456" id="phone-form1-67">
                        </div>
                        <div data-for="Address" class="col-md-12 form-group">
                            <label for="address-form1-67" class="form-control-label thw-fonts-style display-7">Địa chỉ</label>
                            <input type="text" value="<?= $user['Address'] ?? '' ?>" name="address" data-form-field="Address" class="form-control display-7" placeholder="280 An Dương Vương, Phường 4, Quận 5, Tp.HCM" id="address-form1-67"></input>
                        </div>
                        <div class="col-md-4  form-group" data-for="amountAdult">
                            <label for="name-form1-67" class="form-control-label thw-fonts-style display-7">Số Người Lớn</label>
                            <input type="number" value="1" min="1" id="amountAdult" onchange="onChange()" name="amountAdult" data-form-field="amountAdult" required="required" class="form-control display-7" id="name-form1-67">
                        </div>
                        <div class="col-md-4 " data-for="amountChildren">
                            <label for="name-form1-67" class="form-control-label thw-fonts-style display-7">Số Trẻ Em(từ 2 - 12 tuổi)</label>
                            <input type="number" value="0" min="0" id="amountChildren" onchange="onChange()" name="amountChildren" data-form-field="amountChildren" required="required" class="form-control display-7" id="name-form1-67">
                        </div>
                        <div class="col-md-4 " data-for="">
                            <label for="name-form1-67" class="form-control-label thw-fonts-style display-7">CMND/CCCD</label>
                            <input type="text" value="<?= $user['IdentityCard'] ?? '' ?>" name="IdentityCard" data-form-field="" required="required" placeholder="0123456789" class="form-control display-7" id="name-form1-67">
                        </div>
                        <div class="col-md-12 form-group" data-for="">
                            <text for="name-form1-67" class="form-control-label align-center thw-fonts-style display-7" style="text-align: center;">Lưu ý: - Trẻ em dưới 2 tuổi được miễn phí - Trẻ em từ 2 - 12 tuổi được giảm 30%</text>
                        </div>
                        <div class="col-md-12 form-group" data-for="method" padding="40px">
                            <label for="name-form1-67" class="form-control-label thw-fonts-style display-7">Phương Thức Thanh Toán</label>
                            <select name="method" id="method" class="form-control display-7" onchange="onChange()">
                                <option value="100">Thanh toán 100% và nhận vé tận nhà</option>
                                <option value="50">Cọc 50% và thanh toán phần còn lại ở văn phòng đại diện</option>
                            </select>
                        </div>
                        <div data-for="Tour" class="col-md-12 form-group">
                            <label for="tour-form1-67" class="form-control-label thw-fonts-style display-7">Tour</label>
                            <input type="text" value="<?= $tour['Name'] . ' - ' . $tour['Note'] ?? '' ?>" name="tour" readonly="readonly" data-form-field="Tour" class="form-control display-7" id="tour-form1-67"></input>
                        </div>

                        <div data-for="Total" class="col-md-6 form-group">
                            <label for="total-form1-67" class="form-control-label thw-fonts-style display-7">Tổng tiền</label>
                            <input type="text" value="<?= number_format($tour['Price']) ?? '' ?>" id='total' name="total" readonly="readonly" data-form-field="Total" class="form-control display-7" id="total-form1-67"></input>
                        </div>
                        <script>
                            function onChange() {
                                $price = <?= $tour['Price'] ?>;
                                $adult = document.getElementById("amountAdult").value;
                                $children = document.getElementById("amountChildren").value;
                                $method = document.getElementById("method").value;
                                $pay = ($price * $adult + $price * $children * 70 / 100) * $method / 100;
                                $total = ($price * $adult + $price * $children * 70 / 100);
                                document.getElementById("pay").value = Intl.NumberFormat('en-US').format($pay)
                                document.getElementById("total").value = Intl.NumberFormat('en-US').format($total)
                            }
                        </script>
                        <div data-for="Pay" class="col-md-6 form-group">
                            <label for="pay-form1-67" class="form-control-label thw-fonts-style display-7">Phải thanh toán</label>
                            <input type="text" value="<?= number_format($tour['Price']) ?? '' ?>" id="pay" name="pay" readonly="readonly" data-form-field="Pay" class="form-control display-7" id="pay-form1-67"></input>
                        </div>

                        <div class="col-md-12 input-group-btn align-center"><button type="submit" name="btnCart" class="btn btn-primary btn-form display-4">Đặt vé</button></div>
                    </div>
                </form>
                <!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>