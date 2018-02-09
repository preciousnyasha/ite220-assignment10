-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 09, 2018 at 12:35 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ahm_Assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `id` int(50) NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `shipping_addr` varchar(500) NOT NULL,
  `purchase_order_date` date NOT NULL,
  `product` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `qty` int(250) NOT NULL,
  `unit_cost` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_orders`
--

INSERT INTO `purchase_orders` (`id`, `supplier`, `shipping_addr`, `purchase_order_date`, `product`, `description`, `qty`, `unit_cost`) VALUES
(1, 'Precious', 'Stamford International University', '2018-02-07', 'Pizza', 'yummy', 2, '45'),
(2, 'Precious', 'Stamford International University', '2018-02-07', 'Pizza', 'yummy', 2, '45'),
(7, 'Example', 'Example Address', '2018-02-08', 'pizza', 'yummy', 2, '45'),
(8, 'Precious', 'Stamford International University', '2018-02-15', 'Sadza', 'nemaguru', 1, '23');

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE `Supplier` (
  `Vendor_id` int(20) NOT NULL,
  `Vendor_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Phone_number` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Zipcode` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Supplier`
--

INSERT INTO `Supplier` (`Vendor_id`, `Vendor_name`, `Address`, `Email`, `Phone_number`, `Zipcode`) VALUES
(1, 'Precious', 'Stamford International University', 'example@domain.com', '123456789', '12345'),
(2, 'Example', 'Example Address', 'domain@domain.com', '123456789', '123456'),
(3, 'Precious', 'Stamford International University', 'example@domain.com', '123456789', '12345'),
(4, 'Example', 'Example Address', 'domain@domain.com', '123456789', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`Vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `Supplier`
--
ALTER TABLE `Supplier`
  MODIFY `Vendor_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
