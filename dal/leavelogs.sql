-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 04:35 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leavelogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `lms_account`
--

CREATE TABLE `lms_account` (
  `Id` bigint(20) NOT NULL,
  `Name` varchar(512) NOT NULL,
  `Description` varchar(512) NOT NULL,
  `CreatedOn` datetime NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lms_account`
--

INSERT INTO `lms_account` (`Id`, `Name`, `Description`, `CreatedOn`, `Active`) VALUES
(1, 'Leave Logs', 'Account Leave Logs', '2020-08-26 23:08:23', 1),
(2, 'Guest', 'Guest Account', '2020-08-26 23:10:34', 1),
(3, 'Demo', 'Demo Account', '2020-08-26 23:10:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lms_branch`
--

CREATE TABLE `lms_branch` (
  `Id` bigint(20) NOT NULL,
  `AccountId` bigint(20) NOT NULL,
  `Name` varchar(512) NOT NULL,
  `Description` varchar(512) NOT NULL,
  `Address` varchar(512) NOT NULL,
  `TimeZone` varchar(50) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  `ModifiedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lms_branch`
--

INSERT INTO `lms_branch` (`Id`, `AccountId`, `Name`, `Description`, `Address`, `TimeZone`, `Active`, `ModifiedOn`) VALUES
(1, 1, 'Main Branch', 'Main Branch', 'Chennai', 'Asia/Kolkata', 1, '2020-08-26 23:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `lms_department`
--

CREATE TABLE `lms_department` (
  `Id` bigint(20) NOT NULL,
  `AccountId` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `ShortName` varchar(100) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lms_department`
--

INSERT INTO `lms_department` (`Id`, `AccountId`, `Name`, `ShortName`, `Code`, `Active`) VALUES
(1, 1, 'Human Resource', 'HR', 'HR001', 1),
(2, 1, 'Information Technology', 'IT', 'IT001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lms_employee`
--

CREATE TABLE `lms_employee` (
  `Id` bigint(20) NOT NULL,
  `AccountId` bigint(20) NOT NULL,
  `EmployeeId` varchar(50) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `ProfilePicture` varchar(255) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `DepartmentId` bigint(20) NOT NULL,
  `Address` varchar(512) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Country` varchar(150) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `JoinedOn` date NOT NULL,
  `ReleavedOn` datetime NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `SuperAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lms_employee`
--

INSERT INTO `lms_employee` (`Id`, `AccountId`, `EmployeeId`, `FirstName`, `LastName`, `EmailId`, `Password`, `ProfilePicture`, `Gender`, `DOB`, `DepartmentId`, `Address`, `City`, `Country`, `PhoneNumber`, `Status`, `JoinedOn`, `ReleavedOn`, `Admin`, `SuperAdmin`) VALUES
(1, 1, 'OVATO/11', 'Elanchezhian', 'Narayanasamy', 'elaa1979@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '', 'Male', '1979-04-04', 1, 'Chennai', 'Chennai', 'India', '7708596008', 'Active', '2020-08-01', '0000-00-00 00:00:00', 1, 1),
(2, 1, 'OVATO/10', 'Amiya', 'Sahoo', 'amiyasahoo@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '', 'Male', '1979-04-04', 1, 'Chennai', 'Chennai', 'India', '7708596008', 'Active', '2020-08-01', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lms_holiday`
--

CREATE TABLE `lms_holiday` (
  `Id` bigint(20) NOT NULL,
  `AccountId` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lms_holiday`
--

INSERT INTO `lms_holiday` (`Id`, `AccountId`, `Name`, `Description`, `Date`) VALUES
(1, 1, 'New year', 'New year 2021', '2021-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `lms_leave`
--

CREATE TABLE `lms_leave` (
  `Id` bigint(20) NOT NULL,
  `AccountId` bigint(20) NOT NULL,
  `EmployeeId` bigint(20) NOT NULL,
  `LeaveType` varchar(50) NOT NULL,
  `Reason` varchar(512) NOT NULL,
  `LeaveFrom` datetime NOT NULL,
  `LeaveTo` datetime NOT NULL,
  `Status` varchar(50) NOT NULL,
  `AppliedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lms_leave`
--

INSERT INTO `lms_leave` (`Id`, `AccountId`, `EmployeeId`, `LeaveType`, `Reason`, `LeaveFrom`, `LeaveTo`, `Status`, `AppliedOn`) VALUES
(1, 1, 1, 'Casual', 'Annual Leave', '2020-12-15 22:28:45', '2020-12-16 22:28:45', 'Requested', '2020-08-30 22:28:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lms_account`
--
ALTER TABLE `lms_account`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lms_branch`
--
ALTER TABLE `lms_branch`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lms_department`
--
ALTER TABLE `lms_department`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lms_employee`
--
ALTER TABLE `lms_employee`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lms_holiday`
--
ALTER TABLE `lms_holiday`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lms_leave`
--
ALTER TABLE `lms_leave`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lms_account`
--
ALTER TABLE `lms_account`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lms_branch`
--
ALTER TABLE `lms_branch`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lms_department`
--
ALTER TABLE `lms_department`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lms_employee`
--
ALTER TABLE `lms_employee`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lms_holiday`
--
ALTER TABLE `lms_holiday`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lms_leave`
--
ALTER TABLE `lms_leave`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
