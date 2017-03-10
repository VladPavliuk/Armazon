-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2017 at 07:17 PM
-- Server version: 5.5.50
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `armazon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `session_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `session_id`) VALUES
(1, 'root', '81dc9bdb52d04dc20036dbd8313ed055', 31);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `id` int(10) unsigned NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ukr_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `upper_ukr_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `default` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `color`, `ukr_title`, `upper_ukr_title`, `default`) VALUES
(1, 'dark', 'каштан', 'Каштан', 1),
(2, 'light', 'сосна', 'Сосна', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(10) unsigned NOT NULL,
  `profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ukr_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `upper_ukr_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `profile`, `ukr_title`, `upper_ukr_title`) VALUES
(1, 'leonardo', 'леонардо', 'Леонардо'),
(2, 'frodo', 'фродо', 'Фродо');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE IF NOT EXISTS `size` (
  `id` int(10) unsigned NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `leonardo_prices` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `frodo_prices` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `back_leg` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size`, `leonardo_prices`, `frodo_prices`, `back_leg`, `image_size`) VALUES
(1, '10x15', '24', '22', 'F', 150),
(2, '13x18', '29', '26', 'F', 180),
(3, '15x21', '34', '31', 'F', 210),
(4, '18x24', '41', '37', 'F', 240),
(5, '21x30F', '51', '', 'F', 300),
(6, '21x30', '47', '43', '', 300),
(7, '25x38', '67', '61', NULL, 380),
(8, '30x40', '75', '68', NULL, 400);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `town` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `user_write` text,
  `orders_worth` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `date`, `name`, `email`, `phone`, `town`, `user_write`, `orders_worth`) VALUES
(2, '2017-02-06 19:15:26', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 1150),
(3, '2017-02-06 19:15:55', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 7013),
(4, '2017-02-06 19:21:07', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 408),
(5, '2017-02-06 19:28:19', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 1116),
(6, '2017-02-06 19:29:58', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 1430),
(7, '2017-02-06 19:30:40', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 1430),
(8, '2017-02-06 19:33:49', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 59127),
(9, '2017-02-06 19:37:05', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 1613),
(10, '2017-02-06 19:37:41', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 1430),
(11, '2017-02-06 19:38:27', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'кккк', '', 0),
(12, '2017-02-06 19:38:40', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'кккккккккккккк', '', 900),
(13, '2017-02-06 19:39:58', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 2068),
(14, '2017-02-06 19:40:35', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 2292),
(15, '2017-02-06 19:43:02', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 1444),
(16, '2017-02-06 21:30:07', 'Test', 'pavliuk.vlad2@gmail.com', '983958730', 'Івано-Франківсь', 're', 18431),
(17, '2017-02-06 21:31:41', 'Test', 'pavliuk.vlad@gmail.com', '34', '32', '', 1170),
(18, '2017-02-06 21:35:28', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 144),
(19, '2017-02-07 10:37:05', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 986),
(20, '2017-02-07 10:38:51', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 0),
(21, '2017-02-07 10:38:54', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 0),
(22, '2017-02-07 10:38:58', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 0),
(23, '2017-02-07 10:39:11', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 897),
(24, '2017-02-07 10:40:17', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 0),
(25, '2017-02-07 10:40:25', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 0),
(26, '2017-02-07 10:40:40', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 352),
(27, '2017-02-07 10:42:19', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 2109),
(28, '2017-02-07 10:43:46', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 900),
(29, '2017-02-07 10:49:49', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 360),
(30, '2017-02-07 18:58:36', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 120),
(31, '2017-02-09 14:10:09', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 192),
(32, '2017-02-09 14:11:11', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 552),
(33, '2017-02-13 18:26:49', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', 'івііі', 528),
(34, '2017-02-13 18:35:30', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 456),
(35, '2017-02-13 18:36:03', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 456),
(36, '2017-02-14 11:30:27', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 648),
(37, '2017-02-16 19:31:32', 'Владислав Павлюк', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', '', 312),
(38, '2017-02-16 19:38:51', 'Test', 'pavliuk.vlad@gmail.com', '445', '34', 'tttt', 1430),
(39, '2017-02-16 19:39:02', 'Test', 'pavliuk.vlad@gmail.com', '445', '34', 'tttt', 0),
(40, '2017-02-16 19:39:22', 'Test', 'pavliuk.vlad@gmail.com', '983958730', 'Івано-Франківсь', 'sdsd', 1444),
(41, '2017-03-05 11:25:05', 'пааа', '', '23', 'вв', '', 1241),
(42, '2017-03-05 11:47:58', 'вфі', '', 'фів', 'іфв', '', 7276);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
