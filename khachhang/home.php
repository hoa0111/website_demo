<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FourU</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/bootstrap-3.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/assets/style.css">
</head>
<style>
    .contain {
        /* margin: 10%; */
        margin-left: 0%;
        margin-right: 15%;
        /* padding: 3%; */
        /* width: 30%; */
        background-color: lavender;
        border-radius: 9%;
        margin-top: 6%;
        margin-bottom: -6%;
    }

    .binhluan {
        background-color: white;
        border-radius: 9%;
    }

    form {
        margin-left: 18%;
        padding-bottom: 3%;
    }

    .contain h1 {
        /* margin-top: 6%; */
        margin-left: -32%;
        /* color: blueviolet; */
        text-align: center;
    }

    .btn-btn-success {
        background-color: lavender;
        padding: 6px 12px;

    }

    .btn-btn-success:hover {
        /* background-color: lightcoral; */
    }

    .form-control:hover {
        background-color: rgb(236, 236, 236);
    }
    .top4 {
        /* margin-top: 680px; */
    }
</style>
<body>
    <div id="main">
        <?php
            // require "../header.php";
        ?>
        <?php
            // require "../slider.php";
        ?>
        <!-- sp -->
        <div id="san_pham">
            <br><br>
            <div class="row">
                <div class="col-md-3">
                    <h3>Nam</h3>
                    <ul>
                        <li><a href="#">Áo hoodie Nam</a></li>
                        <li><a href="#">Áo nỉ Nam</a></li>
                        <li><a href="#">Áo khoác theo mùa dành cho Nam</a></li>
                        <li><a href="#">Áo nỉ có họa tiết Nam</a></li>
                    </ul>
                    <h3>Nữ</h3>
                    <ul>
                        <li><a href="#">Áo hoodie Nữ</a></li>
                        <li><a href="#">Áo nỉ Nữ</a></li>
                        <li><a href="#">Áo khoác theo mùa dành cho Nữ</a></li>
                        <li><a href="#">Áo nỉ có họa tiết Nữ</a></li>
                    </ul>
                    <h3>Trẻ em</h3>
                    <ul>
                        <li><a href="#">Áo hoodie Trẻ em</a></li>
                        <li><a href="#">Áo nỉ Trẻ em</a></li>
                        <li><a href="#">Áo khoác theo mùa dành cho Trẻ em</a></li>
                        <li><a href="#">Áo nỉ có họa tiết Trẻ em</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
            <h2>-Sản phẩm mới</h2>
                    <div class="row">
                         <?php
                            foreach ($spnew as $sp) {
                                extract($sp);
                                $hinh_anh=$img_path.$hinh_anh;
                                $linksp="index.php?act=sanphamct&ma_hh=".$ma_hh;
                                echo '
                                    <div class="col-md-3">
                                        <div class="box">
                                        <img style="width:100%; height:230px;" src="'.$hinh_anh.'" alt="">
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
                        
                    </div>
                    <br><br><br><hr>
                    <div class="top4">
                            <h1>Top 4 sản phẩm có nhiều lượt xem</h1>
                            <?php
                                foreach ($dstop10 as $sp) {
                                    extract($sp);
                                    $hinh_anh=$img_path.$hinh_anh;
                                    $linksp="index.php?act=sanphamct&ma_hh=".$ma_hh;
                                    echo'
                                    <div class="col-md-3">
                                        <div class="box">
                                            <img style="width:100%; height:230px;" src="'.$hinh_anh.'" alt="">
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
                                            <span style="font-size:22px; font-weight:bold;">'.number_format($don_gia,0, ',', '.').'VND</span>
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
                        </div>
                
            </div>
        </div>
        <!-- end sp -->
        <hr>
        <div id="sale">
            <img src="<?=$CONTENT_URL?>/assets/img/sale.png" alt="">
        </div>

        <script>
                $(document).ready(function(){
                        $("#binhluan").load("khachhang/binhluan/formbinhluan.php");
                });
        </script>
        <div class="binhluan" id="binhluan">
        </div>
        
        <?php
            // require "../footer.php";
        ?>
    </div>
</body>
</html>