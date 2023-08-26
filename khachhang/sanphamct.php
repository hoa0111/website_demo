<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/bootstrap-3.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/themify-icons/themify-icons.css">
</head>
<style>
    .col-md-4 .box img:hover {
        opacity: .7;
        cursor: pointer;
    }
</style>
<body>
    <section class="product">
    
        <div class="sanphamct">
            <?php
                extract($onesp);
            ?>
        <hr><br><br><br>
            <div style="margin-left:100px;" class="sanpham">

                <?php
                    $hinh_anh=$img_path.$hinh_anh;
                    echo '
                    <img style="width:50%; border-radius:30px; float:left; margin-right:40px;" src="'.$hinh_anh.'" alt="">
                    <div style="margin-right:60px;" class="box">
                        <h1 style="font-weight:bold;">'.$ten_hh.'</h1>
                        <br>
                        <span style="font-size:28px;">'.number_format($don_gia,0, ',', '.').'VND</span><br><br>
                        <span>Còn lại: '.$so_luong.' cái</span><br><br>
                        <div class="box-mota">Mô tả:<br> '.$mo_ta.'</div>
                        <br>
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="ma_hh" value="'.$ma_hh.'">
                            <input type="hidden" name="ten_hh" value="'.$ten_hh.'">
                            <input type="hidden" name="hinh_anh" value="'.$hinh_anh.'">
                            <input type="hidden" name="don_gia" value="'.$don_gia.'">
                            <div id="field1">
                            <span>Số lượng</span>
                            <input style="padding:4px; width:32px;" type="number" name="so_luong" id="1" value="1" min="1" max="10" />
                            <input style="padding:6px; background-color:#2ef82e; border:none;" type="submit" name="addtocart" value="Mua Hàng" class="btn-2">
                            </div>
                        </form>
                    </div>
                    <div style="clear:both;"></div>
                    ';
                ?>
            </div>
            <br><br><hr>
            <h1>Bảng quy đổi kích thước</h1>
            <div>
                <div class="col-md-6">
                    <img style="width:100%;" src="<?=$CONTENT_URL?>/assets/img/quydoihoodie.png">
                    <h2 style="text-align:center;">Áo hoodie</h2>
                </div>

                <div class="col-md-6">
                    <img style="width:100%; height:718px;" src="<?=$CONTENT_URL?>/assets/img/quydoini.png">
                    <h2 style="text-align:center;">Áo nỉ</h2>
                </div>
            </div>
            <span>*Lưu ý: </span>
            <div style="clear:both;"></div>
            <h3>Sản Phẩm Cùng Loại</h3>
            <div>
                <?php
                    $i=0;
                    foreach ($sp_cungloai as $sp_cungloai) {
                        extract($sp_cungloai);
                        $hinh_anh=$img_path.$hinh_anh;
                        $linksp="index.php?act=sanphamct&ma_hh=".$ma_hh;
                        echo'
                            <div class="col-md-4">
                                <div class="box">
                                    <img style="width:100%; height:400px;" src="'.$hinh_anh.'" alt="">
                                    <div style="float:right; color:#ccc;" class="size">XS-XXL</div>
                                    <p style="color: #ccc; font-size: 16px;">New</p>
                                    <a style="color: #767676; font-size:18px; font-weight:bold;" href="'.$linksp.'">'.$ten_hh.'</a><br>
                                    <i class="ti-star" style="color: #FFA400;"></i>
                                    <i class="ti-star" style="color: #FFA400;"></i>
                                    <i class="ti-star" style="color: #FFA400;"></i>
                                    <i class="ti-star" style="color: #FFA400;"></i>
                                    <i class="ti-star" style="color: #FFA400;"></i>
                                    <br><br>
                                    <span style="font-size:22px; font-weight:bold;">'.number_format($don_gia,0, ',', '.').'VND</span>
                                    <form action="index.php?act=addtocart" method="post">
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
                            </div>';
                    $i+=1;
                    if($i>4){
                        break;
                    }
                    }
                ?>
            </div>
            <div style="clear:both;"></div>

        
<!-- thư viện jquery bình luận -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                        $("#binh_luan").load("khachhang/binhluan/formbinhluan.php", {ma_hh: <?=$ma_hh?>});
                });
            </script>
            <div class="binhluan" id="binh_luan">
            </div>
        </div>
    </section>
</body>
</html>