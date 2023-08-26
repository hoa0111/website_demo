<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        /* margin-left: 80px; */
        /* margin-right: 80px; */
    }
    .clear {
        clear: both;
    }
    img {
        width: 100%;
    }

    .box {
        /* float: left; */
        width: 33.33333%;
    }
</style>
<body>
    <section class="product">
        <h3 class="heading">-Hôm Nay Mua Gì?</h3>
        <div class="box-sanpham">
            <?php
            
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $hinh_anh=$img_path.$hinh_anh;
                        $linksp="index.php?act=sanphamct&ma_hh=".$ma_hh;
                        echo '
                        <div class="box">
                            <img src="'.$hinh_anh.'" alt="">
                            <a href="'.$linksp.'">'.$ten_hh.'</a>
                            <span>'.number_format($don_gia,3,',','.').'VND</span>
                        </div>
                            ';}
                ?>
                <div class="clear"></div>
    
        </div>
    
        
            <h3 class="heading">-Top 5 Sản Phẩm Bán Chạy</h3>
            <!-- <div class="title"></div> -->
            <div class="box-sanpham">
                <?php
                        foreach ($dstop10 as $sp) {
                            extract($sp);
                            $hinh_anh=$img_path.$hinh_anh;
                            $linksp="index.php?act=sanphamct&ma_hh=".$ma_hh;
                            echo'
                            <div class="box">
                            <img src="'.$hinh_anh.'" alt="">
                            <a href="'.$linksp.'">'.$ten_hh.'</a>
                            <span>'.number_format($don_gia,3, ',', '.').'VND</span>
                        </div>  
                            ';
                        }
                    ?>
            </div>
    
            <div class="box-banner">
            <div class="box">
                <img src="./images/banner/3.png" alt="">
            </div>
            <div class="box">
                <img src="./images/banner/4.png" alt="">
            </div>
        </div>
        
    </section>
    
    
</body>
</html>