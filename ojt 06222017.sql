-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 10:20 AM
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
(6, 'sir Jem', '2', 'cannot connect to internet', 'router restart', 'Incomplete', '3', '2017-06-15'),
(12, '', '', '', '', '', '', ''),
(11, '', '1', '', '', 'Complete', '1', '2017-06-20'),
(10, '', '1', '', '', 'Complete', '1', '2017-06-20'),
(13, 'hehe', 'Department3', 'hehe', 'hehe', 'Complete', 'eqw', ''),
(14, 'hehe', 'Department3', 'hehe', 'hehe', 'Complete', 'eqw', ''),
(15, 'qwe', 'Department2', 'qwe', 'qwe', 'Complete', 'qweqw', ''),
(16, 'asd', 'Department2', 'asd', 'asd', 'Pending', 'asd', '2017-06-22'),
(17, 'lalaland', 'Department2', 'lalaland', 'lalaland', 'Incomplete', 'lalaland', '2017-06-22'),
(18, 'top', 'Department4', 'top', 'top', 'Complete', 'top', '2017-06-22'),
(19, 'top', 'Department4', 'top', 'top', 'Complete', 'top', '2017-06-22'),
(20, 'top', 'Department4', 'top', 'top', 'Complete', 'top', '2017-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `hub_tbl`
--

CREATE TABLE `hub_tbl` (
  `hub_id` int(11) NOT NULL,
  `qty_hub` int(11) NOT NULL,
  `sn_hub` varchar(250) NOT NULL,
  `type_hub` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ink_tbl`
--

CREATE TABLE `ink_tbl` (
  `ink_id` int(11) NOT NULL,
  `qty_ink` int(11) NOT NULL,
  `sn_ink` varchar(250) NOT NULL,
  `type_ink` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_tbl`
--

CREATE TABLE `inventory_tbl` (
  `inventory_id` int(11) NOT NULL,
  `ink_id` int(11) NOT NULL,
  `projector_id` int(11) NOT NULL,
  `printer_id` int(11) NOT NULL,
  `hub_id` int(11) NOT NULL,
  `mouse_id` int(11) NOT NULL,
  `monitor_id` int(11) NOT NULL,
  `toner_id` int(11) NOT NULL,
  `keyboard_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keyboard_tbl`
--

CREATE TABLE `keyboard_tbl` (
  `keyboard_id` int(11) NOT NULL,
  `qty_kb` int(11) NOT NULL,
  `sn_kb` varchar(250) NOT NULL,
  `type_kb` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monitor_tbl`
--

CREATE TABLE `monitor_tbl` (
  `monitor_id` int(11) NOT NULL,
  `qty_monitor` int(11) NOT NULL,
  `sn_monitor` varchar(250) NOT NULL,
  `type_monitor` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mouse_tbl`
--

CREATE TABLE `mouse_tbl` (
  `mouse_id` int(11) NOT NULL,
  `qty_mouse` int(11) NOT NULL,
  `sn_mouse` varchar(250) NOT NULL,
  `type_mouse` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `printer_tbl`
--

CREATE TABLE `printer_tbl` (
  `printer_id` int(11) NOT NULL,
  `qty_printer` int(11) NOT NULL,
  `sn_printer` varchar(250) NOT NULL,
  `printer_type` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projector_tbl`
--

CREATE TABLE `projector_tbl` (
  `projector_id` int(11) NOT NULL,
  `qty_projector` int(11) NOT NULL,
  `sn_proj` varchar(250) NOT NULL,
  `projector_type` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `qwe`
-- (See below for the actual view)
--
CREATE TABLE `qwe` (
`id` int(11)
,`name` varchar(250)
,`surname` varchar(250)
);

-- --------------------------------------------------------

--
-- Table structure for table `qwer`
--

CREATE TABLE `qwer` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  `surname` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwer`
--

INSERT INTO `qwer` (`id`, `name`, `surname`) VALUES
(1, 'op', 'op'),
(3, 'asd', 'asd'),
(5, '13132', '13132132'),
(6, 'qwe', 'mel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Maria Anders', 'Obere Str. 57', 'Berlin', '12209', 'Germany'),
(2, 'Ana Trujillo', 'Avda. de la Construction 2222', 'Mexico D.F.', '5021', 'Mexico'),
(3, 'Antonio Moreno', 'Mataderos 2312', 'Mexico D.F.', '5023', 'Mexico'),
(4, 'Thomas Hardy', '120 Hanover Sq.', 'London', 'WA1 1DP', 'UK'),
(5, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(6, 'Wolski Zbyszek', 'ul. Filtrowa 68', 'Walla', '01-012', 'Poland'),
(7, 'Matti Karttunen', 'Keskuskatu 45', 'Helsinki', '21240', 'Finland'),
(8, 'Karl Jablonski', '305 - 14th Ave. S. Suite 3B', 'Seattle', '98128', 'USA'),
(9, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(10, 'Pirkko Koskitalo', 'Torikatu 38', 'Oulu', '90110', 'Finland'),
(11, 'Paul Henriot', '2, rue du Commerce', 'Reims', '51100', 'France'),
(12, 'Helvetius Nagy', '722 DaVinci Blvd.', 'Kirkland', '98034', 'USA'),
(13, 'Karin Josephs', 'Luisenstr. 48', 'Butte', '59801', 'USA'),
(14, 'Mel', '138 Block 8 Zone 2', 'Taguig', '1000', 'Philippines'),
(15, 'Lazaro', 'hahahah', 'hahah', 'haha', 'haha');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `student_phone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `student_name`, `student_phone`) VALUES
(1, 'Pauline S. Rich', '412-735-0224'),
(2, 'Sarah C. White', '320-552-9961'),
(3, 'Samuel L. Leslie', '201-324-8264'),
(4, 'Norma R. Manly', '478-322-4715'),
(5, 'Kimberly R. Castro', '479-966-6788'),
(6, 'Elaine R. Davis', '701-685-8912'),
(7, 'Concepcion S. Gardner', '607-829-8758'),
(8, 'Patricia J. White', '803-789-0429'),
(9, 'Michael M. Bothwell', '214-585-0737'),
(10, 'Ronald C. Vansickle', '630-571-4107'),
(11, 'Clarence A. Rich', '904-459-3747'),
(12, 'Elizabeth W. Peterson', '404-380-9481'),
(13, 'Renee R. Hewitt', '323-350-4973'),
(14, 'John K. Love', '337-229-1983'),
(15, 'Teresa J. Rincon', '216-394-6894'),
(16, 'Erin S. Huckaby', '503-284-8652');

-- --------------------------------------------------------

--
-- Table structure for table `toner_tbl`
--

CREATE TABLE `toner_tbl` (
  `toner_id` int(11) NOT NULL,
  `qty_toner` int(11) NOT NULL,
  `sn_toner` varchar(250) NOT NULL,
  `toner_type` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(13, 'keny', 'fe40683153dd99fa4b410da9654f2ff8', 'Keny', 'Reyes', '2017-06-20'),
(9, 'blu', '6f2fb2d3def4f99053edab239195f146', 'blu', 'blu', '2017-06-15'),
(8, 'mel', '0ef174fc614c8d61e2d63329ef7f46c0', 'mel', 'mel', '2017-06-15');

-- --------------------------------------------------------

--
-- Structure for view `qwe`
--
DROP TABLE IF EXISTS `qwe`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qwe`  AS  select `qwer`.`id` AS `id`,`qwer`.`name` AS `name`,`qwer`.`surname` AS `surname` from `qwer` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_log`
--
ALTER TABLE `daily_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hub_tbl`
--
ALTER TABLE `hub_tbl`
  ADD PRIMARY KEY (`hub_id`);

--
-- Indexes for table `ink_tbl`
--
ALTER TABLE `ink_tbl`
  ADD PRIMARY KEY (`ink_id`);

--
-- Indexes for table `inventory_tbl`
--
ALTER TABLE `inventory_tbl`
  ADD PRIMARY KEY (`inventory_id`),
  ADD UNIQUE KEY `ink_id` (`ink_id`),
  ADD UNIQUE KEY `projector_id` (`projector_id`),
  ADD UNIQUE KEY `printer_id` (`printer_id`),
  ADD UNIQUE KEY `hub_id` (`hub_id`),
  ADD UNIQUE KEY `mouse_id` (`mouse_id`),
  ADD UNIQUE KEY `monitor_id` (`monitor_id`),
  ADD UNIQUE KEY `toner_id` (`toner_id`),
  ADD UNIQUE KEY `keyboard_id` (`keyboard_id`),
  ADD KEY `ink_id_2` (`ink_id`),
  ADD KEY `projector_id_2` (`projector_id`);

--
-- Indexes for table `keyboard_tbl`
--
ALTER TABLE `keyboard_tbl`
  ADD PRIMARY KEY (`keyboard_id`);

--
-- Indexes for table `monitor_tbl`
--
ALTER TABLE `monitor_tbl`
  ADD PRIMARY KEY (`monitor_id`);

--
-- Indexes for table `mouse_tbl`
--
ALTER TABLE `mouse_tbl`
  ADD PRIMARY KEY (`mouse_id`);

--
-- Indexes for table `printer_tbl`
--
ALTER TABLE `printer_tbl`
  ADD PRIMARY KEY (`printer_id`);

--
-- Indexes for table `projector_tbl`
--
ALTER TABLE `projector_tbl`
  ADD PRIMARY KEY (`projector_id`);

--
-- Indexes for table `qwer`
--
ALTER TABLE `qwer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `toner_tbl`
--
ALTER TABLE `toner_tbl`
  ADD PRIMARY KEY (`toner_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `hub_tbl`
--
ALTER TABLE `hub_tbl`
  MODIFY `hub_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ink_tbl`
--
ALTER TABLE `ink_tbl`
  MODIFY `ink_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory_tbl`
--
ALTER TABLE `inventory_tbl`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `keyboard_tbl`
--
ALTER TABLE `keyboard_tbl`
  MODIFY `keyboard_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `monitor_tbl`
--
ALTER TABLE `monitor_tbl`
  MODIFY `monitor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mouse_tbl`
--
ALTER TABLE `mouse_tbl`
  MODIFY `mouse_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `printer_tbl`
--
ALTER TABLE `printer_tbl`
  MODIFY `printer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projector_tbl`
--
ALTER TABLE `projector_tbl`
  MODIFY `projector_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qwer`
--
ALTER TABLE `qwer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `toner_tbl`
--
ALTER TABLE `toner_tbl`
  MODIFY `toner_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
