-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 10, 2020 at 10:22 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'shop', 'shop@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `dte` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ename` varchar(200) NOT NULL,
  `pamnt` int(20) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`no`, `dte`, `ename`, `pamnt`) VALUES
(1, '2020-05-29 13:33:48', 'dsd', 522);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `no` int(50) NOT NULL AUTO_INCREMENT,
  `dte` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pid` int(50) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `billno` int(100) NOT NULL,
  `qnty` int(100) NOT NULL,
  `damnt` int(100) NOT NULL,
  `samnt` int(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`no`, `dte`, `pid`, `pname`, `billno`, `qnty`, `damnt`, `samnt`) VALUES
(1, '2020-05-29 13:33:13', 2, 'cc', 2, 2, 2, 2),
(2, '2020-05-30 13:30:31', 6, 'kn', 356, 5, 5, 5),
(3, '2020-05-30 13:31:33', 5, 'u', 5, 5, 5, 5),
(4, '2020-05-30 13:33:34', 5, 'u', 6, 5, 5, 5),
(5, '2020-05-31 10:28:14', 5, 'l', 5, 5, 5, 5),
(6, '2020-05-31 10:28:41', 5, 'k', 5, 5, 5, 5),
(7, '2020-05-31 10:30:14', 5, 'l', 5, 5, 5, 5),
(8, '2020-05-31 10:44:23', 5, 'j', 6, 6, 6, 5),
(9, '2020-05-31 10:44:54', 5, 'h', 5, 3, 3, 3),
(10, '2020-05-31 10:58:37', 545, 'hj', 4, 4, 4, 2),
(11, '2020-05-31 10:59:22', 44, 'j', 5, 4, 4, 2),
(12, '2020-06-01 09:08:25', 6, 'j', 5, 5, 5, 5),
(13, '2020-06-01 09:10:28', 564, 'j', 5, 5, 5, 5),
(14, '2020-06-01 09:14:58', 5455, 'nn', 4, 4, 4, 4),
(15, '2020-06-01 09:16:13', 5544, 'lk', 5, 5, 5, 5),
(16, '2020-06-01 09:18:33', 6652, 'bvc', 5, 5, 5, 5),
(17, '2020-06-01 13:35:55', 6, 'h', 6, 5, 6, 5),
(18, '2020-06-01 13:40:12', 6, '5', 5, 8, 5, 5),
(19, '2020-06-01 13:43:04', 6, 'H', 5, 5, 5, 5),
(20, '2020-06-01 14:06:04', 562, 'h', 4, 5, 5, 5),
(21, '2020-06-01 14:09:36', 5555154, 'h', 7, 7, 7, 7),
(22, '2020-06-01 14:11:47', 63533, 'jh', 55, 5, 5, 5),
(23, '2020-06-01 14:14:45', 6, 'jh', 5, 5, 5, 5),
(24, '2020-06-01 14:15:34', 6, 'hhb', 5, 5, 5, 5),
(25, '2020-06-01 14:16:11', 6, 'M', 1, 1, 1, 1),
(26, '2020-06-01 14:16:59', 6, 'v c', 5, 20, 25, 635),
(27, '2020-06-01 14:18:36', 6865, 'j', 5, 5, 5, 5),
(28, '2020-06-01 14:20:37', 5466, 'g', 5, 5, 5, 5),
(29, '2020-06-01 14:28:49', 3555, 'JBV', 4, 1, 2, 2),
(30, '2020-06-01 14:29:20', 5, 'JH', 2, 2, 2, 2),
(31, '2020-06-01 14:30:38', 5, '4', 4, 4, 4, 4),
(32, '2020-06-01 14:31:12', 5531, 'hbug', 1, 2, 1, 1),
(33, '2020-06-02 05:57:45', 53463, 'nmmn', 6, 6, 6, 6),
(34, '2020-06-02 06:11:36', 255, 'ui', 6, 6, 6, 6),
(35, '2020-06-03 13:49:07', 6, 'bv', 4, 6, 6, 6),
(36, '2020-06-03 13:50:01', 5, 'hj', 6, 6, 6, 6),
(37, '2020-06-06 08:03:26', 6, 'jhbbj', 5, 5, 5, 5),
(38, '2020-06-06 08:04:20', 6, 'jhg', 2, 2, 2, 2),
(39, '2020-06-06 08:04:59', 5466464, 'h', 4, 4, 4, 4),
(40, '2020-06-06 08:05:28', 244, 'gh', 41, 4, 4, 4),
(41, '2020-06-06 08:07:49', 65454, 'ghgj', 4, 4, 4, 4),
(42, '2020-06-06 08:13:24', 6, 'j', 4, 727, 4, 4),
(43, '2020-06-06 08:16:52', 6, 'jk', 52, 729, 2, 2),
(44, '2020-06-06 08:19:46', 6, 'ui', 2, 731, 2, 2),
(45, '2020-06-06 08:24:32', 2, 'nbm', 2, 6, 2, 2),
(46, '2020-06-06 08:29:12', 55, 'j', 1, 1, 1, 4),
(47, '2020-06-06 08:39:46', 53, 'hgv', 33, 656, 1, 1),
(48, '2020-06-06 08:50:01', 352, 'jh', 4, 4, 4, 4),
(49, '2020-06-06 08:52:36', 20, 'n,', 2, 2, 2, 2),
(50, '2020-06-06 08:52:36', 20, 'n,', 2, 2, 2, 2),
(51, '2020-06-06 08:55:29', 3, 'bnm,', 32, 3, 3, 3),
(52, '2020-06-06 08:55:29', 3, 'bnm,', 32, 3, 3, 3),
(53, '2020-06-06 12:00:59', 352, 'jh', 4, 4, 4, 4),
(54, '2020-06-06 12:00:59', 352, 'jh', 4, 4, 4, 4),
(55, '2020-06-06 12:11:27', 6, 'ji', 5, 5, 5, 5),
(56, '2020-06-06 12:11:27', 6, 'ji', 5, 5, 5, 5),
(57, '2020-06-06 12:13:43', 6, 'kl', 5, 5, 5, 5),
(58, '2020-06-06 12:13:43', 6, 'kl', 5, 5, 5, 5),
(59, '2020-06-06 12:15:59', 3, 'mn', 2, 2, 2, 2),
(60, '2020-06-06 12:16:00', 3, 'mn', 2, 2, 2, 2),
(61, '2020-06-06 12:16:36', 4, 'vf', 5, 5, 5, 5),
(62, '2020-06-06 12:16:36', 4, 'vf', 5, 5, 5, 5),
(63, '2020-06-06 12:16:59', 2442, 'JHH', 4, 4, 4, 4),
(64, '2020-06-06 12:16:59', 2442, 'JHH', 4, 4, 4, 4),
(65, '2020-06-08 16:37:35', 3, 'l;;l', 4, 4, 4, 4),
(66, '2020-06-08 16:39:00', 6565655, 'bn  ', 4, 4, 4, 4),
(67, '2020-06-08 16:41:21', 1, 'ghgh', 35, 1353, 35, 311),
(68, '2020-06-08 16:50:43', 41, ' bnm', 6, 3, 6, 6),
(69, '2020-06-08 16:51:49', 24, 'h', 6544, 6564, 64, 56);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `dte` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pid` int(50) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `billno` int(50) NOT NULL,
  `qty` int(20) NOT NULL,
  `amnt` int(20) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`no`, `dte`, `pid`, `pname`, `billno`, `qty`, `amnt`) VALUES
