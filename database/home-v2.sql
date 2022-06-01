-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 01, 2022 lúc 09:50 AM
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
-- Cơ sở dữ liệu: `home-v2`
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
  `dateCreate` datetime DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_contract`
--

INSERT INTO `tb_contract` (`id_contract`, `id_home`, `id_customer`, `id_staff`, `content`, `dateCreate`, `status`) VALUES
(0, 1, 1, 1, 'để căn này cho a nhé', '2022-06-01 11:05:44', 2),
(1, 15, 1, 1, 'xin chào tất cả các bạn', '2022-06-01 11:23:52', 2),
(2, 6, 1, 1, 'nhà này ngon đấy', '2022-06-01 11:10:38', 2),
(3, 2, 1, 1, 'àdfasdf', '2022-06-01 14:27:16', 2),
(4, 15, 1, 1, 'aaaaa', '2022-06-01 11:41:44', 2),
(5, 15, 1, 1, 'àdfsadfasfd', '2022-06-01 11:44:00', 2),
(6, 15, 1, 1, 'fdfadadf', '2022-06-01 11:44:06', 2),
(7, 15, 1, 1, 'fdfdsafasf', '2022-06-01 11:46:21', 2),
(8, 2, 1, 1, 'xin em được', '2022-06-01 14:29:58', 2),
(9, 7, 1, 1, 'đặt cọc', '2022-06-01 14:36:44', 2),
(10, 3, 1, 1, 'adfasdfsdf', '2022-06-01 14:46:28', 2),
(333, 2, 1, 1, 'ádasdasdasda', '2022-06-01 14:32:43', 2);

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

--
-- Đang đổ dữ liệu cho bảng `tb_home`
--

INSERT INTO `tb_home` (`id_home`, `id_typeHome`, `name_home`, `price`, `priceSale`, `area_home`, `address_home`, `numberRoom`, `numberBedRoom`, `numberBathRoom`, `description`, `image`, `image2`, `image3`, `image4`, `image5`, `saleDate`, `status`) VALUES
(1, 3, 'Chung cư Royal City', '2000000000', '1800000000', '60', '72 Đường Nguyễn Trãi, Thanh Xuân, Hà Nội', '4', '2', '2', 'Căn hộ cao cấp diện tích 60m2, nằm ở trung tâm thành phố', 'roy1.jpg', 'de2.png', 'de3.png', 'de4.png', 'de5.png', '2022-05-24 00:00:00', 2),
(2, 2, 'Nhà trọ Lâm Chubby', '3600000', '3500000', '30', 'Ngõ 67 Phùng Khoang, Nam Từ Liêm, Hà Nội', '2', '1', '1', 'Nhà trọ diện tích 30m2 khép kiến có ban công', 'tro2.jpg', 'de3.png', 'de4.png', 'de5.png', 'de6.png', '2022-05-24 00:00:00', 2),
(3, 2, 'Nhà trọ ông Lập', '2500000', '2400000', 'Hà Nội', '131 Pháo Đài Láng, Đống Đa, Hà Nội', '2 ', '1 ', '1', 'Nhà trọ tầng 2 diện tích 25m2. Thiết kế ngu', 'tro2.jpg', '', '', '', '', '2022-05-24 00:00:00', 2),
(4, 4, 'Biệt thự sân vườn', '8400000000', '8200000000', '30', 'Trung Văn, Hà Đông, Hà Nội', '8', '4', '3', 'Diện tích 400m2 cả vườn, có vả vườn trước và vườn sau. Gần trung tâm thành phố', 'st1.jpg', '', '', '', '', '2022-05-24 00:00:00', 1),
(5, 3, 'Chung cư Time City', '3200000000', '3100000000', '30', 'Minh Khai, Hai Bà Trưng, Hà Nội', '5', '2', '2', 'Diện tích 100m2 đầy đủ tiện nghi, dịch vụ, khu vực an ninh cao', 'roy3.webp', '', '', '', '', '2022-05-24 00:00:00', 1),
(6, 5, 'Khu sinh thái Konoha', '13000000000', '12900000000', '45', 'Đường Láng, Đống Đa, Hà Nội', '8', '4', '3', 'Khu sinh thái cao cấp, đầy đủ tiện nghi, có biển nhân tạo', 'st2.jpg', '', '', '', '', '2022-05-24 00:00:00', 2),
(7, 2, 'Nhà trọ anh Thành', '2000000', '1800000', '20', ' 81 Nguyễn Phong Sắc, Cầu Giấy, Hà Nội', '2', '1', '1', 'Nhà trọ tầng 1 khép kín. giờ giấc thoải mái', 'tro1.jpg', '', '', '', '', '2022-05-24 00:00:00', 2),
(8, 2, 'Nhà trọ Konoha', '2000000', '1900000', '25', 'Văn Quán, Hà Đông, Hà Nội', '2', '1', '1', 'Có sông trước nhà view rất đẹp', 'll.jfif', '', '', '', '', '2022-05-23 00:00:00', 1),
(9, 2, 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'tt1.jpg', '', '', '', '', '2022-05-24 00:00:00', 1),
(10, 3, 't', 't', 't', 't', 't', 't', 't', 't', 't', 'c41.jpg', '', '', '', '', '2022-05-20 00:00:00', 1),
(11, 5, 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'q', 'u', 'roy2.jpg', '', '', '', '', '2022-05-22 00:00:00', 1),
(12, 2, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'tt3.jpg', '', '', '', '', '2022-02-22 00:00:00', 1),
(13, 2, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'roy1.jpg', '', '', '', '', '2022-02-22 00:00:00', 1),
(14, 2, 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'y', 'roy1.jpg', '', '', '', '', '2022-02-22 00:00:00', 1),
(15, 2, 'i', 'i', 'i', 'i', 'i', 'i', 'i', 'i', 'i', 'st2.jpg', '', '', '', '', '2022-05-22 00:00:00', 2),
(16, 2, 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p', 'st1.jpg', '', '', '', '', '2022-04-04 00:00:00', 1),
(17, 4, 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'k', 'roy3.webp', '', '', '', '', '2022-02-22 00:00:00', 1),
(18, 2, 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'tro2.jpg', '', '', '', '', '2022-02-22 00:00:00', 1),
(19, 2, 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'm', 'tt1.jpg', '', '', '', '', '2022-04-04 00:00:00', 1),
(20, 2, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'tt1.jpg', '', '', '', '', '2022-02-22 00:00:00', 1),
(21, 2, 'v', 'v', 'v', 'v', 'v', 'v', 'v', 'v', 'v', 'st1.jpg', '', '', '', '', '2022-02-04 00:00:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` int(11) NOT NULL,
  `postTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postContent` varchar(6000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_post` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `idWriter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_post`
--

INSERT INTO `tb_post` (`id_post`, `postTitle`, `postContent`, `img_post`, `idWriter`) VALUES
(1, 'Thông báo về nhà ở', 'Ồ, Mày nhắc tới wibu ư ? Hay lắm đấy con chó, mày đã gáy đủ to để dành được sự chú ý của t rồi đấy. Mày nên mừng sau khi bỏ ra bao công sức, gáy khang cả giọng và mày đã làm được rồi! Mày đã thành công chứng minh mày chỉ là một con chó súc sinh hạ đẳng chuyên bú cu với cái mồm thối đầy bựa cặc. Kể cả vậy t vẫn cảm thấy tội ba má mày khi sinh ra mày đấy, một thằng điếm thèm cặc mê cu thích sủa, gây ô nhiễm không khí khi tiếp tục gáy và mồm phun đầy bựa cặc và tinh trùng. Địt con mẹ mày nếu mày đã đạt được điều mày muốn là thu hút sự chú ý của tao ? Thì làm ơn mày có thể bớt gáy được không ? Tao đéo ngại phải tiếp những con súc vật hạ đẳng như mày nhưng làm ơn đấy màn gáy của mày đã to đến mức làm phiền những người xung quanh đấy. Họ khác mày là những con người bình thường chứ đéo phải là một con sâu bọ như mày cứ mở mồm ra là gáy và gáy. Ôi chúa ơi, phật tổ ơi những con người đầy quyền năng và mạnh mẽ hãy giúp con trừng trị thứ loài vật khiếm khuyết này. Hãy khóa mõm con thú đáng ghê tởm mà cứ liên tục gáy trước mặt con, hãy trừ họa nó cho một thế giới tươi đẹp hơn, đẹp đẽ hơn. Địt con mẹ mày bớt gáy đi, thứ súc vật gớm ghiếc. Những gì mày gáy ra đéo đủ trình độ, đẳng cấp để tao hiểu đâu hết, thứ chó đẻ', 'de2.png', 1),
(4, 'Khai sáng tâm hồn', 'MỘT TƯ DUY HẾT SỨC LỆCH LẠC VÀ VÔ NHÂN \r\n\r\n\r\n Người làm ra meme này, hoặc là trẻ tuổi kém trí, hoặc là tàn ác vô nhân. Mình không ưa những người dân chủ cuội, những người té nước theo mưa, hoặc chính trị cơ hội. Đây không phải là một điều đáng cười, nó đáng buồn. Hãy thử nghĩ về công an của bạn, nếu giả sử bạn đang bị hành hung, nhưng công an không đến giúp bạn chỉ vì sự khác biệt trong tư duy, tôn giáo, quan điểm chính trị của bạn, điều đó có đúng không? Các bạn sẽ bảo rằng, anh Sang chỉ nói lý thuyết, xã hội thực sự nó như vậy. Mình biết chớ. Nhưng xã hội vận hành như vậy, có đúng không? Xưa kia, xã hội cũng tin rằng, phù thủy phải bị thiêu sống, điều đó có đúng không? Tạo hoá cho mình cái não, hãy suy nghĩ. Nếu không, bạn sẽ chỉ đơn thuần là con sâu, cái kiến cho người khác lợi dụng.', 'de2.png', 2),
(5, 'Như cờ cờ', 'MỘT TƯ DUY HẾT SỨC LỆCH LẠC VÀ VÔ NHÂN \r\n\r\n\r\n Người làm ra meme này, hoặc là trẻ tuổi kém trí, hoặc là tàn ác vô nhân. Mình không ưa những người dân chủ cuội, những người té nước theo mưa, hoặc chính trị cơ hội. Đây không phải là một điều đáng cười, nó đáng buồn. Hãy thử nghĩ về công an của bạn, nếu giả sử bạn đang bị hành hung, nhưng công an không đến giúp bạn chỉ vì sự khác biệt trong tư duy, tôn giáo, quan điểm chính trị của bạn, điều đó có đúng không? Các bạn sẽ bảo rằng, anh Sang chỉ nói lý thuyết, xã hội thực sự nó như vậy. Mình biết chớ. Nhưng xã hội vận hành như vậy, có đúng không? Xưa kia, xã hội cũng tin rằng, phù thủy phải bị thiêu sống, điều đó có đúng không? Tạo hoá cho mình cái não, hãy suy nghĩ. Nếu không, bạn sẽ chỉ đơn thuần là con sâu, cái kiến cho người khác lợi dụng.', 'de5.png', 3);

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

--
-- Đang đổ dữ liệu cho bảng `tb_staff`
--

INSERT INTO `tb_staff` (`id_user`, `daySalary`, `numberDay`, `numberContract`) VALUES
(1, '2', '2', '2'),
(2, '2', '2', '2'),
(3, '2', '2', '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_typehome`
--

CREATE TABLE `tb_typehome` (
  `id_typeHome` int(11) NOT NULL,
  `name_typeHome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_typehome` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_typehome`
--

INSERT INTO `tb_typehome` (`id_typeHome`, `name_typeHome`, `icon_typehome`) VALUES
(2, 'Nhà trọ sinh viên', ''),
(3, 'Căn hộ cao cấp', ''),
(4, 'Biệt thự nhà vườn', ''),
(5, 'Khu sinh thái', '');

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
(1, 'Nguyễn', 'Chiiro', 'archiiro@gmail.com', 'admin', '0123456789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Ho', 'Quan', 'aqdz01@gmail.com', 'quan123', NULL, NULL, NULL, '2022-05-29 10:11:36', NULL, '2022-05-29 10:11:36', NULL, NULL, NULL),
(3, 'Nguyen', 'Vuong', 'vuong9xx@gmail.com', 'vuong123', NULL, NULL, NULL, '2022-05-29 10:11:36', NULL, '2022-05-29 10:11:36', NULL, NULL, NULL);

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
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tb_typehome`
--
ALTER TABLE `tb_typehome`
  MODIFY `id_typeHome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
