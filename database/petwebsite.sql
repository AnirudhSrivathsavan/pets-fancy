-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 04:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `Number` int(11) NOT NULL,
  `Animal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`Number`, `Animal`) VALUES
(1, 'Large animals'),
(2, 'Small animals'),
(3, 'Dogs'),
(4, 'Cats'),
(5, 'Avions'),
(6, 'Reptiles'),
(7, 'Exotic/Speciality');

-- --------------------------------------------------------

--
-- Table structure for table `placedata`
--

CREATE TABLE `placedata` (
  `Name` varchar(30) NOT NULL COMMENT 'Non nullable',
  `Id` int(10) UNSIGNED NOT NULL COMMENT 'for indexing purpose',
  `Address` varchar(100) NOT NULL COMMENT 'Contains address of service',
  `City` varchar(100) NOT NULL,
  `State` varchar(30) DEFAULT NULL,
  `Zip code` mediumint(8) UNSIGNED DEFAULT NULL,
  `Byline` varchar(100) NOT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `imgpath` varchar(100) DEFAULT NULL COMMENT 'img stored in ./images',
  `Avail` varchar(100) DEFAULT NULL,
  `Service` int(11) NOT NULL,
  `Animal` int(11) NOT NULL,
  `Verified` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `placedata`
--

INSERT INTO `placedata` (`Name`, `Id`, `Address`, `City`, `State`, `Zip code`, `Byline`, `Phone`, `imgpath`, `Avail`, `Service`, `Animal`, `Verified`) VALUES
('Trial 1 edited 2', 41, 'A1\r\na2\r\na3', 'Abbeville', 'Alabama', 12345, 'Slogan', '1234567890', 'images/1710190100_8103_Untitled1.jpeg', '123\r\n456', 1, 2, 1),
('Trial 2 modified', 42, 'Address Line 1\r\nAddress Line 2\r\nAddress Line 3', 'Abbeville', 'Alabama', 12312, 'We are here for animals', '0987654321', 'images/1710192382_1436_Untitled.jpeg', 'asjkfbskfd 32254\r\nfgjshog56 ', 8, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `Number` int(11) NOT NULL,
  `Service` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`Number`, `Service`) VALUES
(1, 'Veterinarian'),
(2, 'Breeder'),
(3, 'Rescue'),
(4, 'Shelter'),
(5, 'Groomer'),
(6, 'Foster'),
(7, 'Animal Control');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `placedata`
--
ALTER TABLE `placedata`
  ADD PRIMARY KEY (`Id`,`Address`,`Byline`),
  ADD UNIQUE KEY `id` (`Id`,`Byline`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `placedata`
--
ALTER TABLE `placedata`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'for indexing purpose', AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
