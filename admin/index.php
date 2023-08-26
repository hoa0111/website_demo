<?php
    include "../model/pdo.php";
    include "../model/danh_muc.php";
    include "../model/hang_hoa.php";
    include "../model/taikhoan.php";
    include "../model/binh_luan.php";
    include "../model/cart.php";
    include "header.php";

    //controller

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                // kiểm tra click vào nút thêm mới 
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $ten_danhmuc=trim(strip_tags($_POST['ten_danhmuc']));
                    insert_danh_muc($ten_danhmuc);
                    $thongbao="Thêm mới thành công";
                }
                include "danh_muc/add.php";
                break;

            case 'listdm':
                $listdanhmuc=loadall_danh_muc();
                include "danh_muc/list.php";
                break;

            case 'xoadm':
                if(isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc']>0)){
                   delete_danh_muc($_GET['id_danhmuc']);
                }
                $listdanhmuc=loadall_danh_muc();
                include "danh_muc/list.php";
                break;

            case 'suadm':
                if(isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc']>0)){
                    $dm=loadone_danh_muc($_GET['id_danhmuc']);
                }
                include "danh_muc/update.php";
                break;

            case 'updatedm':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $ten_danhmuc=$_POST['ten_danhmuc'];
                    $id=$_POST['id'];
                    update_danh_muc($id,$ten_danhmuc);
                    $thongbao="cập nhật thành công";
                }
                $listdanhmuc=loadall_danh_muc();
                include "danh_muc/list.php";
                break;

            // Sản phẩm

            case 'addsp':
                // kiểm tra click vào nút thêm mới 
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $id_danhmuc=$_POST['id_danhmuc'];
                    $ten_hh=$_POST['ten_hh'];
                    $don_gia=$_POST['don_gia'];
                    $so_luong=$_POST['so_luong'];
                    $hinh_anh=$_FILES['hinh_anh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                    $ngay_nhap=$_POST['ngay_nhap'];
                    $mo_ta=$_POST['mo_ta'];
                    if($don_gia > 0 && $so_luong > 0) {
                        insert_hang_hoa($id_danhmuc,$ten_hh,$don_gia,$so_luong,$hinh_anh,$ngay_nhap,$mo_ta);
                        $thongbao="Thêm mới thành công";
                    }else {
                        echo "Lỗi";
                    }
                }
                $listdanhmuc=loadall_danh_muc();
                include "hang_hoa/add.php";
                break;

            case 'listsp':
                if(isset($_POST['timsp'])&&($_POST['timsp'])){
                    $keyw=$_POST['keyw'];
                    $id_danhmuc=$_POST['id_danhmuc'];
                } else{
                    $keyw='';
                    $id_danhmuc=0;
                }
                $listdanhmuc=loadall_danh_muc();
                $listhang_hoa=loadall_hang_hoa($keyw,$id_danhmuc);
                include "hang_hoa/list.php";
                break;

            case 'xoasp':
                if(isset($_GET['ma_hh']) && ($_GET['ma_hh']>0)){
                   delete_hang_hoa($_GET['ma_hh']);
                }
                $listhang_hoa=loadall_hang_hoa('',0);
                include "hang_hoa/list.php";
                break;

            case 'suasp':
                if(isset($_GET['ma_hh']) && ($_GET['ma_hh']>0)){
                    $sp=loadone_hang_hoa($_GET['ma_hh']);
                }
                $listdanhmuc=loadall_danh_muc();
                include "hang_hoa/update.php";
                break;

            case 'updatesp':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $ma_hh=$_POST['ma_hh'];
                    $id_danhmuc=$_POST['id_danhmuc'];
                    $ten_hh=$_POST['ten_hh'];
                    $don_gia=$_POST['don_gia'];
                    $so_luong=$_POST['so_luong'];
                    $mo_ta=$_POST['mo_ta'];
                    $hinh_anh=$_FILES['hinh_anh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh_anh"]["name"]);
                    update_hang_hoa($ten_hh, $don_gia, $so_luong, $hinh_anh, $mo_ta, $id_danhmuc, $ma_hh);
                    $thongbao="cập nhật thành công";
                }
                $listdanhmuc=loadall_danh_muc();
                $listhang_hoa=loadall_hang_hoa('',0);
                include "hang_hoa/list.php";
                break;

            case 'updatesl':
                if(isset($_GET['updatesl']) && ($_GET['updatesl'] == true)){
                    $so_luong;
                    $ds_sl = loadone_hang_hoa($ma_hh);
                    $so_luong_nhap = $_POST['so_luong_nhap'];
                    $so_luong_new = $so_luong + $so_luong_nhap;
                    $sl = hang_hoa_select_new($ma_hh,$so_luong);
                }
                    include "hang_hoa/list.php";
                break;

            // Bình luận 
            case 'dsbl':
                $listbinh_luan=loadall_binh_luan();
                include "binh_luan/list.php";
                break;
            case 'xoabl':
                if(isset($_GET['ma_bl']) && ($_GET['ma_bl']>0)){
                    delete_binh_luan($_GET['ma_bl']);
                }
                $listbinh_luan=loadall_binh_luan();
                include "binh_luan/list.php";
                break;
            // Tài Khoản
            case 'dskh':
                $listkhach_hang=loadall_khach_hang();
                include "khach_hang/list.php";
                break;
            case 'suatk':
                if(isset($_GET['ma_kh']) && ($_GET['ma_kh']>0)){
                    $tk=loadone_khach_hang($_GET['ma_kh']);
                }
                include "khach_hang/update.php";
                break;
            case 'updatetk':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $ma_kh=$_POST['ma_kh'];
                    $ho_ten=$_POST['ho_ten'];
                    $email=$_POST['email'];
                    $ten_dn=$_POST['ten_dn'];
                    $mat_khau=$_POST['mat_khau'];
                    $diachi=$_POST['diachi'];
                    $sdt=$_POST['sdt'];
                    $role=$_POST['role'];
                    update_khach_hang($ma_kh,$ho_ten,$email,$ten_dn,$mat_khau,$diachi,$sdt,$role);
                    $thongbao="cập nhật thành công";
                }
                $listkhach_hang=loadall_khach_hang();
                include "khach_hang/list.php";
                break;
            case 'xoatk':
                if(isset($_GET['ma_kh']) && ($_GET['ma_kh']>0)){
                    delete_khach_hang($_GET['ma_kh']);
                }
                $listkhach_hang=loadall_khach_hang();
                include "khach_hang/list.php";
                break;
            // Đơn hàng
            case 'dsdh':
                if(isset($_POST['keyw']) && ($_POST['keyw']!="")){
                    $keyw=$_POST['keyw'];
                } else{
                    $keyw="";
                }
                $listbill=loadall_bill_admin($keyw,0);
                include "bill/list.php";
                break;
            case 'suadh':
                if(isset($_GET['idbill']) && ($_GET['idbill']>0)){
                    $bill=loadone_bill($_GET['idbill']);
                }
                include "bill/update.php";
                break;

            case 'updatedh':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $idbill=$_POST['idbill'];
                    $status=$_POST['status'];
                    update_bill($idbill,$status);
                    $thongbao="cập nhật thành công";
                }
                $listbill= loadall_bill_admin(0);
                include "bill/list.php";
                break;

            case 'xoadh':
                if(isset($_GET['idbill']) && ($_GET['idbill']>0)){
                    delete_billphu($_GET['idbill']);
                    delete_bill($_GET['idbill']);
                }
                $listbill= loadall_bill_admin(0);
                include "bill/list.php";
                break;
            // Thống Kê
            case 'thongkekh':
                $listthongkekh=loadall_thongke_kh();
                include "thongke/listkh.php";
                break;
            case 'thongkebillday':
                $listthongkebillday=loadall_thongke_donhangday();
                include "thongke/listbillday.php";
                break;
            case 'thongkebill':
                $listthongkebill=loadall_thongke_donhang();
                include "thongke/listbill.php";
                break;
            case 'thongke':
                $listthongke=loadall_thongke();
                include "thongke/list.php";
                break;
            case 'bieudo':
                $listthongke=loadall_thongke();
                include "thongke/bieudo.php";
                break;
            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }
    // include "../footer.php";
?>