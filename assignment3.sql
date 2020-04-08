-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 10:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment3`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `name`, `email`, `password`) VALUES
(1, 'L1', 'user1@gmail.com', '1234'),
(2, 'L2', 'user2@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `seatcount`
--

CREATE TABLE `seatcount` (
  `id` int(11) NOT NULL,
  `slotNo` int(11) NOT NULL,
  `seatCount` int(11) NOT NULL,
  `time` time NOT NULL,
  `end` time NOT NULL,
  `day` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seatcount`
--

INSERT INTO `seatcount` (`id`, `slotNo`, `seatCount`, `time`, `end`, `day`) VALUES
(1, 1, 6, '15:00:00', '17:00:00', 'Monday'),
(2, 2, 0, '14:00:00', '16:00:00', 'Tuesday'),
(3, 3, 4, '11:00:00', '20:00:00', 'Thursday'),
(4, 4, 5, '10:00:00', '12:00:00', 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `slotreg`
--

CREATE TABLE `slotreg` (
  `id` int(11) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `SID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `slotNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slotreg`
--

INSERT INTO `slotreg` (`id`, `fName`, `lName`, `SID`, `email`, `slotNo`) VALUES
(8, 'asd', 'asd', 1002, 'user2@gmail.com', 2),
(9, 'qweqwe', 'sdfsfsdf', 1003, 'user@gmail.com', 4),
(11, 'ghghj', 'sdfsfsdf', 1004, 'asd@asd.co', 3),
(12, 'asdasd', 'fbvb', 1006, 'sfsf@sadas.asdasd', 2),
(13, 'ghghj', 'sdfsfsdf', 1005, 'user2@gmail.com', 2),
(14, 'vbnv', 'vbnvbn', 1008, 'vbnbv@xcvx.fghfgh', 2),
(15, 'vbnv', 'xcvxvxv', 1007, 'user2@gmail.com', 2),
(16, 'dfgdfg', 'fbvb', 1009, 'user2@gmail.com', 2),
(17, 'asdasd', 'sdfsfsdf', 1010, 'user2@gmail.com', 2),
(18, 'qweqwe', 'asd', 1011, 'asd@asd.co', 2),
(19, 'qweqwe', 'vbnvbn', 1012, 'user1@gmail.com', 1),
(20, 'qweqwe', 'fbvb', 1013, 'user1@gmail.com', 3),
(21, 'dfgdfg', 'xcvxvxv', 1014, 'asd@asd.co', 4),
(22, 'dfgdfg', 'vbnvbn', 1015, 'user2@gmail.com', 4),
(23, 'vbnv', 'xcvxvxv', 1017, 'asd@asd.co', 3),
(24, 'vbnv', 'asd', 1001, 'user1@gmail.com', 1),
(25, 'qweqwe', 'xcvxvxv', 1019, 'user2@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `SID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`SID`) VALUES
(1001),
(1002),
(1003),
(1004),
(1005),
(1006),
(1007),
(1008),
(1009),
(1010),
(1011),
(1012),
(1013),
(1014),
(1015),
(1016),
(1017),
(1018),
(1019),
(1020),
(1021),
(1022),
(1023),
(1024),
(1025),
(1026),
(1027),
(1028),
(1029),
(1030),
(1031),
(1032);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seatcount`
--
ALTER TABLE `seatcount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slotreg`
--
ALTER TABLE `slotreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seatcount`
--
ALTER TABLE `seatcount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slotreg`
--
ALTER TABLE `slotreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
