-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 14, 2024 lúc 07:43 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `sdt` int(10) DEFAULT NULL,
  `diachi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `name`, `sdt`, `diachi`) VALUES
('admin', '1', '', NULL, ''),
('vinh1111', '1', 'asdadsa', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(255) NOT NULL,
  `id_kh` int(255) NOT NULL,
  `id_sach` int(255) NOT NULL,
  `soluong` int(255) NOT NULL,
  `gia` int(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `id_nhomkh` int(255) NOT NULL,
  `tinhthanhpho` int(11) DEFAULT NULL,
  `quanhuyen` varchar(255) DEFAULT NULL,
  `phuongxa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `name`, `sdt`, `diachi`, `id_nhomkh`, `tinhthanhpho`, `quanhuyen`, `phuongxa`) VALUES
(120, 'DIbala 1123', '2133213', '29 Hà Nội', 1, 1, '002', '00082'),
(123, 'Versace Pour Homme 1234', '0987654321', 'UBND XÃ Đất Mới', 1, NULL, NULL, NULL),
(124, 'asdadsa', '987654321', 'UBND XÃ Đất Mới 2', 2, NULL, NULL, NULL),
(125, 'Lê Đình Vinh', '0988226291', 'Đức Thượng-Hoài Đức-Hà Nội', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `name`, `diachi`, `phone`, `description`) VALUES
(1, 'CTY TNHH S', 'UBND XÃ ĐẤT MỚI', 322435789, 'CTY TNHH S: NCC'),
(2, 'CTY TaoBao', 'Ủy Ban Xã Hồ Nam', 2147483647, 'CTY Tao : NCC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sach` varchar(255) NOT NULL,
  `theloai` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomkhachhang`
--

CREATE TABLE `nhomkhachhang` (
  `id` int(255) NOT NULL,
  `name_kh` varchar(255) DEFAULT 'khachvanglai',
  `sale` int(10) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhomkhachhang`
--

INSERT INTO `nhomkhachhang` (`id`, `name_kh`, `sale`) VALUES
(1, 'Khách Vãng Lai', 5),
(2, 'Khách Thân Quen', 11),
(3, 'VIP', 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhaphang`
--

CREATE TABLE `phieunhaphang` (
  `id` int(255) NOT NULL,
  `id_nhacungcap` int(255) NOT NULL,
  `id_sach` int(255) NOT NULL,
  `soluong` int(255) NOT NULL,
  `gianhap` int(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `id_theloai` int(50) NOT NULL,
  `ngaynhapkho` date NOT NULL,
  `mota` varchar(1000) NOT NULL,
  `soluong` int(255) NOT NULL,
  `gia` varchar(255) NOT NULL COMMENT 'giá nhập',
  `giaban` varchar(255) NOT NULL COMMENT 'giá bán',
  `tacgia` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`id`, `name`, `img`, `id_theloai`, `ngaynhapkho`, `mota`, `soluong`, `gia`, `giaban`, `tacgia`) VALUES
(101, 'Tô Bình Yên Vẽ Hạnh Phúc (Tái Bản 2022)', 'Screenshot 2024-03-30 220547.png', 1, '2024-12-09', 'Câu chuyện cảm động về tình yêu và sự sống.', 10, '64,800', '130000', 'José Mauro de Vasconcelos'),
(102, 'Cây Cam Ngọt Của Tôi', '', 5, '2024-01-05', 'Câu chuyện cảm động về tình yêu và sự sống.', 12, '64,800', '100000', 'José Mauro de Vasconcelos'),
(103, 'Vị Thần Của Những Quyết Định', 'Screenshot 2024-03-31 163313.png', 1, '2023-12-12', 'Phương pháp mới giúp giải quyết vấn đề thông qua câu hỏi và vị thần quyết định.', 13, '51,400', '150000', 'Universe'),
(104, 'Không Phải Sói Nhưng Cũng Đừng Là Cừu', 'Screenshot 2024-05-11 084935.png', 1, '2023-07-08', 'Sự thấu suốt và thách thức lối tư duy của bạn.', 14, '86.900', '120000', 'Lê Bảo Ngọc'),
(105, 'Chuyện Tâm Lý Trong Phòng Pháp Lý', '439024754_945137823958230_6552558436107716295_n.jpg', 1, '2023-10-10', 'Sự thấu suốt và thách thức lối tư duy của bạn.', 15, '108,800', '120000', 'Lê Bảo Ngọc'),
(106, 'Nóng Giận Là Bản Năng , Tĩnh Lặng Là Bản Lĩnh', '', 5, '2024-04-03', 'Cung cấp những bài học và lời tâm sự về nhân sinh, giúp bạn hiểu rõ hơn về cuộc sống và cách sống hạnh phúc.', 16, '57,400', '123000', 'Tống Mặc'),
(107, 'Thiên Tài Bên Trái, Kẻ Điên Bên Phải (Tái Bản)', '', 2, '2024-03-23', 'Khám phá thế giới của những người đặc biệt, kẻ gây rối và người chống đối.', 17, '116,000', '257000', 'Cao Minh'),
(108, 'Sổ Tay Nhà Thôi Miên', '', 3, '2024-02-22', 'Câu chuyện hấp dẫn và bí ẩn về những thế giới giả tạo.', 0, '98,800', '258000', 'Cao Minh'),
(109, 'Khúc Nhạc Vĩnh Hằng', '', 4, '2024-01-17', 'Tuyển tập truyện ngắn đa dạng với nhiều đề tài và phong cách khác nhau.', 3, '158,900', '300000', 'Cao Minh'),
(110, 'Hãy Tìm Tôi Giữa Cánh Đồng', 'Screenshot 2024-04-07 163931.png', 1, '2024-01-18', 'Thái độ và chân lý hiểu biết về công việc và cuộc sống.', 2, '211,050', '300000', 'Cao Minh'),
(359, ' Ông già và biển cả', '', 1, '2024-05-03', 'Tác phẩm này được viết theo thể loại truyện viễn tưởng và được nhiều người đọc biết đến với nguyên lý “tảng băng trôi” với lý thuyết là một phần nổi - bảy phần chìm. Câu chuyện xoay quanh về cuộc đối đầu không cân sức giữa ông lão đánh cá và con cá hung dữ giữa biển khơi.', 27, '80000', '270000', 'Ernest Hemingway');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `chuthich` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `name`, `chuthich`) VALUES
(1, 'Văn Học', ''),
(2, 'Tiểu Sử Hồi Kĩ', ''),
(3, 'Kinh Tế - Chính Trị', ''),
(4, 'Tâm Lý - Kĩ Năng Sống', ''),
(5, 'Sách Thiếu Nhi', ''),
(6, 'Nghệ Thuật - Giải Trí', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hoadon_khachhang` (`id_kh`),
  ADD KEY `fk_hoadon_sach` (`id_sach`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_khachang_nhomkhachhang` (`id_nhomkh`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhomkhachhang`
--
ALTER TABLE `nhomkhachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phieunhaphang`
--
ALTER TABLE `phieunhaphang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_phieunhap_nhacungcap` (`id_nhacungcap`),
  ADD KEY `fk_phieunhap_sach` (`id_sach`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sach_theloai` (`id_theloai`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhomkhachhang`
--
ALTER TABLE `nhomkhachhang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phieunhaphang`
--
ALTER TABLE `phieunhaphang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_khachhang` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `fk_hoadon_sach` FOREIGN KEY (`id_sach`) REFERENCES `sach` (`id`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `fk_khachang_nhomkhachhang` FOREIGN KEY (`id_nhomkh`) REFERENCES `nhomkhachhang` (`id`);

--
-- Các ràng buộc cho bảng `phieunhaphang`
--
ALTER TABLE `phieunhaphang`
  ADD CONSTRAINT `fk_phieunhap_nhacungcap` FOREIGN KEY (`id_nhacungcap`) REFERENCES `nhacungcap` (`id`),
  ADD CONSTRAINT `fk_phieunhap_sach` FOREIGN KEY (`id_sach`) REFERENCES `sach` (`id`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `fk_sach_theloai` FOREIGN KEY (`id_theloai`) REFERENCES `theloai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
