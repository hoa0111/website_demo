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
    .home {
        margin: 0 100px;
    }
    form {
    }
    form input, form select {
        width: 100%;
        padding: 10px;
        border-radius: 10px;
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
    .btn input:hover {
        background-color: #05af05a6;
        cursor: pointer;
        
    }
</style>
<body>
    <section class="home">
        <h1 class="heading">Danh sách sản phẩm</h1><br><br>
        
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="keyw"><br>
            <select name="id_danhmuc" id=""><br>
                <option value="0" selected>Danh mục</option>
                <?php
                    foreach ($listdanhmuc as $danh_muc) {
                        extract($danh_muc);
                        echo '
                            <option value="'.$id_danhmuc.'">'.$ten_danhmuc.'</option>
                        ';
                    }
                ?>
            </select><br>
            <input type="submit" name="timsp" value="Tìm kiếm">
        </form>
        <br>
        <div class="table">
            <table>
                <tr class="header">
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Hình Ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Ngày nhập</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                    foreach ($listhang_hoa as $hang_hoa){
                        extract($hang_hoa);
                        $suasp="index.php?act=suasp&ma_hh=".$ma_hh;
                        $xoasp="index.php?act=xoasp&ma_hh=".$ma_hh;
                        $suasl="index.php?act=updatesl&ma_hh=".$ma_hh;
                        $hinhpath="../upload/".$hinh_anh;
                        if(is_file($hinhpath)){
                            $hinh_anh="<img src='".$hinhpath."' height='80'>";
                        } else{
                            $hinh_anh="no photo";
                        }
                        echo '
                         <tr>
                            <td><input type="checkbox" name="name[]" id=""></td>
                            <td style="width:10%;">'.$ma_hh.'</td>
                            <td style="width:25%;">'.$ten_hh.'</td>
                            <td style="width:20%;">'.$hinh_anh.'</td>
                            <td style="width:15%;">'.$don_gia.'</td>
                            <td style="width:10%;">'.$so_luong.'</td>
                            <td style="width:10%;">'.$ngay_nhap.'</td>
                            <td style="width:10%;">
                                <a style="background-color: blue;" href="'.$suasp.'">Sửa</a>
                                <a style="background-color: red;" href="'.$xoasp.'">Xóa</a>
                            </td>
                        </tr>';
                    }
                ?>
            </table>
        </div>
        <br>    
            <div class="btn">
                <input type="button" id="btn1" value="Chọn tất cả">
                <input type="button" id="btn2" value="Bỏ tất cả">
                <!-- <input type="button" value="Bỏ mục đã chọn"> -->
                <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a> 
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