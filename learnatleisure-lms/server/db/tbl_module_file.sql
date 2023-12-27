-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 10:50 PM
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
-- Table structure for table `tbl_module_file`
--

CREATE TABLE `tbl_module_file` (
  `module_file_id` int(20) NOT NULL,
  `course_id` int(20) NOT NULL,
  `module_file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `file_size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_module_file`
--

INSERT INTO `tbl_module_file` (`module_file_id`, `course_id`, `module_file_name`, `file_type`, `date_created`, `file_size`) VALUES
(12, 4, 'EO23-130- 09.14 - EVENT ORDER - EXCELIFE HEALTH SOLUTIONS INC..pdf', 'pdf', '09-15-2023', '250466'),
(16, 4, 'hk_1232132313.mp4', 'mp4', '10-30-2023', '39416345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_module_file`
--
ALTER TABLE `tbl_module_file`
  ADD PRIMARY KEY (`module_file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_module_file`
--
ALTER TABLE `tbl_module_file`
  MODIFY `module_file_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
