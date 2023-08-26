<?php

    function viewcart(){
        global $img_path;
        $tong=0;
            $i=1;
            foreach ($_SESSION['mycart'] as $cart) {
                $hinh_anh = $img_path.$cart[2];
                $tong+=$cart[5];
                $xoasp='<a href="index.php?act=delcart&idcart='.$cart[0].'"><input type="button" value="Xóa" class="btn"></a>';
                echo'<tr>
                        <td style="width:5%;text-align:center; padding:12px 0;">'.$i.'</td>
                        <td style="width:25%;text-align:center; padding:12px 0;"><img src="'.$hinh_anh.'"></td>
                        <td style="width:30%;text-align:center; padding:12px 0;">'.$cart[1].'</td>
                        <td style="width:5%;text-align:center; padding:12px 0;">'.number_format($don_gia,0, ',', '.').'VND</td>
                        <td style="width:10%;text-align:center; padding:12px 0;">'.$cart[4].'</td>
                        <td style="width:10%;text-align:center; padding:12px 0;">'.number_format($cart[5],0, ',', '.').'VND</td>
                        <td style="width:15%;text-align:center; padding:12px 0;">'.$xoasp.'</td>
                    </tr>';
                $i+=1;
            }
            echo '<tr style="">
                    <th style="background-color:green; color:#fff; text-align:center; padding:12px 0;" colspan="5">Tổng</th>
                    <th style="background-color:green; color:#fff; text-align:center; padding:12px 0;" colspan="2">'.number_format($tong,0, ',', '.').'VND</th>
                </tr>';
               
    }

    function bill_chi_tiet($listbill){
        global $img_path;
        $tong=0;
        $i=1;
        foreach ($listbill as $cart) {
            $hinh_anh = $img_path.$cart['hinh_anh'];
            $tong+=$cart[5];
            echo'<tr style="text-align:center;">
                    <td style="width:5%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.$i.'</td>
                    <td style="width:25%;text-align:center; padding:12px 0; border-right:1px solid #ccc;"><img src="'.$cart[3].'" height="100px"></td>
                    <td style="width:30%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.$cart['ten_hh'].'</td>
                    <td style="width:15%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.number_format($cart['don_gia'],0, ',', '.').'VND</td>
                    <td style="width:10%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.$cart['so_luong'].'</td>
                    <td style="width:15%;text-align:center; padding:12px 0; border-right:1px solid #ccc;">'.number_format($cart['thanh_tien'],0, ',', '.').'VND</td>
                </tr>';
            $i+=1;
        }
        // echo '<tr>
        //             <th colspan="4">Tổng</th>
                    
        //             <th colspan="2">'.number_format($tong,0, ',', '.').'VND</th>
        //         </tr>';
    }

    function tongdonhang(){
        $tong=0;
        $i=1;
        foreach ($_SESSION['mycart'] as $cart) {
            $tong+=$cart[5];
        }
        return $tong;
    }

    function insert_bill($ma_kh,$bill_name,$bill_email,$bill_diachi,$bill_sdt,$bill_tt,$ngaydathang,$tongdonhang){
        $sql="insert into bill(ma_kh,bill_name,bill_email,bill_diachi,bill_sdt,bill_tt,ngaydathang,total) values('$ma_kh','$bill_name','$bill_email','$bill_diachi','$bill_sdt','$bill_tt','$ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);
    }

    function insert_cart($ma_kh,$ma_hh,$don_gia,$ten_hh,$hinh_anh,$so_luong,$thanh_tien,$idbill){
        $sql="insert into cart(ma_kh,ma_hh,don_gia,ten_hh,hinh_anh,so_luong,thanh_tien,idbill) values('$ma_kh','$ma_hh','$don_gia','$ten_hh','$hinh_anh','$so_luong','$thanh_tien','$idbill')";
        return pdo_execute($sql);
    }

    function loadone_bill($idbill){
        $sql="select * from bill where idbill=".$idbill;
        $bill=pdo_query_one($sql);
        return $bill;
    }

    function loadall_cart($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $cart=pdo_query($sql);
        return $cart;
    }

    function loadall_cart_count($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $cart=pdo_query($sql);
        return sizeof($cart);
    }

    function loadall_bill($ma_kh=0){
        $sql="select * from bill  Where ma_kh = $ma_kh order by idbill desc";
        $listbill=pdo_query($sql);
        return $listbill;
    }
    
    function loadall_bill_admin($keyw="",$ma_kh=0){
        $sql="select * from bill where 1";
        if($ma_kh>0) $sql.=" AND ma_kh=".$ma_kh;
        if($keyw!="") $sql.=" AND idbill like '%".$keyw."%'";
        $sql.=" order by idbill desc";
        $listbill=pdo_query($sql);
        return $listbill;
    }

    function get_ttdh($n){
        switch ($n) {
            case '0':
                $tt="Đơn hàng mới";
                break;
            case '1':
                $tt="Đang xử lí";
                break;
            case '2':
                $tt="Đang giao hàng";
                break;
            case '3':
                $tt="Đã giao hàng";
                break;
            
            default:
                $tt="Đang cập nhật";
                break;
        }
        return $tt;
    }

    function delete_bill($idbill){
        $sql="delete from bill where idbill=".$idbill;
        pdo_execute($sql);
    }

    function delete_billphu($idbill){
        $sql="delete from cart where idbill=".$idbill;
        pdo_execute($sql);
    }

    function update_bill($idbill,$status){
        $sql="update bill set bill_status='".$status."' where idbill=".$idbill;
        pdo_execute($sql);
    }


    function loadall_thongke(){
        $sql="select danh_muc.id_danhmuc as madm, danh_muc.ten_danhmuc as tendm, count(hang_hoa.ma_hh) as countsp, min(hang_hoa.don_gia) as minprice, max(hang_hoa.don_gia) as maxprice, avg(hang_hoa.don_gia) as avgprice from hang_hoa left join danh_muc on danh_muc.id_danhmuc=hang_hoa.id_danhmuc group by danh_muc.id_danhmuc";
        $listthongke=pdo_query($sql);
        return $listthongke;
    }
    
    // function loadall_thongke_donhang(){
    //     $sql="select cart.ma_hh as mahh, cart.ten_hh as tenhh, count(bill.idbill) as countbill, bill.ngaydathang as ngaydathang, min(bill.total) as minbill, max(bill.total) as maxbill, avg(bill.total) as avgbill from cart left join bill on bill.idbill=cart.idbill group by bill.idbill";
    //     $listthongkebill=pdo_query($sql);
    //     return $listthongkebill;
    // }

    function loadall_thongke_donhang(){
        $sql = "select MONTH(ngaydathang) as thang, sum(total) as tong from bill where bill_status = 2 group by MONTH(ngaydathang)";
        $listthongkebill = pdo_query($sql);
        return $listthongkebill;
    }
    
    function loadall_thongke_donhangday(){
        $sql = "select DAY(ngaydathang) as ngay, MONTH(ngaydathang) as thang, YEAR(ngaydathang) as nam, sum(total) as tong from bill where bill_status = 2 group by ngaydathang having MONTH(ngaydathang) order by MONTH(ngaydathang) desc";
        $listhongkebillday = pdo_query($sql);
        return $listhongkebillday;
    }
    
    function loadall_thongke_kh(){
        $sql="select khach_hang.ma_kh as makh, khach_hang.ho_ten as tenkh, count(cart.id) as countcart, min(cart.thanh_tien) as mincart, max(cart.thanh_tien) as maxcart, avg(cart.thanh_tien) as avgcart from cart left join khach_hang on khach_hang.ma_kh=cart.ma_kh group by khach_hang.ma_kh";
        $listthongke=pdo_query($sql);
        return $listthongke;
    }

?>