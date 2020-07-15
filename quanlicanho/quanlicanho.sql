-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 07:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phongtro`
--

-- --------------------------------------------------------

--
-- Table structure for table `nguoithue`
--

CREATE TABLE `nguoithue` (
  `mathue` int(11) NOT NULL,
  `tennguoithue` varchar(30) NOT NULL,
  `cmnd` int(11) NOT NULL,
  `dob` date NOT NULL,
  `quequan` varchar(30) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `ngaythue` date NOT NULL,
  `sophong` int(11) NOT NULL,
  `nguoithuecung` text NOT NULL,
  `dichvu` text NOT NULL,
  `debt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoithue`
--

INSERT INTO `nguoithue` (`mathue`, `tennguoithue`, `cmnd`, `dob`, `quequan`, `sodienthoai`, `sex`, `ngaythue`, `sophong`, `nguoithuecung`, `dichvu`, `debt`) VALUES
(16, 'Nhựt', 322656226, '1997-01-28', 'Binh Duong', 230626622, 1, '2020-05-09', 10, '[]', '[{\"tenDv\":\"Internet cáp quang\",\"Price\":\"220000\"},{\"tenDv\":\"Truyền hình cáp\",\"Price\":\"50000\"},{\"tenDv\":\"Khác(rác,gửi xe,..)\",\"Price\":\"1000000\"}]', '[]'),
(17, 'Học Lê', 2147483647, '1998-06-03', 'Tây Ninh', 325545481, 1, '2020-06-18', 1, '[]', '[{\"tenDv\":\"Internet cáp quang\",\"Price\":\"220000\"},{\"tenDv\":\"Truyền hình cáp\",\"Price\":\"50000\"}]', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `sophong` int(11) NOT NULL,
  `giaphong` int(11) NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `mota` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`sophong`, `giaphong`, `trangthai`, `mota`) VALUES
(1, 6000000, 1, ' Diện tích căn hộ: từ 43 - 58m2 (2 Phòng ngủ)'),
(2, 6000000, 0, ' Diện tích căn hộ: từ 43 - 58m2 (2 Phòng ngủ)'),
(3, 6000000, 0, ' Diện tích căn hộ: từ 43 - 58m2 (2 Phòng ngủ)'),
(4, 6000000, 0, ' Diện tích căn hộ: từ 43 - 58m2 (2 Phòng ngủ)'),
(5, 10000000, 0, 'Phòng 150m2, 2 tolet riêng  2 phòng ngủ, phù hơp sống 3 người '),
(6, 3000000, 0, 'Phòng 30m2 , 1 tolet riêng , phù hơp sống 1 người '),
(8, 800000, 0, 'Phòng 28m2 , 1 toilet riêng , thích hợp cho sinh viên ở thích ở một mình '),
(9, 850000, 0, 'Phòng 28m2 , 1 toilet riêng , thích hợp cho sinh viên ở thích ở một mình '),
(10, 1000000, 1, 'Phòng 30m2 , 1 tolet riêng , phù hơp sống 1 người'),
(11, 900000, 0, 'Phòng giá rẻ cho sinh viên'),
(12, 1000000, 0, 'Vui vẻ'),
(13, 2000000, 0, 'Phòng thích hợp cho vợ chồng trẻ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userkhachhang`
--

CREATE TABLE `userkhachhang` (
  `id` int(11) UNSIGNED NOT NULL,
  `tenkhach` varchar(180) DEFAULT NULL,
  `taikhoan` varchar(120) NOT NULL,
  `matkhau` varchar(60) NOT NULL,
  `sodienthoai` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userkhachhang`
--

INSERT INTO `userkhachhang` (`id`, `tenkhach`, `taikhoan`, `matkhau`, `sodienthoai`, `email`) VALUES
(1, 'Trịnh Trọng Thành', 'thanhtrinh', '21232f297a57a5a743894a0e4a801fc3', '0256556565', 'trongthanh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nguoithue`
--
ALTER TABLE `nguoithue`
  ADD PRIMARY KEY (`mathue`),
  ADD UNIQUE KEY `sophong` (`sophong`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`sophong`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userkhachhang`
--
ALTER TABLE `userkhachhang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nguoithue`
--
ALTER TABLE `nguoithue`
  MODIFY `mathue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `sophong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userkhachhang`
--
ALTER TABLE `userkhachhang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
