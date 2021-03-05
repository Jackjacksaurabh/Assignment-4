-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2020 at 12:36 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Canon EOS', 36000),
(2, 'Nikon DSLR', 40000),
(3, 'Sony DSLR', 45000),
(4, 'Olympus DSLR', 50000),
(5, 'Titan Model #301', 13000),
(6, 'Titan Model #201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Faber Luba #111', 18000),
(9, 'H&W', 800),
(10, 'Luis Phil', 1000),
(11, 'John Zok', 1500),
(12, 'Jhalsani', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `contact` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `address`) VALUES
(30, 'saurabh', 'saurabh2@gmail.com', 'dc06698f0e2e75751545455899adccc3 ', '8856003514 ', 'll '),
(31, 'name', 'name@gmail.com', '2ff62b3c11a14bf5ec0790b82c11de8d ', '8856003514 ', 'sdfsdf '),
(32, 'name', 'name2@gmail.com', '25d55ad283aa400af464c76d713c07ad ', '8856003214 ', 'local '),
(33, 'saurabh', 'saurabh@gmail.com', '84fb3cfd2b84344b7be3a5ad53de9a84', '8856003514', 'dfsdfasf'),
(34, 'name', 'name3@gmail.com', '6004ca5da122c7c0b0893824504f3487', '8856003514', 'SDGLK'),
(35, 'exe', 'exe@gmail.com', '25f9e794323b453885f5181f1b624d0b', '8856003514 ', 'local '),
(36, 'exe', 'exe2@gmail.com', '25d55ad283aa400af464c76d713c07ad ', '8856003514 ', 'loca; '),
(37, 'raju', 'raju@gmail.com', '25d55ad283aa400af464c76d713c07ad ', '8856003514 ', 'LOCAL '),
(38, 'vikas', 'vikas@gmail.com', '25d55ad283aa400af464c76d713c07ad ', '8856003514 ', 'local '),
(39, 'jj', 'jj@gmail.com', '25d55ad283aa400af464c76d713c07ad', '8856003851', 'local'),
(40, 'krunal', 'krunal@gmail.com', '25d55ad283aa400af464c76d713c07ad ', '8856003514 ', 'local '),
(41, 'we', 'jj2@gmail.com', '25d55ad283aa400af464c76d713c07ad ', '8856003514 ', 'local '),
(42, 'jack', 'jack@gmail.com', '25d55ad283aa400af464c76d713c07ad ', '8856003514 ', 'local ');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(1, 33, 1, 'Confirmed'),
(2, 34, 1, 'Confirmed'),
(3, 30, 8, 'Confirmed'),
(7, 30, 1, 'Added to cart'),
(9, 38, 1, 'Added to cart'),
(10, 38, 8, 'Confirmed'),
(11, 41, 1, 'Added to cart'),
(24, 42, 2, 'Added to cart'),
(26, 42, 7, 'Added to cart'),
(27, 42, 1, 'Added to cart'),
(29, 39, 2, 'Confirmed'),
(32, 39, 2, 'Confirmed'),
(33, 39, 3, 'Confirmed'),
(34, 35, 1, 'Confirmed'),
(35, 35, 2, 'Confirmed'),
(36, 39, 3, 'Confirmed'),
(37, 35, 2, 'Confirmed'),
(38, 35, 6, 'Confirmed'),
(39, 35, 7, 'Confirmed'),
(40, 39, 1, 'Confirmed'),
(41, 39, 1, 'Confirmed'),
(42, 35, 1, 'Confirmed'),
(43, 35, 1, 'Confirmed'),
(44, 35, 1, 'Confirmed'),
(47, 35, 1, 'Added to cart'),
(48, 35, 2, 'Confirmed'),
(49, 35, 3, 'Confirmed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
