-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2026 at 07:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadhana`
--

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `idperformance` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlahCust` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`idperformance`, `tahun`, `jumlahCust`) VALUES
(1, 1999, 15),
(2, 2004, 22),
(3, 2009, 35),
(4, 2014, 48),
(5, 2019, 65),
(6, 2024, 80);

-- --------------------------------------------------------

--
-- Table structure for table `productspage`
--

CREATE TABLE `productspage` (
  `idproducts` int(11) NOT NULL,
  `productsName` varchar(100) NOT NULL,
  `productsDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productspage`
--

INSERT INTO `productspage` (`idproducts`, `productsName`, `productsDesc`) VALUES
(1, 'Laptops', 'We are your premier destination for finding the perfect laptop, offering an unparalleled selection that spans from ultra-portable machines for everyday productivity to high-performance gaming rigs and robust workstations. [....]'),
(2, 'LED Video Walls', 'We provide an extensive and versatile selection of digital display solutions, covering everything from fine-pitch indoor screens perfect for high-resolution corporate lobbies and control rooms to ultra-bright, robust outdoor panels. [....]'),
(3, 'Routers', 'We specialize in providing the ideal networking solution for every user, whether you are a heavy gamer needing ultra-low latency, a professional working from home requiring robust VPN support, or a busy household relying on seamless Wi-Fi coverage. [....]');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `idRatings` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicepage`
--

CREATE TABLE `servicepage` (
  `idService` int(11) NOT NULL,
  `serviceName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicepage`
--

INSERT INTO `servicepage` (`idService`, `serviceName`) VALUES
(1, 'Electronic Device Service'),
(2, 'LED Video Walls Installation'),
(3, 'Internet Device Installation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`idperformance`);

--
-- Indexes for table `productspage`
--
ALTER TABLE `productspage`
  ADD PRIMARY KEY (`idproducts`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`idRatings`);

--
-- Indexes for table `servicepage`
--
ALTER TABLE `servicepage`
  ADD PRIMARY KEY (`idService`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `idperformance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `productspage`
--
ALTER TABLE `productspage`
  MODIFY `idproducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `idRatings` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicepage`
--
ALTER TABLE `servicepage`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
