-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2018 at 06:33 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--
CREATE database result;
use result;
CREATE TABLE `marks` (
  `stud_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`stud_id`, `sub_id`, `marks`) VALUES
(2, 4, 88),
(2, 5, 88),
(2, 6, 88),
(3, 7, 33),
(3, 8, 22),
(3, 9, 11),
(4, 10, 45),
(4, 11, 54),
(4, 12, 45),
(5, 1, 99),
(5, 2, 99),
(5, 3, 99),
(6, 10, 88),
(6, 11, 88),
(6, 12, 88),
(7, 1, 100),
(7, 2, 100),
(7, 3, 100),
(8, 7, 55),
(8, 8, 55),
(8, 9, 55),
(9, 7, 88),
(9, 8, 88),
(9, 9, 88),
(10, 7, 88),
(10, 8, 88),
(10, 9, 88),
(12, 7, 77),
(12, 8, 77),
(12, 9, 77),
(13, 7, 88),
(13, 8, 88),
(13, 9, 88),
(15, 4, 99),
(15, 5, 99),
(15, 6, 99),
(16, 4, 78),
(16, 5, 87),
(16, 6, 78),
(17, 4, 100),
(17, 5, 100),
(17, 6, 100),
(18, 4, 88),
(18, 5, 88),
(18, 6, 88),
(19, 10, 0),
(19, 11, 0),
(19, 12, 0),
(20, 1, 1),
(20, 2, 1),
(20, 3, 1),
(21, 1, 45),
(21, 2, 77),
(21, 3, 56),
(22, 7, 23),
(22, 8, 32),
(22, 9, 23),
(46, 1, 12),
(46, 2, 12),
(46, 3, 12);

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE `moderator` (
  `m_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`m_id`, `name`, `username`, `password`) VALUES
(1, 'sanjeet', 'sanjeet', 'sanjeet');

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `p_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`p_id`, `name`, `username`, `password`) VALUES
(1, 'sanjeet', 'sanjeet', 'sanjeet');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stud_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stud_id`, `name`, `year`) VALUES
(2, 'akash', 'second'),
(3, 'shubham', 'third'),
(4, 'ajinkya', 'fourth'),
(5, 'sanjeet', 'first'),
(6, 'pal', 'fourth'),
(7, 'kareena', 'first'),
(8, 'xyz', 'third'),
(9, 'abc', 'third'),
(12, 'shvani', 'third'),
(13, 'sanjeet', 'third'),
(17, 'kabir', 'second'),
(18, 'someone', 'second'),
(19, 'ajeeb', 'fourth'),
(20, 'ajeeb1', 'first'),
(21, 'sanjeet', 'first'),
(22, 'akash jadav', 'third'),
(46, '12', 'first');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` int(10) NOT NULL,
  `sub_name` varchar(30) NOT NULL,
  `year` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `sub_name`, `year`) VALUES
(1, 'c++', 'first'),
(2, 'c', 'first'),
(3, 'sql', 'first'),
(4, 'java', 'second'),
(5, 'DBMS', 'second'),
(6, 'data-communication', 'second'),
(7, 'advance-java', 'third'),
(8, 'advance-DBMS', 'third'),
(9, 'advance-data-communication', 'third'),
(10, 'Robotics', 'fourth'),
(11, 'AI', 'fourth'),
(12, 'Machine-Learning', 'fourth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `moderator`
--
ALTER TABLE `moderator`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stud_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
