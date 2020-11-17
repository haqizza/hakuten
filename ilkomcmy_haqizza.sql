-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 10:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilkomcmy_haqizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `user` int(10) NOT NULL,
  `main` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `name`, `address`, `user`, `main`) VALUES
(1, 'Muhammad Izzatul Haq', 'Jalan Negla RT 02 RW 04 No.11, Kel. Isola, Kec. Sukasari, Bandung', 1, 1),
(2, 'Muhammad Izzatul Haq', 'Jalan Sangkuriang No.7, Kec. Dago Bandung', 1, 0),
(3, 'Hajime Tatsuya', 'Nogizaka No.34', 2, 1),
(20, 'Hajime Tatsuya', 'Otori No.2, Jingu', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(10) NOT NULL,
  `product` int(10) NOT NULL,
  `number` bigint(20) NOT NULL,
  `user` int(10) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `product`, `number`, `user`, `status`) VALUES
(1, 10, 0, 1, 'Menunggu Konfirmasi'),
(2, 15, 0, 1, 'Menunggu Konfirmasi'),
(10, 21, 5, 1, 'Menunggu Konfirmasi'),
(16, 11, 1, 1, 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `product` int(10) NOT NULL,
  `number` int(10) NOT NULL DEFAULT 1,
  `user` int(10) NOT NULL,
  `status` enum('checked','unchecked') NOT NULL DEFAULT 'unchecked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product`, `number`, `user`, `status`) VALUES
(17, 22, 1, 1, 'checked'),
(18, 10, 1, 1, 'checked'),
(19, 15, 5, 2, 'unchecked');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `number` varchar(15) NOT NULL,
  `main` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `number`, `main`) VALUES
(1, 'BNI', '098263911', 0),
(2, 'BRI', '11273529438934', 1),
(3, 'BCA', '31284930036291', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `stock` int(10) DEFAULT NULL,
  `sold` int(10) NOT NULL,
  `price` int(10) DEFAULT NULL,
  `tag` int(10) NOT NULL,
  `details` text DEFAULT NULL,
  `trend` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `stock`, `sold`, `price`, `tag`, `details`, `trend`) VALUES
(10, './assets/img/product/1.jpg', 'Gyoza', 10, 50, 2000, 5, 'Gyoza Bakar', 1),
(11, './assets/img/product/2.jpg', 'Lukisan Buah', 1, 0, 1000000, 1, 'Dimensi 50 x 80 cm', 0),
(12, './assets/img/product/3.jpg', 'Buku Tulis', 201, 410, 2000, 2, '52 lembar', 0),
(13, './assets/img/product/4.jpg', 'Tali Mendali', 500, 10, 1200, 4, 'lebar 5cm', 0),
(14, './assets/img/product/5.jpg', 'Desain Visual Ramadhan', 1, 10, 200000, 1, 'Desain Visual', 0),
(15, './assets/img/product/6.jpg', 'Tomat Besar', 400, 209, 600, 5, 'Dipetik dari pohon', 1),
(16, './assets/img/product/7.jpg', 'Kopi Kilimanjaro', 900, 204, 30000, 5, 'Sudah di sangray', 1),
(17, './assets/img/product/8.jpg', 'Lukisan Tomat', 1, 0, 360000, 5, 'Lukisan Kamera', 0),
(18, './assets/img/product/9.jpg', 'Takane no Hana Nara Ochite koi Volume 1', 1, 102, 80000, 3, 'Pre-Order 1 minggu', 1),
(19, './assets/img/product/10.jpg', 'Layar LCD 16 inch', 10, 2, 470000, 6, 'Merk: DenQ', 0),
(20, './assets/img/product/11.jpg', 'Herbal', 400, 20, 5000, 5, 'Perbungkus 100 gram', 0),
(21, './assets/img/product/12.jpg', 'Fountain Pen Merk Alchemist', 130, 15, 75000, 9, 'Seri: Alph #15', 0),
(22, './assets/img/product/13.jpg', 'Lemon', 204, 391, 20000, 5, 'Lemon pegunungan', 1),
(23, './assets/img/product/14.jpg', 'Mainan Koin', 1022, 40, 10000, 7, 'Bahan: Plastik', 0),
(24, './assets/img/product/15.jpg', 'Pot Tumpukan Koin', 100, 20, 7000, 8, 'Bahan: Plastik', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `price` bigint(20) NOT NULL,
  `main` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `name`, `type`, `price`, `main`) VALUES
(1, 'JNE', 'Reguler', 10000, 0),
(2, 'JNE', 'Express', 20000, 0),
(3, 'SiCepat', 'Reguler', 10000, 1),
(4, 'JNT', 'Reguler', 10000, 0),
(5, 'JNT', 'Express', 21000, 0),
(6, 'SiCepat', 'Express', 18000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `parent` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `parent`) VALUES
(1, 'Seni dan Hobi', NULL),
(2, 'Buku', NULL),
(3, 'Komik', '2'),
(4, 'Peralatan Olahraga', NULL),
(5, 'Makanan', NULL),
(6, 'Elektronik', NULL),
(7, 'Mainan', NULL),
(8, 'Peralatan Rumah', NULL),
(9, 'Alat Tulis', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT './assets/img/default.png',
  `name` varchar(50) NOT NULL,
  `gender` enum('Pria','Wanita') DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `gender`, `birth`, `email`, `password`) VALUES
(1, './assets/img/profile/tatsu.png', 'Muhammad Izzatul Haq', 'Pria', '2000-05-27', 'izza@gmail', 'izza'),
(2, './assets/img/default.png', 'Tatsuya', NULL, NULL, 'tatsu@yahoo.com', 'tatsu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag` (`tag`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buy`
--
ALTER TABLE `buy`
  ADD CONSTRAINT `buy_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `buy_ibfk_2` FOREIGN KEY (`product`) REFERENCES `products` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`tag`) REFERENCES `tags` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
