<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Four U</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/bootstrap-3.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/themify-icons/themify-icons.css">
</head>
<style>
    .box img:hover {
        opacity: .7;
        cursor: pointer;
    }
</style>
<body>
    <section class="product">
        <h3 class="heading">Danh mục sản phẩm</h3>
        <div class="box-sanpham">
            <?php
                    foreach ($sp as $sp) {
                        extract($sp);
                        $hinh_anh=$img_path.$hinh_anh;
                        $linksp="index.php?act=sanphamct&ma_hh=".$ma_hh;
                        echo '
                                    <div class="col-md-3">
                                        <div class="box">
                                        <img style="width:100%; height:300px;" src="'.$hinh_anh.'" alt="">
                                        <div style="float:right; color:#ccc;" class="size">XS-XXL</div>
                                        <p style="color: #ccc; font-size: 16px;">New</p>
                                        <a style="color: #767676; font-size:18px; font-weight:bold;" href="'.$linksp.'">'.$ten_hh.'</a>
                                        <br>
                                        <i class="ti-star" style="color: #FFA400;"></i>
                                        <i class="ti-star" style="color: #FFA400;"></i>
                                        <i class="ti-star" style="color: #FFA400;"></i>
                                        <i class="ti-star" style="color: #FFA400;"></i>
                                        <i class="ti-star" style="color: #FFA400;"></i>
                                        <br><br>
                                        <span style="font-size:22px; font-weight:bold;">'.number_format($don_gia,0,',','.').'VND</span>
                                        <form style="margin-left:0;" action="index.php?act=addtocart" method="post">
                                            <input type="hidden" name="ma_hh" value="'.$ma_hh.'">
                                            <input type="hidden" name="ten_hh" value="'.$ten_hh.'">
                                            <input type="hidden" name="hinh_anh" value="'.$hinh_anh.'">
                                            <input type="hidden" name="don_gia" value="'.$don_gia.'">
                                            <div class="soluong">
                                            <input style="width:32px; padding:4px;" type="number" name="so_luong" min="1" max="10" value="1">
                                            <input style="padding:6px; background-color:#2ef82e; border:none;" type="submit" name="addtocart" value="Mua Hàng" class="btn-3">
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    <div style="clear:bold;"></div>
                                ';}
                ?>
        
        <div style="clear:both;"></div>
        </div>
    <?php
        // include "footer.php";
    ?>
</body>
</html>