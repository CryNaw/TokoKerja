-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 12:57 PM
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
  `description` varchar(1028) NOT NULL,
  `amount` double NOT NULL,
  `email_buyer` varchar(128) NOT NULL,
  `email_seller` varchar(128) NOT NULL,
  `catatan` varchar(1028) NOT NULL,
  `status` varchar(32) NOT NULL,
  `created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`id`, `xendit_id`, `product_id`, `description`, `amount`, `email_buyer`, `email_seller`, `catatan`, `status`, `created`) VALUES
(1, '637dcb65a1211d3e0458e3b9', '35', 'Genshin Illustraion, Great Choice!', 257500, '1@gmail.com', 'erwinlowandy@gmail.com', '', '2022-11-23T07:27:33.789Z', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `id` int(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `deskripsi_pendek` varchar(64) NOT NULL,
  `harga` int(16) NOT NULL,
  `waktu_pengiriman` int(2) NOT NULL,
  `sample1` varchar(255) NOT NULL,
  `sample2` varchar(255) NOT NULL,
  `sample3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`id`, `email`, `judul`, `kategori`, `deskripsi`, `deskripsi_pendek`, `harga`, `waktu_pengiriman`, `sample1`, `sample2`, `sample3`) VALUES
(35, 'erwinlowandy@gmail.com', 'Genshin Illustraion', 'desain_dan_grafis', 'Great Choice!', '1 full body with 10 accesories of your choices', 250000, 3, 'ImagesSamples/6367af8b204be.jpg', 'ImagesSamples/6367af8b205e4.jpg', 'ImagesSamples/6367af8b206f9.jpg'),
(37, 'erwinlowandy@gmail.com', 'adjfa', 'desain_dan_grafis', 'ladjksflksa', '', 2151251, 0, 'ImagesSamples/6367b0c6c0974.jpg', '', ''),
(38, 'erwinlowandy@gmail.com', 'Asiap', 'desain_dan_grafis', 'adflkjas\r\nadlkfjasdl\r\n\r\n\r\nadsklfjadlksf\r\n\r\n\r\nadslkfjalskfjas\r\n\r\naldsfjlkasjf\r\ndskafjasd\r\naldsjflkadsjfklsajflkdasjoifdwajakjfbdsaliufdkndbwij,kjmsdaoifjglkjweoigjlkajhsdkf,a\r\nfjkasdhflkjdasbfjkasd\r\nnkliajdshfkjdbnsafsda\r\nfkdsjahl.sd', '', 25000000, 0, 'ImagesSamples/636b227fd5376.jpg', 'ImagesSamples/636b227fd567a.jpg', 'ImagesSamples/636b227fd57b2.jpg'),
(39, 'erwinlowandy@gmail.com', 'adsfas', 'desain_dan_grafis', 'fasfasfsa\r\nadsfasf\r\nasfdas\r\nfdas\r\nfdsa\r\nf\r\nadsf\r\ndsaf\r\ndsa\r\nfdsaf', '', 2500000, 0, 'ImagesSamples/636b3829dc8c8.jpg', '', '');

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
('1@gmail.com', '1', 1, '2022-10-20', 'misalnya'),
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
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `productlist`
--
ALTER TABLE `productlist`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
