-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 27, 2023 lúc 02:10 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbh2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dmsanpham`
--

CREATE TABLE `dmsanpham` (
  `id_dm` int(11) NOT NULL,
  `ten_dm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dmsanpham`
--

INSERT INTO `dmsanpham` (`id_dm`, `ten_dm`) VALUES
(1, 'áo'),
(2, 'quần');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `anh_sp` varchar(255) NOT NULL,
  `gia_sp` int(255) NOT NULL,
  `chi_tiet_sp` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sanpham_id`, `id_dm`, `ten_sp`, `anh_sp`, `gia_sp`, `chi_tiet_sp`) VALUES
(1, 1, 'LEVENTS® 2LIP TEE', 'img/png/ao5.png', 450, '+ LEVENTS® 2LIP TEE\r\n\r\nChất liệu: LÌ VEN COMPACT – Phiên bản áo streetwear chất vải thoáng mát, mềm mịn nhưng không bị nhăn hay xù.\r\nKích cỡ: 1/2/3/4\r\n\r\nSản phẩm áo thun thuộc bộ sưu tập Spring/ Summer 2022 của Levents'),
(2, 2, 'LEVENTS® PLAY LOGO SHORTPANT', 'img/png/quan14.png', 400, '+ LEVENTS® PLAY LOGO SHORT\r\n\r\nChất liệu: LÌ VEN FABRIC – Phiên bản chất vải dày dặn, mềm mịn, không bị nhăn.\r\nKích cỡ: 1/2/3/4\r\nSản phẩm thuộc Bộ sưu tập Xuân/ Hè 2022 của Levents'),
(3, 1, 'LEVENTS® 3RD ANNIVERSARY TEE\r\n', 'img/png/ao8.png', 333, 'LEVENTS® 3RD ANNIVERSARY TEE\r\n\r\nChất liệu: Lì ven Original 2.0 – in chất liệu đặc biệt, tag da\r\nKích cỡ: 1/2/3/4\r\n\r\nSản phẩm áo thun thuộc Special Levents 3rd Anniversary của Levents'),
(4, 2, 'LEVENTS® SPACE STRAIGHT PANTS', 'img/png/quan17.png', 400, 'LEVENTS® SPACE STRAIGHT PANTS\r\n\r\nChất liệu: Parachute (Dù)\r\nKích cỡ: 1/2/3/4\r\nSản phẩm thuộc bộ sưu tập Spring/ Summer 2021'),
(5, 1, 'LEVENTS® STRIPE POLO/WHITE', 'img/png/ao10.png', 420, '+ LEVENTS® STRIPE POLO\r\n\r\nChất liệu: LÌ VEN FABRIC\r\nKích cỡ: 1/2/3/4\r\nSản phẩm áo Polo thuộc Bộ sưu tập Xuân/ Hè 2021 của Levents'),
(6, 2, 'LEVENTS® CRAYON JEANS\r\n', 'img/png/quan18.png', 590, '+ LEVENTS® CRAYON JEANS\r\n\r\nChất liệu: Jeans\r\n\r\nKích cỡ: 1/2/3/4\r\n\r\nSản phẩm quần Jeans thuộc Bộ sưu tập Thu/ Đông 2022 của Levents'),
(7, 1, 'LEVENTS® MINI POPULAR POLO', 'img/png/ao12.png', 370, '+ LEVENTS® MINI POPULAR POLO\r\n\r\nChất liệu: LÌ VEN ORIGINAL  –  Phiên bản bề mặt vải không đổ lông mang cảm giác thoáng mát\r\n\r\nKích cỡ: 1/2/3/4\r\n\r\nSản phẩm áo Polo thuộc Bộ sưu tập Xuân/ Hè 2022 của Levents'),
(8, 2, 'LEVENTS® KHAKI PANTS\r\n', 'img/png/quan19.png', 510, '+ LEVENTS® KHAKI PANTS\r\nChất liệu: Khaki\r\nKích cỡ: 1/2/3\r\n\r\nSản phẩm quần Khaki thuộc Bộ sưu tập Thu/ Đông 2022 của Levents'),
(9, 1, 'LEVENTS® STRIPE POLO/BLACK', 'img/png/ao13.png', 420, '+ LEVENTS® STRIPE POLO\r\n\r\nChất liệu: LÌ VEN FABRIC\r\nKích cỡ: 1/2/3/4\r\nSản phẩm áo Polo thuộc Bộ sưu tập Xuân/ Hè 2021 của Levents'),
(10, 2, 'LEVENTS® | POPPOP CARGO PANTS', 'img/png/quan20.png', 575, 'LEVENTS® | POPPOP CARGO PANTS\r\n\r\nChất liệu: Khaki\r\n\r\nKích cỡ: 2/3/4\r\n\r\nSản phẩm thuộc Bộ sưu tập đặc biệt LEVENTS® | POPPOP “Make Poppop Famous” – Dự án kết hợp 2022'),
(11, 2, 'LEVENTS® CRAYON JEANS\r\n', 'img/png/quan21.png', 590, '+ LEVENTS® CRAYON JEANS\r\n\r\nChất liệu: Jeans\r\n\r\nKích cỡ: 1/2/3/4\r\n\r\nSản phẩm quần Jeans thuộc Bộ sưu tập Thu/ Đông 2022 của Levents'),
(12, 1, 'LEVENTS® | POPPOP TOY WASH TEE\r\n', 'img/png/ao22.png', 395, 'LEVENTS® | POPPOP TOY WASH TEE\r\n\r\nChất liệu: LÌ VEN WASH – Decal Kim tuyến<br>Kích cỡ: 1/2/3/4<br>Sản phẩm thuộc Bộ sưu tập đặc biệt LEVENTS® | POPPOP “Make Poppop Famous” – Dự án kết hợp 2022'),
(13, 1, 'LEVENTS® DINOSAUR TEE', 'img/png/ao25.png', 420, '+ LEVENTS® DINOSAUR TEE\r\n\r\nChất liệu: LÌ VEN FABRIC – Phiên bản chất vải dày dặn, mềm mịn, không bị nhăn.\r\nKích cỡ: 1/2/3/4\r\n\r\nSản phẩm áo thun thuộc Bộ sưu tập Thu/ Đông 2022 của Levents'),
(14, 1, 'LEVENTS® GOT THIS TEE\r\n', 'img/png/ao27.png', 390, '+ LEVENTS® GOT THIS TEE\r\n\r\nChất liệu: LÌ VEN ORIGINAL – Phiên bản áo thun của Levents với bề mặt vải không đổ lông mang cảm giác thoáng mát\r\n\r\nKích cỡ: 1/2/3/4'),
(15, 1, 'LEVENTS® DREAM COME TRUE TEE\r\n', 'img/png/ao28.png', 390, 'LEVENTS® DREAM COME TRUE TEE\r\n\r\nChất liệu: Lì ven Original  –  bề mặt vải không đổ lông mang cảm giác thoáng mát\r\nKích cỡ: 1/2/3/4\r\n\r\nSản phẩm thuộc Bộ sưu tập Thu/ Đông 2022 của Levents'),
(16, 1, 'LEVENTS® LEEMEE BOXY TEE', 'img/png/ao29.png', 380, 'LEVENTS® LEEMEE BOXY TEE\r\n\r\nChất  liệu: LÌ VEN ORIGINAL 2.0 – In nổi chi tiết đầu con mèo sau lưng áo\r\n\r\nKích cỡ: 1/2/3/4'),
(17, 1, 'LEVENTS® COLOR TEE\r\n', 'img/png/ao30.png', 395, 'LEVENTS® COLOR TEE\r\n\r\nSản phẩm áo thun nhà Levents được sử dụng chất liệu vải đặc biệt Lì Ven Original 2.0 mang lại cảm giác thoải mái cho người măc. Không chỉ riêng về áo mà tất cả các sản phẩm tại Levents luôn được đầu tư và chăm chút kỹ\r\nKích cỡ: 1/2/3/4'),
(18, 1, 'LEVENTS®SHAPES OF HEART DROP SHOULDER TEE', 'img/png/ao35.png', 390, 'Levents® Shapes of Heart Drop shoulder Tee\r\n\r\nChất liệu: LÌ VEN COMPACT – Phiên bản áo streetwear chất vải thoáng mát, mềm mịn nhưng không bị nhăn hay xù.\r\nKích cỡ: 1/2/3/4\r\n\r\nSản phẩm áo thun thuộc bộ sưu tập Spring/ Summer 2022 của Levents'),
(19, 1, 'LEVENTS® MELT FACE TEE', 'img/png/ao36.png', 390, '+ LEVENTS® MELT FACE TEE\r\n\r\nChất liệu: LÌ VEN COMPACT – Phiên bản chất vải thoáng mát, mềm mịn nhưng không bị nhăn hay xù.\r\nKích cỡ: 1/2/3/4\r\nSản phẩm thuộc Bộ sưu tập Thu/ Đông 2022 của Levents'),
(20, 1, 'LEVENTS® | DORAEMON COLLAB TEE', 'img/png/ao37.png', 435, 'LEVENTS® | DORAEMON COLLAB TEE\r\n\r\nChất liệu: LÌ VEN FABRIC – Phiên bản chất vải dày dặn, mềm mịn, không bị nhăn.\r\nKích cỡ: 1/2/3/4\r\n\r\nSản phẩm áo thun thuộc Bộ sưu tập đặc biệt “Make everything popular” DORAEMON | LEVENTS®'),
(21, 1, 'LEVENTS® | DORAEMON POPULAR CAT TEE', 'img/png/ao38.png', 395, 'LEVENTS® | DORAEMON POPULAR CAT TEE\r\n\r\nChất liệu: LÌ VEN ORIGINAL – Phiên bản bề mặt vải không đổ lông mang cảm giác thoáng mát\r\nKích cỡ: 1/2/3/4\r\n\r\nSản phẩm áo thun thuộc Bộ sưu tập đặc biệt “Make everything popular” DORAEMON | LEVENTS®'),
(22, 1, 'LEVENTS® WASH TEE', 'img/png/ao39.png', 390, 'LEVENTS® WASH TEE\r\nChất liệu: LÌ VEN WASH – chất vải mềm mịn, dày dặn và đặc biệt tạo nên những mảng màu loang cá tính.\r\nKích cỡ: 1/2/3/4\r\n\r\nSản phẩm thuộc Bộ sưu tập Thu/ Đông 2022'),
(23, 1, 'LEVENTS® PEPPER SALT LONG SLEEVE POLO', 'img/png/ao40.png', 430, '+Levents® Pepper Salt Long Sleeve Polo\r\n\r\nChất liệu: LÌ VEN ORIGINAL – Phiên bản áo streetwear chất vải thoáng mát, mềm mịn nhưng không bị nhăn hay xù.\r\nKích cỡ: 1/2/3/4\r\n\r\nSản phẩm áo thun thuộc bộ sưu tập Spring/ Summer 2022 của Levents'),
(24, 2, 'LEVENTS® PLAY LOGO SHORTPANT', 'img/png/quan41.png', 390, '+ LEVENTS® PLAY LOGO SHORT\r\n\r\nChất liệu: LÌ VEN FABRIC – Phiên bản chất vải dày dặn, mềm mịn, không bị nhăn.\r\nKích cỡ: 1/2/3/4\r\nSản phẩm thuộc Bộ sưu tập Xuân/ Hè 2022 của Levents'),
(25, 2, 'LEVENTS® PLAY LOGO SHORTPANT', 'img/png/quan42.png', 390, '+ LEVENTS® PLAY LOGO SHORT\r\n\r\nChất liệu: LÌ VEN FABRIC – Phiên bản chất vải dày dặn, mềm mịn, không bị nhăn.\r\nKích cỡ: 1/2/3/4\r\nSản phẩm thuộc Bộ sưu tập Xuân/ Hè 2022 của Levents'),
(26, 2, 'LEVENTS® BASIC TROUSERS', 'img/png/quan43.png', 490, '+ LEVENTS® BASIC TROUSERS\r\nChất liệu: Cotton\r\nKích cỡ: 1/2/3/4\r\n\r\nSản phẩm thuộc Bộ sưu tập Thu/ Đông 2022 của Levents');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `user`, `pass`, `admin_name`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'thuận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_khachhang` int(11) NOT NULL,
  `hovaten` varchar(200) NOT NULL,
  `taikhoan` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` text NOT NULL,
  `chucvu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_khachhang`, `hovaten`, `taikhoan`, `matkhau`, `sodienthoai`, `email`, `diachi`, `chucvu`) VALUES
(1, 'Võ Minh Thuận', 'thuan', '202cb962ac59075b964b07152d234b70', 123456, 'thuan@gmail.com', 'hhhhhhhhhhhh', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `donhang_id` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `ngaythang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`donhang_id`, `soluong`, `mahang`, `khachhang_id`, `ngaythang`) VALUES
(1, 4, '2550', 79, '2023-05-27 12:00:24'),
(2, 2, '2550', 79, '2023-05-27 12:00:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `giohang_id` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `giasanpham` varchar(50) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `sanpham_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `khachhang_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`khachhang_id`, `name`, `phone`, `address`, `note`, `email`, `giaohang`) VALUES
(76, 'hoang', '1234556', 'tphcm,q7', ' 111111111111', 'thuansieuvay@gmail.com', 1),
(77, 'duy', '1223', 'hcm', ' nnnnn', 'thuan@gmail.com', 1),
(78, 'bao', '123456', 'hcm', ' kkkk', 'duy@gmail.com', 1),
(79, 'thuận', '123', 'hcm', 'rrrrrrrrrrrrrrrrrr ', 'thuan@gmail.com', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dmsanpham`
--
ALTER TABLE `dmsanpham`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sanpham_id`),
  ADD KEY `pk_sanpham_dmsanpham` (`id_dm`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`donhang_id`),
  ADD KEY `pk_tbl_donhang_tbl_khachhang` (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`giohang_id`),
  ADD KEY `pk_sanpham_giohang` (`sanpham_id`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`khachhang_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dmsanpham`
--
ALTER TABLE `dmsanpham`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `giohang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `pk_sanpham_dmsanpham` FOREIGN KEY (`id_dm`) REFERENCES `dmsanpham` (`id_dm`);

--
-- Các ràng buộc cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD CONSTRAINT `pk_tbl_donhang_tbl_khachhang` FOREIGN KEY (`khachhang_id`) REFERENCES `tbl_khachhang` (`khachhang_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD CONSTRAINT `pk_sanpham_giohang` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`sanpham_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
