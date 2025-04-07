-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 05:15 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'amrut', 'amrut@gmail.com', '1111', '2016-04-04 20:31:45', '2021-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_box`
--

CREATE TABLE `complaint_box` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `issuedate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint_box`
--

INSERT INTO `complaint_box` (`id`, `name`, `class`, `contact`, `email`, `topic`, `complaint`, `issuedate`) VALUES
(1, 'Amrut Laxman Gawade', 'Computer Engineering', 7741941681, 'amrut@gmail.com', 'Topic 1', 'tyxjtrjrtnrynernreherererdfbdf', '2021-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `posting_date`) VALUES
(1, 'ME', 'Mechanical Engineering', '2021-04-09 12:11:44'),
(2, 'EE', 'Electrical Engineering', '2021-04-09 12:11:44'),
(3, 'CO', 'Computer Engineering', '2021-04-09 12:11:44'),
(4, 'CE', 'Civil Engineering', '2021-04-09 12:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `leavereq`
--

CREATE TABLE `leavereq` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `leavedate` varchar(20) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leavereq`
--

INSERT INTO `leavereq` (`id`, `name`, `class`, `contact`, `email`, `leavedate`, `reason`, `status`) VALUES
(10, 'Amrut Laxman Gawade', 'Computer Engineering', 7741941681, 'amrut@gmail.com', '2021-04-14', 'hrtsjhrthfbrtf', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `stayfrom` date NOT NULL,
  `duration` int(11) NOT NULL,
  `fees` bigint(20) NOT NULL,
  `course` varchar(500) NOT NULL,
  `regno` int(11) NOT NULL,
  `firstName` varchar(500) NOT NULL,
  `middleName` varchar(500) NOT NULL,
  `lastName` varchar(500) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `contactno` bigint(10) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `egycontactno` bigint(11) NOT NULL,
  `guardianName` varchar(500) NOT NULL,
  `guardianRelation` varchar(500) NOT NULL,
  `guardianContactno` bigint(11) NOT NULL,
  `corresAddress` varchar(500) NOT NULL,
  `corresCIty` varchar(500) NOT NULL,
  `corresState` varchar(500) NOT NULL,
  `corresPincode` int(11) NOT NULL,
  `pmntAddress` varchar(500) NOT NULL,
  `pmntCity` varchar(500) NOT NULL,
  `pmnatetState` varchar(500) NOT NULL,
  `pmntPincode` int(11) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `roomno`, `stayfrom`, `duration`, `fees`, `course`, `regno`, `firstName`, `middleName`, `lastName`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `corresPincode`, `pmntAddress`, `pmntCity`, `pmnatetState`, `pmntPincode`, `postingDate`, `updationDate`) VALUES
(9, 2, '2021-04-13', 12, 36000, 'Computer Engineering', 46, 'Amrut', 'Laxman', 'Gawade', 'male', 7741941681, 'amrut@gmail.com', 565665, 'Roshan', 'Brother', 9011700826, '456gmnghm', 'tdyjty', 'Jharkhand', 545454, '456gmnghm', 'tdyjty', 'Jharkhand', 545454, '2021-04-13 14:21:45', '');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `capacity` int(11) NOT NULL DEFAULT 4,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_no`, `capacity`, `posting_date`) VALUES
(1, 1, 0, '2021-04-09 17:11:25'),
(2, 2, 2, '2021-04-09 17:11:59'),
(3, 3, 4, '2021-04-09 17:12:07'),
(4, 4, 4, '2021-04-09 17:12:12'),
(5, 5, 4, '2021-04-09 17:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `loginTime`) VALUES
(23, 1, 'test@gmail.com', '2021-04-09 15:18:30'),
(24, 1, 'test@gmail.com', '2021-04-09 16:26:17'),
(25, 1, 'test@gmail.com', '2021-04-09 17:13:02'),
(26, 1, 'test@gmail.com', '2021-04-09 17:58:48'),
(27, 1, 'test@gmail.com', '2021-04-10 08:17:24'),
(28, 23, 'Rushikeshsawant463@gmail.com', '2021-04-10 08:37:53'),
(29, 1, 'test@gmail.com', '2021-04-10 10:03:29'),
(30, 1, 'test@gmail.com', '2021-04-10 20:51:46'),
(31, 44, 'amrut@gmail.com', '2021-04-10 21:34:16'),
(32, 44, 'amrut@gmail.com', '2021-04-11 12:56:51'),
(33, 44, 'amrut@gmail.com', '2021-04-11 13:04:56'),
(34, 44, 'amrut@gmail.com', '2021-04-13 12:18:14'),
(35, 44, 'amrut@gmail.com', '2021-04-13 13:16:08'),
(36, 45, 'amrutgawade.23@gmail.com', '2021-04-13 14:15:00'),
(37, 46, 'amrut@gmail.com', '2021-04-13 14:19:26'),
(38, 46, 'amrut@gmail.com', '2021-04-13 15:03:34'),
(39, 46, 'amrut@gmail.com', '2021-04-13 16:05:54'),
(40, 46, 'amrut@gmail.com', '2021-04-13 16:06:03'),
(41, 46, 'amrut@gmail.com', '2021-04-14 09:38:42'),
(42, 46, 'amrut@gmail.com', '2021-04-14 12:38:22'),
(43, 46, 'amrut@gmail.com', '2021-04-14 12:47:06'),
(44, 46, 'amrut@gmail.com', '2021-04-14 12:58:20'),
(45, 46, 'amrut@gmail.com', '2021-04-14 14:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `course` varchar(50) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `firstName`, `middleName`, `lastName`, `course`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(46, 'Amrut', 'Laxman', 'Gawade', 'Computer Engineering', 'male', 7741941681, 'amrut@gmail.com', '1111', '2021-04-13 14:18:56', '14-04-2021 07:52:09', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint_box`
--
ALTER TABLE `complaint_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leavereq`
--
ALTER TABLE `leavereq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
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
-- AUTO_INCREMENT for table `complaint_box`
--
ALTER TABLE `complaint_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `leavereq`
--
ALTER TABLE `leavereq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
