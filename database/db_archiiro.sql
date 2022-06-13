-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2022 lúc 02:50 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

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
  `dateCreate` date DEFAULT current_timestamp(),
  `content` varchar(6000) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_contract`
--

INSERT INTO `tb_contract` (`id_contract`, `id_home`, `id_customer`, `id_staff`, `dateCreate`, `content`, `status`) VALUES
(59, 12, 1, 1, '2022-06-11', 'lấy cho anh nhà này', 3),
(60, 8, 1, 1, '2022-06-12', 'nhà này đẹp', 2),
(61, 9, 1, 1, '2022-06-13', 'hehe', 2),
(62, 9, 1, 1, '2022-06-13', 'hehe', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` int(11) NOT NULL,
  `cardNumber` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateRange` date DEFAULT NULL,
  `isuseBy` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageFront` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageBack` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `cardNumber`, `dateRange`, `isuseBy`, `imageFront`, `imageBack`, `status`) VALUES
(1, '182712321', '2222-02-22', 'Công an tỉnh Nghệ An', '277979892_1052684775680477_2412490308286278847_n.jpg', '279486263_532644131577576_9029279224070490748_n.jpg', 1);

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
  `image2` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image3` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image4` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image5` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_home`
--

INSERT INTO `tb_home` (`id_home`, `id_typeHome`, `name_home`, `price`, `priceSale`, `area_home`, `address_home`, `numberRoom`, `numberBedRoom`, `numberBathRoom`, `description`, `image`, `image2`, `image3`, `image4`, `image5`, `status`) VALUES
(1, 1, 'Đại học Thủy Lợi', '4.300.3000.000', '4.300.3000.000', '500', '175 Tây Sơn, Đống Đa, Hà Nội', '5', '3', '3', 'Đẹp', 'nhao1.png', '', '', '', '', 1),
(7, 1, 'Căn hộ cao cấp Chung cư Royal City ', '3.200.000.000', NULL, '100', 'Đường 75 Nguyễn Trãi, Thanh Xuân, Hà Nội ', '7', '3', '2', NULL, 'roy1.jpg', 'roy2.jpg', 'roy3.jpg', 'roy4.jpg', 'roy5.jpg', 1),
(8, 1, 'Chung cư Time City', '3.600.000.000', NULL, '120', 'Minh Khai, Hai Bà Trưng, Hà Nội', '7', '4', '3', NULL, 'roy6.jpg', 'roy7.jpg', 'roy8.jpg', 'roy9.jpg', 'roy10.jpg', 1),
(9, 1, 'Chung cư The Tower', '1.800.000.000', NULL, '80', 'Đường Lê Văn Lương, Thanh Xuân, Hà Nội', '6', '3', '2', NULL, 'roy11.jpg', 'roy12.jpg', 'roy13.jpg', 'roy14.jpg', 'roy15.jpg', 1),
(10, 2, 'Biệt thự Đống Đa', '7.800.000.000', NULL, '500', 'Trung Tự, Đống Đa, Hà Nội', '12', '6', '4', NULL, 'st1.jpg', 'st2.jpg', 'st3.jpg', 'st4.jpg', 'st5,jpg', 1),
(11, 2, 'Khu sinh thái Hà Đông', '8.200.000.000', NULL, '600', 'Phùng Khoang, Hà Đông, Hà Nội', '12', '7', '5', NULL, 'st6.jpg', 'st7.jpg', 'st8.jpg', 'st9.jpg', 'st10.jpg', 1),
(12, 2, 'Biệt thự Nam Từ Liêm', '6.200.000.000', NULL, '400', 'Ngõ 67 Phùng Khoang, Trung Văn, Nam Từ Liêm, Hà Nội', '10', '6', '4', NULL, 'st11.jpg', 'st12.jpg', 'st13.jpg', 'st14.jpg', 'st15.jpg', 1),
(13, 3, 'Nhà mặt đường Đống Đa', '3.700.000.000', NULL, '75', '266 Tây Sơn, Đống Đa, Hà Nội', '6', '4', '2', NULL, 'n1.jpg', 'n2.jpg', 'n3.jpg', 'n4.jpg', 'n5.jpg', 1),
(14, 3, 'Nhà ở khu vực Cầu Giấy', '2.200.000.000', NULL, '90', 'Ngõ 160 Dương Quảng Hàm, Cầu Giấy, Hà Nội', '7', '4', '2', NULL, 'n6.jpg', 'n7.jpg', 'n8.jpg', 'n9.jpg', 'n10.jpg', 1),
(15, 3, 'Nhà mặt phố khu vực Hà Đông', '2.900.000.000', NULL, '110', 'Vạn Phúc, Hà Đông, Hà Nội', '9', '6', '3', NULL, 'n11.jpg', 'n12.jpg', 'n13.jpg', 'n14.jpg', 'n15.jpg', 1),
(16, 4, 'Khu tập thể phố 8/3', '1.200.000.000', NULL, '70', 'Phố 8/3, Quỳnh Mai, Hai Bà Trưng, Hà Nội\r\n', '5', '3', '2', NULL, 'tt1.jpg', 'tt2.jpg', 'tt3.jpg', 'tt4.jpg', 'tt5.jpg', 1),
(17, 4, 'Khu tập thể Kim Liên', '1.500.000.000', NULL, '100', 'Kim Liên, Thanh Xuân, Hà Nội', '6', '4', '2', NULL, 'tt6.jpg', 'tt7.jpg', 'tt8.jpg', 'tt9.jpg', 'tt10.jpg', 1),
(18, 4, 'Khu tập thể Trung Tự', '1.300.000.000', NULL, '80', 'Trung Tự, Đống Đa, Hà Nội', '5', '3', '2', NULL, 'tt11.jpg', 'tt12.jpg', 'tt13.jpg', 'tt14.jpg', 'tt15.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` int(11) NOT NULL,
  `postTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postContent` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateCreate` date NOT NULL DEFAULT current_timestamp(),
  `lastUpdate` date NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 2,
  `img_post` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `idWriter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_post`
--

INSERT INTO `tb_post` (`id_post`, `postTitle`, `postContent`, `dateCreate`, `lastUpdate`, `status`, `img_post`, `idWriter`) VALUES
(1, 'Nhà anh đức', 'Dù ai đi bất cứ nơi đâu cũng đều có một nơi để trở về. Đó chính là nhà. Tổ ấm của em chính là ngôi nhà nhỏ hai tầng đã ở bên em từ khi em chào đời.\r\n\r\nNgôi nhà được xây cách đây 10 năm do chính bố em thiết kế, nhưng trông nó vẫn còn mới. Ngôi nhà được khoác lên mình tấm áo màu xanh da trời tươi sáng. Cánh cửa chính và cửa sổ được hai chị em em lau chùi thường xuyên nên trông sạch sẽ và sáng bóng. Ở mái hiên, bố em có treo 2 giàn hoa phong lan màu trắng và màu hồng. Dường như, nhờ có chúng mà ngôi nhà của em trở nên thơ mộng hơn.\r\n\r\nTầng một là phòng khách và gian bếp. Tầng 2 là phòng nghỉ của bố mẹ và hai chị em em. Phòng khách được mẹ em bày biện thật đẹp mắt. Giữa phòng khách được kê một bộ ghế gỗ màu nâu nhỏ nhắn và trang nhã. Trên bàn uống nước là lọ hoa tươi để trang trí cho phòng khách thêm sinh động. Bàn thờ tổ tiên được đặt trang trọng ở trên cao, thẳng hướng cửa ra vào.\r\n\r\nBố em là người rất mê đồng hồ. Vì thế trên tường, bố đã treo 5 chiếc đồng hồ rất đẹp. Phía tay phải là gian bếp và cũng là phòng ăn. Trên tầng hai, phòng của bố mẹ và của hai chị em em đều rất ngăn nắp, sạch sẽ và ấm cúng. Em được bố mẹ mua cho một bộ bàn ghế học ngay gần cửa sổ thoáng mát, nơi có giàn hoa giấy thơ mộng. Tuy ngôi nhà không có nhiều đồ sang trọng nhưng mỗi khi trở về nhà em lại cảm thấy thật thoải mái và ấm cúng. Xung quanh nhà em là vườn rau và vườn cây ăn cỏ. Có rất nhiều loài cây và loài hoa trong khu vườn.', '2022-05-29', '2022-05-29', 1, 'de2.png', 2),
(2, 'Tesst', 'Ví dụ, khi bạn lên Facebook để đăng ký tài khoản. Hệ thống yêu cầu cung cấp: Họ tên, ngày sinh, giới tính, số điện thoại,…. Sau khi bấm nút đăng ký, những thông tin đó được lưu vào hệ thống (tức là lưu vào cơ sở dữ liệu), thì những thông tin được lưu trong cơ sở dữ liệu đó được gọi là DỮ LIỆU.', '2022-05-29', '2022-05-29', 3, '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id_staff` int(11) NOT NULL,
  `daySalary` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dayStart` date DEFAULT current_timestamp(),
  `numberContract` char(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_staff`
