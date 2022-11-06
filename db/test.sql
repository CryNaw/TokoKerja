-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 06:48 AM
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
  `email` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `sample1` varchar(255) NOT NULL,
  `sample2` varchar(255) NOT NULL,
  `sample3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`email`, `judul`, `kategori`, `deskripsi`, `harga`, `sample1`, `sample2`, `sample3`) VALUES
('erwinlowandy@gmail.com', 'Anime Character Concept Art', 'illustration', 'full body', 650000, '0', '0', '0'),
('erwinlowandy@gmail.com', 'Anime Character Concept Art', 'illustration', 'full body', 650000, 'ImagesSamples/', 'ImagesSamples/Chibi 3d Model_Base Mesh.png', 'ImagesSamples/4377842_file-cute-witch-3d-printing-template-.png'),
('erwinlowandy@gmail.com', 'Costum Website for e-commerce ', 'website', 'Made by Founder of TokoKerja', 1100000, 'ImagesSamples/', 'ImagesSamples/', 'ImagesSamples/'),
('erwinlowandy@gmail.com', 'character design for vtuber, and long long long text character design for vtuber, and long long long text character design for vtuber, and long long long text character design for vtuber, and long long long text', 'illustration', '', 2147483647, 'ImagesSamples/', 'ImagesSamples/', 'ImagesSamples/'),
('erwinlowandy@gmail.com', 'coba jual ini', 'voice_actor', 'wowowow', 1250000, 'ImagesSamples/4377842_file-cute-witch-3d-printing-template-.png', 'ImagesSamples/Chibi 3d Model_Base Mesh.png', 'ImagesSamples/e36d1643765c49a7b98c926513feadcb.jpeg'),
('erwinlowandy@gmail.com', 'adsjfl;akjdf', 'website', 'adfadslfja;lkj', 12313213, 'ImagesSamples/4377842_file-cute-witch-3d-printing-template-.png', 'ImagesSamples/', 'ImagesSamples/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(90) NOT NULL,
  `password` varchar(32) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `verified`, `Date`) VALUES
('erwinlowandy@gmail.com', '17nov2001', 1, '2022-10-20'),
('erwinlowandy@gmail.com12', '', 0, '2022-10-20'),
('', '', 0, '2022-10-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
