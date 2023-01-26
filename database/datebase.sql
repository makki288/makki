-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2022 at 08:41 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datebase`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `id_au` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `name_cus_au` varchar(288) NOT NULL,
  `email_cus_au` varchar(255) NOT NULL,
  `money_cus_au` float NOT NULL,
  `date_cus_au` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id_bn` int(10) NOT NULL,
  `name_cus_bn` varchar(50) NOT NULL,
  `account_num_bn` varchar(50) NOT NULL,
  `serial_num_bn` varchar(50) NOT NULL,
  `in_banks_bn` varchar(50) NOT NULL,
  `money_bn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `auction_time_start` date NOT NULL,
  `auction_time_end` date NOT NULL,
  `ads_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `description`, `price`, `auction_time_start`, `auction_time_end`, `ads_name`, `image`) VALUES
(2, 'سيارة بوكس دبل كابfgdfdfdfdfdfdfdfdsfsdfdfdsfsdfsdf', 'سيارة سريعة', 8000, '2022-06-21', '2022-06-21', 'dsdsdsdsdsdsdsdsdPLP', 'CC20953_GBA.png'),
(3, 'dsdsd', 'sdsdsd', 3232320, '2022-06-15', '2022-06-15', 'sdsdsdsd', '3589868.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cus` int(10) NOT NULL,
  `name_cus` varchar(50) NOT NULL,
  `pass_cus` varchar(50) NOT NULL,
  `email_cus` varchar(50) NOT NULL,
  `address_cus` varchar(50) NOT NULL,
  `phone_cus` varchar(50) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cus`, `name_cus`, `pass_cus`, `email_cus`, `address_cus`, `phone_cus`, `role`) VALUES
(1, 'Abody', '123', 'admin@app.com', 'admin', '123123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id_mes` int(10) NOT NULL,
  `name_cus_mes` varchar(50) NOT NULL,
  `email_cus_mes` varchar(50) NOT NULL,
  `message_cus_mes` varchar(100) NOT NULL,
  `date_cus_mes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id_mes`, `name_cus_mes`, `email_cus_mes`, `message_cus_mes`, `date_cus_mes`) VALUES
(1, 'Abdelrahman', 'abody@ust.com', 'edsjgdjsgkdsd', '2022-06-14'),
(2, 'Abdelrahman', 'abody@ust.com', 'sjdfjsahfdjkasfjdasdas', '2022-06-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`id_au`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id_bn`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cus`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_mes`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id_au` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id_bn` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_mes` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
