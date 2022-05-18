-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 04:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activityID` int(11) NOT NULL,
  `activityDate` date DEFAULT NULL,
  `activityDesc` varchar(200) DEFAULT NULL,
  `activityName` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `term` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activityID`, `activityDate`, `activityDesc`, `activityName`, `comment`, `term`) VALUES
(1, '2022-02-01', 'Meet with graduate students around the school', 'USA Day', '', NULL),
(2, '2022-04-30', 'booth set-up for library opening', 'Library Meeting', 'The cake will be delivered at 12 p.m.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interactions`
--

CREATE TABLE `interactions` (
  `commID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `studentName` varchar(50) NOT NULL,
  `userID` int(4) DEFAULT NULL,
  `activity` varchar(50) DEFAULT NULL,
  `comments` varchar(1000) NOT NULL,
  `date` date DEFAULT NULL,
  `followupDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interactions`
--

INSERT INTO `interactions` (`commID`, `studentID`, `studentName`, `userID`, `activity`, `comments`, `date`, `followupDate`) VALUES
(1, 1, '', NULL, 'phone', 'the student said they will think about it', '2022-02-08', '2022-04-07'),
(2, 1, '', NULL, 'phone', 'This student said they wanted to apply', '2022-01-05', '2022-04-09'),
(3, 1, 'Test5 Student1', 2, '', '', '1970-01-01', '1970-01-01'),
(4, 1, 'Test5 Student1', 2, '', '', '1970-01-01', '1970-01-01'),
(5, 1, 'Test5 Student1', 2, '', '', '1970-01-01', '1970-01-01'),
(6, 1, 'Test5 Student1', 2, '', '', '2022-04-19', '1970-01-01'),
(7, 1, 'Test5 Student1', 2, '', '', '2022-04-19', '1970-01-01'),
(8, 1, 'Test5 Student1', 2, '', 'This is it.', '2022-04-19', '2022-04-22'),
(9, 1, 'Test5 Student1', 2, 'USA Day', 'test', '2022-04-19', '2022-04-22'),
(10, 1, 'Test5 Student1', 2, 'USA Day', 'test', '2022-04-19', '2022-04-22'),
(11, 1, 'Test5 Student1', 2, '', 'test2', '2022-04-19', '2022-04-25'),
(12, 1, 'Test5 Student1', 2, '', 'test2', '2022-04-19', '2022-04-25'),
(13, 1, 'Test5 Student1', 2, '', 'test 3', '1970-01-01', '2022-04-27'),
(14, 1, 'venessa test', 2, 'USA Day', 'Met at school\r\ntalked on the phone', '1970-01-01', '2022-04-25'),
(15, 10, 'Larry June', 1, 'Library Meeting', 'Wanted to check for scholarship options?', '2022-04-23', '2022-05-03'),
(16, 10, 'Larry June', 1, 'USA Day', 'Said was intrested', '2022-04-23', '2022-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `jagNum` varchar(9) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `phoneNum` varchar(15) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL,
  `domestic` varchar(20) NOT NULL,
  `active` varchar(10) NOT NULL,
  `term` varchar(20) NOT NULL,
  `followupDate` date DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `major` varchar(40) NOT NULL,
  `school` varchar(40) NOT NULL,
  `state` varchar(48) NOT NULL,
  `houseNumber` int(11) NOT NULL,
  `streetName` varchar(40) NOT NULL,
  `streetType` varchar(8) NOT NULL,
  `zip` int(10) NOT NULL,
  `GPA` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `firstName`, `lastName`, `jagNum`, `birthdate`, `phoneNum`, `email`, `city`, `domestic`, `active`, `term`, `followupDate`, `status`, `major`, `school`, `state`, `houseNumber`, `streetName`, `streetType`, `zip`, `GPA`) VALUES
(1, 'venessa', 'test', 'J00123456', '2022-04-03', '5551110000', 'test@student.com', 'Test Student Dr.', 'Domestic Student', 'yes', 'Fall 2022', '2022-04-25', 'Active', '', '', 'Al', 0, 'street', '', 0, '0.00'),
(7, 'student2', 'test2', 'j0050067', '2022-04-02', '2516001912', 'test2@jagmail.southalabam.edu', 'MOBILE', 'Domestic Student', 'yes', 'spring', '2022-04-17', 'Active', 'Computers', 'south alabama', 'AL', 1400, 'street', 'dr', 36608, '4.80'),
(10, 'Larry', 'June', 'j00464781', '1992-07-29', '2517010001', 'Dmane@gmail.com', 'Mobile', 'Domestic Student', 'yes', 'Spring', '2022-04-15', 'Active', 'Computers', 'University Phoenix', 'GA', 1247, 'street', 'Dr.', 36606, '4.80');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `privledgedRights` varchar(10) CHARACTER SET latin7 NOT NULL,
  `jnum` varchar(9) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `email`, `privledgedRights`, `jnum`, `firstName`, `lastName`) VALUES
(1, 'admin', 'pa55word', 'Fakeadmin@jagmail.southalabama.edu123', 'yes', 'j005555', 'Adam', 'hoover'),
(2, 'user', 'pa55word', 'xxuser3100xx@gmail.yahoo.org.com', 'no', 'J00464871', 'Notadmin', 'basic'),
(13, 'Test', 'normal', 'Kane@gmail.com', 'no', 'j00500787', 'Matt', 'Kane'),
(15, 'Editer', 'Testing', 'Editer@gmail.com', 'no', 'j00464800', 'Editer', 'Kane'),
(18, 'root', 'Haseo890', 'Kombat@gmail.com', 'no', 'j00450780', 'Johnny', 'Cage');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activityID`);

--
-- Indexes for table `interactions`
--
ALTER TABLE `interactions`
  ADD PRIMARY KEY (`commID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `interactions`
--
ALTER TABLE `interactions`
  MODIFY `commID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
