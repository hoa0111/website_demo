<?php
    require_once "model/pdo.php";
    require_once "global.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/themify-icons/themify-icons.css">
    
</head>
<style>
    body {
        font-size: 18px;
    }
    .form1 {
        /* margin-top: 40px; */
        border: 1px solid #ccc;

        margin: 0 460px;
        padding-bottom: 20px;
        border-radius: 50px;
    }
    .form2 input{
        width: 35%;
        padding: 8px;
    }
    .form2 .btn {
        width: 8%;
    }
    .form2 .btn:hover {
        opacity: .8;
        cursor:pointer;
    }
    .form2 {
        text-align: center;
        border: 1px solid #333;
        width: 40%;
        margin-top: 40px;
        margin-left: 410px;
        padding-bottom: 22px;
    }
</style>
<body>
<div class="login-form">
    <?php
        if (isset($_SESSION['ten_dn'])) {
            extract($_SESSION['ten_dn']);
    ?>
        <form action="" method="post" class="form1" style="text-align:center; font-size:20px;">
            <h3>Tài Khoản</h3>
            <span>Xin chào, <b><?= $ho_ten ?></b></span>
            <br>
            <!-- <a href="log.php?act=mybill">Đơn Hàng Của Tôi</a> -->
            <br>
            <a href="log.php?act=quenmk">Quên mật khẩu</a>
            <br>
            <a href="log.php?act=edit_taikhoan"> Cập nhật tài khoản</a>
            <br>
            <a href="log.php?act=dangxuat">Đăng xuất</a>
            <br>
            <a href="index.php">Quay lại</a><br>
            <?php
                if ($role == 1) {
            ?>
                    <a href="<?=$ADMIN_URL?>">Đăng nhập Admin</a>
                <?php }; ?>
        </form>
    <?php
        } else {
    ?>

        <form class="form2" action="log.php?act=dangnhap" method="post">
            <h3 class="heading-2">Đăng Nhập</h3>
            <div class="box">
                <input type="text" name="ten_dn" placeholder="Tài khoản" id="tk"><br><br>
            </div>
            <div class="box">
                <input type="password" name="mat_khau" placeholder="Mật Khẩu" id="pass"><br><br>
            </div>
            <a href="#">Quên mật khẩu?</a>
            <input type="submit" value="Đăng nhập" name="dangnhap" class="btn" style="background:green; padding:8px 12px; width: 90px;">
            <br>
            <p1>Bạn chưa có tài khoản ? <a href="log.php?act=dangki">Đăng kí tài khoản</a></p1>
        </form>
    <?php } ?>
</div>
</body>
</html>