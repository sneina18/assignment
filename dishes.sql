-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 05:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dishes`
--

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `id` int(11) NOT NULL,
  `nam` varchar(50) NOT NULL,
  `typ` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `list` varchar(255) NOT NULL,
  `how` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`id`, `nam`, `typ`, `time`, `list`, `how`, `phone`) VALUES
(298, 'knkn', 'kln', 'lkn', 'lkn', 'kln', 5),
(811, 'sdfno', 'pvospvon', 'dvpodvpo', 'vpov', 'pom', 5);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `phone` int(10) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Oname` varchar(30) DEFAULT NULL,
  `Sname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`phone`, `pin`, `Fname`, `Oname`, `Sname`) VALUES
(1, '2', 'sk', '', 'support24x7@unionsg.com'),
(2, '2', 'd', '', 'support24x7@unionsg.com'),
(5, '3', '6', '', '65'),
(502216522, '1111', 'El', '', 'support24x7@unionsg.com'),
(558535033, '0000', 'Eli', 'Eli Ashitey', 'support24x7@unionsg.com'),
(577323849, '1234', 'Elijah', NULL, 'Ashitey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phone` (`phone`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=812;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dish`
--
ALTER TABLE `dish`
  ADD CONSTRAINT `dish_ibfk_1` FOREIGN KEY (`phone`) REFERENCES `food` (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
