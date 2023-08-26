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
        if(is_array($sl)) {
            extract($sl);
        }
    ?>

<section class="home">
    <h1 class="heading">Cập nhập số lượng</h1><br><br>
    <form action="index.php?act=updatesl" method="POST" enctype="multipart/form-data">
        
        <br><br>
        <span>Số lượng hiện tại</span>
        <input type="text"  name="so_luong" value="<?=$so_luong?>">
        <span>Số lượng</span><br><br>
        <input type="number" name="so_luong_nhap" value="" required>
        <br><br>
        <br><br><div class="btn">
            <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">
            <input type="submit" name="updatesl" value="Cập Nhật">
            <input type="reset" value="Reset">
            <a href="index.php?act=listsp">
                <input type="button" value="Danh sách">
            </a>
        </div>
        <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>
    </form>
</section>
</body>
</html>