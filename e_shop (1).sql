-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2024 at 07:53 AM
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
-- Database: `e_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Ghodke Prajakta Deepak', 'prajakta@gmail.com', 'Products Related', 'Products available on your website made from scrap are amazing.');

-- --------------------------------------------------------

--
-- Table structure for table `creative`
--

CREATE TABLE `creative` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creative`
--

INSERT INTO `creative` (`id`, `product_name`, `product_price`, `product_img`) VALUES
(1, 'Clock', 170, 'clock1.jpg'),
(5, 'Fan', 300, 'fan2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `product_price` int(50) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_mobile` varchar(10) NOT NULL,
  `cust_address` varchar(200) NOT NULL,
  `order_by` int(11) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`id`, `product_name`, `company_name`, `product_price`, `cust_name`, `cust_mobile`, `cust_address`, `order_by`, `order_status`, `reason`) VALUES
(2, 'Fan', 'Bajaj', 1200, 'Pallavi Thorat', '1234567890', '\r\nSinnar', 4, 'Rejected', 'sdgdsgs'),
(3, 'dfsrerwer', 'job finder', 2323, 'Rutuja Dalvi', '0987654321', 'fdfs', 2, '', ''),
(4, 'Clock', '', 170, 'Prajakta Ghodke', '9874463234', 'Nashik', 2, '', ''),
(5, 'Clock', '', 170, 'Prajakta Ghodke', '8784746643', 'Nashik', 5, '', ''),
(6, 'Clock', '', 170, 'Prajakta Ghodke', '8784746643', 'Nashik', 6, '', ''),
(7, 'Motor', 'Bajaj', 33, 'Prajakta Ghodke', '8784746643', 'Nashik', 7, '', ''),
(8, 'Scrap Clock', '', 50, 'Prajakta Ghodke', '8784746643', 'Nashik', 7, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_img` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`id`, `product_name`, `company_name`, `product_price`, `product_img`) VALUES
(9, 'Clock', '', 170, 'clock1.jpg'),
(3, 'dfs', 'Bajaj', 234, '3 (2).jpg'),
(4, 'Motor', 'Bajaj', 33, 'product-5.jpg'),
(5, 'dfsrerwer', 'job finder', 2323, 'product-4.jpg'),
(6, 'Fan', 'Bajaj', 200, 'bike.jpg'),
(7, 'Fan', 'crompton', 800, 'pricing-ultimate.png'),
(10, 'Fan', '', 300, 'fan2.jpg'),
(11, 'Scrap Clock', '', 50, 'scrap_clock.jpg'),
(15, 'Scrap Fan', '', 100, 'scrap_fan.jpg'),
(16, 'Fan', '', 300, 'fan2.jpg'),
(17, 'Scrap Fan', '', 100, 'scrap_fan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `scrapyard`
--

CREATE TABLE `scrapyard` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scrapyard`
--

INSERT INTO `scrapyard` (`id`, `product_name`, `product_price`, `product_img`) VALUES
(1, 'Scrap Clock', 50, 'scrap_clock.jpg'),
(3, 'Scrap Fan', 100, 'scrap_fan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role_id`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', 'admin@123', 0),
(7, 'Ghodke Prajakta Deepak', 'prajakta@gmail.com', 'Prajakta123', 'Prajakta@123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creative`
--
ALTER TABLE `creative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scrapyard`
--
ALTER TABLE `scrapyard`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `creative`
--
ALTER TABLE `creative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `scrapyard`
--
ALTER TABLE `scrapyard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
