-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 05:43 AM
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
  `waktu_pengiriman` int(2) NOT NULL,
  `deskripsi` varchar(1028) NOT NULL,
  `harga` double NOT NULL,
  `sample1` varchar(256) NOT NULL,
  `email_buyer` varchar(128) NOT NULL,
  `email_seller` varchar(128) NOT NULL,
  `catatan` varchar(1028) NOT NULL,
  `status` varchar(32) NOT NULL,
  `created` varchar(128) NOT NULL,
  `invoice_url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`id`, `xendit_id`, `product_id`, `namatoko`, `judul`, `waktu_pengiriman`, `deskripsi`, `harga`, `sample1`, `email_buyer`, `email_seller`, `catatan`, `status`, `created`, `invoice_url`) VALUES
(6, '6385ceb0aa73a26984e65b06', '35', 'Cylan', 'Genshin Illustraion', 3, 'Great Choice!', 250000, '', '1@gmail.com', 'erwinlowandy@gmail.com', 'coba ji be dulu', 'PENDING', '2022-11-29T09:19:45.102Z', '');

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
  `waktu_pengiriman` int(2) NOT NULL,
  `harga` int(16) NOT NULL,
  `sample1` varchar(256) NOT NULL,
  `sample2` varchar(256) NOT NULL,
  `sample3` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`id`, `email`, `judul`, `kategori`, `deskripsi`, `deskripsi_pendek`, `waktu_pengiriman`, `harga`, `sample1`, `sample2`, `sample3`) VALUES
(35, 'erwinlowandy@gmail.com', 'Genshin Illustraion', 'desain_dan_grafis', 'Great Choice!', '1 full body with 10 accesories of your choices', 3, 250000, 'ImagesSamples/6367af8b204be.jpg', 'ImagesSamples/6367af8b205e4.jpg', 'ImagesSamples/6367af8b206f9.jpg'),
(37, 'erwinlowandy@gmail.com', 'adjfa', 'desain_dan_grafis', 'ladjksflksa', '', 1, 2151251, 'ImagesSamples/6367b0c6c0974.jpg', '', ''),
(38, 'erwinlowandy@gmail.com', 'Asiap', 'desain_dan_grafis', 'adflkjas\r\nadlkfjasdl\r\n\r\n\r\nadsklfjadlksf\r\n\r\n\r\nadslkfjalskfjas\r\n\r\naldsfjlkasjf\r\ndskafjasd\r\naldsjflkadsjfklsajflkdasjoifdwajakjfbdsaliufdkndbwij,kjmsdaoifjglkjweoigjlkajhsdkf,a\r\nfjkasdhflkjdasbfjkasd\r\nnkliajdshfkjdbnsafsda\r\nfkdsjahl.sd', '', 1, 25000000, 'ImagesSamples/636b227fd5376.jpg', 'ImagesSamples/636b227fd567a.jpg', 'ImagesSamples/636b227fd57b2.jpg'),
(39, 'erwinlowandy@gmail.com', 'adsfas', 'desain_dan_grafis', 'fasfasfsa\r\nadsfasf\r\nasfdas\r\nfdas\r\nfdsa\r\nf\r\nadsf\r\ndsaf\r\ndsa\r\nfdsaf', '', 1, 2500000, 'ImagesSamples/636b3829dc8c8.jpg', '', ''),
(40, 'erwinlowandy@gmail.com', 'coba kalau kita kasi judul yang panjang sekali apakah bisa tidak ditampilkan dengan baik', 'desain_dan_grafis', 'coba kalau kita kasi judul yang panjang sekali apakah bisa tidak ditampilkan dengan baik\r\ncoba kalau kita kasi judul yang panjang sekali apakah bisa tidak ditampilkan dengan baik\r\ncoba kalau kita kasi judul yang panjang sekali apakah bisa tidak ditampilkan dengan baik\r\ncoba kalau kita kasi judul yang panjang sekali apakah bisa tidak ditampilkan dengan baikcoba kalau kita kasi judul yang panjang sekali apakah bisa tidak ditampilkan dengan baik', '', 1, 25000000, 'ImagesSamples/6385ba3b5b685.jpg', 'ImagesSamples/6385ba3b5b923.png', 'ImagesSamples/6385ba3b5ba4c.jpg'),
(42, '1@gmail.com', 'toko1', 'desain_dan_grafis', 'toko1', '', 1, 25000, 'ImagesSamples/6385cd8ab0034.png', '', '');

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
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `productlist`
--
ALTER TABLE `productlist`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
