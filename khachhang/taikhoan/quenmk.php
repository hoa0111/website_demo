<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        /* margin-left: 40px; */
        padding-bottom: 20px;
    }
    form input {
        /* margin-left: 60px; */
        padding: 8px;
        width: 40%;
    }
    .btn-3  {
        width: 10% !important;
        margin-left: 50px;
    }
    span {
        font-weight: bold;
    }

    .btn-3:hover {
        background-color: #05af05a6;
        cursor: pointer;
    }   
</style>
<body>
    <section class="product">
        <div class="form-dangki">
            <h2 class="heading" style="font-weight: bold; color:green;">Quên mật khẩu</h2>
            <form action="log.php?act=quenmk" method="post" style="">
                <span>Email:</span>
                <input type="email" name="email" style="margin: 1rem 0; border:1px solid #ccc">
                <div>
                    <input type="submit" value="Gửi" name="guiemail" class="btn-3" style="border:1px solid #ccc; color:#000;">
                    <input type="reset" value="Nhập lại" class="btn-3" style="border:1px solid #ccc; color:#000;  margin-left:1rem;">
                </div>
    
            </form>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </div>
    
    </section>
</body>
</html>