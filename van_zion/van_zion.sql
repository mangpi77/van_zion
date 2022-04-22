-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 07:37 AM
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
-- Database: `cbanaus_songbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `id` int(255) NOT NULL,
  `number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `chord` varchar(5) NOT NULL,
  `lyrics` longtext NOT NULL,
  `pdf` text NOT NULL,
  `ppt` text NOT NULL,
  `pro` text NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`id`, `number`, `title`, `chord`, `lyrics`, `pdf`, `ppt`, `pro`, `count`) VALUES
(1, 2000, 'Testing2000', 'G', 'Kan Pathian a tha', 'PDF-623bac127f0f16.76657733.pdf', 'PPTX-623bac127f89b2.51372720.pptx', 'PRO-623bac127fb893.39186668.pro', 0),
(2, 9, 'kan pathian a tha', 'G#', '\n       C              G                 Am          F\nWhen I find myself in times of trouble, Mother Mary comes to me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n    C             G                Am                F\nAnd in my hour of darkness, She is standing right in front of me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n       Am         G          F          C\nLet it be, let it be, let it be, let it be\n                 G              F   C/E   Dm   C\nWhisper words of wisdom, let it be\n', 'PDF-61d2ae0c3aac18.27593168.pdf', 'PPTX-61d2ae0c3aefd4.62689365.pptx', 'PRO-61d2ae0c3b2307.76323297.pro', 0),
(3, 4, 'Bawipa Thangthat', 'G', '{key:C}\n\nVerse 1\n[G2] You said there will [D/F#]be a da[Em]y\nWhen the captives [D]all go free [Asus/C#]\nAnd every [Bm7]war will cease \n[G2] You said there will [D/F#]come a ti[Em]me\nWhen the nations of the world will [D]change their minds\nAnd be [Asus/C#]led by a [Bm7]little child', 'PDF-61d2bbe5467a42.53452418.pdf', 'PPTX-61d2bbe546a234.50867723.pptx', 'PRO-61d2bbe546c3b7.71654144.pptx', 0),
(4, 3, ' I hngilh lo na dawatnak in ', 'Db', '\n       C              G                 Am          F\nWhen I find myself in times of trouble, Mother Mary comes to me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n    C             G                Am                F\nAnd in my hour of darkness, She is standing right in front of me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n       Am         G          F          C\nLet it be, let it be, let it be, let it be\n                 G              F   C/E   Dm   C\nWhisper words of wisdom, let it be\n', 'PDF-61d2bb72052708.42326233.pdf', 'PPTX-61d2bb720551c1.67609911.pptx', 'PRO-61d2bb72058393.63836622.pptx', 0),
(5, 10, 'Pathain fapa leitlun a rat san cu', 'B', 'FSFSFDS\r\nDSFSDFSDF\r\nDSFSDFDF\r\nFSDFDSFDSF', 'PDF-61d2ba3a195251.98771981.pdf', 'PPTX-61d2ba3a197c26.77677838.pptx', 'PRO-61d2ba3a19aed5.65426776.pro', 0),
(6, 1, 'Ka ta na si', 'A', '       C              G                 Am          F\nWhen I find myself in times of trouble, Mother Mary comes to me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n    C             G                Am                F\nAnd in my hour of darkness, She is standing right in front of me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n       Am         G          F          C\nLet it be, let it be, let it be, let it be\n                 G              F   C/E   Dm   C\nWhisper words of wisdom, let it be\n', 'PDF-61d2b8966de357.31748356.pptx', 'PPTX-61d2b8966e0f98.12227291.pptx', 'PRO-61d2b8966e3fc7.18790746.pro', 0),
(7, 6, 'Mangbangza Pathian', 'Ab', '<pre data-key=\"C\">\n       C              G                 Am          F\nWhen I find myself in times of trouble, Mother Mary comes to me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n    C             G                Am                F\nAnd in my hour of darkness, She is standing right in front of me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n       Am         G          F          C\nLet it be, let it be, let it be, let it be\n                 G              F   C/E   Dm   C\nWhisper words of wisdom, let it be\n</pre>', 'PDF-61d2bbcb8fddb2.62882741.pdf', 'PPTX-61d2bbcb900864.31252542.pptx', 'PRO-61d2bbcb902ee9.33640977.pptx', 0),
(8, 2, 'Kanlo Thangthat', 'C', '\n       C              G                 Am          F\nWhen I find myself in times of trouble, Mother Mary comes to me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n    C             G                Am                F\nAnd in my hour of darkness, She is standing right in front of me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n       Am         G          F          C\nLet it be, let it be, let it be, let it be\n                 G              F   C/E   Dm   C\nWhisper words of wisdom, let it be\n', 'PDF-61c8096b21a714.59070562.pdf', 'PPTX-61c8096b21d683.29741842.pptx', 'PRO-61c8096b21e5f0.99982025.pro', 0),
(9, 5, 'Liangnganbik bawipa', 'E', 'VERSE\nKan feh phah in lungawinak hla sak cio uhsi\nA rei hlanah vancung kan thleng ding;\nThimnak hmuah ral in kumkhua in,\nNi a tlaang ding,\nA rei hlanah vancung kan thleng ding;\n\nCHORUS\nA can rei loin, a can rei loin\nThihnak tiva kan tan ding;\nThlisia hranak cem tikah\nKan tongaw cing ding,\nA rei hlanah vancung kan thleng ding;\n\nVERSE 2\nKan tonmi hnatuan kha zuamnak in tuan uhsi,\nA rei hlanah vancung kan thleng ding;\nPathian zaangfahnak thawm in,\nNitin kan him ding;\nA rei hlanah vancung kan thleng ding;\n\nVERSE 3\nA baangmi hrangah lamzin kha remsak uhsi,\nA rei hlanah vancung kan thleng ding;\nDuhnak thinlung kha mi hmuah hnenah nei uhsi\n\nA rei hlanah vancung kan thleng ding;', 'PDF-61d2aded882576.87011131.pdf', 'PPTX-61d2aded88d359.46334803.pptx', 'PRO-61d2aded890440.86136244.pro', 0),
(10, 100, 'Test', 'F', 'dfsfsfff\r\nsdfdf\r\nf\r\nsdf\r\nsd\r\nfsdf\r\n', 'PDF-623ba84570fae8.22814256.pdf', 'PPTX-623ba845711fe2.59310388.pptx', 'PRO-623ba845713bd1.62798369.pro', 0),
(11, 2000, 'Test123', 'G', 'Kan Pathian a tha', 'PDF-623baa1c0656d8.46060527.pdf', 'PPTX-623baa1c06a6c4.76948353.pptx', 'PRO-623baa1c06c8a1.08956859.pro', 0),
(12, 7, 'pathian kut sungah', 'G', 'VERSE\n\nRuun tu Bawi in keimah i hruai tikah\nReitheih zonzaih thleng hman seh ka him ding\nThlisia ti let thleng tikah i hup ding\nA kut thawmlian pi sungah\n\nA kut thawmlian pi sungah\nReithei zonzaih \nThleng hmanseh ka him ding\nA kut thawmlian pi sungah\n\nIn duhdawt ih a taangah in cawi ding\nA thlawsuah daihnak le thu tha in sim \nPathian kilvengnak in kan mah kan him\nA kut thawmlian pi sungah\n\nIn duhdawt ih a taangah in cawi ding\nA thlawsuah daihnak le thu tha in sim \nPathian kilvengnak in kan mah kan him\nA kut thawmlian pi sungah\n\nIn duhdawt ih a taangah in cawi ding\nA thlawsuah daihnak le thu tha in sim \nPathian kilvengnak in kan mah kan him\nA kut thawmlian pi sungah\n\nA kut thawmlian pi sungah\nReithei zonzaih \nThleng hmanseh ka him ding\nA kut thawmlian pi sungah\n\nKan thlarau taan lo in a kilkhawi ding \nIn duhnak thu cu dai ti um lo ding\nA tu le a kumkhua’n in kilkhawi ding\nA kut thawmlian pi sungah\n\nA kut thawmlian pi sungah\nReithei zonzaih \nThleng hmanseh ka him ding\nA kut thawmlian pi sungah\n', 'PDF-61c79abe2e12d7.26311723.pdf', 'PPTX-61c79abe2e3156.26718710.pptx', 'PRO-61c79abe2e3e84.33599046.pro', 0),
(13, 8, 'Ziangkim Ti Thei Pathian', 'G', 'VERSE\nKan feh phah in lungawinak hla sak cio uhsi\nA rei hlanah vancung kan thleng ding;\nThimnak hmuah ral in kumkhua in,\nNi a tlaang ding,\nA rei hlanah vancung kan thleng ding;\n\nCHORUS\nA can rei loin, a can rei loin\nThihnak tiva kan tan ding;\nThlisia hranak cem tikah\nKan tongaw cing ding,\nA rei hlanah vancung kan thleng ding;\n\nVERSE 2\nKan tonmi hnatuan kha zuamnak in tuan uhsi,\nA rei hlanah vancung kan thleng ding;\nPathian zaangfahnak thawm in,\nNitin kan him ding;\nA rei hlanah vancung kan thleng ding;\n\nVERSE 3\nA baangmi hrangah lamzin kha remsak uhsi,\nA rei hlanah vancung kan thleng ding;\nDuhnak thinlung kha mi hmuah hnenah nei uhsi\n\nA rei hlanah vancung kan thleng ding;', 'PDF-61c90280817557.98927701.pdf', 'PPTX-61c9028081a757.08073480.pptx', 'PRO-61c90280821870.44475593.pro', 0),
(14, 2000, 'Testing123', 'G', 'Kan Pathian a tha', 'PDF-623baa8dc46cf4.85435788.pdf', 'PPTX-623baa8dc49772.75456713.pptx', 'PRO-623baa8dc4b8a5.27489112.pro', 0),
(15, 3000, 'Test5000', 'C', 'Kan Pathian a tha', 'PDF-623bb2a28b4a08.21571215.pdf', 'PPTX-623bb2a28bd592.01961053.pptx', 'PRO-623bb2a28bfb00.36119883.pro', 0),
(16, 5000, 'Test5000', 'C', 'Kan Pathian a tha 5000', 'PDF-623bfd83d95751.15633311.pdf', 'PPTX-623bfd83d9e0b9.73928899.pptx', 'PRO-623bfd83da1160.41823665.pro', 0),
(17, 300, 'Test7000', 'A', 'testing7000', 'PDF-623bfe800d7fb9.96531655.pdf', 'PPTX-623bfe800e0b44.86314344.pptx', 'PRO-623bfe800e38d6.17188092.pro', 0),
(18, 25, '1000', 'G', 'This is just testing text', 'PDF-623c0127de8981.90516888.pdf', 'PPTX-623c0127deb4d2.47792226.pptx', 'PRO-623c0127ded5e3.52791215.pro', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
