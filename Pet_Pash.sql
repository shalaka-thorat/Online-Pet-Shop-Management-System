-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 08:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- To create database login and selecting db `login`
--

CREATE DATABASE login;
USE login;

-- --------------------------------------------------------

--
-- Table structure for table `adopt`
--

CREATE TABLE `adopt` (
  `uid` int(11) NOT NULL,
  `petid` int(11) DEFAULT NULL,
  `datetime` datetime NOT NULL,
  `addr` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phonen` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `uid` int(11) NOT NULL,
  `petname` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pettype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `petbreed` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `petagem` int(10) UNSIGNED NOT NULL,
  `datetime` datetime NOT NULL,
  `phonen` bigint(20) UNSIGNED NOT NULL,
  `addr` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reason` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `avpets`
--

CREATE TABLE `avpets` (
  `petid` int(11) NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `breed` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `availadopt` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `avpets`
--

INSERT INTO `avpets` (`petid`, `image`, `name`, `type`, `breed`, `age`, `gender`, `availadopt`) VALUES
(2, 'beagle1.jfif', 'James', 'Dog', 'Beagle', '3 Months', 'Male', 'Available'),
(3, 'English-Cocker-Spaniel.jpg', 'Beena', 'Dog', 'English Cocker Spaniel ', '3 Months', 'Female ', 'Available '),
(4, 'exotic_shorthair_1.jpg', 'Snow', 'Cat', 'Exotic Shorthair', '5 Months', 'Male', 'Available '),
(5, 'german2.jpg', 'Rambo', 'Dog', 'German Shepherd', '8 Months', 'Male', 'Available '),
(6, 'golde3.jpg', 'June', 'Dog', 'Golden Retriever', '18 Months', 'Female ', 'Available '),
(7, 'Himalayan_Cat.jpg', 'Sheryl', 'Cat', 'Himalayan', '24 Months', 'Female ', 'Available '),
(8, 'husky1.jpg', 'Ghost', 'Dog', 'Himalayan Husky', '12 Months', 'Male', 'Available '),
(9, 'lab1.jpg', 'Giggles', 'Dog', 'Labrador', '3 Months', 'Male', 'Available '),
(10, 'lab2.jpg', 'Lara', 'Dog', 'Labrador', '3 Months', 'Female ', 'Available '),
(11, 'lab4.jfif', 'Roy', 'Dog', 'Labrador', '10 Months', 'Male', 'Available '),
(12, 'lhasa.jfif', 'Eva', 'Dog', 'Ihasa', '15 Months', 'Female', 'Available'),
(13, 'manx.jpg', 'Sushi', 'Cat', 'Manx', '10 Months', 'Female', 'Available'),
(14, 'pug1.jfif', 'Loofy', 'Dog', 'Pug', '24 Months', 'Male', 'Available'),
(15, 'rotweiler2.jpg', 'Leo', 'Dog', 'Rotweiler', '3 Months', 'Male', 'Available '),
(16, 'scottish.jpg', 'Pearl', 'Cat', 'Scott', '3 Months', 'Female ', 'Available '),
(17, 'White_Persian_Cat.jpg', 'Kinzzy', 'Cat', 'Persian', '18 Months', 'Female ', 'Available ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(5) NOT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phonen` bigint(20) UNSIGNED DEFAULT NULL,
  `addr` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` int(2) NOT NULL COMMENT '1: Account Exists 0: Account Deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `full_name`, `name`, `email`, `password`, `gender`, `phonen`, `addr`, `is_active`) VALUES
(1, 'Shalaka Thorat', 'shalaka_thorat', 'shalaka.thorat@abc.com', 'SnoopDog', 'Female', 9367448356, 'Lane-7,FC Road, Pune', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopt`
--
ALTER TABLE `adopt`
  ADD KEY `uid` (`uid`),
  ADD KEY `petid` (`petid`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `avpets`
--
ALTER TABLE `avpets`
  ADD PRIMARY KEY (`petid`),
  ADD UNIQUE KEY `petid` (`petid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avpets`
--
ALTER TABLE `avpets`
  MODIFY `petid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adopt`
--
ALTER TABLE `adopt`
  ADD CONSTRAINT `adopt_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `adopt_ibfk_2` FOREIGN KEY (`petid`) REFERENCES `avpets` (`petid`);

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
