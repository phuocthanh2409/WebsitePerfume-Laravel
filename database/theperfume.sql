-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 20, 2022 lúc 06:57 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `theperfume`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE IF NOT EXISTS `binhluan` (
  `blMa` int(10) NOT NULL AUTO_INCREMENT,
  `blNoiDung` varchar(191) NOT NULL,
  `blTen` varchar(191) NOT NULL,
  `blNgay` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `blTrangThai` int(11) NOT NULL,
  `spMa` int(10) NOT NULL,
  `blParent` int(11) DEFAULT NULL,
  PRIMARY KEY (`blMa`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`blMa`, `blNoiDung`, `blTen`, `blNgay`, `blTrangThai`, `spMa`, `blParent`) VALUES
(23, 'Sản phẩm tốt', 'Thành', '2022-01-20 03:12:58', 0, 55, 0),
(24, 'Sản phẩm rất tốt', 'Thảo', '2022-01-20 03:15:31', 0, 55, 0),
(25, 'Cảm ơn bạn đã ủng hộ cửa hàng', 'Quản trị viên', '2022-01-20 03:15:29', 0, 55, 23),
(26, 'Cảm ơn bạn đã ủng hộ cửa hàng', 'Quản trị viên', '2022-01-20 03:15:41', 0, 55, 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

DROP TABLE IF EXISTS `chitietdonhang`;
CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `ctdhMa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `dhCode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spMa` int(10) NOT NULL,
  `spTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spGia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spSoLuongMua` int(11) NOT NULL,
  `spKhuyenMai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spPhiVanChuyen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ctdhMa`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`ctdhMa`, `dhCode`, `spMa`, `spTen`, `spGia`, `spSoLuongMua`, `spKhuyenMai`, `spPhiVanChuyen`, `created_at`, `updated_at`) VALUES
(41, 'b2993', 38, 'Nước hoa Chanel Coco Mademoiselle Eau De Parfum 100ml', '3990000', 1, 'Không', '50000', NULL, NULL),
(42, 'd7198', 55, 'Nước Hoa Dolce & Gabbana The One for Men EDP 100ml', '2100000', 1, 'NewYear2022', '50000', NULL, NULL),
(43, '3959f', 44, 'Nước Hoa Dior Sauvage Eau De Toilette 100ml', '2990000', 1, 'Không', '100000', NULL, NULL),
(44, '8a2b0', 35, 'Nước Hoa Chanel Chance Eau Vive Eau De Toilette 100ml', '3850000', 1, 'Không', '100000', NULL, NULL),
(45, '9b9ef', 35, 'Nước Hoa Chanel Chance Eau Vive Eau De Toilette 100ml', '3850000', 1, 'Không', '100000', NULL, NULL),
(46, 'cd36e', 35, 'Nước Hoa Chanel Chance Eau Vive Eau De Toilette 100ml', '3850000', 1, 'Không', '100000', NULL, NULL),
(47, '0c872', 48, 'Nước Hoa Tom Ford Noir Extreme Eau De Parfum 100ml', '3400000', 1, 'NewYear2022', '50000', NULL, NULL),
(48, '0c872', 52, 'Nước Hoa Yves Saint Laurent La Nuit de l`Homme 100ml', '2900000', 50, 'NewYear2022', '50000', NULL, NULL),
(49, '126ef', 39, 'Nước hoa Chanel Allure Homme Sport Eau De Toilette 100ml', '2900000', 1, 'NewYear2022', '50000', NULL, NULL),
(50, 'ad1bb', 39, 'Nước hoa Chanel Allure Homme Sport Eau De Toilette 100ml', '2900000', 1, 'NewYear2022', '50000', NULL, NULL),
(51, 'dbbba', 51, 'Nước Hoa La Nuit de L`Homme Le Parfum 100ml', '2500000', 1, 'Không', '50000', NULL, NULL),
(52, '0901d', 39, 'Nước hoa Chanel Allure Homme Sport Eau De Toilette 100ml', '2900000', 1, 'Không', '50000', NULL, NULL),
(53, 'cf19e', 41, 'Nước hoa Chanel Coco Noir Eau De Parfum 100ml', '3950000', 1, 'Không', '50000', NULL, NULL),
(54, '9b0db', 38, 'Nước hoa Chanel Coco Mademoiselle Eau De Parfum 100ml', '3990000', 1, 'Không', '50000', NULL, NULL),
(55, '43d69', 56, 'Nước Hoa Dolce & Gabbana Light Blue Living Stromboli', '2000000', 1, 'Không', '50000', NULL, NULL),
(56, '4ec7b', 41, 'Nước hoa Chanel Coco Noir Eau De Parfum 100ml', '3950000', 1, 'Không', '50000', NULL, NULL),
(57, 'be5cb', 49, 'Nước hoa Tom Ford Violet Blonde For Women 100ml', '3100000', 4, 'Không', '50000', NULL, NULL),
(58, 'bb153', 44, 'Nước Hoa Dior Sauvage Eau De Toilette 100ml', '2990000', 1, 'NewYear2022', '50000', NULL, NULL),
(59, '1fddb', 55, 'Nước Hoa Dolce & Gabbana The One for Men EDP 100ml', '2100000', 1, 'Không', '50000', NULL, NULL),
(60, 'af677', 51, 'Nước Hoa La Nuit de L`Homme Le Parfum 100ml', '2500000', 4, 'Noel2021', '20000', NULL, NULL),
(61, 'af677', 57, 'Nước Hoa Dolce & Gabbana The One Gentleman Eau De Toilette 100ml', '1900000', 6, 'Noel2021', '20000', NULL, NULL),
(62, 'c8bee', 41, 'Nước hoa Chanel Coco Noir Eau De Parfum 100ml', '3950000', 1, 'NewYear2022', '100000', NULL, NULL),
(63, 'd2ccb', 49, 'Nước hoa Tom Ford Violet Blonde For Women 100ml', '3100000', 3, 'NewYear2022', '100000', NULL, NULL),
(64, 'd2ccb', 55, 'Nước Hoa Dolce & Gabbana The One for Men EDP 100ml', '2100000', 4, 'NewYear2022', '100000', NULL, NULL),
(65, '6e676', 60, 'Nước Hoa Dolce & Gabbana Intenso for Men Eau De Parfum', '2010000', 1, 'Không', '50000', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `dhMa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `khMa` int(11) NOT NULL,
  `shippingMa` int(11) NOT NULL,
  `dhTrangThai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dhCode` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dhHuy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dhNgayDat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dhMa`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`dhMa`, `khMa`, `shippingMa`, `dhTrangThai`, `dhCode`, `dhHuy`, `dhNgayDat`, `created_at`, `updated_at`) VALUES
(57, 8, 78, '2', 'b2993', NULL, '2021-12-18', '2021-12-18 08:21:58', NULL),
(58, 8, 79, '3', 'd7198', NULL, '2021-12-18', '2021-12-18 15:59:09', NULL),
(59, 16, 80, '3', '3959f', NULL, '2021-12-28', '2021-12-28 08:31:31', NULL),
(60, 16, 81, '3', '8a2b0', NULL, '2021-12-28', '2021-12-28 08:38:30', NULL),
(61, 16, 82, '3', '9b9ef', NULL, '2021-12-28', '2021-12-28 08:41:14', NULL),
(62, 16, 83, '3', 'cd36e', NULL, '2021-12-28', '2021-12-28 09:00:06', NULL),
(63, 16, 84, '2', '0c872', NULL, '2021-12-28', '2021-12-28 09:11:13', NULL),
(79, 8, 100, '3', '1fddb', 'Không có tiền', '2021-12-30', '2021-12-29 19:01:02', NULL),
(80, 8, 101, '2', 'af677', NULL, '2021-12-30', '2021-12-29 19:06:39', NULL),
(81, 8, 102, '1', 'c8bee', NULL, '2021-12-30', '2021-12-30 04:49:56', NULL),
(82, 19, 103, '3', 'd2ccb', 'Abc', '2021-12-30', '2021-12-30 06:55:08', NULL),
(83, 19, 104, '3', '6e676', NULL, '2021-12-30', '2021-12-30 06:58:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dungtich`
--

DROP TABLE IF EXISTS `dungtich`;
CREATE TABLE IF NOT EXISTS `dungtich` (
  `dtMa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `dtTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dtMoTa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dtMa`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dungtich`
--

INSERT INTO `dungtich` (`dtMa`, `dtTen`, `dtMoTa`, `created_at`, `updated_at`) VALUES
(1, '10 ml', 'Sản phẩm 10 ml', NULL, NULL),
(2, '20 ml', 'Sản phẩm 20ml', NULL, NULL),
(3, '30 ml', 'Sản phẩm 30ml', NULL, NULL),
(4, '50 ml', 'Sản phẩm 50ml', NULL, NULL),
(5, '100ml', 'Sản phẩm 100ml', NULL, NULL),
(6, '200ml', 'Sản phẩm 200ml', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `galleryMa` int(10) NOT NULL AUTO_INCREMENT,
  `galleryTen` varchar(191) NOT NULL,
  `galleryHinhAnh` varchar(191) NOT NULL,
  `spMa` int(10) NOT NULL,
  PRIMARY KEY (`galleryMa`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `gallery`
--

INSERT INTO `gallery` (`galleryMa`, `galleryTen`, `galleryHinhAnh`, `spMa`) VALUES
(3, 'Calvin-Klein-CK-Be_1-1-340x34045.jpg', 'nuoc-hoa-gucci-guilty-5ml-340x34046.png', 28),
(4, 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29012.png', 'Dior-J’adore-Eau-De-Parfum-1-300x19583.png', 28),
(5, 'nuoc-hoa-gucci-guilty-5ml-340x3402.png', 'La-Nuit-de-LHomme-Le-Parfum-242.jpg', 28),
(7, 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29016.png', 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29016.png', 29),
(8, 'nuoc-hoa-gucci-guilty-5ml-340x34080.png', 'nuoc-hoa-gucci-guilty-5ml-340x34080.png', 29),
(9, 'Lancome-Tresor-La-Nuit-1-340x34057.jpg', 'Lancome-Tresor-La-Nuit-1-340x34057.jpg', 29),
(10, 'nuoc-hoa-gucci-guilty-5ml-340x34029.png', 'nuoc-hoa-gucci-guilty-5ml-340x34029.png', 25),
(11, 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29030.png', 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29030.png', 30),
(12, 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29049.png', 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29049.png', 31),
(13, 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29088.png', 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29088.png', 31),
(15, 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29041.png', 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29041.png', 33),
(16, 'Tobacco-Oud-100ml-300x24877.png', 'Tobacco-Oud-100ml-300x24877.png', 32),
(17, 'model-of-tobac-co-100ml-300x37583.jpg', 'model-of-tobac-co-100ml-300x37583.jpg', 32),
(18, 'Tom-Ford-Tobacco-Oud-100ml-300x29052.jpg', 'Tom-Ford-Tobacco-Oud-100ml-300x29052.jpg', 32),
(19, 'Tobacco-Oud-100ml-300x24860.png', 'Tobacco-Oud-100ml-300x24860.png', 33),
(20, 'model-of-tobac-co-100ml-300x37549.jpg', 'model-of-tobac-co-100ml-300x37549.jpg', 33),
(21, 'Tom-Ford-Tobacco-Oud-100ml-300x29012.jpg', 'Tom-Ford-Tobacco-Oud-100ml-300x29012.jpg', 33),
(22, 'bleu-de-chanel-eau-de-parfum-chanel-for-men-1-300x215 (1)57.jpg', 'bleu-de-chanel-eau-de-parfum-chanel-for-men-1-300x215 (1)57.jpg', 34),
(23, 'bleu-de-chanel-eau-de-parfum-1-300x23033.png', 'bleu-de-chanel-eau-de-parfum-1-300x23033.png', 34),
(24, 'Chanel-Bleu-De-Chanel-Eau-De-Parfum-800x600-300x2253.png', 'Chanel-Bleu-De-Chanel-Eau-De-Parfum-800x600-300x2253.png', 34),
(25, 'chanel-bleu-de-EDP-jacob-sutton-300x19452.png', 'chanel-bleu-de-EDP-jacob-sutton-300x19452.png', 34),
(26, 'Chanel-Chance-Eau-Vive-340x34021.png', 'Chanel-Chance-Eau-Vive-340x34021.png', 35),
(27, 'Chanel-Chance-Eau-Vive-1-300x20462.png', 'Chanel-Chance-Eau-Vive-1-300x20462.png', 35),
(28, 'Chanel-Chance-Eau-Vive-3-800x450-300x24569.png', 'Chanel-Chance-Eau-Vive-3-800x450-300x24569.png', 35),
(29, 'Chanel-Chance-Eau-Vive-5-340x34040.png', 'Chanel-Chance-Eau-Vive-5-340x34040.png', 35),
(30, 'Chanel-Egoiste-Platinum-2-340x340-300x24144.png', 'Chanel-Egoiste-Platinum-2-340x340-300x24144.png', 36),
(31, 'chanel-egoiste-platinum-1-300x300-300x14932.png', 'chanel-egoiste-platinum-1-300x300-300x14932.png', 36),
(32, 'Chanel-Egoiste-Platinum-2-300x300-300x26285.png', 'Chanel-Egoiste-Platinum-2-300x300-300x26285.png', 36),
(33, 'Chanel-Egoiste-Platinum-340x34035.png', 'Chanel-Egoiste-Platinum-340x34035.png', 36),
(34, 'nuoc-hoa-chanel-chance-eau-tendre-edt-340x34036.jpg', 'nuoc-hoa-chanel-chance-eau-tendre-edt-340x34036.jpg', 37),
(35, 'CHANEL-CHANCE-EAU-TENDRE-1-1-300x21044.jpg', 'CHANEL-CHANCE-EAU-TENDRE-1-1-300x21044.jpg', 37),
(36, 'Chanel-Chance-Eau-Tendre-EDT-1-340x34047.jpg', 'Chanel-Chance-Eau-Tendre-EDT-1-340x34047.jpg', 37),
(37, 'nuoc-hoa-chanel-chance-eau-tendre-1-300x22558.jpg', 'nuoc-hoa-chanel-chance-eau-tendre-1-300x22558.jpg', 37),
(38, 'Chanel-Coco-Mademoiselle-4-1-340x3408.jpg', 'Chanel-Coco-Mademoiselle-4-1-340x3408.jpg', 38),
(39, 'Chanel-Coco-Mademoiselle-1-1-300x19515.jpg', 'Chanel-Coco-Mademoiselle-1-1-300x19515.jpg', 38),
(40, 'Chanel-Coco-Mademoiselle-3-1-340x34043.jpg', 'Chanel-Coco-Mademoiselle-3-1-340x34043.jpg', 38),
(41, 'Chanel-Coco-Mademoiselle-800x451-1-300x20089.jpg', 'Chanel-Coco-Mademoiselle-800x451-1-300x20089.jpg', 38),
(42, 'Nuoc-hoa-Chanel-Allure-Homme-sport-Eau-De-Toilette-340x340-1-300x22547.jpg', 'Nuoc-hoa-Chanel-Allure-Homme-sport-Eau-De-Toilette-340x340-1-300x22547.jpg', 39),
(43, 'Chanel-Allure-Homme-Sport-340x34059.png', 'Chanel-Allure-Homme-Sport-340x34059.png', 39),
(44, 'Chanel-Allure-Homme-sport-EDT-300x300-300x21284.png', 'Chanel-Allure-Homme-sport-EDT-300x300-300x21284.png', 39),
(45, 'nuoc-hoa-chanel-allure-homme-sport-eau-de-toilette-100ml-4-300x300-340x34092.png', 'nuoc-hoa-chanel-allure-homme-sport-eau-de-toilette-100ml-4-300x300-340x34092.png', 39),
(46, 'nuoc-hoa-Chanel-N5-340x34082.png', 'nuoc-hoa-Chanel-N5-340x34082.png', 40),
(47, 'Chanel-N5-eau-de-parfum-340x3407.png', 'Chanel-N5-eau-de-parfum-340x3407.png', 40),
(48, 'chanel-no5-768x768-340x34058.png', 'chanel-no5-768x768-340x34058.png', 40),
(49, 'nuoc-hoa-nu-Chanel-N5-eau-de-parfum-340x34039.png', 'nuoc-hoa-nu-Chanel-N5-eau-de-parfum-340x34039.png', 40),
(50, 'nuoc-hoa-Chanel-Coco-Noir-3-340x34046.jpg', 'nuoc-hoa-Chanel-Coco-Noir-3-340x34046.jpg', 41),
(51, 'Chanel-Coco-Noir-1-1-340x34068.jpg', 'Chanel-Coco-Noir-1-1-340x34068.jpg', 41),
(52, 'Chanel-Coco-Noir-2-300x20324.jpg', 'Chanel-Coco-Noir-2-300x20324.jpg', 41),
(53, 'nuoc-hoa-Chanel-Coco-Noir-eau-de-parfum-340x34086.jpg', 'nuoc-hoa-Chanel-Coco-Noir-eau-de-parfum-340x34086.jpg', 41),
(54, 'Nuoc-hoa-Dior-Homme-Sport-Eau-De-Toilette-125ml-300x19561.png', 'Nuoc-hoa-Dior-Homme-Sport-Eau-De-Toilette-125ml-300x19561.png', 42),
(55, 'dior-homme-sport-edt-dung-tich-125ml-340x34083.png', 'dior-homme-sport-edt-dung-tich-125ml-340x34083.png', 42),
(56, 'nuoc-hoa-dior-homme-sport-125ml-300x20085.png', 'nuoc-hoa-dior-homme-sport-125ml-300x20085.png', 42),
(57, 'nuoc-hoa-dior-homme-sport-eau-de-toilette-125ml-300x195 (1)1.png', 'nuoc-hoa-dior-homme-sport-eau-de-toilette-125ml-300x195 (1)1.png', 42),
(58, 'Nuoc-hoa-Dior-Homme-Parfum-300x19519.png', 'Nuoc-hoa-Dior-Homme-Parfum-300x19519.png', 43),
(59, 'dior-homme-parfum-instensty-300x19292.png', 'dior-homme-parfum-instensty-300x19292.png', 43),
(60, 'dior-homme-parfum-nuoc-hoa-340x34059.png', 'dior-homme-parfum-nuoc-hoa-340x34059.png', 43),
(61, 'nuoc-hoa-dior-homme-parfum-300x195 (1)67.png', 'nuoc-hoa-dior-homme-parfum-300x195 (1)67.png', 43),
(62, 'Nuoc-hoa-Dior-Sauvage-Eau-De-Toilette-300x19524.png', 'Nuoc-hoa-Dior-Sauvage-Eau-De-Toilette-300x19524.png', 44),
(63, 'dior-sauvage-eau-de-toilette-300x19915.png', 'dior-sauvage-eau-de-toilette-300x19915.png', 44),
(64, 'dior-sauvage-eau-de-toilette-johnny-dep-300x19511.png', 'dior-sauvage-eau-de-toilette-johnny-dep-300x19511.png', 44),
(65, 'nuoc-hoa-dior-sauvage-eau-de-toilette-300x195 (1)88.png', 'nuoc-hoa-dior-sauvage-eau-de-toilette-300x195 (1)88.png', 44),
(66, 'Nước-hoa-MISS-DIOR-EAU-DE-TOILETTE-50ml-300x27951.png', 'Nước-hoa-MISS-DIOR-EAU-DE-TOILETTE-50ml-300x27951.png', 45),
(67, 'nuoc-hoa-miss-dior-eau-de-toilette-50ml-340x34022.jpg', 'nuoc-hoa-miss-dior-eau-de-toilette-50ml-340x34022.jpg', 45),
(68, 'nuoc-hoa-nu-miss-dior-50ml-300x19513.png', 'nuoc-hoa-nu-miss-dior-50ml-300x19513.png', 45),
(69, 'nuoc-hoa-nu-miss-dior-eau-de-toilette-50ml-300x26499.png', 'nuoc-hoa-nu-miss-dior-eau-de-toilette-50ml-300x26499.png', 45),
(70, 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29066.png', 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29066.png', 46),
(71, 'model-of-tobac-co-100ml-300x37584.jpg', 'model-of-tobac-co-100ml-300x37584.jpg', 46),
(72, 'Tobacco-Oud-100ml-300x2488.png', 'Tobacco-Oud-100ml-300x2488.png', 46),
(73, 'Tom-Ford-Tobacco-Oud-100ml-300x29022.jpg', 'Tom-Ford-Tobacco-Oud-100ml-300x29022.jpg', 46),
(74, 'Tom-Ford-Black-Orchid-4-1-340x34031.jpg', 'Tom-Ford-Black-Orchid-4-1-340x34031.jpg', 47),
(75, 'Nuoc-hoa-Tom-Ford-Black-Orchid-340x34099.jpg', 'Nuoc-hoa-Tom-Ford-Black-Orchid-340x34099.jpg', 47),
(76, 'Tom-Ford-Black-Orchid-1-300x16961.jpg', 'Tom-Ford-Black-Orchid-1-300x16961.jpg', 47),
(77, 'Tom-Ford-Black-Orchid-5-340x34048.jpg', 'Tom-Ford-Black-Orchid-5-340x34048.jpg', 47),
(78, 'Tom-Ford-Noir-Extreme-4-340x34065.jpg', 'Tom-Ford-Noir-Extreme-4-340x34065.jpg', 48),
(79, 'Nuoc-hoa-Tom-Ford-Noir-Extreme-340x34090.jpg', 'Nuoc-hoa-Tom-Ford-Noir-Extreme-340x34090.jpg', 48),
(80, 'Tom-Ford-Noir-Extreme-1-800x333-1-300x19625.jpg', 'Tom-Ford-Noir-Extreme-1-800x333-1-300x19625.jpg', 48),
(81, 'Tom-Ford-Noir-Extreme-2-800x511-1-340x34012.jpg', 'Tom-Ford-Noir-Extreme-2-800x511-1-340x34012.jpg', 48),
(82, 'Tom-Ford-Violet-Blonde-1-1-340x34057.jpg', 'Tom-Ford-Violet-Blonde-1-1-340x34057.jpg', 49),
(83, 'Nuoc-hoa-nu-Tom-Ford-Violet-Blonde-340x34042.jpg', 'Nuoc-hoa-nu-Tom-Ford-Violet-Blonde-340x34042.jpg', 49),
(84, 'Tom-Ford-Violet-Blonde-3-340x34074.jpg', 'Tom-Ford-Violet-Blonde-3-340x34074.jpg', 49),
(85, 'Tom-Ford-Violet-Blonde-for-women-1-300x2049.jpg', 'Tom-Ford-Violet-Blonde-for-women-1-300x2049.jpg', 49),
(86, 'Nuoc-hoa-Tom-Ford-Bitter-Peach-100ml-340x34049.png', 'Nuoc-hoa-Tom-Ford-Bitter-Peach-100ml-340x34049.png', 50),
(87, 'TF-Bitter-Peach-100ml-300x3039.png', 'TF-Bitter-Peach-100ml-300x3039.png', 50),
(88, 'Tom-Ford-Bitter-Peach-100ml-340x34041.png', 'Tom-Ford-Bitter-Peach-100ml-340x34041.png', 50),
(89, 'Tom-Ford-Bitter-Peach-EDP-100ml-300x28947.png', 'Tom-Ford-Bitter-Peach-EDP-100ml-300x28947.png', 50),
(90, 'La-Nuit-de-LHomme-Le-Parfum-263.jpg', 'La-Nuit-de-LHomme-Le-Parfum-263.jpg', 51),
(91, 'La-Nuit-de-LHomme-Le-Parfum-24.jpg', 'La-Nuit-de-LHomme-Le-Parfum-24.jpg', 51),
(92, 'Yves-Saint-Laurent-La-Nuit-de-L’Homme-Le-Parfum-300x22952.jpg', 'Yves-Saint-Laurent-La-Nuit-de-L’Homme-Le-Parfum-300x22952.jpg', 51),
(93, 'Yves-Saint-Laurent-La-Nuit-de-lHomme-340x34055.jpg', 'Yves-Saint-Laurent-La-Nuit-de-lHomme-340x34055.jpg', 52),
(94, 'Yves-Saint-Laurent-La-Nuit-de-lHomme-340x34036.jpg', 'Yves-Saint-Laurent-La-Nuit-de-lHomme-340x34036.jpg', 52),
(95, 'yves-saint-laurent-l-homme-la-nuit-300x27127.jpg', 'yves-saint-laurent-l-homme-la-nuit-300x27127.jpg', 52),
(96, 'Nuoc-hoa-YSL-Libre-300x30394.png', 'Nuoc-hoa-YSL-Libre-300x30394.png', 53),
(97, 'YSL-Libre-300x29662.png', 'YSL-Libre-300x29662.png', 53),
(98, 'Yv-es-Sai-nt-Laur-ent-Lib-re-340x3400.png', 'Yv-es-Sai-nt-Laur-ent-Lib-re-340x3400.png', 53),
(99, 'Yves-Saint-Laurent-Libre-EDP-340x34081.png', 'Yves-Saint-Laurent-Libre-EDP-340x34081.png', 53),
(100, 'Yv-es-Sai-nt-Laur-ent-Lib-re-for-wm-300x27066.png', 'Yv-es-Sai-nt-Laur-ent-Lib-re-for-wm-300x27066.png', 53),
(101, 'Yves-Saint-Laurent-Black-Opium-5-340x34089.jpg', 'Yves-Saint-Laurent-Black-Opium-5-340x34089.jpg', 54),
(102, 'Yves-Saint-Laurent-Black-Opium-1-186.jpg', 'Yves-Saint-Laurent-Black-Opium-1-186.jpg', 54),
(103, 'Yves-Saint-Laurent-Black-Opium-3-1-300x2046.jpg', 'Yves-Saint-Laurent-Black-Opium-3-1-300x2046.jpg', 54),
(104, 'Yves-Saint-Laurent-Black-Opium-4-800x464-1-300x21635.jpg', 'Yves-Saint-Laurent-Black-Opium-4-800x464-1-300x21635.jpg', 54),
(105, 'The-One-for-Men-EDP-4-1-340x34092.jpg', 'The-One-for-Men-EDP-4-1-340x34092.jpg', 55),
(106, 'The-One-for-Men-EDP-2-1-340x34053.jpg', 'The-One-for-Men-EDP-2-1-340x34053.jpg', 55),
(107, 'The-One-for-Men-EDP-3-1-340x34047.jpg', 'The-One-for-Men-EDP-3-1-340x34047.jpg', 55),
(108, 'The-One-for-Men-EDP-5-340x34018.jpg', 'The-One-for-Men-EDP-5-340x34018.jpg', 55),
(109, 'Light-Blue-Living-Stromboli-340x34017.jpg', 'Light-Blue-Living-Stromboli-340x34017.jpg', 56),
(110, 'Light-Blue-Living-Stromboli-1-1-340x34088.jpg', 'Light-Blue-Living-Stromboli-1-1-340x34088.jpg', 56),
(111, 'Light-Blue-Living-Stromboli-2-1-300x1294.jpg', 'Light-Blue-Living-Stromboli-2-1-300x1294.jpg', 56),
(112, 'Light-Blue-Living-Stromboli-3-768x512-1-300x22521.jpg', 'Light-Blue-Living-Stromboli-3-768x512-1-300x22521.jpg', 56),
(116, 'Dolce-Gabbana-The-One-Gentleman-2-1-340x34025.jpg', 'Dolce-Gabbana-The-One-Gentleman-2-1-340x34025.jpg', 57),
(117, 'dolce-a-gabbana-the-one-gentleman-2-340x34059.jpg', 'dolce-a-gabbana-the-one-gentleman-2-340x34059.jpg', 57),
(118, 'dolce-gabbana-the-one-gentleman-1-1-300x17215.jpg', 'dolce-gabbana-the-one-gentleman-1-1-300x17215.jpg', 57),
(119, 'Dolce-Gabbana-The-One-Gentleman-800x524-1-300x19752.jpg', 'Dolce-Gabbana-The-One-Gentleman-800x524-1-300x19752.jpg', 57),
(120, 'dolce-and-gabbana-rose-the-one-1-340x34051.jpg', 'dolce-and-gabbana-rose-the-one-1-340x34051.jpg', 58),
(121, 'dolce_and_gabbana_rose_the_one-1-1-300x19822.jpg', 'dolce_and_gabbana_rose_the_one-1-1-300x19822.jpg', 58),
(122, 'dolce_and_gabbana_rose_the_one-800x333-1-300x17280.jpg', 'dolce_and_gabbana_rose_the_one-800x333-1-300x17280.jpg', 58),
(123, 'Nuoc-hoa-dolce-and-gabbana-rose-the-one-340x34076.jpg', 'Nuoc-hoa-dolce-and-gabbana-rose-the-one-340x34076.jpg', 58),
(124, 'The-One-Collectors-Edition-6-340x34035.jpg', 'The-One-Collectors-Edition-6-340x34035.jpg', 59),
(125, 'dolce-gabbana-the-one-collectors-edition-2-1-300x20141.jpg', 'dolce-gabbana-the-one-collectors-edition-2-1-300x20141.jpg', 59),
(126, 'Nuoc-hoa-Dolce-Gabbana-The-One-Collectors-Edition-340x34043.jpg', 'Nuoc-hoa-Dolce-Gabbana-The-One-Collectors-Edition-340x34043.jpg', 59),
(127, 'The-One-Collectors-Edition-1-800x591-1-300x20065.jpg', 'The-One-Collectors-Edition-1-800x591-1-300x20065.jpg', 59),
(128, 'Dolce-Gabbana-Intenso-for-men-2-1-340x34023.jpg', 'Dolce-Gabbana-Intenso-for-men-2-1-340x34023.jpg', 60),
(129, 'dg-Intenso-for-Men-1-340x34067.jpg', 'dg-Intenso-for-Men-1-340x34067.jpg', 60),
(130, 'Dolce-Gabbana-Intenso-for-men-1-1-300x21027.jpg', 'Dolce-Gabbana-Intenso-for-men-1-1-300x21027.jpg', 60),
(131, 'Dolce-Gabbana-Intenso-for-men-3-300x19918.jpg', 'Dolce-Gabbana-Intenso-for-men-3-300x19918.jpg', 60),
(132, 'Nuoc-hoa-Chanel-Allure-Homme-sport-Eau-De-Toilette-340x340-1-300x22596.jpg', 'Nuoc-hoa-Chanel-Allure-Homme-sport-Eau-De-Toilette-340x340-1-300x22596.jpg', 61),
(133, 'Chanel-Allure-Homme-Sport-340x34033.png', 'Chanel-Allure-Homme-Sport-340x34033.png', 62);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `khMa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `khTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khEmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khMatKhau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khSoDienThoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `khToken` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khTrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`khMa`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`khMa`, `khTen`, `khEmail`, `khMatKhau`, `khSoDienThoai`, `khToken`, `khTrangThai`, `created_at`, `updated_at`) VALUES
(18, 'thành', 'nhokcan99@gmail.com', '9d07ae46908841525e1e03b3fe382cab', '0399777151', 'yW72YMxAPJJGBmEQ', 1, NULL, NULL),
(19, 'thành', 'phuocthanh2409@gmail.com', 'bd53a6abddb1dcc064675ecf5a01b514', '0399777151', 'ylLFGIh4jmVhZg8P', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

DROP TABLE IF EXISTS `loaisanpham`;
CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `loaiMa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `loaiTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaiMoTa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `loaiTrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`loaiMa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`loaiMa`, `loaiTen`, `loaiMoTa`, `loaiTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'Nước hoa nam', 'Nước hoa dành cho nam', 1, NULL, NULL),
(2, 'Nước hoa nữ', 'Nước hoa dành cho nữ', 1, NULL, NULL),
(3, 'Nước hoa unisex', 'Nước hoa giành cho nhiều giới tính', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `magiamgia`
--

DROP TABLE IF EXISTS `magiamgia`;
CREATE TABLE IF NOT EXISTS `magiamgia` (
  `mggMa` int(10) NOT NULL AUTO_INCREMENT,
  `mggTen` varchar(191) NOT NULL,
  `mggCode` varchar(191) NOT NULL,
  `mggSoLuong` int(11) NOT NULL,
  `mggPhuongThuc` int(11) NOT NULL,
  `mggGiaTri` varchar(191) NOT NULL,
  PRIMARY KEY (`mggMa`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `magiamgia`
--

INSERT INTO `magiamgia` (`mggMa`, `mggTen`, `mggCode`, `mggSoLuong`, `mggPhuongThuc`, `mggGiaTri`) VALUES
(1, 'Giảm giá Noel', 'Noel2021', 20, 0, '20'),
(2, 'Giảm giá năm mới', 'NewYear2022', 20, 1, '100000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(80, '2014_10_12_000000_create_users_table', 1),
(81, '2014_10_12_100000_create_password_resets_table', 1),
(82, '2019_08_19_000000_create_failed_jobs_table', 1),
(83, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(84, '2021_12_03_044003_creat_quan_tri_vien_table', 1),
(85, '2021_12_03_143646_create_loaisanpham', 1),
(86, '2021_12_03_163302_create_thuonghieu', 1),
(87, '2021_12_03_173708_create_muasanpham', 1),
(88, '2021_12_04_051123_create_sanpham', 2),
(89, '2021_12_04_054831_create_khuyenmai', 2),
(98, '2021_12_06_032953_update_loi', 3),
(99, '2021_12_06_044038_dungtich', 4),
(100, '2021_12_07_165737_khachhang', 5),
(102, '2021_12_08_142543_shipping', 6),
(103, '2021_12_08_171933_payment', 7),
(104, '2021_12_08_172007_donhang', 7),
(105, '2021_12_08_172023_chitietdonhang', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muasanpham`
--

DROP TABLE IF EXISTS `muasanpham`;
CREATE TABLE IF NOT EXISTS `muasanpham` (
  `muaMa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `muaTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `muaMoTa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `muaTrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`muaMa`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `muasanpham`
--

INSERT INTO `muasanpham` (`muaMa`, `muaTen`, `muaMoTa`, `muaTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'Mùa xuân', 'Nước hoa dành cho mùa xuân', 1, NULL, NULL),
(2, 'Mùa hè', 'Nước hoa dành cho mùa hè', 1, NULL, NULL),
(3, 'Mùa thu', 'Nước hoa dành cho mùa thu', 1, NULL, NULL),
(4, 'Mùa đông', 'Nước hoa dành cho mùa đông', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phivanchuyen`
--

DROP TABLE IF EXISTS `phivanchuyen`;
CREATE TABLE IF NOT EXISTS `phivanchuyen` (
  `vcMa` int(10) NOT NULL AUTO_INCREMENT,
  `matp` int(10) NOT NULL,
  `maqh` int(10) NOT NULL,
  `vcPhi` varchar(50) NOT NULL,
  PRIMARY KEY (`vcMa`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phivanchuyen`
--

INSERT INTO `phivanchuyen` (`vcMa`, `matp`, `maqh`, `vcPhi`) VALUES
(2, 4, 40, '50000'),
(4, 2, 27, '20000'),
(5, 1, 1, '100000'),
(6, 1, 2, '50000'),
(7, 2, 26, '100000'),
(8, 6, 61, '10000'),
(9, 11, 96, '10000'),
(10, 1, 9, '20000'),
(11, 2, 24, '50000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanhuyen`
--

DROP TABLE IF EXISTS `quanhuyen`;
CREATE TABLE IF NOT EXISTS `quanhuyen` (
  `maqh` int(10) NOT NULL,
  `tenqh` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  `matp` int(10) NOT NULL,
  PRIMARY KEY (`maqh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `quanhuyen`
--

INSERT INTO `quanhuyen` (`maqh`, `tenqh`, `type`, `matp`) VALUES
(1, 'Quận Ba Đình', 'Quận', 1),
(2, 'Quận Hoàn Kiếm', 'Quận', 1),
(3, 'Quận Tây Hồ', 'Quận', 1),
(4, 'Quận Long Biên', 'Quận', 1),
(5, 'Quận Cầu Giấy', 'Quận', 1),
(6, 'Quận Đống Đa', 'Quận', 1),
(7, 'Quận Hai Bà Trưng', 'Quận', 1),
(8, 'Quận Hoàng Mai', 'Quận', 1),
(9, 'Quận Thanh Xuân', 'Quận', 1),
(16, 'Huyện Sóc Sơn', 'Huyện', 1),
(17, 'Huyện Đông Anh', 'Huyện', 1),
(18, 'Huyện Gia Lâm', 'Huyện', 1),
(19, 'Quận Nam Từ Liêm', 'Quận', 1),
(20, 'Huyện Thanh Trì', 'Huyện', 1),
(21, 'Quận Bắc Từ Liêm', 'Quận', 1),
(24, 'Thành phố Hà Giang', 'Thành phố', 2),
(26, 'Huyện Đồng Văn', 'Huyện', 2),
(27, 'Huyện Mèo Vạc', 'Huyện', 2),
(28, 'Huyện Yên Minh', 'Huyện', 2),
(29, 'Huyện Quản Bạ', 'Huyện', 2),
(30, 'Huyện Vị Xuyên', 'Huyện', 2),
(31, 'Huyện Bắc Mê', 'Huyện', 2),
(32, 'Huyện Hoàng Su Phì', 'Huyện', 2),
(33, 'Huyện Xín Mần', 'Huyện', 2),
(34, 'Huyện Bắc Quang', 'Huyện', 2),
(35, 'Huyện Quang Bình', 'Huyện', 2),
(40, 'Thành phố Cao Bằng', 'Thành phố', 4),
(42, 'Huyện Bảo Lâm', 'Huyện', 4),
(43, 'Huyện Bảo Lạc', 'Huyện', 4),
(44, 'Huyện Thông Nông', 'Huyện', 4),
(45, 'Huyện Hà Quảng', 'Huyện', 4),
(46, 'Huyện Trà Lĩnh', 'Huyện', 4),
(47, 'Huyện Trùng Khánh', 'Huyện', 4),
(48, 'Huyện Hạ Lang', 'Huyện', 4),
(49, 'Huyện Quảng Uyên', 'Huyện', 4),
(50, 'Huyện Phục Hoà', 'Huyện', 4),
(51, 'Huyện Hoà An', 'Huyện', 4),
(52, 'Huyện Nguyên Bình', 'Huyện', 4),
(53, 'Huyện Thạch An', 'Huyện', 4),
(58, 'Thành Phố Bắc Kạn', 'Thành phố', 6),
(60, 'Huyện Pác Nặm', 'Huyện', 6),
(61, 'Huyện Ba Bể', 'Huyện', 6),
(62, 'Huyện Ngân Sơn', 'Huyện', 6),
(63, 'Huyện Bạch Thông', 'Huyện', 6),
(64, 'Huyện Chợ Đồn', 'Huyện', 6),
(65, 'Huyện Chợ Mới', 'Huyện', 6),
(66, 'Huyện Na Rì', 'Huyện', 6),
(70, 'Thành phố Tuyên Quang', 'Thành phố', 8),
(71, 'Huyện Lâm Bình', 'Huyện', 8),
(72, 'Huyện Nà Hang', 'Huyện', 8),
(73, 'Huyện Chiêm Hóa', 'Huyện', 8),
(74, 'Huyện Hàm Yên', 'Huyện', 8),
(75, 'Huyện Yên Sơn', 'Huyện', 8),
(76, 'Huyện Sơn Dương', 'Huyện', 8),
(80, 'Thành phố Lào Cai', 'Thành phố', 10),
(82, 'Huyện Bát Xát', 'Huyện', 10),
(83, 'Huyện Mường Khương', 'Huyện', 10),
(84, 'Huyện Si Ma Cai', 'Huyện', 10),
(85, 'Huyện Bắc Hà', 'Huyện', 10),
(86, 'Huyện Bảo Thắng', 'Huyện', 10),
(87, 'Huyện Bảo Yên', 'Huyện', 10),
(88, 'Huyện Sa Pa', 'Huyện', 10),
(89, 'Huyện Văn Bàn', 'Huyện', 10),
(94, 'Thành phố Điện Biên Phủ', 'Thành phố', 11),
(95, 'Thị Xã Mường Lay', 'Thị xã', 11),
(96, 'Huyện Mường Nhé', 'Huyện', 11),
(97, 'Huyện Mường Chà', 'Huyện', 11),
(98, 'Huyện Tủa Chùa', 'Huyện', 11),
(99, 'Huyện Tuần Giáo', 'Huyện', 11),
(100, 'Huyện Điện Biên', 'Huyện', 11),
(101, 'Huyện Điện Biên Đông', 'Huyện', 11),
(102, 'Huyện Mường Ảng', 'Huyện', 11),
(103, 'Huyện Nậm Pồ', 'Huyện', 11),
(105, 'Thành phố Lai Châu', 'Thành phố', 12),
(106, 'Huyện Tam Đường', 'Huyện', 12),
(107, 'Huyện Mường Tè', 'Huyện', 12),
(108, 'Huyện Sìn Hồ', 'Huyện', 12),
(109, 'Huyện Phong Thổ', 'Huyện', 12),
(110, 'Huyện Than Uyên', 'Huyện', 12),
(111, 'Huyện Tân Uyên', 'Huyện', 12),
(112, 'Huyện Nậm Nhùn', 'Huyện', 12),
(116, 'Thành phố Sơn La', 'Thành phố', 14),
(118, 'Huyện Quỳnh Nhai', 'Huyện', 14),
(119, 'Huyện Thuận Châu', 'Huyện', 14),
(120, 'Huyện Mường La', 'Huyện', 14),
(121, 'Huyện Bắc Yên', 'Huyện', 14),
(122, 'Huyện Phù Yên', 'Huyện', 14),
(123, 'Huyện Mộc Châu', 'Huyện', 14),
(124, 'Huyện Yên Châu', 'Huyện', 14),
(125, 'Huyện Mai Sơn', 'Huyện', 14),
(126, 'Huyện Sông Mã', 'Huyện', 14),
(127, 'Huyện Sốp Cộp', 'Huyện', 14),
(128, 'Huyện Vân Hồ', 'Huyện', 14),
(132, 'Thành phố Yên Bái', 'Thành phố', 15),
(133, 'Thị xã Nghĩa Lộ', 'Thị xã', 15),
(135, 'Huyện Lục Yên', 'Huyện', 15),
(136, 'Huyện Văn Yên', 'Huyện', 15),
(137, 'Huyện Mù Căng Chải', 'Huyện', 15),
(138, 'Huyện Trấn Yên', 'Huyện', 15),
(139, 'Huyện Trạm Tấu', 'Huyện', 15),
(140, 'Huyện Văn Chấn', 'Huyện', 15),
(141, 'Huyện Yên Bình', 'Huyện', 15),
(148, 'Thành phố Hòa Bình', 'Thành phố', 17),
(150, 'Huyện Đà Bắc', 'Huyện', 17),
(151, 'Huyện Kỳ Sơn', 'Huyện', 17),
(152, 'Huyện Lương Sơn', 'Huyện', 17),
(153, 'Huyện Kim Bôi', 'Huyện', 17),
(154, 'Huyện Cao Phong', 'Huyện', 17),
(155, 'Huyện Tân Lạc', 'Huyện', 17),
(156, 'Huyện Mai Châu', 'Huyện', 17),
(157, 'Huyện Lạc Sơn', 'Huyện', 17),
(158, 'Huyện Yên Thủy', 'Huyện', 17),
(159, 'Huyện Lạc Thủy', 'Huyện', 17),
(164, 'Thành phố Thái Nguyên', 'Thành phố', 19),
(165, 'Thành phố Sông Công', 'Thành phố', 19),
(167, 'Huyện Định Hóa', 'Huyện', 19),
(168, 'Huyện Phú Lương', 'Huyện', 19),
(169, 'Huyện Đồng Hỷ', 'Huyện', 19),
(170, 'Huyện Võ Nhai', 'Huyện', 19),
(171, 'Huyện Đại Từ', 'Huyện', 19),
(172, 'Thị xã Phổ Yên', 'Thị xã', 19),
(173, 'Huyện Phú Bình', 'Huyện', 19),
(178, 'Thành phố Lạng Sơn', 'Thành phố', 20),
(180, 'Huyện Tràng Định', 'Huyện', 20),
(181, 'Huyện Bình Gia', 'Huyện', 20),
(182, 'Huyện Văn Lãng', 'Huyện', 20),
(183, 'Huyện Cao Lộc', 'Huyện', 20),
(184, 'Huyện Văn Quan', 'Huyện', 20),
(185, 'Huyện Bắc Sơn', 'Huyện', 20),
(186, 'Huyện Hữu Lũng', 'Huyện', 20),
(187, 'Huyện Chi Lăng', 'Huyện', 20),
(188, 'Huyện Lộc Bình', 'Huyện', 20),
(189, 'Huyện Đình Lập', 'Huyện', 20),
(193, 'Thành phố Hạ Long', 'Thành phố', 22),
(194, 'Thành phố Móng Cái', 'Thành phố', 22),
(195, 'Thành phố Cẩm Phả', 'Thành phố', 22),
(196, 'Thành phố Uông Bí', 'Thành phố', 22),
(198, 'Huyện Bình Liêu', 'Huyện', 22),
(199, 'Huyện Tiên Yên', 'Huyện', 22),
(200, 'Huyện Đầm Hà', 'Huyện', 22),
(201, 'Huyện Hải Hà', 'Huyện', 22),
(202, 'Huyện Ba Chẽ', 'Huyện', 22),
(203, 'Huyện Vân Đồn', 'Huyện', 22),
(204, 'Huyện Hoành Bồ', 'Huyện', 22),
(205, 'Thị xã Đông Triều', 'Thị xã', 22),
(206, 'Thị xã Quảng Yên', 'Thị xã', 22),
(207, 'Huyện Cô Tô', 'Huyện', 22),
(213, 'Thành phố Bắc Giang', 'Thành phố', 24),
(215, 'Huyện Yên Thế', 'Huyện', 24),
(216, 'Huyện Tân Yên', 'Huyện', 24),
(217, 'Huyện Lạng Giang', 'Huyện', 24),
(218, 'Huyện Lục Nam', 'Huyện', 24),
(219, 'Huyện Lục Ngạn', 'Huyện', 24),
(220, 'Huyện Sơn Động', 'Huyện', 24),
(221, 'Huyện Yên Dũng', 'Huyện', 24),
(222, 'Huyện Việt Yên', 'Huyện', 24),
(223, 'Huyện Hiệp Hòa', 'Huyện', 24),
(227, 'Thành phố Việt Trì', 'Thành phố', 25),
(228, 'Thị xã Phú Thọ', 'Thị xã', 25),
(230, 'Huyện Đoan Hùng', 'Huyện', 25),
(231, 'Huyện Hạ Hoà', 'Huyện', 25),
(232, 'Huyện Thanh Ba', 'Huyện', 25),
(233, 'Huyện Phù Ninh', 'Huyện', 25),
(234, 'Huyện Yên Lập', 'Huyện', 25),
(235, 'Huyện Cẩm Khê', 'Huyện', 25),
(236, 'Huyện Tam Nông', 'Huyện', 25),
(237, 'Huyện Lâm Thao', 'Huyện', 25),
(238, 'Huyện Thanh Sơn', 'Huyện', 25),
(239, 'Huyện Thanh Thuỷ', 'Huyện', 25),
(240, 'Huyện Tân Sơn', 'Huyện', 25),
(243, 'Thành phố Vĩnh Yên', 'Thành phố', 26),
(244, 'Thị xã Phúc Yên', 'Thị xã', 26),
(246, 'Huyện Lập Thạch', 'Huyện', 26),
(247, 'Huyện Tam Dương', 'Huyện', 26),
(248, 'Huyện Tam Đảo', 'Huyện', 26),
(249, 'Huyện Bình Xuyên', 'Huyện', 26),
(250, 'Huyện Mê Linh', 'Huyện', 1),
(251, 'Huyện Yên Lạc', 'Huyện', 26),
(252, 'Huyện Vĩnh Tường', 'Huyện', 26),
(253, 'Huyện Sông Lô', 'Huyện', 26),
(256, 'Thành phố Bắc Ninh', 'Thành phố', 27),
(258, 'Huyện Yên Phong', 'Huyện', 27),
(259, 'Huyện Quế Võ', 'Huyện', 27),
(260, 'Huyện Tiên Du', 'Huyện', 27),
(261, 'Thị xã Từ Sơn', 'Thị xã', 27),
(262, 'Huyện Thuận Thành', 'Huyện', 27),
(263, 'Huyện Gia Bình', 'Huyện', 27),
(264, 'Huyện Lương Tài', 'Huyện', 27),
(268, 'Quận Hà Đông', 'Quận', 1),
(269, 'Thị xã Sơn Tây', 'Thị xã', 1),
(271, 'Huyện Ba Vì', 'Huyện', 1),
(272, 'Huyện Phúc Thọ', 'Huyện', 1),
(273, 'Huyện Đan Phượng', 'Huyện', 1),
(274, 'Huyện Hoài Đức', 'Huyện', 1),
(275, 'Huyện Quốc Oai', 'Huyện', 1),
(276, 'Huyện Thạch Thất', 'Huyện', 1),
(277, 'Huyện Chương Mỹ', 'Huyện', 1),
(278, 'Huyện Thanh Oai', 'Huyện', 1),
(279, 'Huyện Thường Tín', 'Huyện', 1),
(280, 'Huyện Phú Xuyên', 'Huyện', 1),
(281, 'Huyện Ứng Hòa', 'Huyện', 1),
(282, 'Huyện Mỹ Đức', 'Huyện', 1),
(288, 'Thành phố Hải Dương', 'Thành phố', 30),
(290, 'Thị xã Chí Linh', 'Thị xã', 30),
(291, 'Huyện Nam Sách', 'Huyện', 30),
(292, 'Huyện Kinh Môn', 'Huyện', 30),
(293, 'Huyện Kim Thành', 'Huyện', 30),
(294, 'Huyện Thanh Hà', 'Huyện', 30),
(295, 'Huyện Cẩm Giàng', 'Huyện', 30),
(296, 'Huyện Bình Giang', 'Huyện', 30),
(297, 'Huyện Gia Lộc', 'Huyện', 30),
(298, 'Huyện Tứ Kỳ', 'Huyện', 30),
(299, 'Huyện Ninh Giang', 'Huyện', 30),
(300, 'Huyện Thanh Miện', 'Huyện', 30),
(303, 'Quận Hồng Bàng', 'Quận', 31),
(304, 'Quận Ngô Quyền', 'Quận', 31),
(305, 'Quận Lê Chân', 'Quận', 31),
(306, 'Quận Hải An', 'Quận', 31),
(307, 'Quận Kiến An', 'Quận', 31),
(308, 'Quận Đồ Sơn', 'Quận', 31),
(309, 'Quận Dương Kinh', 'Quận', 31),
(311, 'Huyện Thuỷ Nguyên', 'Huyện', 31),
(312, 'Huyện An Dương', 'Huyện', 31),
(313, 'Huyện An Lão', 'Huyện', 31),
(314, 'Huyện Kiến Thuỵ', 'Huyện', 31),
(315, 'Huyện Tiên Lãng', 'Huyện', 31),
(316, 'Huyện Vĩnh Bảo', 'Huyện', 31),
(317, 'Huyện Cát Hải', 'Huyện', 31),
(318, 'Huyện Bạch Long Vĩ', 'Huyện', 31),
(323, 'Thành phố Hưng Yên', 'Thành phố', 33),
(325, 'Huyện Văn Lâm', 'Huyện', 33),
(326, 'Huyện Văn Giang', 'Huyện', 33),
(327, 'Huyện Yên Mỹ', 'Huyện', 33),
(328, 'Huyện Mỹ Hào', 'Huyện', 33),
(329, 'Huyện Ân Thi', 'Huyện', 33),
(330, 'Huyện Khoái Châu', 'Huyện', 33),
(331, 'Huyện Kim Động', 'Huyện', 33),
(332, 'Huyện Tiên Lữ', 'Huyện', 33),
(333, 'Huyện Phù Cừ', 'Huyện', 33),
(336, 'Thành phố Thái Bình', 'Thành phố', 34),
(338, 'Huyện Quỳnh Phụ', 'Huyện', 34),
(339, 'Huyện Hưng Hà', 'Huyện', 34),
(340, 'Huyện Đông Hưng', 'Huyện', 34),
(341, 'Huyện Thái Thụy', 'Huyện', 34),
(342, 'Huyện Tiền Hải', 'Huyện', 34),
(343, 'Huyện Kiến Xương', 'Huyện', 34),
(344, 'Huyện Vũ Thư', 'Huyện', 34),
(347, 'Thành phố Phủ Lý', 'Thành phố', 35),
(349, 'Huyện Duy Tiên', 'Huyện', 35),
(350, 'Huyện Kim Bảng', 'Huyện', 35),
(351, 'Huyện Thanh Liêm', 'Huyện', 35),
(352, 'Huyện Bình Lục', 'Huyện', 35),
(353, 'Huyện Lý Nhân', 'Huyện', 35),
(356, 'Thành phố Nam Định', 'Thành phố', 36),
(358, 'Huyện Mỹ Lộc', 'Huyện', 36),
(359, 'Huyện Vụ Bản', 'Huyện', 36),
(360, 'Huyện Ý Yên', 'Huyện', 36),
(361, 'Huyện Nghĩa Hưng', 'Huyện', 36),
(362, 'Huyện Nam Trực', 'Huyện', 36),
(363, 'Huyện Trực Ninh', 'Huyện', 36),
(364, 'Huyện Xuân Trường', 'Huyện', 36),
(365, 'Huyện Giao Thủy', 'Huyện', 36),
(366, 'Huyện Hải Hậu', 'Huyện', 36),
(369, 'Thành phố Ninh Bình', 'Thành phố', 37),
(370, 'Thành phố Tam Điệp', 'Thành phố', 37),
(372, 'Huyện Nho Quan', 'Huyện', 37),
(373, 'Huyện Gia Viễn', 'Huyện', 37),
(374, 'Huyện Hoa Lư', 'Huyện', 37),
(375, 'Huyện Yên Khánh', 'Huyện', 37),
(376, 'Huyện Kim Sơn', 'Huyện', 37),
(377, 'Huyện Yên Mô', 'Huyện', 37),
(380, 'Thành phố Thanh Hóa', 'Thành phố', 38),
(381, 'Thị xã Bỉm Sơn', 'Thị xã', 38),
(382, 'Thị xã Sầm Sơn', 'Thị xã', 38),
(384, 'Huyện Mường Lát', 'Huyện', 38),
(385, 'Huyện Quan Hóa', 'Huyện', 38),
(386, 'Huyện Bá Thước', 'Huyện', 38),
(387, 'Huyện Quan Sơn', 'Huyện', 38),
(388, 'Huyện Lang Chánh', 'Huyện', 38),
(389, 'Huyện Ngọc Lặc', 'Huyện', 38),
(390, 'Huyện Cẩm Thủy', 'Huyện', 38),
(391, 'Huyện Thạch Thành', 'Huyện', 38),
(392, 'Huyện Hà Trung', 'Huyện', 38),
(393, 'Huyện Vĩnh Lộc', 'Huyện', 38),
(394, 'Huyện Yên Định', 'Huyện', 38),
(395, 'Huyện Thọ Xuân', 'Huyện', 38),
(396, 'Huyện Thường Xuân', 'Huyện', 38),
(397, 'Huyện Triệu Sơn', 'Huyện', 38),
(398, 'Huyện Thiệu Hóa', 'Huyện', 38),
(399, 'Huyện Hoằng Hóa', 'Huyện', 38),
(400, 'Huyện Hậu Lộc', 'Huyện', 38),
(401, 'Huyện Nga Sơn', 'Huyện', 38),
(402, 'Huyện Như Xuân', 'Huyện', 38),
(403, 'Huyện Như Thanh', 'Huyện', 38),
(404, 'Huyện Nông Cống', 'Huyện', 38),
(405, 'Huyện Đông Sơn', 'Huyện', 38),
(406, 'Huyện Quảng Xương', 'Huyện', 38),
(407, 'Huyện Tĩnh Gia', 'Huyện', 38),
(412, 'Thành phố Vinh', 'Thành phố', 40),
(413, 'Thị xã Cửa Lò', 'Thị xã', 40),
(414, 'Thị xã Thái Hoà', 'Thị xã', 40),
(415, 'Huyện Quế Phong', 'Huyện', 40),
(416, 'Huyện Quỳ Châu', 'Huyện', 40),
(417, 'Huyện Kỳ Sơn', 'Huyện', 40),
(418, 'Huyện Tương Dương', 'Huyện', 40),
(419, 'Huyện Nghĩa Đàn', 'Huyện', 40),
(420, 'Huyện Quỳ Hợp', 'Huyện', 40),
(421, 'Huyện Quỳnh Lưu', 'Huyện', 40),
(422, 'Huyện Con Cuông', 'Huyện', 40),
(423, 'Huyện Tân Kỳ', 'Huyện', 40),
(424, 'Huyện Anh Sơn', 'Huyện', 40),
(425, 'Huyện Diễn Châu', 'Huyện', 40),
(426, 'Huyện Yên Thành', 'Huyện', 40),
(427, 'Huyện Đô Lương', 'Huyện', 40),
(428, 'Huyện Thanh Chương', 'Huyện', 40),
(429, 'Huyện Nghi Lộc', 'Huyện', 40),
(430, 'Huyện Nam Đàn', 'Huyện', 40),
(431, 'Huyện Hưng Nguyên', 'Huyện', 40),
(432, 'Thị xã Hoàng Mai', 'Thị xã', 40),
(436, 'Thành phố Hà Tĩnh', 'Thành phố', 42),
(437, 'Thị xã Hồng Lĩnh', 'Thị xã', 42),
(439, 'Huyện Hương Sơn', 'Huyện', 42),
(440, 'Huyện Đức Thọ', 'Huyện', 42),
(441, 'Huyện Vũ Quang', 'Huyện', 42),
(442, 'Huyện Nghi Xuân', 'Huyện', 42),
(443, 'Huyện Can Lộc', 'Huyện', 42),
(444, 'Huyện Hương Khê', 'Huyện', 42),
(445, 'Huyện Thạch Hà', 'Huyện', 42),
(446, 'Huyện Cẩm Xuyên', 'Huyện', 42),
(447, 'Huyện Kỳ Anh', 'Huyện', 42),
(448, 'Huyện Lộc Hà', 'Huyện', 42),
(449, 'Thị xã Kỳ Anh', 'Thị xã', 42),
(450, 'Thành Phố Đồng Hới', 'Thành phố', 44),
(452, 'Huyện Minh Hóa', 'Huyện', 44),
(453, 'Huyện Tuyên Hóa', 'Huyện', 44),
(454, 'Huyện Quảng Trạch', 'Thị xã', 44),
(455, 'Huyện Bố Trạch', 'Huyện', 44),
(456, 'Huyện Quảng Ninh', 'Huyện', 44),
(457, 'Huyện Lệ Thủy', 'Huyện', 44),
(458, 'Thị xã Ba Đồn', 'Huyện', 44),
(461, 'Thành phố Đông Hà', 'Thành phố', 45),
(462, 'Thị xã Quảng Trị', 'Thị xã', 45),
(464, 'Huyện Vĩnh Linh', 'Huyện', 45),
(465, 'Huyện Hướng Hóa', 'Huyện', 45),
(466, 'Huyện Gio Linh', 'Huyện', 45),
(467, 'Huyện Đa Krông', 'Huyện', 45),
(468, 'Huyện Cam Lộ', 'Huyện', 45),
(469, 'Huyện Triệu Phong', 'Huyện', 45),
(470, 'Huyện Hải Lăng', 'Huyện', 45),
(471, 'Huyện Cồn Cỏ', 'Huyện', 45),
(474, 'Thành phố Huế', 'Thành phố', 46),
(476, 'Huyện Phong Điền', 'Huyện', 46),
(477, 'Huyện Quảng Điền', 'Huyện', 46),
(478, 'Huyện Phú Vang', 'Huyện', 46),
(479, 'Thị xã Hương Thủy', 'Thị xã', 46),
(480, 'Thị xã Hương Trà', 'Thị xã', 46),
(481, 'Huyện A Lưới', 'Huyện', 46),
(482, 'Huyện Phú Lộc', 'Huyện', 46),
(483, 'Huyện Nam Đông', 'Huyện', 46),
(490, 'Quận Liên Chiểu', 'Quận', 48),
(491, 'Quận Thanh Khê', 'Quận', 48),
(492, 'Quận Hải Châu', 'Quận', 48),
(493, 'Quận Sơn Trà', 'Quận', 48),
(494, 'Quận Ngũ Hành Sơn', 'Quận', 48),
(495, 'Quận Cẩm Lệ', 'Quận', 48),
(497, 'Huyện Hòa Vang', 'Huyện', 48),
(498, 'Huyện Hoàng Sa', 'Huyện', 48),
(502, 'Thành phố Tam Kỳ', 'Thành phố', 49),
(503, 'Thành phố Hội An', 'Thành phố', 49),
(504, 'Huyện Tây Giang', 'Huyện', 49),
(505, 'Huyện Đông Giang', 'Huyện', 49),
(506, 'Huyện Đại Lộc', 'Huyện', 49),
(507, 'Thị xã Điện Bàn', 'Thị xã', 49),
(508, 'Huyện Duy Xuyên', 'Huyện', 49),
(509, 'Huyện Quế Sơn', 'Huyện', 49),
(510, 'Huyện Nam Giang', 'Huyện', 49),
(511, 'Huyện Phước Sơn', 'Huyện', 49),
(512, 'Huyện Hiệp Đức', 'Huyện', 49),
(513, 'Huyện Thăng Bình', 'Huyện', 49),
(514, 'Huyện Tiên Phước', 'Huyện', 49),
(515, 'Huyện Bắc Trà My', 'Huyện', 49),
(516, 'Huyện Nam Trà My', 'Huyện', 49),
(517, 'Huyện Núi Thành', 'Huyện', 49),
(518, 'Huyện Phú Ninh', 'Huyện', 49),
(519, 'Huyện Nông Sơn', 'Huyện', 49),
(522, 'Thành phố Quảng Ngãi', 'Thành phố', 51),
(524, 'Huyện Bình Sơn', 'Huyện', 51),
(525, 'Huyện Trà Bồng', 'Huyện', 51),
(526, 'Huyện Tây Trà', 'Huyện', 51),
(527, 'Huyện Sơn Tịnh', 'Huyện', 51),
(528, 'Huyện Tư Nghĩa', 'Huyện', 51),
(529, 'Huyện Sơn Hà', 'Huyện', 51),
(530, 'Huyện Sơn Tây', 'Huyện', 51),
(531, 'Huyện Minh Long', 'Huyện', 51),
(532, 'Huyện Nghĩa Hành', 'Huyện', 51),
(533, 'Huyện Mộ Đức', 'Huyện', 51),
(534, 'Huyện Đức Phổ', 'Huyện', 51),
(535, 'Huyện Ba Tơ', 'Huyện', 51),
(536, 'Huyện Lý Sơn', 'Huyện', 51),
(540, 'Thành phố Qui Nhơn', 'Thành phố', 52),
(542, 'Huyện An Lão', 'Huyện', 52),
(543, 'Huyện Hoài Nhơn', 'Huyện', 52),
(544, 'Huyện Hoài Ân', 'Huyện', 52),
(545, 'Huyện Phù Mỹ', 'Huyện', 52),
(546, 'Huyện Vĩnh Thạnh', 'Huyện', 52),
(547, 'Huyện Tây Sơn', 'Huyện', 52),
(548, 'Huyện Phù Cát', 'Huyện', 52),
(549, 'Thị xã An Nhơn', 'Thị xã', 52),
(550, 'Huyện Tuy Phước', 'Huyện', 52),
(551, 'Huyện Vân Canh', 'Huyện', 52),
(555, 'Thành phố Tuy Hoà', 'Thành phố', 54),
(557, 'Thị xã Sông Cầu', 'Thị xã', 54),
(558, 'Huyện Đồng Xuân', 'Huyện', 54),
(559, 'Huyện Tuy An', 'Huyện', 54),
(560, 'Huyện Sơn Hòa', 'Huyện', 54),
(561, 'Huyện Sông Hinh', 'Huyện', 54),
(562, 'Huyện Tây Hoà', 'Huyện', 54),
(563, 'Huyện Phú Hoà', 'Huyện', 54),
(564, 'Huyện Đông Hòa', 'Huyện', 54),
(568, 'Thành phố Nha Trang', 'Thành phố', 56),
(569, 'Thành phố Cam Ranh', 'Thành phố', 56),
(570, 'Huyện Cam Lâm', 'Huyện', 56),
(571, 'Huyện Vạn Ninh', 'Huyện', 56),
(572, 'Thị xã Ninh Hòa', 'Thị xã', 56),
(573, 'Huyện Khánh Vĩnh', 'Huyện', 56),
(574, 'Huyện Diên Khánh', 'Huyện', 56),
(575, 'Huyện Khánh Sơn', 'Huyện', 56),
(576, 'Huyện Trường Sa', 'Huyện', 56),
(582, 'Thành phố Phan Rang-Tháp Chàm', 'Thành phố', 58),
(584, 'Huyện Bác Ái', 'Huyện', 58),
(585, 'Huyện Ninh Sơn', 'Huyện', 58),
(586, 'Huyện Ninh Hải', 'Huyện', 58),
(587, 'Huyện Ninh Phước', 'Huyện', 58),
(588, 'Huyện Thuận Bắc', 'Huyện', 58),
(589, 'Huyện Thuận Nam', 'Huyện', 58),
(593, 'Thành phố Phan Thiết', 'Thành phố', 60),
(594, 'Thị xã La Gi', 'Thị xã', 60),
(595, 'Huyện Tuy Phong', 'Huyện', 60),
(596, 'Huyện Bắc Bình', 'Huyện', 60),
(597, 'Huyện Hàm Thuận Bắc', 'Huyện', 60),
(598, 'Huyện Hàm Thuận Nam', 'Huyện', 60),
(599, 'Huyện Tánh Linh', 'Huyện', 60),
(600, 'Huyện Đức Linh', 'Huyện', 60),
(601, 'Huyện Hàm Tân', 'Huyện', 60),
(602, 'Huyện Phú Quí', 'Huyện', 60),
(608, 'Thành phố Kon Tum', 'Thành phố', 62),
(610, 'Huyện Đắk Glei', 'Huyện', 62),
(611, 'Huyện Ngọc Hồi', 'Huyện', 62),
(612, 'Huyện Đắk Tô', 'Huyện', 62),
(613, 'Huyện Kon Plông', 'Huyện', 62),
(614, 'Huyện Kon Rẫy', 'Huyện', 62),
(615, 'Huyện Đắk Hà', 'Huyện', 62),
(616, 'Huyện Sa Thầy', 'Huyện', 62),
(617, 'Huyện Tu Mơ Rông', 'Huyện', 62),
(618, 'Huyện Ia H\' Drai', 'Huyện', 62),
(622, 'Thành phố Pleiku', 'Thành phố', 64),
(623, 'Thị xã An Khê', 'Thị xã', 64),
(624, 'Thị xã Ayun Pa', 'Thị xã', 64),
(625, 'Huyện KBang', 'Huyện', 64),
(626, 'Huyện Đăk Đoa', 'Huyện', 64),
(627, 'Huyện Chư Păh', 'Huyện', 64),
(628, 'Huyện Ia Grai', 'Huyện', 64),
(629, 'Huyện Mang Yang', 'Huyện', 64),
(630, 'Huyện Kông Chro', 'Huyện', 64),
(631, 'Huyện Đức Cơ', 'Huyện', 64),
(632, 'Huyện Chư Prông', 'Huyện', 64),
(633, 'Huyện Chư Sê', 'Huyện', 64),
(634, 'Huyện Đăk Pơ', 'Huyện', 64),
(635, 'Huyện Ia Pa', 'Huyện', 64),
(637, 'Huyện Krông Pa', 'Huyện', 64),
(638, 'Huyện Phú Thiện', 'Huyện', 64),
(639, 'Huyện Chư Pưh', 'Huyện', 64),
(643, 'Thành phố Buôn Ma Thuột', 'Thành phố', 66),
(644, 'Thị Xã Buôn Hồ', 'Thị xã', 66),
(645, 'Huyện Ea H\'leo', 'Huyện', 66),
(646, 'Huyện Ea Súp', 'Huyện', 66),
(647, 'Huyện Buôn Đôn', 'Huyện', 66),
(648, 'Huyện Cư M\'gar', 'Huyện', 66),
(649, 'Huyện Krông Búk', 'Huyện', 66),
(650, 'Huyện Krông Năng', 'Huyện', 66),
(651, 'Huyện Ea Kar', 'Huyện', 66),
(652, 'Huyện M\'Đrắk', 'Huyện', 66),
(653, 'Huyện Krông Bông', 'Huyện', 66),
(654, 'Huyện Krông Pắc', 'Huyện', 66),
(655, 'Huyện Krông A Na', 'Huyện', 66),
(656, 'Huyện Lắk', 'Huyện', 66),
(657, 'Huyện Cư Kuin', 'Huyện', 66),
(660, 'Thị xã Gia Nghĩa', 'Thị xã', 67),
(661, 'Huyện Đăk Glong', 'Huyện', 67),
(662, 'Huyện Cư Jút', 'Huyện', 67),
(663, 'Huyện Đắk Mil', 'Huyện', 67),
(664, 'Huyện Krông Nô', 'Huyện', 67),
(665, 'Huyện Đắk Song', 'Huyện', 67),
(666, 'Huyện Đắk R\'Lấp', 'Huyện', 67),
(667, 'Huyện Tuy Đức', 'Huyện', 67),
(672, 'Thành phố Đà Lạt', 'Thành phố', 68),
(673, 'Thành phố Bảo Lộc', 'Thành phố', 68),
(674, 'Huyện Đam Rông', 'Huyện', 68),
(675, 'Huyện Lạc Dương', 'Huyện', 68),
(676, 'Huyện Lâm Hà', 'Huyện', 68),
(677, 'Huyện Đơn Dương', 'Huyện', 68),
(678, 'Huyện Đức Trọng', 'Huyện', 68),
(679, 'Huyện Di Linh', 'Huyện', 68),
(680, 'Huyện Bảo Lâm', 'Huyện', 68),
(681, 'Huyện Đạ Huoai', 'Huyện', 68),
(682, 'Huyện Đạ Tẻh', 'Huyện', 68),
(683, 'Huyện Cát Tiên', 'Huyện', 68),
(688, 'Thị xã Phước Long', 'Thị xã', 70),
(689, 'Thị xã Đồng Xoài', 'Thị xã', 70),
(690, 'Thị xã Bình Long', 'Thị xã', 70),
(691, 'Huyện Bù Gia Mập', 'Huyện', 70),
(692, 'Huyện Lộc Ninh', 'Huyện', 70),
(693, 'Huyện Bù Đốp', 'Huyện', 70),
(694, 'Huyện Hớn Quản', 'Huyện', 70),
(695, 'Huyện Đồng Phú', 'Huyện', 70),
(696, 'Huyện Bù Đăng', 'Huyện', 70),
(697, 'Huyện Chơn Thành', 'Huyện', 70),
(698, 'Huyện Phú Riềng', 'Huyện', 70),
(703, 'Thành phố Tây Ninh', 'Thành phố', 72),
(705, 'Huyện Tân Biên', 'Huyện', 72),
(706, 'Huyện Tân Châu', 'Huyện', 72),
(707, 'Huyện Dương Minh Châu', 'Huyện', 72),
(708, 'Huyện Châu Thành', 'Huyện', 72),
(709, 'Huyện Hòa Thành', 'Huyện', 72),
(710, 'Huyện Gò Dầu', 'Huyện', 72),
(711, 'Huyện Bến Cầu', 'Huyện', 72),
(712, 'Huyện Trảng Bàng', 'Huyện', 72),
(718, 'Thành phố Thủ Dầu Một', 'Thành phố', 74),
(719, 'Huyện Bàu Bàng', 'Huyện', 74),
(720, 'Huyện Dầu Tiếng', 'Huyện', 74),
(721, 'Thị xã Bến Cát', 'Thị xã', 74),
(722, 'Huyện Phú Giáo', 'Huyện', 74),
(723, 'Thị xã Tân Uyên', 'Thị xã', 74),
(724, 'Thị xã Dĩ An', 'Thị xã', 74),
(725, 'Thị xã Thuận An', 'Thị xã', 74),
(726, 'Huyện Bắc Tân Uyên', 'Huyện', 74),
(731, 'Thành phố Biên Hòa', 'Thành phố', 75),
(732, 'Thị xã Long Khánh', 'Thị xã', 75),
(734, 'Huyện Tân Phú', 'Huyện', 75),
(735, 'Huyện Vĩnh Cửu', 'Huyện', 75),
(736, 'Huyện Định Quán', 'Huyện', 75),
(737, 'Huyện Trảng Bom', 'Huyện', 75),
(738, 'Huyện Thống Nhất', 'Huyện', 75),
(739, 'Huyện Cẩm Mỹ', 'Huyện', 75),
(740, 'Huyện Long Thành', 'Huyện', 75),
(741, 'Huyện Xuân Lộc', 'Huyện', 75),
(742, 'Huyện Nhơn Trạch', 'Huyện', 75),
(747, 'Thành phố Vũng Tàu', 'Thành phố', 77),
(748, 'Thành phố Bà Rịa', 'Thành phố', 77),
(750, 'Huyện Châu Đức', 'Huyện', 77),
(751, 'Huyện Xuyên Mộc', 'Huyện', 77),
(752, 'Huyện Long Điền', 'Huyện', 77),
(753, 'Huyện Đất Đỏ', 'Huyện', 77),
(754, 'Huyện Tân Thành', 'Huyện', 77),
(755, 'Huyện Côn Đảo', 'Huyện', 77),
(760, 'Quận 1', 'Quận', 79),
(761, 'Quận 12', 'Quận', 79),
(762, 'Quận Thủ Đức', 'Quận', 79),
(763, 'Quận 9', 'Quận', 79),
(764, 'Quận Gò Vấp', 'Quận', 79),
(765, 'Quận Bình Thạnh', 'Quận', 79),
(766, 'Quận Tân Bình', 'Quận', 79),
(767, 'Quận Tân Phú', 'Quận', 79),
(768, 'Quận Phú Nhuận', 'Quận', 79),
(769, 'Quận 2', 'Quận', 79),
(770, 'Quận 3', 'Quận', 79),
(771, 'Quận 10', 'Quận', 79),
(772, 'Quận 11', 'Quận', 79),
(773, 'Quận 4', 'Quận', 79),
(774, 'Quận 5', 'Quận', 79),
(775, 'Quận 6', 'Quận', 79),
(776, 'Quận 8', 'Quận', 79),
(777, 'Quận Bình Tân', 'Quận', 79),
(778, 'Quận 7', 'Quận', 79),
(783, 'Huyện Củ Chi', 'Huyện', 79),
(784, 'Huyện Hóc Môn', 'Huyện', 79),
(785, 'Huyện Bình Chánh', 'Huyện', 79),
(786, 'Huyện Nhà Bè', 'Huyện', 79),
(787, 'Huyện Cần Giờ', 'Huyện', 79),
(794, 'Thành phố Tân An', 'Thành phố', 80),
(795, 'Thị xã Kiến Tường', 'Thị xã', 80),
(796, 'Huyện Tân Hưng', 'Huyện', 80),
(797, 'Huyện Vĩnh Hưng', 'Huyện', 80),
(798, 'Huyện Mộc Hóa', 'Huyện', 80),
(799, 'Huyện Tân Thạnh', 'Huyện', 80),
(800, 'Huyện Thạnh Hóa', 'Huyện', 80),
(801, 'Huyện Đức Huệ', 'Huyện', 80),
(802, 'Huyện Đức Hòa', 'Huyện', 80),
(803, 'Huyện Bến Lức', 'Huyện', 80),
(804, 'Huyện Thủ Thừa', 'Huyện', 80),
(805, 'Huyện Tân Trụ', 'Huyện', 80),
(806, 'Huyện Cần Đước', 'Huyện', 80),
(807, 'Huyện Cần Giuộc', 'Huyện', 80),
(808, 'Huyện Châu Thành', 'Huyện', 80),
(815, 'Thành phố Mỹ Tho', 'Thành phố', 82),
(816, 'Thị xã Gò Công', 'Thị xã', 82),
(817, 'Thị xã Cai Lậy', 'Huyện', 82),
(818, 'Huyện Tân Phước', 'Huyện', 82),
(819, 'Huyện Cái Bè', 'Huyện', 82),
(820, 'Huyện Cai Lậy', 'Thị xã', 82),
(821, 'Huyện Châu Thành', 'Huyện', 82),
(822, 'Huyện Chợ Gạo', 'Huyện', 82),
(823, 'Huyện Gò Công Tây', 'Huyện', 82),
(824, 'Huyện Gò Công Đông', 'Huyện', 82),
(825, 'Huyện Tân Phú Đông', 'Huyện', 82),
(829, 'Thành phố Bến Tre', 'Thành phố', 83),
(831, 'Huyện Châu Thành', 'Huyện', 83),
(832, 'Huyện Chợ Lách', 'Huyện', 83),
(833, 'Huyện Mỏ Cày Nam', 'Huyện', 83),
(834, 'Huyện Giồng Trôm', 'Huyện', 83),
(835, 'Huyện Bình Đại', 'Huyện', 83),
(836, 'Huyện Ba Tri', 'Huyện', 83),
(837, 'Huyện Thạnh Phú', 'Huyện', 83),
(838, 'Huyện Mỏ Cày Bắc', 'Huyện', 83),
(842, 'Thành phố Trà Vinh', 'Thành phố', 84),
(844, 'Huyện Càng Long', 'Huyện', 84),
(845, 'Huyện Cầu Kè', 'Huyện', 84),
(846, 'Huyện Tiểu Cần', 'Huyện', 84),
(847, 'Huyện Châu Thành', 'Huyện', 84),
(848, 'Huyện Cầu Ngang', 'Huyện', 84),
(849, 'Huyện Trà Cú', 'Huyện', 84),
(850, 'Huyện Duyên Hải', 'Huyện', 84),
(851, 'Thị xã Duyên Hải', 'Thị xã', 84),
(855, 'Thành phố Vĩnh Long', 'Thành phố', 86),
(857, 'Huyện Long Hồ', 'Huyện', 86),
(858, 'Huyện Mang Thít', 'Huyện', 86),
(859, 'Huyện  Vũng Liêm', 'Huyện', 86),
(860, 'Huyện Tam Bình', 'Huyện', 86),
(861, 'Thị xã Bình Minh', 'Thị xã', 86),
(862, 'Huyện Trà Ôn', 'Huyện', 86),
(863, 'Huyện Bình Tân', 'Huyện', 86),
(866, 'Thành phố Cao Lãnh', 'Thành phố', 87),
(867, 'Thành phố Sa Đéc', 'Thành phố', 87),
(868, 'Thị xã Hồng Ngự', 'Thị xã', 87),
(869, 'Huyện Tân Hồng', 'Huyện', 87),
(870, 'Huyện Hồng Ngự', 'Huyện', 87),
(871, 'Huyện Tam Nông', 'Huyện', 87),
(872, 'Huyện Tháp Mười', 'Huyện', 87),
(873, 'Huyện Cao Lãnh', 'Huyện', 87),
(874, 'Huyện Thanh Bình', 'Huyện', 87),
(875, 'Huyện Lấp Vò', 'Huyện', 87),
(876, 'Huyện Lai Vung', 'Huyện', 87),
(877, 'Huyện Châu Thành', 'Huyện', 87),
(883, 'Thành phố Long Xuyên', 'Thành phố', 89),
(884, 'Thành phố Châu Đốc', 'Thành phố', 89),
(886, 'Huyện An Phú', 'Huyện', 89),
(887, 'Thị xã Tân Châu', 'Thị xã', 89),
(888, 'Huyện Phú Tân', 'Huyện', 89),
(889, 'Huyện Châu Phú', 'Huyện', 89),
(890, 'Huyện Tịnh Biên', 'Huyện', 89),
(891, 'Huyện Tri Tôn', 'Huyện', 89),
(892, 'Huyện Châu Thành', 'Huyện', 89),
(893, 'Huyện Chợ Mới', 'Huyện', 89),
(894, 'Huyện Thoại Sơn', 'Huyện', 89),
(899, 'Thành phố Rạch Giá', 'Thành phố', 91),
(900, 'Thị xã Hà Tiên', 'Thị xã', 91),
(902, 'Huyện Kiên Lương', 'Huyện', 91),
(903, 'Huyện Hòn Đất', 'Huyện', 91),
(904, 'Huyện Tân Hiệp', 'Huyện', 91),
(905, 'Huyện Châu Thành', 'Huyện', 91),
(906, 'Huyện Giồng Riềng', 'Huyện', 91),
(907, 'Huyện Gò Quao', 'Huyện', 91),
(908, 'Huyện An Biên', 'Huyện', 91),
(909, 'Huyện An Minh', 'Huyện', 91),
(910, 'Huyện Vĩnh Thuận', 'Huyện', 91),
(911, 'Huyện Phú Quốc', 'Huyện', 91),
(912, 'Huyện Kiên Hải', 'Huyện', 91),
(913, 'Huyện U Minh Thượng', 'Huyện', 91),
(914, 'Huyện Giang Thành', 'Huyện', 91),
(916, 'Quận Ninh Kiều', 'Quận', 92),
(917, 'Quận Ô Môn', 'Quận', 92),
(918, 'Quận Bình Thuỷ', 'Quận', 92),
(919, 'Quận Cái Răng', 'Quận', 92),
(923, 'Quận Thốt Nốt', 'Quận', 92),
(924, 'Huyện Vĩnh Thạnh', 'Huyện', 92),
(925, 'Huyện Cờ Đỏ', 'Huyện', 92),
(926, 'Huyện Phong Điền', 'Huyện', 92),
(927, 'Huyện Thới Lai', 'Huyện', 92),
(930, 'Thành phố Vị Thanh', 'Thành phố', 93),
(931, 'Thị xã Ngã Bảy', 'Thị xã', 93),
(932, 'Huyện Châu Thành A', 'Huyện', 93),
(933, 'Huyện Châu Thành', 'Huyện', 93),
(934, 'Huyện Phụng Hiệp', 'Huyện', 93),
(935, 'Huyện Vị Thuỷ', 'Huyện', 93),
(936, 'Huyện Long Mỹ', 'Huyện', 93),
(937, 'Thị xã Long Mỹ', 'Thị xã', 93),
(941, 'Thành phố Sóc Trăng', 'Thành phố', 94),
(942, 'Huyện Châu Thành', 'Huyện', 94),
(943, 'Huyện Kế Sách', 'Huyện', 94),
(944, 'Huyện Mỹ Tú', 'Huyện', 94),
(945, 'Huyện Cù Lao Dung', 'Huyện', 94),
(946, 'Huyện Long Phú', 'Huyện', 94),
(947, 'Huyện Mỹ Xuyên', 'Huyện', 94),
(948, 'Thị xã Ngã Năm', 'Thị xã', 94),
(949, 'Huyện Thạnh Trị', 'Huyện', 94),
(950, 'Thị xã Vĩnh Châu', 'Thị xã', 94),
(951, 'Huyện Trần Đề', 'Huyện', 94),
(954, 'Thành phố Bạc Liêu', 'Thành phố', 95),
(956, 'Huyện Hồng Dân', 'Huyện', 95),
(957, 'Huyện Phước Long', 'Huyện', 95),
(958, 'Huyện Vĩnh Lợi', 'Huyện', 95),
(959, 'Thị xã Giá Rai', 'Thị xã', 95),
(960, 'Huyện Đông Hải', 'Huyện', 95),
(961, 'Huyện Hoà Bình', 'Huyện', 95),
(964, 'Thành phố Cà Mau', 'Thành phố', 96),
(966, 'Huyện U Minh', 'Huyện', 96),
(967, 'Huyện Thới Bình', 'Huyện', 96),
(968, 'Huyện Trần Văn Thời', 'Huyện', 96),
(969, 'Huyện Cái Nước', 'Huyện', 96),
(970, 'Huyện Đầm Dơi', 'Huyện', 96),
(971, 'Huyện Năm Căn', 'Huyện', 96),
(972, 'Huyện Phú Tân', 'Huyện', 96),
(973, 'Huyện Ngọc Hiển', 'Huyện', 96);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quan_tri_vien`
--

DROP TABLE IF EXISTS `quan_tri_vien`;
CREATE TABLE IF NOT EXISTS `quan_tri_vien` (
  `qtMa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `qtEmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtMatKhau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtSoDienThoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`qtMa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quan_tri_vien`
--

INSERT INTO `quan_tri_vien` (`qtMa`, `qtEmail`, `qtTen`, `qtMatKhau`, `qtSoDienThoai`, `created_at`, `updated_at`) VALUES
(1, 'phuocthanh2409@gmail.com', 'Đinh Huỳnh Phước Thành', 'bd53a6abddb1dcc064675ecf5a01b514', '0399777151', '2021-12-04 13:18:31', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `spMa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `loaiMa` int(10) UNSIGNED NOT NULL,
  `thMa` int(10) UNSIGNED NOT NULL,
  `muaMa` int(10) UNSIGNED NOT NULL,
  `dtMa` int(10) UNSIGNED NOT NULL,
  `spTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spGia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spGiaGoc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spMoTa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `spSoLuong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spSoLuongDaBan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spHinhAnh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spTrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`spMa`),
  KEY `sanpham_loaima_foreign` (`loaiMa`),
  KEY `sanpham_muama_foreign` (`muaMa`),
  KEY `sanpham_thma_foreign` (`thMa`),
  KEY `dtMa` (`dtMa`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`spMa`, `loaiMa`, `thMa`, `muaMa`, `dtMa`, `spTen`, `spGia`, `spGiaGoc`, `spMoTa`, `spSoLuong`, `spSoLuongDaBan`, `spHinhAnh`, `spTrangThai`, `created_at`, `updated_at`) VALUES
(34, 1, 4, 1, 5, 'Nước hoa Chanel Bleu de Chanel Eau de Parfum 100ml', '3590000', '3000000', '<h2 style=\"text-align:center\">Nước Hoa Chanel Bleu de Chanel Eau de Parfum</h2>\r\n\r\n<h3 style=\"text-align:center\">Nước hoa Chanel Bleu de Chanel</h3>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa&nbsp;Chanel Bleu de Chanel Eau de Parfum&nbsp;</strong>l&agrave; d&ograve;ng nước hoa c&oacute; m&ugrave;i thơm nồng n&agrave;n d&agrave;nh cho ph&aacute;i mạnh. Mang lại cho c&aacute;nh m&agrave;y r&acirc;u một vẻ đẹp sang trọng, lịch l&atilde;m v&agrave; đầy l&ocirc;i cuốn. M&ugrave;i hương được hầu hết tất cả những người đ&atilde; sử dụng đ&aacute;nh gi&aacute; l&agrave; tuyệt hảo từ độ lưu hương v&agrave; tỏa hương. Ri&ecirc;ng d&ograve;ng nước hoa Chanel Bleu de c&ograve;n ph&ugrave; hợp với những người phụ nữ mạnh mẽ, y&ecirc;u th&iacute;ch sự mạo hiểm, khao kh&aacute;t chinh phục thi&ecirc;n nhi&ecirc;n.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Bleu-De-Chanel-Eau-De-Parfum-800x600\" height=\"450\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Bleu-De-Chanel-Eau-De-Parfum-800x600.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Bleu-De-Chanel-Eau-De-Parfum-800x600.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Bleu-De-Chanel-Eau-De-Parfum-800x600-300x225.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Nước hoa Chanel Bleu de Chanel &ndash; d&ograve;ng nước hoa nam nhất định phải c&oacute;</strong></em></p>\r\n\r\n<p style=\"text-align:center\"><strong>Thương hiệu</strong>: Chanel.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Xuất xứ</strong>: Ph&aacute;p</p>\r\n\r\n<p style=\"text-align:center\"><strong>Năm ra mắt</strong>: 2014.</p>\r\n\r\n<p style=\"text-align:center\"><strong>T&ecirc;n người s&aacute;ng lập</strong>: Jacques Polge.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&oacute;m hương</strong>: Gỗ thơm.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Phong c&aacute;ch</strong>: Mạnh mẽ, l&ocirc;i cuốn.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Giới t&iacute;nh</strong>: Nam, tr&ecirc;n 25 tuổi.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Thời gian lưu hương</strong>: &nbsp;L&acirc;u ,tr&ecirc;n 12 giờ.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ tỏa hương</strong>: Gần, tỏa hương trong v&ograve;ng một c&aacute;nh tay.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương đầu</strong>: Hương Labdanum, Nhục đậu khấu, Gừng.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương giữa:</strong>&nbsp;Gỗ đ&agrave;n hương, hoắc hương, Hương gỗ, bạc h&agrave;.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương cuối:</strong>&nbsp;Hoa nh&agrave;i, Quả chanh v&agrave;ng, bưởi, tuyết t&ugrave;ng, Hồng ti&ecirc;u, Hổ ph&aacute;ch.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Dung t&iacute;ch</strong>: 50ml &ndash; 100ml &ndash; 150ml</p>\r\n\r\n<p style=\"text-align:center\"><strong>Thời điểm sử dụng tốt nhất</strong>: Xu&acirc;n, Thu, Đ&ocirc;ng, H&egrave;, Ng&agrave;y, Đ&ecirc;m.</p>\r\n\r\n<h2 style=\"text-align:center\">Thương hiệu Chanel &ndash; t&ecirc;n tuổi bậc nhất về nước hoa</h2>\r\n\r\n<p style=\"text-align:center\">Chanel &ndash; thương hiệu thời trang h&agrave;ng đầu thế giới chẳng những chiếm trọn tr&aacute;i tim ph&aacute;i đẹp m&agrave; c&ograve;n sở hữu những sản phẩm l&agrave; &ldquo;bảo bối&rdquo; của ph&aacute;i mạnh. B&agrave; chủ của đế chế Chanel xa xỉ n&agrave;y l&agrave; nh&agrave; thiết kế huyền thoại Coco Chanel (Gabrielle Bonheur Chanel) &ndash; &ldquo;nữ vương&rdquo; thời trang của thế giới.&nbsp;Bằng h&agrave;ng loạt BST nước hoa khổng lồ, vĩ đại, mang đến nhiều nguồn x&uacute;c cảm khơi gợi,&nbsp;<strong>nước hoa nam</strong>&nbsp;Chanel l&agrave; biểu tượng cho đấng m&agrave;y r&acirc;u hiện đại.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"chanel-bleu-de-EDP-jacob-sutton\" height=\"388\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/chanel-bleu-de-EDP-jacob-sutton.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/chanel-bleu-de-EDP-jacob-sutton.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/chanel-bleu-de-EDP-jacob-sutton-300x194.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Nước hoa Chanel Bleu de Chanel Eau de Parfum với người mẫu đại diện Gaspard Ulliel điển trai</strong></em></p>\r\n\r\n<p style=\"text-align:center\">Nếu muốn l&ocirc;i k&eacute;o sự ch&uacute; &yacute; của một c&ocirc; g&aacute;i m&agrave; bạn đang để mắt đến, đừng chần chừ m&agrave; đầu tư vẻ ngo&agrave;i lịch l&atilde;m, nam t&iacute;nh c&ugrave;ng m&ugrave;i hương quyến rũ, gợi cảm kh&oacute; phai với&nbsp;<strong>nước hoa Chanel nam</strong>.</p>\r\n\r\n<p style=\"text-align:center\">Được coi như loại&nbsp;nước hoa&nbsp;&ldquo;ma thuật&rdquo; cho bầu kh&ocirc;ng kh&iacute; l&atilde;ng mạn, t&ocirc;n l&ecirc;n đẳng cấp, sự mạnh mẽ đặc trưng của ph&aacute;i mạnh,&nbsp;<strong>nước hoa Chanel Bleu de Chanel Eau de Parfum&nbsp;</strong>sẽ gi&uacute;p bạn tạo dấu ấn kh&oacute; qu&ecirc;n trong l&ograve;ng n&agrave;ng.</p>\r\n\r\n<h2 style=\"text-align:center\"><strong>Đặc điểm của nước hoa Chanel Bleu de Chanel Eau de Parfum</strong></h2>\r\n\r\n<h3 style=\"text-align:center\"><strong>M&ugrave;i hương nước hoa Chanel Bleu De Chanel biểu tượng cho sự lịch l&atilde;m, nam t&iacute;nh ph&aacute;i mạnh</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa</strong>&nbsp;<strong>Chanel Bleu de Chanel EDP</strong>&nbsp;l&agrave; phi&ecirc;n bản n&acirc;ng cấp của năm 2010. Nh&igrave;n chung kh&ocirc;ng c&oacute; sự thay đổi nhiều lắm so với phi&ecirc;n bản năm 2010. Vẫn l&agrave; m&ugrave;i hương gỗ thơm đặc trưng mang đến cảm gi&aacute;c nồng n&agrave;n, nam t&iacute;nh t&ocirc;n l&ecirc;n vẻ lịch l&atilde;m, l&ocirc;i cuốn. Với độ lưu hương l&acirc;u, ho&agrave;n to&agrave;n th&iacute;ch hợp cho những hoạt động ngoại kh&oacute;a của bạn.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"nuoc-hoa-chanel-bleu-de-chanel-eau-de-parfum\" height=\"475\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-chanel-bleu-de-chanel-eau-de-parfum.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-chanel-bleu-de-chanel-eau-de-parfum.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-chanel-bleu-de-chanel-eau-de-parfum-300x238.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Chanel Bleu de Chanel Eau de Parfum lưu giữ những nốt hương tinh t&uacute;y</strong></em></p>\r\n\r\n<p style=\"text-align:center\">Khi sử dụng, bạn sẽ cảm nhận ở&nbsp;<strong>nước hoa Chanel&nbsp;</strong><strong>Bleu de Chanel Eau de Parfum</strong>&nbsp;lớp hương đầu v&agrave; lớp hương giữa h&ograve;a quyện lại với nhau, đan xen nhau tạo n&ecirc;n một bức tranh đầy m&agrave;u sắc v&agrave; sự hứng khởi. Vị bạc h&agrave; dẫn lối cho hương bưởi sau đ&oacute; l&agrave; h&ograve;a trộn với tinh dầu bạc h&agrave; để l&agrave;m n&ecirc;n một khởi đầu đầy đam m&ecirc; khi c&oacute; sự h&ograve;a hợp của hương cam v&agrave; hương bưởi. C&oacute; thể n&oacute;i Polge l&agrave; thầy ph&ugrave; thủy trong việc pha chế c&aacute;c hương liệu lại với nhau. &Ocirc;ng đ&atilde; s&aacute;ng tạo ra một m&ugrave;i hương mang đến sự m&aacute;t lạnh, sảng kho&aacute;i nhưng lại cho người d&ugrave;ng cảm gi&aacute;c ấm &aacute;p, dễ chịu, sảng kho&aacute;i.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"bleu-de-chanel-eau-de-parfum-1\" height=\"459\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/bleu-de-chanel-eau-de-parfum-1.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/bleu-de-chanel-eau-de-parfum-1.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/bleu-de-chanel-eau-de-parfum-1-300x230.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Nước hoa Chanel Bleu de Chanel d&ograve;ng EDP lưu hương d&agrave;i l&acirc;u</strong></em></p>\r\n\r\n<h3 style=\"text-align:center\"><strong>Thu h&uacute;t &aacute;nh nh&igrave;n đối phương trong mọi t&igrave;nh huống &ndash; nước hoa Chanel Bleu De Chanel</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel Bleu de Chanel EDP</strong>&nbsp;l&agrave; d&ograve;ng nước hoa ph&ugrave; hợp với tất cả c&aacute;c m&ugrave;a trong năm, cả ng&agrave;y v&agrave; đ&ecirc;m. Bạn c&oacute; thể thường xuy&ecirc;n sử dụng để tạo n&ecirc;n m&ugrave;i hương ri&ecirc;ng biệt cho ch&iacute;nh m&igrave;nh. Với phi&ecirc;n bản mới n&agrave;y th&igrave; độ lưu hương được tăng cường th&ecirc;m rất nhiều. Bạn cần trải nghiệm th&igrave; mới cảm nhận r&otilde; rệt sự chuyển đổi giữa c&aacute;c lớp hương diễn ra một c&aacute;ch thần kỳ như thế n&agrave;o. Hương&nbsp;<strong>nước hoa Chanel</strong>&nbsp;to&aacute;t l&ecirc;n một vẻ nam t&iacute;nh, đầy quyến rũ , hương thơm c&agrave;ng k&eacute;o d&agrave;i l&acirc;u c&agrave;ng trở n&ecirc;n dễ chịu.</p>\r\n\r\n<h3 style=\"text-align:center\">Thiết kế của nước hoa Bleu De Chanel đẳng cấp, sang trọng</h3>\r\n\r\n<p style=\"text-align:center\"><img alt=\"chanel-bleu-de-chanel-eau-de-parfum-3\" height=\"371\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/chanel-bleu-de-chanel-eau-de-parfum-3.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/chanel-bleu-de-chanel-eau-de-parfum-3.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/chanel-bleu-de-chanel-eau-de-parfum-3-300x186.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Thiết kế của nước hoa Chanel Bleu de Chanel EDP</strong></em></p>\r\n\r\n<p style=\"text-align:center\">Ở phi&ecirc;n bản mới n&agrave;y,&nbsp;<strong>nước hoa Chanel&nbsp;</strong><strong>Bleu de Chanel Eau de Parfum</strong>&nbsp;thiết kế m&agrave;u xanh x&aacute;m lịch l&atilde;m, c&ugrave;ng với c&aacute;c đường viền tinh xảo thể hiện sự qu&yacute; ph&aacute;i, sang trọng đầy lịch l&atilde;m của một qu&yacute; &ocirc;ng đ&iacute;ch thực.</p>', '50', NULL, 'bleu-de-chanel-eau-de-parfum-1-300x2307.png', 1, NULL, NULL),
(35, 2, 4, 2, 5, 'Nước Hoa Chanel Chance Eau Vive Eau De Toilette 100ml', '3850000', '3000000', '<h2 style=\"text-align:center\">Nước Hoa Chanel Chance Eau Vive&nbsp;Eau De Toilette</h2>\r\n\r\n<h3 style=\"text-align:center\">Chanel Chance Eau Vive</h3>\r\n\r\n<p style=\"text-align:center\">Nước hoa&nbsp;<strong>Chanel Chance Eau Vive</strong>&nbsp;thanh lịch tinh tế với hương hoa cỏ Gỗ xạ hương quyến rũ. Sản phẩm ra mắt v&agrave;o ng&agrave;y&nbsp;12/6/2015 do &ocirc;ng ho&agrave;ng nước hoa&nbsp;Olivier Polge pha chế. Một m&ugrave;i hương m&atilde;nh liệt, quyến rũ v&agrave; rất trẻ trung l&agrave; những g&igrave; người ta nhắc đến sản phẩm n&agrave;y.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Chance-Eau-Vive-3-800x450\" height=\"490\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Chance-Eau-Vive-3-800x450.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Chance-Eau-Vive-3-800x450.png 600w, https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Chance-Eau-Vive-3-800x450-300x245.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><strong><em>Nước hoa Chanel Chance Eau Vive Eau De Toilette</em></strong></p>\r\n\r\n<h3 style=\"text-align:center\">Đặc điểm của nước hoa&nbsp;<strong>Chanel Chance Eau Vive</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&oacute;m hương thơm:</strong>&nbsp;Hương Hoa cỏ Gỗ Xạ hương &ndash; Floral Woody Musk</p>\r\n\r\n<p style=\"text-align:center\"><strong>Năm ra mắt:</strong>&nbsp;2015</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ lưu hương:</strong>&nbsp;L&acirc;u &ndash; 7 giờ đến 12 giờ</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ toả hương:</strong>&nbsp;Xa &ndash; Toả hương trong v&ograve;ng b&aacute;n k&iacute;nh 2 m&eacute;t</p>\r\n\r\n<p style=\"text-align:center\"><strong>Thời điểm sử dụng:</strong>&nbsp;ng&agrave;y, đ&ecirc;m, xu&acirc;n, thu, đ&ocirc;ng</p>\r\n\r\n<p style=\"text-align:center\"><strong>Phong c&aacute;ch:</strong>&nbsp;Nữ t&iacute;nh, thanh lịch, trẻ trung</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&agrave; s&aacute;ng tạo:</strong>&nbsp;Olivier Polge</p>\r\n\r\n<p style=\"text-align:center\"><strong>Xuất xứ</strong>: Ph&aacute;p</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương đầu:</strong>&nbsp;Cam đỏ, Quả bưởi, Chi cam chanh</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương giữa:</strong>&nbsp;Hoa nh&agrave;i, Xạ hương trắng</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương cuối:</strong>&nbsp;Cỏ hương b&agrave;i, Gỗ tuyết t&ugrave;ng, Hoa di&ecirc;n vĩ</p>\r\n\r\n<p style=\"text-align:center\"><strong>Dung t&iacute;ch phổ biến:&nbsp;</strong>50ml, 100ml, 150ml</p>\r\n\r\n<h2 style=\"text-align:center\">Đ&ocirc;i n&eacute;t về thương hiệu nước hoa Chanel</h2>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel</strong>&nbsp;&ndash; thương hiệu nước hoa đẳng cấp h&agrave;ng đầu thế giới khiến h&agrave;ng triệu c&ocirc; g&aacute;i say đắm. L&agrave; sự kết tinh s&aacute;ng tạo t&agrave;i năng&nbsp;của người phụ nữ quyền lực c&oacute; tầm ảnh hưởng nhất thế giới thế kỷ XX &ndash; Gabrielle Bonheur Chanel&nbsp;(Coco Chanel). Thiết kế sang trọng c&ugrave;ng n&eacute;t tinh tế trong việc pha trộn c&aacute;c hương liệu thi&ecirc;n nhi&ecirc;n, gi&uacute;p thương hiệu mang đến vẻ s&agrave;nh điệu, tỏa s&aacute;ng trong từng sản phẩm. Với những&nbsp;bộ sưu tập&nbsp;<strong>nước hoa</strong>&nbsp;khổng lồ l&ocirc;i cuốn v&agrave; khơi gợi x&uacute;c cảm &ndash; nước hoa Chanel xứng đ&aacute;ng l&agrave; biểu tượng quyến rũ của người phụ nữ hiện đại.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Chance-Eau-Vive-4-800x534\" height=\"400\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Chance-Eau-Vive-4-800x534.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Chance-Eau-Vive-4-800x534.png 600w, https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Chance-Eau-Vive-4-800x534-300x200.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><strong><em>Nước hoa Chanel Chance Eau Vive</em></strong></p>\r\n\r\n<h2 style=\"text-align:center\">Ưu điểm của nước hoa&nbsp;<strong>Chanel Chance Eau Vive</strong></h2>\r\n\r\n<h3 style=\"text-align:center\">Tinh t&uacute;y trong từng lớp hương thơm</h3>\r\n\r\n<p style=\"text-align:center\">Nước hoa&nbsp;<strong>Chanel Chance Eau Vive&nbsp;</strong>l&agrave; sản phẩm mới nhất nằm trong&nbsp;bộ sưu tập&nbsp;Chance của thương hiệu nước hoa Chanel. Sản phẩm l&agrave;&nbsp;sự s&aacute;ng tạo của nh&agrave; thiết kế t&agrave;i hoa Olivier Polge v&agrave;o năm 2015.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Chanel Chance Eau Vive EDT&nbsp;</strong>mang đến một sự khởi đầu ho&agrave;n to&agrave;n kh&aacute;c lạ so với c&aacute;c sản phẩm trước đ&acirc;y bởi<strong>&nbsp;</strong>lớp hương đầu l&agrave; sự h&ograve;a quyện của c&aacute;c tinh chất Cam đỏ, bưởi, Chi cam chanh mang đến sự nhẹ nh&agrave;ng thanh khiết v&ocirc; c&ugrave;ng thoải m&aacute;i. Khi lớp hương thơm đầu phai dần đi, lớp hương thơm thứ hai&nbsp;sẽ &nbsp;lập tức x&acirc;m chiếm lắng đọng bởi th&agrave;nh phần của hoa nh&agrave;i, Xạ hương trắng. Cuối c&ugrave;ng hương thơm của cỏ hương b&agrave;i, gỗ tuyết t&ugrave;ng, hoa di&ecirc;n vĩ sẽ l&agrave;m nhiệm vụ li&ecirc;n kết tổng thể m&ugrave;i hương&nbsp;<strong>Chanel Chance Eau Vive Eau De Toilette.</strong></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Chance-Eau-Vive-1\" height=\"408\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Chance-Eau-Vive-1.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Chance-Eau-Vive-1.png 600w, https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Chance-Eau-Vive-1-300x204.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Nước hoa Chanel Chance Eau Vive sở hữu hương thơm thanh lịch, nữ t&iacute;nh</strong></em></p>\r\n\r\n<p style=\"text-align:center\">Nước hoa&nbsp;<strong>Chanel Chance Eau Vive&nbsp;</strong>được nh&agrave; sản xuất khuyến c&aacute;o sử dụng tốt nhất v&agrave;o thời tiết m&aacute;t mẻ,&nbsp;m&ugrave;i hương hiện đại tươi mới sẽ k&iacute;ch th&iacute;ch sự l&ocirc;i cuốn v&agrave; lưu tr&ecirc;n da rất l&acirc;u khoảng từ 7 đến 12 giờ mỗi lần sử dụng.</p>\r\n\r\n<h3 style=\"text-align:center\">Thiết kế mang n&eacute;t cổ điển truyền thống</h3>\r\n\r\n<p style=\"text-align:center\">Nước hoa&nbsp;<strong>Chanel Chance Eau Vive</strong>&nbsp;thiết kế&nbsp;d&aacute;ng chai tr&ograve;n, bằng thủy tinh trong suốt c&oacute; viền kim loại s&aacute;ng lo&aacute;ng được coi l&agrave; biểu tượng đầy may mắn c&agrave;ng khiến cho thi&ecirc;n thần nước hoa n&agrave;y th&ecirc;m phần sang trọng rất đẳng cấp. Nổi bật b&ecirc;n trong l&agrave; dung dịch nước hoa m&agrave;u v&agrave;ng nhẹ.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Chance-Eau-Vive-2\" height=\"419\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Chance-Eau-Vive-2.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Chance-Eau-Vive-2.png 600w, https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Chance-Eau-Vive-2-300x210.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Thiết kế sang trọng v&agrave; quyến rũ của nước hoa Chanel Chance Eau Vive</strong></em></p>', '50', NULL, 'Chanel-Chance-Eau-Vive-340x34021.png', 1, NULL, NULL),
(36, 1, 4, 3, 5, 'Nước Hoa Chanel Egoiste Platinum Eau De Toilette 100ml', '2000000', '1500000', '<h2 style=\"text-align:center\">Nước Hoa Chanel Egoiste Platinum&nbsp;Eau De Toilette</h2>\r\n\r\n<h3 style=\"text-align:center\">Nước hoa Chanel Egoiste Platinum</h3>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa&nbsp;Chanel Egoiste Platinum</strong><strong>&nbsp;</strong>lấy cảm hứng từ một ch&agrave;ng trai năng động, y&ecirc;u th&iacute;ch c&aacute;c m&ocirc;n thể thao ngo&agrave;i trời, y&ecirc;u thi&ecirc;n nhi&ecirc;n, ưa kh&aacute;m ph&aacute;. Với một m&ugrave;i thơm nam t&iacute;nh đầy l&ocirc;i cuốn, l&agrave;m t&ocirc;n l&ecirc;n những phẩm chất của người đ&agrave;n &ocirc;ng đ&iacute;ch thực.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Nước hoa Chanel Egoiste Platinum\" height=\"481\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum-2-340x340.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum-2-340x340.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum-2-340x340-300x241.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Nước hoa Chanel Egoiste Platinum</strong></em></p>\r\n\r\n<p style=\"text-align:center\"><strong>Thương hiệu</strong>: Chanel.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Xuất xứ</strong>: Ph&aacute;p.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Năm ra mắt</strong>: 1993.</p>\r\n\r\n<p style=\"text-align:center\"><strong>T&ecirc;n người s&aacute;ng lập</strong>: Jacques Polge.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&oacute;m hương</strong>: Gỗ v&agrave; hoa cỏ xạ hương.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Phong c&aacute;ch</strong>: Nam t&iacute;nh, năng động, đam m&ecirc;.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Thời gian lưu hương</strong>: &nbsp;Kh&aacute; l&acirc;u, từ 7 giờ đến 12 giờ.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ tỏa hương</strong>: Xa&ndash; &nbsp;trong v&ograve;ng b&aacute;n k&iacute;nh 2m.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương đầu</strong>: Tinh dầu l&aacute; cam, hoa cam, c&acirc;y hương thảo v&agrave; hoa oải hương.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương giữa</strong>: Hoa nh&agrave;i, Nhựa c&acirc;y Galbanum, đơn s&acirc;m, h&ograve;a nh&agrave;i, hoa phong lữ.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương cuối: &nbsp;R&ecirc;u sồi, đ&agrave;n hương, hổ ph&aacute;ch, cỏ hương b&agrave;i, gỗ tuyết t&ugrave;ng.</strong></p>\r\n\r\n<p style=\"text-align:center\"><strong>Thời điểm sử dụng tốt nhất</strong>: Xu&acirc;n, H&egrave;, Ng&agrave;y, Đ&ecirc;m.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Giới t&iacute;nh</strong>: Nam, tr&ecirc;n 25 tuổi.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Dung t&iacute;ch</strong>: &nbsp;&nbsp;50ml,100ml.</p>\r\n\r\n<h2 style=\"text-align:center\">Thương hiệu nước hoa Chanel &ndash; &ldquo;đế chế&rdquo; trong giới m&ugrave;i hương</h2>\r\n\r\n<p style=\"text-align:center\">Thương hiệu Chanel &ndash; l&agrave; thương hiệu thời trang nổi tiếng của ở Ph&aacute;p, được th&agrave;nh lập bởi Gabrielle Chanel hay t&ecirc;n th&acirc;n mật l&agrave; CoCo. Ra đời từ năm 1910, đ&atilde; tạo n&ecirc;n một c&aacute;ch mạng, l&agrave;m thay đổi v&agrave; ảnh hưởng đến rất nhiều xu hướng thời trang của thế giới. Chanel lại một lần nữa l&agrave;m thay đổi tiếp tục tạo n&ecirc;n một cuộc c&aacute;ch mạng trong ng&agrave;nh nước hoa.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"chanel-egoiste-platinum-1-300x300\" height=\"298\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/chanel-egoiste-platinum-1-300x300.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/chanel-egoiste-platinum-1-300x300.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/chanel-egoiste-platinum-1-300x300-300x149.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Nước hoa Chanel Egoiste Platinum kinh điển của Chanel</strong></em></p>\r\n\r\n<p style=\"text-align:center\">Với sự ra mắt sản phẩm nước hoa đầu ti&ecirc;n Chanel N&deg;5 v&agrave;o năm 1929.&nbsp;Đ&acirc;y l&agrave; d&ograve;ng nước hoa b&aacute;n chạy nhất thế giới v&agrave; l&agrave; biểu tượng cao nhất của sự s&aacute;ng tạo của Chanel.&nbsp;Với sức ảnh hưởng mạnh mẽ, được coi l&agrave; vị vua kh&ocirc;ng cần ngai v&agrave;ng trong giới nước hoa, Chanel cho ra mắt biết bao d&ograve;ng&nbsp;nước hoa Chanel&nbsp;ph&ugrave; hợp với từng c&aacute; t&iacute;nh của mỗi người.&nbsp;<strong>Nước hoa Chanel&nbsp;Chanel Antaeus&nbsp;</strong>ch&iacute;nh l&agrave; một dấu ấn trong đ&oacute;.</p>\r\n\r\n<h2 style=\"text-align:center\"><strong>Đặc điểm của nước hoa&nbsp;<strong>Chanel Egoiste Platinum</strong></strong></h2>\r\n\r\n<h3 style=\"text-align:center\"><strong>Hương thơm hiện đại d&agrave;nh cho người đ&agrave;n &ocirc;ng năng động</strong></h3>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Nuoc hoa Chanel Egoiste Platinum\" height=\"450\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Nuoc-hoa-Chanel-Egoiste-Platinum.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Nuoc-hoa-Chanel-Egoiste-Platinum.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/Nuoc-hoa-Chanel-Egoiste-Platinum-300x225.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Nước hoa Chanel Egoiste Platinum</strong></em></p>\r\n\r\n<p style=\"text-align:center\">Nước hoa&nbsp;<strong>Chanel Egoiste Platinum</strong>&nbsp;chứa đựng một m&ugrave;i hương mang đầy sự trẻ v&agrave; hiện đại. Hương thơm th&iacute;ch hợp sử dụng v&agrave;o ban ng&agrave;y, c&aacute;i tươi m&aacute;t của hương thơm n&agrave;y mang lại, gi&uacute;p bạn k&iacute;ch th&iacute;ch c&aacute;c tế b&agrave;o vận động của cơ thể m&igrave;nh, đối mặt v&agrave; chinh phục những thử th&aacute;ch kh&oacute; khăn, kh&aacute;m ph&aacute; những điều mới mẻ.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Chanel Egoiste Platinum</strong>&nbsp;l&agrave; d&ograve;ng nước hoa thuộc d&ograve;ng hương gỗ kết hợp với hoa cỏ v&agrave; xạ hương. Mở đầu với hương thanh nhẹ của cam, qu&yacute;t, pha trộn với vị thảo mộc mang đậm tinh thần thể thao, ưa mạo hiểm.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Egoiste-Platinum-300x300\" height=\"422\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum-300x300-1.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum-300x300-1.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum-300x300-1-300x211.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Nước hoa Chanel Egoiste Platinum Eau De Toilette</strong></em></p>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel Egoiste Platinum</strong>&nbsp;bắt đầu với m&ugrave;i hương thanh nhạt của c&acirc;y cỏ, chua m&aacute;t tinh dầu cam, l&aacute; qu&yacute;t. Lớp hương tiếp theo trộn lẫn th&ecirc;m vị đắng của thảo mộc v&agrave; m&ugrave;i thơm thanh khiết của tr&aacute;i thơm. Lớp hương cuối&nbsp;<strong>nước hoa Chanel nam&nbsp;</strong>n&agrave;y&nbsp;l&agrave; sự h&ograve;a quyện của c&aacute;c hương gỗ tạo n&ecirc;n cảm gi&aacute;c kh&ocirc; tho&aacute;ng, sạch sẽ nhưng vẫn đủ h&agrave;o nho&aacute;ng để thu người đối diện.</p>\r\n\r\n<h3 style=\"text-align:center\"><strong><strong>Chanel Egoiste Platinum Eau De Toilette thứ</strong>&nbsp;vũ kh&iacute; tạo n&ecirc;n sự nam t&iacute;nh trong những ng&agrave;y m&ugrave;a h&egrave; oi ả</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel Egoiste Platinum&nbsp;</strong>l&agrave; một m&ugrave;i hương dịu nhẹ, ho&agrave;n to&agrave;n ph&ugrave; hợp cho việc đi l&agrave;m v&agrave; cả đi chơi kh&ocirc;ng l&agrave;m ảnh hưởng đến mọi người xung quanh. M&ugrave;i hương đầy nam t&iacute;nh nhưng lại thể hiện phong c&aacute;ch của người d&ugrave;ng, t&ocirc;n l&ecirc;n vẻ đẹp của người đ&agrave;n &ocirc;ng đ&iacute;ch thực.&nbsp;Nước hoa nam&nbsp;c&oacute; lớp hương lưu lại kh&aacute; l&acirc;u tr&ecirc;n cơ thể, n&ecirc;n ho&agrave;n to&agrave;n ph&ugrave; hợp cho những ch&agrave;ng trai y&ecirc;u th&iacute;ch vận động trong những ng&agrave;y h&egrave; v&agrave; ng&agrave;y xu&acirc;n ấm &aacute;p.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Egoiste-Platinum-2-300x300\" height=\"523\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum-2-300x300.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum-2-300x300.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum-2-300x300-300x262.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Nước hoa Chanel Egoiste Platinum</strong></em></p>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel Egoiste Platinum&nbsp;</strong>c&oacute; h&agrave;m lượng tinh dầu ở mức Eau De Toilette nhưng lại nổi bật l&agrave; lưu m&ugrave;i kh&aacute; l&acirc;u v&agrave; tỏa hương xa.</p>\r\n\r\n<h3 style=\"text-align:center\">Thiết kế của nước hoa&nbsp;<strong><strong>Egoiste Platinum EDT</strong></strong></h3>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel Egoiste Platinum\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum-100x100.png 100w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Egoiste-Platinum-340x340.png 340w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Thiết kế của nước hoa Chanel Egoiste Platinum</strong></em></p>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel Egoiste Platinum&nbsp;</strong>thiết kế đơn giản với với thủy tinh trong suốt, chiếc nắp được l&agrave;m bằng kim loại s&aacute;ng b&oacute;ng ở c&aacute;c g&oacute;c được m&agrave;i tinh xảo theo g&oacute;c cạnh của h&igrave;nh vi&ecirc;n kim cương, đ&uacute;ng với t&ecirc;n gọi&nbsp;<strong>Egoiste Platinum.</strong></p>', '50', NULL, 'Chanel-Egoiste-Platinum-2-340x340-300x24144.png', 1, NULL, NULL),
(37, 2, 4, 2, 5, 'Nước Hoa Chanel Chance Eau Tendre Eau De Toilette 100ml', '3700000', '3000000', '<h2 style=\"text-align:center\">Nước Hoa Chanel Chance Eau Tendre&nbsp;Eau De Toilette</h2>\r\n\r\n<h3 style=\"text-align:center\">Chanel Chance Eau Tendre</h3>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel Chance Eau Tendre</strong>&nbsp;ph&aacute;t h&agrave;nh năm 2010, được xem như một luồng gi&oacute; mới cho c&aacute;c d&ograve;ng sản phẩm nước hoa Chance. M&ugrave;i hương nhẹ nh&agrave;ng, nữ t&iacute;nh, l&agrave; sự h&ograve;a quyện của hương thơm tr&aacute;i c&acirc;y c&ugrave;ng hương hoa thanh khiết dịu d&agrave;ng.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"nuoc-hoa-chanel-chance-eau-tendre\" height=\"450\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-chanel-chance-eau-tendre-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-chanel-chance-eau-tendre-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-chanel-chance-eau-tendre-1-300x225.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3 style=\"text-align:center\">Đặc điểm của nước hoa Chanel Chance Eau Tendre</h3>\r\n\r\n<p style=\"text-align:center\"><strong>Xuất xứ</strong>: Ph&aacute;p</p>\r\n\r\n<p style=\"text-align:center\"><strong>Năm ph&aacute;t h&agrave;nh</strong>: 2010</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&agrave; s&aacute;ng chế</strong>: Jacques Polge</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&oacute;m hương</strong>: Hoa cỏ tr&aacute;i c&acirc;y (Floral &ndash; Fruity)</p>\r\n\r\n<p style=\"text-align:center\"><strong>Phong c&aacute;ch</strong>: Ngọt ng&agrave;o, tươi trẻ, năng động</p>\r\n\r\n<p style=\"text-align:center\"><strong>Thời gian lưu hương</strong>: Trung b&igrave;nh, trong khoảng từ 6 đến 8 tiếng</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ tỏa hương</strong>: Thoang thoảng, dịu nhẹ xung quanh</p>\r\n\r\n<p style=\"text-align:center\"><strong>Thời điểm sử dụng</strong>:&nbsp;Ban ng&agrave;y, m&ugrave;a xu&acirc;n &ndash; h&egrave;</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương đầu</strong>: Quả bưởi, Quả mộc qua</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương giữa</strong>: Hoa nh&agrave;i, Hoa dạ lan hương</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương cuối</strong>: Xạ hương, Hoa iris, Gỗ tuyết t&ugrave;ng, Hổ ph&aacute;ch</p>\r\n\r\n<p style=\"text-align:center\"><strong>Dung t&iacute;ch phổ biến</strong>:&nbsp;35ml, 50ml, 100ml</p>\r\n\r\n<h2 style=\"text-align:center\">V&agrave;i n&eacute;t về thương hiệu nước hoa Chanel</h2>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel</strong>&nbsp;&ndash; thương hiệu nước hoa đẳng cấp h&agrave;ng đầu thế giới khiến h&agrave;ng triệu c&ocirc; g&aacute;i say đắm. L&agrave; sự kết tinh s&aacute;ng tạo t&agrave;i năng&nbsp;của người phụ nữ quyền lực c&oacute; tầm ảnh hưởng nhất thế giới thế kỷ XX &ndash; Gabrielle Bonheur Chanel&nbsp;(<strong>Coco Chanel</strong>). Thiết kế sang trọng c&ugrave;ng n&eacute;t tinh tế trong việc pha trộn c&aacute;c hương liệu thi&ecirc;n nhi&ecirc;n, gi&uacute;p thương hiệu mang đến vẻ s&agrave;nh điệu, tỏa s&aacute;ng trong từng sản phẩm. Với những&nbsp;bộ sưu tập&nbsp;<strong>nước hoa</strong>&nbsp;khổng lồ l&ocirc;i cuốn v&agrave; khơi gợi x&uacute;c cảm &ndash; nước hoa Chanel xứng đ&aacute;ng l&agrave; biểu tượng quyến rũ của người phụ nữ hiện đại.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"nuoc-hoa-nu-chanel-chance-eau-tendre\" height=\"373\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-nu-chanel-chance-eau-tendre.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-nu-chanel-chance-eau-tendre.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-nu-chanel-chance-eau-tendre-300x187.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h2 style=\"text-align:center\">Chanel Chance Eau Tendre</h2>\r\n\r\n<h3 style=\"text-align:center\">Nước hoa&nbsp;<strong>Chanel Chance Eau Tendre g&acirc;y cho&aacute;ng ngợp với m&ugrave;i hương nồng n&agrave;n, cuốn h&uacute;t của m&igrave;nh&nbsp;</strong></h3>\r\n\r\n<p style=\"text-align:center\">Điều đầu ti&ecirc;n nhắc nhớ đến&nbsp;<strong>Chanel Chance Eau Tendre</strong>&nbsp;đ&oacute; l&agrave; hương thơm nồng n&agrave;n l&ocirc;i cuốn của những c&aacute;nh hoa bưởi v&agrave; quả mộc qua, hương thơm nhẹ nh&agrave;ng l&ocirc;i cuốn kh&ocirc;ng qu&aacute; gay gắt tạo sự th&acirc;n thiết đến kỳ lạ. Sự thanh m&aacute;t, thoang thoảng của hương hoa nh&agrave;i trắng trong s&aacute;ng c&ugrave;ng n&eacute;t dịu d&agrave;ng của c&aacute;nh hoa dạ lan hương &ugrave;a đến ngay sau khi hương hao bưởi ban đầu dần mất đi. Sự h&ograve;a quyện h&agrave;i h&ograve;a n&agrave;y khiến ph&aacute;i đẹp kh&ocirc;ng chỉ bị cho&aacute;ng ngợp m&agrave; n&oacute; c&ograve;n chứng tỏ n&eacute;t tinh tế, thấu hiểu của người s&aacute;ng tạo n&ecirc;n nước hoa Chanel Chance Eau Tendre &ndash; Jacques Polge. Cuối c&ugrave;ng m&ugrave;i hương của c&acirc;y xạ hương, hoa iris, tuyết t&ugrave;ng, hổ ph&aacute;ch sẽ x&oacute;a tan đi những lo &acirc;u ch&aacute;n nản, mở ra c&aacute;nh cửa ho&agrave;n to&agrave;n mới cho tương lai tươi s&aacute;ng hơn.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"nuoc-hoa-chanel-chance-eau-tendre-eau-de-toilette\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-chanel-chance-eau-tendre-eau-de-toilette.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-chanel-chance-eau-tendre-eau-de-toilette.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-chanel-chance-eau-tendre-eau-de-toilette-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-chanel-chance-eau-tendre-eau-de-toilette-100x100.png 100w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-chanel-chance-eau-tendre-eau-de-toilette-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-chanel-chance-eau-tendre-eau-de-toilette-340x340.png 340w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\">Chanel Chance Eau Tendre Eau De Toilette được sử dụng nhiều nhất trong tiết trời dịu &ecirc;m của m&agrave;u xu&acirc;n, xua tan đi hơi n&oacute;ng của m&ugrave;a h&egrave; bằng sự tươi mới dịu m&aacute;t. Đ&ecirc;m đến sự ngọt ng&agrave;o, dễ chịu khiến c&aacute;c c&ocirc; g&aacute;i kh&ocirc;ng thể chối từ,&nbsp;Chanel Chance Eau Tendre được xem như một thứ b&ugrave;a may mắn d&agrave;nh cho những c&ocirc; n&agrave;ng y&ecirc;u thời trang, m&ecirc; l&agrave;m đẹp v&agrave; mong muốn tạo dấu ấn ri&ecirc;ng cho bản th&acirc;n m&igrave;nh.</p>\r\n\r\n<h3 style=\"text-align:center\">Thiết kế tựa vi&ecirc;n ngọc qu&yacute; gi&aacute;</h3>\r\n\r\n<p style=\"text-align:center\">Thiết kế của&nbsp;<strong>Chanel Chance Eau Tendre</strong>&nbsp;được v&iacute; như một vi&ecirc;n ngọc lung linh trong s&aacute;ng thuần khiết. Được cất giữ trong chiếc chai thủy tinh trong suốt sang trọng b&ecirc;n ngo&agrave;i viền l&agrave; v&ograve;ng tr&ograve;n may mắn, được tr&aacute;ng bạc c&ugrave;ng chiếc nắp l&agrave;m bằng thủy tinh mờ ảo. Đ&acirc;y thực sự l&agrave; một m&oacute;n qu&agrave; thương hiệu muốn gửi gắm đến c&aacute;c c&ocirc; g&aacute;i.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"CHANEL-CHANCE-EAU-TENDRE-1\" height=\"419\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/CHANEL-CHANCE-EAU-TENDRE-1-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/CHANEL-CHANCE-EAU-TENDRE-1-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/CHANEL-CHANCE-EAU-TENDRE-1-1-300x210.jpg 300w\" width=\"600\" /></p>', '50', NULL, 'nuoc-hoa-chanel-chance-eau-tendre-edt-340x34036.jpg', 1, NULL, NULL),
(38, 2, 4, 3, 5, 'Nước hoa Chanel Coco Mademoiselle Eau De Parfum 100ml', '3990000', '3500000', '<h2 style=\"text-align:center\">Nước Hoa Chanel Coco Mademoiselle Eau De Parfum</h2>\r\n\r\n<h3 style=\"text-align:center\">Chanel Coco Mademoiselle</h3>\r\n\r\n<p style=\"text-align:center\">Nước hoa&nbsp;<strong>Chanel Coco Mademoiselle</strong>&nbsp;được thương hiệu nước hoa Chanel cho ra mắt v&agrave;o giữa năm 2001. Chuy&ecirc;n gia nước hoa Jacques Polge l&agrave; người đ&atilde; pha chế l&ecirc;n d&ograve;ng sản phẩm đặc biệt n&agrave;y, thuộc nh&oacute;m hương hoa cỏ phương đ&ocirc;ng đầy gợi cảm, tạo sự thoải m&aacute;i cho người sử dụng.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Coco-Mademoiselle-1\" height=\"390\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Coco-Mademoiselle-1-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Coco-Mademoiselle-1-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Coco-Mademoiselle-1-1-300x195.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3 style=\"text-align:center\">Đặc điểm của nước hoa&nbsp;<strong>Chanel Coco Mademoiselle</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong>Xuất sứ:&nbsp;</strong>Ph&aacute;p</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&oacute;m nước hoa:</strong>&nbsp;Hương Hoa cỏ Phương đ&ocirc;ng &ndash; Oriental Floral</p>\r\n\r\n<p style=\"text-align:center\"><strong>Năm ra mắt:</strong>&nbsp;2001</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&agrave; pha chế:</strong>&nbsp;Jacques Polge</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ lưu hương:</strong>&nbsp;Kh&aacute; l&acirc;u, trong khoảng từ 7 giờ đến 12 giờ</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ toả hương:</strong>&nbsp;Thoang thoảng, dịu nhẹ xung quanh</p>\r\n\r\n<p style=\"text-align:center\"><strong>Thời điểm th&iacute;ch hợp:</strong>&nbsp;Ng&agrave;y, Đ&ecirc;m, Xu&acirc;n, Thu, Đ&ocirc;ng</p>\r\n\r\n<p style=\"text-align:center\"><strong>Phong c&aacute;ch:</strong>&nbsp; Trẻ trung, quyến rũ, hiện đại</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương đầu:</strong>&nbsp; Cam Bergamot, Quả bưởi, Quả cam</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương giữa:</strong>&nbsp;Hoa nh&agrave;i, Hoa hồng, Tr&aacute;i vải</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương cuối:</strong>&nbsp;Cỏ hương b&agrave;i, Xạ hương, Hoắc hương, Va ni</p>\r\n\r\n<p style=\"text-align:center\"><strong>Dung t&iacute;ch phổ biến:&nbsp;</strong>10ml,&nbsp;35ml, 50ml, 100ml</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Coco-Mademoiselle-5\" height=\"409\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Coco-Mademoiselle-5-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Coco-Mademoiselle-5-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Coco-Mademoiselle-5-1-300x205.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h2 style=\"text-align:center\"><strong>Đ&ocirc;i n&eacute;t về thương hiệu nước hoa Chanel&nbsp;</strong></h2>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel</strong>&nbsp;&ndash; thương hiệu nước hoa đẳng cấp h&agrave;ng đầu thế giới khiến h&agrave;ng triệu c&ocirc; g&aacute;i say đắm. L&agrave; sự kết tinh s&aacute;ng tạo t&agrave;i năng&nbsp;của người phụ nữ quyền lực c&oacute; tầm ảnh hưởng nhất thế giới thế kỷ XX &ndash; Gabrielle Bonheur Chanel&nbsp;(Coco Chanel). Thiết kế sang trọng c&ugrave;ng n&eacute;t tinh tế trong việc pha trộn c&aacute;c hương liệu thi&ecirc;n nhi&ecirc;n, gi&uacute;p thương hiệu mang đến vẻ s&agrave;nh điệu, tỏa s&aacute;ng trong từng sản phẩm. Với những&nbsp;bộ sưu tập&nbsp;<strong>nước hoa</strong>&nbsp;khổng lồ l&ocirc;i cuốn v&agrave; khơi gợi x&uacute;c cảm &ndash; nước hoa Chanel xứng đ&aacute;ng l&agrave; biểu tượng quyến rũ của người phụ nữ hiện đại.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Coco-Mademoiselle-800x451\" height=\"400\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Coco-Mademoiselle-800x451-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Coco-Mademoiselle-800x451-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Coco-Mademoiselle-800x451-1-300x200.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h2 style=\"text-align:center\">Điều g&igrave; tạo l&ecirc;n sự kh&aacute;c biệt của nước hoa&nbsp;<strong>Chanel Coco Mademoiselle?</strong></h2>\r\n\r\n<h3 style=\"text-align:center\">Hương thơm l&ocirc;i cuốn từ h&agrave;ng triệu loại hoa</h3>\r\n\r\n<p style=\"text-align:center\">L&agrave; sự h&ograve;a quyện của c&aacute;c th&agrave;nh phần thi&ecirc;n nhi&ecirc;n, lớp hương đầu của&nbsp;<strong>Chanel Coco Mademoiselle</strong><strong>&nbsp;</strong>phảng phất hương thơm của cam Bergamot, quả bưởi, quả cam,&hellip;.tạo ra sự sảng kho&aacute;i thanh nh&atilde;. Tiếp nối ngay sau đ&oacute; l&agrave; m&ugrave;i hương của c&aacute;nh hoa nh&agrave;i, hoa hồng v&agrave; quả vải, sự kết hợp c&oacute; phần hơi tr&aacute;i ngược n&agrave;y lại mang đến m&ugrave;i hương hiện đại thanh lịch. Cuối c&ugrave;ng một ch&uacute;t vị ngọt của cỏ hương b&agrave;i kết hợp với Xạ hương, hoắc hương, Va ni.sẽ l&agrave;m nhiệm vụ tỏa hương trong lớp hương cuối. Chanel&nbsp;Coco Mademoiselle EDP<strong>&nbsp;</strong>thực sự đ&atilde; đem đến một l&agrave;n gi&oacute; mới cho những t&iacute;n đồ y&ecirc;u th&iacute;ch nước hoa.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Coco-Mademoiselle-2\" height=\"350\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Coco-Mademoiselle-2-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Coco-Mademoiselle-2-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/11/Chanel-Coco-Mademoiselle-2-1-300x175.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3 style=\"text-align:center\">Thiết kế&nbsp;<strong>Chanel Coco Mademoiselle</strong><strong>&nbsp;</strong>sang trọng</h3>\r\n\r\n<p style=\"text-align:center\"><strong>Chanel Coco Mademoiselle</strong>&nbsp;l&agrave; nước hoa d&agrave;nh cho c&aacute;c c&ocirc; g&aacute;i c&oacute; độ tuổi từ 25 trở l&ecirc;n bởi mang n&oacute; mang phong c&aacute;ch sang trọng qu&yacute; ph&aacute;i pha lẫn ch&uacute;t hiện đại. M&ugrave;i hương nồng n&agrave;n quyến rũ, tỏa hương rất gần chắc chắn sẽ khiến bạn h&agrave;i l&ograve;ng.&nbsp;Thương hiệu nước hoa Chanel đ&atilde; đưa ra lời khuyến c&aacute;o, thời điểm sử dụng Chanel Coco Mademoiselle Eau De Parfum tốt nhất đ&oacute; thời điểm ban đ&ecirc;m.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel Coco Mademoiselle</strong>&nbsp;c&oacute; thi&ecirc;́t k&ecirc;́ hình chữ nh&acirc;̣t, sang trọng với lớp vỏ thủy tinh trong suốt nh&igrave;n thấy r&otilde; được dung dịch m&agrave;u da của nước hoa b&ecirc;n trong. Nắp chai hình trụ màu trắng được xem l&agrave; điểm nhấn của<strong>&nbsp;</strong>Coco Mademoiselle ch&iacute;nh bởi sự đơn giản kh&ocirc;ng qu&aacute; cầu kỳ.</p>', '49', '1', 'Chanel-Coco-Mademoiselle-4-1-340x3408.jpg', 1, NULL, NULL);
INSERT INTO `sanpham` (`spMa`, `loaiMa`, `thMa`, `muaMa`, `dtMa`, `spTen`, `spGia`, `spGiaGoc`, `spMoTa`, `spSoLuong`, `spSoLuongDaBan`, `spHinhAnh`, `spTrangThai`, `created_at`, `updated_at`) VALUES
(39, 1, 4, 2, 5, 'Nước hoa Chanel Bleu de Chanel Eau de Parfum 100ml', '1231231', '1000000', '<h2 style=\"text-align:center\">Nước hoa Chanel Allure Homme Sport Eau De Toilette</h2>\r\n\r\n<h3 style=\"text-align:center\">Nước hoa Chanel Allure Homme Sport</h3>\r\n\r\n<p style=\"text-align:center\">5 năm sau th&agrave;nh c&ocirc;ng của Allure Homme, v&agrave;o năm 2004, thương hiệu Chanel đ&atilde; ch&iacute;nh thức cho ra mắt d&ograve;ng sản phẩm Allure Homme Sport được giới thiệu l&agrave; một m&ugrave;i hương tươi mới v&agrave; mạnh mẽ hơn cả. L&agrave; sự h&ograve;a quyện giữa vị ngọt ng&agrave;o của hương vani, pha ch&uacute;t cay nồng của ti&ecirc;u đen c&ugrave;ng hương&nbsp;aldehyde cực kỳ b&ugrave;ng nổ,&nbsp;<strong>nước hoa&nbsp;</strong><strong>Chanel Allure Homme Sport Eau De Toilette</strong>&nbsp;chắc chắc sẽ tạo n&ecirc;n những cung bậc cảm x&uacute;c kh&oacute; qu&ecirc;n trong cuộc sống thường ng&agrave;y của bạn.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"nuoc-hoa-chanel-allure-homme-sport-eau-de-toilette-100ml-4-300x300\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/02/nuoc-hoa-chanel-allure-homme-sport-eau-de-toilette-100ml-4-300x300.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/02/nuoc-hoa-chanel-allure-homme-sport-eau-de-toilette-100ml-4-300x300.png 600w, https://theperfume.vn/wp-content/uploads/2018/02/nuoc-hoa-chanel-allure-homme-sport-eau-de-toilette-100ml-4-300x300-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2018/02/nuoc-hoa-chanel-allure-homme-sport-eau-de-toilette-100ml-4-300x300-100x100.png 100w, https://theperfume.vn/wp-content/uploads/2018/02/nuoc-hoa-chanel-allure-homme-sport-eau-de-toilette-100ml-4-300x300-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2018/02/nuoc-hoa-chanel-allure-homme-sport-eau-de-toilette-100ml-4-300x300-340x340.png 340w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Nước hoa&nbsp;Chanel Allure Homme Sport nam t&iacute;nh v&agrave; thể thao</strong></em></p>\r\n\r\n<p style=\"text-align:center\"><strong>Thương hiệu:&nbsp;</strong>Chanel</p>\r\n\r\n<p style=\"text-align:center\"><strong>Xuất xứ:&nbsp;</strong>Ph&aacute;p</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&agrave; s&aacute;ng tạo:&nbsp;</strong>Jacques Polge</p>\r\n\r\n<p style=\"text-align:center\"><strong>Năm ra mắt:&nbsp;</strong>2004</p>\r\n\r\n<p style=\"text-align:center\"><strong>D&ograve;ng:&nbsp;</strong>Allure Homme Sport</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&oacute;m hương:&nbsp;</strong>Hương gỗ cay nồng</p>\r\n\r\n<p style=\"text-align:center\"><strong>Phong c&aacute;ch:&nbsp;</strong>Mạnh mẽ, thể thao.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương đầu:&nbsp;</strong>Hương An-đ&ecirc;-h&iacute;t, Quả cam, Quả qu&yacute;t hồng huyết, Hương nước biển</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương giữa</strong>:&nbsp;Ti&ecirc;u, Hoa cam Neroli, Gỗ tuyết t&ugrave;ng</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương cuối</strong>:&nbsp;Đậu Tonka, Hổ ph&aacute;ch, Hương vani, Cỏ hương b&agrave;i, Xạ hương trắng, Hương nhựa c&acirc;y Elemi.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ lưu hương:&nbsp;</strong>L&acirc;u, từ 7 &ndash; 12 giờ.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ tỏa hương:&nbsp;</strong>Gần, trong v&ograve;ng một c&aacute;nh tay.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Dung t&iacute;ch:&nbsp;</strong>10ml, 50ml, 100ml, 150ml.</p>\r\n\r\n<h2 style=\"text-align:center\">Một v&agrave;i n&eacute;t về thương hiệu nước hoa Chanel</h2>\r\n\r\n<p style=\"text-align:center\">L&agrave; thương hiệu được &ldquo;nh&agrave;o nặn&rdquo; dưới b&agrave;n tay của Coco Chanel &ndash; người phụ nữ c&oacute; tầm ảnh hưởng mạnh mẽ đến phong c&aacute;ch thời trang to&agrave;n cầu trong thế kỷ XX &ndash;&nbsp;<strong>nước hoa Chanel</strong>&nbsp;mang đến những &ldquo;tuy&ecirc;n ng&ocirc;n&rdquo; c&oacute; t&iacute;nh c&aacute;ch mạng trong ng&agrave;nh &ldquo;hương thơm&rdquo; thế giới. Bắt đầu sự nghiệp từ những chai nước hoa Chanel No.5 được ra mắt lần đầu ti&ecirc;n v&agrave;o năm 1922, cho đến thời điểm hiện tại, Chanel đ&atilde; sở hữu một khối lượng m&ugrave;i hương khổng lồ c&ugrave;ng v&ocirc; số biểu tượng mang t&iacute;nh &ldquo;di sản&rdquo; của thương hiệu.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Nước hoa Chanel Allure Homme Sport Eau De Toilette\" height=\"450\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/02/Nuoc-hoa-Chanel-Allure-Homme-sport-Eau-De-Toilette-340x340-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/02/Nuoc-hoa-Chanel-Allure-Homme-sport-Eau-De-Toilette-340x340-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2018/02/Nuoc-hoa-Chanel-Allure-Homme-sport-Eau-De-Toilette-340x340-1-300x225.jpg 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Nước hoa Chanel Allure Homme Sport l&agrave; d&ograve;ng nước hoa t&ecirc;n tuổi của Chanel</strong></em></p>\r\n\r\n<p style=\"text-align:center\">Với sự kết hợp c&ugrave;ng những chuy&ecirc;n gia s&aacute;ng chế h&agrave;ng đầu tr&ecirc;n thế giới như&nbsp;Jacques Polge, Olivier Polge, Henri Robert, Ernest Beaux hay Christopher Sheldrake,&nbsp;<strong>nước hoa</strong>&nbsp;Chanel lu&ocirc;n lu&ocirc;n mang đến những trải nghiệm độc đ&aacute;o v&agrave; cực kỳ tuyệt vời cho người sử dụng. Với mục đ&iacute;ch&nbsp;t&igrave;m kiếm những phương thức thể hiện c&aacute; t&iacute;nh bản th&acirc;n một c&aacute;ch ho&agrave;n hảo nhất, mỗi m&ugrave;i hương của nước hoa Chanel đều được coi l&agrave; một &ldquo;kho b&aacute;u&rdquo; v&ocirc; gi&aacute; m&agrave; c&agrave;ng trải nghiệm bạn mới c&agrave;ng cảm nhận được sức cuốn h&uacute;t bất tận từ thương hiệu l&agrave;m đẹp nổi tiếng xa xỉ n&agrave;y.</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:center\">L&yacute; do khiến nước hoa Chanel Allure Homme Sport EDT &ldquo;chinh phục&rdquo; ho&agrave;n to&agrave;n c&aacute;c đấng m&agrave;y r&acirc;u</h2>\r\n\r\n<h3 style=\"text-align:center\">Nước hoa&nbsp;<strong>Chanel Allure Homme Sport&nbsp;Eau De Toilette&nbsp;</strong>sở hữu hương thơm tự nhi&ecirc;n, nam t&iacute;nh nhưng cũng v&ocirc; c&ugrave;ng cuốn h&uacute;t</h3>\r\n\r\n<p style=\"text-align:center\">Top notes của&nbsp;<strong>nước hoa Chanel Allure Homme Sport Eau De Toilette&nbsp;</strong>mang đến<strong>&nbsp;</strong>cảm gi&aacute;c tươi mới, thanh m&aacute;t của hoa quả với sự h&ograve;a quyện giữa hương thơm của tr&aacute;i cam v&agrave; quả qu&yacute;t hồng tuyết. Kh&uacute;c dạo đầu c&agrave;ng trở n&ecirc;n đặc biệt hơn khi c&oacute; sự g&oacute;p mặt của&nbsp;aldehyde &ndash; thứ &ldquo;gia vị&rdquo; đ&oacute;ng vai tr&ograve; khuấy động trong mọi bữa tiệc khứu gi&aacute;c.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Allure-Homme-Sport\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/02/Chanel-Allure-Homme-Sport.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/02/Chanel-Allure-Homme-Sport.png 600w, https://theperfume.vn/wp-content/uploads/2018/02/Chanel-Allure-Homme-Sport-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2018/02/Chanel-Allure-Homme-Sport-100x100.png 100w, https://theperfume.vn/wp-content/uploads/2018/02/Chanel-Allure-Homme-Sport-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2018/02/Chanel-Allure-Homme-Sport-340x340.png 340w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Hương nước hoa&nbsp;Chanel Allure Homme Sport Eau De Toilette quyến rũ</strong></em></p>\r\n\r\n<p style=\"text-align:center\">Với nốt hương giữa,&nbsp;<strong>Chanel Allure Homme Sport</strong>&nbsp;g&acirc;y ấn tượng với hương thơm cay nồng đặc trưng đến từ tinh dầu ti&ecirc;u đen v&agrave; hương gỗ tự nhi&ecirc;n h&ograve;a quyện v&agrave;o nhau. Điểm đặc biệt ở nốt hương n&agrave;y ch&iacute;nh l&agrave; mức độ c&acirc;n bằng giữa c&aacute;c th&agrave;nh phần tinh dầu, nhờ vậy m&agrave;&nbsp;<strong>nước hoa&nbsp;</strong><strong>Chanel Allure Homme Sport EDT</strong>&nbsp;sở hữu m&ugrave;i hương nhẹ nh&agrave;ng, tinh tế chứ kh&ocirc;ng g&acirc;y cảm gi&aacute;c qu&aacute; nồng nặc.</p>\r\n\r\n<p style=\"text-align:center\">Lớp hương cuối l&agrave; sự kết hợp h&agrave;i h&ograve;a giữa tinh chất xạ hương trắng, đậu Tonka v&agrave; hổ ph&aacute;ch gi&uacute;p mang đến cảm gi&aacute;c tươi mới, khỏe khoắn cho tổng thể m&ugrave;i hương.</p>\r\n\r\n<h3 style=\"text-align:center\">Thiết kế sang trọng, lịch l&atilde;m của nước hoa&nbsp;<strong>Chanel Allure Homme Sport EDT&nbsp;</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa nam</strong>&nbsp;<strong>Chanel Allure Homme Sport Eau De Toilette</strong>&nbsp;sở hữu một thiết kế thời thượng v&agrave; thanh lịch với phần vỏ chai tr&aacute;ng kim loại sang trọng c&ugrave;ng logo khắc nổi v&ocirc; c&ugrave;ng tinh tế. Tinh thần &ldquo;sport&rdquo; như được lan tỏa mạnh mẽ hơn với vẻ ngo&agrave;i mạnh mẽ đầy cuốn h&uacute;t của si&ecirc;u phẩm n&agrave;y.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Allure-Homme-sport-EDT-300x300\" height=\"423\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/02/Chanel-Allure-Homme-sport-EDT-300x300.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/02/Chanel-Allure-Homme-sport-EDT-300x300.png 600w, https://theperfume.vn/wp-content/uploads/2018/02/Chanel-Allure-Homme-sport-EDT-300x300-300x212.png 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\"><em><strong>Chanel Allure Homme Sport Eau De Toilette đơn giản, thanh lịch trong thiết kế</strong></em></p>\r\n\r\n<p style=\"text-align:center\">Mang trong m&igrave;nh h&igrave;nh ảnh sang trọng v&agrave; lịch l&atilde;m,&nbsp;<strong>nước hoa Chanel Allure Homme Sport Eau De Toilette</strong>&nbsp;chắc hẳn sẽ l&agrave; thứ phụ kiện kh&ocirc;ng-thể-bỏ-qua tr&ecirc;n con đường chinh phục những nấc thang mới mẻ của ph&aacute;i mạnh trong tương lai.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel Allure Homme Sport Eau De Toilette</strong>&nbsp;c&oacute; rất nhiều phi&ecirc;n bản k&iacute;ch thước kh&aacute;c nhau n&ecirc;n bạn c&oacute; thể thoải m&aacute;i lựa chọn cho m&igrave;nh t&ugrave;y theo th&oacute;i quen v&agrave; mục đ&iacute;ch sử dụng h&agrave;ng ng&agrave;y.</p>', '50', '0', 'Nuoc-hoa-Chanel-Allure-Homme-sport-Eau-De-Toilette-340x340-1-300x22548.jpg', 1, NULL, NULL),
(40, 2, 4, 4, 5, 'Nước Hoa Chanel N°5 Eau De Parfum 100ml', '4100000', '3500000', '<h2>Nước Hoa Chanel N&deg;5</h2>\r\n\r\n<h3>Chanel N&deg;5</h3>\r\n\r\n<p>Huyền thoại&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-chanel-n5/\"><strong>nước hoa&nbsp;Chanel N&deg;5</strong></a>&nbsp;khiến c&aacute;c c&ocirc; g&aacute;i m&ecirc; mẩn bởi m&ugrave;i hương cổ điển, l&ocirc;i cuốn tựa như h&agrave;ng triệu c&aacute;nh&nbsp;hoa h&ograve;a quyện trong một chai nước hoa. Thiết kế sang trọng tinh tế, thời gian&nbsp;lưu hương l&acirc;u, tỏa hương vừa phải th&iacute;ch hợp để sử dụng ở nhiều thời điểm trong năm. Đ&acirc;y l&agrave; loại chai nước hoa b&aacute;n chạy nhất trong v&ograve;ng hơn 1 thế kỷ qua của thương hiệu nước hoa Chanel với trung b&igrave;nh 30 gi&acirc;y 1 chai.</p>\r\n\r\n<p><img alt=\"nuoc-hoa-Chanel-N5-eau-de-parfum\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-Chanel-N5-eau-de-parfum.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-Chanel-N5-eau-de-parfum.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-Chanel-N5-eau-de-parfum-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-Chanel-N5-eau-de-parfum-100x100.png 100w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-Chanel-N5-eau-de-parfum-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-Chanel-N5-eau-de-parfum-340x340.png 340w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước Hoa Chanel N&deg;5 Eau De Parfum</strong></em></p>\r\n\r\n<h3>Đặc điểm của nước hoa&nbsp;Chanel N&deg;5</h3>\r\n\r\n<ul>\r\n	<li><strong>Nh&oacute;m nước hoa:</strong>&nbsp;Hương hoa cỏ An-Đ&ecirc;-H&iacute;t</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;1921</li>\r\n	<li><strong>S&aacute;ng tạo bởi:</strong>&nbsp;Ernest Beaux</li>\r\n	<li><strong>Thời gian lưu hương:</strong>&nbsp;Kh&aacute; l&acirc;u, trong khoảng từ 8 đến 10 giờ</li>\r\n	<li><strong>Độ toả hương:</strong>&nbsp;Thoang thoảng, dịu nhẹ xung quanh</li>\r\n	<li><strong>Thời điểm th&iacute;ch hợp:</strong>&nbsp;Ng&agrave;y, Đ&ecirc;m, Thu, Đ&ocirc;ng</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;Cổ điển, sang trọng, quyến rũ</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Hương An-đ&ecirc;-h&iacute;t, Hoa cam Neroli, Hoa ngọc lan t&acirc;y, Cam Bergamot, chanh v&agrave;ng.</li>\r\n	<li><strong>Hương giữa:&nbsp;</strong>Hoa di&ecirc;n vĩ, Rễ c&acirc;y di&ecirc;n vĩ, Hoa nh&agrave;i, Hoa linh lan thung lũng, Hoa hồng.</li>\r\n	<li><strong>Hương cuối:&nbsp;</strong>Hổ ph&aacute;ch, Gỗ đ&agrave;n hương, C&acirc;y hoắc hương, Xạ hương, Hương cầy, Hương Va ni, R&ecirc;u sồi, Cỏ hương b&agrave;i.</li>\r\n</ul>\r\n\r\n<p><img alt=\"Chanel-N5-eau-de-parfum\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-N5-eau-de-parfum-1.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-N5-eau-de-parfum-1.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-N5-eau-de-parfum-1-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-N5-eau-de-parfum-1-100x100.png 100w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-N5-eau-de-parfum-1-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-N5-eau-de-parfum-1-340x340.png 340w\" width=\"600\" /></p>\r\n\r\n<p><strong><em>Nước hoa&nbsp;Chanel N&deg;5 EDP</em></strong></p>\r\n\r\n<h2>Đ&ocirc;i n&eacute;t về thương hiệu nước hoa Chanel</h2>\r\n\r\n<p><a href=\"https://theperfume.vn/brand/nuoc-hoa-chanel/\"><strong>Nước hoa Chanel</strong></a>&nbsp;&ndash; thương hiệu nước hoa đẳng cấp h&agrave;ng đầu thế giới khiến h&agrave;ng triệu c&ocirc; g&aacute;i say đắm. L&agrave; sự kết tinh s&aacute;ng tạo t&agrave;i năng&nbsp;của người phụ nữ quyền lực c&oacute; tầm ảnh hưởng nhất thế giới thế kỷ XX &ndash; Gabrielle Bonheur Chanel&nbsp;(Coco Chanel). Thiết kế sang trọng c&ugrave;ng n&eacute;t tinh tế trong việc pha trộn c&aacute;c hương liệu thi&ecirc;n nhi&ecirc;n, gi&uacute;p thương hiệu mang đến vẻ s&agrave;nh điệu, tỏa s&aacute;ng trong từng sản phẩm. Với những&nbsp;bộ sưu tập&nbsp;<strong><a href=\"https://theperfume.vn/\">nước hoa</a></strong>&nbsp;khổng lồ l&ocirc;i cuốn v&agrave; khơi gợi x&uacute;c cảm &ndash; nước hoa Chanel xứng đ&aacute;ng l&agrave; biểu tượng quyến rũ của người phụ nữ hiện đại.</p>\r\n\r\n<p><img alt=\"nuoc-hoa-Chanel-N5-1-800x400\" height=\"402\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-Chanel-N5-1-800x400.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-Chanel-N5-1-800x400.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-Chanel-N5-1-800x400-300x201.png 300w\" width=\"600\" /></p>\r\n\r\n<h2><strong>Huyền thoại&nbsp;nước hoa&nbsp;Chanel N&deg;5</strong></h2>\r\n\r\n<h3>Hương thơm l&ocirc;i cuốn</h3>\r\n\r\n<p>Huyền thoại&nbsp;<strong>Chanel N&deg;5</strong>&nbsp;ra đời năm 1921, bởi chuy&ecirc;n gia nước hoa Ernest Beaux, c&oacute; thể n&oacute;i đến thời điểm n&agrave;y vẫn chưa 1 loại nước hoa n&agrave;o c&oacute; thể thay thế được&nbsp;nước hoa Chanel N&deg;5 bởi sự truyền cảm hứng cho ph&aacute;i đẹp l&agrave; v&ocirc; bờ bến.</p>\r\n\r\n<p><img alt=\"nuoc-hoa-nu-Chanel-N5-eau-de-parfum\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-nu-Chanel-N5-eau-de-parfum.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-nu-Chanel-N5-eau-de-parfum.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-nu-Chanel-N5-eau-de-parfum-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-nu-Chanel-N5-eau-de-parfum-100x100.png 100w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-nu-Chanel-N5-eau-de-parfum-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-nu-Chanel-N5-eau-de-parfum-340x340.png 340w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa&nbsp;Chanel N&deg;5 sở hữu m&ugrave;i hương nồng n&agrave;n, l&ocirc;i cuốn</strong></em></p>\r\n\r\n<p>L&agrave; sự h&ograve;a quyện của c&aacute;c th&agrave;nh phần thi&ecirc;n nhi&ecirc;n, hương đầu của&nbsp;<strong>Chanel N&deg;5</strong>&nbsp;phảng phất hương thơm của c&aacute;nh hồng dịu m&aacute;t c&ugrave;ng với đ&oacute; l&agrave; sức sống mạnh mẽ của tinh dầu cỏ vetiver, hoa cam mịn&nbsp;m&agrave;ng, m&ugrave;i hoa nhọc lan t&acirc;y ngọt nhẹ pha c&ugrave;ng với đ&oacute; l&agrave; ch&uacute;t hương hoa nh&agrave;i v&ugrave;ng Grasse, gỗ v&agrave; trầm hương,&hellip;. sự kết hợp đầy s&aacute;ng tạo n&agrave;y mang đến m&ugrave;i hương cổ điển, hiện đại nhưng vẫn đầy chất thanh lịch. C&oacute; lẽ ch&iacute;nh hương thơm &ldquo;ma mị&rdquo; &ndash; chưa d&ograve;ng nước hoa n&agrave;o đạt đến n&agrave;y đ&atilde; khiến ph&aacute;i đẹp ng&acirc;y ngất v&agrave; lựa chọn&nbsp;<strong>nước hoa Chanel N&deg;5 Eau De Parfum</strong>&nbsp;quyền qu&yacute; cho ri&ecirc;ng m&igrave;nh.</p>\r\n\r\n<h3>Thiết kế sang trọng tinh tế</h3>\r\n\r\n<p><strong>Nước hoa Chanel N&deg;5</strong>&nbsp;c&oacute; thi&ecirc;́t k&ecirc;́ hình chữ nh&acirc;̣t, sang trọng với lớp vỏ thủy tinh trong suất nh&igrave;n thấy r&otilde; được m&agrave;u nước hoa b&ecirc;n trong. Nắp chai hình trụ màu đen được xem l&agrave; điểm nhấn của Chanel N&deg;5&nbsp;Eau De Parfum ch&iacute;nh bởi sự đơn giản kh&ocirc;ng qu&aacute; cầu kỳ.</p>', '50', NULL, 'nuoc-hoa-Chanel-N5-340x34082.png', 1, NULL, NULL),
(41, 2, 4, 4, 5, 'Nước hoa Chanel Coco Noir Eau De Parfum 100ml', '3950000', '3300000', '<h2 style=\"text-align:center\">Nước hoa Chanel Coco Noir Eau De Parfum</h2>\r\n\r\n<h3 style=\"text-align:center\">Chanel Coco Noir</h3>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel Coco Noir</strong>&nbsp;khiến c&aacute;c qu&yacute; c&ocirc; ng&acirc;y ngất v&igrave; hương thơm nồng n&agrave;n,&nbsp;b&iacute; ẩn, quyến rũ. Nếu nước hoa Chanel No.5.mang đến sự cổ điển thanh lịch th&igrave; Chanel Coco Noir lại mang n&eacute;t đẹp hiện đại bởi thiết kế vỏ đen mạnh mẽ. M&ugrave;i hương n&agrave;y sẽ l&agrave; sự lựa chọn đ&uacute;ng đắn cho c&aacute;c c&ocirc; n&agrave;ng theo đuổi phong c&aacute;ch c&aacute; t&iacute;nh quyến rũ, c&aacute; t&iacute;nh.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Coco-Noir\" height=\"406\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-2.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-2.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-2-300x203.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3 style=\"text-align:center\"><strong>Đặc điểm của nước hoa Chanel Coco Noir</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong>Xuất xứ:</strong>&nbsp;Ph&aacute;p</p>\r\n\r\n<p style=\"text-align:center\"><strong>Năm ph&aacute;t h&agrave;nh:</strong>&nbsp;2012</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&oacute;m hương:</strong>&nbsp;Hương gỗ phương Đ&ocirc;ng</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&agrave; s&aacute;ng tạo</strong><strong>:</strong>&nbsp;Jacques Polge v&agrave; Christopher Cheldrake</p>\r\n\r\n<p style=\"text-align:center\"><strong>Phong c&aacute;ch:</strong>&nbsp;Quyến rũ, sang trọng, b&iacute; ẩn</p>\r\n\r\n<p style=\"text-align:center\"><strong>Thời gian lưu hương:</strong>&nbsp;Kh&aacute; l&acirc;u, trung b&igrave;nh trong khoảng 7 đến 12 giờ</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ toả hương:&nbsp;</strong>Xa với b&aacute;n k&iacute;nh từ 1 đến 2 m&eacute;t</p>\r\n\r\n<p style=\"text-align:center\"><strong>Thời điểm khuy&ecirc;n d&ugrave;ng:</strong>&nbsp;Ng&agrave;y &ndash; đ&ecirc;m, m&ugrave;a thu &ndash; đ&ocirc;ng</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương đầu:</strong>&nbsp;Bưởi hồng, Cam, Cam Bergamot</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương giữa:</strong>&nbsp;Hoa nh&agrave;i, Hoa hồng, Hoa thủy ti&ecirc;n, Hoa phong lữ, Tr&aacute;i đ&agrave;o</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương cuối:</strong>&nbsp;Đậu tonka, Hoắc hương, Gỗ đ&agrave;n hương, Vani, Xạ hương trắng, Nhựa hương</p>\r\n\r\n<p style=\"text-align:center\"><strong>Dung t&iacute;ch phổ biến:</strong>&nbsp;35ml, 50ml, 100ml</p>\r\n\r\n<h2 style=\"text-align:center\">Đ&ocirc;i n&eacute;t về thương hiệu nước hoa Chanel</h2>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel</strong>&nbsp;&ndash; thương hiệu nước hoa đẳng cấp h&agrave;ng đầu thế giới khiến h&agrave;ng triệu c&ocirc; g&aacute;i say đắm. L&agrave; sự kết tinh s&aacute;ng tạo t&agrave;i năng&nbsp;của người phụ nữ quyền lực c&oacute; tầm ảnh hưởng nhất thế giới thế kỷ XX &ndash; Gabrielle Bonheur Chanel&nbsp;(Coco Chanel). Thiết kế sang trọng c&ugrave;ng n&eacute;t tinh tế trong việc pha trộn c&aacute;c hương liệu thi&ecirc;n nhi&ecirc;n, gi&uacute;p thương hiệu mang đến vẻ s&agrave;nh điệu, tỏa s&aacute;ng trong từng sản phẩm. Với những&nbsp;bộ sưu tập&nbsp;<strong>nước hoa</strong>&nbsp;khổng lồ l&ocirc;i cuốn v&agrave; khơi gợi x&uacute;c cảm &ndash; nước hoa Chanel xứng đ&aacute;ng l&agrave; biểu tượng quyến rũ của người phụ nữ hiện đại.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"nuoc-hoa-Chanel-Coco-Noir-EDP\" height=\"475\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-Chanel-Coco-Noir-EDP.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-Chanel-Coco-Noir-EDP.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-Chanel-Coco-Noir-EDP-300x238.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h2 style=\"text-align:center\">Điều g&igrave; l&agrave;m Chanel Coco Noir huyền b&iacute; đến vậy?</h2>\r\n\r\n<h3 style=\"text-align:center\"><strong>Nước hoa Chanel Coco Noir sở hữu m&ugrave;i hương tựa</strong>&nbsp;một bản nhạc Baroque&nbsp;ngọt ng&agrave;o</h3>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Chanel Coco Noir</strong>&nbsp;ra đời v&agrave;o năm 2012 dưới b&agrave;n tay t&agrave;i hoa của chuy&ecirc;n gia pha chế Jacques Polge. Hương thơm của c&aacute;c loại cỏ c&acirc;y thi&ecirc;n nhi&ecirc;n như h&ograve;a quyện v&agrave;o nhau từ m&ugrave;i c&acirc;y&nbsp;hoắc hương, xạ hương. M&ugrave;i hương n&agrave;y phảng phấp trong gi&oacute; nhưng cũng đủ để người kh&aacute;c nhắc nhớ đến người sử dụng. Tiếp ngay sau đ&oacute; hương thơm của cam chanh tiếp tục x&acirc;m lấn, chiếm trọn t&igrave;nh y&ecirc;u của ph&aacute;i đẹp, m&ugrave;i hương n&agrave;y c&oacute; thể lưu giữ được đến 8 giờ. Kh&ocirc;ng chỉ c&oacute; vậy, lớp hương tiếp theo l&agrave; sự kết hợp h&agrave;i h&ograve;a của hoa hồng dịu d&agrave;ng, l&aacute; thủy ti&ecirc;n tươi m&aacute;t v&agrave; hoa nh&agrave;i trắng gợi cảm, &hellip;tất cả như thổi th&ecirc;m một l&agrave;m gi&oacute; mới v&agrave;o hương thơm kh&oacute; cưỡng n&agrave;y.</p>\r\n\r\n<p style=\"text-align:center\">Cuối c&ugrave;ng sự c&acirc;n bằng quay trở lại bằng hương thơm được chiết xuất từ c&acirc;y hoắc hương, gỗ đ&agrave;n hương, hương vani, xạ hương trắng,&hellip;. Ch&iacute;nh v&igrave; thế&nbsp;<strong>Chanel Coco Noir Eau De Parfum</strong>&nbsp;được v&iacute; như một bản nhạc Baroque ngọt ng&agrave;o đầy chất thi vị.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Coco-Noir-1\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-1-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-1-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-1-1-200x200.jpg 200w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-1-1-100x100.jpg 100w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-1-1-300x300.jpg 300w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-1-1-340x340.jpg 340w\" width=\"600\" /></p>\r\n\r\n<h3 style=\"text-align:center\"><strong>Chanel Coco Noir với t</strong>hiết kế vỏ đen b&iacute; ẩn huyền ảo</h3>\r\n\r\n<p style=\"text-align:center\">Nhiều kh&aacute;ch h&agrave;ng cho rằng, ch&iacute;nh thiết kế vỏ đen huyền b&iacute; v&agrave; c&oacute; phần t&aacute;o bạo n&agrave;y đ&atilde; khiến họ quyết định lựa chọn nước hoa&nbsp;<strong>Chanel Coco Noir</strong>. Lớp vỏ đen tuyền c&ugrave;ng điểm nhấn l&agrave; phần viền v&agrave;ng khắc t&ecirc;n thương hiệu ở ch&iacute;nh diện th&acirc;n&nbsp;chai mang đến n&eacute;t cổ điển, b&iacute; ẩn nhưng rất hiện đại.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Chanel-Coco-Noir-eau-de-parfum\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-eau-de-parfum.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-eau-de-parfum.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-eau-de-parfum-200x200.jpg 200w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-eau-de-parfum-100x100.jpg 100w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-eau-de-parfum-300x300.jpg 300w, https://theperfume.vn/wp-content/uploads/2017/03/Chanel-Coco-Noir-eau-de-parfum-340x340.jpg 340w\" width=\"600\" /></p>', '50', NULL, 'nuoc-hoa-Chanel-Coco-Noir-3-340x34046.jpg', 1, NULL, NULL),
(42, 1, 6, 1, 5, 'Nước hoa Dior Homme Sport Eau De Toilette 100ml', '2500000', '2000000', '<h2>Nước hoa Dior Homme Sport Eau De Toilette 125ml</h2>\r\n\r\n<h3><strong>Nước hoa Dior Homme Sport</strong></h3>\r\n\r\n<p><strong><a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-dior-homme-sport-eau-de-toilette-125ml/\">Nước hoa Dior Homme Sport Eau De Toilette 125ml</a>&nbsp;</strong>hội tụ hương thơm sảng kho&aacute;i b&ugrave;ng nổ như bất cứ d&ograve;ng Sport n&agrave;o trong giới&nbsp;<strong>nước hoa nam</strong>. Ẩn chứa trong c&aacute;i t&ecirc;n lừng danh nh&agrave; Dior n&agrave;y c&ograve;n c&oacute; một hương vị kh&aacute;c biệt, lắng đọng trong nốt đắng, t&ocirc;n l&ecirc;n chất mạnh mẽ nam giới, lấn &aacute;t m&ugrave;i mồ h&ocirc;i khi vận động. M&ugrave;i hương n&agrave;y lịch l&atilde;m v&agrave; quyến rũ một c&aacute;ch kỳ lạ. Trong BST Dior Homme,&nbsp;<strong>Dior Homme Sport&nbsp;</strong>l&agrave; phi&ecirc;n bản tươi m&aacute;t nhất. Lưu hương được l&acirc;u đến khoảng tr&ecirc;n 7 tiếng, rất th&iacute;ch hợp để ph&aacute;i mạnh sử dụng khi hoạt động ngo&agrave;i trời. sự tự tin, năng động sẽ hấp dẫn mọi tr&aacute;i tim ph&aacute;i đẹp.</p>\r\n\r\n<p><img alt=\"Nước hoa Dior Homme Sport Eau De Toilette 125ml\" height=\"390\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/Nuoc-hoa-Dior-Homme-Sport-Eau-De-Toilette-125ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/09/Nuoc-hoa-Dior-Homme-Sport-Eau-De-Toilette-125ml.png 600w, https://theperfume.vn/wp-content/uploads/2018/09/Nuoc-hoa-Dior-Homme-Sport-Eau-De-Toilette-125ml-300x195.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Dior Homme Sport Eau De Toilette 125ml</strong></em></p>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:</strong>&nbsp;Christian Dior.</li>\r\n	<li><strong>Xuất xứ:</strong>&nbsp;Ph&aacute;p.</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;2017.</li>\r\n	<li><strong>Nh&agrave; s&aacute;ng chế</strong>: Francois Demachy.</li>\r\n	<li><strong>Nh&oacute;m hương</strong>: Gỗ thơm.</li>\r\n	<li><strong>Phong c&aacute;ch</strong>: Nam t&iacute;nh, năng động.</li>\r\n	<li><strong>Thời gian lưu hương</strong>: L&acirc;u &ndash; Từ 7 tới 12 giờ.</li>\r\n	<li><strong>Độ tỏa hương</strong>: Rất xa &ndash; Toả hương trong v&ograve;ng b&aacute;n k&iacute;nh tr&ecirc;n 2 m&eacute;t.</li>\r\n	<li><strong>Hương đầu</strong>: Quả bưởi, Cam đỏ, Chanh v&agrave;ng, L&ecirc;.</li>\r\n	<li><strong>Hương giữa:&nbsp;</strong>Hồng ti&ecirc;u, Nhục đậu khấu, Hoa phong lữ.</li>\r\n	<li><strong>Hương cuối</strong>: Cỏ hương b&agrave;i, Gỗ đ&agrave;n hương.</li>\r\n	<li><strong>Thời điểm sử dụng tốt nhất</strong>: Xu&acirc;n, Hạ, Ng&agrave;y.</li>\r\n	<li><strong>Dung t&iacute;ch</strong>: 50ml, 75ml, 125ml, 200ml.</li>\r\n</ul>\r\n\r\n<h2><strong>Thương hiệu Dior đ&atilde; &ldquo;c&acirc;n&rdquo; giới nước hoa nam ra sao?</strong></h2>\r\n\r\n<p>Kinh đ&ocirc; thời trang cũng l&agrave; kinh đ&ocirc; nước hoa, đ&oacute; ch&iacute;nh l&agrave; nước Ph&aacute;p. M&ugrave;i hương đến từ đất nước l&atilde;ng mạn v&agrave; hoa lệ n&agrave;y trong thế giới&nbsp;<a href=\"https://theperfume.vn/san-pham/nuoc-hoa-nam/\">nước hoa nam</a>&nbsp;nhất định phải kể đến c&aacute;i t&ecirc;n kinh điển Dior. Christian Dior danh tiếng biết đến tr&ecirc;n to&agrave;n thế giới với những d&ograve;ng mỹ phẩm, son, nước hoa cao cấp. Những đấng m&agrave;y r&acirc;u s&agrave;nh điệu, thời trang, chắc hẳn chẳng thể n&agrave;o bỏ lỡ&nbsp;<strong>nước hoa Dior</strong>.</p>\r\n\r\n<p><img alt=\"dior-homme-sport-edt-dung-tich-125ml\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-sport-edt-dung-tich-125ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-sport-edt-dung-tich-125ml.png 600w, https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-sport-edt-dung-tich-125ml-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-sport-edt-dung-tich-125ml-100x100.png 100w, https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-sport-edt-dung-tich-125ml-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-sport-edt-dung-tich-125ml-340x340.png 340w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Dior Homme Sport Eau De Toilette 125ml</strong></em></p>\r\n\r\n<p>Dấn th&acirc;n thị trường với d&ograve;ng Miss Dior đầu ti&ecirc;n được tung ra thị trường v&agrave;o năm 1947. Sau đ&oacute; l&agrave; h&agrave;ng loạt m&ugrave;i hương đ&oacute;ng đinh cho phong c&aacute;ch sang trọng, qu&yacute; ph&aacute;i d&ugrave; l&agrave; d&ograve;ng&nbsp;<a href=\"https://theperfume.vn/\">nước hoa</a>&nbsp;cho nữ hay nam.&nbsp;<strong>Nước hoa Dior Homme Sport Eau De Toilette 125ml&nbsp;</strong>l&agrave; một trong số đ&oacute;, l&agrave; nguồn cảm hứng cho bao ph&aacute;i mạnh.</p>\r\n\r\n<p><img alt=\"\" height=\"400\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/nuoc-hoa-dior-homme-sport-125ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/09/nuoc-hoa-dior-homme-sport-125ml.png 600w, https://theperfume.vn/wp-content/uploads/2018/09/nuoc-hoa-dior-homme-sport-125ml-300x200.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Gắn liền với h&igrave;nh ảnh của Dior Homme Sport l&agrave; Robert Pattinson phong trần, nam t&iacute;nh</strong></em></p>\r\n\r\n<h2>Khẳng định phong c&aacute;ch tự do, ph&oacute;ng kho&aacute;ng với nước hoa Dior Homme Sport</h2>\r\n\r\n<h3><strong>Dior Homme Sport 125ml &ndash; Hương thơm thể thao tr&agrave;n đầy sức sống v&agrave; năng lượng</strong></h3>\r\n\r\n<p><strong>Nước hoa Dior Homme Sport Eau De Toilette</strong>&nbsp;l&agrave; d&ograve;ng nước hoa c&oacute; hương thơm thể thao tươi m&aacute;t v&agrave; năng động, hơn thế nữa với độ lưu hương kh&aacute; l&acirc;u gi&uacute;p cho c&aacute;nh m&agrave;y r&acirc;u tự tin trong c&aacute;c hoạt động ngo&agrave;i trời. Đ&acirc;y l&agrave; một m&ugrave;i hương d&agrave;nh cho ban ng&agrave;y, th&iacute;ch hợp v&agrave;o m&ugrave;a xu&acirc;n v&agrave; m&ugrave;a hạ. Nhưng bạn cũng c&oacute; thể d&ugrave;ng một v&agrave;i giọt&nbsp;<strong>nước hoa Dior Homme Sport&nbsp;50ml&nbsp;</strong>cho c&aacute;c bộ quần &aacute;o trịnh trọng để đi dự những buổi tiệc trong nh&agrave;. Hương thơm sẽ gi&uacute;p cho ph&aacute;i nữ cảm nhận trong bạn vẻ nam t&iacute;nh mạnh mẽ v&agrave; năng động.</p>\r\n\r\n<p><img alt=\"homme-sport-dior-125ml\" height=\"731\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/homme-sport-dior-125ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/09/homme-sport-dior-125ml.png 600w, https://theperfume.vn/wp-content/uploads/2018/09/homme-sport-dior-125ml-300x366.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa nam Dior Homme Sport chứa đựng c&acirc;u chuyện của những nốt hương</strong></em></p>\r\n\r\n<p><strong>Nước hoa Dior Homme Sport EDT 125ml&nbsp;</strong>l&agrave; m&ugrave;i hương tươi m&aacute;t với hương cam đỏ v&agrave; chanh v&agrave;ng nổi bật nhất. Cảm nhận đầu ti&ecirc;n khi bắt nhịp v&agrave;o chai Sport n&agrave;y l&agrave;&nbsp; bưởi, cam đỏ, chanh v&agrave;ng, l&ecirc;. Sau n&eacute;t tươi mới l&agrave; sự nồng thắm của hồng ti&ecirc;u, nhục đậu khấu v&agrave; thơm l&agrave;nh của hoa phong lữ. Lớp hương cuối l&agrave; sự h&ograve;a quyện của cỏ hương b&agrave;i thanh khiết,&nbsp;gỗ đ&agrave;n hương quyến rũ. Người đối diện chỉ cần 1 đến 2 ph&uacute;t l&agrave; c&oacute; thể cảm nhận ngay to&agrave;n bộ m&ugrave;i hương của&nbsp;<strong>nước hoa nam Dior Homme Sport</strong>. Đ&acirc;y l&agrave; một trong những d&ograve;ng&nbsp;<a href=\"https://theperfume.vn/brand/nuoc-hoa-dior/\">nước hoa Dior</a>&nbsp;thể thao được đ&aacute;nh gi&aacute; rất cao tr&ecirc;n thị trường.</p>\r\n\r\n<p><img alt=\"dior-homme-sport-edt-nuoc-hoa-125ml\" height=\"429\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-sport-edt-nuoc-hoa-125ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-sport-edt-nuoc-hoa-125ml.png 600w, https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-sport-edt-nuoc-hoa-125ml-300x215.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Dior Homme Sport d&ograve;ng EDT</strong></em></p>\r\n\r\n<h3><strong>Dior Homme Sport&nbsp;</strong><strong>&ndash; cảm nhận sự tinh khiết v&agrave; đầy tươi mới</strong></h3>\r\n\r\n<p><strong>Nước hoa Dior Homme Sport 125ml&nbsp;</strong>bản mới nhất 2017, tiếp nối th&agrave;nh c&ocirc;ng v&agrave; l&agrave; một trong những d&ograve;ng nước hoa thể thao được rất nhiều c&aacute;c ch&agrave;ng trai thế hệ trẻ lựa chọn. Với hương thơm nổi bật thể hiện sự r&otilde; rệt n&eacute;t năng động của đ&agrave;n &ocirc;ng y&ecirc;u thể thao v&agrave; th&iacute;ch chinh phục thi&ecirc;n nhi&ecirc;n.</p>\r\n\r\n<h3><strong>Thiết kế nước hoa Dior Homme Sport phi&ecirc;n bản 2017 mới nhất</strong></h3>\r\n\r\n<p><img alt=\"\" height=\"390\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/nuoc-hoa-dior-homme-sport-eau-de-toilette-125ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/09/nuoc-hoa-dior-homme-sport-eau-de-toilette-125ml.png 600w, https://theperfume.vn/wp-content/uploads/2018/09/nuoc-hoa-dior-homme-sport-eau-de-toilette-125ml-300x195.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Dior Homme Sport Eau De Toilette 125ml</strong></em></p>\r\n\r\n<p><strong>Nước hoa Dior Homme Sport 125ml&nbsp;</strong>vẫn giữ nguy&ecirc;n thiết kế như phi&ecirc;n bản cũ. Với chai đựng chất liệu thủy tinh trong suốt, thiết kế vu&ocirc;ng vắn. Điểm nhấn l&agrave; phần ống dẫn&nbsp;<a href=\"https://theperfume.vn/san-pham/nuoc-hoa-nam/nuoc-hoa-christian-dior-nam/\">nước hoa Dior nam</a>&nbsp;được thiết kế m&agrave;u đen tuyền l&agrave;m nổi bật vẻ mạnh mẽ, nam t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" height=\"750\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/nuoc-hoa-dior-homme-sport-edt-125ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/09/nuoc-hoa-dior-homme-sport-edt-125ml.png 600w, https://theperfume.vn/wp-content/uploads/2018/09/nuoc-hoa-dior-homme-sport-edt-125ml-300x375.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Dior Homme Sport EDT cận cảnh thiết kế</strong></em></p>\r\n\r\n<p><strong>Dior Homme Sport</strong>&nbsp;l&agrave; c&oacute; nh&oacute;m hương gỗ thơm v&igrave; vậy ho&agrave;n to&agrave;n th&iacute;ch hợp cho bạn sử dụng h&agrave;ng ng&agrave;y để tạo dựng một phong c&aacute;ch cho ri&ecirc;ng m&igrave;nh. Khi sử dụng, bạn h&atilde;y xịt l&ecirc;n khuỷu tay v&agrave; cổ tay để bắt đầu một ng&agrave;y mời đầy năng động v&agrave; tr&agrave;n đầy sinh lực.</p>', '50', NULL, 'Nuoc-hoa-Dior-Homme-Sport-Eau-De-Toilette-125ml-300x19561.png', 1, NULL, NULL),
(43, 1, 6, 3, 5, 'Nước Hoa Dior Homme Parfum 100ml', '3000000', '2400000', '<h2><strong>Nước Hoa Dior Homme Parfum&nbsp;75ml</strong></h2>\r\n\r\n<h3><strong>Nước hoa Dior Homme</strong></h3>\r\n\r\n<p><a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-dior-homme-parfum-75ml/\"><strong>Nước hoa Dior Homme Parfum&nbsp;</strong></a>của thương hiệu Christian Dior l&agrave; d&ograve;ng thiết thế d&agrave;nh ri&ecirc;ng cho nam ra mắt năm 2014 thuộc nh&oacute;m hương da thuộc. Với m&ugrave;i hương quyến rũ, tinh tế,&nbsp;<strong><a href=\"https://theperfume.vn/san-pham/nuoc-hoa-nam/\">nước hoa nam</a>&nbsp;</strong>n&agrave;y&nbsp;d&agrave;nh cho ph&aacute;i mạnh rất ph&ugrave; hợp với những qu&yacute; &ocirc;ng mang trong m&igrave;nh phong c&aacute;ch th&agrave;nh thị, lịch thiệp.</p>\r\n\r\n<p><img alt=\"Nước hoa Dior Homme Parfum\" height=\"390\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/Nuoc-hoa-Dior-Homme-Parfum.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/09/Nuoc-hoa-Dior-Homme-Parfum.png 600w, https://theperfume.vn/wp-content/uploads/2018/09/Nuoc-hoa-Dior-Homme-Parfum-300x195.png 300w\" width=\"600\" /></p>\r\n\r\n<p><strong><em>Nước hoa Dior Homme Parfum 75ml</em></strong></p>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:</strong>&nbsp;Christian Dior.</li>\r\n	<li><strong>Năm ra mắt</strong>: 2014.</li>\r\n	<li><strong>Xuất xứ</strong>: Ph&aacute;p.</li>\r\n	<li><strong>Nh&agrave; s&aacute;ng chế</strong>: Francois Demachy.</li>\r\n	<li><strong>Nh&oacute;m hương</strong>: Da thuộc.</li>\r\n	<li><strong>Phong c&aacute;ch</strong>: Nam t&iacute;nh, quyến rũ, lịch l&atilde;m.</li>\r\n	<li><strong>Giới t&iacute;nh</strong>: Nam, tr&ecirc;n 25 tuổi.</li>\r\n	<li><strong>Hương đầu:&nbsp;</strong>Hoa di&ecirc;n vĩ Tuscany, Gỗ đ&agrave;n hương, Da thuộc, Cam Italia.</li>\r\n	<li><strong>Hương giữa:&nbsp;</strong>&nbsp;Hoa hồng, Da thuộc.</li>\r\n	<li><strong>Hương cuối:&nbsp;</strong>C&acirc;y v&ocirc;ng vang, Gỗ tuyết t&ugrave;ng, Gỗ đ&agrave;n hương, Gỗ trầm hương.</li>\r\n	<li><strong>Thời gian lưu hương</strong>: &nbsp;Rất l&acirc;u, Hơn 12 giờ.</li>\r\n	<li><strong>Độ tỏa hương</strong>: Xa &ndash; trong v&ograve;ng b&aacute;n k&iacute;nh hơn 2m.</li>\r\n	<li><strong>Thời điểm sử dụng tốt nhất</strong>: Thu, Đ&ocirc;ng, Ng&agrave;y, Đ&ecirc;m.</li>\r\n	<li><strong>Dung t&iacute;ch</strong>: 75ml.</li>\r\n</ul>\r\n\r\n<p><img alt=\"dior-homme-parfum-instensty\" height=\"383\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum-instensty.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum-instensty.png 600w, https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum-instensty-300x192.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Dior Homme Parfum với gương mặt đại diện Robert Pattinson</strong></em></p>\r\n\r\n<h2><strong>Đặc điểm của nước hoa Dior Homme Parfum 75ml</strong></h2>\r\n\r\n<h3><strong>Nước hoa Dior Homme Parfum &ndash; Nam t&iacute;nh v&agrave; th&agrave;nh thị</strong></h3>\r\n\r\n<p>Nước hoa&nbsp;<strong>Dior Homme Parfum</strong>&nbsp;l&agrave; một m&ugrave;i hương d&agrave;nh cho ph&aacute;i mạnh với m&ugrave;i hương l&agrave; một tổ hợp những hương liệu kh&aacute;c lạ tạo n&ecirc;n mang lại phong c&aacute;ch th&agrave;nh thị v&agrave; thanh lịch.<strong>&nbsp;Dior Homme Parfum&nbsp;</strong>c&oacute;&nbsp;m&ugrave;i hương nồng n&agrave;n, th&iacute;ch hợp khi d&ugrave;ng ban đ&ecirc;m v&agrave;o m&ugrave;a thu v&agrave; m&ugrave;a đ&ocirc;ng lạnh gi&aacute;. Hương thơm n&agrave;y l&agrave; một sự lựa chọn tuyệt vời d&agrave;nh cho bạn khi tham gia c&aacute;c buổi tiệc quan trọng hay gặp mặt bạn b&egrave; ở c&aacute;c nơi đ&ocirc;ng người như qu&aacute;n bar, club.</p>\r\n\r\n<p><img alt=\"dior-homme-parfum-nuoc-hoa\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum-nuoc-hoa.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum-nuoc-hoa.png 600w, https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum-nuoc-hoa-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum-nuoc-hoa-100x100.png 100w, https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum-nuoc-hoa-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum-nuoc-hoa-340x340.png 340w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Dior Homme Parfum sở hữu m&ugrave;i hương quyến rũ v&agrave; mạnh mẽ</strong></em></p>\r\n\r\n<p>Điều đầu ti&ecirc;n khi trải nghiệm&nbsp;<strong>Dior Homme Parfum</strong>&nbsp;l&agrave; m&ugrave;i hương của sự tổng hợp kh&eacute;o l&eacute;o giữa c&aacute;c nốt hương của gỗ đ&agrave;n hương, da thuộc v&agrave; hoa di&ecirc;n vĩ. Điều đặc biệt Francois Demachy, người chế tạo ra&nbsp;<strong>nước hoa&nbsp;</strong><strong>Dior Homme Parfum</strong>&nbsp;đ&atilde; sử dụng hoa di&ecirc;n vĩ Tuscany. Đ&acirc;y l&agrave; một trong những hương liệu rất qu&yacute; hiếm trong nền c&ocirc;ng nghiệp sản xuất&nbsp;<a href=\"https://theperfume.vn/\">nước hoa</a>. V&igrave; việc chiết được tinh chất của lo&agrave;i hoa n&agrave;y rất mất thời gian v&agrave; kh&oacute; khăn, đ&ograve;i hỏi những người c&oacute; tay nghề cao v&agrave; tỉ mỉ. Tổng thể hương thơm m&agrave; ta c&oacute; thể cảm nhận được l&agrave; một m&ugrave;i hương nồng n&agrave;n, gợi cảm như một lời mời gọi ngọt ng&agrave;o m&agrave; kh&ocirc;ng ai c&oacute; thể chối từ.</p>\r\n\r\n<p><img alt=\"dior-homme-parfum-1\" height=\"450\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum-1.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum-1.png 600w, https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum-1-300x225.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Dior Homme Parfum nồng độ cao</strong></em></p>\r\n\r\n<h3><strong>M</strong><strong>&ugrave;i hương mang lại ấn tượng nồng n&agrave;n, kh&oacute; qu&ecirc;n của nước hoa Dior Homme Parfum</strong></h3>\r\n\r\n<p><strong><a href=\"https://theperfume.vn/brand/nuoc-hoa-dior/\">Nước hoa Dior</a>&nbsp;Homme Parfum</strong>&nbsp;với m&ugrave;i hương thể hiện sự tự tin v&agrave; đẳng cấp mang đến một phong c&aacute;ch th&agrave;nh thị, tươi mới d&agrave;nh cho c&aacute;nh m&agrave;y r&acirc;u. Hơn thế nữa, với điểm mạnh l&agrave; độ lưu hương l&acirc;u tr&ecirc;n 12 giờ đồng hồ, gi&uacute;p bạn tự tin tỏa s&aacute;ng. H&atilde;y sử dụng một v&agrave;i giọt ở b&ecirc;n trong cổ tay v&agrave; hai b&ecirc;n g&aacute;y v&agrave;o buổi những buổi hẹn h&ograve; l&atilde;ng mạn, chắc chắn bạn sẽ hấp dẫn được người phụ nữ đang ngồi b&ecirc;n cạnh bạn.</p>\r\n\r\n<p><img alt=\"dior-homme-parfum\" height=\"449\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum.png 600w, https://theperfume.vn/wp-content/uploads/2018/09/dior-homme-parfum-300x225.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Thiết kế tinh tế đến từ nh&agrave; Dior mang t&ecirc;n Dior Homme Parfum</strong></em></p>\r\n\r\n<p>Với thiết kế kinh điển, quen thuộc cho d&ograve;ng Dior Home. Một lần nữa khẳng định<strong>&nbsp;Dior Homme Parfum</strong>&nbsp;l&agrave; một sự biến tấu ngọt ng&agrave;o v&agrave; l&ocirc;i cuốn.&nbsp;<strong><a href=\"https://theperfume.vn/san-pham/nuoc-hoa-nam/nuoc-hoa-christian-dior-nam/\">Nước hoa Dior nam</a>&nbsp;</strong>Gi&uacute;p bạn định h&igrave;nh một phong c&aacute;ch th&agrave;nh thị v&agrave; nam t&iacute;nh.</p>\r\n\r\n<p><img alt=\"nuoc-hoa-dior-homme-parfum\" height=\"390\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/nuoc-hoa-dior-homme-parfum.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/09/nuoc-hoa-dior-homme-parfum.png 600w, https://theperfume.vn/wp-content/uploads/2018/09/nuoc-hoa-dior-homme-parfum-300x195.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Dior Homme Parfum nổi danh khắp thế giới</strong></em></p>', '50', NULL, 'Nuoc-hoa-Dior-Homme-Parfum-300x19519.png', 1, NULL, NULL);
INSERT INTO `sanpham` (`spMa`, `loaiMa`, `thMa`, `muaMa`, `dtMa`, `spTen`, `spGia`, `spGiaGoc`, `spMoTa`, `spSoLuong`, `spSoLuongDaBan`, `spHinhAnh`, `spTrangThai`, `created_at`, `updated_at`) VALUES
(44, 1, 6, 2, 5, 'Nước Hoa Dior Sauvage Eau De Toilette 100ml', '2990000', '2500000', '<h2><strong>Nước Hoa Dior Sauvage&nbsp;Eau De Toilette</strong></h2>\r\n\r\n<h3><strong>Nước hoa Dior Sauvage</strong></h3>\r\n\r\n<p><strong><a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-dior-sauvage-eau-de-toilette/\">Nước hoa Dior Sauvage Eau De Toilette</a>&nbsp;</strong>của thương hiệu&nbsp;Christian Dior&nbsp;l&agrave; d&ograve;ng thiết thế d&agrave;nh ri&ecirc;ng cho nam, d&agrave;nh cho những ch&agrave;ng trai th&agrave;nh thị thanh lịch, năng động nhưng đầy tự nhi&ecirc;n v&agrave; ph&oacute;ng kho&aacute;ng.&nbsp;<strong>Dior Sauvage</strong>&nbsp;thuộc nh&oacute;m hương cam qu&yacute;t cho m&ugrave;i hương dễ chịu, sảng kho&aacute;i m&aacute;t mẻ.</p>\r\n\r\n<p><img alt=\"Nước hoa Dior Sauvage\" height=\"390\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Nuoc-hoa-Dior-Sauvage-Eau-De-Toilette.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Nuoc-hoa-Dior-Sauvage-Eau-De-Toilette.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/Nuoc-hoa-Dior-Sauvage-Eau-De-Toilette-300x195.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Dior Sauvage Eau De Toilette</strong></em></p>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:&nbsp;</strong>Dior</li>\r\n	<li><strong>Xuất xứ:&nbsp;</strong>Ph&aacute;p</li>\r\n	<li><strong>Thời gian ra mắt:&nbsp;</strong>2015</li>\r\n	<li><strong>D&ograve;ng:&nbsp;</strong>Eau De Toilette (EDT).</li>\r\n	<li><strong>Nh&agrave; s&aacute;ng chế:&nbsp;</strong>Francois Demachy.</li>\r\n	<li><strong>Nh&oacute;m hương:&nbsp;</strong>Hương Cam Qu&yacute;t.</li>\r\n	<li><strong>Thời gian lưu hương:&nbsp;</strong>Rất l&acirc;u &ndash; Tr&ecirc;n 12 giờ.</li>\r\n	<li><strong>Độ tỏa hương:&nbsp;</strong>Xa &ndash; Toả hương trong v&ograve;ng b&aacute;n k&iacute;nh 1 m&eacute;t.</li>\r\n	<li><strong>Phong c&aacute;ch:&nbsp;</strong>Nam t&iacute;nh, tự nhi&ecirc;n, mạnh mẽ.</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Cam Bergamot, hạt ti&ecirc;u.</li>\r\n	<li><strong>Hương giữa:&nbsp;</strong>Hoa phong lữ, oải hương, ti&ecirc;u hồng, ti&ecirc;u tứ xuy&ecirc;n, cỏ vetiver, c&acirc;y patchaoli.</li>\r\n	<li><strong>Hương cuối:&nbsp;</strong>Ambroxan, nhựa labdanum, hương gỗ.</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng</strong>: H&egrave;, Thu, Ng&agrave;y, Đ&ecirc;m.</li>\r\n	<li><strong>Độ tuổi khuy&ecirc;n d&ugrave;ng</strong>: 20.</li>\r\n	<li><strong>Dung t&iacute;ch phổ biến:&nbsp;</strong>60ml, 100ml, 200ml.</li>\r\n</ul>\r\n\r\n<p><img alt=\"Dior Sauvage\" height=\"390\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-dior-sauvage-eau-de-toilette.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-dior-sauvage-eau-de-toilette.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-dior-sauvage-eau-de-toilette-300x195.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Dior Sauvage Eau De Toilette</strong></em></p>\r\n\r\n<h2><strong>Nước Hoa Dior Sauvage hội tụ những ưu điểm nổi trội</strong></h2>\r\n\r\n<h3>Nước hoa Dior Sauvage &ndash; m&ugrave;i hương của thi&ecirc;n nhi&ecirc;n h&ugrave;ng vĩ</h3>\r\n\r\n<p>Nước hoa&nbsp;<strong>Dior Sauvage</strong>&nbsp;lấy cảm hứng từ bầu trời cao trong xanh, c&ugrave;ng với một phong cảnh n&uacute;i đ&aacute; v&agrave; &aacute;nh nắng ch&oacute;i chang nơi xa mạc. Sản phẩm mới n&agrave;y tuy l&agrave; phi&ecirc;n bản n&acirc;ng cấp năm 1996, tuy nhi&ecirc;n vẫn giữ được hương thơm cổ điển đặc trưng m&agrave; m&agrave; nh&oacute;m hương cam qu&yacute;t mang lại. Nếu với c&aacute;c d&ograve;ng&nbsp;<a href=\"https://theperfume.vn/\">nước hoa</a>&nbsp;kh&aacute;c biểu hiện sự mạnh mẽ, b&iacute; ẩn. Th&igrave; d&ograve;ng&nbsp;<strong>nước hoa Dior Sauvage</strong>&nbsp;lại ho&agrave;n to&agrave;n thanh lịch cho người d&ugrave;ng cảm gi&aacute;c thư th&aacute;i, h&ograve;a m&igrave;nh v&agrave;o thi&ecirc;n nhi&ecirc;n dịu d&agrave;ng.</p>\r\n\r\n<p><img alt=\"sauvage-dior\" height=\"401\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/sauvage-dior.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/sauvage-dior.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/sauvage-dior-300x201.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Dior Sauvage quyến rũ trọn vẹn</strong></em></p>\r\n\r\n<p>Khi trải nghiệm, ban đầu&nbsp;<strong>nước hoa&nbsp;</strong><strong>Dior Sauvage&nbsp;Eau De Toilette</strong>&nbsp;mang lại cho ta lớp hương đầu ti&ecirc;n dẫn ta như lạc v&agrave;o kh&ocirc;ng gian của khu vườn nhiệt đới với hương cam bergamot ngọt ng&agrave;o cộng với một ch&uacute;t cay nhẹ nh&agrave;ng nồng ấm. Tiếp đến l&agrave; m&ugrave;i hương của hoa oải hương cho cảm gi&aacute;c ngọt ng&agrave;o, đậm đ&agrave; sắc n&eacute;t. H&ograve;a quyện với m&ugrave;i vị của hoa phong lữ tăng l&ecirc;n sự tươi m&aacute;t tinh tế. Tất cả c&aacute;c th&agrave;nh phần h&ograve;a quyện v&agrave;o với nhau tạo n&ecirc;n một lớp hương cuối c&ugrave;ng ấm &aacute;p nhờ tinh chất nhựa ambroxan l&agrave; một loại xạ hương đặc biệt.</p>\r\n\r\n<p><img alt=\"nuoc-hoa-dior-sauvage-edt\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-dior-sauvage-edt.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-dior-sauvage-edt.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-dior-sauvage-edt-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-dior-sauvage-edt-100x100.png 100w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-dior-sauvage-edt-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-dior-sauvage-edt-340x340.png 340w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Dior Sauvage d&ograve;ng EDT</strong></em></p>\r\n\r\n<p><strong><a href=\"https://theperfume.vn/san-pham/nuoc-hoa-nam/nuoc-hoa-christian-dior-nam/\">Nước hoa Dior nam</a>&nbsp;</strong>n&agrave;y d&ograve;ng EDT nhưng vẫn g&acirc;y ấn tượng cả ở độ lưu hương lẫn tỏa hương mạnh mẽ, d&agrave;i l&acirc;u.</p>\r\n\r\n<h3><strong>Thiết kế đẳng cấp v&agrave; huyền b&iacute;</strong></h3>\r\n\r\n<p><strong>Nước hoa Dior Sauvage</strong>&nbsp;mang cho m&igrave;nh m&ugrave;i hương kh&ocirc;ng thể n&agrave;o nhầm lẫn, ho&agrave;n to&agrave;n ph&ugrave; hợp với một người đ&agrave;n &ocirc;ng c&oacute; phong c&aacute;ch sống ph&oacute;ng kho&aacute;ng, hiện đại. Thuộc nh&oacute;m hương cam qu&yacute;t n&ecirc;n&nbsp;<strong><a href=\"https://theperfume.vn/brand/nuoc-hoa-dior/\">nước hoa Dior</a>&nbsp;</strong>n&agrave;y l&agrave; một lựa chọn ph&ugrave; hợp d&agrave;nh cho những ng&agrave;y m&ugrave;a h&egrave;. Khi sử dụng ph&aacute;i mạnh sẽ cảm nhận hương thơm thanh m&aacute;t v&agrave; trong trẻo tạo cảm hứng để bạn l&ecirc;n kế hoạch cho những buổi vui chơi, kh&aacute;m ph&aacute;.</p>\r\n\r\n<p><img alt=\"dior-sauvage-edt\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/dior-sauvage-edt.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/dior-sauvage-edt.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/dior-sauvage-edt-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2017/03/dior-sauvage-edt-100x100.png 100w, https://theperfume.vn/wp-content/uploads/2017/03/dior-sauvage-edt-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2017/03/dior-sauvage-edt-340x340.png 340w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Thiết kế Dior Sauvage Eau De Toilette</strong></em></p>\r\n\r\n<p>Thiết kế<strong>&nbsp;Dior Sauvage</strong>&nbsp;<strong>2015</strong>&nbsp;đơn giản v&agrave; ấm &aacute;p, tươi m&aacute;t như ch&iacute;nh m&ugrave;i hương nước hoa đem lại cho bạn. Với m&agrave;u đen chủ đạo, nhưng ở phần cuối chai xuất hiện&nbsp;những n&eacute;t chấm ph&aacute; của m&agrave;u trắng biểu hiện một đường ch&acirc;n trời v&ocirc; tận. Nắp chai&nbsp;<strong><a href=\"https://theperfume.vn/san-pham/nuoc-hoa-nam/\">nước hoa nam</a>&nbsp;</strong>được thiết kế những đường cong v&ecirc;nh mang t&iacute;nh chất đối xứng. Biểu hiện chất nam t&iacute;nh &nbsp;nhưng đầy tự nhi&ecirc;n v&agrave; ấm &aacute;p của ph&aacute;i mạnh.</p>\r\n\r\n<p><img alt=\"Dior Sauvage\" height=\"390\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-dior-sauvage-eau-de-toilette.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-dior-sauvage-eau-de-toilette.png 600w, https://theperfume.vn/wp-content/uploads/2017/03/nuoc-hoa-dior-sauvage-eau-de-toilette-300x195.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Dior Sauvage Eau De Toilette</strong></em></p>', '50', NULL, 'Nuoc-hoa-Dior-Sauvage-Eau-De-Toilette-300x19524.png', 1, NULL, NULL),
(45, 2, 6, 1, 4, 'Nước hoa Miss Dior Eau De Toilette 50ml', '2000000', '1500000', '<h2>Nước hoa Miss Dior Eau De Toilette&nbsp;50ml</h2>\r\n\r\n<h3>Nước hoa Miss Dior</h3>\r\n\r\n<p>&ldquo;Đứa con tinh thần&rdquo; của nh&agrave; s&aacute;ng tạo m&ugrave;i hương đại t&agrave;i Francois Demachy n&agrave;y &ldquo;gia nhập&rdquo; trong đại gia đ&igrave;nh Miss Dior v&agrave;o năm 2013.&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-miss-dior-eau-de-toilette-50ml/\"><strong>Nước hoa Miss Dior Eau De Toilette 50ml</strong></a>&nbsp;như một dấu ấn của m&ugrave;i hương l&atilde;ng mạn, nồng thắm v&agrave; hiện đại. Phi&ecirc;n bản mới mẻ của &ldquo;hoa hậu Dior&rdquo; n&agrave;y h&ograve;a quyện hương hoa hồng thơ mộng với tinh dầu hoa cam tươi m&aacute;t c&ugrave;ng hoắc hương mạnh mẽ, nồng n&agrave;n. Hương thơm m&atilde;nh liệt c&ugrave;ng thiết kế tinh tế, sang chảnh, nước hoa Miss Dior EDT xứng danh &ldquo;n&agrave;ng thơ&rdquo; kiều diễm trong BST&nbsp;<a href=\"https://theperfume.vn/\"><strong>nước hoa</strong></a>&nbsp;của Dior.</p>\r\n\r\n<p><img alt=\"Nước hoa MISS DIOR EAU DE TOILETTE 50ml\" height=\"557\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/08/N%C6%B0%E1%BB%9Bc-hoa-MISS-DIOR-EAU-DE-TOILETTE-50ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/08/Nước-hoa-MISS-DIOR-EAU-DE-TOILETTE-50ml.png 600w, https://theperfume.vn/wp-content/uploads/2018/08/Nước-hoa-MISS-DIOR-EAU-DE-TOILETTE-50ml-300x279.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Miss Dior Eau De Toilette được gọi l&agrave; &ldquo;hoa hậu Dior&rdquo; bởi độ cuốn h&uacute;t to&agrave;n diện</strong></em></p>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:&nbsp;</strong>Dior</li>\r\n	<li><strong>Xuất xứ:&nbsp;</strong>Ph&aacute;p</li>\r\n	<li><strong>Nh&agrave; s&aacute;ng tạo:&nbsp;</strong>Francois Demachy</li>\r\n	<li><strong>Thời gian ra mắt:&nbsp;</strong>2013</li>\r\n	<li><strong>D&ograve;ng:&nbsp;</strong>Miss Dior Eau De Toilette (EDT)</li>\r\n	<li><strong>Nh&oacute;m hương:&nbsp;</strong>Hương thơm hoa cỏ đảo Chypre</li>\r\n	<li><strong>Thời gian lưu hương:&nbsp;</strong>Tạm ổn &ndash; Từ 3 đến 6 giờ</li>\r\n	<li><strong>Độ tỏa hương:&nbsp;</strong>Gần &ndash; Tỏa hương trong v&ograve;ng một c&aacute;nh tay</li>\r\n	<li><strong>Phong c&aacute;ch:&nbsp;</strong>Quyến rũ, duy&ecirc;n d&aacute;ng.</li>\r\n	<li><strong>Hương đầu:&nbsp;</strong>Dầu hoa cam Tunisia, cam đỏ.</li>\r\n	<li><strong>Hương giữa:&nbsp;</strong>hoa hồng Bulgari, hoa hồng Thổ Nhĩ Kỳ, hoa hồng Đan Mạch</li>\r\n	<li><strong>Hương cuối:&nbsp;</strong>Hoắc hương Indonesa.</li>\r\n</ul>\r\n\r\n<h2>Điểm qua v&agrave;i n&eacute;t về thương hiệu Dior &ndash; &ldquo;đế chế&rdquo; nước hoa đến từ Ph&aacute;p</h2>\r\n\r\n<p>Từ khi ra mắt đầu thập ni&ecirc;n 40 thế kỷ XX đến nay, Christian Dior đ&atilde; tạo dựng &ldquo;đế chế&rdquo; khổng lồ của m&igrave;nh bằng một loạt những sản phẩm danh tiếng, vượt trội mang vẻ đẹp ho&agrave;n mỹ, đẳng cấp. C&ugrave;ng với Chanel, Burberry, Gucci,&nbsp;<a href=\"https://theperfume.vn/brand/nuoc-hoa-dior/\"><strong>nước hoa Dior</strong></a>&nbsp;trở th&agrave;nh niềm kh&aacute;t khao, mơ ước của mọi c&ocirc; g&aacute;i.</p>\r\n\r\n<p><img alt=\"miss-dior-50ml\" height=\"566\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/08/miss-dior-50ml.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/08/miss-dior-50ml.jpg 600w, https://theperfume.vn/wp-content/uploads/2018/08/miss-dior-50ml-300x283.jpg 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>N&oacute;i về Miss Dior</strong></em></p>\r\n\r\n<p>Từng khuynh đảo thị trường với chai nước hoa Miss Dior từ năm 1947, Dior kh&ocirc;ng ngừng khẳng định lời hứa về sự&nbsp;<em>Thượng hạng, độc nhất v&agrave; trường tồn qua thời gian&nbsp;</em>th&ocirc;ng qua từng &ldquo;si&ecirc;u phẩm&rdquo; của m&igrave;nh.&nbsp;<a href=\"https://theperfume.vn/san-pham/nuoc-hoa-nu/nuoc-hoa-christian-dior-nu/\"><strong>Nước hoa Christian Dior nữ</strong></a>&nbsp;tự bao giờ trở th&agrave;nh &ldquo;bảo bối quyến rũ&rdquo; của triệu triệu phụ nữ khắp thế giới. Đặc biệt l&agrave; Miss Dior.</p>\r\n\r\n<p><img alt=\"nuoc-hoa-nu-miss-dior-50ml\" height=\"390\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-nu-miss-dior-50ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-nu-miss-dior-50ml.png 600w, https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-nu-miss-dior-50ml-300x195.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Miss Dior đại diện cho t&igrave;nh y&ecirc;u v&agrave; kh&aacute;t vọng của ph&aacute;i đẹp</strong></em></p>\r\n\r\n<p>Miss Dior c&oacute; đến 4 d&ograve;ng l&agrave;: Blooming Bouquet, Absolutely Blooming, Eau De Parfum v&agrave;&nbsp;<strong>Miss Dior Eau De Toilette&nbsp;50ml&nbsp;</strong>n&agrave;y.</p>\r\n\r\n<h2>Gọi t&ecirc;n những l&yacute; do khiến ph&aacute;i đẹp &ldquo;ph&aacute;t cuồng&rdquo; v&igrave; nước hoa Miss Dior Eau De Toilette&nbsp;50ml</h2>\r\n\r\n<h3>Nước hoa Miss Dior EDT mang m&ugrave;i hương l&atilde;ng mạn, thanh lịch</h3>\r\n\r\n<p>Nốt dạo đầu của&nbsp;<strong>nước hoa Miss Dior Eau De Toilette 50ml&nbsp;</strong>n&agrave;y l&agrave; sự tươi mới của tinh dầu hoa cam Tunisia. Cảm gi&aacute;c thanh dịu, thu h&uacute;t ấy sẽ khiến bạn ch&igrave;m đắm trong v&agrave;i ph&uacute;t gi&acirc;y trước khi đến với nốt hương giữa. Đ&uacute;ng l&agrave; &ldquo;heart notes&rdquo; với m&ugrave;i hương như chạm đến cả tr&aacute;i tim, sự l&atilde;ng mạn, nồng n&agrave;n từ hoa hồng Thổ Nhĩ Kỳ v&agrave; hồng Bulgari sẽ b&ugrave;ng nổ v&agrave; &ldquo;gắn b&oacute;&rdquo; b&ecirc;n bạn suốt khoảng thời gian l&acirc;u d&agrave;i. Đọng lại hương cuối, bản nhạc Miss Dior kh&eacute;p lại với sự nồng n&agrave;n của c&acirc;y hoắc hương Indonesia.</p>\r\n\r\n<p><img alt=\"nuoc-hoa-miss-dior-eau-de-toilette-50ml\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-miss-dior-eau-de-toilette-50ml.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-miss-dior-eau-de-toilette-50ml.jpg 600w, https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-miss-dior-eau-de-toilette-50ml-200x200.jpg 200w, https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-miss-dior-eau-de-toilette-50ml-100x100.jpg 100w, https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-miss-dior-eau-de-toilette-50ml-300x300.jpg 300w, https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-miss-dior-eau-de-toilette-50ml-340x340.jpg 340w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Miss Dior EDT lan tỏa hương thơm quyến rũ</strong></em></p>\r\n\r\n<p><strong>Nước hoa Miss Dior Eau De Toilette 50ml&nbsp;</strong>l&agrave; loại c&oacute; nồng độ Eau De Toilette (EDT). Đ&acirc;y l&agrave; d&ograve;ng nước hoa mang h&agrave;m lượng tinh dầu trung b&igrave;nh bởi thế hương thơm d&ugrave; quyến rũ nhưng lại nhẹ nh&agrave;ng v&agrave; bền m&ugrave;i tương đối. D&ograve;ng&nbsp;<a href=\"https://theperfume.vn/san-pham/nuoc-hoa-nu/\"><strong>nước hoa&nbsp;</strong><strong>nữ&nbsp;</strong></a>sinh ra l&agrave; để &ldquo;tỏa hương&rdquo; trong những ng&agrave;y thu hay xu&acirc;n tiết trời dễ chịu thế n&agrave;y.&nbsp;<strong>Miss Dior Eau De Toilette&nbsp;</strong>d&ugrave; ng&agrave;y hay đ&ecirc;m vẫn c&oacute; thể d&ugrave;ng được.</p>\r\n\r\n<h3>Thiết kế &ldquo;tiểu thư ki&ecirc;u kỳ&rdquo; của nước hoa Miss Dior Eau De Toilette&nbsp;50ml</h3>\r\n\r\n<p><img alt=\"nuoc-hoa-nu-miss-dior-eau-de-toilette-50ml\" height=\"527\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-nu-miss-dior-eau-de-toilette-50ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-nu-miss-dior-eau-de-toilette-50ml.png 600w, https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-nu-miss-dior-eau-de-toilette-50ml-300x264.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước hoa Miss Dior Eau De Toilette phi&ecirc;n bản 50ml</strong></em></p>\r\n\r\n<p>C&ugrave;ng với m&ugrave;i hương lay động đến mức h&iacute;t h&agrave; một lần l&agrave; nhớ m&atilde;i th&igrave;&nbsp;<strong>Miss Dior Eau De Toilette 50ml&nbsp;</strong>c&ograve;n sở hữu thiết kế ấn tượng với những điểm nhấn tinh tế. T&iacute;n đồ m&ecirc; m&ugrave;i hương trong chặng đường t&igrave;m kiếm lọ nước hoa l&yacute; tưởng của đời m&igrave;nh, chẳng thể n&agrave;o &ldquo;ng&oacute; lơ&rdquo; trước&nbsp;<strong>nước hoa Dior nữ</strong>&nbsp;n&agrave;y. Chuẩn mực thiết kế của một &ldquo;n&agrave;ng hậu&rdquo;, được v&iacute; như một n&agrave;ng &ldquo;tiểu thư sang chảnh&rdquo;, Miss Dior EDT ẩn chứa sau vỏ ngo&agrave;i vu&ocirc;ng vắn, chắc chắn l&agrave; lớp nước hồng điệu đ&agrave;, quyến rũ. Như th&ocirc;ng điệp của Dior gửi gắm đến thế giới về một m&ugrave;i hương như một c&ocirc; g&aacute;i đắm ch&igrave;m trong t&igrave;nh y&ecirc;u, vừa m&atilde;nh liệt, mạnh mẽ nhưng kh&ocirc;ng hề yếu đuối.</p>\r\n\r\n<p><img alt=\"nuoc-hoa-miss-dior-eau-de-toilette-50ml\" height=\"522\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-miss-dior-eau-de-toilette-50ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-miss-dior-eau-de-toilette-50ml.png 600w, https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-miss-dior-eau-de-toilette-50ml-300x261.png 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Hộp ngo&agrave;i của Miss Dior Eau De Toilette</strong></em></p>\r\n\r\n<p>So với những phi&ecirc;n bản Miss Dior kh&aacute;c th&igrave;&nbsp;<strong>nước hoa Miss Dior Eau De Toilette 50ml&nbsp;</strong>c&oacute; độ &ldquo;thon gọn&rdquo; hơn bởi vu&ocirc;ng vấn v&agrave; d&agrave;i chiều cao. Điểm nhấn của &ldquo;n&agrave;ng ấy&rdquo; th&igrave; vẫn l&agrave; chiếc nơ bạc điệu đ&agrave; &ndash; dấu hiệu &ldquo;nhận diện&rdquo; của d&ograve;ng Miss Dior.</p>\r\n\r\n<p><strong>Miss Dior EDT</strong>&nbsp;mang n&eacute;t đẹp trẻ trung, mới mẻ v&agrave; l&atilde;ng mạn. Từng lớp hương thơm mở ra c&oacute; sức h&uacute;t ri&ecirc;ng m&agrave; lại cũng c&oacute; độ h&ograve;a quyện hấp dẫn lạ kỳ. Hết thảy để tạo n&ecirc;n sự tinh tế, cảm x&uacute;c của một m&ugrave;i hương được đ&aacute;nh gi&aacute; l&agrave; xuất sắc nhất thế giới.</p>', '50', NULL, 'Nước-hoa-MISS-DIOR-EAU-DE-TOILETTE-50ml-300x27951.png', 1, NULL, NULL),
(46, 1, 8, 4, 5, 'Nước hoa Tom Ford Tobacco Oud Eau De Parfum 100ml', '6400000', '5500000', '<h2><strong>Nước hoa Tom Ford Tobacco Oud<strong>&nbsp;</strong>Eau De Parfum 100ml</strong></h2>\r\n\r\n<h3><strong>Tom Ford Tobacco Oud</strong></h3>\r\n\r\n<p><a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-tom-ford-tobacco-oud-eau-de-parfum-100ml/\"><strong>Nước hoa Tom Ford Tobacco Oud 100ml</strong></a>&nbsp;l&agrave; sản phẩm d&agrave;nh tặng cho ph&aacute;i mạnh v&agrave; ph&aacute;i đẹp sử dụng. Sản phẩm sở hữu hương thơm gỗ của n&ecirc;n trầm hơn v&agrave; trưởng th&agrave;nh hơn nhiều so với Tobacco Vanille.&nbsp;<strong>Tobacco Oud 100ml</strong>&nbsp;sử dụng những nốt hương đắt gi&aacute; bậc nhất trong số những chai nước hoa của Tom Ford. Hương thơm ấm &aacute;p, ngọt ng&agrave;o mang đến sự sang trọng v&agrave; thu h&uacute;t cho người sử dụng.</p>\r\n\r\n<p><img alt=\"Tobacco Oud 100ml\" height=\"660\" sizes=\"(max-width: 800px) 100vw, 800px\" src=\"https://theperfume.vn/wp-content/uploads/2021/01/Tobacco-Oud-100ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/01/Tobacco-Oud-100ml.png 800w, https://theperfume.vn/wp-content/uploads/2021/01/Tobacco-Oud-100ml-768x634.png 768w, https://theperfume.vn/wp-content/uploads/2021/01/Tobacco-Oud-100ml-300x248.png 300w\" width=\"800\" /></p>\r\n\r\n<p><em>Nước hoa Tom Ford Tobacco Oud&nbsp;Eau De Parfum</em></p>\r\n\r\n<h3><strong>Đặc điểm của nước hoa Tom Ford Tobacco Oud</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:</strong>&nbsp;Tom Ford</li>\r\n	<li><strong>Xuất xứ:</strong>&nbsp;Mỹ &ndash; USA</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;2013</li>\r\n	<li><strong>Nh&agrave; s&aacute;ng tạo:</strong>&nbsp;Olivier Gillotin</li>\r\n	<li><strong>Nh&oacute;m nước hoa:</strong>&nbsp;Woody Spicy &ndash; Nh&oacute;m hương gỗ thơm cay nống</li>\r\n	<li><strong>Độ toả hương:&nbsp;</strong>Gần, Trong v&ograve;ng một c&aacute;nh tay</li>\r\n	<li><strong>Độ lưu hương:</strong>&nbsp;L&acirc;u, Từ 7 đến 12 tiếng</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;Sang trọng, Thu h&uacute;t, Nổi bật</li>\r\n	<li><strong>Hương đầu:&nbsp;</strong>Rượu Whiskey</li>\r\n	<li><strong>Hương giữa:</strong>&nbsp;Hương quế, Gia vị cay, Rau m&ugrave;i</li>\r\n	<li><strong>Hương cuối:&nbsp;</strong>Trầm hương, C&acirc;y hoắc hương, Gỗ đ&agrave;n hương, Thuốc l&aacute;, Hương Benzoin, Gỗ tuyết t&ugrave;ng, Hương nhang, Hương Vanilla</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng:</strong>&nbsp;M&ugrave;a thu &ndash; M&ugrave;a đ&ocirc;ng, Ban Đ&ecirc;m</li>\r\n	<li><strong>Dung t&iacute;ch phổ biến:&nbsp;</strong>50ml, 100ml, 250ml</li>\r\n</ul>\r\n\r\n<h3><strong>V&agrave;i n&eacute;t về thương hiệu nước hoa Tom Ford</strong></h3>\r\n\r\n<p>Tom Ford l&agrave; thương hiệu do nh&agrave; thiết kế Thomas Carlyle Tom Ford s&aacute;ng tạo v&agrave; th&agrave;nh lập năm 2005. Nhắc đến Tom Ford người ta thường nhắc đến l&agrave; thương hiệu đ&igrave;nh đ&aacute;m s&aacute;nh ngang với Dior, Gucci hay YSL,&hellip; Thương hiệu đ&atilde; cho ra đời cơ số những BST thời trang cao cấp, c&ugrave;ng c&aacute;c phụ kiện như l&agrave; k&iacute;nh mắt, t&uacute;i x&aacute;ch,&hellip; Nổi bật trong đ&oacute; phải kể đến d&ograve;ng mỹ phẩm của Tom Ford, từ đồ trang điểm, dưỡng da cho đến&nbsp;<a href=\"https://theperfume.vn/brand/nuoc-hoa-tom-ford/\"><strong>nước hoa Tom Ford</strong></a>. Mỗi một d&ograve;ng sản phẩm đều đem đến những n&eacute;t c&aacute; t&iacute;nh, đương đại rất ri&ecirc;ng của thương hiệu.</p>\r\n\r\n<p><img alt=\"Tom Ford 3\" height=\"294\" sizes=\"(max-width: 869px) 100vw, 869px\" src=\"https://theperfume.vn/wp-content/uploads/2021/01/Tom-Ford-3.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/01/Tom-Ford-3.jpg 869w, https://theperfume.vn/wp-content/uploads/2021/01/Tom-Ford-3-800x271.jpg 800w, https://theperfume.vn/wp-content/uploads/2021/01/Tom-Ford-3-768x260.jpg 768w, https://theperfume.vn/wp-content/uploads/2021/01/Tom-Ford-3-300x101.jpg 300w\" width=\"869\" /></p>\r\n\r\n<p><em>Tom Ford Tobacco Oud&nbsp;Eau De Parfum</em></p>\r\n\r\n<p>Đến với c&aacute;c d&ograve;ng nước hoa của Tom Ford, thương hiệu n&agrave;y sở hữu sự quyến rũ, thanh lịch v&agrave; đương dại. T&iacute;nh đến nay đ&atilde; c&oacute; hơn 70 chai nước hoa bao gồm nước hoa nữ Tom Ford,<strong>&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa-nam/tom-ford-men/\">nước hoa nam Tom Ford</a>&nbsp;</strong>v&agrave; cả d&ograve;ng nước hoa Unisex. Hương thơm cao cấp rất biết c&aacute;ch chiều l&ograve;ng ph&aacute;i đẹp v&agrave; ph&aacute;i mạnh.</p>\r\n\r\n<h2><strong>Nước hoa Tom Ford&nbsp;<strong>Tobacco Oud 100ml</strong></strong><strong>&nbsp;&ndash; N&eacute;t trưởng th&agrave;nh, sang trọng của l&agrave;n kh&oacute;i ấm &aacute;p</strong></h2>\r\n\r\n<h3><strong>Tom Ford&nbsp;<strong>Tobacco Oud</strong></strong><strong>&nbsp;</strong><strong>Eau De Parfum</strong></h3>\r\n\r\n<p>Năm 2013 BST Oud Collection cho ra mắt d&ograve;ng nước hoa mang t&ecirc;n<strong>&nbsp;Tom Ford Tobacco Oud 100ml.</strong>&nbsp;Đ&acirc;y l&agrave; một trong những chai nước hoa đắt gi&aacute; v&agrave; ho&agrave;n hảo nhất của Tom Ford. Sản phẩm mang đến một phi&ecirc;n bản Tobacco Vanille trầm hơn, quyến rũ hơn với những nốt hương gỗ được th&ecirc;m v&agrave;o.&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-tom-ford-tobacco-oud-eau-de-parfum/\"><strong>Nước hoa Tom Ford Tobacco Oud</strong></a>&nbsp;sử dụng những nốt hương đắt gi&aacute;, xa xỉ đến từ nh&oacute;m hương gỗ thơm cay nồng. Hương thơm tỏa ra sự đẳng cấp, sang trọng v&agrave; nổi bật cho những người sử dụng ch&uacute;ng.</p>\r\n\r\n<p><img alt=\"to-m-fo-rd-tobac-co-ou-d-100ml\" height=\"361\" sizes=\"(max-width: 960px) 100vw, 960px\" src=\"https://theperfume.vn/wp-content/uploads/2021/01/to-m-fo-rd-tobac-co-ou-d-100ml.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/01/to-m-fo-rd-tobac-co-ou-d-100ml.jpg 960w, https://theperfume.vn/wp-content/uploads/2021/01/to-m-fo-rd-tobac-co-ou-d-100ml-800x301.jpg 800w, https://theperfume.vn/wp-content/uploads/2021/01/to-m-fo-rd-tobac-co-ou-d-100ml-768x289.jpg 768w, https://theperfume.vn/wp-content/uploads/2021/01/to-m-fo-rd-tobac-co-ou-d-100ml-300x113.jpg 300w\" width=\"960\" /></p>\r\n\r\n<p><em>Hương thơm ngọt ng&agrave;o, ấm &aacute;p của Tom Ford Tobacco Oud&nbsp;EDP</em></p>\r\n\r\n<h3><strong>Hương thơm ngọt ng&agrave;o, ấm &aacute;p của Tom Ford Tobacco Oud<strong>&nbsp;</strong>EDP</strong></h3>\r\n\r\n<p><strong><strong>Tobacco Oud 100ml&nbsp;</strong></strong>mở đầu bằng một ly rượu Whiskey thơm lừng, mang sự cổ điển của một nền tảng l&acirc;u đời. Trong ly rượu gợi cảm n&agrave;y &aacute;nh l&ecirc;n trong đ&oacute; hương vị mạnh mẽ của hương quế v&agrave; gia vị cay. Một hớp rượu cay nồng, một hơi kh&oacute;i thuốc hảo hạng tạo n&ecirc;n một c&ocirc;ng thức đầy thu h&uacute;t v&agrave; m&ecirc; hoặc. Nốt hương cuối l&agrave; tổ hợp của một chuỗi hương gỗ ấm &aacute;p, trưởng th&agrave;nh. Tưởng chừng sự trầm lắng của gỗ tạo n&ecirc;n sự gi&agrave; cỗi những đ&acirc;u đ&oacute; lại ẩn hiện sự ngọt ng&agrave;o của Vanilla. C&aacute;c nốt hương xoay vần, ho&agrave;n quyện v&agrave;o nhau tạo n&ecirc;n hương thơm đầy sự cuốn h&uacute;t, hấp dẫn.</p>\r\n\r\n<p><img alt=\"model-of-tobac-co-100ml\" height=\"1124\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://theperfume.vn/wp-content/uploads/2021/01/model-of-tobac-co-100ml.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/01/model-of-tobac-co-100ml.jpg 900w, https://theperfume.vn/wp-content/uploads/2021/01/model-of-tobac-co-100ml-641x800.jpg 641w, https://theperfume.vn/wp-content/uploads/2021/01/model-of-tobac-co-100ml-768x959.jpg 768w, https://theperfume.vn/wp-content/uploads/2021/01/model-of-tobac-co-100ml-300x375.jpg 300w\" width=\"900\" /></p>\r\n\r\n<p><em>Tom Ford Tobacco Oud &ndash; N&eacute;t trưởng th&agrave;nh, sang trọng của l&agrave;n kh&oacute;i ấm &aacute;p</em></p>\r\n\r\n<p>Để thể hiện sự đẳng cấp, sang trọng của bản th&acirc;n<strong>&nbsp;Tom Ford Tobacco Oud 100ml</strong>&nbsp;sẽ l&agrave; lựa chọn v&ocirc; c&ugrave;ng hợp l&iacute;. Hương thơm ấm &aacute;p v&agrave; trầm bổng khiến bạn như biến th&agrave;nh những qu&yacute; &ocirc;ng, qu&yacute; c&ocirc; thanh lịch. D&ugrave; trong&nbsp;<a href=\"http://theperfume.vn/\"><strong>thế giới nước hoa</strong></a>&nbsp;c&oacute; đến h&agrave;ng ng&agrave;n hương thơm c&aacute; t&iacute;nh c&ugrave;ng phong c&aacute;ch ri&ecirc;ng biệt. Nhưng đến với&nbsp;<strong>Tobacco Oud 100ml,&nbsp;</strong>mỗi lần bạn sử dụng đều l&agrave; mỗi lần bạn bị cho&aacute;ng ngợp bởi hương thơm độc đ&aacute;o.</p>\r\n\r\n<p><img alt=\"Tom Ford Tobacco Oud EDP 100ml\" height=\"766\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://theperfume.vn/wp-content/uploads/2021/01/Tom-Ford-Tobacco-Oud-EDP-100ml.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/01/Tom-Ford-Tobacco-Oud-EDP-100ml.jpg 900w, https://theperfume.vn/wp-content/uploads/2021/01/Tom-Ford-Tobacco-Oud-EDP-100ml-800x681.jpg 800w, https://theperfume.vn/wp-content/uploads/2021/01/Tom-Ford-Tobacco-Oud-EDP-100ml-768x654.jpg 768w, https://theperfume.vn/wp-content/uploads/2021/01/Tom-Ford-Tobacco-Oud-EDP-100ml-300x255.jpg 300w\" width=\"900\" /></p>\r\n\r\n<p><em>Tom Ford Tobacco Oud Eau De Parfum</em></p>\r\n\r\n<h3><strong>Thiết kế nước hoa Tom Ford Tobacco Oud 100ml độc đ&aacute;o, đẳng cấp</strong></h3>\r\n\r\n<p><strong>Tom Ford&nbsp;</strong><strong>Tobacco Oud 100ml</strong>&nbsp;vẫn sở hữu thiết kế cổ điển v&agrave; mạnh mẽ Tom Ford. Chai&nbsp;<strong><a href=\"https://theperfume.vn/nuoc-hoa/\">nước hoa</a></strong>&nbsp;vu&ocirc;ng vức trong h&igrave;nh trụ nhật được phủ m&agrave;u đen b&oacute;ng đ&ecirc;m. Kết hợp với chai thủy tinh lại b&oacute;ng bẩy l&agrave;m nổi bật t&ecirc;n v&agrave; logo của h&atilde;ng.&nbsp;<strong>Tom Ford&nbsp;<strong>Tobacco Oud EDP</strong></strong>&nbsp;đ&atilde; tạo n&ecirc;n sự sang trọng, độc đ&aacute;o cho những người muốn thể hiện đẳng cấp của m&igrave;nh.</p>\r\n\r\n<p><img alt=\"tom-ford-tobacco-oud-100ml\" height=\"602\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://theperfume.vn/wp-content/uploads/2021/01/tom-ford-tobacco-oud-100ml-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/01/tom-ford-tobacco-oud-100ml-1.jpg 900w, https://theperfume.vn/wp-content/uploads/2021/01/tom-ford-tobacco-oud-100ml-1-800x535.jpg 800w, https://theperfume.vn/wp-content/uploads/2021/01/tom-ford-tobacco-oud-100ml-1-768x514.jpg 768w, https://theperfume.vn/wp-content/uploads/2021/01/tom-ford-tobacco-oud-100ml-1-300x201.jpg 300w\" width=\"900\" /></p>\r\n\r\n<p><em>Thiết kế nước hoa Tom Ford Tobacco Oud độc đ&aacute;o, đẳng cấp</em></p>', '50', NULL, 'Nuoc-hoa-Tom-Ford-Tobacco-Oud-100ml-300x29066.png', 1, NULL, NULL),
(47, 2, 8, 4, 5, 'Nước hoa Tom Ford Black Orchid Eau De Parfum 100ml', '3200000', '2600000', '<h2><strong>Nước Hoa Tom Ford Black Orchid&nbsp;Eau De Parfum</strong></h2>\r\n\r\n<h3>Tom Ford Black Orchid</h3>\r\n\r\n<p>Nước hoa&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/tom-ford-black-orchid/\"><strong>Tom Ford Black Orchid</strong></a><strong>&nbsp;</strong>của thương hiệu Tom Ford mang hương vị cay nồng th&iacute;ch hợp với những ng&agrave;y m&ugrave;a đ&ocirc;ng lạnh lẽo, m&ugrave;i hương ẩn chứa sự b&iacute; ẩn v&ocirc; tận mang đến cho người d&ugrave;ng cảm gi&aacute;c tự tin v&agrave; mạnh mẽ.&nbsp;Tom Ford Black Orchid l&agrave;&nbsp;sự lựa chọn ho&agrave;n hảo d&agrave;nh cho c&aacute;c qu&yacute; c&ocirc; c&oacute; phong c&aacute;ch thời thượng v&agrave; gợi cảm, l&agrave; một trong những chai nước được người d&ugrave;ng đ&aacute;nh gi&aacute; c&oacute; m&ugrave;i hương tốt nhất hiện nay.</p>\r\n\r\n<p><img alt=\"Tom-Ford-Black-Orchid-1\" height=\"338\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/07/Tom-Ford-Black-Orchid-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/07/Tom-Ford-Black-Orchid-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/07/Tom-Ford-Black-Orchid-1-300x169.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3><strong>Đặc điểm của nước hoa Tom Ford Black Orchid&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:&nbsp;</strong>Tom Ford</li>\r\n	<li><strong>Nh&oacute;m hương:&nbsp;</strong>Hương hoa cỏ phương Đ&ocirc;ng</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;2006</li>\r\n	<li><strong>Nh&agrave; s&aacute;ng tạo:</strong>&nbsp;Givaudan</li>\r\n	<li><strong>Độ lưu hương:</strong>&nbsp;Rất l&acirc;u, trung b&igrave;nh từ 10 đến 12 giờ&nbsp;</li>\r\n	<li><strong>Độ toả hương:</strong>&nbsp;Rất xa, với b&aacute;n k&iacute;nh từ 1 đến 2 m&eacute;t&nbsp;</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng:</strong>&nbsp;M&ugrave;a thu &ndash; đ&ocirc;ng, ng&agrave;y &ndash; đ&ecirc;m&nbsp;</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;Hiện đại, B&iacute; ẩn, Quyến rũ&nbsp;</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Hoa nh&agrave;i,&nbsp;Hoa sơn chi,&nbsp;Quả qu&yacute;t hồng,&nbsp;Quả l&yacute; chua đen, Ngọc lan t&acirc;y,&nbsp;Cam Bergamot,&nbsp;chanh v&agrave;ng Amalfi,&nbsp;Nấm cục</li>\r\n	<li><strong>Hương giữa:</strong>&nbsp;Gia vị,&nbsp;Hương tr&aacute;i c&acirc;y,&nbsp;Hoa sen,&nbsp;Hoa phong lan</li>\r\n	<li><strong>Hương cuối:</strong>&nbsp;Cỏ hương b&agrave;i,&nbsp;Gỗ đ&agrave;n hương, Hoắc hương,&nbsp;Hổ ph&aacute;ch,&nbsp;Nhang,&nbsp;Vani,&nbsp;S&ocirc; c&ocirc; la M&ecirc;xic&ocirc;</li>\r\n	<li><strong>Dung t&iacute;ch phổ biến:&nbsp;</strong>30ml,&nbsp;50ml, 100ml</li>\r\n</ul>\r\n\r\n<p><img alt=\"Tom-Ford-Black-Orchid-2-800x533\" height=\"400\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/07/Tom-Ford-Black-Orchid-2-800x533-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/07/Tom-Ford-Black-Orchid-2-800x533-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/07/Tom-Ford-Black-Orchid-2-800x533-1-300x200.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h2><strong>Ưu điểm của nước hoa&nbsp;<strong>Tom Ford Black Orchid</strong></strong></h2>\r\n\r\n<h3><strong>Tom Ford&nbsp;</strong><strong>Black Orchid&nbsp;</strong><strong>hương thơm thời đại d&agrave;nh cho phụ nữ thế kỷ 21</strong></h3>\r\n\r\n<p>Nước hoa&nbsp;<strong>Tom Ford Black Orchid</strong>&nbsp;được thương hiệu Tom Ford cho ra mắt năm v&agrave;o năm 2006. Chuy&ecirc;n gia nước hoa Givaudan &ndash; người s&aacute;ng chế ra lọ&nbsp;<a href=\"https://theperfume.vn/\"><strong>nước hoa</strong></a>&nbsp;n&agrave;y n&agrave;y đ&atilde; n&oacute;i đ&acirc;y hương thơm cảm hứng dựa tr&ecirc;n những người phụ nữ thế kỷ 21 c&aacute; t&iacute;nh v&agrave; hiện đại. Tom Ford Black Orchid<strong>&nbsp;</strong>thuộc nh&oacute;m hoa cỏ phương đ&ocirc;ng với hương thơm nồng n&agrave;n, đặc biệt. Với nốt hương ch&iacute;nh l&agrave; hoa lan đen, với nh&agrave; chế tạo ra nước hoa th&igrave; loại hoa n&agrave;y c&oacute; một m&ugrave;i hương rất đặc biệt v&agrave; hiếm, hoa lan đen c&oacute; một phong vị đặc biệt, l&agrave;m ai cũng m&ecirc; đắm.</p>\r\n\r\n<p><img alt=\"Nuoc-hoa-Tom-Ford-Black-Orchid\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/07/Nuoc-hoa-Tom-Ford-Black-Orchid.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/07/Nuoc-hoa-Tom-Ford-Black-Orchid.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/07/Nuoc-hoa-Tom-Ford-Black-Orchid-200x200.jpg 200w, https://theperfume.vn/wp-content/uploads/2017/07/Nuoc-hoa-Tom-Ford-Black-Orchid-100x100.jpg 100w, https://theperfume.vn/wp-content/uploads/2017/07/Nuoc-hoa-Tom-Ford-Black-Orchid-300x300.jpg 300w, https://theperfume.vn/wp-content/uploads/2017/07/Nuoc-hoa-Tom-Ford-Black-Orchid-340x340.jpg 340w\" width=\"600\" /></p>\r\n\r\n<p><strong>Tom Ford Black Orchid</strong>&nbsp;được kết cấu ba tầng hương kh&aacute;c nhau. Khi trải nghiệm&nbsp;<strong>Black Orchid&nbsp;</strong>ta sẽ cảm nhận lớp hương đầu ti&ecirc;n l&agrave; tổ hợp c&aacute;c th&agrave;nh phần hương hoa trắng, tr&aacute;i c&acirc;y c&oacute; vị chua v&agrave; nấm cục. Lớp hương giữa l&agrave; sự kết hợp t&aacute;o bạo th&agrave;nh phần tr&aacute;i c&acirc;y đỏ, hoa sen v&agrave; phong lan đen. Lớp hương cuối đ&oacute;ng vai tr&ograve; l&agrave; chất x&uacute;c t&aacute;c để h&ograve;a quyện c&aacute;c th&agrave;nh phần lại với nhau l&agrave; hương gỗ, cỏ, hương va &ndash; ni, socola. Mang đến cho người d&ugrave;ng cảm gi&aacute;c như đang bước v&agrave;o một khu vườn hoa tr&aacute;i sau trận mưa r&agrave;o, vẫn c&ograve;n cảm nhận r&otilde; rệt m&ugrave;i hương đất ẩm thanh khiết v&agrave; sảng kho&aacute;i. Tổng thể hương thơm của&nbsp;<strong>Tom Ford Black Orchid&nbsp;</strong>l&agrave; sự kết hợp đầy tinh tế, c&oacute; sức lan tỏa mạnh mẽ v&agrave; lưu lại rất l&acirc;u tr&ecirc;n l&agrave;n da bạn.</p>\r\n\r\n<h3><strong>Thiết kế&nbsp;</strong><strong>sang trọng v&agrave; đầy quyến rũ</strong></h3>\r\n\r\n<p><strong>Nước hoa Tom Ford Black Orchid&nbsp;</strong>mang cho m&igrave;nh một hương thơm hết sức tuyệt vời v&agrave; sức quyến rũ l&agrave;m cho người đối diện kh&ocirc;ng thể cưỡng lại được, l&agrave; m&oacute;n qu&agrave; d&agrave;nh ri&ecirc;ng cho những người phụ nữ năng động, hiện đại. Chỉ cần sử dụng một v&agrave;i giọt&nbsp;<a href=\"https://theperfume.vn/brand/nuoc-hoa-tom-ford/\"><strong>nước hoa&nbsp;Tom Ford&nbsp;</strong></a>ở hai cổ tay b&agrave;n tay v&agrave; g&aacute;y, bạn chắc chắn sẽ l&agrave; t&acirc;m điểm của những buổi tiệc t&ugrave;ng sang trọng. Hương thơm<strong>&nbsp;</strong>Black Orchid&nbsp;cũng l&agrave; một sự lựa chọn kh&ocirc;ng thể ho&agrave;n hảo hơn cho những chuyến du lịch của bạn.&nbsp;<strong>Tom Ford Black Orchid&nbsp;</strong>c&oacute;&nbsp;độ lưu hương rất l&acirc;u v&agrave; độ tỏa hương xa, n&oacute; sẽ định h&igrave;nh n&ecirc;n một phong c&aacute;ch ri&ecirc;ng cho bạn &ndash; qu&yacute; c&ocirc; hiện đại, năng động, quyến rũ.</p>\r\n\r\n<p><img alt=\"Tom-Ford-Black-Orchid-3-800x534\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/07/Tom-Ford-Black-Orchid-3-800x534-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/07/Tom-Ford-Black-Orchid-3-800x534-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/07/Tom-Ford-Black-Orchid-3-800x534-1-200x200.jpg 200w, https://theperfume.vn/wp-content/uploads/2017/07/Tom-Ford-Black-Orchid-3-800x534-1-100x100.jpg 100w, https://theperfume.vn/wp-content/uploads/2017/07/Tom-Ford-Black-Orchid-3-800x534-1-300x300.jpg 300w, https://theperfume.vn/wp-content/uploads/2017/07/Tom-Ford-Black-Orchid-3-800x534-1-340x340.jpg 340w\" width=\"600\" /></p>\r\n\r\n<p>Với thiết kế mang h&igrave;nh d&aacute;ng biểu tượng của h&atilde;ng,&nbsp;<strong>Tom Ford Black Orchid</strong>&nbsp;được chứa đựng trong chai đen tuyền với những đường kẻ sọc mạnh mẽ chạy dọc to&agrave;n th&acirc;n chai. Với điểm nhấn l&agrave; m&agrave;u v&agrave;ng &aacute;nh kim của logo, l&agrave;m cho tổng thể h&agrave;i h&ograve;a, tinh tế, quyến rũ v&agrave; đầy sang trọng.</p>', '50', NULL, 'Tom-Ford-Black-Orchid-4-1-340x34031.jpg', 1, NULL, NULL),
(48, 1, 8, 3, 5, 'Nước Hoa Tom Ford Noir Extreme Eau De Parfum 100ml', '3400000', '2900000', '<h2><strong>Nước Hoa</strong>&nbsp;Tom Ford Noir Extreme&nbsp;Eau De Parfum</h2>\r\n\r\n<h3>Tom Ford Noir Extreme</h3>\r\n\r\n<p>Nước hoa&nbsp;<strong><a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-tom-ford-noir-extreme/\">Tom Ford Noir Extreme</a>&nbsp;</strong>của thương hiệu Tom Ford&nbsp;ra mắt năm 2015 thuộc nh&oacute;m hương gỗ phương đ&ocirc;ng ấm nồng, l&agrave; một trong những m&ugrave;i hương được đ&aacute;nh gi&aacute; cao của thương hiệu. Nh&agrave; pha chế Sonia Constant ch&iacute;nh l&agrave; cha đẻ của d&ograve;ng nước hoa n&agrave;y.</p>\r\n\r\n<p><img alt=\"Tom-Ford-Noir-Extreme-1-800x333\" height=\"391\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/05/Tom-Ford-Noir-Extreme-1-800x333-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/05/Tom-Ford-Noir-Extreme-1-800x333-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/05/Tom-Ford-Noir-Extreme-1-800x333-1-300x196.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3><strong>Đặc điểm của nước hoa Tom Ford Noir Extreme&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:&nbsp;</strong>Tom Ford</li>\r\n	<li><strong>Nh&oacute;m nước hoa:</strong>&nbsp;Hương gỗ phương Đ&ocirc;ng</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;2015</li>\r\n	<li><strong>S&aacute;ng tạo bởi:</strong>&nbsp;Sonia Constant</li>\r\n	<li><strong>Độ lưu hương:</strong>&nbsp;Kh&aacute; l&acirc;u, trong khoảng từ 8 đến 12 giờ</li>\r\n	<li><strong>Độ toả hương:</strong>&nbsp;Nhẹ nh&agrave;ng, thoang thoảng xung quanh</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng:</strong>&nbsp;M&ugrave;a thu &ndash; đ&ocirc;ng, Ng&agrave;y &ndash; đ&ecirc;m</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;Hiện đại, lịch l&atilde;m, sang trọng</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Quả qu&yacute;t hồng,&nbsp;Nhục đậu khấu, Hoa cam Neroli, Bạch đậu khấu,&nbsp;Nghệ t&acirc;y</li>\r\n	<li><strong>Hương giữa:</strong>&nbsp;Nhũ hương, Hoa hồng, Hoa nh&agrave;i, Hoa cam, Hương Kulfi</li>\r\n	<li><strong>Hương cuối:</strong>&nbsp;Hương gỗ, Hổ ph&aacute;ch, Gỗ đ&agrave;n hương, Vani</li>\r\n	<li><strong>Dung t&iacute;ch phổ biến:</strong>&nbsp;50ml, 100ml</li>\r\n</ul>\r\n\r\n<p><img alt=\"Tom-Ford-Noir-Extreme-3-800x533\" height=\"400\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/05/Tom-Ford-Noir-Extreme-3-800x533-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/05/Tom-Ford-Noir-Extreme-3-800x533-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/05/Tom-Ford-Noir-Extreme-3-800x533-1-300x200.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h2><strong>V&agrave;i n&eacute;t về thương hiệu nước hoa cao cấp Tom Ford</strong></h2>\r\n\r\n<p>Thương hiệu&nbsp;<strong>Tom Ford</strong>&nbsp;&ndash; Mỹ nổi tiếng to&agrave;n thế giới với những thỏi son sang trọng quyến rũ c&ugrave;ng những bộ&nbsp;trang phục lịch l&atilde;m. Năm 2016, Tom Ford&nbsp;bất ngờ cho ra mắt&nbsp;d&ograve;ng&nbsp;<a href=\"https://theperfume.vn/\"><strong>nước hoa</strong></a>&nbsp;đầu ti&ecirc;n mang t&ecirc;n Orchid ngay lập tức&nbsp;đ&atilde; g&acirc;y được tiếng vang.&nbsp;D&ugrave; ra đời muộn hơn so với c&aacute;c thương hiệu nước hoa kh&aacute;c nhưng kh&ocirc;ng thể phủ nhận sự th&agrave;nh c&ocirc;ng của thương hiệu n&agrave;y.&nbsp;<a href=\"https://theperfume.vn/brand/nuoc-hoa-tom-ford/\"><strong>Nước hoa Tom Ford</strong></a>&nbsp;c&oacute; nhiều d&ograve;ng kh&aacute;c nhau d&agrave;nh ri&ecirc;ng cho cả 2 ph&aacute;i điển h&igrave;nh l&agrave;&nbsp;bộ sưu tập nước hoa Tom Ford Private Blend.</p>\r\n\r\n<p><img alt=\"Tom-Ford-Noir-Extreme-2-800x511\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/05/Tom-Ford-Noir-Extreme-2-800x511-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/05/Tom-Ford-Noir-Extreme-2-800x511-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/05/Tom-Ford-Noir-Extreme-2-800x511-1-200x200.jpg 200w, https://theperfume.vn/wp-content/uploads/2017/05/Tom-Ford-Noir-Extreme-2-800x511-1-100x100.jpg 100w, https://theperfume.vn/wp-content/uploads/2017/05/Tom-Ford-Noir-Extreme-2-800x511-1-300x300.jpg 300w, https://theperfume.vn/wp-content/uploads/2017/05/Tom-Ford-Noir-Extreme-2-800x511-1-340x340.jpg 340w\" width=\"600\" /></p>\r\n\r\n<h2><strong>Ưu điểm của nước hoa&nbsp;<strong>Tom Ford Noir Extreme</strong></strong></h2>\r\n\r\n<h3><strong>Hương thơm đ&aacute;nh thức x&uacute;c cảm</strong></h3>\r\n\r\n<p><strong>Nước hoa Tom Ford Noir Extreme</strong>&nbsp;thuộc nh&oacute;m hương gỗ phương đ&ocirc;ng, sản phẩm d&agrave;nh cho người đ&agrave;n &ocirc;ng tr&ecirc;n 25 tuổi&nbsp;lịch l&atilde;m sang trọng.&nbsp;Lớp hương đầu ti&ecirc;n ta c&oacute; thể cảm nhận được ngay khi mới bắt đầu trải nghiệm&nbsp;<strong>Tom Ford&nbsp;Noir Extreme Eau De Parfum</strong>&nbsp;l&agrave; hương vị tươi m&aacute;t của&nbsp;qu&yacute;t hồng, hoa cam Neroli ngọt ng&agrave;o, vị ngai ng&aacute;i của nghệ t&acirc;y c&ugrave;ng vị n&eacute;t ấm &aacute;p của nhục đậu khấu, bạch đậu khấu, mang đến sự thư th&aacute;i khi d&ugrave;ng. Lớp hương đầu lắng lại v&agrave; nhường lại cho hương thơm của nhũ hương, hoa hồng, hoa nh&agrave;i, hoa cam &ndash; m&ugrave;i hương ngọt ng&agrave;o nhưng đầy n&oacute;ng bỏng. Lớp hương cuối c&ugrave;ng l&agrave; sự h&ograve;a quyện một c&aacute;ch nghệ thuật g&oacute;p mặt của hổ ph&aacute;ch, gỗ đ&agrave;n hương c&ugrave;ng ch&uacute;t va ni gi&uacute;p cho hương thơm tỏa ra l&agrave; sự nam t&iacute;nh, h&agrave;o ph&oacute;ng đầy tao nh&atilde;.&nbsp;</p>\r\n\r\n<p><img alt=\"Nuoc-hoa-Tom-Ford-Noir-Extreme-EDP\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/05/Nuoc-hoa-Tom-Ford-Noir-Extreme-EDP.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/05/Nuoc-hoa-Tom-Ford-Noir-Extreme-EDP.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/05/Nuoc-hoa-Tom-Ford-Noir-Extreme-EDP-200x200.jpg 200w, https://theperfume.vn/wp-content/uploads/2017/05/Nuoc-hoa-Tom-Ford-Noir-Extreme-EDP-100x100.jpg 100w, https://theperfume.vn/wp-content/uploads/2017/05/Nuoc-hoa-Tom-Ford-Noir-Extreme-EDP-300x300.jpg 300w, https://theperfume.vn/wp-content/uploads/2017/05/Nuoc-hoa-Tom-Ford-Noir-Extreme-EDP-340x340.jpg 340w\" width=\"600\" /></p>\r\n\r\n<h3><strong>Tom Ford Noir Extreme &ndash; độc đ&aacute;o trong thiết kế</strong></h3>\r\n\r\n<p>Nước hoa&nbsp;<strong>Tom Ford Noir Extreme</strong>&nbsp;l&agrave; mẫu nước hoa sang trọng, m&ugrave;i hương thể hiện sự tự tin, quyến rũ v&agrave; b&iacute; ẩn mang đến những sự ch&uacute; &yacute; nhất định của người đối diện d&agrave;nh cho bạn. Thiết kế rất mạnh mẽ v&agrave; nam t&iacute;nh của&nbsp;Tom Ford Noir Extreme EDP<strong>&nbsp;</strong>cũng l&agrave; điểm mạnh của d&ograve;ng nước hoa n&agrave;y.&nbsp;Thiết kế h&igrave;nh&nbsp;chữ nhật vu&ocirc;ng vắn m&agrave;u đen nắp v&agrave;ng sang trọng nổi bật tạo ấn tượng mạnh, l&agrave; sự lựa chọn kh&ocirc;ng thể bỏ qua của những t&iacute;n đồ nước hoa.</p>', '49', '1', 'Tom-Ford-Noir-Extreme-4-340x34065.jpg', 1, NULL, NULL);
INSERT INTO `sanpham` (`spMa`, `loaiMa`, `thMa`, `muaMa`, `dtMa`, `spTen`, `spGia`, `spGiaGoc`, `spMoTa`, `spSoLuong`, `spSoLuongDaBan`, `spHinhAnh`, `spTrangThai`, `created_at`, `updated_at`) VALUES
(49, 2, 8, 4, 5, 'Nước hoa Tom Ford Violet Blonde For Women 100ml', '3100000', '2800000', '<h2>Nước hoa Tom Ford Violet Blonde</h2>\r\n\r\n<h3>Tom Ford Violet Blonde</h3>\r\n\r\n<p>Nước hoa&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/tom-ford-violet-blonde-for-women/\"><strong>Tom Ford Violet Blonde</strong></a>&nbsp;d&agrave;nh cho nữ của thương hiệu&nbsp;<strong>Tom Ford&nbsp;</strong>ra mắt năm 2011.&nbsp;Hương thơm nồng n&agrave;n gi&uacute;p cho bạn l&agrave; t&acirc;m điểm của mọi &aacute;nh nh&igrave;n ngưỡng mộ của những người xung quanh. Sản phẩm c&oacute; độ lưu l&acirc;u v&agrave; độ tỏa hương trong b&aacute;n k&iacute;nh 2m.</p>\r\n\r\n<p><img alt=\"Tom-Ford-Violet-Blonde-for-women\" height=\"407\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/10/Tom-Ford-Violet-Blonde-for-women-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/10/Tom-Ford-Violet-Blonde-for-women-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/10/Tom-Ford-Violet-Blonde-for-women-1-300x204.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3>Đặc điểm của nước hoa&nbsp;<strong>Tom Ford Violet Blonde</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Xuất xứ:&nbsp;</strong>Mỹ</li>\r\n	<li><strong>Nh&oacute;m nước hoa:&nbsp;</strong>Hương Hoa cỏ Gỗ Xạ hương &ndash; Floral Woody Musk</li>\r\n	<li><strong>Giới t&iacute;nh:</strong>&nbsp;Nữ</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;2011</li>\r\n	<li><strong>Độ lưu hương:</strong>&nbsp;Kh&aacute; l&acirc;u, trung b&igrave;nh từ 8 đến 12 giờ</li>\r\n	<li><strong>Độ toả hương:</strong>&nbsp;Xa, với b&aacute;n k&iacute;nh từ 1 đến 2 m&eacute;t</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng:</strong>&nbsp;Thu, Đ&ocirc;ng,&nbsp;Ng&agrave;y, Đ&ecirc;m</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;Sang trọng, qu&yacute; ph&aacute;i, quyến rũ</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Hồng ti&ecirc;u, L&aacute; hoa t&iacute;m,&nbsp;Quả qu&yacute;t hồng</li>\r\n	<li><strong>Hương giữa:</strong>&nbsp;Hoa di&ecirc;n vĩ, Hoa nh&agrave;i, Rễ c&acirc;y di&ecirc;n vĩ</li>\r\n	<li><strong>Hương cuối:</strong>&nbsp;Cỏ hương b&agrave;i, Xạ hương, Gỗ tuyết t&ugrave;ng Virginia, An tức hương, Da lộn</li>\r\n	<li><strong>Dung t&iacute;ch phổ biến:</strong>&nbsp;50ml, 100ml</li>\r\n</ul>\r\n\r\n<p><img alt=\"Tom-Ford-Violet-Blonde-2-800x433\" height=\"380\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/10/Tom-Ford-Violet-Blonde-2-800x433-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/10/Tom-Ford-Violet-Blonde-2-800x433-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/10/Tom-Ford-Violet-Blonde-2-800x433-1-300x190.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h2><strong>Ưu điểm của nước hoa&nbsp;<strong>Tom Ford Violet Blonde</strong></strong></h2>\r\n\r\n<h3><strong>Tom Ford Violet Blonde&nbsp;</strong></h3>\r\n\r\n<p>Nước hoa&nbsp;<strong>Tom Ford Violet Blonde for women&nbsp;</strong>được mắt v&agrave;o năm 2011,&nbsp;mang trong m&igrave;nh một hương thơm hiện đại sang trọng nữ t&iacute;nh v&agrave; đầy qu&yacute; ph&aacute;i. Hương thơm nồng n&agrave;n ph&ugrave; hợp cho những nơi c&oacute; kh&ocirc;ng gian rộng,&nbsp;mang đến cảm gi&aacute;c nồng ấm nhưng vẫn rất nữ t&iacute;nh v&agrave; hiện đại.</p>\r\n\r\n<p>Khi trải nghiệm &ldquo;si&ecirc;u phẩm&rdquo;&nbsp;<a href=\"https://theperfume.vn/brand/nuoc-hoa-tom-ford/\"><strong>nước hoa Tom Ford&nbsp;</strong></a>n&agrave;y<strong>&nbsp;</strong>bạn sẽ cảm nhận r&otilde;&nbsp;lớp hương mở đầu l&agrave; hỗn hợp qu&yacute;t hồng, Hồng ti&ecirc;u, L&aacute; hoa t&iacute;m mang đến cảm gi&aacute;c sảng kho&aacute;i, bừng s&aacute;ng. Lớp hương giữa c&aacute;c nốt hương của hoa di&ecirc;n vĩ, hoa nh&agrave;i v&agrave; rễ c&acirc;y di&ecirc;n vĩ, m&ugrave;i hương l&uacute;c n&agrave;y l&agrave;m cho kh&ocirc;ng gian m&ecirc; đắm v&agrave; đầy huyền b&iacute;. Lớp hương cuối c&ugrave;ng lưu tr&ecirc;n l&agrave;n da bạn l&agrave; sự ấm &aacute;p v&agrave; quyến rũ đến v&ocirc; tận nhờ c&aacute;c th&agrave;nh phần&nbsp;cỏ hương b&agrave;i, xạ hương, gỗ tuyết t&ugrave;ng Virginia, an tức hương, da lộn. Tất cả c&aacute;c th&agrave;nh phần h&ograve;a quyện với nhau một c&aacute;ch tinh tế v&agrave; h&agrave;i h&ograve;a, để hương thơm cuối c&ugrave;ng lưu lại tr&ecirc;n l&agrave;n da bạn l&agrave; sự quyến rũ v&ocirc; tận.</p>\r\n\r\n<p><img alt=\"Nuoc-hoa-nu-Tom-Ford-Violet-Blonde\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/10/Nuoc-hoa-nu-Tom-Ford-Violet-Blonde.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/10/Nuoc-hoa-nu-Tom-Ford-Violet-Blonde.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/10/Nuoc-hoa-nu-Tom-Ford-Violet-Blonde-200x200.jpg 200w, https://theperfume.vn/wp-content/uploads/2017/10/Nuoc-hoa-nu-Tom-Ford-Violet-Blonde-100x100.jpg 100w, https://theperfume.vn/wp-content/uploads/2017/10/Nuoc-hoa-nu-Tom-Ford-Violet-Blonde-300x300.jpg 300w, https://theperfume.vn/wp-content/uploads/2017/10/Nuoc-hoa-nu-Tom-Ford-Violet-Blonde-340x340.jpg 340w\" width=\"600\" /></p>\r\n\r\n<h2><strong><strong>Tom Ford Violet Blonde&nbsp;</strong>thiết kế sang trọng</strong></h2>\r\n\r\n<p>Nước hoa&nbsp;<strong>Tom Ford Violet Blonde</strong>&nbsp;được người d&ugrave;ng cho rằng c&oacute; thể cảm nhận được &ldquo;hương hoa hữu h&igrave;nh&rdquo; trong m&ugrave;i hương&nbsp;<a href=\"https://theperfume.vn/\"><strong>nước ho</strong></a>a n&agrave;y. Điều đặc biệt m&agrave; kh&ocirc;ng loại nước hoa n&agrave;o cũng l&agrave;m được đ&oacute; ch&iacute;nh l&agrave; độ lưu l&acirc;u v&agrave; độ tỏa hương trong b&aacute;n k&iacute;nh 2m. Tom Ford Violet Blonde<strong>&nbsp;</strong>ph&ugrave; hợp d&agrave;nh cho những buổi tiệc ngo&agrave;i trời, hay những nơi c&oacute; kh&ocirc;ng gian rộng. Hương thơm sẽ gi&uacute;p cho bạn l&agrave; t&acirc;m điểm của mọi &aacute;nh nh&igrave;n ngưỡng mộ của những người xung quanh.</p>\r\n\r\n<p><img alt=\"Nuoc-hoa-Tom-Ford-Violet-Blonde-for-women\" height=\"428\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/10/Nuoc-hoa-Tom-Ford-Violet-Blonde-for-women.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/10/Nuoc-hoa-Tom-Ford-Violet-Blonde-for-women.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/10/Nuoc-hoa-Tom-Ford-Violet-Blonde-for-women-300x214.jpg 300w\" width=\"600\" /></p>\r\n\r\n<p><strong>Tom Ford Violet Blonde</strong>&nbsp;mang h&igrave;nh d&aacute;ng thường thấy của h&atilde;ng Tom Ford, được t&ocirc; điểm bằng m&agrave;u v&agrave;ng lấp l&aacute;nh. Tổng thể thiết mang n&eacute;t sang trọng, b&iacute; ẩn v&agrave; qu&yacute; ph&aacute;i của ph&aacute;i đẹp.</p>', '50', NULL, 'Tom-Ford-Violet-Blonde-1-1-340x34057.jpg', 1, NULL, NULL),
(50, 2, 8, 2, 5, 'Nước hoa Tom Ford Bitter Peach Eau De Parfum 100ml', '4000000', '3500000', '<h2><strong>Nước hoa Tom Ford Bitter Peach Eau De Parfum 100ml</strong></h2>\r\n\r\n<h3><strong>Tom Ford Bitter Peach</strong></h3>\r\n\r\n<p><a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-tom-ford-bitter-peach-eau-de-parfum-100ml/\"><strong>Nước hoa Tom Ford Bitter Peach 100ml&nbsp;</strong></a>l&agrave; chai nước hoa Unisex tiếp theo ra mắt kh&aacute;n giả trong năm 2020. Với sắc cam hồng nổi bật kh&ocirc;ng thễ lẫn trộn, sản phẩm mang đến một m&ugrave;i hương đ&aacute;ng mong đợi. Một m&ugrave;i hương tưởng chừng tự nhi&ecirc;n, tươi m&aacute;t m&agrave; kh&oacute; cưỡng v&ocirc; c&ugrave;ng.&nbsp;<strong>Tom Ford Bitter Peach 100ml</strong>&nbsp;gợi mở một g&oacute;c nh&igrave;n thật xa hoa v&agrave; gợi cảm. Mang đến cho cả n&agrave;ng v&agrave; ch&agrave;ng sự cuốn h&uacute;t, hấp dẫn kh&oacute; ngờ.</p>\r\n\r\n<p><img alt=\"To-m-Fo-rd-Bit-ter-Pe-ach-100ml\" height=\"696\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-100ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-100ml.png 900w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-100ml-800x619.png 800w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-100ml-768x594.png 768w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-100ml-300x232.png 300w\" width=\"900\" /></p>\r\n\r\n<p><em>Nước hoa Tom Ford Bitter Peach Eau De Parfum</em></p>\r\n\r\n<p><strong>Đặc điểm của nước hoa Tom Ford Bitter Peach</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:</strong>&nbsp;Tom Ford</li>\r\n	<li><strong>Xuất xứ:</strong>&nbsp;Mỹ &ndash; Thuỵ Sĩ</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;2020</li>\r\n	<li><strong>Nh&oacute;m nước hoa:</strong>&nbsp;Amber Vanilla &ndash; Hương Vanilla phương đ&ocirc;ng</li>\r\n	<li><strong>Độ toả hương:&nbsp;</strong>Gần, Trong v&ograve;ng một c&aacute;nh tay</li>\r\n	<li><strong>Độ lưu hương:</strong>&nbsp;L&acirc;u, 7-12 giờ.</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;Tươi mới, Gợi cảm</li>\r\n	<li><strong>Hương đầu:&nbsp;</strong>Bạch đậu khấu, Hoa v&ograve;i voi, Tr&aacute;i đ&agrave;o, Cam đỏ</li>\r\n	<li><strong>Hương giữa:</strong>&nbsp;C&acirc;y Davana, Rượu Cognac, Hoa nh&agrave;i, Rượu rum</li>\r\n	<li><strong>Hương cuối:</strong>&nbsp;Đậu Tonka, Vanilla, Gỗ đ&agrave;n hương, Benzoin, C&acirc;y hoắc hương Indonesia, Cashmeran, Cỏ Vetiver, Labdanum, Styrax</li>\r\n	<li><strong>Thời điểm sử dụng:</strong>&nbsp;M&ugrave;a xu&acirc;n &ndash; M&ugrave;a hạ &ndash; M&ugrave;a thu, Ng&agrave;y &ndash; Đ&ecirc;m</li>\r\n	<li><strong>Dung t&iacute;ch phổ biến:</strong>&nbsp;50ml, 100ml, 250ml</li>\r\n</ul>\r\n\r\n<h3><strong>Về thương hiệu nước hoa Tom Ford</strong></h3>\r\n\r\n<p>Tom Ford l&agrave; thương hiệu do nh&agrave; thiết kế Thomas Carlyle Tom Ford s&aacute;ng tạo v&agrave; th&agrave;nh lập năm 2005. Nhắc đến Tom Ford người ta thường nhắc đến l&agrave; thương hiệu đ&igrave;nh đ&aacute;m s&aacute;nh ngang với Dior, Gucci hay YSL,&hellip; Thương hiệu đ&atilde; cho ra đời cơ số những BST thời trang cao cấp, c&ugrave;ng c&aacute;c phụ kiện như l&agrave; k&iacute;nh mắt, t&uacute;i x&aacute;ch,&hellip; Nổi bật trong đ&oacute; phải kể đến d&ograve;ng mỹ phẩm của Tom Ford, từ đồ trang điểm, dưỡng da cho đến&nbsp;<a href=\"https://theperfume.vn/brand/nuoc-hoa-tom-ford/\"><strong>nước hoa Tom Ford</strong></a>. Mỗi một d&ograve;ng sản phẩm đều đem đến những n&eacute;t c&aacute; t&iacute;nh, đương đại rất ri&ecirc;ng của thương hiệu.</p>\r\n\r\n<p><img alt=\"To-m-Fo-rd-Bit-ter-Pe-ach-for-wm-100ml\" height=\"821\" sizes=\"(max-width: 821px) 100vw, 821px\" src=\"https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-for-wm-100ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-for-wm-100ml.png 821w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-for-wm-100ml-800x800.png 800w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-for-wm-100ml-340x340.png 340w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-for-wm-100ml-768x768.png 768w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-for-wm-100ml-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-for-wm-100ml-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-for-wm-100ml-100x100.png 100w\" width=\"821\" /></p>\r\n\r\n<p><em>Tom Ford Bitter Peach Eau De Parfum</em></p>\r\n\r\n<p>Đến với c&aacute;c d&ograve;ng nước hoa của Tom Ford, thương hiệu n&agrave;y sở hữu sự quyến rũ, thanh lịch v&agrave; đương dại. T&iacute;nh đến nay đ&atilde; c&oacute; hơn 70 chai nước hoa bao gồm&nbsp;<strong><a href=\"https://theperfume.vn/nuoc-hoa-nu/tom-ford-women/\">nước hoa nữ Tom Ford</a></strong>, nước hoa nam Tom Ford v&agrave; cả d&ograve;ng nước hoa Unisex. Hương thơm cao cấp rất biết c&aacute;ch chiều l&ograve;ng ph&aacute;i đẹp v&agrave; ph&aacute;i mạnh.</p>\r\n\r\n<h2><strong>Nước hoa Tom Ford Bitter Peach 100ml &ndash; Sự ngọt ng&agrave;o, gợi cảm của tr&aacute;i c&acirc;y</strong></h2>\r\n\r\n<h3><strong>Tom Ford Bitter Peach Eau De Parfum</strong></h3>\r\n\r\n<p><strong><a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-tom-ford-bitter-peach/\">Nước hoa Tom Ford Bitter Peach</a>&nbsp;</strong>được ra mắt lần đầu ti&ecirc;n v&agrave;o năm 2020. Đ&acirc;y l&agrave; phi&ecirc;n bản tiếp theo của BST Private Blend, ch&iacute;nh v&igrave; lẽ đ&oacute; m&agrave; bạn sẽ lu&ocirc;n t&igrave;m kiếm được ở Tom Ford những m&ugrave;i hương kh&ocirc;ng bao giờ bị pha trộn. Sản phẩm tiếp tục lấy chủ đề tr&aacute;i c&acirc;y thơm ngon v&agrave; ngọt ng&agrave;o để khai th&aacute;c tạo n&ecirc;n sản phẩm.&nbsp;<strong>Tom Ford Bitter Peach</strong><strong>&nbsp;EDP&nbsp;</strong>tươi mới vời m&ugrave;i hương của tr&aacute;i đ&agrave;o ch&iacute;n mọng được t&ocirc; điểm với c&aacute;c nốt hương trong nh&oacute;m Vanilla phương Đ&ocirc;ng. Hương thơm gợi n&ecirc;n cảm gi&aacute;c sang trọng, gợi cảm đầy x&aacute;c thịt cho những ai sử dụng n&oacute;.</p>\r\n\r\n<p><img alt=\"To-m-Fo-rd-Bit-ter-Pe-ach-tk-100ml\" height=\"900\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-tk-100ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-tk-100ml.png 900w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-tk-100ml-800x800.png 800w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-tk-100ml-340x340.png 340w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-tk-100ml-768x768.png 768w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-tk-100ml-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-tk-100ml-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2021/11/To-m-Fo-rd-Bit-ter-Pe-ach-tk-100ml-100x100.png 100w\" width=\"900\" /></p>\r\n\r\n<p><em>Tom Ford Bitter Peach &ndash; Sự ngọt ng&agrave;o, gợi cảm của tr&aacute;i c&acirc;y</em></p>\r\n\r\n<h3><strong>M&ocirc; tả về từng tầng hương của Tom Ford Bitter Peach Eau De Parfum</strong></h3>\r\n\r\n<p><strong>Tom Ford Bitter Peach 100ml</strong>&nbsp;mang đến cho người sử dụng cảm nhận về một m&ugrave;i hương tr&aacute;i đ&agrave;o đầy gợi cảm ngay ph&uacute;t ban đầu. Cam đỏ ngọt ng&agrave;o c&ugrave;ng tinh dầu Davana v&agrave; hoa voi voi cho nốt hương đầu nhẹ nh&agrave;ng, ấn tượng. Hai loại rượu Cognac v&agrave; rượu rum được th&ecirc;m v&agrave;o cho hương thơm th&ecirc;m s&acirc;u lắng. Hoa nh&agrave;i tinh tế c&ugrave;ng bạch đậu khấu t&ocirc; điểm cho ly rượu th&ecirc;m sinh động. Nốt hương cuối trở n&ecirc;n phong ph&uacute; v&agrave; sinh động hơn với c&aacute;c nốt hương gỗ trầm ấm, ngọt ng&agrave;o. Một số loại hương nh&acirc;n tạo được th&ecirc;m thắt cho nốt hương th&ecirc;m đặc biệt bền l&acirc;u.</p>\r\n\r\n<p><img alt=\"Tom Ford Bitter Peach EDP 100ml\" height=\"766\" sizes=\"(max-width: 796px) 100vw, 796px\" src=\"https://theperfume.vn/wp-content/uploads/2021/11/Tom-Ford-Bitter-Peach-EDP-100ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/11/Tom-Ford-Bitter-Peach-EDP-100ml.png 796w, https://theperfume.vn/wp-content/uploads/2021/11/Tom-Ford-Bitter-Peach-EDP-100ml-768x739.png 768w, https://theperfume.vn/wp-content/uploads/2021/11/Tom-Ford-Bitter-Peach-EDP-100ml-300x289.png 300w\" width=\"796\" /></p>\r\n\r\n<p><em>Tom Ford Bitter Peach mang hương thơm ngọt ng&agrave;o tươi mới</em></p>\r\n\r\n<h3><strong>Thiết kế đằng cấp của nước hoa Tom Ford Bitter Peach Eau De Parfum 100ml</strong></h3>\r\n\r\n<p><strong>TF Bitter Peach 100ml&nbsp;</strong>như đ&atilde; n&oacute;i vẫn mang d&aacute;ng h&igrave;nh qu&acirc;n cờ kinh điển của mọi d&ograve;ng TF kh&aacute;c. Một sự thống nhất thể hiện sự đẳng cấp v&agrave; dấu ấn ri&ecirc;ng biệt. Tom Ford lu&ocirc;n hướng đến sự đơn giản m&agrave; thu h&uacute;t. Đẳng cấp bộc lộ qua từng chi tiết tinh tế. Với&nbsp;<strong>Tom Ford Bitter Peach 100ml</strong>&nbsp;t&ecirc;n sản phẩm in r&otilde; r&agrave;ng tr&ecirc;n th&acirc;n chai. Một loại&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/\"><strong>nước hoa</strong></a>&nbsp;mac sắc cam hồng đặc trưng đầy nổi bật. Từ những những ch&agrave;ng tr&aacute;i cho đến những c&ocirc; g&aacute;i đều m&ecirc; đắm trước m&ugrave;i hương n&agrave;y.</p>\r\n\r\n<p><img alt=\"TF Bitter Peach 100ml\" height=\"807\" sizes=\"(max-width: 800px) 100vw, 800px\" src=\"https://theperfume.vn/wp-content/uploads/2021/11/TF-Bitter-Peach-100ml.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/11/TF-Bitter-Peach-100ml.png 800w, https://theperfume.vn/wp-content/uploads/2021/11/TF-Bitter-Peach-100ml-793x800.png 793w, https://theperfume.vn/wp-content/uploads/2021/11/TF-Bitter-Peach-100ml-768x775.png 768w, https://theperfume.vn/wp-content/uploads/2021/11/TF-Bitter-Peach-100ml-300x303.png 300w, https://theperfume.vn/wp-content/uploads/2021/11/TF-Bitter-Peach-100ml-100x100.png 100w\" width=\"800\" /></p>\r\n\r\n<p><em>Thiết kế đằng cấp của Tom Ford Bitter Peach Eau De Parfum</em></p>', '50', NULL, 'Nuoc-hoa-Tom-Ford-Bitter-Peach-100ml-340x34049.png', 1, NULL, NULL),
(51, 1, 9, 4, 5, 'Nước Hoa La Nuit de L`Homme Le Parfum 100ml', '2500000', '1700000', '<h2>Nước Hoa&nbsp;<strong>Yves Saint Laurent</strong>&nbsp;La Nuit de L`Homme Le Parfum</h2>\r\n\r\n<h3>La Nuit de L`Homme Le Parfum</h3>\r\n\r\n<p><img alt=\" La Nuit de L`Homme Le Parfum\" height=\"360\" sizes=\"(max-width: 480px) 100vw, 480px\" src=\"https://theperfume.vn/wp-content/uploads/2017/05/La-Nuit-de-LHomme-Le-Parfum.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/05/La-Nuit-de-LHomme-Le-Parfum.jpg 480w, https://theperfume.vn/wp-content/uploads/2017/05/La-Nuit-de-LHomme-Le-Parfum-300x225.jpg 300w\" width=\"480\" /></p>\r\n\r\n<p>Nước hoa<strong>&nbsp;La Nuit de L`Homme Le Parfum&nbsp;</strong>của thương hiệu Yves Saint Laurent thuộc d&ograve;ng dương xỉ phương Đ&ocirc;ng ra mắt ph&aacute;i mạnh v&agrave;o năm 2010. Hương&nbsp;thơm quyến rũ tự nhi&ecirc;n đem đến một m&ugrave;i hương mới lạ đầy vị tinh tế cho nam giới.</p>\r\n\r\n<ul>\r\n	<li><strong>Nh&oacute;m nước hoa:</strong>&nbsp;Hương dương xỉ phương đ&ocirc;ng</li>\r\n	<li><strong>Giới t&iacute;nh:</strong>&nbsp;Nam, Tr&ecirc;n 25 tuổi</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;2010</li>\r\n	<li><strong>Dung t&iacute;ch:</strong>&nbsp;60ml &ndash; 100ml</li>\r\n	<li><strong>Độ lưu hương:</strong>&nbsp;L&acirc;u &ndash; 7 giờ đến 12 giờ</li>\r\n	<li><strong>Độ toả hương:</strong>&nbsp;Gần &ndash; Toả hương trong v&ograve;ng một c&aacute;nh tay</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng:</strong>&nbsp;Ban ng&agrave;y, ban đ&ecirc;m, m&ugrave;a thu, m&ugrave;a đ&ocirc;ng</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;Nam t&iacute;nh, lịch l&atilde;m, b&iacute; ần</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Cam Bergamot, Tiểu hồi hương, Ti&ecirc;u.</li>\r\n	<li><strong>Hương giữa:</strong>&nbsp;Hoa Oải Hương, Hương Labdanum Ph&aacute;p, Hương tr&aacute;i c&acirc;y.</li>\r\n	<li><strong>Hương cuối:</strong>&nbsp;Cỏ hương b&agrave;i (vetyver), C&acirc;y hoắc hương, Hương Va ni (Vanille)</li>\r\n</ul>\r\n\r\n<p><img alt=\"La Nuit de L`Homme Le Parfum\" height=\"427\" sizes=\"(max-width: 640px) 100vw, 640px\" src=\"https://theperfume.vn/wp-content/uploads/2017/05/La-Nuit-de-LHomme-Le-Parfum-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/05/La-Nuit-de-LHomme-Le-Parfum-1.jpg 640w, https://theperfume.vn/wp-content/uploads/2017/05/La-Nuit-de-LHomme-Le-Parfum-1-300x200.jpg 300w\" width=\"640\" /></p>\r\n\r\n<h2><strong>Ưu điểm của Yves Saint Laurent&nbsp;</strong>La Nuit de L`Homme Le Parfum</h2>\r\n\r\n<h3>Hương thơm nam t&iacute;nh quyến rũ</h3>\r\n\r\n<p><strong>Nước hoa La Nuit de L`Homme Le Parfum</strong>&nbsp;thuộc nh&oacute;m dương xỉ phương Đ&ocirc;ng ra mắt năm 2010, hương&nbsp;thơm nam t&iacute;nh quyến rũ c&agrave;ng l&agrave;m t&ocirc;n l&ecirc;n vẻ l&ocirc;i cuốn đẳng cấp của ph&aacute;i mạnh. Nếu bạn đang t&igrave;m kiếm một d&ograve;ng nước hoa thoải m&aacute;i khi đi tiệp t&ugrave;ng, xua tan đi những mệt mỏi của những ng&agrave;y l&agrave;m việc căng thẳng th&igrave;&nbsp;<strong>La Nuit de L`Homme Le Parfum&nbsp;</strong>sẽ l&agrave; gợi &yacute; kh&ocirc;ng thể bỏ lỡ.</p>\r\n\r\n<p>Khi sử dụng&nbsp;<strong>La Nuit de L`Homme Le Parfum&nbsp;</strong>bạn sẽ cảm nhận được ngay vị ngọt của tr&aacute;i cam Bergamot, tiểu hồi hương, c&ugrave;ng ch&uacute;t cay nồng ấm của ti&ecirc;u đen, khiến người d&ugrave;ng nghĩ ngay đến vẻ<strong>&nbsp;</strong>mạnh mẽ l&ocirc;i cuốn rất huyền b&iacute; đầy nội lực của ph&aacute;i mạnh. Lớp hương giữa thực sự tinh tế v&agrave; dễ chịu bởi c&oacute; sự kết hợp của&nbsp;hoa oải hương dịu d&agrave;ng, hương Labdanum Ph&aacute;p pha lẫn v&agrave;o đ&oacute; l&agrave; hương thơm ng&ograve;n ngọt của tr&aacute;i c&acirc;y tạo sự h&agrave;i l&ograve;ng tuyệt đối. Cuối c&ugrave;ng m&ugrave;i hương của hoắc hương, cỏ hương b&agrave;i c&ugrave;ng ch&uacute;t vani sẽ khiến hương thơm lưu l&acirc;u tr&ecirc;n da, tỏa hương thơm ng&aacute;t.</p>\r\n\r\n<p><img alt=\"La Nuit de L`Homme Le Parfum\" height=\"457\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/05/Yves-Saint-Laurent-La-Nuit-de-L%E2%80%99Homme-Le-Parfum.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/05/Yves-Saint-Laurent-La-Nuit-de-L’Homme-Le-Parfum.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/05/Yves-Saint-Laurent-La-Nuit-de-L’Homme-Le-Parfum-300x229.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3><strong>Mạnh mẽ trong từng đường n&eacute;t thiết kế</strong></h3>\r\n\r\n<p>Nước hoa&nbsp;<strong>Yves Saint Laurent La Nuit de L`Homme Le Parfum</strong><strong>&nbsp;</strong>thiết kế<strong>&nbsp;</strong>hiện đại với t&ocirc;ng m&agrave;u đen&nbsp;sang trọng l&agrave;m chủ đạo. Th&acirc;n chai h&igrave;nh trụ chữ nhật bằng thủy tinh cầm tr&ecirc;n tay rất chắc chắn c&ugrave;ng chiếc nắp lục gi&aacute;c ấn tượng cũng l&agrave; điểm khiến ph&aacute;i mạnh nhắc nhớ đến d&ograve;ng nước hoa n&agrave;y.</p>', '46', '4', 'La-Nuit-de-LHomme-Le-Parfum-263.jpg', 1, NULL, NULL),
(52, 1, 9, 3, 5, 'Nước Hoa YSL La Nuit de l`Homme 100ml', '2900000', '2400000', '<h2 style=\"text-align:center\">Nước Hoa Yves Saint Laurent La Nuit de l`Homme</h2>\r\n\r\n<h3 style=\"text-align:center\">Yves Saint Laurent La Nuit de l`Hommea</h3>\r\n\r\n<p style=\"text-align:center\"><img alt=\" Yves Saint Laurent La Nuit de l`Homme\" height=\"523\" sizes=\"(max-width: 800px) 100vw, 800px\" src=\"https://theperfume.vn/wp-content/uploads/2017/05/Yves-Saint-Laurent-La-Nuit-de-lHomme-2-800x523.jpeg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/05/Yves-Saint-Laurent-La-Nuit-de-lHomme-2-800x523.jpeg 800w, https://theperfume.vn/wp-content/uploads/2017/05/Yves-Saint-Laurent-La-Nuit-de-lHomme-2-300x196.jpeg 300w, https://theperfume.vn/wp-content/uploads/2017/05/Yves-Saint-Laurent-La-Nuit-de-lHomme-2-768x502.jpeg 768w, https://theperfume.vn/wp-content/uploads/2017/05/Yves-Saint-Laurent-La-Nuit-de-lHomme-2.jpeg 842w\" width=\"800\" /></p>\r\n\r\n<p style=\"text-align:center\">Nước hoa<strong>&nbsp;&nbsp;Yves Saint Laurent La Nuit de l`Homme</strong>&nbsp;quyến rũ với m&ugrave;i hương gỗ cay nồng<strong>&nbsp;</strong>nam t&iacute;nh d&agrave;nh cho người đ&agrave;n &ocirc;ng mạnh mẽ. Thiết kế ấn tượng sắc cạnh c&ugrave;ng độ lưu hương l&acirc;u l&agrave; một trong những điểm mạnh của d&ograve;ng nước hoa n&agrave;y.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&oacute;m nước hoa:</strong>&nbsp;Hương gỗ cay nồng</p>\r\n\r\n<p style=\"text-align:center\"><strong>Giới t&iacute;nh:</strong>&nbsp;Nam<strong>,</strong>&nbsp;Tr&ecirc;n 25 tuổi</p>\r\n\r\n<p style=\"text-align:center\"><strong>Năm ra mắt:</strong>&nbsp;2009</p>\r\n\r\n<p style=\"text-align:center\"><strong>Dung t&iacute;ch:</strong>&nbsp;100ml</p>\r\n\r\n<p style=\"text-align:center\"><strong>S&aacute;ng tạo bởi:</strong>&nbsp;Anne Flipo, Dominique Ropion, Pierre Wargnye</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ lưu hương:</strong>&nbsp;L&acirc;u &ndash; 7 giờ đến 12 giờ</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ toả hương:</strong>&nbsp;Gần &ndash; Toả hương trong v&ograve;ng một c&aacute;nh tay</p>\r\n\r\n<p style=\"text-align:center\"><strong>Thời điểm khuy&ecirc;n d&ugrave;ng:</strong>&nbsp;Ban ng&agrave;y, ban đ&ecirc;m, m&ugrave;a thu, m&ugrave;a đ&ocirc;ng</p>\r\n\r\n<p style=\"text-align:center\"><strong>Phong c&aacute;ch:</strong>&nbsp;Quyến rũ, mạnh mẽ, nam t&iacute;nh</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương đầu:</strong>&nbsp;Bạch đậu khấu.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương giữa:</strong>&nbsp;Cam Bergamot, Gỗ tuyết t&ugrave;ng Virginia, Hoa Oải Hương.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương cuối:</strong>&nbsp;Cỏ hương b&agrave;i, Th&igrave; l&agrave; Ba Tư.</p>\r\n\r\n<h2 style=\"text-align:center\">Thương hiệu nước hoa nam&nbsp;<strong>Yves Saint Laurent&nbsp;</strong></h2>\r\n\r\n<p style=\"text-align:center\">Thương hiệu<strong>&nbsp;Yves Saint Laurent (YSL)</strong>&nbsp;&ndash; &nbsp;dẫn đầu ng&agrave;nh c&ocirc;ng nghiệp thời trang Ph&aacute;p thế kỷ 20. Sở hữu trong tay h&agrave;ng loạt c&aacute;c bộ sưu tập thời trang, mỹ phẩm đ&igrave;nh đ&aacute;m được c&aacute;c ng&ocirc;i sao h&agrave;ng đầu thế giới ưu &aacute;i lựa chọn.&nbsp;<strong>Nước hoa YSL</strong>&nbsp;ra đời năm 1964 đ&atilde; như một bước đột ph&aacute;&nbsp;gi&uacute;p thương hiệu n&agrave;y ph&aacute;t triển l&ecirc;n tầm cao mới.<strong>&nbsp;Nước hoa nam YSL</strong>&nbsp;được y&ecirc;u th&iacute;ch bởi vẻ ngo&agrave;i ấn tượng c&aacute; t&iacute;nh, m&ugrave;i hương&nbsp;mạnh mẽ đậm đặc. Được xem l&agrave; m&oacute;n qu&agrave; của thương hiệu gửi gắm đến những người đ&agrave;n &ocirc;ng th&agrave;nh đạt.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Yves Saint Laurent La Nuit de l`Homme\" height=\"390\" sizes=\"(max-width: 550px) 100vw, 550px\" src=\"https://theperfume.vn/wp-content/uploads/2017/05/echantillon-nuit-homme.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/05/echantillon-nuit-homme.png 550w, https://theperfume.vn/wp-content/uploads/2017/05/echantillon-nuit-homme-300x213.png 300w\" width=\"550\" /></p>\r\n\r\n<h2 style=\"text-align:center\"><strong>Nước hoa Yves Saint Laurent La Nuit de l`Homme đẳng cấp</strong></h2>\r\n\r\n<h3 style=\"text-align:center\">Hương thơm nam t&iacute;nh</h3>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa Yves Saint Laurent La Nuit de l`Homme</strong>&nbsp;xuất hiện tr&ecirc;n thị trường v&agrave;o th&aacute;ng 3 năm 2009, được s&aacute;ng tạo bởi ba nh&agrave; pha chế Anne Flipo, Dominique Ropion, Pierre Wargnye v&ocirc; c&ugrave;ng t&agrave;i năng.&nbsp;<strong>Yves Saint Laurent La Nuit de l`Homme&nbsp;</strong>mang đến sự h&agrave;i h&ograve;a thanh nh&atilde; qua&nbsp;từng lớp hương thơm kết hợp h&agrave;i h&ograve;a với nhau. Ở lớp hương&nbsp;đầu ti&ecirc;n vị cay nồng ấm n&oacute;ng của bạch đậu khẩu sẽ đ&oacute;ng vai tr&ograve; chủ đạo mang đến sự mạnh mẽ l&ocirc;i cuốn rất huyền b&iacute;. Nối tiếp ngay sau đ&oacute; l&agrave; vị tươi m&aacute;t của tr&aacute;i cam Bergamot kết hợp với gỗ tuyết t&ugrave;ng Virginia v&agrave; hoa oải hương tạo ra m&ugrave;i hương nồng n&agrave;n l&ocirc;i cuốn. Cuối c&ugrave;ng sự kết hợp t&agrave;i t&igrave;nh của c&oacute; hương b&agrave;i v&agrave; c&acirc;y th&igrave; l&agrave; Ba Tư sẽ gi&uacute;p c&aacute;c ch&agrave;ng trai th&ecirc;m phần sang trọng nam t&iacute;nh&nbsp;mạnh mẽ hơn bao giờ hết.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Yves Saint Laurent La Nuit de l`Homme</strong>&nbsp;c&oacute; hương thơm nồng n&agrave;n kh&oacute; cưỡng. Nam giới c&oacute; thể sử dụng khi tham gia những hoạt động ngo&agrave;i trời, rất thoải m&aacute;i.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Yves Saint Laurent La Nuit de l`Homme\" height=\"650\" sizes=\"(max-width: 493px) 100vw, 493px\" src=\"https://theperfume.vn/wp-content/uploads/2017/05/Yves-Saint-Laurent-La-Nuit-de-lHomme-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/05/Yves-Saint-Laurent-La-Nuit-de-lHomme-1.jpg 493w, https://theperfume.vn/wp-content/uploads/2017/05/Yves-Saint-Laurent-La-Nuit-de-lHomme-1-300x396.jpg 300w\" width=\"493\" /></p>\r\n\r\n<h3 style=\"text-align:center\"><strong>Yves Saint Laurent La Nuit de l`Homme&nbsp;t</strong>hiết kế&nbsp;mạnh mẽ</h3>\r\n\r\n<p style=\"text-align:center\">Nước hoa&nbsp;<strong>Yves Saint Laurent La Nuit de l`Homme</strong><strong>&nbsp;</strong>hiện đại, l&agrave; sự chọn lựa cực tốt của những ch&agrave;ng trai theo đuổi phong c&aacute;ch sang trọng, đẳng cấp v&agrave; thời thượng. Lấy t&ocirc;ng m&agrave;u đen&nbsp;sang trọng l&agrave;m chủ đạo, &nbsp;bề ngo&agrave;i&nbsp;<strong>Yves Saint Laurent La Nuit de l`Homme</strong>&nbsp;đơn giản nhưng rất đẳng cấp. Nắp chai tạo h&igrave;nh s&aacute;u cạnh tạo sự ấn tượng s&acirc;u sắc ch người d&ugrave;ng. Thiết kế độc đ&aacute;o n&agrave;y kh&aacute;c ho&agrave;n to&agrave;n so với c&aacute;c d&ograve;ng nước hoa c&ugrave;ng thương hiệu trước đ&oacute;.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Yves Saint Laurent La Nuit de l`Homme \" height=\"452\" sizes=\"(max-width: 500px) 100vw, 500px\" src=\"https://theperfume.vn/wp-content/uploads/2017/05/yves-saint-laurent-l-homme-la-nuit-800x722.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/05/yves-saint-laurent-l-homme-la-nuit-800x722.jpg 800w, https://theperfume.vn/wp-content/uploads/2017/05/yves-saint-laurent-l-homme-la-nuit-300x271.jpg 300w, https://theperfume.vn/wp-content/uploads/2017/05/yves-saint-laurent-l-homme-la-nuit-768x694.jpg 768w, https://theperfume.vn/wp-content/uploads/2017/05/yves-saint-laurent-l-homme-la-nuit.jpg 1196w\" width=\"500\" /></p>', '50', '50', 'Yves-Saint-Laurent-La-Nuit-de-lHomme-340x34055.jpg', 1, NULL, NULL),
(53, 2, 9, 3, 5, 'Nước hoa YSL Libre Eau De Parfum 100ml', '3500000', '3000000', '<h2><strong>Nước hoa YSL Libre Eau De Parfum</strong></h2>\r\n\r\n<h3><strong>Yves Saint Laurent Libre</strong></h3>\r\n\r\n<p>Tho&aacute;t ra khỏi những sự xa hoa ph&ugrave; phiếm thường thấy nay thương hiệu YSL cho ra đời<strong>&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-ysl-libre-eau-de-parfum/\">nước hoa YSL Libre</a>.</strong>&nbsp;Sản phẩm mang đến h&igrave;nh ảnh hiện đại của người phụ nữ tự do v&agrave; mạnh mẽ.&nbsp;<strong>Yves Saint Laurent Libre&nbsp;</strong>mi&ecirc;u tả sự tự do của người phụ nữ với m&ugrave;i hương ấm &aacute;p đến từ nh&oacute;m hương hoa cỏ phương đ&ocirc;ng. Khiến c&aacute;c n&agrave;ng trở n&ecirc;n ngọt ng&agrave;o, cuốn h&uacute;t hơn v&agrave; vẫn giữ được th&agrave;nh th&aacute;i sang chảnh, ki&ecirc;u sa của m&igrave;nh.</p>\r\n\r\n<p><img alt=\"Yv-es-Sai-nt-Laur-ent-Lib-re\" height=\"900\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re.png 900w, https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-800x800.png 800w, https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-340x340.png 340w, https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-768x768.png 768w, https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-100x100.png 100w\" width=\"900\" /></p>\r\n\r\n<p><em>Nước hoa YSL Libre Eau De Parfum</em></p>\r\n\r\n<p><strong>Đặc trưng nổi bật của Yves Saint Laurent Libre Eau De Parfum</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:</strong>&nbsp;Yves Saint Laurent</li>\r\n	<li><strong>Xuất xứ:</strong>&nbsp;Ph&aacute;p</li>\r\n	<li><strong>Nh&agrave; pha chế:</strong>&nbsp;Anne Flipo, Carlos Benaim</li>\r\n	<li><strong>Thời gian ra mắt:</strong>&nbsp;2019</li>\r\n	<li><strong>Nh&oacute;m hương:</strong>&nbsp;Amber Fougere &ndash; Hương phương đ&ocirc;ng</li>\r\n	<li><strong>Thời gian lưu hương:</strong>&nbsp;L&acirc;u, từ 7 đến 12 tiếng</li>\r\n	<li><strong>Độ tỏa hương:</strong>&nbsp;Gần, trong v&ograve;ng một c&aacute;nh tay</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;C&aacute; t&iacute;nh, Tươi mới</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Cam Mandarin, Nho đen, Hoa Lavender, Tinh dầu l&aacute; chanh</li>\r\n	<li><strong>Hương giữa:</strong>&nbsp;Hoa cam, Hoa nh&agrave;i, Hoa Lavender</li>\r\n	<li><strong>Hương cuối:</strong>&nbsp;Xạ hương, Ambergris, Gỗ tuyết t&ugrave;ng, Vanilla</li>\r\n	<li><strong>Thời điểm sử dụng th&iacute;ch hợp:</strong>&nbsp;M&ugrave;a xu&acirc;n &ndash; M&ugrave;a thu &ndash; M&ugrave;a đ&ocirc;ng, Ng&agrave;y &ndash; Đ&ecirc;m</li>\r\n	<li><strong>Dung t&iacute;ch phổ biến:</strong>&nbsp;5ml, 30ml, 50ml, 90ml</li>\r\n</ul>\r\n\r\n<h3><strong>Thương hiệu Yves Saint Laurent &ndash; Kh&aacute;c biệt v&agrave; &ldquo;độc t&ocirc;n&rdquo;</strong></h3>\r\n\r\n<p><strong>YSL&nbsp;</strong>hay<a href=\"https://theperfume.vn/brand/nuoc-hoa-ysl/\"><strong>&nbsp;Yves Saint Laurent</strong></a>&nbsp;hay thương hiệu thời trang đến từ nước Ph&aacute;p. Thương hiệu n&agrave;y được th&agrave;nh lập trong những năm 1960 đến năm 1970 bởi hai nh&agrave; thiết kế Pierre Berg&eacute; v&agrave; Yves Saint Laurent. Sau khi rời khỏi Dior nh&agrave; s&aacute;ng tạo đ&atilde; tạo ri&ecirc;ng cho m&igrave;nh một đế chế với phong c&aacute;ch kh&aacute;c biệt. Trong những năm đầu ti&ecirc;n YSL đ&atilde; mang đến h&agrave;ng loạt những BST ấn tượng, trong đ&oacute; đặc biệt phải kể đến phong c&aacute;ch Menswear. Tiếp tục ngay sau đ&oacute; &ocirc;ng cho ra đời d&ograve;ng mỹ phẩm cao cấp, c&ugrave;ng nước hoa d&agrave;nh cho nam v&agrave; nữ&hellip;</p>\r\n\r\n<p><img alt=\"Yv-es-Sai-nt-Laur-ent-Lib-re-for-wm\" height=\"719\" sizes=\"(max-width: 800px) 100vw, 800px\" src=\"https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-for-wm.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-for-wm.png 800w, https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-for-wm-768x690.png 768w, https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-for-wm-300x270.png 300w\" width=\"800\" /></p>\r\n\r\n<p><em>Yves Saint Laurent Libre Eau De Parfum</em></p>\r\n\r\n<p>Kh&ocirc;ng chỉ thời trang m&agrave; nước hoa của nh&agrave; YSL cũng ảnh hưởng đến thời trang thế giới rất nhiều. Nước hoa YSL khẳng định phong c&aacute;ch của m&igrave;nh bởi sự c&aacute; t&iacute;nh v&agrave; kh&aacute;c biệt. C&aacute;c sản phẩm&nbsp;<strong><a href=\"https://theperfume.vn/nuoc-hoa-nu/ysl-women/\">nước hoa nữ YSL</a></strong>&nbsp;v&agrave; nước hoa nam YSL được kết hợp bởi rất nhiều chuy&ecirc;n gia h&agrave;ng đầu thế giới. Từ đ&oacute; cho ra đời những m&ugrave;i hương kinh điển khiến cả thế giới biết đến. Mỗi lần trai nghiệm nước hoa YSL l&agrave; cả ch&agrave;ng v&agrave; n&agrave;ng đều được trải nghiệm sự sang trọng v&agrave; đẳng cấp.</p>\r\n\r\n<h2><strong>Nước hoa YSL Libre &ndash; M&ugrave;i hương của sự tự do</strong></h2>\r\n\r\n<h3><strong>Yves Saint Laurent Libre Eau De Parfum</strong></h3>\r\n\r\n<p>Như cho m&igrave;nh một bước tiến mới với nước hoa YSL cho ra đời<strong>&nbsp;nước hoa YSL Libre&nbsp;</strong>v&agrave;o năm 2019<strong>.&nbsp;</strong>Tho&aacute;t ra khỏi những điều ph&ugrave; phiếm, xa hoa thường thấy, sản phẩm lại mi&ecirc;u tả về một người phụ nữ hiện đại đầy tự do v&agrave; mạnh mẽ.&nbsp;<strong>YSL Libre</strong><strong>&nbsp;</strong>mang hương thơm nồng ấm, ngọt ng&agrave;o của nh&oacute;m hương hoa cỏ phương đ&ocirc;ng. Từ đ&oacute; mang đến một kh&aacute;i niệm mới cho những c&ocirc; n&agrave;ng của YSL..</p>\r\n\r\n<p><img alt=\"Yves Saint Laurent Libre\" height=\"900\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-1.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-1.png 900w, https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-1-800x800.png 800w, https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-1-340x340.png 340w, https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-1-768x768.png 768w, https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-1-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-1-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-1-100x100.png 100w\" width=\"900\" /></p>\r\n\r\n<p><em>Nước hoa YSL Libre &ndash; M&ugrave;i hương của sự tự do</em></p>\r\n\r\n<h3><strong>Lật mở từng nốt hương của Yves Saint Laurent Libre EDP</strong></h3>\r\n\r\n<p><strong>Yves Saint Laurent Libre</strong>&nbsp;như đưa n&agrave;ng v&agrave;o kh&ocirc;ng gian của sự tự do, cho n&agrave;ng cảm nhận sự mạnh mẽ của ch&iacute;nh m&igrave;nh. Hương cam Mandarin sảng kho&aacute;i c&ugrave;ng tinh dầu l&aacute; chanh thơm m&aacute;t cho mở đầu đầy sảng kho&aacute;i. Nho đen chua nhẹ, tự nhi&ecirc;n t&ocirc; điểm c&ugrave;ng những đ&oacute;a hoa lavender nhẹ nh&agrave;ng, thoải m&aacute;i. Hương hoa Lavender kết nối từ nốt hương đầu sang nốt hương tr&aacute;i tim. Nơi đ&oacute; &aacute;nh l&ecirc;n sự tươi tắn, sống động của hoa cam c&ugrave;ng n&eacute;t ngọt ng&agrave;o của hoa nh&agrave;i tinh khiết. Nốt hương cuối trở n&ecirc;n nồng ấm hơn với hương gỗ tuyết t&ugrave;ng v&agrave; Ambergris. Vanilla mềm mại, &ecirc;m &aacute;i tỏa hương xuy&ecirc;n suốt c&ugrave;ng xạ hương quyến rũ, cho nốt hương th&ecirc;m bền l&acirc;u r&ecirc;n cơ thể n&agrave;ng.</p>\r\n\r\n<p><img alt=\"Yves Saint Laurent Libre EDP\" height=\"900\" sizes=\"(max-width: 900px) 100vw, 900px\" src=\"https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-EDP.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-EDP.png 900w, https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-EDP-800x800.png 800w, https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-EDP-340x340.png 340w, https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-EDP-768x768.png 768w, https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-EDP-200x200.png 200w, https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-EDP-300x300.png 300w, https://theperfume.vn/wp-content/uploads/2021/11/Yves-Saint-Laurent-Libre-EDP-100x100.png 100w\" width=\"900\" /></p>\r\n\r\n<p><em>Lật mở từng nốt hương của Yves Saint Laurent Libre EDP</em></p>\r\n\r\n<p>Với&nbsp;<strong>YSL Libre</strong><strong>,&nbsp;</strong>c&aacute;c c&ocirc; n&agrave;ng của YSL được trải nghiệm sự đột ph&aacute; về c&aacute; t&iacute;nh v&agrave; sự tự do.&nbsp;<strong>Yves Saint Laurent Libre EDP</strong><strong>&nbsp;</strong>nổi trội giữa thế giới nước hoa với h&agrave;ng ng&agrave;n hương thơm mang phong c&aacute;ch kh&aacute;c nhau. Kết hợp c&ugrave;ng l&agrave;n da mịn m&agrave;ng của n&agrave;ng cho sự xuất hiện của n&agrave;ng th&ecirc;m phần ấn tượng.</p>\r\n\r\n<h3><strong>Ngoại h&igrave;nh của nước hoa YSL Libre Eau De Parfum</strong></h3>\r\n\r\n<p><strong>Yves Saint Laurent Libre EDP</strong>&nbsp;thể hiện sự đẳng cấp, c&aacute; t&iacute;nh của m&igrave;nh ngay từ thiết kế. Chai&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/\"><strong>nước hoa</strong></a>&nbsp;h&igrave;nh chữ nhật được l&agrave;m bằng chất liệu thủy tinh trong suốt cứng c&aacute;p. Bao bọc lấy n&oacute; l&agrave; logo YSL phủ lớp v&agrave;ng kim c&ugrave;ng tinh chất nước hoa v&agrave;ng sang chảnh thể hiện sự xa hoa. Nắp chai bất đối xứng đen l&aacute;y nổi bật, c&ugrave;ng chiếc cổ chai cao ngần được đ&iacute;nh chi tiết d&acirc;y x&iacute;ch v&agrave;ng. Tổng thể&nbsp;<strong>Yves Saint Laurent Libre</strong>&nbsp;to&aacute;t l&ecirc;n sự đẳng cấp của một thương hiệu nổi tiếng thế giới.</p>\r\n\r\n<p><img alt=\"Yv-es-Sai-nt-Laur-ent-Lib-re-tk\" height=\"1239\" sizes=\"(max-width: 1080px) 100vw, 1080px\" src=\"https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-tk.png\" srcset=\"https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-tk.png 1080w, https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-tk-697x800.png 697w, https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-tk-768x881.png 768w, https://theperfume.vn/wp-content/uploads/2021/11/Yv-es-Sai-nt-Laur-ent-Lib-re-tk-300x344.png 300w\" width=\"1080\" /></p>\r\n\r\n<p><em>YSL Libre Eau De Parfum sang chảnh v&agrave; tinh tế</em></p>', '50', NULL, 'Nuoc-hoa-YSL-Libre-300x30394.png', 1, NULL, NULL);
INSERT INTO `sanpham` (`spMa`, `loaiMa`, `thMa`, `muaMa`, `dtMa`, `spTen`, `spGia`, `spGiaGoc`, `spMoTa`, `spSoLuong`, `spSoLuongDaBan`, `spHinhAnh`, `spTrangThai`, `created_at`, `updated_at`) VALUES
(54, 2, 9, 4, 5, 'Nước hoa YSL Black Opium Eau De Parfum 100ml', '3300000', '2800000', '<h2><strong>Nước Hoa Yves Saint Laurent Black Opium&nbsp;Eau De Parfum&nbsp;</strong></h2>\r\n\r\n<h3>Yves Saint Laurent Black Opium</h3>\r\n\r\n<p>Nước hoa&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/yves-saint-laurent-black-opium/\"><strong>Yves Saint Laurent Black Opium</strong></a><strong>&nbsp;</strong>của thương hiệu Yves Saint Laurent l&agrave; một m&ugrave;i hương g&acirc;y nghiện với sự kết hợp mang đặc trưng ri&ecirc;ng của thương hiệu n&agrave;y. Hương thơm l&agrave; sự kết hợp của c&aacute;c nốt hương ch&iacute;nh l&agrave; hoa cỏ v&agrave; caf&eacute;. Mang đến một m&ugrave;i hương mới mẻ năng động v&agrave; tự tin. Black Opium ph&ugrave; hợp những ng&agrave;y se lạnh, l&agrave; m&oacute;n qu&agrave; d&agrave;nh cho những c&ocirc; n&agrave;ng d&ugrave;ng h&agrave;ng ng&agrave;y để khẳng định c&aacute;c t&iacute;nh ri&ecirc;ng của m&igrave;nh.</p>\r\n\r\n<p><img alt=\"Yves-Saint-Laurent-Black-Opium-4-800x464\" height=\"431\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-4-800x464-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-4-800x464-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-4-800x464-1-300x216.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3><strong>Đặc điểm của nước hoa Yves Saint Laurent Black Opium&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:&nbsp;</strong>Yves Saint Laurent</li>\r\n	<li><strong>Xuất xứ:&nbsp;</strong>Ph&aacute;p</li>\r\n	<li><strong>Nh&oacute;m nước hoa:&nbsp;</strong>Hương cay nồng phương Đ&ocirc;ng</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;2014</li>\r\n	<li><strong>Nồng độ:</strong>&nbsp;EDP</li>\r\n	<li><strong>S&aacute;ng tạo bởi:</strong>&nbsp;Honorine Blanc,&nbsp;Marie Salamagne,&nbsp;Nathalie Lorson v&agrave;&nbsp;Olivier Cresp</li>\r\n	<li><strong>Độ lưu hương:</strong>&nbsp;Trung b&igrave;nh, trong khoảng từ 4 đến 6 giờ</li>\r\n	<li><strong>Độ toả hương:</strong>&nbsp;Thoang thoảng, dịu nhẹ xung quanh&nbsp;</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng:</strong>&nbsp;Ng&agrave;y &ndash; đ&ecirc;m, m&ugrave;a thu &ndash; đ&ocirc;ng</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;Cuốn h&uacute;t, năng động, l&ocirc;i cuốn</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Hồng ti&ecirc;u,&nbsp;Hoa cam,&nbsp;Quả l&ecirc;</li>\r\n	<li><strong>Hương giữa:</strong>&nbsp;C&agrave; ph&ecirc;,&nbsp;Hoa nh&agrave;i</li>\r\n	<li><strong>Hương cuối:</strong>&nbsp;Hương Va ni,&nbsp;C&acirc;y hoắc hương,&nbsp;Gỗ tuyết t&ugrave;ng</li>\r\n	<li><strong>Dung t&iacute;ch:&nbsp;</strong>10ml, 20ml, 30ml, 50ml, 90ml</li>\r\n</ul>\r\n\r\n<p><img alt=\"Yves-Saint-Laurent-Black-Opium-3\" height=\"407\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-3-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-3-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-3-1-300x204.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h2><strong>V&agrave;i n&eacute;t về thương hiệu nước hoa&nbsp;<strong>Yves Saint Laurent&nbsp;</strong></strong></h2>\r\n\r\n<p><strong>Yves Saint Laurent (YSL)</strong>&nbsp;&ndash; thương hiệu dẫn đầu ng&agrave;nh c&ocirc;ng nghiệp thời trang&nbsp;của Ph&aacute;p thế kỷ 20. Sở hữu trong tay h&agrave;ng loạt c&aacute;c bộ sưu tập thời trang, mỹ phẩm đ&igrave;nh đ&aacute;m YSL lu&ocirc;n được c&aacute;c ng&ocirc;i sao h&agrave;ng đầu thế giới ưu &aacute;i lựa chọn.&nbsp;<a href=\"https://theperfume.vn/brand/nuoc-hoa-ysl/\"><strong>Nước hoa YSL</strong></a>&nbsp;d&agrave;nh cho nữ&nbsp;ra đời năm 1964, ch&iacute;nh thức mở đầu thời kỳ ho&agrave;ng kim của&nbsp;<strong>nước hoa YSL</strong>. Hiện tại thương hiệu đ&atilde; nắm giữ hơn 150 loại&nbsp;<a href=\"https://theperfume.vn/\"><strong>nước hoa</strong></a>, một số m&ugrave;i hương đ&atilde; trở th&agrave;nh kinh điển như:&nbsp;Rive Gauche,&nbsp;Baby Doll, Elle,&hellip;</p>\r\n\r\n<p><img alt=\"Yves-Saint-Laurent-Black-Opium-2\" height=\"400\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-2-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-2-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-2-1-300x200.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h2><strong>Ưu điểm của nước hoa&nbsp;<strong>Yves Saint Laurent Black Opium</strong></strong></h2>\r\n\r\n<h3><strong>Yves Saint Laurent Black Opium &ndash; h</strong><strong>ương thơm g&acirc;y nghiện d&agrave;nh cho c&aacute;c c&ocirc; n&agrave;ng năng động</strong></h3>\r\n\r\n<p>Nước hoa&nbsp;<strong>Yves Saint Laurent Black Opium</strong>&nbsp;ra mắt v&agrave;o năm 2014, với sự kết hợp của c&aacute;c chuy&ecirc;n gia nước hoa Honorine Blanc, Marie Salamagne, Nathalie Lorson v&agrave; Olivier Cresp nổi tiếng thế giới. Buổi ra mắt được tổ chức trong một kh&ocirc;ng gian nhạc rock and roll cổ điển l&agrave;m nổi bật l&ecirc;n kh&iacute;a cạnh b&iacute; ẩn, huyền ảo của thương hiệu cũng như m&ugrave;i hương của sản phẩm nước hoa n&agrave;y. Hương thơm l&agrave; hiện th&acirc;n của c&aacute;c c&ocirc; n&agrave;ng c&aacute; t&iacute;nh kh&ocirc;ng ngại thể hiện c&aacute;i t&ocirc;i kh&aacute;c biệt của m&igrave;nh.</p>\r\n\r\n<p>Khi trải nghiệm&nbsp;<strong>Yves Saint Laurent Black Opium&nbsp;</strong>ra sẽ cảm nhận hương vị cafe lan tỏa khắp kh&ocirc;ng gian mang đến cảm gi&aacute;c dịu nhẹ v&agrave; thư th&aacute;i. Th&agrave;nh phần cafe đ&oacute;ng vai tr&ograve; thống trị to&agrave;n bộ hương vị nước hoa nhưng ta cũng thể bỏ qua c&aacute;c nốt hương hoa trắng h&ograve;a quyện mang đế sự tinh kh&ocirc;i, tinh khiết. Hương vị của hồng ti&ecirc;u mang đến một n&eacute;t quyết đo&aacute;n, tố chất l&atilde;nh đạo của c&aacute;c c&ocirc; g&aacute;i. Lớp hương l&agrave;m c&acirc;n bằng to&agrave;n bộ c&aacute;c th&agrave;nh phần l&agrave; hương va &ndash; ni, c&acirc;y hoắc hương v&agrave; gỗ tuyết t&ugrave;ng. Tất cả được h&ograve;a quyện c&ugrave;ng nhau,&nbsp;<strong>Yves Saint Laurent Black Opium</strong>&nbsp;lưu lại tr&ecirc;n l&agrave;n da bạn l&agrave; m&ugrave;i hương năng động, gợi cảm, ho&agrave;n to&agrave;n kh&ocirc; tho&aacute;ng.</p>\r\n\r\n<p><img alt=\"yves-saint-laurent-black-opium_4\" height=\"402\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/07/yves-saint-laurent-black-opium_4.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/07/yves-saint-laurent-black-opium_4.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/07/yves-saint-laurent-black-opium_4-300x201.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3><strong>Yves Saint Laurent&nbsp;</strong><strong>Black Opium một biểu tượng mới d&agrave;nh cho c&aacute;c qu&yacute; c&ocirc; hiện đại</strong></h3>\r\n\r\n<p><strong>Yves Saint Laurent Black Opium</strong>&nbsp;mang trong m&igrave;nh hương thơm đ&aacute;nh thức những niềm cảm hứng v&agrave; s&aacute;ng tạo v&ocirc; tận. Hương nước hoa n&agrave;y đại diện cho c&aacute;c qu&yacute; c&ocirc; đang theo đuổi, đam m&ecirc; những điều mới mẻ mang t&iacute;nh thời đại.&nbsp;<strong>Black Opium</strong>&nbsp;l&agrave; hương thơm năng động nhưng lại mang phong vị b&iacute; ẩn, l&agrave;m thu h&uacute;t được nhiều &aacute;nh nh&igrave;n t&ograve; m&ograve; của người đối diện. Hơn thế nữa, m&ugrave;i hương&nbsp;<strong>Yves Saint Laurent Black Opium</strong>&nbsp;kh&aacute; đa dụng, bạn c&oacute; thể sử dụng h&agrave;ng ng&agrave;y để định h&igrave;nh cho m&igrave;nh một c&aacute; t&iacute;nh kh&aacute;c biệt, chắc chắn sẽ l&agrave;m bạn g&acirc;y nghiện đến nỗi những người đ&atilde; từng sử dụng nhận x&eacute;t: &ldquo; Hương thơm như một liều thuốc adrenelin gi&uacute;p cho ta khao kh&aacute;t giải ph&oacute;ng những năng lượng t&iacute;ch cực&rdquo;.</p>\r\n\r\n<p><img alt=\"Yves-Saint-Laurent-Black-Opium-1\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-1-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-1-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-1-1-200x200.jpg 200w, https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-1-1-100x100.jpg 100w, https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-1-1-300x300.jpg 300w, https://theperfume.vn/wp-content/uploads/2017/07/Yves-Saint-Laurent-Black-Opium-1-1-340x340.jpg 340w\" width=\"600\" /></p>\r\n\r\n<p>Nước hoa&nbsp;<strong>Yves Saint Laurent Black Opium</strong>&nbsp;được thiết kế mang m&agrave;u sắc b&iacute; ẩn, mạnh mẽ, huyền b&iacute;. Vỏ ngo&agrave;i m&agrave;u đen với những hạt lấp l&aacute;nh mang phong c&aacute;ch cổ điển mạnh mẽ của &acirc;m nhạc rock nước Anh. Sự sang trọng v&agrave; huyền ảo l&agrave; hai từ ho&agrave;n hảo nhất để n&oacute;i về mẫu thiết kế n&agrave;y.</p>', '50', NULL, 'Yves-Saint-Laurent-Black-Opium-5-340x34089.jpg', 1, NULL, NULL),
(55, 1, 2, 3, 5, 'Nước Hoa Dolce & Gabbana The One for Men EDP 100ml', '2100000', '1600000', '<h2>Nước Hoa Dolce &amp; Gabbana The One for Men EDP</h2>\r\n\r\n<h3>Dolce &amp; Gabbana The One for Men EDP</h3>\r\n\r\n<p>Nước hoa&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/dolce-gabbana-the-one-for-men-edp/\"><strong>Dolce &amp; Gabbana&nbsp;</strong><strong>The One for Men EDP</strong></a>&nbsp;của thương hiệu nước hoa cao cấp Dolce &amp; Gabbana&nbsp;ra mắt năm 2015. Thuộc nh&oacute;m hương gỗ nồng n&agrave;n với thời gian lưu m&ugrave;i l&acirc;u tr&ecirc;n da,&nbsp;The One for Men EDP mang đến phong c&aacute;ch nam t&iacute;nh, lịch l&atilde;m v&ocirc; c&ugrave;ng cuốn h&uacute;t.</p>\r\n\r\n<p><img alt=\"The-One-for-Men-EDP-2\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-2-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-2-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-2-1-200x200.jpg 200w, https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-2-1-100x100.jpg 100w, https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-2-1-300x300.jpg 300w, https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-2-1-340x340.jpg 340w\" width=\"600\" /></p>\r\n\r\n<h3><strong>Đặc điểm của nước hoa&nbsp;Dolce &amp; Gabbana&nbsp;The One for Men EDP&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu</strong>:&nbsp;Dolce &amp; Gabbana</li>\r\n	<li><strong>Nh&oacute;m hương</strong>: Hương gỗ cay nồng &ndash;&nbsp;Woody Spicy</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;2015</li>\r\n	<li><strong>S&aacute;ng tạo bởi:</strong>&nbsp;Olivier Polge</li>\r\n	<li><strong>Thời gian lưu hương</strong>: Kh&aacute; l&acirc;u, trung b&igrave;nh từ 7 đến 12 giờ</li>\r\n	<li><strong>Độ tỏa hương</strong>: Thoang thoảng, dịu nhẹ xung quanh&nbsp;</li>\r\n	<li><strong>Phong c&aacute;ch</strong>: Nam t&iacute;nh, mạnh mẽ, cuốn h&uacute;t</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng</strong>: M&ugrave;a xu&acirc;n &ndash; thu, ng&agrave;y &ndash; đ&ecirc;m</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Hạt rau m&ugrave;i, bưởi, rau h&uacute;ng quế</li>\r\n	<li><strong>Hương giữa:</strong>&nbsp;Gừng, hoa cam, bạch đậu khấu</li>\r\n	<li><strong>Hương cuối:</strong>&nbsp;Thuốc l&aacute;, hổ ph&aacute;ch, tuyết t&ugrave;ng</li>\r\n	<li><strong>Dung t&iacute;ch:&nbsp;</strong>50ml, 100ml, 150ml</li>\r\n</ul>\r\n\r\n<h2>V&agrave;i n&eacute;t về thương hiệu nước hoa&nbsp;<strong>Dolce &amp; Gabbana</strong></h2>\r\n\r\n<p>Thương hiệu thời trang&nbsp;<strong>Dolce &amp; Gabbana</strong>&nbsp;&ndash; được th&agrave;nh lập năm 1985 do hai nh&agrave; thiết kế người &Yacute; s&aacute;ng lập n&ecirc;n. Ngay từ những ng&agrave;y đầu ra mắt, những bộ trang phục đ&atilde; nhanh ch&oacute;ng khẳng định được đẳng cấp v&agrave; c&oacute; chỗ đứng vững chắc trong l&agrave;ng thời trang thế giới.</p>\r\n\r\n<p>Thương hiệu&nbsp;<a href=\"https://theperfume.vn/brand/nuoc-hoa-dolce-and-gabbana/\"><strong>nước hoa Dolce &amp; Gabbana</strong>&nbsp;</a>được ra mắt đầu ti&ecirc;n v&agrave;o năm 1992 đến nay đ&atilde; cho ra rất nhiều c&aacute;c d&ograve;ng nước hoa kh&aacute;c nhau d&agrave;nh cho cả nam lẫn nữ. D&ograve;ng&nbsp;<a href=\"https://theperfume.vn/\"><strong>nước hoa</strong></a>&nbsp;nam đ&igrave;nh đ&aacute;m cho t&ecirc;n viết tắt l&agrave; D&amp;G đ&atilde; rất nhanh ch&oacute;ng th&agrave;nh c&ocirc;ng. Với việc sử dụng c&aacute;c hương liệu qu&yacute; hiếm đ&atilde; tạo n&ecirc;n m&ugrave;i hương mang m&agrave;u sắc t&aacute;o bạo, gợi cảm v&agrave; cổ điển, l&agrave;m chinh phục được khứu gi&aacute;c người d&ugrave;ng d&ugrave; l&agrave; kh&oacute; t&iacute;nh nhất.</p>\r\n\r\n<p><img alt=\"The-One-for-Men-EDP-1-566x800\" height=\"299\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-1-566x800-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-1-566x800-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-1-566x800-1-300x150.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h2><strong>Đặc điểm của nước Hoa&nbsp;</strong><strong>Dolce &amp; Gabbana&nbsp;<strong>The One for Men EDP</strong></strong></h2>\r\n\r\n<h3><strong>Hương thơm nam t&iacute;nh mạnh mẽ s&acirc;u đậm</strong></h3>\r\n\r\n<p>Thương hiệu nước hoa cao cấp Dolce &amp; Gabbana đ&atilde; cho ra mắt&nbsp;<strong>The One for Men EDP</strong>&nbsp;v&agrave;o năm 2015, thuộc nh&oacute;m hương gỗ nồng n&agrave;n l&ocirc;i cuốn v&agrave; b&aacute;m m&ugrave;i rất l&acirc;u tr&ecirc;n da. L&agrave; một sản phẩm n&acirc;ng cấp s&aacute;ng tạo dựa tr&ecirc;n tuyệt phẩm The One for Men 2008,&nbsp;<strong>The One for Men EDP&nbsp;</strong>được nhắc đến l&agrave; d&ograve;ng nước hoa c&oacute; hương thơm đậm đặc nam t&iacute;nh kinh điển.</p>\r\n\r\n<p>Nước Hoa&nbsp;<strong>Dolce &amp; Gabbana The One for Men EDP</strong>&nbsp;l&agrave; sự kết hợp của những th&agrave;nh phần chiết xuất từ tự nhi&ecirc;n, lớp hương đầu của hạt rau m&ugrave;i, bưởi, rau h&uacute;ng quế mang đến cảm gi&aacute;c nhẹ nh&agrave;ng thư th&aacute;i kh&aacute;c ho&agrave;n to&agrave;n so với những d&ograve;ng nước hoa trước đ&acirc;y. Lớp hương giữa l&agrave; sự mạnh mẽ cay nồng của hương gừng, sự tươi m&aacute;t của c&aacute;nh&nbsp;hoa cam, ch&uacute;t ấm &aacute;p của bạch đậu khấu. Cuối c&ugrave;ng nốt&nbsp;hương của thuốc l&aacute; mạnh mẽ h&ograve;a quyện c&ugrave;ng sự rắn rỏi của&nbsp;hổ ph&aacute;ch, tuyết t&ugrave;ng mang đến n&eacute;t dấu ấn ri&ecirc;ng của&nbsp;<strong>The One for Men EDP&nbsp;</strong>m&agrave; kh&ocirc;ng loại nước hoa n&agrave;o c&oacute; thể nhầm lẫn được.</p>\r\n\r\n<p><img alt=\"The-One-for-Men-EDP-3\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-3-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-3-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-3-1-200x200.jpg 200w, https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-3-1-100x100.jpg 100w, https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-3-1-300x300.jpg 300w, https://theperfume.vn/wp-content/uploads/2017/04/The-One-for-Men-EDP-3-1-340x340.jpg 340w\" width=\"600\" /></p>\r\n\r\n<h3>Thiết kế sang trọng b&iacute; ẩn</h3>\r\n\r\n<p>Nước Hoa&nbsp;<strong>Dolce &amp; Gabbana The One for Men EDP</strong>&nbsp;mang đường n&eacute;t cổ điển, mạnh mẽ của c&aacute;c ch&agrave;ng trai. Tr&ecirc;n t&ocirc;ng m&agrave;u n&acirc;u đen chủ đạo kết hợp c&ugrave;ng ch&uacute;t v&agrave;ng &aacute;nh kim xuất hiện ở tr&ecirc;n th&acirc;n chai tạo điểm nhấn cho thiết kế n&agrave;y. Thiết kế vu&ocirc;ng vắn,&nbsp;<strong>The One for Men EDP</strong>&nbsp;dễ d&agrave;ng cất giữ, b&ecirc;n bạn mọi nơi. Logo thương hiệu in sắc n&eacute;t nổi bật ở phần cuối chai.</p>', '50', NULL, 'The-One-for-Men-EDP-4-1-340x34092.jpg', 1, NULL, NULL),
(56, 1, 2, 2, 5, 'Nước Hoa Dolce & Gabbana Light Blue Living Stromboli', '2000000', '1500000', '<h2>Nước Hoa Dolce &amp; Gabbana Light Blue Living Stromboli</h2>\r\n\r\n<h3>Dolce &amp; Gabbana Light Blue Living Stromboli</h3>\r\n\r\n<p>Nước hoa&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/dolce-gabbana-light-blue-living-stromboli/\"><strong>Dolce &amp; Gabbana Light Blue Living Stromboli</strong></a>&nbsp;d&agrave;nh cho nam ra mắt v&agrave;o năm 2012, thuộc nh&oacute;m hương gỗ biển ph&oacute;ng kho&aacute;ng tươi trẻ đầy nhiệt huyết. Lấy &yacute; tưởng từ v&ugrave;ng biển Địa Trung Hải&nbsp;xanh m&aacute;t đẹp tuyệt, hương thơm thanh m&aacute;t, xua tan đi những mệt mỏi ưu phiền mang đến cảm gi&aacute;c dễ chịu cho người sử dụng.</p>\r\n\r\n<p><img alt=\"Light-Blue-Living-Stromboli-2\" height=\"257\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/04/Light-Blue-Living-Stromboli-2-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/04/Light-Blue-Living-Stromboli-2-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/04/Light-Blue-Living-Stromboli-2-1-300x129.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3><strong>Đặc điểm của nước hoa&nbsp;Dolce &amp; Gabbana Light Blue Living Stromboli</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:&nbsp;</strong>Dolce &amp; Gabbana</li>\r\n	<li><strong>Nh&oacute;m nước hoa:</strong>&nbsp;Hương gỗ biển</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;2012</li>\r\n	<li><strong>Độ lưu hương:</strong>&nbsp;Trung b&igrave;nh, trong khoảng từ 3 đến 6 giờ</li>\r\n	<li><strong>Độ toả hương:</strong>&nbsp;Thoang thoảng, dịu nhẹ xung quanh</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng:</strong>&nbsp;M&ugrave;a h&egrave;, ng&agrave;y &ndash; đ&ecirc;m</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;Nam t&iacute;nh, thanh lịch</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Chi cam chanh, Hồng ti&ecirc;u</li>\r\n	<li><strong>Hương giữa:</strong>&nbsp;Hương nước, Hoa phong lữ</li>\r\n	<li><strong>Hương cuối:</strong>&nbsp;Cỏ hương b&agrave;i, C&acirc;y hoắc hương, Hổ ph&aacute;ch</li>\r\n	<li><strong>Dung t&iacute;ch:</strong>&nbsp;40ml, 75ml, 125ml</li>\r\n</ul>\r\n\r\n<h2>V&agrave;i n&eacute;t về thương hiệu nước hoa&nbsp;<strong>Dolce &amp; Gabbana</strong></h2>\r\n\r\n<p><strong>Thương hiệu Dolce &amp; Gabbana</strong>&nbsp;(D&amp;G) th&agrave;nh lập năm 1985 do 2 nh&agrave; thiết kế người &Yacute; l&agrave; Domenico Dolce v&agrave; Stefano Gabbana s&aacute;ng lập l&ecirc;n. Ngo&agrave;i&nbsp;sự th&agrave;nh c&ocirc;ng của&nbsp;những bộ c&aacute;nh thời trang lạ lẫm v&agrave; đẳng cấp,&nbsp;thương hiệu n&agrave;y c&ograve;n cho ra mắt d&ograve;ng&nbsp;<a href=\"https://theperfume.vn/brand/nuoc-hoa-dolce-and-gabbana/\"><strong>nước hoa Dolce and Gabbana</strong></a>&nbsp;đ&igrave;nh đ&aacute;m. Thu h&uacute;t c&aacute;c ch&agrave;ng trai bởi m&ugrave;i hương nam t&iacute;nh kinh điển tạo ra từ c&aacute;c hương liệu thi&ecirc;n nhi&ecirc;n qu&yacute; hiếm. Sự h&ograve;a&nbsp;quyện đ&oacute; khiến&nbsp;<a href=\"https://theperfume.vn/\"><strong>nước hoa</strong></a>&nbsp;nam Dolce &amp; Gabbana tạo n&ecirc;n một dấu ấn ri&ecirc;ng kh&oacute; c&oacute; thể chối từ.</p>\r\n\r\n<p><img alt=\"Light-Blue-Living-Stromboli-1\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/04/Light-Blue-Living-Stromboli-1-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/04/Light-Blue-Living-Stromboli-1-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/04/Light-Blue-Living-Stromboli-1-1-200x200.jpg 200w, https://theperfume.vn/wp-content/uploads/2017/04/Light-Blue-Living-Stromboli-1-1-100x100.jpg 100w, https://theperfume.vn/wp-content/uploads/2017/04/Light-Blue-Living-Stromboli-1-1-300x300.jpg 300w, https://theperfume.vn/wp-content/uploads/2017/04/Light-Blue-Living-Stromboli-1-1-340x340.jpg 340w\" width=\"600\" /></p>\r\n\r\n<h2><strong>Đặc điểm của nước Hoa&nbsp;</strong><strong>Dolce &amp; Gabbana Light Blue Living Stromboli&nbsp;</strong></h2>\r\n\r\n<h3><strong>C&aacute;c nốt hương h&ograve;a quyện theo x&uacute;c cảm</strong></h3>\r\n\r\n<p>Nước hoa&nbsp;<strong>Dolce &amp; Gabbana Light Blue Living Stromboli&nbsp;</strong>d&agrave;nh cho nam ra mắt năm 2012, được lấy &yacute; tưởng từ ng&ocirc;i l&agrave;ng Portofino ven biển v&agrave; đảo n&uacute;i lửa Stromboli thuộc v&ugrave;ng biển Địa Trung Hải đẹp lộng lẫy. Giống như một cuộc phi&ecirc;u lưu một h&agrave;nh tr&igrave;nh gợi mở, khi sử dụng&nbsp;<strong>Light Blue Living Stromboli&nbsp;</strong>ph&aacute;i mạnh sẽ cảm nhận được sự tươi m&aacute;t, xua tan đi những mệt mỏi đem lại nguồn năng lượng mới cho cơ thể.&nbsp;Lớp hương đầu l&agrave; n&eacute;t tươi s&aacute;ng của ch&uacute;t&nbsp;cam chanh c&ugrave;ng ch&uacute;t cay nồng của c&acirc;y hồng ti&ecirc;u, tiếp ngay sau đ&oacute; l&agrave; lớp hương giữa ngọt của hoa phong lữ. Cuối c&ugrave;ng hương thơm nhẹ nh&agrave;ng thanh tho&aacute;t của&nbsp;Cỏ hương b&agrave;i, hoắc hương&nbsp;v&agrave; hổ ph&aacute;ch sẽ mang đến hương thơm thoang thoảng thanh m&aacute;t tr&ecirc;n da, v&ocirc; c&ugrave;ng hấp dẫn.</p>\r\n\r\n<p><img alt=\"Light-Blue-Living-Stromboli-3-768x512\" height=\"450\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/04/Light-Blue-Living-Stromboli-3-768x512-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/04/Light-Blue-Living-Stromboli-3-768x512-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/04/Light-Blue-Living-Stromboli-3-768x512-1-300x225.jpg 300w\" width=\"600\" /></p>\r\n\r\n<p>Nước hoa&nbsp;<strong>Dolce &amp; Gabbana Light Light Blue Living Stromboli&nbsp;</strong>thiết kế bằng chai thủy tinh trong suốt lộ r&otilde; t&ocirc;ng m&agrave;u xanh dương b&ecirc;n trong. Nắp chai được thiết kế nửa trắng nửa bạc tạo ấn tượng s&acirc;u sắc cho mọi người khi lần đầu nh&igrave;n thấy. Hương thơm thoang thoảng tr&ecirc;n da,&nbsp;<strong>Light Blue Living Stromboli&nbsp;</strong>c&oacute; thể giữ m&ugrave;i trong khoảng từ 3 đến 6 giờ đồng hồ mỗi lần sử dụng.&nbsp;&nbsp;</p>', '50', NULL, 'Light-Blue-Living-Stromboli-340x34017.jpg', 1, NULL, NULL),
(57, 1, 2, 1, 5, 'Nước Hoa Dolce & Gabbana The One Gentleman Eau De Toilette 100ml', '1900000', '1500000', '<h2><strong>Nước Hoa&nbsp;</strong><strong>Dolce &amp; Gabbana The One Gentleman&nbsp;Eau De Toilette&nbsp;</strong></h2>\r\n\r\n<h3><strong>Dolce &amp; Gabbana&nbsp;</strong><strong>The One Gentleman</strong></h3>\r\n\r\n<p>Nước hoa&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-dolce-gabbana-the-one-gentleman/\"><strong>Dolce &amp; Gabbana The One Gentleman</strong></a>&nbsp;của thương hiệu Dolce &amp; Gabbana, ra mắt v&agrave;o 2010 nh&acirc;n dịp kỷ niệm 20 năm kể từ khi d&ograve;ng thời trang nam của thương hiệu n&agrave;y ra mắt. Thuộc nh&oacute;m hương phương đ&ocirc;ng,&nbsp;<strong>The One Gentleman</strong>&nbsp;mang cho m&igrave;nh một m&ugrave;i hương đậm chất nam t&iacute;nh, ấm &aacute;p. Với điểm mạnh l&agrave; cho độ lưu hương l&acirc;u nhưng kh&ocirc;ng nồng m&ugrave;i cồn như c&aacute;c loại nước hoa kh&aacute;c.</p>\r\n\r\n<p><img alt=\"dolce-gabbana-the-one-gentleman-1\" height=\"344\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/dolce-gabbana-the-one-gentleman-1-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/dolce-gabbana-the-one-gentleman-1-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/dolce-gabbana-the-one-gentleman-1-1-300x172.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3><strong>Đặc điểm của nước hoa&nbsp;Dolce &amp; Gabbana The One Gentleman&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu</strong>:&nbsp;Dolce &amp; Gabbana</li>\r\n	<li><strong>Năm ra mắt</strong>: 2010</li>\r\n	<li><strong>Xuất xứ</strong>: &Yacute;</li>\r\n	<li><strong>Nh&agrave; pha chế</strong>: Olivier&nbsp;Cresp</li>\r\n	<li><strong>Nh&oacute;m hương</strong>: Hương phương đ&ocirc;ng</li>\r\n	<li><strong>Phong c&aacute;ch</strong>: Nam t&iacute;nh, tươi m&aacute;t, b&iacute; ẩn, gợi cảm</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng</strong>: M&ugrave;a xu&acirc;n &ndash; thu &ndash; đ&ocirc;ng, ng&agrave;y &ndash; đ&ecirc;m&nbsp;</li>\r\n	<li><strong>Thời gian lưu hương</strong>: Trung b&igrave;nh, trong khoảng từ 3 đến 6 giờ</li>\r\n	<li><strong>Độ tỏa hương</strong>: Thoang thoảng, dịu nhẹ xung quanh&nbsp;</li>\r\n	<li><strong>Hương đầu</strong>: Ti&ecirc;u</li>\r\n	<li><strong>Hương giữa: Hoa oải hương, bạch đậu khẩu, th&igrave; l&agrave; ta</strong></li>\r\n	<li><strong>Hương cuối</strong>: &nbsp;C&acirc;y hoắc hương v&agrave; hương vani</li>\r\n	<li><strong>Dung t&iacute;ch</strong>: 50ml, 100m</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong>V&agrave;i n&eacute;t về nước hoa The One Gentleman</strong></h2>\r\n\r\n<h3>Thương hiệu l&acirc;u năm</h3>\r\n\r\n<p>Thương hiệu thời trang&nbsp;<strong>Dolce &amp; Gabbana</strong>&nbsp;&ndash; được th&agrave;nh lập năm 1985 do hai nh&agrave; thiết kế người &Yacute; s&aacute;ng lập n&ecirc;n. Ngay từ những ng&agrave;y đầu ra mắt, những bộ trang phục đ&atilde; nhanh ch&oacute;ng khẳng định được đẳng cấp v&agrave; c&oacute; chỗ đứng vững chắc trong l&agrave;ng thời trang thế giới.</p>\r\n\r\n<p>Thương hiệu nước hoa Dolce &amp; Gabbana được ra mắt đầu ti&ecirc;n v&agrave;o năm 1992 đến nay đ&atilde; cho ra rất nhiều c&aacute;c d&ograve;ng nước hoa kh&aacute;c nhau d&agrave;nh cho cả nam lẫn nữ. D&ograve;ng&nbsp;<a href=\"https://theperfume.vn/\"><strong>nước hoa</strong></a>&nbsp;nam đ&igrave;nh đ&aacute;m cho t&ecirc;n viết tắt l&agrave; D&amp;G đ&atilde; rất nhanh ch&oacute;ng th&agrave;nh c&ocirc;ng. Với việc sử dụng c&aacute;c hương liệu qu&yacute; hiếm đ&atilde; tạo n&ecirc;n m&ugrave;i hương mang m&agrave;u sắc t&aacute;o bạo, gợi cảm v&agrave; cổ điển, l&agrave;m chinh phục được khứu gi&aacute;c người d&ugrave;ng d&ugrave; l&agrave; kh&oacute; t&iacute;nh nhất.</p>\r\n\r\n<p><img alt=\"Dolce-Gabbana-The-One-Gentleman-800x524\" height=\"393\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Dolce-Gabbana-The-One-Gentleman-800x524-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Dolce-Gabbana-The-One-Gentleman-800x524-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/Dolce-Gabbana-The-One-Gentleman-800x524-1-300x197.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3><strong>Dolce &amp; Gabbana&nbsp;</strong><strong>The One Gentleman m&ugrave;i hương đa dụng dễ d&agrave;ng sử dụng</strong></h3>\r\n\r\n<p>Nước Hoa&nbsp;<strong>Dolce &amp; Gabbana The One Gentleman</strong>&nbsp;c&oacute; một m&ugrave;i hương kh&aacute; đa dụng th&iacute;ch hợp d&agrave;nh cho cả ban ng&agrave;y v&agrave; ban đ&ecirc;m d&ugrave;ng cho những ng&agrave;y thời tiết hơi se lạnh v&agrave;o m&ugrave;a thu, m&ugrave;a xu&acirc;n, m&ugrave;a đ&ocirc;ng. Ta c&oacute; thể sử dụng ở mọi nơi ta đến từ đi l&agrave;m, đi chơi hay l&agrave; những buổi hẹn h&ograve; l&atilde;ng mạn với người phụ nữ của cuộc đời bạn.</p>\r\n\r\n<p>C&aacute;c th&agrave;nh phần l&agrave;m n&ecirc;n m&ugrave;i hương của&nbsp;<strong>The One Gentleman</strong>&nbsp;đều thuộc nh&oacute;m hương phương đ&ocirc;ng cơ bản. Tất cả những nguy&ecirc;n liệu quen thuộc nhưng khi h&ograve;a trộn lại với nhau th&igrave; lại cho người d&ugrave;ng một cảm gi&aacute;c tinh tế, tự tin v&agrave; tr&agrave;n đầy b&iacute; ẩn. Ở lớp hương đầu ta c&oacute; thể cảm nhận ngay l&agrave; sự nồng ấm của vị ti&ecirc;u sau đ&oacute; l&agrave; sự h&ograve;a quyện nhịp nh&agrave;ng của hoa oải hương, bạch đậu khấu. V&agrave; cuối c&ugrave;ng l&agrave; hương vani ấm &aacute;p c&ugrave;ng với hoắc hương tạo sự ngọt ng&agrave;o. Tất cả th&agrave;nh một tổ hợp m&ugrave;i hương h&ograve;a quyện với nhau l&agrave;m cho người d&ugrave;ng c&oacute; cảm gi&aacute;c dễ chịu v&agrave; sảng kho&aacute;i.</p>\r\n\r\n<p><img alt=\"dolce-a-gabbana-the-one-gentleman\" height=\"600\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/dolce-a-gabbana-the-one-gentleman-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/dolce-a-gabbana-the-one-gentleman-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/dolce-a-gabbana-the-one-gentleman-1-200x200.jpg 200w, https://theperfume.vn/wp-content/uploads/2017/03/dolce-a-gabbana-the-one-gentleman-1-100x100.jpg 100w, https://theperfume.vn/wp-content/uploads/2017/03/dolce-a-gabbana-the-one-gentleman-1-300x300.jpg 300w, https://theperfume.vn/wp-content/uploads/2017/03/dolce-a-gabbana-the-one-gentleman-1-340x340.jpg 340w\" width=\"600\" /></p>\r\n\r\n<h3><strong><strong>The One Gentleman</strong>&nbsp;&ndash; l&agrave;m n&ecirc;n n&eacute;t b&iacute; ẩn phương đ&ocirc;ng</strong></h3>\r\n\r\n<p><strong>The One Gentleman&nbsp;</strong>c&oacute;&nbsp;thiết kế kh&ocirc;ng thay đổi nhiều với những phi&ecirc;n bản trước. Vẫn l&agrave; &nbsp;chai thủy tinh với những g&oacute;c vu&ocirc;ng thể hiện sự mạnh mẽ, l&agrave;m nổi bật d&ograve;ng nước m&agrave;u xanh nhạt huyền b&iacute; thể hiện một qu&yacute; &ocirc;ng tinh tế, hiện đại nhưng đầy năng động.</p>\r\n\r\n<p>Nước hoa&nbsp;<strong>Dolce &amp; Gabbana&nbsp;The One Gentleman</strong>&nbsp;d&agrave;nh cho c&aacute;c qu&yacute; &ocirc;ng c&oacute; t&iacute;nh c&aacute;ch galang nhưng đầy lịch thiệp. H&atilde;y sử dụng m&ugrave;i hương n&agrave;y, bạn sẽ thấy một cảm gi&aacute;c tự tin v&agrave; sẵn s&agrave;ng đối mặt với bất kỳ t&igrave;nh huống xấu n&agrave;o xảy ra.</p>', '44', '6', 'Dolce-Gabbana-The-One-Gentleman-2-1-340x34025.jpg', 1, NULL, NULL),
(58, 2, 2, 1, 4, 'Nước Hoa Rose The One Dolce & Gabbana Eau De Pafum 50ml', '1700000', '1200000', '<h2>Nước Hoa Rose The One Dolce &amp; Gabbana&nbsp;Eau De Pafum</h2>\r\n\r\n<h3>Rose The One Dolce &amp; Gabbana</h3>\r\n\r\n<p>Nước hoa nữ&nbsp;<strong><a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-rose-one-dolce-gabbana/\">Rose The One Dolce &amp; Gabbana</a>&nbsp;</strong>l&ocirc;i cuốn c&aacute;c c&ocirc; g&aacute;i bởi hương thơm từ h&agrave;ng triệu c&aacute;nh hoa hồng đặc trưng thơm m&aacute;t tự nhi&ecirc;n. Được v&iacute; như một vi&ecirc;n ngọc trai qu&yacute; gi&aacute;, Rose The One đựng trong chiếc lọ thủy tinh trong m&agrave;u hồng kim loại lộng lẫy. Sở hữu&nbsp;Rose The One Dolce &amp; Gabbana<strong>&nbsp;</strong>l&agrave;&nbsp;mơ ước của h&agrave;ng triệu c&ocirc; g&aacute;i tr&ecirc;n thế giới.</p>\r\n\r\n<p><img alt=\"dolce_and_gabbana_rose_the_one-1\" height=\"396\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/dolce_and_gabbana_rose_the_one-1-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/dolce_and_gabbana_rose_the_one-1-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/dolce_and_gabbana_rose_the_one-1-1-300x198.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3><strong>Đặc điểm của nước hoa&nbsp;Rose The One Dolce &amp; Gabbana&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:&nbsp;</strong>Dolce &amp; Gabbana</li>\r\n	<li><strong>Nh&oacute;m nước hoa:</strong>&nbsp;Hương hoa cỏ</li>\r\n	<li><strong>Giới t&iacute;nh:</strong>&nbsp;Nữ</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;2009</li>\r\n	<li><strong>Độ lưu hương:</strong>&nbsp;Trung b&igrave;nh, trong khoảng từ 3 đến 6 giờ</li>\r\n	<li><strong>Độ toả hương:</strong>&nbsp;Thoang thoảng, dịu nhẹ xung quanh</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng:</strong>&nbsp;M&ugrave;a xu&acirc;n, ng&agrave;y &ndash; đ&ecirc;m</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;Quyến rũ, nữ t&iacute;nh, thanh lịch</li>\r\n	<li><strong>M&ugrave;i hương ch&iacute;nh:</strong>&nbsp;Quả l&yacute; chua đen, Hoa mẫu đơn, Quả bưởi, Quả qu&yacute;t hồng, Gỗ đ&agrave;n hương, Xạ hương, Hương Va ni, Hoa linh lan thung lũng, Hoa hồng, Quả vải, Hoa huệ,C&acirc;y v&ocirc;ng vang</li>\r\n	<li><strong>Dung t&iacute;ch:</strong>&nbsp;50ml, 75ml</li>\r\n</ul>\r\n\r\n<h2>Ưu điểm của nước hoa&nbsp;<strong>Rose The One Dolce &amp; Gabbana</strong></h2>\r\n\r\n<h3>Thương hiệu uy t&iacute;n</h3>\r\n\r\n<p><strong>Thương hiệu Dolce &amp; Gabbana</strong>&nbsp;(D&amp;G) ra mắt năm 1985 do 2 nh&agrave; thiết kế người &Yacute; l&agrave; Domenico Dolce v&agrave; Stefano Gabbana s&aacute;ng lập l&ecirc;n. Được biết đến với sự th&agrave;nh c&ocirc;ng của&nbsp;những bộ c&aacute;nh thời trang lạ lẫm v&agrave; đẳng cấp, một lần nữa&nbsp;sự ra đời của&nbsp;<strong>nước hoa D&amp;G</strong>&nbsp;đ&atilde; khiến kh&aacute;ch h&agrave;ng th&iacute;ch th&uacute;&nbsp;bởi thiết kế lộng lẫy c&ugrave;ng m&ugrave;i hương quyến rũ&nbsp;d&ugrave;ng được&nbsp;cho cả ph&aacute;i nam lẫn ph&aacute;i nữ.</p>\r\n\r\n<h3>Thiết kế Rose The One đẳng cấp sang trọng</h3>\r\n\r\n<p>Khiến ph&aacute;i đẹp y&ecirc;u th&iacute;ch kh&ocirc;ng chỉ bởi hương thơm ngọt ng&agrave;o quyến rũ,&nbsp;<strong>Rose The One</strong>&nbsp;c&ograve;n được ch&uacute; &yacute; bởi thiết kế ấn tượng mang đến vẻ đẹp rạng rỡ, h&agrave;i h&ograve;a rất c&oacute; thần th&aacute;i trong l&agrave;ng&nbsp;<a href=\"https://theperfume.vn/\"><strong>nước hoa</strong></a>. Vỏ chai thiết kế đơn giản h&igrave;nh chữ nhật, m&agrave;u hồng kim loại s&aacute;ng lo&aacute;ng, điểm nhấn l&agrave; chiếc nắp m&agrave;u hồng v&agrave;ng.</p>\r\n\r\n<p><img alt=\"dolce_and_gabbana_rose_the_one-800x333\" height=\"344\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/dolce_and_gabbana_rose_the_one-800x333-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/dolce_and_gabbana_rose_the_one-800x333-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/dolce_and_gabbana_rose_the_one-800x333-1-300x172.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3><strong>Rose The One c&oacute; m&ugrave;i hương&nbsp;</strong>l&ocirc;i cuốn từ c&aacute;nh hoa hồng</h3>\r\n\r\n<p>Nước hoa nữ&nbsp;<strong>Rose The One Dolce &amp; Gabbana</strong>&nbsp;ra mắt v&agrave;o năm 2009, được ph&aacute;i đẹp hết lời ca ngời từ thiết kế đến m&ugrave;i hương hoa cỏ ngọt ng&agrave;o.&nbsp;<strong>Rose The One&nbsp;</strong>được b&igrave;nh chọn l&agrave; một trong những chai nước hoa nữ b&aacute;n chạy nhất thương hiệu nước hoa đ&igrave;nh đ&aacute;m n&agrave;y.</p>\r\n\r\n<p><strong>Rose The One Dolce &amp; Gabbana&nbsp;</strong>c&oacute;&nbsp;th&agrave;nh phần hương thơm kết hợp từ nhiều loại hương liệu chiết xuất từ thi&ecirc;n nhi&ecirc;n. Lớp hương đầu l&agrave; sự cay nồng của hương bưởi cộng một ch&uacute;t ngọt của quả qu&yacute;t hồng, kết hợp h&agrave;i h&ograve;a c&ugrave;ng hương thơm đ&oacute; l&agrave; ch&uacute;t nhẹ nh&agrave;ng s&acirc;u lắng của hoa linh lan thung lũng.</p>\r\n\r\n<p><img alt=\"Rose-The-One\" height=\"377\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Rose-The-One-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Rose-The-One-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/Rose-The-One-1-300x189.jpg 300w\" width=\"600\" /></p>\r\n\r\n<p>Th&agrave;nh phần hoa hồng được xem l&agrave; nhiều nhất, n&oacute; xuất hiện phảng phất l&uacute;c ẩn l&uacute;c hiện&nbsp;lấn &aacute;t hết m&ugrave;i hương bưởi ban đầu. C&oacute; thể n&oacute;i hương thơm của c&aacute;nh hồng ho&agrave;n to&agrave;n chinh phục người đối diện mang đến cảm gi&aacute;c ngọt ng&agrave;o,&nbsp;kh&ocirc;ng thể thiếu. Cuối c&ugrave;ng hương thơm của hoa mẫu đơn, hoa huệ trắng trong v&agrave; c&aacute;c loại gỗ đ&agrave;n hương, xạ hương, vani&hellip; sẽ b&aacute;m l&acirc;u tr&ecirc;n da v&agrave; lưu m&atilde;i kh&ocirc;ng rời.</p>', '50', NULL, 'dolce-and-gabbana-rose-the-one-1-340x34051.jpg', 1, NULL, NULL),
(59, 2, 2, 3, 4, 'Nước Hoa The One Collector For Women Dolce & Gabbana EDP 50ml', '2300000', '1700000', '<h2>Nước Hoa The One Collector For Women Dolce &amp; Gabbana&nbsp;EDP</h2>\r\n\r\n<h3>The One Collector For Women Dolce &amp; Gabbana</h3>\r\n\r\n<p>Nước hoa nữ&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-the-one-collector-for-women-dolce-gabbana/\"><strong>The One Collector For Women Dolce &amp; Gabbana</strong></a>&nbsp;ra mắt năm 2014 mang đến sự h&agrave;i l&ograve;ng tuyệt đối cho c&aacute;c c&ocirc; g&aacute;i bởi hương thơm nhẹ nh&agrave;ng của hoa cỏ phương Đ&ocirc;ng cổ điển pha lẫn hơi hướng hiện đại. Thiết kế vỏ đỏ booc đ&ocirc; sang chảnh ấn tượng của&nbsp;<strong>The One Collector&nbsp;</strong>cũng rất<strong>&nbsp;</strong>được l&ograve;ng c&aacute;c t&iacute;n đồ thương hiệu.</p>\r\n\r\n<p><img alt=\"Dolce_Gabbana_The_One_Collector_s_Edition_Eau_de_Parfum\" height=\"424\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/Dolce_Gabbana_The_One_Collector_s_Edition_Eau_de_Parfum-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/Dolce_Gabbana_The_One_Collector_s_Edition_Eau_de_Parfum-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/Dolce_Gabbana_The_One_Collector_s_Edition_Eau_de_Parfum-1-300x212.jpg 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước Hoa The One Collector For Women Dolce &amp; Gabbana</strong></em></p>\r\n\r\n<h3><strong>Đặc điểm của nước hoa Dolce &amp; Gabbana&nbsp;</strong><strong>The One Collector For Women&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:&nbsp;</strong>Dolce &amp; Gabbana</li>\r\n	<li><strong>Nh&oacute;m nước hoa:</strong>&nbsp;Hương hoa cỏ phương Đ&ocirc;ng</li>\r\n	<li><strong>Giới t&iacute;nh:</strong>&nbsp;Nữ</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;2014</li>\r\n	<li><strong>Độ lưu hương:</strong>&nbsp;Rất l&acirc;u, trung b&igrave;nh từ 8 đến 12 giờ</li>\r\n	<li><strong>Độ toả hương:</strong>&nbsp;Xa, với b&aacute;n k&iacute;nh khoảng 2 m&eacute;t</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng:</strong>&nbsp;M&ugrave;a thu &ndash; đ&ocirc;ng, ng&agrave;y &ndash; đ&ecirc;m</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;L&ocirc;i cuốn, gợi cảm, nồng n&agrave;n</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Quả qu&yacute;t hồng, Quả đ&agrave;o, Cam Bergamot, Quả vải</li>\r\n	<li><strong>Hương giữa:</strong>&nbsp;Hoa huệ&nbsp;Madonna</li>\r\n	<li><strong>Hương cuối:</strong>&nbsp;Hương Va ni, Hổ ph&aacute;ch, Xạ hương</li>\r\n	<li><strong>Dung t&iacute;ch:&nbsp;</strong>75ml, 50ml</li>\r\n</ul>\r\n\r\n<p><img alt=\"The-One-Collectors-Edition-1-800x591\" height=\"400\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/The-One-Collectors-Edition-1-800x591-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/The-One-Collectors-Edition-1-800x591-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/The-One-Collectors-Edition-1-800x591-1-300x200.jpg 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>The One Collector For Women Dolce &amp; Gabbana</strong></em></p>\r\n\r\n<h2>Thương hiệu&nbsp;<strong>Dolce &amp; Gabbana</strong></h2>\r\n\r\n<p><strong>Thương hiệu Dolce &amp; Gabbana</strong>&nbsp;(D&amp;G) ra mắt năm 1985 do 2 nh&agrave; thiết kế người &Yacute; l&agrave; Domenico Dolce v&agrave; Stefano Gabbana s&aacute;ng lập l&ecirc;n. Được biết đến với sự th&agrave;nh c&ocirc;ng của&nbsp;những bộ c&aacute;nh thời trang lạ lẫm v&agrave; đẳng cấp, một lần nữa&nbsp;sự ra đời của&nbsp;<strong>nước hoa D&amp;G</strong>&nbsp;đ&atilde; khiến kh&aacute;ch h&agrave;ng th&iacute;ch th&uacute;&nbsp;bởi thiết kế lộng lẫy c&ugrave;ng m&ugrave;i hương quyến rũ&nbsp;d&ugrave;ng được&nbsp;cho cả ph&aacute;i nam lẫn ph&aacute;i nữ. Thương hiệu ghi dấu ấn bằng sản phẩm&nbsp;<a href=\"https://theperfume.vn/\"><strong>nước hoa</strong></a>&nbsp;đầu ti&ecirc;n D&amp;G Pour Femme.</p>\r\n\r\n<h2>Đặc điểm của&nbsp;The One Collector For Women</h2>\r\n\r\n<p>Nước hoa&nbsp;<strong>The One Collector For Women Dolce &amp; Gabbana</strong>&nbsp;khiến c&aacute;c c&ocirc; n&agrave;ng m&ecirc; mẩn bởi hương thơm cổ điển pha lẫn hiện đại của hương hoa cỏ phương Đ&ocirc;ng. Tầng hương đầu l&agrave; sự h&ograve;a quyện của 4 loại hương từ quả qu&yacute;t hồng, tinh chất cam Bergamot, quả vải, quả đ&agrave;o, m&ugrave;i hương n&agrave;y mang đến kh&iacute; chất say đắm nhưng kh&ocirc;ng qu&aacute; gắt m&agrave; chỉ thoang thoảng nhẹ nh&agrave;ng phảng phất trong gi&oacute;. Nối tiếp ngay sau đ&oacute; l&agrave; tầng hương giữa của c&aacute;nh hoa huệ&nbsp;Madonna&nbsp;được bao bọc bởi một lớp vani ngọt dịu b&ecirc;n ngo&agrave;i. Kh&ocirc;ng chỉ c&oacute; vậy, tầng hương cuối c&ugrave;ng của hổ ph&aacute;ch v&agrave; xạ hương một lần nữa tạo sự thư th&aacute;i bởi sự nhẹ nh&agrave;ng nhưng đủ để đ&aacute;nh thức t&acirc;m hồn v&agrave; x&uacute;c cảm.</p>\r\n\r\n<p><img alt=\"dolce-gabbana-the-one-collectors-edition-2\" height=\"401\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/03/dolce-gabbana-the-one-collectors-edition-2-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/03/dolce-gabbana-the-one-collectors-edition-2-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/03/dolce-gabbana-the-one-collectors-edition-2-1-300x201.jpg 300w\" width=\"600\" /></p>\r\n\r\n<p><em><strong>Nước Hoa The One Collector For Women Dolce &amp; Gabbana sở hữu m&ugrave;i hương nồng n&agrave;n, l&ocirc;i cuốn</strong></em></p>\r\n\r\n<p>Hương thơm của&nbsp;<strong>The One Collector For Women</strong>&nbsp;lưu hương rất l&acirc;u, khoảng&nbsp;12 giờ mỗi lần sử dụng, độ tỏa hương rất gần. Sản phẩm được h&agrave;ng khuyến kh&iacute;ch sử dụng v&agrave;o m&ugrave;a thu v&agrave; m&ugrave;a đ&ocirc;ng sẽ tỏa hương thơm ng&aacute;t.</p>', '50', NULL, 'The-One-Collectors-Edition-6-340x34035.jpg', 1, NULL, NULL),
(60, 1, 2, 3, 5, 'Nước Hoa Dolce & Gabbana Intenso for Men Eau De Parfum', '2010000', '1500000', '<h2 style=\"text-align:center\">Nước Hoa D&amp;G Intenso for Men&nbsp;Eau De Parfum</h2>\r\n\r\n<h3 style=\"text-align:center\">D&amp;G Intenso for Men</h3>\r\n\r\n<p style=\"text-align:center\"><strong>Nước hoa D&amp;G Intenso for Men</strong>&nbsp;d&agrave;nh cho nam ra mắt v&agrave;o năm 2012, thuộc nh&oacute;m hương gỗ&nbsp;thơm nam t&iacute;nh quyến rũ thu h&uacute;t người đối diện ngay từ lần sử dụng đầu ti&ecirc;n. Thiết kế vỏ đen mạnh mẽ tinh tế trong từng đường n&eacute;t.&nbsp;<strong>D&amp;G Intenso</strong>&nbsp;&ndash; mang đến n&eacute;t đẳng cấp cho ph&aacute;i mạnh.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Dolce-Gabbana-Intenso-for-men\" height=\"397\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/04/Dolce-Gabbana-Intenso-for-men-3.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/04/Dolce-Gabbana-Intenso-for-men-3.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/04/Dolce-Gabbana-Intenso-for-men-3-300x199.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h3 style=\"text-align:center\"><strong>Đặc điểm của nước hoa&nbsp;D&amp;G Intenso for Men</strong></h3>\r\n\r\n<p style=\"text-align:center\"><strong>Thương hiệu:&nbsp;</strong>Dolce &amp; Gabbana</p>\r\n\r\n<p style=\"text-align:center\"><strong>Nh&oacute;m nước hoa:</strong>&nbsp;Hương gỗ thơm</p>\r\n\r\n<p style=\"text-align:center\"><strong>Năm ra mắt:</strong>&nbsp;2014</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ lưu hương:</strong>&nbsp;Trung b&igrave;nh, trong khoảng từ 3 đến 6 giờ</p>\r\n\r\n<p style=\"text-align:center\"><strong>Độ toả hương:</strong>&nbsp;Thoang thoảng, dịu nhẹ xung quanh</p>\r\n\r\n<p style=\"text-align:center\"><strong>Thời điểm khuy&ecirc;n d&ugrave;ng:</strong>&nbsp;Thu &ndash; đ&ocirc;ng, ng&agrave;y &ndash; đ&ecirc;m</p>\r\n\r\n<p style=\"text-align:center\"><strong>Phong c&aacute;ch:</strong>&nbsp;Nam t&iacute;nh, quyến rũ, lịch l&atilde;m</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương đầu:</strong>&nbsp;Hương nước, Hoa c&uacute;c kim tiền, C&acirc;y h&uacute;ng quế, Hoa Oải Hương, Hoa phong lữ</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương giữa:</strong>&nbsp;C&acirc;y thuốc l&aacute;, Cỏ kh&ocirc;, C&acirc;y Moepel, C&aacute;m, C&acirc;y đơn s&acirc;m</p>\r\n\r\n<p style=\"text-align:center\"><strong>Hương cuối:</strong>&nbsp;Hương Labdanum, Xạ hương, Hổ ph&aacute;ch, Gỗ đ&agrave;n hương, C&acirc;y b&aacute;ch</p>\r\n\r\n<p style=\"text-align:center\"><strong>Dung t&iacute;ch:&nbsp;</strong>40ml, 75ml, 125ml</p>\r\n\r\n<h2 style=\"text-align:center\">V&agrave;i n&eacute;t về thương hiệu nước hoa&nbsp;<strong>Dolce &amp; Gabbana</strong></h2>\r\n\r\n<p style=\"text-align:center\"><strong>Thương hiệu Dolce &amp; Gabbana</strong>&nbsp;(D&amp;G) th&agrave;nh lập năm 1985 do 2 nh&agrave; thiết kế người &Yacute; l&agrave; Domenico Dolce v&agrave; Stefano Gabbana s&aacute;ng lập l&ecirc;n. Ngo&agrave;i&nbsp;sự th&agrave;nh c&ocirc;ng của&nbsp;những bộ c&aacute;nh thời trang lạ lẫm v&agrave; đẳng cấp,&nbsp;thương hiệu n&agrave;y c&ograve;n cho ra mắt d&ograve;ng&nbsp;<strong>nước hoa Dolce and Gabbana</strong>&nbsp;đ&igrave;nh đ&aacute;m. Thu h&uacute;t c&aacute;c ch&agrave;ng trai bởi m&ugrave;i hương nam t&iacute;nh kinh điển tạo ra từ c&aacute;c hương liệu thi&ecirc;n nhi&ecirc;n qu&yacute; hiếm. Sự h&ograve;a&nbsp;quyện đ&oacute; khiến&nbsp;<strong>nước hoa</strong>&nbsp;nam D&amp;G tạo n&ecirc;n một dấu ấn ri&ecirc;ng kh&oacute; c&oacute; thể chối từ.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Nuoc-hoa-Dolce-Gabbana-Intenso-for-men\" height=\"500\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/04/Nuoc-hoa-Dolce-Gabbana-Intenso-for-men.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/04/Nuoc-hoa-Dolce-Gabbana-Intenso-for-men.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/04/Nuoc-hoa-Dolce-Gabbana-Intenso-for-men-300x250.jpg 300w\" width=\"600\" /></p>\r\n\r\n<h2 style=\"text-align:center\"><strong>Đặc điểm của nước hoa&nbsp;D&amp;G Intenso for Men</strong></h2>\r\n\r\n<h3 style=\"text-align:center\"><strong>C&aacute;c nốt hương h&ograve;a quyện theo x&uacute;c cảm</strong></h3>\r\n\r\n<p style=\"text-align:center\">Nước hoa&nbsp;<strong>Dolce &amp; Gabbana&nbsp;Intenso for Men&nbsp;</strong>d&agrave;nh cho nam ra mắt năm 2014, l&agrave; hiện th&acirc;n của n&eacute;t thanh lịch hiện đại đầy l&ocirc;i cuốn. Ghi ấn tượng bởi những nốt hương h&ograve;a quyện ngọt ng&agrave;o c&ugrave;ng nhau mang đến cảm gi&aacute;c mạnh mẽ Lớp hương đầu của&nbsp;<strong>D&amp;G Intenso for Men&nbsp;</strong>chứa đựng ch&uacute;t hương cay nồng của c&acirc;y h&uacute;ng quế, sự ngọt ng&agrave;o thanh cảnh của hoa Oải Hương, &nbsp;phong lữ, hoa c&uacute;c kim tiền mang đến cảm gi&aacute;c nhẹ nh&agrave;ng tươi m&aacute;t&nbsp;khi sử dụng. Nối tiếp sau đ&oacute; l&agrave; lớp hương giữa đậm đặc hơn bởi được chiết xuất từ&nbsp;c&acirc;y thuốc l&aacute;, cỏ kh&ocirc;, c&acirc;y Moepel, c&aacute;m, c&acirc;y đơn s&acirc;m. Cuối c&ugrave;ng lớp hương cuối của Labdanum, gỗ đ&agrave;n hương, c&acirc;y b&aacute;ch, xạ hương, hổ ph&aacute;ch sẽ mang đến một hương thơm ho&agrave;n hảo&nbsp;<strong>D&amp;G Intenso for Men.</strong></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"Dolce-Gabbana-Intenso-for-men-1\" height=\"419\" sizes=\"(max-width: 600px) 100vw, 600px\" src=\"https://theperfume.vn/wp-content/uploads/2017/04/Dolce-Gabbana-Intenso-for-men-1-1.jpg\" srcset=\"https://theperfume.vn/wp-content/uploads/2017/04/Dolce-Gabbana-Intenso-for-men-1-1.jpg 600w, https://theperfume.vn/wp-content/uploads/2017/04/Dolce-Gabbana-Intenso-for-men-1-1-300x210.jpg 300w\" width=\"600\" /></p>\r\n\r\n<p style=\"text-align:center\">Nước hoa&nbsp;<strong>D&amp;G Intenso for Men</strong>&nbsp;thiết kế mạnh mẽ với lớp vỏ đen huyền b&iacute; khơi gợi nhiều cảm x&uacute;c bất tận. Chiếc nắp bằng đồng cũng l&agrave; một trong điểm nhấn của&nbsp;<strong>D&amp;G Intenso</strong>.</p>', '50', '0', 'Dolce-Gabbana-Intenso-for-men-2-1-340x34023.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipping`
--

DROP TABLE IF EXISTS `shipping`;
CREATE TABLE IF NOT EXISTS `shipping` (
  `shippingMa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `shippingTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippingEmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippingDiaChi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippingSoDienThoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippingGhiChu` text COLLATE utf8mb4_unicode_ci,
  `shippingPhuongThuc` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`shippingMa`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shipping`
--

INSERT INTO `shipping` (`shippingMa`, `shippingTen`, `shippingEmail`, `shippingDiaChi`, `shippingSoDienThoai`, `shippingGhiChu`, `shippingPhuongThuc`, `created_at`, `updated_at`) VALUES
(66, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'Hà Nội', '0399777151', NULL, 0, NULL, NULL),
(67, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'Hà Nội', '0399777151', NULL, 0, NULL, NULL),
(68, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(69, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(70, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(71, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(72, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(73, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(74, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(75, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'Hà Nội', '0399777151', NULL, 0, NULL, NULL),
(76, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(77, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(78, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(79, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(80, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '039977151', NULL, 0, NULL, NULL),
(81, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777111', NULL, 0, NULL, NULL),
(82, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777111', NULL, 0, NULL, NULL),
(83, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'Hà Nội', '0399777111', NULL, 0, NULL, NULL),
(84, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777111', NULL, 0, NULL, NULL),
(85, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(86, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(87, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(88, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(89, 'Thành Đinh', 'theperfume2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(90, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(91, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(92, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(93, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(94, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(95, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(96, 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(97, 'Thành Đinh', 'theperfume2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(98, 'Thành Đinh', 'theperfume2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(99, 'Thành Đinh', 'theperfume2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(100, 'Thành Đinh', 'theperfume2409@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(101, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(102, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL),
(103, 'Thảo', 'phuocthanh2409@gmail.com', 'Cách mạng tháng 8 , phường 10, quận 3', '0399777151', NULL, 0, NULL, NULL),
(104, 'Đinh Huỳnh Phước Thành', 'nhokcan99@gmail.com', 'TP. Hồ Chí Minh', '0399777151', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `sliderMa` int(11) NOT NULL AUTO_INCREMENT,
  `sliderTen` varchar(191) NOT NULL,
  `sliderHinhAnh` varchar(191) NOT NULL,
  `sliderTrangThai` int(11) NOT NULL,
  `sliderMoTa` varchar(191) NOT NULL,
  PRIMARY KEY (`sliderMa`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`sliderMa`, `sliderTen`, `sliderHinhAnh`, `sliderTrangThai`, `sliderMoTa`) VALUES
(11, 'Chương trình khuyến mãi dịp Noel', 'pexels-tara-winstead-669396886.jpg', 1, '<p>Nhập m&atilde; khuyến m&atilde;i Noel2021 để được giảm 20% tổng gi&aacute; trị đơn h&agrave;ng</p>'),
(12, 'Chương trình khuyến mãi dịp năm mới 2022', 'pexels-jess-bailey-designs-75599286.jpg', 1, '<p>Nhập m&atilde; khuyến m&atilde;i NewYear2022 để được giảm 200.000 VNĐ</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_statistical`
--

DROP TABLE IF EXISTS `tbl_statistical`;
CREATE TABLE IF NOT EXISTS `tbl_statistical` (
  `id_statistical` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` varchar(100) NOT NULL,
  `sales` varchar(200) NOT NULL,
  `profit` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_order` int(11) NOT NULL,
  PRIMARY KEY (`id_statistical`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_statistical`
--

INSERT INTO `tbl_statistical` (`id_statistical`, `order_date`, `sales`, `profit`, `quantity`, `total_order`) VALUES
(27, '2021-12-14', '74000000', '20000000', 33, 20),
(28, '2021-12-13', '66000000', '18000000', 23, 12),
(29, '2021-12-12', '74000000', '20000000', 10, 20),
(30, '2021-12-15', '63000000', '19000000', 14, 5),
(31, '2021-12-11', '66000000', '18000000', 23, 12),
(32, '2021-12-10', '74000000', '20000000', 15, 20),
(33, '2021-12-09', '66000000', '18000000', 23, 12),
(34, '2021-12-08', '74000000', '20000000', 30, 22),
(35, '2021-12-07', '66000000', '18000000', 23, 12),
(36, '2021-12-06', '74000000', '20000000', 32, 20),
(37, '2021-12-05', '63000000', '19000000', 14, 5),
(38, '2021-12-04', '66000000', '18000000', 23, 12),
(39, '2021-12-03', '74000000', '20000000', 32, 20),
(40, '2021-12-02', '63000000', '19000000', 14, 5),
(41, '2021-12-01', '66000000', '18000000', 23, 12),
(42, '2021-10-28', '74000000', '20000000', 15, 20),
(43, '2021-10-27', '66000000', '18000000', 23, 12),
(44, '2021-10-26', '74000000', '20000000', 30, 22),
(45, '2021-10-25', '66000000', '18000000', 23, 12),
(46, '2021-10-24', '74000000', '20000000', 32, 20),
(47, '2021-10-23', '63000000', '19000000', 14, 5),
(48, '2021-10-22', '66000000', '18000000', 23, 12),
(49, '2021-10-21', '74000000', '20000000', 32, 20),
(50, '2021-10-20', '63000000', '19000000', 14, 5),
(51, '2021-10-19', '66000000', '18000000', 23, 12),
(52, '2021-10-18', '74000000', '20000000', 15, 20),
(53, '2021-10-17', '66000000', '18000000', 23, 12),
(54, '2021-10-16', '74000000', '20000000', 30, 22),
(55, '2021-10-15', '66000000', '18000000', 23, 12),
(56, '2021-10-14', '74000000', '20000000', 32, 20),
(57, '2021-10-13', '63000000', '19000000', 14, 5),
(58, '2021-10-12', '66000000', '18000000', 23, 12),
(59, '2021-10-11', '74000000', '20000000', 32, 20),
(60, '2021-10-10', '63000000', '19000000', 14, 5),
(61, '2021-10-09', '66000000', '18000000', 23, 12),
(62, '2021-10-08', '74000000', '20000000', 15, 20),
(63, '2021-10-07', '66000000', '18000000', 23, 12),
(64, '2021-10-06', '74000000', '20000000', 30, 22),
(65, '2021-10-05', '66000000', '18000000', 23, 12),
(66, '2021-10-04', '74000000', '20000000', 32, 20),
(67, '2021-10-03', '63000000', '19000000', 14, 5),
(68, '2021-10-02', '66000000', '18000000', 23, 12),
(69, '2021-10-01', '74000000', '20000000', 32, 20),
(70, '2021-12-16', '54410000', '28810000', 26, 5),
(71, '2021-12-17', '0', '0', 0, 0),
(72, '2021-12-18', '3990000', '490000', 1, 1),
(73, '2021-12-28', '148400000', '28400000', 51, 2),
(74, '2021-12-30', '21400000', '12400000', 10, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtincuahang`
--

DROP TABLE IF EXISTS `thongtincuahang`;
CREATE TABLE IF NOT EXISTS `thongtincuahang` (
  `ttMa` int(10) NOT NULL AUTO_INCREMENT,
  `ttLienHe` mediumtext NOT NULL,
  `ttMap` text NOT NULL,
  `ttFanpage` text NOT NULL,
  `ttHinhAnh` varchar(191) NOT NULL,
  PRIMARY KEY (`ttMa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thongtincuahang`
--

INSERT INTO `thongtincuahang` (`ttMa`, `ttLienHe`, `ttMap`, `ttFanpage`, `ttHinhAnh`) VALUES
(1, '<p>Địa chỉ: <strong>372 C&aacute;ch mạng th&aacute;ng 8, phường 10, quận 3, TP. Hồ Ch&iacute; Minh</strong></p>\r\n\r\n<p>Số điện thoại: <strong>0399123123</strong></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3692450667845!2d106.67066391474421!3d10.783005662020967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed6f8fd4eed%3A0x735516f96fd93979!2zMzcyIEPDoWNoIE3huqFuZyBUaMOhbmcgVMOhbSwgUGjGsOG7nW5nIDEwLCBRdeG6rW4gMywgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1639570328744!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '<div id=\"fb-root\"></div>\r\n            <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0\" nonce=\"bJaYuEJX\"></script>\r\n            <div id=\"fb-root\"></div>\r\n            <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0\" nonce=\"bJaYuEJX\"></script>\r\n            <div class=\"fb-page\" data-href=\"https://www.facebook.com/The-Perfume-107154571822374\" data-tabs=\"timeline\" data-width=\"\" data-height=\"\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/The-Perfume-107154571822374\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/The-Perfume-107154571822374\">The Perfume</a></blockquote></div>', 'Chanel-Allure-Homme-Sport-340x34017.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

DROP TABLE IF EXISTS `thuonghieu`;
CREATE TABLE IF NOT EXISTS `thuonghieu` (
  `thMa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thTen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thMoTa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thTrangThai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`thMa`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`thMa`, `thTen`, `thMoTa`, `thTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'Gucci', 'Nước hoa của hãng Gucci', 1, NULL, NULL),
(2, 'Dolce & Gabbana', 'Nước hoa của hãng Dolce & Gabbana', 1, NULL, NULL),
(3, 'Bvlgari', 'Nước hoa của hãng Bvlgari', 1, NULL, NULL),
(4, 'Chanel', 'Nước hoa của hãng Chanel', 1, NULL, NULL),
(5, 'CK', 'Nước hoa của hãng Calvin Klein', 1, NULL, NULL),
(6, 'Dior', 'Nước hoa của hãng Dior', 1, NULL, NULL),
(7, 'Lancôme', 'Nước hoa của hãng Lancôme', 1, NULL, NULL),
(8, 'Tom Ford', 'Nước hoa của hãng Tom Ford', 1, NULL, NULL),
(9, 'YSL', 'Nước hoa của hãng Yves Saint Laurent', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhthanhpho`
--

DROP TABLE IF EXISTS `tinhthanhpho`;
CREATE TABLE IF NOT EXISTS `tinhthanhpho` (
  `matp` int(10) NOT NULL,
  `tentp` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`matp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `tinhthanhpho`
--

INSERT INTO `tinhthanhpho` (`matp`, `tentp`, `type`) VALUES
(1, 'Thành phố Hà Nội', 'Thành phố Trung ương'),
(2, 'Tỉnh Hà Giang', 'Tỉnh'),
(4, 'Tỉnh Cao Bằng', 'Tỉnh'),
(6, 'Tỉnh Bắc Kạn', 'Tỉnh'),
(8, 'Tỉnh Tuyên Quang', 'Tỉnh'),
(10, 'Tỉnh Lào Cai', 'Tỉnh'),
(11, 'Tỉnh Điện Biên', 'Tỉnh'),
(12, 'Tỉnh Lai Châu', 'Tỉnh'),
(14, 'Tỉnh Sơn La', 'Tỉnh'),
(15, 'Tỉnh Yên Bái', 'Tỉnh'),
(17, 'Tỉnh Hoà Bình', 'Tỉnh'),
(19, 'Tỉnh Thái Nguyên', 'Tỉnh'),
(20, 'Tỉnh Lạng Sơn', 'Tỉnh'),
(22, 'Tỉnh Quảng Ninh', 'Tỉnh'),
(24, 'Tỉnh Bắc Giang', 'Tỉnh'),
(25, 'Tỉnh Phú Thọ', 'Tỉnh'),
(26, 'Tỉnh Vĩnh Phúc', 'Tỉnh'),
(27, 'Tỉnh Bắc Ninh', 'Tỉnh'),
(30, 'Tỉnh Hải Dương', 'Tỉnh'),
(31, 'Thành phố Hải Phòng', 'Thành phố Trung ương'),
(33, 'Tỉnh Hưng Yên', 'Tỉnh'),
(34, 'Tỉnh Thái Bình', 'Tỉnh'),
(35, 'Tỉnh Hà Nam', 'Tỉnh'),
(36, 'Tỉnh Nam Định', 'Tỉnh'),
(37, 'Tỉnh Ninh Bình', 'Tỉnh'),
(38, 'Tỉnh Thanh Hóa', 'Tỉnh'),
(40, 'Tỉnh Nghệ An', 'Tỉnh'),
(42, 'Tỉnh Hà Tĩnh', 'Tỉnh'),
(44, 'Tỉnh Quảng Bình', 'Tỉnh'),
(45, 'Tỉnh Quảng Trị', 'Tỉnh'),
(46, 'Tỉnh Thừa Thiên Huế', 'Tỉnh'),
(48, 'Thành phố Đà Nẵng', 'Thành phố Trung ương'),
(49, 'Tỉnh Quảng Nam', 'Tỉnh'),
(51, 'Tỉnh Quảng Ngãi', 'Tỉnh'),
(52, 'Tỉnh Bình Định', 'Tỉnh'),
(54, 'Tỉnh Phú Yên', 'Tỉnh'),
(56, 'Tỉnh Khánh Hòa', 'Tỉnh'),
(58, 'Tỉnh Ninh Thuận', 'Tỉnh'),
(60, 'Tỉnh Bình Thuận', 'Tỉnh'),
(62, 'Tỉnh Kon Tum', 'Tỉnh'),
(64, 'Tỉnh Gia Lai', 'Tỉnh'),
(66, 'Tỉnh Đắk Lắk', 'Tỉnh'),
(67, 'Tỉnh Đắk Nông', 'Tỉnh'),
(68, 'Tỉnh Lâm Đồng', 'Tỉnh'),
(70, 'Tỉnh Bình Phước', 'Tỉnh'),
(72, 'Tỉnh Tây Ninh', 'Tỉnh'),
(74, 'Tỉnh Bình Dương', 'Tỉnh'),
(75, 'Tỉnh Đồng Nai', 'Tỉnh'),
(77, 'Tỉnh Bà Rịa - Vũng Tàu', 'Tỉnh'),
(79, 'Thành phố Hồ Chí Minh', 'Thành phố Trung ương'),
(80, 'Tỉnh Long An', 'Tỉnh'),
(82, 'Tỉnh Tiền Giang', 'Tỉnh'),
(83, 'Tỉnh Bến Tre', 'Tỉnh'),
(84, 'Tỉnh Trà Vinh', 'Tỉnh'),
(86, 'Tỉnh Vĩnh Long', 'Tỉnh'),
(87, 'Tỉnh Đồng Tháp', 'Tỉnh'),
(89, 'Tỉnh An Giang', 'Tỉnh'),
(91, 'Tỉnh Kiên Giang', 'Tỉnh'),
(92, 'Thành phố Cần Thơ', 'Thành phố Trung ương'),
(93, 'Tỉnh Hậu Giang', 'Tỉnh'),
(94, 'Tỉnh Sóc Trăng', 'Tỉnh'),
(95, 'Tỉnh Bạc Liêu', 'Tỉnh'),
(96, 'Tỉnh Cà Mau', 'Tỉnh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truycap`
--

DROP TABLE IF EXISTS `truycap`;
CREATE TABLE IF NOT EXISTS `truycap` (
  `ip_visitors` int(10) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(50) NOT NULL,
  `date_visitors` varchar(50) NOT NULL,
  PRIMARY KEY (`ip_visitors`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `truycap`
--

INSERT INTO `truycap` (`ip_visitors`, `ip_address`, `date_visitors`) VALUES
(1, '::1', '2021-12-16'),
(2, '103.221.221.189', '2021-12-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`dtMa`) REFERENCES `dungtich` (`dtMa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_loaima_foreign` FOREIGN KEY (`loaiMa`) REFERENCES `loaisanpham` (`loaiMa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_muama_foreign` FOREIGN KEY (`muaMa`) REFERENCES `muasanpham` (`muaMa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_thma_foreign` FOREIGN KEY (`thMa`) REFERENCES `thuonghieu` (`thMa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
