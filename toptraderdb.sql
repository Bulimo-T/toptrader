-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 01:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toptraderdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `adminid` varchar(20) NOT NULL,
  `Fname` varchar(10) NOT NULL,
  `Lname` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `gender` enum('Male','Female','','') NOT NULL,
  `a_password` varchar(20) NOT NULL,
  `department` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`adminid`, `Fname`, `Lname`, `username`, `gender`, `a_password`, `department`) VALUES
('A001', 'Tom', 'Karma', 'karmard', 'Male', 'Bbulim00', 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `admin_activities`
--

CREATE TABLE `admin_activities` (
  `activity_id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `activity_description` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseimage` blob NOT NULL,
  `courseid` varchar(10) NOT NULL,
  `course_document` blob NOT NULL,
  `coursename` varchar(200) NOT NULL,
  `courseprice` int(10) NOT NULL,
  `coursedescription` varchar(300) NOT NULL,
  `payment_status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseimage`, `courseid`, `course_document`, `coursename`, `courseprice`, `coursedescription`, `payment_status`) VALUES
(0x696d616765732f67726572652e6a706567, 'A001', 0x636f75727365732f46656553746174656d656e742d313034323532332e706466, 'Top Trader Never broke Month 1', 40, 'Introduction to the Art of Creative Writing: Explore the fundamental concepts of creative writing, i', 0),
(0x696d616765732f67726572652e6a706567, 'A002', 0x636f75727365732f46656553746174656d656e742d313034323532332e706466, 'Top Trader Never broke Month 2', 45, 'Diving into Genre Exploration: Delve into different genres such as fiction, fantasy, mystery, and mo', 0),
(0x696d616765732f6272616e64312e706e67, 'A003', 0x636f75727365732f46656553746174656d656e742d313034323532332e706466, 'You will not manage month 1', 50, 'Diving into Genre Exploration: Delve into different genres such as fiction, fantasy, mystery, and mo', 0),
(0x696d616765732f6272616e64312e706e67, 'A004', 0x636f75727365732f46656553746174656d656e742d313034323532332e706466, 'You will not manage month 2', 80, 'Diving into Genre Exploration: Delve into different genres such as fiction, fantasy, mystery, and mo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logoimage` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merch`
--

CREATE TABLE `merch` (
  `merchimage` blob NOT NULL,
  `merchname` varchar(10) NOT NULL,
  `merchid` varchar(50) NOT NULL,
  `status` varchar(12) NOT NULL,
  `merchprice` int(10) NOT NULL,
  `merchdescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merch`
--

INSERT INTO `merch` (`merchimage`, `merchname`, `merchid`, `status`, `merchprice`, `merchdescription`) VALUES
(0x696d616765732f632d642d782d5044585f615f38326f626f2d756e73706c6173682e6a7067, 'CozyBlend ', '0', 'In Stock', 2500, 'Introducing the CozyBlend Urban Hoodie – Your Perfect Blend of Comfort and Style!\r\n\r\nEmbrace the chi'),
(0x696d616765732f6272616e64312e706e67, 'rdfgchvjb', 'AA1', 'active', 2500, '56resdfghjk');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `Fname` varchar(10) NOT NULL,
  `Lname` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `gender` enum('Male','Female','','') NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `merch`
--
ALTER TABLE `merch`
  ADD PRIMARY KEY (`merchid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