--

INSERT INTO `tb_staff` (`id_staff`, `daySalary`, `dayStart`, `numberContract`) VALUES
(2, '200.000.00', '2022-05-19', '2'),
(3, '3000000', '2022-05-18', '0'),
(7, '350000', '2022-05-27', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_typehome`
--

CREATE TABLE `tb_typehome` (
  `id_typeHome` int(11) NOT NULL,
  `name_typeHome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_typehome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_typehome`
--

INSERT INTO `tb_typehome` (`id_typeHome`, `name_typeHome`, `img_typehome`, `status`) VALUES
(1, 'Căn hộ thông minh', 'icon-condominium.png', 1),
(2, 'Biệt thự villa', 'icon-villa.png', 1),
(3, 'Nhà ở riêng tư', 'icon-house.png', 1),
(4, 'Khu tập thể', 'icon-luxury.png', 1);

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
  `birthday` date DEFAULT NULL,
  `image` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regisdate` datetime DEFAULT current_timestamp(),
  `levelUser` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `passCode` char(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `firstName`, `lastName`, `email`, `user_pass`, `phoneNumber`, `gender`, `address`, `birthday`, `image`, `regisdate`, `levelUser`, `status`, `passCode`) VALUES
(1, 'Trịnh Hoàng ', 'Long', 'archiiro@gmail.com', 'admin', '0123456787', 1, 'Hà Nội', '2001-09-20', 'dau.png', NULL, 1, 2, NULL),
(2, 'Nguyễn', 'GLD', 'asajkas@gmail.com', '', '09312713271', 1, 'Hoàng Mai', '2022-05-11', 'admin.jpg', '2022-05-27 10:11:56', 2, 2, NULL),
(3, 'Hehehe', 'Dccassa', 'sdaasd@gmail.com', '', '01298301279', 2, 'Hehhea', '2022-05-18', 'call-to-action.jpg', '2022-05-27 10:16:35', 1, 3, NULL),
(6, 'Duc', 'Haha', 'duchaa@gmail.com', '123', '08219631221', 1, '', '0000-00-00', '', '2022-05-28 17:35:49', 1, 3, NULL),
(7, 'hdhdkaa', 'jahggkasdgk', 'kjsdf@gmail.com', '123', '0982021731', 2, NULL, NULL, NULL, '2022-05-28 18:17:20', 2, 2, NULL),
(8, 'Gaskfkas', 'safasfas', 'fesassff@gmail.com', '123', '0278309127', 1, 'Hoàng Mai', '2022-05-17', 'admin.jpg', '2022-05-28 18:35:40', 2, 2, NULL),
(9, 'Hehehea', 'Hohjojoh', 'daksdkkda@gmail.com', '123', '0239812391', 1, '', '2022-05-19', '', '2022-05-29 14:53:29', 1, 3, NULL),
(10, 'Hồ Hồng ', 'Quân', 'aqdz01@gmail.com', 'anhquanqueo', '0346785893', NULL, NULL, NULL, NULL, '2022-06-13 17:24:08', 3, 2, NULL);

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
  ADD UNIQUE KEY `id_user` (`id_customer`);

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
  ADD KEY `idWriter` (`idWriter`);

--
-- Chỉ mục cho bảng `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD UNIQUE KEY `id_user` (`id_staff`);

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
-- AUTO_INCREMENT cho bảng `tb_contract`
--
ALTER TABLE `tb_contract`
  MODIFY `id_contract` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `tb_home`
--
ALTER TABLE `tb_home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tb_typehome`
--
ALTER TABLE `tb_typehome`
  MODIFY `id_typeHome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `tb_customer_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `tb_user` (`id_user`);

--
-- Các ràng buộc cho bảng `tb_home`
--
ALTER TABLE `tb_home`
  ADD CONSTRAINT `tb_home_ibfk_1` FOREIGN KEY (`id_typeHome`) REFERENCES `tb_typehome` (`id_typeHome`);

--
-- Các ràng buộc cho bảng `tb_post`
--
ALTER TABLE `tb_post`
  ADD CONSTRAINT `tb_post_ibfk_1` FOREIGN KEY (`idWriter`) REFERENCES `tb_user` (`id_user`);

--
-- Các ràng buộc cho bảng `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD CONSTRAINT `tb_staff_ibfk_1` FOREIGN KEY (`id_staff`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
