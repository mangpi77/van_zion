-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 30, 2021 at 12:45 AM
-- Server version: 5.6.41-84.1
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
-- Database: `cbanaus_songbook`
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
  `lyrics` text NOT NULL,
  `pdf` text NOT NULL,
  `ppt` text NOT NULL,
  `pro` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`number`, `title`, `chord`, `count`, `id`, `lyrics`, `pdf`, `ppt`, `pro`) VALUES
(1, 'pathian kut sungah', 'F', 0, 37, 'Pathian Kut Sungah\r\nKey-D\r\n\r\nRuun tu Bawi in keimah i hruai tikah\r\nReitheih zonzaih thleng hman seh ka him ding\r\nThlisia ti let thleng tikah i hup ding\r\nA kut thawmlian pi sungah\r\n\r\nA kut thawmlian pi sungah\r\nReithei zonzaih \r\nThleng hmanseh ka him ding\r\nA kut thawmlian pi sungah\r\n\r\nIn duhdawt ih a taangah in cawi ding\r\nA thlawsuah daihnak le thu tha in sim \r\nPathian kilvengnak in kan mah kan him\r\nA kut thawmlian pi sungah\r\n\r\nIn duhdawt ih a taangah in cawi ding\r\nA thlawsuah daihnak le thu tha in sim \r\nPathian kilvengnak in kan mah kan him\r\nA kut thawmlian pi sungah\r\n\r\nIn duhdawt ih a taangah in cawi ding\r\nA thlawsuah daihnak le thu tha in sim \r\nPathian kilvengnak in kan mah kan him\r\nA kut thawmlian pi sungah\r\n\r\nA kut thawmlian pi sungah\r\nReithei zonzaih \r\nThleng hmanseh ka him ding\r\nA kut thawmlian pi sungah\r\n\r\nKan thlarau taan lo in a kilkhawi ding \r\nIn duhnak thu cu dai ti um lo ding\r\nA tu le a kumkhua’n in kilkhawi ding\r\nA kut thawmlian pi sungah\r\n\r\nA kut thawmlian pi sungah\r\nReithei zonzaih \r\nThleng hmanseh ka him ding\r\nA kut thawmlian pi sungah\r\n', 'PDF-61c79abe2e12d7.26311723.pdf', 'PPTX-61c79abe2e3156.26718710.pptx', 'PRO-61c79abe2e3e84.33599046.pro'),
(203, 'testing123', 'F', 0, 38, 'Notation\r\nSpacing utilities that apply to all breakpoints, from xs to xl, have no breakpoint abbreviation in them. This is because those classes are applied from min-width: 0 and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.\r\n\r\nThe classes are named using the format {property}{sides}-{size} for xs and {property}{sides}-{breakpoint}-{size} for sm, md, lg, and xl.\r\n\r\nWhere property is one of:\r\n\r\nm - for classes that set margin\r\np - for classes that set padding\r\nWhere sides is one of:\r\n\r\nt - for classes that set margin-top or padding-top\r\nb - for classes that set margin-bottom or padding-bottom\r\nl - for classes that set margin-left or padding-left\r\nr - for classes that set margin-right or padding-right\r\nx - for classes that set both *-left and *-right\r\ny - for classes that set both *-top and *-bottom\r\nblank - for classes that set a margin or padding on all 4 sides of the element\r\nWhere size is one of:\r\n\r\n0 - for classes that eliminate the margin or padding by setting it to 0\r\n1 - (by default) for classes that set the margin or padding to $spacer * .25\r\n2 - (by default) for classes that set the margin or padding to $spacer * .5\r\n3 - (by default) for classes that set the margin or padding to $spacer\r\n4 - (by default) for classes that set the margin or padding to $spacer * 1.5\r\n5 - (by default) for classes that set the margin or padding to $spacer * 3\r\nauto - for classes that set the margin to auto', 'PDF-61c8096b21a714.59070562.pdf', 'PPTX-61c8096b21d683.29741842.pptx', 'PRO-61c8096b21e5f0.99982025.pro'),
(5, 'Ziangkim Ti Thei Pathian', 'G', 0, 39, 'VERSE\r\nKan feh phah in lungawinak hla sak cio uhsi\r\nA rei hlanah vancung kan thleng ding;\r\nThimnak hmuah ral in kumkhua in,\r\nNi a tlaang ding,\r\nA rei hlanah vancung kan thleng ding;\r\n\r\nCHORUS\r\nA can rei loin, a can rei loin\r\nThihnak tiva kan tan ding;\r\nThlisia hranak cem tikah\r\nKan tongaw cing ding,\r\nA rei hlanah vancung kan thleng ding;\r\n\r\nVERSE 2\r\nKan tonmi hnatuan kha zuamnak in tuan uhsi,\r\nA rei hlanah vancung kan thleng ding;\r\nPathian zaangfahnak thawm in,\r\nNitin kan him ding;\r\nA rei hlanah vancung kan thleng ding;\r\n\r\nVERSE 3\r\nA baangmi hrangah lamzin kha remsak uhsi,\r\nA rei hlanah vancung kan thleng ding;\r\nDuhnak thinlung kha mi hmuah hnenah nei uhsi\r\n\r\nA rei hlanah vancung kan thleng ding;', 'PDF-61c90280817557.98927701.pdf', 'PPTX-61c9028081a757.08073480.pptx', 'PRO-61c90280821870.44475593.pro');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
