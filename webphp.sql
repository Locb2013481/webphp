-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 05:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(50) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `id_product` int(50) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `price_product` double NOT NULL,
  `img_product` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_user`, `user_name`, `id_product`, `name_product`, `price_product`, `img_product`) VALUES
(1, 20, 'a', 41, 'sss', 323, 'person2.jpg'),
(2, 20, 'a', 42, 'lap trinh mobile', 323, 'person2.jpg'),
(3, 21, 'b', 45, 'locB2013481', 2013481, 'person2.jpg'),
(4, 21, 'b', 42, 'lap trinh mobile', 323, 'person2.jpg'),
(5, 21, 'b', 42, 'lap trinh mobile', 323, 'person2.jpg'),
(6, 20, 'a', 41, 'sss', 323, 'person2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `image`) VALUES
(41, 'sss', 323, 'f88888888', 'person2.jpg'),
(42, 'lap trinh mobile', 323, 'tai f8', 'person2.jpg'),
(45, 'locB2013481', 2013481, 'locB2013481', 'person2.jpg'),
(53, 'lap trinh java', 111, 'f88888888', 'person2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `pass`, `email`, `role`) VALUES
(14, 'loc', '$2y$10$oyNk281h9OKpFu0ib.l8k.ylNjm7pBKoauHF0lofsmp8jwnma/xNC', 'tuanlocct335@gmail.com', 'admin'),
(20, 'a', '$2y$10$c.gcvjWmJa8ZdCEUG.cyX.8AG/Pgo36cEGklh9DX0UAY6ca4RXKO6', 'tuanlocct335@gmail.com', ''),
(21, 'b', '$2y$10$VGwPh8zfp7UA9JyyDfIm5ugskRVFFa82.FstF7snEs7PlQihJxUUC', 'u@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
