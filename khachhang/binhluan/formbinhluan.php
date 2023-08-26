<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binh_luan.php";
    // $ma_hh=$_REQUEST['ma_hh'];
    $dsbl=loadall_binh_luan();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .box-binhluan {
        margin-left: 100px;
        margin-right: 100px;
    }
    table {
        width: 100%;
    }
    table .header {
        border-bottom: 1px dashed #ccc;
    }
    table tr td, table tr th{
        padding: 8px;
    }
    .box form{
        margin-left:0px;
    }
</style>
<body>
<div class="box-binhluan">
            <div class="box">
                <h1 class="heading-2">-Bình Luận</h1><br>
                <table>
                    <tr class="header">
                        <th>Tên</th>
                        <th>Nội dung</th>
                        <th>Mã khách hàng</th>
                        <!-- <th>ID Pro</th> -->
                        <th>Ngày bình luận</th>
                    <tr>
                    <?php
                    // include "timeago.php";
                        foreach ($dsbl as $bl) {
                            extract($bl);
                            echo'<tr><td style="width:25%;">'.$ho_ten.'</td>';
                            echo'<td style="width:40%;" class="noidung">'.$noi_dung.'</td>';
                            // echo'<td>'.$ma_hh.'</td>';
                            echo'<td style="width:15%;">'.$ma_kh.'</td>';
                            echo'<td style="width:20%;">'.$ngay_bl.'</td><tr>';
                        }
                    ?>
                </table>
            </div>
            <br>        
            <div class="box">
                <form action="khachhang/binhluan/formbinhluan.php" method="post">
                <h3>Gửi bình luận tại đây</h3>
                    <input type="hidden" name="ma_hh" value="<?=$ma_hh?>">
                    <input style="width:30%; padding:4px 12px;" type="text" name="noi_dung" required>
                    <input style="background-color: green; color: #fff; border-radius: 3px;" type="submit" name="guibl" value="Gửi" class="btn">
                </form>
            </div>
        <?php
            if(isset($_POST['guibl']) && ($_POST['guibl'])){
                if (isset($_SESSION['ten_dn']) && (is_array($_SESSION['ten_dn']))) {
                    extract($_SESSION['ten_dn']);
                    $ho_ten=$_SESSION['ten_dn']['ho_ten'];
                    $noi_dung= trim(strip_tags($_POST['noi_dung']));
                    // $ma_hh= trim(strip_tags($_POST['ma_hh']));  
                    $ma_kh= $_SESSION['ten_dn']['ma_kh'];
                    $ngay_bl=date("d-m-Y");
                    insert_binh_luan($ho_ten,$noi_dung,$ma_kh,$ngay_bl);
                    header("Location: ".$_SERVER['HTTP_REFERER']);
                }else {
                    echo "Vui lòng <a href='../../log.php'>đăng nhập</a> để sử dụng tính năng này!!!";
                }
            }
        ?>
</div>
</body>
</html>