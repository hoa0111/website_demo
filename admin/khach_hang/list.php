<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1 {
        text-align: center;
        color: green;
    }
    .home {
        margin: 0 100px;
    }
    .table table .header {
        /* border: 1px solid #000; */
    }
    .table table .header th{
        background-color: #036200;
        padding: 10px;
        color: #fff;

    }
    .table table {
        width: 100%;
    }
    .table table tr td {
        text-align: left;
        padding-left: 12px;
        padding-right: 12px;
        border-bottom: 1px solid #ccc;
    }
    /* .table table tr td {
        border-right: 1px solid #ccc;
        border-left: 1px solid #ccc;
    } */
    .btn input {
        padding: 10px 16px;
        border-radius: 10px;

    }
    td > .btn {
        background-color: red;
    }
    .btn input:hover {
        background-color: #05af05a6;
        cursor: pointer;
        
    }
</style>
<body>
    <section class="home">
        <h1 class="heading">Danh sách tài khoản</h1>
        <div class="title"></div>
        <div class="table">
            <table>
                <tr class="header">
                    <th></th>
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Email</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Địa chỉ</th>
                    <th>SĐT</th>
                    <th>Role</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                    foreach ($listkhach_hang as $khach_hang){
                        extract($khach_hang);
                        $suatk="index.php?act=suatk&ma_kh=".$ma_kh;
                        $xoatk="index.php?act=xoatk&ma_kh=".$ma_kh;
                        echo '
                         <tr>
                            <td style="width:3%;"><input type="checkbox" name="name[]" id=""></td>
                            <td style="width:7%;">'.$ma_kh.'</td>
                            <td style="width:22%;">'.$ho_ten.'</td>
                            <td style="width:25%;">'.$email.'</td>
                            <td style="width:7%;">'.$ten_dn.'</td>
                            <td style="width:8%;">'.$mat_khau.'</td>
                            <td style="width:10%;">'.$diachi.'</td>
                            <td style="width:8%;">'.$sdt.'</td>
                            <td style="width:5%;">'.$role.'</td>
                            <td style="width:10%; text-align:center;">
                            
                                <a style="background-color: blue;" href="'.$suatk.'" class="btn">Sửa</a>
                                <a href="'.$xoatk.'" class="btn">Xóa</a>
                            </td>
                        </tr>';
                    }
                ?>
            </table>
        </div>
            
            <div class="btn">
                <input type="button" id="btn1" value="Chọn tất cả">
                <input type="button" id="btn2" value="Bỏ tất cả">
                <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a> 
            </div>
    
</section>
    <script language="javascript">

        // Chức năng chọn hết
        document.getElementById("btn1").onclick = function () 
        {
            // Lấy danh sách checkbox
            var checkboxes = document.getElementsByName('name[]');

            // Lặp và thiết lập checked
            for (var i = 0; i < checkboxes.length; i++){
                checkboxes[i].checked = true;
            }
        };

        // Chức năng bỏ chọn hết
        document.getElementById("btn2").onclick = function () 
        {
            // Lấy danh sách checkbox
            var checkboxes = document.getElementsByName('name[]');

            // Lặp và thiết lập Uncheck
            for (var i = 0; i < checkboxes.length; i++){
                checkboxes[i].checked = false;
            }
        };

    </script>
</body>
</html>