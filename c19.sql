-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 05:50 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c19`
--

-- --------------------------------------------------------

--
-- Table structure for table `pat_trigger`
--

CREATE TABLE `pat_trigger` (
  ` ID` int(11) NOT NULL,
  `INSERTED ID` int(11) NOT NULL,
  `ACTION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pat_trigger`
--

INSERT INTO `pat_trigger` (` ID`, `INSERTED ID`, `ACTION`) VALUES
(1, 22, 'inserted'),
(2, 22, 'inserted'),
(3, 22, 'inserted'),
(4, 22, 'inserted');

-- --------------------------------------------------------

--
-- Table structure for table `phc_doctors`
--

CREATE TABLE `phc_doctors` (
  `HOSPITAL_NAME` varchar(25) DEFAULT NULL,
  `HOSP_ID` int(11) NOT NULL,
  `DOC_NAME` varchar(20) DEFAULT NULL,
  `DOC_ID` int(11) NOT NULL,
  `DOC_PHNUM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phc_doctors`
--

INSERT INTO `phc_doctors` (`HOSPITAL_NAME`, `HOSP_ID`, `DOC_NAME`, `DOC_ID`, `DOC_PHNUM`) VALUES
('ABC', 92, 'Venkat', 1001, 123154687),
('TRAILBLAZERS HOSPITAL', 4, 'SMRITI MANDANA', 19018, 99696969),
('SUNRISES HOSPITAL', 1, 'BRIAN LARA', 19046, 777775555),
('RCB HOSPITAL', 2, 'AB DeVILLERS', 19050, 666664444),
('VANDALS HOSPITAL', 3, 'BRETT LEE', 19061, 999998888),
('SUPERNOVA HOSPITAL', 5, 'HARMANPREET KAUR', 19099, 864575123);

-- --------------------------------------------------------

--
-- Table structure for table `phc_home`
--

CREATE TABLE `phc_home` (
  `PAT_NAME` varchar(20) DEFAULT NULL,
  `PAT_ID` int(11) DEFAULT NULL,
  `HOME_PHNUM` int(11) DEFAULT NULL,
  `HOME_ADDRESS` varchar(50) DEFAULT NULL,
  `RESULT_DATE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phc_home`
--

INSERT INTO `phc_home` (`PAT_NAME`, `PAT_ID`, `HOME_PHNUM`, `HOME_ADDRESS`, `RESULT_DATE`) VALUES
('GANDHI', 1, 22334422, '#001 1ST MAIN T.DASARAHALLI BENGALURU', '13-MARCH-2020'),
('SNEHA', 9, 22334444, '#003 10TH CROSS NAGARBHAVI BENGALURU', '29-AUG-2020'),
('YOUVA', 13, 22334455, '#021 22ND MAIN RAMMURTYNAGAR BENGALURU', '17-JUNE-2020'),
('SUHAS', 12, 22334466, '#27/1 1ST MAIN NAGARBHAVI BENGALURU', '29-FEB-2020'),
('NARENDRA', 2, 22335544, '#001 1ST CROSS YASHWANTHPURA BENGALURU', '15-APRIL-2020');

-- --------------------------------------------------------

--
-- Table structure for table `phc_hospital`
--

CREATE TABLE `phc_hospital` (
  `PAT_NAME` varchar(20) DEFAULT NULL,
  `PAT_ID` int(11) DEFAULT NULL,
  `PAT_PHNUM` int(11) DEFAULT NULL,
  `BED_NUM` varchar(10) DEFAULT NULL,
  `PATS_ID` int(11) DEFAULT NULL,
  `TREATEDBY` varchar(20) DEFAULT NULL,
  `RESULT_DATE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phc_hospital`
--

INSERT INTO `phc_hospital` (`PAT_NAME`, `PAT_ID`, `PAT_PHNUM`, `BED_NUM`, `PATS_ID`, `TREATEDBY`, `RESULT_DATE`) VALUES
('SAKSHI', 8, 2147483647, 'S3', 4, '19018', '9-FEB-2020'),
('ABHISHEK', 11, 2147483647, 'A6', 3, '19050', '29-FEB-2020'),
('CHAKRIKA', 6, 2147483647, 'C3', 5, '19099', '7-MARCH-2020'),
('RAMYA', 5, 2147483647, 'R6', 4, '19061', '1-FEB-2020'),
('SIDDU', 3, 2147483647, 'M1', 1, '19046', '1-JULY-2020');

-- --------------------------------------------------------

--
-- Table structure for table `phc_patients`
--

CREATE TABLE `phc_patients` (
  `P_ID` int(11) NOT NULL,
  `P_NAME` varchar(15) NOT NULL,
  `DATE` varchar(15) NOT NULL,
  `STATUS` varchar(2) NOT NULL,
  `COLL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phc_patients`
--

INSERT INTO `phc_patients` (`P_ID`, `P_NAME`, `DATE`, `STATUS`, `COLL_ID`) VALUES
(1, 'GANDHI', '13-MARCH-2020', 'P', 1001),
(2, 'NARENDRA', '15-APRIL-2020', 'P', 1002),
(3, 'SIDDU', '1-JULY-2020', 'P', 1003),
(4, 'UMA', '4-OCTOBER-2020', 'N', 1004),
(5, 'RAMYA', '1-FEB-2020', 'P', 1001),
(6, 'CHAKRIKA', '7-MARCH-2020', 'P', 1005),
(7, 'ANURAG', '5-MAY-2020', 'N', 1002),
(8, 'SAKSHI', '9-FEB-2020', 'P', 1002),
(9, 'SNEHA', '29-AUG-2020', 'P', 1004),
(10, 'VINAY', '4-NOV-2020', 'N', 1003),
(11, 'ABHISHEK', '29-FEB-2020', 'P', 1001),
(12, 'SUHAS', '29-FEB-2020', 'P', 1004),
(13, 'YOUVA', '17-JUNE-2020', 'P', 1002);

--
-- Triggers `phc_patients`
--
DELIMITER $$
CREATE TRIGGER `INSERTION` AFTER INSERT ON `phc_patients` FOR EACH ROW INSERT INTO pat_trigger VALUES (null,NEW.P_ID,"inserted")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `phc_swabcollectors`
--

CREATE TABLE `phc_swabcollectors` (
  `COLL_NAME` varchar(20) DEFAULT NULL,
  `COLL_ID` int(11) NOT NULL,
  `PH_NUM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phc_swabcollectors`
--

INSERT INTO `phc_swabcollectors` (`COLL_NAME`, `COLL_ID`, `PH_NUM`) VALUES
('PRASAD', 1002, 2147483647),
('DEVDUTT', 1003, 2147483647),
('SUNIL', 1004, 2147483647),
('ROBIN', 1005, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `gender` enum('m','f','o','') NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstName`, `lastName`, `gender`, `email`, `address`, `number`) VALUES
('A', 'B', 'm', 'SDASD', 'ASDAEFDWefd', 238978),
('DFF', 'ASD', 'f', 'ADS', 'FES', 3521),
('V', 'C', 'm', 'SDASD', 'ASDAEFDWefd', 238978),
('Venkat', 'Chavan', 'm', 'venkatchavan16@gmail', '#26/1 2nd Cross Masti Venkatesh Iyengar Road Gavipuram Extension', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tested_negative`
--

CREATE TABLE `tested_negative` (
  `PAT_NAME` varchar(20) DEFAULT NULL,
  `PAT_ID` int(11) DEFAULT NULL,
  `PAT_PHNUM` int(11) DEFAULT NULL,
  `RESULT_DATE` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tested_negative`
--

INSERT INTO `tested_negative` (`PAT_NAME`, `PAT_ID`, `PAT_PHNUM`, `RESULT_DATE`) VALUES
('ANURAG', 7, 2147483647, '8-MAY-2020'),
('UMA', 4, 2147483647, '7-OCTOBER-2020'),
('VINAY', 10, 2147483647, '7-NOV-2020'),
('', 0, 0, ''),
('', 0, 0, ''),
('', 0, 0, ''),
('', 0, 0, ''),
('', 0, 0, ''),
('', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USERNAME` varchar(25) DEFAULT NULL,
  `PASSWORD` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USERNAME`, `PASSWORD`) VALUES
('SANDY', '26SS2000'),
('VENKYY', '16VC99'),
('SANDY', '26SS2000'),
('VENKYY', '16VC99');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `INS` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO users VALUES(null,New.USERNAME,'inserted',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `WARDNAME` varchar(10) DEFAULT NULL,
  `WNUM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`WARDNAME`, `WNUM`) VALUES
('T.DASARAHA', 15),
('RAMMURTYNA', 26),
('YASHWANTPU', 37),
('NAGARBHAVI', 128);

-- --------------------------------------------------------

--
-- Table structure for table `warroom_blo`
--

CREATE TABLE `warroom_blo` (
  `OFFICER_NAME` varchar(20) DEFAULT NULL,
  `OFFICER_ID` int(11) NOT NULL,
  `PH_NUM` int(11) DEFAULT NULL,
  `WARD_NUM` int(11) DEFAULT NULL,
  `PAT_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warroom_blo`
--

INSERT INTO `warroom_blo` (`OFFICER_NAME`, `OFFICER_ID`, `PH_NUM`, `WARD_NUM`, `PAT_ID`) VALUES
('DEV', 101, 2147483647, 15, 13),
('SUNDAR', 102, 2147483647, 26, 9),
('DEEPTI', 103, 2147483647, 37, 1),
('MITHALI', 104, 2147483647, 128, 12),
('RADHA', 105, 2147483647, 37, 2);

-- --------------------------------------------------------

--
-- Table structure for table `warroom_employees`
--

CREATE TABLE `warroom_employees` (
  `EMP_NAME` varchar(20) DEFAULT NULL,
  `EMP_ID` int(11) NOT NULL,
  `PH_NUM` int(11) DEFAULT NULL,
  `WARD_NUM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warroom_employees`
--

INSERT INTO `warroom_employees` (`EMP_NAME`, `EMP_ID`, `PH_NUM`, `WARD_NUM`) VALUES
('BACCHAN', 201, 2147483647, 128),
('AMIR', 202, 2147483647, 37),
('RANBIR', 203, 2147483647, 26),
('DEEPIKA', 204, 2147483647, 15),
('VIDYA', 205, 2147483647, 128),
('RANAPRATAP', 206, 2147483647, 37);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pat_trigger`
--
ALTER TABLE `pat_trigger`
  ADD PRIMARY KEY (` ID`);

--
-- Indexes for table `phc_doctors`
--
ALTER TABLE `phc_doctors`
  ADD PRIMARY KEY (`DOC_ID`);

--
-- Indexes for table `phc_patients`
--
ALTER TABLE `phc_patients`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `phc_swabcollectors`
--
ALTER TABLE `phc_swabcollectors`
  ADD PRIMARY KEY (`COLL_ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`firstName`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`WNUM`);

--
-- Indexes for table `warroom_blo`
--
ALTER TABLE `warroom_blo`
  ADD PRIMARY KEY (`OFFICER_ID`);

--
-- Indexes for table `warroom_employees`
--
ALTER TABLE `warroom_employees`
  ADD PRIMARY KEY (`EMP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pat_trigger`
--
ALTER TABLE `pat_trigger`
  MODIFY ` ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phc_patients`
--
ALTER TABLE `phc_patients`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
