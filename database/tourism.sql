-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 05:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(10) UNSIGNED NOT NULL,
  `AdminName` varchar(100) DEFAULT NULL,
  `EmailID` varchar(100) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Role` int(20) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdateDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AdminName`, `EmailID`, `Password`, `Role`, `RegDate`, `UpdateDate`) VALUES
(54, 'SpAtel@711', 'abcd@abcd.com', '$2y$10$SI1kSCUvcN8GJzm7d0pNwOgSex7zKxArYg4C/k.qFNDLSg6saDt/S', 0, '2022-03-13 14:14:40', '2022-03-17 14:58:02'),
(64, 'admin123', 'opqr@abc.com', '$2y$10$7gwX6kk/dw.0/9TCnX31oewzbnIl.VdLVHlKHOefNdb0Zs67tfoH2', 1, '2022-03-17 04:34:59', '2022-03-17 14:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `advancepackages`
--

CREATE TABLE `advancepackages` (
  `ID` int(11) NOT NULL,
  `Image` varchar(100) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `Dot` varchar(100) DEFAULT NULL,
  `Detail` varchar(100) DEFAULT NULL,
  `Duration` varchar(100) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advancepackages`
--

INSERT INTO `advancepackages` (`ID`, `Image`, `Price`, `Location`, `Dot`, `Detail`, `Duration`, `CreationDate`) VALUES
(10, 'top1.jpg', 40000, 'Paris, France', 'fvsgv', 'xvzv', '10', '2022-03-09 10:31:43'),
(11, 'top2.jpg', 25000, 'Madrid, Spain', 'xzvzxv', 'xvzv', '10', '2022-03-09 10:31:43'),
(12, 'top3.jpg', 40000, 'Statue Of Liberty, USA', 'xzvzx', 'Statue Of Liberty', '10', '2022-03-09 10:31:43'),
(13, 'top4.jpg', 20000, 'China', 'vzzx', 'xzvv', '10', '2022-03-09 10:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BID` int(11) NOT NULL,
  `PID` int(11) DEFAULT NULL,
  `PName` varchar(255) DEFAULT NULL,
  `FDate` varchar(50) DEFAULT NULL,
  `TDate` varchar(50) DEFAULT NULL,
  `MobileNo` varchar(50) DEFAULT NULL,
  `EmailID` varchar(50) DEFAULT NULL,
  `Message` varchar(200) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(20) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BID`, `PID`, `PName`, `FDate`, `TDate`, `MobileNo`, `EmailID`, `Message`, `RegDate`, `Status`, `CancelledBy`, `UpdationDate`) VALUES
(14, 101, 'MALDIVES', '2022-04-10', '2022-04-16', '444444444444', 'opqr@abc.com', 'Thank you', '2022-03-26 09:15:32', NULL, NULL, NULL),
(15, 104, 'Europe', '2022-03-26', '2022-03-31', '1231234565', '123@xyz.com', 'Thank you', '2022-03-26 09:16:06', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Message` varchar(150) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `number`, `Subject`, `Message`, `Date`) VALUES
(1, '0', '0', 0, '0', '0', '2022-03-02 15:34:48'),
(2, '0', '0', 0, '0', '0', '2022-03-02 15:34:48'),
(3, 'sachin', 'sachin@sachin.sachin', 0, 'sachin', 'sachin', '2022-03-02 15:34:48'),
(4, 'sachin1', 'spatel71120000@gmail.com', 4325464, 'enquiry about the package', '50', '2022-03-02 15:34:48'),
(5, '', '', 0, '', '', '2022-03-02 15:34:48'),
(6, 'sachin', 'spatel71120000@gmail.com', 4325464, 'xdffhefbxcv', 'wqR', '2022-03-02 15:34:48'),
(7, 'sachin', 'spatel71120000@gmail.com', 4325464, 'enquiry about the package', 'ds', '2022-03-02 15:34:48'),
(8, 'sachin1', 'spatel71120000@gmail.com', 0, 'sfaf', 'fsdssd', '2022-03-02 15:34:48'),
(9, 'sachin1', 'spatel71120000@gmail.com', 0, 'sfaf', 'fsdssd', '2022-03-02 15:34:59'),
(10, 'sachin1', 'spatel71120000@gmail.com', 45757521475877, 'sfaf', 'fsdssd', '2022-03-02 15:35:37'),
(11, 'sachin1', 'name@name.name', 4325464, 'xdffhefbxcv', 'kljkh', '2022-03-03 07:23:17'),
(12, 'sachin1', 'name@name.name', 4325464, 'xdffhefbxcv', 'kljkh', '2022-03-03 07:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `TicketID` int(11) NOT NULL,
  `FullName` varchar(50) DEFAULT NULL,
  `EmailID` varchar(20) DEFAULT NULL,
  `MobileNo` bigint(10) DEFAULT NULL,
  `Subject` varchar(50) DEFAULT NULL,
  `Message` varchar(100) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`TicketID`, `FullName`, `EmailID`, `MobileNo`, `Subject`, `Message`, `PostingDate`, `Status`) VALUES
(10, 'Patel Sachin Sudhirbhai', 'spgabc@abc.com', 2147483647, 'bhfhtrj', 'Patel Sachin Sudhirbhai', '2022-03-09 12:21:47', NULL),
(11, 'Patel Sachin Sudhirbhai', 'spgabc@abc.com', 2147483647, 'bhfhtrj', 'Patel Sachin Sudhirbhai', '2022-03-09 12:23:52', NULL),
(12, 'Patel Sachin Sudhirbhai', 'spgabc@abc.com', 8158151921215, 'bhfhtrj', 'Patel Sachin Sudhirbhai', '2022-03-09 12:24:57', NULL),
(13, '', 'abc@abc.com', 1212121212, 'issueissueissueissueissueissue', '', '2022-03-24 17:38:14', NULL),
(14, 'pAtEl sAcHiN', 'abc@abc.com', 1212121212, 'sachin', 'issueissueissueissueissueissue', '2022-03-24 17:39:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `fullName`, `subject`, `email`, `number`, `description`) VALUES
(1, 'abc', 'abc', 'abc', 2364848543, 'abc'),
(28, 'patel sachin sudhirbhai', 'xdffhefbxcv', 'spatel71120000@gmail.com', 453464754754748, '845845'),
(29, 'patel sachin sudhirbhai', 'xdffhefbxcv', 'spatel71120000@gmail.com', 453464754754748, '845845'),
(30, '', '', '', 0, 'zz'),
(31, '', '', '', 0, 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `tblissue`
--

CREATE TABLE `tblissue` (
  `TicketID` int(11) NOT NULL,
  `EmailID` varchar(100) DEFAULT NULL,
  `Issue` varchar(100) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Aremark` mediumtext DEFAULT NULL,
  `AremarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblissue`
--

INSERT INTO `tblissue` (`TicketID`, `EmailID`, `Issue`, `Message`, `PostingDate`, `Aremark`, `AremarkDate`) VALUES
(6, '123@xyz.com', 'Refund Related', 'IssueIssueIssueIssue', '2022-03-24 17:52:13', NULL, NULL),
(7, 'parth@abc.com', 'Refund Related', 'saa', '2022-03-24 18:20:14', NULL, NULL),
(8, 'parth@abc.com', 'Refund Related', 'saa', '2022-03-24 18:20:33', NULL, NULL),
(9, 'opqr@abc.com', 'CherryDewberryDewberry', 'HELP!!!!!!!', '2022-03-27 15:16:56', NULL, NULL),
(10, 'opqr@abc.com', 'CherryDewberryDewberry', 'HELP!!!!!!!', '2022-03-27 15:19:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UID` int(11) NOT NULL,
  `UserID` varchar(255) DEFAULT NULL,
  `EmailID` varchar(255) DEFAULT NULL,
  `MobileNo` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UID`, `UserID`, `EmailID`, `MobileNo`, `Password`, `RegDate`, `UpdationDate`) VALUES
(3, 'sAcHiN pAtEl', 'opqr@abc.com', '897878978787', '$2y$10$8w2K.gFtCqInzqpG4fWknuTJQaC0/4YLhBKvnzgIzRI2xkmiQZL72', '2022-03-16 06:28:33', NULL),
(8, 'parth patel', 'parth@patel.com', '8797798894', '$2y$10$PywD7NFRN.k08.qbYddQGunosqpxiKfOkzRYWt7T22.Ige8alpKg6', '2022-03-16 06:41:28', NULL),
(14, 'SpAtel#711', '123@xyz.com', '5616456151156198', '$2y$10$FK7L/JeG30XBbKIkYKtrlOroeAIJ3gtKJa8I5AF8x/KVUrD3oqHtW', '2022-03-24 16:38:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tourpackage`
--

CREATE TABLE `tourpackage` (
  `PID` int(11) NOT NULL,
  `PName` varchar(200) DEFAULT NULL,
  `PType` varchar(150) DEFAULT NULL,
  `PLocation` varchar(100) DEFAULT NULL,
  `PPrice` varchar(100) DEFAULT NULL,
  `PFeatures` varchar(500) DEFAULT NULL,
  `Thumbnail` varchar(100) DEFAULT NULL,
  `PImage` varchar(100) DEFAULT NULL,
  `FDate` varchar(100) DEFAULT NULL,
  `TDate` varchar(100) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourpackage`
--

INSERT INTO `tourpackage` (`PID`, `PName`, `PType`, `PLocation`, `PPrice`, `PFeatures`, `Thumbnail`, `PImage`, `FDate`, `TDate`, `CreationDate`, `UpdationDate`) VALUES
(101, 'MALDIVES', 'Couple', 'Maldives', '1,77,903', 'Breakfast , Dinner', 'pexels-asad-photo-maldives-3601437.jpg', 'pexels-asad-photo-maldives-3601426.jpg', '2022-04-10', '2022-04-16', '2022-03-10 17:44:18', '2022-03-12 05:54:37'),
(103, 'USA', 'Family', 'Las Vegas • Los Angeles • San Francisco', '1,29,720', 'Breakfast , Dinner', 'usa.jpg', 'las-vegas.jpg', '2022-11-07', '2022-11-14', '2022-03-11 08:18:52', '2022-03-12 05:55:14'),
(104, 'EUROPE', 'Group', 'London • Paris • Amsterdam • Mannheim • Engelberg', '1,79,523', 'Breakfast , Dinner', 'europe.jpg', 'clocktower.jpg', '2022-11-22', '2022-11-28', '2022-03-11 08:20:14', '2022-03-14 18:27:20'),
(110, 'CHINA', 'Couple', 'Yunnan • Tibet • Xiamen • Beijing • Shanghai', '1,79,523', 'Breakfast , Dinner', 'pexels-ruiyang-zhang-3204950.jpg', 'pexels-lian-rodriguez-2870116.jpg', '2022-03-16', '2022-03-25', '2022-03-16 16:22:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `FullName` varchar(50) DEFAULT NULL,
  `EmailID` varchar(50) NOT NULL,
  `MobileNo` varchar(10) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `Cpassword` varchar(50) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FullName`, `EmailID`, `MobileNo`, `Password`, `Cpassword`, `RegDate`, `UpdationDate`) VALUES
(26, 'sAcHiN pAtEl', 'abcd@abcd.com', '4444444444', '$2y$10$lto4.0Gjf/1FgmIrt0fuIuV5boE.2Yl5Lgx8ateqWRR', NULL, '2022-03-15 14:01:11', NULL),
(39, 'sAcHiN pAtEl', 'pqr@abc.com', '8158151921', '$2y$10$JDsXsrSHvXtHY.eYityDyetzz40FkbAD0m9PODO4rAr', '$2y$10$tecaIwPgN2v4ubVqMIWzHuv66G9uQJgvs8W4kowtxaR', '2022-03-16 05:21:12', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `advancepackages`
--
ALTER TABLE `advancepackages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`TicketID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblissue`
--
ALTER TABLE `tblissue`
  ADD PRIMARY KEY (`TicketID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `tourpackage`
--
ALTER TABLE `tourpackage`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`,`EmailID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `advancepackages`
--
ALTER TABLE `advancepackages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `TicketID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tblissue`
--
ALTER TABLE `tblissue`
  MODIFY `TicketID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tourpackage`
--
ALTER TABLE `tourpackage`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
