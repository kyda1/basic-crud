-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 08:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `bday` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `bday`, `address`) VALUES
(4, 'Lee Taeyong', '1995-07-01', 'Gwanak-gu, Seoul'),
(5, 'Moon Tae Il', '1994-06-14', 'Seoul, South Korea'),
(6, 'Seo Young Ho', '1995-02-09', 'Chicago, Illinois'),
(7, 'Nakamoto Yuta', '1995-10-26', 'Osaka, Japan'),
(8, 'Kim Dong Young', '1996-02-01', 'Seoul, South Korea'),
(9, 'Jeong Jae Hyun', '1997-02-14', 'Seoul, South Korea'),
(10, 'Kim Jung Woo', '1998-02-19', 'Seoul, South Korea'),
(11, 'Lee Min Hyung', '1992-08-02', 'Toronto, Canada'),
(12, 'Lee Dong Hyuck', '2000-06-06', 'Seoul, South Korea'),
(13, 'Dong Si Cheng', '1997-10-28', 'Wenzhou, Zheijang, China');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
