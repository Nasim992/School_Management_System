-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 06:26 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2017-05-13 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `payment_student`
--

CREATE TABLE `payment_student` (
  `id` int(11) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_student`
--

INSERT INTO `payment_student` (`id`, `ClassId`, `payment`) VALUES
(1, 2, 1000),
(2, 7, 1500),
(7, 8, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `reception_login`
--

CREATE TABLE `reception_login` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reception_login`
--

INSERT INTO `reception_login` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'receptionist', '81dc9bdb52d04dc20036dbd8313ed055', '2017-05-13 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(4) DEFAULT NULL,
  `Section` varchar(5) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
(2, 'Second', 2, 'A', '2017-06-06 17:21:20', '2017-06-06 17:21:38'),
(7, 'Thirteen', 15, 'A', '2019-12-01 05:41:37', NULL),
(8, 'Fourteen', 14, 'A', '2019-12-01 05:44:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(1, 6, 6, 3, 56, '2019-11-29 16:02:04', NULL),
(2, 6, 6, 4, 34, '2019-11-29 16:02:04', NULL),
(3, 7, 2, 2, 70, '2019-11-30 12:57:00', NULL),
(4, 7, 2, 3, 78, '2019-11-30 12:57:00', NULL),
(5, 7, 2, 4, 80, '2019-11-30 12:57:00', NULL),
(6, 8, 7, 6, 80, '2019-12-01 05:53:04', NULL),
(10, 10, 2, 8, 78, '2019-12-03 16:34:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) DEFAULT NULL,
  `RollId` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` varchar(100) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `bg` varchar(255) DEFAULT NULL,
  `scholar` int(11) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `fcon` varchar(255) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `mcon` varchar(255) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `bg`, `scholar`, `fname`, `fcon`, `mname`, `mcon`, `Status`) VALUES
(9, 'wasim', '1', 'Male', '2019-12-07', 8, '2019-12-01 10:24:40', NULL, 'A', 12, 'A', '12', 'As', '21', 1),
(10, 'Lazy Sabbir', '17203038', 'Female', '2019-12-04', 2, '2019-12-03 13:16:54', NULL, 'S-', 0, 'Nurul Islam', '+880162721212', 'B.Samsunnahar', '+957454', 1),
(11, 'qaqa', '12345', 'Male', '2019-12-12', 8, '2019-12-03 13:56:27', NULL, 'A+', 50, 'Ghas', '324', 'sdf', '35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

CREATE TABLE `tblsubjectcombination` (
  `id` int(11) NOT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Updationdate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjectcombination`
--

INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
(16, 6, 9, 1, '2019-11-29 06:53:29', NULL),
(17, 6, 10, 1, '2019-11-29 06:53:35', NULL),
(18, 6, 3, 1, '2019-11-29 15:58:06', '2019-11-29 16:00:28'),
(19, 6, 4, 1, '2019-11-29 15:58:10', '2019-11-29 16:00:18'),
(33, 2, 8, 1, '2019-12-03 16:33:45', NULL),
(36, 8, 11, 1, '2019-12-03 16:34:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`) VALUES
(8, 'Theory Of Computation', 'CSC-397', '2019-12-03 16:30:06', NULL),
(10, 'Bangla', 'Ban-124', '2019-12-03 16:30:15', NULL),
(11, 'System Analysis', 'CSC-387', '2019-12-03 16:30:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `id` int(11) NOT NULL,
  `TeacherName` varchar(100) NOT NULL,
  `RollId` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `bg` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL,
  `fcon` varchar(100) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`id`, `TeacherName`, `RollId`, `Gender`, `DOB`, `bg`, `salary`, `fcon`, `Status`) VALUES
(1, 'Naism', '17203056', 'Male', '1995-07-25', 'A+', 35000, '0184564465', 1),
(2, 'Md. Shoibe Akhter', '17203057', 'Male', '1998-03-07', 'B+', 40000, '01796459889', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'teacher', '81dc9bdb52d04dc20036dbd8313ed055', '2017-05-13 11:18:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_student`
--
ALTER TABLE `payment_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ClassId` (`ClassId`);

--
-- Indexes for table `reception_login`
--
ALTER TABLE `reception_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ClassNameNumeric` (`ClassNameNumeric`);

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`StudentId`),
  ADD UNIQUE KEY `RollId` (`RollId`);

--
-- Indexes for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `SubjectId` (`SubjectId`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `SubjectCode` (`SubjectCode`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `RollId` (`RollId`);

--
-- Indexes for table `teacher_login`
--
ALTER TABLE `teacher_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_student`
--
ALTER TABLE `payment_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reception_login`
--
ALTER TABLE `reception_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher_login`
--
ALTER TABLE `teacher_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
