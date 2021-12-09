-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 05:30 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `songbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `chord` varchar(5) NOT NULL,
  `count` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`number`, `title`, `chord`, `count`, `id`, `image_url`) VALUES
(0, 'test', '', 0, 1, 'IMG-615c6eeedbe066.32377196.jpg'),
(203, 'Zum tu nunnak', 'F', 0, 2, 'IMG-615c6fceba03e1.36361239.jpg'),
(100, 'spanish', 'G', 0, 3, 'IMG-615c76dd581f83.42642377.pdf'),
(203, 'KAN SIANGPAHRANG THATTHAT SINSIN UH', 'G', 0, 4, 'IMG-617071b890a2e5.74386917.pdf'),
(105, 'PATHIAN CUNGNUNG BIK', 'h', 0, 5, 'IMG-617071d2de7658.18049043.pdf'),
(90, 'PATHIAN KAN THANGTHAT', 'c', 0, 6, 'IMG-617071e4848240.34746616.pdf'),
(77, 'isangpahrang', 'd', 0, 15, 'HLA-61709029c07a91.52375338.pdf'),
(0, '3123123', '23131', 0, 16, 'HLA-617096084ea826.31663422.jpg'),
(1000, 'justin thang', 'g', 0, 17, 'HLA-6170963f22a952.52518885.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `fristName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePIc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fristName`, `lastName`, `email`, `password`, `signUpDate`, `profilePIc`) VALUES
(1, 'mangpi77', 'Mang', 'Pi', 'Mangpi77@gmail.com', '0b6821eec0d930cd8367a0e50b6e8b46', '2021-10-16 00:00:00', 'assets/images/profile-pics/head_emerald.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
