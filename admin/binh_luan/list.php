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
        text-align: center;
        border-bottom: 1px solid #ccc;
    }
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
        <h1 class="heading">Danh sách bình luận</h1>
        <div class="table">
            <table>
                <tr class="header">
                    <th></th>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Nội Dung</th>
                    <th>Mã khách hàng</th>
                    <!-- <th>Mã hàng hóa</th> -->
                    <th>Ngày bình luận</th>
                    <th></th>
                </tr>
                <?php
                    foreach ($listbinh_luan as $binh_luan){
                        extract($binh_luan);
                        $xoabl="index.php?act=xoabl&ma_bl=".$ma_bl;
                        echo '
                         <tr>
                            <td style="width:4%;"><input type="checkbox" name="name[]" id=""></td>
                            <td style="width:4%;">'.$ma_bl.'</td>
                            <td style="width:17%;">'.$ho_ten.'</td>
                            <td style="width:35%; text-align:left; padding-left:12px; padding-right:12px;">'.$noi_dung.'</td>
                            <td style="width:13%;">'.$ma_kh.'</td>
                            <td style="width:13%;">'.$ngay_bl.'</td>
                            <td style="width:5%;">
                                <a href="'.$xoabl.'" class="btn">Xóa</a>
                            </td>
                        </tr>';
                    }
                ?>
            </table>
        </div>
            
            <div class="btn">
                <input type="button" id="btn1" value="Chọn tất cả">
                <input type="button" id="btn2" value="Bỏ tất cả">
                <!-- <input type="button" value="Bỏ mục đã chọn"> -->
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