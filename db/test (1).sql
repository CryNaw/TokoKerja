-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 02:13 PM
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
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `id` int(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(1028) NOT NULL,
  `harga` int(16) NOT NULL,
  `sample1` varchar(255) NOT NULL,
  `sample2` varchar(255) NOT NULL,
  `sample3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`id`, `email`, `judul`, `kategori`, `deskripsi`, `harga`, `sample1`, `sample2`, `sample3`) VALUES
(35, 'erwinlowandy@gmail.com', 'Genshin Illustraion', 'desain_dan_grafis', 'Great Choice!', 250000, 'ImagesSamples/6367af8b204be.jpg', 'ImagesSamples/6367af8b205e4.jpg', 'ImagesSamples/6367af8b206f9.jpg'),
(37, 'erwinlowandy@gmail.com', 'adjfa', 'desain_dan_grafis', 'ladjksflksa', 2151251, 'ImagesSamples/6367b0c6c0974.jpg', '', '');

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
('erwinlowandy@gmail.com', '17nov2001', 1, '2022-10-20', 'wow hebat'),
('erwinlowandy@gmail.com12', '', 1, '2022-10-20', 'adoh');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `productlist`
--
ALTER TABLE `productlist`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
