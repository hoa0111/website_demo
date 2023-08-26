<?php
    // require "pdo.php";
    function insert_khach_hang($ho_ten,$email,$ten_dn,$mat_khau,$diachi,$sdt){
        $sql="insert into khach_hang(ho_ten,email,ten_dn,mat_khau,diachi,sdt) values('$ho_ten','$email','$ten_dn','$mat_khau','$diachi','$sdt')";
        pdo_execute($sql);
    }

    function formatString($ho_ten){
        $ho_ten = trim($ho_ten);
        $ho_ten = strtolower($ho_ten);
        $ho_ten = ucwords($ho_ten);
        return $ho_ten;
    }

    function checkuser($ten_dn,$mat_khau){
        $sql="select * from khach_hang where ten_dn='".$ten_dn."' AND mat_khau='".$mat_khau."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function update_khach_hang($ma_kh,$ho_ten,$email,$ten_dn,$mat_khau,$diachi,$sdt,$role){
        $sql="update khach_hang set ho_ten='".$ho_ten."', email='".$email."', ten_dn='".$ten_dn."', mat_khau='".$mat_khau."', diachi='".$diachi."', sdt='".$sdt."', role='".$role."' where ma_kh=".$ma_kh;
        pdo_execute($sql);
    }

    function checkemail($email){
        $sql="select * from khach_hang where email='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function loadall_khach_hang(){
        $sql="select * from khach_hang order by ma_kh desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }

    function loadone_khach_hang($ma_kh){
        $sql="select * from khach_hang where ma_kh=".$ma_kh;
        $tk=pdo_query_one($sql);
        return $tk;
    }

    function delete_khach_hang($ma_kh){
        $sql="delete from khach_hang where ma_kh=".$ma_kh;
        pdo_execute($sql);
    }

    function khach_hang_selectall(){
        $sql= "select * from khach_hang";
        return pdo_query($sql);
    }
?>