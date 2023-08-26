<section class="box bill">
    <h3 style="text-align:center; color:green;">Đơn Hàng Của Tôi</h3><br>
    <table style="width:100%;">
        <tr style="background-color:green; color:#fff;">
            <th style="text-align:center; padding:12px 0; border-bottom:1px solid #ccc;">Mã Đơn Hàng</th>
            <th style="text-align:center; padding:12px 0; border-bottom:1px solid #ccc;">Tên khách hàng</th>
            <th style="text-align:center; padding:12px 0; border-bottom:1px solid #ccc;">SĐT</th>
            <th style="text-align:center; padding:12px 0; border-bottom:1px solid #ccc;">Ngày Đặt</th>
            <th style="text-align:center; padding:12px 0; border-bottom:1px solid #ccc;">Địa chỉ</th>
            <th style="text-align:center; padding:12px 0; border-bottom:1px solid #ccc;">Email</th>
            <th style="text-align:center; padding:12px 0; border-bottom:1px solid #ccc;">Tổng Tiền</th>
            <th style="text-align:center; padding:12px 0; border-bottom:1px solid #ccc;">Tình trạng</th>
        </tr>
        <?php
            if(is_array($listbill)){
                foreach ($listbill as $bill) {
                    extract($bill);
                    $ttdh=get_ttdh($bill['bill_status']);
                    $contsp=loadall_cart_count($bill['idbill']);
                    echo '<tr style="text-align:center;">
                                <td style="padding:10px 0; border-right:1px solid #ccc; border-bottom:1px solid #ccc;">DON-'.$bill['idbill'].'</td>
                                <td style="padding:10px 0; border-right:1px solid #ccc; border-bottom:1px solid #ccc;">'.$bill['bill_name'].'</td>
                                <td style="padding:10px 0; border-right:1px solid #ccc; border-bottom:1px solid #ccc;">'.$bill['bill_sdt'].'</td>
                                <td style="padding:10px 0; border-right:1px solid #ccc; border-bottom:1px solid #ccc;">'.$bill['ngaydathang'].'</td>
                                <td style="padding:10px 0; border-right:1px solid #ccc; border-bottom:1px solid #ccc;">'.$bill['bill_diachi'].'</td>
                                <td style="padding:10px 0; border-right:1px solid #ccc; border-bottom:1px solid #ccc;">'.$bill['bill_email'].'</td>
                                <td style="padding:10px 0; border-right:1px solid #ccc; border-bottom:1px solid #ccc;">'.number_format($bill['total'],0, ',', '.').'VND</td>
                                <td style="padding:10px 0; border-bottom:1px solid #ccc;">'.$ttdh.'</td>
                            </tr>';
                }
                
            }
        ?>
    </table>
    <a href="index.php" ><input type="button" value="Quay lại mua sắm" class="btn"></a>
</section>