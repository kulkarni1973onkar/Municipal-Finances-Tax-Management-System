-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 26, 2022 at 03:38 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

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
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(20) NOT NULL,
  `east` int(20) NOT NULL,
  `west` int(20) NOT NULL,
  `north` int(20) NOT NULL,
  `south` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `east`, `west`, `north`, `south`) VALUES
(1, 0, 0, 0, 1),
(2, 10, 7, 14, 18);

-- --------------------------------------------------------

--
-- Table structure for table `area2`
--

CREATE TABLE `area2` (
  `atharva` int(20) NOT NULL,
  `prasad` int(20) NOT NULL,
  `pravin` int(20) NOT NULL,
  `onkar` int(20) NOT NULL,
  `kasturi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area2`
--

INSERT INTO `area2` (`atharva`, `prasad`, `pravin`, `onkar`, `kasturi`) VALUES
(61, 57, 52, 40, 37);

-- --------------------------------------------------------

--
-- Table structure for table `citytaxtable`
--

CREATE TABLE `citytaxtable` (
  `Ulbid` int(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `cr` int(20) NOT NULL,
  `GT1S` int(20) NOT NULL,
  `GT1E` int(20) NOT NULL,
  `GT1R` int(20) NOT NULL,
  `GT2S` int(20) NOT NULL,
  `GT2E` int(20) NOT NULL,
  `GT2R` int(20) NOT NULL,
  `GT3S` int(20) NOT NULL,
  `GT3E` int(20) NOT NULL,
  `GT3R` int(20) NOT NULL,
  `GT4S` int(20) NOT NULL,
  `GT4E` int(20) NOT NULL,
  `GT4R` int(20) NOT NULL,
  `GT5S` int(20) NOT NULL,
  `GT5E` int(20) NOT NULL,
  `GT5R` int(20) NOT NULL,
  `generalTax` int(20) NOT NULL,
  `fireTax` int(20) NOT NULL,
  `treeTax` int(20) NOT NULL,
  `waterBenefitTax` int(20) NOT NULL,
  `generalConsTax` int(20) NOT NULL,
  `sewageTax` int(20) NOT NULL,
  `streetTax` int(20) NOT NULL,
  `nmcEduTax` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citytaxtable`
--

INSERT INTO `citytaxtable` (`Ulbid`, `city`, `state`, `cr`, `GT1S`, `GT1E`, `GT1R`, `GT2S`, `GT2E`, `GT2R`, `GT3S`, `GT3E`, `GT3R`, `GT4S`, `GT4E`, `GT4R`, `GT5S`, `GT5E`, `GT5R`, `generalTax`, `fireTax`, `treeTax`, `waterBenefitTax`, `generalConsTax`, `sewageTax`, `streetTax`, `nmcEduTax`) VALUES
(1, 'nashik', 'mh', 5, 0, 10000, 30, 10001, 20000, 35, 20001, 30000, 40, 30001, 40000, 45, 40001, 50000, 50, 30, 2, 3, 4, 5, 6, 7, 8),
(2, 'nashik', 'mh', 5, 0, 10000, 30, 10001, 20000, 35, 20001, 30000, 40, 30001, 40000, 45, 40001, 50000, 50, 0, 0, 0, 4, 5, 6, 7, 8),
(3, 'nashik', 'mh', 5, 0, 10000, 30, 10001, 20000, 35, 20001, 30000, 40, 30001, 40000, 45, 40001, 50000, 50, 1, 2, 3, 4, 5, 6, 7, 8);

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `sr_no` decimal(4,1) DEFAULT NULL,
  `Registered_Carpet_Area_in` decimal(4,1) DEFAULT NULL,
  `Annual_Property_Value` int(11) DEFAULT NULL,
  `Authorizer` varchar(7) DEFAULT NULL,
  `Owner_Name` varchar(2) DEFAULT NULL,
  `Contact_No` decimal(11,1) DEFAULT NULL,
  `Email_Address` varchar(12) DEFAULT NULL,
  `Plot_No` decimal(4,1) DEFAULT NULL,
  `Total_Building_Area` decimal(4,1) DEFAULT NULL,
  `Area` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dataset`
--

INSERT INTO `dataset` (`sr_no`, `Registered_Carpet_Area_in`, `Annual_Property_Value`, `Authorizer`, `Owner_Name`, `Contact_No`, `Email_Address`, `Plot_No`, `Total_Building_Area`, `Area`) VALUES
('1.0', '240.0', 1200, 'Pravin', 'A', '8032688770.0', 'A@gmail.com', '1.0', '472.0', 'East'),
('2.0', '106.0', 0, 'Pravin', 'B', '1454547569.0', 'B@gmail.com', '2.0', '777.0', 'North'),
('3.0', '312.0', 1560, 'Kasturi', 'C', '2533047983.0', 'C@gmail.com', '3.0', '895.0', 'South'),
('4.0', '302.0', 1510, 'Pravin', 'D', '2911947050.0', 'D@gmail.com', '4.0', '232.0', 'South'),
('5.0', '204.0', 1020, 'Atharva', 'E', '7659673802.0', 'E@gmail.com', '5.0', '493.0', 'North'),
('6.0', '320.0', 1600, 'Atharva', 'F', '5553259508.0', 'F@gmail.com', '6.0', '462.0', 'North'),
('7.0', '300.0', 1500, 'Atharva', 'G', '6888904938.0', 'G@gmail.com', '7.0', '910.0', 'West'),
('8.0', '176.0', 880, 'Kasturi', 'H', '8488201017.0', 'H@gmail.com', '8.0', '269.0', 'South'),
('9.0', '166.0', 830, 'Onkar', 'I', '8055941412.0', 'I@gmail.com', '9.0', '414.0', 'South'),
('10.0', '254.0', 1270, 'Onkar', 'J', '5666695773.0', 'J@gmail.com', '10.0', '320.0', 'South'),
('11.0', '270.0', 1350, 'Onkar', 'K', '5454228730.0', 'K@gmail.com', '11.0', '178.0', 'West'),
('12.0', '172.0', 860, 'Onkar', 'L', '3325418034.0', 'L@gmail.com', '12.0', '235.0', 'West'),
('13.0', '111.0', 0, 'Atharva', 'M', '7008656698.0', 'M@gmail.com', '13.0', '336.0', 'South'),
('14.0', '292.0', 1460, 'Prasad', 'M', '4125627496.0', 'M@gmail.com', '14.0', '628.0', 'South'),
('15.0', '105.0', 0, 'Prasad', 'O', '6462603132.0', 'O@gmail.com', '15.0', '408.0', 'West'),
('16.0', '160.0', 800, 'Prasad', 'P', '6652975909.0', 'P@gmail.com', '16.0', '562.0', 'East'),
('17.0', '157.0', 785, 'Atharva', 'Q', '3441778658.0', 'Q@gmail.com', '17.0', '353.0', 'West'),
('18.0', '306.0', 1530, 'Onkar', 'R', '5562872836.0', 'R@gmail.com', '18.0', '882.0', 'North'),
('19.0', '153.0', 765, 'Pravin', 'S', '6645912939.0', 'S@gmail.com', '19.0', '734.0', 'West'),
('20.0', '198.0', 990, 'Onkar', 'T', '6889780783.0', 'T@gmail.com', '20.0', '347.0', 'East'),
('21.0', '169.0', 845, 'Onkar', 'U', '7136806914.0', 'U@gmail.com', '21.0', '347.0', 'East'),
('22.0', '275.0', 1375, 'Kasturi', 'V', '2142567261.0', 'V@gmail.com', '22.0', '586.0', 'North'),
('23.0', '134.0', 0, 'Atharva', 'W', '6180554234.0', 'W@gmail.com', '23.0', '603.0', 'East'),
('24.0', '311.0', 1555, 'Prasad', 'X', '3730932931.0', 'X@gmail.com', '24.0', '313.0', 'South'),
('25.0', '157.0', 785, 'Atharva', 'Y', '9633312132.0', 'Y@gmail.com', '25.0', '519.0', 'North'),
('26.0', '278.0', 1390, 'Pravin', 'Z', '2913319140.0', 'Z@gmail.com', '26.0', '305.0', 'North'),
('27.0', '342.0', 1710, 'Pravin', 'AA', '1782497985.0', 'AA@gmail.com', '27.0', '578.0', 'East'),
('28.0', '168.0', 840, 'Pravin', 'AB', '1930982997.0', 'AB@gmail.com', '28.0', '454.0', 'West'),
('29.0', '323.0', 1615, 'Pravin', 'AC', '7545489633.0', 'AC@gmail.com', '29.0', '235.0', 'South'),
('30.0', '173.0', 865, 'Pravin', 'AD', '8855712789.0', 'AD@gmail.com', '30.0', '490.0', 'West'),
('31.0', '255.0', 1275, 'Onkar', 'AD', '2240667518.0', 'AD@gmail.com', '31.0', '389.0', 'East'),
('32.0', '280.0', 1400, 'Prasad', 'AF', '7192624623.0', 'AF@gmail.com', '32.0', '589.0', 'North'),
('33.0', '307.0', 1535, 'Onkar', 'AG', '2863973417.0', 'AG@gmail.com', '33.0', '461.0', 'North'),
('34.0', '184.0', 920, 'Kasturi', 'AH', '6660444926.0', 'AH@gmail.com', '34.0', '654.0', 'East'),
('35.0', '123.0', 0, 'Prasad', 'AI', '2089222609.0', 'AI@gmail.com', '35.0', '430.0', 'West'),
('36.0', '257.0', 1285, 'Prasad', 'AJ', '8238610531.0', 'AJ@gmail.com', '36.0', '296.0', 'South'),
('37.0', '157.0', 785, 'Kasturi', 'AK', '9551421356.0', 'AK@gmail.com', '37.0', '347.0', 'South'),
('38.0', '114.0', 0, 'Prasad', 'AL', '4395451259.0', 'AL@gmail.com', '38.0', '252.0', 'South'),
('39.0', '306.0', 1530, 'Pravin', 'AM', '7436721728.0', 'AM@gmail.com', '39.0', '742.0', 'South'),
('40.0', '282.0', 1410, 'Kasturi', 'AN', '5969879320.0', 'AN@gmail.com', '40.0', '923.0', 'South'),
('41.0', '348.0', 1740, 'Atharva', 'AO', '3885874404.0', 'AO@gmail.com', '41.0', '266.0', 'North'),
('42.0', '189.0', 945, 'Onkar', 'AP', '4998698750.0', 'AP@gmail.com', '42.0', '395.0', 'South'),
('43.0', '256.0', 1280, 'Onkar', 'AQ', '3193774315.0', 'AQ@gmail.com', '43.0', '299.0', 'North'),
('44.0', '194.0', 970, 'Prasad', 'AR', '1594320088.0', 'AR@gmail.com', '44.0', '684.0', 'South'),
('45.0', '117.0', 0, 'Atharva', 'AS', '7557662458.0', 'AS@gmail.com', '45.0', '667.0', 'South'),
('46.0', '294.0', 1470, 'Onkar', 'AT', '4967888304.0', 'AT@gmail.com', '46.0', '859.0', 'South'),
('47.0', '241.0', 1205, 'Kasturi', 'AU', '2070670177.0', 'AU@gmail.com', '47.0', '848.0', 'North'),
('48.0', '251.0', 1255, 'Onkar', 'AV', '2748302125.0', 'AV@gmail.com', '48.0', '900.0', 'South'),
('49.0', '211.0', 1055, 'Onkar', 'AW', '7483629411.0', 'AW@gmail.com', '49.0', '284.0', 'East'),
('50.0', '270.0', 1350, 'Prasad', 'AX', '3709137567.0', 'AX@gmail.com', '50.0', '515.0', 'North'),
('51.0', '185.0', 925, 'Atharva', 'AY', '5752612224.0', 'AY@gmail.com', '51.0', '719.0', 'South'),
('52.0', '233.0', 1165, 'Onkar', 'AZ', '9927040190.0', 'AZ@gmail.com', '52.0', '367.0', 'South'),
('53.0', '176.0', 880, 'Kasturi', 'BA', '3666712582.0', 'BA@gmail.com', '53.0', '187.0', 'North'),
('54.0', '284.0', 1420, 'Prasad', 'BB', '9753778251.0', 'BB@gmail.com', '54.0', '370.0', 'South'),
('55.0', '188.0', 940, 'Kasturi', 'BC', '7602555599.0', 'BC@gmail.com', '55.0', '371.0', 'South'),
('56.0', '292.0', 1460, 'Onkar', 'BD', '9990059946.0', 'BD@gmail.com', '56.0', '214.0', 'West'),
('57.0', '175.0', 875, 'Prasad', 'BE', '3199418354.0', 'BE@gmail.com', '57.0', '432.0', 'West'),
('58.0', '228.0', 1140, 'Pravin', 'BF', '7455726062.0', 'BF@gmail.com', '58.0', '744.0', 'South'),
('59.0', '263.0', 1315, 'Prasad', 'BG', '3090293789.0', 'BG@gmail.com', '59.0', '584.0', 'East'),
('60.0', '106.0', 0, 'Prasad', 'BH', '4114475350.0', 'BH@gmail.com', '60.0', '418.0', 'North'),
('61.0', '293.0', 1465, 'Onkar', 'BI', '8686489395.0', 'BI@gmail.com', '61.0', '746.0', 'East'),
('62.0', '305.0', 1525, 'Kasturi', 'BJ', '8841451490.0', 'BJ@gmail.com', '62.0', '235.0', 'South'),
('63.0', '196.0', 980, 'Onkar', 'BK', '5901315286.0', 'BK@gmail.com', '63.0', '357.0', 'West'),
('64.0', '258.0', 1290, 'Pravin', 'BL', '7331485527.0', 'BL@gmail.com', '64.0', '797.0', 'East'),
('65.0', '326.0', 1630, 'Kasturi', 'BL', '1945076186.0', 'BL@gmail.com', '65.0', '426.0', 'West'),
('66.0', '233.0', 1165, 'Kasturi', 'BN', '3000398477.0', 'BN@gmail.com', '66.0', '289.0', 'West'),
('67.0', '158.0', 790, 'Onkar', 'BO', '6340080431.0', 'BO@gmail.com', '67.0', '384.0', 'East'),
('68.0', '191.0', 955, 'Prasad', 'BP', '9700440892.0', 'BP@gmail.com', '68.0', '109.0', 'North'),
('69.0', '256.0', 1280, 'Pravin', 'BQ', '3829971516.0', 'BQ@gmail.com', '69.0', '298.0', 'West'),
('70.0', '269.0', 1345, 'Kasturi', 'BR', '8775769591.0', 'BR@gmail.com', '70.0', '217.0', 'South'),
('71.0', '228.0', 1140, 'Kasturi', 'BS', '5209760536.0', 'BS@gmail.com', '71.0', '906.0', 'West'),
('72.0', '333.0', 1665, 'Pravin', 'BT', '4250028072.0', 'BT@gmail.com', '72.0', '285.0', 'West'),
('73.0', '335.0', 1675, 'Onkar', 'BU', '3426985563.0', 'BU@gmail.com', '73.0', '664.0', 'East'),
('74.0', '347.0', 1735, 'Atharva', 'BV', '5543915305.0', 'BV@gmail.com', '74.0', '478.0', 'West'),
('75.0', '167.0', 835, 'Kasturi', 'BW', '8824107871.0', 'BW@gmail.com', '75.0', '243.0', 'West'),
('76.0', '197.0', 985, 'Onkar', 'BX', '4047562990.0', 'BX@gmail.com', '76.0', '193.0', 'South'),
('77.0', '108.0', 0, 'Kasturi', 'BY', '1659287935.0', 'BY@gmail.com', '77.0', '197.0', 'West'),
('78.0', '242.0', 1210, 'Kasturi', 'BZ', '7555139058.0', 'BZ@gmail.com', '78.0', '440.0', 'South'),
('79.0', '306.0', 1530, 'Pravin', 'CA', '7187007393.0', 'CA@gmail.com', '79.0', '464.0', 'North'),
('80.0', '102.0', 0, 'Onkar', 'CB', '3145083842.0', 'CB@gmail.com', '80.0', '638.0', 'West'),
('81.0', '155.0', 775, 'Pravin', 'CC', '3559557201.0', 'CC@gmail.com', '81.0', '427.0', 'West'),
('82.0', '339.0', 1695, 'Atharva', 'CD', '6649542413.0', 'CD@gmail.com', '82.0', '421.0', 'North'),
('83.0', '233.0', 1165, 'Kasturi', 'CE', '9661400313.0', 'CE@gmail.com', '83.0', '272.0', 'East'),
('84.0', '237.0', 1185, 'Onkar', 'CF', '2694872653.0', 'CF@gmail.com', '84.0', '260.0', 'South'),
('85.0', '150.0', 0, 'Onkar', 'CG', '5075033340.0', 'CG@gmail.com', '85.0', '186.0', 'East'),
('86.0', '256.0', 1280, 'Prasad', 'CH', '6158615738.0', 'CH@gmail.com', '86.0', '451.0', 'South'),
('87.0', '244.0', 1220, 'Prasad', 'CI', '9641643727.0', 'CI@gmail.com', '87.0', '248.0', 'West'),
('88.0', '111.0', 0, 'Kasturi', 'CJ', '2227237889.0', 'CJ@gmail.com', '88.0', '491.0', 'North'),
('89.0', '280.0', 1400, 'Pravin', 'CK', '8293076034.0', 'CK@gmail.com', '89.0', '892.0', 'East'),
('90.0', '118.0', 0, 'Atharva', 'CL', '6456587979.0', 'CL@gmail.com', '90.0', '290.0', 'North'),
('91.0', '273.0', 1365, 'Atharva', 'CM', '2842010310.0', 'CM@gmail.com', '91.0', '293.0', 'North'),
('92.0', '213.0', 1065, 'Atharva', 'CN', '2939827354.0', 'CN@gmail.com', '92.0', '672.0', 'South'),
('93.0', '322.0', 1610, 'Atharva', 'CO', '7401592397.0', 'CO@gmail.com', '93.0', '788.0', 'East'),
('94.0', '220.0', 1100, 'Atharva', 'CO', '1935130989.0', 'CO@gmail.com', '94.0', '136.0', 'South'),
('95.0', '239.0', 1195, 'Prasad', 'CQ', '1818911953.0', 'CQ@gmail.com', '95.0', '704.0', 'West'),
('96.0', '254.0', 1270, 'Prasad', 'CR', '8860446208.0', 'CR@gmail.com', '96.0', '755.0', 'North'),
('97.0', '291.0', 1455, 'Prasad', 'CS', '4531699570.0', 'CS@gmail.com', '97.0', '361.0', 'East'),
('98.0', '215.0', 1075, 'Atharva', 'CT', '9140825670.0', 'CT@gmail.com', '98.0', '202.0', 'North'),
('99.0', '238.0', 1190, 'Prasad', 'CT', '2255564183.0', 'CT@gmail.com', '99.0', '248.0', 'East'),
('100.0', '250.0', 1250, 'Kasturi', 'CV', '3914288292.0', 'CV@gmail.com', '100.0', '226.0', 'North');

-- --------------------------------------------------------

--
-- Table structure for table `districtadmin`
--

CREATE TABLE `districtadmin` (
  `ulb_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobileno` varchar(20) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `c_status` varchar(10) DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districtadmin`
--

INSERT INTO `districtadmin` (`ulb_id`, `name`, `email`, `mobileno`, `state`, `city`, `username`, `password`, `c_status`, `timestamp`) VALUES
(1, ' Nashik Admin', 'nashik@gov.in', '9146579652', 'Maharashtra', 'Nashik', 'nashik@gov.in', 'nashikgov', '1', '2022-08-25 23:16:32'),
(2, 'Mumbai Admin', 'pune@gov.in', '8956452145', 'Maharashtra', 'Pune', 'atharva@gmail.com', 'atharva', '1', '2022-08-25 11:21:55'),
(3, 'Yeola Admin', 'yeola@gmail.com', '8754545988', 'Gujrat', 'surat', 'surat@gov.in', 'suratgov', '1', '2022-08-25 10:30:36'),
(4, 'Bangalore Admin', 'Bangalore@g.com', '4586321379', 'Karnatak', 'Benglure', 'Bangalore@gov.in', 'Banglore', '1', '2022-08-25 10:32:32'),
(5, 'Jaipur Admin', 'jaipur@gov.in', '9865875412', 'Rajasthan', 'Jaipur', 'jaipur@gov.in', 'jaipurgov', '1', '2022-08-25 11:13:47'),
(6, 'Dhule Admin', 'dhule@gmail.com', '8745124556', 'Maharashtra', 'Dhule', 'jaipur@gmail.com', 'jaipurgov', '1', '2022-08-25 23:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `jaipur`
--

CREATE TABLE `jaipur` (
  `property_id` int(11) NOT NULL,
  `ulbid` int(11) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobileno` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `surveyno` int(11) DEFAULT NULL,
  `plotno` int(11) DEFAULT NULL,
  `carpetarea` int(11) DEFAULT NULL,
  `propertytype` varchar(50) DEFAULT NULL,
  `c_status` varchar(10) DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jaipur`
--

INSERT INTO `jaipur` (`property_id`, `ulbid`, `name`, `email`, `mobileno`, `state`, `city`, `address`, `surveyno`, `plotno`, `carpetarea`, `propertytype`, `c_status`, `timestamp`) VALUES
(1, 5, 'Diksha Jain', 'dikshajain297@gmail.com', '9146579641', 'Rajathan', 'Jaipur', 'FLat no 1,Ganga Darshan Apt', 124, 25, 85, 'Flat', '1', '2022-08-25 23:28:02'),
(2, 5, 'Onkar Belge', 'onkarbelge@gmail.com', '9146044545', 'Rajathan', 'Jaipur', 'Canada Corner', 126, 2, 15, 'Flat', '1', '2022-08-25 23:26:30'),
(3, 5, 'Onkar Kulkarni', 'onkar@gmail.com', '9856986554', 'Rajasthan', 'Jaipur', 'D G P Nagar', 136, 15, 96, 'Flat', '1', '2022-08-26 01:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `nashik`
--

CREATE TABLE `nashik` (
  `property_id` int(11) NOT NULL,
  `ulbid` int(11) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobileno` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `surveyno` int(11) DEFAULT NULL,
  `plotno` int(11) DEFAULT NULL,
  `carpetarea` int(11) DEFAULT NULL,
  `propertytype` varchar(50) DEFAULT NULL,
  `c_status` varchar(10) DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nashik`
--

INSERT INTO `nashik` (`property_id`, `ulbid`, `name`, `email`, `mobileno`, `state`, `city`, `address`, `surveyno`, `plotno`, `carpetarea`, `propertytype`, `c_status`, `timestamp`) VALUES
(1, 1, 'Pravin Jain', 'pravinjain297@gmail.com', '9146579640', 'maharashtra', 'Nashik', 'FLat no 2,Ganga Darshan Apt', 123, 24, 80, 'Flat', '1', '2022-08-25 22:52:38'),
(2, 1, 'Atharva Belge', 'atharvabelge@gmail.com', '9146044043', 'maharashtra', 'Nashik', 'Canada Corner', 125, 25, 150, 'Flat', '1', '2022-08-25 22:56:21'),
(3, 1, 'Sakshi Ahire', 'sakshi@gmail.com', '9130807604', 'Maharashtra', 'nashik', 'gangapur road', 112, 45, 85, 'Flat', '1', '2022-08-26 11:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `username`, `password`) VALUES
(1, 'superadmin@gmail.com', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `property_id` int(11) NOT NULL,
  `ulbid` int(11) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobileno` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `surveyno` int(11) DEFAULT NULL,
  `plotno` int(11) DEFAULT NULL,
  `carpetarea` int(11) DEFAULT NULL,
  `propertytype` varchar(50) DEFAULT NULL,
  `c_status` varchar(10) DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citytaxtable`
--
ALTER TABLE `citytaxtable`
  ADD PRIMARY KEY (`Ulbid`);

--
-- Indexes for table `districtadmin`
--
ALTER TABLE `districtadmin`
  ADD PRIMARY KEY (`ulb_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobileno` (`mobileno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `jaipur`
--
ALTER TABLE `jaipur`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `nashik`
--
ALTER TABLE `nashik`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `districtadmin`
--
ALTER TABLE `districtadmin`
  MODIFY `ulb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jaipur`
--
ALTER TABLE `jaipur`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nashik`
--
ALTER TABLE `nashik`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
