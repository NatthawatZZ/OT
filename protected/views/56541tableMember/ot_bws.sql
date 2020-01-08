-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 04:17 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ot_bws`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_date`
--

CREATE TABLE `master_date` (
  `dm_id` int(10) NOT NULL COMMENT 'รหัสวันที่ทำโอที',
  `dm_date` datetime DEFAULT NULL COMMENT 'วันที่ทำโอที',
  `dm_time` datetime DEFAULT NULL COMMENT 'ตั้งแต่เวลาจนถึง\n',
  `created_date` datetime DEFAULT NULL COMMENT 'วันที่สร้าง\n',
  `created_by` int(11) DEFAULT NULL COMMENT 'คนที่สร้าง',
  `update_date` datetime DEFAULT NULL COMMENT 'วันที่อัพเดท\n',
  `update_by` int(11) DEFAULT NULL COMMENT 'คนที่อัพเดท',
  `active` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='<double-click to overwrite multiple objects>';

-- --------------------------------------------------------

--
-- Table structure for table `master_position`
--

CREATE TABLE `master_position` (
  `pst_id` int(2) NOT NULL COMMENT 'รหัสตำแหน่ง\n',
  `pst_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ชื่อตำแหน่ง\n',
  `created_date` datetime DEFAULT NULL COMMENT 'วันที่สร้าง\n',
  `created_by` int(11) DEFAULT NULL COMMENT 'คนที่สร้าง',
  `update_date` datetime DEFAULT NULL COMMENT 'วันที่อัพเดท\n',
  `update_by` int(11) DEFAULT NULL COMMENT 'คนที่อัพเดท',
  `active` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='<double-click to overwrite multiple objects>';

--
-- Dumping data for table `master_position`
--

INSERT INTO `master_position` (`pst_id`, `pst_name`, `created_date`, `created_by`, `update_date`, `update_by`, `active`) VALUES
(1, 'มาร์ค', '2020-01-08 00:00:00', NULL, '2020-01-01 00:00:00', NULL, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `table_member`
--

CREATE TABLE `table_member` (
  `mb_id` int(4) NOT NULL COMMENT 'รหัสสมาชิก',
  `psn_id` int(4) NOT NULL COMMENT 'รหัส id พนักงาน\n',
  `mb_title` enum('นาย','นาง','นางสาว') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'คำนำหน้า',
  `mb_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ชื่อ-นามสกุล',
  `mb_idcard` int(13) DEFAULT NULL COMMENT 'หมายเลขบัตรประชาชน\n',
  `mb_mobile` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'หมายเลขโทรศัพท์มือถือ',
  `mb_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'อีเมล',
  `pst_id` int(2) NOT NULL COMMENT 'รหัสตำแหน่ง\n',
  `created_date` datetime DEFAULT NULL COMMENT 'วันที่สร้าง\n',
  `created_by` int(11) DEFAULT NULL COMMENT 'คนที่สร้าง',
  `update_date` datetime DEFAULT NULL COMMENT 'วันที่อัพเดท\n',
  `update_by` int(11) DEFAULT NULL COMMENT 'คนที่อัพเดท',
  `active` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='<double-click to overwrite multiple objects>';

--
-- Dumping data for table `table_member`
--

INSERT INTO `table_member` (`mb_id`, `psn_id`, `mb_title`, `mb_name`, `mb_idcard`, `mb_mobile`, `mb_email`, `pst_id`, `created_date`, `created_by`, `update_date`, `update_by`, `active`) VALUES
(10, 1, 'นาย', 'ชื่อ-สกุล', 2147483647, '1234567890', 'email@email', 1, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 'a'),
(11, 1, 'นาง', 'ทดสอบ', 2147483647, '1234567890', 'email@email', 1, '0000-00-00 00:00:00', NULL, '0000-00-00 00:00:00', NULL, 'b'),
(12, 1, 'นางสาว', 'ชื่อ-สกุล', 2147483647, '1234567890', 'email@email', 1, NULL, NULL, NULL, NULL, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `table_ot`
--

CREATE TABLE `table_ot` (
  `ot_id` int(10) NOT NULL COMMENT 'รหัสค่า OT',
  `mb_id` int(4) NOT NULL COMMENT 'รหัสสมาชิก',
  `ot_date` datetime DEFAULT NULL COMMENT 'วันที่ยืนคำขอ',
  `ot_withdraw` int(2) DEFAULT NULL COMMENT 'ขอเบิก',
  `dm_id` int(10) NOT NULL COMMENT 'รหัสวันที่ทำ OT\n',
  `tv_evidence` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'งานที่ได้รับมอบหมาย',
  `tv_total` double DEFAULT NULL COMMENT 'รวมเป็นเงินทั้งหมด',
  `psn_id` int(4) NOT NULL COMMENT 'รหัส id พนักงาน\n',
  `created_date` datetime DEFAULT NULL COMMENT 'วันที่สร้าง',
  `created_by` int(11) DEFAULT NULL COMMENT 'คนที่สร้าง',
  `update_date` datetime DEFAULT NULL COMMENT 'วันที่อัพเดท\n',
  `update_by` int(11) DEFAULT NULL COMMENT 'คนที่อัพเดท\n',
  `active` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='<double-click to overwrite multiple objects>';

-- --------------------------------------------------------

--
-- Table structure for table `table_personnel`
--

CREATE TABLE `table_personnel` (
  `psn_id` int(4) NOT NULL COMMENT 'รหัส id พนักงาน\n',
  `psn_per_id` int(4) DEFAULT NULL COMMENT 'รหัสพนักงาน\n',
  `created_date` datetime DEFAULT NULL COMMENT 'วันที่สร้าง\n',
  `created_by` int(11) DEFAULT NULL COMMENT 'คนที่สร้าง\n',
  `update_date` datetime DEFAULT NULL COMMENT 'วันที่อัพเดท\n',
  `update_by` int(11) DEFAULT NULL COMMENT 'คนที่อัพเดท\n',
  `active` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table_personnel ( พนักงาน )			\n';

--
-- Dumping data for table `table_personnel`
--

INSERT INTO `table_personnel` (`psn_id`, `psn_per_id`, `created_date`, `created_by`, `update_date`, `update_by`, `active`) VALUES
(1, 1234, '2020-01-01 00:00:00', NULL, '2020-01-01 00:00:00', NULL, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `table_travel`
--

CREATE TABLE `table_travel` (
  `tv_id` int(10) NOT NULL COMMENT 'รหัสค่าเดินทาง\n',
  `mb_id` int(4) NOT NULL COMMENT 'รหัสสมาชิก',
  `tv_date` datetime DEFAULT NULL COMMENT 'วันที่ยืนคำขอ',
  `tv_withdraw` int(2) DEFAULT NULL COMMENT 'ขอเบิก',
  `tv_date_travel` datetime NOT NULL COMMENT 'วันที่เดินทาง',
  `tv_reason` text COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'เหตุผลการขอเบิก',
  `tv_evidence` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'หลักฐานการขอเบิก',
  `tv_total` double DEFAULT NULL COMMENT 'รวมเป็นเงินทั้งหมด',
  `psn_id` int(4) NOT NULL COMMENT 'รหัส id พนักงาน\n',
  `created_date` datetime DEFAULT NULL COMMENT 'วันที่สร้าง',
  `created_by` int(11) DEFAULT NULL COMMENT 'คนที่สร้าง\n',
  `update_date` datetime DEFAULT NULL COMMENT 'วันที่อัพเดท\n',
  `update_by` int(11) DEFAULT NULL COMMENT 'คนที่อัพเดท\n',
  `active` char(1) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table_tavel (ค่าเดินทาง)		\n';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_date`
--
ALTER TABLE `master_date`
  ADD PRIMARY KEY (`dm_id`);

--
-- Indexes for table `master_position`
--
ALTER TABLE `master_position`
  ADD PRIMARY KEY (`pst_id`);

--
-- Indexes for table `table_member`
--
ALTER TABLE `table_member`
  ADD PRIMARY KEY (`mb_id`),
  ADD KEY `fk_Table_member_Table_personnel_idx` (`psn_id`),
  ADD KEY `fk_Table_member_MASTER_POSITION1_idx` (`pst_id`);

--
-- Indexes for table `table_ot`
--
ALTER TABLE `table_ot`
  ADD PRIMARY KEY (`ot_id`),
  ADD KEY `fk_Table_OT_Table_member1_idx` (`mb_id`),
  ADD KEY `fk_Table_OT_MASTER_DATE1_idx` (`dm_id`),
  ADD KEY `fk_Table_OT_Table_personnel1_idx` (`psn_id`);

--
-- Indexes for table `table_personnel`
--
ALTER TABLE `table_personnel`
  ADD PRIMARY KEY (`psn_id`);

--
-- Indexes for table `table_travel`
--
ALTER TABLE `table_travel`
  ADD PRIMARY KEY (`tv_id`),
  ADD KEY `fk_Table_travel_Table_member1_idx` (`mb_id`),
  ADD KEY `fk_Table_travel_Table_personnel1_idx` (`psn_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_position`
--
ALTER TABLE `master_position`
  MODIFY `pst_id` int(2) NOT NULL AUTO_INCREMENT COMMENT 'รหัสตำแหน่ง\n', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_member`
--
ALTER TABLE `table_member`
  MODIFY `mb_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_personnel`
--
ALTER TABLE `table_personnel`
  MODIFY `psn_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'รหัส id พนักงาน\n', AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_member`
--
ALTER TABLE `table_member`
  ADD CONSTRAINT `fk_Table_member_MASTER_POSITION1` FOREIGN KEY (`pst_id`) REFERENCES `master_position` (`pst_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Table_member_Table_personnel` FOREIGN KEY (`psn_id`) REFERENCES `table_personnel` (`psn_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `table_ot`
--
ALTER TABLE `table_ot`
  ADD CONSTRAINT `fk_Table_OT_MASTER_DATE1` FOREIGN KEY (`dm_id`) REFERENCES `master_date` (`dm_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Table_OT_Table_member1` FOREIGN KEY (`mb_id`) REFERENCES `table_member` (`mb_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Table_OT_Table_personnel1` FOREIGN KEY (`psn_id`) REFERENCES `table_personnel` (`psn_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `table_travel`
--
ALTER TABLE `table_travel`
  ADD CONSTRAINT `fk_Table_travel_Table_member1` FOREIGN KEY (`mb_id`) REFERENCES `table_member` (`mb_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Table_travel_Table_personnel1` FOREIGN KEY (`psn_id`) REFERENCES `table_personnel` (`psn_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
