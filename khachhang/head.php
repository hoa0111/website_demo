<?php
    require "global.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Four U</title>
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/bootstrap-3.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?=$CONTENT_URL?>/assets/style.css">
</head>
<style>
    #header #menu ul li {
        padding: 20px 20px;
    }
    #header #menu ul li a {
        padding: 20px 40px;
        text-align: left;
    }
</style>
<body>
    <!-- header -->
<div id="header">
    <div class="row" style="padding-top:12px;">
        <div class="col-md-4">
            <!-- <ul>
                <li><a href="#">Nam</a></li>
                <li><a href="#">Nữ</a></li>
                <li><a href="#">Trẻ em</a></li>
            </ul> -->
        </div>
        <div class="col-md-4">
            <img src="assets/img/logo.jpg" alt="">
        </div>
        <div class="col-md-4" style="padding-left:144px;">
            <a href="log.php"><i class="ti-user"></i></a>
            <a href="index.php?act=mybill"><i class="ti-shopping-cart"></i></a>
            <!-- <a href="../cart/index.php"><i class="ti-shopping-cart"></i></a> -->
            <div class="search">
                <i class="ti-search">
                    <input type="text" name="" id="" value="" placeholder="search...">
                </i>
            </div>
        </div>
    </div>

    <!-- menu -->
    <div id="menu">
        <ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li>
                <a href="index.php?act=danhmucsp1">Sản phẩm</a>
                    <ul class="submenu">
                        <li><a href="index.php?act=danhmucsp1">Áo hoodie</a></li>
                        <li><a href="index.php?act=danhmucsp2">Áo hoodie có Zip</a></li>
                        <li><a href="index.php?act=danhmucsp3">Áo nỉ Basic</a></li>
                        <li><a href="index.php?act=danhmucsp4">Áo nỉ họa tiết</a></li>
                        <li><a href="index.php?act=danhmucsp5">Áo trẻ em, áo theo mùa</a></li>
                    </ul>
            </li>
            <li><a href="<?=$CONTENT_URL?>/about.html">Giới thiệu</a></li>
            <!-- <li><a href="#">Liên hệ</a></li> -->
            <li><a href="https://www.facebook.com/profile.php?id=100087648999384">Fanpage</a></li>
        </ul>
    </div>
</div>
    <!-- end header -->
</body>
</html>