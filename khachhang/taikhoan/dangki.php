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
        margin: 0 400px;
    }
    .form-dangki {
        border: 1px solid #333;
        border-radius: 10px;
        text-align: center;
        
    }
    form {
        /* margin-left: 40px; */
        padding-bottom: 20px;
    }
    form input {
        /* margin-left: 60px; */
        padding: 8px;
        width: 80%;
    }
    .btn-3  {
        width: 18% !important;
    }
    span {
        font-weight: bold;
    }

    .btn-3:hover {
        background-color: #05af05a6;
        cursor: pointer;
    }   
</style>
</style>
</style>
<body>
    <section class="product">
        <div class="box-banner">
            <div class="box">
                <img src="./images/banner/2.png" alt="">
            </div>
        </div>
        
        <div class="form-dangki">
        <br><br>
            <div style="color:red;">
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </div>
            <h2 class="heading" style="font-weight: 500;">Đăng Kí Tài Khoản</h2>
            <form action="log.php?act=dangki" method="post" style="">
                <span>Họ và tên</span><br>
                <input type="text" name="ho_ten" required style="margin: 1rem 0; border:1px solid #ccc"><br>
                <span>Email</span><br>
                <input type="email" name="email" style="margin: 1rem 0; border:1px solid #ccc"><br>
                <span>Tên đăng nhập</span><br>
                <input type="text" name="ten_dn" required style="margin: 1rem 0; border:1px solid #ccc"><br>
                <span>Mật khẩu</span><br>
                <input type="password" name="mat_khau" required style="margin: 1rem 0; border:1px solid #ccc"><br>
                <span>Địa chỉ</span><br>
                <input type="text" name="diachi" style="margin: 1rem 0; border:1px solid #ccc"><br>
                <span>Số Điện Thoại</span><br>
                <input type="text" name="sdt" style="margin: 1rem 0; border:1px solid #ccc"><br>
                <div>
                    <input type="submit" value="Đăng Kí" name="dangki" class="btn-3" style="border:1px solid #ccc; color:#000;">
                    <input type="reset" value="Nhập lại" class="btn-3" style="border:1px solid #ccc; color:#000;">
                </div>
    
            </form>
        </div>
    
    </section>
</body>
</html>