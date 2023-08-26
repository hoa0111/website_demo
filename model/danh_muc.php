<?php

    function insert_danh_muc($ten_danhmuc){
        $sql="insert into danh_muc(ten_danhmuc) values('$ten_danhmuc')";
        pdo_execute($sql);
    }

    function delete_danh_muc($id_danhmuc){
        $sql="delete from danh_muc where id_danhmuc=".$id_danhmuc;
        pdo_execute($sql);
    }

    function loadall_danh_muc(){
        $sql="select * from danh_muc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }

    function loadone_danh_muc($id_danhmuc){
        $sql="select * from danh_muc where id_danhmuc=".$id_danhmuc;
        $dm=pdo_query_one($sql);
        return $dm;
    }

    function update_danh_muc($id_danhmuc,$ten_danhmuc){
        $sql="update danh_muc set ten_danhmuc='".$ten_danhmuc."' where id_danhmuc=".$id_danhmuc;
        pdo_execute($sql);
    }

?>