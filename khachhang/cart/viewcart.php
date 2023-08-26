<section class="home cart">

    <h3 class="heading">Giỏ Hàng</h3>
    <!-- <div class="title"></div> -->

    <table border="1" style="width:100%; border:1px solid #fff;">
        <tr style="background-color:green; color:#fff;">
            <th style="text-align:center; padding:12px 0;">STT</th>
            <th style="text-align:center; padding:12px 0;">Hình ảnh</th>
            <th style="text-align:center; padding:12px 0;">Sản Phẩm</th>
            <th style="text-align:center; padding:12px 0;">Đơn Giá</th>
            <th style="text-align:center; padding:12px 0;">Số Lượng</th>
            <th style="text-align:center; padding:12px 0;">Thành Tiền</th>
            <th style="text-align:center; padding:12px 0;">Thao Tác</th>
        </tr>
        
        <?php
        if (isset($_SESSION['ten_dn']) && (is_array($_SESSION['ten_dn']))) {
            extract($_SESSION['ten_dn']);
            $tong=0;
            $i=1;
            foreach ($_SESSION['mycart'] as $cart) {
                $hinhpath="../upload/".$hinh_anh;
                if(is_file($hinhpath)){
                    $hinh_anh="<img src='".$hinhpath."' height='80'>";
                } else{
                    $hinh_anh="no photo";
                }
                $tong+=$cart[5];
                $xoasp='<a href="index.php?act=delcart&idcart='.$cart[0].'"><input style=" background-color:red; color:#fff;"  type="button" value="Xóa" class="btn"></a>';
                echo'<tr>
                        <td style="width:5%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.$i.'</td>
                        <td style="width:25%;text-align:center; padding:12px 0; border-right:1px solid #ccc;"><img style="width:20%; height:80px;" src="'.$cart[3].'"></td>
                        <td style="width:20%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.$cart[1].'</td>
                        <td style="width:15%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.number_format($don_gia,0, ',', '.').'VND</td>
                        <td style="width:10%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.$cart[4].'</td>
                        <td style="width:10%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.number_format($cart[5],0, ',', '.').'VND</td>
                        <td style="width:15%;text-align:center; padding:12px 0;">'.$xoasp.'</td>
                    </tr>';
                $i+=1;
            }
            echo '<tr style="">
                    <th style="background-color:green; color:#fff; text-align:center; padding:12px 0;" colspan="5">Tổng</th>
                    <th style="background-color:green; color:#fff; text-align:center; padding:12px 0;" colspan="2">'.number_format($tong,0, ',', '.').'VND</th>
                </tr>';
        }else {
            echo "Vui lòng <a href='log.php'>đăng nhập</a> để sử dụng tính năng này!!!";
        }
            
               
        ?>
        
    </table>
    <div>
    <a href="index.php?act=bill"><input style="background-color:#458745;" type="button" value="Đặt Hàng Ngay" class="btn"></a>
        <a href="index.php?act=delcart"><input style="background-color:#458745;" type="button" value="Xóa Giỏ Hàng" class="btn"></a>
        <a href="index.php?act=thucdon"><input style="background-color:#458745;" type="button" value="Quay Lại" class="btn"></a>
    </div>
    
    <!-- <script src="./javascript/javascript.js"></script> -->
</section>