-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2017 at 10:19 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ojt`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_log`
--

CREATE TABLE `daily_log` (
  `id` int(11) NOT NULL,
  `employee` varchar(500) NOT NULL,
  `department` varchar(250) NOT NULL,
  `conflict` varchar(1000) NOT NULL,
  `remarks` varchar(2500) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tech` varchar(2500) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_log`
--

INSERT INTO `daily_log` (`id`, `employee`, `department`, `conflict`, `remarks`, `status`, `tech`, `date`) VALUES
(1, 'Mel', '', 'malfunctioning mouse', '', 'Compl', '1', '2017-06-15'),
(2, 'Mel', '', 'malfunctioning mouse', '', 'Complete', '1', '2017-06-15'),
(3, 'Meliton', '', 'malfunctioning mouse', '', 'Complete', '2', '2017-06-15'),
(4, 'sir Alfred', '4', 'cannot connect to internet', 'router restart', 'Complete', '3', '2017-06-15'),
(5, 'sir Jem', '2', 'cannot connect to internet', 'router restart', 'Pending', '3', '2017-06-15'),
(6, 'sir Jem', '2', 'cannot connect to internet', 'router restart', 'Incomplete', '3', '2017-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `reg_date` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `reg_date`) VALUES
(12, 'lazaro', '25f9357d3c69eb8d772b97eb4903c869', 'lazaro', 'lazaro', '2017-06-15'),
(11, 'stam', '07915255d64730d06d2349d11ac3bfd8', 'stam', 'stam', '2017-06-15'),
(10, 'diego', '078c007bd92ddec308ae2f5115c1775d', 'diego', 'diego', '2017-06-15'),
(9, 'blu', '6f2fb2d3def4f99053edab239195f146', 'blu', 'blu', '2017-06-15'),
(8, 'mel', '0ef174fc614c8d61e2d63329ef7f46c0', 'mel', 'mel', '2017-06-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_log`
--
ALTER TABLE `daily_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_log`
--
ALTER TABLE `daily_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
