<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1 {
        text-align: center;
        color: green;
        
    }
    form {
        margin: 0 200px;
    }
    form > input {
        padding: 10px;
        width: 100%;
        border-radius: 10px;
    }
    .btn input {
        padding: 10px 16px;
        border-radius: 10px;

    }
    .btn input:hover {
        background-color: #05af05a6;
        cursor: pointer;
        
    }
    span {
        font-weight: bold;
    }
</style>
<body>
    <?php
    if(is_array($tk)){
        extract($tk);
    }
?>
<section class="home">
        <h1 class="heading">Cập nhập tài khoản</h1>
        <form action="index.php?act=updatetk" method="post">
            <span>ID</span><br><br>
            <input type="text" name="ma_kh" value="<?php if(isset($ma_kh) && ($ma_kh!="")) echo $ma_kh?>"><br><br>
            <span>Họ và tên</span><br><br>
            <input type="text" name="ho_ten" value="<?php if(isset($ho_ten) && ($ho_ten!="")) echo $ho_ten?>" required><br><br>
            <span>Email</span><br><br>
            <input type="email" name="email" value="<?php if(isset($email) && ($email!="")) echo $email?>"><br><br>
            <span>Tên đăng nhập</span><br><br>
            <input type="text" name="ten_dn" value="<?php if(isset($ten_dn) && ($ten_dn!="")) echo $ten_dn?>"><br><br>
            <span>Mật khẩu</span><br><br>
            <input type="text" name="mat_khau" value="<?php if(isset($mat_khau) && ($mat_khau!="")) echo $mat_khau?>"><br><br>
            <span>Địa chỉ</span><br><br>
            <input type="text" name="diachi" value="<?php if(isset($diachi) && ($diachi!="")) echo $diachi?>"><br><br>
            <span>SĐT</span><br><br>
            <input type="text" name="sdt" value="<?php if(isset($sdt) && ($sdt!="")) echo $sdt?>"><br><br>
            <span>Role</span><br><br>
            <input type="text" name="role" value="<?php if(isset($role) && ($role!="")) echo $role?>"><br><br>
            <div class="btn">
                <!-- <input type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id?>"> -->
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Reset">
                <a href="index.php?act=dskh"><input type="button" value="Danh sách"></a> 
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </section>
</body>
</html>