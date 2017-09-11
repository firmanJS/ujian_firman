-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 10, 2017 at 04:05 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_firman`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kredit`
--

CREATE TABLE `tbl_kredit` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `jumlah_penghasilan_perbulan` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kredit`
--

INSERT INTO `tbl_kredit` (`id`, `name`, `city`, `country`, `jumlah_penghasilan_perbulan`, `email`, `status`) VALUES
(1, 'Alfreds Futterkiste', 'Berlin', 'Germany', 20000, 'germany@gmail.com', 0),
(2, 'Ana Trujillo Emparedados y helados', 'Mexico D.F', 'Mexico', 1000, 'mexico@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `status` enum('Customer','Pemeriksa1','Pemeriksa2','Manager') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `status`) VALUES
(1, 'customer', '$2y$10$H1e3uzabWHULhiflgkbPT.R1WkH0KssT7gUiNwiU8/xd4qtraImae', 'Customer'),
(2, 'pemeriksa1', '$2y$10$mTa4ysslBIJX1XMZFVqnIO.uAxWOHLu9nfjHUSjD9uiNCnzTcxoI6', 'Pemeriksa1'),
(3, 'pemeriksa2', '$2y$10$.HRVz//xs7iCz2kxS1ynwucWgHA6YgAvZWSoCW2pD0i5BYKfUw7RW', 'Pemeriksa2'),
(4, 'manager', '$2y$10$LY9ibKFH6h60SYNSKyeOSugsGsVlN.M0MbWiFnrRLps3MKpDiapVK', 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kredit`
--
ALTER TABLE `tbl_kredit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kredit`
--
ALTER TABLE `tbl_kredit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
