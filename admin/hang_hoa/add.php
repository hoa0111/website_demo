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
    form {
        margin: 0 200px;
    }
    form > input {
        padding: 10px;
        width: 100%;
        border-radius: 10px;
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
        <h1 class="heading">Thêm sản phẩm</h1>
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
    
            <span>Danh mục</span><br><br>
            <select style="width:100%; padding:10px;border-radius: 10px;" name="id_danhmuc" id=""><br><br>    
                
                <?php
                    foreach ($listdanhmuc as $danh_muc) {
                        extract($danh_muc);
                        echo '
                             <option value="'.$id_danhmuc.'">'.$ten_danhmuc.'</option>
                        ';
                    }
                ?>
            </select>
            
            <br><br>        
            <span>Tên sản phẩm</span><br><br>
            <input type="text" name="ten_hh" required>
            <br><br>
            <span>Giá</span><br><br>
            <input type="text" name="don_gia" required>
            <br><br>
            <span>Số lượng</span><br><br>
            <input type="number" name="so_luong" required>
            <br><br>
            <span>Hình ảnh</span><br><br>
            <input type="file" name="hinh_anh" required>
            <br><br>
            <span>Ngày nhập</span><br><br>
            <input type="date" name="ngay_nhap" required>
            <br><br>
            <span>Mô tả</span><br><br>
            <textarea style="width:100%; border-radius:10px; padding:10px;" name="mo_ta" cols="30" rows="10"></textarea><br><br>
            <div class="btn">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" value="Reset">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a> 
            </div>
            <br>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </section>
</body>
</html>