-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2018 at 12:33 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `propertydetails`
--

CREATE TABLE `propertydetails` (
  `propertyname` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `features` text NOT NULL,
  `seller_name` varchar(50) NOT NULL,
  `seller_phone` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propertydetails`
--

INSERT INTO `propertydetails` (`propertyname`, `user_id`, `description`, `features`, `seller_name`, `seller_phone`, `photo`) VALUES
('dfg', 1, 'ghgf', 'vfgu', 'yeswitha', '7730005123', '1.jpeg'),
('watch', 1, 'working good', 'blue ', 'yeswitha', '7730005123', '1.jpeg'),
('watch', 1, 'dsg', 'dg', 'yeswitha', '7730005123', '2.jpeg'),
('cube', 4, 'gskjf', 'xgbf', 'madhu', '7730005123', '2.jpeg'),
('cube', 4, 'sghdfui', 'xjhgf', 'madhu', '7730005123', '2.jpeg'),
('cube', 4, 'sdkfgy', 'dkhg', 'madhu', '7730005123', '2.jpeg'),
('watch', 5, 'dhfgi', 'dkhfk', 'saho', '9866852747', '1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phnno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `email`, `password`, `phnno`) VALUES
(1, 'yeswitha', 'yeswitha@gmail.com', 'vit', '7730005123'),
(2, 'yeswitha', 'yeswitha@gmail.com', 'vit', '9848622123'),
(3, 'raji', 'raji@gmail.com', 'vit', '7730005123'),
(4, 'madhu', 'madhu@gmail.com', 'vit', '7730005123'),
(5, 'saho', 'saho@gmail.com', 'vit', '9866852747');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
