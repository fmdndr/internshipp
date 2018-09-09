-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2018 at 08:58 AM
-- Server version: 10.1.26-MariaDB-0+deb9u1
-- PHP Version: 5.6.37-1+0~20180725093819.2+stretch~1.gbp606419

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
(1, 'gepettox', 'fadsfasd', 'f=mx+d123', 'fmdxndr0@gmail.com', 'daf123', 'asdşkflj123'),
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
  `parking` varchar(1) COLLATE utf8_turkish_ci DEFAULT '0',
  `poool` varchar(1) COLLATE utf8_turkish_ci DEFAULT '0',
  `pets` varchar(1) COLLATE utf8_turkish_ci DEFAULT '0',
  `blankets` varchar(1) COLLATE utf8_turkish_ci DEFAULT '0',
  `tv` varchar(1) COLLATE utf8_turkish_ci DEFAULT '0',
  `fridge` varchar(1) COLLATE utf8_turkish_ci DEFAULT '0',
  `microvawe` varchar(1) COLLATE utf8_turkish_ci DEFAULT '0',
  `aircondition` varchar(1) COLLATE utf8_turkish_ci DEFAULT '0',
  `washmachine` varchar(1) COLLATE utf8_turkish_ci DEFAULT '0',
  `dryer` varchar(1) COLLATE utf8_turkish_ci DEFAULT '0',
  `dishwasher` varchar(1) COLLATE utf8_turkish_ci DEFAULT '0',
  `wifi` varchar(1) COLLATE utf8_turkish_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`id`, `owner_id`, `country`, `city`, `region`, `typeOfbuilding`, `typeOffloor`, `surfacem2`, `numberOfbedRooms`, `numberOfrestrooms`, `numberOfsmallRestrooms`, `kindOfkitchen`, `maxStay`, `parking`, `poool`, `pets`, `blankets`, `tv`, `fridge`, `microvawe`, `aircondition`, `washmachine`, `dryer`, `dishwasher`, `wifi`) VALUES
(18, 1, 'norway', 'zurih', '', '', '', 0, 0, 0, 0, '', 0, '', '', 'o', '', '', 'o', 'o', '', '', 'o', '', ''),
(19, 1, 'finland', 'tolay', '12', '', '', 0, 0, 0, 0, '', 0, '0', '1', '0', '0', '0', '1', '0', '1', '1', '0', '0', '0'),
(20, 1, 'lithuania', 'capital', '', '', '', 0, 0, 0, 0, '', 0, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(21, 1, 'letonya', 'Central', '', '', '', 0, 0, 0, 0, '', 0, '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '1'),
(22, 1, 'brukinaFaso', 'brukundi', '123', '', '', 0, 0, 0, 0, '', 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1'),
(23, 1, 'germany', 'duseldorf', 'z123', 'apartment', 'lamine', 89, 8, 9, 9, 'american', 6, '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
