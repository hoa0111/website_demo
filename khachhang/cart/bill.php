<section class="box bill">
    <form action="index.php?act=billcomfim" method="post">
        <div class="box">
            <h3 style="text-align:center;">Thông Tin Người Đặt Hàng</h3>
            <table style="width:100%; margin-left:400px;">
                <?php
                    if(isset($_SESSION['ten_dn'])){
                        $ho_ten=$_SESSION['ten_dn']['ho_ten'];
                        $diachi=$_SESSION['ten_dn']['diachi'];
                        $email=$_SESSION['ten_dn']['email'];
                        $sdt=$_SESSION['ten_dn']['sdt'];
                    } else{
                        $ten_hh="";
                        $diachi="";
                        $email="";
                        $sdt="";
                    }
                ?>
                <tr>
                    <td style="width:10%;" >Người Đặt Hàng</td>
                    <td><input style="width:30%; padding:6px; border-radius:10px;" type="text" name="ho_ten" value="<?=$ho_ten?>"></td>
                </tr>
                <tr>
                    <td>Địa Chỉ</td>
                    <td><input style="width:30%; padding:6px; border-radius:10px;" type="text" name="diachi" value="<?=$diachi?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input style="width:30%; padding:6px; border-radius:10px;" type="text" name="email" value="<?=$email?>"></td>
                </tr>
                <tr>
                    <td>Số DT</td>
                    <td><input style="width:30%; padding:6px; border-radius:10px;" type="text" name="sdt" value="<?=$sdt?>"></td>
                </tr>
            </table>
        </div>
        <div class="box">
            <h3>Thông Tin Giỏ Hàng</h3>
            <table border="1" style="width:100%; border:1px solid #fff;">
                <tr style="background-color:green; color:#fff;">
                    <th style="text-align:center; padding:12px 0;">STT</th>
                    <th style="text-align:center; padding:12px 0;">Hình</th>
                    <th style="text-align:center; padding:12px 0;">Sản Phẩm</th>
                    <th style="text-align:center; padding:12px 0;">Đơn Giá</th>
                    <th style="text-align:center; padding:12px 0;">Số Lượng</th>
                    <th style="text-align:center; padding:12px 0;">Thành Tiền</th>
                </tr>
                <?php
                    global $img_path;
                    $tong=0;
                        $i=1;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh_anh = $img_path.$cart[2];
                            $tong+=$cart[5];
                            $xoasp='<a href="index.php?act=delcart&idcart='.$cart[0].'"><input type="button" value="Xóa" class="btn"></a>';
                            echo'<tr>
                                    <td style="width:5%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.$i.'</td>
                                    <td style="width:25%;text-align:center; padding:12px 0; border-right:1px solid #ccc;"><img style="width:20%; height:80px;" src="'.$cart[3].'"></td>
                                    <td style="width:30%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.$cart[1].'</td>
                                    <td style="width:15%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.number_format($cart[2],0, ',', '.').'VND</td>
                                    <td style="width:10%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.$cart[4].'</td>
                                    <td style="width:15%;text-align:center; padding:12px 0;">'.number_format($cart[5],0, ',', '.').'VND</td>
                                </tr>';
                            $i+=1;
                        }
                        echo '<tr style="">
                                <th style="background-color:green; color:#fff; text-align:center; padding:12px 0;" colspan="5">Tổng</th>
                                <th style="background-color:green; color:#fff; text-align:center; padding:12px 0;" colspan="2">'.number_format($tong,0, ',', '.').'VND</th>
                            </tr>';
                ?>
            </table>
        </div>
        <!-- <div class="box">
            <h3>Phương Thức Thanh Toán</h3>
            <table style="width:60%;">
                <tr>
                    <td><input type="radio" name="bill_tt" checked style="">Thanh toán nhận hàng</td>
                    <td><input type="radio" name="bill_tt">Thanh toán online</td>
                    <td><input type="radio" name="bill_tt">Chuyển khoản ngân hàng</td>
                </tr>
            </table>
        </div> -->
        <br>
        <div class="box">
            <span style="color:red;">*Lưu ý: Quý khách vui lòng kiểm tra đầy đủ thông tin để chúng tôi giao hàng cho quý khách nhanh nhất có thể</span>
        </div>
        <br>
        <input style="padding:6px; background-color:#2ef82e; border:none;" type="submit" value="Thanh Toán Ngay" class="btn" name="dongydathang">
        
        <a href="index.php"><input style="padding:6px; background-color:#2ef82e; border:none;" type="button" value="Quay Lại Cửa Hàng" class="btn"></a>
    </form>
</section>