(1, '2020-05-29 13:18:51', 5, 'c', 544, 5, 5),
(2, '2020-05-29 13:19:27', 1, 'jwbb', 5, 2, 5),
(3, '2020-05-29 16:11:34', 4, 'hh', 4, 4, 4),
(4, '2020-05-30 13:36:44', 5, 'u', 55, 5, 65),
(5, '2020-05-30 13:40:16', 5, 'j', 2, 5, 2),
(6, '2020-05-30 13:41:14', 5, 'k', 22, 3, 2),
(7, '2020-05-30 13:46:10', 6, 'J', 2, 4, 5),
(8, '2020-05-30 13:49:24', 6, 'l', 5, 3, 5),
(9, '2020-05-30 14:07:52', 5, 'i', 5, 4, 4),
(10, '2020-06-06 12:30:36', 6, 'hjh', 1, 688, 1),
(11, '2020-06-06 14:31:43', 6, 'hg', 1, 687, 1),
(12, '2020-06-08 16:52:56', 6, 'jh', 100, 587, 2),
(13, '2020-07-10 10:16:18', 6, 'jh', 552, 337, 65352);

-- --------------------------------------------------------

--
-- Table structure for table `stoke`
--

DROP TABLE IF EXISTS `stoke`;
CREATE TABLE IF NOT EXISTS `stoke` (
  `slno` int(50) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pid` int(50) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `qty` int(100) NOT NULL,
  `damnt` int(100) NOT NULL,
  `samnt` int(100) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stoke`
--

INSERT INTO `stoke` (`slno`, `date`, `pid`, `pname`, `qty`, `damnt`, `samnt`) VALUES
(22, '2020-06-03 13:50:01', 5, 'hj', 0, 6, 6),
(23, '2020-06-03 14:04:57', 6, 'bhg', 337, 2, 5),
(24, '2020-06-05 13:54:43', 5, 'nh', 6, 6, 6),
(25, '2020-06-05 13:55:19', 5, 'hjb', 3, 3, 3),
(26, '2020-06-05 14:00:28', 512, 'b', 32, 3, 3),
(27, '2020-06-05 14:00:52', 5, 'hjhj', 3, 3, 3),
(28, '2020-06-05 14:03:44', 5, '2', 2, 2, 2),
(29, '2020-06-05 14:06:45', 5, 'nhjh', 2, 2, 2),
(30, '2020-06-05 14:11:43', 5, 'g', 6, 66, 6),
(31, '2020-06-06 08:14:09', 2, 'lkk', 6, 4, 2),
(32, '2020-06-06 08:20:55', 42, 'h', 20, 2, 2),
(33, '2020-06-06 08:23:15', 5, 'hj', 2, 2, 2),
(34, '2020-06-06 08:24:06', 5, 'jh', 2, 2, 2),
(35, '2020-06-06 08:29:12', 55, 'j', 1, 1, 4),
(36, '2020-06-06 08:39:47', 53, 'hgv', 656, 1, 1),
(37, '2020-06-06 08:50:01', 352, 'jh', 8, 4, 4),
(38, '2020-06-06 08:52:36', 20, 'n,', 2, 2, 2),
(39, '2020-06-06 08:55:29', 3, 'bnm,', 9, 3, 4),
(40, '2020-06-06 12:16:36', 4, 'vf', 5, 5, 5),
(41, '2020-06-06 12:16:59', 2442, 'JHH', 4, 4, 4),
(42, '2020-06-08 16:39:00', 6565655, 'bn  ', 4, 4, 4),
(43, '2020-06-08 16:41:22', 1, 'ghgh', 1353, 35, 311),
(44, '2020-06-08 16:50:43', 41, ' bnm', 3, 6, 6),
(45, '2020-06-08 16:51:49', 24, 'h', 6564, 64, 56);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sname` varchar(200) NOT NULL,
  `pamnt` int(20) NOT NULL,
  `damnt` int(20) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`no`, `date`, `sname`, `pamnt`, `damnt`) VALUES
(1, '2020-05-29 13:34:24', 'fxgfx', 2222, 52222);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
