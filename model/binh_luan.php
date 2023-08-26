<?php

    function insert_binh_luan_ma_kh($ho_ten,$noi_dung,$ma_kh,$ma_hh,$ngay_bl){
        $sql="insert into binh_luan(ho_ten,noi_dung,ma_kh,ma_hh,ngay_bl) values('$ho_ten','$noi_dung','$ma_kh','$ma_hh','$ngay_bl')";
        pdo_execute($sql);
    }

    function insert_binh_luan($ho_ten,$noi_dung,$ma_kh,$ngay_bl){
        $sql="insert into binh_luan(ho_ten,noi_dung,ma_kh,ngay_bl) values('$ho_ten','$noi_dung','$ma_kh','$ngay_bl')";
        pdo_execute($sql);
    }

    function loadall_binh_luan_ma_kh($ma_kh){
        $sql="select * from binh_luan where ma_kh='".$ma_kh."' order by ma_bl desc";
        $listbinh_luan=pdo_query($sql);
        return $listbinh_luan;
    }

    function loadall_binh_luan(){
        $sql="select * from binh_luan order by ma_bl desc";
        $listbinh_luan=pdo_query($sql);
        return $listbinh_luan;
    }

    function delete_binh_luan($ma_bl){
        $sql="delete from binh_luan where ma_bl=".$ma_bl;
        pdo_execute($sql);
    }

?>