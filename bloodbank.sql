-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 07:24 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodinfo`
--

CREATE TABLE `bloodinfo` (
  `id` int(11) NOT NULL,
  `bloodGroup` varchar(4) NOT NULL,
  `qty` int(5) NOT NULL,
  `hospital_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodinfo`
--

INSERT INTO `bloodinfo` (`id`, `bloodGroup`, `qty`, `hospital_id`) VALUES
(14, 'A+', 20, 8),
(15, 'O-', 40, 8),
(16, 'O+', 15, 8),
(17, 'B+', 40, 8),
(18, 'A+', 20, 9),
(19, 'A-', 25, 9),
(20, 'AB-', 10, 9),
(21, 'AB-', 34, 10),
(22, 'A-', 45, 10),
(23, 'B-', 18, 10),
(24, 'O+', 40, 11),
(25, 'AB-', 32, 11),
(26, 'AB+', 15, 12),
(27, 'A-', 45, 12),
(28, 'B+', 24, 12),
(29, 'AB+', 24, 13),
(30, 'O+', 16, 14),
(31, 'AB+', 40, 14),
(32, 'AB-', 30, 15),
(33, 'O+', 28, 15),
(34, 'O-', 20, 15),
(35, 'B+', 30, 16),
(36, 'AB-', 52, 17),
(37, 'A+', 42, 17),
(38, 'O+', 24, 17),
(39, 'O-', 34, 17),
(40, 'B+', 29, 17),
(41, 'O-', 20, 18),
(42, 'AB+', 2, 18),
(43, 'O-', 20, 11),
(44, 'B+', 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `hospitalName` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `displayImage` varchar(50) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zipCode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospitalName`, `address`, `email`, `password`, `displayImage`, `city`, `state`, `zipCode`) VALUES
(8, 'Apollo Hospitals', '154, IIM, 11, Bannerghatta Main Rd, opposite Krishnaraju Layout, Krishnaraju Layout, Amalodbhavi Nag', 'apolloHospitals20@gmail.com', 'abcdef', 'WhatsApp Image 2022-10-01 at 20.34.18.jpeg', 'Bengaluru', 'Karnataka', '110077'),
(9, 'AIIMS', 'Sri Aurobindo Marg, Ansari Nagar, Ansari Nagar East, New Delhi, Delhi 110029', 'aiimsMed34@gmail.com', '123456', 'WhatsApp Image 2022-10-01 at 20.34.16(2).jpeg', 'Delhi', 'Delhi', '110029'),
(10, 'Santom Hospital', 'D-5-6, Prashant Vihar, Outer Ring Road, Rohini, Delhi-110085', 'santomhelp22@gmail.com', 'abcdef', 'WhatsApp Image 2022-10-01 at 20.34.16.jpeg', 'Delhi', 'Delhi', '110085'),
(11, 'Fortis Hospital', 'AA-299, Shaheed Udham Singh Marg, AA Block, Poorbi Shalimar Bag, Shalimar Bagh, Delhi, 110088', 'fortis11@gmail.com', '123456', 'WhatsApp Image 2022-10-01 at 20.34.17.jpeg', 'Delhi', 'Delhi', '110088'),
(12, 'Max Hospital', 'Lower Parel, Friends Colony, Kurla West, Kurla, Mumbai, Maharashtra 400070', 'maxmed30@gmail.com', 'abcdef', 'WhatsApp Image 2022-10-01 at 20.34.17(2).jpeg', 'Mumbai', 'Mumbai', '400070'),
(13, 'Safdarjung Hospital', 'Safdarjung Hospital, juhu, 21-b,Mumbai', 'safdarjung2@gmail.com', '123456', 'WhatsApp Image 2022-10-01 at 20.34.15.jpeg', 'Mumbai', 'Mumbai', '400020'),
(14, 'Blk Hospital', 'BLK-MAX HOSPITAL, Dadar, nehru garden 21, Hyderabad', 'blk2412@gmail.com', 'abcdef', 'WhatsApp Image 2022-10-01 at 20.34.17(1).jpeg', 'Hyderabad', 'Telangana', '240303'),
(15, 'Sir Ganga Ram Hospital', 'Sir Ganga Ram Hospital Marg, Old Rajinder Nagar, New Rajinder Nagar, New Delhi, Delhi 110060', 'gangaRam29@gmail.com', 'abcdef', 'WhatsApp Image 2022-10-01 at 20.34.16(1).jpeg', 'Delhi', 'Delhi', '110060'),
(16, 'Prashant Hospital', 'C-1/17-18, Pvr Prashant Vihar Road, Prashant Vihar, Sector 14, Rohini, Delhi, 110085', 'prashant21@gmail.com', '123456', 'prashant.jpg', 'Delhi', 'Delhi', '110085'),
(17, 'Bhagwaan Mahavir Hospital', ' Bhagawan Mahavir Marg near Madhuban Chowk, Sector 14 Extension, Rohini, Delhi, 110085', 'bmh71@gmail.com', 'abcdef', 'full.jpeg', 'Delhi', 'Delhi', '110085'),
(18, 'Goa Hospital', 'Panaji, Dr E Borges Rd, Dona Paula, Goa 403004', 'goahospital@gmail.com', '123456', 'WhatsApp Image 2022-10-01 at 20.34.17.jpeg', 'Goa', 'Goa', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `recievers`
--

CREATE TABLE `recievers` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `bloodGroup` varchar(4) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `aadhar` varchar(30) NOT NULL,
  `aadharPic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `bloodGroup` varchar(4) NOT NULL,
  `info_id` int(10) NOT NULL,
  `reciever_id` int(10) NOT NULL,
  `hospital_id` int(10) NOT NULL,
  `qty` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `hospitalName` (`hospitalName`);

--
-- Indexes for table `recievers`
--
ALTER TABLE `recievers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `recievers`
--
ALTER TABLE `recievers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
