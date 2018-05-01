-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 09:17 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isd_rl_1401040103`
--
CREATE DATABASE IF NOT EXISTS `isd_rl_1401040103` DEFAULT CHARACTER SET utf8 COLLATE utf8_vietnamese_ci;
USE `isd_rl_1401040103`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Thiết bị an ninh', '2018-03-15 11:39:49', '2018-03-15 11:39:49'),
(2, 'Thiết bị PCCC', '2018-03-15 11:39:49', '2018-03-15 11:39:49'),
(3, 'Thiết bị chống sét', '2018-03-15 11:39:49', '2018-03-15 11:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `personalPhone` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `fax` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `workplacePhone` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `introductionMessage` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `position`, `personalPhone`, `email`, `fax`, `address`, `workplacePhone`, `image`, `website`, `introductionMessage`, `created_at`, `updated_at`) VALUES
(1, 'Bà Nguyễn Thị Hòa', 'Giám đốc', '(054) 350 2882', 'alicohue@yahoo.com.vn', '(054) 054 3845840', '11/59 An Dương Vương, Thành Phố Huế - Vp giao dịch: 8/33 An Dương Vương - Tp Huế', '(054) 3 502 882 - (054) 3 845840', 'images/contact/default.jpg', NULL, NULL, '2018-04-22 00:00:00', '2018-04-29 15:45:22'),
(2, 'CÔNG TY TNHH ẤN LĨNH', NULL, NULL, 'alicohue@yahoo.com.vn', '(054) 054 3845840', '11/59 An Dương Vương, Thành Phố Huế - Vp giao dịch: 8/33 An Dương Vương - Tp Huế', '(054) 3 502 882 - (054) 3 845840', 'images/189728-ban-do.jpg', 'http://alicohue.com', 'Chuyên cung cấp thiết bị & hệ thống: An Ninh - Chống Sét', '2018-04-22 00:00:00', '2018-04-29 15:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Phục vụ', 'Nhân viên chưa có thái độ phục vụ tốt khi khách phàn nàn về chất lượng của sản phẩm. Đặc biệt là nhân viên A.', '2018-03-30 16:13:01', '2018-03-30 16:13:01'),
(2, 'Phục vụ', 'Phục vụ nhiệt tình.', '2018-03-30 16:15:44', '2018-03-30 16:15:44'),
(3, 'Thiết bị cứu hoả chất lượng kém, chưa đáp ứng nhu cầu', 'Có khói nhưng thiết bị không báo.', '2018-03-30 16:16:05', '2018-03-30 16:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `introductions`
--

CREATE TABLE `introductions` (
  `id` int(11) NOT NULL,
  `content` text COLLATE utf8_vietnamese_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `introductions`
--

INSERT INTO `introductions` (`id`, `content`, `image`, `updated_at`, `created_at`) VALUES
(1, '<p><i><strong>Công Ty TNHH Ấn Lĩnh</strong></i> chúng tôi đặt trụ sở tại Tp. Huế, là đơn vị chuyên cung cấp các thiết bị &amp; hệ thống trong lĩnh vực:<i> An ninh &amp; Chống sét.</i></p><p>&nbsp;</p><p>Tiêu chí của chúng tôi là luôn mang lại cho Khách hàng những sản phẩm chất lượng tốt nhất - Dịch vụ hoàn hảo nhất.</p><p>Hiện nay, chúng tôi cung cấp chủ yếu các sản phẩm gồm:</p><ul><li><strong>Thiết bị, hệ thống An Ninh - An Toàn:</strong></li></ul><p>+&nbsp; Camera quan sát</p><p>+&nbsp; Thiết bị báo động</p><p>+ Thiết bị kiểm soát ra vào</p><ul><li><strong>Thiết bị Phòng cháy chữa cháy:</strong></li></ul><p>+ Vòi chữa cháy ,</p><p>+ Hộp tủ chữa cháy</p><p>+ Bình chữa cháy</p><ul><li><strong>Thiết bị chống sét:</strong></li></ul><p>+ Dây dẫn thoát sét</p><p>+ Kim thu sét</p><p>+ Tủ chống sét</p><p>+ Thiết bị chống sét lan truyền</p><p>Với đội ngũ cán bộ, công nhân viên giàu kinh nghiệm, tận tình với công việc, Ấn Lĩnh cam kết các sản phẩm do chúng tôi cung cấp đều được kiểm tra chất lượng nghiêm ngặt chắc chắn sẽ làm hài lòng Quý khách hàng.</p><p>Ấn Lĩnh luôn nỗ lực ở mức cao nhất để khách hàng luôn có được lựa chọn tốt nhất. Đối với chúng tôi, sự hài lòng và tin cậy của Quý khách hàng chính là khởi nguồn cho sự thịnh vượng và phát triển bền vững!</p><p>Chúng tôi xin cảm ơn những khách hàng đã tin tưởng sử dụng các sản phẩm &amp; dịch vụ của Ấn Lĩnh trong thời gian qua &amp; mong nhận được nhiều hơn nữa sự ủng hộ &amp; hợp tác cùng Quý khách hàng, Quý đối tác.</p><p>Ấn Lĩnh cam kết sẽ nỗ lực hết mình, sáng tạo hơn nữa &amp; không ngừng nâng cao chất lượng sản phẩm, dịch vụ và phong cách phục vụ để đáp lại sự tin cậy, trông đợi mà Quý khách hàng đã dành cho chúng tôi.</p><p>Hãy liên hệ với chúng tôi để có được giải pháp tốt nhất, hiệu quả nhất&nbsp; trong lĩnh vực An ninh, An Toàn &amp; Chống Sét</p><p>&nbsp;</p>', 'images/introduction/default.jpg', '2018-04-29 16:05:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2018_03_11_120300_create_categories_table', 1),
(3, '2018_03_11_121324_create_feedbacks_table', 1),
(4, '2018_03_13_141244_create_sub_category_table', 1),
(5, '2018_03_13_142625_create_productss_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_category_id` int(10) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sub_category_id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'PRC 334ZF', 'images/camera/145ec.jpg', '', '2018-03-31 03:32:12', '2018-03-31 03:32:12'),
(2, 1, 'PRC 406FH', 'images/camera/406fh.jpg', '', '2018-03-31 03:32:12', '2018-03-31 03:32:12'),
(3, 1, 'Picotech PC-608IRMTV', 'images/camera/608irmtv.jpg', '', '2018-03-31 03:32:12', '2018-03-31 03:32:12'),
(4, 1, 'Camera ngụy trang đầu báo khói', 'images/camera/camera-bao-khoi.jpg', '', '2018-03-31 03:32:12', '2018-03-31 03:32:12'),
(5, 1, 'PICOTECH PC 008SD', 'images/camera/pc-008s.png', '', '2018-03-31 03:32:12', '2018-03-31 03:32:12'),
(6, 1, 'PICOTECH PC 606 IR PL', 'images/camera/pc-606ir.png', '', '2018-03-31 03:32:13', '2018-03-31 03:32:13'),
(7, 1, 'PICOTECH PC 608IR MT 480', 'images/camera/pc-608ir.png', '', '2018-04-09 03:32:13', '2018-03-31 03:32:13'),
(8, 1, 'PC - 973BIG VF', 'images/camera/PC-973.jpg', '', '2018-03-31 03:32:13', '2018-03-31 03:32:13'),
(9, 1, 'PICOTECH PC 3030 IR /30X', 'images/camera/pc3030irz.png', '', '2018-04-16 03:32:13', '2018-03-31 03:32:13'),
(10, 1, 'PRC 334ZF', 'images/camera/PRC_334.jpg', '', '2018-03-31 03:32:13', '2018-03-31 03:32:13'),
(11, 1, 'PRC 46ZE', 'images/camera/PRC-46ZE.jpg', '', '2018-03-31 03:32:13', '2018-03-31 03:32:13'),
(12, 1, 'VDT126 PTWV', 'images/camera/vdt126.jpg', '', '2018-03-31 03:32:13', '2018-03-31 03:32:13'),
(13, 2, 'Đầu dò hồng ngoại ATSUMI NR30DT', 'images/thiet-bi-bao-dong/ATSUMI.jpg', '', '2018-03-31 03:32:13', '2018-03-31 03:32:13'),
(14, 2, 'Đầu dò hồng ngoại ATSUMI NR40TX', 'images/thiet-bi-bao-dong/ATSUMINR40.jpg', '', '2018-03-30 03:32:13', '2018-03-31 03:32:13'),
(15, 2, 'Báo trộm hồng ngoại PIR-64', 'images/thiet-bi-bao-dong/pir-64.jpg', '', '2018-03-31 03:32:13', '2018-03-31 03:32:13'),
(16, 3, 'Máy chấm công 5000A Pro', 'images/thiet-bi-kiem-soat-ra-vao/5000APro.png', '', '2018-03-31 03:32:13', '2018-03-31 03:32:13'),
(17, 3, 'Máy chấm công kiểm soát cửa bằng vân tay', 'images/thiet-bi-kiem-soat-ra-vao/F8.png', '', '2018-04-18 03:32:13', '2018-03-31 03:32:13'),
(18, 3, 'Máy chấm công kiểm soát cửa F-701', 'images/thiet-bi-kiem-soat-ra-vao/F-701.png', '', '2018-03-31 03:32:13', '2018-03-31 03:32:13'),
(19, 3, 'Máy chấm công vân tay F-708', 'images/thiet-bi-kiem-soat-ra-vao/F-708.png', '', '2018-03-31 03:32:13', '2018-03-31 03:32:13'),
(20, 3, 'Máy chấm công 5000A', 'images/thiet-bi-kiem-soat-ra-vao/L2000.png', '', '2018-03-31 03:32:13', '2018-03-31 03:32:13'),
(21, 3, 'Máy chấm công kiểm soát cửa SC 403', 'images/thiet-bi-kiem-soat-ra-vao/SC403.png', '', '2018-04-10 03:32:13', '2018-03-31 03:32:13'),
(22, 4, 'PRC 3700NF', 'images/he-thong-ghi-hinh-kts/3700NF.png', '', '2018-03-31 03:32:13', '2018-03-31 03:32:13'),
(23, 4, 'PRC 3700 D1', 'images/he-thong-ghi-hinh-kts/3700D1.jpg', '', '2018-03-31 03:32:13', '2018-03-31 03:32:13'),
(24, 4, 'PRC 4600HG', 'images/he-thong-ghi-hinh-kts/prc4600hg.jpg', '', '2018-03-31 03:32:14', '2018-03-31 03:32:14'),
(25, 4, 'PRC 2800.D1', 'images/he-thong-ghi-hinh-kts/prc_2800_d1.jpg', '', '2018-03-31 03:32:14', '2018-03-31 03:32:14'),
(26, 4, 'PRC 9100HFN', 'images/he-thong-ghi-hinh-kts/prc_9100hfn.jpg', '', '2018-03-31 03:32:14', '2018-03-31 03:32:14'),
(28, 1, 'PRC 334ZF', 'images/camera/145ec.jpg', '', '2018-03-31 03:34:12', '2018-03-31 03:34:12'),
(29, 1, 'PRC 406FH', 'images/camera/406fh.jpg', '', '2018-03-31 03:34:12', '2018-03-31 03:34:12'),
(30, 1, 'Picotech PC-608IRMTV', 'images/camera/608irmtv.jpg', '', '2018-03-31 03:34:12', '2018-03-31 03:34:12'),
(31, 1, 'Camera ngụy trang đầu báo khói', 'images/camera/camera-bao-khoi.jpg', '', '2018-03-31 03:34:12', '2018-03-31 03:34:12'),
(32, 1, 'PICOTECH PC 008SD', 'images/camera/pc-008s.png', '', '2018-03-31 03:34:12', '2018-03-31 03:34:12'),
(33, 1, 'PICOTECH PC 606 IR PL', 'images/camera/pc-606ir.png', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(34, 1, 'PICOTECH PC 608IR MT 480', 'images/camera/pc-608ir.png', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(35, 1, 'PC - 973BIG VF', 'images/camera/PC-973.jpg', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(36, 1, 'PICOTECH PC 3030 IR /30X', 'images/camera/pc3030irz.png', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(37, 1, 'PRC 334ZF', 'images/camera/PRC_334.jpg', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(38, 1, 'PRC 46ZE', 'images/camera/PRC-46ZE.jpg', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(39, 1, 'VDT126 PTWV', 'images/camera/vdt126.jpg', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(40, 2, 'Đầu dò hồng ngoại ATSUMI NR30DT', 'images/thiet-bi-bao-dong/ATSUMI.jpg', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(41, 2, 'Đầu dò hồng ngoại ATSUMI NR40TX', 'images/thiet-bi-bao-dong/ATSUMINR40.jpg', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(42, 2, 'Báo trộm hồng ngoại PIR-64', 'images/thiet-bi-bao-dong/pir-64.jpg', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(43, 3, 'Máy chấm công 5000A Pro', 'images/thiet-bi-kiem-soat-ra-vao/5000APro.png', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(44, 3, 'Máy chấm công kiểm soát cửa bằng vân tay', 'images/thiet-bi-kiem-soat-ra-vao/F8.png', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(45, 3, 'Máy chấm công kiểm soát cửa F-701', 'images/thiet-bi-kiem-soat-ra-vao/F-701.png', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(46, 3, 'Máy chấm công vân tay F-708', 'images/thiet-bi-kiem-soat-ra-vao/F-708.png', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(47, 3, 'Máy chấm công 5000A', 'images/thiet-bi-kiem-soat-ra-vao/L2000.png', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(48, 3, 'Máy chấm công kiểm soát cửa SC 403', 'images/thiet-bi-kiem-soat-ra-vao/SC403.png', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(49, 4, 'PRC 3700NF', 'images/he-thong-ghi-hinh-kts/3700NF.png', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(50, 4, 'PRC 3700 D1', 'images/he-thong-ghi-hinh-kts/3700D1.jpg', '', '2018-03-31 03:34:13', '2018-03-31 03:34:13'),
(51, 4, 'PRC 4600HG', 'images/he-thong-ghi-hinh-kts/prc4600hg.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(52, 4, 'PRC 2800.D1', 'images/he-thong-ghi-hinh-kts/prc_2800_d1.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(53, 4, 'PRC 9100HFN', 'images/he-thong-ghi-hinh-kts/prc_9100hfn.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(54, 5, 'Bình CO2 xách tay ECO', 'images/binh-chua-chay/ECO.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(55, 5, 'Bình PCCC Foam', 'images/binh-chua-chay/Foam.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(56, 5, 'Bình bột MFZ8', 'images/binh-chua-chay/MFZ8.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(57, 5, 'Bình bột MFZ35', 'images/binh-chua-chay/MFZ35.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(58, 5, 'Bình CO2 xách tay MT5', 'images/binh-chua-chay/MT5.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(59, 5, 'Bình CO2 MT24', 'images/binh-chua-chay/MT24.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(60, 5, 'Bình chữa cháy tự động bằng bột không nén áp suất', 'images/binh-chua-chay/nen_ap_xuat.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(61, 5, 'Bình chữa cầm tay PFE-1', 'images/binh-chua-chay/pfe1.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(62, 5, 'Bình chữa cháy cầm tay PFE-3', 'images/binh-chua-chay/PFE-3.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(63, 5, 'Binh cầu PCCC XZFTL', 'images/binh-chua-chay/XZFTL.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(64, 5, 'Bình chữa cháy cầm tay PFE-2', 'images/binh-chua-chay/PFE-2.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(65, 6, 'Vòi chữa cháy D25 Trung Quốc', 'images/voi-chua-chay/D25_trungquoc.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(66, 6, 'Vòi chữa cháy D50 - Đức', 'images/voi-chua-chay/D50-duc.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(67, 6, 'Vòi chữa cháy D50 - Nhật', 'images/voi-chua-chay/D50.jpg', '', '2018-03-31 03:34:14', '2018-03-31 03:34:14'),
(68, 6, 'Vòi chữa cháy D50 - Hàn Quốc', 'images/voi-chua-chay/D50hq.jpg', '', '2018-03-31 03:34:15', '2018-03-31 03:34:15'),
(69, 6, 'Vòi chữa cháy D65 - Đức', 'images/voi-chua-chay/D65duc.jpg', '', '2018-03-31 03:34:15', '2018-03-31 03:34:15'),
(70, 6, 'Vòi chữa cháy D65 - Hàn Quốc', 'images/voi-chua-chay/D65hq.jpg', '', '2018-03-31 03:34:15', '2018-03-31 03:34:15'),
(71, 6, 'Vòi chữa cháy D65 - Nhật', 'images/voi-chua-chay/D65.jpg', '', '2018-03-31 03:34:15', '2018-03-31 03:34:15'),
(72, 6, 'Vòi chữa cháy D50 - Dày-Trung Quốc', 'images/voi-chua-chay/DN50-trungquoc.jpg', '', '2018-03-31 03:34:15', '2018-03-31 03:34:15'),
(73, 6, 'Vòi chữa cháy D65 Trung Quốc', 'images/voi-chua-chay/DN65-tq.jpg', '', '2018-03-31 03:34:15', '2018-03-31 03:34:15'),
(74, 6, 'Cuộn vòi chữa cháy Rulo DN25', 'images/voi-chua-chay/Rulo-DN25.jpg', '', '2018-03-31 03:34:15', '2018-03-31 03:34:15'),
(75, 7, 'Trung tâm báo cháy GST', 'images/bao-chay/bao-chay-gst.jpg', '', '2018-03-31 03:34:15', '2018-03-31 03:34:15'),
(76, 7, 'Chuông còi báo cháy GST', 'images/bao-chay/chay-gst.jpg', '', '2018-03-31 03:34:15', '2018-03-31 03:34:15'),
(77, 7, 'Đầu báo gas', 'images/bao-chay/dau-bao-ga.jpg', '', '2018-03-31 03:34:15', '2018-03-31 03:34:15'),
(78, 7, 'Đầu báo khói', 'images/bao-chay/dau-bao-khoi.jpg', '', '2018-03-31 03:34:15', '2018-03-31 03:34:15'),
(79, 7, 'Đầu báo nhiệt', 'images/bao-chay/dau-bao-nhiet.jpg', '', '2018-03-31 03:34:15', '2018-03-31 03:34:15'),
(80, 7, 'Trung tâm báo cháy GST địa chỉ', 'images/bao-chay/GST-DIA-CHI.jpg', '', '2018-03-31 03:34:15', '2018-03-31 03:34:15'),
(81, 7, 'Đầu báo khói tại chổ', 'images/bao-chay/khoi-tai-cho.jpg', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(82, 8, 'Kim thu sét ERICO - USA', 'images/kim-thu-set/erico.JPG', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(83, 8, 'Kim thu sét LIVA- Thổ Nhĩ Kỳ', 'images/kim-thu-set/kim_thu_set_liva.jpg', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(84, 8, 'Kim thu sét PSR- Tây Ban Nha', 'images/kim-thu-set/PSR-Tay-Ban-Nha.JPG', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(85, 8, 'Kim thu sét SCHIRTEC- Áo', 'images/kim-thu-set/SCHIRTEC-Ao.JPG', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(86, 8, 'STAR - Pháp', 'images/kim-thu-set/star-Phap.JPG', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(87, 8, 'Kim thu sét STORMASTER LPI- Úc', 'images/kim-thu-set/STORMASTER-LPI.JPG', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(88, 8, 'Kim thu sét Cirprotec - Tây Ban Nha', 'images/kim-thu-set/tay-ban-nha.jpg', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(89, 8, 'Kim thu sét ONAY-Thổ Nhĩ Kỳ', 'images/kim-thu-set/tho-nhi-ky.jpg', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(90, 9, 'Cáp thoát sét bằng đồng bọc PVC', 'images/phu-kien-he-thong-chong-set/dau-boc-pvc.jpg', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(91, 9, 'Cáp thoát sét bằng đồng bọc PVC', 'images/phu-kien-he-thong-chong-set/day-2.jpg', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(92, 9, 'Cáp thoát sét mạ kẽm', 'images/phu-kien-he-thong-chong-set/day-3.jpg', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(93, 9, 'Cáp thoát sét 7 lớp chống nhiễu', 'images/phu-kien-he-thong-chong-set/day-4.jpg', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(94, 9, 'Hóa chất giảm điện trở đất', 'images/phu-kien-he-thong-chong-set/day-5.jpg', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(95, 9, 'Cọc tiếp địa', 'images/phu-kien-he-thong-chong-set/day-6.jpg', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(96, 9, 'Khuôn hàn hóa nhiệt & phụ kiện', 'images/phu-kien-he-thong-chong-set/day-7.jpg', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(97, 9, 'Ốc xiết cáp', 'images/phu-kien-he-thong-chong-set/day-8.gif', '', '2018-03-31 03:34:16', '2018-03-31 03:34:16'),
(98, 9, 'Hộp đo điện trở đất', 'images/phu-kien-he-thong-chong-set/day-9.jpg', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(99, 10, 'Tủ chống sét cho nguồn điện LDY-40B/YS', 'images/tu-chong-set/LDY-YS.jpg', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(100, 11, 'Thiết bị cắt sét 1 pha cấp I+II', 'images/thiet-bi-chong-set-lan-truyen/tb1.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(101, 11, 'Thiết bị cắt sét 3 pha cấp I+II', 'images/thiet-bi-chong-set-lan-truyen/tb2.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(102, 11, 'Thiết bị cắt sét 1 pha cấp II', 'images/thiet-bi-chong-set-lan-truyen/tb3.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(103, 11, 'Thiết bị cắt sét 3 pha cấp II', 'images/thiet-bi-chong-set-lan-truyen/tb4.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(104, 11, 'Thiết bị chống sét line điện thoại, máy tinh', 'images/thiet-bi-chong-set-lan-truyen/tb5.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(105, 11, 'Thiết bị chống sét line điện thoại', 'images/thiet-bi-chong-set-lan-truyen/tb6.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(106, 11, 'Thiết bị chống sét đường truyền dữ liệu', 'images/thiet-bi-chong-set-lan-truyen/tb7.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(107, 11, 'Thiết bị chống sét đường truyền dữ liệu', 'images/thiet-bi-chong-set-lan-truyen/tb8.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(108, 11, 'Thiết bị lọc sét đường nguồn', 'images/thiet-bi-chong-set-lan-truyen/tb9.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(109, 11, 'Thiết bị chống sét tín hiệu Video', 'images/thiet-bi-chong-set-lan-truyen/tb10.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(110, 11, 'Thiết bị chống sét tín hiệu cáp đồng trục', 'images/thiet-bi-chong-set-lan-truyen/tb11.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(111, 11, 'Thiết bị chống sét tín hiệu cáp đồng trục', 'images/thiet-bi-chong-set-lan-truyen/tb12.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(112, 11, 'Thiết bị chống sét tín hiệu Video', 'images/thiet-bi-chong-set-lan-truyen/tb13.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(113, 11, 'Thiết bị cắt lọc sét 1 pha cấp III', 'images/thiet-bi-chong-set-lan-truyen/tb14.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17'),
(114, 11, 'Thiết bị lọc sét 3 pha cấp III', 'images/thiet-bi-chong-set-lan-truyen/tb15.JPG', '', '2018-03-31 03:34:17', '2018-03-31 03:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Camera', '2018-03-31 03:34:03', '2018-03-31 03:34:03'),
(2, 1, 'Thiết bị báo động', '2018-03-31 03:34:04', '2018-03-31 03:34:04'),
(3, 1, 'Thiết bị kiểm soát ra vào', '2018-03-31 03:34:04', '2018-03-31 03:34:04'),
(4, 1, 'Hệ thống ghi hình KTS', '2018-03-31 03:34:04', '2018-03-31 03:34:04'),
(5, 2, 'Bình chữa cháy', '2018-03-31 03:34:04', '2018-03-31 03:34:04'),
(6, 2, 'Vòi chữa cháy', '2018-03-31 03:34:04', '2018-03-31 03:34:04'),
(7, 2, 'Báo cháy', '2018-03-31 03:34:04', '2018-03-31 03:34:04'),
(8, 3, 'Kim thu sét', '2018-03-31 03:34:04', '2018-03-31 03:34:04'),
(9, 3, 'Phụ kiện hệ thống chống sét', '2018-03-31 03:34:04', '2018-03-31 03:34:04'),
(10, 3, 'Tủ chống sét', '2018-03-31 03:34:04', '2018-03-31 03:34:04'),
(11, 3, 'Thiết bị chống sét lan truyền', '2018-03-31 03:34:04', '2018-03-31 03:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ALICOHUE.COM ADMIN', 'admin@example.com', '$2y$10$5VXVUpbgy43/.YWeQv.kje9C6PSf5CpiO74aGhwE/78.ti1549wVS', 'o8D3jPlmh4nt0KYZkdCK3fPb5dDH1lMHvMm22XhqUy9tBX4WET2y1hSpAvL1', '2018-03-18 07:47:33', '2018-03-18 07:47:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introductions`
--
ALTER TABLE `introductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `introductions`
--
ALTER TABLE `introductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`);

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
