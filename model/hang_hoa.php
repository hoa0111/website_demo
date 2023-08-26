<?php
    // Thêm hàng hóa
    function insert_hang_hoa($id_danhmuc,$ten_hh,$don_gia,$so_luong,$hinh_anh,$ngay_nhap,$mo_ta){
        $sql="insert into hang_hoa(id_danhmuc,ten_hh,don_gia,so_luong,hinh_anh,ngay_nhap,mo_ta) values('$id_danhmuc','$ten_hh','$don_gia','$so_luong','$hinh_anh','$ngay_nhap','$mo_ta')";
        pdo_execute($sql);
    }

    // Xóa hàng hóa
    function delete_hang_hoa($ma_hh){
        // Xóa theo mã hàng hóa
        $sql="delete from hang_hoa where ma_hh=".$ma_hh;
        pdo_execute($sql);
    }

    // Load tất cả hàng hóa (trong trang admin)
    function loadall_hang_hoa($keyw="",$id_danhmuc=0){

        $sql="select * from hang_hoa where 1";
        if($keyw!=""){
            $sql.=" and ten_hh like '%".$keyw."%'";
        }

        if($id_danhmuc>0){
            $sql.=" and id_danhmuc='".$id_danhmuc."'";
        }

        $sql.=" order by ma_hh desc";
        $listhang_hoa=pdo_query($sql);
        return $listhang_hoa;
    }

    // Load tất cả hàng hóa (trong trang chủ)
    function loadall_hang_hoa_home(){
        // Chọn tất cả cột từ bảng hang_hoa và xếp sản phẩm có mã hàng hóa theo thứ tự giảm dần
        $sql="select * from hang_hoa where 1 order by ma_hh desc limit 0,16";
        $listhang_hoa=pdo_query($sql);
        return $listhang_hoa;
    }

    // Load top 4 hàng hóa có lượt xem cao nhất
    function loadall_hang_hoa_top10(){
        // Chọn tất cả cột từ bảng hang_hoa và xếp top 4 sản phẩm có lượt xem cao nhất theo thứ tự giảm dần
        $sql="select * from hang_hoa where 1 order by luotxem desc limit 0,4"; 
        $listhang_hoa=pdo_query($sql);
        return $listhang_hoa;
    }

    // Load 1 loại hàng hóa (làm trong chi tiết sản phẩm)
    function loadone_hang_hoa($ma_hh){
        $sql="select * from hang_hoa where ma_hh=".$ma_hh;
        $sp=pdo_query_one($sql);
        return $sp;
    }

    // Load tất cả tên danh mục sản phẩm (trong trang admin)
    function loadten_dm($id_danhmuc){
        if($id_danhmuc>0){
            // Nếu id_danhmuc > 0 thì sẽ chọn bảng danh mục và lấy id_danhmuc ra
            $sql="select * from danhmuc where id_danhmuc=".$id_danhmuc;
            $dm=pdo_query_one($sql);
            extract($dm);
            return $name;
        } else {
            // Ngược lại thì rỗng
            return "";
        };
        
    }

    // Load các hàng hóa có cùng danh mục (trang chi tiết sản phẩm)
    function load_hang_hoa_cungloai($ma_hh,$id_danhmuc){
        // Chọn bảng hang_hoa có id_danhmuc =  id_danhmuc và kiếm tra ma_hh nếu bằng nhau thì điều kiện là true
        $sql="select * from hang_hoa where id_danhmuc=".$id_danhmuc." AND ma_hh <> ".$ma_hh;
        $listhang_hoa=pdo_query($sql);
        return $listhang_hoa;
    }

    // Chỉnh sửa hàng hóa (trong trang admin)
    function update_hang_hoa($ten_hh, $don_gia, $so_luong, $hinh_anh, $mo_ta, $id_danhmuc, $ma_hh){
        if($hinh_anh!=""){
            $sql="update hang_hoa set id_danhmuc='" .$id_danhmuc. "', ten_hh='" .$ten_hh. "', don_gia='" .$don_gia. "', so_luong='" .$so_luong. "', mo_ta='" .$mo_ta. "', hinh_anh='" .$hinh_anh. "' where ma_hh=".$ma_hh;
        } else {
            $sql="update hang_hoa set id_danhmuc='" .$id_danhmuc. "', ten_hh='" .$ten_hh. "', don_gia='" .$don_gia. "', so_luong='" .$so_luong. "', mo_ta='" .$mo_ta. "' where ma_hh=".$ma_hh;
        }
        pdo_execute($sql);
    }


    function hang_hoa_select_new($ma_hh,$so_luong){
        $sql = "update hang_hoa set so_luong=? where ma_hh=?";
        pdo_execute($sql,$so_luong,$ma_hh);
    }

    // function so_luong_chi_tiet()

?>