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
        <h1 style="color:green; text-align:center;"  class="heading">Thống Kê Khách Hàng</h1><br><br>
        <div class="table">
            <table style="width:100%;">
                <tr style="color:#fff; background-color:#036200;">
                    <th style="padding:10px;">Mã KH</th>
                    <th>Tên khách hàng</th>
                    <th>Số Lượng</th>
                    <th>Giá+</th>
                    <th>Giá-</th>
                    <th>Giá TBinh</th>
                </tr>
                <?php
                    foreach ($listthongkekh as $thongkekh){
                        extract($thongkekh);
                        echo '
                         <tr style="text-align: center; border-bottom:1px solid #ccc;">
                         <td style="padding:10px;">'.$makh.'</td>
                            <td>'.$tenkh.'</td>
                            <td>'.$countcart.'</td>
                            <td>'.number_format($maxcart,0, ',', '.').'VND</td>
                            <td>'.number_format($mincart,0, ',', '.').'VND</td>
                            <td>'.number_format($avgcart,0, ',', '.').'VND</td>
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