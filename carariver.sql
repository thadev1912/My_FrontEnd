-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 12, 2022 lúc 04:00 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bdsct`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemthi`
--

CREATE TABLE `diemthi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_sv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tin_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoas`
--

CREATE TABLE `khoas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `makh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkh` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoas`
--

INSERT INTO `khoas` (`id`, `makh`, `tenkh`, `created_at`, `updated_at`) VALUES
(1, 'TC-KT', 'Tài Chính-Kế Toán', '2022-07-26 01:51:57', '2022-07-26 01:51:57'),
(8, 'CNTT', 'Công Nghệ Thông Tin', '2022-07-28 19:05:04', '2022-07-28 19:05:04'),
(9, 'QTKD', 'Quản Trị Kinh Doanh', '2022-07-28 19:12:28', '2022-07-28 19:12:28'),
(10, 'QLĐĐ', 'Quản Lý Đất Đai', '2022-07-28 19:12:33', '2022-07-28 19:12:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `created_at`, `updated_at`, `hoten`, `diachi`, `tieude`, `noidung`, `dienthoai`) VALUES
(3, '2022-09-08 20:12:55', '2022-09-08 20:12:55', 'Thạch Chanh Tha', '29C-Mậu Thân', 'Đặt cọc đất', 'sdfkjskfjskfksjf sfslfkslfk', ''),
(21, '2022-09-08 21:05:13', '2022-09-08 21:05:13', 'SieuGa', 'hcM', 'FSFSFQ', 'SFSFSF', ''),
(22, '2022-09-08 21:05:58', '2022-09-08 21:05:58', 'âddada', 'adadad', 'adad', 'adadad', ''),
(23, '2022-09-08 23:36:00', '2022-09-08 23:36:00', 'ada', 'ada', 'ad', 'ada', 'ada');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_16_011029_create_sinhviens_table', 1),
(6, '2022_07_26_041347_create_khoa_table', 2),
(7, '2022_07_26_072413_create_khoas_table', 3),
(8, '2022_07_29_035837_create_monhoc', 4),
(9, '2022_07_29_065444_create_monhocs_table', 5),
(10, '2022_07_29_095827_diemthi', 6),
(11, '2022_08_16_050001_create_tindatxanh_table', 6),
(12, '2022_08_26_034239_create_tintucthitruong_table', 7),
(13, '2022_08_29_094707_create_nhamau_table', 7),
(14, '2022_09_09_023629_create_lienhe_table', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhocs`
--

CREATE TABLE `monhocs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ma_mon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_mon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tin_chi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhocs`
--

INSERT INTO `monhocs` (`id`, `ma_mon`, `ten_mon`, `tin_chi`, `created_at`, `updated_at`) VALUES
(1, 'TRR', 'Toán Rơi Rạc', '3 Tín Chỉ', NULL, NULL),
(2, 'TA1', 'Tiếng Anh 1', '2 Tín Chỉ', '2022-07-29 00:25:48', '2022-07-29 00:25:48'),
(4, 'MLN', 'Chủ Nghĩa Mác-Le-Nil', '2 Tín Chỉ', '2022-07-29 00:48:42', '2022-07-29 00:48:42'),
(6, 'TTHCM', 'Tử Tưởng Hồ Chí Minh', '2 Tín Chỉ', '2022-07-29 00:51:26', '2022-07-29 00:51:26'),
(7, 'TH', 'Tin Học Căn Bản', '2 Tín Chỉ', '2022-07-29 01:01:00', '2022-07-29 01:01:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhamau`
--

CREATE TABLE `nhamau` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chitiet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhamau`
--

INSERT INTO `nhamau` (`id`, `chitiet`, `hinh`, `created_at`, `updated_at`) VALUES
(1, 'Kết nối giao thương\r\nCửa sổ hướng thiên', 'cara1.jpg', NULL, NULL),
(2, 'Kết nối giao thương\r\nCửa sổ hướng thiên', 'cara13.jpg', NULL, NULL),
(3, 'Kết nối giao thương\r\nCửa sổ hướng thiên', 'cara14.jpg', NULL, NULL),
(4, 'Kết nối giao thương\r\nCửa sổ hướng thiên', 'cara15.jpg', NULL, NULL),
(5, 'Kết nối giao thương\r\nCửa sổ hướng thiên', 'cara16.jpg', NULL, NULL),
(6, 'Kết nối giao thương\r\nCửa sổ hướng thiên', 'cara17.jpg', NULL, NULL),
(7, 'Kết nối giao thương\r\nCửa sổ hướng thiên', 'cara19.jpg', NULL, NULL),
(8, 'Kết nối giao thương\r\nCửa sổ hướng thiên', 'cara4.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhviens`
--

CREATE TABLE `sinhviens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `masv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tensv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noisinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhviens`
--

INSERT INTO `sinhviens` (`id`, `masv`, `tensv`, `gioitinh`, `pban`, `noisinh`, `created_at`, `updated_at`) VALUES
(1, 'CTH1001', 'Nguyễn Hữu Cầu', 'Nam', 'Tài Chính-Ngân Hàng', 'Phong Thạnh-Cầu Kè-Trà Vinh', '2022-07-05 09:03:42', '2022-07-14 09:03:42'),
(2, 'CTH1002', 'Trần Hữu Lượng', 'Nam', 'Công Nghệ Thực Phẩm', 'Phong Thạnh-Cầu Kè-Trà Vinh', '2022-07-05 09:03:42', '2022-07-14 09:03:42'),
(3, 'CTH1003', 'Bùi Mỹ Duyên', 'Nữ', 'Quản Trị Kinh Doanh', 'Phong Thạnh-Cầu Kè-Trà Vinh1', '2022-07-05 09:03:42', '2022-07-14 09:03:42'),
(4, 'CTH1004', 'Lễ Thị Mỹ Dung', 'Nữ', 'Quản Lý Đất Đai', 'Phong Thạnh-Cầu Kè-Trà Vinh', '2022-07-05 09:03:42', '2022-07-14 09:03:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tindatxanh`
--

CREATE TABLE `tindatxanh` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tindatxanh`
--

INSERT INTO `tindatxanh` (`id`, `title`, `noidung`, `tag`, `hinh`, `created_at`, `updated_at`) VALUES
(1, 'Hậu Giang ngày càng chứng tỏ vị thế tại Tây Nam Bộ', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:black\">Với vị trí trung tâm tiểu vùng Tây sông Hậu</span>, tiếp giáp trực tiếp TP Cần Thơ (trung tâm động lực vùng ĐBSCL), và các tỉnh Bạc Liêu, Kiên Giang, Sóc Trăng, nên có rất nhiều lợi thế trong giao thương bằng đường bộ, đường thủy nội địa, đường biển, và cả đường hàng không. Những năm gần đây, Hậu Giang ghi nhận bước nhảy vọt trong phát triển kinh tế, đặc biệt là công nghiệp và logistics với những chỉ số đầy ấn tượng. </span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Trong 10 năm trở lại đây, công nghiệp Hậu Giang phát triển khá nhanh. GRDP lĩnh vực công nghiệp tăng bình quân 12.2%/năm. Giá trị sản xuất công nghiệp tăng bình quân 9.5%/năm. <span style=\"color:black\">Đặc biệt, trong 6 tháng đầu năm 2022 tốc độ tăng trưởng kinh tế Hậu Giang đạt 11% (cùng kỳ là 5.99%), đứng thứ 8 cả nước và cao nhất vùng ĐBSCL. Công nghiệp tăng trưởng đột phá 30,8%, nông nghiệp tăng trưởng 4.49% (mức tăng trưởng cao nhất suốt 10 năm qua), tổng thu ngân sách nhà nước đạt 68.8% dự toán Trung ương giao. </span>Hậu Giang đang có 2 khu công nghiệp (KCN) là KCN Sông Hậu và KCN Tân Phú Thạnh, 8 cụm công nghiệp (CCN) với tổng diện tích 744 ha. Đến nay các KCN, CCN của Hậu Giang đã thu hút trên 114 dự án&nbsp; trong đó có 77 dự án đi vào hoạt động, với tổng mức đầu tư 77.599 tỷ đồng và 3.802,5 triệu USD, tỷ lệ lấp đầy chiếm trên 77,3%. Các KCN, CCN đã đóng góp gần 70% trong tổng số gần 42 nghìn tỷ đồng giá trị sản xuất công nghiệp toàn tỉnh, tăng gần 12 lần so với năm 2004, chiếm hơn 81% cơ cấu khu vực II và gần 20% cơ cấu kinh tế của tỉnh. Quy tụ khoảng 35.000 lao động đang làm việc, ước tính con số này sẽ tăng thêm 8 – 10% mỗi năm.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><img alt=\"\" src=\"/bdsct/public/img/images/220401.jpg\" style=\"height:800px; width:100%\" /></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Bên cạnh sự phát triển vượt trội của công nghiệp, giáo dục cũng là một trong những ưu tiên của tỉnh Hậu Giang, ngân sách và sự đầu tư vào xây dựng cơ sở hạ tầng giáo dục ngày càng nhiều. Điển hình như, UBND tỉnh Hậu Giang đã vận động&nbsp;được gần 32 tỉ đồng từ các mạnh thường quân trong và ngoài tỉnh hỗ trợ để xây dựng trường học. Trong đó, Ngân hàng Vietinbank hỗ trợ 3 tỉ đồng xây dựng trường học trên địa bàn huyện Châu Thành A, Agribank đã tài trợ vào Quỹ \"An sinh xã hội\" của tỉnh Hậu Giang 5 tỉ đồng để xây dựng Trường Tiểu học Tân Bình 1, huyện Phụng Hiệp, tỉnh Hậu Giang. Năm 2022, Tập đoàn Petrovietnam triển khai chương trình an sinh xã hội cho tỉnh Hậu Giang với kinh phí 15,5 tỷ đồng, bao gồm: Trong đó hỗ trợ xây dựng Trường Tiểu học Đông Phú 1 tại huyện Châu Thành, tỉnh Hậu Giang lên đến 5 tỷ đồng và hỗ trợ xây dựng Trường mẫu giáo Sen Hồng, huyện Châu Thành A với kinh phí 2 tỷ đồng.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><img alt=\"\" src=\"/bdsct/public/img/images/cara12.jpg\" style=\"height:608px; width:100%\" /></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Cùng với đó là sự nâng cấp, triển khai đầu tư các tuyến tỉnh lộ, quốc lộ và đặc biệt là các tuyến cao tốc huyết mạch của ĐBSCL đi qua địa bàn tỉnh như: Cao tốc Cần Thơ – Cà Mau, Cao tốc Châu Đốc – Cần Thơ – Sóc Trăng và Cao tốc Hà Tiên – Rạch Giá – Bạc Liêu. Tạo nên hạ tầng giao thông đồng bộ nối kết Đông Nam Bộ và các tình toàn vùng ĐBSCL. Đây là tín hiệu tốt cho Hậu Giang, tạo điều kiện thuận lợi để giao thưởng vận chuyển hàng hóa, tiết kiệm thời gian di chuyển liên vùng, từ đó tối ưu chi phí và tạo động lực kinh tế phát triển vượt bậc hơn.</span></span></p>\r\n\r\n<p>&nbsp;</p>', '', 'cara1.jpg', NULL, '2022-09-11 18:43:00'),
(4, 'Hiện nay các dự án nhà ở tại Khu chung cư (KCC', '<p style=\"text-align:justify\">Hiện nay các dự án nhà ở tại Khu chung cư (KCC), Khu dân cư (KDC), Khu đô thị (KĐT), ngày càng được các nhà đầu tư địa ốc quan tâm. Bởi đây đều là các dự án bất động sản được quy hoạch đồng bộ, rõ ràng về pháp lý, vị trí thuận lợi di chuyển và sở hữu đa dung và những thứ khác</p>', '', 'cara4.jpg', NULL, '2022-09-08 01:59:55'),
(5, 'Bến Tre', '<p>Hiện nay các dự án nhà ở tại Khu chung cư (KCC), Khu dân cư (KDC), Khu đô thị (KĐT), ngày càng được các nhà đầu tư địa ốc quan tâm. Bởi đây đều là các dự án bất động sản được quy hoạch đồng bộ, rõ ràng về pháp lý, vị trí thuận lợi di chuyển và sở hữu đa d</p>', '', 'cara5.jpg', NULL, '2022-08-31 03:22:52'),
(6, 'Hoàng Tâm ngày càng đổi mới', '<p>Hiện nay các dự án nhà ở tại Khu chung cư (KCC), Khu dân cư (KDC), Khu đô thị (KĐT), ngày càng được các nhà đầu tư địa ốc quan tâm. Bởi đây đều là các dự án bất động sản được quy hoạch đồng bộ, rõ ràng về pháp lý, vị trí thuận lợi di chuyển và sở hữu đa d</p>', '', 'cara7.jpg', NULL, '2022-08-31 03:22:41'),
(7, 'Hoàng Tâm ngày càng đổi mới', '<p>Hiện nay các dự án nhà ở tại Khu chung cư (KCC), Khu dân cư (KDC), Khu đô thị (KĐT), ngày càng được các nhà đầu tư địa ốc quan tâm. Bởi đây đều là các dự án bất động sản được quy hoạch đồng bộ, rõ ràng về pháp lý, vị trí thuận lợi di chuyển và sở hữu đa d</p>', '', 'cara9.jpg', NULL, '2022-08-31 03:22:28'),
(8, 'Hoàng Tâm ngày càng đổi mới', '<p>Hiện nay các dự án nhà ở tại Khu chung cư (KCC), Khu dân cư (KDC), Khu đô thị (KĐT), ngày càng được các nhà đầu tư địa ốc quan tâm. Bởi đây đều là các dự án bất động sản được quy hoạch đồng bộ, rõ ràng về pháp lý, vị trí thuận lợi di chuyển và sở hữu đa d</p>', '', 'cara4.jpg', NULL, '2022-08-31 03:22:07'),
(9, 'Hoàng Tâm ngày càng đổi mới', '<p>Hiện nay các dự án nhà ở tại Khu chung cư (KCC), Khu dân cư (KDC), Khu đô thị (KĐT), ngày càng được các nhà đầu tư địa ốc quan tâm. Bởi đây đều là các dự án bất động sản được quy hoạch đồng bộ, rõ ràng về pháp lý, vị trí thuận lợi di chuyển và sở hữu đa d</p>', '', 'cara8.jpg', NULL, '2022-08-31 03:21:46'),
(17, 'Khu dân cư Minh Trí công bố siêu phẩm giới hạn đảm bảo giá trị đầu tư', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Yếu tố an toàn nguồn vốn và tăng trưởng bền vững trở nên quan trọng đối với nhà đầu tư trong bối cảnh nhiều rủi ro tiềm ẩn từ các kênh đầu tư không đảm bảo an toàn. Chính vì vậy, bất động sản pháp lý hoàn chỉnh vẫn là nơi cất giữ nguồn tiền và có tỷ suất sinh lời mang lại nhiều sự an tâm cho giới đầu tư.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Những sản phẩm mang giá trị thực lên ngôi</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Hiện nay các dự án nhà ở tại Khu chung cư (KCC), Khu dân cư (KDC), Khu đô thị (KĐT), ngày càng được các nhà đầu tư địa ốc quan tâm. Bởi đây đều là các dự án bất động sản được quy hoạch đồng bộ, rõ ràng về pháp lý, vị trí thuận lợi di chuyển và sở hữu đa dạng tiện ích bao quanh. Vì vậy tính thanh khoản của sản phẩm nằm trong các dự án này luôn ở mức tốt và khả năng tăng giá ổn định. Điển hình là các dự án nhà ở tại KDC, theo “Thông tư 01/2021/TT-BXD Quy chuẩn kỹ thuật Quốc gia về Quy hoạch xây dựng”, việc xây dựng các KDC phải đảm bảo diện tích đất quy hoạch có đầy đủ các yếu tố: Đất xây dựng công trình nhà ở; Đất xây dựng công trình công cộng, dịch vụ; Đất cho giao thông và hạ tầng kỹ thuật; Đất cây xanh công cộng. Nên sản phẩm bất động sản tại KDC là nơi đảm bảo được tiện nghi cuộc sống, rất phù hợp cho các gia đình. </span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Yếu tố an toàn nguồn vốn và tăng trưởng bền vững trở nên quan trọng đối với nhà đầu tư trong bối cảnh nhiều rủi ro tiềm ẩn từ các kênh đầu tư không đảm bảo an toàn. Chính vì vậy, bất động sản pháp lý hoàn chỉnh vẫn là nơi cất giữ nguồn tiền và có tỷ suất sinh lời mang lại nhiều sự an tâm cho giới đầu tư.</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Những sản phẩm mang giá trị thực lên ngôi</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Hiện nay các dự án nhà ở tại Khu chung cư (KCC), Khu dân cư (KDC), Khu đô thị (KĐT), ngày càng được các nhà đầu tư địa ốc quan tâm. Bởi đây đều là các dự án bất động sản được quy hoạch đồng bộ, rõ ràng về pháp lý, vị trí thuận lợi di chuyển và sở hữu đa dạng tiện ích bao quanh. Vì vậy tính thanh khoản của sản phẩm nằm trong các dự án này luôn ở mức tốt và khả năng tăng giá ổn định. Điển hình là các dự án nhà ở tại KDC, theo “Thông tư 01/2021/TT-BXD Quy chuẩn kỹ thuật Quốc gia về Quy hoạch xây dựng”, việc xây dựng các KDC phải đảm bảo diện tích đất quy hoạch có đầy đủ các yếu tố: Đất xây dựng công trình nhà ở; Đất xây dựng công trình công cộng, dịch vụ; Đất cho giao thông và hạ tầng kỹ thuật; Đất cây xanh công cộng. Nên sản phẩm bất động sản tại KDC là nơi đảm bảo được tiện nghi cuộc sống, rất phù hợp cho các gia đình. </span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><img alt=\"\" src=\"/bdsct/public/img/images/cara12.jpg\" style=\"height:608px; width:100%\" /></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><em>KDC sở hữu pháp lý minh bạch, giá trị đầu tư cao cho các nhà đầu tư.</em></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"background-color:white\">Trong giai đoạn thị trường khó kiểm soát với sự siết chặt tín dụng từ ngân hàng, chứng khoán bấp bênh, tiền ảo lao đao, vàng biến động khó lường, trái phiếu doanh nghiệp không mấy khả quan, lãi suất tiết kiệm có xu hướng tăng song vẫn ở mức thấp khiến nhà đầu tư loay hoay tìm nơi rót vốn nửa cuối năm 2022. Thị trường bất động sản đang trong giai đoạn sàng lọc và đây là cơ hội, thời điểm cho những sản phẩm mang lại giá trị thực cho nhà đầu tư, khách hàng lên ngôi.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"background-color:white\">Giới đầu tư địa ốc quan tâm rất nhiều yếu tố khi lựa chọn các sản phẩm bất động sản để đầu tư như: loại hình sản phẩm, vị trí, quy hoạch hạ tầng, thiết kế, chính sách bán hàng, pháp lý của sản phẩm…Mỗi giai đoạn của thị trường thì nhà đầu tư sẽ ưu tiên các giá trị trong các yếu tố trên để có thể đảm bảo tính thanh khoản cũng như tỷ suất lợi nhuận.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Với những ưu điểm vượt trội về một KDC được quy hoạch bài bản, sở hữu pháp lý rõ ràng, sổ đỏ có thể công chứng sang tên ngay, KDC Minh Trí tọa lạc ngay tại mặt tiền Quốc lộ 1A và là cửa ngõ của Thành phố Cần Thơ, dự án hiện đang trở thành tâm điểm thu hút đầu tư tại Hậu Giang cũng như các tỉnh thành lân cận.</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><img alt=\"\" src=\"/bdsct/public/img/images/cara17.jpg\" style=\"height:650px; width:100%\" /></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><em>KDC Minh Trí hiện đang trở thành tâm điểm thu hút đầu tư tại Hậu Giang cũng như các</em></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><em>&nbsp;tỉnh thành lân cận.</em></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>&nbsp;“Giỏ hàng siêu hot” tại KDC Minh Trí</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"color:black\">Là sản phẩm hiện đại nhằm kiến tạo môi trường sống bậc nhất khu vực, KDC Minh Trí hứa hẹn đồng hành cùng cư dân với hệ thống tiện ích nội khu. Cư dân sẽ thoải mái với các công viên cây xanh và đường chạy bộ ven sông vô cùng mát mẻ, ngắm cảnh và tận hưởng sự yên bình ở chính nơi mình sinh sống.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Sở hữu trọn vẹn các quy chuẩn yêu cầu ở một KDC kiểu mẫu, cư dân KDC Minh Trí <span style=\"color:black\">dễ dàng trải nghiệm hàng loạt tiện ích ngoại khu như: Trung tâm thương mại, hệ thống chăm sóc sức khỏe, spa, gym, bến xe, chợ, khu công nghiệp… Cùng tiện ích nội khu: Công viên, khu vui chơi, siêu thị mini, chuỗi shophouse, cửa hàng ăn uống sầm uất, hệ thống thoát nước mưa, nước thải.... Ngoài ra, KDC Minh Trí được trang bị hệ thống bảo an chất lượng, tường rào an ninh và chốt bảo vệ 24/7. Khu vui chơi, công viên cây xanh tại KDC Minh Trí sẽ là nơi mang đến phút giây thư giãn gần gũi với thiên nhiên. Góp phần hình thành môi trường sống lành mạnh cho các thành viên nhí.</span></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Bên cạnh hàng loạt tiện ích nổi trội của một KDC đa chức năng, lý do tiên quyết tạo nên sự nổi bật của dự án chính là sở hữu mức giá dưới 1 tỷ, dư địa phát triển tăng giá dồi dào. Sắp tới đây, ngày 14/08/2022 sự kiện công bố giỏ hàng “siêu VIP” của KDC Minh Trí sẽ được tổ chức ngay tại khuôn viên dự án, hứa hẹn mang đến những sản phẩm với vị trí đắc địa, kèm mức giá ưu đãi và hàng loạt các chính sách chiết khấu hấp dẫn. </span></span></p>', 'tintuctitruong', 'cara8.jpg', '2022-09-11 18:28:28', '2022-09-11 18:39:24'),
(18, 'âdadaadaddadaada', '<p>adadada</p>', 'adadadad,adfadada', 'cara17.jpg', '2022-09-11 18:43:29', '2022-09-11 18:43:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintucthitruong`
--

CREATE TABLE `tintucthitruong` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintucthitruong`
--

INSERT INTO `tintucthitruong` (`id`, `title`, `noidung`, `tag`, `hinh`, `created_at`, `updated_at`) VALUES
(1, 'Trải nghiệm những sản phẩm cực hot với tầm nhìn triệu view tại cửa ngõ Thành phố Cần Thơ', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Chung cư Tây Đô Plaza liên tục khuấy đảo thị trường bất động sản Tây Nam Bộ nhờ sở hữu những ưu điểm vượt trội đảm bảo lợi nhuận cho các nhà đầu tư, lẫn nhu cầu an cư của các gia đình. Ngày 21/08/2022 tới đây, Tây Đô Plaza sẽ chính thức mang đến giỏ hàng siêu phẩm gồm những căn hộ hiện đại, vị trí tầng cao đẳng cấp với tầm nhìn tuyệt mỹ độc quyền của cư dân Tây Đô Plaza. &nbsp;&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Cơ hội hiếm có cho các nhà đầu tư</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Mang ưu thế là chung cư đầu tiên của Hậu Giang, Tây Đô Plaza trở thành một trong những dự án bất động sản “hot” nhất tại khu vực Đồng bằng sông Cửu Long (ĐBSCL). Sở hữu mặt tiền Quốc lộ 1A huyết mạch giao thương, cư dân Tây Đô Plaza chỉ cần 10 phút di chuyển đến Thành phố Cần Thơ. Với độ cao 16 tầng, Tây Đô Plaza mang đến cho quý cư dân tầm nhìn độc quyền, tận hưởng chất sống hiện đại và ưu điểm vượt trội khi sinh sống tại nơi đây, đặc biệt là những căn hộ tầng cao. Hiện tại Tây Đô Plaza đã tìm được chủ nhân cho hơn 85% căn hộ, và 15% còn lại là những căn hộ mang tầm nhìn thượng đỉnh, sẵn sàng chờ đón những chủ nhân tìm kiếm phong cách sống thi vị và tận hưởng vẻ đẹp hoa lệ của thành phố. Giỏ hàng của đợt mở bán lần này bao gồm những căn hộ hiện đại ở vị trí từ tầng 10 trở lên, đây là tầm nhìn lý tưởng mang đến trải nghiệm sống khác biệt, mà không phải ai cũng có thể sở hữu.</span></span></p>', 'adad,bdsct', 'cara6.jpg', '2022-08-29 20:20:15', '2022-08-31 03:21:07'),
(2, 'Trải nghiệm những sản phẩm cực hot với tầm nhìn triệu view tại cửa ngõ Thành phố Cần Thơ', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Chung cư Tây Đô Plaza liên tục khuấy đảo thị trường bất động sản Tây Nam Bộ nhờ sở hữu những ưu điểm vượt trội đảm bảo lợi nhuận cho các nhà đầu tư, lẫn nhu cầu an cư của các gia đình. Ngày 21/08/2022 tới đây, Tây Đô Plaza sẽ chính thức mang đến giỏ hàng siêu phẩm gồm những căn hộ hiện đại, vị trí tầng cao đẳng cấp với tầm nhìn tuyệt mỹ độc quyền của cư dân Tây Đô Plaza. &nbsp;&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Cơ hội hiếm có cho các nhà đầu tư</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Mang ưu thế là chung cư đầu tiên của Hậu Giang, Tây Đô Plaza trở thành một trong những dự án bất động sản “hot” nhất tại khu vực Đồng bằng sông Cửu Long (ĐBSCL). Sở hữu mặt tiền Quốc lộ 1A huyết mạch giao thương, cư dân Tây Đô Plaza chỉ cần 10 phút di chuyển đến Thành phố Cần Thơ. Với độ cao 16 tầng, Tây Đô Plaza mang đến cho quý cư dân tầm nhìn độc quyền, tận hưởng chất sống hiện đại và ưu điểm vượt trội khi sinh sống tại nơi đây, đặc biệt là những căn hộ tầng cao. Hiện tại Tây Đô Plaza đã tìm được chủ nhân cho hơn 85% căn hộ, và 15% còn lại là những căn hộ mang tầm nhìn thượng đỉnh, sẵn sàng chờ đón những chủ nhân tìm kiếm phong cách sống thi vị và tận hưởng vẻ đẹp hoa lệ của thành phố. Giỏ hàng của đợt mở bán lần này bao gồm những căn hộ hiện đại ở vị trí từ tầng 10 trở lên, đây là tầm nhìn lý tưởng mang đến trải nghiệm sống khác biệt, mà không phải ai cũng có thể sở hữu.</span></span></p>', 'kdcminhtri', 'cara2.jpg', '2022-08-29 20:20:15', '2022-08-31 03:20:49'),
(3, 'Trải nghiệm những sản phẩm cực hot với tầm nhìn triệu view tại cửa ngõ Thành phố Cần Thơ', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Chung cư Tây Đô Plaza liên tục khuấy đảo thị trường bất động sản Tây Nam Bộ nhờ sở hữu những ưu điểm vượt trội đảm bảo lợi nhuận cho các nhà đầu tư, lẫn nhu cầu an cư của các gia đình. Ngày 21/08/2022 tới đây, Tây Đô Plaza sẽ chính thức mang đến giỏ hàng siêu phẩm gồm những căn hộ hiện đại, vị trí tầng cao đẳng cấp với tầm nhìn tuyệt mỹ độc quyền của cư dân Tây Đô Plaza. &nbsp;&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Cơ hội hiếm có cho các nhà đầu tư</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Mang ưu thế là chung cư đầu tiên của Hậu Giang, Tây Đô Plaza trở thành một trong những dự án bất động sản “hot” nhất tại khu vực Đồng bằng sông Cửu Long (ĐBSCL). Sở hữu mặt tiền Quốc lộ 1A huyết mạch giao thương, cư dân Tây Đô Plaza chỉ cần 10 phút di chuyển đến Thành phố Cần Thơ. Với độ cao 16 tầng, Tây Đô Plaza mang đến cho quý cư dân tầm nhìn độc quyền, tận hưởng chất sống hiện đại và ưu điểm vượt trội khi sinh sống tại nơi đây, đặc biệt là những căn hộ tầng cao. Hiện tại Tây Đô Plaza đã tìm được chủ nhân cho hơn 85% căn hộ, và 15% còn lại là những căn hộ mang tầm nhìn thượng đỉnh, sẵn sàng chờ đón những chủ nhân tìm kiếm phong cách sống thi vị và tận hưởng vẻ đẹp hoa lệ của thành phố. Giỏ hàng của đợt mở bán lần này bao gồm những căn hộ hiện đại ở vị trí từ tầng 10 trở lên, đây là tầm nhìn lý tưởng mang đến trải nghiệm sống khác biệt, mà không phải ai cũng có thể sở hữu.</span></span></p>', 'adadad', 'cara5.jpg', '2022-08-29 20:20:15', '2022-08-31 03:20:24'),
(4, 'Trải nghiệm những sản phẩm cực hot với tầm nhìn triệu view tại cửa ngõ Thành phố Cần Thơ', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Chung cư Tây Đô Plaza liên tục khuấy đảo thị trường bất động sản Tây Nam Bộ nhờ sở hữu những ưu điểm vượt trội đảm bảo lợi nhuận cho các nhà đầu tư, lẫn nhu cầu an cư của các gia đình. Ngày 21/08/2022 tới đây, Tây Đô Plaza sẽ chính thức mang đến giỏ hàng siêu phẩm gồm những căn hộ hiện đại, vị trí tầng cao đẳng cấp với tầm nhìn tuyệt mỹ độc quyền của cư dân Tây Đô Plaza. &nbsp;&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Cơ hội hiếm có cho các nhà đầu tư</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Mang ưu thế là chung cư đầu tiên của Hậu Giang, Tây Đô Plaza trở thành một trong những dự án bất động sản “hot” nhất tại khu vực Đồng bằng sông Cửu Long (ĐBSCL). Sở hữu mặt tiền Quốc lộ 1A huyết mạch giao thương, cư dân Tây Đô Plaza chỉ cần 10 phút di chuyển đến Thành phố Cần Thơ. Với độ cao 16 tầng, Tây Đô Plaza mang đến cho quý cư dân tầm nhìn độc quyền, tận hưởng chất sống hiện đại và ưu điểm vượt trội khi sinh sống tại nơi đây, đặc biệt là những căn hộ tầng cao. Hiện tại Tây Đô Plaza đã tìm được chủ nhân cho hơn 85% căn hộ, và 15% còn lại là những căn hộ mang tầm nhìn thượng đỉnh, sẵn sàng chờ đón những chủ nhân tìm kiếm phong cách sống thi vị và tận hưởng vẻ đẹp hoa lệ của thành phố. Giỏ hàng của đợt mở bán lần này bao gồm những căn hộ hiện đại ở vị trí từ tầng 10 trở lên, đây là tầm nhìn lý tưởng mang đến trải nghiệm sống khác biệt, mà không phải ai cũng có thể sở hữu.</span></span></p>', 'Sasasad,fsfs', 'cara6.jpg', '2022-08-29 20:20:15', '2022-08-31 02:58:18'),
(5, 'Trải nghiệm những sản phẩm cực hot với tầm nhìn triệu view tại cửa ngõ Thành phố Cần Thơ', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Chung cư Tây Đô Plaza liên tục khuấy đảo thị trường bất động sản Tây Nam Bộ nhờ sở hữu những ưu điểm vượt trội đảm bảo lợi nhuận cho các nhà đầu tư, lẫn nhu cầu an cư của các gia đình. Ngày 21/08/2022 tới đây, Tây Đô Plaza sẽ chính thức mang đến giỏ hàng siêu phẩm gồm những căn hộ hiện đại, vị trí tầng cao đẳng cấp với tầm nhìn tuyệt mỹ độc quyền của cư dân Tây Đô Plaza. &nbsp;&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Cơ hội hiếm có cho các nhà đầu tư</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Mang ưu thế là chung cư đầu tiên của Hậu Giang, Tây Đô Plaza trở thành một trong những dự án bất động sản “hot” nhất tại khu vực Đồng bằng sông Cửu Long (ĐBSCL). Sở hữu mặt tiền Quốc lộ 1A huyết mạch giao thương, cư dân Tây Đô Plaza chỉ cần 10 phút di chuyển đến Thành phố Cần Thơ. Với độ cao 16 tầng, Tây Đô Plaza mang đến cho quý cư dân tầm nhìn độc quyền, tận hưởng chất sống hiện đại và ưu điểm vượt trội khi sinh sống tại nơi đây, đặc biệt là những căn hộ tầng cao. Hiện tại Tây Đô Plaza đã tìm được chủ nhân cho hơn 85% căn hộ, và 15% còn lại là những căn hộ mang tầm nhìn thượng đỉnh, sẵn sàng chờ đón những chủ nhân tìm kiếm phong cách sống thi vị và tận hưởng vẻ đẹp hoa lệ của thành phố. Giỏ hàng của đợt mở bán lần này bao gồm những căn hộ hiện đại ở vị trí từ tầng 10 trở lên, đây là tầm nhìn lý tưởng mang đến trải nghiệm sống khác biệt, mà không phải ai cũng có thể sở hữu.</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', 'adada,sdfasdfad', 'cara8.jpg', '2022-08-30 03:02:54', '2022-08-31 02:57:55'),
(10, 'Trải nghiệm những sản phẩm cực hot với tầm nhìn triệu view tại cửa ngõ Thành phố Cần Thơ', '<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Chung cư Tây Đô Plaza liên tục khuấy đảo thị trường bất động sản Tây Nam Bộ nhờ sở hữu những ưu điểm vượt trội đảm bảo lợi nhuận cho các nhà đầu tư, lẫn nhu cầu an cư của các gia đình. Ngày 21/08/2022 tới đây, Tây Đô Plaza sẽ chính thức mang đến giỏ hàng siêu phẩm gồm những căn hộ hiện đại, vị trí tầng cao đẳng cấp với tầm nhìn tuyệt mỹ độc quyền của cư dân Tây Đô Plaza. &nbsp;&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><strong>Cơ hội hiếm có cho các nhà đầu tư</strong></span></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><span style=\"font-family:Arial,Helvetica,sans-serif\">Mang ưu thế là chung cư đầu tiên của Hậu Giang, Tây Đô Plaza trở thành một trong những dự án bất động sản “hot” nhất tại khu vực Đồng bằng sông Cửu Long (ĐBSCL). Sở hữu mặt tiền Quốc lộ 1A huyết mạch giao thương, cư dân Tây Đô Plaza chỉ cần 10 phút di chuyển đến Thành phố Cần Thơ. Với độ cao 16 tầng, Tây Đô Plaza mang đến cho quý cư dân tầm nhìn độc quyền, tận hưởng chất sống hiện đại và ưu điểm vượt trội khi sinh sống tại nơi đây, đặc biệt là những căn hộ tầng cao. Hiện tại Tây Đô Plaza đã tìm được chủ nhân cho hơn 85% căn hộ, và 15% còn lại là những căn hộ mang tầm nhìn thượng đỉnh, sẵn sàng chờ đón những chủ nhân tìm kiếm phong cách sống thi vị và tận hưởng vẻ đẹp hoa lệ của thành phố. Giỏ hàng của đợt mở bán lần này bao gồm những căn hộ hiện đại ở vị trí từ tầng 10 trở lên, đây là tầm nhìn lý tưởng mang đến trải nghiệm sống khác biệt, mà không phải ai cũng có thể sở hữu.</span></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>', 'adada,sdfasdfad', 'cara8.jpg', '2022-08-30 03:02:54', '2022-08-31 02:57:55'),
(11, 'test', '<p>adadad</p>', 'adadda', 'cara4.jpg', '2022-09-11 18:45:42', '2022-09-11 18:45:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(20) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'trinh', 'trinh@gmail.com', NULL, '$2y$10$TQM.E6WZpfIhe/GNAshy/OIz0z18Uf3YzxdahxmlQWFzLskDPj8xO', 1, NULL, '2022-09-06 20:55:29', '2022-09-06 20:55:29'),
(5, 'Admin', 'Admin@gmail.com', NULL, '$2y$10$jis23Wuy0Un.F2epknsCv.wstBXx7is7KdlLyI67Or0zrK3r9pd6a', 1, NULL, '2022-09-06 23:40:30', '2022-09-06 23:40:30');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diemthi`
--
ALTER TABLE `diemthi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `khoas`
--
ALTER TABLE `khoas`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `monhocs`
--
ALTER TABLE `monhocs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhamau`
--
ALTER TABLE `nhamau`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `sinhviens`
--
ALTER TABLE `sinhviens`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tindatxanh`
--
ALTER TABLE `tindatxanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintucthitruong`
--
ALTER TABLE `tintucthitruong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `diemthi`
--
ALTER TABLE `diemthi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khoas`
--
ALTER TABLE `khoas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `monhocs`
--
ALTER TABLE `monhocs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nhamau`
--
ALTER TABLE `nhamau`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sinhviens`
--
ALTER TABLE `sinhviens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tindatxanh`
--
ALTER TABLE `tindatxanh`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tintucthitruong`
--
ALTER TABLE `tintucthitruong`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
