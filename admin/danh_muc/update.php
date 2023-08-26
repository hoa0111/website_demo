<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
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

    if(is_array($dm)){
        extract($dm);
    }

?>

<section class="home">
        <h1 class="heading">Cập nhập danh mục</h1>
        <form action="index.php?act=updatedm" method="post">
            <span>Mã danh mục</span><br><br>
            <input type="text" name="" disabled value="auto"><br><br>
            <span>Tên danh mục</span><br><br>
            <input type="text" name="ten_danhmuc" value="<?php if(isset($ten_danhmuc) && ($ten_danhmuc!="")) echo $ten_danhmuc?>" required>
            <br><br><div class="btn">
                <input type="hidden" name="id" value="<?php if(isset($id_danhmuc) && ($id_danhmuc>0)) echo $id_danhmuc?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Reset">
                <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a> 
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </section>
</body>
</html>