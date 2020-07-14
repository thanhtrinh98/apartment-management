-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 12:30 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 'Trần Minh Hoà', 23524165, '1997-09-19', 'Hàn Quốc', 1262852081, 0, '2018-05-07', 1, '[{\"name\":\"Phan Duy Cường\",\"cmnd\":\"025434176\",\"dob\":\"1997-02-24\",\"quequan\":\"Bến Tre\",\"sodienthoai\":\"0902357290\",\"sex\":\"1\"}]', '[{\"tenDv\":\"Internet cáp quang\",\"Price\":\"220000\"},{\"tenDv\":\"Truyền hình cáp\",\"Price\":\"50000\"},{\"tenDv\":\"Khác(rác,gửi xe,..)\",\"Price\":\"30000\"}]', '[{\"date\":\"3\\/2018\",\"dv1\":\"220000\",\"dv2\":\"50000\",\"dv3\":\"30000\",\"giaphong\":\"1100000\",\"dien\":\"50000\",\"nuoc\":\"50000\",\"khauhao\":\"0\",\"tongtien\":\"1500000\"}]'),
(2, 'Be Dieu', 25434176, '1997-02-02', 'Sài Gòn', 1262852082, 1, '1994-05-05', 2, '[{\"name\":\"Be Ngok\",\"cmnd\":\"025431526\",\"dob\":\"1996-01-08\",\"quequan\":\"Kiên Giang\",\"sodienthoai\":\"0903274542\",\"sex\":\"1\"},{\"name\":\"Be Banh\",\"cmnd\":\"025434321\",\"dob\":\"1995-07-09\",\"quequan\":\"Kiên Giang\",\"sodienthoai\":\"0903474542\",\"sex\":\"1\"}]', '[{\"tenDv\":\"Internet cáp quang\",\"Price\":\"220000\"},{\"tenDv\":\"Truyền hình cáp\",\"Price\":\"50000\"},{\"tenDv\":\"Khác(rác,gửi xe,..)\",\"Price\":45000}]', ''),
(9, 'CocaCola', 25434156, '1997-12-01', 'Tiền Giang', 1262852084, 1, '2018-05-04', 3, '[{\"name\":\"Pesi Dr Thanh\",\"cmnd\":\"02354125\",\"dob\":\"1997-08-07\",\"quequan\":\"Huế\",\"sodienthoai\":\"0903234521\",\"sex\":\"1\"}]', '[{\"tenDv\":\"Internet cáp quang\",\"Price\":\"220000\"}]', '[]'),
(11, 'Doraemon', 123456789, '1997-04-04', 'Nhật Bản', 1262852085, 1, '2018-05-04', 11, '[]', '[]', '[]'),
(13, 'Trần Thị Mẹ', 25341357, '1987-04-05', 'Hà Nội', 1262852087, 1, '2018-05-17', 5, '[]', '[{\"tenDv\":\"Truyền hình cáp\",\"Price\":\"50000\"},{\"tenDv\":\"Khác(rác,gửi xe,..)\",\"Price\":\"850000\"}]', '[{\"date\":\"3\\/2018\",\"dv1\":\"220000\",\"dv2\":\"50000\",\"dv3\":\"30000\",\"giaphong\":\"1100000\",\"dien\":\"50000\",\"nuoc\":\"50000\",\"khauhao\":\"0\",\"tongtien\":\"1500000\"}]');

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
(1, 1100000, 1, 'Phòng nhỏ gọn thích hợp cho các cặp tình nhân'),
(2, 1500000, 1, 'Phòng 50m2 , 1 gác nhỏ , 1 tolet riêng , phù hơp sống 2 người '),
(3, 1500000, 1, 'Phòng 50m2 , 1 gác nhỏ , 1 tolet riêng , phù hơp sống 2 người '),
(4, 2000000, 0, 'Phòng 50m2 , 1 gác nhỏ , 1 tolet riêng , phù hơp sống 2 người '),
(5, 3000000, 1, 'Phòng 150m2 , 1 gác nhỏ , 2 tolet riêng , phù hơp sống 3 người '),
(6, 1000000, 0, 'Phòng 30m2 , 1 tolet riêng , phù hơp sống 1 người '),
(8, 800000, 0, 'Phòng 28m2 , 1 toilet riêng , thích hợp cho sinh viên ở thích ở một mình '),
(9, 850000, 0, 'Phòng 28m2 , 1 toilet riêng , thích hợp cho sinh viên ở thích ở một mình '),
(10, 1000000, 0, 'Phòng 30m2 , 1 tolet riêng , phù hơp sống 1 người'),
(11, 900000, 1, 'Phòng giá rẻ cho sinh viên');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nguoithue`
--
ALTER TABLE `nguoithue`
  MODIFY `mathue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `sophong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
