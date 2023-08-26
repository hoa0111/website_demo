-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 26, 2023 lúc 04:46 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fouru`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `idbill` int(10) NOT NULL,
  `ma_kh` int(10) DEFAULT 0,
  `bill_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_sdt` int(15) NOT NULL,
  `bill_tt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán khi nhận hàng\r\n2.Thanh toán online\r\n3. Chuyển khoản',
  `ngaydathang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0. Đơn hàng mới\r\n1. Đang xử lí\r\n2. Đang giao hàng\r\n3. Đã giao hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`idbill`, `ma_kh`, `bill_name`, `bill_email`, `bill_diachi`, `bill_sdt`, `bill_tt`, `ngaydathang`, `total`, `bill_status`) VALUES
(84, 9, 'Four U', 'fouru@fpt.edu.vn', 'quận 12', 123456789, 0, '2022/11/29', 580000, 0),
(91, 9, 'Four U', 'fouru@fpt.edu.vn', 'quận 12', 123456789, 0, '2022/11/29', 1445000, 2),
(93, 9, 'Four U', 'fouru@fpt.edu.vn', 'quận 12', 123456789, 0, '2022/8/29', 222000, 2),
(95, 9, 'Four U', 'fouru@fpt.edu.vn', 'quận 12', 123456789, 0, '2022/11/29', 189000, 2),
(98, 9, 'Four U', 'fouru@fpt.edu.vn', 'quận 12', 123456789, 0, '2022/11/26', 111000, 0),
(99, 9, 'Four U', 'fouru@fpt.edu.vn', 'quận 12', 123456789, 0, '2022/11/26', 179000, 0),
(100, 9, 'Four U', 'fouru@fpt.edu.vn', 'quận 12', 123456789, 0, '2022/11/26', 139000, 2),
(101, 9, 'Four U', 'fouru@fpt.edu.vn', 'quận 12', 123456789, 0, '2022/11/26', 166000, 0),
(124, 9, 'Four U', 'fouru@fpt.edu.vn', 'quận 12', 123456789, 0, '2022/12/01', 189000, 2),
(125, 7, 'Nguyễn Minh Quân', 'quannminh1603@gmail.com', 'quận 12', 123456789, 0, '2022/12/01', 179000, 0),
(126, 7, 'Nguyễn Minh Quân', 'quannminh1603@gmail.com', 'quận 12', 123456789, 0, '2022/12/01', 145000, 0),
(127, 7, 'Nguyễn Minh Quân', 'quannminh1603@gmail.com', 'quận 12', 123456789, 0, '2022/12/01', 155000, 0),
(128, 7, 'Nguyễn Minh Quân', 'quannminh1603@gmail.com', 'quận 12', 123456789, 0, '2022/12/01', 716000, 0),
(129, 7, 'Nguyễn Minh Quân', 'quannminh1603@gmail.com', 'quận 12', 123456789, 0, '2022/12/01', 596000, 0),
(130, 8, 'Lê Thị Thúy Anh', 'thuyanh30102003@gmail.com', 'quận 12', 123456789, 0, '2022/12/01', 557000, 2),
(131, 8, 'Lê Thị Thúy Anh', 'thuyanh30102003@gmail.com', 'quận 12', 123456789, 0, '2022/12/01', 325000, 2),
(132, 8, 'Lê Thị Thúy Anh', 'thuyanh30102003@gmail.com', 'quận 12', 123456789, 0, '2022/12/01', 796000, 0),
(133, 8, 'Lê Thị Thúy Anh', 'thuyanh30102003@gmail.com', 'quận 12', 123456789, 0, '2022/12/01', 149000, 2),
(134, 8, 'Lê Thị Thúy Anh', 'thuyanh30102003@gmail.com', 'quận 12', 123456789, 0, '2022/12/01', 716000, 2),
(135, 9, 'Four U', 'fouru@fpt.edu.vn', 'quận 12', 123456789, 0, '2022/12/02', 378000, 2),
(136, 9, 'Four U', 'fouru@fpt.edu.vn', 'quận 12', 123456789, 0, '2022/12/05', 189000, 2),
(137, 11, 'Đinh Thị Kiều Hoa', 'kieuhoa1105vn@gmail.com', 'quận 12', 353661774, 0, '2022/12/15', 477000, 3),
(139, 11, 'Tú Kha', 'khatu44@gmail.com', 'Bình Ân, Gò Công Đông, Tiền Giang', 398463228, 0, '2022/12/15', 875000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ngay_bl` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `ho_ten`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(32, 'Four U', 'admin nè :33', 0, 9, '15-11-2022'),
(34, 'Nguyễn Minh Quân', 'Áo gì đâu mà đẹp quá dzay -.-', 0, 7, '15-11-2022'),
(36, 'Lê Thị Thúy Anh', 'Cute phô mai con bò cườiiiii', 0, 8, '15-11-2022'),
(39, 'Four U', '', 0, 9, '22-11-2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `ma_kh` int(10) NOT NULL,
  `ma_hh` int(10) NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten_hh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` int(10) NOT NULL DEFAULT 0,
  `so_luong` int(10) NOT NULL,
  `thanh_tien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL,
  `cart-date` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `ma_kh`, `ma_hh`, `hinh_anh`, `ten_hh`, `don_gia`, `so_luong`, `thanh_tien`, `idbill`, `cart-date`) VALUES
