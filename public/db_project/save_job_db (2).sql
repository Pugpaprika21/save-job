-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 03:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `save_job_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_system_tb`
--

CREATE TABLE `file_system_tb` (
  `fs_id` int(11) NOT NULL,
  `fs_key_name` varchar(255) NOT NULL,
  `fs_name` varchar(255) NOT NULL,
  `fs_full_path` varchar(255) NOT NULL,
  `fs_type` varchar(255) NOT NULL,
  `fs_tmpname` varchar(255) NOT NULL,
  `fs_error` varchar(10) NOT NULL,
  `fs_size` varchar(255) NOT NULL,
  `fs_real_name` varchar(255) NOT NULL,
  `fs_path_dir` varchar(255) NOT NULL,
  `fs_status` varchar(1) NOT NULL,
  `create_date_at` varchar(50) NOT NULL,
  `create_time_at` varchar(50) NOT NULL,
  `create_ip_at` varchar(50) NOT NULL,
  `ref_type` varchar(100) NOT NULL,
  `ref_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_system_tb`
--

INSERT INTO `file_system_tb` (`fs_id`, `fs_key_name`, `fs_name`, `fs_full_path`, `fs_type`, `fs_tmpname`, `fs_error`, `fs_size`, `fs_real_name`, `fs_path_dir`, `fs_status`, `create_date_at`, `create_time_at`, `create_ip_at`, `ref_type`, `ref_id`) VALUES
(12, 'fs_key_name', 'IMG_20220322_095447.jpg', 'IMG_20220322_095447.jpg', 'image/jpeg', 'C:xampp	mpphp2A81.tmp', '0', '2828961', 'WOSFZAAIuW1686575593810.jpg', '../../../upload/image/', 'Y', '2023-06-12', '20:13:13', '::1', 'manu_main_system_tb', 4);

-- --------------------------------------------------------

--
-- Table structure for table `manu_color_system_tb`
--

CREATE TABLE `manu_color_system_tb` (
  `mcs_id` int(11) NOT NULL,
  `mcs_bgcolor` varchar(20) NOT NULL,
  `mcs_bdcolor` varchar(20) NOT NULL,
  `mcs_status` varchar(1) NOT NULL,
  `create_date_at` varchar(50) NOT NULL,
  `create_time_at` varchar(50) NOT NULL,
  `create_ip_at` varchar(50) NOT NULL,
  `ref_type` varchar(100) NOT NULL,
  `ref_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manu_color_system_tb`
--

INSERT INTO `manu_color_system_tb` (`mcs_id`, `mcs_bgcolor`, `mcs_bdcolor`, `mcs_status`, `create_date_at`, `create_time_at`, `create_ip_at`, `ref_type`, `ref_id`) VALUES
(4, '#285abd', '#134f63', 'Y', '2023-06-12', '20:13:13', '::1', 'manu_main_system_tb', 4);

-- --------------------------------------------------------

--
-- Table structure for table `manu_main_nav_system_tb`
--

CREATE TABLE `manu_main_nav_system_tb` (
  `mmns_id` int(11) NOT NULL,
  `mmns_title` varchar(100) NOT NULL,
  `mmns_status` varchar(1) NOT NULL,
  `create_date_at` varchar(50) NOT NULL,
  `create_time_at` varchar(50) NOT NULL,
  `create_ip_at` varchar(50) NOT NULL,
  `ref_type` varchar(100) NOT NULL,
  `ref_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manu_main_nav_system_tb`
--

INSERT INTO `manu_main_nav_system_tb` (`mmns_id`, `mmns_title`, `mmns_status`, `create_date_at`, `create_time_at`, `create_ip_at`, `ref_type`, `ref_id`) VALUES
(1, 'ระบบหลัก', 'Y', '2023-06-12', '20:13:13', '::1', 'manu_main_system_tb', 4);

-- --------------------------------------------------------

--
-- Table structure for table `manu_main_sub_system_tb`
--

CREATE TABLE `manu_main_sub_system_tb` (
  `mmss_id` int(11) NOT NULL,
  `mmss_title` varchar(50) NOT NULL,
  `mmss_text` varchar(100) NOT NULL,
  `mmss_path` varchar(100) NOT NULL,
  `mmss_status` varchar(1) NOT NULL,
  `create_date_at` varchar(50) NOT NULL,
  `create_time_at` varchar(50) NOT NULL,
  `create_ip_at` varchar(50) NOT NULL,
  `ref_type` varchar(100) NOT NULL,
  `ref_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manu_main_sub_system_tb`
--

INSERT INTO `manu_main_sub_system_tb` (`mmss_id`, `mmss_title`, `mmss_text`, `mmss_path`, `mmss_status`, `create_date_at`, `create_time_at`, `create_ip_at`, `ref_type`, `ref_id`) VALUES
(10, 'เพิ่ม', 'เพิ่มข้อมูล', 'create_data_system.php', 'Y', '2023-06-12', '20:13:13', '::1', 'manu_main_system_tb', 4),
(11, 'ลบ', 'ลบข้อมูล', 'delete_data_system.php', 'Y', '2023-06-12', '20:13:13', '::1', 'manu_main_system_tb', 4),
(12, 'รายการ', 'รายการข้อมูล', 'list_data_system.php', 'Y', '2023-06-12', '20:13:13', '::1', 'manu_main_system_tb', 4);

-- --------------------------------------------------------

--
-- Table structure for table `manu_main_system_tb`
--

CREATE TABLE `manu_main_system_tb` (
  `mms_id` int(11) NOT NULL,
  `mms_title` varchar(255) NOT NULL,
  `mms_text` varchar(255) NOT NULL,
  `mms_path` varchar(100) NOT NULL,
  `mms_status` varchar(1) NOT NULL,
  `create_date_at` varchar(50) NOT NULL,
  `create_time_at` varchar(50) NOT NULL,
  `create_ip_at` varchar(50) NOT NULL,
  `ref_type` varchar(100) NOT NULL,
  `ref_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manu_main_system_tb`
--

INSERT INTO `manu_main_system_tb` (`mms_id`, `mms_title`, `mms_text`, `mms_path`, `mms_status`, `create_date_at`, `create_time_at`, `create_ip_at`, `ref_type`, `ref_id`) VALUES
(4, 'ระบบหลัก', 'เพิ่ม ลบ เเก้ไข เเละการดำเนินการถายในระบบ', '', 'Y', '2023-06-12', '20:13:13', '::1', 'user_tb', 700);

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_token` text NOT NULL,
  `user_status` varchar(2) NOT NULL,
  `create_user_at` int(11) NOT NULL,
  `create_date_at` varchar(100) NOT NULL,
  `create_time_at` varchar(100) NOT NULL,
  `create_ip_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`user_id`, `user_name`, `user_pass`, `user_phone`, `user_email`, `user_token`, `user_status`, `create_user_at`, `create_date_at`, `create_time_at`, `create_ip_at`) VALUES
(700, 'pug', 'pug1234', '0851412210', 'pug@gmail.com', 'e5bd6f800a4b5564949d4e9516675283626bce0d3370f3885ad00b455542a27f', 'Y', 0, '2023-06-10', '10:21:30', '::1'),
(701, 'pug[plo', 'pug1234', '0851412210', 'pug@gmail.com', '136f23bf5cbef8fb2e855ef61729e74634f5d2fc74dedb43234cd760f756a011', 'Y', 0, '2023-06-10', '10:23:33', '::1'),
(702, 'pugedryt', 'pug1234', '0851412210', 'pug@gmail.com', '2868937d30a1f4eb809ca2f4d2b54970db1d601fa69bd80515143bb452072025', 'Y', 0, '2023-06-10', '10:41:59', '::1'),
(703, '6012231021', '6012231021', '0851412210', 'pug@gmail.com', '5d8cf936c96e14d3b1492911b990c2800fe644e74f9193d984c33dfc4fc9a0a1', 'Y', 0, '2023-06-10', '10:50:55', '::1'),
(704, 'iiuiui', 'pug1234', '0851412210', 'pug@gmail.com', 'f82fa4c510dee723262f42d3f2c462278d038b164e3624410af00510adc4b739', 'Y', 0, '2023-06-10', '10:55:45', '::1'),
(705, 'pugooooo', 'pug1234', '0851412210', 'pug@gmail.com', '88f799933890b1d5db30dded26d267a85431dcd2fc03907cc318f4a0609b1144', 'Y', 0, '2023-06-10', '10:58:44', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_system_tb`
--
ALTER TABLE `file_system_tb`
  ADD PRIMARY KEY (`fs_id`);

--
-- Indexes for table `manu_color_system_tb`
--
ALTER TABLE `manu_color_system_tb`
  ADD PRIMARY KEY (`mcs_id`);

--
-- Indexes for table `manu_main_nav_system_tb`
--
ALTER TABLE `manu_main_nav_system_tb`
  ADD PRIMARY KEY (`mmns_id`);

--
-- Indexes for table `manu_main_sub_system_tb`
--
ALTER TABLE `manu_main_sub_system_tb`
  ADD PRIMARY KEY (`mmss_id`);

--
-- Indexes for table `manu_main_system_tb`
--
ALTER TABLE `manu_main_system_tb`
  ADD PRIMARY KEY (`mms_id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_system_tb`
--
ALTER TABLE `file_system_tb`
  MODIFY `fs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `manu_color_system_tb`
--
ALTER TABLE `manu_color_system_tb`
  MODIFY `mcs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manu_main_nav_system_tb`
--
ALTER TABLE `manu_main_nav_system_tb`
  MODIFY `mmns_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manu_main_sub_system_tb`
--
ALTER TABLE `manu_main_sub_system_tb`
  MODIFY `mmss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `manu_main_system_tb`
--
ALTER TABLE `manu_main_system_tb`
  MODIFY `mms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=706;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
