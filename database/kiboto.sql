-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2024 at 09:16 AM
-- Server version: 11.4.2-MariaDB
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiboto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`) VALUES
(1, 'Faustin', 'faustin@gmail.com', 'F@2024');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `telephone`, `email`, `message`) VALUES
(1, 'Joseph', '0783435918', 'manjoe240@gmai.com', 'How are you!'),
(2, 'Peter', '0783435920', 'gadrawingz@gmail.com', 'Hello my people!'),
(3, 'Karenzi', '07855356', 'karenzi4@gmail.com', 'Hello ntuye Burera mwamfasha'),
(4, 'Felix', '0783435922', 'felix@gmail.com', 'Your house is made up of many things, known as building materials. Whether you plan to construct your own house or want to keep it well-maintained for a long time, you should be fully aware of the building materials required for the same. Keeping these things in mind, we have listed here some of the commonly used building materials in construction for your reference. (Waiting to be edited)');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(10) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `deriverables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `member_id` int(10) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_role` varchar(200) NOT NULL,
  `description` varchar(240) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`member_id`, `member_name`, `member_role`, `description`, `picture`) VALUES
(1, 'Eng.DUHIMBAZE FAUSTIN', 'Chairperson/ Managing Director', 'Specialist in civil Engineering.', '8.jpg'),
(2, 'Eng. UBWIRWINEZA Jean Baptiste', 'Technical Director', 'Specialist in civil Engineering.', 'team1.png'),
(3, 'Mrs.UWAMAHORO CALMEN', 'Chief Finance Officer', 'Specialist in Business Management.', 'team1.png'),
(4, 'Eng.IRADUKUNDA Jean Pierre', 'Building Construction Engineer Officer', 'Specialist in civil Engineering.', 'team1.png'),
(5, 'Eng.GIRAMATA GLORIA', 'Raod & Bridge Construction Engineer Officer', 'Specialist in highway & railway Engineering.', 'team1.png'),
(6, 'Mr.RUTARINDWA Jean Pierre', 'IT Engineer', 'Specialist in Information Tech.', 'team1.png'),
(7, 'Eng.RUGAMBWA Jonathan', 'Projects Coordinator', 'Specialist in Civil Engineering.', 'team1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
