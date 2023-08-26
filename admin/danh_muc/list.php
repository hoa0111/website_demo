<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    h1 {
        text-align: center;
        color: green;
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
    .home {
        margin: 0 100px;
    }
    td a {
        padding: 8px 12px;
        /* background-color: green; */
        color: #fff;
    }
    .btn input {
        padding: 10px 16px;
        border-radius: 10px;

    }
    .btn input:hover {
        background-color: #05af05a6;
        cursor: pointer;
        
    }
</style>
<body>
    <section class="home">
        <h1 class="heading">Danh sách</h1><br>
        <div class="table">
            <table>
                <tr class="header">
                    <th></th>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Thao Tác</th>
                </tr>
                <?php
                    foreach ($listdanhmuc as $danh_muc){
                        extract($danh_muc);
                        $suadm="index.php?act=suadm&id_danhmuc=".$id_danhmuc;
                        $xoadm="index.php?act=xoadm&id_danhmuc=".$id_danhmuc;
                        echo '
                         <tr>
                            <td style="width:5%;"><input type="checkbox" name="" id=""></td>
                            <td style="width:20%;">'.$id_danhmuc.'</td>
                            <td style="width:50%; text-align:left; padding-left:40px;">'.$ten_danhmuc.'</td>
                            <td style="width:25%;">
                                <a style="background-color: blue;" href="'.$suadm.'" class="btn">Sửa</a>
                                <a style="background-color: red;" href="'.$xoadm.'" class="btn">Xóa</a>
                            </td>
                        </tr>';
                    }
                ?>
            </table>
        </div>
            <br>
            <div class="btn">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ tất cả">
                <input type="button" value="Bỏ mục đã chọn">
                <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a> 
            </div>
    
</section>
</body>
</html>