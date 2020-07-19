-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th7 18, 2020 lúc 03:16 PM
-- Phiên bản máy phục vụ: 10.3.18-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id14295187_qldulich`
--

DELIMITER $$
--
-- Thủ tục
--
CREATE PROCEDURE `statisticBillByYear` ()  NO SQL
BEGIN
SELECT COUNT(IF(tourtype.IdTourType = 1 && MONTH(bill.OrderDate) >= 1 && MONTH(bill.OrderDate) <= 3,1,NULL)) AS 'BookIn_1',
COUNT(IF(tourtype.IdTourType = 1 && MONTH(bill.OrderDate) >= 4 && MONTH(bill.OrderDate) <= 6,1,NULL)) AS 'BookIn_2',
COUNT(IF(tourtype.IdTourType = 1 && MONTH(bill.OrderDate) >= 7 && MONTH(bill.OrderDate) <= 9,1,NULL)) AS 'BookIn_3',
COUNT(IF(tourtype.IdTourType = 1 && MONTH(bill.OrderDate) >= 10 && MONTH(bill.OrderDate) <= 12,1,NULL)) AS 'BookIn_4',
COUNT(IF(tourtype.IdTourType = 2 && MONTH(bill.OrderDate) >= 1 && MONTH(bill.OrderDate) <= 3,1,NULL)) AS 'BookOut_1',
COUNT(IF(tourtype.IdTourType = 2 && MONTH(bill.OrderDate) >= 4 && MONTH(bill.OrderDate) <= 6,1,NULL)) AS 'BookOut_2',
COUNT(IF(tourtype.IdTourType = 2 && MONTH(bill.OrderDate) >= 7 && MONTH(bill.OrderDate) <= 9,1,NULL)) AS 'BookOut_3',
COUNT(IF(tourtype.IdTourType = 2 && MONTH(bill.OrderDate) >= 10 && MONTH(bill.OrderDate) <= 12,1,NULL)) AS 'BookOut_4'
		
FROM bill JOIN tour ON bill.IdTour = tour.IdTour
			 JOIN tourtype ON tourtype.IdTourType = tour.IdTourType;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `IdBill` int(11) NOT NULL,
  `OrderDate` date NOT NULL,
  `Status` int(11) NOT NULL,
  `IdTour` int(11) DEFAULT NULL,
  `IdUser` int(11) DEFAULT NULL,
  `CustomerName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerIdentityCard` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerBirthday` date DEFAULT NULL,
  `CustomerAddress` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerPhone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerEmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NoAdult` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NoChildren` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TotalPrice` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Note` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`IdBill`, `OrderDate`, `Status`, `IdTour`, `IdUser`, `CustomerName`, `CustomerIdentityCard`, `CustomerBirthday`, `CustomerAddress`, `CustomerPhone`, `CustomerEmail`, `NoAdult`, `NoChildren`, `TotalPrice`, `Note`) VALUES
(19, '2020-05-11', 100, NULL, 13, 'Phạm Hoàng Long', '123456789000', '2000-12-17', 'Kế 280 ADV P4 Q5 TP.HCM', '0981335100', 'phlonghcmus@gmail.com', NULL, NULL, NULL, ''),
(20, '2020-01-11', 100, NULL, 14, 'Phạm Thị Thanh Thảo', '33485564', '2000-02-11', 'Tp.HCM', '0375326415', 'phamthanhthaobp@gmail.com', NULL, NULL, NULL, ''),
(21, '2020-02-11', 100, NULL, 2, 'Phùng Tiến Đạt', '123456789', '2020-07-01', '280-ADV-Q5', '123456789', 'dat@thw.com', NULL, NULL, NULL, ''),
(22, '2020-03-11', 100, 2, NULL, 'Phùng Đạt', '12345678', NULL, '90/10D', '0982990316', 'drdat1415@gmail.com', '1', '0', '1799000', ''),
(23, '2020-04-11', 100, 7, NULL, 'Ngan Nguyen', '000000504', NULL, 'Hmon', '0961797214', 'nganng442000@gmail.com', '1', '0', '7899000', ''),
(24, '2020-05-11', 100, 2, 1, 'Võ Minh Quốc Việt', '123456789', '2020-07-06', '280-ADV-Q5', '123456789', 'viet@thw.com', '1', '0', '1799000', ''),
(25, '2020-06-11', 100, 2, 1, 'Võ Minh Quốc Việt', '123456789', '2020-07-06', '280-ADV-Q5', '123456789', 'viet@thw.com', '1', '0', '1799000', ''),
(26, '2020-07-12', 50, 6, NULL, 'Administrator', '0980809809', NULL, 'HIHIU', '3213123123', 'admin@gmail.com', '1', '0', '1345000', ''),
(27, '2020-07-12', 100, 5, NULL, 'Nguyễn Văn Công', '012345678', NULL, '280 ADV', '0334454752', 'congnv3030@gmail.com', '1', '0', '1790000', ''),
(28, '2020-07-12', 100, 2, 14, 'Phạm Thị Thanh Thảo', '33485564', '2000-02-11', 'Tp.HCM', '0375326415', 'phamthanhthaobp@gmail.com', '1', '0', '1799000', ''),
(29, '2020-07-12', 100, 6, 14, 'Phạm Thị Thanh Thảo', '33485564', '2000-02-11', 'Tp.HCM', '0375326415', 'phamthanhthaobp@gmail.com', '1', '0', '2690000', ''),
(30, '2020-07-12', 100, 6, NULL, 'Phùng Đạt', '12345678', NULL, '90/10D', '0982990316', 'drdat1415@gmail.com', '3', '0', '8070000', ''),
(31, '2020-07-12', 100, 2, 14, 'Phạm Thị Thanh Thảo', '33485564', '2000-02-11', 'Tp.HCM', '0375326415', 'phamthanhthaobp@gmail.com', '1', '0', '1799000', ''),
(32, '2020-07-12', 100, 2, NULL, 'Phùng Đạt', '12345678', NULL, '90/10D', '0982990316', 'drdat1415@gmail.com', '1', '0', '1799000', ''),
(33, '2020-07-12', 50, 8, NULL, 'Trịnh Kim Chi', '0123456789', NULL, 'An Dương Vương', '0931144045', 'trinhkimchi456@gmail.com', '2', '0', '9499000', ''),
(34, '2020-07-12', 100, 2, NULL, 'Phùng Đạt', '12345678', NULL, '90/10D', '0982990316', 'drdat1415@gmail.com', '1', '0', '1799000', ''),
(35, '2020-07-12', 100, 2, NULL, 'Phùng Đạt', '12345678', NULL, '90/10D', '0982990316', 'drdat1415@gmail.com', '1', '0', '1799000', ''),
(36, '2020-07-12', 100, 8, 15, 'Huỳnh Đức Cường', '026016602', '2000-04-30', '115 Thành phố Hồ Chí Minh', '0931174105', 'cpublicshare@gmail.com', '1', '0', '9499000', ''),
(37, '2020-07-13', 50, 27, 3, 'Lý Mỹ Như', '123456789', '2000-01-15', '', '123456789', 'nhuviolet2000@gmail.com', '5', '2', '172796800', ''),
(38, '2020-07-14', 100, 8, 24, 'Hùng', '245345555', '2020-07-07', 'aaa', '0399999999', 'hung@gmail.com', '1', '0', '9499000', ''),
(39, '2020-07-14', 100, 8, 24, 'Hùng', '245345555', '2020-07-07', 'aaa', '0399999999', 'hung@gmail.com', '1', '0', '9499000', ''),
(40, '2020-07-11', 100, NULL, 13, 'Phạm Hoàng Long', '123456789000', '2000-12-17', 'Kế 280 ADV P4 Q5 TP.HCM', '0981335100', 'phlonghcmus@gmail.com', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billinfo`
--

CREATE TABLE `billinfo` (
  `IdBillInfo` int(11) NOT NULL,
  `IdBill` int(11) NOT NULL,
  `NoAdult` int(11) NOT NULL,
  `NoChildren` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `Note` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `billinfo`
--

INSERT INTO `billinfo` (`IdBillInfo`, `IdBill`, `NoAdult`, `NoChildren`, `TotalPrice`, `Note`) VALUES
(13, 19, 2, 1, 9957600, ''),
(14, 20, 2, 0, 18998000, ''),
(15, 21, 1, 0, 1799000, ''),
(16, 22, 1, 0, 1799000, ''),
(17, 23, 1, 0, 7899000, ''),
(18, 24, 1, 0, 1799000, ''),
(19, 25, 1, 0, 1799000, ''),
(20, 26, 1, 0, 1345000, ''),
(21, 27, 1, 0, 1790000, ''),
(22, 28, 1, 0, 1799000, ''),
(23, 29, 1, 0, 2690000, ''),
(24, 30, 3, 0, 8070000, ''),
(25, 31, 1, 0, 1799000, ''),
(26, 32, 1, 0, 1799000, ''),
(27, 33, 2, 0, 9499000, ''),
(28, 34, 1, 0, 1799000, ''),
(29, 35, 1, 0, 1799000, ''),
(30, 36, 1, 0, 9499000, ''),
(31, 37, 5, 2, 172796800, ''),
(32, 38, 1, 0, 9499000, ''),
(33, 39, 1, 0, 9499000, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `decentralization`
--

CREATE TABLE `decentralization` (
  `IdDecentralization` int(11) NOT NULL,
  `Name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Note` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `decentralization`
--

INSERT INTO `decentralization` (`IdDecentralization`, `Name`, `Note`) VALUES
(1, 'Admin', ''),
(2, 'User', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `IdTour` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Schedule` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `Start` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NoDay` int(11) NOT NULL,
  `NoNight` int(11) NOT NULL,
  `Vehicle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Hotel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NoTicket` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `IdTourType` int(11) NOT NULL,
  `Note` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Banner` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`IdTour`, `Name`, `Schedule`, `Start`, `NoDay`, `NoNight`, `Vehicle`, `Hotel`, `NoTicket`, `Price`, `IdTourType`, `Note`, `Banner`) VALUES
