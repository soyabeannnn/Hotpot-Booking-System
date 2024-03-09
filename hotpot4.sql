-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 02:12 AM
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
-- Database: `hotpot4`
--
CREATE DATABASE IF NOT EXISTS `hotpot4` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hotpot4`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(11) NOT NULL,
  `TableID` varchar(11) DEFAULT NULL,
  `PackageID` int(11) DEFAULT NULL,
  `CustomerID` varchar(11) DEFAULT NULL,
  `BookingStatus` enum('Paid','Unpaid','Cancelled','Completed') DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `AdultPax` int(10) DEFAULT NULL,
  `ChlidPax` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `TableID`, `PackageID`, `CustomerID`, `BookingStatus`, `Date`, `Time`, `AdultPax`, `ChlidPax`) VALUES
(145, 'A7', 4, 'sourceeam', 'Paid', '2024-03-19', '00:15:00', 4, 5),
(144, 'A5', 4, 'sourceeam', 'Paid', '2024-03-16', '00:12:00', 4, 2),
(143, 'A4', 5, 'PlantDaddy', 'Paid', '2024-03-27', '00:13:00', 6, 0),
(142, 'A2', 5, 'PlantDaddy', 'Unpaid', '2024-03-25', '00:13:00', 5, 3),
(141, 'A5', 3, 'PlantDaddy', 'Completed', '2024-03-14', '00:13:00', 4, 1),
(140, 'A3', 4, 'GaMing23', 'Unpaid', '2024-04-01', '00:20:00', 1, 0),
(139, 'A5', 6, 'GaMing23', 'Completed', '2024-03-29', '00:12:00', 7, 5),
(138, 'A1', 1, 'GaMing23', 'Cancelled', '2024-03-11', '00:16:00', 2, 0),
(137, 'A8', 2, 'Trailb14zer', 'Unpaid', '2024-03-12', '00:13:00', 3, 5),
(136, 'A3', 2, 'Trailb14zer', 'Completed', '2024-03-12', '00:14:00', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomersID` varchar(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Password` varchar(12) NOT NULL,
  `PhoneNumber` varchar(15) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomersID`, `Name`, `Password`, `PhoneNumber`, `Status`) VALUES
('Admin1', 'Fariq Thamir', '1234', '03 456 3832', 'Admin'),
('Admin2', 'Tanami Koto', '1234', '03 456 3832', 'Admin'),
('Trailb14zer', 'Asta Lee', 'Cr333dit', '010 348 3293', 'Customer'),
('GaMing23', 'Gaming', 'li0ndance', '010 888 8888', 'Customer'),
('PlantDaddy', 'Harris Pott', 'SoilLuv<3', '016 832 9329', 'Customer'),
('sourceeam', 'Aria Dream', 'sl4444y', '018 394 3232', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `PackageID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`PackageID`, `Name`, `Type`, `Price`, `Description`) VALUES
(1, 'Meat Lovers', 'Meat', 59.96, 'A selection of premium meats for a hearty hot pot experience'),
(2, 'Vegetarian Delight', 'Vegetable', 37.96, 'A variety of fresh and nutritious vegetables for a vegetarian feast'),
(3, 'Sides Sampler', 'Sides', 45.96, 'Assorted side dishes to complement your hot pot adventure'),
(4, 'Sweet Tooth Indulgence', 'Desserts', 35.96, 'Delectable desserts for a sweet ending to your meal'),
(5, 'Deluxe Hot Pot Feast', 'Mixed', 79.99, 'A grand feast with a variety of meats, sides, desserts, and drinks'),
(6, 'Vegetarian Delight', 'Mixed', 49.99, 'A vegetarian package with a mix of vegetables, sides, desserts, and drinks'),
(7, 'Sweets and Treats', 'Mixed', 39.99, 'A delightful package featuring desserts and drinks for a sweet experience');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `TableID` varchar(11) NOT NULL,
  `environment` enum('Inside','Outside') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`TableID`, `environment`) VALUES
('A1', 'Outside'),
('A2', 'Outside'),
('A3', 'Inside'),
('A4', 'Inside'),
('A5', 'Outside'),
('A6', 'Outside'),
('A7', 'Outside'),
('A8', 'Inside'),
('A9', 'Inside'),
('A10', 'Outside');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `RestaurantID` (`TableID`),
  ADD KEY `PackageID` (`PackageID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomersID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`PackageID`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`TableID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `PackageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
