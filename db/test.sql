-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 06:44 PM
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
-- Table structure for table `chat_log`
--

CREATE TABLE `chat_log` (
  `id` int(64) NOT NULL,
  `order_id` int(11) NOT NULL,
  `Sender_Email` varchar(128) NOT NULL,
  `Message` varchar(1028) NOT NULL,
  `Files` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_log`
--

INSERT INTO `chat_log` (`id`, `order_id`, `Sender_Email`, `Message`, `Files`) VALUES
(90, 10, 'erwinlowandy@gmail.com', 'ktp', ''),
(91, 10, 'erwinlowandy@gmail.com', 'adsf', ''),
(92, 10, 'erwinlowandy@gmail.com', 'adsf', 'ChatFiles/639c06ed22468.png'),
(93, 10, 'erwinlowandy@gmail.com', 'a', ''),
(94, 10, 'erwinlowandy@gmail.com', 'a', ''),
(95, 10, 'erwinlowandy@gmail.com', 'a', ''),
(96, 10, 'erwinlowandy@gmail.com', 'asdf', ''),
(97, 10, 'erwinlowandy@gmail.com', 'ktpnya bang', 'ChatFiles/639c0e544b04e.png'),
(98, 10, 'erwinlowandy@gmail.com', 'asdfadf', ''),
(99, 10, 'erwinlowandy@gmail.com', 'asdfsafsaadshjfkhsalkjfgh d;soaujf kldhwojf vsDJvc dslaq bf,kwj fjweqhf;dsalkufd lasbdfl uwa efjha;lkd bflijuwa;o en fkjl yuaodsj m,nbklhjhofhqw,bk', ''),
(100, 10, 'erwinlowandy@gmail.com', 'adsf', ''),
(101, 10, '1@gmail.com', 'hi bang', ''),
(102, 10, '1@gmail.com', 'tolong dibuat seperti ini ya?', ''),
(103, 0, '', '', ''),
(104, 10, '', '', ''),
(105, 10, '1@gmail.com', 'ahdsfiadshi', ''),
(106, 10, '1@gmail.com', 'ADSFHASJKL', ''),
(107, 10, '1@gmail.com', '.', 'ChatFiles/639df6accf28d.jpg'),
(108, 11, '1@gmail.com', 'hi', '');

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
(10, '638ec6cef4425a079134c45e', '47', 'Cylan', 'indahnya', 24, '2022-12-06 05:36:50', '2022-12-16 05:36:50', '', 'wowowowo', 25900000, 'ImagesSamples/638ec1f7b0319.jpg', '1@gmail.com', 'erwinlowandy@gmail.com', '', 'PAID', 'https://checkout-staging.xendit.co/web/638ec6cef4425a079134c45e'),
(11, '639d38b9578a6794ff52c4f8', '50', 'toko1', 'Website E-Commerce Prototype Using PHP and MySQL Database', 28, '2022-12-17 04:35:10', '2023-01-14 04:35:10', '', 'Website E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL Database\r\nWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL Database', 3000000, 'ImagesSamples/639c667edb043.jpg', 'erwinlowandy@gmail.com', '1@gmail.com', '', 'PENDING', 'https://checkout-staging.xendit.co/web/639d38b9578a6794ff52c4f8'),
(12, '639dfa0d32e3d9b3b570f5d1', '49', 'Cylan', 'saya akan membuatkan model 3d sesuai dengan yang anda butuhkan diluar sana dengan perabotan yang panjang ini text nya wowowow akhirnya luar biasa', 12, '2022-12-17 18:20:05', '2022-12-29 18:20:05', '', 'saya akan membuatkan model 3d sesuai dengan yang anda butuhkan diluar sana dengan perabotan yang panjang ini text nya wowowow akhirnya luar biasa\r\nsaya akan membuatkan model 3d sesuai dengan yang anda butuhkan diluar sana dengan perabotan yang panjang ini text nya wowowow akhirnya luar biasa\r\nsaya akan membuatkan model 3d sesuai dengan yang anda butuhkan diluar sana dengan perabotan yang panjang ini text nya wowowow akhirnya luar biasa\r\nsaya akan membuatkan model 3d sesuai dengan yang anda butuhkan diluar sana dengan perabotan yang panjang ini text nya wowowow akhirnya luar biasa', 2500000, 'ImagesSamples/639c2a2f04d66.jpg', '1@gmail.com', 'erwinlowandy@gmail.com', '', 'PENDING', 'https://checkout-staging.xendit.co/web/639dfa0d32e3d9b3b570f5d1');

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
(45, '1@gmail.com', 'adsfadsfafdasfsa', 'desain_dan_grafis', 'adsf', '', 2, 22341, 'ImagesSamples/6393f5b133f3d.png', 'ImagesSamples/638eb3235313f.jpg', 'ImagesSamples/638eb2a79ca9a.jpg'),
(46, '1@gmail.com', 'Genshin Illustration', 'desain_dan_grafis', 'mantap', '', 12, 25000, 'ImagesSamples/638eb5398d70f.jpg', 'ImagesSamples/638eb7ff437a6.jpg', 'ImagesSamples/638eb80d4ca21.jpg'),
(47, 'erwinlowandy@gmail.com', 'indahnya', 'desain_dan_grafis', 'wowowowo', '', 24, 25900000, 'ImagesSamples/638ec1f7b0319.jpg', 'ImagesSamples/638ec1f7b0464.png', 'ImagesSamples/638ec1f7b059b.jpg'),
(49, 'erwinlowandy@gmail.com', 'saya akan membuatkan model 3d sesuai dengan yang anda butuhkan diluar sana dengan perabotan yang panjang ini text nya wowowow akhirnya luar biasa', 'desain_dan_grafis', 'saya akan membuatkan model 3d sesuai dengan yang anda butuhkan diluar sana dengan perabotan yang panjang ini text nya wowowow akhirnya luar biasa\r\nsaya akan membuatkan model 3d sesuai dengan yang anda butuhkan diluar sana dengan perabotan yang panjang ini text nya wowowow akhirnya luar biasa\r\nsaya akan membuatkan model 3d sesuai dengan yang anda butuhkan diluar sana dengan perabotan yang panjang ini text nya wowowow akhirnya luar biasa\r\nsaya akan membuatkan model 3d sesuai dengan yang anda butuhkan diluar sana dengan perabotan yang panjang ini text nya wowowow akhirnya luar biasa', '', 12, 2500000, 'ImagesSamples/639c2a2f04d66.jpg', 'ImagesSamples/639c2a2f04ec4.jpg', 'ImagesSamples/639c2a2f050ee.jpg'),
(50, '1@gmail.com', 'Website E-Commerce Prototype Using PHP and MySQL Database', 'Web_dan_Pemrograman', 'Website E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL Database\r\nWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL DatabaseWebsite E-Commerce Prototype Using PHP and MySQL Database', '', 28, 3000000, 'ImagesSamples/639c667edb043.jpg', 'ImagesSamples/639c667edb3ea.jpg', 'ImagesSamples/639c667edb59b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `Date` date NOT NULL,
  `namatoko` varchar(64) NOT NULL,
  `Saldo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `verified`, `Date`, `namatoko`, `Saldo`) VALUES
('1@gmail.com', '1', 1, '2022-10-20', 'toko1', 0),
('erwinlowandy@gmail.com', '17nov2001', 1, '2022-10-20', 'Cylan', 0),
('erwinlowandy@gmail.com12', '', 1, '2022-10-20', 'adoh', 0);

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
-- Indexes for table `chat_log`
--
ALTER TABLE `chat_log`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `chat_log`
--
ALTER TABLE `chat_log`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `productlist`
--
ALTER TABLE `productlist`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
