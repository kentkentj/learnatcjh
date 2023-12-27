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
-- Table structure for table `tbl_student_progress`
--

CREATE TABLE `tbl_student_progress` (
  `progress_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `department_id` int(20) NOT NULL,
  `course_id` int(20) NOT NULL,
  `student_progress_finish_date` varchar(30) NOT NULL,
  `current_progress` int(20) NOT NULL,
  `progress_status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_student_progress`
--

INSERT INTO `tbl_student_progress` (`progress_id`, `user_id`, `department_id`, `course_id`, `student_progress_finish_date`, `current_progress`, `progress_status`) VALUES
(9, 14, 10, 4, '10-31-2023', 1, 1),
(10, 11, 13, 4, '09-21-2023', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student_progress`
--
ALTER TABLE `tbl_student_progress`
  ADD PRIMARY KEY (`progress_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student_progress`
--
ALTER TABLE `tbl_student_progress`
  MODIFY `progress_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
