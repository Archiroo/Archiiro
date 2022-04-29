-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 29, 2022 lúc 11:50 AM
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
-- Cơ sở dữ liệu: `db_home`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_contract`
--

CREATE TABLE `tb_contract` (
  `contract_id` int(11) NOT NULL,
  `contract_homeID` int(11) DEFAULT NULL,
  `contract_customerID` int(11) DEFAULT NULL,
  `contract_staffID` int(11) DEFAULT NULL,
  `contract_content` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contract_date` datetime DEFAULT current_timestamp(),
  `contract_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_home`
--

CREATE TABLE `tb_home` (
  `home_id` int(11) NOT NULL,
  `typeHome_id` int(11) DEFAULT NULL,
  `home_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_area` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_numberRoom` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_numberBedRoom` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_numberBathRoom` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_desciption` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_image` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_saleDate` datetime DEFAULT current_timestamp(),
  `home_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_homeimage`
--

CREATE TABLE `tb_homeimage` (
  `homeImage_id` int(11) NOT NULL,
  `home_id` int(11) DEFAULT NULL,
  `home_image1` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_image2` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_image3` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_image4` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_image5` char(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_salary`
--

CREATE TABLE `tb_salary` (
  `salary_id` int(11) NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `salary_money` float DEFAULT NULL,
  `salary_working` int(11) DEFAULT NULL,
  `number_contract` int(11) DEFAULT NULL,
  `salary_total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_typehome`
--

CREATE TABLE `tb_typehome` (
  `typeHome_id` int(11) NOT NULL,
  `typeHome_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_firstName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_lastName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_pass` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_phone` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_gender` tinyint(2) DEFAULT NULL,
  `user_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_image` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_resgisdate` datetime DEFAULT current_timestamp(),
  `user_level` int(11) DEFAULT 1,
  `user_status` int(11) DEFAULT 1,
  `user_code` char(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_firstName`, `user_lastName`, `user_email`, `user_pass`, `user_phone`, `user_gender`, `user_address`, `user_image`, `user_resgisdate`, `user_level`, `user_status`, `user_code`) VALUES
(1, 'Nguyễn', 'Chiiro', 'archiiro@gmail.com', 'admin', '0965269082', 1, '175 Tây Sơn, Đống Đa, Hà Nội', 'admin.jpg', '2022-04-27 08:09:01', 2, 1, NULL),
(9, 'Ar', 'GLD', 'abcasc@gmail.com', '123', '12344545', NULL, NULL, NULL, '2022-04-29 10:32:17', 1, 1, NULL),
(10, 'a', 'b', 'asdasd@gmail.com', '12312312', '12321312', NULL, NULL, NULL, '2022-04-29 10:36:36', 1, 1, NULL),
(11, 'a', 'b', 'asdaasd@gmail.com', '12312312', '12321312', NULL, NULL, NULL, '2022-04-29 10:37:10', 1, 1, NULL),
(12, 'asx', 'asd', 'asdaassd@gmail.com', '123', 'asdasd', NULL, NULL, NULL, '2022-04-29 10:38:03', 1, 1, NULL),
(13, 'sadas', 'asdasd', 'sdfsd@gmail.com', '12312', '12312312', NULL, NULL, NULL, '2022-04-29 10:39:46', 1, 1, NULL),
(14, 'sadas', 'asdasd', 'sdfssadd@gmail.com', '12312', '12312312', NULL, NULL, NULL, '2022-04-29 10:40:20', 1, 1, NULL),
(15, 'sadas', 'asdasd', 'sasdasdfssadd@gmail.com', '12312', '12312312', NULL, NULL, NULL, '2022-04-29 10:40:50', 1, 1, NULL),
(16, 'asdas', 'asdasdas', 'asdasdaasd@gmail.com', '123', '12312312123', NULL, NULL, NULL, '2022-04-29 10:41:25', 1, 1, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_contract`
--
ALTER TABLE `tb_contract`
  ADD PRIMARY KEY (`contract_id`),
  ADD KEY `contract_homeID` (`contract_homeID`),
  ADD KEY `contract_customerID` (`contract_customerID`),
  ADD KEY `contract_staffID` (`contract_staffID`);

--
-- Chỉ mục cho bảng `tb_home`
--
ALTER TABLE `tb_home`
  ADD PRIMARY KEY (`home_id`),
  ADD KEY `typeHome_id` (`typeHome_id`);

--
-- Chỉ mục cho bảng `tb_homeimage`
--
ALTER TABLE `tb_homeimage`
  ADD PRIMARY KEY (`homeImage_id`),
  ADD KEY `home_id` (`home_id`);

--
-- Chỉ mục cho bảng `tb_salary`
--
ALTER TABLE `tb_salary`
  ADD PRIMARY KEY (`salary_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Chỉ mục cho bảng `tb_typehome`
--
ALTER TABLE `tb_typehome`
  ADD PRIMARY KEY (`typeHome_id`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_contract`
--
ALTER TABLE `tb_contract`
  MODIFY `contract_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_home`
--
ALTER TABLE `tb_home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_homeimage`
--
ALTER TABLE `tb_homeimage`
  MODIFY `homeImage_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_salary`
--
ALTER TABLE `tb_salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_typehome`
--
ALTER TABLE `tb_typehome`
  MODIFY `typeHome_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_contract`
--
ALTER TABLE `tb_contract`
  ADD CONSTRAINT `tb_contract_ibfk_1` FOREIGN KEY (`contract_homeID`) REFERENCES `tb_home` (`home_id`),
  ADD CONSTRAINT `tb_contract_ibfk_2` FOREIGN KEY (`contract_customerID`) REFERENCES `tb_user` (`user_id`),
  ADD CONSTRAINT `tb_contract_ibfk_3` FOREIGN KEY (`contract_staffID`) REFERENCES `tb_user` (`user_id`);

--
-- Các ràng buộc cho bảng `tb_home`
--
ALTER TABLE `tb_home`
  ADD CONSTRAINT `tb_home_ibfk_1` FOREIGN KEY (`typeHome_id`) REFERENCES `tb_typehome` (`typeHome_id`);

--
-- Các ràng buộc cho bảng `tb_homeimage`
--
ALTER TABLE `tb_homeimage`
  ADD CONSTRAINT `tb_homeimage_ibfk_1` FOREIGN KEY (`home_id`) REFERENCES `tb_home` (`home_id`);

--
-- Các ràng buộc cho bảng `tb_salary`
--
ALTER TABLE `tb_salary`
  ADD CONSTRAINT `tb_salary_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `tb_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
