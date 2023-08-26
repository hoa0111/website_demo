<?php

    if(is_array($bill)){
        extract($bill);
    }

?>

<section class="home">
        <h1 class="heading">Cập nhập đơn hàng</h1>
        <form action="index.php?act=updatedh" method="post">
        <span>ID Đơn Hàng</span>
        <input type="text" name="idbill" disabled value="DON-<?=$bill['idbill']?>">

        <span>Trạng Thái Đơn Hàng</span>
        <select name="status" >
            <option value="0">Đơn hàng mới</option>
            <option value="1">Đang xử lí</option>
            <option value="2">Đang giao hàng</option>
            <option value="3">Đã giao hàng</option>
        </select>
            <div class="btn">
                <input type="hidden" name="idbill" value="<?php if(isset($idbill) && ($idbill>0)) echo $idbill?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Reset">
                <a href="index.php?act=dsdh"><input type="button" value="Danh sách"></a> 
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </section>