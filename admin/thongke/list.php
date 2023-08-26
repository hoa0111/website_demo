<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .table table tr td {
        border-bottom: 1px solid #ccc;
    }
</style>
<body>
    <section style="margin-left:80px; margin-right:80px;" class="home">
        <h1 style="color:green; text-align:center;"  class="heading">Thống Kê Danh Mục</h1><br><br>
        <div class="table">
            <table style="width:100%;">
                <tr style="color:#fff; background-color:#036200;">
                    <th style="padding:10px;">Mã DM</th>
                    <th>Tên DM</th>
                    <th>Số Lượng</th>
                    <th>Giá+</th>
                    <th>Giá-</th>
                    <th>Giá TBinh</th>
                </tr>
                <?php
                    foreach ($listthongke as $thongke){
                        extract($thongke);
                        echo '
                         <tr style="text-align: center; border-bottom:1px solid #ccc;">
                            <td style="padding:10px;">'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.number_format($maxprice,0, ',', '.').'VND</td>
                            <td>'.number_format($minprice,0, ',', '.').'VND</td>
                            <td>'.number_format($avgprice,0, ',', '.').'VND</td>
                        </tr>';
                    }
                ?>
            </table>
        </div>
            
            <div class="btn">
                <a style="padding:8px; background-color:green;" href="index.php?act=bieudo">Biểu đồ</a>
            </div>
    
</section>
</body>
</html>