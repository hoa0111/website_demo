<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
    <?php
    session_start();
    // include "model/pdo.php";
    include "model/taikhoan.php";
    include "khachhang/header.php";
    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case 'dangki':
                if (isset($_POST['dangki']) && ($_POST['dangki'])) {
                    $ho_ten=formatString($_POST['ho_ten']);
                    $email = trim(strip_tags($_POST['email']));
                    $ten_dn = trim(strip_tags($_POST['ten_dn']));
                    $mat_khau = trim(strip_tags($_POST['mat_khau']));
                    $diachi = trim(strip_tags($_POST['diachi']));
                    $sdt = trim(strip_tags($_POST['sdt']));
                    insert_khach_hang($ho_ten, $email, $ten_dn, $mat_khau, $diachi, $sdt);
                    $thongbao = "Bạn đã đăng kí thành công. Vui lòng đăng nhập để tiếp tục.";   
                }
                include "khachhang/taikhoan/dangki.php";
                break;
            case 'dangnhap':
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                    $ten_dn = trim(strip_tags($_POST['ten_dn']));
                    $mat_khau = trim(strip_tags($_POST['mat_khau']));
                    $checkuser = checkuser($ten_dn, $mat_khau);
                    if (is_array($checkuser)) {
                        $_SESSION['ten_dn'] = $checkuser;
                        header('Location: index.php');
                        setcookie("ten_dn", $ten_dn, time() + 3600 * 24 * 7);
                        setcookie("mat_khau", $mat_khau, time() + 3600 * 24 * 7);
                    } else {
                        $thongbao = "Tài Khoản Không Tồn Tại.Vui lòng kiểm tra lại hoặc đăng ký!!";
                    }
                }
                include "khachhang/taikhoan/dangki.php";
                break;
            case 'edit_taikhoan':
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $ho_ten=formatString($_POST['ho_ten']);
                    $email = trim(strip_tags($_POST['email']));
                    // $ten_dn = trim(strip_tags($_POST['ten_dn']));
                    $mat_khau = trim(strip_tags($_POST['mat_khau']));
                    $diachi = trim(strip_tags($_POST['diachi']));
                    $sdt = trim(strip_tags($_POST['sdt']));
                    $role = trim(strip_tags($_POST['role']));
                    // $ma_kh = $_POST['ma_kh'];

                    update_khach_hang($ma_kh, $ho_ten, $email, $ten_dn, $mat_khau, $diachi, $sdt, $role);
                    $_SESSION['ten_dn'] = checkuser($ten_dn, $mat_khau);
                    // header('Location: index.php?act=edit_taikhoan');
                }
                include "khachhang/taikhoan/edit_taikhoan.php";
                break;
    
            case 'quenmk':
                if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
    
                    // $email = trim(strip_tags($_POST['email']));
                    $email = $_POST['email'];
    
                    $checkemail = checkemail($email);
                    if (is_array($checkemail)) {
                        $thongbao = "Mật khẩu của bạn là:  " . $checkemail['mat_khau'];
                    } else {
                        $thongbao = "Email không tồn tại!!!";
                    }
                }
                include "khachhang/taikhoan/quenmk.php";
                break;
            case 'dangxuat':
                session_unset();
                header('Location: index.php');
                break;
            default:
                include "khachhang/header.php";
                break;
        }
    }
?>
</body>
</html>