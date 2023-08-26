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
</style>
<body>
    <div id="main">
        <?php
            require "../header.php";
        ?>
        <?php
            require "../slider.php";
        ?>
        <!-- sp -->
        <div id="san_pham">
            <h2>-Sản phẩm mới</h2>
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
                    <div class="row">
                        <div class="col-md-3">
                            <img src="<?=$CONTENT_URL?>/assets/img/ni1.png" alt="">
                            <div class="tt_sp">
                                <div class="gioi_tinh">Nữ</div>
                                <div class="size">XS-XXL</div>
                            </div>
                            <p class="name">Áo nỉ Nữ</p>
                            
                            <p style="color: #ccc; font-size: 16px;">New</p>
                            <p class="price">149.000 VND</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?=$CONTENT_URL?>/assets/img/ni1.png" alt="">
                            <div class="tt_sp">
                                <div class="gioi_tinh">Nữ</div>
                                <div class="size">XS-XXL</div>
                            </div>
                            <p class="name">Áo nỉ Nữ</p>
                            
                            <p style="color: #ccc; font-size: 16px;">New</p>
                            <p class="price">149.000 VND</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?=$CONTENT_URL?>/assets/img/ni1.png" alt="">
                            <div class="tt_sp">
                                <div class="gioi_tinh">Nữ</div>
                                <div class="size">XS-XXL</div>
                            </div>
                            <p class="name">Áo nỉ Nữ</p>
                            
                            <p style="color: #ccc; font-size: 16px;">New</p>
                            <p class="price">149.000 VND</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?=$CONTENT_URL?>/assets/img/ni1.png" alt="">
                            <div class="tt_sp">
                                <div class="gioi_tinh">Nữ</div>
                                <div class="size">XS-XXL</div>
                            </div>
                            <p class="name">Áo nỉ Nữ</p>
                            
                            <p style="color: #ccc; font-size: 16px;">New</p>
                            <p class="price">149.000 VND</p>
                        </div>
                    </div>
                    <br><hr><br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="<?=$CONTENT_URL?>/assets/img/hd4.png" alt="">
                            <div class="tt_sp">
                                <div class="gioi_tinh">Nam</div>
                                <div class="size">XS-XXL</div>
                            </div>
                            <p class="name">Áo hoodie Nam</p>
                            
                            <p style="color: #ccc; font-size: 16px;">New</p>
                            <p class="price">179.000 VND</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?=$CONTENT_URL?>/assets/img/hd4.png" alt="">
                            <div class="tt_sp">
                                <div class="gioi_tinh">Nam</div>
                                <div class="size">XS-XXL</div>
                            </div>
                            <p class="name">Áo hoodie Nam</p>
                            
                            <p style="color: #ccc; font-size: 16px;">New</p>
                            <p class="price">179.000 VND</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?=$CONTENT_URL?>/assets/img/hd4.png" alt="">
                            <div class="tt_sp">
                                <div class="gioi_tinh">Nam</div>
                                <div class="size">XS-XXL</div>
                            </div>
                            <p class="name">Áo hoodie Nam</p>
                            
                            <p style="color: #ccc; font-size: 16px;">New</p>
                            <p class="price">179.000 VND</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?=$CONTENT_URL?>/assets/img/hd4.png" alt="">
                            <div class="tt_sp">
                                <div class="gioi_tinh">Nam</div>
                                <div class="size">XS-XXL</div>
                            </div>
                            <p class="name">Áo hoodie Nam</p>
                            
                            <p style="color: #ccc; font-size: 16px;">New</p>
                            <p class="price">179.000 VND</p>
                        </div>
                    </div>
                    <br><hr><br>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="<?=$CONTENT_URL?>/assets/img/zip1.png" alt="">
                            <div class="tt_sp">
                                <div class="gioi_tinh">Nữ</div>
                                <div class="size">XS-XXL</div>
                            </div>
                            <p class="name">Áo có khóa Zip</p>
                            
                            <p style="color: #ccc; font-size: 16px;">New</p>
                            <p class="price">125.000 VND</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?=$CONTENT_URL?>/assets/img/zip1.png" alt="">
                            <div class="tt_sp">
                                <div class="gioi_tinh">Nữ</div>
                                <div class="size">XS-XXL</div>
                            </div>
                            <p class="name">Áo có khóa Zip</p>
                            
                            <p style="color: #ccc; font-size: 16px;">New</p>
                            <p class="price">125.000 VND</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?=$CONTENT_URL?>/assets/img/zip1.png" alt="">
                            <div class="tt_sp">
                                <div class="gioi_tinh">Nữ</div>
                                <div class="size">XS-XXL</div>
                            </div>
                            <p class="name">Áo có khóa Zip</p>
                            
                            <p style="color: #ccc; font-size: 16px;">New</p>
                            <p class="price">125.000 VND</p>
                        </div>
                        <div class="col-md-3">
                            <img src="<?=$CONTENT_URL?>/assets/img/zip1.png" alt="">
                            <div class="tt_sp">
                                <div class="gioi_tinh">Nữ</div>
                                <div class="size">XS-XXL</div>
                            </div>
                            <p class="name">Áo có khóa Zip</p>
                            
                            <p style="color: #ccc; font-size: 16px;">New</p>
                            <p class="price">125.000 VND</p>
                        </div>
                    </div>
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
                        $("#binhluan").load("../khachhang/formbinhluan.php");
                });
        </script>
        <div class="binhluan" id="binhluan">
        </div>
        
        <?php
            require "../footer.php";
        ?>
    </div>
</body>
</html>