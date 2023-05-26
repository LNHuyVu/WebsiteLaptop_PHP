-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 04, 2022 lúc 01:56 PM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lenguyenhuyvuppp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lnhv_category`
--

CREATE TABLE `lnhv_category` (
  `id` int(11) NOT NULL COMMENT 'Mã Loại',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên loại SP',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'SLug Loại SP',
  `parentid` int(11) UNSIGNED DEFAULT '0' COMMENT 'Mã cấp cha',
  `orders` int(11) DEFAULT NULL COMMENT 'Thứ tự',
  `metakey` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Từ khóa SEO',
  `metadesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mô tả SEO',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  `created_by` tinyint(4) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Người tạo',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày sửa',
  `updated_by` tinyint(4) UNSIGNED DEFAULT '0' COMMENT 'Người sửa',
  `status` tinyint(4) UNSIGNED NOT NULL DEFAULT '2' COMMENT 'Trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lnhv_category`
--

INSERT INTO `lnhv_category` (`id`, `name`, `slug`, `parentid`, `orders`, `metakey`, `metadesc`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(4, 'Laptop', 'laptop', 21, NULL, 'Laptop', 'Laptop', '2022-04-09 03:15:37', 1, '2022-04-09 03:15:37', 0, 1),
(5, 'Laptop MSI', 'laptop-msi', 4, 1, 'Loptop MSI', 'Loptop MSI', '2022-04-09 03:18:54', 0, '2022-04-09 03:18:54', 0, 1),
(7, 'Laptop DELL', 'laptop-dell', 4, 1, 'Laptop DELL', 'Laptop DELL', '2022-04-09 03:19:54', 1, '2022-04-09 03:19:54', 0, 1),
(8, 'Laptop Lenovo', 'laptop-lenovo', 4, 1, 'Laptop Lenovo', 'Laptop Lenovo', '2022-04-09 03:21:19', 1, '2022-04-09 03:21:19', 0, 1),
(9, 'Laptop Acer', 'laptop-acer', 4, 1, 'Laptop Acer', 'Laptop Acer', '2022-04-09 03:21:44', 1, '2022-04-09 03:21:44', 0, 1),
(10, 'Laptop HP', 'laptop-hp', 4, 1, 'Laptop HP', 'Laptop HP', '2022-04-09 03:22:26', 1, '2022-04-09 03:22:26', 0, 1),
(11, 'Laptop Asus', 'laptop-asus', 4, 1, 'Laptop Asus', 'Laptop Asus', '2022-04-09 03:22:56', 1, '2022-04-09 03:22:56', 0, 1),
(12, 'Loa vi tính', 'loa-vi-tinh', 14, 2, 'Loa vi tính', ' Loa vi tính', '2022-04-09 03:25:48', 0, '2022-04-09 03:29:27', 1, 1),
(14, 'Phụ kiện cao cấp', 'phu-kien-cao-cap', 21, 3, 'Phụ kiện', ' Phụ kiện', '2022-04-09 03:28:57', 0, '2022-05-17 02:36:07', 31, 1),
(15, 'Tai nghe', 'tai-nghe', 14, 2, 'Phụ kiện', 'Phụ kiện', '2022-04-09 03:30:11', 1, '2022-04-09 03:30:11', 0, 1),
(16, 'USB', 'usb', 14, 2, 'Phụ kiện', 'Phụ kiện', '2022-04-09 03:30:32', 1, '2022-04-09 03:30:32', 0, 1),
(17, 'Chuột Laptop', 'chuot-laptop', 14, 2, 'Chuột Laptop', 'Chuột Laptop', '2022-04-09 03:31:14', 1, '2022-04-09 03:31:14', 0, 1),
(18, 'Tấm lót chuột', 'tam-lot-chuot', 14, 2, 'Tấm lót chuột', 'Tấm lót chuột', '2022-04-09 03:31:40', 1, '2022-04-09 03:31:40', 0, 1),
(19, 'Bàn phím', 'ban-phim', 14, 2, 'Bàn phím', 'Bàn phím', '2022-04-09 03:32:12', 1, '2022-04-12 11:01:35', 31, 1),
(20, 'Ổ cứng', 'o-cung', 14, 2, 'Ổ cứng', 'Ổ cứng', '2022-04-09 03:32:40', 1, '2022-04-12 11:02:12', 31, 1),
(21, 'Sản phẩm', 'san-pham', 0, 2, 'Sản phẩm', 'Sản phẩm', '2022-05-17 02:35:35', 31, '2022-05-17 02:35:35', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lnhv_contact`
--

CREATE TABLE `lnhv_contact` (
  `id` int(11) NOT NULL COMMENT 'Mã liên hệ',
  `userid` int(10) UNSIGNED DEFAULT '0',
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Họ và tên',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Email',
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Điện thoại',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tiêu đề',
  `detail` mediumtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Chi tiết',
  `replyid` int(10) UNSIGNED DEFAULT NULL,
  `replydetail` text COLLATE utf8_unicode_ci COMMENT 'Nội dung liên hệ',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày liên hệ',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày trả lời',
  `updated_by` tinyint(4) UNSIGNED DEFAULT '0' COMMENT 'Người trả lời',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'Tráng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lnhv_contact`
--

INSERT INTO `lnhv_contact` (`id`, `userid`, `fullname`, `email`, `phone`, `title`, `detail`, `replyid`, `replydetail`, `created_at`, `updated_at`, `updated_by`, `status`) VALUES
(18, 0, 'Lê Văn B', 'levanb@gmail.com', '11111', 'Hỏi nhưng không mua', 'Tôi đã hỏi rất nhiều', 0, 'Nhân viên không muốn trả lời', '2022-05-22 03:01:24', '2022-05-22 10:04:18', 1, 1),
(19, 0, 'Lê Văn C', 'levanc@gmail.com', '2222', 'Thời gian sale laptop', 'How long until the promotion', 0, '', '2022-05-22 03:06:46', '2022-05-22 10:06:46', 0, 1),
(20, 37, 'khachhang', 'khachhang@gmail.com', '1234124', 'Thắc mắc chip intel core i5 1135g7', 'Chi tiết về chip core i5 1135G7', 0, '', '2022-05-22 03:09:38', '2022-05-22 10:09:38', 0, 1),
(21, 30, 'hihi', 'hihi@gmail.com', '111111', 'hihi', 'hihi', 0, '                           hihi     ', '2022-05-28 23:10:47', '2022-05-29 06:13:00', 1, 1),
(22, 30, 'new', 'new', 'new', 'new', 'new', 0, '', '2022-05-30 07:53:44', '2022-05-30 14:55:38', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lnhv_menu`
--

CREATE TABLE `lnhv_menu` (
  `id` int(11) NOT NULL COMMENT 'Mã Menu',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên Menu',
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Liên kết',
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Kiểu Menu',
  `tableid` int(11) UNSIGNED DEFAULT '0' COMMENT 'Mã trong bảng',
  `orders` int(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Thứ tự',
  `position` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Vị trí',
  `parentid` int(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Mã cấp cha',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày Tạo',
  `created_by` tinyint(4) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'Người tạo',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày sửa',
  `updated_by` tinyint(4) UNSIGNED DEFAULT '1' COMMENT 'Người sửa',
  `status` tinyint(4) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'Trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lnhv_menu`
--

INSERT INTO `lnhv_menu` (`id`, `name`, `link`, `type`, `tableid`, `orders`, `position`, `parentid`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(1, 'Trang chủ', 'index.php', 'custom', 1, 0, 'mainmenu', 0, '2020-06-30 15:36:22', 1, '2020-06-30 15:36:22', 1, 1),
(2, 'Thông tin', 'index.php?option=page', 'post', 1, 1, 'mainmenu', 0, '2020-06-30 15:36:22', 1, '2022-05-17 03:54:58', 1, 1),
(3, 'Sản phẩm', 'index.php?option=product', 'custom', 1, 0, 'mainmenu', 0, '2020-06-30 15:36:22', 1, '2020-06-30 15:36:22', 1, 1),
(4, 'Laptop MSI', 'index.php?option=product&cat=laptop-msi', 'category', 2, 0, 'mainmenu', 3, '2020-06-30 15:36:22', 1, '2022-05-23 14:26:19', 1, 1),
(5, 'Laptop Acer', 'index.php?option=product&cat=laptop-acer', 'page', 1, 1, 'mainmenu', 3, '2020-06-30 15:36:22', 1, '2022-05-23 14:34:10', 1, 1),
(6, 'Laptop DELL', 'index.php?option=product&cat=laptop-dell', 'category', 1, 1, 'mainmenu', 3, '2020-06-30 15:36:22', 1, '2022-05-23 14:33:54', 1, 1),
(8, 'Bài viết', 'index.php?option=post', 'topic', 1, 0, 'mainmenu', 0, '2020-06-30 15:36:22', 1, '2020-06-30 15:36:22', 1, 1),
(9, 'Liên hệ', 'index.php?option=contact', 'custom', 1, 0, 'mainmenu', 0, '2020-06-30 15:36:22', 1, '2020-06-30 15:36:22', 1, 1),
(10, 'Tất cả sản phẩm', 'index.php?option=product&cat=san-pham', 'category', 1, 1, 'mainmenu', 3, '2022-04-19 14:02:05', 1, '2022-05-24 06:15:53', 1, 1),
(11, 'Laptop Lenovo', '	index.php?option=product&cat=laptop-lenovo', 'category', 1, 1, 'mainmenu', 3, '2022-05-10 07:52:33', 1, '2022-05-23 14:26:21', 1, 1),
(13, 'Phụ kiện cao cấp', 'index.php?option=product&cat=phu-kien-cao-cap', 'category', 1, 1, 'mainmenu', 3, '2022-05-10 08:09:28', 1, '2022-05-27 10:21:34', 1, 1),
(14, 'Tất cả bài viết', 'index.php?option=post&cat=tat-ca-bai-viet', 'topic', 1, 1, 'mainmenu', 8, '2022-05-16 15:55:29', 1, '2022-05-24 06:24:21', 1, 1),
(16, 'Khuyến mãi', 'index.php?option=post&cat=khuyen-mai', 'topic', 1, 1, 'mainmenu', 8, '2022-05-16 16:01:01', 1, '2022-05-16 16:01:01', 1, 1),
(17, 'Giới thiệu', 'index.php?option=page&cat=gioi-thieu', 'custom', 1, 1, 'mainmenu', 2, '2022-05-17 03:55:30', 1, '2022-05-23 14:32:52', 1, 1),
(18, 'Chính sách mua hàng', 'index.php?option=page&cat=chinh-sach-mua-hang', 'page', 1, 1, 'mainmenu', 2, '2022-05-17 03:56:37', 1, '2022-05-23 14:34:25', 1, 1),
(19, 'Chính sách bảo hành', 'index.php?option=page&cat=chinh-sach-bao-hanh', 'page', 1, 1, 'mainmenu', 2, '2022-05-17 03:57:35', 1, '2022-05-23 14:32:43', 1, 1),
(20, 'Chính sách vận chuyển ', 'index.php?option=page&cat=chinh-sach-van-chuyen', 'page', 1, 1, 'mainmenu', 2, '2022-05-17 03:58:14', 1, '2022-05-23 14:32:37', 1, 1),
(25, 'Laptop Asus', 'index.php?option=product&cat=laptop-asus', 'category', 11, 1, 'mainmenu', 3, '2022-06-03 16:01:29', 1, '2022-06-03 16:01:31', 1, 1),
(29, 'Bài viết ', 'index.php?option=post&cat=bai-viet', 'category', 1, 1, 'mainmenu', 8, '2022-06-03 16:10:13', 1, '2022-06-03 16:10:15', 1, 1),
(30, 'Chính sách đổi trả', 'index.php?option=page&cat=chinh-sach-doi-tra', 'page', 57, 1, 'mainmenu', 2, '2022-06-03 16:15:40', 1, '2022-06-03 16:15:43', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lnhv_order`
--

CREATE TABLE `lnhv_order` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Mã đơn hàng',
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Code đơn hàng',
  `userid` int(11) NOT NULL COMMENT 'Mã khách hàng',
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  `exportdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày xuất',
  `deliveryaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Địa chỉ người nhận',
  `deliveryname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên người nhận',
  `deliveryphone` varchar(120) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Điện thoại người nhận',
  `deliveryemail` varchar(120) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Email ngươig nhận',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày cập nhật',
  `updated_by` tinyint(3) UNSIGNED DEFAULT NULL COMMENT 'Người cập nhật',
  `status` tinyint(3) UNSIGNED NOT NULL COMMENT 'Trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lnhv_order`
--

INSERT INTO `lnhv_order` (`id`, `code`, `userid`, `createdate`, `exportdate`, `deliveryaddress`, `deliveryname`, `deliveryphone`, `deliveryemail`, `updated_at`, `updated_by`, `status`) VALUES
(1, '20200107121211', 1, '2020-06-30 17:00:00', '2020-07-03 17:00:00', 'HCM', 'Nguyễn Văn A', '0987654321', 'loi@gmail.com', '2022-06-03 01:43:49', 1, 1),
(2, '20200107121216', 1, '2020-06-30 17:00:00', '2020-07-03 17:00:00', 'Bình Dương', 'Hoàng Văn C', '0987654321', 'toan@gmail.com', '2022-04-22 16:08:42', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lnhv_orderdetail`
--

CREATE TABLE `lnhv_orderdetail` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Mã CT Đơn hàng',
  `orderid` int(10) UNSIGNED NOT NULL COMMENT 'Mã đơn hàng',
  `productid` int(10) UNSIGNED NOT NULL COMMENT 'Mã sản phẩm',
  `price` float(12,2) UNSIGNED NOT NULL COMMENT 'Giá sản phẩm',
  `quantity` int(10) UNSIGNED NOT NULL COMMENT 'Số lượng',
  `amount` float(12,2) UNSIGNED NOT NULL COMMENT 'Thành tiền'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lnhv_orderdetail`
--

INSERT INTO `lnhv_orderdetail` (`id`, `orderid`, `productid`, `price`, `quantity`, `amount`) VALUES
(1, 1, 23, 250000.00, 2, 500000.00),
(2, 1, 25, 250000.00, 3, 750000.00),
(3, 2, 33, 250000.00, 2, 500000.00),
(4, 2, 43, 250000.00, 3, 750000.00),
(5, 3, 34, 250000.00, 2, 500000.00),
(7, 3, 34, 250000.00, 2, 500000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lnhv_post`
--

CREATE TABLE `lnhv_post` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Mã bài viết',
  `topid` int(10) UNSIGNED DEFAULT NULL COMMENT 'Mã chủ đề',
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tiêu đề bài viết',
  `slug` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Slug tiêu đề',
  `detail` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Chi tiết bài viết',
  `img` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Hình ảnh',
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'post' COMMENT 'Kiểu bài viết',
  `metakey` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Từ khóa SEO',
  `metadesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mô tả SEO',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  `created_by` tinyint(4) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'Người tạo',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày sửa',
  `updated_by` tinyint(4) UNSIGNED DEFAULT '1' COMMENT 'Người sửa',
  `status` tinyint(4) UNSIGNED NOT NULL DEFAULT '2' COMMENT 'Trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lnhv_post`
--

INSERT INTO `lnhv_post` (`id`, `topid`, `title`, `slug`, `detail`, `img`, `type`, `metakey`, `metadesc`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(28, 1, 'Đánh gia Laptop Asus TUF Gaming 2022, chip intel 12', 'danh-gia-laptop-asus-tuf-gaming-2022-chip-intel-12', 'Đánh gia Laptop Asus TUF Gaming 2022, chip intel 12', 'danh-gia-laptop-asus-tuf-.jpg', 'post', 'Đánh gia Laptop Asus TUF Gaming 2022, chip intel 12', 'Đánh gia Laptop Asus TUF Gaming 2022, chip intel 12', '2022-04-09 07:39:44', 1, '2022-04-09 08:09:43', 1, 1),
(29, 1, 'So sánh chip intel core i7 12th và core i7 11th, điểm khác nhau', 'so-sanh-chip-intel-core-i7-12th-va-core-i7-11th-diem-khac-nhau', '1. Đôi nét về chip Intel core i7 12th', 'so-sanh-chip-intel.jpg', 'post', 'So sánh chip intel core i7 12th và core i7 11th, điểm khác nhau', 'So sánh chip intel core i7 12th và core i7 11th, điểm khác nhau', '2022-04-09 07:47:36', 1, '2022-05-13 04:24:29', 31, 1),
(30, 1, 'Chip Intel thế hệ 12 Alder Lake trên Laptop và những cải tiến đáng giá', 'chip-intel-the-he-12-alder-lake-tren-laptop-va-nhung-cai-tien-dang-gia', '1. Đôi nét về chip Intel core i7 12th\r\n<br>\r\nChip Intel thế hệ thứ 12 Alder Lake dành cho laptop đã được ra mắt tại Triển lãm Điện tử tiêu dùng. Vi xử lý thế hệ 12 Alder Lake là phiên bản được tối ưu lại kích thước và tính năng để phù hợp với kích thước của laptop.\r\n<br>\r\nHơn nữa, chip CPU Intel có khả năng tiết kiệm điện năng, giảm lượng tiêu thụ lên đến 50%, nhưng vẫn đảm bảo hiệu suất hoạt động.\r\n<br>\r\nMột số dòng chip Intel core i7 12th nổi bật như Bộ xử lý Intel® Core™ i7-1265UE, Bộ xử lý Intel® Core™ i7-1270PE, Bộ xử lý Intel® Core™ i7-1250U,...\r\n<br>\r\n2. Đôi nét về chip Intel core i7 11th\r\n<br>\r\nVào đầu năm 2021, thương hiệu CPU hàng đầu thế giới – Intel cũng chính thức ra mắt thế hệ CPU thứ 11 với 2 phiên bản: Tiger Lake – S cho laptop và Rocket Lake – S cho PC (Core I3 vẫn là Comet Lake). Sau khi ra mắt, rất nhiều cá nhân và tổ chức khác nhau trên nhiều quốc gia đã tiến hành thử nghiệm dòng CPU mới nhất này.\r\n<br>\r\nCon chip này sở hữu lõi Willow Cove, bao gồm các mẫu lõi tứ và lõi kép, card đồ họa Intel Iris Xe LP, chơi game 1080p nhanh hơn gấp 2 lần với công nghệ tiến trình 10nm SuperFin giúp tăng đến 20% tần số xung nhịp.\r\n<br>\r\nMột số dòng chip Intel core i7 12th nổi bật như Bộ xử lý Intel® Core™ i7-11850HE, Bộ xử lý Intel® Core™ i7-11600H, Bộ xử lý Intel® Core™ i7-11390H,...\r\n<br>\r\n3. So sánh chip Intel core i7 12th và core i7 11th\r\n<br>\r\nVì chip core i7 12th và 11th có rất nhiều dòng chip khác nhau các dòng chip khác nhau chủ yếu sẽ thay đổi về mặt hiệu năng, trong bài viết sẽ chỉ so sánh hai đòng chip core i7-12700 và core i7-11700.\r\n<br>\r\nThông số kỹ thuật<br>\r\nChip Intel core i7-12700 là chip CPU Intel thế hệ 12 sở hữu 16 lõi với tốc độ CPU là 1.8 GHz, tốc độ xung nhịp tăng 4.0 GHz và có thể đạt đến 5.0 GHz, còn Intel thế hệ 11 chỉ có 8 nhân. Nhờ sử dụng quy trình Intel 7 10nm Enhanced SuperFin và các nhân tiết kiệm được trang bị (Efficient-cores) sẽ hoạt động khi máy tính không xử lý các tác vụ nặng ở mức xung khoảng 1 GHz, giúp laptop tiết kiệm pin tốt hơn các thế hệ trước.\r\n<br>\r\nChip Intel core i7-11700 được tích hợp nhân đồ họa Iris Xe giúp cho hiệu năng xử lý đồ họa của laptop được tăng lên đáng kể gấp 2.7 lần so với các thế hệ trước và 2 lần khi đang chơi game. Con chip này còn hỗ trợ xuất ra màn hình 8K HDR. Bộ xử lý Intel Core thế hệ 11 có xung nhịp đồ họa tối đa là 1.35 GHz cùng với khả năng Turbo boost lên đến 4.8 GHz.\r\n<br>\r\nThông số bộ nhớ\r\n<br>\r\nCả 2 loại chip đều hỗ trợ dung lượng bộ nhớ cho phép của máy tính tối đa là 128 GB. Bạn lưu ý dung lượng bộ nhớ đề cập ở đây là dung lượng RAM, không phải dung lượng bộ nhớ ổ cứng lưu trữ.\r\n<br>\r\nCác loại chip Intel Core i7 12th và Intel Core i7 11th hỗ trợ tối đa 2 kênh cắm RAM. Chip Intel core i7-11700 tương thích với RAM công nghệ DDR4, còn chip Intel core i7-12700 tương thích với RAM công nghệ DDR4 và DDR5.\r\n<br>\r\nĐồ họa bộ xử lý<br>\r\nVới bộ vi xử lý PC thế hệ thứ 11 mới này, Intel sẽ tiếp tục cải thiện hiệu suất chơi game trên máy tính để bàn và mang đến cho game thủ trải nghiệm đắm chìm nhất có thể. Phiên bản unlocked thế hệ thứ 11 này cũng tương thích với RAM DDR4 3200MHz để chơi game mượt mà và đa nhiệm liền mạch.\r\n<br>\r\nCác công nghệ tiên tiến<br>\r\nVi xử lý Intel thế hệ 12 này được tích hợp công nghệ scheduling - Intel Thread Director vào phần cứng, giúp phân chia các nhân hiệu suất cao và nhân tiết kiệm năng lượng tùy theo khối lượng công việc vừa cho khả năng xử lý các công việc hiệu quả vừa tiết kiệm năng lượng, hạn chế laptop bị quá nhiệt.\r\n<br>\r\nBộ xử lý Intel Core thế hệ thứ 11 sử dụng hiệu suất thông minh dựa trên AI nâng cao để tăng tốc độ hoàn thành nhiệm vụ trong năng suất, sáng tạo và các ứng dụng khác. Đây là khẳng định từ chính Intel đưa khi so sánh với thế hệ 10. Bộ xử lý thế hệ 11 cũng có khả năng chạy tốt các ứng dụng nặng như: Đồ họa, phần mềm quản lý doanh nghiệp,...\r\n<br>\r\n4. So sánh chip Intel core i7 12th và core i7 11th<br>\r\nThông số kỹ thuật\r\n<br>\r\nSố lõi: 12\r\n<br>\r\nSố luồng: 20\r\n<br>\r\nTần số turbo tối đa: 4.90 GHz\r\n<br>\r\nBộ nhớ đệm: 25 MB Intel® Smart Cache\r\n<br>\r\nSố lõi: 8\r\n<br>\r\nSố luồng: 16\r\n<br>\r\nTần số turbo tối đa: 4.90 GHz\r\n<br>\r\nBộ nhớ đệm: 16 MB Intel® Smart Cache\r\n<br>\r\nThông số bộ nhớ\r\n<br>\r\nDung lượng bộ nhớ tối đa: 128 GB\r\n<br>\r\nCác loại bộ nhớ: Up to DDR5 4800 MT/s, up to DDR4 3200 MT/s\r\n<br>\r\nBăng thông bộ nhớ tối đa: 76.8 GB/s\r\n<br>\r\nHỗ trợ Bộ nhớ ECC: Có\r\n<br>\r\nDung lượng bộ nhớ tối đa: 128 GB\r\n<br>\r\nCác loại bộ nhớ: DDR4-3200\r\n<br>\r\nBăng thông bộ nhớ tối đa: 50 GB/s\r\n<br>\r\nHỗ trợ Bộ nhớ ECC: Không\r\n<br>\r\nĐồ họa bộ xử lý\r\n<br>\r\nĐồ họa bộ xử lý: Đồ họa UHD Intel® 770\r\n<br>\r\nTần số cơ sở đồ họa: 300 MHz\r\n<br>\r\nTần số động tối đa đồ họa: 1.50 GHz\r\n<br>\r\nĐồ họa bộ xử lý: Đồ họa Intel® UHD 750\r\n<br>\r\nTần số cơ sở đồ họa: 350 MHz\r\n<br>\r\nTần số động tối đa đồ họa: 1.30 GHz\r\n<br>\r\nCác công nghệ tiên tiến\r\n<br>\r\nIntel® Gaussian & Neural Accelerator: 3.0\r\n<br>\r\nIntel® Gaussian & Neural Accelerator: 2.0\r\n<br>\r\n5. Nên chọn mua chip Intel core i7 12th hay core i7 11th<br>\r\nĐây đều là hai dòng chip cao cấp của nhà Intel nên đều có hiệu suất vô cùng mạnh mẽ, tuy nhiên core i7 11th sẽ có giá thành mềm hơn một chút, nên nếu bạn có kinh tế vừa phải mà vẫn muốn có những tính năng tốt thì nên chọn chip core i7 11th.\r\n<br>\r\nCòn nếu bạn muốn đạt các hiệu năng tốt nhất khi giải trí, chơi game, đồ họa thì nên chọn core i7 12th, tất nhiên là giá sẽ cao hơn.\r\n<br>\r\nNên chọn mua chip intel core i7 12th hay core i7 11th', 'the-gioi-di-dong-tieu-chi-chon.jpg', 'post', 'Chip Intel thế hệ 12 Alder Lake trên Laptop và những cải tiến đáng giá', 'Chip Intel thế hệ 12 Alder Lake trên Laptop và những cải tiến đáng giá', '2022-04-09 07:49:04', 1, '2022-05-13 11:34:30', 31, 1),
(31, 4, 'Có gì hot tại khuyến mãi: Quà Chàng \"Deal\" Đứng - Tặng Nàng Liêu Xiêu', 'co-gi-hot-tai-khuyen-mai-qua-chang-deal-dung-tang-nang-lieu-xieu', 'Có gì hot tại khuyến mãi: Quà Chàng \"Deal\" Đứng - Tặng Nàng Liêu Xiêu', 'co-gi-hot-tai-khuyen-mai.jpg', 'post', 'Có gì hot tại khuyến mãi: Quà Chàng \"Deal\" Đứng - Tặng Nàng Liêu Xiêu', 'Có gì hot tại khuyến mãi: Quà Chàng \"Deal\" Đứng - Tặng Nàng Liêu Xiêu', '2022-04-09 07:53:22', 1, '2022-05-24 06:39:50', 1, 1),
(39, 1, 'Tiêu chí chọn mua laptop cho học sinh - Hãng nào là lựa chọn tốt nhất?', 'tieu-chi-chon-mua-laptop-cho-hoc-sinh-hang-nao-la-lua-chon-tot-nhat', '<h3>1. Vì sao học sinh nên sở hữu laptop</h3>\r\n<b>Học tập, tìm tài liệu</b>\r\n<br>\r\nNhững bạn học sinh, sinh viên đều muốn sở hữu cho mình một chiếc laptop với mục đích chính là để phục vụ cho các nhu cầu như: học tập, tìm kiếm tài liệu, soạn thảo văn bản, video,…\r\n<br>\r\nViệc trang bị cho học sinh một chiếc laptop đã trở thành một trong những điều cần thiết nhất, hơn nữa các em cũng có thể đem theo laptop đến quán cafe để học cũng rất bổ ích.\r\n<br>\r\n<b>Làm quen với việc sử dụng laptop</b>\r\n<br>\r\nNgoài các lý do về học tập, trang bị cho học sinh một chiếc laptop sẽ giúp các em làm quen với các giao diện và các công cụ để không phải bỡ ngỡ khi lên đại học, giúp các em tự tin không thua kém bạn bè. Đặc biệt, với những em có dự định học về công nghệ thông tin thì việc sở hữu cho mình một chiếc laptop là vô cùng cần thiết.\r\n<br>\r\n<b>Giải trí</b>\r\n<br>\r\nMột lý do cũng quan trọng tiếp theo là sau những giờ học tập mệt mỏi, căng thẳng, các em có thể sử dụng chiếc laptop của mình để giải trí, giúp cho tình thần luôn thoải mái và học có hiệu quả hơn.\r\n<br>\r\nCác bậc phụ huynh cũng có thể tận dụng chiếc laptop để phục vụ nhu cầu của mình khi các bạn học sinh không sử dụng. Thực chất cấp 3 kiến thức không nhiều đến nỗi khiến các em ở bên máy 24/24.\r\n<br>\r\n<h3>2. Tiêu chí chọn mua laptop cho học sinh</h3>\r\nĐể lựa chọn một chiếc laptop cho học sinh, mời bạn tham khảo các tiêu chí sau đây.\r\n<br>\r\n<b>Màn hình</b>\r\nMàn hình có thể nói là một trong những tiêu chí hàng đầu khi chọn mua laptop. Một chiếc laptop 14 inch trở lên sẽ cho trọng lượng trở nên vừa phải, nếu bạn chỉ đặt máy tại 1 chỗ để làm việc thì điều này không cần phải lưu ý, tuy nhiên với tính chất công việc thường xuyên mang máy đi làm, đi học hay đi công tác thì 14 inch trở lên sẽ là một sự ưu tiên trong lựa chọn của bạn.\r\n<br>\r\nBạn nên chọn lapptop 14 inch trở lên nhưng cũng đừng to quá vì màn hình laptop càng to thì càng nhiều tiền và máy càng cồng kềnh.\r\n<br>\r\n<b>RAM</b>\r\nLựa chọn khi mua laptop đi học, văn phòng là RAM. Với các tác vụ nhẹ nhàng, RAM là một trong những yếu tố ảnh hưởng nhiều nhất đến cảm nhận về độ mượt và tốc độ xử lý của laptop.\r\n<br>\r\nĐể đáp ứng nhu cầu công việc, văn phòng cơ bản, giải trí nhẹ, không cần đòi hỏi dung lượng RAM quá lớn, khoảng 4 GB là đủ, nhưng bạn nên chọn các dòng 8 GB RAM để sử dụng mượt mà hơn, giúp công việc đạt hiệu quả tối đa.\r\n<br>\r\nRAM 4GB: Đáp ứng được các phần mềm văn phòng, có thể mở cùng lúc đến 20 tab Chrome và sử dụng Photoshop đơn giản như cắt - ghép, chỉnh màu nhẹ nhàng.\r\n<br>\r\nRAM 8GB: Có thể chạy mượt mà và đầy đủ các chức năng của Photoshop, mở đến 30 - 40 tab Chrome và thích hợp để mở cùng lúc nhiều ứng dụng nhắn tin, duyệt web, Mail, Excel,...\r\n<br>\r\n<b>Ổ cứng</b>\r\nVới những nhu cầu dành cho học sinh và sinh viên, để đạt được tốc độ khởi động tốt nhất, bạn nên chọn ổ cứng SSD, do tốc độ của ổ cứng thể hiện ở thời gian bạn khởi động máy, khởi động phần mềm hoặc mở file trong máy.\r\n<br>\r\nNgoài ra với dung lượng lưu trữ của máy, để lưu các file nhiều dữ liệu, hình ảnh, file Photoshop, đồ họa,... bạn nên chọn máy có dung lượng khoảng 256GB trở lên để giúp cho việc lưu trữ dữ liệu của bạn có nhiều không gian hơn, tiện lợi và dễ dàng hơn.\r\n<br>\r\n<b>CPU</b>\r\nCPU Intel Pentium thông thường sẽ có 2 nhân xử lý (ở một số ít có 4 nhân) với xung nhịp dao động từ 1.1 GHz đến 3.5 GHz, có khả năng tương thích với rất nhiều board mạch chủ từ các hãng khác nhau, giúp người dùng xử lý hình ảnh, audio, video tối ưu nhất.\r\n<br>\r\nBạn cần chọn cho mình CPU tốt để đáp ứng các nhu cầu làm việc, học tập tùy theo các ngành nghề và mục đích sử dụng để chọn các dòng Core i3 trở lên:\r\n<br>\r\nCPU Core i3: Đáp ứng được hầu hết các tác vụ cơ bản, kể cả Photoshop hay AI...\r\n<br>\r\nCPU Core i5: Mạnh mẽ hơn có thể chạy được các phần mềm quản lý hệ thống ở công ty, các phần mềm học tập nặng nề một cách mượt mà trong 3 - 5 năm nữa.\r\n<br>\r\nCPU Core i7: Đáp ứng tối đa nhu cầu mọi người dùng văn phòng, học tập của các ngành nghề, tuy nhiên các dòng máy Core i7 luôn có giá thành cao hơn các dòng máy khác.\r\n<br>\r\n<b>Card đồ hoạ rời</b>\r\nNếu công việc văn phòng hoặc chuyên ngành học của bạn gắn liền với đồ họa, các phần mềm dựng phim, thiết kế hay phục vụ nhu cầu chơi game thì bạn nên cân nhắc chọn máy có card đồ họa rời.\r\n<br>\r\nĐa số các trò chơi phổ biến hiện nay như: Liên minh huyền thoại, CS:GO, FIFA Online,... có khả năng chạy được trên các dòng card MX của Nvidia. Ngoài ra, dòng card này cũng đảm bảo chạy ổn các ứng dụng cắt video như Premiere Pro, Corel Studio,...\r\n<br>\r\nĐể chơi được các game nặng như: PUBG PC, GTA V,... bạn nên nâng cấp lên card đồ họa GTX1050 trở lên hoặc mua các dòng laptop gaming để có trải nghiệm chơi game thoải mái hơn.\r\n<br>\r\n<b>Thiết kế</b>\r\nĐa số các nhân viên văn phòng hoặc sinh viên, học sinh sẽ mang theo laptop để đi học, đi làm hàng ngày và di chuyển thường xuyên. Do đó, bạn nên chọn các laptop nhẹ dưới 1.5kg để việc di chuyển được thoải mái nhất.\r\n<br>\r\nĐể dễ dàng bỏ vào balo bạn cũng nên lựa các mẫu máy có màn hình khoảng 14 inch trở lên. Nếu bạn muốn màn hình lớn khoảng 15 inch, bạn nên chọn laptop có viền màn hình siêu mỏng để thân máy vẫn gọn gàng hơn.\r\n<br>\r\n<b>Dung lượng pin</b>\r\nPin là một trong những tiêu chí quan trọng mà bạn không nên bỏ qua. Một chiếc máy có thời lượng sử dụng thực tế tầm 6 - 8 tiếng mà không cần sạc thì quá tuyệt vời. Nếu ngân sách của bạn hạn hẹp, hãy lựa mua một chiếc máy có thời lượng pin đủ dùng và phụ hợp với nhu cầu của bản thân.\r\n<br>\r\n<h3>3. Những lưu ý khi chọn mua laptop cho học sinh</h3>\r\nKhi chọn mua một chiếc laptop cho học sinh, một chiếc laptop có cấu hình thấp vẫn đủ phục vụ nhu cầu cơ bản khi học online không đòi hỏi một cấu hình quá cao và không cần thiết mua máy quá đắt tiền. Bạn nên chọn mua các sản phẩm ở các cửa hàng uy tín để mua giúp bạn có thể mua được một sản phẩm chính hãng.', 'the-gioi-di-dong-tieu-chi-chon.jpg', 'post', 'Tiêu chí chọn mua laptop cho học sinh - Hãng nào là lựa chọn tốt nhất?', 'Tiêu chí chọn mua laptop cho học sinh - Hãng nào là lựa chọn tốt nhất?', '2022-05-13 09:57:04', 31, '2022-05-13 10:30:46', 31, 1),
(40, 1, 'Cảnh báo dịch vụ Tận Tâm bị giả mạo - Thông tin chính thống mới nhất', 'canh-bao-dich-vu-tan-tam-bi-gia-mao-thong-tin-chinh-thong-moi-nhat', '<h3>1. Cảnh báo các website/dịch vụ giả mạo Tận Tâm - Thế Giới Di Động</h3>\r\nNhận được phản hồi từ phía khách hàng, trong thời gian gần đây Thế Giới Di Động phát hiện các trang web giả mạo Tận Tâm của Thế Giới Di Động làm ảnh hưởng đến uy tín, chất lượng của trang. Quý khách hàng cần cẩn trọng khi truy cập vào các trang web này để tránh tình trạng bị lừa đảo hoặc nhận được các dịch vụ kém chất lượng.\r\n<br>\r\nBên cạnh đó, Thế Giới Di Động sẽ liên tục cập nhật các hành vi, dịch vụ giả mạo khác và hướng dẫn cách phân biệt fanpage, số điện thoại, website, cửa hàng, trung tâm bảo hành chính thống của Thế Giới Di Động.\r\n<br>\r\n<h3>2. Thông tin chính thống của dịch vụ Tận Tâm - Thế Giới Di Động</h3>\r\n<b>Website chính thức dịch vụ Tận Tâm</b>\r\nHướng dẫn cách truy cập website\r\n<br>\r\n<b>Bước 1</b>: Search Google \"Dịch vụ Tận Tâm\".\r\n<br>\r\n<img src=\"public/image/posts/canh-bao-dich-vu-tan-tam-bi-gia-mao.jpg\" alt=\"\">\r\n<b>Bước 2</b>: Truy cập trang web chính thức: https://www.dichvutantam.com/.\r\n<img src=\"public/image/posts/canh-bao-dich-vu-tan-tam-bi-gia-mao-.jpg\" alt=\"\">\r\nGiao diện chính thức của web sẽ hiển thị như sau:\r\n<img src=\"public/image/posts/canh-bao-dich-vu-tan-tam-bi-gia-mao-1.jpg\" alt=\"\">\r\n<b>Tổng đài dịch vụ Tận Tâm</b>\r\nBạn có thể liên lạc tổng đài Tận Tâm qua hotline: 1800 1783 (8:00 - 21:00, Thứ 2 - CN) hoặc Email: cskh@dichvutantam.com.\r\n', 'canh-bao-dich-vu-tan-tam.jpg', 'post', 'Cảnh báo dịch vụ Tận Tâm bị giả mạo - Thông tin chính thống mới nhất', 'Cảnh báo dịch vụ Tận Tâm bị giả mạo - Thông tin chính thống mới nhất', '2022-05-13 10:39:10', 31, '2022-05-13 10:40:41', 31, 1),
(41, 1, 'Laptop GIGABYTE của nước nào? Có những dòng nào? Có đáng mua không?', 'laptop-gigabyte-cua-nuoc-nao-co-nhung-dong-nao-co-dang-mua-khong', '<h3>1. Laptop GIGABYTE của nước nào?</h3>\r\n<b>Tổng quan về thương hiệu</b>\r\nGIGABYTE được thành lập năm 1986 bởi Pei-Cheng Yeh, có trụ sở chính được đặt tại Đài Loan với slogan “Nâng cấp cuộc sống của bạn\". Bên cạnh đó, thương hiệu này cũng là nhà sản xuất và phân phối các thiết bị phần cứng của máy tính như bo mạch chủ, card đồ họa, tản nhiệt, vỏ máy tính,…\r\n<br>\r\n<img src=\"public/image/posts/laptop-gigabyte-cua-nuoc1.jpg\">\r\n<b>Thành tựu</b>\r\nBo mạch chủ dòng Z590 VISION được sản xuất dành cho người sáng tạo đã giúp GIGABYTE giành được giải thưởng Thiết kế Red Dot năm 2021. Hãng cũng đã phát triển bo mạch chủ đầu tiên với IC 60A IC từ International Rectifier từ năm 2012.\r\n<br>\r\nNăm 2010, thương hiệu này được xếp thứ 17 trong danh sách “20 thương hiệu toàn cầu hàng đầu Đài Loan” bởi hội đồng phát triển thương mại đối ngoại Đài Loan.\r\n<br>\r\n<h3>2. Các dòng sản phẩm laptop GIGABYTE</h3>\r\n<b>GIGABYTE AERO</b>\r\nDòng laptop GIGABYTE AERO được GIGABYTE sản xuất nhằm hướng đến đối tượng người dùng là các nhà sáng tạo nội dung hoặc thiết kế đồ họa chuyên nghiệp.\r\n<br>\r\nCác sản phẩm thuộc dòng này có thiết kế hiện đại, sang trọng kết hợp cùng sức mạnh hiệu năng vượt trội. Máy sẽ luôn được trang bị những thế hệ card đồ họa tiên tiến cùng màn hình chất lượng cao với công nghệ OLED và màn hình 4K cùng hiệu chuẩn màu kép mang lại độ tương phản cao, hình ảnh có chiều sâu, gam màu rộng.\r\n<img src=\"public/image/posts/laptop-gigabyte-cua-nuoc-nao-2.jpg\">\r\nDo là dòng laptop cao cấp nên giá thành của sản phẩm sẽ dao động từ 49 triệu đến 80 triệu đồng. Tuy vậy với những lợi thế về cấu hình phần cứng và chất lượng hiển thị mà sản phẩm mang lại chắc chắn sẽ khiến bạn cảm thấy hài lòng.\r\n<br>\r\n<b>GIGABYTE AORUS</b>\r\nDòng laptop GIGABYTE AORUS được GIGABYTE thiết kế nhằm hướng đến đối tượng người dùng là các game thủ chuyên nghiệp, thường xuyên chơi game hạng nặng, phân giải cao, cấu hình mạnh. Các sản phẩm thuộc dòng này sẽ mang phong cách thiết kế gaming, kết hợp cùng những đường cắt vát sắc xảo khiến máy trở nên cá tính hơn. Máy sở hữu hiệu năng đáng kinh ngạc khi luôn được trang bị những loại chip xử lý tiên tiến, phối hợp với GPU RTX 30 series cùng công nghệ Max-Q.\r\n<br>\r\nHệ thống tản nhiệt WINDFORCE Infinity độc quyền giúp máy ổn định nhiệt độ, giữ máy luôn ở trạng thái mát mẻ, gia tăng độ bền của máy.\r\n<br>\r\nNhìn chung, với dòng laptop gaming GIGABYTE AORUS, mức giá sản phẩm sẽ dao động trong khoảng từ 45 triệu đến 75 triệu đồng.\r\n<br>\r\n<b>GIGABYTE Gaming</b>\r\nDòng laptop GIGABYTE Gaming được GIGABYTE thiết kế nhằm hướng đến đối tượng người dùng là giới trẻ, năng động, sáng tạo. Các sản phẩm thuộc dòng này hướng tới sự cân bằng về khả năng làm việc - giải trí, đáp ứng tốt nhu cầu sử dụng của thế hệ trẻ.\r\n<br>\r\nCác sản phẩm thuộc dòng này có thiết kế khá giống dòng GIGABYTE AORUS nhưng được tinh chỉnh để có kiểu dáng gọn nhẹ hơn. Dòng sản phẩm này cũng được trang bị bộ cấu hình chip xử lý mạnh mẽ kết hợp card đồ họa rời và tần số quét 144 Hz.\r\n<br>\r\nMáy cũng sẽ được trang bị màn hình lớn từ 15.6 inch mang đến cho bạn không gian sử dụng rộng hơn. Bên cạnh đó, máy sử dụng pin rời do vậy khi hết pin bạn có thể thay một thanh pin khác mà không cần dây sạc rườm rà. GIGABYTE Gaming thuộc phân khúc tầm trung với mức giá từ 27 triệu đến 30 triệu đồng.\r\n<br>\r\n<h3>3. Có nên mua laptop GIGABYTE không?</h3>\r\n<b>Ưu điểm</b>\r\nGIGABYTE là thương hiệu uy tín, nổi tiếng toàn cầu với sản phẩm chất lượng tốt, độ bền cao. Các sản phẩm laptop GIGABYTE đều sở hữu cấu hình cao với chip xử lý đến từ các thương hiệu hàng đầu như Intel hay AMD, kết hợp cùng card đồ họa cao cấp từ NVIDIA mang lại cho laptop cấu hình vô cùng mạnh mẽ.\r\n<br>\r\nCác laptop của GIGABYTE sử dụng công nghệ màn hình như OLED, UHD,... mang lại chất lượng ảnh hiển thị mượt mà, sống động, có chiều sâu. Sản phẩm đa dạng có nhiều phân khúc, nhu cầu cho bạn lựa chọn.\r\n<img src=\"public/image/posts/laptop-gigabyte-cua-nuoc-nao-3.jpg\">\r\n<b>Nhược điểm</b>\r\nTrọng lượng laptop GIGABYTE khá nặng, khoảng từ 2 kg, không mỏng nhẹ như những laptop khác. Thiết kế cũng có phần đơn giản, không đột phá để hấp dẫn người dùng.\r\n<br>\r\nNgoài ra, do máy cung cấp cấu hình mạnh nên giá thành máy khá đắt so với các dòng laptop khác trong cùng phân khúc và hãng không có mức giá trong phân khúc phổ thông. Đặc biệt là dòng GIGABYTE Gaming được trang bị pin tháo rời có thể gây ra một số hạn chế cho bạn khi sử dụng.', 'laptop-gigabyte-cua-nuoc-nao.jpg', 'post', 'Laptop GIGABYTE của nước nào? Có những dòng nào? Có đáng mua không?', 'Laptop GIGABYTE của nước nào? Có những dòng nào? Có đáng mua không?', '2022-05-13 11:05:03', 31, '2022-05-13 11:05:03', 1, 1),
(42, 1, 'Sinh viên có nên mua laptop MSI không? Lý do bạn không nên bỏ lỡ', 'sinh-vien-co-nen-mua-laptop-msi-khong-ly-do-ban-khong-nen-bo-lo', '<h3>1. Tìm hiểu về thương hiệu MSI</h3>\r\nMSI là một thương hiệu laptop nổi tiếng về dòng máy gaming. Thành lập từ năm 1986, đến nay MSI đã có mặt trên hơn 120 quốc gia. Năm 2015, MSI nằm trong top 4 thương hiệu laptop chất lượng tốt nhất thế giới về chất lượng sản phẩm, thiết kế, dịch vụ hỗ trợ, phần mềm,...\r\n<br>\r\nMSI là thương hiệu laptop nắm toàn bộ quy trình sản xuất laptop từ việc thiết kế, sản xuất, linh kiện phần cứng và kiểm soát chất lượng đảm bảo.\r\n<br>\r\nVề phần cứng, MSI luôn sử dụng những công nghệ mới và mạnh mẽ nhất. MSI cũng không ngần ngại đầu tư cho người dùng màn hình tối ưu nhất từ Full HD đến cao cấp hơn như 4K hay chuẩn màu 100% Adobe RGB.\r\n<img src=\"public/image/posts/nen-chon-mau-laptop-msi1.jpg\" >\r\n<h3>2. Các dòng laptop MSI hiện nay</h3>\r\nLaptop MSI rất đa dạng kiểu dáng cũng như tính năng, ưu điểm. Sau đây là một số dòng laptop MSI:\r\n<br>\r\n- Laptop MSI GT Series: Đây là dòng laptop cao cấp chuyên về gaming và được xem là dòng laptop MSI chuyên đồ họa chuyên nghiệp vì sở hữu chip Intel.\r\n<br>\r\n- Laptop MSI GS Series: Dòng laptop này thuộc phân khúc máy tính có cấu hình mạnh, mỏng nhẹ dành cho doanh nhân.\r\n<br>\r\n- Laptop MSI GE Series: Dòng laptop tầm trung sở hữu chip Intel phù hợp cho mọi người đặc biệt là những người làm văn phòng cần độ ổn định và sử dụng lâu dài.\r\n<br>\r\n- Laptop MSI GP Series: Đây là dòng laptop gaming siêu mỏng với giá thành rẻ phù hợp cho những bạn đam mê chiến game trên laptop.\r\n<br>\r\n- Laptop GX series: Đây là dòng laptop có giá cạnh tranh với laptop Dell nổi tiếng về độ bền và các laptop HP với giá thành tốt, cấu hình cao.\r\n<img src=\"public/image/posts/tong-quan-cac-dong-laptop-msi2.jpg\" >\r\n<h3>3. Ưu điểm nổi bật của laptop MSI? Sinh viên có nên mua</h3>\r\nVới thiết kế gaming đậm chất hầm hố cùng vẻ ngoài mạnh mẽ, MSI chắc chắn là laptop khá cuốn hút trong mắt các game thủ với ngoại hình đầy gai góc của mình.\r\n<br>\r\nLaptop MSI có hiệu năng cao khi được trang bị card đồ họa rời, giúp máy không bị giật, lag khi chơi game. Thêm vào đó, với card đồ hoạ rời, MSI cũng có thể được sử dụng để thiết kế đồ họa hay sử dụng cho các kiến trúc sư.\r\n<br>\r\nThêm vào đó, laptop MSI được đánh giá là sở hữu pin rất “trâu” với thời gian sử dụng pin lên tới mười tiếng đồng hồ, hỗ trợ tản nhiệt tốt. Vì thế, bạn có thể thoải mái trải nghiệm các trò chơi mà không lo sập nguồn.\r\n<img src=\"public/image/posts/laptop-msi-cua-nuoc-nao-31.jpg\" >\r\nNếu bạn là sinh viên đang có nhu cầu mua laptop thì MSI là mẫu máy bạn nên cân nhắc lựa chọn. Sở hữu những thế mạnh như thiết kế đẹp mắt, cấu hình tuyệt vời, độ bền cao, cùng bảo hành tốt giúp cho laptop MSI luôn được ưa chuộng ở hiện nay và trong tương lai.\r\n<br>\r\nSự lựa chọn đa dạng cũng là điểm giúp cho bạn dễ tìm ra sản phẩm laptop MSI đáp ứng trọn thao tác dùng máy của bạn, dù là nhu cầu học tập, hoặc làm việc hay thậm chí là giải trí.\r\n<h3>4. Giá của laptop MSI là bao nhiêu? Mua ở đâu uy tín</h3>\r\nGiá của laptop MSI\r\n<br>\r\nLaptop MSI có giá dao động từ 13.000.000 triệu đến khoảng 80.000.000 triệu.\r\n<br>\r\nNơi mua laptop MSI uy tín\r\n<br>\r\nThế Giới Di Động là nơi tập hợp các thương hiệu uy tín, chất lượng, cung cấp các sản phẩm laptop với nhiều mẫu mã đa dạng, nhiều phân khúc dành cho mọi đối tượng.Khi mua laptop bạn có thể mua online và trực tiếp đều được nha.', 'nen-chon-mau-laptop-msi.jpg', 'post', 'Sinh viên có nên mua laptop MSI không? Lý do bạn không nên bỏ lỡ', 'Sinh viên có nên mua laptop MSI không? Lý do bạn không nên bỏ lỡ', '2022-05-13 11:14:54', 31, '2022-05-13 11:14:54', 1, 1),
(43, 1, 'Tìm hiểu công nghệ âm thanh HP Audio Boost và công dụng của nó mang lại', 'tim-hieu-cong-nghe-am-thanh-hp-audio-boost-va-cong-dung-cua-no-mang-lai', '<h3>1. Công nghệ âm thanh HP Audio Boost là gì?</h3>\r\nHP Audio Boost là công nghệ tăng cường âm thanh được HP trang bị trên phần lớn các dòng Laptop của hãng, mang đến chất lượng âm thanh to rõ bằng cách khuếch đại cường độ âm hơn mức bình thường nhưng vẫn đảm bảo được độ chân thực vốn có.\r\n<br>\r\n<h3>2. HP Audio Boost giúp ích cho người dùng như thế nào?</h3>\r\nHP Audio Boost là một trong những giải pháp khá cần thiết, khi xung quanh nơi bạn đang làm việc có tiếng ồn khiến bạn không thể nghe được âm thanh từ thiết bị. Bằng cách khuếch đại âm thanh nhằm lấn át các tạp âm từ bên ngoài để âm thanh đến tai người dung được to rõ hơn. Ngoài ra, đây cũng là một giải pháp khiến cho những bộ phim hay bài nhạc bạn đang thưởng thức trở nên sống động hơn bao giờ hết.\r\n<img src=\"public/image/posts/tim-hieu-cong-nghe-am-thanh-hp-audio-boost3.jpg\">\r\n<h3>3. Cải thiện chất lượng âm thanh</h3>\r\nBên cạnh việc khuếch đại âm thanh trên thiết bị, HP Audio Boost còn được tích hợp các phần mềm khử tiếng ồn hai chiều bằng cách thu những tạp âm xung quanh thiết bị hay cung cấp âm trầm sâu, tái tạo tần số âm thanh thấp hơn so với các hệ thống truyền thống để mang đến âm thanh chân thực và phong phú hơn đến tai người dùng thiết bị.\r\n', 'hp-audio-boot.jpg', 'post', 'Tìm hiểu công nghệ âm thanh HP Audio Boost', 'Tìm hiểu công nghệ âm thanh HP Audio Boost', '2022-05-13 11:31:55', 31, '2022-05-13 15:33:21', 31, 1),
(44, 1, 'Tiêu chí chọn mua laptop làm đồ họa 2D tốt nhất cho dân thiết kế', 'tieu-chi-chon-mua-laptop-lam-do-hoa-2d-tot-nhat-cho-dan-thiet-ke', '<h3>1. Thiết kế đồ họa 2D là gì?</h3>\r\nThiết kế là lĩnh vực góp phần chính tạo nên những sản phẩm thân thuộc, gần gũi với chúng ta như ấn phẩm quảng cáo: Poster, Standee, Namecard, tờ rơi,.. hay những bộ nhận dạng thương hiệu: Logo, bao bì, đồng phục nhân viên,... Hoặc đó có thể là thiết kế sách, báo, tạp chí.\r\n<img src=\"public/image/posts/tieu-chi-chon1.jpg\">\r\n<h3>2. Vì sao nên chọn laptop phù hợp cho đồ họa 2D</h3>\r\nLaptop 2D giúp bạn học tập và làm việc, hỗ trợ trong việc thiết kế đồ họa, xử lý video mượt mà. Việc chọn đúng máy có cấu hình phù hợp với nhu cầu giúp bạn tiết kiệm được chi phí, đạt hiệu quả trong công việc cao hơn.\r\n<br>\r\n<h3>3. Tiêu chí chọn mua laptop làm đồ họa 2D</h3>\r\nViệc mua laptop làm đồ họa 2D cần phải đáp ứng những tiêu chí sau:\r\n<br>\r\nMàn hình rộng lớn, chuẩn màu\r\n<br>\r\nVới những nhà thiết kế đồ họa 2D, yếu tố đầu tiên quyết định đến hình ảnh hiển thị chính là độ phân giải của màn hình. Với thiết kế đồ họa 2D, nhà thiết kế nên lựa chọn màn hình có độ phân giải tối thiểu là Full HD (1920 × 1080) cho phép hiển thị 2 triệu điểm ảnh. Bên cạnh đó, mật độ pixel càng lớn thì hình ảnh hiển thị sẽ sắc nét và chân thật hơn.\r\n<br>\r\nNgười dùng có thể trang bị những laptop có màn hình 2K hoặc 4K để trải nghiệm hình ảnh tốt hơn trong quá trình làm việc.\r\n<br>\r\nNếu chọn laptop có độ phân giải lớn hơn tương đương với việc người dùng phải chấp nhận những mẫu máy to và cồng kềnh hơn.\r\n<br>\r\nNgoài ra, người dùng cũng nên quan tâm đến độ rộng của dải màu. Hiện có 3 chuẩn màu phổ biến là Adobe RGB, sRGB và DCI-P3. Với những công việc yêu cầu độ chính xác màu tuyệt đối như làm phim, nội thất, thời trang… chuẩn màu DCI-P3 là điều người dùng cần.\r\n<br>\r\n<img src=\"public/image/posts/tieu-chi-chon-mua-laptop-lam-do-hoa.jpg\">\r\n<b>Dung lượng chạy đa nhiệm RAM từ 8GB</b>\r\nKhi mua laptop đồ họa 2D cho dân thiết kế, việc cân nhắc lựa chọn RAM tối thiểu 8GB và cho phép nâng cấp lên dung lượng lớn hơn là điều vô cùng quan trọng, đảm bảo khả năng mở nhiều cửa sổ làm việc mà không xảy ra hiện tượng giật lag.\r\n<br>\r\n<b>Khả năng tản nhiệt hoạt động tốt</b>\r\nMáy quá nóng sẽ nhanh hỏng hóc và ảnh hưởng đến công việc thiết kế. Do đó, bạn nên chọn những chiếc laptop có khả năng tản nhiệt tốt.\r\n<br>\r\n<b>Hỗ trợ card đồ họa rời</b>\r\nMột tiêu chí khác cũng quan trọng không kém là card đồ hoạ rời bởi nó sẽ đem lại hiệu năng xử lý hình ảnh và đồ họa rất tốt.\r\n<br>\r\nNếu bạn học tập thiết kế, dựng hình 2D, Photoshop thì các card tích hợp hay những card rời như NVIDIA MX130, NVIDIA MX250,... đã có thể đáp ứng tốt cho việc học của bạn.\r\n<br>\r\n<b>Cổng kết nối đa dạng</b>\r\nMột yếu tố nữa mà bạn cũng cần chú ý đến là cổng kết nối. Một chiếc laptop có đầy đủ các cổng kết nối như Thunderbolt 4 USB-C, USB, HDMI, Jack tai nghe sẽ giúp bạn chuyển đổi dữ liệu và kết nối nhanh chóng, thuận tiện hơn cho việc trình chiếu, thuyết trình những ý tưởng của mình', 'laptop-lam-do-hoa-2d.jpg', 'post', 'Tiêu chí chọn mua laptop làm đồ họa 2D tốt nhất cho dân thiết kế', 'Tiêu chí chọn mua laptop làm đồ họa 2D tốt nhất cho dân thiết kế', '2022-05-13 11:41:51', 31, '2022-05-17 07:01:00', 1, 1),
(45, 2, 'Mua Apple Watch kèm iPhone, iPad, Macbook giảm ngay 20% tại TopZone!', 'mua-apple-watch-kem-iphone-ipad-macbook-giam-ngay-20-tai-topzone', 'Trời ơi tin được không? Khi mua Apple Watch kèm theo iPhone, iPad, MacBook bạn sẽ được giảm ngay 20% chỉ có tại TopZone thôi đó. Bạn không nghe nhầm đâu, Apple Watch giá đã quá tốt nay còn tốt hơn bao giờ hết. Cơ hội săn sale đến rồi ngại gì không chớp lấy ngay bạn ơi! Hãy cùng mình lướt xuống để biết thêm chi tiết nào.\r\n<br>\r\n<b>Thời gian khuyến mãi</b>: Từ ngày 13/05/2022 đến hết ngày 31/05/2022.\r\n<br>\r\n<b>Lưu ý</b>:\r\nƯu đãi áp dụng với tất cả sản phẩm Apple Watch.\r\n<br>\r\nƯu đãi mua kèm áp dụng trong vòng 7 ngày kể từ ngày mua iPhone/iPad/MacBook.\r\n<br>\r\n<b>Lấy ví dụ</b>:\r\nNgày 13/05/2022 bạn tậu 1 em Apple Watch Series 7 GPS + Cellular 41mm kèm theo sản phẩm iPhone/iPad/MacBook tại TopZone. Chiếc đồng hồ có giá niêm yết là 14.990.000 đồng, khi áp dụng thêm ưu đãi, bạn sẽ được giảm thêm 20% tính trên giá niêm yết, như vậy bạn chỉ cần thanh toán: 11.992.000 đồng là đã có thể sở hữu được em Apple Watch với giá siêu hời rồi.\r\n<br>\r\nTính ra là giá quá hời luôn đó bạn ơi! Chờ gì mà không chốt đơn ngay thôi.\r\n<br>\r\nTại sao nên mua Apple Watch tại TopZone?\r\n<br>\r\n<img src=\"public/image/posts/apple-watch-giam-2_1280x720.jpg\">\r\n<br>\r\n<b>Tại sao nên mua Apple Watch tại TopZone?</b>\r\nĐến với TopZone, bạn sẽ tìm thấy rất nhiều mẫu Apple Watch chính hãng như: Apple Watch Series 7, Apple Watch SE,... Không những thế còn đa dạng, phong phú về màu sắc và kích thước cho bạn tha hồ lựa chọn theo sở thích của bản thân. Hơn hết, Apple Watch tại TopZone luôn có mức giá cực tốt cùng loạt ưu đãi khủng dành cho bạn.\r\n<br>\r\nĐặc biệt, chính sách bảo hành, đổi trả các sản phẩm Apple Watch chính hãng Apple tại TopZone giống với chính sách đang được áp dụng tại Thế Giới Di Động và Điện máy XANH, giúp khách hàng yên tâm nhất trong quá trình sử dụng.\r\n<br>\r\nMua iPhone, iPad, MacBook tại TopZone, đừng bỏ qua ưu đãi siêu HOT giảm ngay 20% cho Apple Watch này nhé! Hãy click ngay vào ô màu cam bên dưới để xem trọn vẹn các sản phẩm  Apple Watch chính hãng nhé:\r\n', 'apple-watch-giam-2_1280x720.jpg', 'post', 'Mua Apple Watch kèm iPhone, iPad, Macbook giảm ngay 20% tại TopZone!', 'Mua Apple Watch kèm iPhone, iPad, Macbook giảm ngay 20% tại TopZone!', '2022-05-13 14:46:46', 31, '2022-05-13 14:48:17', 31, 1),
(46, 2, 'Giá Samsung Galaxy S22 Ultra 5G cũ hiện tại rất mềm, rẻ hơn máy mới đến 28%, đáng để mua', 'gia-samsung-galaxy-s22-ultra-5g-cu-hien-tai-rat-mem-re-hon-may-moi-den-28-dang-de-mua', 'Nhìn nè! Nhìn nè! Thế Giới Di Động sale bùng nổ đến 10% nên giá Samsung Galaxy S22 Ultra 5G cũ hiện tại rất mềm. SamFans nhanh tay lựa ngay một em đi vì giá tốt hơn mua máy mới đến 28% mà thời gian bảo hành còn dài lắm nha. Đã thế còn có chính sách 1 đổi 1 trong tháng đầu tiên khi có lỗi của nhà sản xuất để bạn an tâm rinh em nó về nhà đó!\r\n<br>\r\n<b>Lưu ý</b>\r\nGiá bán có thể thay đổi tuỳ theo tình trạng còn máy của siêu thị.\r\n<br>\r\nNgoài ra, nếu khu vực của bạn hết hàng, bạn có thể chuyển hàng từ các khu vực còn hàng khác bằng cách chuyển khu vực sang Tỉnh/Thành phố gần bạn hoặc Toàn quốc > Chọn máy ưng ý > Sau đó sử dụng dịch vụ Chuyển về siêu thị gần nhất (có tính phí chuyển hàng).\r\n<br>\r\nGiá Samsung Galaxy S22 Ultra 5G cũ hiện tại\r\n<br>\r\nSamsung Galaxy S22 Ultra 5G 128GB cũ giảm 10%, giá còn từ 22.49 triệu đồng, rẻ hơn máy mới đến 27%\r\n<br>\r\n<img src=\"public/image/posts/s22u128_800x864.jpg\">\r\n', 'galaxy-s22-ultra-301_1280x720-300x200.jpg', 'post', 'Giá Samsung Galaxy S22 Ultra 5G cũ hiện tại rất mềm, rẻ hơn máy mới đến 28%, đáng để mua', 'Giá Samsung Galaxy S22 Ultra 5G cũ hiện tại rất mềm, rẻ hơn máy mới đến 28%, đáng để mua', '2022-05-13 14:50:30', 31, '2022-05-13 14:50:30', 1, 1),
(47, 2, 'Lenovo nâng thời gian bảo hành lên đến 2 năm cho toàn bộ sản phẩm máy tính bảng', 'lenovo-nang-thoi-gian-bao-hanh-len-den-2-nam-cho-toan-bo-san-pham-may-tinh-bang', 'Lenovo xin chân thành cám ơn sự hợp tác và hỗ trợ của Quý đối tác trong suốt thời gian vừa qua. Nhằm thúc đẩy kinh doanh các sản phẩm máy tính bảng Lenovo cũng như nâng cao trải nghiệm của người tiêu dùng cuối, hãng sẽ chính thức nâng thời gian bảo hành của tất cả các sản phẩm máy tính bảng đang kinh doanh tại thị trường Việt Nam từ 01 (một) năm lên 02 (hai) năm. \r\n<br>\r\n<img src=\"public/image/posts/lenovom10copy_1280x720-800-resize.jpg\">\r\n<br>\r\nThời hạn bảo hành 02 (hai) năm này sẽ được áp dụng theo phương thức Carry-in, tức là người dùng tự mang thiết bị tới trung tâm bảo hành chính hãng khi có nhu cầu kiểm tra máy móc hoặc bảo hành. Bên cạnh đó, thời hạn bảo hành cho pin của máy vẫn là 01 (một) năm.\r\n<br>\r\n<b>Lưu ý</b>: chương trình chỉ áp dụng cho các máy xuất bán ra từ 16/02/2022.\r\n', 'mtblenovo_1280x720-300x200.jpg', 'post', 'Lenovo nâng thời gian bảo hành lên đến 2 năm cho toàn bộ sản phẩm máy tính bảng', 'Lenovo nâng thời gian bảo hành lên đến 2 năm cho toàn bộ sản phẩm máy tính bảng', '2022-05-13 14:53:26', 31, '2022-05-13 14:53:26', 1, 1),
(48, 2, 'Giá Galaxy A73 5G cũ hiện tại quá hời, có chip Snapdragon mà chưa tới 10 triệu', 'gia-galaxy-a73-5g-cu-hien-tai-qua-hoi-co-chip-snapdragon-ma-chua-toi-10-trieu', 'Điện thoại tầm trung cận cao cấp của Samsung chưa bao giờ làm bạn thất vọng. Đặc biệt là giá Samsung Galaxy A73 5G cũ hiện tại quá hời thì lại càng làm SamFans hào hứng hơn bởi máy đang được giảm sốc 5%, tiết kiệm hơn việc mua máy mới đến 2.6 triệu đồng lận đấy.\r\nMáy tuy đã qua sử dụng nhưng chính sách bảo hành cũng như hậu mãi đến từ Thế Giới Di Động thì chắc chắn sẽ làm hài lòng bạn nên tham khảo ngay dưới đây nhé!\r\n\r\n<b>Lưu ý</b>:\r\n\r\nGiá bán có thể thay đổi tuỳ theo tình trạng còn máy của siêu thị.\r\n<br>\r\nNgoài ra, nếu khu vực của bạn hết hàng, bạn có thể chuyển hàng từ các khu vực còn hàng khác bằng cách chuyển khu vực sang Tỉnh/Thành phố gần bạn hoặc Toàn quốc > Chọn máy ưng ý > Sau đó sử dụng dịch vụ Chuyển về siêu thị gần nhất (có tính phí chuyển hàng).\r\n<br>\r\n<b>Giá Samsung Galaxy A73 5G cũ hiện tại </b>  \r\n<br>\r\nSamsung Galaxy A73 5G cũ giảm 5%, giá chỉ từ 9.37 triệu đồng, rẻ hơn máy mới đến 21%\r\n<img src=\"public/image/posts/a73cu_800x882.jpg\">\r\n<br>\r\n<b>Những điểm nổi bật trên Samsung Galaxy A73 5G</b>\r\n<br>\r\nĐiều mà mình ấn tượng nhất trên Galaxy A73 5G đó chính là khả năng chụp ảnh khi máy sở hữu 4 ống kính có độ phân giải lần lượt: Camera chính 108 MP, camera góc siêu rộng 12 MP, cảm biến độ sâu và macro có cùng độ phân giải 5 MP giúp các bức ảnh thu lại trở nên chi tiết hơn.\r\n<br>\r\nCung cấp sức mạnh cho Galaxy A73 là bộ vi xử lý chuyên game Snapdragon 778G 5G 8 nhân đến từ nhà Qualcomm sản xuất trên tiến trình 6 nm tiên tiến, được xem là một cấu hình khá tốt giúp bạn chơi tốt hầu hết các tựa game. Bên trong thân hình mỏng 7.6 mm của máy là một viên pin có dung lượng 5.000 mAh, đem đến một thời gian sử dụng lâu dài.\r\n<br>\r\nQuá nhiều điểm để khen Samsung Galaxy A73 5G cũ thế nên tậu ngay bây giờ sẽ là một món hời lớn đấy!', 'galaxya73trắng-251_1280x720-300x200.jpg', 'post', 'Giá Galaxy A73 5G cũ hiện tại quá hời, có chip Snapdragon mà chưa tới 10 triệu', 'Giá Galaxy A73 5G cũ hiện tại quá hời, có chip Snapdragon mà chưa tới 10 triệu', '2022-05-13 14:58:34', 31, '2022-05-13 14:58:34', 1, 1),
(49, 2, 'Galaxy Note 20 series cũ giá rẻ bất ngờ, sở hữu chỉ với từ 10.2 triệu', 'galaxy-note-20-series-cu-gia-re-bat-ngo-so-huu-chi-voi-tu-10-2-trieu', 'Samfans ơi! Thời tới cản không kịp rồi nè! Galaxy Note 20 Series cũ đang giảm bùng nổ đến 35%. Giá chỉ từ 10.2 triệu đồng là đã có thể rước về tay, tức là rẻ hơn máy mới đến cả 57% luôn đó nha. Mau mau đến Thế Giới Di Động hốt về ngay và luôn nhé!\r\n<br>\r\nMặc dù, là dòng máy đã qua sử dụng nhưng mua Thế Giới Di Động bạn sẽ luôn được các kỹ thuật viên tại đây hỗ trợ. Cũng như là chính sách 1 đổi 1 khi có lỗi của nhà sản xuất trong tháng đầu tiên để bạn hoàn toàn an tâm sử dụng.\r\n<br>\r\n<b>Lưu ý</b>:\r\n<br>\r\nGiá bán có thể thay đổi tuỳ theo tình trạng còn máy của siêu thị.\r\n<br>\r\nNgoài ra, nếu khu vực của bạn hết hàng, bạn có thể chuyển hàng từ các khu vực còn hàng khác bằng cách chuyển khu vực sang Tỉnh/Thành phố gần bạn hoặc Toàn quốc > Chọn máy ưng ý > Sau đó sử dụng dịch vụ Chuyển về siêu thị gần nhất (có tính phí chuyển hàng).\r\n<br>\r\n<b>Samsung Galaxy Note 20 cũ giảm 35%, giá còn từ 10.2 triệu đồng, rẻ hơn máy mới đến 57%</b>\r\n<br>\r\n<img src=\"public/image/posts/note20ultra5g-492_800x870.jpg\">\r\n<br>\r\nVới thiết kế camera trước nốt ruồi quen thuộc, cụm camera hình chữ nhật mới lạ được đặt gọn ở phía sau bao gồm 1 camera chính 64 MP, camera góc siêu rộng 12 MP và camera tele 12 MP hỗ trợ người dùng dễ dàng lưu lại sắc nét những khoảng khắc đáng nhớ cùng gia đình và bạn bè. Đặc biệt, máy có khả năng quay video chất lượng cao lên đến 8K siêu nét cùng các tính năng chống rung, lấy nét,...\r\n<br>\r\nGalaxy Note 20 còn có hiệu năng vượt trội với tốc độ xử lý mạnh mẽ, đáp ứng mọi thao tác tác vụ một cách nhanh chóng nhờ chip xử lý Exynos 990 8 nhân, RAM 8 GB/ROM 256 GB, người dùng có thể sử dụng nhiều tác vụ cùng lúc một cách dễ dàng, mượt mà.\r\n', 'note20ultra5g-491_1280x720-300x200.jpg', 'post', 'Galaxy Note 20 series cũ giá rẻ bất ngờ, sở hữu chỉ với từ 10.2 triệu', 'Galaxy Note 20 series cũ giá rẻ bất ngờ, sở hữu chỉ với từ 10.2 triệu', '2022-05-13 15:02:19', 31, '2022-05-13 15:02:19', 1, 1),
(50, 2, 'Mừng đại lễ: Loạt laptop giảm sốc đến 25%, còn kèm ưu đãi hấp dẫn', 'mung-dai-le-loat-laptop-giam-soc-den-25-con-kem-uu-dai-hap-dan', 'Nhanh chân đến ngay Thế Giới Di Động chúng mình săn sale mừng lễ lớn nha bạn ơi. Loạt các mẫu laptop giảm giá mê ly đến 25%, đã thế còn kèm nhiều ưu đãi hấp dẫn khác nữa đó, đừng bỏ lỡ nha, không dễ gì có cơ hội sắm laptop mới mà hời đến thế này đâu nha.\r\n<br>\r\n<b>Thời gian khuyến mãi</b>: Đến ngày 08/06/2022.\r\n<br>\r\n<b>Lưu ý</b>:\r\n<br>\r\nThời gian khuyến mãi có thể kết thúc sớm nếu hết số lượng sản phẩm hoặc thông tin khuyến mãi có thay đổi.\r\n<br>\r\nMột số khuyến mãi chỉ áp dụng khi mua hàng online.\r\n<br>\r\nÔ sản phẩm chưa hiển thị ưu đãi chính xác, để hiện ưu đãi chính xác, khách cần bấm Xem chi tiết.\r\n<br>\r\n<b>Laptop Acer Nitro 5 Gaming AN515 57 5831 i5 (NH.QDGSV.003) giảm 25%, giá còn 24.74 triệu đồng</b>\r\nƯu đãi thêm:\r\n<br>\r\nMua online thêm quà: Tai nghe chụp tai Gaming MozardX G1 (Hết quà hoàn tiền 350.000₫).\r\n<br>\r\nMua online thêm quà: Chuột Gaming Corsair Harpoon RGB Pro (Hết quà hoàn tiền 360.000₫).\r\n<br>\r\nBalo Acer Predator Gaming (Hết quà hoàn tiền 940.000₫)\r\n<br>\r\n<img src=\"public/image/posts/acer-nitro-5-gaming-an515.jpg\">\r\n<br>\r\nLaptop Acer Nitro 5 Gaming AN515 57 5831 i5 (NH.QDGSV.003) là thế hệ laptop gaming mới của nhà Acer với thiết kế vỏ máy được làm từ nhựa cao cấp đem đến khả năng chịu lực tốt, máy có độ dày khoảng 23.9 mm và trọng lượng 2.2 kg, không quá nặng khi cho vào balo để di chuyển đối với một chiếc máy tính gaming 15.6 inch.\r\n<br>\r\nVới sức mạnh đến từ CPU thế hệ 11 Intel Core i5 11400H, RAM 8 GB loại DDR4 2 khe (1 khe 8 GB + 1 khe rời) cho khả năng đa nhiệm ổn định, bạn có thể mở nhiều ứng dụng cùng lúc khi làm việc để nâng cao hiệu suất. Đồng thời, máy còn hỗ trợ bạn nâng cấp RAM lên tối đa 32 GB thỏa thích sử dụng mà không bị giới hạn.', 'lenovo-thumb_1280x720-300x200.jpg', 'post', 'Mừng đại lễ: Loạt laptop giảm sốc đến 25%, còn kèm ưu đãi hấp dẫn', 'Mừng đại lễ: Loạt laptop giảm sốc đến 25%, còn kèm ưu đãi hấp dẫn', '2022-05-13 15:06:50', 31, '2022-05-13 15:06:50', 1, 1),
(51, 2, 'Redmi Note 11 (6GB/128GB) giảm mạnh tiền trăm, có trả góp 0% chốt liền', 'redmi-note-11-6gb-128gb-giam-manh-tien-tram-co-tra-gop-0-chot-lien', 'Bạn đang muốn sở hữu Redmi Note 11 (6GB/128GB) nhưng bạn chưa đủ kinh phí. Đừng lo âu khi mua chiếc smartphone này tại Thế Giới Di Động bạn sẽ nhận được hỗ trợ trả góp 0% đặc biệt còn được giảm thẳng nửa triệu đồng luôn đó. Thích nha, thích nha! Chốt đơn ngay dưới đây nào bạn ơi!\r\n<br>\r\n<b>Thời gian diễn ra</b>: Đến ngày 03/06/2022.\r\n<br>\r\n<b>Lưu ý</b>:\r\n\r\nKhuyến mãi có thể kết thúc sớm trước thời hạn nếu hết số lượng sản phẩm.\r\n<br>\r\nÔ sản phẩm chưa hiển thị ưu đãi chính xác, để hiện ưu đãi chính xác, khách cần bấm Xem chi tiết.\r\n<br>\r\nXiaomi Redmi Note 11 (6GB/128GB) - Độc quyền giảm 500.000 đồng + trả góp 0%, giá còn 4.99 triệu đồng\r\n<br>\r\n<img src=\"public/image/posts/Xiaomi-redmi-note-11-blue-600x600.jpg\">\r\n<br>\r\nMàn hình chiếc điện thoại này có kích cỡ 6.43 inch với camera đục lỗ, sở hữu 2 cạnh và cạnh trên siêu mỏng, cho diện tích màn hình trải nghiệm tốt, đã mắt và tạo sự tập trung khi xem. Điện thoại được trang bị cảm biến vân tay cạnh viền hỗ trợ bảo mật tốt, độ nhạy cao để truy cập màn hình nhanh qua 1 chạm.\r\n<br>\r\nBên cạnh đó, máy sử dụng CPU Snapdragon 680 8 nhân tốc độ xử lý đạt 2.4 GHz cùng GPU Adreno 610 có hiệu suất cao, mang đến hiệu năng ấn tượng. Kết hợp hỗ trợ RAM 6 GB hoạt động ổn định khi mở cùng lúc nhiều ứng dụng và bộ nhớ trong 128 GB khá thoải mái cho nhu cầu lưu trữ cá nhân.\r\n<br>\r\nGiá Redmi Note 11 (6GB/128GB) đã quá hời rồi, bạn cần chốt đơn ngay và luôn đi nhé!', 'redmi-note-11-54gg_1272x720-300x200.jpg', 'post', 'Redmi Note 11 (6GB/128GB) giảm mạnh tiền trăm, có trả góp 0% chốt liền', 'Redmi Note 11 (6GB/128GB) giảm mạnh tiền trăm, có trả góp 0% chốt liền', '2022-05-13 15:11:23', 31, '2022-05-13 15:12:14', 31, 1),
(52, 2, 'Cuối tháng xả hàng: Bộ đôi Galaxy A giá rẻ có pin 5.000 mAh đồng giảm tiền trăm, mua sắm dễ dàng hơn với trả góp 0%', 'cuoi-thang-xa-hang-bo-doi-galaxy-a-gia-re-co-pin-5-000-mah-dong-giam-tien-tram-mua-sam-de-dang-hon-voi-tra-gop-0', 'Bạn đang tìm chiếc điện thoại pin trâu với giá rẻ phải chăng thì tìm đến Thế Giới Di Động liền. Bộ đôi Galaxy A giá rẻ sở hữu pin trâu 5.000 mAh đang được đồng giảm tiền trăm nhân dịp xả hàng cuối tháng quá hấp dẫn. Cơ hội sở hữu dễ dàng hơn bao giờ hết khi được hỗ trợ trả góp 0% nữa đó, xem ngay nhé!\r\n<br>\r\n<b>Thời gian khuyến mãi</b>: Đến ngày 31/03/2022.\r\n<br>\r\n<b>Lưu ý</b>: \r\nThời gian khuyến mãi có thể kết thúc sớm nếu hết số lượng sản phẩm hoặc thông tin khuyến mãi có thay đổi.\r\n<br>\r\nÔ sản phẩm chưa hiển thị ưu đãi chính xác, để hiện ưu đãi chính xác, khách cần bấm Xem chi tiết.\r\n<br>\r\nSamsung Galaxy A12 (2021): Giảm đến 400.000 đồng + Trả góp 0%\r\n<br>\r\n<img src=\"public/image/posts/samsung-galaxy-a12-2021-black-600x600.jpg\">\r\n<br>\r\n<b>Samsung Galaxy A12 Black</b>\r\n<br>\r\nSamsung Galaxy A12 (2021) được biết đến là phiên bản điện thoại giá rẻ sở hữu ngoại hình trẻ trung, nịnh mắt người dùng. Điện thoại được trang bị màn hình tràn viền lớn với thiết kế Infinity-V cho người dùng trải nghiệm đã mắt ở từng khung hình. Cụm camera trên điện thoại thu sáng và bắt nét cực chuyên nghiệp cho bạn thỏa sức sáng tạo nên những bức ảnh chất lượng.\r\n<br>\r\nVề hiệu năng, con chip Exynos 850 cung cấp trải nghiệm ổn định và hỗ trợ sức mạnh cực khủng khi chiến game trong nhiều giờ liền. Bên cạnh đó, điện thoại được tích hợp GPU Mali-G52 cho hiệu suất đồ họa được cải thiện vượt trội.\r\n<br>\r\nSamsung Galaxy A12 6GB (2021) - Độc quyền: Giá còn 4.29 triệu đồng\r\n<br>\r\n<img src=\"public/image/posts/samsung-galaxy-a12-2021-white-600x600.jpg\">\r\n<br>\r\n<b>Samsung Galaxy A12 White</b>', 'galaxya12thumb_1280x720-300x200.png', 'post', 'Cuối tháng xả hàng: Bộ đôi Galaxy A giá rẻ có pin 5.000 mAh đồng giảm tiền trăm, mua sắm dễ dàng hơn với trả góp 0%', 'Cuối tháng xả hàng: Bộ đôi Galaxy A giá rẻ có pin 5.000 mAh đồng giảm tiền trăm, mua sắm dễ dàng hơn với trả góp 0%', '2022-05-13 15:19:56', 31, '2022-05-13 15:22:38', 31, 1),
(53, 2, 'Cập nhật giá Vivo Y15s hiện tại: Rẻ càng thêm rẻ với ưu đãi giảm 200K, có pin 5.000 mAh cùng màn hình lớn đáng mua phết', 'cap-nhat-gia-vivo-y15s-hien-tai-re-cang-them-re-voi-uu-dai-giam-200k-co-pin-5-000-mah-cung-man-hinh-lon-dang-mua-phet', 'Cơ hội không thể nào tốt hơn để tậu Vivo Y15s đến rồi đây, hiện máy đang được giảm sốc đến 200.000 đồng kèm hỗ trợ trả góp không lãi suất đấy. Thêm một sự lựa chọn điện thoại giá rẻ mà tiết kiệm để bà con mua sắm cuối tháng 3 này, cùng xem ngay giá Vivo Y15s hiện tại nha!\r\n<br>\r\nGiá Vivo Y15s hiện tại\r\n<br>\r\n<b>Vivo Y15s giảm 200.000 đồng + Trả góp 0%, giá hiện tại còn 4.29 triệu đồng.</b>\r\n<br>\r\n<img src=\"public/image/posts/Vivo-y15s-2021-xanh-den-660x600.jpg\">\r\n<br>\r\n<b>Thời gian diễn ra</b>: Đến ngày 31/03/2022.\r\n<br>\r\n<b>Lưu ý</b>\r\nKhuyến mãi có thể kết thúc sớm trước thời hạn nếu hết số lượng sản phẩm.\r\n<br>\r\nÔ sản phẩm chưa hiển thị ưu đãi chính xác, để hiện ưu đãi chính xác, khách cần bấm Xem chi tiết.\r\n<br>\r\nNhững điểm đáng mua trên Vivo Y15s\r\n<br>\r\nĐầu tiên phải kể đến là viên pin lớn 5.000 mAh giúp Vivo Y15s đáp ứng các hoạt động nghe gọi, lướt web, nghe nhạc, xem YouTube trong 1 ngày của bạn. Cùng với đó là màn hình rộng 6.51 inch cho không gian sử dụng thoải mái, giải trí hay xem phim, đọc báo... đều ổn.\r\n<br>\r\nNgoài ra, máy còn được trang bị bộ đôi camera sau, camera chính có độ phân giải 13 MP khẩu độ f/2.2 hỗ trợ chụp ảnh góc rộng, lấy nét tự động và camera phụ 2 MP khẩu độ f/2.4 hỗ trợ chụp ảnh macro, máy hỗ trợ chụp xóa phông với sự giúp sức của trí tuệ nhân tạo AI, cho bạn sáng tạo không giới hạn trong nhiếp ảnh.\r\n<br>\r\nVivo Y15s giá đã rẻ nay còn ưu đãi thêm rẻ thì ngại gì mà không thử nhỉ?', 'vivoy15sght-1_1280x720-300x200.jpg', 'post', 'Cập nhật giá Vivo Y15s hiện tại: Rẻ càng thêm rẻ với ưu đãi giảm 200K, có pin 5.000 mAh cùng màn hình lớn đáng mua phết', 'Cập nhật giá Vivo Y15s hiện tại: Rẻ càng thêm rẻ với ưu đãi giảm 200K, có pin 5.000 mAh cùng màn hình lớn đáng mua phết', '2022-05-13 15:26:03', 31, '2022-05-17 06:30:47', 31, 1);
INSERT INTO `lnhv_post` (`id`, `topid`, `title`, `slug`, `detail`, `img`, `type`, `metakey`, `metadesc`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(54, 0, 'Chính sách vận chuyển', 'chinh-sach-van-chuyen', '<h3>Chính sách giao hàng UML-X</h3>\r\n    <h4>1. PHẠM VI ÁP DỤNG</h4>\r\n    Những khu vực tỉnh thành có hệ thống siêu thị localhost\r\n    <br>\r\n    <h4>2. THỜI GIAN NHẬN HÀNG</h4>\r\n    UML-X nhận giao nhanh trong ngày với khoảng cách từ các siêu thị có hàng đến điểm giao là 20 km. Khoảng cách lớn hơn nhân viên của chúng tôi sẽ tư vấn cách thức giao hàng thuận tiện nhất cho khách hàng. Cụ thể:\r\n\r\n    <table style=\"border: 1px solid black\">\r\n        <tr style=\"border: 1px solid black\">\r\n            <th  style=\"border: 1px solid black\"> Khoảng cách đến nhà khách từ siêu thị gần nhất có hàng</th>\r\n            <th  style=\"border: 1px solid black\">TP. HCM</th>\r\n            <th  style=\"border: 1px solid black\">Tỉnh khác</th>\r\n        </tr>\r\n        <tr style=\"border: 1px solid black\">\r\n            <td  style=\"border: 1px solid black\">Dưới 5km</td>\r\n            <td   style=\"border: 1px solid black\">Giao trong 30 phút</td>\r\n            <td  style=\"border: 1px solid black\">Giao trong 30 phút</td>\r\n        </tr>\r\n        <tr>\r\n            <td  style=\"border: 1px solid black\">5-10km</td>\r\n            <td  style=\"border: 1px solid black\">Giao trong 1 tiếng</td>\r\n            <td  style=\"border: 1px solid black\">Giao trong 1 tiếng</td>\r\n        </tr>\r\n        <tr style=\"border: 1px solid black\">\r\n            <td  style=\"border: 1px solid black\">10-20km </td>\r\n            <td  style=\"border: 1px solid black\">Giao trong 2 tiếng </td>\r\n            <td  style=\"border: 1px solid black\">Giao trong 2 tiếng</td>\r\n        </tr>\r\n    </table>\r\n    <br>\r\n    Lưu ý Thời gian giao hàng 9:00 đến 21:00 Thời gian giao hàng 9:00 đến 20:00\r\n    <br>\r\n    Riêng đối với đơn hàng giá rẻ online, sản phẩm sẽ được giao sớm nhất là 1 ngày sau khi đặt.\r\n    <br>\r\n    <img src=\"public/image/nhan-vien-giao-hang.png\" alt=\"\">\r\n    <h4>3. PHÍ GIAO HÀNG</h4>\r\n    LOẠI SẢN PHẨM MỨC GIÁ PHÍ GIAO\r\n    <br>\r\n    Sản phẩm không lắp đặt Giá trên 500.000đ\r\n    <br>\r\n    - Miễn phí 10km đầu tiên\r\n    <br>\r\n    - Mỗi km tiếp theo tính phí 5.000đ/km\r\n    <br>\r\n    VD: Sạc dự phòng giá 600.000đ, khoảng cách giao hàng là 13 km >>> Phí giao hàng là: 15.000đ\r\n    <br>\r\n    Giá 500.000đ trở xuống\r\n    <br>\r\n    - Phí giao hàng 20.000đ cho 10km đầu tiên\r\n    <br>\r\n    - Mỗi km tiếp theo tính phí 5.000đ/km\r\n    <br>\r\n    VD: Sạc dự phòng 500.000đ, khoảng cách giao hàng là 13 km >>> Phí giao hàng là: 20.000đ + 15.000đ = 35.000đ\r\n    <br>\r\n    Sản phẩm lắp đặt Giá trên 5 triệu\r\n    <br>\r\n    - Miễn phí 10km đầu tiên\r\n    <br>\r\n    - Mỗi km tiếp theo tính phí 5.000đ/km\r\n    <br>\r\n    VD: Loa kéo giá 6 triệu, khoảng cách giao hàng là 13 km >>> Phí giao hàng là: 15.000đ\r\n    <br>\r\n    Giá 5 triệu trở xuống\r\n    <br>\r\n    - Phí giao hàng 50.000đ cho 10km đầu tiên\r\n    <br>\r\n    - Mỗi km tiếp theo tính phí 5.000đ/km\r\n    <br>\r\n    VD: Loa kéo giá 5 triệu, khoảng cách giao hàng là 13 km >>> Phí giao hàng là: 50.000đ + 15.000đ = 65.000đ\r\n    <br>\r\n    Lưu ý:\r\n    <br>\r\n    + Khoảng cách giao hàng là khoảng cách được tính từ nhà khách hàng đến siêu thị TGDD/ĐMX gần nhất\r\n    <br>\r\n    + Hàng online only có chuyển hàng qua đối tác thì tổng đài 1800 1060 sẽ tư vấn cách thức giao hàng & phí chuyển hàng phù hợp.\r\n\r\n    <h4> 4. ĐEM THÊM NHIỀU SẢN PHẨM, MẪU MÃ KHÁC ĐỂ KHÁCH HÀNG LỰA TẠI NHÀ</h4>\r\n    Nếu có sự băn khoăn trong việc lựa chọn sản phẩm, hãy để nhân viên giao hàng của chúng tôi sẽ đem hơn 2 sản phẩm (đem thêm mẫu máy khác, đem thêm màu khác) theo yêu cầu của bạn đến tận nơi tư vấn.\r\n    <br>\r\n    - Kỹ thuật viên của chúng tôi sẽ giúp Quý khách khám phá kỹ hơn những tính năng ưu việt của từng sản phầm để Quý khách có được lựa chọn tốt nhất.\r\n    <br>\r\n    - Quý khách chỉ thanh toán khi thật sự hài lòng với sản phẩm và chất lượng dịch vụ của chúng tôi. Chúng tôi sẽ không tính bất kỳ khoản phí nào cho đến khi Quý khách hoàn toàn đồng ý.\r\n    <br>\r\n    - Khi Quý khách hoàn toàn hài lòng với sự lựa chọn của mình, Quý khách có thể thanh toán ngay bằng các thẻ quốc tế, nội địa mà không cần phải ra ngân hàng rút tiền mặt trước.\r\n    <br>\r\n    - Hãy gọi cho chúng tôi bất cứ lúc nào Quý khách cần được phục vụ với chất lượng 5 sao hoàn hảo.', 'The_gioi_in_an_banner_20200203121638261banner3.jpg', 'page', 'Chính sách vận chuyển', 'Chính sách vận chuyển', '2022-05-17 10:05:13', 31, '2022-05-17 10:05:13', 1, 1),
(56, 0, 'Chính sách mua hàng', 'chinh-sach-mua-hang', '<h3>Để thanh toán cho đơn hàng</h3>\r\n\r\nQuý khách có thể thanh toán bằng một trong các cách như sau:\r\n<br>\r\n<b>1. Thanh toán bằng tiền mặt khi nhận hàng (COD)</b>\r\n<br>\r\nĐơn đặt hàng của quý khách hàng sẽ được kiểm tra bởi bộ phận Chăm Sóc Khách Hàng của chúng tôi. Sau khi được phê duyệt, đơn hàng này sẽ được chuyển đến địa chỉ giao hàng mà khách hàng đã nhập khi đặt hàng. Quý khách sẽ trực tiếp thanh toán bằng tiền mặt cho nhân viên giao hàng khi nhận hàng theo số tiền thể hiện trên hóa đơn .\r\n<br>\r\n<b>2. Thanh toán bằng tài khoản ngân hàng</b>\r\n\r\nQuý khách hàng có thể sử dụng 3 cách là chuyển khoản trực tiếp, chuyển khoản qua máy ATM hoặc chuyển khoản qua mạng.\r\n<br>\r\n- Chuyển khoản trực tiếp: quý khách vui lòng đến ngân hàng gần nhất và nộp tiền vào tài khoản của UML-X.\r\n<br>\r\n- Chuyển khoản qua máy ATM: quý khách tìm máy ATM gần nhất và chuyển tiền qua máy ATM vào tài khoản của UML-X.\r\n<br>\r\n- Chuyển khoản qua mạng: quý khách đăng ký dịch vụ Internet Banking tại ngân hàng và chuyển khoản số tiền cần thanh toán vào tài khoản của UML-X. Hiện nay, chúng tôi hỗ trợ thẻ thanh toán nội địa lẫn thẻ thanh toán quốc tế.\r\n<br>\r\n** Khi qúy khách đặt hàng bằng hình thức chuyển khoản, quý khách vui lòng chuyển khoản trong vòng 7 ngày kể từ ngày đặt hàng. Sau 7 ngày không nhận được tiền chuyển khoản, chúng tôi sẽ chủ động hủy đơn hàng mà không cần báo trước.\r\n\r\n ', 'thanh-toan.jpg', 'page', 'Chính sách mua hàng', 'Chính sách mua hàng', '2022-05-17 10:47:16', 31, '2022-05-26 07:08:18', 1, 1),
(57, 0, 'Chính sách đổi trả', 'chinh-sach-doi-tra', '<h3>Điều kiện đổi trả</h3>\r\n- Trong 30 ngày đầu nhập lại máy, trừ phí 20% trên giá hiện tại(hoặc giá mua nếu giá mua thấp hơn giá hiện tại)\r\n<br>\r\n- Sau 30 ngày: Nhập lại theo thoả thuận\r\n<br>\r\n● Máy: Như mới, không xước xát, không dán decal, hình trang trí\r\n<br>\r\n● Máy cũ: có tình trạng sản phẩm như lúc mới mua\r\n<br>\r\n● Hộp: Như mới, không móp méo, rách, vỡ, bị viết, vẽ, quấn băng dính, keo; có Serial/IMEI trên hộp trùng với thân máy.\r\n<br>\r\n● Phụ kiện và quà tặng: Còn đầy đủ, nguyên vẹn, không móp méo xước xát hoặc bị hư hại trong quá trình sử dụng.\r\n<br>\r\n● Tài khoản: Máy đã đã được đăng xuất khỏi tất cả các tài khoản như: iCloud, Google Account, Mi Account…\r\n<br>\r\nCác lỗi từ NSX cần được xác định bởi trung tâm bảo hành chính hãng hoặc trung tâm bảo hành uỷ quyền\r\n<br>\r\n(*) Lỗi từ phía Nhà sản xuất là các lỗi bao gồm: Lỗi nguồn, lỗi trên mainboard, ổ cứng, màn hình và các linh kiện phần cứng bên trong\r\n<br>\r\nLỗi điểm chết màn hình : màn hình có từ 3 điểm chết trở lên hoặc 1 điểm chết có kích thước lớn hơn 1mm đối với laptop, màn hình rời', 'chinh-sach-doi-tra.jpg', 'page', 'Chính sách đổi trả', 'Chính sách đổi trả', '2022-05-17 10:53:02', 31, '2022-05-26 07:02:07', 1, 1),
(58, 0, 'Chính sách bảo hành', 'chinh-sach-bao-hanh', '<h3>\r\n    1. Quý khách được quyền đổi máy mới nếu máy của Quý khách mắc lỗi kỹ thuật trong vòng 10 ngày kể từ thời điểm mua máy mới chính hãng và 15 ngày đối với máy mới khác. Đối với máy mới chính hãng thì lỗi kỹ thuật được xác định là lỗi phần cứng và do Trung tâm bảo hành hãng xác nhận chính thức bằng văn bản. Đối với các máy mới khác thì sẽ do các Trung tâm bảo hành do UML-X ủy quyền xác nhận.\r\n</h3>\r\n- Việc đổi mới được tiến hành với điều kiện ngoại hình của Laptop được xác định lỗi kỹ thuật phải được đảm bảo không thay đổi so với lúc mới mua, không dán decal trang trí, không mất tem và kèm theo đầy đủ hộp, các phụ kiện, quà khuyến mại đi kèm. Nếu ngoại hình có sự khác biệt thì sẽ chuyển sang hình thức bảo hành sản phẩm. Sản phẩm được đổi mới căn cứ vào thực tế tồn kho tại cửa hàng nhưng đảm bảo cùng Model, cấu hình tương đương.\r\n<br>\r\n- Nếu không có sản phẩm giống hệt, quý khách đợi điều chuyển hàng về tối đa 07 ngày. Trong thời gian chờ điều chuyển, UML-X sẽ cho Quý khách mượn máy đã qua sử dụng có giá trị không quá 70% giá trị sản phẩm của khách hàng hoặc đổi sang sản phẩm khác có giá trị lớn hơn hoặc bằng 80% giá trị sản phẩm đã mua. Sản phẩm được đổi sang là sản phẩm mới 100% hoặc đổi sang dòng laptop đã qua sử dụng tại cửa hàng và áp dụng chính sách bảo hành đối với máy đã qua sử dụng.\r\n<br>\r\n- Chính sách đổi máy laptop mới chính hãng trong 10 ngày không áp dụng với sản phẩm của Apple.\r\n<br>\r\n<h3>\r\n2. KHÔNG bảo hành và không chịu trách nhiệm về dữ liệu và tính hợp pháp của các phần mềm, dữ liệu có trong sản phẩm của khách hàng. Do vậy khách hàng vui lòng sao lưu lại dữ liệu trên máy trước khi gửi bảo hành.\r\n\r\n</h3>\r\n<h3>\r\n3. Đối với sản phẩm bộ vi xử lý máy tính để bàn (CPU), Quý khách vui lòng giữ lại vỏ hộp để được hỗ trợ bảo hành (Thông tin trên vỏ hộp: Tên vi xử lý, Serial Number, Batch Number trên vỏ hộp…phải trùng với sản phẩm); Đối với CPU tray (Không có hộp), UML-X sẽ chịu trách nhiệm bảo hành.\r\n\r\n</h3>\r\n<h3>\r\n4. Đối với các sản phẩm nguồn máy tính để bàn (PSU), Quý khách vui lòng giữ lại đầy đủ phụ kiện kèm theo sản phẩm để được hỗ trợ trong các trường hợp đủ điều kiện đổi mới sản phẩm.\r\n\r\n</h3>\r\n<h3>\r\n5. Các sản phẩm của UML-X kinh doanh đều tuân thủ điều kiện bảo hành của nhà cung cấp, của hãng sản xuất.\r\n\r\n</h3>\r\n5.1. Đối với ổ cứng SSD: Bảo hành theo thời gian quy định từ nhà cung cấp hoặc tổng dung lượng ghi tối đa của ổ cứng (Viết tắt là TBW - Tera Byte Written) không vượt quá giá trị niêm yết của nhà sản xuất cho model đó, tùy vào điều kiện nào đến trước.\r\n<br>\r\n5.2. Các trường hợp sau đây bị coi là vi phạm điều kiện bảo hành và không được bảo hành:\r\n<br>\r\nSản phẩm hết thời hạn bảo hành.<br>\r\nSản phẩm vi phạm các quy định về bảo hành sản phẩm được nêu rõ tại website của nhà sản xuất cũng\r\nnhư trên website UML-X.vn<br>\r\nSản phẩm bộ vi xử lý máy tính để bàn (CPU) không còn vỏ hộp hoặc vỏ hộp có thông tin không trùng với sản phẩm hoặc sản phẩm đã bật tính năng XMP (Extreme Memory Profile).\r\n<br>\r\nCác sản phẩm card đồ họa đã được sử dụng vào mục đích khai thác tiền điện tử\r\n<br>\r\nSản phẩm không có tem bảo hành hợp lệ của UML-X, nhà phân phối, hãng sản xuất hoặc bị rách, bị tẩy xóa, sửa chữa, mờ không đọc được, bong/tróc.\r\n<br>\r\nSản phẩm không có số serial, mã vạch, thông số kỹ thuật hợp lệ hoặc các thông tin bị mờ không đọc được, bị cạo, bị sửa, bị rách, bị bong/tróc, bị thay đổi.\r\n<br>\r\nSản phẩm bị lỗi do thiên tai, nguồn điện sử dụng không bình thường, sai điện áp quy định.\r\n<br>\r\nSản phẩm bị lỗi do người sử dụng: bị biến dạng vật lý như trầy, xước, lồi, lõm, móp, méo, nứt, vỡ do bị rơi, bị va đập, do vận chuyển/lắp đặt sai quy cách, bị mốc, hoen rỉ, ẩm ướt, chất lỏng xâm nhập, ố vàng, mờ chữ, viết chữ không tẩy được, hư hỏng do chuột, bọ hoặc côn trùng xâm nhập.\r\n<br>\r\nSản phẩm đã qua ép xung (Overclock) hoặc sử dụng sai theo thông số nhà sản xuất đưa ra.', '68_bao_hanh-1590026053.png', 'page', 'Chính sách bảo hành', 'Chính sách bảo hành', '2022-05-17 10:57:58', 31, '2022-05-17 10:57:58', 1, 1),
(59, 0, 'Giới thiệu', 'gioi-thieu', 'Công Ty Cổ Phần Thương Mại Dịch Vụ UML-16\r\n                    Xuất thân từ cửa hàng kinh doanh máy tính được thành lập từ năm 2022, UML-16 được biết đến là đơn vị bán \r\n                    lẻ lâu đời và uy tín tại Việt Nam. \r\n                    UML-16 chuyên kinh doanh các sản phẩm công nghệ thông tin, thiết bị giải trí game, thiết bị văn phòng \r\n                    và thiết bị hi-tech của nhiều nhãn hàng lớn như Dell, Asus, HP, MSI, Lenovo…\r\n                    Sau 1 năm phát triển không ngừng, UML-16 hướng đến mục tiêu không chỉ là nơi kinh doanh máy tính mà \r\n                    còn là nơi khách hàng có thể tìm thấy mọi tiện ích công nghệ hiện đại và dịch vụ chất lượng cao.\r\n', 'ptgioithieu.jpg', 'page', 'Giới thiệu', 'Giới thiệu', '2022-05-22 05:23:39', 31, '2022-05-30 14:56:01', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lnhv_product`
--

CREATE TABLE `lnhv_product` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Mã sản phẩm',
  `catid` int(10) UNSIGNED NOT NULL COMMENT 'Mã loại sản phẩm',
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên sản phẩm',
  `slug` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Slug tên sản phẩm',
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Hình ảnh',
  `detail` mediumtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Chi tiết',
  `number` smallint(5) UNSIGNED NOT NULL COMMENT 'Số lượng',
  `price` float(12,0) UNSIGNED NOT NULL COMMENT 'Giá',
  `pricesale` float(12,0) UNSIGNED NOT NULL COMMENT 'Giá khuyến mãi',
  `metakey` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Từ khóa SEO',
  `metadesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mô tả SEO',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  `created_by` tinyint(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'Người tạo',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày sửa',
  `updated_by` tinyint(3) UNSIGNED DEFAULT '1' COMMENT 'Người sửa',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '2' COMMENT 'Trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lnhv_product`
--

INSERT INTO `lnhv_product` (`id`, `catid`, `name`, `slug`, `img`, `detail`, `number`, `price`, `pricesale`, `metakey`, `metadesc`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(3, 5, 'MSI Moder 15 A5M R5 5500U', 'msi-moder-15-a5m-r5-5500u', 'MSIModern15A5M.jpg', 'CPU: Ryzen 5, 5500U<br>  Ram: 8GB  <br>Màn hình: 15.6\" FullHD  <br>Ổ cứng: SSD 512GB', 1, 17690000, 17690000, 'MSI Moder 15 A5M R5 5500U', 'MSI Moder 15 A5M R5 5500U', '2022-04-03 12:53:06', 1, '2022-04-09 05:02:10', 1, 1),
(4, 5, 'MSI Katana GF76 11UC I7 11800H', 'msi-katana-gf76-11uc-i7-11800h', 'MSIKatanaGF76.jpg', 'CPU: i7 11800H <br> Ram: 8GB  <br> Màn hình: 15.6\"  <br>FullHD  Ổ cứng: SSD 512GB', 1, 29990000, 29990000, 'MSI Katana GF76 11UC I7 1195G7 ', 'MSI Katana GF76 11UC I7 1195G7 ', '2022-04-03 12:56:45', 1, '2022-06-03 11:46:22', 31, 1),
(5, 5, 'MSI Prestige 14 A11SC I7 1195G7', 'msi-prestige-14-a11sc-i7-1195g7', 'MSIPrestige14.jpg', 'CPU: I7 1195G7 Ram: 16GB  Màn hình: 14\" FullHD Ổ cứng: SSD 512GB', 1, 28990000, 28990000, 'MSI Prestige 14 A11SC I7 1195G7', 'MSI Prestige 14 A11SC I7 1195G7', '2022-04-03 13:00:41', 1, '2022-04-09 05:01:34', 1, 1),
(6, 5, 'MSI Gaming GF63 Thin 11UC I5 11400H', 'msi-gaming-gf63-thin-11uc-i5-11400h', 'MSIGF63.jpg', 'CPU: I5 11400H Ram: 8GB  Màn hình: 15.6\" FullHD  Ổ cứng: SSD 512GB', 1, 24190000, 24190000, 'MSI Gaming GF63 Thin 11UC I5 11400H', 'MSI Gaming GF63 Thin 11UC I5 11400H', '2022-04-03 13:02:49', 1, '2022-04-09 05:01:19', 1, 1),
(7, 7, 'Dell Latitude 3520 I5 1135G7', 'dell-latitude-3520-i5-1135g7', 'dell3520.jpg', 'CPU: I5 1135G7 Ram: 8GB  Màn hình: 15.6\" FullHD  Ổ cứng: SSD 256GB', 1, 24390000, 24390000, 'Dell Latitude 3520 I5 1135G7', 'Dell Latitude 3520 I5 1135G7', '2022-04-03 13:04:23', 1, '2022-04-09 05:00:43', 1, 1),
(8, 7, 'Dell Vostro 5510 I5 11320H', 'dell-vostro-5510-i5-11320h', 'DellVostro 5510 i5 11320H.jpg', 'CPU: I5 11320H  Ram: 8GB  Màn hình: 15.6\" FullHD  Ổ cứng: SSD 512GB', 1, 22990000, 22990000, 'Dell Vostro 5510 I5 11320H', 'Dell Vostro 5510 I5 11320H', '2022-04-03 13:05:45', 1, '2022-04-09 05:00:08', 1, 1),
(9, 7, 'Dell Inspinron 15 5515 5700U', 'dell-inspinron-15-5515-5700u', 'dellinspiron15551R7.jpg', 'CPU: Ryzen 7,5700u  Ram: 8GB  Màn hình: 15.6\" FullHD  Ổ cứng: SSD 512GB', 1, 23290000, 23290000, 'Dell Inspinron 15 5515 5700U', 'Dell Inspinron 15 5515 5700U', '2022-04-03 13:06:53', 1, '2022-04-09 04:59:41', 1, 1),
(10, 7, 'Dell Gaming G15 5511 I7 11800H', 'dell-gaming-g15-5511-i7-11800h', 'dellgamingg155511i7.jpg', 'CPU: I7 11800H <br> Ram: 16GB  <br>Màn hình: 15.6\" FullHD   <br>Ổ cứng: SSD 512GB', 1, 35690000, 35690000, 'Dell Gaming G15 5511 I7 11800H', 'Dell Gaming G15 5511 I7 11800H', '2022-04-03 13:08:20', 1, '2022-04-09 04:58:54', 1, 1),
(11, 8, 'Lenovo ThinkBook 14s G2 ITL I5 1135G7', 'lenovo-thinkbook-14s-g2-itl-i5-1135g7', 'lenovothinkbook14s.jpg', 'CPU: I5 1135G7 Ram: 8GB Màn hình: 14\" FullHD  Ổ cứng: SSD 512GB', 1, 23990000, 23990000, 'Lenovo ThinkBook 14s G2 ITL I5 1135G7', 'Lenovo ThinkBook 14s G2 ITL I5 1135G7', '2022-04-03 13:09:43', 1, '2022-04-09 04:58:23', 1, 1),
(12, 8, 'Lenovo Ideapad 5 15ITL05 I5 1135G7', 'lenovo-ideapad-5-15itl05-i5-1135g7', 'lenovoideapad515.jpg', 'CPU: I5 1135G7<br>  Ram: 8GB <br>  Màn hình: 15.6\" FullHD <br>Ổ cứng: SSD 512GB', 1, 19690000, 19690000, 'Lenovo Ideapad 5 15ITL05 I5 1135G7', 'Lenovo Ideapad 5 15ITL05 I5 1135G7', '2022-04-03 13:11:55', 1, '2022-04-09 04:58:05', 1, 1),
(13, 8, 'Lenovo Yoga 9 14ITL5 I7 1185G7', 'lenovo-yoga-9-14itl5-i7-1185g7', 'lenovoyoga914.jpg', 'CPU: I7 1185G7  <br>Ram: 16GB <br>  Màn hình: 14\", 4k  <br>Ổ cứng: SSD 1TB', 1, 48490000, 48490000, 'Lenovo Yoga 9 14ITL5 I7 1185G7', 'Lenovo Yoga 9 14ITL5 I7 1185G7', '2022-04-03 13:13:45', 1, '2022-04-09 04:57:48', 1, 1),
(14, 8, 'Lenovo Gaming Legion 5 15ITH6 I7 11800H', 'lenovo-gaming-legion-5-15ith6-i7-11800h', 'lenovogaminglegion515.jpg', 'CPU: I7 11800H <br> Ram: 16GB  <br> Màn hình: 15.6\" FullHD  <br> Ổ cứng: SSD 512GB', 1, 38990000, 38990000, 'Lenovo Gaming Legion 5 15ITH6 I7 11800H', 'Lenovo Gaming Legion 5 15ITH6 I7 11800H', '2022-04-03 13:15:54', 1, '2022-04-09 04:57:26', 1, 1),
(15, 9, 'Acer Aspire A315 56 32TB I3 1005G1', 'acer-aspire-a315-56-32tb-i3-1005g1', 'aceraspirea31556.jpg', 'CPU: I3 1005G1  Ram: 4GB  Màn hình: 15.6\" FullHD   Ổ cứng: SSD 256GB', 1, 11690000, 11690000, 'Acer Aspire A315 56 32TB I3 1005G1', 'Acer Aspire A315 56 32TB I3 1005G1', '2022-04-03 13:17:40', 1, '2022-05-11 02:10:21', 31, 1),
(16, 9, 'Acer Swift 3 SF314 511 55QE I5 1135G7', 'acer-swift-3-sf314-511-55qe-i5-1135g7', 'acerswift3sf314.jpg', 'CPU: I5 1135G7 <br> Ram: 16GB <br> Màn hình: 14\" FullHD <br> Ổ cứng: SSD 512GB ', 1, 21690000, 21690000, 'Acer Swift 3 SF314 511 55QE I5 1135G7', 'Acer Swift 3 SF314 511 55QE I5 1135G7', '2022-04-03 13:20:21', 1, '2022-04-09 04:56:33', 1, 1),
(17, 9, 'Acer Travelmate TMP215 53 50CP I5 1135G7', 'acer-travelmate-tmp215-53-50cp-i5-1135g7', 'acertravelmate.jpg', 'CPU: I5 1135G7 <br>  Ram: 8GB <br> Màn hình: 15.6\", 4k <br>  Ổ cứng: SSD 1TB', 1, 21990000, 21990000, 'Acer Travelmate TMP215 53 50CP I5 1135G7', 'Acer Travelmate TMP215 53 50CP I5 1135G7', '2022-04-03 13:21:37', 1, '2022-04-09 04:56:13', 1, 1),
(18, 9, 'Acer Nitro 5 Gaming AN515 57 74NU I7 11800H', 'acer-nitro-5-gaming-an515-57-74nu-i7-11800h', 'acernitro5gaming.jpg', 'CPU: I7 11800H  <br>Ram: 8GB <br> Màn hình: 15.6\" FullHD<br>Ổ cứng: SSD 512GB', 1, 28490000, 28490000, 'Acer Nitro 5 Gaming AN515 57 74NU I7 11800H', 'Acer Nitro 5 Gaming AN515 57 74NU I7 11800H', '2022-04-03 13:22:49', 1, '2022-04-09 04:55:42', 1, 1),
(19, 10, 'HP Pavilion 15 eg0505TX I5 1135G7', 'hp-pavilion-15-eg0505tx-i5-1135g7', 'hppavilion15.jpg', 'CPU: I5 1135G7  Ram: 8GB   Màn hình: 15.6\" FullHD   Ổ cứng: SSD 512GB', 1, 20490000, 20490000, 'HP Pavilion 15 eg0505TX I5 1135G7', 'HP Pavilion 15 eg0505TX I5 1135G7', '2022-04-03 13:25:42', 1, '2022-04-09 04:55:06', 1, 1),
(20, 10, 'HP Envy 13 ba1536TU I5 1135G7', 'hp-envy-13-ba1536tu-i5-1135g7', 'hpenvy13.jpg', 'CPU: I5 1135G7  Ram: 8GB  Màn hình: 13.3\" FullHD  Ổ cứng: SSD 512GB', 1, 22890000, 22890000, 'HP Envy 13 ba1536TU I5 1135G7', 'HP Envy 13 ba1536TU I5 1135G7', '2022-04-03 13:26:51', 1, '2022-04-09 04:54:35', 1, 1),
(21, 10, 'HP EliteBook X360 1040 G8 I7 1165G7', 'hp-elitebook-x360-1040-g8-i7-1165g7', 'hpelitebook.jpg', 'CPU: I7 1165G7 <br> Ram: 16GB <br> Màn hình: 14\" FullHD <br> Ổ cứng: SSD 1TB', 1, 48390000, 48390000, 'HP EliteBook X360 1040 G8 I7 1165G7', 'HP EliteBook X360 1040 G8 I7 1165G7', '2022-04-03 13:29:23', 1, '2022-04-09 04:54:10', 1, 1),
(22, 10, 'HP Gaming VICTUS 16 d0198TX I7 11800H', 'hp-gaming-victus-16-d0198tx-i7-11800h', 'hpgamingvictus.jpg', 'CPU: I7 11800H  Ram: 8GB  Màn hình: 15.6\" FullHD   Ổ cứng: SSD 512GB', 1, 31490000, 31490000, 'HP Gaming VICTUS 16 d0198TX I7 11800H', 'HP Gaming VICTUS 16 d0198TX I7 11800H', '2022-04-03 13:30:21', 1, '2022-04-09 04:04:18', 1, 1),
(23, 11, 'Asus VivoBook A515EP I5 1135G7', 'asus-vivobook-a515ep-i5-1135g7', 'asusvivobooka515ep.jpg', 'CPU: I5 1135G7 <br> Ram: 8GB<br>   Màn hình: 15.6\" FullHD  <br>Ổ cứng: SSD 512GB', 1, 20790000, 20790000, 'Asus VivoBook A515EP I5 1135G7', 'Asus VivoBook A515EP I5 1135G7', '2022-04-03 13:34:12', 1, '2022-04-09 03:59:50', 1, 1),
(24, 11, 'Asus ZenBook UX425EA I5 1135G7', 'asus-zenbook-ux425ea-i5-1135g7', 'asuszenbook.jpg', 'CPU: I5 1135G7  Ram: 8GB   Màn hình: 14\" FullHD   Ổ cứng: SSD 512GB', 1, 23990000, 23990000, 'Asus ZenBook UX425EA I5 1135G7', 'Asus ZenBook UX425EA I5 1135G7', '2022-04-03 13:36:53', 1, '2022-04-09 03:59:20', 1, 1),
(25, 11, 'Asus ExpertBook B9400CEA I5 1135G7', 'asus-expertbook-b9400cea-i5-1135g7', 'asusexpertbook.jpg', 'CPU: I5 1135G7  Ram: 8GB   Màn hình: 14\" FullHD  Ổ cứng: SSD 512GB', 1, 29190000, 29190000, 'Asus ExpertBook B9400CEA I5 1135G7', 'Asus ExpertBook B9400CEA I5 1135G7', '2022-04-03 13:39:13', 1, '2022-04-09 03:58:53', 1, 1),
(26, 11, 'Asus TUF Gaming FX516PM I7 11370H', 'asus-tuf-gaming-fx516pm-i7-11370h', 'asustufgaming.jpg', 'CPU: I7 11370H  Ram: 8GB  Màn hình: 15.6\" FullHD   Ổ cứng: SSD 512GB', 1, 32990000, 32990000, 'Asus TUF Gaming FX516PM I7 11370H', 'Asus TUF Gaming FX516PM I7 11370H', '2022-04-03 13:40:32', 1, '2022-04-09 03:58:08', 1, 1),
(27, 12, 'Loa vi tính Bluetooth Microlab M600BT', 'loa-vi-tinh-bluetooth-microlab-m600bt', 'loa-vi-tinh-microlab-m600bt-den-ava-10.jpg', 'Loa vi tính Bluetooth Microlab M600BT', 1, 1691000, 1691000, 'Loa vi tính Bluetooth Microlab M600BT', 'Loa vi tính Bluetooth Microlab M600BT', '2022-04-03 13:43:58', 1, '2022-04-09 03:56:44', 1, 1),
(28, 15, 'Tai nghe Có Dây EP Gaming RapooVM150', 'tai-nghe-co-day-ep-gaming-rapoovm150', 'ep-gaming-rapoo-vm150.jpg', 'Tai nghe Có Dây EP Gaming RapooVM150', 10, 399000, 399000, 'Tai nghe Có Dây EP Gaming RapooVM150', 'Tai nghe Có Dây EP Gaming RapooVM150', '2022-04-03 13:44:40', 1, '2022-04-09 05:02:34', 1, 1),
(29, 16, 'USB 3.1 GB Transcend jetFlash 760 Đen Tím', 'usb-3-1-gb-transcend-jetflash-760-den-tim', 'usb-31-32gb-transcend-jetflash-760.jpg', 'USB 3.1 GB Transcend jetFlash 760 Đen Tím', 10, 250000, 250000, 'USB 3.1 GB Transcend jetFlash 760 Đen Tím', 'USB 3.1 GB Transcend jetFlash 760 Đen Tím', '2022-04-03 13:45:46', 1, '2022-04-09 05:02:32', 1, 1),
(30, 15, 'Tai nghe Chụp tai Gaming Rapoo VH520C Đen', 'tai-nghe-chup-tai-gaming-rapoo-vh520c-den', 'tai-nghechup-tai-gaming-rapoo-vh520.jpg', 'Tai nghe Chụp tai Gaming Rapoo VH520C Đen', 10, 479000, 479000, 'Tai nghe Chụp tai Gaming Rapoo VH520C Đen', 'Tai nghe Chụp tai Gaming Rapoo VH520C Đen', '2022-04-03 13:46:53', 1, '2022-04-09 05:02:29', 1, 1),
(31, 17, 'Chuột Có Dây Gaming Zadez G-610M', 'chuot-co-day-gaming-zadez-g-610m', 'chuot-gaming-zadez-g-610m-den01.jpg', 'Chuột Có Dây Gaming Zadez G-610M', 10, 171000, 171000, 'Chuột Có Dây Gaming Zadez G-610M', 'Chuột Có Dây Gaming Zadez G-610M', '2022-04-03 13:47:53', 1, '2022-04-09 05:02:26', 1, 1),
(32, 18, 'Miếng lót chuột Zadez 444 (Cao cấp)', 'mieng-lot-chuot-zadez-444-cao-cap', 'zadez-gp-444.jpg', 'Miếng lót chuột Zadez <br> 444', 10, 95000, 95000, 'Miếng lót chuột Zadez 444', 'Miếng lót chuột Zadez 444', '2022-04-03 13:49:07', 1, '2022-05-15 09:48:08', 31, 1),
(33, 17, 'Chuột Không Dây Gaming Razer Basilisk x HyperSpeed', 'chuot-khong-day-gaming-razer-basilisk-x-hyperspeed', 'chuot-khong-day-gaming-razer-basilisk-x-hyperspeed.jpg', 'Chuột Không Dây Gaming Razer Basilisk x HyperSpeed', 10, 1130000, 1130000, 'Chuột Không Dây Gaming Razer Basilisk x HyperSpeed', 'Chuột Không Dây Gaming Razer Basilisk x HyperSpeed', '2022-04-03 13:49:48', 1, '2022-04-09 05:02:21', 1, 1),
(34, 17, 'Chuột Không Dây Bluetooth Gaming Corsair Iron Claw RGB', 'chuot-khong-day-bluetooth-gaming-corsair-iron-claw-rgb', 'chuot-khong-day-gaming-corsair-iron-claw-.jpg', 'Chuột Không Dây Bluetooth Gaming Corsair Iron Claw RGB', 10, 1890000, 1890000, 'Chuột Không Dây Bluetooth Gaming Corsair Iron Claw RGB', 'Chuột Không Dây Bluetooth Gaming Corsair Iron Claw RGB', '2022-04-03 13:50:32', 1, '2022-04-09 05:02:20', 1, 1),
(35, 19, 'Bàn Phím Cơ Có Dây Gaming Razer Black V3 Đen', 'ban-phim-co-co-day-gaming-razer-black-v3-den', 'ban-phim-co-co-day-gaming-razer-blackwidow-v3-ava.jpg', 'Bàn Phím Cơ Có Dây Gaming Razer Black V3 Đen', 10, 3094000, 3094000, 'Bàn Phím Cơ Có Dây Gaming Razer Black V3 Đen', 'Bàn Phím Cơ Có Dây Gaming Razer Black V3 Đen', '2022-04-03 13:51:14', 1, '2022-04-09 05:02:18', 1, 1),
(36, 20, 'Ổ cứng SSD 500GB WD My Passport GO Xanh Dương', 'o-cung-ssd-500gb-wd-my-passport-go-xanh-duong', 'o-cung-ssd-500gb-wd-my-passport-go-xanh-duong.jpg', 'Ổ cứng SSD 500GB WD My Passport GO Xanh Dương', 10, 2790000, 2790000, 'Ổ cứng SSD 500GB WD My Passport GO Xanh Dương', 'Ổ cứng SSD 500GB WD My Passport GO Xanh Dương', '2022-04-03 13:51:57', 1, '2022-04-12 08:25:17', 31, 1),
(37, 5, 'MSI Gaming Stealth 15M A11UEK i7 11375H', 'msi-gaming-stealth-15m-a11uek-i7-11375h', 'msi-gaming-stealth-15m-a11uek.jpg', 'CPU i7 11375H <br>RAM: 16GB<br> Màn hình: 15.6\" FullHD <br>Ổ cứng:SSD 512GB', 1, 36790000, 36790000, 'Laptop MSI Gaming Stealth 15M A11UEK i7 11375H', 'Laptop MSI Gaming Stealth 15M A11UEK i7 11375H', '2022-05-10 07:01:19', 31, '2022-05-10 07:18:20', 31, 1),
(38, 5, 'MSI Gaming Pulse GL66 11UDK i7 11800H', 'msi-gaming-pulse-gl66-11udk-i7-11800h', 'msi-gaming-pulse-gl66-11udk-i7-816vn.jpg', 'CPU i7 11800H <br>RAM: 16GB <br>Màn hình: 15.6\"FullHD<br> Ổ cứng: SSD 512GB', 1, 33990000, 33990000, 'Laptop MSI Gaming Pulse GL66 11UDK i7 11800H', 'Laptop MSI Gaming Pulse GL66 11UDK i7 11800H', '2022-05-10 07:06:44', 31, '2022-05-10 07:18:12', 31, 1),
(39, 5, 'MSI Prestige 15 A11SC I7 1185G7', 'msi-prestige-15-a11sc-i7-1185g7', 'msi-prestige-15-a11sc-i7-052vn.jpg', 'CPU i7 1185G7 RAM: 16GB Màn hình: 15.6\"FullHD Ổ cứng: SSD 512GB', 1, 28990000, 28990000, 'Laptop Prestige 15 A11SC I7 1185G7', 'Laptop Prestige 15 A11SC I7 1185G7', '2022-05-10 07:10:41', 31, '2022-05-10 07:18:03', 31, 1),
(40, 5, 'MSI Gaming Bravo 15 B5DD R5 5600H ', 'msi-gaming-bravo-15-b5dd-r5-5600h', 'msi-gaming-bravo-15-b5dd-r5-5600h.jpg', 'CPU Ryzen 5 5600H <br>RAM: 8GB <br>Màn hình: 15.6FullHD<br>Ổ cứng: SSD 256GB', 1, 18490000, 18490000, 'MSI Gaming Bravo 15 B5DD R5 5600H ', 'MSI Gaming Bravo 15 B5DD R5 5600H ', '2022-05-10 07:17:52', 31, '2022-05-10 07:17:53', 31, 1),
(41, 5, 'MSI Modern 15 A11MU I5 1155G7', 'msi-modern-15-a11mu-i5-1155g7', 'msi-modern-15-a11mu-i5-680vn-22-.jpg', 'CPU i5 1155G7 <br> RAM: 8GB <br>Màn hình: 15.6\"FullHD <br>Ổ cứng SSD 512GB', 1, 17990000, 17990000, 'MSI Modern 15 A11MU I5 1155G7', 'MSI Modern 15 A11MU I5 1155G7', '2022-05-10 07:21:05', 31, '2022-05-10 07:21:07', 31, 1),
(42, 5, 'MSI Creator Z16 A12UET I7 12700H', 'msi-creator-z16-a12uet-i7-12700h', 'msi-creator-z16-a12uet-i7-036vn.jpg', 'CPU i7 12700H<br>RAM: 16GB <br>Màn hình: 16\" 2K <br>Ổ cứng: SSD 1TB', 1, 59990000, 59990000, 'MSI Creator Z16 A12UET I7 12700H', 'MSI Creator Z16 A12UET I7 12700H', '2022-05-10 07:23:55', 31, '2022-05-10 07:23:58', 31, 1),
(43, 5, 'MSI Katana GF66 11UC i7 11800H', 'msi-katana-gf66-11uc-i7-11800h', 'msi-gf66-11uc-i7.jpg', 'CPU i7 11800H <br>RAM: 8GB<br> Màn hình: 15.6\"FullHD<br> Ổ cứng: SSD 512GB', 1, 26990000, 26990000, 'MSI Katana GF66 11UC i7 11800H', 'MSI Katana GF66 11UC i7 11800H', '2022-05-10 07:29:04', 31, '2022-05-10 07:30:02', 31, 1),
(44, 5, 'MSI Moder 14 B11MOU I7 1195G7', 'msi-moder-14-b11mou-i7-1195g7', 'msi-modern-14-b11mou-i7.jpg', 'CPU i7 1195G7 <br>RAM: 8GB <br>Màn hình: 14\"FullHD <br>Ổ cứng: SSD 512GB', 1, 20990000, 20990000, 'MSI Moder 14 B11MOU I7 1195G7', 'MSI Moder 14 B11MOU I7 1195G7', '2022-05-10 07:32:20', 31, '2022-05-10 07:32:22', 31, 1),
(45, 5, 'MSI Moder 14 B11SBU I5 1155G7', 'msi-moder-14-b11sbu-i5-1155g7', 'msi-modern-14-b11sbu-i5.jpg', 'CPU i5 1155G7 <br>RAM: 8GB <br>Màn hình: 14\"FullHD<br> Ổ cứng: SSD 512GB', 1, 20490000, 20490000, 'MSI Moder 14 B11SBU I5 1155G7', 'MSI Moder 14 B11SBU I5 1155G7', '2022-05-10 07:37:14', 31, '2022-05-10 07:37:17', 31, 1),
(46, 5, 'MSI Gaming GF63 Thin10SC I5 10500H', 'msi-gaming-gf63-thin10sc-i5-10500h', 'msi-gaming-gf63-thin-10sc-i5.jpg', 'CPU i5 10500H <br>RAM: 8GB<br> Màn hình: 15.6\"FullHD<br> Ổ cứng: SSD 512GB', 1, 20990000, 20990000, 'MSI Gaming GF63 Thin10SC I5 10500H', 'MSI Gaming GF63 Thin10SC I5 10500H', '2022-05-10 07:40:39', 31, '2022-05-10 07:40:43', 31, 1),
(47, 5, 'MSI Summit E13 Flip I7 1185G7', 'msi-summit-e13-flip-i7-1185g7', 'msi-summit-e13-flip-i7-211.jpg', 'CPU i7 1185G7 <br>RAM: 16GB <br>Màn hình: 13.4\"FullHD<br> Ổ cứng SSD 1TB', 1, 32990000, 32990000, 'MSI Summit E13 Flip I7 1185G7', 'MSI Summit E13 Flip I7 1185G7', '2022-05-10 07:44:25', 31, '2022-05-23 14:30:12', 31, 1),
(48, 9, 'Acer Aspire A315 58 35AG I3 1115G4', 'acer-aspire-a315-58-35ag-i3-1115g4', 'acer-aspire-a315-58-35ag-i3-nxaddsv00b.jpg', 'CPU i3 1115G4 RAM: 4GB Màn hình: 15.6\"FullHD Ổ cứng: SSD 256GB', 1, 11240000, 11240000, 'Acer Aspire A315 58 35AG I3 1115G4', 'Acer Aspire A315 58 35AG I3 1115G4', '2022-05-11 02:13:37', 31, '2022-05-11 02:13:40', 31, 1),
(49, 9, 'Acer Aspire A514 54 5127 I5 1135G7', 'acer-aspire-a514-54-5127-i5-1135g7', 'acer-aspire-a514-54-5127-i5-nxa28sv007.jpg', 'CPU i5 1135G7  <br>RAM: 8GB <br> Màn hình: 14\"FullHD <br> Ổ cứng: SSD 512 GB', 1, 16640000, 16640000, 'Acer Aspire A514 54 5127 I5 1135G7', 'Acer Aspire A514 54 5127 I5 1135G7', '2022-05-11 02:16:34', 31, '2022-05-26 07:20:18', 31, 1),
(50, 9, 'Acer Asprice 7 Gaming A715 42G R4XX R5 5500U', 'acer-asprice-7-gaming-a715-42g-r4xx-r5-5500u', 'acer-aspire-7-gaming-a715-42g-r4xx-r5-5500u-8gb.jpg', 'CPU Ryzen 5, 5500U <br>RAM: 8GB <br>Màn hình: 14\"FullHD <br>Ổ cứng: SSD 512 GB', 1, 17990000, 17990000, 'Acer Asprice 7 Gaming A715 42G R4XX R5 5500U', 'Acer Asprice 7 Gaming A715 42G R4XX R5 5500U', '2022-05-11 02:20:14', 31, '2022-05-11 02:20:19', 31, 1),
(51, 9, 'Acer Swift X SFX16 51G516Q i5 11320H', 'acer-swift-x-sfx16-51g516q-i5-11320h', 'acer-swift-x-sfx16-51g-516q-i5-nxayksv002.jpg', 'CPU i5 11320H <br>RAM: 16GB<br> Màn hình: 16.1\"FullHD<br> Ổ cứng SSD 512GB', 1, 26090000, 26090000, 'Acer Swift X SFX16 51G516Q i5 11320H', 'Acer Swift X SFX16 51G516Q i5 11320H', '2022-05-11 02:23:20', 31, '2022-05-11 02:23:23', 31, 1),
(52, 9, 'Acer Nitro 5 Gaming AN515 57553E I5 11400H', 'acer-nitro-5-gaming-an515-57553e-i5-11400h', 'acer-nitro-5-gaming-an515-57-553e-i5-11400h-8gb-512gb.jpg', 'CPU i5 11400H<br> RAM: 8GB<br> Màn hình: 15.6\"FullHD <br>Ổ cứng: SSD 512GB', 1, 22510000, 22510000, 'Acer Nitro 5 Gaming AN515 57553E I5 11400H', 'Acer Nitro 5 Gaming AN515 57553E I5 11400H', '2022-05-11 02:27:50', 31, '2022-05-11 02:27:52', 31, 1),
(53, 9, 'Acer Nitro 5 Gaming AN515 45R86D R7 5800H', 'acer-nitro-5-gaming-an515-45r86d-r7-5800h', 'acer-nitro-5-gaming-an515-45-r86d-r7-5800h-8gb.jpg', 'CPU Ryzen 7, 5800H  <br>RAM: 8GB <br> Màn hình: 15.6\"FullHD <br> Ổ cứng: SSD 512GB', 1, 28890000, 28890000, 'Acer Nitro 5 Gaming AN515 45R86D R7 5800H', 'Acer Nitro 5 Gaming AN515 45R86D R7 5800H', '2022-05-11 02:30:36', 31, '2022-05-26 07:19:59', 31, 1),
(54, 9, 'Acer Aspire 3 A315 58 59LY I5 1135G7', 'acer-aspire-3-a315-58-59ly-i5-1135g7', 'acer-aspire-3-a315-58-59ly-i5-nxaddsv00g.jpg', 'CPU i5 1135G7 RAM: 8GB Màn hình: 15.6\"FullHD Ổ cứng: SSD 512GB', 1, 15290000, 15290000, 'Acer Aspire 3 A315 58 59LY I5 1135G7', 'Acer Aspire 3 A315 58 59LY I5 1135G7', '2022-05-11 02:33:32', 31, '2022-05-11 02:33:36', 31, 1),
(55, 9, 'Acer Nitro 5 Gaming AN515 57 720A I7 11800H', 'acer-nitro-5-gaming-an515-57-720a-i7-11800h', 'acer-nitro-5-gaming-an515-57-720a-i7-nhqeqsv004.jpg', 'CPU i7 11800H <br>RAM: 8GB <br>Màn hình: 15.6\"FullHD <br>Ổ cứng: SSD 512GB', 1, 25910000, 25910000, 'Acer Nitro 5 Gaming AN515 57 720A I7 11800H', 'Acer Nitro 5 Gaming AN515 57 720A I7 11800H', '2022-05-11 02:36:21', 31, '2022-05-11 02:36:24', 31, 1),
(56, 9, 'Acer Nitro 5 Gaming AN515 57 71VV I7 11800H', 'acer-nitro-5-gaming-an515-57-71vv-i7-11800h', 'acer-nitro-5-gaming-an515-57-71vv-i7.jpg', 'CPU i7 11800H <br>RAM: 8GB  <br>Màn hình: 15.6\"FullHD <br> Ổ cứng: SSD 512GB', 1, 24640000, 24640000, 'Acer Nitro 5 Gaming AN515 57 71VV I7 11800H', 'Acer Nitro 5 Gaming AN515 57 71VV I7 11800H', '2022-05-11 02:40:25', 31, '2022-05-26 07:19:35', 31, 1),
(57, 9, 'Acer Nitro 5 Gaming An515 57 5831 I5 11400H', 'acer-nitro-5-gaming-an515-57-5831-i5-11400h', 'acer-nitro-5-gaming-an515-57-5831-i5.jpg', 'CPU i5 11400H <br>RAM: 8GB<br> Màn hình: 15.6\"FullHD<br> Ổ cứng: SSD 512GB', 1, 26390000, 26390000, 'Acer Nitro 5 Gaming An515 57 5831 I5 11400H', 'Acer Nitro 5 Gaming An515 57 5831 I5 11400H', '2022-05-11 02:42:57', 31, '2022-05-11 02:43:00', 31, 1),
(58, 9, 'Acer Aspire A514 54 511G I5 1135G7', 'acer-aspire-a514-54-511g-i5-1135g7', 'acer-aspire-a514-54-511g-i5-.jpg', 'CPU i5 1135G7 <br>RAM: 8GB <br>Màn hình: 14\"FullHD<br> Ổ cứng: SSD 1TB', 1, 17990000, 17990000, 'Acer Aspire A514 54 511G I5 1135G7', 'Acer Aspire A514 54 511G I5 1135G7', '2022-05-11 02:46:11', 31, '2022-05-11 02:46:13', 31, 1),
(59, 7, 'Dell XPS 17 9710 I7 11800H', 'dell-xps-17-9710-i7-11800h', 'dell-xps-17-9710-i7-xps7i7001.jpg', 'CPU i7 11800H <br>RAM: 16GB<br> Màn hình: 17\"FullHD 4K <br>Ổ cứng: SSD 1TB', 1, 72990000, 72990000, 'Dell XPS 17 9710 I7 11800H', 'Dell XPS 17 9710 I7 11800H', '2022-05-11 02:57:41', 31, '2022-05-11 02:57:44', 31, 1),
(60, 7, 'Dell Gaming G15 5515 R7 5800H', 'dell-gaming-g15-5515-r7-5800h', 'dell-gaming-g15-5515-r7-5800h-8gb-512gb.jpg', 'CPU Ryzen 7, 5800H RAM: 8GB Màn hình: 15.6\"FullHD Ổ cứng: SSD 512GB', 1, 29990000, 29990000, 'Dell Gaming G15 5515 R7 5800H', 'Dell Gaming G15 5515 R7 5800H', '2022-05-11 03:03:55', 31, '2022-05-11 03:03:59', 31, 1),
(61, 7, 'Dell Gaming G15 5511 I5 11400H', 'dell-gaming-g15-5511-i5-11400h', 'dell-gaming-g15-5511-i5-70266676-290322.jpg', 'CPU i5 11400H <br> RAM: 8GB  <br> Màn hình: 15.6\"FullHD <br> Ổ cứng: SSD 256GB', 1, 27490000, 27490000, 'Dell Gaming G15 5511 I5 11400H', 'Dell Gaming G15 5511 I5 11400H', '2022-05-11 03:06:45', 31, '2022-05-16 15:08:53', 31, 1),
(62, 7, 'Dell Vostro 3400 i7 1165G7 ', 'dell-vostro-3400-i7-1165g7', 'dell-vostro-3400-i7-1165g7-8gb-512gb.jpg', 'CPU i7 1165G7<br>RAM: 8GB<br> Màn hình: 14\"FullHD<br> Ổ cứng: SSD 512GB', 1, 25190000, 25190000, 'Dell Vostro 3400 i7 1165G7 ', 'Dell Vostro 3400 i7 1165G7 ', '2022-05-11 03:10:17', 31, '2022-05-16 15:09:57', 31, 1),
(63, 7, 'Dell Inspinron 14 5415 R7 5700U', 'dell-inspinron-14-5415-r7-5700u', 'dell-inspiron-14-5415-r7-5700u-8gb-512gb.jpg', 'CPU Ryzen 7, 5700U <br>RAM: 8GB<br> Màn hình: 14\"FullHD<br> Ổ cứng: SSD 512GB', 1, 23990000, 23990000, 'Dell Inspinron 14 5415 R7 5700U', 'Dell Inspinron 14 5415 R7 5700U', '2022-05-11 03:16:33', 31, '2022-05-16 15:10:10', 31, 1),
(64, 7, 'Dell Vostro 5410 I5 11320H', 'dell-vostro-5410-i5-11320h', 'dell-vostro-5410-i5-11320h-8gb-512gb.jpg', 'CPU i5 11320H <br>RAM: 8GB <br>Màn hình: 14\"FullHD<br> Ổ cứng: SSD 512GB', 1, 23090000, 23090000, 'Dell Vostro 5410 I5 11320H', 'Dell Vostro 5410 I5 11320H', '2022-05-11 03:18:39', 31, '2022-05-16 15:10:31', 31, 1),
(65, 7, 'Dell Inspinron 15 3511 I5 1135G7', 'dell-inspinron-15-3511-i5-1135g7', 'dell-inspiron-15-3511-i5-1135g7-4gb-512g.jpg', 'CPU i5 1135G7 <br>RAM: 4GB <br>Màn hình: 15.6\"FullHD<br> Ổ cứng: SSD 256GB', 1, 19990000, 19990000, 'Dell Inspinron 15 3511 I5 1135G7', 'Dell Inspinron 15 3511 I5 1135G7', '2022-05-11 03:31:35', 31, '2022-05-16 15:11:07', 31, 1),
(66, 7, 'Dell Vostro 5515 R3 5300U ', 'dell-vostro-5515-r3-5300u', 'dell-vostro-5515-r3-5300u-8gb-256gb.jpg', 'CPU Ryzen 3, 5300U<br> RAM: 8GB <br>Màn hình: 15.6\"FullHD <br>Ổ cứng: SSD 256GB', 1, 18390000, 18390000, 'Dell Vostro 5515 R3 5300U ', 'Dell Vostro 5515 R3 5300U ', '2022-05-11 03:34:39', 31, '2022-05-16 15:11:57', 31, 1),
(67, 7, 'Dell Inspinron 350 I5 1135G7 ', 'dell-inspinron-350-i5-1135g7', '5-600x600.jpg', 'CPU i5 1135G7 <br>RAM: 4GB<br> Màn hình: 15.6\"FullHD<br> Ổ cứng: SSD 512GB', 1, 18990000, 18990000, 'Dell Inspinron 350 I5 1135G7 ', 'Dell Inspinron 350 I5 1135G7 ', '2022-05-11 03:36:37', 31, '2022-05-16 15:11:38', 31, 1),
(68, 7, 'Dell Gaming Alienware m15 R6 I7 11800H', 'dell-gaming-alienware-m15-r6-i7-11800h', 'dell-gaming-alienware-m15-r6-i7.jpg', 'CPU i7 11800H <br>RAM: 32GB <br>Màn hình 15.6\"FullHD <br>Ổ cứng: SSD 1TB', 1, 59990000, 59990000, 'Dell Gaming Alienware m15 R6 I7 11800H', 'Dell Gaming Alienware m15 R6 I7 11800H', '2022-05-11 03:39:20', 31, '2022-05-11 03:39:23', 31, 1),
(69, 7, 'Dell XPS 13 9310 I5 1135G7', 'dell-xps-13-9310-i5-1135g7', 'dell-xps-13-9310-i5-1135g7-8gb-512gb.jpg', 'CPU i5 1135G7<br> RAM: 8GB<br> Màn hình: 13.4\"FullHD <br>Ổ cứng: SSD 512GB', 1, 37790000, 37790000, 'Dell XPS 13 9310 I5 1135G7', 'Dell XPS 13 9310 I5 1135G7', '2022-05-11 03:42:00', 31, '2022-05-11 03:42:03', 31, 1),
(70, 11, 'Asus Zenbook UX425E I5 1135G7', 'asus-zenbook-ux425e-i5-1135g7', 'asus-zenbook-ux425e-i5-1135g7-8gb-512gb.jpg', 'CPU i5 1135G7<br> RAM: 8GB <br>Màn hình: 14\"FullHD <br>Ổ cứng: SSD 512GB', 1, 22990000, 22990000, 'Asus Zenbook UX425E I5 1135G7', 'Asus Zenbook UX425E I5 1135G7', '2022-05-11 06:07:29', 31, '2022-05-16 15:11:22', 31, 1),
(71, 11, 'Asus TUF Gaming FX506HC I5 11400H', 'asus-tuf-gaming-fx506hc-i5-11400h', 'asus-tuf-gaming-fx506hc-i5-11400h-8gb-512gb.jpg', 'CPU i5 11400H<br> RAM: 8GB <br>Màn hình: 15.6\"FullHD <br>Ổ cứng: SSD 512GB', 1, 22990000, 22990000, 'Asus TUF Gaming FX506HC I5 11400H', 'Asus TUF Gaming FX506HC I5 11400H', '2022-05-11 06:09:33', 31, '2022-05-16 15:09:11', 31, 1),
(72, 11, 'Asus VivoBook Pro 14 OLED M3401QA R7 5800H', 'asus-vivobook-pro-14-oled-m3401qa-r7-5800h', 'asus-vivobook-pro-oled-m3401qa-r7.jpg', 'CPU Ryzen 7, 5800H <br> RAM: 8GB <br> Màn hình: 14\" 2K  <br>Ổ cứng: SSD 512GB', 1, 21990000, 21990000, 'Asus VivoBook Pro 14 OLED M3401QA R7 5800H', 'Asus VivoBook Pro 14 OLED M3401QA R7 5800H', '2022-05-11 06:12:10', 31, '2022-05-16 15:09:30', 31, 1),
(73, 11, 'Asus VivoBook Flip 14 TP470EA I5 1135G7', 'asus-vivobook-flip-14-tp470ea-i5-1135g7', 'asus-vivobook-tp470ea-i5-1135g7-8gb-512gb.jpg', 'CPU i5 1135G7 <br> RAM: 8GB <br> Màn hình: 14\"  FullHD <br> Ổ cứng: SSD 512 GB', 1, 20090000, 20090000, 'Asus VivoBook Flip 14 TP470EA I5 1135G7', 'Asus VivoBook Flip 14 TP470EA I5 1135G7', '2022-05-11 06:14:46', 31, '2022-05-11 06:15:27', 31, 1),
(74, 11, 'Asus ExpertBook B1400CEAE I5 1135G7', 'asus-expertbook-b1400ceae-i5-1135g7', 'asus-expertbook-b1400ceae-i5-eb3182w.jpg', 'CPU i5 1135G7 <br> RAM: 8GB <br> Màn hình: 14\" FullHD <br> Ổ cứng: SSD 512GB', 1, 18990000, 18990000, 'Asus ExpertBook B1400CEAE I5 1135G7', 'Asus ExpertBook B1400CEAE I5 1135G7', '2022-05-11 06:18:46', 31, '2022-05-11 06:18:49', 31, 1),
(75, 11, 'Asus VivoBook A515EA i3 1115G4 ', 'asus-vivobook-a515ea-i3-1115g4', 'asus-vivobook-a515ea-i3-1115g4-8gb-512gb-win11-.jpg', 'CPU i3 1115G4 <br> RAM: 8GB <br> Màn hình: 15.6\" FullHD <br> Ổ cứng: SSD 512GB', 1, 15490000, 15490000, 'Asus VivoBook A515EA i3 1115G4 ', 'Asus VivoBook A515EA i3 1115G4 ', '2022-05-11 06:22:14', 31, '2022-05-11 06:22:17', 31, 1),
(76, 11, 'Asus TUF Gaming FX506LH I5 10300H', 'asus-tuf-gaming-fx506lh-i5-10300h', 'asus-uf-gaming-fx506lh-i5-hn002t-15.jpg', 'CPU i5 10300H <br> RAM: 8GB <br> Màn hình: 15.6\" FullHD <br> Ổ cứng: SSD 512GB', 1, 20990000, 20990000, 'Asus TUF Gaming FX506LH I5 10300H', 'Asus TUF Gaming FX506LH I5 10300H', '2022-05-11 06:26:31', 31, '2022-05-11 06:26:34', 31, 1),
(77, 11, 'Asus Zenbook 14X OLED UM5401QA R5 5600H', 'asus-zenbook-14x-oled-um5401qa-r5-5600h', 'asus-zenbook-14x-oled-um5401qa-r5-kn209w.jpg', 'CPU Ryzen 5, 5600H <br> RAM: 8GB <br> Màn hình: 14\" 2K <br> Ổ cứng: SSD 512GB', 1, 25990000, 25990000, 'Asus Zenbook 14X OLED UM5401QA R5 5600H', 'Asus Zenbook 14X OLED UM5401QA R5 5600H', '2022-05-11 06:29:11', 31, '2022-05-11 06:29:13', 31, 1),
(78, 11, 'Asus ZenBook Flip UX363EA I5 1135G7', 'asus-zenbook-flip-ux363ea-i5-1135g7', 'asus-zenbook-flip-ux363ea-i5-hp532t-151121.jpg', 'CPU i5 1135G7 <br> RAM: 8GB <br> Màn hình: 13.3\" FullHD <br> Ổ cứng: SSD 512GB', 1, 25990000, 25990000, 'Asus ZenBook Flip UX363EA I5 1135G7', 'Asus ZenBook Flip UX363EA I5 1135G7', '2022-05-11 06:31:23', 31, '2022-05-11 06:31:28', 31, 1),
(79, 11, 'Asus Rog Zrnphyrus Gaming G14 GA401QH R7 5800H', 'asus-rog-zrnphyrus-gaming-g14-ga401qh-r7-5800h', 'asus-rog-zephyrus-gaming-g14-ga401qh-r7-5800hs-8gb.jpg', 'CPU Ryzen 7, 5800H <br> RAM: 8GB <br> Màn hình: 14\" 2K <br> Ổ cứng: SSD 512GB', 1, 27990000, 27990000, 'Asus Rog Zrnphyrus Gaming G14 GA401QH R7 5800H', 'Asus Rog Zrnphyrus Gaming G14 GA401QH R7 5800H', '2022-05-11 06:35:39', 31, '2022-05-11 06:35:42', 31, 1),
(80, 11, 'Asus Zenbook Duo UX482EA I5 1135G7', 'asus-zenbook-duo-ux482ea-i5-1135g7', 'asus-zenbook-ux482ea-i5-ka274t.jpg', 'CPU i5 1135G7 <br> RAM: 8GB <br> Màn hình: 14\" FullHD <br> Ổ cứng: SSD 512GB', 1, 32990000, 32990000, 'Asus Zenbook Duo UX482EA I5 1135G7', 'Asus Zenbook Duo UX482EA I5 1135G7', '2022-05-11 06:38:24', 31, '2022-05-11 06:38:27', 31, 1),
(81, 8, 'Lenovo Ideapad Gaming 315IHU I5  11300H', 'lenovo-ideapad-gaming-315ihu-i5-11300h', 'lenovo-ideapad-gaming-3-15ihu6-i5-82k10178vn.jpg', 'CPU i3 11300H <br> RAM: 8GB <br> Màn hình: 15.6\" FullHD <br> Ổ cứng: SSD 512GB', 1, 19990000, 19990000, 'Lenovo Ideapad Gaming 315IHU I5  11300H', 'Lenovo Ideapad Gaming 315IHU I5  11300H', '2022-05-11 06:48:17', 31, '2022-05-11 06:48:20', 31, 1),
(82, 8, 'Lenovo ThinkBook 14 G2 ITL I7 1165G7', 'lenovo-thinkbook-14-g2-itl-i7-1165g7', 'lenovo-thinkbook-14-g2-itl-i7-20vd003lvn.jpg', 'CPU i7 1165G7 <br> RAM: 8GB <br> Màn hình: 14\"FullHD <br> Ổ cứng: SSD 512GB', 1, 21590000, 21590000, 'Lenovo ThinkBook 14 G2 ITL I7 1165G7', 'Lenovo ThinkBook 14 G2 ITL I7 1165G7', '2022-05-11 06:51:09', 31, '2022-05-11 06:51:13', 31, 1),
(83, 8, 'Lenovo Yoga Slim 7 14ITL I5 1135G7', 'lenovo-yoga-slim-7-14itl-i5-1135g7', 'lenovo-yoga-slim-7-14itl05-i5-82a300dpvn-021121-030538.jpg', 'CPU i5 1135G7 <br> RAM: 8GB <br> Màn hình: 14\"FullHD <br> Ổ cứng: SSD 512GB', 1, 23990000, 23990000, 'Lenovo Yoga Slim 7 14ITL I5 1135G7', 'Lenovo Yoga Slim 7 14ITL I5 1135G7', '2022-05-11 06:53:39', 31, '2022-05-11 06:55:58', 31, 1),
(84, 8, 'Lenovo ThinkBook 14p G2 ACH R5 5600H', 'lenovo-thinkbook-14p-g2-ach-r5-5600h', 'lenovo-thinkbook-14p-g2-ach-r5-20yn001fvn.jpg', 'CPU Ryzen 5, 5600H <br> RAM: 8GB <br> Màn hình: 14\" 2K <br> Ổ cứng: SSD 512GB', 1, 23990000, 23990000, 'Lenovo ThinkBook 14p G2 ACH R5 5600H', 'Lenovo ThinkBook 14p G2 ACH R5 5600H', '2022-05-11 06:55:54', 31, '2022-05-11 06:55:56', 31, 1),
(85, 8, 'Lenovo Yoga Duet 7 13ITL6 I7 1165G7', 'lenovo-yoga-duet-7-13itl6-i7-1165g7', 'lenovo-yoga-duet-7-13itl6-i7-82ma003uvn.jpg', 'CPU i7 1165G7 <br> RAM: 16GB <br> Màn hình: 13\" 2K <br> Ổ cứng: SSD 1TB', 1, 35990000, 35990000, 'Lenovo Yoga Duet 7 13ITL6 I7 1165G7', 'Lenovo Yoga Duet 7 13ITL6 I7 1165G7', '2022-05-11 06:59:19', 31, '2022-05-11 06:59:22', 31, 1),
(86, 8, 'Lenovo Gaming Legion 5 15ACH6 R5 5600H', 'lenovo-gaming-legion-5-15ach6-r5-5600h', 'lenovo-gaming-legion-5-15ach6-r5-82jw00klvn.jpg', 'CPU Ryzen 5, 5600H <br> RAM: 8GB <br> Màn hình: 15.6\" FullHD <br> Ổ cứng: SSD 512GB', 1, 27990000, 27990000, 'Lenovo Gaming Legion 5 15ACH6 R5 5600H', 'Lenovo Gaming Legion 5 15ACH6 R5 5600H', '2022-05-11 07:02:39', 31, '2022-05-11 07:02:42', 31, 1),
(87, 8, 'Lenovo ThinkBook 14s Yoga ITL I5 1135G7', 'lenovo-thinkbook-14s-yoga-itl-i5-1135g7', 'lenovo-thinkbook-14s-yoga-itl-i5-1135g7-8gb-512gb.jpg', 'CPU i5 1135G7 <br> RAM: 16GB <br>  Màn hình: 14\" Full HD <br> Ổ cứng: SSD 512GB', 1, 24990000, 24990000, 'Lenovo ThinkBook 14s Yoga ITL I5 1135G7', 'Lenovo ThinkBook 14s Yoga ITL I5 1135G7', '2022-05-11 07:07:00', 31, '2022-05-11 07:07:03', 31, 1),
(88, 8, 'Lenovo Ideapad 3 15IML05 I3 10110U', 'lenovo-ideapad-3-15iml05-i3-10110u', 'lenovo-ideapad-3-15iml05-i3-81wb01dyvn.jpg', 'CPU I3 10110U <br> RAM: 4GB <br> Màn hình: 15.6\"FullHD <br> Ổ cứng: SSD 256GB', 1, 12490000, 12490000, 'Lenovo Ideapad 3 15IML05 I3 10110U', 'Lenovo Ideapad 3 15IML05 I3 10110U', '2022-05-11 07:11:37', 31, '2022-05-11 07:11:39', 31, 1),
(89, 8, 'Lenovo Yoga Slim 7 Carbon 13ITL5 I7 1165G7', 'lenovo-yoga-slim-7-carbon-13itl5-i7-1165g7', 'lenovo-yoga-slim-7-carbon-13itl5-i7-82ev0017.jpg', 'CPU i7 1165G7 <br> RAM: 16GB <br> Màn hình: 13.3\" 2K <br> Ổ cứng: SSD 1TB', 1, 34990000, 34990000, 'Lenovo Yoga Slim 7 Carbon 13ITL5 I7 1165G7', 'Lenovo Yoga Slim 7 Carbon 13ITL5 I7 1165G7', '2022-05-11 07:30:54', 31, '2022-05-11 07:31:10', 31, 1),
(90, 10, 'HP Pavilion 14 dv0516TU I3 1125G4', 'hp-pavilion-14-dv0516tu-i3-1125g4', 'hp-pavilion-14-dv0516tu-i3-win11-46l88pa.jpg', 'CPU i3 1125G4 <br> RAM: 4GB <br> Màn hình: 14\" FullHD <br> Ổ cứng: SSD 256GB', 1, 14290000, 14290000, 'HP Pavilion 14 dv0516TU I3 1125G4', 'HP Pavilion 14 dv0516TU I3 1125G4', '2022-05-11 08:43:28', 31, '2022-05-11 08:43:30', 31, 1),
(91, 10, 'HP Pavilion X360 14dy0161 I3 1125G4', 'hp-pavilion-x360-14dy0161-i3-1125g4', 'hp-pavilion-x360-14-dy0161tu-i3-4y1d2pa.jpg', 'CPU i3 1125G4 <br> RAM: 4GB <br> Màn hình: 14\" FullHD <br> Ổ cứng: SSD 512GB', 1, 14710000, 14710000, 'HP Pavilion X360 14dy0161 I3 1125G4', 'HP Pavilion X360 14dy0161 I3 1125G4', '2022-05-11 08:46:21', 31, '2022-05-11 08:46:43', 31, 1),
(92, 10, 'HP 15s du3590TU I7 1165G7', 'hp-15s-du3590tu-i7-1165g7', 'hp-15s-du3589tu-i7.jpg', 'CPU i7 1165G7 <br>  RAM: 8GB <br> Màn hình: 15.6\"FullHD <br> Ổ cứng: SSD 512GB', 1, 19690000, 19690000, 'HP 15s du3590TU I7 1165G7', 'HP 15s du3590TU I7 1165G7', '2022-05-11 08:50:37', 31, '2022-05-11 08:50:40', 31, 1),
(93, 10, 'HP Pavilion eg0505TU I5 1135G7', 'hp-pavilion-eg0505tu-i5-1135g7', 'hp-pavilion-15-eg0505tu-i5-1135g7-8gb-512gb-win11.jpg', 'CPU i5 1135G7 <br> RAM: 8GB <br> Màn hình: 15.6\" <br> Ổ cứng: SSD 512GB', 1, 1899000, 1899000, 'HP Pavilion eg0505TU I5 1135G7', 'HP Pavilion eg0505TU I5 1135G7', '2022-05-11 09:45:01', 31, '2022-05-11 09:45:03', 31, 1),
(94, 10, 'HP Pavilion X360 14dy0171 I3 1125G4', 'hp-pavilion-x360-14dy0171-i3-1125g4', 'hp-pavilion-x360-14-dy0171tu-i3-4y1d6pa-170322.jpg', 'CPU i3 1125G4 <br> RAM: 4GB <br> Màn hình: 14\" <br> Ổ cứng: SSD 512GB', 1, 17290000, 17290000, 'HP Pavilion X360 14dy0171 I3 1125G4', 'HP Pavilion X360 14dy0171 I3 1125G4', '2022-05-11 09:48:15', 31, '2022-05-11 09:48:17', 31, 1),
(95, 10, 'HP Probook 450 G8 I3 1115G4', 'hp-probook-450-g8-i3-1115g4', 'hp-probook-450-g8-i3-2h0u4pa.jpg', 'CPU i3 1115G4 <br> RAM: 4GB <br> Màn hình: 15.6\"FullHD <br> Ổ cứng: SSD 256GB', 1, 14390000, 14390000, 'HP Probook 450 G8 I3 1115G4', 'HP Probook 450 G8 I3 1115G4', '2022-05-11 09:52:04', 31, '2022-05-11 09:52:06', 31, 1),
(96, 10, 'HP 15s du1108TU I3 10110U', 'hp-15s-du1108tu-i3-10110u', 'hp-15s-du1108tu-i3-10110u-4gb-256gb-win11.jpg', 'CPU i3 10110U <br> RAM: 4GB <br> Màn hình: 15.6\"FullHD <br> Ổ cứng: SSD 256GB', 1, 12690000, 12690000, 'HP 15s du1108TU I3 10110U', 'HP 15s du1108TU I3 10110U', '2022-05-11 09:54:35', 31, '2022-05-11 09:54:40', 31, 1),
(97, 10, 'HP Envy X360 13 bd0531TTU I5 1135G7', 'hp-envy-x360-13-bd0531ttu-i5-1135g7', 'hp-envy-x360-13-bd0531tu-i5-4y1d1pa.jpg', 'CPU i5 1135G7 <br> RAM: 8GB <br> Màn hình: 13.3\" FullHD <br> Ổ cứng: SSD 256GB', 1, 23690000, 23690000, 'HP Envy X360 13 bd0531TTU I5 1135G7', 'HP Envy X360 13 bd0531TTU I5 1135G7', '2022-05-11 09:59:31', 31, '2022-05-11 10:15:30', 31, 1),
(98, 10, 'HP Envy X360 Convert 13ay1056AU R7 5800U', 'hp-envy-x360-convert-13ay1056au-r7-5800u', 'hp-envy-x360-convert-13-ay1056au-r7-601q8pa.jpg', 'CPU Ryzen 7, 5800U <br> RAM: 8GB <br> Màn hình: 13.3\"FullHD <br> Ổ cứng: SSD 256GB', 1, 25760000, 25760000, 'HP Envy X360 Convert 13ay1056AU R7 5800U', 'HP Envy X360 Convert 13ay1056AU R7 5800U', '2022-05-11 10:18:24', 31, '2022-05-11 10:18:27', 31, 1),
(99, 10, 'HP Gaming VICTUS 16 d0204TX i5 11400H', 'hp-gaming-victus-16-d0204tx-i5-11400h', 'hp-gaming-victus-16-d0204tx-i5-4r0u5pa.jpg', 'CPU i5 11400H <br> RAM: 8GB <br> Màn hình: 16.1\"FullHD <br> Ổ cứng: SSD 512GB', 1, 24990000, 24990000, 'HP Gaming VICTUS 16 d0204TX i5 11400H', 'HP Gaming VICTUS 16 d0204TX i5 11400H', '2022-05-11 10:20:48', 31, '2022-05-11 10:20:50', 31, 1),
(100, 10, 'HP ZBook Firefly 14 G8 I5 1135G7', 'hp-zbook-firefly-14-g8-i5-1135g7', 'hp-zbook-firefly-14-g8-i5-275v5av.jpg', 'CPU i5 1135G7 <br> RAM: 16GB <br> Màn hình: 14\" FullHD <br> Ổ cứng: SSD 512GB', 2, 38090000, 38090000, 'HP ZBook Firefly 14 G8 I5 1135G7', 'HP ZBook Firefly 14 G8 I5 1135G7', '2022-05-11 10:23:57', 31, '2022-05-21 14:10:43', 31, 1),
(101, 19, 'Bàn Phím Cơ Có Dây Gaming Silent Razer BlackWidow Lite', 'ban-phim-co-co-day-gaming-silent-razer-blackwidow-lite', 'razer-blackwidow-lite-ava.jpg', 'Tương thích:\r\n\r\nMacOS (MacBook, iMac)Windows\r\nCách kết nối:\r\n\r\nMicro USB\r\nĐèn LED:\r\n\r\nTrue white LED backlighting\r\nSố phím:\r\n\r\n87 phím\r\nThương hiệu của:\r\n\r\nMỹ', 1, 2151000, 2151000, 'Bàn Phím Cơ Có Dây Gaming Silent Razer BlackWidow Lite', 'Bàn Phím Cơ Có Dây Gaming Silent Razer BlackWidow Lite', '2022-05-26 07:27:04', 31, '2022-05-26 07:27:38', 31, 1),
(102, 19, 'Bàn phím có dây Gaming Asus TUF K1 ', 'ban-phim-co-day-gaming-asus-tuf-k1', 'co-day-gaming-asus-tuf-k1.jpg', 'Tương thích:\r\nWindows\r\nCách kết nối:\r\n<br>\r\nDây cắm USB\r\nĐèn LED:\r\n<br>\r\nRGB\r\nSố phím:\r\n104 Phím\r\n<br>\r\nThương hiệu của:\r\nĐài Loan\r\n<br>\r\nHãng\r\nAsus.', 2, 990000, 990000, 'Bàn phím có dây Gaming Asus TUF K1 ', 'Bàn phím có dây Gaming Asus TUF K1 ', '2022-05-26 07:37:02', 31, '2022-05-26 07:37:39', 31, 1),
(103, 16, 'USB 3.0 16 GB Sandisk CZ600', 'usb-3-0-16-gb-sandisk-cz600', 'usb-30-16gb-sandisk-cz600-1-2.jpg', 'Dung lượng\r\n\r\n16 GB\r\nTốc độ đọc\r\n<br>\r\n100 MB/s\r\nTốc độ ghi\r\n\r\n25 MB/s\r\n<br>\r\nKích thước\r\n\r\nDài 5.9 cm - Ngang 2.18 cm - Dày 0.84 cm\r\n<br>\r\nTrọng lượng\r\n\r\n10 g\r\nSản xuất tại\r\n\r\nTrung Quốc\r\nThương hiệu của\r\n\r\nMỹ\r\nHãng\r\n\r\nSandisk', 2, 180000, 180000, 'USB 3.0 16 GB Sandisk CZ600', 'USB 3.0 16 GB Sandisk CZ600', '2022-05-26 07:57:54', 31, '2022-05-26 07:58:07', 31, 1),
(104, 20, 'Ổ cứng di động HDD 2TB WD My Passport Ultra Bạc ', 'o-cung-di-dong-hdd-2tb-wd-my-passport-ultra-bac', 'o-cung-hdd-2tb-wd-my-passport.jpg', 'Chuẩn kết nối:\r\n\r\nUSB Type-C\r\nDung lượng\r\n\r\n2 TB\r\n<br>\r\nLoại ổ cứng:\r\n\r\nHDD\r\n<br>\r\nTốc độ đọc:\r\n\r\n120 MB/s\r\n<br>\r\nTốc độ ghi:\r\n\r\n115 MB/s\r\n<br>\r\nKích thước:\r\n\r\nCao 11 cm - Ngang 8.15 cm - Dày 1.35 cm\r\n<br>\r\nTrọng lượng:\r\n\r\n~ 150 g\r\n<br>\r\nThương hiệu của:\r\n\r\nMỹ\r\n<br>\r\nSản xuất tại:\r\n\r\nThái Lan / Malaysia', 1, 2990000, 2990000, 'Ổ cứng di động HDD 2TB WD My Passport Ultra Bạc ', 'Ổ cứng di động HDD 2TB WD My Passport Ultra Bạc ', '2022-05-26 08:02:17', 31, '2022-05-26 08:02:20', 31, 1),
(105, 18, 'Miếng lót chuột Zadez GP 780W', 'mieng-lot-chuot-zadez-gp-780w', 'zadez-gp-780w-ava.jpg', 'Miếng lót chuột Zadez GP 780W\r\n<br>\r\nVải cotton 100%', 2, 179000, 179000, 'Miếng lót chuột Zadez GP 780W', 'Miếng lót chuột Zadez GP 780W', '2022-05-26 08:03:53', 31, '2022-05-31 15:29:21', 31, 1),
(106, 12, 'Loa vi tính Microlab <br> B26', 'loa-vi-tinh-microlab-br-b26', 'vi-tinh-microlab-b26-den.jpg', 'Tổng công suất:\r\n\r\n4 W\r\n<br>\r\nNguồn:\r\n\r\nCắm điện dùng\r\n<br>\r\nSố lượng kênh:\r\n\r\n2.0 kênh\r\n<br>\r\nKết nối khác:\r\n\r\nAUXUSB\r\n<br>\r\nPhím điều khiển:\r\n\r\nNút vặn chỉnh âm lượng nhạc\r\n<br>\r\nThương hiệu của:\r\n\r\nTrung Quốc\r\nHãng\r\n\r\nMicrolab. ', 2, 284000, 284000, 'Loa vi tính Microlab B26', 'Loa vi tính Microlab B26', '2022-05-26 08:07:08', 31, '2022-05-31 02:29:12', 31, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lnhv_slider`
--

CREATE TABLE `lnhv_slider` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Mã Slider',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên Slider',
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Liên kết',
  `position` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Vị trí',
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Hình ảnh',
  `orders` int(10) UNSIGNED NOT NULL COMMENT 'Thứ tự',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  `created_by` tinyint(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'Người tạo',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày sửa',
  `updated_by` tinyint(3) UNSIGNED DEFAULT '1' COMMENT 'Người sửa',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '2' COMMENT 'Trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lnhv_slider`
--

INSERT INTO `lnhv_slider` (`id`, `name`, `link`, `position`, `img`, `orders`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(1, 'Khuyễn mãi hè 2020', 'http://domain.com/index.php?option=page&cat=khuyen-mai-he', 'slideshow', 'laptop11.jpg', 1, '2020-07-01 00:12:13', 1, '2022-04-15 14:54:21', 31, 1),
(2, 'Khuyễn mãi mùa khai giảng', 'http://domain.com/index.php?option=page&cat=khuyen-mai-mua-khai-giang', 'slideshow', 'laptop22.jpg', 1, '2020-07-01 00:12:13', 1, '2022-04-15 15:00:24', 31, 1),
(3, 'Khuyễn mãi giáng sinh', 'http://domain.com/index.php?option=page&cat=khuyen-giang-sinh', 'slideshow', 'laptop33.jpg', 1, '2020-07-01 00:12:13', 1, '2022-04-15 15:00:31', 31, 1),
(4, 'Khuyễn mãi Covid', 'http://domain.com/index.php?option=page&cat=khuyen-mai-covid', 'slideshow', 'laptop11.jpg', 1, '2020-07-01 00:12:13', 1, '2022-05-08 08:56:13', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lnhv_topic`
--

CREATE TABLE `lnhv_topic` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Mã chủ đề',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên chủ đề',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Slug tên chủ đề',
  `parentid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Mã cấp cha',
  `orders` int(10) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'Sắp xếp',
  `metakey` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Từ khóa SEO',
  `metadesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mô tả SEO',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  `created_by` tinyint(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'Người tạo',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày sửa',
  `updated_by` tinyint(3) UNSIGNED DEFAULT '1' COMMENT 'Người sửa',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '2' COMMENT 'Trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lnhv_topic`
--

INSERT INTO `lnhv_topic` (`id`, `name`, `slug`, `parentid`, `orders`, `metakey`, `metadesc`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(1, 'Bài viết ', 'bai-viet', 3, 1, 'Từ khóa SEO', 'Mô tả SEO', '2020-07-03 09:14:39', 1, '2022-05-24 06:23:10', 1, 1),
(2, 'Khuyến mãi', 'khuyen-mai', 3, 2, 'Từ khóa SEO', 'Mô tả SEO', '2020-07-03 09:14:39', 1, '2022-05-24 06:24:52', 1, 1),
(3, 'Tất cả bài viết', 'tat-ca-bai-viet', 0, 1, 'Tất cả bài viết', 'Tất cả bài viết', '2022-05-24 06:18:07', 1, '2022-05-24 06:18:07', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lnhv_user`
--

CREATE TABLE `lnhv_user` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Mã tài khoản',
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Họ và tên',
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên đăng nhâp',
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mật khẩu',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Email',
  `gender` tinyint(3) UNSIGNED NOT NULL COMMENT 'Giới tính',
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Điện thoại',
  `img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Hình',
  `roles` tinyint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Quyền truy cập',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày tạo',
  `created_by` tinyint(3) UNSIGNED NOT NULL DEFAULT '1' COMMENT 'Người tạo',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Ngày sửa',
  `updated_by` tinyint(3) UNSIGNED DEFAULT '1' COMMENT 'Người sửa',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '2' COMMENT 'Trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lnhv_user`
--

INSERT INTO `lnhv_user` (`id`, `fullname`, `username`, `password`, `email`, `gender`, `phone`, `img`, `roles`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(31, 'Huy Vũ', 'lenguyenhuyvu', 'e55c4df454191c231cd8a156289a786be26970a5', 'lenguyenhuyvu@gmail.com', 1, '0339145235', 'usernomal.jpg', 1, '2022-04-09 14:20:34', 30, '2022-05-29 03:51:42', 31, 1),
(37, 'khachhang', 'khachhang', '8cb2237d0679ca88db6464eac60da96345513964', 'khachhang@gmail.com', 0, '123456', 'usernm.jpg', 0, '2022-05-22 03:07:52', 31, '2022-05-29 03:59:53', 31, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `lnhv_category`
--
ALTER TABLE `lnhv_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lnhv_contact`
--
ALTER TABLE `lnhv_contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lnhv_menu`
--
ALTER TABLE `lnhv_menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lnhv_order`
--
ALTER TABLE `lnhv_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lnhv_orderdetail`
--
ALTER TABLE `lnhv_orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lnhv_post`
--
ALTER TABLE `lnhv_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lnhv_product`
--
ALTER TABLE `lnhv_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lnhv_slider`
--
ALTER TABLE `lnhv_slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lnhv_topic`
--
ALTER TABLE `lnhv_topic`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lnhv_user`
--
ALTER TABLE `lnhv_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `lnhv_category`
--
ALTER TABLE `lnhv_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã Loại', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `lnhv_contact`
--
ALTER TABLE `lnhv_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã liên hệ', AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `lnhv_menu`
--
ALTER TABLE `lnhv_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã Menu', AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `lnhv_order`
--
ALTER TABLE `lnhv_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Mã đơn hàng', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `lnhv_orderdetail`
--
ALTER TABLE `lnhv_orderdetail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Mã CT Đơn hàng', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `lnhv_post`
--
ALTER TABLE `lnhv_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Mã bài viết', AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `lnhv_product`
--
ALTER TABLE `lnhv_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Mã sản phẩm', AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT cho bảng `lnhv_slider`
--
ALTER TABLE `lnhv_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Mã Slider', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `lnhv_topic`
--
ALTER TABLE `lnhv_topic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Mã chủ đề', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lnhv_user`
--
ALTER TABLE `lnhv_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Mã tài khoản', AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
