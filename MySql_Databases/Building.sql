-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 02, 2018 at 12:00 PM
-- Server version: 10.1.26-MariaDB-0+deb9u1
-- PHP Version: 5.6.33-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Building`
--

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` int(11) NOT NULL,
  `ownerName` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ownerSurname` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ownerPassword` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ownerEmail` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ownerPhone` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ownerSecondphone` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id`, `ownerName`, `ownerSurname`, `ownerPassword`, `ownerEmail`, `ownerPhone`, `ownerSecondphone`) VALUES
(1, 'gepettox', 'fadsfasd', 'f=mx+d123', 'fmdndr0@gmail.com', 'daf123', 'asdşkflj123'),
(3, 'fatih mahmut ', 'dundar ', 'fmdndr12345', 'fmdndr0@gmail.com', '+905394015439', '+905394015439');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `country` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `region` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `typeOfbuilding` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `typeOffloor` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `surfacem2` int(11) DEFAULT NULL,
  `numberOfbedRooms` int(25) DEFAULT NULL,
  `numberOfrestrooms` int(25) DEFAULT NULL,
  `numberOfsmallRestrooms` int(25) DEFAULT NULL,
  `kindOfkitchen` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `maxStay` int(55) DEFAULT NULL,
  `parking` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `poool` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `pets` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `blankets` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tv` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fridge` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `microvawe` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aircondition` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `washmachine` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dryer` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `dishwasher` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `wifi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id`, `owner_id`, `country`, `city`, `region`, `typeOfbuilding`, `typeOffloor`, `surfacem2`, `numberOfbedRooms`, `numberOfrestrooms`, `numberOfsmallRestrooms`, `kindOfkitchen`, `maxStay`, `parking`, `poool`, `pets`, `blankets`, `tv`, `fridge`, `microvawe`, `aircondition`, `washmachine`, `dryer`, `dishwasher`, `wifi`) VALUES
(2, 2, 'spain ', 'granada ', 'campo del mayo', 'flat', 'lamine', 65, 4, 5, 6, 'american', 6, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '', 'yes', 'yes', '', 'yes'),
(9, 3, 'germany', 'duseldorf', 'z123', 'apartment', 'lamine', 65, 4, 5, 5, 'american', 6, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(10, 0, 'germany', 'duseldorf', 'z123', 'aparment', 'lamine', 65, 4, 5, 5, 'american', 6, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(11, 0, 'germany', 'duseldorf', ' z123456', 'apartment', 'lamine', 89, 4, 5, 5, 'american', 6, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(12, 0, 'zimbave', 'burundi', 'chad', 'apartment', 'lamine', 165, 4, 5, 5, 'folklorik', 6, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(13, 0, 'lishteshsitain', 'luxemburg', 'zon1', 'dormitory', 'lamine', 85, 1, 2, 5, 'american', 8, 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'no'),
(14, 1, 'germany', 'hamburg', 'zon2', 'apartment', 'lamine', 65, 5, 5, 5, 'american', 6, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(15, 3, 'litvanya ', 'rijkbourg', 'dunkrik', 'apartment', 'lamine', 65, 4, 4, 5, 'american', 6, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
