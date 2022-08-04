-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 03:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `adminID` int(20) NOT NULL,
  `apswd` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `dept` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `adminID`, `apswd`, `email`, `mobileno`, `dept`) VALUES
('mohankumar', 11, '11', 'mohankumar@gmail.com', 2147483647, 'eee'),
('sasikumar.R', 1234, '1234', 'sasi@gamil.com`', 2147483647, 'it');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `classid` int(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `section` varchar(1) NOT NULL,
  `incharge` varchar(20) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `sub6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `classid`, `dept`, `section`, `incharge`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
(40, 301, '3/cse', 'a', 'sakthivelp', 'CS11', 'CS22', 'CS33', 'CS44', 'CS55', 'CS66'),
(42, 201, '2/cse', 'a', 'prakashnarayanan', 'as11', 'as22', 'as33', 'sa44', 'sa44', ''),
(43, 401, '4/cse', 'a', 'vanarasan', 'da11', 'da22', 'da33', 'da44', 'da44', ''),
(214, 101, '1/cse', 'a', 'sarathkumar.R', 'cs11', 'cs22', 'cs33', 'cs44', 'cs44', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `roll` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `sem` int(2) NOT NULL,
  `sub1` varchar(2) NOT NULL,
  `sub2` varchar(2) NOT NULL,
  `sub3` varchar(2) NOT NULL,
  `sub4` varchar(2) NOT NULL,
  `sub5` varchar(2) NOT NULL,
  `sub6` varchar(2) NOT NULL,
  `sn1` varchar(20) NOT NULL,
  `sn2` varchar(20) NOT NULL,
  `sn3` varchar(20) NOT NULL,
  `sn4` varchar(20) NOT NULL,
  `sn5` varchar(20) NOT NULL,
  `sn6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`roll`, `name`, `dept`, `tname`, `sem`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sn1`, `sn2`, `sn3`, `sn4`, `sn5`, `sn6`) VALUES
(22, 'mani', '1/cse', 'modal1', 2, 'A+', 'C', 'A+', 'U', 'U', '-', 'cs11', 'cs22', 'cs33', 'cs44', 'cs44', ''),
(11, 'sasikiran.G', '3/cse', 'unit 1', 6, 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'CS11', 'CS22', 'CS33', 'CS44', 'CS55', 'CS66');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `roll` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `mobileno` int(10) NOT NULL,
  `sem` int(1) NOT NULL,
  `dept` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `roll`, `name`, `email`, `dob`, `mobileno`, `sem`, `dept`) VALUES
(28, 11, 'sasikiran.G', 'sasikiran@gmail.com', '1111-11-11', 578995999, 6, '3/cse'),
(34, 41947891, 'mani.r', 'mani@gmail.com', '0000-00-00', 8959257, 5, '3/cse'),
(38, 134, 'naveenkumar.R', 'naveen@gmail.com', '2423-03-04', 65465, 6, '3/cse'),
(43, 2147483647, 'jeevanandham', 'jeeva@gmail.com', '0000-00-00', 2147483647, 6, '3/cse'),
(47, 1312313, 'vishnu.p', 'vishnu@gmail.com', '2222-02-22', 2432444, 8, '4/cse '),
(52, 32462946, 'nayeem.n', 'nayeem@gmail.com', '2464-07-06', 98927494, 2, '1/cse '),
(60, 6118181, 'vignesh.s', 'vignesh@gmail.com', '2000-02-22', 995599554, 4, '2/cse'),
(67, 759579345, 'bagavam', 'bagavan@gmail.com', '2000-02-10', 453535, 4, '2/cse '),
(70, 843659651, 'manikandan.', 'manikandan@gmail.com', '7388-02-12', 2147483647, 4, '2/cse '),
(71, 98759337, 'adnan.m', 'adnan@gmail.com', '2001-02-12', 87345865, 8, '4/cse '),
(72, 987927592, 'nagaraj.m', 'nagaraj@gamil.com', '2000-12-12', 2147483647, 4, '2/cse '),
(73, 97249247, 'aguprasath', 'agum@gmail.com', '0000-00-00', 2525, 4, '2/cse '),
(86, 22, 'mani', 'mani@gamil.com', '2222-02-22', 2147483647, 2, '1/cse');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`apswd`),
  ADD UNIQUE KEY `adminid` (`adminID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `classid` (`classid`,`dept`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
