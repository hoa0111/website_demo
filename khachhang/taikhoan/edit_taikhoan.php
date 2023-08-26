<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .product {
        margin: 0 200px;
    }
    input {
        /* margin-left: 40px; */
        /* float: right; */
        width: 100%;
        padding: 10px;

    }
    div > input {
        width: 10% !important;
    }
    span {
        font-weight: bold;
    }

    div > input:hover {
        background-color: #05af05a6;
        cursor: pointer;
    }   
</style>
<body>
    <section class="product">
        <div class="box-banner">
            <div class="box">
                <img src="./images/banner/2.png" alt="">
            </div>
        </div>
        <div class="form-dangki">
            <h2 style="font-weight: 500;font-size:30px; color:green; text-align:center;" class="heading">Cập Nhật Tài Khoản</h2>
            <?php
            if (isset($_SESSION['ten_dn']) && (is_array($_SESSION['ten_dn']))) {
                extract($_SESSION['ten_dn']);
            }
            ?>
    
            <form action="log.php?act=edit_taikhoan" method="post">
                <span>Họ và tên:</span>
                <input style="border:1px solid #ccc;" type="text" name="ho_ten" value="<?= $ho_ten ?>" required><br><br>
                <span>Email:</span>
                <input style="border:1px solid #ccc;" type="email" name="email" value="<?= $email ?>" required><br><br>
                <span>Mật khẩu:</span>
                <input style="border:1px solid #ccc;"  type="text" name="mat_khau" value="<?= $mat_khau ?>" required><br><br>
                <span>Địa chỉ:</span>
                <input style="border:1px solid #ccc;" type="text" name="diachi" value="<?= $diachi ?>"><br><br>
                <span>Số điện thoại:</span>
                <input style="border:1px solid #ccc;" type="text" name="sdt" value="<?= $sdt ?>"><br><br>
                <span>Vai trò:</span>
                <input style="border:1px solid #ccc;" type="text" name="role" value="<?= $role ?>"><br><br>
    
                <div>
                    <input type="submit" value="Cập Nhật" name="capnhat" class="btn" style="border:1px solid #ccc;">
                    <input type="reset" value="Nhập lại" class="btn" style="border:1px solid #ccc;">
                    <input type="hidden" name="id" value="<?= $ma_kh ?>">
                </div>
    
            </form>
        </div>
    </section>
</body>
</html>