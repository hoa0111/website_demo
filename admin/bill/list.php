<section style="margin-left:100px; margin-right:80px;" class="home">
            <h1 style="color:green; text-align:center;" class="heading">Danh sách đơn hàng</h1>
            <br><br>
            <form action="index.php?act=dsdh" method="post" class="box-search">
                <input style="width:72.3%; padding:12px; border-radius:10px" type="text" name="keyw" placeholder="Nhập mã đơn hàng">
                <input style="width:27%; padding:14px; border-radius:10px; border:none; background-color:#036200; color:#fff; font-size:16px;" type="submit" name="listok" value="Tìm kiếm">
            </form>

            <div class="table">
                <table style="width:100%;">
                    <tr style="background-color:#036200; color:#fff; font-size:16px;">
                        <th style="width:11%; padding:12px 0;">Mã đơn</th>
                        <th style="width:25%; padding:12px 0;">Khách hàng</th>
                        <th style="width:11%; padding:12px 0;">Địa chỉ</th>
                        <th style="width:11%; padding:12px 0;">Giá trị ĐH</th>
                        <th style="width:11%; padding:12px 0;">Ngày đặt hàng</th>
                        <th style="width:11%; padding:12px 0;">Tình trạng</th>
                        <th style="width:15%; padding:12px 0;">Thao Tác</th>
                    </tr>

                    <?php
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $suadh="index.php?act=suadh&idbill=".$idbill;
                            $xoadh="index.php?act=xoadh&idbill=".$idbill;
                            $kh= $bill["bill_name"].'
                            <br> '.$bill["bill_email"].'
                            <br> '.$bill["bill_sdt"].'
                            <br> '.$bill["bill_diachi"];
                            
                            $countsp=loadall_cart_count($bill['idbill']);
                            $ttdh=get_ttdh($bill['bill_status']);
                            echo'<tr>
                                    <td style="width:11%; text-align:center; border-bottom:1px solid #ccc;">DON-'.$bill['idbill'].'</td>
                                    <td style="width:25%; text-align:center; border-bottom:1px solid #ccc;">'.$kh.'</td>
                                    <td style="width:11%; text-align:center; border-bottom:1px solid #ccc;">'.$bill['bill_diachi'].'</td>
                                    <td style="width:11%; text-align:center; border-bottom:1px solid #ccc;">'.number_format($bill['total'],0, ',', '.').'đ</td>
                                    <td style="width:11%; text-align:center; border-bottom:1px solid #ccc;">'.$bill['ngaydathang'].'</td>
                                    <td style="width:11%; text-align:center; border-bottom:1px solid #ccc;">'. $ttdh.'</td>
                                    <td style="width:15%; text-align:center; border-bottom:1px solid #ccc;">
                                        <a style="background-color: blue;" href="'.$suadh.'" class="btn">Sửa</a>
                                        <a style="background-color: red;" href="'.$xoadh.'" class="btn">Xóa</a>
                                    </td>
                                </tr>';
                        }
                    ?>
                </table>
                
            </div>
        
    </section>