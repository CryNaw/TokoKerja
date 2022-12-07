-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 04:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `id` int(64) NOT NULL,
  `xendit_id` varchar(64) NOT NULL,
  `product_id` varchar(64) NOT NULL,
  `namatoko` varchar(64) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `waktu_pengerjaan` int(2) NOT NULL,
  `waktu_pemesanan` varchar(64) NOT NULL,
  `waktu_tenggat` varchar(64) NOT NULL,
  `waktu_pengiriman` varchar(64) NOT NULL,
  `deskripsi` varchar(1028) NOT NULL,
  `harga` double NOT NULL,
  `sample1` varchar(256) NOT NULL,
  `email_buyer` varchar(128) NOT NULL,
  `email_seller` varchar(128) NOT NULL,
  `catatan` varchar(1028) NOT NULL,
  `status` varchar(32) NOT NULL,
  `invoice_url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`id`, `xendit_id`, `product_id`, `namatoko`, `judul`, `waktu_pengerjaan`, `waktu_pemesanan`, `waktu_tenggat`, `waktu_pengiriman`, `deskripsi`, `harga`, `sample1`, `email_buyer`, `email_seller`, `catatan`, `status`, `invoice_url`) VALUES
(10, '638ec6cef4425a079134c45e', '47', 'Cylan', 'indahnya', 24, '2022-12-06 05:36:50', '2022-12-30 05:36:50', '', 'wowowowo', 25900000, 'ImagesSamples/638ec1f7b0319.jpg', '1@gmail.com', 'erwinlowandy@gmail.com', '', 'PENDING', 'https://checkout-staging.xendit.co/web/638ec6cef4425a079134c45e');

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `id` int(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `kategori` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL,
  `deskripsi_pendek` varchar(64) NOT NULL,
  `waktu_pengerjaan` int(2) NOT NULL,
  `harga` int(16) NOT NULL,
  `sample1` varchar(256) NOT NULL,
  `sample2` varchar(256) NOT NULL,
  `sample3` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`id`, `email`, `judul`, `kategori`, `deskripsi`, `deskripsi_pendek`, `waktu_pengerjaan`, `harga`, `sample1`, `sample2`, `sample3`) VALUES
(45, '1@gmail.com', 'adsfadsfafdasfsa', 'desain_dan_grafis', 'adsf', '', 12, 22341, 'ImagesSamples/638eb196e48c6.jpg', 'ImagesSamples/638eb3235313f.jpg', 'ImagesSamples/638eb2a79ca9a.jpg'),
(46, '1@gmail.com', 'Genshin Illustration', 'desain_dan_grafis', 'mantap', '', 1, 25000, 'ImagesSamples/638eb5398d70f.jpg', 'ImagesSamples/638eb7ff437a6.jpg', 'ImagesSamples/638eb80d4ca21.jpg'),
(47, 'erwinlowandy@gmail.com', 'indahnya', 'desain_dan_grafis', 'wowowowo', '', 24, 25900000, 'ImagesSamples/638ec1f7b0319.jpg', 'ImagesSamples/638ec1f7b0464.png', 'ImagesSamples/638ec1f7b059b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `Date` date NOT NULL,
  `namatoko` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `verified`, `Date`, `namatoko`) VALUES
('1@gmail.com', '1', 1, '2022-10-20', 'toko1'),
('erwinlowandy@gmail.com', '17nov2001', 1, '2022-10-20', 'Cylan'),
('erwinlowandy@gmail.com12', '', 1, '2022-10-20', 'adoh');

-- --------------------------------------------------------

--
-- Table structure for table `xendit_log`
--

CREATE TABLE `xendit_log` (
  `ID` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xendit_log`
--

INSERT INTO `xendit_log` (`ID`) VALUES
('579c8d61f23fa4ca35e52da4'),
(''),
('6358ca6b86b11ec25ba5f301'),
('6358d3d4309ca7c325574c8a'),
('');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productlist`
--
ALTER TABLE `productlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `productlist`
--
ALTER TABLE `productlist`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
