-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2021 at 08:58 AM
-- Server version: 5.7.36-log
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anaryai1_majoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(3, 'Paket Berlangganan'),
(1, 'Paket Mesin Kasir'),
(2, 'Perangkat Tambahan');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` tinytext NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `description`, `price`, `photo`, `owner`) VALUES
(1, 'Paket Starter Sprinter', 'Paket Mesin Kasir', '- Paket all-in-one-modern.\r\n- 6 bulan langganan majoo starter.\r\n- Advan harvard 01.\r\n- Printer 58mm built-in.\r\n- Without stand.\r\n- 5 struk thermal.\r\n- Install dan setup.', 2550000, 'Paket+Starter+Sprinter.png', ''),
(2, 'Paket Advance Galaxy', 'Paket Mesin Kasir', '- Paket terbaik bisnis makin maju.\r\n- 12 + 1 bulan bonus langganan majoo Advance.\r\n- Tablet Samsung A7 Lite 8.7” atau Advan Sketsa 10.1.\r\n- Printer Bluetooth 58mm.\r\n- Standee Neo 360°.\r\n- 5 struk thermal.\r\n- Install dan setup.', 5850000, 'Paket+Advance+Galaxy.png', ''),
(3, 'Paket Starter Lite', 'Paket Mesin Kasir', '- Paket ekonomis untuk mulai maju.\r\n- 12 + 1 bulan bonus langganan majoo starter.\r\n- Advan GTAB 8.\r\n- Printer Bluetooth 58mm.\r\n- Standee Compact.\r\n- 5 struk thermal.\r\n- Instal dan setup.', 3550000, 'Paket+Starter+Lite.png', ''),
(4, 'Paket Desktop', 'Paket Mesin Kasir', '- Paket desktop premium.\r\n- 12 + 1 bulan bonus langganan majoo Advance.\r\n- Sunmi T2 Single 15”.\r\n- Printer 80mm All In One.\r\n- Without stand.\r\n- 10 struk thermal.\r\n- Instal dan setup.', 11600000, 'Paket+Desktop.png', ''),
(5, 'Printer Kasir Bluetooth Mobile 58mm', 'Perangkat Tambahan', '- Cetak struk kasir bergerak.\r\n- Printer mobile ekonomis.', 475000, 'Printer+Kasir+Bluetooth+Mobile+58mm.png', ''),
(6, 'Printer Kasir Bluetooth Desktop 58mm', 'Perangkat Tambahan', '- Cetak struk kasir desktop.\r\n- Printer desktop ekonomis.', 475000, 'Printer+Kasir+Bluetooth+Desktop+58mm.png', ''),
(7, 'Printer Kasir Dapur Ethernet 80mm', 'perangkat tambahan', '- Cetak struk kasir dapur dengan autocutter.\r\n- Cetak label sticker dengan autocutter.', 1325000, 'Printer+Kasir+Dapur+Ethernet+80mm.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'admin@mail.com', '$2y$10$iTvBWEsja7MHUL3AUImReeJk9IN3gnTbEa2O8x9nVSyD1SiTmkOua'),
(2, 'master@mail.com', '$2y$10$RH6neSQFQLtAJc2eJ25AaOPHt/iPwTAU6Bz7e6LxcAGCaYZc.Lhvq'),
(3, 'produk@mail.com', '$2y$10$f6EtVItjb38pfHHNQxkAhe5pt.5gkBcGk0fFEU4qF/RzEqiUPmSbK'),
(4, 'masteruser@mail.com', '$2y$10$L0zagd0Z65j6yV7jHctuE.VeSaDCY053oXoYikG5OTsZuTh7GdX3.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category` (`category`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `FK_Category` (`category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_Category` FOREIGN KEY (`category`) REFERENCES `category` (`category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
