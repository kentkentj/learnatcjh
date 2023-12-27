-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 10:51 PM
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
-- Database: `cjh_leisure_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_noticeboard`
--

CREATE TABLE `tbl_noticeboard` (
  `noticeboard_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `noticeboard_headline` varchar(50) NOT NULL,
  `noticeboard_caption` text NOT NULL,
  `noticeboard_from_date` varchar(50) NOT NULL,
  `noticeboard_to_date` varchar(50) NOT NULL,
  `noticeboard_from_time` varchar(50) NOT NULL,
  `noticeboard_to_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_noticeboard`
--

INSERT INTO `tbl_noticeboard` (`noticeboard_id`, `user_id`, `noticeboard_headline`, `noticeboard_caption`, `noticeboard_from_date`, `noticeboard_to_date`, `noticeboard_from_time`, `noticeboard_to_time`) VALUES
(4, 9, 'Earthquake Drill', 'An earthquake drill is one set of simulated emergency circumstances designed to test the ability of school members to make the most appropriate decisions to ensure their safety. The school members should understand the emergency response plan sufficiently in order to react appropriately during the drill.', '2023-09-02', '2023-09-04', '07:30', '17:00'),
(5, 10, 'SO1 Training', 'BOSH for SO1 is an 8-hour OSH orientation plus 2-hour Training of Trainers designed to impart knowledge and skills on basic concepts and principles of occupational safety and health to enable potential safety officers (SO1-certification) to implement their respective company’s safety and health program.', '2023-09-15', '2023-09-18', '08:30', '17:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_noticeboard`
--
ALTER TABLE `tbl_noticeboard`
  ADD PRIMARY KEY (`noticeboard_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_noticeboard`
--
ALTER TABLE `tbl_noticeboard`
  MODIFY `noticeboard_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
