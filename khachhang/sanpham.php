<section class="product">
    <h3 class="heading">Sản phẩm</h3>
        <div class="box-sanpham">
            <?php
                
                foreach ($dssp as $sp) {
                    extract($sp);
                    $hinh_anh=$img_path.$hinh_anh;
                    $linksp="index.php?act=sanphamct&ma_hh=".$ma_hh;
                    echo '
                    <div class="box">
                        <img src="'.$hinh_anh.'" alt="">
                        <a href="'.$linksp.'">'.$ten_hh.'</a>
                        <span>'.number_format($don_gia,0, ',', '.').'VND</span>
                        <form action="index.php?act=addtocart" method="post">
                            <div class="soluong">
                            <input type="number" name="soluong" min="1" max="10" value="1">
                            <i class="fas fa-star" style="color: #FFA400;"></i>
                            <i class="fas fa-star" style="color: #FFA400;"></i>
                            <i class="fas fa-star" style="color: #FFA400;"></i>
                            <i class="fas fa-star" style="color: #FFA400;"></i></div>
                            <input type="hidden" name="ma_hh" value="'.$ma_hh.'">
                            <input type="hidden" name="ten_hh" value="'.$ten_hh.'">
                            <input type="hidden" name="hinh_anh" value="'.$hinh_anh.'">
                            <input type="hidden" name="don_gia" value="'.$don_gia.'">
                            <input type="submit" name="addtocart" value="Mua Hàng" class="btn-3">
                        </form>
                    </div>
                        ';
                }

            ?>


        </div>

        
    </section>