-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 03:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sangnhanh`
--

-- --------------------------------------------------------

--
-- Table structure for table `sangnhanh_dangky`
--

CREATE TABLE `sangnhanh_dangky` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checked` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sangnhanh_dangky`
--

INSERT INTO `sangnhanh_dangky` (`id`, `name`, `email`, `checked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'mr.buiminhtuan@yahoo.com', NULL, '2015-03-31 01:34:53', '2015-03-31 01:34:53'),
(5, NULL, 'cuoitoadieuky@lipzo.com', NULL, '2015-03-31 02:36:51', '2015-03-31 02:36:51'),
(6, 'tuan', 'taun@yahoo.com', NULL, '2015-03-31 04:39:51', '2015-03-31 04:39:51'),
(8, 'sdfsadf', 'sdfsad@ha.com', NULL, '2015-04-01 21:20:39', '2015-04-01 21:20:39'),
(9, 'sdfsf', 'mr.buiminhtuanddd@yahoo.com', NULL, '2015-04-01 21:23:35', '2015-04-01 21:23:35'),
(10, 'lipzo.com', 'admin@admin.com', NULL, '2015-04-01 21:25:04', '2015-04-01 21:25:04'),
(26, NULL, 'trung@gmail.com', NULL, '2015-04-21 00:57:30', '2015-04-21 00:57:30'),
(27, NULL, 'chuonghoa83sg@gmail.com', NULL, '2015-05-24 11:15:33', '2015-05-24 11:15:33'),
(28, NULL, 'tuanbui@yahoo.com', NULL, '2015-05-24 20:07:22', '2015-05-24 20:07:22'),
(29, NULL, 'tonhu1972@gmail.com', NULL, '2015-05-26 08:26:31', '2015-05-26 08:26:31'),
(30, NULL, 'thanh.nguyentrung@hust.edu.vn', NULL, '2015-05-26 15:48:26', '2015-05-26 15:48:26'),
(31, NULL, 'giangngoctuyenhtkg@gmail.com', NULL, '2015-05-27 16:05:58', '2015-05-27 16:05:58'),
(32, NULL, 'hoanghanh80@gmail.com', NULL, '2015-05-27 19:32:37', '2015-05-27 19:32:37'),
(33, NULL, 'songthanh2007@gmail.com', NULL, '2015-05-29 10:54:45', '2015-05-29 10:54:45'),
(34, NULL, 'hotai59@yahoo.com', NULL, '2015-05-30 06:16:23', '2015-05-30 06:16:23'),
(35, NULL, 'chefdzung@amthucxuyenviet.com', NULL, '2015-05-30 09:41:50', '2015-05-30 09:41:50'),
(36, NULL, 'tranthehieu@gmail.com', NULL, '2015-05-30 14:46:01', '2015-05-30 14:46:01'),
(37, NULL, 'mr.tranvanbinh@gmail.com', NULL, '2015-06-03 17:05:09', '2015-06-03 17:05:09'),
(38, NULL, 'huynhle004@yahoo.com', NULL, '2015-06-06 00:47:57', '2015-06-06 00:47:57'),
(39, NULL, 'trinhnguyen1991.mp@gmail.com', NULL, '2015-06-12 06:16:36', '2015-06-12 06:16:36'),
(40, NULL, 'anhquy27_2008@yahoo.com.vn', NULL, '2015-06-12 18:41:43', '2015-06-12 18:41:43'),
(41, NULL, 'lannnhcs@gmail.com', NULL, '2015-06-16 06:25:13', '2015-06-16 06:25:13'),
(42, NULL, 'bsnguyenthanhphuong@gmail.com', NULL, '2015-06-16 14:12:46', '2015-06-16 14:12:46'),
(43, NULL, 'lyanbinhy2000@yahoo.com', NULL, '2015-06-19 14:24:46', '2015-06-19 14:24:46'),
(44, NULL, 'thucucle279@yahoo.com', NULL, '2015-06-20 08:59:19', '2015-06-20 08:59:19'),
(45, NULL, 'minhphuong57@yahoo.com', NULL, '2015-06-20 16:24:29', '2015-06-20 16:24:29'),
(46, NULL, 'betuduyen@ymail.com', NULL, '2015-06-21 14:43:27', '2015-06-21 14:43:27'),
(47, NULL, 'dinhcamnhung81@yahoo.com.vn', NULL, '2015-06-22 12:03:23', '2015-06-22 12:03:23'),
(48, NULL, 'daohien72@gmail.com', NULL, '2015-06-23 06:28:20', '2015-06-23 06:28:20'),
(49, NULL, 'longnguyengb@gmail.com', NULL, '2015-06-24 06:54:25', '2015-06-24 06:54:25'),
(50, NULL, 'rocking.u@gmail.com', NULL, '2015-06-24 11:46:44', '2015-06-24 11:46:44'),
(51, NULL, 'vananhbnd@gmail.com', NULL, '2015-06-24 17:21:40', '2015-06-24 17:21:40'),
(52, NULL, 'huongthumsb@gmail.com', NULL, '2015-06-29 10:05:37', '2015-06-29 10:05:37'),
(53, NULL, 'leungxuanwei@yahoo.com', NULL, '2015-06-30 06:24:57', '2015-06-30 06:24:57'),
(54, NULL, 'nhinapy89@gmail.com', NULL, '2015-06-30 07:29:54', '2015-06-30 07:29:54'),
(55, NULL, 'nguyenphatphuonghuy@gmail.com', NULL, '2015-06-30 11:17:40', '2015-06-30 11:17:40'),
(56, NULL, 'datcsc@gmail.com', NULL, '2015-06-30 12:09:21', '2015-06-30 12:09:21'),
(57, NULL, 'traitimcuahoangtu_maimaitraoveem@yahoo.com', NULL, '2015-07-10 06:26:48', '2015-07-10 06:26:48'),
(58, NULL, 'sn23061994@gmail.com', NULL, '2015-07-10 22:19:34', '2015-07-10 22:19:34'),
(59, NULL, 'hoang.nguyen@phiennhien.com', NULL, '2015-07-13 10:53:32', '2015-07-13 10:53:32'),
(60, NULL, 'thi200868@gmail.com', NULL, '2015-07-15 22:44:18', '2015-07-15 22:44:18'),
(61, NULL, 'anhtuankhanh@gmail.com', NULL, '2015-07-16 01:04:08', '2015-07-16 01:04:08'),
(62, NULL, 'halinh7607@gmail.com', NULL, '2015-07-17 23:21:07', '2015-07-17 23:21:07'),
(63, NULL, 'sachikoterlizzizg3781@yahoo.com', NULL, '2015-07-19 21:33:28', '2015-07-19 21:33:28'),
(64, NULL, 'binhdamttnbg@gmail.com', NULL, '2015-07-21 07:27:51', '2015-07-21 07:27:51'),
(65, NULL, 'nn.chi@prudential.com.vn', NULL, '2015-07-26 17:26:56', '2015-07-26 17:26:56'),
(66, NULL, 'cangttt@yahoo.com.vn', NULL, '2015-07-27 00:15:02', '2015-07-27 00:15:02'),
(67, NULL, 'laihoaianh1988@gmail.com', NULL, '2015-07-30 18:43:04', '2015-07-30 18:43:04'),
(68, NULL, 'lathanh_99@yahoo.com', NULL, '2015-08-01 00:24:25', '2015-08-01 00:24:25'),
(69, NULL, 'mai_m305@yahoo.com', NULL, '2015-08-01 06:20:28', '2015-08-01 06:20:28'),
(70, NULL, 'thaibqldavt@gmail.com', NULL, '2015-08-02 20:17:39', '2015-08-02 20:17:39'),
(71, NULL, 'hanguyen@moit.gov.vn', NULL, '2015-08-03 20:56:44', '2015-08-03 20:56:44'),
(72, NULL, 'diemchi.nguyen@rongphuongbac.com', NULL, '2015-08-07 02:32:36', '2015-08-07 02:32:36'),
(73, NULL, 'transon103@gmail.com', NULL, '2015-08-07 23:50:39', '2015-08-07 23:50:39'),
(74, NULL, 'ckoanglge@yahoo.com', NULL, '2015-08-08 08:33:36', '2015-08-08 08:33:36'),
(75, NULL, 'huynguyentran@yahoo.com', NULL, '2015-08-09 23:23:43', '2015-08-09 23:23:43'),
(76, NULL, '14@thbv.com', NULL, '2015-08-11 20:12:49', '2015-08-11 20:12:49'),
(77, NULL, 'nguyenvuat@yahoo.com.vn', NULL, '2015-08-13 09:14:48', '2015-08-13 09:14:48'),
(78, NULL, 'ngocbich2502@gmail.com', NULL, '2015-08-13 18:12:25', '2015-08-13 18:12:25'),
(79, NULL, 'annnguyen1109@gmail.com', NULL, '2015-08-14 02:29:27', '2015-08-14 02:29:27'),
(80, NULL, 'lehoangnhuthotnot@gmail.com', NULL, '2015-08-14 08:35:57', '2015-08-14 08:35:57'),
(81, NULL, 'mynguyendh1208@gmail.com', NULL, '2015-08-15 06:05:49', '2015-08-15 06:05:49'),
(82, NULL, 'baypgd@gmail.com', NULL, '2015-08-16 01:38:12', '2015-08-16 01:38:12'),
(83, NULL, 'loannguyen1989@gmail.com', NULL, '2015-08-16 18:20:09', '2015-08-16 18:20:09'),
(84, NULL, 'oanhnguyen1028@gmail.com', NULL, '2015-08-16 18:21:41', '2015-08-16 18:21:41'),
(85, NULL, 'vutuananh1997a@gmail.com', NULL, '2015-08-16 20:23:32', '2015-08-16 20:23:32'),
(86, NULL, 'lehuynguyen76@gmail.com', NULL, '2015-08-17 15:55:42', '2015-08-17 15:55:42'),
(87, NULL, 'nguyenlien041284@gmail.com', NULL, '2015-08-18 01:50:06', '2015-08-18 01:50:06'),
(88, NULL, 'haipgdhongdan@gmail.com', NULL, '2015-08-18 06:06:08', '2015-08-18 06:06:08'),
(89, NULL, 'ngviettam@gmail.com', NULL, '2015-08-18 18:23:03', '2015-08-18 18:23:03'),
(90, NULL, 'tienanh155@gmail.com', NULL, '2015-08-19 19:48:51', '2015-08-19 19:48:51'),
(91, NULL, 'steven_huy1979@yahoo.com', NULL, '2015-08-19 19:56:44', '2015-08-19 19:56:44'),
(92, NULL, 'lehanh2013@gmail.com', NULL, '2015-08-21 03:52:16', '2015-08-21 03:52:16'),
(93, NULL, 'chauthanhphong36@gmail.com', NULL, '2015-08-22 07:06:30', '2015-08-22 07:06:30'),
(94, NULL, 'ngantoantin@gmail.com', NULL, '2015-08-23 07:31:51', '2015-08-23 07:31:51'),
(99, NULL, 'congtt@dichthuatso1.com', NULL, '2015-08-26 08:37:35', '2015-08-26 08:37:35'),
(100, NULL, 'nguyenhuycuong2007@gmail.com', NULL, '2015-08-26 23:17:44', '2015-08-26 23:17:44'),
(101, NULL, 'hatiennguyenduc@gmail.com', NULL, '2015-08-27 07:51:20', '2015-08-27 07:51:20'),
(102, 'Phạm Văn Trường', 'truongpham931@gmail.com', NULL, '2015-08-28 07:36:37', '2015-08-28 07:36:37'),
(103, NULL, 'tuanvina286@gmail.com', NULL, '2015-08-29 01:47:48', '2015-08-29 01:47:48'),
(104, NULL, 'linh.corn@yahoo.com', NULL, '2015-08-31 01:11:34', '2015-08-31 01:11:34'),
(105, NULL, 'nvgiang.math@gmail.com', NULL, '2015-09-02 14:02:33', '2015-09-02 14:02:33'),
(106, NULL, 'vuhuongthom082@yahoo.com', NULL, '2015-09-04 02:24:18', '2015-09-04 02:24:18'),
(107, NULL, 'duyminhnguyen90@gmail.com', NULL, '2015-09-07 07:57:49', '2015-09-07 07:57:49'),
(108, NULL, 'nkhanhhoa@yahoo.com', NULL, '2015-09-09 18:04:45', '2015-09-09 18:04:45'),
(110, NULL, 'dang@ipsvn.com.vn', NULL, '2015-09-09 21:40:49', '2015-09-09 21:40:49'),
(111, NULL, 'thanhthuy@greenstone.com.vn', NULL, '2015-09-10 06:39:58', '2015-09-10 06:39:58'),
(112, NULL, 'nhu1972@gmail.com', NULL, '2015-09-10 17:57:53', '2015-09-10 17:57:53'),
(113, NULL, 'kimhangcaongoc@yahoo.com', NULL, '2015-09-12 22:59:56', '2015-09-12 22:59:56'),
(114, NULL, 'trinhkhanhhuong1973@gmail.com', NULL, '2015-09-14 06:31:59', '2015-09-14 06:31:59'),
(115, NULL, 'trinh_nhuhue1982@yahoo.com.vn', NULL, '2015-09-14 19:29:29', '2015-09-14 19:29:29'),
(116, NULL, 'phamquocbinhb@yahoo.com.vn', NULL, '2015-09-15 05:28:40', '2015-09-15 05:28:40'),
(117, NULL, 'hieuphuong1990@yahoo.com.vn', NULL, '2015-09-15 21:03:32', '2015-09-15 21:03:32'),
(118, NULL, 'trungkien5678@yahoo.com.vn', NULL, '2015-09-15 21:21:37', '2015-09-15 21:21:37'),
(119, NULL, 'mandyly144@yahoo.com', NULL, '2015-09-15 23:31:03', '2015-09-15 23:31:03'),
(120, NULL, 'phanmaikhoi2010@yahoo.com.vn', NULL, '2015-09-16 00:10:23', '2015-09-16 00:10:23'),
(121, NULL, 'khanhngocminh@gmail.com', NULL, '2015-09-16 08:19:40', '2015-09-16 08:19:40'),
(122, NULL, 'duongluansir@gmail.com', NULL, '2015-09-16 10:03:04', '2015-09-16 10:03:04'),
(123, NULL, 'minhhao0611@gmail.com', NULL, '2015-09-16 17:31:39', '2015-09-16 17:31:39'),
(124, NULL, 'anhcleverlearn@yahoo.com', NULL, '2015-09-18 05:03:53', '2015-09-18 05:03:53'),
(125, NULL, 'ducnd@hn.vnn.vn', NULL, '2015-09-19 19:57:17', '2015-09-19 19:57:17'),
(126, NULL, 'trung88tg@gmail.com', NULL, '2015-09-20 20:22:50', '2015-09-20 20:22:50'),
(127, NULL, 'vypinky88@gmail.com', NULL, '2015-09-20 23:32:30', '2015-09-20 23:32:30'),
(128, NULL, 'bqduoc@yahoo.com', NULL, '2015-09-22 20:12:22', '2015-09-22 20:12:22'),
(129, NULL, 'hophuongthao2704@gmail.com', NULL, '2015-09-22 22:22:56', '2015-09-22 22:22:56'),
(130, NULL, 'phuong_blueberry@yahoo.com.vn', NULL, '2015-09-23 08:31:41', '2015-09-23 08:31:41'),
(131, NULL, 'bui60hung@yahoo.com.vn', NULL, '2015-09-23 19:25:59', '2015-09-23 19:25:59'),
(132, NULL, 'ducphuong73@gmail.com', NULL, '2015-09-23 19:30:20', '2015-09-23 19:30:20'),
(133, NULL, 'orient978@yahoo.com', NULL, '2015-09-24 23:22:11', '2015-09-24 23:22:11'),
(134, NULL, 'dslethuy@gmail.com', NULL, '2015-09-25 00:26:08', '2015-09-25 00:26:08'),
(135, NULL, 'hungconcovn@gmail.com', NULL, '2015-09-27 05:13:27', '2015-09-27 05:13:27'),
(136, NULL, 'thanhthaolx82@yahoo.com.vn', NULL, '2015-09-28 08:13:50', '2015-09-28 08:13:50'),
(137, NULL, 'thucthongthai.8482@gmail.com', NULL, '2015-09-29 07:30:05', '2015-09-29 07:30:05'),
(138, NULL, 'phillip11101988@gmail.com', NULL, '2015-09-30 01:24:57', '2015-09-30 01:24:57'),
(139, 'Trần Nha Trang', 'nhatrang@vinaphone.vn', NULL, '2015-09-30 19:26:40', '2015-09-30 19:26:40'),
(140, 'Bui Huu Hieu', 'vungtin_tienlen@yahoo.com.vn', NULL, '2015-09-30 20:13:17', '2015-09-30 20:13:17'),
(141, 'Nguyễn Ngọc Diễm', 'nguyenngocxxxx@yahoo.com', NULL, '2015-10-02 02:18:21', '2015-10-02 02:18:21'),
(142, 'Sương', 'nguyenthisuong1979@gmail.com', NULL, '2015-10-02 04:02:40', '2015-10-02 04:02:40'),
(143, NULL, 'tanhair_salon91@yahoo.com', NULL, '2015-10-02 12:13:38', '2015-10-02 12:13:38'),
(144, 'Thao Tran', 'bacsyphuongthao@gmail.com', NULL, '2015-10-03 08:43:33', '2015-10-03 08:43:33'),
(146, NULL, 'danghuynguyen6@yahoo.com', NULL, '2015-10-03 23:30:14', '2015-10-03 23:30:14'),
(147, NULL, 'bsphuongthao@emcas.com.vn', NULL, '2015-10-04 17:57:38', '2015-10-04 17:57:38'),
(148, NULL, 'ngochien_msb@yahoo.com', NULL, '2015-10-05 07:48:51', '2015-10-05 07:48:51'),
(149, NULL, 'hoanganh2901@gmail.com', NULL, '2015-10-07 15:10:17', '2015-10-07 15:10:17'),
(150, NULL, 'nguyennhanaivy96@gmail.com', NULL, '2015-10-10 08:57:01', '2015-10-10 08:57:01'),
(151, NULL, 'karl.el.lam@gmail.com', NULL, '2015-10-11 22:17:31', '2015-10-11 22:17:31'),
(152, NULL, 'lucky_doolly@yahoo.com', NULL, '2015-10-12 02:18:19', '2015-10-12 02:18:19'),
(153, NULL, 'bienxa', NULL, '2015-10-12 03:35:14', '2015-10-12 03:35:14'),
(154, NULL, 'bienxanh', NULL, '2015-10-12 03:35:19', '2015-10-12 03:35:19'),
(155, NULL, 'bienxanh1680@', NULL, '2015-10-12 03:35:25', '2015-10-12 03:35:25'),
(156, NULL, 'bienxanh1680@ya', NULL, '2015-10-12 03:35:26', '2015-10-12 03:35:26'),
(157, NULL, 'ntvananh312@gmail.com', NULL, '2015-10-13 02:17:22', '2015-10-13 02:17:22'),
(159, NULL, 'mainguyenhlg@gmail.com', NULL, '2015-10-13 18:50:26', '2015-10-13 18:50:26'),
(160, NULL, 'leviettung3979@yahoo.com.vn', NULL, '2015-10-14 19:53:14', '2015-10-14 19:53:14'),
(161, NULL, 'dinhmiu1208@gmail.com', NULL, '2015-10-19 07:26:42', '2015-10-19 07:26:42'),
(162, NULL, 'luuuyen0101@gmail.com', NULL, '2015-10-19 18:11:18', '2015-10-19 18:11:18'),
(163, NULL, 'lienhcbh@yahoo.com', NULL, '2015-10-19 23:53:55', '2015-10-19 23:53:55'),
(164, NULL, 'tlecuong@gmail.com', NULL, '2015-10-21 18:31:07', '2015-10-21 18:31:07'),
(165, NULL, 'sansang80@yahoo.com', NULL, '2015-10-21 18:49:02', '2015-10-21 18:49:02'),
(166, NULL, 'xuanhuong1974@yahoo.com', NULL, '2015-10-21 19:51:40', '2015-10-21 19:51:40'),
(167, NULL, 'thanhmai224@gmail.com', NULL, '2015-10-21 20:17:54', '2015-10-21 20:17:54'),
(168, NULL, 'trangnt@sags.vn', NULL, '2015-10-22 05:36:13', '2015-10-22 05:36:13'),
(169, NULL, 'lan0275@yahoo.com.vn', NULL, '2015-10-23 01:00:05', '2015-10-23 01:00:05'),
(170, NULL, 'ngovanthanh@hatien1.com.vn', NULL, '2015-10-23 01:42:45', '2015-10-23 01:42:45'),
(171, NULL, 'dieuthi.vaa@gmail.com', NULL, '2015-10-23 02:24:28', '2015-10-23 02:24:28'),
(172, NULL, 'nguyenhang.anhalv@gmail.com', NULL, '2015-10-23 20:07:45', '2015-10-23 20:07:45'),
(173, NULL, 'nguyenanhtuan9406@gmail.com', NULL, '2015-10-25 01:13:39', '2015-10-25 01:13:39'),
(174, NULL, 'nguyenleminhthao@gmail.com', NULL, '2015-10-26 01:18:55', '2015-10-26 01:18:55'),
(175, NULL, 'nguyenlan21190@yahoo.com', NULL, '2015-10-26 01:32:58', '2015-10-26 01:32:58'),
(176, NULL, 'thanhhoa316ttl@gmail.com', NULL, '2015-10-26 20:05:07', '2015-10-26 20:05:07'),
(177, NULL, 'vanvuthi@yahoo.com', NULL, '2015-10-28 08:09:45', '2015-10-28 08:09:45'),
(178, NULL, 'nguyenhieunt26@gmail.com', NULL, '2015-10-30 19:56:40', '2015-10-30 19:56:40'),
(179, NULL, 'hongthao03@gmail.com', NULL, '2015-10-31 20:40:21', '2015-10-31 20:40:21'),
(180, NULL, 'thuytrang1501@gmail.com', NULL, '2015-11-01 20:13:30', '2015-11-01 20:13:30'),
(181, NULL, 'qnguyen.dta@gmail.com', NULL, '2015-11-02 08:31:15', '2015-11-02 08:31:15'),
(182, NULL, 'nam_24t_hcm@yahoo.com.vn', NULL, '2015-11-02 17:42:59', '2015-11-02 17:42:59'),
(183, NULL, 'hoainam29889@yahoo.com', NULL, '2015-11-02 18:42:48', '2015-11-02 18:42:48'),
(184, NULL, 'sevenball007@gmail.com', NULL, '2015-11-02 21:34:52', '2015-11-02 21:34:52'),
(185, NULL, 'heocondethuong_211088@yahoo.com', NULL, '2015-11-03 02:21:42', '2015-11-03 02:21:42'),
(186, NULL, 'hquocviet@yahoo.com', NULL, '2015-11-03 03:26:29', '2015-11-03 03:26:29'),
(187, NULL, 'duythanhviva@yahoo.com', NULL, '2015-11-03 17:09:29', '2015-11-03 17:09:29'),
(188, NULL, 'info.ips@ipsvn.com.vn', NULL, '2015-11-03 19:43:35', '2015-11-03 19:43:35'),
(189, NULL, 'anh.dpt@gmail.com', NULL, '2015-11-03 20:06:22', '2015-11-03 20:06:22'),
(190, NULL, 'hana.bi307@icloud.com', NULL, '2015-11-05 07:44:09', '2015-11-05 07:44:09'),
(191, NULL, 'nguyen-mai-quynh.nhu@siemens.com', NULL, '2015-11-06 01:24:30', '2015-11-06 01:24:30'),
(192, NULL, 'terisavn@yahoo.com', NULL, '2015-11-06 22:52:13', '2015-11-06 22:52:13'),
(193, NULL, 'chichbong111014@gmail.com', NULL, '2015-11-07 08:37:18', '2015-11-07 08:37:18'),
(194, NULL, 'maihuongle5914@gmail.com', NULL, '2015-11-07 09:04:32', '2015-11-07 09:04:32'),
(195, NULL, 'lan_ntp@bidv.com.vn', NULL, '2015-11-08 01:09:09', '2015-11-08 01:09:09'),
(196, NULL, 'dieungan19872002@yahoo.com', NULL, '2015-11-08 21:03:30', '2015-11-08 21:03:30'),
(197, NULL, 'anhtran1091@gmail.com', NULL, '2015-11-09 00:27:05', '2015-11-09 00:27:05'),
(198, NULL, 'tuvan.ketoan1982@gmail.com', NULL, '2015-11-09 07:36:28', '2015-11-09 07:36:28'),
(199, NULL, 'ngbinie@yahoo.com', NULL, '2015-11-09 19:45:21', '2015-11-09 19:45:21'),
(200, 'trikhamle', 'trikhamle@gmail.com', NULL, '2015-11-09 19:51:31', '2015-11-09 19:51:31'),
(202, NULL, 'tongvanhuy181209@gmail.com', NULL, '2015-11-09 23:46:14', '2015-11-09 23:46:14'),
(203, NULL, 'thuydinh.wsu@gmail.com', NULL, '2015-11-10 00:10:07', '2015-11-10 00:10:07'),
(204, 'Huong', 'nguyenhuong26@yahoo.com', NULL, '2015-11-10 02:58:19', '2015-11-10 02:58:19'),
(205, 'Nguyễn Thị Ngọc Diệp', 'thaivandungatc@gmail.com', NULL, '2015-11-10 07:31:31', '2015-11-10 07:31:31'),
(206, NULL, 'viviteknt@gmail.com', NULL, '2015-11-10 19:29:21', '2015-11-10 19:29:21'),
(207, NULL, 'info@phamgianguyen.vn', NULL, '2015-11-10 21:02:03', '2015-11-10 21:02:03'),
(208, NULL, 'nga2192@gmail.com', NULL, '2015-11-11 01:26:01', '2015-11-11 01:26:01'),
(209, NULL, 'didongiphonge6889@gmail.com', NULL, '2015-11-11 04:12:33', '2015-11-11 04:12:33'),
(210, NULL, 'phamthanhtung619@gmail.com', NULL, '2015-11-11 04:35:39', '2015-11-11 04:35:39'),
(211, NULL, 'lichongxin.luonggiathai@gmail.com', NULL, '2015-11-11 05:21:41', '2015-11-11 05:21:41'),
(212, NULL, 'namtran.vpt@gmail.com', NULL, '2015-11-11 07:15:12', '2015-11-11 07:15:12'),
(213, NULL, 'nhung.vtt12@gmail.com', NULL, '2015-11-12 22:31:37', '2015-11-12 22:31:37'),
(215, NULL, 'tuananhv151@yahoo.com.vn', NULL, '2015-11-13 00:16:18', '2015-11-13 00:16:18'),
(216, NULL, 'phamanhhuy47@gmail.com', NULL, '2015-11-16 04:15:39', '2015-11-16 04:15:39'),
(217, NULL, 'hongminh78@gmail.com', NULL, '2015-11-17 02:21:15', '2015-11-17 02:21:15'),
(218, NULL, 'hoaibao8341@yahoo.com', NULL, '2015-11-18 00:21:53', '2015-11-18 00:21:53'),
(219, NULL, 'guofayan@gmail.com', NULL, '2015-11-19 08:35:35', '2015-11-19 08:35:35'),
(220, NULL, 'aihangpham8087@gmail.com', NULL, '2015-11-23 01:29:47', '2015-11-23 01:29:47'),
(221, NULL, 'trungdungpmh@gmail.com', NULL, '2015-11-23 05:00:28', '2015-11-23 05:00:28'),
(222, NULL, 'kinhdoanhgiavu@gmail.com', NULL, '2015-11-25 00:17:36', '2015-11-25 00:17:36'),
(223, NULL, 'thuytrang150121@gmail.com', NULL, '2015-11-25 01:55:25', '2015-11-25 01:55:25'),
(224, NULL, 'do_haiyen_chuyenly44@yahoo.com', NULL, '2015-11-25 02:15:31', '2015-11-25 02:15:31'),
(225, NULL, 'khanhmt.cnkt@gmail.con', NULL, '2015-11-25 04:54:48', '2015-11-25 04:54:48'),
(226, NULL, 'ngoc0331@yahoo.com', NULL, '2015-11-25 18:59:36', '2015-11-25 18:59:36'),
(227, NULL, 'sally.hangnguyen@gmail.com', NULL, '2015-11-25 19:03:05', '2015-11-25 19:03:05'),
(228, NULL, 'phuonglan3358@yahoo.com', NULL, '2015-11-28 19:05:18', '2015-11-28 19:05:18'),
(229, 'vu dinh sơn', 'vudinhsonnicotex@gmail.com', NULL, '2015-11-28 20:43:36', '2015-11-28 20:43:36'),
(230, NULL, 'luonganh7286@gmail.com', NULL, '2015-11-28 21:15:27', '2015-11-28 21:15:27'),
(231, NULL, 'thaohd1990@gmail.com', NULL, '2015-11-29 08:17:04', '2015-11-29 08:17:04'),
(232, NULL, 'dinhquysh@gmail.com', NULL, '2015-11-29 23:51:01', '2015-11-29 23:51:01'),
(233, NULL, 'ptpthao15@gmail.com', NULL, '2015-11-30 05:49:40', '2015-11-30 05:49:40'),
(234, NULL, 'hongtien04@gmail.com', NULL, '2015-11-30 19:03:37', '2015-11-30 19:03:37'),
(236, NULL, 'hiennguyethanh60@yahoo.com.vn', NULL, '2015-12-01 02:35:07', '2015-12-01 02:35:07'),
(237, NULL, 'nhaphan206@gmail.com', NULL, '2015-12-02 22:54:57', '2015-12-02 22:54:57'),
(238, NULL, 'cngochan@gmail.com', NULL, '2015-12-03 01:05:52', '2015-12-03 01:05:52'),
(239, NULL, 'Tuyetnhung102@gmail.com', NULL, '2015-12-03 01:44:00', '2015-12-03 01:44:00'),
(240, NULL, 'doantu383838@gmail.com', NULL, '2015-12-07 07:22:42', '2015-12-07 07:22:42'),
(241, NULL, 'doanxuanco.ltd@gmail.com', NULL, '2015-12-07 14:44:26', '2015-12-07 14:44:26'),
(242, NULL, 'huyson.ta@gmail.com', NULL, '2015-12-07 19:07:23', '2015-12-07 19:07:23'),
(243, NULL, 'ddthuong@gmail.com', NULL, '2015-12-07 19:13:21', '2015-12-07 19:13:21'),
(244, NULL, 'son.nt@barch.vn', NULL, '2015-12-07 21:24:16', '2015-12-07 21:24:16'),
(245, NULL, 'tieppv87@gmail.com', NULL, '2015-12-08 18:09:06', '2015-12-08 18:09:06'),
(246, 'Nguyen Lan Anh', 'N_lanh@yahoo.com', NULL, '2015-12-09 19:07:06', '2015-12-09 19:07:06'),
(247, NULL, 'duyen.pvgas@gmail.com', NULL, '2015-12-09 20:13:12', '2015-12-09 20:13:12'),
(248, 'Loan Phan', 'kimloanpt@gmail.com', NULL, '2015-12-09 20:28:22', '2015-12-09 20:28:22'),
(249, 'Tuong le', 'tuong.le56@yahoo.com', NULL, '2015-12-10 01:48:36', '2015-12-10 01:48:36'),
(250, NULL, 'drhuongtran3012@gmail.com', NULL, '2015-12-10 21:59:16', '2015-12-10 21:59:16'),
(251, NULL, 'hoanang25972@gmail.com', NULL, '2015-12-11 07:11:36', '2015-12-11 07:11:36'),
(252, NULL, 'biztraining@gmail.com', NULL, '2015-12-11 15:48:02', '2015-12-11 15:48:02'),
(253, NULL, 'hoang.nguyen@opec.vn', NULL, '2015-12-15 01:55:37', '2015-12-15 01:55:37'),
(254, NULL, 'bsbabay@gmail.com', NULL, '2015-12-15 06:36:46', '2015-12-15 06:36:46'),
(255, NULL, 'susunoel@yahoo.com.vn', NULL, '2015-12-15 20:45:47', '2015-12-15 20:45:47'),
(256, 'Khánh Huyền', 'khanhuyen267@yhaoo.com', NULL, '2015-12-15 22:32:33', '2015-12-15 22:32:33'),
(257, NULL, 'cuonglmhd@gmail.com', NULL, '2015-12-16 03:02:21', '2015-12-16 03:02:21'),
(258, NULL, 'grandis2011@yahoo.com.vn', NULL, '2015-12-16 19:49:39', '2015-12-16 19:49:39'),
(259, NULL, 'blamnguyen@yahoo.com.vn', NULL, '2015-12-17 01:51:31', '2015-12-17 01:51:31'),
(260, NULL, 'chauhoang1976@yahoo.com', NULL, '2015-12-18 19:07:05', '2015-12-18 19:07:05'),
(261, NULL, 'trinh.pth@nghia.vn', NULL, '2015-12-21 01:53:58', '2015-12-21 01:53:58'),
(262, NULL, 'quydoricky79@gmail.com', NULL, '2015-12-21 20:34:32', '2015-12-21 20:34:32'),
(263, NULL, 'honghiepvncc@gmail.com', NULL, '2015-12-22 07:01:25', '2015-12-22 07:01:25'),
(264, NULL, 'hai.hamy@gmail.com', NULL, '2015-12-26 21:27:14', '2015-12-26 21:27:14'),
(265, NULL, 'tndinhtrieu@gmail.com', NULL, '2015-12-27 00:01:26', '2015-12-27 00:01:26'),
(266, 'Thanh binh', 'bjnhhoang88@yahoo.com', NULL, '2015-12-28 22:28:52', '2015-12-28 22:28:52'),
(267, NULL, 'vuduyphu92@gmail.com', NULL, '2015-12-30 06:59:50', '2015-12-30 06:59:50'),
(268, NULL, 'nguyenbichloan79@gmail.com', NULL, '2015-12-31 08:10:22', '2015-12-31 08:10:22'),
(269, NULL, 'zentran11@gmail.com', NULL, '2016-01-03 18:49:41', '2016-01-03 18:49:41'),
(270, NULL, 'tonitrinh.niit@gmail.com', NULL, '2016-01-04 23:46:10', '2016-01-04 23:46:10'),
(271, NULL, 'thaihao80@gmail.com', NULL, '2016-01-08 00:17:01', '2016-01-08 00:17:01'),
(272, NULL, 'hanh@suntex.vn', NULL, '2016-01-10 06:48:07', '2016-01-10 06:48:07'),
(273, NULL, 'ducminh243@gmail.com', NULL, '2016-01-10 18:43:47', '2016-01-10 18:43:47'),
(274, NULL, 'truongthiphuongthao10av1@gmail.com', NULL, '2016-01-13 02:27:07', '2016-01-13 02:27:07'),
(275, NULL, 'hungviet27a.tvh@gmail.com', NULL, '2016-01-13 07:08:01', '2016-01-13 07:08:01'),
(276, 'Lưu Vân Hương', 'luuvanhuong.vh@gmail.com', NULL, '2016-01-13 08:53:34', '2016-01-13 08:53:34'),
(277, NULL, 'tththanhlieu26@gmail.com', NULL, '2016-01-17 09:37:50', '2016-01-17 09:37:50'),
(278, NULL, 'dongthihongcuc@gmail.com', NULL, '2016-01-17 23:04:45', '2016-01-17 23:04:45'),
(279, NULL, 'tnhdong@gmail.com', NULL, '2016-01-18 21:10:32', '2016-01-18 21:10:32'),
(280, NULL, 'huynhchung86@gmail.com', NULL, '2016-01-19 02:34:01', '2016-01-19 02:34:01'),
(281, NULL, 'ac@hanoielegancehotel.com', NULL, '2016-01-20 21:40:43', '2016-01-20 21:40:43'),
(282, NULL, 'buikimthoa69@gmail.com', NULL, '2016-01-23 22:29:25', '2016-01-23 22:29:25'),
(283, NULL, 'tuyenvd@pmfsteel.com.vn', NULL, '2016-01-27 00:21:41', '2016-01-27 00:21:41'),
(284, NULL, 'hangth59@gmail.com', NULL, '2016-01-28 05:47:42', '2016-01-28 05:47:42'),
(285, NULL, 'tiendatubnd@gmail.com', NULL, '2016-01-28 20:28:19', '2016-01-28 20:28:19'),
(286, NULL, 'mainth1@viettel.com.vn', NULL, '2016-01-28 21:01:47', '2016-01-28 21:01:47'),
(287, NULL, 'hoa80nguyen@gmail.com', NULL, '2016-02-01 20:00:47', '2016-02-01 20:00:47'),
(288, NULL, 'vuluong2472@gmail.com', NULL, '2016-02-02 09:04:31', '2016-02-02 09:04:31'),
(289, NULL, 'uyenben@yahoo.com', NULL, '2016-02-03 20:51:37', '2016-02-03 20:51:37'),
(290, NULL, 'uyennguyen1001@gmail.com', NULL, '2016-02-03 21:01:06', '2016-02-03 21:01:06'),
(291, NULL, 'thuhavn75@yahoo.com', NULL, '2016-02-06 07:40:19', '2016-02-06 07:40:19'),
(292, NULL, 'hoazod@gmail.com', NULL, '2016-02-09 23:12:24', '2016-02-09 23:12:24'),
(293, NULL, 'thuynt11@vietinbank.vn', NULL, '2016-02-14 09:52:09', '2016-02-14 09:52:09'),
(294, NULL, 'khuyenvv@dongtam.com.vn', NULL, '2016-02-14 19:59:57', '2016-02-14 19:59:57'),
(295, NULL, 'vothanhsang2009@gmail.com', NULL, '2016-02-14 22:58:48', '2016-02-14 22:58:48'),
(296, NULL, 'binh.vnvt@gmail.com', NULL, '2016-02-16 08:56:44', '2016-02-16 08:56:44'),
(297, NULL, 'ngabinh2013@gmail.com', NULL, '2016-02-17 08:53:35', '2016-02-17 08:53:35'),
(298, NULL, 'nguyenthiyendan@yahoo.com', NULL, '2016-02-19 18:15:07', '2016-02-19 18:15:07'),
(299, NULL, 'huyenpuko1996@gmail.com', NULL, '2016-02-20 20:59:53', '2016-02-20 20:59:53'),
(300, NULL, 'thaotransg@gmail.com', NULL, '2016-02-23 05:56:46', '2016-02-23 05:56:46'),
(301, NULL, 'hongthiep259@gmai.com', NULL, '2016-02-24 01:54:07', '2016-02-24 01:54:07'),
(302, NULL, 'Sandynguyen150929@gmail.com', NULL, '2016-02-24 19:27:01', '2016-02-24 19:27:01'),
(303, NULL, 'tonvkh@Gmail.com', NULL, '2016-02-25 02:43:11', '2016-02-25 02:43:11'),
(304, NULL, 'sonnguyenquang@garco10.com.vn', NULL, '2016-02-29 19:47:14', '2016-02-29 19:47:14'),
(305, NULL, 'mr.hoang_phuong@yahoo.com', NULL, '2016-03-01 03:37:59', '2016-03-01 03:37:59'),
(306, NULL, 'maihanh201283@gmail.com', NULL, '2016-03-02 19:45:26', '2016-03-02 19:45:26'),
(307, NULL, 'vantra1812@yahoo.com', NULL, '2016-03-03 18:37:22', '2016-03-03 18:37:22'),
(308, NULL, 'kieulienhuynhh@yahoo.com.vn', NULL, '2016-03-03 20:35:04', '2016-03-03 20:35:04'),
(309, NULL, 'tranthihonglien@yahoo.com', NULL, '2016-03-04 18:20:34', '2016-03-04 18:20:34'),
(310, NULL, 'daolinhphuong181186@gmail.com', NULL, '2016-03-05 06:26:34', '2016-03-05 06:26:34'),
(311, NULL, 'dtthn9999@gmail.com', NULL, '2016-03-06 03:11:34', '2016-03-06 03:11:34'),
(312, NULL, 'ainhatran@gmail.com', NULL, '2016-03-07 00:42:43', '2016-03-07 00:42:43'),
(313, NULL, 'n2q_love@yahoo.com', NULL, '2016-03-08 04:30:08', '2016-03-08 04:30:08'),
(314, NULL, 'phamnhung67899@gmail.com', NULL, '2016-03-08 07:43:11', '2016-03-08 07:43:11'),
(315, NULL, 'bangchau232@gmail.com', NULL, '2016-03-10 01:16:28', '2016-03-10 01:16:28'),
(316, NULL, 'zonynguyen@gmail.com', NULL, '2016-03-13 05:36:50', '2016-03-13 05:36:50'),
(317, NULL, 'rzulauf70844@floopa.com', NULL, '2016-03-17 11:45:52', '2016-03-17 11:45:52'),
(318, NULL, 't.ngocvtv@gmail.com', NULL, '2016-03-17 23:30:52', '2016-03-17 23:30:52'),
(319, NULL, 'bluesea4914@yahoo.com', NULL, '2016-03-19 22:27:28', '2016-03-19 22:27:28'),
(320, NULL, 'purpleskyvn@gmail.com', NULL, '2016-03-23 06:34:46', '2016-03-23 06:34:46'),
(321, NULL, 'tuyethongsc@gmail.com', NULL, '2016-03-24 17:40:55', '2016-03-24 17:40:55'),
(322, NULL, 'namngaphongvu@gmail.com', NULL, '2016-03-25 23:45:18', '2016-03-25 23:45:18'),
(323, NULL, 'namtienpaper@yahoo.com.vn', NULL, '2016-03-27 21:21:48', '2016-03-27 21:21:48'),
(324, NULL, 'kimtuyen5583@gmail.com', NULL, '2016-03-28 06:01:34', '2016-03-28 06:01:34'),
(325, NULL, 'nguyenquang_lai@yahoo.com', NULL, '2016-03-30 07:07:28', '2016-03-30 07:07:28'),
(326, NULL, 'missduongdao@yahoo.com', NULL, '2016-04-01 01:43:31', '2016-04-01 01:43:31'),
(327, NULL, 'tranthanhtra_sg@yahoo.com.vn', NULL, '2016-04-02 04:13:50', '2016-04-02 04:13:50'),
(328, NULL, 'dungtq@bsr.com.vn', NULL, '2016-04-03 00:28:31', '2016-04-03 00:28:31'),
(329, NULL, 'nguyenthutrang179@gmail.com', NULL, '2016-04-08 21:02:19', '2016-04-08 21:02:19'),
(330, NULL, 'ntkhoa@uel.edu.vn', NULL, '2016-04-09 05:25:33', '2016-04-09 05:25:33'),
(331, NULL, 'congtaiak@gmail.com', NULL, '2016-04-10 18:56:27', '2016-04-10 18:56:27'),
(332, NULL, 'bds.namkhang.vn@gmail.com', NULL, '2016-04-12 23:03:33', '2016-04-12 23:03:33'),
(333, NULL, 'honghayd@gmail.com', NULL, '2016-04-15 22:06:10', '2016-04-15 22:06:10'),
(334, 'nguyen viet ha', 'tamtang9002@yahoo.com.vn', NULL, '2016-04-16 18:25:29', '2016-04-16 18:25:29'),
(337, NULL, 'lehoanglan@yahoo.com', NULL, '2016-04-18 20:40:32', '2016-04-18 20:40:32'),
(338, 'Trần Thu Vĩnh', 'tranthuvinh@yahoo.com', NULL, '2016-04-19 21:59:57', '2016-04-19 21:59:57'),
(339, NULL, 'o1652999878@gmail.com', NULL, '2016-04-20 17:23:54', '2016-04-20 17:23:54'),
(340, NULL, 'ducleo247@gmail.com', NULL, '2016-04-21 19:21:39', '2016-04-21 19:21:39'),
(341, NULL, 'hanh.pcb@gmail.com', NULL, '2016-04-22 04:49:52', '2016-04-22 04:49:52'),
(342, NULL, 'kimanh19841981@gmail.com', NULL, '2016-04-26 03:04:44', '2016-04-26 03:04:44'),
(343, NULL, 'fwolf18594@floopa.com', NULL, '2016-04-29 02:05:48', '2016-04-29 02:05:48'),
(344, NULL, 'buidinhphu77@gmail.com', NULL, '2016-05-03 02:12:09', '2016-05-03 02:12:09'),
(345, NULL, 'austruc@gmail.com', NULL, '2016-05-03 08:25:06', '2016-05-03 08:25:06'),
(346, NULL, 'ptvanh@namuga.co.kr', NULL, '2016-05-03 17:49:30', '2016-05-03 17:49:30'),
(347, NULL, 'huong-ntq@spm.com.vn', NULL, '2016-05-04 20:46:11', '2016-05-04 20:46:11'),
(348, NULL, 'misslinhpham90@gmail.com', NULL, '2016-05-05 23:47:04', '2016-05-05 23:47:04'),
(349, NULL, 'phamthuyngatc@gmail.com', NULL, '2016-05-07 00:49:51', '2016-05-07 00:49:51'),
(350, NULL, 'hiepgianguyen@gmail.com', NULL, '2016-05-07 19:42:25', '2016-05-07 19:42:25'),
(351, NULL, 'thutrang135@yahoo.com', NULL, '2016-05-07 22:24:12', '2016-05-07 22:24:12'),
(352, NULL, 'anissa@tagit.com.sg', NULL, '2016-05-08 20:57:45', '2016-05-08 20:57:45'),
(353, 'Ha Tran', 'tvha777@outlook.com', NULL, '2016-05-12 05:52:07', '2016-05-12 05:52:07'),
(354, NULL, 'pvddesjoyaux@gmail.com', NULL, '2016-05-13 05:19:05', '2016-05-13 05:19:05'),
(355, NULL, 'clbphudongpy@yahoo.com', NULL, '2016-05-13 19:44:07', '2016-05-13 19:44:07'),
(356, 'Tuan', 'tuananhtruong89@gmail.com', NULL, '2016-05-16 20:54:28', '2016-05-16 20:54:28'),
(358, NULL, 'hiephoa838@gmail.com', NULL, '2016-05-20 01:13:08', '2016-05-20 01:13:08'),
(359, NULL, 'longo1946@gmail.com', NULL, '2016-05-20 22:36:38', '2016-05-20 22:36:38'),
(360, NULL, 'tranchithienht@tueba.edu.vn', NULL, '2016-05-24 08:13:27', '2016-05-24 08:13:27'),
(361, 'Lê Xuân Trường', 'tstruongpt@gmail.com', NULL, '2016-05-24 18:33:35', '2016-05-24 18:33:35'),
(362, NULL, 'buithibinh812@gmail.com', NULL, '2016-05-25 06:07:23', '2016-05-25 06:07:23'),
(363, NULL, 'nguyenthimyhangdx@yahoo.com', NULL, '2016-05-25 22:48:41', '2016-05-25 22:48:41'),
(364, NULL, 'nguyenxuanly@gamil.com', NULL, '2016-05-26 02:48:02', '2016-05-26 02:48:02'),
(365, NULL, 'thduong1959@gmail.com', NULL, '2016-05-31 17:49:34', '2016-05-31 17:49:34'),
(366, NULL, 'qkn202@gmail.com', NULL, '2016-06-02 20:32:06', '2016-06-02 20:32:06'),
(367, NULL, 'martinomyhanh@gmail.com', NULL, '2016-06-05 19:03:54', '2016-06-05 19:03:54'),
(368, NULL, 'ledinhtu.ldt@gmail.com', NULL, '2016-06-05 20:19:40', '2016-06-05 20:19:40'),
(369, NULL, 'trang.dhng@gmail.com', NULL, '2016-06-06 16:49:05', '2016-06-06 16:49:05'),
(370, NULL, 'drhothanh@gmail.com', NULL, '2016-06-07 20:22:35', '2016-06-07 20:22:35'),
(371, NULL, 'sukindly@gmail.com', NULL, '2016-06-08 21:45:11', '2016-06-08 21:45:11'),
(372, NULL, 'nhatphuongnguyenle68@gmail.com', NULL, '2016-06-10 21:21:18', '2016-06-10 21:21:18'),
(373, NULL, 'phucthai46@yahoo.com.vn', NULL, '2016-06-11 04:59:15', '2016-06-11 04:59:15'),
(374, NULL, 'mpt607@uowmail.edu.au', NULL, '2016-06-12 21:31:55', '2016-06-12 21:31:55'),
(375, NULL, 'vothanhdo61@yahoo.com', NULL, '2016-06-13 19:18:06', '2016-06-13 19:18:06'),
(376, NULL, 'chaunguyet1001@gmail.com', NULL, '2016-06-22 20:53:10', '2016-06-22 20:53:10'),
(377, NULL, 'lam.lequoc810@gmail.com', NULL, '2016-06-22 22:14:38', '2016-06-22 22:14:38'),
(378, NULL, 'japannoume88@gmail.com', NULL, '2016-06-23 23:47:26', '2016-06-23 23:47:26'),
(379, NULL, 'kimdylan71@gmail.com', NULL, '2016-06-25 01:51:55', '2016-06-25 01:51:55'),
(380, NULL, 'thinhphuong173@gmail.com', NULL, '2016-06-29 01:36:07', '2016-06-29 01:36:07'),
(381, NULL, 'kakj93@gmail.com', NULL, '2016-06-30 03:00:22', '2016-06-30 03:00:22'),
(382, NULL, 'nguyentrang2508@gmail.com', NULL, '2016-07-05 17:42:17', '2016-07-05 17:42:17'),
(383, NULL, 'tovanhoang@yahoo.com', NULL, '2016-07-05 18:05:00', '2016-07-05 18:05:00'),
(384, NULL, 'quanghungkttc@gmail.com', NULL, '2016-07-06 06:33:46', '2016-07-06 06:33:46'),
(385, NULL, 'daiquoc_hongxuan@yahoo.com', NULL, '2016-07-07 03:21:09', '2016-07-07 03:21:09'),
(386, NULL, 'ngoclang23@yahoo.com.vn', NULL, '2016-07-08 00:42:04', '2016-07-08 00:42:04'),
(387, NULL, 'tulipkimngoc@gmail.com', NULL, '2016-07-08 19:02:56', '2016-07-08 19:02:56'),
(388, NULL, 'vietnambmk@gmail.com', NULL, '2016-07-10 01:12:17', '2016-07-10 01:12:17'),
(389, NULL, 'ngocanh19488@gmail.com', NULL, '2016-07-10 18:27:59', '2016-07-10 18:27:59'),
(390, NULL, 'thachvip55@gmail.com', NULL, '2016-07-12 00:49:24', '2016-07-12 00:49:24'),
(391, 'trần quang vinh ', 'tranquangvinh58@gmail.com', NULL, '2016-07-12 09:45:42', '2016-07-12 09:45:42'),
(393, 'Nguyễn Thị Ly', 'lynguyen3578@gmail.com', NULL, '2016-07-12 19:31:36', '2016-07-12 19:31:36'),
(394, NULL, 'thanhtrung211091@gmail.com', NULL, '2016-07-13 00:47:08', '2016-07-13 00:47:08'),
(395, NULL, 'truongnguyenkha@gmail.com', NULL, '2016-07-14 01:11:11', '2016-07-14 01:11:11'),
(396, NULL, 'english', NULL, '2016-07-17 17:17:47', '2016-07-17 17:17:47'),
(397, NULL, 'hoanghai0909@yahoo.com', NULL, '2016-07-22 21:45:52', '2016-07-22 21:45:52'),
(398, 'lê thị hoạt', 'mislethihoat1971@gmail.com', NULL, '2016-07-23 23:50:48', '2016-07-23 23:50:48'),
(399, NULL, 'minhhoai1969@gmail.com', NULL, '2016-07-24 00:05:03', '2016-07-24 00:05:03'),
(400, NULL, 'mislethihoat1971@gail.com', NULL, '2016-07-24 00:12:35', '2016-07-24 00:12:35'),
(401, NULL, 'nlehien2002@yahoo.com', NULL, '2016-07-24 02:05:44', '2016-07-24 02:05:44'),
(402, 'Phạm Tuấn Dương', 'duongmd@outlook.com', NULL, '2016-07-24 03:30:56', '2016-07-24 03:30:56'),
(403, NULL, 'ntt@thanglongjsc.net.vn', NULL, '2016-08-02 19:10:21', '2016-08-02 19:10:21'),
(404, NULL, 'thuyyb1978@gmail.com', NULL, '2016-08-07 18:28:56', '2016-08-07 18:28:56'),
(405, NULL, 'luonghanhphuong9@gmail.com', NULL, '2016-08-10 19:26:03', '2016-08-10 19:26:03'),
(406, 'Nguyễn Thị Thu THủy', 'kinggiathang@gmail.com', NULL, '2016-08-11 08:00:52', '2016-08-11 08:00:52'),
(408, NULL, 'yentoet95@gmail.com', NULL, '2016-08-13 00:08:18', '2016-08-13 00:08:18'),
(409, NULL, 'phuongtth5293@gmail.com', NULL, '2016-08-14 04:50:31', '2016-08-14 04:50:31'),
(410, NULL, 'phamhaphuong2409@gmail.com', NULL, '2016-08-17 03:28:41', '2016-08-17 03:28:41'),
(411, 'Hồ Đại Lăng', 'conbocap8@gmail.com', NULL, '2016-08-18 20:42:17', '2016-08-18 20:42:17'),
(413, NULL, 'trangnt167@gmail.com', NULL, '2016-08-21 07:46:41', '2016-08-21 07:46:41'),
(414, NULL, 'bimiume@gmail.com', NULL, '2016-08-22 20:48:11', '2016-08-22 20:48:11'),
(415, NULL, 'quynhhoa.hpl@gmail.com', NULL, '2016-08-24 06:57:07', '2016-08-24 06:57:07'),
(416, 'Nguy kim My', '0903390286@yahoo.com', NULL, '2016-08-25 06:35:07', '2016-08-25 06:35:07'),
(422, NULL, 'anhvan1510vinhthanh@gmail.com', NULL, '2016-08-31 01:32:40', '2016-08-31 01:32:40'),
(423, NULL, 'chinhnguyen181@gmail.com', NULL, '2016-09-01 21:57:01', '2016-09-01 21:57:01'),
(424, NULL, 'truongcamnhung.vn@gmail.com', NULL, '2016-09-06 18:41:08', '2016-09-06 18:41:08'),
(425, NULL, 'hduyen1782@gmail.com', NULL, '2016-09-10 01:55:36', '2016-09-10 01:55:36'),
(426, NULL, 'nguyenduyli2911@gmail.com', NULL, '2016-09-11 01:23:48', '2016-09-11 01:23:48'),
(427, NULL, 'tringuyen151922@gmail.com', NULL, '2016-09-19 00:43:04', '2016-09-19 00:43:04'),
(428, NULL, 'loc.huynh@sbvn.com.vn', NULL, '2016-09-20 21:46:41', '2016-09-20 21:46:41'),
(429, NULL, 'thanhtran535@gmail.com', NULL, '2016-09-21 20:14:48', '2016-09-21 20:14:48'),
(430, 'NGOC', 'ngocbui73@yahoo.com', NULL, '2016-09-21 21:19:44', '2016-09-21 21:19:44'),
(432, 'cường', 'cuong.va1983@yahoo.com', NULL, '2016-09-22 03:54:13', '2016-09-22 03:54:13'),
(433, NULL, 'gialinh200393@gmail.com', NULL, '2016-09-26 23:36:24', '2016-09-26 23:36:24'),
(434, NULL, 'loanpham10694@gmail.com', NULL, '2016-09-27 21:11:10', '2016-09-27 21:11:10'),
(435, NULL, 'dangmai01@gmail.com', NULL, '2016-09-27 22:40:49', '2016-09-27 22:40:49'),
(436, NULL, 'quynhsngvbd@gmail.com', NULL, '2016-09-29 03:25:11', '2016-09-29 03:25:11'),
(437, 'lê thị xuân', 'bomem123456@gmail.com', NULL, '2016-09-30 00:51:16', '2016-09-30 00:51:16'),
(443, NULL, 'tranyen030994@gmail.com', NULL, '2016-09-30 01:33:30', '2016-09-30 01:33:30'),
(444, NULL, 'annienguyen@gmail.com', NULL, '2016-10-02 19:21:58', '2016-10-02 19:21:58'),
(445, NULL, 'phanlethanhtoan@gmail.com', NULL, '2016-10-02 19:58:23', '2016-10-02 19:58:23'),
(446, NULL, 'tienng439@gmail.com', NULL, '2016-10-07 19:14:50', '2016-10-07 19:14:50'),
(447, NULL, 'nguyencuong12773@gmail.com', NULL, '2016-10-15 17:21:52', '2016-10-15 17:21:52'),
(448, NULL, 'andyhieuhoa@gmail.com', NULL, '2016-10-16 02:23:34', '2016-10-16 02:23:34'),
(449, NULL, 'linhbuinhat@yahoo.com', NULL, '2016-10-16 07:34:19', '2016-10-16 07:34:19'),
(450, 'Nguyen Thi Hong Nguyet', 'hongnguyet.baoviet@gmail.com', NULL, '2016-10-16 08:45:45', '2016-10-16 08:45:45'),
(456, NULL, 'nhatrang.nuce@gmail.com', NULL, '2016-10-17 00:05:44', '2016-10-17 00:05:44'),
(457, NULL, 'doanmanhduc1984@gmail.com', NULL, '2016-10-19 20:05:26', '2016-10-19 20:05:26'),
(458, NULL, 'ngocthach2004@gmail.com', NULL, '2016-10-22 05:29:12', '2016-10-22 05:29:12'),
(459, NULL, 'tbquy115@gmail.com', NULL, '2016-10-22 23:17:17', '2016-10-22 23:17:17'),
(460, NULL, 'tanphatphumy@gmail.com', NULL, '2016-10-23 08:05:39', '2016-10-23 08:05:39'),
(461, NULL, 'ngothetrieu@yahoo.com', NULL, '2016-10-24 07:28:42', '2016-10-24 07:28:42'),
(462, 'Ngô Văn Sỹ', 'sy.ngovan@gmail.com', NULL, '2016-10-27 00:22:32', '2016-10-27 00:22:32'),
(464, NULL, 'rongviet.07@gmail.com', NULL, '2016-11-01 02:43:42', '2016-11-01 02:43:42'),
(465, NULL, 'tienthanh39hht@gmail.com', NULL, '2016-11-04 20:19:11', '2016-11-04 20:19:11'),
(466, NULL, 'ttminh1961@gmail.com', NULL, '2016-11-08 08:21:25', '2016-11-08 08:21:25'),
(467, NULL, 'giasunguyenanhkiet@gmail.com', NULL, '2016-11-08 19:20:46', '2016-11-08 19:20:46'),
(468, 'Nguyen huong', 'huong076@gmail.com', NULL, '2016-11-09 00:34:53', '2016-11-09 00:34:53'),
(471, NULL, 'thientopas@gmail.com', NULL, '2016-11-09 10:34:11', '2016-11-09 10:34:11'),
(472, NULL, 'chanlytunhien@gmail.com', NULL, '2016-11-09 19:05:46', '2016-11-09 19:05:46'),
(473, 'Minh', 'ngocminh092010@gmail.com', NULL, '2016-11-11 01:09:29', '2016-11-11 01:09:29'),
(479, NULL, 'ryan.t.tsan@gmail.com', NULL, '2016-11-14 04:21:55', '2016-11-14 04:21:55'),
(480, NULL, 'lethangsg@gmail.com', NULL, '2016-11-15 18:20:09', '2016-11-15 18:20:09'),
(481, NULL, 'khuatvanduc@ohara.com.vn', NULL, '2016-11-15 21:09:04', '2016-11-15 21:09:04'),
(482, 'Tran Thi Thao Hien', 'tranthaohien98@gmail.com', NULL, '2016-11-16 01:53:17', '2016-11-16 01:53:17'),
(486, NULL, 'hoanghai.pvc@gmail.com', NULL, '2016-11-17 14:06:22', '2016-11-17 14:06:22'),
(487, NULL, 'phamquocviet53@yahoo.com', NULL, '2016-11-17 18:43:10', '2016-11-17 18:43:10'),
(488, NULL, 'dangphuong101092@gmail.com', NULL, '2016-11-19 10:54:58', '2016-11-19 10:54:58'),
(489, 'PHẠM HÙNG ANH', 'anhph@pvps.vn', NULL, '2016-11-23 23:35:17', '2016-11-23 23:35:17'),
(491, NULL, 'hamy90vn@gmail.com', NULL, '2016-12-01 08:55:07', '2016-12-01 08:55:07'),
(492, NULL, 'Importerhill@yahoo.com', NULL, '2016-12-03 22:35:23', '2016-12-03 22:35:23'),
(493, NULL, 'thangnd.vietnam@gmail.com', NULL, '2016-12-06 20:35:57', '2016-12-06 20:35:57'),
(494, NULL, 'anh_kenix@yahoo.com', NULL, '2016-12-06 21:33:03', '2016-12-06 21:33:03'),
(495, NULL, 'Ngonpham0312@gmail.com', NULL, '2016-12-10 00:31:06', '2016-12-10 00:31:06'),
(496, NULL, 'vuvemaybay9@gmail.com', NULL, '2016-12-11 18:15:30', '2016-12-11 18:15:30'),
(497, NULL, 'nguyentien05011983@gmail.com', NULL, '2016-12-12 02:33:15', '2016-12-12 02:33:15'),
(498, NULL, 'lt_diep_uyen@yahoo.com', NULL, '2016-12-14 00:33:08', '2016-12-14 00:33:08'),
(499, NULL, 'dtngocchien77@yahoo.com.vn', NULL, '2016-12-14 22:34:43', '2016-12-14 22:34:43'),
(500, NULL, 'vanuyen1311@yahoo.com', NULL, '2016-12-15 21:56:19', '2016-12-15 21:56:19'),
(501, NULL, 'maithanhhai1811@gmail.com', NULL, '2016-12-15 22:29:55', '2016-12-15 22:29:55'),
(502, NULL, 'hykent@gmail.com', NULL, '2016-12-16 13:58:22', '2016-12-16 13:58:22'),
(503, 'LAM VAN TOAN', 'VANTOAN2806@GMAIL.COM', NULL, '2016-12-17 11:35:35', '2016-12-17 11:35:35'),
(505, 'Nguyễn Bảo Phương', 'phuongack1985@gmail.com', NULL, '2016-12-18 10:50:06', '2016-12-18 10:50:06'),
(511, NULL, 'anhlinh.tal@gmail.com', NULL, '2016-12-18 18:50:18', '2016-12-18 18:50:18'),
(512, NULL, 'lquocsi07@gmail.com', NULL, '2016-12-20 17:28:44', '2016-12-20 17:28:44'),
(542, 'name', 'asda1asdas231231assda', NULL, '2017-01-10 21:10:23', '2017-01-10 21:10:23'),
(543, '', 'nam@gmail.com', NULL, '2017-01-10 22:00:30', '2017-01-10 22:00:30'),
(546, '', 'asdas@gmail.com', NULL, '2017-01-10 22:01:42', '2017-01-10 22:01:42'),
(551, '', 'asdassdas@gmail.com', NULL, '2017-01-10 22:03:56', '2017-01-10 22:03:56'),
(560, '', 'nam@gmail.comasda', NULL, '2017-01-10 22:07:43', '2017-01-10 22:07:43'),
(612, '', 'asdas@gmail.comasdas', NULL, '2017-01-10 22:11:22', '2017-01-10 22:11:22'),
(618, '', 'asdas@gmail.co', NULL, '2017-01-10 22:11:27', '2017-01-10 22:11:27'),
(624, '', 'namdong92@gmail.com', NULL, '2017-01-10 22:35:08', '2017-01-10 22:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `sangnhanh_danhmuc`
--

CREATE TABLE `sangnhanh_danhmuc` (
  `MaDanhMuc` int(11) NOT NULL,
  `LoaiDanhMuc` varchar(20) NOT NULL,
  `TenDanhMuc` varchar(200) NOT NULL,
  `TenKhongDau` varchar(250) NOT NULL,
  `UrlHinh` text NOT NULL,
  `STT` int(11) NOT NULL,
  `NoiDung` text,
  `ThuocTinh` text,
  `CapCha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sangnhanh_danhmuc`
--

INSERT INTO `sangnhanh_danhmuc` (`MaDanhMuc`, `LoaiDanhMuc`, `TenDanhMuc`, `TenKhongDau`, `UrlHinh`, `STT`, `NoiDung`, `ThuocTinh`, `CapCha`) VALUES
(253, '1', 'Sang Quán Cafe', 'sang-quan-cafe', 'icon/cafe.png', 0, '', '{"MailMenu":"0","TimKiemHome":"1","DanhMucView":"danhmuccafe","DanhMucLienQuan1":"256","DanhMucLienQuan2":"256"}', 0),
(254, '1', 'Sang Quán', 'sang-quan', 'icon/sang-quan-nhau.png', 0, '', '{"MailMenu":"1","TimKiemHome":"0","DanhMucView":"danhmucsangquan","DanhMucLienQuan1":"259","DanhMucLienQuan2":"258"}', 0),
(255, '1', 'Sang Cửa Hàng | Shop', 'sang-cua-hang-shop', 'icon/sang-cua-hang-shop.png', 0, '', '{"MailMenu":"0","TimKiemHome":"0","DanhMucView":"index","DanhMucLienQuan1":"256","DanhMucLienQuan2":"256"}', 0),
(256, '1', 'Sang quán ăn | Nhà hàng', 'sang-quan-an-nha-hang', 'icon/sang-quan-an-nha-hang.png', 0, '', '{"MailMenu":"1","TimKiemHome":"0","DanhMucView":"danhmuccafe","DanhMucLienQuan1":"258","DanhMucLienQuan2":"260"}', 0),
(257, '1', 'Sang Bar | Karaoke', 'sang-bar-karaoke', 'icon/bar-karaok.png', 0, '', '{"MailMenu":"0","TimKiemHome":"0","DanhMucView":"danhmucsangquan","DanhMucLienQuan1":"256","DanhMucLienQuan2":"260"}', 0),
(258, '1', 'Sang Spa | Thẩm Mỹ Viện', 'sang-spa-tham-my-vien', 'icon/sang-sapa-tham-my.png', 0, '', '{"MailMenu":"0","TimKiemHome":"0","DanhMucView":"danhmucsangquan","DanhMucLienQuan1":"259","DanhMucLienQuan2":"255"}', 0),
(259, '1', 'Sang Tiệm Tóc', 'sang-tiem-toc', 'icon/sang-tien-toc.png', 0, '', '{"MailMenu":"0","TimKiemHome":"0","DanhMucView":"danhmucsangquan","DanhMucLienQuan1":"256","DanhMucLienQuan2":"260"}', 0),
(260, '1', 'Sang Quán Nhậu', 'sang-quan-nhau', 'icon/sang-quan-nhau.png', 0, '', '{"MailMenu":"0"}', 0),
(261, '1', 'Sang Quán Bida', 'sang-quan-bida', 'icon/sang-quan-bida.png', 0, '', '{"MailMenu":"0","TimKiemHome":"0","DanhMucView":"danhmucsangquan","DanhMucLienQuan1":"263","DanhMucLienQuan2":"255"}', 0),
(262, '1', 'Sang CLB Thể Hình', 'sang-clb-the-hinh', 'icon/SANG-CLB-THE-HINH.png', 0, '', '{"MailMenu":"0"}', 0),
(263, '1', 'Sang Mặt Bằng', 'sang-mat-bang', 'icon/mat-bang-kinh-doanh.png', 11, '', '{"MailMenu":"0","TimKiemHome":"0","DanhMucView":"index","DanhMucLienQuan1":"256","DanhMucLienQuan2":"256"}', 0),
(264, '1', 'Mô HÌnh Khác', 'mo-hinh-khac', 'icon/mo-hinh-khac.png', 12, '', '{"MailMenu":"0"}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sangnhanh_khachang`
--

CREATE TABLE `sangnhanh_khachang` (
  `ID` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `random` varchar(10) NOT NULL,
  `HoTen` varchar(200) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `DiaChi` text NOT NULL,
  `Nhom` int(11) NOT NULL,
  `active` varchar(20) NOT NULL,
  `ThongTinChung` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sangnhanh_khachang`
--

INSERT INTO `sangnhanh_khachang` (`ID`, `email`, `password`, `random`, `HoTen`, `SDT`, `DiaChi`, `Nhom`, `active`, `ThongTinChung`) VALUES
(35, '000014', 'f5a818edc53c579ff518597ed43bad3183a19740', '1544147191', 'asdas', '0123456789', '32', 1, '1', NULL),
(36, '000015', '8575f4a03d8d6df97fce233907f70531f787e77d', '1435f460af', 'asdas', '0123456789', '32', 1, '1', NULL),
(37, '000016', '85f11f7f2a6326727fc450e49ba2d46e53ba4499', '3eac700f3b', '1asd as', '0123456789', '1', 1, '1', NULL),
(39, '000017', 'bbe17cc393baf408e33cf87322ff19814fd2d5b6', '2a17376522', 'as asdas', '1234567890', '32', 1, '1', NULL),
(38, '0123456', '27df47edabd595457534c281c194ecaa6f562c75', '4d6f810bd9', 'nam', '0123456789', '32', 1, '1', NULL),
(33, '1245369', '3bfdff1ac071ef5729610fb23b978def3cfebd3e', '202b012aab', 'namdong', '0123456789', '32', 1, '1', NULL),
(34, '456789', '64190f7689f397a6973dce2cd6eba61f80d773e2', '590c7fe56e', 'aaa', '0123456789', '1', 1, '1', NULL),
(1, 'a', '4571eb1bac07d1392b8987d84c91d4d52ff06c5c', 'Bvp4FSAY', 'TRẦN THỊ DUNG', '', '', 1, '1', NULL),
(29, 'aa', '1de51b24027ecb0d85a361e000f3f7ecad176625', '1a485a8fa3', 'a', '0123456789', '1', 1, '1', NULL),
(28, 'aaa', 'b64e9f90bdca31d48590b94bd53129f140ab4e43', 'bfec7a5cbe', 'asdasd', '0123456789', '1', 1, '1', NULL),
(30, 'aa_111', '2c37a47087493bc07f700627df449cceff74dd3f', '61044f7e97', 'aaa', '0123456789', '1', 1, '1', NULL),
(31, 'aa_112', 'f8a63b39f58128a0c503db055728b2916669c003', 'ea87845d9d', 'gg', '0123456789', '1', 1, '1', NULL),
(23, 'asdas', '92353202aef099704c240fdf6a0a8d5fb13d9318', 'ff12dad976', '', '', '', 1, 'ff12dad976', NULL),
(26, 'asdasdas', '4526124d4a245d9fbfeb2e9c2df31d4ca791061b', 'ad079f67ad', 'asdas', '3423423', '32', 1, 'ad079f67ad', NULL),
(32, 'nandong', '828823f6f0e97a36526235a3b0e5506bd01d6956', '5a953af4c5', 'nam dong', '0123456789', '32', 1, '1', NULL),
(18, 'sdfsd', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', '', '', '', 1, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sangnhanh_lichsu`
--

CREATE TABLE `sangnhanh_lichsu` (
  `DongLichSu` int(11) NOT NULL,
  `MaNhanVien` varchar(200) NOT NULL,
  `ThoiGian` datetime NOT NULL,
  `Action` varchar(200) NOT NULL,
  `Table` varchar(200) NOT NULL,
  `LoaiThaoTac` varchar(200) NOT NULL,
  `NoiDung` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sangnhanh_lichsu`
--

INSERT INTO `sangnhanh_lichsu` (`DongLichSu`, `MaNhanVien`, `ThoiGian`, `Action`, `Table`, `LoaiThaoTac`, `NoiDung`) VALUES
(1, 'namdong92a', '2016-05-17 07:22:10', 'actiona', 'Tablea', 'Xoaa', 'xoa noi ufnga');

-- --------------------------------------------------------

--
-- Table structure for table `sangnhanh_loinhan`
--

CREATE TABLE `sangnhanh_loinhan` (
  `id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `SDT` varchar(15) NOT NULL,
  `TieuDE` varchar(200) NOT NULL,
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sangnhanh_loinhan`
--

INSERT INTO `sangnhanh_loinhan` (`id`, `Email`, `HoTen`, `SDT`, `TieuDE`, `NoiDung`) VALUES
(1, 'nam@gmail.com', 'asdasd', '21312312', 'asdas', 'dasd asd asd as'),
(2, 'namdong@gmaill.cpm', 'asda', 'qweqweqweqw', 'as asd asd as', 'as asd asd asdas das'),
(3, 'a@gmail.com', 'asda sdas', '232342342', 'as dasd asd', 'as asd asdas'),
(4, 'a@gmail.com', 'as das das', '23423423', 'as dasd ', 'asd asd asd asd asdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `sangnhanh_option`
--

CREATE TABLE `sangnhanh_option` (
  `MaOption` varchar(20) NOT NULL,
  `LoaiOption` int(11) NOT NULL,
  `GiaTriVN` text NOT NULL,
  `GiaTriEN` text,
  `GhiChu` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sangnhanh_option`
--

INSERT INTO `sangnhanh_option` (`MaOption`, `LoaiOption`, `GiaTriVN`, `GiaTriEN`, `GhiChu`) VALUES
('Option_DangHoTro', 0, 'Bạn muốn nhân viên chúng <br> tôi hỗ trợ đến tận nơi để <br> tư vấn, chụp hình miễn phí?', '', '{"type":"TEXT","title":"Đăng Tin Dịch Vụ"}'),
('Option_DangTrucTiep', 0, 'Đăng Tin trực tiếp từ website <br> sangnhanh24h.com <br> Chỉ 5 phút đăng tin', '', '{"type":"TEXT","title":"Đăng Trực Tiếp"}'),
('Option_Logo', 1, 'logo/logoCom.png', '', '{"type":"IMG","title":"Logo Trang Web"}'),
('Option_LogoComVn', 1, 'logo/logoComVn.png', '', '{"type":"IMG","title":"LogoComVn"}'),
('Option_LogoNet', 1, 'logo/LogoNet.png', '', '{"type":"IMG","title":"Logonet"}'),
('Option_LogoVn', 1, 'logo/LogoVn.png', '', '{"type":"IMG","title":"Logo Vn"}'),
('Option_SDT', 0, '0902 683 755', '', '{"type":"TEXT","title":"SDT"}'),
('Option_SDTHoTro', 0, '0886 585 499  - 0902 683 755', '', '{"type":"TEXT","title":"Số Điện Thoại Liên Hệ"}'),
('Option_ThongBaoChiTi', 0, 'Nếu đã sang nhượng thành công, vui lòng vào phần quan lý và cập nhật thông tin trạng thái "Đã sang nhượng thành công". Hoặc gọi cho chúng tôi để được giúp đỡ cập nhật. cám ơn quý khách đã dùng dịch vụ !', '', '{"type":"TEXT","title":"Thông Báo Chi Tiết"}'),
('Option_Title', 0, 'SangNhanh24h.com', '', '{"type":"TEXT","title":"Title trang"}'),
('SangNhaHang', 0, '{"DanhMuc":"250","DanhMuc1":"9","DanhMuc2":"9"}', '{"DanhMuc":"250","DanhMuc1":"9","DanhMuc2":"9"}', '{"title":"Layout nhà hàng"}'),
('SangQuan', 0, '{"DanhMuc":"256","DanhMuc1":"142","DanhMuc2":"172","DanhMuc3":"272"}', '{"DanhMuc":"256","DanhMuc1":"142","DanhMuc2":"172","DanhMuc3":"272"}', '{"title":"Layout SangQuan"}'),
('SangQuanCafe', 0, '{"Link1":"http://sangnhanh24h.dev:8080/danhmuc/timkiem/33/256","Link2":"http://sangnhanh24h.dev:8080/danhmuc/timkiem/34/256","Link3":"http://sangnhanh24h.dev:8080/danhmuc/timkiem/34/256","Link4":"http://sangnhanh24h.dev:8080/danhmuc/timkiem/34/256","Link5":"http://sangnhanh24h.dev:8080/danhmuc/timkiem/34/256","Title1":"Quán cafe sân vườn","Title2":"Quán cafe máy lạnh","Title3":"Quán cafe take away","Title4":"Quán cafe DJ","Title5":"Sang quán bar","img1":"/public/img/images/icon/cafe/sangquancafe_03.png","img2":"/public/img/images/icon/cafe/sangquancafe_05.png","img3":"/public/img/images/icon/cafe/sangquancafe_07.png","img4":"/public/img/images/icon/cafe/sangquancafe_09.png","img5":"/public/img/images/icon/cafe/sangquancafe_11.png"}', '{"Link1":"http://sangnhanh24h.dev:8080/danhmuc/timkiem/33/256","Link2":"http://sangnhanh24h.dev:8080/danhmuc/timkiem/34/256","Link3":"http://sangnhanh24h.dev:8080/danhmuc/timkiem/34/256","Link4":"http://sangnhanh24h.dev:8080/danhmuc/timkiem/34/256","Link5":"http://sangnhanh24h.dev:8080/danhmuc/timkiem/34/256","Title1":"Quán cafe sân vườn","Title2":"Quán cafe máy lạnh","Title3":"Quán cafe take away","Title4":"Quán cafe DJ","Title5":"Sang quán bar","img1":"/public/img/images/icon/cafe/sangquancafe_03.png","img2":"/public/img/images/icon/cafe/sangquancafe_05.png","img3":"/public/img/images/icon/cafe/sangquancafe_07.png","img4":"/public/img/images/icon/cafe/sangquancafe_09.png","img5":"/public/img/images/icon/cafe/sangquancafe_11.png"}', '{"title":"Layout sangquancafe"}');

-- --------------------------------------------------------

--
-- Table structure for table `sangnhanh_pages`
--

CREATE TABLE `sangnhanh_pages` (
  `idPa` int(11) NOT NULL,
  `LoaiPage` tinyint(4) NOT NULL,
  `idGroup` tinyint(4) NOT NULL,
  `TieuDe` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDeKD` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Des` text COLLATE utf8_unicode_ci NOT NULL,
  `Keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` text COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `UrlHinh` text COLLATE utf8_unicode_ci NOT NULL,
  `AnHien` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sangnhanh_pages`
--

INSERT INTO `sangnhanh_pages` (`idPa`, `LoaiPage`, `idGroup`, `TieuDe`, `TieuDeKD`, `Title`, `Des`, `Keyword`, `TomTat`, `NoiDung`, `UrlHinh`, `AnHien`) VALUES
(1, 0, 1, 'Thông Tin', 'thong-tin', 'Giới thiệu', 'Giới thiệu', 'Giới thiệu', '', '<div class="content">\r\n<div class="images">\r\n<h3 style="text-align:center"><span style="font-size:20px"><span style="color:#0f76bf"><strong>SANGNHANH24H.COM</strong></span></span></h3>\r\n\r\n<div class="media" style="box-sizing: border-box; margin-top: 15px; padding-bottom: 2rem; color: rgb(102, 102, 102); text-align: center;"><strong><span style="font-size:18px"><span style="color:#000000">V&igrave; sao chọn SANGNHANH24H.COM khi sang nhượng?</span></span><br />\r\n<span style="font-size:16px">Ch&uacute;ng t&ocirc;i đơn giản cung cấp cho qu&yacute; kh&aacute;ch kệnh sang nhượng hiệu quả<br />\r\nnhất tr&ecirc;n thị trường sang nhượng hiện nay.</span></strong></div>\r\n\r\n<div class="media" style="box-sizing: border-box; margin-top: 15px; padding-bottom: 2rem; color: rgb(102, 102, 102); text-align: center;">\r\n<table border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img alt="" src="/public/img/images/tintuc/thongtin4.png" style="height:147px; width:150px" /></p>\r\n\r\n			<p><span style="color:#0000CD"><strong>HIỆU QUẢ</strong></span></p>\r\n\r\n			<p>Lượng kh&aacute;ch h&agrave;ng vượt trội&nbsp;<br />\r\n			đang t&igrave;m kiếm tin sang nhượng<br />\r\n			mỗi ng&agrave;y</p>\r\n			</td>\r\n			<td>\r\n			<p><img alt="" src="/public/img/images/tintuc/thongtin3.png" style="height:148px; width:150px" /></p>\r\n\r\n			<p><span style="color:#0000CD"><strong>CHẤT LƯỢNG</strong></span></p>\r\n\r\n			<p>Tim đượng hiển thị top đầu tr&ecirc;n<br />\r\n			mạng t&igrave;n kiếm. H&agrave;ng ng&agrave;n<br />\r\n			doanh nghiệp tin cậy v&agrave;o ch&uacute;ng t&ocirc;i</p>\r\n			</td>\r\n			<td>\r\n			<p><img alt="" src="/public/img/images/tintuc/thongtin2.png" style="height:148px; width:150px" /></p>\r\n\r\n			<p><span style="color:#0000CD"><strong>KỸ THUẬT</strong></span></p>\r\n\r\n			<p>Ch&uacute;ng t&ocirc;i sử dụng c&ocirc;ng nghệ mới<br />\r\n			nhất để x&acirc;y dụng v&agrave; thiết kế hệ&nbsp;<br />\r\n			thống website sinh động r&otilde; r&agrave;ng</p>\r\n			</td>\r\n			<td>\r\n			<p><img alt="" src="/public/img/images/tintuc/thongtin1.png" style="height:156px; width:150px" /></p>\r\n\r\n			<p><span style="color:#0000CD"><strong>DỊCH VỤ</strong></span></p>\r\n\r\n			<p>Ch&uacute;ng t&ocirc;i hỗ trợ tu vấn đăng tin,<br />\r\n			chụp h&igrave;nh tận nơi ho&agrave;n to&agrave;n mi&ecirc;n ph&iacute;.<br />\r\n			Dịch vụ 24h</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n</div>\r\n</div>\r\n', 'dichvu1.png', 1),
(83, 1, 2, 'Tại Sao Chọn ', 'tai-sao-chon', '', '', '', '', '', '/public/img/images', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sangnhanh_quancao`
--

CREATE TABLE `sangnhanh_quancao` (
  `MaQuanCao` int(11) NOT NULL,
  `TenQuanCao` varchar(200) NOT NULL,
  `NoiDung` text NOT NULL,
  `UrlHinh` varchar(200) NOT NULL,
  `LinkQuanCao` text NOT NULL,
  `GhiChu` text NOT NULL,
  `ViTri` int(11) NOT NULL,
  `Stt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sangnhanh_quancao`
--

INSERT INTO `sangnhanh_quancao` (`MaQuanCao`, `TenQuanCao`, `NoiDung`, `UrlHinh`, `LinkQuanCao`, `GhiChu`, `ViTri`, `Stt`) VALUES
(3, 'quảng cáo Chi tiết', '', 'quangcao/qc2.jpg', 'as das das', '', 1, 2),
(4, 'quảng cáo Chi tiết', '', 'quangcao/qc222.jpg', 'sdasdas', '', 1, 1),
(8, 'quảng cáo Chi tiết', '', 'quangcao/qc3.jpg', '#', '', 1, 0),
(10, 'quảng cáo trang chủ', '', 'quangcao/banner1.png', '#', '', 2, 0),
(11, 'quảng cáo trang chủ trái', '', 'quangcao/16295754_1243149389125944_1651862112_n.jpg', '#', '', 3, 0),
(12, 'quảng cáo trang chủ', '', 'quangcao/banner2.png', '#', '', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sangnhanh_quantri`
--

CREATE TABLE `sangnhanh_quantri` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `random` varchar(10) NOT NULL,
  `HoTen` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `DiaChi` text NOT NULL,
  `GhiChu` text NOT NULL,
  `Nhom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sangnhanh_quantri`
--

INSERT INTO `sangnhanh_quantri` (`username`, `password`, `random`, `HoTen`, `email`, `SDT`, `DiaChi`, `GhiChu`, `Nhom`) VALUES
('admin', '601f1889667efaebb33b8c12572835da3f027f78', '123', 'asdasdasd', 'd', 'asdasa', 'asdas', '', 1),
('admin3', '7231d739a7ce15032e3258b551d04e35d9b36952', '3gaa8QZU', 'biên tập viên 1', 'namdong92@gmail.com', 'biên tập viên 1', 'biên tập viên 1', '[admin__2017-01-08 15:11:46][admin__2017-01-08 15:12:16]', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sangnhanh_sanpham`
--

CREATE TABLE `sangnhanh_sanpham` (
  `IdTin` varchar(20) NOT NULL DEFAULT '0',
  `IDKhachHang` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `keyword` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `MaDanhMuc` int(11) NOT NULL,
  `TieuDe` varchar(500) NOT NULL,
  `TieuDeKhongDau` varchar(500) NOT NULL,
  `TomTat` varchar(250) NOT NULL,
  `NoiDung` longtext NOT NULL,
  `AnHien` tinyint(4) NOT NULL DEFAULT '1',
  `NgayDang` datetime DEFAULT NULL,
  `UrlHinh` text,
  `TinNoiBat` int(11) NOT NULL,
  `SoLanXem` int(11) NOT NULL DEFAULT '0',
  `Stt` int(11) NOT NULL,
  `Gia` double NOT NULL,
  `GhiChu` text NOT NULL,
  `DoQuanTrong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sangnhanh_sanpham`
--

INSERT INTO `sangnhanh_sanpham` (`IdTin`, `IDKhachHang`, `title`, `keyword`, `description`, `MaDanhMuc`, `TieuDe`, `TieuDeKhongDau`, `TomTat`, `NoiDung`, `AnHien`, `NgayDang`, `UrlHinh`, `TinNoiBat`, `SoLanXem`, `Stt`, `Gia`, `GhiChu`, `DoQuanTrong`) VALUES
('201701221485072635', 0, 'asda sd', 'asdas das', 'asdas', 256, 'cần sang lại quán Café, đường Nguyễn Văn Nghi, Gò Vấp, đối ', 'can-sang-lai-quan-cafe-duong-nguyen-van-nghi-go-vap-doi201701221485072635', '<p>as das</p>\r\n', '<p>d asd as</p>\r\n', 1, '2017-01-22 09:10:35', 'sanpham/ImageHandler_ashx.jpg', 1, 0, 0, 180, '{"ViTri":"3","PhongCach":"3","SoPhong":"6","Toilet":"6","GoiDangTin":"1","HienGia":"180","NguoiLienHe":"as dasd asdas","DienThoai":"23423423423","ChieuNgang":"34","ChieuRong":"11","Tinh":"32","Huyen":"44"}', 10233),
('201701221485072732', 0, 'd asdas', 'as asdas', 'as as', 256, 'Cần sang nhượng quán ăn ở mặt tiền đường Lê Lai, P. Bến ', 'can-sang-nhuong-quan-an-o-mat-tien-duong-le-lai-p-ben201701221485072732', '<p>as dasdas</p>\r\n', '<p>a sdasdas</p>\r\n', 1, '2017-01-22 09:12:12', 'sanpham/201109202904_229713_236432776395839_10000.jpg', 1, 0, 0, 230, '', 0),
('201701221485072870', 0, ' as das', 'as d', 'asd', 256, 'SANG GẤP HOẶC CHO THUÊ QUÁN ĂN MẶT TIỀN BỜ SÔNG ', 'sang-gap-hoac-cho-thue-quan-an-mat-tien-bo-song201701221485072870', '<p>das as</p>\r\n', '<p>as as das</p>\r\n', 1, '2017-01-22 09:14:30', 'sanpham/Thienduongmuasam-KimMaXSTA.jpg', 1, 0, 0, 10, '', 0),
('201701221485072942', 0, 'as as dasdas', 'as asd asdas', 'as asdas', 256, 'Sang quán cafe trung tâm quận 1, đường Đồng Khởi ', 'sang-quan-cafe-trung-tam-quan-1-duong-dong-khoi201701221485072942', '<p>asd asd</p>\r\n', '<p>as dasd asdas</p>\r\n', 1, '2017-01-22 09:15:42', 'sanpham/shop-thoi-trang-quan-hoan-kiem-ha-noi.jpg', 1, 0, 0, 130, '{"Tinh":"32","Huyen":"34"}', 1),
('201701241485234399', 38, '', '', '', 259, 'Sang lại tổ hợp tiệm Xăm & Coffee, mặt tiền số 571 đường ', 'sang-lai-to-hop-tiem-xam-coffee-mat-tien-so-571-duong201701241485234399', '<h3><em>s as dasdas</em></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '<p>asdasdas</p>\r\n', 0, '2017-01-24 12:06:39', 'sanpham/nhadathanoi_3.20150525133347-f208.jpg', 0, 0, 0, 800, '{"ViTri":"3","PhongCach":"3","SoPhong":"5","Toilet":"5","GoiDangTin":"2","NguoiLienHe":"asdasdas","DienThoai":"23423421","ChieuNgang":"9","ChieuRong":"9","Tinh":"32","Huyen":"33"}', 0),
('201701241485249293', 39, '', '', '', 256, 'azsdasdas as dasdas', 'azsdasdas-as-dasdas201701241485249293', '<p>as asdasd a<br></p>', '<p>sd asd asdas<br></p>', 0, '2017-01-24 16:14:53', 'khachhang/2a17376522/daidien1485249634.png', 0, 0, 0, 0, '{"GoiDangTin":"2","Tinh":"32","Huyen":"44","NguoiLienHe":"as dasdasdas","DienThoai":"23423423423","ChieuNgang":"5","ChieuRong":"5","HienGia":"0","ViTri":"1","PhongCach":"1","SoPhong":"1","Toilet":"1"}', 0),
('201702041486194936', 1, '', '', '', 256, 'Sang Quán', 'sang-quan201702041486194936', '<p>as dasdas</p>', '<p>as das</p>', 0, '2017-02-04 14:55:36', 'khachhang/Bvp4FSAY/daidien1486293012.jpeg', 0, 0, 0, 0, '{"GoiDangTin":"2","Tinh":"32","NguoiLienHe":"mr.Độ","DienThoai":"0123456789","ChieuNgang":"5","ChieuRong":"5","HienGia":"0","ViTri":"1","PhongCach":"1","SoPhong":"1","Toilet":"1"}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sangnhanh_tin`
--

CREATE TABLE `sangnhanh_tin` (
  `ID` int(11) NOT NULL,
  `IdTin` varchar(20) NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL,
  `keyword` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `MaDanhMuc` int(11) NOT NULL,
  `TieuDe` varchar(500) NOT NULL,
  `TieuDeKhongDau` varchar(500) NOT NULL,
  `TomTat` text NOT NULL,
  `NoiDung` longtext NOT NULL,
  `AnHien` tinyint(4) NOT NULL DEFAULT '1',
  `NgayDang` datetime DEFAULT NULL,
  `UrlHinh` text,
  `TinNoiBat` int(11) NOT NULL,
  `SoLanXem` int(11) NOT NULL DEFAULT '0',
  `Stt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sangnhanh_tin`
--

INSERT INTO `sangnhanh_tin` (`ID`, `IdTin`, `title`, `keyword`, `description`, `MaDanhMuc`, `TieuDe`, `TieuDeKhongDau`, `TomTat`, `NoiDung`, `AnHien`, `NgayDang`, `UrlHinh`, `TinNoiBat`, `SoLanXem`, `Stt`) VALUES
(1, '2016093018570019', '', '', '', 0, '', '', '', '<p>asdas</p>\r\n', 1, '2016-09-30 00:00:00', 'slide/AMNHACVACUOCSONG.jpg', 0, 0, 0),
(2, '2016093018575720', '', '', '', 0, '', '', '', '\r\nasdas\r\n\r\n', 1, '2016-09-30 00:00:00', 'slide/amthuc1.jpg', 0, 0, 0),
(3, '2016093019000336', '', '', '', 0, '', '', '', '<p>asdas</p>\r\n', 1, '2016-09-30 00:00:00', 'slide/amthuc1.jpg', 0, 0, 0),
(4, '2016093019475224', 'ho tro moias dasdas', 'namdong92@gmail.com', 'Nam dong', -2, '', '', '', '', 1, '2016-10-02 00:00:00', 'slide/amthuc1.jpg', 0, 0, 0),
(5, '201610111476193140', 'sd asdasas as', 'zs aasd', 's daasdasdas', 1, 'BỆNH VIỆN ĐA KHOA SINGAPORE – SGH', 'benh-vien-da-khoa-singapore-sgh201610111476193140', '', '<p><a class="media-left" href="" style="box-sizing: border-box; color: rgb(102, 102, 102); text-decoration: none; font-family: "> <img src="http://www.ipsvn.com.vn/public/img/partners/small/fdgvryMGdZySBbxFL3Vb.JPG" style="border-style:initial; border-width:0px; box-sizing:border-box; max-width:100%; vertical-align:middle" /> </a></p>\r\n\r\n<p>Bệnh viện Đa Khoa Singapore (SGH) l&agrave; bệnh viện ch&iacute;nh phủ đầu ti&ecirc;n v&agrave; lớn nhất tại Singapore. Bệnh viện cung cấp tất cả c&aacute;c điều trị chuy&ecirc;n khoa cho bệnh nh&acirc;n, đ&agrave;o tạo b&aacute;c sĩ v&agrave; c&aacute;c nh&acirc;n vi&ecirc;n y tế l&acirc;m s&agrave;ng kh&aacute;c, v&agrave; thực hiện c&aacute;c nghi&ecirc;n cứu y khoa nhằm mang lại điều trị y tế tốt nhất cho bệnh nh&acirc;n.</p>\r\n\r\n<p>Kh&ocirc;ng đặt vấn đề lợi nhuận l&ecirc;n h&agrave;ng đầu, SGH l&agrave; bệnh viện thuộc sở hữu nh&agrave; nước v&agrave; l&agrave; bệnh viện đầu đ&agrave;n của hệ thống y tế c&ocirc;ng. SGH l&agrave; một th&agrave;nh vi&ecirc;n của SingHealth.</p>\r\n\r\n<h3>CHĂM S&Oacute;C BỆNH NH&Acirc;N</h3>\r\n\r\n<p>SGH điều trị bệnh nh&acirc;n bảo hiểm v&agrave; bệnh nh&acirc;n kh&ocirc;ng bảo hiểm. Bệnh viện cung cấp tất cả c&aacute;c điều trị chuy&ecirc;n khoa đơn giản v&agrave; phức tạp trong c&ugrave;ng một bệnh viện. Ngo&agrave;i ra c&ograve;n c&oacute; 5 trung t&acirc;m chuy&ecirc;n khoa thuộc nh&agrave; nước toạ lạc trong khu&ocirc;n vi&ecirc;n SGH để cung cấp tất cả điều trị chuy&ecirc;n khoa cho bệnh nh&acirc;n.</p>\r\n\r\n<p>Mỗi năm, SGH điều trị cho hơn 1 triệu bệnh nh&acirc;n. Với đội ngũ 10.000 nh&acirc;n vi&ecirc;n, SGH đ&atilde; chiếm 1/3 trong tổng số giường điều trị chuy&ecirc;n khoa s&acirc;u của bệnh viện nh&agrave; nước v&agrave; khoảng 1/5 của cả nước.</p>\r\n\r\n<p>SGH đ&atilde; đạt được chứng nhận JCI quốc tế cho chất lượng v&agrave; an to&agrave;n trong điều trị bệnh nh&acirc;n. SGH cũng l&agrave; bệnh viện đầu ti&ecirc;n của Ch&acirc;u &Aacute; đạt chứng nhận Magnet cấp bởi American Nurses Credentialing Center về chất lượng của đội ngũ y t&aacute;.</p>\r\n\r\n<h3>BỆNH VIỆN Đ&Agrave;O TẠO V&Agrave; NGHI&Ecirc;N CỨU</h3>\r\n\r\n<p>SGH l&agrave; một trong những bệnh viện đ&agrave;o tạo đội ngũ b&aacute;c sĩ, y t&aacute;, nh&acirc;n vi&ecirc;n y tế l&acirc;m s&agrave;ng v&agrave; cận l&acirc;m s&agrave;ng kh&aacute;c trước, sau tốt nghiệp v&agrave; đ&agrave;o tạo n&acirc;ng cao. Sinh vi&ecirc;n từ trường y khoa Yong Loo Lin v&agrave; Duke-NUS trải qua phần lớn thời gian đ&agrave;o tạo v&agrave; thực h&agrave;nh tại SGH. Đội ngũ chuy&ecirc;n gia của bệnh viện cũng l&agrave; gi&aacute;o vi&ecirc;n giảng dạy tại hai trường y khoa tr&ecirc;n. SGH cũng l&agrave; bệnh viện giảng dạy cho đội ngũ y khoa ở Singapore v&agrave; trong khu vực Ch&acirc;u &Aacute; Th&aacute;i B&igrave;nh Dương.</p>\r\n\r\n<p>SGH c&ograve;n kết hợp với c&aacute;c viện nghi&ecirc;n cứu h&agrave;ng đầu trong khu vực v&agrave; to&agrave;n cầu để thực hiện c&aacute;c nghi&ecirc;n cứu y khoa nhằm mang lại kết quả điều trị y khoa tốt nhất cho bệnh nh&acirc;n.</p>\r\n', 1, '2017-01-18 03:24:36', 'tintuc/taisaochonchungtoi.jpg', 1, 0, 0),
(6, '2016102017154868', '147258369', 'namdong92@gmail.com', 'Ten Ho tro', -2, '', '', '', '', 1, '2016-10-20 00:00:00', 'hotro/hotro.jpg', 0, 0, 0),
(9, '2016113008565933', 'Alex Albert', 'CEO. Giám Đốc phát triển', '', -3, 'Greatest, awesome  ', 'greatest-awesome', 'asa sdasd asd as', '<p>as dasd asd as das</p>\r\n\r\n<p>d&nbsp;</p>\r\n\r\n<p>as</p>\r\n\r\n<p>d&nbsp;</p>\r\n\r\n<p>as</p>\r\n\r\n<p>das</p>\r\n', 1, '2016-11-30 00:00:00', 'slide/amthuc1.jpg', 0, 0, 0),
(10, '2016113009273057', 'nam dong', 'CEO', '', -3, 'asd asdas', 'asd-asdas', 'as asd as', '', 1, '2016-11-30 00:00:00', 'slide/BANNNERTET1.gif', 0, 0, 0),
(11, '2016113009432594', 'as dasd', 'asd a', '', -3, 'as dasdas', 'as-dasdas', 'sda sd', '<p>as asdas</p>\r\n', 1, '2016-11-30 00:00:00', 'slide/AMNHACVACUOCSONG.jpg', 0, 0, 0),
(14, '201611301480471787', 'asd asddas', 'as das', 'asd asdas', 1, 'BỆNH VIỆN MOUNT ELIZABETH', 'benh-vien-mount-elizabeth201611301480471787', '<p>as das d</p>\r\n', '<p>as das das</p>\r\n', 1, '2017-01-18 03:22:17', 'tintuc/taisaochonchungtoi.jpg', 0, 0, 1),
(15, '201611301480471815', 'asdasd', 'as d', 'asd ', 0, 'as dasdas das as dasdasd', 'as-dasdas-das-as-dasdasd201611301480471815', '<p>as dasdas</p>\r\n', '<p>&nbsp;das das</p>\r\n', 1, '2016-11-30 03:10:15', 'slide/BANNNERTET1.gif', 0, 0, 0),
(19, '2017010210115950', '', '', '', 0, 'tne', 'tne', '', 'nguys', 1, '2017-01-02 00:00:00', 'doitac/doitac1.png', 0, 0, 0),
(20, '201701021030573', '', '', '', -4, 'tne con', 'tne-con', '', 'sdasdasa', 1, '2017-01-11 00:00:00', 'doitac/doitac.png', 0, 0, 0),
(21, '2017010212461845', '', '', '', -4, 'asdas', 'asdas', '', 'http://nguyenvando.net', 1, '2017-01-11 00:00:00', 'doitac/doitac.png', 0, 0, 0),
(22, '2017010212494880', '', '', '', -4, 'doi tac noi', 'doi-tac-noi', '', 'http://nguyenvando.net', 1, '2017-01-11 00:00:00', 'doitac/doitac.jpg', 0, 0, 0),
(23, '20170102130124100', '', '', '', -1, 'images', '', 'doitac/doitac4.png', '', 1, '2017-01-11 00:00:00', 'slide/banner1.png', 0, 1, 0),
(31, '201701021483368667', 'sdas', 'as', 'da', 1, ' TƯ VẤN, TIẾP NHẬN HỒ SƠ BỆNH ÁN', 'tu-van-tiep-nhan-ho-so-benh-an201701021483368667', '<p>asdas</p>\r\n', '<p>dasdas</p>\r\n', 1, '2017-01-18 03:20:35', 'logo/LogoIPS.png', 1, 0, 0),
(32, '201701021483368707', '', '', '', 1, 'THAM VẤN Ý KIẾN BÁC SĨ', 'tham-van-y-kien-bac-si201701021483368707', '', '', 1, '2017-01-18 03:22:22', 'doitac/doitac1.png', 1, 0, 1),
(58, '2017011109331771', '', '', '', -4, 'sxdfsdfsd', 'sxdfsdfsd', '', '', 1, '2017-01-11 00:00:00', 'doitac/doitac.png', 0, 0, 1),
(59, '2017011118472285', '', '', '', -1, 'images', '', 'benhvien/doitac1.png', '', 1, '2017-01-11 00:00:00', 'slide/banner1.png', 0, 1, 1),
(61, '2017011119233161', '', '', '', -1, 'images', '', 'benhvien/doitac2.png', '', 1, '2017-01-11 00:00:00', 'slide/banner1.png', 0, 0, 1),
(66, '201701241485265960', '', '', '', 83, 'Hiệu quản sang nhượng', 'hieu-quan-sang-nhuong201701241485265960', '<p>Sang nhượng nhanh hơn, hiệu quả hơn.<br />\r\nLượng kh&aacute;ch h&agrave;ng t&igrave;m kiếm vượt trội.</p>\r\n', '', 1, '2017-01-24 02:52:40', 'tintuc/thongtin1.png', 1, 0, 1),
(67, '201701241485266161', '', '', '', 83, 'An toàn dịch vụ', 'an-toan-dich-vu201701241485266161', '<p>Đảm bảo an to&agrave;n giao dịch đăng tin.<br />\r\nĐảm bảo thanh to&aacute;n an to&agrave;n<br />\r\n&nbsp;</p>\r\n', '', 1, '2017-01-24 02:56:01', 'tintuc/thongtin3.png', 1, 0, 1),
(68, '201701241485266247', '', '', '', 83, 'Hỗ trợ chu đáo', 'ho-tro-chu-dao201701241485266247', '<p>Dịch vụ hỗ trợ chụp h&igrave;nh miễn ph&iacute;.<br />\r\nDịch vụ hỗ trợ tư vấn miễn ph&iacute;</p>\r\n', '', 1, '2017-01-24 02:57:27', 'tintuc/thongtin4.png', 1, 0, 1),
(28, '8911321a1457897441', 'sdfsdfsd', 'Hà Tĩnh: Ngao chết gây thiệt hại tiền tỷ', 'xdfsdf', 0, 'Hà Tĩnh: Ngao chết gây thiệt hại tiền tỷ', 'Ha-Tinh-Ngao-chet-gay-thiet-hai-tien-ty8911321a1457897441', '<p>(Thủy sản Việt Nam) - Ng&agrave;nh chức năng trong tỉnh đang truy t&igrave;m nguy&ecirc;n nh&acirc;n khiến ngao nu&ocirc;i ở huyện Lộc H&agrave; v&agrave; Thạch H&agrave; bị thiệt hại nặng nề.</p>\r\n', '<p>&nbsp;</p>\r\n\r\n<p>&Ocirc;ng Nguyễn Văn Anh, hộ nu&ocirc;i ngao tại th&ocirc;n Mai L&acirc;m x&oacute;t xa, đợt r&eacute;t dịp Tết Nguy&ecirc;n đ&aacute;n khiến người nu&ocirc;i ngao ở đ&acirc;y thiệt hại nặng. Gia đ&igrave;nh &ocirc;ng nu&ocirc;i gần 4 ha, số lượng ngao chết khoảng 40%, thiệt hại gần 150 triệu đồng.&Ocirc;ng Nguyễn Văn Việt, một trong những hộ nu&ocirc;i bị thiệt hại nặng nhất, cho biết vụ n&agrave;y gia đ&igrave;nh &ocirc;ng nu&ocirc;i 15 ha ngao thịt. Đến thời điểm thu hoạch th&igrave; ngao chết h&agrave;ng loạt. Ước t&iacute;nh thiệt hại hơn 1,5 tỷ đồng.</p>\r\n\r\n<p style="text-align:center"><img src="http://thuysanvietnam.com.vn/uploads/article2/baiviet/moitruong/web836-.jpg" /></p>\r\n\r\n<p style="text-align:center"><em>Nhiều diện t&iacute;ch ngao ở H&agrave; Tĩnh bị chết h&agrave;ng loạt - Ảnh: Thanh Nh&atilde;</em></p>\r\n\r\n<p>Theo &ocirc;ng Nguyễn C&ocirc;ng Ho&agrave;ng, Chi cục Nu&ocirc;i trồng Thủy sản H&agrave; Tĩnh, từ ng&agrave;y 23/1 đến nay, t&igrave;nh trạng ngao nu&ocirc;i chết xảy ra ở x&atilde; Thạch B&agrave;n, Thạch Đ&igrave;nh của huyện Thạch H&agrave; v&agrave; x&atilde; Mai Phụ của Lộc H&agrave;. Trong đ&oacute;, huyện Thạch H&agrave; thiệt hại khoảng 130 ha, sản lượng 180 tấn; huyện Lộc H&agrave; thiệt hại khoảng 88 ha, sản lượng 200 tấn. Nguy&ecirc;n nh&acirc;n ngao chết được x&aacute;c định ban đầu do đợt r&eacute;t đậm r&eacute;t hại trước Tết Nguy&ecirc;n đ&aacute;n v&agrave; hiện tượng sương muối l&agrave;m c&aacute;c yếu tố m&ocirc;i trường thay đổi. Theo đ&oacute;, Tổng cục Thủy sản sẽ về lấy mẫu để x&eacute;t nghiệm t&igrave;m ra nguy&ecirc;n nh&acirc;n. Khi c&oacute; kết luận, thống k&ecirc; thiệt hại đầy đủ, Chi cục sẽ l&agrave;m b&aacute;o c&aacute;o đề xuất tỉnh hỗ trợ c&aacute;c hộ nu&ocirc;i bị thiệt hại.</p>\r\n', 1, '2016-10-20 06:41:00', 'tintuc/18-03-2016/207035581458287704.jpeg', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sangnhanh_tinhthanh`
--

CREATE TABLE `sangnhanh_tinhthanh` (
  `MaDiaChi` int(11) NOT NULL,
  `TenDiaChi` text NOT NULL,
  `MaDiaChiCha` int(11) NOT NULL,
  `AnHien` int(11) NOT NULL,
  `GhiChu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sangnhanh_tinhthanh`
--

INSERT INTO `sangnhanh_tinhthanh` (`MaDiaChi`, `TenDiaChi`, `MaDiaChiCha`, `AnHien`, `GhiChu`) VALUES
(1, 'Hà Nội', 0, 1, ''),
(2, 'Ba Đình', 1, 0, ''),
(3, 'Ba Vì', 1, 1, ''),
(4, 'Bắc Từ Liêm', 1, 0, ''),
(5, 'Cầu Giấy', 1, 5, ''),
(6, 'Chương Mỹ', 1, 0, ''),
(7, 'Đan Phượng', 1, 7, ''),
(8, 'Đông Anh', 1, 0, ''),
(9, 'Đống Đa', 1, 0, ''),
(10, 'Gia Lâm', 1, 0, ''),
(11, 'Hà Đông', 1, 0, ''),
(12, 'Hai Bà Trưng', 1, 0, ''),
(13, 'Hoài Đức', 1, 0, ''),
(14, 'Hoàn Kiếm', 1, 0, ''),
(15, 'Hoàng Mai', 1, 0, ''),
(16, 'Long Biên', 1, 0, ''),
(17, 'Mê Linh', 1, 0, ''),
(18, 'Mỹ Đức', 1, 0, ''),
(19, 'Nam Từ Liêm', 1, 0, ''),
(20, 'Phú Xuyên', 1, 0, ''),
(21, 'Phúc Thọ', 1, 0, ''),
(22, 'Quốc Oai', 1, 0, ''),
(23, 'Sóc Sơn', 1, 0, ''),
(24, 'Tây Hồ', 1, 0, ''),
(25, 'Thạch Thất', 1, 0, ''),
(26, 'Thanh Oai', 1, 0, ''),
(27, 'Thanh Trì', 1, 0, ''),
(28, 'Thanh Xuân', 1, 0, ''),
(29, 'Thị xã Sơn Tây', 1, 0, ''),
(30, 'Thường Tín', 1, 0, ''),
(31, 'Ứng Hòa', 1, 0, ''),
(32, 'Hồ Chí Minh', 0, 1, ''),
(33, 'Bình Tân', 32, 0, ''),
(34, 'Bình Thạnh', 32, 0, ''),
(35, 'Củ Chi', 32, 0, ''),
(36, 'Gò Vấp', 32, 0, ''),
(37, 'Hóc Môn', 32, 0, ''),
(38, 'Huyện Bình Chánh', 32, 0, ''),
(39, 'Huyện Cần Giờ', 32, 0, ''),
(40, 'Huyện Nhà Bè', 32, 0, ''),
(41, 'Phú Nhuận', 32, 0, ''),
(42, 'Quận 1', 32, 0, ''),
(43, 'Quận 10', 32, 0, ''),
(44, 'Quận 11', 32, 0, ''),
(45, 'Quận 12', 32, 0, ''),
(46, 'Quận 2', 32, 0, ''),
(47, 'Quận 3', 32, 0, ''),
(48, 'Quận 4', 32, 0, ''),
(49, 'Quận 5', 32, 0, ''),
(50, 'Quận 6', 32, 0, ''),
(51, 'Quận 7', 32, 0, ''),
(52, 'Quận 8', 32, 0, ''),
(53, 'Quận 9', 32, 0, ''),
(54, 'Tân Bình', 32, 0, ''),
(55, 'Tân Phú', 32, 0, ''),
(56, 'Thủ Đức', 32, 0, ''),
(57, 'Đà Nẵng', 0, 1, ''),
(58, 'Huyện Hòa Vang', 57, 0, ''),
(59, 'Huyện đảo Hoàng Sa', 57, 0, ''),
(60, 'Quận Cẩm Lệ', 57, 0, ''),
(61, 'Quận Hải Châu', 57, 0, ''),
(62, 'Quận Liên Chiểu', 57, 0, ''),
(63, 'Quận Ngũ Hành Sơn', 57, 0, ''),
(64, 'Quận Sơn Trà', 57, 0, ''),
(65, 'Quận Thanh Khê', 57, 0, ''),
(66, 'An Gian', 0, 0, ''),
(67, 'Huyện An Phú', 66, 0, ''),
(68, 'Huyện Châu Phú', 66, 0, ''),
(69, 'Huyện Châu Thành', 66, 0, ''),
(70, 'Huyện Chợ Mới', 66, 0, ''),
(71, 'Huyện Thoại Sơn', 66, 0, ''),
(72, 'Huyện Tịnh Biên', 66, 0, ''),
(73, 'Huyện Tri Tôn', 66, 0, ''),
(74, 'Phú Tân', 66, 0, ''),
(75, 'Thành Phố Châu Đốc', 66, 0, ''),
(76, 'Thành phố Long Xuyên', 66, 0, ''),
(77, 'Thị xã Tân Châu', 66, 0, ''),
(78, 'Bà Rịa - Vũng Tàu', 0, 0, ''),
(79, 'Huyện Châu Đức', 78, 0, ''),
(80, 'Huyện Côn Đảo', 78, 0, ''),
(81, 'Huyện Đất Đỏ', 78, 0, ''),
(82, 'Huyện Long Điền', 78, 0, ''),
(83, 'Huyện Tân Thành', 78, 0, ''),
(84, 'Huyện Xuyên Mộc', 78, 0, ''),
(85, 'Thành phố Vũng Tàu', 78, 0, ''),
(86, 'Thị xã Bà Rịa', 78, 0, ''),
(87, 'Bắc Cạn', 0, 0, ''),
(88, 'Huyện Ba Bể', 87, 0, ''),
(89, 'Huyện Bạch Thông', 87, 0, ''),
(90, 'Huyện Chợ Đồn', 87, 0, ''),
(91, 'Huyện Chợ Mới', 87, 0, ''),
(92, 'Huyện Na Rì', 87, 0, ''),
(93, 'Huyện Ngân Sơn', 87, 0, ''),
(94, 'Huyện Pác Nặm', 87, 0, ''),
(95, 'Thị xã Bắc Kạn', 87, 0, ''),
(96, 'Bắc Giang', 0, 0, ''),
(97, 'Huyện Hiệp Hòa', 96, 0, ''),
(98, 'Huyện Lạng Giang', 96, 0, ''),
(99, 'Huyện Lục Nam', 96, 0, ''),
(100, 'Huyện Lục Ngạn', 96, 0, ''),
(101, 'Huyện Sơn Động', 96, 0, ''),
(102, 'Huyện Tân Yên', 96, 0, ''),
(103, 'Huyện Việt Yên', 96, 0, ''),
(104, 'Huyện Yên Dũng', 96, 0, ''),
(105, 'Huyện Yên Thế', 96, 0, ''),
(106, 'Thành phố Bắc Giang', 96, 0, ''),
(107, 'Bạc Liêu', 0, 0, ''),
(108, 'Huyện Đông Hải', 107, 0, ''),
(109, 'Huyện Giá Rai', 107, 0, ''),
(110, 'Huyện Hoà Bình', 107, 0, ''),
(111, 'Huyện Hồng Dân', 107, 0, ''),
(112, 'Huyện Phước Long', 107, 0, ''),
(113, 'Huyện Vĩnh Lợi', 107, 0, ''),
(114, 'Thành phố Bạc Liêu', 107, 0, ''),
(115, 'Bắc Ninh', 0, 0, ''),
(116, 'Huyện Gia Bình', 115, 0, ''),
(117, 'Huyện Lương Tài', 115, 0, ''),
(118, 'Huyện Quế Võ', 115, 0, ''),
(119, 'Huyện Thuận Thành', 115, 0, ''),
(120, 'Huyện Tiên Du', 115, 0, ''),
(121, 'Huyện Yên Phong', 115, 0, ''),
(122, 'Thành phố Bắc Ninh', 115, 0, ''),
(123, 'Thị xã Từ Sơn', 115, 0, ''),
(124, 'Bến Tre', 0, 0, ''),
(125, 'Huyện Ba Tri', 124, 0, ''),
(126, 'Huyện Bình Đại', 124, 0, ''),
(127, 'Huyện Châu Thành', 124, 0, ''),
(128, 'Huyện Chợ Lách', 124, 0, ''),
(129, 'Huyện Giồng Trôm', 124, 0, ''),
(130, 'Huyện Mỏ Cày Bắc', 124, 0, ''),
(131, 'Huyện Mỏ Cày Nam', 124, 0, ''),
(132, 'Huyện Thạnh Phú', 124, 0, ''),
(133, 'Thành phố Bến Tre', 124, 0, ''),
(134, 'Bình Định', 0, 0, ''),
(135, 'Huyện An Lão', 134, 0, ''),
(136, 'Huyện An Nhơn', 134, 0, ''),
(137, 'Huyện Hoài Ân', 134, 0, ''),
(138, 'Huyện Hoài Nhơn', 134, 0, ''),
(139, 'Huyện Phù Cát', 134, 0, ''),
(140, 'Huyện Phù Mỹ', 134, 0, ''),
(141, 'Huyện Tây Sơn', 134, 0, ''),
(142, 'Huyện Tuy Phước', 134, 0, ''),
(143, 'Huyện Vân Canh', 134, 0, ''),
(144, 'Huyện Vĩnh Thạnh', 134, 0, ''),
(145, 'Thành phố Qui Nhơn', 134, 0, ''),
(146, 'Bình Dương', 0, 0, ''),
(147, 'Huyện Bắc Tân Uyên', 146, 0, ''),
(148, 'Huyện Bàu Bàng', 146, 0, ''),
(149, 'Huyện Dầu Tiếng', 146, 0, ''),
(150, 'Huyện Phú Giáo', 146, 0, ''),
(151, 'Thành phố Thủ Dầu Một', 146, 0, ''),
(152, 'Thị xã Bến Cát', 146, 0, ''),
(153, 'Thị xã Dĩ An', 146, 0, ''),
(154, 'Thị xã Tân Uyên', 146, 0, ''),
(155, 'Thị xã Thuận An', 146, 0, ''),
(156, 'Bình Phước', 0, 0, ''),
(157, 'Huyện Bù Đăng', 156, 0, ''),
(158, 'Huyện Bù Đốp', 156, 0, ''),
(159, 'Huyện Bù Gia Mập', 156, 0, ''),
(160, 'Huyện Chơn Thành', 156, 0, ''),
(161, 'Huyện Đồng Phú', 156, 0, ''),
(162, 'Huyện Hớn Quản', 156, 0, ''),
(163, 'Huyện Lộc Ninh', 156, 0, ''),
(164, 'Huyện Phú Riềng', 156, 0, ''),
(165, 'Thị xã Bình Long', 156, 0, ''),
(166, 'Thị xã Đồng Xoài', 156, 0, ''),
(167, 'Thị xã Phước Long', 156, 0, ''),
(168, 'Bình Thuận', 0, 0, ''),
(169, 'Huyện Bắc Bình', 168, 0, ''),
(170, 'Huyện Đức Linh', 168, 0, ''),
(171, 'Huyện Hàm Tân', 168, 0, ''),
(172, 'Huyện Hàm Thuận Bắc', 168, 0, ''),
(173, 'Huyện Hàm Thuận Nam', 168, 0, ''),
(174, 'Huyện Tánh Linh', 168, 0, ''),
(175, 'Huyện Tuy Phong', 168, 0, ''),
(176, 'Huyện đảo Phú Quý', 168, 0, ''),
(177, 'Thành phố Phan Thiết', 168, 0, ''),
(178, 'Thị xã La Gi', 168, 0, ''),
(179, 'Cà Mau', 0, 0, ''),
(180, 'Huyện Cái Nước', 179, 0, ''),
(181, 'Huyện Đầm Dơi', 179, 0, ''),
(182, 'Huyện Năm Căn', 179, 0, ''),
(183, 'Huyện Ngọc Hiển', 179, 0, ''),
(184, 'Huyện Phú Tân', 179, 0, ''),
(185, 'Huyện Thới Bình', 179, 0, ''),
(186, 'Huyện Trần Văn Thời', 179, 0, ''),
(187, 'Huyện U Minh', 179, 0, ''),
(188, 'Thành phố Cà Mau', 179, 0, ''),
(189, 'Cần Thơ', 0, 0, ''),
(190, 'Huyện Cờ Đỏ', 189, 0, ''),
(191, 'Huyện Phong Điền', 189, 0, ''),
(192, 'Huyện Thới Lai', 189, 0, ''),
(193, 'Huyện Vĩnh Thạnh', 189, 0, ''),
(194, 'Quận Bình Thủy', 189, 0, ''),
(195, 'Quận Cái Răng', 189, 0, ''),
(196, 'Quận Ninh Kiều', 189, 0, ''),
(197, 'Quận Ô Môn', 189, 0, ''),
(198, 'Quận Thốt Nốt', 189, 0, ''),
(199, 'Cao Bằng', 0, 0, ''),
(200, 'Huyện Bảo Lạc', 199, 0, ''),
(201, 'Huyện Bảo Lâm', 199, 0, ''),
(202, 'Huyện Hạ Lang', 199, 0, ''),
(203, 'Huyện Hà Quảng', 199, 0, ''),
(204, 'Huyện Hòa An', 199, 0, ''),
(205, 'Huyện Nguyên Bình', 199, 0, ''),
(206, 'Huyện Phục Hòa', 199, 0, ''),
(207, 'Huyện Quảng Uyên', 199, 0, ''),
(208, 'Huyện Thạch An', 199, 0, ''),
(209, 'Huyện Thông Nông', 199, 0, ''),
(210, 'Huyện Trà Lĩnh', 199, 0, ''),
(211, 'Huyện Trùng Khánh', 199, 0, ''),
(212, 'Thị xã Cao Bằng', 199, 0, ''),
(213, 'Đắc Lắc', 0, 0, ''),
(214, 'Huyện Buôn Đôn', 213, 0, ''),
(215, 'Huyện Cư Kuin', 213, 0, ''),
(216, 'Huyện Cư Mgar', 213, 0, ''),
(218, 'Huyện Ea Kar', 213, 0, ''),
(219, 'Huyện Ea Súp', 213, 0, ''),
(220, 'Huyện Krông Ana', 213, 0, ''),
(221, 'Huyện Krông Bông', 213, 0, ''),
(222, 'Huyện Krông Búk', 213, 0, ''),
(223, 'Huyện Krông Năng', 213, 0, ''),
(224, 'Huyện Krông Pắk', 213, 0, ''),
(225, 'Huyện Lăk', 213, 0, ''),
(227, 'Thành phố Buôn Ma Thuột', 213, 0, ''),
(228, 'Thị xã Buôn Hồ', 213, 0, ''),
(229, 'Đắc Nông', 0, 0, ''),
(230, 'Huyện Cư Jút', 229, 0, ''),
(231, 'Huyện Đăk Glong', 229, 0, ''),
(232, 'Huyện Đăk Mil', 229, 0, ''),
(234, 'Huyện Đăk Song', 229, 0, ''),
(235, 'Huyện Krông Nô', 229, 0, ''),
(236, 'Huyện Tuy Đức', 229, 0, ''),
(237, 'Thị xã Gia Nghĩa', 229, 0, ''),
(238, 'Điện Biên', 0, 0, ''),
(239, 'Huyện Điện Biên', 238, 0, ''),
(240, 'Huyện Điện Biên Đông', 238, 0, ''),
(241, 'Huyện Mường Ảng', 238, 0, ''),
(242, 'Huyện Mường Chà', 238, 0, ''),
(243, 'Huyện Mường Nhé', 238, 0, ''),
(244, 'Huyện Nậm Pồ', 238, 0, ''),
(245, 'Huyện Tủa Chùa', 238, 0, ''),
(246, 'Huyện Tuần Giáo', 238, 0, ''),
(247, 'Thành phố Điện Biên Phủ', 238, 0, ''),
(248, 'Thị xã Mường Lay', 238, 0, ''),
(249, 'Đồng Nai', 0, 0, ''),
(250, 'Huyện Cẩm Mỹ', 249, 0, ''),
(251, 'Huyện Định Quán', 249, 0, ''),
(252, 'Huyện Long Thành', 249, 0, ''),
(253, 'Huyện Nhơn Trạch', 249, 0, ''),
(254, 'Huyện Tân Phú', 249, 0, ''),
(255, 'Huyện Thống Nhất', 249, 0, ''),
(256, 'Huyện Trảng Bom', 249, 0, ''),
(257, 'Huyện Vĩnh Cửu', 249, 0, ''),
(258, 'Huyện Xuân Lộc', 249, 0, ''),
(259, 'Thành phố Biên Hòa', 249, 0, ''),
(260, 'Thị xã Long Khánh', 249, 0, ''),
(261, 'Đồng Tháp', 0, 0, ''),
(262, 'Huyện Cao Lãnh', 261, 0, ''),
(263, 'Huyện Châu Thành', 261, 0, ''),
(264, 'Huyện Hồng Ngự', 261, 0, ''),
(265, 'Huyện Lai Vung', 261, 0, ''),
(266, 'Huyện Lấp Vò', 261, 0, ''),
(267, 'Huyện Tam Nông', 261, 0, ''),
(268, 'Huyện Tân Hồng', 261, 0, ''),
(269, 'Huyện Thanh Bình', 261, 0, ''),
(270, 'Huyện Tháp Mười', 261, 0, ''),
(271, 'Thành phố Cao Lãnh', 261, 0, ''),
(272, 'Thị xã Hồng Ngự', 261, 0, ''),
(273, 'Thị xã Sa Đéc', 261, 0, ''),
(274, 'Gia Lai', 0, 0, ''),
(275, 'Huyện Chư Păh', 274, 0, ''),
(276, 'Huyện Chư Prông', 274, 0, ''),
(277, 'Huyện Chư Pưh', 274, 0, ''),
(278, 'Huyện Chư Sê', 274, 0, ''),
(279, 'Huyện Đăk Đoa', 274, 0, ''),
(280, 'Huyện Đắk Pơ', 274, 0, ''),
(281, 'Huyện Đức Cơ', 274, 0, ''),
(282, 'Huyện Ia Grai', 274, 0, ''),
(283, 'Huyện Ia Pa', 274, 0, ''),
(284, 'Huyện Kbang', 274, 0, ''),
(285, 'Huyện Kông Chro', 274, 0, ''),
(286, 'Huyện Krông Pa', 274, 0, ''),
(287, 'Huyện Mang Yang', 274, 0, ''),
(288, 'Huyện Phú Thiện', 274, 0, ''),
(289, 'Thành phố Pleiku', 274, 0, ''),
(290, 'Thị xã An Khê', 274, 0, ''),
(291, 'Thị xã Ayun Pa', 274, 0, ''),
(292, 'Hà Giang', 0, 0, ''),
(293, 'Huyện Bắc Mê', 292, 0, ''),
(294, 'Huyện Bắc Quang', 292, 0, ''),
(295, 'Huyện Đồng Văn', 292, 0, ''),
(296, 'Huyện Hoàng Su Phì', 292, 0, ''),
(297, 'Huyện Mèo Vạc', 292, 0, ''),
(298, 'Huyện Quản Bạ', 292, 0, ''),
(299, 'Huyện Quang Bình', 292, 0, ''),
(300, 'Huyện Vị Xuyên', 292, 0, ''),
(301, 'Huyện Xín Mần', 292, 0, ''),
(302, 'Huyện Yên Minh', 292, 0, ''),
(303, 'Thành phố Hà Giang', 292, 0, ''),
(304, 'Hà Nam', 0, 0, ''),
(305, 'Huyện Bình Lục', 304, 0, ''),
(306, 'Huyện Duy Tiên', 304, 0, ''),
(307, 'Huyện Kim Bảng', 304, 0, ''),
(308, 'Huyện Lý Nhân', 304, 0, ''),
(309, 'Huyện Thanh Liêm', 304, 0, ''),
(310, 'Thành phố Phủ Lý', 304, 0, ''),
(311, 'Hà Tĩnh', 0, 0, ''),
(312, 'Huyện Cẩm Xuyên', 311, 0, ''),
(313, 'Huyện Can Lộc', 311, 0, ''),
(314, 'Huyện Đức Thọ', 311, 0, ''),
(315, 'Huyện Hương Khê', 311, 0, ''),
(316, 'Huyện Hương Sơn', 311, 0, ''),
(317, 'Huyện Kỳ Anh', 311, 0, ''),
(318, 'Huyện Lộc Hà', 311, 0, ''),
(319, 'Huyện Nghi Xuân', 311, 0, ''),
(320, 'Huyện Thạch Hà', 311, 0, ''),
(321, 'Huyện Vũ Quang', 311, 0, ''),
(322, 'Thành phố Hà Tĩnh', 311, 0, ''),
(323, 'Thị xã Hồng Lĩnh', 311, 0, ''),
(324, 'Thị xã Kỳ Anh', 311, 0, ''),
(325, 'Hải Dương', 0, 0, ''),
(326, 'Huyện Bình Giang', 325, 0, ''),
(327, 'Huyện Cẩm Giàng', 325, 0, ''),
(328, 'Huyện Gia Lộc', 325, 0, ''),
(329, 'Huyện Kim Thành', 325, 0, ''),
(330, 'Huyện Kinh Môn', 325, 0, ''),
(331, 'Huyện Nam Sách', 325, 0, ''),
(332, 'Huyện Ninh Giang', 325, 0, ''),
(333, 'Huyện Thanh Hà', 325, 0, ''),
(334, 'Huyện Thanh Miện', 325, 0, ''),
(335, 'Huyện Tứ Kỳ', 325, 0, ''),
(336, 'Thành phố Hải Dương', 325, 0, ''),
(337, 'Thị xã Chí Linh', 325, 0, ''),
(338, 'Hải Phòng', 0, 0, ''),
(339, 'Huyện An Dương', 338, 0, ''),
(340, 'Huyện An Lão', 338, 0, ''),
(341, 'Huyện Kiến Thụy', 338, 0, ''),
(342, 'Huyện Thuỷ Nguyên', 338, 0, ''),
(343, 'Huyện Tiên Lãng', 338, 0, ''),
(344, 'Huyện Vĩnh Bảo', 338, 0, ''),
(345, 'Huyện đảo Bạch Long Vĩ', 338, 0, ''),
(346, 'Huyện đảo Cát Hải', 338, 0, ''),
(347, 'Quận Đồ Sơn', 338, 0, ''),
(348, 'Quận Dương Kinh', 338, 0, ''),
(349, 'Quận Hải An', 338, 0, ''),
(350, 'Quận Hồng Bàng', 338, 0, ''),
(351, 'Quận Kiến An', 338, 0, ''),
(352, 'Quận Lê Chân', 338, 0, ''),
(353, 'Quận Ngô Quyền', 338, 0, ''),
(354, 'Hậu Giang', 0, 0, ''),
(355, 'Huyện Châu Thành', 354, 0, ''),
(356, 'Huyện Châu Thành A', 354, 0, ''),
(357, 'Huyện Long Mỹ', 354, 0, ''),
(358, 'Huyện Phụng Hiệp', 354, 0, ''),
(359, 'Huyện Vị Thủy', 354, 0, ''),
(360, 'Thành phố Vị Thanh', 354, 0, ''),
(361, 'Thị xã Long Mỹ', 354, 0, ''),
(362, 'Thị xã Ngã Bảy', 354, 0, ''),
(363, 'HòaBình', 0, 0, ''),
(364, 'Huyện Cao Phong', 363, 0, ''),
(365, 'Huyện Đà Bắc', 363, 0, ''),
(366, 'Huyện Kim Bôi', 363, 0, ''),
(367, 'Huyện Kỳ Sơn', 363, 0, ''),
(368, 'Huyện Lạc Sơn', 363, 0, ''),
(369, 'Huyện Lạc Thủy', 363, 0, ''),
(370, 'Huyện Lương Sơn', 363, 0, ''),
(371, 'Huyện Mai Châu', 363, 0, ''),
(372, 'Huyện Tân Lạc', 363, 0, ''),
(373, 'Huyện Yên Thủy', 363, 0, ''),
(374, 'Thành phố Hoà Bình', 363, 0, ''),
(375, 'Hưng Yên', 0, 0, ''),
(376, 'Huyện Ân Thi', 375, 0, ''),
(377, 'Huyện Khoái Châu', 375, 0, ''),
(378, 'Huyện Kim Động', 375, 0, ''),
(379, 'Huyện Mỹ Hào', 375, 0, ''),
(380, 'Huyện Phù Cừ', 375, 0, ''),
(381, 'Huyện Tiên Lữ', 375, 0, ''),
(382, 'Huyện Văn Giang', 375, 0, ''),
(383, 'Huyện Văn Lâm', 375, 0, ''),
(384, 'Huyện Yên Mỹ', 375, 0, ''),
(385, 'Thành phố Hưng Yên', 375, 0, ''),
(386, 'Khách Hòa', 0, 0, ''),
(387, 'Huyện Cam Lâm', 386, 0, ''),
(388, 'Huyện Diên Khánh', 386, 0, ''),
(389, 'Huyện Khánh Sơn', 386, 0, ''),
(390, 'Huyện Khánh Vĩnh', 386, 0, ''),
(391, 'Huyện Vạn Ninh', 386, 0, ''),
(392, 'Huyện đảo Trường Sa', 386, 0, ''),
(393, 'Thành phố Cam Ranh', 386, 0, ''),
(394, 'Thành phố Nha Trang', 386, 0, ''),
(395, 'Thị xã Ninh Hòa', 386, 0, ''),
(396, 'Kiên Giang', 0, 0, ''),
(397, 'Huyện An Biên', 396, 0, ''),
(398, 'Huyện An Minh', 396, 0, ''),
(399, 'Huyện Châu Thành', 396, 0, ''),
(400, 'Huyện Giang Thành', 396, 0, ''),
(401, 'Huyện Giồng Riềng', 396, 0, ''),
(402, 'Huyện Gò Quao', 396, 0, ''),
(403, 'Huyện Hòn Đất', 396, 0, ''),
(404, 'Huyện Kiên Lương', 396, 0, ''),
(405, 'Huyện Tân Hiệp', 396, 0, ''),
(406, 'Huyện U Minh Thượng', 396, 0, ''),
(407, 'Huyện Vĩnh Thuận', 396, 0, ''),
(408, 'Huyện đảo Kiên Hải', 396, 0, ''),
(409, 'Huyện đảo Phú Quốc', 396, 0, ''),
(410, 'Thành phố Rạch Giá', 396, 0, ''),
(411, 'Thị xã Hà Tiên', 396, 0, ''),
(412, 'Kom Tum', 0, 0, ''),
(413, 'Huyện Đắk Glei', 412, 0, ''),
(414, 'Huyện Đắk Hà', 412, 0, ''),
(415, 'Huyện Đăk Tô', 412, 0, ''),
(417, 'Huyện Kon Plông', 412, 0, ''),
(418, 'Huyện Kon Rẫy', 412, 0, ''),
(419, 'Huyện Ngọc Hồi', 412, 0, ''),
(420, 'Huyện Sa Thầy', 412, 0, ''),
(421, 'Huyện Tu Mơ Rông', 412, 0, ''),
(422, 'Thành phố Kon Tum', 412, 0, ''),
(423, 'Lai Châu', 0, 0, ''),
(424, 'Huyện Mường Tè', 423, 0, ''),
(425, 'Huyện Nậm Nhùn', 423, 0, ''),
(426, 'Huyện Phong Thổ', 423, 0, ''),
(427, 'Huyện Sìn Hồ', 423, 0, ''),
(428, 'Huyện Tam Đường', 423, 0, ''),
(429, 'Huyện Tân Uyên', 423, 0, ''),
(430, 'Huyện Than Uyên', 423, 0, ''),
(431, 'Thị xã Lai Châu', 423, 0, ''),
(432, 'Lâm Đồng', 0, 0, ''),
(433, 'Huyện Bảo Lâm', 432, 0, ''),
(434, 'Huyện Cát Tiên', 432, 0, ''),
(435, 'Huyện Đạ Huoai', 432, 0, ''),
(436, 'Huyện Đạ Tẻh', 432, 0, ''),
(437, 'Huyện Đam Rông', 432, 0, ''),
(438, 'Huyện Di Linh', 432, 0, ''),
(439, 'Huyện Đức Trọng', 432, 0, ''),
(440, 'Huyện Lạc Dương', 432, 0, ''),
(441, 'Huyện Lâm Hà', 432, 0, ''),
(442, 'Thành phố Bảo Lộc', 432, 0, ''),
(443, 'Thành phố Đà Lạt', 432, 0, ''),
(444, 'Huyện Đơn Dương', 432, 0, ''),
(445, 'Lạng Sơn', 0, 0, ''),
(446, 'Huyện Bắc Sơn', 445, 0, ''),
(447, 'Huyện Bình Gia', 445, 0, ''),
(448, 'Huyện Cao Lộc', 445, 0, ''),
(449, 'Huyện Chi Lăng', 445, 0, ''),
(450, 'Huyện Đình Lập', 445, 0, ''),
(451, 'Huyện Hữu Lũng', 445, 0, ''),
(452, 'Huyện Lộc Bình', 445, 0, ''),
(453, 'Huyện Văn Lãng', 445, 0, ''),
(454, 'Huyện Văn Quan', 445, 0, ''),
(455, 'Thành phố Lạng Sơn', 445, 0, ''),
(456, 'Huyện Tràng Định', 445, 0, ''),
(457, 'Lào Cai', 0, 0, ''),
(458, 'Huyện Bắc Hà', 457, 0, ''),
(459, 'Huyện Bảo Thắng', 457, 0, ''),
(460, 'Huyện Bảo Yên', 457, 0, ''),
(461, 'Huyện Bát Xát', 457, 0, ''),
(462, 'Huyện Mường Khương', 457, 0, ''),
(463, 'Huyện Sa Pa', 457, 0, ''),
(464, 'Huyện Si Ma Cai', 457, 0, ''),
(465, 'Huyện Văn Bàn', 457, 0, ''),
(466, 'Thành phố Lào Cai', 457, 0, ''),
(467, 'Long An', 0, 0, ''),
(468, 'Huyện Bến Lức', 467, 0, ''),
(469, 'Huyện Cần Đước', 467, 0, ''),
(470, 'Huyện Cần Giuộc', 467, 0, ''),
(471, 'Huyện Châu Thành', 467, 0, ''),
(472, 'Huyện Đức Hòa', 467, 0, ''),
(473, 'Huyện Đức Huệ', 467, 0, ''),
(474, 'Huyện Mộc Hóa', 467, 0, ''),
(475, 'Huyện Tân Hưng', 467, 0, ''),
(476, 'Huyện Tân Thạnh', 467, 0, ''),
(477, 'Huyện Tân Trụ', 467, 0, ''),
(478, 'Huyện Thạnh Hóa', 467, 0, ''),
(479, 'Huyện Thủ Thừa', 467, 0, ''),
(480, 'Huyện Vĩnh Hưng', 467, 0, ''),
(481, 'Thành phố Tân An', 467, 0, ''),
(482, 'Thị xã Kiến Tường', 467, 0, ''),
(483, 'Nam Định', 0, 0, ''),
(484, 'Huyện Giao Thủy', 483, 0, ''),
(485, 'Huyện Hải Hậu', 483, 0, ''),
(486, 'Huyện Mỹ Lộc', 483, 0, ''),
(487, 'Huyện Nam Trực', 483, 0, ''),
(488, 'Huyện Nghĩa Hưng', 483, 0, ''),
(489, 'Huyện Trực Ninh', 483, 0, ''),
(490, 'Huyện Vụ Bản', 483, 0, ''),
(491, 'Huyện Xuân Trường', 483, 0, ''),
(492, 'Huyện Ý Yên', 483, 0, ''),
(493, 'Thành phố Nam Định', 483, 0, ''),
(494, 'Nghệ An', 0, 0, ''),
(495, 'Huyện Anh Sơn', 494, 0, ''),
(496, 'Huyện Con Cuông', 494, 0, ''),
(497, 'Huyện Diễn Châu', 494, 0, ''),
(498, 'Huyện Đô Lương', 494, 0, ''),
(499, 'Huyện Hưng Nguyên', 494, 0, ''),
(500, 'Huyện Kỳ Sơn', 494, 0, ''),
(501, 'Huyện Nam Đàn', 494, 0, ''),
(502, 'Huyện Nghi Lộc', 494, 0, ''),
(503, 'Huyện Nghĩa Đàn', 494, 0, ''),
(504, 'Huyện Quế Phong', 494, 0, ''),
(505, 'Huyện Quỳ Châu', 494, 0, ''),
(506, 'Huyện Quỳ Hợp', 494, 0, ''),
(507, 'Huyện Quỳnh Lưu', 494, 0, ''),
(508, 'Huyện Tân Kỳ', 494, 0, ''),
(509, 'Huyện Thanh Chương', 494, 0, ''),
(510, 'Huyện Tương Dương', 494, 0, ''),
(511, 'Huyện Yên Thành', 494, 0, ''),
(512, 'Thành phố Vinh', 494, 0, ''),
(513, 'Thị xã Cửa Lò', 494, 0, ''),
(514, 'Thị xã Hoàng Mai', 494, 0, ''),
(515, 'Thị xã Thái Hòa', 494, 0, ''),
(516, 'Ninh Bình', 0, 0, ''),
(517, 'Huyện Gia Viễn', 516, 0, ''),
(518, 'Huyện Hoa Lư', 516, 0, ''),
(519, 'Huyện Kim Sơn', 516, 0, ''),
(520, 'Huyện Nho Quan', 516, 0, ''),
(521, 'Huyện Yên Khánh', 516, 0, ''),
(522, 'Huyện Yên Mô', 516, 0, ''),
(523, 'Thành phố Ninh Bình', 516, 0, ''),
(524, 'Thị xã Tam Điệp', 516, 0, ''),
(525, 'Ninh Thuận', 0, 0, ''),
(526, 'Huyện Bác Ái', 525, 0, ''),
(527, 'Huyện Ninh Hải', 525, 0, ''),
(528, 'Huyện Ninh Phước', 525, 0, ''),
(529, 'Huyện Ninh Sơn', 525, 0, ''),
(530, 'Huyện Thuận Bắc', 525, 0, ''),
(531, 'Huyện Thuận Nam', 525, 0, ''),
(532, 'Thành phố Phan Rang-Tháp Chàm', 525, 0, ''),
(533, 'Phú Thọ', 0, 0, ''),
(534, 'Huyện Cẩm Khê', 533, 0, ''),
(535, 'Huyện Đoan Hùng', 533, 0, ''),
(536, 'Huyện Hạ Hòa', 533, 0, ''),
(537, 'Huyện Lâm Thao', 533, 0, ''),
(538, 'Huyện Phù Ninh', 533, 0, ''),
(539, 'Huyện Tam Nông', 533, 0, ''),
(540, 'Huyện Tân Sơn', 533, 0, ''),
(541, 'Huyện Thanh Ba', 533, 0, ''),
(542, 'Huyện Thanh Sơn', 533, 0, ''),
(543, 'Huyện Thanh Thủy', 533, 0, ''),
(544, 'Huyện Yên Lập', 533, 0, ''),
(545, 'Thành phố Việt Trì', 533, 0, ''),
(546, 'Thị xã Phú Thọ', 533, 0, ''),
(547, 'Phú Yên', 0, 0, ''),
(548, 'Huyện Đông Hòa', 547, 0, ''),
(549, 'Huyện Đồng Xuân', 547, 0, ''),
(550, 'Huyện Phú Hòa', 547, 0, ''),
(551, 'Huyện Sơn Hòa', 547, 0, ''),
(552, 'Huyện Sông Hin', 547, 0, ''),
(553, 'Huyện Tây Hòa', 547, 0, ''),
(554, 'Huyện Tuy An', 547, 0, ''),
(555, 'Thành phố Tuy Hòa', 547, 0, ''),
(556, 'Thị xã Sông Cầu', 547, 0, ''),
(557, 'Quảng Bình', 0, 0, ''),
(558, 'Huyện Bố Trạch', 557, 0, ''),
(559, 'Huyện Lệ Thủy', 557, 0, ''),
(560, 'Huyện Minh Hóa', 557, 0, ''),
(561, 'Huyện Quảng Ninh', 557, 0, ''),
(562, 'Huyện Quảng Trạch', 557, 0, ''),
(563, 'Huyện Tuyên Hóa', 557, 0, ''),
(564, 'Thành phố Đồng Hới', 557, 0, ''),
(565, 'Thị xã Ba Đồn', 557, 0, ''),
(566, 'Quảng Nam', 0, 0, ''),
(567, 'Huyện Bắc Trà My', 566, 0, ''),
(568, 'Huyện Đại Lộc', 566, 0, ''),
(569, 'Huyện Điện Bàn', 566, 0, ''),
(570, 'Huyện Đông Giang', 566, 0, ''),
(571, 'Huyện Duy Xuyên', 566, 0, ''),
(572, 'Huyện Hiệp Đức', 566, 0, ''),
(573, 'Huyện Nam Giang', 566, 0, ''),
(574, 'Huyện Nam Trà My', 566, 0, ''),
(575, 'Huyện Nông Sơn', 566, 0, ''),
(576, 'Huyện Núi Thành', 566, 0, ''),
(577, 'Huyện Phú Ninh', 566, 0, ''),
(578, 'Huyện Phước Sơn', 566, 0, ''),
(579, 'Huyện Quế Sơn', 566, 0, ''),
(580, 'Huyện Tây Giang', 566, 0, ''),
(581, 'Huyện Thăng Bình', 566, 0, ''),
(582, 'Huyện Tiên Phước', 566, 0, ''),
(583, 'Thành phố Hội An', 566, 0, ''),
(584, 'Thành phố Tam Kỳ', 566, 0, ''),
(585, 'Quảng Nam', 0, 0, ''),
(586, 'Huyện Bắc Trà My', 585, 0, ''),
(587, 'Huyện Đại Lộc', 585, 0, ''),
(588, 'Huyện Điện Bàn', 585, 0, ''),
(589, 'Huyện Đông Giang', 585, 0, ''),
(590, 'Huyện Duy Xuyên', 585, 0, ''),
(591, 'Huyện Hiệp Đức', 585, 0, ''),
(592, 'Huyện Nam Giang', 585, 0, ''),
(593, 'Huyện Nam Trà My', 585, 0, ''),
(594, 'Huyện Nông Sơn', 585, 0, ''),
(595, 'Huyện Núi Thành', 585, 0, ''),
(596, 'Huyện Phú Ninh', 585, 0, ''),
(597, 'Huyện Phước Sơn', 585, 0, ''),
(598, 'Huyện Quế Sơn', 585, 0, ''),
(599, 'Huyện Tây Giang', 585, 0, ''),
(600, 'Huyện Thăng Bình', 585, 0, ''),
(601, 'Huyện Tiên Phước', 585, 0, ''),
(602, 'Thành phố Hội An', 585, 0, ''),
(603, 'Thành phố Tam Kỳ', 585, 0, ''),
(604, 'Quảng Ninh', 0, 0, ''),
(605, 'Huyện Ba Chẽ', 604, 0, ''),
(606, 'Huyện Bình Liêu', 604, 0, ''),
(607, 'Huyện Đầm Hà', 604, 0, ''),
(608, 'Huyện Đông Triều', 604, 0, ''),
(609, 'Huyện Hải Hà', 604, 0, ''),
(610, 'Huyện Hoành Bồ', 604, 0, ''),
(611, 'Huyện Tiên Yên', 604, 0, ''),
(612, 'Huyện Tư Nghĩa', 604, 0, ''),
(613, 'Huyện Vân Đồn', 604, 0, ''),
(614, 'Huyện Yên Hưng', 604, 0, ''),
(615, 'Huyện đảo Cô Tô', 604, 0, ''),
(616, 'Thành phố Cẩm Phả', 604, 0, ''),
(617, 'Thành phố Hạ Long', 604, 0, ''),
(618, 'Thành phố Móng Cái', 604, 0, ''),
(619, 'Thành phố Uông Bí', 604, 0, ''),
(620, 'Thị Xã Quảng Yên', 604, 0, ''),
(621, 'Quảng Trị', 0, 0, ''),
(622, 'Huyện Cam Lộ', 621, 0, ''),
(623, 'Huyện Đa Krông', 621, 0, ''),
(624, 'Huyện Gio Linh', 621, 0, ''),
(625, 'Huyện Hải Lăng', 621, 0, ''),
(626, 'Huyện Hướng Hóa', 621, 0, ''),
(627, 'Huyện Triệu Phong', 621, 0, ''),
(628, 'Huyện Vĩnh Linh', 621, 0, ''),
(629, 'Huyện đảo Cồn Cỏ', 621, 0, ''),
(630, 'Thành phố Đông Hà', 621, 0, ''),
(631, 'Thị xã Quảng Trị', 621, 0, ''),
(632, 'Sóc Trăng', 0, 0, ''),
(633, 'Huyện Châu Thành', 632, 0, ''),
(634, 'Huyện Cù Lao Dung', 632, 0, ''),
(635, 'Huyện Kế Sách', 632, 0, ''),
(636, 'uyện Long Phú', 632, 0, ''),
(637, 'Huyện Mỹ Tú', 632, 0, ''),
(638, 'Huyện Mỹ Xuyên', 632, 0, ''),
(639, 'Huyện Ngã Năm', 632, 0, ''),
(640, 'Huyện Thạnh Trị', 632, 0, ''),
(641, 'Huyện Trần Đề', 632, 0, ''),
(642, 'Huyện Vĩnh Châu', 632, 0, ''),
(643, 'Thành phố Sóc Trăng', 632, 0, ''),
(644, 'Sơn La', 0, 0, ''),
(645, 'Huyện Bắc Yên', 644, 0, ''),
(646, 'Huyện Mai Sơn', 644, 0, ''),
(647, 'Huyện Mộc Châu', 644, 0, ''),
(648, 'Huyện Mường La', 644, 0, ''),
(649, 'Huyện Phù Yên', 644, 0, ''),
(650, 'Huyện Quỳnh Nhai', 644, 0, ''),
(651, 'Huyện Sông Mã', 644, 0, ''),
(652, 'Huyện Sốp Cộp', 644, 0, ''),
(653, 'Huyện Thuận Châu', 644, 0, ''),
(654, 'Huyện Vân Hồ', 644, 0, ''),
(655, 'Huyện Yên Châu', 644, 0, ''),
(656, 'Thành phố Sơn La', 644, 0, ''),
(657, 'Tây Ninh', 0, 0, ''),
(658, 'Huyện Bến Cầu', 657, 0, ''),
(659, 'Huyện Châu Thành', 657, 0, ''),
(660, 'Huyện Dương Minh Châu', 657, 0, ''),
(661, 'Huyện Gò Dầu', 657, 0, ''),
(662, 'Huyện Hòa Thành', 657, 0, ''),
(663, 'Huyện Tân Biên', 657, 0, ''),
(664, 'Huyện Tân Châu', 657, 0, ''),
(665, 'Huyện Trảng Bàng', 657, 0, ''),
(666, 'Thị xã Tây Ninh', 657, 0, ''),
(667, 'Thái Bình', 0, 0, ''),
(668, 'Huyện Đông Hưng', 667, 0, ''),
(669, 'Huyện Hưng Hà', 667, 0, ''),
(670, 'Huyện Kiến Xương', 667, 0, ''),
(671, 'Huyện Quỳnh Phụ', 667, 0, ''),
(672, 'Huyện Thái Thụy', 667, 0, ''),
(673, 'Huyện Tiền Hải', 667, 0, ''),
(674, 'Huyện Vũ Thư', 667, 0, ''),
(675, 'Thành phố Thái Bình', 667, 0, ''),
(676, 'Thái Nguyên', 0, 0, ''),
(677, 'Huyện Đại Từ', 676, 0, ''),
(678, 'Huyện Định Hóa', 676, 0, ''),
(679, 'Huyện Đồng Hỷ', 676, 0, ''),
(680, 'Huyện Phổ Yên', 676, 0, ''),
(681, 'Huyện Phú Bình', 676, 0, ''),
(682, 'Huyện Phú Lương', 676, 0, ''),
(683, 'Huyện Võ Nhai', 676, 0, ''),
(684, 'Thành phố Thái Nguyên', 676, 0, ''),
(685, 'Thị xã Sông Công', 676, 0, ''),
(686, 'Thanh Hóa', 0, 0, ''),
(687, 'Huyện Bá Thước', 686, 0, ''),
(688, 'Huyện Cẩm Thủy', 686, 0, ''),
(689, 'Huyện Đông Sơn', 686, 0, ''),
(690, 'Huyện Hà Trung', 686, 0, ''),
(691, 'Huyện Hậu Lộc', 686, 0, ''),
(692, 'Huyện Hoằng Hóa', 686, 0, ''),
(693, 'Huyện Lang Chánh', 686, 0, ''),
(694, 'Huyện Mường Lát', 686, 0, ''),
(695, 'Huyện Nga Sơn', 686, 0, ''),
(696, 'Huyện Ngọc Lặc', 686, 0, ''),
(697, 'Huyện Như Thanh', 686, 0, ''),
(698, 'Huyện Như Xuân', 686, 0, ''),
(699, 'Huyện Nông Cống', 686, 0, ''),
(700, 'Huyện Quan Hóa', 686, 0, ''),
(701, 'Huyện Quan Sơn', 686, 0, ''),
(702, 'Huyện Quảng Xương', 686, 0, ''),
(703, 'Huyện Thạch Thành', 686, 0, ''),
(704, 'Huyện Thiệu Hóa', 686, 0, ''),
(705, 'Huyện Thọ Xuân', 686, 0, ''),
(706, 'Huyện Thường Xuân', 686, 0, ''),
(707, 'Huyện Tĩnh Gia', 686, 0, ''),
(708, 'Huyện Triệu Sơn', 686, 0, ''),
(709, 'Huyện Vĩnh Lộc', 686, 0, ''),
(710, 'Huyện Yên Định', 686, 0, ''),
(711, 'Thành phố Thanh Hóa', 686, 0, ''),
(712, 'Thị xã Bỉm Sơn', 686, 0, ''),
(713, 'Thị xã Sầm Sơn', 686, 0, ''),
(714, 'Thừa Thiên Huế', 0, 0, ''),
(715, 'Huyện A Lưới', 714, 0, ''),
(716, 'Huyện Nam Đông', 714, 0, ''),
(717, 'Huyện Phong Điền', 714, 0, ''),
(718, 'Huyện Phú Lộc', 714, 0, ''),
(719, 'Huyện Phú Vang', 714, 0, ''),
(720, 'Huyện Quảng Điền', 714, 0, ''),
(721, 'Thành phố Huế', 714, 0, ''),
(722, 'Thị xã Hương Thủy', 714, 0, ''),
(723, 'Thị xã Hương Trà', 714, 0, ''),
(724, 'Tiền Giang', 0, 0, ''),
(725, 'Huyện Cái Bè', 724, 0, ''),
(726, 'Huyện Cai Lậy', 724, 0, ''),
(727, 'Huyện Châu Thành', 724, 0, ''),
(728, 'Huyện Chợ Gạo', 724, 0, ''),
(729, 'Huyện Gò Công Đông', 724, 0, ''),
(730, 'Huyện Gò Công Tây', 724, 0, ''),
(731, 'Huyện Tân Phú Đông', 724, 0, ''),
(732, 'Huyện Tân Phước', 724, 0, ''),
(733, 'Thành phố Mỹ Tho', 724, 0, ''),
(734, 'Thị xã Cai Lậy', 724, 0, ''),
(735, 'Thị xã Gò Công', 724, 0, ''),
(736, 'Trà Vinh', 0, 0, ''),
(737, 'Huyện Càng Long', 736, 0, ''),
(738, 'Huyện Cầu Kè', 736, 0, ''),
(739, 'Huyện Cầu Ngang', 736, 0, ''),
(740, 'Huyện Châu Thành', 736, 0, ''),
(741, 'Huyện Duyên Hải', 736, 0, ''),
(742, 'Huyện Tiểu Cần', 736, 0, ''),
(743, 'Huyện Trà Cú', 736, 0, ''),
(744, 'Thành phố Trà Vinh', 736, 0, ''),
(745, 'Thị xã Duyên Hải', 736, 0, ''),
(746, 'Tuyên Quang', 0, 0, ''),
(747, 'Huyện Chiêm Hóa', 746, 0, ''),
(748, 'Huyện Hàm Yên', 746, 0, ''),
(749, 'Huyện Lâm Bình', 746, 0, ''),
(750, 'Huyện Na Hang', 746, 0, ''),
(751, 'Huyện Sơn Dương', 746, 0, ''),
(752, 'Huyện Yên Sơn', 746, 0, ''),
(753, 'Thành phố Tuyên Quang', 746, 0, ''),
(754, 'Vĩnh Long', 0, 0, ''),
(755, 'Huyện Bình Minh', 754, 0, ''),
(756, 'Huyện Bình Tân', 754, 0, ''),
(757, 'Huyện Long Hồ', 754, 0, ''),
(758, 'Huyện Mang Thít', 754, 0, ''),
(759, 'Huyện Tam Bình', 754, 0, ''),
(760, 'Huyện Trà Ôn', 754, 0, ''),
(761, 'Huyện Vũng Liêm', 754, 0, ''),
(762, 'Thành phố Vĩnh Long', 754, 0, ''),
(763, 'Vĩnh Phúc', 0, 0, ''),
(764, 'Huyện Bình Xuyên', 763, 0, ''),
(765, 'Huyện Lập Thạch', 763, 0, ''),
(766, 'Huyện Sông Lô', 763, 0, ''),
(767, 'Huyện Tam Đảo', 763, 0, ''),
(768, 'Huyện Tam Dương', 763, 0, ''),
(769, 'Huyện Vĩnh Tường', 763, 0, ''),
(770, 'Huyện Yên Lạc', 763, 0, ''),
(771, 'Thành phố Vĩnh Yên', 763, 0, ''),
(772, 'Thị xã Phúc Yên', 763, 0, ''),
(773, 'Yên Bái', 0, 0, ''),
(774, 'Huyện Lục Yên', 773, 0, ''),
(775, 'Huyện Mù Căng Chải', 773, 0, ''),
(776, 'Huyện Trạm Tấu', 773, 0, ''),
(777, 'Huyện Trấn Yên', 773, 0, ''),
(778, 'Huyện Văn Chấn', 773, 0, ''),
(779, 'Huyện Văn Yên', 773, 0, ''),
(780, 'Huyện Yên Bình', 773, 0, ''),
(781, 'Thành phố Yên Bái', 773, 0, ''),
(782, 'Thị xã Nghĩa Lộ', 773, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sangnhanh_dangky`
--
ALTER TABLE `sangnhanh_dangky`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `sangnhanh_danhmuc`
--
ALTER TABLE `sangnhanh_danhmuc`
  ADD PRIMARY KEY (`MaDanhMuc`),
  ADD UNIQUE KEY `TenKhongDau` (`TenKhongDau`);

--
-- Indexes for table `sangnhanh_khachang`
--
ALTER TABLE `sangnhanh_khachang`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `sangnhanh_lichsu`
--
ALTER TABLE `sangnhanh_lichsu`
  ADD PRIMARY KEY (`DongLichSu`);

--
-- Indexes for table `sangnhanh_loinhan`
--
ALTER TABLE `sangnhanh_loinhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sangnhanh_option`
--
ALTER TABLE `sangnhanh_option`
  ADD PRIMARY KEY (`MaOption`);

--
-- Indexes for table `sangnhanh_pages`
--
ALTER TABLE `sangnhanh_pages`
  ADD PRIMARY KEY (`idPa`);

--
-- Indexes for table `sangnhanh_quancao`
--
ALTER TABLE `sangnhanh_quancao`
  ADD PRIMARY KEY (`MaQuanCao`);

--
-- Indexes for table `sangnhanh_quantri`
--
ALTER TABLE `sangnhanh_quantri`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `sangnhanh_sanpham`
--
ALTER TABLE `sangnhanh_sanpham`
  ADD PRIMARY KEY (`IdTin`);

--
-- Indexes for table `sangnhanh_tin`
--
ALTER TABLE `sangnhanh_tin`
  ADD PRIMARY KEY (`IdTin`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `sangnhanh_tinhthanh`
--
ALTER TABLE `sangnhanh_tinhthanh`
  ADD PRIMARY KEY (`MaDiaChi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sangnhanh_dangky`
--
ALTER TABLE `sangnhanh_dangky`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=625;
--
-- AUTO_INCREMENT for table `sangnhanh_danhmuc`
--
ALTER TABLE `sangnhanh_danhmuc`
  MODIFY `MaDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;
--
-- AUTO_INCREMENT for table `sangnhanh_khachang`
--
ALTER TABLE `sangnhanh_khachang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `sangnhanh_lichsu`
--
ALTER TABLE `sangnhanh_lichsu`
  MODIFY `DongLichSu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sangnhanh_loinhan`
--
ALTER TABLE `sangnhanh_loinhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sangnhanh_pages`
--
ALTER TABLE `sangnhanh_pages`
  MODIFY `idPa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `sangnhanh_quancao`
--
ALTER TABLE `sangnhanh_quancao`
  MODIFY `MaQuanCao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `sangnhanh_tin`
--
ALTER TABLE `sangnhanh_tin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `sangnhanh_tinhthanh`
--
ALTER TABLE `sangnhanh_tinhthanh`
  MODIFY `MaDiaChi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=783;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;