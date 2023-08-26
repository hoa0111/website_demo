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

    if(is_array($sp)){
        extract($sp);
    }

    $hinhpath="../upload/".$hinh_anh;
        if(is_file($hinhpath)){
            $hinh="<img src='".$hinhpath."' height='550'>";
        } else{
            $hinh="no photo";
    }

?>

<section class="home">
    <h1 class="heading">Cập nhập hàng hóa</h1><br><br>
    <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
        <span>Danh mục</span><br><br>
        <select style="width:100%; padding:10px; border-radius:10px;" name="id_danhmuc">
            <option value="0" selected>Danh mục</option><br><br>
            <?php
                        foreach ($listdanhmuc as $danh_muc) {
                            extract($danh_muc);
                            if ($id_danhmuc == $id_danhmuc) {
                                $s = "selected";
                            } else {
                                $s = "";
                            }
                            echo '<option value="' . $id_danhmuc . '" ' . $s . '>' . $ten_danhmuc . '</option>';
                        }
                    ?>
        </select>
        <br><br>
        <span>Tên sản phẩm</span><br><br>
        <input type="text" name="ten_hh" value="<?=$ten_hh?>" required>
        <br><br>
        <span>Giá</span><br><br>
        <input type="text" name="don_gia" value="<?=$don_gia?>" required>
        <br><br>
        <span>Số lượng</span><br><br>
        <input type="number" name="so_luong" value="<?=$so_luong?>" required>
        <br><br>

        <div class="box"><br><br>
            <span>Hình ảnh</span><br><br>
            <input type="file" name="hinh_anh" class="hinh"><br><br>
            <?=$hinh_anh?>
        </div>
        <br><br>

        <span>Mô tả</span><br><br>
        <textarea name="mo_ta" cols="30" rows="10" ><?=$mo_ta?></textarea>
        <br><br><div class="btn">
            <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">
            <input type="submit" name="capnhat" value="Cập Nhật">
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