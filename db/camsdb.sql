-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2022 at 05:47 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmapplications`
--

CREATE TABLE `tbladmapplications` (
  `ID` int(11) NOT NULL,
  `UserId` char(10) NOT NULL,
  `CourseApplied` varchar(120) DEFAULT NULL,
  `FatherName` varchar(120) DEFAULT NULL,
  `MotherName` varchar(120) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Nationality` varchar(120) DEFAULT NULL,
  `Gender` varchar(200) DEFAULT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `CorrespondenceAdd` varchar(350) NOT NULL,
  `PermanentAdd` varchar(350) NOT NULL,
  `SecondaryBoard` varchar(120) DEFAULT NULL,
  `SecondaryBoardyop` varchar(120) DEFAULT NULL,
  `SecondaryBoardper` varchar(120) DEFAULT NULL,
  `SecondaryBoardstream` varchar(120) DEFAULT NULL,
  `SSecondaryBoard` varchar(120) DEFAULT NULL,
  `SSecondaryBoardyop` varchar(120) DEFAULT NULL,
  `SSecondaryBoardper` varchar(120) DEFAULT NULL,
  `SSecondaryBoardstream` varchar(120) DEFAULT NULL,
  `GraUni` varchar(120) DEFAULT NULL,
  `GraUniyop` varchar(120) DEFAULT NULL,
  `GraUnidper` varchar(120) DEFAULT NULL,
  `GraUnistream` varchar(120) DEFAULT NULL,
  `PGUni` varchar(120) DEFAULT NULL,
  `PGUniyop` varchar(120) DEFAULT NULL,
  `PGUniper` varchar(120) DEFAULT NULL,
  `PGUnistream` varchar(120) DEFAULT NULL,
  `TransferCertificate` varchar(120) DEFAULT NULL,
  `TenMarksheeet` varchar(120) DEFAULT NULL,
  `TwelveMarksheet` varchar(120) DEFAULT NULL,
  `GraduationCertificate` varchar(120) DEFAULT NULL,
  `PostgraduationCertificate` varchar(120) DEFAULT NULL,
  `Declaration` varchar(120) DEFAULT NULL,
  `Signature` varchar(120) DEFAULT NULL,
  `CourseApplieddate` timestamp NOT NULL DEFAULT current_timestamp(),
  `AdminRemark` varchar(255) DEFAULT NULL,
  `FeeAmount` decimal(10,0) DEFAULT NULL,
  `AdminStatus` varchar(20) DEFAULT NULL,
  `AdminRemarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `UserPic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmapplications`
--

INSERT INTO `tbladmapplications` (`ID`, `UserId`, `CourseApplied`, `FatherName`, `MotherName`, `DOB`, `Nationality`, `Gender`, `Category`, `CorrespondenceAdd`, `PermanentAdd`, `SecondaryBoard`, `SecondaryBoardyop`, `SecondaryBoardper`, `SecondaryBoardstream`, `SSecondaryBoard`, `SSecondaryBoardyop`, `SSecondaryBoardper`, `SSecondaryBoardstream`, `GraUni`, `GraUniyop`, `GraUnidper`, `GraUnistream`, `PGUni`, `PGUniyop`, `PGUniper`, `PGUnistream`, `TransferCertificate`, `TenMarksheeet`, `TwelveMarksheet`, `GraduationCertificate`, `PostgraduationCertificate`, `Declaration`, `Signature`, `CourseApplieddate`, `AdminRemark`, `FeeAmount`, `AdminStatus`, `AdminRemarkDate`, `UserPic`) VALUES
(1, '1', 'B.COM', 'ABC', 'XYZ', '2020-11-11', 'Indian', 'Male', 'General', 'ABC Streent', 'India', 'CBSE', '2013', '56', 'Science', 'CBSE', '2015', '70', 'PCM', 'NA', 'NA', 'NA', 'NA', 'NA ', 'NA', 'NA', 'NA', NULL, NULL, NULL, NULL, NULL, NULL, 'Anuj kumar', '2021-05-18 19:36:49', 'Your application is rejected due to insufficient information.', NULL, '2', '2021-05-18 20:13:22', 'be1105502172e686c980856fe5b939ed.png'),
(2, '2', 'B.Tech', 'Mr.Karan Kumar', 'Mrs Kamala Devi', '0000-00-00', 'Indian', 'Male', 'General', 'tiutuiyioyyweroawe,nioruoi', 'kyhiuyiuyoiuyoi', 'CBSE', '2016', '89', 'Science', 'CBSE', '2018', '79', 'Science', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'fhfgweryt3tr', '2022-02-23 12:33:55', 'Rejected', '0', '2', '2022-03-02 11:34:09', 'fbe0d9565a9b4c8bacd821843a4a3d23.png'),
(3, '3', 'B.Tech', 'Mahesh Singh', 'Veena Singh', '1996-05-01', 'Indian', 'Female', 'General', 'G-708, Nandgram Ghaziabad(UP)', 'G-708, Nandgram Ghaziabad(UP)', 'CBSE', '2013', '86', 'Science', 'CBSE', '2015', '92', 'PCM', 'UPTU', '2020', '72', 'B.Tech', '', '', '', '', '7df4c1bf56166ec99e3878959787fb3f.jpg', 'f946c84dd30eb95533a4ecbb6c03e9b0.jpg', 'f946c84dd30eb95533a4ecbb6c03e9b0.jpg', '', '', NULL, 'gdgftewsdgyhkj', '2022-03-02 04:54:34', 'Application has been selected', '60000', '1', '2022-03-02 05:23:28', 'fbe0d9565a9b4c8bacd821843a4a3d23.png'),
(4, '4', 'B.Tech', 'John Doe', 'Alex', '2020-09-09', 'Indian', 'Male', 'OBC', 'ABC Street new Delhi India', 'XYZ Street Noida Uttar Pradesh', 'CBSE', '2017', '70', 'PCM', 'CBSE', '2019', '78', 'PCMB', '', '', '', '', '', '', '', '', '8a008d88e22b011992a9e63145dbe982.pdf', '8a008d88e22b011992a9e63145dbe982.pdf', '8a008d88e22b011992a9e63145dbe982.pdf', '', '', NULL, '  john doe', '2022-03-03 17:24:30', 'Admission application is selected. Please submit the Fee ', '250000', '1', '2022-03-04 00:04:42', 'ebcd036a0db50db993ae98ce380f6419.png'),
(5, '5', 'MSC', 'Rahul Singh', 'Garima Singh', '2002-01-01', 'Indian', 'Male', 'SC/ST', 'Abc 878 XYZ Apartment New Delhi India 110001', '846 XYZ Street Mumbai MH ', 'CBSE', '2016', '71', 'PCM', 'CBSE', '2018', '66', 'PCM', 'BSC', '2021', '78', 'NA', '', '', '', '', '8a008d88e22b011992a9e63145dbe982.pdf', '8a008d88e22b011992a9e63145dbe982.pdf', '8a008d88e22b011992a9e63145dbe982.pdf', '', '', NULL, 'Amit Kumar Singh', '2022-03-04 01:37:02', 'Your application is selected.', '45230', '1', '2022-03-04 01:40:34', 'fbe0d9565a9b4c8bacd821843a4a3d23.png'),
(6, '6', 'Agriculture', 'Harinder Pal', 'Kumkum Devi', '1997-05-06', 'Indain', 'Male', 'General', 'K-80990, jankipuram, New Delhi', 'K-80990, jankipuram, New Delhi', 'CBSE', '2014', '80', 'Science', 'CBSE', '2016', '75', 'Science', '', '', '', '', '', '', '', '', '7df4c1bf56166ec99e3878959787fb3f.jpg', 'f946c84dd30eb95533a4ecbb6c03e9b0.jpg', 'f946c84dd30eb95533a4ecbb6c03e9b0.jpg', '', '', NULL, 'test1', '2022-03-04 04:34:55', NULL, NULL, NULL, NULL, 'e01c902a39b456bb6d3b731732813f94.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `AdminuserName` varchar(20) NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `AdminuserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(2, 'Admin', 'Admin', 876545789, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2021-05-18 04:49:25');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `PhoneNumber` bigint(10) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `Name`, `Email`, `PhoneNumber`, `Message`, `EnquiryDate`, `IsRead`) VALUES
(1, 'Kiran', 'kran@gmail.com', NULL, 'cost of volvo place pritampura to dwarka', '2021-07-05 07:26:24', 1),
(2, 'Sarita Pandey', 'sar@gmail.com', NULL, 'huiyuihhjjkhkjvhknv iyi tuyvuoiup', '2021-07-09 12:48:40', 1),
(3, 'Test', 'test@gmail.com', NULL, 'Want to know price of forest cake', '2021-07-16 12:51:06', 1),
(4, 'Anuj', 'ak330@gmail.com', NULL, 'This is for testing.', '2021-07-18 14:35:50', 1),
(5, 'Nikhil', 'nk@gmail.com', 7798799999, 'hello', '2022-02-28 04:26:49', 1),
(6, 'Anuj', 'ak@gmail.com', 1234567890, 'This is for testing', '2022-03-04 01:29:21', 1),
(7, 'Test', 'test@gmail.com', 12365478910, 'This iis for testing', '2022-03-04 01:45:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `ID` int(11) NOT NULL,
  `CourseName` varchar(90) DEFAULT NULL,
  `CourseDescription` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`ID`, `CourseName`, `CourseDescription`, `CreationDate`) VALUES
(1, 'B.Tech', 'Check here the list of all b tech Courses with top Specializations you can opt after the 12th. Explore the list to know more.', '2022-02-28 06:31:24'),
(2, 'Agriculture', 'Bachelor of Science in Agriculture. Bachelor of Science (Honors) in Agriculture. Bachelor of Science in Crop Physiology.', '2022-02-28 06:31:24'),
(3, 'MCA', 'Master of Computer Applications (MCA) is a two year professional post-graduate programme for candidates wanting to delve deeper into the world of computer application.', '2022-02-28 06:31:24'),
(4, 'MSC', 'A Master of Science degree (or MSc for short) is a degree awarded at universities around the world for completion of graduate-level study in a science- or technology-related field.', '2022-02-28 06:31:24'),
(5, 'B.COM', 'Full form of BCom is Bachelor of Commerce. B.Com is most popular among aspiring teachers/lecturers and researchers. UGC-NET/JRF and Ph.D. are among popular options for MCom degree holders. ', '2022-02-28 06:31:24'),
(6, 'BSC', 'A Bachelor of Science degree (or BSc for short) is a degree awarded at universities around the world for completion of graduate-level study in a science- or technology-related field.', '2022-02-28 06:31:24'),
(7, 'MCOM', 'Full form of MCom is Masters of Commerce. M.Com is most popular among aspiring teachers/lecturers and researchers. UGC-NET/JRF and Ph.D. are among popular options for MCom degree holders. Admission to MCom in top universities is done through an entrance exam. Many universities offer merit-based admission to the course. MCom in India can be pursued as a full-time, part-time, distance or correspondence and online course.', '2022-02-28 06:31:24'),
(12, 'BCA', 'Master of Computer Applications (MCA) is a two year professional post-graduate programme for candidates wanting to delve deeper into the world of computer application development with the help of learning modern programming language. The programme is a blend of both theoretical and practical knowledge.', '2022-02-28 06:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `tblfees`
--

CREATE TABLE `tblfees` (
  `ID` int(5) NOT NULL,
  `UserID` int(5) DEFAULT NULL,
  `PaymentAmount` decimal(10,0) DEFAULT NULL,
  `ModeofPayments` varchar(200) DEFAULT NULL,
  `TransactionNumber` int(10) DEFAULT NULL,
  `DateofTransaction` date DEFAULT NULL,
  `SubmissionDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfees`
--

INSERT INTO `tblfees` (`ID`, `UserID`, `PaymentAmount`, `ModeofPayments`, `TransactionNumber`, `DateofTransaction`, `SubmissionDate`) VALUES
(1, 3, '60000', 'Credit Card', 789456, '2022-03-02', '2022-03-02 11:20:49'),
(3, 4, '250000', 'E-Wallet', 2147483647, '2022-03-03', '2022-03-04 00:19:08'),
(4, 5, '45230', 'UPI', 1597452, '2022-03-04', '2022-03-04 01:41:16'),
(5, 6, '72000', 'Credit Card', 789456, '2022-03-04', '2022-03-04 04:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `ID` int(11) NOT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Decription` varchar(350) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`ID`, `Title`, `Decription`, `CreationDate`) VALUES
(1, 'Test Notice', 'This for testing purpose.  This for testing purpose.This for testing purpose.  This for testing purpose.', '2021-05-18 19:49:42'),
(2, 'Classes going to start', 'uiou\r\ngyufgiuyrfuitrseytguird\r\ngjvksdgjfgiegiuteyuhtg', '2022-03-02 12:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam. ', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)', 'info@gmail.com', 7896541236, NULL, '10:30 am to 7:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscriber`
--

CREATE TABLE `tblsubscriber` (
  `ID` int(5) NOT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `DateofSub` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubscriber`
--

INSERT INTO `tblsubscriber` (`ID`, `Email`, `DateofSub`) VALUES
(1, 'ani@gmail.com', '2021-07-16 07:32:33'),
(2, 'rahul@gmail.com', '2021-07-16 07:32:33'),
(6, 'j@gmail.com', '2021-08-16 15:00:59'),
(8, 'faraha@gmail.com', '2022-02-28 11:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(60) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Password`, `PostingDate`) VALUES
(1, 'Anuj', 'Kumar', 1234567890, 'anujk@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2021-05-17 17:42:09'),
(2, 'Test', 'Rai', 7987987979, 'sar@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-02-23 12:29:11'),
(3, 'Sariya', 'Singh', 7894561236, 'test@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-03-01 13:10:42'),
(4, 'Johnn', 'doe', 1234567898, 'johndoe@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2022-03-03 17:16:20'),
(5, 'Amit', 'Kumar Singh', 1256987410, 'amitk@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2022-03-04 01:33:48'),
(6, 'test1', 'test2', 1123325444, 'test1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2022-03-04 04:26:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmapplications`
--
ALTER TABLE `tbladmapplications`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CourseName` (`CourseName`);

--
-- Indexes for table `tblfees`
--
ALTER TABLE `tblfees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsubscriber`
--
ALTER TABLE `tblsubscriber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmapplications`
--
ALTER TABLE `tbladmapplications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblfees`
--
ALTER TABLE `tblfees`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblsubscriber`
--
ALTER TABLE `tblsubscriber`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
