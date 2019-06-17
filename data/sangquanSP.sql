-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 08:37 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sangquan`
--

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
(259, '1', 'Sang Tiệm Tóc', 'sang-tiem-toc', 'icon/sang-tien-toc.png', 0, '', '{"MailMenu":"0","TimKiemHome":"0","DanhMucView":"danhmucsangquan","DanhMucLienQuan1":"256","DanhMucLienQuan2":"260"}', 0),
(260, '1', 'Sang Quán Nhậu', 'sang-quan-nhau', 'icon/sang-quan-nhau.png', 0, '', '{"MailMenu":"0"}', 0),
(261, '1', 'Sang Quán Bida', 'sang-quan-bida', 'icon/sang-quan-bida.png', 0, '', '{"MailMenu":"0","TimKiemHome":"0","DanhMucView":"danhmucsangquan","DanhMucLienQuan1":"263","DanhMucLienQuan2":"255"}', 0),
(262, '1', 'Sang CLB Thể Hình', 'sang-clb-the-hinh', 'icon/SANG-CLB-THE-HINH.png', 0, '', '{"MailMenu":"0"}', 0),
(263, '1', 'Sang Mặt Bằng', 'sang-mat-bang', 'icon/mat-bang-kinh-doanh.png', 11, '', '{"MailMenu":"0","TimKiemHome":"0","DanhMucView":"index","DanhMucLienQuan1":"256","DanhMucLienQuan2":"256"}', 0),
(265, '{}', 'Quán Ăn - Nhậu - Ốc', 'quan-an-nhau-oc', '', 0, '', '{}', 0),
(266, '{}', 'Q cơm, phở, hủ tiếu', 'q-com-pho-hu-tieu', '', 0, '', '{}', 0),
(267, '{}', 'Sang nhà hàng', 'sang-nha-hang', '', 0, '', '{}', 0),
(268, '{}', 'Bar - Beer - Karaoke', 'bar-beer-karaoke', '', 0, '', '{}', 0),
(269, '{}', 'Trà Sữa - Chanh - Chè', 'tra-sua-chanh-che', '', 0, '', '{}', 0),
(270, '{}', 'Sang phòng trà', 'sang-phong-tra', '', 0, '', '{}', 0),
(271, '{}', 'Sang các shop', 'sang-cac-shop', '', 0, '', '{}', 0),
(272, '{}', 'Spa - Thẩm Mỹ Viện', 'spa-tham-my-vien', '', 0, '', '{}', 0),
(273, '{}', 'Tiệm Tóc - Nails', 'tiem-toc-nails', '', 0, '', '{}', 0),
(274, '{}', 'Tiệm Áo Cưới - Studio', 'tiem-ao-cuoi-studio', '', 0, '', '{}', 0),
(275, '{}', 'Massage - xông hơi', 'massage-xong-hoi', '', 0, '', '{}', 0),
(276, '{}', 'Khách sạn', 'khach-san', '', 0, '', '{}', 0),
(277, '{}', 'Mặt bằng', 'mat-bang', '', 0, '', '{}', 0),
(278, '{}', 'Trường mầm non', 'truong-mam-non', '', 0, '', '{}', 0),
(279, '{}', 'trường ngoại ngữ', 'truong-ngoai-ngu', '', 0, '', '{}', 0),
(280, '{}', 'Các trung tâm', 'cac-trung-tam', '', 0, '', '{}', 0),
(281, '{}', 'Sang công ty', 'sang-cong-ty', '', 0, '', '{}', 0),
(282, '{}', 'Sang GPKD các loại', 'sang-gpkd-cac-loai', '', 0, '', '{}', 0),
(283, '{}', 'Sang phòng vé', 'sang-phong-ve', '', 0, '', '{}', 0),
(284, '{}', 'Nhà trọ', 'nha-tro', '', 0, '', '{}', 0),
(285, '{}', 'Sang nhà thuốc', 'sang-nha-thuoc', '', 0, '', '{}', 0),
(286, '{}', 'Phòng Khám', 'phong-kham', '', 0, '', '{}', 0),
(287, '{}', 'Showroom', 'showroom', '', 0, '', '{}', 0),
(288, '{}', 'Sang các cơ sở', 'sang-cac-co-so', '', 0, '', '{}', 0),
(289, '{}', 'Máy móc các loại', 'may-moc-cac-loai', '', 0, '', '{}', 0),
(290, '{}', 'Sang tiệm bánh', 'sang-tiem-banh', '', 0, '', '{}', 0),
(291, '{}', 'Tiệm - Sạp - Kios', 'tiem-sap-kios', '', 0, '', '{}', 0),
(292, '{}', 'Sang CLB Bida', 'sang-clb-bida', '', 0, '', '{}', 0),
(293, '{}', 'CLB Thể Hình', 'clb-the-hinh', '', 0, '', '{}', 0),
(294, '{}', 'sang tiệm net', 'sang-tiem-net', '', 0, '', '{}', 0),
(295, '{}', 'Tiệm Tạp Hóa', 'tiem-tap-hoa', '', 0, '', '{}', 0),
(296, '{}', 'CH VLXD', 'ch-vlxd', '', 0, '', '{}', 0),
(297, '{}', 'CH điện nước', 'ch-dien-nuoc', '', 0, '', '{}', 0),
(298, '{}', 'SANG KHÁC', 'sang-khac', '', 0, '', '{}', 0),
(299, '{}', 'Tiệm sửa - rửa xe', 'tiem-sua-rua-xe', '', 0, '', '{}', 0),
(300, '{}', 'Tiệm photocopy', 'tiem-photocopy', '', 0, '', '{}', 0),
(301, '{}', 'Tiệm điện thoại', 'tiem-dien-thoai', '', 0, '', '{}', 0),
(302, '{}', 'sang tiệm giặt ủi', 'sang-tiem-giat-ui', '', 0, '', '{}', 0),
(303, '{}', 'Khu du lịch - Câu Cá', 'khu-du-lich-cau-ca', '', 0, '', '{}', 0),
(304, '{}', 'Xưởng - Trang Trại', 'xuong-trang-trai', '', 0, '', '{}', 0),
(305, '{}', 'Cây kiểng-Thú Nuôi', 'cay-kiengthu-nuoi', '', 0, '', '{}', 0);

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
('1487656587166', 53, 'Cho thuê quán Shisha tại 34 Nam Quốc Cang tại 34 Nam quốc Cang', 'Cho thuê quán Shisha tại 34 Nam Quốc Cang tại 34 Nam quốc Cang', 'Cho thuê quán Shisha tại 34 Nam Quốc Cang tại 34 Nam quốc Cang', 253, 'Cho thuê quán Shisha tại 34 Nam Quốc Cang tại 34 Nam quốc Cang', 'cho-thue-quan-shisha-tai-34-nam-quoc-cang-tai-34-nam-quoc-cang1487656587166', '', '', 1, '2017-02-21 06:56:27', '', 0, 0, 0, 20, '{"ViTri":"1","PhongCach":"1","SoPhong":"1","Toilet":"1","GoiDangTin":"1","DonVi":"1","NguoiLienHe":"","DienThoai":"","ChieuNgang":"5","ChieuRong":"5","Tinh":"32","Huyen":"34"}', 0),
('1487656587194', 53, 'Sang Quán Cafe 2MT Khu Bàu Cát , F. 14 , Tân Bình', 'Sang Quán Cafe 2MT Khu Bàu Cát , F. 14 , Tân Bình', 'Sang Quán Cafe 2MT Khu Bàu Cát , F. 14 , Tân Bình', 253, 'Sang Quán Cafe 2MT Khu Bàu Cát , F. 14 , Tân Bình', 'sang-quan-cafe-2mt-khu-bau-cat-f-14-tan-binh1487656587194', '', '', 1, '2017-02-21 06:56:27', '', 0, 0, 0, 20, '{"ViTri":"1","PhongCach":"1","SoPhong":"1","Toilet":"1","GoiDangTin":"1","DonVi":"1","NguoiLienHe":"","DienThoai":"","ChieuNgang":"5","ChieuRong":"5","Tinh":"1","Huyen":"1"}', 0),
('1487656587377', 53, 'Sang gấp quán cafe điểm tâm YẾN NHI quận 3', 'Sang gấp quán cafe điểm tâm YẾN NHI quận 3', 'Sang gấp quán cafe điểm tâm YẾN NHI quận 3', 253, 'Sang gấp quán cafe điểm tâm YẾN NHI quận 3', 'sang-gap-quan-cafe-diem-tam-yen-nhi-quan-3', '', '', 1, '2017-02-21 06:56:27', '', 0, 0, 0, 20, '{}', 0),
('1487656587399', 53, 'sang quán cafe cơm vp số 13 đường Hòa Bình, P. Bình Thọ, Q.Thủ Đức.', 'sang quán cafe cơm vp số 13 đường Hòa Bình, P. Bình Thọ, Q.Thủ Đức.', 'sang quán cafe cơm vp số 13 đường Hòa Bình, P. Bình Thọ, Q.Thủ Đức.', 253, 'sang quán cafe cơm vp số 13 đường Hòa Bình, P. Bình Thọ, Q.Thủ Đức.', 'sang-quan-cafe-com-vp-so-13-duong-hoa-binh-p-binh-tho-qthu-duc', '', '', 1, '2017-02-21 06:56:27', '', 0, 0, 0, 20, '{}', 0),
('1487656587450', 53, 'Sang quán cafe mới hoạt động tại quận 9', 'Sang quán cafe mới hoạt động tại quận 9', 'Sang quán cafe mới hoạt động tại quận 9', 253, 'Sang quán cafe mới hoạt động tại quận 9', 'sang-quan-cafe-moi-hoat-dong-tai-quan-9', '', '', 1, '2017-02-21 06:56:27', '', 0, 0, 0, 20, '{}', 0),
('1487656587456', 53, 'Sang quán cafe đông khách đường Đặng Thúc Vịnh Hóc Môn', 'Sang quán cafe đông khách đường Đặng Thúc Vịnh Hóc Môn', 'Sang quán cafe đông khách đường Đặng Thúc Vịnh Hóc Môn', 253, 'Sang quán cafe đông khách đường Đặng Thúc Vịnh Hóc Môn', 'sang-quan-cafe-dong-khach-duong-dang-thuc-vinh-hoc-mon', '', '', 1, '2017-02-21 06:56:27', '', 0, 0, 0, 20, '{}', 0),
('1487656587620', 53, 'Sang Quán Cafe + Cơm Trưa + Quán Nhậu, Làng Đại Học Khu B, Nhà Bè', 'Sang Quán Cafe + Cơm Trưa + Quán Nhậu, Làng Đại Học Khu B, Nhà Bè', 'Sang Quán Cafe + Cơm Trưa + Quán Nhậu, Làng Đại Học Khu B, Nhà Bè', 253, 'Sang Quán Cafe + Cơm Trưa + Quán Nhậu, Làng Đại Học Khu B, Nhà Bè', 'sang-quan-cafe-com-trua-quan-nhau-lang-dai-hoc-khu-b-nha-be', '', '', 1, '2017-02-21 06:56:27', '', 0, 0, 0, 20, '{}', 0),
('1487656587699', 53, 'Sang Cafe - Kem , MT Lê Văn Thọ , Gò Vấp', 'Sang Cafe - Kem , MT Lê Văn Thọ , Gò Vấp', 'Sang Cafe - Kem , MT Lê Văn Thọ , Gò Vấp', 253, 'Sang Cafe - Kem , MT Lê Văn Thọ , Gò Vấp', 'sang-cafe-kem-mt-le-van-tho-go-vap', '', '', 1, '2017-02-21 06:56:27', '', 0, 0, 0, 20, '{}', 0),
('1487656587725', 53, 'Sang quán cafe 2 mặt tiền quận 7', 'Sang quán cafe 2 mặt tiền quận 7', 'Sang quán cafe 2 mặt tiền quận 7', 253, 'Sang quán cafe 2 mặt tiền quận 7', 'sang-quan-cafe-2-mat-tien-quan-7', '', '', 1, '2017-02-21 06:56:27', '', 0, 0, 0, 20, '{}', 0),
('1487656587869', 53, 'sang quán cafe cơm vp 208 Nguyễn Trọng Tuyển, Phú Nhuận.', 'sang quán cafe cơm vp 208 Nguyễn Trọng Tuyển, Phú Nhuận.', 'sang quán cafe cơm vp 208 Nguyễn Trọng Tuyển, Phú Nhuận.', 253, 'sang quán cafe cơm vp 208 Nguyễn Trọng Tuyển, Phú Nhuận.', 'sang-quan-cafe-com-vp-208-nguyen-trong-tuyen-phu-nhuan', '', '', 1, '2017-02-21 06:56:27', '', 0, 0, 0, 20, '{}', 0),
('1487656587899', 53, 'Sang quán cafe trà sữa quận Bình Thạnh', 'Sang quán cafe trà sữa quận Bình Thạnh', 'Sang quán cafe trà sữa quận Bình Thạnh', 253, 'Sang quán cafe trà sữa quận Bình Thạnh', 'sang-quan-cafe-tra-sua-quan-binh-thanh', '', '', 1, '2017-02-21 06:56:27', '', 0, 0, 0, 20, '{}', 0),
('1487656587928', 53, 'Sang Quán Cafe Mặt tiền đường Phạm Văn Chiêu, P. 14, quận Gò Vấp', 'Sang Quán Cafe Mặt tiền đường Phạm Văn Chiêu, P. 14, quận Gò Vấp', 'Sang Quán Cafe Mặt tiền đường Phạm Văn Chiêu, P. 14, quận Gò Vấp', 253, 'Sang Quán Cafe Mặt tiền đường Phạm Văn Chiêu, P. 14, quận Gò Vấp', 'sang-quan-cafe-mat-tien-duong-pham-van-chieu-p-14-quan-go-vap', '', '', 1, '2017-02-21 06:56:27', '', 0, 0, 0, 20, '{}', 0),
('1487656587960', 53, 'Sang quán cafe Bóng Đá K+ quận Bình Thạnh', 'Sang quán cafe Bóng Đá K+ quận Bình Thạnh', 'Sang quán cafe Bóng Đá K+ quận Bình Thạnh', 253, 'Sang quán cafe Bóng Đá K+ quận Bình Thạnh', 'sang-quan-cafe-bong-da-k-quan-binh-thanh', '', '', 1, '2017-02-21 06:56:27', '', 0, 0, 0, 20, '{}', 0),
('1487658914103', 0, 'Cho thuê mặt bằng đẹp mở shop thời trang', 'Cho thuê mặt bằng đẹp mở shop thời trang', 'Cho thuê mặt bằng đẹp mở shop thời trang', 271, 'Cho thuê mặt bằng đẹp mở shop thời trang', 'cho-thue-mat-bang-dep-mo-shop-thoi-trang', '', '', 1, '2017-02-21 07:35:14', '', 0, 0, 0, 20, '{}', 0),
('1487658914131', 0, 'Sang mặt bằng Shop mặt tiền số 457B đường Nguyễn Kiệm, quận Phú Nhuận', 'Sang mặt bằng Shop mặt tiền số 457B đường Nguyễn Kiệm, quận Phú Nhuận', 'Sang mặt bằng Shop mặt tiền số 457B đường Nguyễn Kiệm, quận Phú Nhuận', 271, 'Sang mặt bằng Shop mặt tiền số 457B đường Nguyễn Kiệm, quận Phú Nhuận', 'sang-mat-bang-shop-mat-tien-so-457b-duong-nguyen-kiem-quan-phu-nhuan', '', '', 1, '2017-02-21 07:35:14', '', 0, 0, 0, 20, '{}', 0),
('1487658914160', 0, 'Sang khách sạn cao cấp khu cx Bắc Hải', 'Sang khách sạn cao cấp khu cx Bắc Hải', 'Sang khách sạn cao cấp khu cx Bắc Hải', 271, 'Sang khách sạn cao cấp khu cx Bắc Hải', 'sang-khach-san-cao-cap-khu-cx-bac-hai', '', '', 1, '2017-02-21 07:35:14', '', 0, 0, 0, 20, '{}', 0),
('1487658914251', 0, 'Sang shop 443 Lê Văn sỹ, quận Tân Bình', 'Sang shop 443 Lê Văn sỹ, quận Tân Bình', 'Sang shop 443 Lê Văn sỹ, quận Tân Bình', 271, 'Sang shop 443 Lê Văn sỹ, quận Tân Bình', 'sang-shop-443-le-van-sy-quan-tan-binh', '', '', 1, '2017-02-21 07:35:14', '', 0, 0, 0, 20, '{}', 0),
('1487658914284', 0, 'Sang gấp shop thời trang nữ giá rẻ đường thống nhất, Q Gò Vấp.', 'Sang gấp shop thời trang nữ giá rẻ đường thống nhất, Q Gò Vấp.', 'Sang gấp shop thời trang nữ giá rẻ đường thống nhất, Q Gò Vấp.', 271, 'Sang gấp shop thời trang nữ giá rẻ đường thống nhất, Q Gò Vấp.', 'sang-gap-shop-thoi-trang-nu-gia-re-duong-thong-nhat-q-go-vap', '', '', 1, '2017-02-21 07:35:14', '', 0, 0, 0, 20, '{}', 0),
('1487658914306', 0, 'Sang nhượng thương hiệu thời trang, Doanh Thu 300-600 triêu/tháng', 'Sang nhượng thương hiệu thời trang, Doanh Thu 300-600 triêu/tháng', 'Sang nhượng thương hiệu thời trang, Doanh Thu 300-600 triêu/tháng', 271, 'Sang nhượng thương hiệu thời trang, Doanh Thu 300-600 triêu/tháng', 'sang-nhuong-thuong-hieu-thoi-trang-doanh-thu-300600-trieuthang', '', '', 1, '2017-02-21 07:35:14', '', 0, 0, 0, 20, '{}', 0),
('1487658914311', 0, 'Sang Shop Thực Phẩm Sạch, Mạc Dĩnh Chi ,Q.1', 'Sang Shop Thực Phẩm Sạch, Mạc Dĩnh Chi ,Q.1', 'Sang Shop Thực Phẩm Sạch, Mạc Dĩnh Chi ,Q.1', 271, 'Sang Shop Thực Phẩm Sạch, Mạc Dĩnh Chi ,Q.1', 'sang-shop-thuc-pham-sach-mac-dinh-chi-q1', '', '', 1, '2017-02-21 07:35:14', '', 0, 0, 0, 20, '{}', 0),
('1487658914357', 0, 'Sang shop 265 Nguyễn Thượng Hiền P. 4 Quận 3', 'Sang shop 265 Nguyễn Thượng Hiền P. 4 Quận 3', 'Sang shop 265 Nguyễn Thượng Hiền P. 4 Quận 3', 271, 'Sang shop 265 Nguyễn Thượng Hiền P. 4 Quận 3', 'sang-shop-265-nguyen-thuong-hien-p-4-quan-3', '', '', 1, '2017-02-21 07:35:14', '', 0, 0, 0, 20, '{}', 0),
('1487658914363', 0, 'Đi nước ngoài sang Shop thời trang hàng xách tay', 'Đi nước ngoài sang Shop thời trang hàng xách tay', 'Đi nước ngoài sang Shop thời trang hàng xách tay', 271, 'Đi nước ngoài sang Shop thời trang hàng xách tay', 'di-nuoc-ngoai-sang-shop-thoi-trang-hang-xach-tay', '', '', 1, '2017-02-21 07:35:14', '', 0, 0, 0, 20, '{}', 0),
('1487658914383', 0, 'Cần sang shop thời trang nằm ngay ngã 3 Tô Ngọc Vân-Lam Sơn, Thủ Đức.', 'Cần sang shop thời trang nằm ngay ngã 3 Tô Ngọc Vân-Lam Sơn, Thủ Đức.', 'Cần sang shop thời trang nằm ngay ngã 3 Tô Ngọc Vân-Lam Sơn, Thủ Đức.', 271, 'Cần sang shop thời trang nằm ngay ngã 3 Tô Ngọc Vân-Lam Sơn, Thủ Đức.', 'can-sang-shop-thoi-trang-nam-ngay-nga-3-to-ngoc-vanlam-son-thu-duc', '', '', 1, '2017-02-21 07:35:14', '', 0, 0, 0, 20, '{}', 0),
('1487659759181', 0, 'Sag spa mini Gần sân golf Tân Sơn Nhất, chợ Tân Sơn, Tân Phú', 'Sag spa mini Gần sân golf Tân Sơn Nhất, chợ Tân Sơn, Tân Phú', 'Sag spa mini Gần sân golf Tân Sơn Nhất, chợ Tân Sơn, Tân Phú', 272, 'Sag spa mini Gần sân golf Tân Sơn Nhất, chợ Tân Sơn, Tân Phú', 'sag-spa-mini-gan-san-golf-tan-son-nhat-cho-tan-son-tan-phu', '', '', 1, '2017-02-21 07:49:19', '', 0, 0, 0, 20, '{"Tinh":"32","Huyen":"33","DienThoai":"0123456789","NguoiLienHe":"Admin"}', 0),
('1487659759294', 0, 'Sang nhượng spa đẹp Quận Tân Bình', 'Sang nhượng spa đẹp Quận Tân Bình', 'Sang nhượng spa đẹp Quận Tân Bình', 272, 'Sang nhượng spa đẹp Quận Tân Bình', 'sang-nhuong-spa-dep-quan-tan-binh', '', '', 1, '2017-02-21 07:49:19', '', 0, 0, 0, 20, '{"Tinh":"32","Huyen":"33","DienThoai":"0123456789","NguoiLienHe":"Admin"}', 0),
('1487659759306', 0, 'Sang nhương lại spa tại 47 Thạch Thị Thanh, quận 1', 'Sang nhương lại spa tại 47 Thạch Thị Thanh, quận 1', 'Sang nhương lại spa tại 47 Thạch Thị Thanh, quận 1', 272, 'Sang nhương lại spa tại 47 Thạch Thị Thanh, quận 1', 'sang-nhuong-lai-spa-tai-47-thach-thi-thanh-quan-1', '', '', 1, '2017-02-21 07:49:19', '', 0, 0, 0, 20, '{"Tinh":"32","Huyen":"33","DienThoai":"0123456789","NguoiLienHe":"Admin"}', 0),
('1487659759330', 0, 'Cần sang tiệm Spa, ở mặt tiền 154, Nguyễn Công Trứ, Q1', 'Cần sang tiệm Spa, ở mặt tiền 154, Nguyễn Công Trứ, Q1', 'Cần sang tiệm Spa, ở mặt tiền 154, Nguyễn Công Trứ, Q1', 272, 'Cần sang tiệm Spa, ở mặt tiền 154, Nguyễn Công Trứ, Q1', 'can-sang-tiem-spa-o-mat-tien-154-nguyen-cong-tru-q1', '', '', 1, '2017-02-21 07:49:19', '', 0, 0, 0, 20, '{"Tinh":"32","Huyen":"33","DienThoai":"0123456789","NguoiLienHe":"Admin"}', 0),
('1487659759358', 0, 'Sang spa thâm mỹ viện trung tâm quận 1', 'Sang spa thâm mỹ viện trung tâm quận 1', 'Sang spa thâm mỹ viện trung tâm quận 1', 272, 'Sang spa thâm mỹ viện trung tâm quận 1', 'sang-spa-tham-my-vien-trung-tam-quan-1', '', '', 1, '2017-02-21 07:49:19', '', 0, 0, 0, 20, '{"Tinh":"32","Huyen":"33","DienThoai":"0123456789","NguoiLienHe":"Admin"}', 0),
('1487659759417', 0, 'Sang Spa 96 đường Trần Văn Kỷ, P.14, Q. Bình Thạnh.', 'Sang Spa 96 đường Trần Văn Kỷ, P.14, Q. Bình Thạnh.', 'Sang Spa 96 đường Trần Văn Kỷ, P.14, Q. Bình Thạnh.', 272, 'Sang Spa 96 đường Trần Văn Kỷ, P.14, Q. Bình Thạnh.', 'sang-spa-96-duong-tran-van-ky-p14-q-binh-thanh', '', '', 1, '2017-02-21 07:49:19', '', 0, 0, 0, 20, '{"Tinh":"32","Huyen":"33","DienThoai":"0123456789","NguoiLienHe":"Admin"}', 0),
('1487659759435', 0, 'Sang Spa chăm sóc da công nghệ cao 118/14 Trần Quang Diệu P.14, Q.3', 'Sang Spa chăm sóc da công nghệ cao 118/14 Trần Quang Diệu P.14, Q.3', 'Sang Spa chăm sóc da công nghệ cao 118/14 Trần Quang Diệu P.14, Q.3', 272, 'Sang Spa chăm sóc da công nghệ cao 118/14 Trần Quang Diệu P.14, Q.3', 'sang-spa-cham-soc-da-cong-nghe-cao-11814-tran-quang-dieu-p14-q3', '', '', 1, '2017-02-21 07:49:19', '', 0, 0, 0, 20, '{"Tinh":"32","Huyen":"33","DienThoai":"0123456789","NguoiLienHe":"Admin"}', 0),
('1487659759551', 0, 'Sang Spa-Tóc Nail mặt tiền 40 Quốc Hương, P.Thảo Điền, quận 2.', 'Sang Spa-Tóc Nail mặt tiền 40 Quốc Hương, P.Thảo Điền, quận 2.', 'Sang Spa-Tóc Nail mặt tiền 40 Quốc Hương, P.Thảo Điền, quận 2.', 272, 'Sang Spa-Tóc Nail mặt tiền 40 Quốc Hương, P.Thảo Điền, quận 2.', 'sang-spatoc-nail-mat-tien-40-quoc-huong-pthao-dien-quan-2', '', '', 1, '2017-02-21 07:49:19', '', 0, 0, 0, 20, '{"Tinh":"32","Huyen":"33","DienThoai":"0123456789","NguoiLienHe":"Admin"}', 0),
('1487659759569', 0, 'Sang Spa nhỏ đẹp đông khách đường Thích Quảng Đức', 'Sang Spa nhỏ đẹp đông khách đường Thích Quảng Đức', 'Sang Spa nhỏ đẹp đông khách đường Thích Quảng Đức', 272, 'Sang Spa nhỏ đẹp đông khách đường Thích Quảng Đức', 'sang-spa-nho-dep-dong-khach-duong-thich-quang-duc', '', '', 1, '2017-02-21 07:49:19', '', 0, 0, 0, 20, '{"Tinh":"32","Huyen":"33","DienThoai":"0123456789","NguoiLienHe":"Admin"}', 0),
('1487659759645', 0, 'Đi nước ngoài cần sang gấp Spa ở Võ Thị Sáu Quận 3', 'Đi nước ngoài cần sang gấp Spa ở Võ Thị Sáu Quận 3', 'Đi nước ngoài cần sang gấp Spa ở Võ Thị Sáu Quận 3', 272, 'Đi nước ngoài cần sang gấp Spa ở Võ Thị Sáu Quận 3', 'di-nuoc-ngoai-can-sang-gap-spa-o-vo-thi-sau-quan-3', '', '', 1, '2017-02-21 07:49:19', '', 0, 0, 0, 20, '{"Tinh":"32","Huyen":"33","DienThoai":"0123456789","NguoiLienHe":"Admin"}', 0),
('201701241485234399', 53, '', '', '', 259, 'Sang lại tổ hợp tiệm Xăm & Coffee, mặt tiền số 571 đường ', 'sang-lai-to-hop-tiem-xam-coffee-mat-tien-so-571-duong201701241485234399', '<h3><em>s as dasdas</em></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '<p>asdasdas</p>\r\n', 1, '2017-01-24 12:06:39', 'sanpham/nhadathanoi_3.20150525133347-f208.jpg', 0, 0, 0, 800, '{"ViTri":"3","PhongCach":"3","SoPhong":"5","Toilet":"5","GoiDangTin":"2","NguoiLienHe":"asdasdas","DienThoai":"23423421","ChieuNgang":"9","ChieuRong":"9","Tinh":"32","Huyen":"33"}', 0),
('201702151487117976', 53, '', '', '', 1, '', '', '', '', 0, '2017-02-15 07:19:36', '', 0, 0, 0, 0, '{}', 0),
('201702191487510842', 53, 'SANG GẤP QUÁN NHẬU 45 NGUYỄN VĂN LINH, P. TÂN THUẬN TÂY, QUẬN 7.', 'SANG GẤP QUÁN NHẬU 45 NGUYỄN VĂN LINH, P. TÂN THUẬN TÂY, QUẬN 7.', 'SANG GẤP QUÁN NHẬU 45 NGUYỄN VĂN LINH, P. TÂN THUẬN TÂY, QUẬN 7.', 260, 'Sang quán nhậu nguyển văn linh', 'sang-quan-nhau-nguyen-van-linh201702191487510842', '', '<p><a href="http://sangquan.com.vn/default/quan-an-nhau-oc-r3" style="margin: 0px; padding: 0px; font-family: sans-serif; font-size: 14px; text-decoration: none; text-align: justify;" target="_blank"><strong><span style="font-family:times new roman; font-size:18px">Sang Gấp Qu&aacute;n Nhậu mặt tiền số 45, đường Nguyễn Văn Linh, P. T&acirc;n Thuận T&acirc;y, Quận 7</span></strong></a><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:18px">- Diện t&iacute;ch sử dụng 200m2. C&oacute; ph&ograve;ng ngủ lại, khu bếp ri&ecirc;ng. Gi&aacute; thu&ecirc; rẻ: 7triệu/th&aacute;ng.</span><br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:18px">qu&aacute;n nằm mặt tiền đường Nguyễn Văn Linh, đối diện KCX T&acirc;n Thuận, đ&atilde; kinh doanh l&acirc;u năm, lượng kh&aacute;ch đ&ocirc;ng, ổn định.Sang to&agrave;n bộ: m&aacute;i che di động, tủ m&aacute;t,tủ đ&ocirc;ng,b&agrave;n ghế, thiết bị nấu đầy đủ... v&agrave;o kinh doanh ngay.</span><br />\r\n<br />\r\n<span style="color:rgb(254, 36, 25); font-family:times new roman; font-size:18px">Gi&aacute;&nbsp;<a href="http://sangquan.com.vn/default/quan-an-nhau-oc-r3" style="margin: 0px; padding: 0px; font-family: sans-serif; font-size: 14px; text-decoration: none;" target="_blank"><strong><span style="color:rgb(254, 36, 25)">sang qu&aacute;n nhậu</span></strong></a>&nbsp;:&nbsp;<span style="font-family:sans-serif; font-size:32px">80 triệu</span>&nbsp;(c&ograve;n thương lượng) - chua bao gồm 7triệu tiền cọc nh&agrave;</span><br />\r\n<br />\r\n<br />\r\n<span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:18px"><span style="font-family:sans-serif; font-size:24px">Li&ecirc;n hệ:&nbsp;</span><span style="font-family:sans-serif; font-size:24px"><a class="phonenumber" href="tel:0966588037" style="margin: 0px; padding: 0px; font-size: 20px; text-decoration: none;">0966588037</a></span><span style="font-family:sans-serif; font-size:24px">&nbsp;chị G</span>iang</span></p>\r\n', 1, '2017-02-19 02:27:22', '', 0, 0, 0, 80, '{"ViTri":"1","PhongCach":"1","SoPhong":"1","Toilet":"1","GoiDangTin":"1","DonVi":"1","NguoiLienHe":"Giang","DienThoai":"0966588037","ChieuNgang":"3","ChieuRong":"3","Tinh":"1","Huyen":"2"}', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sangnhanh_danhmuc`
--
ALTER TABLE `sangnhanh_danhmuc`
  ADD PRIMARY KEY (`MaDanhMuc`),
  ADD UNIQUE KEY `TenKhongDau` (`TenKhongDau`);

--
-- Indexes for table `sangnhanh_sanpham`
--
ALTER TABLE `sangnhanh_sanpham`
  ADD PRIMARY KEY (`IdTin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sangnhanh_danhmuc`
--
ALTER TABLE `sangnhanh_danhmuc`
  MODIFY `MaDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
