-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 05:41 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planurbigday`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postalcode` varchar(255) NOT NULL,
  `occasion_date` date NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `business_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `image`, `lname`, `phone`, `address`, `city`, `state`, `postalcode`, `occasion_date`, `user_type_id`, `business_id`, `status`, `created_at`) VALUES
(1, 'asha@gmail.com', '96e79218965eb72c92a549dd5a330112', 'Asha', '4fe867a7a9c5a01b884dc0d80bd5728a.jpg', 'Joshi', '999988886', 'Delhi', 'Delhi', 'Delhi', '110001', '0000-00-00', 0, NULL, 0, '2020-03-27 16:39:33'),
(6, 'asha1@gmail.com', '96e79218965eb72c92a549dd5a330112', 'test', '', 'test', '212112121', 'dd', 'ddd', 'ddd', '112121', '0000-00-00', 0, NULL, 0, '2020-03-27 16:39:33'),
(7, 'asha1fdfd@gmail.com', '96e79218965eb72c92a549dd5a330112', 'fddf', '', 'sdsd', '', '', '', '', '', '0000-00-00', 0, NULL, 0, '2020-03-27 16:39:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
