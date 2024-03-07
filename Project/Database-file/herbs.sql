-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 04:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `heading`, `des`, `Status`) VALUES
(17, 'mahesh', 'choiudahryl', 'lkjfdlks', 1);

-- --------------------------------------------------------

--
-- Table structure for table `addaboutpage`
--

CREATE TABLE `addaboutpage` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `heading` text NOT NULL,
  `des` text NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addaboutpage`
--

INSERT INTO `addaboutpage` (`id`, `title`, `heading`, `des`, `Status`) VALUES
(3, 'mahesh', 'mahesh', 'dslfjlk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `certifacte`
--

CREATE TABLE `certifacte` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drypageitem`
--

CREATE TABLE `drypageitem` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `imgname` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmerdetail`
--

CREATE TABLE `farmerdetail` (
  `id` int(11) NOT NULL,
  `ICSname` text NOT NULL,
  `STATE` varchar(100) NOT NULL,
  `FARMER` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grainspageitem`
--

CREATE TABLE `grainspageitem` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `imgname` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `herbspageitem`
--

CREATE TABLE `herbspageitem` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `imgname` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `herbspageitem`
--

INSERT INTO `herbspageitem` (`id`, `title`, `imgname`, `status`) VALUES
(7, 'nuts', '23-10-031696308793extation-imgae-download (2).webp', 1),
(8, 'Fruts', '23-10-031696308812extation-imgae-download (7).jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `homeherbs`
--

CREATE TABLE `homeherbs` (
  `id` int(11) NOT NULL,
  `imgtitle` varchar(255) NOT NULL,
  `imgname` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homespices`
--

CREATE TABLE `homespices` (
  `id` int(11) NOT NULL,
  `imgtitle` varchar(255) NOT NULL,
  `imgname` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homespices`
--

INSERT INTO `homespices` (`id`, `imgtitle`, `imgname`, `status`) VALUES
(4, 'Herbs', '23-10-011696168938dry (1).webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `indiamap`
--

CREATE TABLE `indiamap` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `Links` varchar(255) NOT NULL,
  `Mapimgname` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `li` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `li`, `status`) VALUES
(2, 'ABOUT', 1),
(3, 'HERBS', 1),
(4, 'SPICES', 1),
(5, 'GRAINS/PULES', 1),
(6, 'OTHERS', 1),
(7, 'OUR FARMERSGROUP', 1),
(8, 'OUR CERTIFICATES', 1),
(10, 'CONTACT US', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oilpageitem`
--

CREATE TABLE `oilpageitem` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `imgname` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ourcertificatespage`
--

CREATE TABLE `ourcertificatespage` (
  `id` int(11) NOT NULL,
  `imgtitle` varchar(100) NOT NULL,
  `imgname` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productslider`
--

CREATE TABLE `productslider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ImageName` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productslider`
--

INSERT INTO `productslider` (`id`, `title`, `ImageName`, `status`) VALUES
(21, 'wqds', '23-10-0116961482461671123007Grains_Pulses.webp', 1),
(22, 'santohs', '23-10-0116961482591671123007Grains_Pulses.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quickcontact`
--

CREATE TABLE `quickcontact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quickcontact`
--

INSERT INTO `quickcontact` (`id`, `name`, `address`, `message`) VALUES
(1, 'SAF', 'maheshchoudahry@gmail.com', 'SFDSF'),
(2, 'SAF', 'maheshchoudahry@gmail.com', 'SFDSF'),
(3, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `imgname` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `title1` text NOT NULL,
  `title2` text NOT NULL,
  `btn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `imgname`, `status`, `title1`, `title2`, `btn`) VALUES
(27, '23-10-011696143659slide2.webp', 1, 'Hers & Spices directly from our Farms', 'Farm Fresh', 'Get Free Samples');

-- --------------------------------------------------------

--
-- Table structure for table `spicespageitem`
--

CREATE TABLE `spicespageitem` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `imgname` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spicespageitem`
--

INSERT INTO `spicespageitem` (`id`, `title`, `imgname`, `status`) VALUES
(3, 'Grains', '23-10-031696308886extation-imgae-download (11).jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vegetablespageitem`
--

CREATE TABLE `vegetablespageitem` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `imgname` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addaboutpage`
--
ALTER TABLE `addaboutpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certifacte`
--
ALTER TABLE `certifacte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drypageitem`
--
ALTER TABLE `drypageitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmerdetail`
--
ALTER TABLE `farmerdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grainspageitem`
--
ALTER TABLE `grainspageitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbspageitem`
--
ALTER TABLE `herbspageitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homeherbs`
--
ALTER TABLE `homeherbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homespices`
--
ALTER TABLE `homespices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indiamap`
--
ALTER TABLE `indiamap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oilpageitem`
--
ALTER TABLE `oilpageitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourcertificatespage`
--
ALTER TABLE `ourcertificatespage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productslider`
--
ALTER TABLE `productslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quickcontact`
--
ALTER TABLE `quickcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `spicespageitem`
--
ALTER TABLE `spicespageitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vegetablespageitem`
--
ALTER TABLE `vegetablespageitem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `addaboutpage`
--
ALTER TABLE `addaboutpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `certifacte`
--
ALTER TABLE `certifacte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `drypageitem`
--
ALTER TABLE `drypageitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `farmerdetail`
--
ALTER TABLE `farmerdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grainspageitem`
--
ALTER TABLE `grainspageitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `herbspageitem`
--
ALTER TABLE `herbspageitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `homeherbs`
--
ALTER TABLE `homeherbs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `homespices`
--
ALTER TABLE `homespices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `indiamap`
--
ALTER TABLE `indiamap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oilpageitem`
--
ALTER TABLE `oilpageitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ourcertificatespage`
--
ALTER TABLE `ourcertificatespage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `productslider`
--
ALTER TABLE `productslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `quickcontact`
--
ALTER TABLE `quickcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `spicespageitem`
--
ALTER TABLE `spicespageitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vegetablespageitem`
--
ALTER TABLE `vegetablespageitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
