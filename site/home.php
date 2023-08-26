<?php
        
    foreach ($spnew as $sp) {
        extract($sp);
        $hinh=$img_path.$img;
        $linksp="index.php?act=sanphamct&idsp=".$id;
        echo '
        <div class="box">
            <img src="'.$hinh.'" alt="">
            <a href="'.$linksp.'">'.$name_sp.'</a>
            <span>'.number_format($price,0, ',', '.').'đ</span>
            <form action="index.php?act=addtocart" method="post">
                <div class="soluong">
                    <input type="number" name="soluong" min="1" max="10" value="1">
                    <i class="fas fa-star" style="color: #FFA400;"></i>
                    <i class="fas fa-star" style="color: #FFA400;"></i>
                    <i class="fas fa-star" style="color: #FFA400;"></i>
                    <i class="fas fa-star" style="color: #FFA400;"></i>
                </div>
                <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="name" value="'.$name_sp.'">
                <input type="hidden" name="img" value="'.$img.'">
                <input type="hidden" name="price" value="'.$price.'">
                <input type="submit" name="addtocart" value="Mua Hàng" class="btn-3">
            </form>
        </div>
    ';}
?>