-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 06:57 PM
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
(1, '1', 'admin', '1234', 'admin@mail.com', 'Admin Admin', 'แผนกแอดมิน', '0970616129', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
