-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2022 lúc 05:20 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nlcs`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password_admin` int(50) NOT NULL,
  `ten_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `email_admin`, `password_admin`, `ten_admin`) VALUES
(1, 'khangb1910389@student.ctu.edu.vn', 6072001, 'Phan Dương Khang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `idSV` int(11) NOT NULL,
  `fullname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(2) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` year(4) NOT NULL,
  `CCCD` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`idSV`, `fullname`, `gender`, `address`, `date`, `CCCD`) VALUES
(1, 'Phan Dương Khang', 1, 'Cao Lãnh - Đồng Tháp', 2001, 1234567890),
(2, 'Lê Trường An', 1, 'Dị Thanh - Hậu Giang', 2001, 1234567891),
(3, 'Võ Tấn Dũ Bằng', 1, 'Châu Đốc - Giang', 2001, 1234567892),
(4, 'Đặng Thị Mỹ Linh', 0, 'Phước Long - Bạc Liêu', 2001, 1234567893),
(5, 'Sơn Hữu Nguyên', 1, 'Phước Long - An Giang', 1999, 1234567894),
(6, 'Lê Văn Vinh', 1, 'Hồng Ngự - Đồng Tháp', 2000, 1234567895),
(7, 'Lý Phúc Tài', 1, 'Châu Đốc - An Giang', 2000, 1234567896),
(8, 'Nguyễn Kim Dung', 0, 'Sa Đéc - Đồng Tháp', 2001, 1234567897),
(9, 'Lê Thị Thùy Trang', 0, 'Cao Lãnh - Đồng Tháp', 2001, 1234567898),
(10, 'Nguyễn Thị Dân An', 0, 'Cao Lãnh - Đồng Tháp', 2001, 1234567899),
(22, 'Lê Bảo Bình', 1, 'Hãi Phòng', 2001, 1234561231);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tracuu`
--

CREATE TABLE `tracuu` (
  `kythi` date NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `CCCD` int(100) NOT NULL,
  `loaibang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tracuu`
--

INSERT INTO `tracuu` (`kythi`, `fullname`, `CCCD`, `loaibang`) VALUES
('2022-10-22', 'Nguyễn Thị Dân An', 1111111111, 'B1'),
('2022-10-20', 'Phan Dương Khang', 1234567890, 'B1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` int(50) NOT NULL,
  `ten_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `email_user`, `password_user`, `ten_user`) VALUES
(1, 'user@gmail.com', 123456, 'User123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`idSV`);

--
-- Chỉ mục cho bảng `tracuu`
--
ALTER TABLE `tracuu`
  ADD PRIMARY KEY (`CCCD`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `idSV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
