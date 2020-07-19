<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../resources/css/style.css">
</head>

<body>
    <div class="wrapper fadeInDown"> 
        <p class="error_container" style="display: <?php echo isset($_SESSION['error_login_message']) ? "block" : "none" ?>;"><?php echo $this->session->flashdata('error_login_message'); ?></p>
        <p class="error_container" style="display: <?php echo isset($_SESSION['error_signup_message']) ? "block" : "none" ?>;"><?php echo $this->session->flashdata('error_signup_message'); ?></p>
        <p class="error_container" style="display: <?php echo isset($_SESSION['error_forgot_message']) ? "block" : "none" ?>;"><?php echo $this->session->flashdata('error_forgot_message'); ?></p>
        <div id="formContent">
            <!-- Tabs Titles -->
            <script>
                function active($id, $tag) {
                    document.getElementById($id).style.display = 'block';
                    document.getElementById($tag).className = 'active';
                }

                function inactive($id, $tag) {
                    document.getElementById($id).style.display = 'none';
                    document.getElementById($tag).className = 'inactive underlineHover';
                }
            </script>
            <h2 id='tagSignIn' class="active" onclick="active('signIn','tagSignIn'),inactive('signUp','tagSignUp'),inactive('forgot','tagForgot')" style="display: inline-block;"> Đăng nhập </h2>
            <h2 id='tagSignUp' class="inactive underlineHover" onclick="active('signUp','tagSignUp'),inactive('signIn','tagSignIn'),inactive('forgot','tagForgot')" style="display: inline-block;"> Đăng ký </h2>
            <h2 id='tagForgot' class="inactive underlineHover" onclick="active('forgot','tagForgot'),inactive('signIn','tagSignIn'),inactive('signUp','tagSignUp')" style="display: inline-block;"> Quên mật khẩu </h2>

            <div id="signIn" style="display: block;">
                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="/resources/images/Logo_web.png" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form method="POST">
                    <input type="text" id="txtUsername" class="fadeIn second text" name="txtUsername" placeholder="Tên đăng nhập">
                    <input type="password" id="txtPassword" class="fadeIn third password" name="txtPassword" placeholder="Mật khẩu">
                    <input type="submit" name="btnLogin" class="fadeIn fourth" value="Đăng nhập">
                </form>
            </div>
            <div id="signUp" style="display: none;">
                <!-- Icon -->
                <!-- <div class="fadeIn first">
                    <img src="https://i.ibb.co/bd3TR85/93873276-892093347905185-1182473014202073088-n.jpg" id="icon" alt="User Icon" />
                </div> -->

                <!-- sign up Form -->
                <form method="POST">
                    <input type="text" id="txtUsernameSignup" class="fadeIn first text" name="txtUsernameSignup" placeholder="Tên đăng nhập *">
                    <input type="password" id="txtPasswordSignUp" class="fadeIn first password" name="txtPasswordSignUp" placeholder="Mật khẩu *">
                    <input type="password" id="txtRePassword" class="fadeIn first password" name="txtRePassword" placeholder="Nhập lại mật khẩu *">
                    <input type="text" id="txtFullname" class="fadeIn first text" name="txtFullname" placeholder="Họ tên *">
                    <input type="date" id="txtBirthday" class="form-group fadeIn first date" name="txtBirthday" placeholder="Ngày sinh *">
                    <input type="text" id="txtIdentityCard" class="fadeIn first text" name="txtIdentityCard" placeholder="CMND/CCCD *">
                    <input type="text" id="txtPhone" class="fadeIn first text" name="txtPhone" placeholder="Số điện thoại *">
                    <input type="text" id="txtEmail" class="fadeIn first text" name="txtEmail" placeholder="Email *">
                    <input type="text" id="txtAddress" class="fadeIn first text" name="txtAddress" placeholder="Địa chỉ *">
                    <input type="submit" name="btnSignUp" class="fadeIn second" value="Đăng ký">
                </form>
            </div>
            <div id="forgot" style="display: none;">
                <div class="fadeIn first">
                    <img src="/resources/images/Logo_web.png" id="icon" alt="User Icon" />
                </div>
                <form method="POST" action="<?php echo base_url("user/forgot") ?>">
                    <input type="text" id="txtUsernameForgot" class="fadeIn first text" name="txtUsernameForgot" placeholder="Tên đăng nhập của bạn">
                    <input type="text" id="txtNewPass" style="display: none;" class="fadeIn first text" name="txtNewPass" placeholder="Nhập mật khẩu của bạn">
                    <input type="text" id="txtRePass" style="display: none;" class="fadeIn first text" name="txtRePass" placeholder="Nhập lại mật khẩu">
                    <p class="error_container" style="display: none;" id="error_forgot">Tài khoàn không đúng, vui lòng nhập lại</p>

                    <input type="submit" name="btnForgot" class="fadeIn second" value="Quên mật khẩu">
                </form>

            </div>
        </div>
</body>

</html>