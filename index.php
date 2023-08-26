<?php

    session_start();

    include "model/pdo.php";
    include "model/hang_hoa.php";
    include "model/taikhoan.php";
    include "model/cart.php";
    include "model/danh_muc.php";
    include "global.php";

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $spnew=loadall_hang_hoa_home();
    $dsdm=loadall_danh_muc();
    $dstop10=loadall_hang_hoa_top10();
    $sp=loadall_hang_hoa($keyw="",$id_danhmuc=0);


    include "khachhang/head.php";
    include "khachhang/slider.php";

    if(isset($_GET['act']) && ($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'sanpham':
                if(isset($_POST['kyw']) && ($_POST['kyw'] !="")){
                    // Nếu tồn tại biến POST kyw và biến này khác rỗng thì gán POST['kyw'] cho biến kyw
                    // (kyw này nằm trong hàm loadall_hang_hoa)
                    $kyw=trim(strip_tags($_POST['kyw']));
                } else{
                    // Ngược lại thì biến kyw = rỗng
                    $kyw="";
                }
                if(isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)){
                    // Nếu tồn tại GET id_danhmuc và GET id_danhmuc này > 0 thì gán GET id_danhmuc cho biến id_danhmuc
                    $id_danhmuc=$_GET['id_danhmuc'];
                    
                } else {
                    // Ngược lại thì id_danhmuc sẽ bằng 0
                    $id_danhmuc=0;
                }
                // Gán hàm loadall_hang_hoa() cho biến dssp
                $dssp=loadall_hang_hoa($kyw,$id_danhmuc);
                // Gán hàm loadten_dm() cho biến tendm
                $tendm=loadten_dm($id_danhmuc);
                include "khachhang/sanpham.php";
                break;
            case 'sanphamct':
                if(isset($_GET['ma_hh']) && ($_GET['ma_hh'] > 0)){
                    // Nếu tồn tại GET ma_hh và ma_hh > 0 thì gán GET ma_hh cho biến id và hàm loadone_hang_hoa() cho biến onesp
                    $id=$_GET['ma_hh'];
                    $onesp = loadone_hang_hoa($id);
                    extract($onesp);
                    // Gán hàm load_hang_hoa_cungloai() cho biến sp_cungloai
                    $sp_cungloai=load_hang_hoa_cungloai($id,$id_danhmuc);
                    include "khachhang/sanphamct.php";
                } else {
                    // Ngược lại thì trả về trang chủ
                    include "khachhang/home.php";
                }
                break;
            case 'addtocart':
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $ma_hh=trim(strip_tags($_POST['ma_hh']));
                    $ten_hh=trim(strip_tags($_POST['ten_hh']));
                    $don_gia=trim(strip_tags($_POST['don_gia']));
                    $hinh_anh=trim(strip_tags($_POST['hinh_anh']));
                    $so_luong=trim(strip_tags($_POST['so_luong']));
                    $ttien=$so_luong * $don_gia;
                    $spadd=[$ma_hh,$ten_hh,$don_gia,$hinh_anh,$so_luong,$ttien];
                 if(empty($_SESSION['mycart'])){
                    $_SESSION['mycart'][$ma_hh]=$spadd;
                    }else{
                        $array_key=array_keys($_SESSION['mycart']);
                        if(in_array($ma_hh,$array_key)){
                            $_SESSION['mycart'][$ma_hh][4]=$so_luong;
                        }else{
                            $_SESSION['mycart'][$ma_hh]=$spadd; 
                        }
                    }
            }
                include "khachhang/cart/viewcart.php";
                break;
            case 'delcart':
                if(isset($_GET['idcart'])){                 
                    unset($_SESSION['mycart'][$_GET['idcart']]);
                    
                } else { 
                    $_SESSION['mycart']=[];
                }
                header('Location: index.php?act=addtocart');
                
                break;
            case 'viewcart':
                include "khachhang/cart/viewcart.php";
                break;
            case 'bill':
                include "khachhang/cart/bill.php";
                break;
            case 'billcomfim':
                if(isset($_POST['dongydathang']) && ($_POST['dongydathang'])){

                    if (isset($_SESSION['ten_dn'])) {
                        $ma_kh = $_SESSION['ten_dn']['ma_kh'];
                    } else {
                        $ma_kh = 0;
                    }

                    $ho_ten=trim(strip_tags($_POST['ho_ten']));
                    $email=trim(strip_tags($_POST['email']));
                    $diachi=trim(strip_tags($_POST['diachi']));
                    $sdt=trim(strip_tags($_POST['sdt']));
                    $bill_tt=trim(strip_tags($_POST['bill_tt']));
                    $ngaydathang=date('Y/m/d');
                    $tongdonhang=tongdonhang();

                    $id=insert_bill($ma_kh,$ho_ten,$email,$diachi,$sdt,$bill_tt,$ngaydathang,$tongdonhang);

                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_cart($_SESSION['ten_dn']['ma_kh'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$id);
                    }
                    
                    $_SESSION['mycart']=[];
                }
                $bill=loadone_bill($id);
                $billct=loadall_cart($id);
                include "khachhang/cart/billcomfim.php";
                break;
            case 'mybill':
                $ma_kh=$_SESSION['ten_dn']['ma_kh'];
                $listbill=loadall_bill($ma_kh);
                include "khachhang/cart/mybill.php";
                break;
            case 'danhmucsp1':
                $sp=loadall_hang_hoa($keyw="",$id_danhmuc=1);
                include "khachhang/danhmucsp.php";
                break;
                case 'danhmucsp2':
                    $sp=loadall_hang_hoa($keyw="",$id_danhmuc=2);
                    include "khachhang/danhmucsp.php";
                    break;
                    case 'danhmucsp3':
                        $sp=loadall_hang_hoa($keyw="",$id_danhmuc=3);
                        include "khachhang/danhmucsp.php";
                        break;
                        case 'danhmucsp4':
                            $sp=loadall_hang_hoa($keyw="",$id_danhmuc=4);
                            include "khachhang/danhmucsp.php";
                            break;
                            case 'danhmucsp5':
                                $sp=loadall_hang_hoa($keyw="",$id_danhmuc=5);
                                include "khachhang/danhmucsp.php";
                                break;

            default:
                include "khachhang/home.php";
                break;
        }
    } else {
        include "khachhang/home.php";
    }
    
    include "khachhang/footer.php";
?>