(1, 'Phú Quốc', 'TpHCM - Phú Quốc - TpHCM', 'TP. Hồ Chí Minh', 3, 3, 'Xe ô tô', '3 sao', 50, 3688000, 1, 'Khám phá tứ đảo', 'phuquoc-banner.jpg'),
(2, 'Đà Lạt', 'TpHCM - Đà Lạt - TpHCM', 'TP. Hồ Chí Minh', 3, 3, 'Xe ô tô', '3 sao', 50, 1799000, 1, 'Thành phố mộng mơ', 'dalat-banner.jpg'),
(3, 'Tây Ninh Củ Chi', 'TpHCM - Tây Ninh - TpHCM', 'TP. Hồ Chí Minh', 1, 0, 'Xe ô tô', 'Không có', 50, 790000, 1, 'Vùng \"đất thép\" - Núi Bà Đen', 'tayninh-cuchi-banner.jpg'),
(4, 'Đà Nẵng', 'Đà Nẵng - Bà Nà - Hội An - Huế - Phong Nha', 'TP. Hồ Chí Minh', 4, 3, 'Xe ô tô, Máy bay', '4 sao', 50, 5990000, 1, 'Cung đình Huế - Bà Nà Hill', 'danang-banner.jpg'),
(5, 'Nha Trang', 'TpHCM - Nha Trang - Vinpearl Land - TpHCM', 'TP. Hồ Chí Minh', 3, 3, 'Xe ô tô', '3 sao', 50, 1790000, 1, 'Hòn Ngọc Biển Đông', 'nhatrang-banner.jpg'),
(6, 'Hà Nội', 'Hà Nội - Tràng An - Bái Đính - Hạ Long- Yên Tử - TpHCM', 'TP. Hồ Chí Minh', 2, 1, 'Xe ô tô, Máy bay', '3 sao', 50, 2690000, 1, 'Lãng hoa giữa lòng thành phố', 'hanoi-banner.jpg'),
(7, 'Thái Lan', 'Tp.HCM - BangKok - Pattaya - Baiyoke - TP.HCM ', 'TP. Hồ Chí Minh', 5, 4, 'Máy bay', '3 sao', 50, 7899000, 2, 'Đất nước chùa Vàng', 'thailan-banner.jpg'),
(8, 'Singapore', 'TP.HCM - Singapore - Gardens By The Bay - Madame Tussauds - TP.HCM ', 'TP. Hồ Chí Minh', 4, 3, 'Máy bay', '4 sao', 50, 9499000, 2, 'Quốc đảo Sư Tử', 'singapore-banner.jpg'),
(9, 'Malaysia-Singapore', 'TP.HCM - Kuala Lumpur - Genting - Malacca - Johor Bahru - Singapore - S.e.a Aquarium  - Wing Of Time', 'TP. Hồ Chí Minh', 6, 5, 'Máy bay', '4 sao', 50, 13990000, 2, 'Châu Á thu nhỏ - Quốc đảo Sư Tử', 'mala-sing-banner.jpg'),
(10, 'Campuchia', 'TP. Hồ Chí Minh – Siem Reap - AngKor - SiemReap – Phnom Penh - Tp.Hồ Chí Minh', 'TP. Hồ Chí Minh', 4, 3, 'Xe du lịch', '4 sao', 50, 4379000, 2, 'Xứ sở chùa Tháp', 'campuchia-banner.jpg'),
(11, 'Úc', 'TP.HCM - Sydney - Sydney Zoo - Blue Mountain - TP.HCM', 'TP. Hồ Chí Minh', 5, 4, 'Máy bay', '5 sao', 50, 36990000, 2, 'Xứ sở chuột túi', 'uc-banner.jpg'),
(12, 'Maldives', 'TP.HCM - Singapore - Maldives – Malé - TP.HCM', 'TP. Hồ Chí Minh', 5, 4, 'Máy bay', '4 sao', 50, 45990000, 2, 'Trải nghiệm thiên đường', 'maldives-banner.jpeg'),
(24, 'Dubai', 'TP.HCM - Bangkok - Dubai - Abu Dhabi - Sa mạc Safari - Burj Khalifa', 'TP.HCM', 5, 4, 'Máy bay', '5 sao', 50, 26990000, 2, 'Thành phố \"Vàng\"', 'dubai-banner.jpg'),
(25, 'Thụy Sỹ (Zurich)', 'TP.HCM - Dubai - Zurich - Lucerne - Tasch – Zermatt – Matterhorn - Lausanne – Geneva', 'TP.HCM', 6, 6, 'Máy bay', '5 sao', 50, 69999000, 2, 'Trái tim của Châu Âu', 'thuysy-banner.jpg'),
(26, 'Nhật Bản Mùa Thu', 'TP.HCM - Osaka - Nara - Kyoto - Nagoya - Núi Phú Sỹ - Tokyo ', 'TP.HCM', 6, 5, 'Máy bay', '4 sao', 50, 26900000, 2, 'Xứ sở Hoa Anh Đào', 'nhatban-banner.jpg'),
(27, 'Mỹ bờ tây', 'TP.HCM - HongKong – Los Angeles – Hollywood Boulevard -  Little Saigon – Solvang - San Jose – San Francisco', 'TP.HCM', 6, 5, 'Máy bay', '4 sao', 50, 53999000, 2, 'Thành phố không ngủ', 'mybotay-banner.jpg'),
(28, 'SaPa', 'Hà Nội - Hạ Long - Lào Cai - Sapa - Fansipan', 'TP. Hồ Chí Minh', 5, 4, 'Máy bay khứ hồi & xe du lịch đời mới', '3 sao', 50, 7099000, 1, 'Du lịch miền Bắc', 'SaPa-banner.jpg'),
(30, 'Hàn Quốc', 'TP.HCM – Seoul Hàn Quốc – Công viên Everland – Tháp Namsan', 'TP.HCM', 4, 3, 'Máy bay', '3 sao', 50, 9990000, 2, 'Xứ sở Kim Chi', 'hanquoc-banner.jpg'),
(31, 'HongKong', 'TP.HCM – HongKong – Disneyland', 'TP.HCM', 4, 3, 'Máy bay', '4 sao', 50, 14880000, 2, 'Xứ cảng thơm', 'hongkong-banner.jpg'),
(32, 'Quảng Bình', 'Hà Nội - Quảng Bình - Vũng Chùa - Đảo Yến - Động Thiên Đường - Suối Mooc', 'Hà Nội', 3, 3, 'Tầu hoả & xe du lịch đời mới', '4 sao', 50, 2990000, 1, 'Đồng Hới- Vũng Chùa Đảo Yến', 'QuangBinh-banner.jpg'),
(33, 'Cà Mau', 'Cà Mau - Nam Căn - Đất Mũi - Bạc Liêu - Sóc Trăng', 'TP. Hồ Chí Minh', 2, 2, 'Xe du lịch đời mới', '3 sao', 50, 1799000, 1, 'Khám phá rừng ngập mặn', 'CaMau-banner.jpg'),
(34, 'Tây Nguyên', 'TP.HCM - Buôn Ma Thuột - Pleiku - Kontum', 'TP. Hồ Chí Minh', 5, 4, 'Xe du lịch đời mới', '3 sao', 50, 2269000, 1, 'Tây Nguyên -KonTum', 'TN-banner.jpg'),
(35, 'Cần Thơ', 'Cần Thơ - Cái Bè - Châu Đốc - Hà Tiên', 'TP. Hồ Chí Minh', 4, 3, 'Xe du lịch đời mới', '3 sao', 50, 2579000, 1, 'Cần Thơ - Chợ nổi', 'CanTho-banner.jpg'),
(36, 'Phan Thiết', 'Phan Thiết - Làng Chài Xưa - Mũi Né', 'TP. Hồ Chí Minh', 3, 2, 'Xe du lịch đời mới', '4 sao', 50, 2279000, 1, 'Phá Đảo Phan Thiết', 'PhanThiet-banner.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tourdescription`
--

CREATE TABLE `tourdescription` (
  `IdDesciption` int(11) NOT NULL,
  `Description` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `Timeline` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `IdTour` int(11) NOT NULL,
  `Note` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tourdescription`
--

INSERT INTO `tourdescription` (`IdDesciption`, `Description`, `Timeline`, `Image`, `IdTour`, `Note`) VALUES
(7, '19:30: Đón quý khách tại Nhà văn hóa Quận 5 (105 Trần Hưng Đạo, Phường 6, Quận 5, TP.HCM). Xe và HDV Tuorist Half Way đón quý khách tại điểm hẹn, xe đưa đoàn khởi hành đến địa điểm đón tiếp theo.<br>*\r\n19:45: Đón quý khách tại Nhà văn hóa thanh niên Quận 1 (Số 4 Phạm Ngọc Thạch, Phường Bến Nghé, Quận 1, TP.HCM). Xe và HDV Tuorist Half Way đón quý khách tại điểm hẹn, xe đưa đoàn khởi hành rời TP.HCM đến Hà Tiên.', 'Đêm 1: Khởi hành từ TP.HCM - Hà Tiên', 'phuquoc-dem1.jpg', 1, 'Khám Phá Tứ Đảo - Đêm 1'),
(38, 'Sáng: Đến Hà Tiên quý khách dùng điểm tâm sáng, sau đó lên tàu cao tốc khởi hành đến Phú Quốc. quý khách tham quan Dinh Cậu, Thủy Long Thánh Mẫu.<br>\r\nTrưa: Quý khách dùng cơm trưa tại nhà hàng với món đặc sản địa phương Gỏi Cá Trích, nhận phòng và nghỉ ngơi.<br>*\r\nChiều: Quý khách tham quan: Nhà thùng nước mắm cá cơm truyền thống., Khám Phá Đảo Ngọc, Vườn Tiêu Suối Đá, Rựơu Sim, Khu du lịch Suối tranh, Làng chài Hàm Ninh.<br>\r\nTối: Quý khách dùng cơm tối, tự do thưởng thức hải sản.', 'Ngày 1: Hà Tiên - Phú Quốc', 'phuquoc-day1.jpg', 1, 'Khám Phá Tứ Đảo - Ngày 1'),
(39, 'Sáng: Quý khách dùng buffet tại khách sạn,sau đó khởi hành đến: Khu nuôi cấy Ngọc Trai , Khu di tích lịch sử Nhà Tù Phú Quốc, Thăm quan và viếng Chùa Hộ Quốc (Thiền Viện Trúc Lâm Hộ Quốc).Khởi hành đến bến cảng An Thới lên tàu bắt đầu hành trình tham quan Tứ Đảo: Hòn Thơm, Hòn Gầm Ghì (hay còn gọi là Hòn Dăm Ngang), Hòn Móng Tay, Hòn Mây Rút.<br>*\r\nTrưa: Quý khách dùng cơm trưa trên tàu.<br>\r\nChiều: Tắm biển tại Bãi Sao - một trong những bãi biển với làn nước xanh biếc, bở cát trắng mịn nổi tiếng tại Phú Quốc. Đến Bãi Sao, quý khách tự do nghỉ ngơi, vui chơi và tắm biển (chi phí tự túc).<br>\r\nTối: Quý khách dùng cơm tối. Tự do tham quan Chợ đêm Dinh Cậu trải nghiệm văn hóa ẩm thực Phú Quốc.', 'Ngày 2: Khám phá Tứ Đảo', 'phuquoc-day2.jpg', 1, 'Khám Phá Tứ Đảo - Ngày 2'),
(40, 'Sáng: Quý khách dùng buffet tại khách sạn, tự do mua sắm đặc sản tại Chợ Dương Đông. Quý khách làm thụ tục trả phòng. Khởi hành ra Bến tàu Phú Quốc về Hà Tiên.<br>*\r\nTrưa: Đến Hà Tiên, quý khách lên xe về lại Thành phố Hồ Chí Minh, dùng buổi  tại trạm dừng chân.<br>\r\nTối: Đến Tp. Hồ Chí Minh, trả quý khách tại điểm hẹn. Kết chuyến tham quan.', 'Ngày 3: Phú Quốc - Tp. Hồ Chí Minh', 'phuquoc-day3.jpg', 1, 'Khám Phá Tứ Đảo - Ngày 3'),
(41, '20:30: Đón quý khách tại Nhà văn hóa Quận 5 (105 Trần Hưng Đạo, Phường 6, Quận 5, TP.HCM). Xe và HDV Tuoris Half Way đón quý khách tại điểm hẹn, xe đưa đoàn khởi hành đến địa điển đón tiếp theo.<br>*\r\n20:45: Đón quý khách tại Nhà văn hóa thanh niên Quận 1 (Số 4 Phạm Ngọc Thạch, Phường Bến Nghé, Quận 1, TP.HCM). Xe và HDV Tuoris Half Way đón quý khách tại điểm hẹn, xe đưa đoàn khởi hành rời TP.HCM đến Đà Lạt.', 'Đêm 1: Khởi hành từ TP.HCM - Đà Lạt', 'dalat-dem1.jpg', 2, 'Thành phố mộng mơ - Đêm 1'),
(42, 'Sáng: Đến Đà Lạt, quý khách tham quan: Chùa Linh Phước, Thác Datanla , Khu du lịch Đất Sét, Thiền viện Trúc Lâm.<br>\r\nTrưa: Quý khách dùng cơm trưa tại nhà hàng và nhận phòng nghỉ ngơi.<br> *\r\nChiều: Tham quan Cánh Đồng Hoa Cẩm Tú Cầu, Nhà Ga Đà Lạt.<br> \r\nTối: Quý khách dùng Buffet Rau thay cho buổi cơm chiều.', 'Ngày 1: Thác Datanla - Hồ Vô Cực - Thiền Viện Trúc Lâm - Cánh Đồng Hoa Cẩm Tú Cầu', 'dalat-day1.jpg', 2, 'Thành phố mộng mơ - Ngày 1'),
(43, 'Sáng: Quý khách dùng buffet, khởi hành tham quan: Đà Lạt, Khu vườn cổ tích ở Đà Lạt - Dalat Fairytale Land.<br>\r\nTrưa: Quý khách dùng cơm trưa, về lại khách sạn nghỉ ngơi.<br>*\r\nChiều: Quý khách tham quan: Vườn Dâu Hiệp Lực, Khu Du Lịch LangBiang (chi phí tự túc).<br>\r\nTối: Quý khách dùng cơm dưới chân núi LangBiang, tham gia với người dân tộc Lạch.', 'Ngày 2: Đà Lạt View - Dalat Fairytale Land - Vườn Dâu Hiệp Lực - Núi LangBiang', 'dalat-day2.jpg', 2, 'Thành phố mộng mơ - Ngày 2'),
(44, 'Sáng: Quý khách dùng buffet và làm thủ tục trả phòng. Quý khách tham quan và mua sắm tại Trung tâm thương mại Chợ Đà Lạt.<br>*\r\nTrưa: Đến Bảo Lộc dùng cơm trưa tại nhà hàng. Khởi hành về TP. Hồ Chí Minh.<br>\r\nTối: Quý khách về đến TP. Hồ Chí Minh. Kết thúc tour du lịch Đà Lạt 3 ngày 3 đêm.', 'Ngày 3: Chợ Đà Lạt - Tp. Hồ Chí Minh', 'dalat-day3.jpg', 2, 'Thành phố mộng mơ - Ngày 3'),
(45, '7:00: Xe đón Quý khách tại Trường Đại học Sư phạm TP.HCM. Quý khách dừng chân tại Trảng Bàng dùng điểm tâm sáng.<br>\r\n9:00: đến Núi Bà Đen, Quý khách lên núi bằng hệ thống cáp treo. Tham quan hệ thống chùa Điện Bà bao gồm chùa Hạ, chùa Trung, chùa Thượng, chùa Hang và một số hang động như động Thanh Long, động Ông Hổ, động Ba Cô, động Ba Tuần, động Thiên Thai, động Ông Tà...<br>\r\n10h30: Quý khách xuống núi bằng cáp treo, ngắm toàn cảnh đồng bằng Tây Ninh trong sương mờ.<br>*\r\n11:00: Xe và hướng dẫn viên đưa Quý khách đến với Tòa Thánh Cao Đài - sự kết hợp hài hoà giữa mỹ thuật Á Đông và phong cách phương Tây.<br>\r\n12:00: Dùng bữa trưa tại nhà hàng và nghỉ ngơi. \r\n13:00: Bắt đầu đi du lịch Củ Chi.<br>\r\n15:00: Đến địa đạo Củ Chi (Bến Đình): xem phim tư liệu về chiến tranh du kích của người dân địa phương, thăm Bảo Tàng vũ khí chiến tranh và địa đạo.<br>\r\n16:30: Khởi hành về Sài Gòn.<br>\r\n18:00: Quý khách về tới thành phố Hồ Chí Minh, kết thúc tour du lịch Tây Ninh Địa Đạo Củ Chi 1 ngày.', 'TP.Hồ Chí Minh - Khám Phá núi Bà Đen - Địa Đạo Củ Chi', 'tayninh-cuchi.jpg', 3, 'Vùng \"đất thép\" - Núi Bà Đen'),
(46, 'Sáng: Hướng dẫn viên đón khách tại Đà Nẵng. Tham quan Cầu Rồng, Cầu Tình Yêu, Hàn Giang với tượng Cá Chép Hóa, Chùa Quan Thế Âm - Bảo Tàng Phật Học và Làng Nghề Điêu Khắc Đá. Mua sắm đặc sản Quà Miền Trung.<br>\r\nTrưa: Quý khách ăn trưa nhà hàng.<br>*\r\nChiều: Khởi hành vào Hội An tham quan và mua sắm Phố Cổ với: Chùa Cầu Nhật Bản, Nhà Cổ, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ.<br>\r\nTối: Ăn tối nhà hàng. Tự do trên sông Hàn ngắm cảnh Đà Thành về đêm, chụp ảnh Cầu Quay Sông Hàn, cầu Rồng phun lửa và nước vào cuối tuần.', 'Ngày 1: Tp. Hồ Chí Minh - Đà Nẵng - Hội An', 'danang-day1.jpg', 4, 'Cung đình Huế - Bà Nà Hill - Ngày 1'),
(47, 'Sáng: Dùng điểm tâm tại khách sạn. Khởi hành đi Bà Nà - Núi Chúa, viếng chùa Linh Ứng, viếng đền thờ Bà Chúa Mẫu Thượng Ngàn, Cầu vàng (Vé cáp treo Bà Nà tự túc), vui chơi công viên Fantasy Park.<br>\r\nTrưa: Ăn trưa Buffet trên núi hoặc setmenu tại nhà hàng dưới chân núi.<br>*\r\nChiều: Khởi hành đi Cố Đô Huế - Di sản văn hoá Thế Giới, xuyên hầm đường bộ đèo Hải vân, dừng chân chụp ảnh làng Chài Lăng Cô.<br>\r\nTối: Ăn tối nhà hàng với đặc sản xứ Huế. Ngồi thuyền Rồng nghe Ca Huế và thả hoa đăng cầu may trên dòng Hương Giang thơ mộng.', 'Ngày 2: Bà Nà Hills - Cố Đô Huế', 'danang-day2.jpg', 4, 'Cung đình Huế - Bà Nà Hill - Ngày 2'),
(48, 'Sáng: Dùng điểm tâm tại khách sạn. Rời Huế đi Phong Nha - Kẻ Bàng - Di Sản Thiên Nhiên Thế Giới. Viếng thăm Thánh Địa La Vang và chụp ảnh Vĩ tuyến 17 - Cầu Hiền Lương - Sông Bến Hải.<br>\r\nTrưa: Quý khách dùng bữa nhà hàng tại Phong Nha.<br>*\r\nChiều: Ngồi thuyền ngược sông Son chinh phục động Phong Nha kỳ vĩ: hang Bi Ký, Cô Tiên, Cung Đình. Khởi hành về lại Cố Đô.<br>\r\nTối: Ăn tối nhà hàng, tự do khám phá Cố Đô về đêm với cầu Tràng Tiền, dòng sông Hương thơ mộng.', 'Ngày 3: Huế - Thánh Địa La Vang - Đông Phong Nha', 'danang-day3.jpg', 4, 'Cung đình Huế - Bà Nà Hill - Ngày 3'),
(49, 'Sáng: Dùng điểm tâm tại khách sạn. Khởi hành tham quan tham quan Đại Nội - Hoàng Cung của 13 vị vua triều Nguyễn, triều đại phong kiến cuối cùng của Việt Nam và Chùa Thiên Mụ cổ kính, Lăng Khải Định – sự kết hợp của kiến trúc Đông - Tây. <br>*\r\nTrưa: Quý khách dùng bữa trưa tại nhà hàng.<br>\r\nChiều: Tiễn quý khách tại sân bay Huế. Khởi hành về Đà Nẵng, tắm biển Mỹ Khê. Tiễn quý khách ra sân bay Đà Nẵng. Kết thúc chương trình tour Đà Nẵng 4 ngày 3 đêm khởi hành từ Hồ Chí Minh.\r\n', 'Ngày 4: Lăng Khải Định - Đại Nội Kinh Thành Huế - Tp. Hồ Chí Minh', 'danang-day4.jpg', 4, 'Cung đình Huế - Bà Nà Hill - Ngày 4'),
(50, '19:30: Đón quý khách tại Nhà văn hóa Quận 5 (105 Trần Hưng Đạo, Phường 6, Quận 5, TP.HCM). Xe và HDV Tuoris Half Way đón quý khách tại điểm hẹn, xe đưa đoàn khởi hành đến địa điểm đón tiếp theo. <br> *\r\n19:45: Đón quý khách tại Nhà văn hóa thanh niên Quận 1 (Số 4 Phạm Ngọc Thạch, Phường Bến Nghé, Quận 1, TP.HCM). Xe và HDV Tuoris Half Way đón quý khách tại điểm hẹn, xe đưa đoàn khởi hành rời TP.HCM đến Nha Trang.', 'Đêm 1: Khởi hành từ TP.HCM - Nha Trang', 'nhatrang-dem1.jpg', 5, 'Hòn Ngọc Biển Đông - Đêm 1'),
(51, 'Sáng:  Đến Cam Ranh, quý khách dừng chân vệ sinh cá nhân, dùng điểm tâm sáng, nghỉ ngơi. Đến KDL Bãi Dài quý khách nhận ghế dù, tự do tắm biển, thưởng thức hải sản của ngư dân địa phương (chi phí tự túc).<br>\r\nTrưa: Quý khách khởi hành về lại Nha Trang, dùng cơm trưa tại nhà hàng. Sau đó quý khách nhận phòng khách sạn và nghỉ ngơi.<br>*\r\nChiều: Xe khởi hành tham quan Viếng Long Sơn Tự, Nhà Yến,Bùn Khoáng Nóng Tháp Bà Nha Trang (Chi phí ngoài chương trình).<br>\r\nTối: Quý khách dùng Buffet Hải Sản tại nhà hàng. Tự do tham quan khám phá phố biển về đêm hoặc có thể thưởng thức đặc sản địa phương như: Bún Chả Cá, Bún Sứa Năm Beo Chợ Đầm, Hải Sản Bình Dân Tháp Bà…', 'Ngày 1: KDL Bãi Dài - Long Sơn - Nhà Yến - Tháp Bà', 'nhatrang-day1.jpg', 5, 'Hòn Ngọc Biển Đông - Ngày 1'),
(52, 'Sáng: Quý khách dùng điểm tâm sáng, di chuyển đến Khu Du Lịch Suối Hoa Lan: Tham quan qua con đường Lan, vườn nuôi Đà Điểu, Khu Vườn Bướm duy nhất tại Việt Nam. Và tắm biển tự do.<br>\r\nTrưa: Quý khách dùng cơm trưa tại khu du lịch, nghỉ ngơi, tiếp tục tắm biển tự do.<br>*\r\nChiều: Quý khách khởi hành về khách sạn nghỉ ngơi, tự do tham quan và dùng cơm chiều.<br>\r\nTối: Quý khách đến với Khu du lịch Vinpearl Land - tự do tham quan, tắm biển, vui chơi và tận hưởng dịch vụ (chi phí tự túc).\r\nSau đó quý khách lên cáp treo trở về lại đất liền. Quý khách về khách sạn nghỉ ngơi.', 'Ngày 2: Vinperland - KDL Suối Hoa Lan - Nhà Hát Con Sò', 'nhatrang-day2.jpg', 5, 'Hòn Ngọc Biển Đông - Ngày 2'),
(53, 'Sáng: Quý khách dùng điểm tâm sáng, làm thủ tục trả phòng, trên đường quý khách dừng chân viếng Chùa Từ Vân(Chùa Ốc) ngôi chùa được xây dựng bằng những chiếc vỏ Ốc.  Đến Phan Rang dừng chân thưởng thức miễn phí đặc sản Rượu Vang, Mật Nho Phan Rang.<br>*\r\nTrưa: Đến Cà Ná, quý khách dùng cơm trưa tại nhà hàng, tham quan và mua quà.<br>\r\nTối: Đến TP. Hồ Chí Minh, xe đưa quý khách về điểm đón ban đầu. Kết thúc tour Nha Trang 3 ngày 3 đêm.', 'Ngày 3: TP. Nha Trang - Chùa Ốc - TP. Hồ Chí Minh', 'nhatrang-day3.jpg', 5, 'Hòn Ngọc Biển Đông - Ngày 3'),
(54, 'Sáng: Xe và HDV đón đoàn tại Hà Nội khởi hành đi tham quan KDL Tràng An – Ninh Bình. hang Địa Linh, hang Sinh Dược, hang Mây…<br>\r\nTrưa: Ăn trưa với đặc sản Cơm Cháy Dê Núi.<br>*\r\nChiều: Tham quan Chùa Bái Đính, quý khách rời Ninh Bình đến Hạ Long. Đến Hạ Long, nhận phòng, ăn tối.<br>\r\nTối: Tự do chợ đêm Hạ Long, ngắm cảnh thành phố về đêm. Nghỉ đêm tại Hạ Long.', 'Ngày 1: Hà Nội - Trang An - Bái Đính - Hạ Long', 'hanoi-day1.jpg', 6, 'Lãng hoa giữa lòng thành phố - Ngày 1'),
(55, 'Sáng: Tham quan vịnh Hạ Long – di sản thiên nhiên thế giới được UNESSCO công nhận, chiêm ngưỡng vẻ đẹp huyền bí của hàng ngàn đảo đá và các hang động kỳ thú. Thăm quan động Thiên Cung, ngắm cảnh Làng Chài, hòn Ấm, hòn Rùa, hòn Đỉnh Hương, hòn Chó Đá, hòn gà Chọi…<br>\r\nTrưa: Ăn trưa tại nhà hàng.<br>*\r\nChiều: Tham quan đất Phật Yên Tử quý khách đi Cáp Treo, tham quan Vườn Tháp Tổ, Chùa Hoa Yên (Chi phí tự túc). Sau đó khởi hành về Hà Nội, trên đường dừng chân thưởng thức đặc sản bánh đậu xanh Hải Dương. Ăn tối với đặc sản: Bún chả, Nem Hà Nội.<br>\r\nTối: Về đến Hà Nội. Kết thúc chương trình.', 'Ngày 2: Hạ Long - Yên Tử - Hà Nội', 'hanoi-day2.jpg', 6, 'Lãng hoa giữa lòng thành phố - Ngày 2'),
(56, 'Quý khách tập trung tại cổng D2, ga đi Quốc tế - sân bay Tân Sơn Nhất, đáp chuyến bay đi Bangkok. Đến Thái Lan, khởi hành đi Pattaya - thành phố biển cách Bangkok 150km về phía nam.<br>*\r\nTrên đường đi ghé tham quan Vườn thú Sriracha Tiger Zoo và Crocodile Farm thưởng thức những màn trình diễn ngoạn mục của hổ, cá sấu, voi, khỉ… Nghỉ đêm tại Pattaya.', 'Ngày 1: Tp.HCM - BangKok - Pattaya', 'thailan-day1.jpg', 7, 'Đất nước chùa Vàng - Ngày 1'),
(57, 'Sáng: Trả phòng. Khởi hành về thủ đô Bangkok, trên đường về ghé tham quan và mua sắm tại Cửa hàng sản phẩm gối, nệm cao su.<br>\r\nTrưa: Ăn trưa tại nhà hàng, sau đó quý khách sẽ được xe đưa đi tham quan Sở thú thiên nhiên (Safari world), chiêm ngưỡng các loài thú hoang dã.<br>*\r\nChiều: Tham quan Công viên hải dương (Marine Park) với các chương trình biểu diễn tài tình của cá Heo hoặc các chú chim thông minh và các pha hành động ấn tượng trong loạt phim Điệp viên 007 hay cao bồi Viễn Tây.<br>\r\nTối: Tự do tham quan và nghỉ đêm tại Bangkok.', 'Ngày 2: Pattaya - BangKok ', 'thailan-day2.jpg', 7, 'Đất nước chùa Vàng - Ngày 2'),
(58, 'Sáng: Dùng buffet tại khách sạn, sau khi ăn quý khách đi tham quan, chùa Phật Ngọc Lục Bảo, chùa Vàng - ngôi chùa nổi tiếng tại Bangkok với bức tượng Phật bằng vàng nặng 5,5 tấn.Du khách có thể thỉnh các tượng Phật nhỏ dát vàng cho gia đình.<br>\r\nTrưa: Dùng bữa và nghỉ ngơi tại khách sạn.<br>*\r\nChiều: Tự do mua sắm tại các siêu thị nổi tiếng như Siam Paragon, Siam Discovery, MBK… Thưởng thức buffet tối quốc tế tại tầng hoặc 78, ngắm toàn cảnh Bangkok về đêm ở tầng 84 tại tòa nhà BAIYOKE SKY một trong các tòa nhà cao nhất ở BangKok.<br>\r\nTối: về khách sạn và nghỉ đêm tại Bangkok.', 'Ngày 3: BangKok - Baiyoke ', 'thailan-day3.jpg', 7, 'Đất nước chùa Vàng - Ngày 3'),
(59, 'Sáng: Quý khách dùng điểm tâm sáng buffet tại khách sạn, tự do mua sắm tại Chợ Thái Lan.<br>*\r\nTrưa: Trả phòng. Ra sân bay làm thủ tục đáp chuyến bay về TP.HCM.<br>\r\nChiều: Về TP.HCM. Kết thúc chương trình du lịch Thái Lan.', 'Ngày 4: BangKok - TP.HCM ', 'thailan-day4.jpg', 7, 'Đất nước chùa Vàng - Ngày 4'),
(60, 'Sáng: Quý khách tập trung tại cổng D2, ga đi Quốc tế - sân bay Tân Sơn Nhất, đáp chuyến bay đi Singapore. Quý khách tự túc bữa ăn trên máy bay.\r\nĐến Singapore tham quan Công viên Sư Tử Biển - biểu tượng của Singapore, Flower Dome, Cloud Forest.<br>*\r\nChiều: Chụp hình lưu niệm với nhà hát “Victoria”, Toà nhà Quốc Hội. Tham quan và chụp hình tại Khu vườn năng lượng (Gardens by the Bay) - khu vườn sinh thái đặc biệt với các “siêu cây” năng lượng mặt trời.<br>\r\nTối: nhận phòng và nghỉ đêm tại Singapore.', 'Ngày 1: TP.HCM - Singapore - Gardens By The Bay', 'singapore-day1.jpg', 8, 'Quốc đảo Sư Tử - Ngày 1'),
(61, 'Sáng: Tham quan Đỉnh Faber (Mount Faber), đỉnh cao nhất đảo quốc ngắm toàn cảnh hải cảng. Tiếp tục tham quan Đập nước Marina Barrage.<br>\r\nTrưa: Mua sắm tại Cửa hàng vàng bạc đá quý. Sang đảo Sentosa, tham quan Bảo tàng tượng sáp Madame Tussauds Singapore.<br>*\r\nChiều: Ăn buffet, thưởng thức Chương trình biểu diễn nhạc nước “WINGS OF TIME” - xem các tia nước nhảy múa trên nền nhạc cổ điển kết hợp hiện đại và tiết mục biểu diễn tia laser.<br>\r\nTối: Về khách sạn,quý khách có thể vui chơi tự do, nghỉ đêm tại Singapore.', 'Ngày 2: Singapore - Madame Tussauds', 'singapore-day2.jpg', 8, 'Quốc đảo Sư Tử - Ngày 2'),
(62, 'Sáng-trưa-chiều: Quý khách tự do mua sắm và khám phá Singapore (tự túc).<br>*\r\nTối: Về khách sạn .Nghỉ đêm tại Singapore.', 'Ngày 3: Singapore - 01 Ngày Tham Quan Tự Do', 'singapore-day3.jpg', 8, 'Quốc đảo Sư Tử - Ngày 3'),
(63, 'Sáng: Quý khách dùng buffet tại khách sạn.<br>\r\nTrưa: Làm thủ tục trả phòng. Ra sân bay làm thủ tục đáp chuyến bay về Tp.HCM.<br>*\r\nChiều: Quý khách tự túc bữa ăn trên máy bay. Kết thúc chương trình du lịch Singapore.', 'Ngày 4: Singapore - TP.HCM ', 'singapore-day4.jpg', 8, 'Quốc đảo Sư Tử - Ngày 4'),
(64, 'Quý khách tập trung tại cổng D2, ga đi Quốc tế - sân bay Tân Sơn Nhất, đáp chuyến bay VN675 (15:05 - 18:05) đi Kuala Lumpur.<br>*\r\nXe và hướng dẫn viên đón đoàn tại sân bay đưa đoàn về nhận phòng khách sạn. Nghỉ đêm tại Kuala Lumpur.', 'Ngày 1: TP.HCM - Kuala Lumpur ', 'mala-sing-day1.jpg', 9, 'Châu Á thu nhỏ - Quốc đảo Sư Tử - Ngày 1'),
(65, 'Sáng: Xe đưa đoàn đi tham quan động Batu, mua sắm tại Cửa hàng vàng bạc đá quý và Cửa hàng đồng hồ.<br>\r\nTrưa: Khởi hành lên Genting - thành phố trên mây độ cao 1.700m so với mực nước biển.<br>*\r\nChiều: Chương trình tự do để đoàn tham quan Casino hoặc khu Theme Park (vé tham gia các trò chơi Quý khách tự túc). Đoàn khởi hành về lại Kuala Lumpur.<br>\r\nTối: Nghỉ đêm và ăn uống tại khách sạn Kuala Lumpur.', 'Ngày 2: Kuala Lumpur - Genting - Kuala Lumpur', 'mala-sing-day2.jpg', 9, 'Châu Á thu nhỏ - Quốc đảo Sư Tử - Ngày 2'),
(66, 'Sáng: Trả phòng. Tham quan vòng quanh Thủ đô Kuala Lumpur: Cung điện Hoàng Gia, Quảng Trường Độc Lập, Toà Thị Chính, Đài kỷ niệm Quốc gia.<br>\r\nTrưa: Tham quan Chùa Bà Thiên Hậu, Cửa hàng đặc sản địa phương, Tháp đôi Petronas và khởi hành đi Thành phố cổ Malacca.<br>*\r\nChiều: Tham quan Chùa Cheng Hoon Teng, Quảng trường Hà Lan, Di Tích Pháo Đài Cổ Famosa - pháo đài được người Bồ Đào Nha xây dựng trong thế kỷ 16.<br>\r\nTối: Quý khách tự do khám phá Malacca về đêm. Nhận phòng tại khách sạn. Nghỉ đêm tại Malacca.', 'Ngày 3: Kuala Lumpur - Malacca ', 'mala-sing-day3.jpg', 9, 'Châu Á thu nhỏ - Quốc đảo Sư Tử - Ngày 3'),
(67, 'Sáng: Trả phòng, khởi hành đi Johor Bahru - Thành phố ở cực nam Malaysia tiếp giáp với Singapore. Đoàn làm thủ tục nhập cảnh vào Singapore.<br>\r\nTrưa: Xe và hướng dẫn Singapore đón đoàn tại cửa khẩu về khách sạn nghỉ ngơi.<br> *\r\nChiều: Đưa đoàn đi tham quan Vườn chim Jurong - Jurong Bird Park một trong những quần thể du lịch lớn nhất tại Singapore.<br>\r\nTối: Quý  khách vui chơi và ăn uống tự do (chi phí tự túc). Nghỉ đêm tại Singapore.', 'Ngày 4: Malacca - Johor Bahru - Singapore', 'mala-sing-day4.jpg', 9, 'Châu Á thu nhỏ - Quốc đảo Sư Tử -  Ngày 4'),
(68, 'Sáng: Tham quan Công viên Sư Tử Biển, Tòa nhà MBS - Marina Bay Sands – đây được xem là biểu tượng mới của nước Singapore hiện đại.<br>\r\nTrưa: Ăn trưa món nướng (Korean BBQ). Xe đưa đoàn sang Đảo Sentosa, tham quan Thủy cung S.E.A Aquarium.<br>*\r\nChiều: Chương trình biểu diễn nhạc nước hết sức độc đáo “Wings Of Time”, du khách có dịp xem các tia nước nhảy múa trên nền nhạc cổ điển kết hợp hiện đại và tiết mục biểu diễn tia laser tuyệt đẹp.<br>\r\nTối: Ăn uống vui chơi tự do và nghỉ đêm tại Singapore.', 'Ngày 5: Singapore - S.e.a Aquarium - Wing Of Time', 'mala-sing-day5.jpg', 9, 'Châu Á thu nhỏ - Quốc đảo Sư Tử - Ngày 5'),
(69, 'Sáng: Trả phòng. Tham quan Đập nước Marina, Khu vườn năng lượng (Gardens by the Bay) khu nhà kính Flower Dome - là nhà kính thủy tinh lớn nhất trên thế giới trang trí được thay đổi tùy theo từng chủ đề trong năm.<br>*\r\nTrưa: Quý khách tự do mua sắm. Ra sân bay làm thủ tục đáp chuyến bay về Tp.HCM.<br>\r\nNgày về: Đến sân bay Tân Sơn Nhất, đoàn làm thủ tục nhập cảnh, lấy hành lý. Kết thúc chương trình tham quan Malaysia – Singapore…', 'Ngày 6: Singapore- Gardens By The Bay - Tp.HCM', 'mala-sing-day6.jpg', 9, 'Châu Á thu nhỏ - Quốc đảo Sư Tử - Ngày 6'),
(70, 'Sáng: Đón du khách tại văn phòng Lữ hành Tourist Half Way, khởi hành đi Mộc Bài, nghỉ giải lao tạiTrảng Bàng.<br>\r\nTrưa: Nhập cảnh Campuchia. Dừng lại ăn trưa tại nhà hàng.<br>*\r\nChiều: Tiếp tục hành trình qua tỉnh Prey Veng. Sau đó, xe đưa du khách đi Siêm Riệp, tham quan và nghe thuyết minh về cầu Rồng.<br>\r\nTối: Đến Siêm Riệp, nhận phòng, nghỉ đêm.', 'Ngày 1: TP. Hồ Chí Minh – Siem Reap', 'cpc-day1-982x574.jpg', 10, 'Xứ sở chùa Tháp - Ngày 1'),
(71, 'Sáng: Ăn buffet tại khách sạn. Sau đó xe đưa du khách đi tham quan Cổng Nam Angkor Thom phong cách kiến trúc độc đáo Khmer cổ đại.<br>\r\nTrưa: Dừng chân ăn trưa và tham quan tượng thần Bayon, đền Ta Phrom – nơi quay bộ phim “Bí mật ngôi mộ cổ” và các đền đài khác.<br>*\r\nChiều: Tham quan Angkor Wat. Viếng đền Preah Ang Chek – Preah Ang Chom là nơi linh thiêng và nổi tiếng với người dân Campuchia.<br>\r\nTối: Trở về thành phố, ăn buffet tối và thưởng thức chương trình nghệ thuật Apsara đặc sắc. Nghỉ đêm tại Siêm Riệp.', 'Ngày 2: Khám phá  AngKor huyền bí', 'campuchia-day2.jpg', 10, 'Xứ sở chùa Tháp - Ngày 2'),
(72, 'Sáng: Trả phòng. Khởi hành đi Phnôm Pênh, tại điểm giải lao, du khách sẽ thú vị với món ăn chế biến từ côn trùng: Nhện, Bò Cạp chiên giòn.<br>\r\nTrưa: Đến Phnôm Pênh nhận phòng nghỉ ngơi.<br>*\r\nChiều: Tham quan Hoàng cung, chùa Bạc, quảng trường sông Bốn Mặt, đài Độc Lập. <br>\r\nTối: Du khách tham quan ăn uống tự do (chi phí tự túc).Về khách sạn. Nghỉ đêm tại Phnôm Pênh.<br>', 'Ngày 3: SiemReap – Phnom Penh', 'campuchia-day3.jpg', 10, 'Xứ sở chùa Tháp - Ngày 3'),
(73, 'Sáng: Dùng buffet tại khách sạn, du khách trả phòng. Sau đó, xe và Hướng dẫn viên Touris Half Way đưa du khách đi tham quan và mua sắm tại chợ Trung Tâm (chi phí tự túc).<br>*\r\nTrưa: Khởi hành về Việt Nam.<br>\r\nChiều: Xe đón du khách tại cửa khẩu Mộc Bài về Tp. HCM, kết thúc chuyến tham quan.', 'Ngày 4: Phnom Penh - Tp.Hồ Chí Minh', 'campuchia-day4.jpg', 10, 'Xứ sở chùa Tháp - Ngày 4'),
(74, 'Quý khách tự túc tập trung tại Ga đi quốc tế - sân bay quốc tế Tân Sơn Nhất, làm thủ tục đáp chuyến bay đi Sydney.<br> *\r\nQuý khách cùng hướng dẫn viên Tourist Half Way ăn nhẹ và nghỉ đêm trên máy bay.', 'Ngày 1: TP.HCM - Sydney', 'uc-day1.jpg', 11, 'Xứ sở chuột túi - Ngày 1'),
(75, 'Sáng: Dùng buffer và bắt đầu hành trình khám phá Sydney. Tham quan Công viên Hyde Park, nhà thờ St Mary, Chiếc ghế của Bà Macquarie (Mrs. Macquarie\'s Chair) - nơi thống trị của nữ hoàng Elizabeth.<br>\r\nTrưa: Chụp hình bên ngoài Trung tâm triển lãm nghệ thuật New South Wales.<br>*\r\nChiều: Quý khách tự do dạo chơi tại Cảng Darling - \"Bến cảng tình yêu\" nổi tiếng dành cho các cặp tình nhân. Dừng chân chụp hình bên ngoài Nhà hát Con Sò trứ danh và Cầu cảng Sydney.<br>\r\nTối: Nhận phòng khách sạn và nghỉ đêm tại Sydney.', 'Ngày 2: Khám phá Sydney', 'uc-day2.jpg', 11, 'Xứ sở chuột túi - Ngày 2'),
(76, 'Sáng: Ăn sáng và di chuyển đến Sydney Zoo.<br>\r\nTrưa: Dùng bữa tại nhà hàng của sở thú.<br>*\r\nChiều: Tự do mua sắm tại trung tâm thương mại Westfield (chi phí tự túc).<br>\r\nTối: Nghỉ đêm tại Sydney.', 'Ngày 3: Sydney - Sydney Zoo', 'uc-day3.jpg', 11, 'Xứ sở chuột túi - Ngày 3'),
(77, 'Sáng: Tham quan Vườn quốc gia Blue Mountains, thung lũng Jamison.<br>\r\nTrưa: Dùng bữa tại nhà hàng của thung lũng Jamison.<br>*\r\nChiều: Đoàn quay về Sydney, quý khách tự do vui chơi và ăn uống (chí phí tự túc).<br>\r\nTối: Nghỉ đêm tại khách sạn Sydney.', 'Ngày 4: Sydney - Blue Mountain - Sydney', 'uc-day4.jpg', 11, 'Xứ sở chuột túi - Ngày 4'),
(78, 'Sáng: Trả phòng. Ra sân bay Sydney làm thủ tục chuyến bay về Tp.HCM.<br>*\r\nNgày về: Đến sân bay Tân Sơn Nhất. Kết thúc chương trình du lịch Úc.', 'Ngày 5: Sydney - TP.HCM', 'uc-day5.jpg', 11, 'Xứ sở chuột túi - Ngày 5'),
(79, 'Quý khách tập trung tại cổng D2, ga đi Quốc tế - sân bay Tân Sơn Nhất, đáp chuyến bay đi Singapore.<br>\r\nĐến sân bay Changi, nối chuyến bay đi Maldives.<br>*\r\nĂn tối trên máy bay. Đến sân bay, tàu cao tốc đưa Quý khách đến nhận phòng Resort tiêu chuẩn 5 sao (hoặc tương đương). Nghỉ đêm tại Maldives.<br>', 'Ngày 1: TP.HCM - Singapore - Maldives', 'maldives-day1.jpg', 12, 'Thiên đường nghỉ dưỡng - Ngày 1'),
(80, 'Sáng: Dùng buffet, quý khách có thể tản bộ dọc bãi biển, chiêm ngưỡng những bãi biển cát trắng khiến bất cứ ai lần đầu đặt chân đến đây đều không khỏi ngỡ ngàng.<br>\r\nTrưa: Ăn trưa và nghỉ ngơi tại chỗ.<br>*\r\nChiều: Dịch vụ lặn biển, trải nghiệm cảm giác đắm mình trong làn nước xanh màu ngọc bích hoặc câu cá rất thú vị và ngắm hoàng hôn giữa biển (chi phí tự túc).<br>\r\nTối: Ăn tối ở nhà hàng và nghỉ đêm tại khách sạn Maldives.', 'Ngày 2: Khám phá Maldives', 'maldives-day2.jpg', 12, 'Thiên đường nghỉ dưỡng - Ngày 2'),
(81, 'Sáng: Sau khi dùng buffet quý khách có thể tự túc tham gia các hoạt động trên biển.<br>\r\nTrưa: Ăn trưa và nghỉ ngơi tại chỗ.<br>*\r\nChiều: Quý khách có thể trải nghiệm các dịch vụ đẳng cấp tại đảo (chi phí tự túc).<br>\r\nTối: Ăn tối ở nhà hàng và nghỉ đêm tại khách sạn Maldives.', 'Ngày 3: Khám phá Maldives', 'maldives-day3.jpg', 12, 'Thiên đường nghỉ dưỡng - Ngày 3'),
(82, 'Sáng: Quý khách tắm biển tùy thích. Tiếp đến quý khách đi tàu cao tốc về thủ đô Malé chứa đựng rất nhiều điều thú vị.<br>\r\nTrưa: Ăn uống vui chơi tự túc.<br>*\r\nChiều: Quý khách tự do dạo bộ tham quan Đền thờ Hồi giáo Malé, Nhà thờ Hukuru Miskiiy và mua sắm những tại chợ địa phương Maldives. Ra sân bay đáp chuyến bay về Singapore. Nghỉ đêm và ăn nhẹ trên máy bay.', 'Ngày 4: Maldives – Malé- Singapore', 'maldives-day4.jpg', 12, 'Thiên đường nghỉ dưỡng - Ngày 4'),
(83, 'Sáng: Đến Singapore, nối chuyến bay về TP. HCM.<br>*\r\nMáy bay hạ cánh tại sân bay Tân Sơn Nhất. Kết thúc chương trình du lịch Maldives.', 'Ngày 5: Singapore - TP.HCM', 'maldives-day5.jpg', 12, 'Thiên đường nghỉ dưỡng - Ngày 5'),
(84, 'Quý khách tập trung tại lầu 2 Ga đi quốc tế - sân bay quốc tế Tân Sơn Nhất, cùng hướng dẫn viên Lữ hành Tourist Half Way làm thủ tục đáp chuyến bay đi Bangkok (Ăn nhẹ trên máy bay).<br>*\r\nĐến sân bay Suvarnabhumi, đoàn nối chuyến bay đi Dubai. Máy bay hạ cánh tại Dubai (thuộc Các Tiểu Vương Quốc Ả Rập Thống Nhất). Nhận phòng khách sạn và nghỉ đêm tại Dubai.', 'Ngày 1: TP.HCM – Dubai', 'dubai-day1.jpg', 24, 'Thành phố \"Vàng\" - Ngày 1'),
(85, 'Khởi hành đi Abu Dhabi - thủ đô của Các tiểu Vương quốc Ả Rập Thống Nhất. Thăm Đại Thánh đường Hồi giáo Sheikh Zayed Grand Mosque. Đi dọc theo Đại lộ Corniche, bên vịnh Ba Tư, ngắm nhìn tòa lâu đài Emirates Palace và Presdidential Palace.<br>*\r\nTự do mua sắm tại Dates Market - chợ nông sản địa phương, nổi tiếng với các sản phẩm từ chà là. Dừng chân chụp hình bên ngoài Ferrari World - Công viên được thiết kế theo chủ đề Ferrari độc nhất trên thế giới. Quý khách quay về nghỉ đêm tại Dubai.', 'Ngày 2: Dubai – Abu Dhabi ', 'dubai-day2.jpg', 24, 'Thành phố \"Vàng\" - Ngày 2'),
(86, 'Bắt đầu hành trình khám phá Dubai - một trong những thành phố hiện đại và giàu có bậc nhất thế giới. Tham quan Pháo đài Al Fahidi 150 tuổi nay được sử dụng làm Bảo tàng Dubai. Di chuyển bằng phương tiện đặc trưng Abra-drive để chiêm ngưỡng Dubai. Tham quan và tự do mua sắm tại Chợ Vàng (Gold Souk) và Chợ Gia Vị (Spice Souk).<br>*\r\nBuổi chiều, trải nghiệm cảm giác mạo hiểm khó quên khi đi vào Sa mạc Safari bằng xe địa hình (Quý khách có thể tham gia chương trình cưỡi lạc đà, trải nghiệm vẽ tay). Thưởng thức bữa tối BBQ tại những túp lều dựng bằng lá cọ khô trong ánh nến dưới bầu trời sao, xem màn múa bụng đặc sắc do các vũ công tài năng biểu diễn. Nghỉ đêm tại Dubai.', 'Ngày 3: Dubai – Sa Mạc Safari', 'dubai-day3.jpg', 24, 'Thành phố \"Vàng\" - Ngày 3'),
(87, 'Trả phòng. Khám phá Palm Island - quần đảo nhân tạo tuyệt đẹp mang dáng hình cây cọ. Trải nghiệm tàu điện một ray (monorail) ngắm màu đại dương xanh thẳm, những tòa nhà chọc trời với thiết kế hiện đại, lạ mắt, phía xa xa là khách sạn 7 sao sang trọng Burj Al Arab và khách sạn Atlantis The Palm xa hoa.<br>*\r\nTham quan Tòa tháp Burj Khalifa cao nhất thế giới chiêm ngưỡng toàn cảnh Dubai ngoạn mục và tráng lệ từ tầng 124. Thưởng thức “Café Băng” trong không gian -6oC tại Chillout Ice Café nằm ngay trung tâm mua sắm Times Square nổi tiếng. Ra sân bay, đáp chuyến bay về Bangkok. Nghỉ đêm trên máy bay.', 'Ngày 4: Dubai – Tòa tháp Burj Khalifa – Cafe Băng', 'dubai-day4.jpg', 24, 'Thành phố \"Vàng\" - Ngày 4'),
(88, 'Sáng: đến sân bay Bangkok, đoàn nối chuyến bay về Tp.HCM.<br>*\r\nKết thúc chuyến du lịch Abu Dhabi - Dubai.', 'Ngày 5: Bangkok – TP.HCM', 'dubai-day5.jpg', 24, 'Thành phố \"Vàng\" - Ngày 5'),
(89, 'Quý khách tự túc tập trung Ga đi quốc tế Tân Sơn Nhất làm thủ tục đáp chuyến bay đi Dubai.<br> *\r\nQuý khách ăn nhẹ và nghỉ đêm trên máy bay.', 'Đêm 1: TP.HCM – Dubai', 'thuysy-dem1.jpg', 25, 'Trái tim của Châu Âu - Đêm 1'),
(90, 'Đến sân bay Dubai, đoàn nối chuyến bay bay đi Zurich. Quý khách khám phá Bảo tàng Bóng đá thế giới FIFA, nhà thờ Fraumünster.<br>*\r\nQuý khách tự do dạo chơi khu phố cổ Altstadt đẹp như tranh vẽ. Nhận phòng khách sạn và nghỉ đêm tại Zurich.', 'Ngày 1: Dubai – Zurich (Thụy Sỹ)', 'thuysy-day1.jpg', 25, 'Trái tim của Châu Âu - Ngày 1'),
(91, 'Quý khách di chuyển đến thành phố Lucerne miền trung Thụy Sỹ: tham quan Tượng đài Lion Monument với những tác phẩm điêu khắc về những người lính bảo vệ vua Louis XVI, tản bộ trên cây Cầu gỗ Chapel bắc qua dòng sông Reuss.<br>*\r\nChiêm ngưỡng những bức họa cổ nổi tiếng treo dọc hai bên thành cầu. Khởi hành đến thị trấn Zermatt nổi tiếng có đỉnh Matterhorn cao như chạm đến tận mây xanh thuộc dãy núi Alps. Nhận phòng khách sạn và nghỉ đêm tại Zermatt.', 'Ngày 2: Zurich - Lucerne - Tasch – Zermatt', 'thuysy-day2.jpg', 25, 'Trái tim của Châu Âu - Ngày 2'),
(92, 'Bắt đầu hành trình khám phá Matterhorn – ngọn núi nằm giữa biên giới Thụy sĩ và Ý với hình dạng rất đặc thù. Bốn mặt dốc đứng được mẹ thiên nhiên gọt đẽo như cắt bằng dao khiến Matterhorn trở thành biểu tượng của Thụy Sĩ. Quý khách trải nghiệm cáp treo cao nhất ở Châu âu lên đỉnh Klien Matterhorn. Đứng trên Glacier Paradise, ngắm nhìn toàn cảnh của vùng núi Alps hùng vĩ giữa Thụy Sỹ, Italia và Pháp.<br>*\r\nKhám phá Glacier Palace và xem một đoạn phim kể về lịch sử cúa các nhà leo núi đã chinh phục độ cao trên 4,000 một cách ngoạn mục như thế nào. Buổi chiều, Quý khách có cơ hội khám phá lối sống xưa được trưng bày tại Bảo tàng Matterhorn Zermatlantis, nơi những ngôi nhà gỗ và khu chuồng trại được tái tạo thể hiện cuộc sống của người dân tại đây trước khi Zermatt trở nên nổi tiếng. Nghỉ đêm tại Zermatt.', 'Ngày 3: Zermatt – Matterhorn', 'thuysy-day3.jpg', 25, 'Trái tim của Châu Âu - Ngày 3'),
(93, 'Di chuyển đến Lausanne, nơi có phong cảnh ngoạn mục và còn được mệnh danh là thành phố của những giấc mơ cổ tích. Quý khách có thể phiêu du thử cảm giác của cô bé Lọ Lem khi dạo bước đến khu Phố cổ, đặt mình trên những chiếc xe ngựa rực rỡ.<br>*\r\nChụp hình bên ngoài Nhà thờ Lausanne - nhà thờ đẹp nhất của Thụy Sĩ tiêu biểu cho kiểu kiến trúc Gothic. Khởi hành đi Geneva - thành phố quốc tế với rất nhiều trụ sở quan trọng của thế giới. Nhận phòng khách sạn và nghỉ đêm tại Geneva.', 'Ngày 4: Zermatt - Lausanne – Geneva', 'thuysy-day4.jpg', 25, 'Trái tim của Châu Âu - Ngày 4'),
(94, 'Tham quan Nhà thờ Saint Peter lâu đời nhất ở Geneva, tầng hầm là Bảo tàng Khảo cổ học, Đài phun nước Jet d\'eau. Chụp hình bên ngoài Tòa nhà Liên Hợp Quốc, Red Cross Museum, Tháp Đồng hồ hoa và vườn Anglais.<br>*\r\nBuổi chiều, Quý khách tự do dạo chơi trên những con đường đá sỏi dốc trong khu phố cổ Vielle Ville được xoắn xung quanh ngọn đồi. Xe đưa đoàn ra sân bay, đáp chuyến bay đi Dubai. Nghỉ đêm trên máy bay.', 'Ngày 5: Geneva - Duba', 'thuysy-day5.jpg', 25, 'Trái tim của Châu Âu - Ngày 5'),
(95, 'Sáng: Đến sân bay Dubai, đoàn nối chuyến bay về Tp. HCM.<br>*\r\nKết thúc chương trình du lịch Thụy Sỹ.', 'Ngày 6: Dubai - TP.HCM ', 'thuysy-day6.jpg', 25, 'Trái tim của Châu Âu - Ngày 6'),
(96, '8h: Đón Quý khách tại Nhà văn hóa thanh niên quận 1 (Số 4 Phạm Ngọc Thạch, Phường Bến Nghé, Quận 1, TP.HCM). <br>*\r\nKhởi hành đi sân bay Tân Sơn Nhất, đáp chuyến bay đi Osaka. Quý khách ăn nhẹ và nghỉ đêm trên máy bay.', 'Ngày 1: TP.HCM - Osaka', 'nhatban-day1.jpg', 26, 'Xứ sở Hoa Anh Đào - Ngày 1'),
(97, 'Đến sân bay, xe và hướng dẫn viên đón quý khách và đưa đi cố đô Nara. Tham quan Công viên Nara hay còn được gọi là Deer Park - ngoài cây xanh và hoa tươi muôn màu, công viên còn nổi tiếng vì có hơn 1.200 chú Nai sinh sống tự nhiên tại đây.<br>*\r\nTham quan Đền Todaiji - là ngôi đền cổ kính và lâu đời nhất tại Nara. Chiều, Xe đưa đoàn đi tham quan và chụp ảnh lưu niệm ở Lâu đài Osaka. Sau đó, đoàn tự do mua sắm tại khu Shinshabashi, Umeda shopping. Ăn tối tại nhà hàng và nghỉ đêm tại khách sạn.', 'Ngày 2: Nara – Osaka', 'nhatban-day2.jpg', 26, 'Xứ sở Hoa Anh Đào - Ngày 2'),
(98, 'Ăn sáng tại khách sạn, khởi hành đi tham quan cố đô Kyoto (thành phố lớn thứ 7) - được mệnh danh là cố đô nghìn năm, nơi còn lưu giữ rất nhiều di tích lịch sử đền đài tạo nên bộ mặt vừa hiện đại vừa truyền thống của đất nước Nhật Bản.<br>*\r\nChương trình tham quan đầu tiên là đền thờ Kiyomizu - di sản văn hóa thế giới với phong cảnh lãng mạn. Tiếp tục tham quan Chùa Vàng (Golden pavilion). Xe đưa quý khách đi Nagoya. Ăn tối tại nhà hàng. Nghỉ đêm tại khách sạn.', 'Ngày 3: Osaka - Kyoto – Nagoya', 'nhatban-day3.jpg', 26, 'Xứ sở Hoa Anh Đào - Ngày 3'),
(99, 'Sau bữa sáng tại khách sạn. Đoàn lên tàu cao tốc Shinkansen (Hamamatsu – Toyohashi). Quý khách tham quan với núi Phú Sỹ - biểu tượng của đất nước mặt trời mọc, khu Làng cổ Oshino Hakkai.<br>*\r\nTừ đây nếu thời tiết đẹp du khách sẽ có thể ngắm nhìn toàn cảnh đỉnh núi Phú Sỹ trong tuyết trắng vô cùng quyến rũ. Tự do mua sắm tại Gotemba Outlet. Ăn tối tại nhà hàng, thư giãn Osen kiểu Nhật Bản tại khách sạn.', 'Ngày 4: Nagoya – Núi Phú Sỹ', 'nhatban-day4.jpg', 26, 'Xứ sở Hoa Anh Đào - Ngày 4'),
(100, 'Sau bữa sáng tại khách sạn. Xe đưa Quý khách đi thủ đô Tokyo. Thăm quan chùa Quan Âm Asakusa - một trong những công trình cổ nhất và nổi tiếng tại Tokyo. Chụp hình với tháp Tokyo Skytree cao 634m là tháp truyền hình cao nhất thế giới hiện nay (không lên tháp).<br>*\r\nTham quan, chụp hình bên ngoài Hoàng Cung Nhật Bản. Đoàn tự do mua sắm tại các khu phố thương mại nổi tiếng ở Tokyo như khu chợ điện tử Akihabara hoặc khu Ginza. Ăn tối tại nhà hàng. Nghỉ đêm tại khách sạn.', 'Ngày 5: Núi Phú Sỹ - Tokyo', 'nhatban-day5.jpg', 26, 'Xứ sở Hoa Anh Đào - Ngày 5'),
(101, 'Sau bữa sáng, quý khách làm thủ tục trả phòng khách sạn, xe đưa đoàn ra sân bay đáp chuyến bay về TP.HCM.<br>*\r\nMáy bay hạ cánh tại sân bay quốc tế Nội Bài. Xe đưa đoàn về điểm hẹn ban đầu. Chia tay và hẹn gặp lại quý khách.', 'Ngày 6: Tokyo – TP.HCM', 'nhatban-day6.jpg', 26, 'Xứ sở Hoa Anh Đào - Ngày 6'),
(102, 'Sáng: Quý khách có mặt tại sân bay Tân Sơn Nhất làm thủ tục. Đến sân bay Nội Bài, khởi hành đi du lịch Sapa trên con đường cao tốc dài nhất Việt Nam.<br>\r\nTrưa: Dùng bữa trưa, đoàn tiếp tục đến thị trấn vùng cao Sapa, tận hưởng cảnh sắc núi rừng và khám phá cuộc sống của đồng bào dân tộc ít người miền Tây Bắc.<br>*\r\nChiều: Thăm bản Cát Cát, tìm hiểu nghề dệt nhuộm của dân tộc H’Mông và trạm thủy điện Cát Cát thời Pháp – nơi có 3 dòng nước hợp nhau thành dòng suối Mường Hoa.<br>\r\nTối: Ăn uống tự túc, nghỉ đêm tại Sapa. Tự do dạo phố, tham quan nhà thờ đá Sapa, tham dự đêm chợ Tình.', 'NGÀY 1 | TP.HCM – HÀ NỘI – LÀO CAI – SAPA ', 'SaPa-day1.jpg', 28, 'Du lịch miền Bắc-Ngày 1'),
(103, 'Sáng: Dùng buffet sáng tại khách sạn. Đoàn khởi hành tham quan chinh phục Fansipan thuộc dãy múi Hoàng Liên Sơn.<br>\r\nTrưa: Dùng bữa trưa, đoàn trở về Hà Nội.<br>*\r\nChiều: Quý khách có thể dạo một vòng quanh thủ đô, thưởng thức các món đặc sản:bún chả cá Lã Vọng, phở Hà Nội, bún thang, bún chả,… <br>\r\nTối: Tham quan tự do thưởng thức café ở phố cổ, Hồ Gươm.\r\n', 'NGÀY 2 | SAPA – FANSIPAN – HÀ NỘI ', 'SaPa-day2.jpg', 28, 'Du lịch miền Bắc-Ngày 2'),
(104, 'Sáng: Dùng buffet sáng tại khách sạn.Sau đó khởi hành đến Hạ Long, trên đường dừng chân tham quan núi Yên Tử. <br>\r\nTrưa: Dùng cơm trưa.Quý khách lên núi bằng cáp treo (chi phí cáp treo tự túc), tham quan chùa Hoa Yên, Bảo Tháp, Trúc Lâm Tam Tổ, xuống núi tham quan Thiền Viện Trúc Lâm. Đoàn khởi hành về thành phố Hạ Long. <br>*\r\nChiều: Dùng buffet tại nhà hàng. Quý khách tự do dạo phố, mua sắm tại chợ đêm hoặc tham gia khu Sunworld Hạ Long Park với tất cả khu trò chơi trong nhà, ngoài trời hoành tráng có các khu Công viên Rồng, Cáp treo Nữ Hoàng vòng quay Sun wheel…(chi phí tự túc) <br>\r\nTối: Nghỉ đêm tại khách sạn Hạ Long.\r\n', 'NGÀY 3 | HÀ NỘI – HẠ LONG ', 'SaPa-day3 (2).jpg', 28, 'Du lịch miền Bắc-Ngày 3'),
(105, 'Sáng: Dùng buffet sáng tại khách sạn. Xuống thuyền ngoạn cảnh Vịnh Hạ Long chiêm ngưỡng vẻ đẹp trau chuốt của hòn Đỉnh Hương, Gà Chọi, Chó Đá… <br>\r\nTrưa: Dùng bữa trưa trên tàu. Khởi hành về Hà Nội, trên đường ghé tham quan Đền Đô (đền Lý Bát Đế) mang giá trị lịch sử văn hoá đậm nét của Vương Triều Lý.<br>*\r\nChiều: Sau khi dùng bữa chiều, Quý khách có thể tự do tham gia phố đi bộ, chợ đêm, chợ Đồng Xuân, thưởng thức đặc sản và mua quà lưu niệm hay thưởng thức kem tràng tiền hà nội (chi phí tự túc). <br>\r\nTối: Nghỉ đêm tại Hà Nội\r\n', 'NGÀY 4 | VỊNH HẠ LONG – HÀ NỘI ', 'SaPa-day4.jpg', 28, 'Du lịch miền Bắc-Ngày 4'),
(106, 'Sáng: Dùng buffet sáng tại khách sạn. Đoàn tiếp tục tour Hà Nội với chuyến tham quan Văn Miếu - Quốc Tử Giám, chùa Trấn Quốc, Hồ Tây, Hồ Trúc Bạch.<br>*\r\nTrưa: Dùng cơm trưa.  Tham quan Hồ Hoàn Kiếm, Đền Ngọc Sơn. Hướng dẫn viên tiễn đoàn ra sân bay Nội Bài đón chuyến bay về TP.HCM. <br>\r\nChiều: Kết thúc chuyến tham quan chia tay đoàn và hẹn gặp lại.\r\n', 'NGÀY 5 | HÀ NỘI – TP.HCM', 'SaPa-day5.jpg', 28, 'Du lịch miền Bắc-Ngày 5'),
(107, 'Sáng: Quý khách tập trung tại sân bay làm thủ tục đáp chuyến bay đi Seoul - Hàn Quốc. Đến Seoul, Quý khách lên xe đi tham quan: Đảo Nami, hòn đảo cách thủ đô Seoul 63km về phía Đông, hòn đảo Nami như một chiếc lá khổng lồ nằm bình yên trên dòng sông Heongpyung thơ mộng.<br>\r\nQuý khách dùng bữa trưa tại nhà hàng.<br>*\r\nChiều: Tham quan: Cung điện Gyeongbok: Xây dựng năm 1395 bởi vua Taejo - nhà vua đầu tiên cũng là người sáng lập triều đại Joseon, cung Gyeongbokgung còn được biết đến với tên gọi Bắc cung và được xem là cung điện đẹp nhất và là cung điện lớn nhất còn tồn tại trong tất cả 5 cung điện.<br>\r\nĂn tối. Về khách sạn nhận phòng nghỉ ngơi.', 'Ngày 1: TP.HCM – Seoul Hàn Quốc', 'hanquoc-day1.jpg', 30, 'Xứ sở Kim Chi - Ngày 1'),
(108, 'Sáng: sau khi ăn sáng tại khách sạn, đoàn khởi hành tham quan: Công viên giải trí Everland, đây là công viên vui chơi giải trí được xếp hạng thứ 8 trong 10 công viên giải trí hàng đầu thế giới.<br>*\r\nTrưa: Ăn trưa và tham quan: Trung tâm Nhân Sâm Chính Phủ; Cửa Hàng Mỹ Phẩm Hàn Quốc; Thưởng thức show diễn “Fantastic”. <br>\r\nTối: Ăn tối với món lẩu Shabu Shabu nổi tiếng, sau đó về khách sạn nghỉ ngơi.', 'Ngày 2:  Seoul – Công viên Everland', 'hanquoc-day2.jpg', 30, 'Xứ sở Kim Chi - Ngày 2'),
(109, 'Sáng: Sau khi ăn sáng tại khách sạn, đoàn khởi hành tham quan: Dinh tổng thống Blue House: (Cheongwadae) là văn phòng làm việc cũng như nơi ở chính thức của Tổng thống Hàn Quốc, nằm tại Jongno - gu, Seoul; Bảo tàng dân tộc quốc gia: là bảo tàng Quốc gia duy nhất về văn hóa dân gian, trưng bày khoảng 4.000 hiện vật về đời sống văn hóa; trung tâm nấm linh chi và giải độc gan, sâm tươi, Trải Nghiệm Lớp Học Làm Kim Chi và Mặc Hanbok Truyền Thống của Hàn Quốc.<br>*\r\nTrưa: Quý khách nghỉ ăn trưa với món gà tần sâm, chiều tham quan và mua sắm: Siêu thị miễn thuế SM Duty Free. Tham quan núi Nam San với hàng nghìn ổ khóa tình yêu được móc lên nhau thề non hẹn biển của các cặp tình nhân. Làng văn hóa Namsan HanBok – không gian tĩnh mịch của ngôi làng Hanbok là điều kiện lý tưởng cho “Misuda”. Suối Cheonggyecheon – con suối nổi tiếng tại khu trung tâm Seoul.<br>\r\nTối: Ăn tối và nghỉ ngơi tại khách sạn.', 'Ngày 3: Seoul – Tháp Namsan', 'hanquoc-day3.jpg', 30, 'Xứ sở Kim Chi - Ngày 3'),
(110, 'Sáng: sau khi ăn sáng, đoàn trả phòng khách sạn, quý khách thưởng thức và trải nghiệm Tắm Sauna cổ truyền của Hàn Quốc. Đến giờ hẹn quý khách tập trung ra sân bay.<br>*\r\nTrên đường ghé qua siêu thị Chon Ha mua sắm. Sau đó xe đưa quý khách ra sân bay Incheon đáp chuyến bay về Việt Nam. Chia tay quý khách và hẹn gặp lại!', 'Ngày 4: Seoul Hàn Quốc - TP.HCM', 'hanquoc-day4.jpg', 30, 'Xứ sở Kim Chi - Ngày 4'),
(111, 'Tự túc tập trung tại Ga đi quốc tế, sân bay quốc tế Tân Sơn Nhất. Đáp chuyến bay đi Hong Kong, nối chuyến bay đi Los Angeles.<br>*\r\nĂn và nghỉ trên máy bay. Máy bay hạ cánh sân bay Los Angeles (LAX). Nghỉ đêm tại Los Angeles.', 'Ngày 1: TP.HCM - HongKong – Los Angeles', 'mybotay-day1.jpg', 27, 'Thành phố không ngủ - Ngày 1'),
(113, 'Bắt đầu hành trình tham quan trung tâm kinh đô điện ảnh Hollywood, tản bộ trên con đường danh vọng Hollywood Boulevard - nơi in tên các tài tử nghệ sĩ điện ảnh nổi tiếng như Marilyn Monroe, Michael Jackson.<br>*\r\nDừng tại nhà hát Chinese Mann’s Theatre - nơi in dấu tay của các diễn viên điện ảnh nổi tiếng. Quý khách ăn trưa và tự do mua sắm và tham quan khu cộng đồng người Việt Little Saigon. Ăn tối và nghỉ đêm tại Los Angeles.', 'Ngày 2:  Los Angeles – Hollywood Boulevard -  Little Saigon', 'mybotay-day2.jpg', 27, 'Thành phố không ngủ - Ngày 2'),
(114, 'Trả phòng. Khởi hành về miền bắc California. Tham quan làng Solvang - \"Cánh đồng đầy nắng” (Sunny Field).<br>*\r\nTiếp tục hành trình đến với San Jose - thành phố lớn thứ 3 tại California. Ăn tối, tự do khám phá và nghỉ đêm tại San Jose.', 'Ngày 3:  Los Angeles – Solvang - San Jose', 'mybotay-day3.jpg', 27, 'Thành phố không ngủ - Ngày 3'),
(115, 'Bắt đầu hành trình khám phá San Jose nổi tiếng với thung lũng Silicon, nơi hàng ngàn tập đoàn công nghệ cao như Google, Ebay, Intel, Apple lựa chọn làm nơi đặt trụ sở. Thỏa thích mua sắm các sản phẩm công nghệ tại Apple Park Visitor Center, trụ sở mới của Apple với thiết kế vòng tròn khổng lồ.<br>*\r\nTham quan trung tâm thành phố San Jose và Bảo tàng Intel nổi tiếng, nơi trưng bày những thành tựu công nghệ của tập đoàn Intel. Đoàn khởi hành đến thành phố San Francisco hiền hòa, thanh lịch với không gian mở ra vịnh đầy ấn tượng. Nghỉ đêm tại San Jose hoặc San Francisco.', 'Ngày 4: San Jose City Tour – San Francisco', 'mybotay-day4.jpg', 27, 'Thành phố không ngủ - Ngày 4'),
(116, 'Trả phòng. Quý khách tham quan San Francisco: chiêm ngưỡng tòa thị chính San Francisco City Hall , Cầu Cổng Vàng – Golden Gate biểu tượng nổi tiếng nhất của thành phố, khu phố người Hoa Chinatown; Cảng Ngư Phủ - Fisherman’s Wharf nhộn nhịp với những cửa hàng quà đặc sắc.<br>*\r\nTiếp tục đến khu trung tâm thành phố với Quảng Trường Union, thưởng ngoạn đường hoa Lombard - con đường dốc nghiêng 40 độ quanh co uốn lượn, biểu tượng thành phố San Francisco. Sau bữa tối, đoàn ra sân bay LAX (Los Angeles) đáp chuyến bay về Hồng Kông. Nghỉ đêm trên máy bay.', 'Ngày 5:   San Francisco City Tour - HongKong', 'mybotay-day5.jpg', 27, 'Thành phố không ngủ - Ngày 5'),
(117, 'Quý khách tập trung tại sân bay Tân Sơn Nhất, HDV làm thủ tục cho đoàn đi Hong Kong. Đến sân bay Quốc Tế Chek Lap Kok, xe và HDV đưa đoàn đi tham quan Cầu Thanh Mã. Quý khách dùng bữa tối. Tự do mua sắm ở chợ Đàn Bà miễn thuế.<br>*\r\nXe đưa đoàn về khách sạn nhận phòng nghỉ ngơi hoặc Quý khách có thể đăng ký chương trình Hong Kong By Night rực rỡ sắc màu – dạo tàu ngắm phố đêm giữa 2 bờ bán đảo Kowloon và đảo Hong Kong về đêm… (chi phí tự túc)', 'Ngày 1: TP.HCM – HongKong', 'hongkong-day1.jpg', 31, 'Xứ cảng thơm - Ngày 1'),
(118, 'Dùng điểm tâm tại khách sạn. Đoàn đi viếng thăm Miếu Huỳnh Đại Tiên, đỉnh Núi Thái Bình. Quý khách có thể ngắm nhìn toàn cảnh vịnh Victoria, đoàn tiếp tục tham quan Vịnh Nước Cạn, Bảo Tàng Sáp, núi Thái bình.<br>\r\nQuý khách dùng cơm trưa tại Nhà Hàng nổi Jumbo, thưởng thức tất cả các món ăn truyền thống của xứ cảng thơm và ngắm nhìn các du thuyền của giới thượng lưu Hồng Kông.<br>*\r\nĐoàn tiếp tục thăm quan Nhà Bàn Giao, “Quảng Trường Dương Tử Kinh”, Trung tâm Sản Xuất Vàng Bạc Đá Quý, Đại lộ Ngôi sao - nơi in dấu vân tay của các diễn viên điện ảnh nổi tiếng của Hong Kong.<br>\r\nĐoàn dùng cơm tối tại nhà hàng, về khách sạn nghỉ ngơi. Quý khách tự do mua sắm tại các khu trung tâm mua sắm và siêu thị nổi tiếng nhất HongKong.', 'Ngày 2: Khám phá HongKong', 'hongkong-day2.jpg', 31, 'Xứ cảng thơm - Ngày 2'),
(119, 'Dùng điểm tâm tại khách sạn, khởi hành thăm quan Công viên giải trí Disneyland Hong Kong. Quý khách có thể tham gia những trò chơi độc đáo hiện đại không giới hạn trong công viên cùng những chương trình biểu diễn hoành tráng rực rỡ như: Festival of the Lion King, The Golden Mickey, Diễu hành các nhân vật Disneyland, khu Main Street với quà lưu niệm độc đáo,…các trò chơi cảm giác mạnh, xem phim 4D.<br>*\r\nQuý khách được tham gia khu trò chơi Toy Story Land – lấy cảm hứng từ series ba phần của “bom tấn” “Câu Chuyện Đồ Chơi”- bộ phim hoạt hình có doanh thu cao nhất mọi thời đại của nước Mỹ. Quý khách dùng bữa tối bằng coupon trong công viên, 9h tối Đoàn chia tay Disneyland sau khi thưởng thức màn bắn pháo hoa vô cùng độc đáo ở Lâu đài Người đẹp ngủ trong rừng. Xe đón đoàn và đưa về khách sạn nghỉ ngơi.', 'Ngày 3: HongKong – Disneyland', 'hongkong-day3.jpg', 31, 'Xứ cảng thơm - Ngày 3'),
(120, 'Dùng điểm tâm. Quý khách tự do mua sắm tại các trung tâm mua sắm nổi tiếng, tự túc đăng ký tham quan Đại Nhĩ Sơn, nơi có bức tượng Phật Thích Ca lớn nhất châu Á. Quý khách có dịp ngắm nhìn toàn cảnh đảo Lantau, sân bay Chek Lap Kok - công trình lấn biển lớn nhất ở Hong Kong, toàn cảnh khu vực Tsungchung từ trên cao. Tiếp tục chinh phục Đại Nhĩ Sơn, tham quan Bảo Tàng Phật.<br>*\r\nQuý khách lễ Phật cầu phúc lành, ngắm toàn cảnh núi Đại Nhĩ Sơn. Tiếp tục viếng “Hùng Sơn Đại Điện“. Đoàn ăn trưa với các món chay đặc sắc. Đến giờ hẹn, xe đón Quý khách ăn tối, ra sân bay làm thủ tục về Việt Nam trên chuyến bay.<br>\r\nĐoàn tự do mua sắm tại Duty Free Shopping miễn thuế ở sân bay Hong Kong. Đến sân bay Tân Sơn Nhất.  Kết thúc chương trình.', 'Ngày 4: HongKong – Free Day – TP.HCM', 'hongkong-day4.jpg', 31, 'Xứ cảng thơm - Ngày 4'),
(122, 'Đến sân bay Hồng Kông, làm thủ tục nối chuyến bay về Tp.HCM.<br>*\r\nMáy bay hạ cánh tại sân bay Tân Sơn Nhất. Kết thúc chương trình du lịch Mỹ.', 'Ngày 6: HongKong - TP. HCM', 'mybotay-day6.jpg', 27, 'Thành phố không ngủ - Ngày 6'),
(123, '20h00: Hướng dẫn viên đón đoàn tại ga Lê Duẩn, HDV đón Quý khách lên tàu khởi hành đi Đồng Hới chuyến tàu lúc 8 giờ.<br>*\r\n21h00. Quý khách cùng hướng dẫn viên tuoris Half Way ăn uống và nghỉ đêm trên tàu.\r\n', 'Đêm 1 | Hà Nội - Quảng Bình ', 'QB-dem1.jpg', 32, 'Đồng Hới- Vũng Chùa Đảo Yến-Đêm 1'),
(124, 'Sáng: Xe đón Quý khách tại Ga Đồng Hới, xe đưa Quý Khách ăn sáng tại nhà hàng. Sau đó đi tham quan Vũng Chùa-Đảo Yến, Mũi Rồng đâm ngang ra biển. <br>\r\nTrưa: Quý khách ăn trưa tại nhà hàng. Đoàn nhận phòng khách sạn nghỉ ngơi. Tự do tắm biển Nhật Lệ.<br>*\r\nChiều: Đoàn ăn tối tại nhà hàng, khám phá Thành phố Đồng Hới về đêm khám phá những món ăn đặc sản, với các dịch vụ vui chơi giải trí thú vị, giao lưu với người dân nơi đây. Không những tế còn có những buổi trình diễn thời trang đường phố vô cùng đặc sắc.<br>\r\nTối: Nghỉ đêm tại khách sạn.\r\n', 'NGÀY 1: Đồng Hới - Vũng Chùa Đảo Yến', 'QB-day1.jpg', 32, 'Đồng Hới- Vũng Chùa Đảo Yến-Ngày 1'),
(125, 'Sáng: Quý khách dùng bữa sáng tại khách sạn. Xe và hướng dẫn đón đoàn khởi hành đi thăm quan Động Thiên Đường được mệnh danh \"Hoàng cung trong lòng đất\" <br>\r\nTrưa: Quý khách ăn trưa và nghỉ ngơi tại nhà hàng<br>*\r\nChiều: Đoàn tiếp tục tham quan Suối Mooc: ‘Nước Moọc” Quý khách tự do vui chơi cùng rất nhiều trò chơi như chèo thuyền kayak, du zipline ngắn…(Chi phí tự túc)<br>\r\nTối: Đoàn ăn tối tự túc.  Nghỉ đêm tại khách sạn\r\n', 'Ngày 2: Tham Quan Thiên Đường - Suối Mooc', 'QB-day2.jpg', 32, 'Đồng Hới- Vũng Chùa Đảo Yến-Ngày 2'),
(126, 'Sáng: Quý khách dậy sớn ngắm cảnh bình minh và ăn sang tại khách sạn.<br>\r\nTrưa: Đoàn trả phòng khách sạn. Xe đưa Đoàn ăn trưa tại nhà hàng.<br>\r\nChiều: Quý khách lên tàu khởi hành về Hà Nội chuyến tàu lúc 15h15.<br>*\r\nTối: Quý khách nghỉ đêm trên tàu. 04h00 sáng ngày hôm sau đoàn về đến Ga Hà Nội. HDV chia tay Quý khách. Kết thúc chương trình và hẹn gặp lại trong những chương trình tiếp theo', 'Ngày 3: Quảng Bình - Hà Nội ', 'QB-day3.jpg', 32, 'Đồng Hới- Vũng Chùa Đảo Yến-Ngày 3'),
(127, 'Sáng: Dùng bữa sáng tại nhà hàng.<br>\r\nTrưa: Dùng cơm trưa. Đoàn trở về thị trấn Năm Căn, đến thăm, mua sắm tại chợ Năm Căn.<br>*\r\nChiều: Sau khi dùng cơm chiều du khách có thời gian tự do nghỉ ngơi và khám phá thành phố về đêm.<br>\r\nTối: Nghỉ đêm khách sạn tại Cà Mau.\r\n', 'Ngày 1: Cà Mau – Năm Căn – Đất Mũi – BẠC', 'CaMau-Ngay1.jpg', 33, 'Khám phá rừng ngập mặn-Ngày 1'),
(128, 'Sáng: Dùng bữa sáng tại nhà hàng. Khởi hành đến Bạc Liêu, Đoàn đến viếng thăm Nhà thờ Tắc Sậy, Nhà công tử Bạc Liêu, khu lưu niệm nhạc sĩ Cao Văn Lầu nơi an nghỉ cuối cùng của tác giả bài Dạ Cổ Hoài Lang nổi tiếng Nam Bộ. Đến Sóc Trăng, quý Khách viếng Chùa Mã Tộc (Chùa Dơi) – chùa Đất Sét (Bửu Sơn Tự) <br>*\r\nTrưa: Dùng cơm trưa. Đoàn khởi hành về TP.HCM, trên đường Quý khách có dịp chiêm ngưỡng vẻ đẹp cầu Cần Thơ nằm trên quốc lộ 1A nối liền hai bờ sông Hậu thuộc tỉnh Vĩnh Long và thành phố Cần Thơ. Về đến TP.HCM, đưa Quý khách về điểm đón ban đầu. Chia tay Quý khách và hẹn gặp lại.\r\n', 'Ngày 2: Cà Mau – Bạc Liêu – Sóc Trăng – TP.HCM ', 'CaMau-day2.jpg', 33, 'Khám phá rừng ngập mặn-Ngày 2'),
(129, 'Sáng: Đón quý khách tại Nhà văn hóa Quận. Xe và HDV Tuoris Half Way đón quý khách tại điểm hẹn khởi theo quốc lộ 14 qua các địa danh nổi tiếng như Sóc Bom Bo, Bù Đăng. Tham quan thác D’ray Nur.<br>*\r\nTối: đoàn tự do tham quan Làng cà phê Trung Nguyên, thưởng thức cà phê Ban Mê trứ danh (chi phí tự túc). <br>\r\nNghỉ đêm tại Buôn Ma Thuột.\r\n', 'Ngày 1: Tp. Hồ Chí Minh - Buôn Ma Thuột', 'TN-day1.jpg', 34, 'Tây Nguyên -KonTum - Ngày 1'),
(130, 'Sáng: Ăn sáng tại khách sạn, sau đó khởi hành đi tham quan Cơ sở nuôi chồn và sản xuất sản phẩm cà phê Chồn. <br>\r\nTrưa: Đến Buôn Đôn, tham quan cầu treo và ngắm cảnh sông Sêrêpôk, nhà Lào cổ hơn 120 năm.<br>*\r\nChiều: tham quan mộ và nghe kể chuyện về Vua săn voi.Tiếp đến khởi hành đi Pleiku.<br>\r\nTối: Đoàn tự do ăn uống khám phá phố núi về đêm. Nghỉ đêm ăn uống tại Pleiku.\r\n', 'Ngày 2: Buôn Mê Thuột - Pleiku', 'TN-day2.jpg', 34, 'Tây Nguyên -KonTum - Ngày 2'),
(131, 'Sáng: Dùng bữa tại khách sạn, đến tham quan nhà máy thủy điện Yaly. Ngắm cảnh Biển Hồ T’Nưng, viếng chùa Minh Thành. <br>\r\nTrưa: Ăn trưa ghé nhà hàng dùng buffet.Sau đó xe đưa du khách đến Kontum tham quan Nhà thờ Gỗ. <br>*\r\nChiều: Tham quan nhà rông Kon Klor và cầu treo Konklor - cây cầu nối liển 2 bờ sông Đắk Bla huyền thoại.<br>\r\nTối: Tham quan ăn uống tự do. Trở về Pleiku nghỉ đêm tại khách sạn.', 'Ngày 3: Pleiku - Kontum', 'TN-day3.jpg', 34, 'Tây Nguyên -KonTum - Ngày 3');
INSERT INTO `tourdescription` (`IdDesciption`, `Description`, `Timeline`, `Image`, `IdTour`, `Note`) VALUES
(132, 'Sáng: Sau khi ăn sáng, đoàn khởi hành trở về Buôn Ma Thuột, tham quan Bảo tàng thế giới Cà phê và tham quan Chợ Buôn Mê Thuột.<br>\r\nTrưa: Ăn uống trên xe.<br>*\r\nBuổi chiều: đoàn đến thăm buôn làng Ê đê Ako Dhong - tìm hiểu cuộc sống cộng đồng dân tộc Ê đê, chụp hình lưu niệm nhà dài.<br>\r\nTối: Nghỉ đêm tại Buôn Ma Thuột.\r\n', 'Ngày 4: Pleiku - Buôn Ma Thuột', 'TN-day4.jpg', 34, 'Tây Nguyên -KonTum - Ngày 4'),
(133, 'Sáng: Đoàn đến tham quan Bảo tàng Đắk Lắk, Biệt Điện Bảo Đại. Khởi hành trở về Tp. Hồ Chí Minh.<br>*\r\nVề đến TP.HCM, đưa Quý khách về điểm đón ban đầu. Chia tay Quý khách và hẹn gặp lại.\r\n', 'Ngày 5: Buôn Ma Thuột - TP. Hồ Chí Minh', 'TN-day5.jpg', 34, 'Tây Nguyên -KonTum - Ngày 5'),
(134, 'Sáng: Đón quý khách tại văn phòng Lữ hành Touris Half Way khởi hành đi Cái Bè bằng đường cao tốc Sài Gòn - Trung Lương.<br>\r\nTrưa: Đến Cái Bè, lên thuyền tham quan chợ nổi Cái Bè. Tìm hiểu qui trình lò cốm, kẹo dừa, nuôi ong và thưởng thức trà mật ong.<br>*\r\nChiều: Tham quan vườn ươm cây giống các loại cây ăn trái nhiệt đới. Đi thuyền sang Vĩnh Long, tiếp tục đi Cần Thơ. <br>\r\nTối: Nhận phòng và nghỉ đêm tham quan tại Cần Thơ.\r\n', ' Ngày 1: TP. HỒ CHÍ MINH - Cái Bè', 'CanTho-day1.jpg', 35, 'Cần Thơ - Chợ nổi - Ngày 1'),
(135, 'Sáng:Dùng bữa tại khách sạn. Sau đó đi thuyền tham quan chợ nổi Cái Răng, viếng Thiền viện Trúc Lâm Phương Nam.<br>\r\nTrưa: Ghé nhà hàng dùng bữa. Sau đó, đoàn sẽ khởi hành đi Châu Đốc. <br>*\r\nChiều: Đến Châu Đốc viếng Miếu Bà Chúa Xứ, Tây An cổ tự, Lăng Thoại Ngọc Hầu, Chùa Hang.<br>\r\nTối: Nghỉ đêm tại Châu Đốc.\r\n', 'Ngày 2: Cần Thơ - Châu Đốc', 'CanTho-day2.jpg', 35, 'Cần Thơ - Chợ nổi - Ngày 2'),
(136, 'Sáng: Khởi hành đi Hà Tiên. Trên đường tham quan du khách sẽ được bước đi trên – “Cầu tre vạn bước”, theo những con rạch xuyên qua Lung Sen.<br>\r\nTrưa: Lên tháp vọng cảnh cao 23m nhìn toàn cảnh rừng tràm và tượng Phật Di Lặc, chùa Vạn Linh trên núi Cấm bằng kính viễn vọng. <br>*\r\nChiều: Đi Hà Tiên dọc kênh Vĩnh Tế, chiêm ngưỡng kỳ công của các bậc tiền. Viếng lăng Mạc Cửu - người có công khai trấn đất Hà Tiên vào thế kỷ 18.<br>\r\nTối: Tham quan Thạch Động, bãi biển Mũi Nai.  Nghỉ đêm tại Hà Tiên.\r\n', 'Ngày 3: Châu Đốc - Hà Tiên', 'CanTho-day3.jpg', 35, 'Cần Thơ - Chợ nổi - Ngày 3'),
(137, 'Sáng: Khởi hành về TP. HCM. Đến TP.HCM, đưa quý khách về văn phòng Touris Half Way. <br>*\r\nChia tay Quý khách và hẹn gặp lại.Kết thúc chương trình', 'Ngày 4: Hà Tiên - TP. Hồ Chí Minh', 'CanTho-day4.jpg', 35, 'Cần Thơ - Chợ nổi - Ngày 4'),
(138, 'Sáng: Đón quý khách tại văn phòng Lữ hành Touris Half Way (lúc 06h00 sáng tại 280 an Dương Vương, Quận 5 hoặc lúc 06h30 sáng tại số 1 Nguyễn Chí Thanh, Quận 5), khởi hành đi Bình Thuận.<br>\r\nTrưa: Đến Phan Thiết, quý khách tham quan không gian trưng bày nghệ thuật “Làng chài xưa”. Dừng lại nghỉ ngơi ăn uống.<br>*\r\nChiều: Du khách sẽ được tham quan làng chài dưới rặng dừa, phố cổ ven sông Cà Ty, tận mắt được chứng kiến một làng chài xưa của xứ biển Phan Thiết được tái hiện một cách công phu. <br>\r\nTối: Nhận phòng và tự do tắm biển tại resort. Nghỉ đêm tại Mũi Né.\r\n', 'Ngày 1: TP. Hồ Chí Minh - Phan Thiết - Làng Chài Xưa', 'PhanThiet-day1.jpg', 36, 'Phá Đảo Phan Thiết - Ngày 1'),
(139, 'Sáng: Quý khách tự do nghỉ dưỡng hay tắm biển tại khách sạn. <br>\r\nTrưa: Buổi chiều, quý khách tham quan Lâu Đài Rượu Vang - tham quan 2 hầm chứa rượu cùng quy trình và mô hình sản xuất rượu khép kín được thiết kế nằm sâu dưới lòng đất. <br>*\r\nChiều: Xe đưa đoàn vào Hòn Rơm - tham quan thắng cảnh đồi cát vàng.<br>\r\nTối: Xe đưa quý khách  đến xem show nhạc kịch nước Huyền Thoại Làng Chài - show giải trí đặc sắc và đậm nét văn hóa làng chài của Phan Thiết - Bình Thuận..Nghĩ đêm tại Mũi Né.\r\n', 'Ngày 2: Tham quan Mũi Né - Xem Nhạc Kịch Fisher Men Show ', 'PhanThiet-day2.jpg', 36, 'Phá Đảo Phan Thiết - Ngày 2'),
(140, 'Sáng: Quý khách nghỉ ngơi trong resort đến giờ trả phòng. Khởi hành về TP. HCM.<br>* \r\nDừng chân mua sắm đặc sản Phan Thiết. Về đến TP.HCM, xe đưa quý khách về điểm đón ban đầu. Kết thúc chương trình.\r\n', 'Ngày 3: Mũi Né - Phan Thiết - TP. Hồ Chí Minh', 'PhanThiet-day3.jpg', 36, 'Phá Đảo Phan Thiết - Ngày 3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tourtype`
--

CREATE TABLE `tourtype` (
  `IdTourType` int(11) NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Note` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tourtype`
--

INSERT INTO `tourtype` (`IdTourType`, `Name`, `Note`) VALUES
(1, 'Trong nước', NULL),
(2, 'Ngoài nước', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `IdUser` int(11) NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IdDecentralization` int(11) NOT NULL,
  `Fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IdentityCard` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Birthday` date NOT NULL,
  `Phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Note` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`IdUser`, `Username`, `Password`, `IdDecentralization`, `Fullname`, `IdentityCard`, `Birthday`, `Phone`, `Email`, `Address`, `Note`) VALUES
(1, 'adminViet', '12345', 1, 'Võ Minh Quốc Việt', '123456789', '2020-07-06', '123456789', 'viet@thw.com', '280-ADV-Q5', 'haha'),
(2, 'adminDat', '12345', 1, 'Phùng Tiến Đạt', '123456789', '2020-07-01', '123456789', 'dat@thw.com', '280-ADV-Q5', ''),
(3, 'adminNhu', '12345', 1, 'Lý Mỹ Như', '123456789', '2000-01-15', '123456789', 'nhuviolet2000@gmail.com', '280-ADV-Q5', ''),
(4, 'adminChi', '12345', 1, 'Trịnh Kim Chi', '123456789', '2000-01-01', '123456789', 'trinhkimchi456@gmail.com', '280-ADV-Q5', ''),
(5, 'adminHung', '12345', 1, 'Trần Thanh Hùng', '123456789', '2020-07-01', '123456789', 'hung@thw.com', '280-ADV-Q5', ''),
(13, 'longhcmus', '12345', 2, 'Phạm Hoàng Long', '123456789000', '2000-12-17', '0981335100', 'phlonghcmus@gmail.com', 'Kế 280 ADV P4 Q5 TP.HCM', NULL),
(14, 'bachthao1102', 'th@o1122', 2, 'Phạm Thị Thanh Thảo', '33485564', '2000-02-11', '0375326415', 'phamthanhthaobp@gmail.com', 'Tp.HCM', ''),
(15, 'cuonghd', 'cuonghd', 2, 'Huỳnh Đức Cường', '026016602', '2000-04-30', '0931174105', 'cpublicshare@gmail.com', '115 Thành phố Hồ Chí Minh', NULL),
(16, 'thienhoa', 'thienhoa', 2, 'Lưu Thiên Hoa', '0266617705', '1998-01-01', '0938911758', 'hoalt.cntt@gmail.com', '113 Hà Nội', NULL),
(18, 'aloalo', '12345', 2, 'Alo', '123456789', '2020-07-13', '123456789', '123456789', '123456789', NULL),
(19, 'thanhhungcnct', '', 2, 'Hung', '245345596', '2020-07-13', '0393293502', 'thanhhungcccc@gmail.com', 'Q11', NULL),
(20, '', '', 2, '', '', '2020-07-13', '', '', '', NULL),
(21, 'a', 's', 2, 'd', 'f', '2020-07-13', 'g', 'a', 's', NULL),
(22, 'quantb', '12345', 2, '', '123456789000', '2020-07-01', '0981335100', 'bichquantran1510@gmail.com', 'Kế 280 ADV P4 Q5 TP.HCM', NULL),
(23, 'bangle', '12345', 2, 'Lê Băng', '123456789000', '2020-07-13', '0981335100', 'phlonghcmus@gmail.com', 'Kế 280 ADV P4 Q5 TP.HCM', NULL),
(24, 'abc', 'abc', 2, 'Hùng', '245345555', '2020-07-07', '0399999999', 'hung@gmail.com', 'aaa', NULL),
(25, 'TKC', '12345', 2, 'Nguyễn Kim Chi', '456781235', '2002-02-01', '0123667545', 'nguyenkimchi456@gmail.com', 'Bình Dương', NULL),
(26, 'hienlth', '12345', 2, 'Lương Trần Hy Hiến', '123456789000', '2020-07-01', '0981335100', 'phlonghcmus@gmail.com', 'Kế 280 ADV P4 Q5 TP.HCM', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`IdBill`),
  ADD KEY `FK_IdTour` (`IdTour`),
  ADD KEY `FK_IdUser` (`IdUser`);

--
-- Chỉ mục cho bảng `billinfo`
--
ALTER TABLE `billinfo`
  ADD PRIMARY KEY (`IdBillInfo`);

--
-- Chỉ mục cho bảng `decentralization`
--
ALTER TABLE `decentralization`
  ADD PRIMARY KEY (`IdDecentralization`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`IdTour`),
  ADD KEY `fk_IdTourType_Tour_TourType` (`IdTourType`);

--
-- Chỉ mục cho bảng `tourdescription`
--
ALTER TABLE `tourdescription`
  ADD PRIMARY KEY (`IdDesciption`),
  ADD KEY `fk_IdTour_TourDescription_Tour` (`IdTour`);

--
-- Chỉ mục cho bảng `tourtype`
--
ALTER TABLE `tourtype`
  ADD PRIMARY KEY (`IdTourType`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IdUser`),
  ADD KEY `fk_IdDecentralization_User_Decentralization` (`IdDecentralization`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `IdBill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `billinfo`
--
ALTER TABLE `billinfo`
  MODIFY `IdBillInfo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `decentralization`
--
ALTER TABLE `decentralization`
  MODIFY `IdDecentralization` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `IdTour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `tourdescription`
--
ALTER TABLE `tourdescription`
  MODIFY `IdDesciption` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT cho bảng `tourtype`
--
ALTER TABLE `tourtype`
  MODIFY `IdTourType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `FK_IdTour` FOREIGN KEY (`IdTour`) REFERENCES `tour` (`IdTour`),
  ADD CONSTRAINT `FK_IdUser` FOREIGN KEY (`IdUser`) REFERENCES `user` (`IdUser`);

--
-- Các ràng buộc cho bảng `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `fk_IdTourType_Tour_TourType` FOREIGN KEY (`IdTourType`) REFERENCES `tourtype` (`IdTourType`);

--
-- Các ràng buộc cho bảng `tourdescription`
--
ALTER TABLE `tourdescription`
  ADD CONSTRAINT `fk_IdTour_TourDescription_Tour` FOREIGN KEY (`IdTour`) REFERENCES `tour` (`IdTour`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_IdDecentralization_User_Decentralization` FOREIGN KEY (`IdDecentralization`) REFERENCES `decentralization` (`IdDecentralization`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
