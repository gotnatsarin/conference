-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 04:39 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conference`
--

-- --------------------------------------------------------

--
-- Table structure for table `report_booking`
--

CREATE TABLE `report_booking` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `room_place` varchar(255) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `period_t` int(1) NOT NULL COMMENT '0=AM,1=PM',
  `booking_date` date NOT NULL,
  `topic` varchar(255) NOT NULL,
  `usefor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report_booking`
--

INSERT INTO `report_booking` (`id`, `room_id`, `user_id`, `room_name`, `room_place`, `user_fullname`, `period_t`, `booking_date`, `topic`, `usefor`) VALUES
(12, 142, 70, 'ห้องประชุมอำนวยการ', 'อาคารอำนวยการ', 'Kantapat Supaweerawat', 1, '2021-10-14', 'Ur', 'kanta'),
(13, 142, 70, 'ห้องประชุมอำนวยการ', 'อาคารอำนวยการ', 'Kantapat Supaweerawat', 1, '2021-10-08', 'fias', 'tongjarin'),
(14, 153, 70, 'กหกฟ', 'อาคารเฉลิมพระเกียรติ', 'Kantapat Supaweerawat', 0, '2021-11-19', 'ทดสอบ result', 'ทดสอบ result'),
(15, 153, 11, 'กหกฟ', 'อาคารเฉลิมพระเกียรติ', 'Tanapong Keawpho', 0, '2021-10-15', 'ทดสอบ result', 'ทดสอบ result'),
(34, 165, 1, 'asdasdasdasdasdasd', 'อาคารอำนวยการ', 'Admin Admin', 1, '2021-10-28', 'ำอพอพอ', 'พอพำอพ'),
(35, 160, 70, 'ห้องประสงค์', 'อาคารอำนวยการ', 'Kantapat Supaweerawat', 0, '2021-01-01', 'เฟียส', 'หล่อมาก'),
(36, 185, 1, 'ห้องประชุมสำหรับรับรอง', 'อาคารอำนวยการ', 'Admin Admin', 1, '2022-02-18', 'Topic', 'Meeting'),
(37, 177, 1, 'ห้องประชุมพิกุล 1', 'อาคารอำนวยการ', 'Admin Admin', 0, '2021-10-27', 'sdfvdfsv', 'sdvsdv'),
(38, 177, 1, 'ห้องประชุมพิกุล 1', 'อาคารอำนวยการ', 'Admin Admin', 0, '2021-10-26', 'ทดสอบ', 'ทดสอบ'),
(39, 177, 1, 'ห้องประชุมพิกุล 1', 'อาคารอำนวยการ', 'Admin Admin', 1, '2021-10-26', 'ทดสอบ2', 'ทดสอบ'),
(40, 177, 1, 'ห้องประชุมพิกุล 1', 'อาคารอำนวยการ', 'Admin Admin', 1, '2021-10-27', 'ทดสอบ23', 'ทดสอบ'),
(41, 177, 1, 'ห้องประชุมพิกุล 1', 'อาคารอำนวยการ', 'Admin Admin', 0, '2017-10-11', 'อยากจะใช้ห้อง', 'นอน'),
(42, 187, 87, 'ห้องโนว่า', 'อาคารอำนวยการ', 'Natsarin', 1, '2021-10-29', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(5) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `room_building` int(1) NOT NULL COMMENT '0=อาคารอำนวยการ',
  `room_place` varchar(255) NOT NULL,
  `room_capacity` int(30) NOT NULL,
  `room_desc` text NOT NULL,
  `room_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `room_building`, `room_place`, `room_capacity`, `room_desc`, `room_img`) VALUES
(177, 'ห้องประชุมพิกุล 1', 0, 'อาคารอำนวยการ', 86, 'ห้องประชุม Auditorium', 'ห้องประชุมพิกุล 1.jpeg'),
(178, 'ห้องประชุมพิกุล 2', 0, 'อาคารอำนวยการ', 20, 'ห้องประชุม โต๊ะรูปตัว U', 'ห้องประชุมพิกุล 2.jpeg'),
(179, 'ห้องประชุมผู้อำนวยการ', 0, 'อาคารอำนวยการ', 10, 'ห้องประชุม โต๊ะรูปตัว U', 'ห้องประชุมผู้อำนวยการ.jpeg'),
(180, 'ห้องประชุม QC', 1, 'อาคารเฉลิมพระเกียรติ', 10, 'ห้องประชุมโต๊ะรูปตัว U', 'ห้องประชุม QC.png'),
(181, 'ห้องประชุมรังสิต 1', 1, 'อาคารเฉลิมพระเกียรติ', 15, 'ห้องประชุมโต๊ะรูปตัว U', 'ห้องประชุมรังสิต 1.jpeg'),
(182, 'ห้องประชุมรับซอง-เปิดซอง', 0, 'อาคารอำนวยการ', 7, 'ห้องประชุมโต๊ะรูปตัว U', 'ห้องประชุมรับซอง-เปิดซอง.jpeg'),
(183, 'ห้องประชุมสันทนาการ 1', 0, 'อาคารอำนวยการ', 30, 'ห้องประชุมเก้าอี้เลคเชอร์', 'ห้องประชุมสันทนาการ 1.jpeg'),
(184, 'ห้องประชุมสันทนาการ 2', 0, 'อาคารอำนวยการ', 70, 'ห้องประชุมเก้าอี้เลคเชอร์', 'ห้องประชุมสันทนาการ 2.jpeg'),
(185, 'ห้องประชุมสำหรับรับรอง', 0, 'อาคารอำนวยการ', 20, 'ห้องประชุมโต๊ะรูปสี่เหลี่ยมผืนผ้า', 'ห้องประชุมสำหรับรับรอง.jpeg'),
(186, 'ห้องประชุมพิกุล 3', 0, 'อาคารอำนวยการ', 250, 'ห้องประชุม Auditorium', 'ห้องประชุมพิกุล 3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `emp_id` varchar(13) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `dep_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `role` int(1) NOT NULL COMMENT '0=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `emp_id`, `username`, `password`, `email`, `full_name`, `dep_name`, `phone`, `role`) VALUES
(1, '1', 'admin', '1234', 'admin@mail.com', 'Admin Admin', 'แผนกแอดมิน', '0970616129', 0),
(2, NULL, 'admin2', 'admin2', 'admin2@mail.com', 'Admin2 Admin2', 'Admin', '', 0),
(3, NULL, 'user', '1234', 'user@mail.com', 'User User', 'user', '', 1),
(11, 'empid1', 'jadae007', '1234', 'jadae2225@gmail.com', 'Tanapong Keawpho', 'Admin', '0970616129', 1),
(44, 'dsasdas', 'armoho', '1234', 'xxx3', 'dady', 'fgg', 'x', 1),
(70, '1997', 'kantapat97', '1234', 'kantapat.weezy1997@gmail.com', 'Kantapat Supaweerawat', 'วิศวกรรมคอมพิวเตอร์', '0987290448', 1),
(86, 'xs', 'fiasjaaa', '2222', 'xs@s.com', 'xs', 'xs', '3411111111', 1),
(87, '321', 'gotnatsarin', 'got1234', 'gfjkdj@gmail.com', 'Natsarin', '123', '0622165874', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report_booking`
--
ALTER TABLE `report_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD UNIQUE KEY `room_name` (`room_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report_booking`
--
ALTER TABLE `report_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
