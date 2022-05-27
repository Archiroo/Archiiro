-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2022 lúc 05:28 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_archiiro`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_contract`
--

CREATE TABLE `tb_contract` (
  `id_contract` int(11) NOT NULL,
  `id_home` int(11) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `id_staff` int(11) DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreate` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_user` int(11) NOT NULL,
  `cardNumber` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateRange` datetime DEFAULT NULL,
  `isuseBy` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageFront` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageBack` char(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_home`
--

CREATE TABLE `tb_home` (
  `id_home` int(11) NOT NULL,
  `id_typeHome` int(11) DEFAULT NULL,
  `name_home` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `priceSale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `area_home` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_home` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numberRoom` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numberBedRoom` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numberBathRoom` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image2` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image3` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image4` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image5` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saleDate` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` int(11) NOT NULL,
  `postTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postContent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idWriter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id_user` int(11) NOT NULL,
  `daySalary` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numberDay` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numberContract` char(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_typehome`
--

CREATE TABLE `tb_typehome` (
  `id_typeHome` int(11) NOT NULL,
  `name_typeHome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_pass` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phoneNumber` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(2) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `image` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regisdate` datetime DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `passCode` char(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `firstName`, `lastName`, `email`, `user_pass`, `phoneNumber`, `gender`, `address`, `birthday`, `image`, `regisdate`, `level`, `status`, `passCode`) VALUES
(1, 'Nguyễn', 'Chiiro', 'archiiro@gmail.com', 'admin', '0123456789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_contract`
--
ALTER TABLE `tb_contract`
  ADD PRIMARY KEY (`id_contract`),
  ADD KEY `id_home` (`id_home`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_staff` (`id_staff`);

--
-- Chỉ mục cho bảng `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `tb_home`
--
ALTER TABLE `tb_home`
  ADD PRIMARY KEY (`id_home`),
  ADD KEY `id_typeHome` (`id_typeHome`);

--
-- Chỉ mục cho bảng `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id_post`),
  ADD UNIQUE KEY `idWriter` (`idWriter`);

--
-- Chỉ mục cho bảng `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `tb_typehome`
--
ALTER TABLE `tb_typehome`
  ADD PRIMARY KEY (`id_typeHome`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_home`
--
ALTER TABLE `tb_home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_typehome`
--
ALTER TABLE `tb_typehome`
  MODIFY `id_typeHome` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_contract`
--
ALTER TABLE `tb_contract`
  ADD CONSTRAINT `tb_contract_ibfk_1` FOREIGN KEY (`id_home`) REFERENCES `tb_home` (`id_home`),
  ADD CONSTRAINT `tb_contract_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_contract_ibfk_3` FOREIGN KEY (`id_staff`) REFERENCES `tb_user` (`id_user`);

--
-- Các ràng buộc cho bảng `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD CONSTRAINT `tb_customer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Các ràng buộc cho bảng `tb_home`
--
ALTER TABLE `tb_home`
  ADD CONSTRAINT `tb_home_ibfk_1` FOREIGN KEY (`id_typeHome`) REFERENCES `tb_typehome` (`id_typeHome`);

--
-- Các ràng buộc cho bảng `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`idWriter`) REFERENCES `tb_staff` (`id_user`);

--
-- Các ràng buộc cho bảng `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD CONSTRAINT `tb_staff_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
