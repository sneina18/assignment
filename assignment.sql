-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2019 at 06:32 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `prep_time` varchar(30) NOT NULL,
  `ingredients` text NOT NULL,
  `storage` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`id`, `user_id`, `name`, `type`, `prep_time`, `ingredients`, `storage`) VALUES
(1, 1, 'Summer smoothie', 'Breakfast', '5 mins', 'orange juice, coconut yoghurt, frozen mango, carrot.', 'chill'),
(2, 1, 'Granola', 'Dessert', '2 hour 15 mins.', 'coconut oil, maple syrup, kosher salt, rolled oats, coconut flakes, pumpkin seeds, sunflower seeds.', 'Refrigerate'),
(3, 1, 'Omelete-in-a-bun', 'Dinner', '10 mins', 'pepper and onion mixture, eggs, salt, provolone cheese', 'Keep Warm'),
(4, 1, 'Burrito Bowls', 'Lunch', '2 hours', '	Rice, salsa, lettuce, corn, sour cream, black beans.', 'Refrigerate'),
(6, 1, 'jollof', 'Dinner', '2 hours', 'tomato, onion', 'refigereator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `other_name` varchar(60) DEFAULT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone`, `first_name`, `other_name`, `last_name`, `email`, `password`) VALUES
(1, '2015', 'ok', 'jkm', 'okn', 'muda@gmail.com', 'nov');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
