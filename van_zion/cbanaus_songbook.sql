-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2022 at 02:04 AM
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
-- Table structure for table `hymn`
--

CREATE TABLE `hymn` (
  `id` int(255) NOT NULL,
  `number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `chord` varchar(5) NOT NULL,
  `lyrics` longtext NOT NULL,
  `pdf` text NOT NULL,
  `ppt` text NOT NULL,
  `pro` text NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hymn`
--

INSERT INTO `hymn` (`id`, `number`, `title`, `chord`, `lyrics`, `pdf`, `ppt`, `pro`, `count`) VALUES
(10000, 1, 'hymn', 'T', 'Hymn song test', 'pdf', 'ppt', 'pro', 0);

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
  `count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`id`, `number`, `title`, `chord`, `lyrics`, `pdf`, `ppt`, `pro`, `count`) VALUES
(2, 9, 'kan pathian a tha', 'G#', '\n       C              G                 Am          F\nWhen I find myself in times of trouble, Mother Mary comes to me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n    C             G                Am                F\nAnd in my hour of darkness, She is standing right in front of me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n       Am         G          F          C\nLet it be, let it be, let it be, let it be\n                 G              F   C/E   Dm   C\nWhisper words of wisdom, let it be\n', 'PDF-61d2ae0c3aac18.27593168.pdf', 'PPTX-61d2ae0c3aefd4.62689365.pptx', 'PRO-61d2ae0c3b2307.76323297.pro', 33),
(3, 4, 'Bawipa Thangthat', 'G', '{key:C}\n\nVerse 1\n[G2] You said there will [D/F#]be a da[Em]y\nWhen the captives [D]all go free [Asus/C#]\nAnd every [Bm7]war will cease \n[G2] You said there will [D/F#]come a ti[Em]me\nWhen the nations of the world will [D]change their minds\nAnd be [Asus/C#]led by a [Bm7]little child', 'PDF-61d2bbe5467a42.53452418.pdf', 'PPTX-61d2bbe546a234.50867723.pptx', 'PRO-61d2bbe546c3b7.71654144.pptx', 40),
(4, 3, ' I hngilh lo na dawatnak in ', 'Db', '\n       C              G                 Am          F\nWhen I find myself in times of trouble, Mother Mary comes to me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n    C             G                Am                F\nAnd in my hour of darkness, She is standing right in front of me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n       Am         G          F          C\nLet it be, let it be, let it be, let it be\n                 G              F   C/E   Dm   C\nWhisper words of wisdom, let it be\n', 'PDF-61d2bb72052708.42326233.pdf', 'PPTX-61d2bb720551c1.67609911.pptx', 'PRO-61d2bb72058393.63836622.pptx', 737),
(5, 10, 'Pathain fapa leitlun a rat san cu', 'B', 'FSFSFDS\r\nDSFSDFSDF\r\nDSFSDFDF\r\nFSDFDSFDSF', 'PDF-61d2ba3a195251.98771981.pdf', 'PPTX-61d2ba3a197c26.77677838.pptx', 'PRO-61d2ba3a19aed5.65426776.pro', 102),
(6, 1, 'Ka ta na si', 'A', '       C              G                 Am          F\nWhen I find myself in times of trouble, Mother Mary comes to me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n    C             G                Am                F\nAnd in my hour of darkness, She is standing right in front of me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n       Am         G          F          C\nLet it be, let it be, let it be, let it be\n                 G              F   C/E   Dm   C\nWhisper words of wisdom, let it be\n', 'PDF-61d2b8966de357.31748356.pptx', 'PPTX-61d2b8966e0f98.12227291.pptx', 'PRO-61d2b8966e3fc7.18790746.pro', 22),
(7, 6, 'Mangbangza Pathian', 'Ab', '<pre data-key=\"C\">\n       C              G                 Am          F\nWhen I find myself in times of trouble, Mother Mary comes to me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n    C             G                Am                F\nAnd in my hour of darkness, She is standing right in front of me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n       Am         G          F          C\nLet it be, let it be, let it be, let it be\n                 G              F   C/E   Dm   C\nWhisper words of wisdom, let it be\n</pre>', 'PDF-61d2bbcb8fddb2.62882741.pdf', 'PPTX-61d2bbcb900864.31252542.pptx', 'PRO-61d2bbcb902ee9.33640977.pptx', 68),
(8, 2, 'Kanlo Thangthat', 'C', '\n       C              G                 Am          F\nWhen I find myself in times of trouble, Mother Mary comes to me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n    C             G                Am                F\nAnd in my hour of darkness, She is standing right in front of me\nC                 G              F   C/E   Dm   C\nSpeaking words of wisdom, let it be\n\n       Am         G          F          C\nLet it be, let it be, let it be, let it be\n                 G              F   C/E   Dm   C\nWhisper words of wisdom, let it be\n', 'PDF-61c8096b21a714.59070562.pdf', 'PPTX-61c8096b21d683.29741842.pptx', 'PRO-61c8096b21e5f0.99982025.pro', 18),
(9, 5, 'Liangnganbik bawipa', 'E', 'VERSE\nKan feh phah in lungawinak hla sak cio uhsi\nA rei hlanah vancung kan thleng ding;\nThimnak hmuah ral in kumkhua in,\nNi a tlaang ding,\nA rei hlanah vancung kan thleng ding;\n\nCHORUS\nA can rei loin, a can rei loin\nThihnak tiva kan tan ding;\nThlisia hranak cem tikah\nKan tongaw cing ding,\nA rei hlanah vancung kan thleng ding;\n\nVERSE 2\nKan tonmi hnatuan kha zuamnak in tuan uhsi,\nA rei hlanah vancung kan thleng ding;\nPathian zaangfahnak thawm in,\nNitin kan him ding;\nA rei hlanah vancung kan thleng ding;\n\nVERSE 3\nA baangmi hrangah lamzin kha remsak uhsi,\nA rei hlanah vancung kan thleng ding;\nDuhnak thinlung kha mi hmuah hnenah nei uhsi\n\nA rei hlanah vancung kan thleng ding;', 'PDF-61d2aded882576.87011131.pdf', 'PPTX-61d2aded88d359.46334803.pptx', 'PRO-61d2aded890440.86136244.pro', 200),
(12, 7, 'pathian kut sungah', 'G', 'VERSE\n\nRuun tu Bawi in keimah i hruai tikah\nReitheih zonzaih thleng hman seh ka him ding\nThlisia ti let thleng tikah i hup ding\nA kut thawmlian pi sungah\n\nA kut thawmlian pi sungah\nReithei zonzaih \nThleng hmanseh ka him ding\nA kut thawmlian pi sungah\n\nIn duhdawt ih a taangah in cawi ding\nA thlawsuah daihnak le thu tha in sim \nPathian kilvengnak in kan mah kan him\nA kut thawmlian pi sungah\n\nIn duhdawt ih a taangah in cawi ding\nA thlawsuah daihnak le thu tha in sim \nPathian kilvengnak in kan mah kan him\nA kut thawmlian pi sungah\n\nIn duhdawt ih a taangah in cawi ding\nA thlawsuah daihnak le thu tha in sim \nPathian kilvengnak in kan mah kan him\nA kut thawmlian pi sungah\n\nA kut thawmlian pi sungah\nReithei zonzaih \nThleng hmanseh ka him ding\nA kut thawmlian pi sungah\n\nKan thlarau taan lo in a kilkhawi ding \nIn duhnak thu cu dai ti um lo ding\nA tu le a kumkhua’n in kilkhawi ding\nA kut thawmlian pi sungah\n\nA kut thawmlian pi sungah\nReithei zonzaih \nThleng hmanseh ka him ding\nA kut thawmlian pi sungah\n', 'PDF-61c79abe2e12d7.26311723.pdf', 'PPTX-61c79abe2e3156.26718710.pptx', 'PRO-61c79abe2e3e84.33599046.pro', 6),
(13, 8, 'Ziangkim Ti Thei Pathian', 'G', 'VERSE\nKan feh phah in lungawinak hla sak cio uhsi\nA rei hlanah vancung kan thleng ding;\nThimnak hmuah ral in kumkhua in,\nNi a tlaang ding,\nA rei hlanah vancung kan thleng ding;\n\nCHORUS\nA can rei loin, a can rei loin\nThihnak tiva kan tan ding;\nThlisia hranak cem tikah\nKan tongaw cing ding,\nA rei hlanah vancung kan thleng ding;\n\nVERSE 2\nKan tonmi hnatuan kha zuamnak in tuan uhsi,\nA rei hlanah vancung kan thleng ding;\nPathian zaangfahnak thawm in,\nNitin kan him ding;\nA rei hlanah vancung kan thleng ding;\n\nVERSE 3\nA baangmi hrangah lamzin kha remsak uhsi,\nA rei hlanah vancung kan thleng ding;\nDuhnak thinlung kha mi hmuah hnenah nei uhsi\n\nA rei hlanah vancung kan thleng ding;', 'PDF-61c90280817557.98927701.pdf', 'PPTX-61c9028081a757.08073480.pptx', 'PRO-61c90280821870.44475593.pro', 6),
(29, 0, 'Ooooooo', 'o', 'ooooooo\r\n0000000', 'PDF-626998b24256e4.18253467.pdf', 'PPTX-626998b2447b49.09816524.pptx', 'PRO-626998b251ab03.62072015.pro', 6),
(30, 456, 'Hniang', 'G', 'hniang sin tha sin par sin', 'PDF-62699a885e73a8.55005522.pdf', 'PPTX-62699a885e9fc5.46607777.pptx', 'PRO-62699a88644d12.17955769.pro', 30),
(31, 12345, 'Ka Duh Ral Tha', 'a', 'fsfsfffsdfsf', 'PDF-627333f4047443.21349244.pdf', 'PPTX-627333f407e920.31152576.pptx', 'PRO-627333f4125e70.57665268.pro', 1),
(32, 1000, 'Nun Nem', 'C', 'G Em \r\nV1 : Siangpahrang huham in, Sunlawinak thawn thuam in  C D \r\nLeitlun kip ah thang seh, Hmun tin ah thang seh G Em \r\nPuanvar tleumawi veng in, Thimnak khal ih ṭihmi C D \r\nA ke hram ah an kuun, Ke hram ah an kuun \r\nG \r\nCHO : Mangbangza Pathian - thangṭhat uh Em \r\nMangbangza Pathian - leitlun min’n \r\nC D G \r\nThangṭhat, Mangbangza Pathian \r\nV2 : San khat hnu san khat, Caan cu a kut sungah Thawhnak le cemnetnak, Thawhnak le cemnetnak Thumkom Pathian a si, Pa, Thiangthlarau, Fapa Kiosa le Tufa, Kiosa le Tufa \r\n G Em \r\nBridge : Hmin lak ih sungbik, Thangṭhat tlak Pathian  C D G \r\nNun ni liam tiang thangṭhat sin ding \r\n G \r\n(Nang cu) Hmin lak ih sungbik \r\n Em \r\n(Nang cu) Thangṭhat tlak Pathian \r\n C D G \r\nNun ni liam tiang thangṭhat sin ding \r\n', 'PDF-627335776db872.63632092.pdf', 'PPTX-627335776e5732.32121547.pptx', 'PRO-62733577745b38.01498635.pro', 2),
(33, 1000, 'Ciam Co', 'C', 'G Em\r\n\r\nV1 : Siangpahrang huham in, Sunlawinak thawn thuam in\r\n\r\nC D\r\nLeitlun kip ah thang seh, Hmun tin ah thang seh\r\nG Em\r\nPuanvar tleumawi veng in, Thimnak khal ih ṭihmi\r\nC D\r\nA ke hram ah an kuun, Ke hram ah an kuun\r\nG\r\n\r\nCHO : Mangbangza Pathian - thangṭhat uh\r\n\r\nEm\r\nMangbangza Pathian - leitlun min’n\r\nC D G\r\nThangṭhat, Mangbangza Pathian\r\n\r\nV2 : San khat hnu san khat, Caan cu a kut sungah\r\nThawhnak le cemnetnak, Thawhnak le cemnetnak\r\nThumkom Pathian a si, Pa, Thiangthlarau, Fapa\r\nKiosa le Tufa, Kiosa le Tufa\r\nG Em\r\n\r\nBridge : Hmin lak ih sungbik, Thangṭhat tlak Pathian\r\n\r\nC D G\r\nNun ni liam tiang thangṭhat sin ding\r\nG\r\n(Nang cu) Hmin lak ih sungbik\r\nEm\r\n(Nang cu) Thangṭhat tlak Pathian\r\nC D G\r\nNun ni liam tiang thangṭhat sin ding', 'PDF-627335cadc8132.98301861.pdf', 'PPTX-627335cadcc7e2.04905486.pptx', 'PRO-627335cae52268.66994921.pro', 1),
(34, 1000, 'Miang Mo', 'G', 'G Em\r\n\r\nV1 : Siangpahrang huham in, Sunlawinak thawn thuam in\r\n\r\nC D\r\nLeitlun kip ah thang seh, Hmun tin ah thang seh\r\nG Em\r\nPuanvar tleumawi veng in, Thimnak khal ih ṭihmi\r\nC D\r\nA ke hram ah an kuun, Ke hram ah an kuun\r\nG\r\n\r\nCHO : Mangbangza Pathian - thangṭhat uh\r\n\r\nEm\r\nMangbangza Pathian - leitlun min’n\r\nC D G\r\nThangṭhat, Mangbangza Pathian\r\n\r\nV2 : San khat hnu san khat, Caan cu a kut sungah\r\nThawhnak le cemnetnak, Thawhnak le cemnetnak\r\nThumkom Pathian a si, Pa, Thiangthlarau, Fapa\r\nKiosa le Tufa, Kiosa le Tufa\r\nG Em\r\n\r\nBridge : Hmin lak ih sungbik, Thangṭhat tlak Pathian\r\n\r\nC D G\r\nNun ni liam tiang thangṭhat sin ding\r\nG\r\n(Nang cu) Hmin lak ih sungbik\r\nEm\r\n(Nang cu) Thangṭhat tlak Pathian\r\nC D G\r\nNun ni liam tiang thangṭhat sin ding', 'PDF-6273360d85dda3.89101459.pdf', 'PPTX-6273360d869d38.45660202.pptx', 'PRO-6273360d8f5643.09375689.pro', 0),
(35, 1000, 'Siam So', 'G', 'G                                                Em\r\n\r\nV1 : Siangpahrang huham in[G], Sunlawinak thawn thuam in\r\n\r\nC                                         D\r\nLeitlun kip ah thang seh, Hmun tin ah thang seh\r\nG Em\r\nPuanvar tleumawi veng in, Thimnak khal ih ṭihmi\r\nC D\r\nA ke hram ah an kuun, Ke hram ah an kuun\r\nG\r\n\r\nCHO : Mangbangza Pathian - thangṭhat uh\r\n\r\nEm\r\nMangbangza Pathian - leitlun min’n\r\nC D G\r\nThangṭhat, Mangbangza Pathian\r\n\r\nV2 : San khat hnu san khat, Caan cu a kut sungah\r\nThawhnak le cemnetnak, Thawhnak le cemnetnak\r\nThumkom Pathian a si, Pa, Thiangthlarau, Fapa\r\nKiosa le Tufa, Kiosa le Tufa\r\nG Em\r\n\r\nBridge : Hmin lak ih sungbik, Thangṭhat tlak Pathian\r\n\r\nC D G\r\nNun ni liam tiang thangṭhat sin ding\r\nG\r\n(Nang cu) Hmin lak ih sungbik\r\nEm\r\n(Nang cu) Thangṭhat tlak Pathian\r\nC D G\r\nNun ni liam tiang thangṭhat sin ding', 'PDF-6273364e4b6873.00842120.pdf', 'PPTX-6273364e4b8bd8.12008592.pptx', 'PRO-6273364e52e373.55291017.pro', 0),
(36, 30303, 'Hum Pi', 'G', '                  G                                    Em\r\nV1 : Siangpahrang huham in, Sunlawinak thawn thuam in\r\nC D\r\nLeitlun kip ah thang seh, Hmun tin ah thang seh\r\nG Em\r\nPuanvar tleumawi veng in, Thimnak khal ih ṭihmi\r\nC D\r\nA ke hram ah an kuun, Ke hram ah an kuun\r\nG\r\n\r\nCHO : Mangbangza Pathian - thangṭhat uh\r\n\r\nEm\r\nMangbangza Pathian - leitlun min’n\r\nC D G\r\nThangṭhat, Mangbangza Pathian\r\n\r\nV2 : San khat hnu san khat, Caan cu a kut sungah\r\nThawhnak le cemnetnak, Thawhnak le cemnetnak\r\nThumkom Pathian a si, Pa, Thiangthlarau, Fapa\r\nKiosa le Tufa, Kiosa le Tufa\r\nG Em\r\n\r\nBridge : Hmin lak ih sungbik, Thangṭhat tlak Pathian\r\n\r\nC D G\r\nNun ni liam tiang thangṭhat sin ding\r\nG\r\n(Nang cu) Hmin lak ih sungbik\r\nEm\r\n(Nang cu) Thangṭhat tlak Pathian\r\nC D G\r\nNun ni liam tiang thangṭhat sin ding', 'PDF-6273392659c3a2.34385389.pdf', 'PPTX-627339265a1588.50027664.pptx', 'PRO-62733926654734.21534907.pro', 0),
(37, 100000, 'Ase ', 'C', 'NA RI LE\r\nC                   C7\r\nNa mit men mawi\r\nC              G\r\nNa an ka thlum \r\n\r\nF              G\r\nNa hawi komthiam \r\nDm          A#\r\nNa hmel ṭha zia \r\nBb          [A#]        \r\nKa thei , Nan in \r\n\r\nCho:\r\n(Na ri le in phone \r\nIn thlun hlah )2\r\nA cangthei lo kei cu ...\r\nna ri hnu in call hlah \r\n\r\nNang hrang lengdawh\r\nAn har lo \r\nKahrang nuncan\r\na thupi\r\n\r\nI thei , na thu si \r\n\r\nRap \r\n\r\nA ngaingai ah cun\r\nKa zahzum ruang ih\r\nSim ngam lo ruang ih\r\nIn mi a si \r\nA ngaingai ah cun \r\n\r\nA ngaingai ah cun \r\nNa duhdawtnak \r\nIn hlan ah cun\r\nI zum aw\r\nZiang kim ziang hmuah hi na hrang ah', 'PDF-62733a1ee17959.41153290.pdf', 'PPTX-62733a1ee21f75.18462062.pptx', 'PRO-62733a1ee7eb41.10908293.pro', 0),
(38, 100000, 'Na Ri Le', 'C', 'NA RI LE\r\n\r\nC                   C7\r\nNa mit men mawi\r\nC              G\r\nNa an ka thlum \r\n\r\nF              G\r\nNa hawi komthiam \r\nDm          A#\r\nNa hmel ṭha zia \r\nBb          [A#]        \r\nKa thei , Nan in \r\n\r\nCho:\r\n(Na ri le in phone \r\nIn thlun hlah )2\r\nA cangthei lo kei cu ...\r\nna ri hnu in call hlah \r\n\r\nNang hrang lengdawh\r\nAn har lo \r\nKahrang nuncan\r\na thupi\r\n\r\nI thei , na thu si \r\n\r\nRap \r\n\r\nA ngaingai ah cun\r\nKa zahzum ruang ih\r\nSim ngam lo ruang ih\r\nIn mi a si \r\nA ngaingai ah cun \r\n\r\nA ngaingai ah cun \r\nNa duhdawtnak \r\nIn hlan ah cun\r\nI zum aw\r\nZiang kim ziang hmuah hi na hrang ah', 'PDF-62733a926a2f79.28639280.pdf', 'PPTX-62733a926b3923.17432221.pptx', 'PRO-62733a9273c291.47824090.pro', 0),
(39, 100000, 'Mang Pi', 'C', '       C              G                 Am          F\r\nWhen I find myself in times of trouble, Mother Mary comes to me\r\nC                 G              F   C/E   Dm   C\r\nSpeaking words of wisdom, let it be\r\n\r\n    C             G                Am                F\r\nAnd in my hour of darkness, She is standing right in front of me\r\nC                 G              F   C/E   Dm   C\r\nSpeaking words of wisdom, let it be\r\n\r\n       Am         G          F          C\r\nLet it be, let it be, let it be, let it be\r\n                 G              F   C/E   Dm   C\r\nWhisper words of wisdom, let it be\r\n', 'PDF-62733ae8a0dd35.23842397.pdf', 'PPTX-62733ae8a119a5.15117559.pptx', 'PRO-62733ae8aa3c73.87070977.pro', 2),
(40, 100000, 'Si Si ', 'E', '       C              G                 Am          F\r\nWhen I find myself in times of trouble, Mother Mary comes to me\r\nC                 G              F   C/E   Dm   C\r\nSpeaking words of wisdom, let it be\r\n\r\n    C             G                Am                F\r\nAnd in my hour of darkness, She is standing right in front of me\r\nC                 G              F   C/E   Dm   C\r\nSpeaking words of wisdom, let it be\r\n\r\n       Am         G          F          C\r\nLet it be, let it be, let it be, let it be\r\n                 G              F   C/E   Dm   C\r\nWhisper words of wisdom, let it be\r\n', 'PDF-62733e9a4565b5.51573877.pdf', 'PPTX-62733e9a4663b5.20151942.pptx', 'PRO-62733e9a4ce393.38223629.pro', 1),
(41, 456, 'Reasons', 'G', 'no no no', 'PDF-62736783d55d33.22757312.pdf', 'PPTX-62736783d673e8.35525823.pptx', 'PRO-62736783df4120.94825768.pro', 3),
(42, 123, 'T', 'T', ' F              C                 Dm          A#\r\nWhen I find myself in times of trouble, Mother Mary comes to me\r\nF                 C              A#  F/A   Gm   F\r\nSpeaking words of wisdom, let it be\r\n\r\n    F             C                Dm                A#\r\nAnd in my hour of darkness, She is standing right in front of me\r\nF                 C              A#  F/A   Gm   F\r\nSpeaking words of wisdom, let it be\r\n\r\n       Dm         C          A#         F\r\nLet it be, let it be, let it be, let it be\r\n                 C              A#  F/A   Gm   F\r\nWhisper words of wisdom, let it be', 'PDF-6274202c7726e5.88001084.pdf', 'PPTX-6274202c777096.53632871.pptx', 'PRO-6274202c81d7a8.22638454.pro', 2),
(43, 123, 'Ṭ', 'F', ' F              C                 Dm          A#\r\nWhen I find myself in times of trouble, Mother Mary comes to me\r\nF                 C              A#  F/A   Gm   F\r\nSpeaking wordBridge\r\n[F]   Halle[C]lujah, Mara[G]natha\r\nWorthy [Am]is the [F]lamb \r\nGlory, gl[C]ory in the [G]highest\r\nThe Beginning and the [Am]End\r\n[F]   Halle[C]lu - jah, Mara - [G]natha\r\nHoly [Am]is the [F]Lord\r\nWith all the [C]angels\r\nAnd all of [G]Heaven \r\nBowing down before [F]You\r\n\r\n[F]   Halle[C]lujah, Mara[G]natha\r\nWorthy [Am]is the [F]lamb \r\nGlory, gl[C]ory in the [G]highest\r\nThe Beginning and the [Am]End\r\n[F]   Halle[C]lujah, Mara[G]natha\r\nHoly [Am]is the [F]Lord\r\nWith all the [C]angels\r\nAnd all of [G]Heaven \r\nBowing down before [C]Yous of wisdom, let it be\r\n\r\n    F             C                Dm                A#\r\nAnd in my hour of darkness, She is standing right in front of me\r\nF                 C              A#  F/A   Gm   F\r\nSpeaking words of wisdom, let it be\r\n\r\n       Dm         C          A#         F\r\nLet it be, let it be, let it be, let it be\r\n                 C              A#  F/A   Gm   F\r\nWhisper words of wisdom, let it be', 'PDF-627420f399d851.03764654.pdf', 'PPTX-627420f399fa87.13540026.pptx', 'PRO-627420f39f3928.76819746.pro', 0),
(44, 123, 'Tt', 'F', ' F              C                 Dm          A#\r\nWhen I find myself in times of trouble, Mother Mary comes to me\r\nF                 C              A#  F/A   Gm   F\r\nSpeaking wordBridge\r\n[F]   Halle[C]lujah, Mara[G]natha\r\nWorthy [Am]is the [F]lamb \r\nGlory, gl[C]ory in the [G]highest\r\nThe Beginning and the [Am]End\r\n[F]   Halle[C]lu - jah, Mara - [G]natha\r\nHoly [Am]is the [F]Lord\r\nWith all the [C]angels\r\nAnd all of [G]Heaven \r\nBowing down before [F]You\r\n\r\n[F]   Halle[C]lujah, Mara[G]natha\r\nWorthy [Am]is the [F]lamb \r\nGlory, gl[C]ory in the [G]highest\r\nThe Beginning and the [Am]End\r\n[F]   Halle[C]lujah, Mara[G]natha\r\nHoly [Am]is the [F]Lord\r\nWith all the [C]angels\r\nAnd all of [G]Heaven \r\nBowing down before [C]Yous of wisdom, let it be\r\n\r\n    F             C                Dm                A#\r\nAnd in my hour of darkness, She is standing right in front of me\r\nF                 C              A#  F/A   Gm   F\r\nSpeaking words of wisdom, let it be\r\n\r\n       Dm         C          A#         F\r\nLet it be, let it be, let it be, let it be\r\n                 C              A#  F/A   Gm   F\r\nWhisper words of wisdom, let it be', 'PDF-6274211328b493.71765895.pdf', 'PPTX-6274211328dc56.53607194.pptx', 'PRO-627421132f2bd2.71732290.pro', 1),
(45, 123, 'Tt', 'F', '\r\n C                F              G\r\nBawipa thangthat nitin in\r\n\r\nG             C                    F\r\nNitin in Bawipa Thangthat\r\n\r\nC              F                     G\r\nSimding rel ding ka nei lo\r\n\r\nC               F                G\r\nNitin in bawipa thang that', 'PDF-627421ed7d4625.31592421.pdf', 'PPTX-627421ed7d72d5.28787569.pptx', 'PRO-627421ed847029.77838058.pro', 0),
(46, 123, 'Ff', 'F', '\r\n C                F              G\r\nBawipa thangthat nitin in\r\n\r\nG             C                    F\r\nNitin in Bawipa Thangthat\r\n\r\nC              F                     G\r\nSimding rel ding ka nei lo\r\n\r\nC               F                G\r\nNitin in bawipa thang that', 'PDF-627421fee25bb4.82511317.pdf', 'PPTX-627421fee38e91.06358808.pptx', 'PRO-627421feed2cf9.76143851.pro', 0);

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
(1, 'mangpi77', 'Mang', 'Pi', 'Mangpi77@gmail.com', '0b6821eec0d930cd8367a0e50b6e8b46', '2021-10-16 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(2, 'test1', 'Testing', 'Testing', 'Tester@gmail.com', '0b6821eec0d930cd8367a0e50b6e8b46', '2022-04-21 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(3, 'tenglam', 'Teng', 'Lam', 'Tenglam@gmail.com', '0b6821eec0d930cd8367a0e50b6e8b46', '2022-04-22 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(4, 'salai', 'Salai', 'Mang', 'Salai@gmail.com', '0b6821eec0d930cd8367a0e50b6e8b46', '2022-04-22 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(5, 'testing123', 'Tester', 'Tester', 'Test@gmail.com', '0b6821eec0d930cd8367a0e50b6e8b46', '2022-04-22 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(6, 'testuser', 'Usertest', 'Test', 'Testuser@gmail.com', '0b6821eec0d930cd8367a0e50b6e8b46', '2022-04-22 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(7, 'user3', 'User3', 'User3', 'User3@gmail.com', '0b6821eec0d930cd8367a0e50b6e8b46', '2022-04-22 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(8, 'dthang317@gmail.com', 'Daniel', 'Thang', 'Dthang317@gmail.com', 'e619112b801e651301894fd8718fe3be', '2022-04-26 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(9, 'admin', 'Admin', 'Admin', 'Info@cbana.us', 'bf90c3beec516d0437979ba86f2b6303', '2022-04-28 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(10, 'songbook', 'Song', 'Book', 'Youth@cbana.us', '144420c09d3ec669ebe9812b8033d1ff', '2022-05-04 00:00:00', 'assets/images/profile-pics/head_emerald.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hymn`
--
ALTER TABLE `hymn`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `hymn` ADD FULLTEXT KEY `title` (`title`);
ALTER TABLE `hymn` ADD FULLTEXT KEY `lyrics` (`lyrics`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `song` ADD FULLTEXT KEY `title` (`title`);
ALTER TABLE `song` ADD FULLTEXT KEY `lyrics` (`lyrics`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hymn`
--
ALTER TABLE `hymn`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
