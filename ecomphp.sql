-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 07:11 PM
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
-- Database: `ecomphp`
--

-- --------------------------------------------------------



--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(6, 'brand');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `pquantity` varchar(255) NOT NULL,
  `orderid` int(255) NOT NULL,
  `productprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `pid`, `pquantity`, `orderid`, `productprice`) VALUES
(1, 35, '1', 4, '12444'),
(2, 39, '1', 5, '55556'),
(3, 34, '1', 6, '53453'),
(4, 31, '1', 7, '3543'),
(5, 38, '1', 7, '44245'),
(6, 23, '1', 7, '3423');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `totalprice` varchar(1000) NOT NULL,
  `orderstatus` varchar(1000) NOT NULL,
  `paymentmode` varchar(1000) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `totalprice`, `orderstatus`, `paymentmode`, `timestamp`) VALUES
(1, 1, '47358', 'Cancelled', 'cheque', '2020-07-30 00:18:26'),
(2, 1, '3423', 'Delivery Failed', 'paypal', '2020-07-30 01:34:56'),
(3, 1, '47358', 'In Progress', 'paypal', '2020-07-30 15:17:45'),
(4, 1, '12444', 'Order Placed', 'paypal', '2020-08-01 22:27:39'),
(5, 16, '55556', 'Order Placed', 'cod', '2021-03-08 21:10:39'),
(6, 16, '53453', 'Order Placed', 'cheque', '2021-03-08 21:12:16'),
(7, 16, '51211', '', 'cheque', '2021-03-08 21:32:58');

-- --------------------------------------------------------

--
-- Table structure for table `ordertracking`
--

CREATE TABLE `ordertracking` (
  `id` int(255) NOT NULL,
  `orderid` int(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertracking`
--

INSERT INTO `ordertracking` (`id`, `orderid`, `status`, `message`, `timestamp`) VALUES
(1, 2, '', ' ', '2020-07-30 09:26:04'),
(2, 2, 'Delivery Failed', ' ', '2020-07-30 09:26:11'),
(3, 3, 'Dispatched', ' ', '2020-07-30 15:18:41'),
(4, 3, 'In Progress', ' ', '2020-07-30 15:19:38'),
(5, 1, 'Cancelled', ' i hate this ', '2020-08-01 19:55:15'),
(6, 7, '', ' ', '2021-03-08 23:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `brandid` int(255) NOT NULL,
  `priceid` int(255) NOT NULL,
  `thumb` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brandid`, `priceid`, `thumb`, `description`) VALUES
(22, 'name2', 6, 33333, 'uploads/testpic.jpg', 'des1'),
(23, 'name3', 6, 3423, 'uploads/testpic.jpg', 'des2'),
(24, 'name4', 6, 44444, 'uploads/testpic.jpg', 'des3'),
(25, 'name5', 6, 4389, 'uploads/testpic.jpg', 'des4'),
(26, 'name6', 6, 9823, 'uploads/testpic.jpg', 'des5'),
(27, 'name7', 6, 34546, 'uploads/testpic.jpg', 'des6'),
(28, 'name8', 6, 43355, 'uploads/testpic.jpg', 'des7'),
(29, 'name9', 6, 23454, 'uploads/testpic.jpg', 'des8'),
(30, 'name10', 6, 35635, 'uploads/testpic.jpg', 'des9'),
(31, 'name11', 6, 3543, 'uploads/testpic.jpg', 'des10'),
(32, 'name12', 6, 34535, 'uploads/testpic.jpg', 'des11'),
(33, 'name13', 6, 12444, 'uploads/testpic.jpg', 'des12'),
(34, 'name14', 6, 53453, 'uploads/testpic.jpg', 'des13'),
(35, 'name15', 6, 12444, 'uploads/testpic.jpg', 'des14'),
(36, 'name16', 6, 32423, 'uploads/testpic.jpg', 'des15'),
(37, 'name17', 6, 33332, 'uploads/testpic.jpg', 'des16'),
(38, 'name18', 6, 44245, 'uploads/testpic.jpg', 'des17'),
(39, 'name19', 6, 55556, 'uploads/testpic.jpg', 'des18'),
(40, 'name20', 6, 55555, 'uploads/testpic.jpg', 'des19');

-- --------------------------------------------------------


--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `timestamp`) VALUES
(11, 'nimishbhandari727521@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '2020-08-03 21:13:49'),
(12, 'test@gmail.com', '202cb962ac59075b964b07152d234b70', '2021-03-08 20:29:42'),
(13, 'info@codebugged.com', '9f6e6800cfae7749eb6c486619254b9c', '2021-03-08 20:41:31'),
(14, 'admin@vdss.com', 'c20ad4d76fe97759aa27a0c99bff6710', '2021-03-08 20:43:13'),
(15, 'testing@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2021-03-08 20:44:17'),
(16, 'gorakshkrishk.pcl.gorakhpurup@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2021-03-08 20:51:03');

-- --------------------------------------------------------

--
-- Table structure for table `usersmeta`
--

CREATE TABLE `usersmeta` (
  `id` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersmeta`
--

INSERT INTO `usersmeta` (`id`, `uid`, `firstname`, `lastname`, `company`, `address1`, `address2`, `city`, `state`, `country`, `zip`, `mobile`) VALUES
(1, 1, 'NIMISH', 'BHANDARI', 'oyg', 'Vikas Line', 'J3', 'Lucknow', 'Uttar Pradesh', 'India', '226002', '08303578247'),
(2, 16, '																																				', '																																				', '																												', '																												', '																												', '																																				', '																																				', '', '', '');

-- --------------------------------------------------------



--
-- Indexes for dumped tables
--

ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertracking`
--
ALTER TABLE `ordertracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- Indexes for table `usersmeta`
--
ALTER TABLE `usersmeta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ordertracking`
--
ALTER TABLE `ordertracking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usersmeta`
--
ALTER TABLE `usersmeta`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
