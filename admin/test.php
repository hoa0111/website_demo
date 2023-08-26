<?php
    // Tài Khoản
            // case 'dskh':
            //     $listtaikhoan=loadall_taikhoan();
            //     include "taikhoan/list.php";
            //     break;
            // case 'suatk':
            //     if(isset($_GET['id']) && ($_GET['id']>0)){
            //         $tk=loadone_taikhoan($_GET['id']);
            //     }
            //     include "taikhoan/update.php";
            //     break;

            // case 'updatetk':
            //     if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
            //         $id=$_POST['id'];
            //         $name=$_POST['name'];
            //         $email=$_POST['email'];
            //         $user=$_POST['user'];
            //         $password=$_POST['password'];
            //         $diachi=$_POST['diachi'];
            //         $sdt=$_POST['sdt'];
            //         $role=$_POST['role'];
            //         update_taikhoan($id,$name,$email,$user,$password,$diachi,$sdt,$role);
            //         $thongbao="cập nhật thành công";
            //     }
            //     $listtaikhoan=loadall_taikhoan();
            //     include "taikhoan/list.php";
            //     break;
            // case 'xoatk':
            //     if(isset($_GET['id']) && ($_GET['id']>0)){
            //         delete_taikhoan($_GET['id']);
            //     }
            //     $listtaikhoan=loadall_taikhoan();
            //     include "taikhoan/list.php";
            //     break;
            
            // Bình luận 
            // case 'dsbl':
            //     $listbinhluan=loadall_binhluan();
            //     include "binhluan/list.php";
            //     break;
            // case 'xoabl':
            //     if(isset($_GET['id']) && ($_GET['id']>0)){
            //         delete_binhluan($_GET['id']);
            //     }
            //     $listbinhluan=loadall_binhluan();
            //     include "binhluan/list.php";
            //     break;
            
            // Đơn hàng
            // case 'dsdh':
            //     if(isset($_POST['keyw']) && ($_POST['keyw']!="")){
            //         $keyw=$_POST['keyw'];
            //     } else{
            //         $keyw="";
            //     }
            //     $listbill=loadall_bill_admin($keyw,0);
            //     include "bill/list.php";
            //     break;
            // case 'suadh':
            //     if(isset($_GET['id']) && ($_GET['id']>0)){
            //         $bill=loadone_bill($_GET['id']);
            //     }
            //     include "bill/update.php";
            //     break;

            // case 'updatedh':
            //     if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
            //         $id=$_POST['id'];
            //         $status=$_POST['status'];
            //         update_bill($id,$status);
            //         $thongbao="cập nhật thành công";
            //     }
            //     $listbill= loadall_bill_admin(0);
            //     include "bill/list.php";
            //     break;

            // case 'xoadh':
            //     if(isset($_GET['id']) && ($_GET['id']>0)){
            //         delete_bill($_GET['id']);
            //     }
            //     $listbill= loadall_bill_admin(0);
            //     include "bill/list.php";
            //     break;
            
            // Thống Kê
            // case 'thongke':
            //     $listthongke=loadall_thongke();
            //     include "thongke/list.php";
            //     break;
            // case 'bieudo':
            //     $listthongke=loadall_thongke();
            //     include "thongke/bieudo.php";
            //     break;
            // default:
            //     include "home.php";
            //     break;
?>