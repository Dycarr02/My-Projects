-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 04:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcarr10`
--

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `entertainment_id` int(11) NOT NULL,
  `entertainment_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `web_uri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`entertainment_id`, `entertainment_name`, `price`, `web_uri`) VALUES
(1001, 'playstation 5', '499.99', 'https://www.smythstoys.com/uk/en-gb/video-games-and-tablets/playstation-gaming/playstation-5/playstation-5-consoles/playstation-5-console/p/191259'),
(1002, 'electric guitar kit', '130.00', 'https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwiD_vTmucmAAxWFw-0KHfhdAE0YABAUGgJkZw&ohost=www.google.com&cid=CAESa-D2TQEL8BAct-WVAMFd8DfEeb7kXIkwbPjf_A-NAbMC8_e8wPcbNAqYCkCm6yZtrxiBSUmBWLFFI-hAG92VFHCE8k4APUOjvF7axaz606jiVMohCn9LNSSBwXkcwO9z-');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `web_uri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `price`, `web_uri`) VALUES
(2001, 'cherry bakewell', '1.50', 'https://groceries.asda.com/product/tarts-pies-bakewells/mr-kipling-cherry-bakewell-tarts/25614'),
(2002, 'mini rolls', '1.50', 'https://groceries.asda.com/product/cadbury-cakes/cadbury-raspberry-mini-rolls-cakes/910001947335');

-- --------------------------------------------------------

--
-- Table structure for table `toys`
--

CREATE TABLE `toys` (
  `toy_id` int(11) NOT NULL,
  `toy_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `web_uri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toys`
--

INSERT INTO `toys` (`toy_id`, `toy_name`, `price`, `web_uri`) VALUES
(3001, 'pikachu teddy', '29.99', 'https://www.smythstoys.com/uk/en-gb/brand/pokemon/pokemon-toys/pokemon-electric-charge-pikachu-28cm-plush/p/199144'),
(3002, 'barbie doll', '14.99', 'https://www.smythstoys.com/uk/en-gb/toys/fashion-and-dolls/barbie/barbie-extra-doll-in-knitted-jumper/p/217847');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`entertainment_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `toys`
--
ALTER TABLE `toys`
  ADD PRIMARY KEY (`toy_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `entertainment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2003;

--
-- AUTO_INCREMENT for table `toys`
--
ALTER TABLE `toys`
  MODIFY `toy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
