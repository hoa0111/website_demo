
<section style="margin-left:40px;" class="box bill">
    <form action="index.php?act=billcomfim" method="post">

        <?php

            if(isset($bill) && (is_array($bill))){
                extract($bill);
            }
        
        ?>
        <div class="box">
            <h3>Đơn Hàng Của Quý Khách</h3>
            
            <span>DON-<?=$bill['idbill'];?></span><br>
            <span>Ngày <?=$bill['ngaydathang'];?></span><br>
            <span>Tổng <?=$bill['total'];?></span><br>
        </div>
        <hr>
        <div>
            <h3>Thông Tin Đặt Hàng</h3>
            <table>
                <tr>
                    <td>Người Đặt Hàng: </td>
                    <td><?=$bill['bill_name'];?></td>
                </tr>
                <tr>
                    <td>Địa Chỉ: </td>
                    <td><?=$bill['bill_diachi'];?></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><?=$bill['bill_email'];?></td>
                </tr>
                <tr>
                    <td>Số điện thoại: </td>
                    <td><?=$bill['bill_sdt'];?></td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="box">
            <h3>Thông Tin Giỏ Hàng</h3>
            <table style="width:100%;">
                <tr>
                    <th style="padding:8px; text-align:center;">STT</th>
                    <th style="padding:8px; text-align:center;">Hình</th>
                    <th style="padding:8px; text-align:center;">Sản Phẩm</th>
                    <th style="padding:8px; text-align:center;">Đơn Giá</th>
                    <th style="padding:8px; text-align:center;">Số Lượng</th>
                    <th style="padding:8px; text-align:center;">Thành Tiền</th>
                </tr>
                <?php
                    bill_chi_tiet($billct);
                    // viewcart();
                ?>
            </table>
        </div>
        <hr>
        <div class="box">
            <h3>Phương Thức Thanh Toán</h3>
            <?php
                if($bill['bill_tt']=1){
                    $tt="Thanh toán khi nhận hàng";
                } elseif ($bill['bill_tt']=2){
                    $tt="Chuyển Khoản Ngân Hàng";
                } else {
                    $tt="Thanh Toán Online";
                }
            ?>
            <span><?=$tt;?></span>
        </div>
        <br>
        <a href="index.php"><input style="padding:6px; background-color:#2ef82e; border:none;" type="button" value="Quay Lại Cửa Hàng" class="btn"></a>
    </form>
</section>