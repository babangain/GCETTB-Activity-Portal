-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 08:39 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gcettb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `firstname`, `lastname`) VALUES
('baban', 'c288d75b2b66a0b6dc6725deb977fd64bf306dec', 'Baban', 'Gain'),
('purnendu', 'fd75873bb7b75a16b132d2debf4539870a3dcb0c', 'Purnendu', 'Das'),
('csroy', '5335d4e30e29ed5726fe7525fb809fa6e45a32b2', 'Chandan Sinha', 'Roy');

-- --------------------------------------------------------

--
-- Table structure for table `adminact`
--

CREATE TABLE `adminact` (
  `slno` int(8) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL,
  `page` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `browser` varchar(30) NOT NULL,
  `version` varchar(20) NOT NULL,
  `os` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminact`
--

INSERT INTO `adminact` (`slno`, `username`, `password`, `page`, `date`, `ip`, `browser`, `version`, `os`) VALUES
(932, 'csroy', 'gcettbcse', 'http://localhost/admin/insertproc.php', '2017-11-10 17:40:07', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(931, 'csroy', 'gcettbcse', 'http://localhost/admin/ins.php', '2017-11-10 17:38:58', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(930, 'csroy', 'gcettbcse', 'http://localhost/admin/adminhome.php', '2017-11-10 17:38:56', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(929, 'csroy', 'gcettbcse', 'http://localhost/admin/insertproc.php', '2017-11-10 17:38:50', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(928, 'csroy', 'gcettbcse', 'http://localhost/admin/ins.php', '2017-11-10 17:37:07', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(927, 'csroy', 'gcettbcse', 'http://localhost/admin/adminhome.php', '2017-11-10 17:37:03', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(926, 'csroy', 'gcettbcse', 'http://localhost/admin/insertproc.php', '2017-11-10 17:34:10', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(925, 'csroy', 'gcettbcse', 'http://localhost/admin/ins.php', '2017-11-10 17:31:39', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(923, 'csroy', 'gcettbcse', 'http://localhost/admin/addcatproc.php', '2017-11-10 17:31:03', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(924, 'csroy', 'gcettbcse', 'http://localhost/admin/adminhome.php', '2017-11-10 17:31:36', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(922, 'csroy', 'gcettbcse', 'http://localhost/admin/addcat.php', '2017-11-10 17:30:59', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(921, 'csroy', 'gcettbcse', 'http://localhost/admin/addcatproc.php', '2017-11-10 17:30:22', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(920, 'csroy', 'gcettbcse', 'http://localhost/admin/addcat.php', '2017-11-10 17:29:55', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(918, 'csroy', 'gcettbcse', 'http://localhost/admin/view0.php', '2017-11-10 17:29:32', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(919, 'csroy', 'gcettbcse', 'http://localhost/admin/adminhome.php', '2017-11-10 17:29:45', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(917, 'csroy', 'gcettbcse', 'http://localhost/admin/view0.php', '2017-11-10 17:29:03', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(916, 'csroy', 'gcettbcse', 'http://localhost/admin/adminhome.php', '2017-11-10 17:28:58', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(915, 'csroy', 'gcettbcse', 'http://localhost/admin/ins.php', '2017-11-10 17:28:55', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(914, 'csroy', 'gcettbcse', 'http://localhost/admin/adminhome.php', '2017-11-10 17:28:54', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(913, 'csroy', 'gcettbcse', 'http://localhost/admin/edit0.php', '2017-11-10 17:28:49', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(912, 'csroy', 'gcettbcse', 'http://localhost/admin/adminhome.php', '2017-11-10 17:28:46', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(902, 'csroy', 'gcettbcse', 'http://localhost/admin/adminhome.php', '2017-11-10 17:13:43', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(903, 'csroy', 'gcettbcse', 'http://localhost/admin/addcat.php', '2017-11-10 17:14:10', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(904, 'csroy', 'gcettbcse', 'http://localhost/admin/addcatproc.php', '2017-11-10 17:17:53', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(905, 'csroy', 'gcettbcse', 'http://localhost/admin/addcat.php', '2017-11-10 17:18:58', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(906, 'csroy', 'gcettbcse', 'http://localhost/admin/addcatproc.php', '2017-11-10 17:19:49', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(907, 'csroy', 'gcettbcse', 'http://localhost/admin/addcat.php', '2017-11-10 17:21:06', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(908, 'csroy', 'gcettbcse', 'http://localhost/admin/addcat.php', '2017-11-10 17:22:11', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(909, 'csroy', 'gcettbcse', 'http://localhost/admin/addcatproc.php', '2017-11-10 17:22:22', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(910, 'csroy', 'gcettbcse', 'http://localhost/admin/addcat.php', '2017-11-10 17:22:51', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10'),
(911, 'csroy', 'gcettbcse', 'http://localhost/admin/addcatproc.php', '2017-11-10 17:23:45', '::1', 'Google Chrome', '62.0.3202.89', 'Windows 10');

-- --------------------------------------------------------

--
-- Table structure for table `adminerror`
--

CREATE TABLE `adminerror` (
  `slno` int(8) NOT NULL,
  `username` varchar(40) NOT NULL,
  `page` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `browser` varchar(30) NOT NULL,
  `version` varchar(20) NOT NULL,
  `os` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `slno` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `about` varchar(500) NOT NULL,
  `piclink` varchar(100) DEFAULT NULL,
  `temp` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`slno`, `name`, `fullname`, `about`, `piclink`, `temp`) VALUES
(1, 'iif', 'Industrial Training', 'This Category is about industrial training', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gcettbianfeedback`
--

CREATE TABLE `gcettbianfeedback` (
  `slno` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `yop` varchar(10) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `org` varchar(200) DEFAULT NULL,
  `desig` varchar(40) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `comment` varchar(5000) DEFAULT NULL,
  `browser` varchar(20) DEFAULT NULL,
  `version` varchar(20) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `ip` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iif`
--

CREATE TABLE `iif` (
  `slno` int(5) NOT NULL,
  `id` varchar(50) NOT NULL,
  `progno` varchar(100) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `datestart` varchar(70) DEFAULT NULL,
  `dateend` varchar(20) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `company` varchar(70) NOT NULL,
  `experts` varchar(200) NOT NULL,
  `coordinator` varchar(500) NOT NULL,
  `venue` varchar(500) NOT NULL,
  `participants` varchar(500) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `pic1` varchar(200) NOT NULL DEFAULT '',
  `pic2` varchar(200) NOT NULL DEFAULT '',
  `pic3` varchar(200) NOT NULL DEFAULT '',
  `pic4` varchar(200) NOT NULL DEFAULT '',
  `pic5` varchar(200) NOT NULL DEFAULT '',
  `teqip` varchar(10) DEFAULT NULL,
  `attachment` varchar(50) DEFAULT NULL,
  `active` varchar(30) DEFAULT 'Y',
  `insertdate` varchar(50) DEFAULT NULL,
  `orgdept` varchar(200) DEFAULT NULL,
  `slyear` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invalidlogins`
--

CREATE TABLE `invalidlogins` (
  `slno` int(8) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `browser` varchar(30) NOT NULL,
  `version` varchar(20) NOT NULL,
  `os` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otherfeedback`
--

CREATE TABLE `otherfeedback` (
  `slno` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `org` varchar(60) DEFAULT NULL,
  `desig` varchar(40) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `comment` varchar(5000) DEFAULT NULL,
  `browser` varchar(20) DEFAULT NULL,
  `version` varchar(20) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `ip` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recent`
--

CREATE TABLE `recent` (
  `sl` int(5) NOT NULL,
  `progno` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cat` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recent`
--

INSERT INTO `recent` (`sl`, `progno`, `pic`, `name`, `cat`) VALUES
(1, 'GCETTB_TPO_2017_2_2', '3.jpg', 'pritam sinha roy', 'TPO');

-- --------------------------------------------------------

--
-- Table structure for table `sys`
--

CREATE TABLE `sys` (
  `id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys`
--

INSERT INTO `sys` (`id`, `status`) VALUES
(0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `adminact`
--
ALTER TABLE `adminact`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `adminerror`
--
ALTER TABLE `adminerror`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`slno`),
  ADD UNIQUE KEY `slno` (`slno`);

--
-- Indexes for table `gcettbianfeedback`
--
ALTER TABLE `gcettbianfeedback`
  ADD PRIMARY KEY (`slno`),
  ADD UNIQUE KEY `slno` (`slno`);

--
-- Indexes for table `iif`
--
ALTER TABLE `iif`
  ADD PRIMARY KEY (`slno`),
  ADD UNIQUE KEY `slno` (`slno`);

--
-- Indexes for table `invalidlogins`
--
ALTER TABLE `invalidlogins`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `otherfeedback`
--
ALTER TABLE `otherfeedback`
  ADD PRIMARY KEY (`slno`),
  ADD UNIQUE KEY `slno` (`slno`);

--
-- Indexes for table `recent`
--
ALTER TABLE `recent`
  ADD PRIMARY KEY (`sl`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `sys`
--
ALTER TABLE `sys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminact`
--
ALTER TABLE `adminact`
  MODIFY `slno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=933;
--
-- AUTO_INCREMENT for table `adminerror`
--
ALTER TABLE `adminerror`
  MODIFY `slno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `slno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `gcettbianfeedback`
--
ALTER TABLE `gcettbianfeedback`
  MODIFY `slno` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `iif`
--
ALTER TABLE `iif`
  MODIFY `slno` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invalidlogins`
--
ALTER TABLE `invalidlogins`
  MODIFY `slno` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `otherfeedback`
--
ALTER TABLE `otherfeedback`
  MODIFY `slno` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
