-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 01:07 AM
-- Server version: 8.0.26
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptm`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `property_id` int NOT NULL,
  `ulbid` int DEFAULT NULL,
  `name` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `mobileno` varchar(50) DEFAULT NULL,
  `state` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `city` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `surveyno` int DEFAULT NULL,
  `plotno` int DEFAULT NULL,
  `carpetarea` int DEFAULT NULL,
  `propertytype` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `c_status` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`property_id`, `ulbid`, `name`, `email`, `mobileno`, `state`, `city`, `address`, `surveyno`, `plotno`, `carpetarea`, `propertytype`, `c_status`, `timestamp`) VALUES
(1, 1, 'Pravin Jain', 'pravinjain297@gmail.com', '9146579640', 'maharashtra', 'Nashik', 'FLat no 2,Ganga Darshan Apt', 123, 24, 80, 'Flat', '1', '2022-08-25 22:52:38'),
(2, 1, 'Atharva Belge', 'atharvabelge@gmail.com', '9146044043', 'maharashtra', 'Nashik', 'Canada Corner', 125, 25, 150, 'Flat', '1', '2022-08-25 22:56:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `property_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
