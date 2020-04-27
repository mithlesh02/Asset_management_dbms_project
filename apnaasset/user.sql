-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2020 at 02:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user1`
--

-- --------------------------------------------------------

--
-- Table structure for table `uassets`
--

CREATE TABLE `uassets` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `department` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `location` varchar(32) NOT NULL,
  `perishable` varchar(32) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `degradingrate` int(11) DEFAULT NULL,
  `description` varchar(32) DEFAULT NULL,
  `vendorname` varchar(32) NOT NULL,
  `purchasedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uassets`
--

INSERT INTO `uassets` (`id`, `userid`, `department`, `name`, `location`, `perishable`, `price`, `quantity`, `degradingrate`, `description`, `vendorname`, `purchasedate`) VALUES
(2, 21, 'cse', 'laptop', 'cslab', 'no', 45, 2, 0, 'this is a good machine', 'hp', '2020-04-27'),
(3, 21, 'me', 'system', 'melab', 'no', 45, 3, 0, 'nice product', 'dell', '2020-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(21, 'ye', 'pe', 'ye@gmail.com', '3a5be0f8561ec3d328a0f215476629a1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uassets`
--
ALTER TABLE `uassets`
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
-- AUTO_INCREMENT for table `uassets`
--
ALTER TABLE `uassets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
