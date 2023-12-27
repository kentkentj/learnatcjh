-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 10:49 PM
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
-- Table structure for table `tbl_announcement`
--

CREATE TABLE `tbl_announcement` (
  `announcement_id` int(20) NOT NULL,
  `announcement_name` varchar(50) NOT NULL,
  `announcement_description` text NOT NULL,
  `course_id` int(10) NOT NULL,
  `announcement_date` varchar(50) NOT NULL,
  `announcement_time` varchar(50) NOT NULL,
  `announcement_from` varchar(20) NOT NULL,
  `announcement_to` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_announcement`
--

INSERT INTO `tbl_announcement` (`announcement_id`, `announcement_name`, `announcement_description`, `course_id`, `announcement_date`, `announcement_time`, `announcement_from`, `announcement_to`) VALUES
(3, 'BFP', 'The six-day BFP Skills Inventory Training undertaken by the PPSA SANDIGMANLAYA Class of 2024 has been concluded today, July 25, 2022, at the National Fire Training Institute (NFTI) with a Field Training Exercise (FTX).\r\n\r\nThe FTX was a combination of the skills acquired from Basic Rope and Rescue Training (BRRT), Emergency Medical Response (EMR), and Firefighting and Rescue Training taught by NFTI Skills Instructors.\r\n\r\nThese trainings served as a refresher course for the Fire Cadets and a crash course for the Jail Cadets that enabled them to know better the nature of work of the Bureau of Fire Protection and develop their decision-making skills during untoward incidents, which is essential in being a leader.\r\n\r\nSafety, Sureness, and Simplicity—these three ‘S’ in rescue operations weighted more to the cadets when saving lives and protecting properties.', 2, '2023-09-09', '03:09', '2023-09-12', '2023-09-14'),
(5, 'BFP', 'Please Attend all members of this department', 4, '2023-09-16', '01:09', '2023-09-18', '2023-09-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  ADD PRIMARY KEY (`announcement_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_announcement`
--
ALTER TABLE `tbl_announcement`
  MODIFY `announcement_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