(42, 9, 15, 'upload/ni.jpg.webp', 'Áo nỉ nam', 145000, 4, 580000, 84, ''),
(43, 9, 11, 'upload/6.jpg', 'Áo nỉ', 289000, 5, 1445000, 91, ''),
(44, 9, 19, 'upload/gap2.png', 'Áo hoodie nữ GAP', 111000, 2, 222000, 93, ''),
(45, 9, 12, 'upload/aohoodiemuadong.png', 'Áo hoodie mùa đông', 189000, 1, 189000, 95, ''),
(46, 9, 19, 'upload/gap2.png', 'Áo hoodie nữ GAP', 111000, 1, 111000, 98, ''),
(47, 9, 2, 'upload/hd1.png', 'Áo hoodie có Zip', 179000, 1, 179000, 99, ''),
(48, 9, 17, 'upload/gap1.png', 'Áo hoodie nữ GAP', 139000, 1, 139000, 100, ''),
(49, 9, 20, 'upload/crop1.png', 'Áo hoodie croptop', 166000, 1, 166000, 101, ''),
(76, 9, 49, 'upload/zipgap1.png', 'Áo hoodie có khóa Zip GAP', 189000, 1, 189000, 124, ''),
(77, 7, 26, 'upload/tron1.png', 'Áo hoodie trơn màu đen', 179000, 1, 179000, 125, ''),
(78, 7, 15, 'upload/ni.jpg.webp', 'Áo nỉ nam', 145000, 1, 145000, 126, ''),
(79, 7, 14, 'upload/ao-khoac-for-winter-den-3_29.jpg', 'Áo nỉ', 155000, 1, 155000, 127, ''),
(80, 7, 39, 'upload/meo1.jpg', 'Áo nỉ nữ basic hình mèo màu đen', 179000, 4, 716000, 128, ''),
(81, 7, 3, 'upload/hd4.png', 'Áo hoodie', 149000, 4, 596000, 129, ''),
(82, 8, 49, 'upload/zipgap1.png', 'Áo hoodie có khóa Zip GAP', 189000, 2, 378000, 130, ''),
(83, 8, 42, 'upload/tre2.jpg', 'Áo hoodie trẻ em hình AMONG US', 179000, 1, 179000, 130, ''),
(84, 8, 8, 'upload/ao-khoac-for-winter-xam-dam-2.jpg', 'Áo nỉ có khóa Zip', 325000, 1, 325000, 131, ''),
(85, 8, 48, 'upload/nam2.png', 'Áo hoodie có khóa Zip nam màu xám', 199000, 4, 796000, 132, ''),
(86, 8, 3, 'upload/hd4.png', 'Áo hoodie', 149000, 1, 149000, 133, ''),
(87, 8, 2, 'upload/hd1.png', 'Áo hoodie có Zip', 179000, 4, 716000, 134, ''),
(88, 9, 44, 'upload/tre4.jpg', 'Áo hoodie trẻ em hình Pikachu', 189000, 1, 189000, 135, ''),
(89, 9, 50, 'upload/namzip2.png', 'Áo hoodie có khóa Zip nam màu trắng', 189000, 1, 189000, 135, ''),
(90, 9, 50, 'upload/namzip2.png', 'Áo hoodie có khóa Zip nam màu trắng', 189000, 1, 189000, 136, ''),
(91, 11, 32, 'upload/nibong2.jpg', 'Áo nỉ nữ cổ tròn loại 2', 139000, 2, 278000, 137, ''),
(92, 11, 48, 'upload/nam2.png', 'Áo hoodie có khóa Zip nam màu xám', 199000, 1, 199000, 137, ''),
(97, 11, 44, 'upload/tre4.jpg', 'Áo hoodie trẻ em hình Pikachu', 189000, 1, 189000, 139, ''),
(98, 11, 43, 'upload/tre3.jpg', 'Áo hoodie trẻ em màu be', 159000, 1, 159000, 139, ''),
(99, 11, 42, 'upload/tre2.jpg', 'Áo hoodie trẻ em hình AMONG US', 179000, 1, 179000, 139, ''),
(100, 11, 41, 'upload/tre1.jpg', 'Áo hoodie trẻ em basic', 159000, 1, 159000, 139, ''),
(101, 11, 45, 'upload/tre5.jpg', 'Áo hoodie trẻ em hình Naruto', 189000, 1, 189000, 139, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(1, 'Áo hoodie'),
(2, 'Áo hoodie có Zip'),
(3, 'Áo nỉ Bacsic'),
(4, 'Áo nỉ họa tiết'),
(5, 'Áo hoodie, áo nỉ theo mùa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `don_gia` int(10) NOT NULL,
  `hinh_anh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_nhap` date DEFAULT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_luong` int(10) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `hinh_anh`, `ngay_nhap`, `mo_ta`, `so_luong`, `luotxem`, `id_danhmuc`) VALUES
(1, 'Áo nỉ basic', 155000, 'ni3.png', '2022-11-08', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 16, 0, 3),
(2, 'Áo hoodie có Zip', 179000, 'hd1.png', '2022-11-08', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 7, 0, 2),
(3, 'Áo hoodie', 149000, 'hd4.png', '2022-11-08', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 4, 0, 1),
(6, 'Áo nỉ có khóa Zip', 139000, 'ni2.png', '2022-11-12', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 10, 0, 4),
(7, 'Áo hoodie có khóa Zip', 249000, '1.png', '2022-11-19', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 12, 0, 2),
(8, 'Áo nỉ có khóa Zip', 325000, 'ao-khoac-for-winter-xam-dam-2.jpg', '2022-11-19', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 6, 0, 4),
(9, 'Áo nỉ lót lông cừu', 199000, 'aonilongcuu.png', '2022-11-19', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 16, 0, 4),
(11, 'Áo nỉ', 289000, '6.jpg', '2022-11-19', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 17, 0, 3),
(12, 'Áo hoodie mùa đông', 189000, 'aohoodiemuadong.png', '2022-11-22', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông.', 20, 0, 5),
(13, 'Áo nỉ đôi', 249000, 'aonimuadong.png', '2022-11-22', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 18, 0, 5),
(14, 'Áo nỉ', 155000, 'ao-khoac-for-winter-den-3_29.jpg', '2022-11-25', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 6, 0, 4),
(15, 'Áo nỉ nam', 145000, 'ni.jpg.webp', '2022-11-25', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 4, 0, 3),
(16, 'Áo hoodie nữ GAP', 189000, 'gap3.png', '2022-11-25', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 5, 0, 1),
(17, 'Áo hoodie nữ GAP', 139000, 'gap1.png', '2022-11-25', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 5, 0, 1),
(18, 'Áo hoodie nữ màu xanh', 169000, '3.png', '2022-11-25', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 6, 0, 1),
(19, 'Áo hoodie nữ GAP', 111000, 'gap2.png', '2022-11-25', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 7, 0, 1),
(20, 'Áo hoodie croptop', 166000, 'crop1.png', '2022-11-25', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 6, 0, 1),
(21, 'Áo hoodie nữ', 129000, 'gapest1.png', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 8, 0, 1),
(22, 'Áo hoodie màu sắc', 189000, 'hdmau.png', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 20, 0, 1),
(23, 'Áo hoodie có khóa Zip màu đen', 229000, 'hdden.png', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 8, 0, 2),
(24, 'Áo hoodie có khóa Zip màu trắng', 249000, 'hoodietrang.png', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 8, 0, 2),
(25, 'Áo hoodie có Zip màu vàng', 179000, 'zipvang.png', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 9, 0, 2),
(26, 'Áo hoodie trơn màu đen', 179000, 'tron1.png', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 8, 0, 1),
(27, 'Áo hoodie trơn màu trắng', 179000, 'tron2.png', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 9, 0, 1),
(28, 'Áo hoodie trơn màu be', 179000, 'tron3.png', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 10, 0, 1),
(29, 'Áo nỉ bông nữ', 119000, 'ni_nu.jpg', '2022-11-28', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 9, 0, 3),
(30, 'Áo nỉ bông nữ màu xám', 119000, 'ni_nu1.jpg', '2022-11-28', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 9, 0, 3),
(31, 'Áo nỉ nữ cổ tròn loại 1', 139000, 'nibong1.jpg', '2022-11-28', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 11, 0, 4),
(32, 'Áo nỉ nữ cổ tròn loại 2', 139000, 'nibong2.jpg', '2022-11-28', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 16, 0, 4),
(33, 'Áo nỉ nữ cổ tròn loại 3', 139000, 'nibong3.jpg', '2022-11-28', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 11, 0, 5),
(34, 'Áo nỉ nữ cổ tròn loại 4', 139000, 'nibong4.jpg', '2022-11-28', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 20, 0, 4),
(35, 'Áo nỉ nữ cổ tròn loại 5', 139000, 'nibong5.jpg', '2022-11-28', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 13, 0, 4),
(36, 'Áo nỉ nữ cổ tròn loại 6', 139000, 'nibong6.jpg', '2022-11-28', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 10, 0, 4),
(37, 'Áo nỉ nữ quàng cổ màu trắng', 189000, 'quang1.jpg', '2022-11-28', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 17, 0, 4),
(38, 'Áo nỉ nữ quàng cổ màu hồng', 189000, 'quang2.jpg', '2022-11-28', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 18, 0, 4),
(39, 'Áo nỉ nữ basic hình mèo màu đen', 179000, 'meo1.jpg', '2022-11-28', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 18, 0, 3),
(40, 'Áo nỉ nữ basic hình mèo màu trắng', 179000, 'meo2.jpg', '2022-11-28', 'Áo sweater là tên gọi của dòng áo cổ tròn, dài tay (tay áo có bo tay thun, bo lưng cũng có bo thun), kiểu mặc chui đầu (không cúc) làm từ chất liệu len, tuy nhiên, thời điểm hiện tại áo sweater có thể được làm với nhiều chất liệu khác nhau như cotton, thun, nỉ,…', 19, 0, 3),
(41, 'Áo hoodie trẻ em basic', 159000, 'tre1.jpg', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 19, 0, 5),
(42, 'Áo hoodie trẻ em hình AMONG US', 179000, 'tre2.jpg', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 19, 0, 5),
(43, 'Áo hoodie trẻ em màu be', 159000, 'tre3.jpg', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 6, 0, 5),
(44, 'Áo hoodie trẻ em hình Pikachu', 189000, 'tre4.jpg', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 8, 0, 5),
(45, 'Áo hoodie trẻ em hình Naruto', 189000, 'tre5.jpg', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 9, 0, 5),
(47, 'Áo hoodie có khóa Zip nam màu đen', 199000, 'nam1.png', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 10, 0, 2),
(48, 'Áo hoodie có khóa Zip nam màu xám', 199000, 'nam2.png', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 10, 0, 2),
(49, 'Áo hoodie có khóa Zip GAP', 189000, 'zipgap1.png', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 11, 0, 2),
(50, 'Áo hoodie có khóa Zip nam màu trắng', 189000, 'namzip2.png', '2022-11-28', 'Áo hoodie là loại áo được thiết kế khá rộng rãi, có mũ, được may bằng chất liệu nỉ, thường có khóa để mặc như một chiếc áo khoác hoặc không khóa như một chiếc áo phông, thường dài đến ngang hông', 11, 0, 2),
(51, 'Áo hoodie', 149000, 'aohoodiemuadong.png', '2022-12-05', 'fkjgd', 6, 0, 1),
(52, 'hoodie', 199000, 'aohoodiemuadong.png', '2022-12-05', 'djdjfhgdf', 7, 0, 1),
(53, 'Áo hoodie', 190000, 'aohoodiemuadong.png', '2022-12-05', 'zsfljhgdj', 16, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` int(11) NOT NULL,
  `ten_dn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(15) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `ten_dn`, `ho_ten`, `mat_khau`, `diachi`, `sdt`, `email`, `role`) VALUES
(7, 'quan123', 'Nguyễn Minh Quân', '12345', 'quận 12', 123456789, 'quannminh1603@gmail.com', 0),
(8, 'thuyanhxinhdep', 'Lê Thị Thúy Anh', '12345', 'quận 12', 123456789, 'thuyanh30102003@gmail.com', 1),
(9, 'fouru', 'Four U', '123', 'quận 12', 123456789, 'fouru@fpt.edu.vn', 1),
(10, 'AnhDuong', 'Dương Nhật Ánh Dương', '030409', 'quận 12', 788123456, 'anhduong@gmail.com', 0),
(11, 'Hoa', 'Đinh Thị Kiều Hoa', '123', 'quận 12', 353661774, 'kieuhoa1105vn@gmail.com', 0),
(13, 'quannguyen123', 'Nguyen        Minh          Quan', '123', 'q12', 123456789, 'quannminh1603@gmail.com', 0),
(14, 'pisces', 'Nguyễn            Minh                 Quân', '123', 'quan 12', 1234567789, 'quannminh1603@gmail.com', 0),
(15, 'quannn123', 'Nguyen               Minh                  Quan', '123', 'q12', 3423111, 'quannminh1603@gmail.com', 0),
(16, 'qquan123', 'Nguyen Minh Quan', '123', '', 0, 'dfrhasj@gmail.com', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`idbill`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_kh` (`ma_kh`),
  ADD KEY `ma_hh` (`ma_hh`),
  ADD KEY `idbill` (`idbill`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `idbill` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
