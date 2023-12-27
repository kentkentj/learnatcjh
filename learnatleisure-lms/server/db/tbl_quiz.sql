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
-- Table structure for table `tbl_quiz`
--

CREATE TABLE `tbl_quiz` (
  `question_id` int(20) NOT NULL,
  `module_content_id` int(20) NOT NULL,
  `module_id` int(20) NOT NULL,
  `course_id` int(20) NOT NULL,
  `question_description` text NOT NULL,
  `question_option_1` text NOT NULL,
  `question_option_2` text NOT NULL,
  `question_option_3` text NOT NULL,
  `question_option_4` text NOT NULL,
  `question_correct_answer` text NOT NULL,
  `question_points` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_quiz`
--

INSERT INTO `tbl_quiz` (`question_id`, `module_content_id`, `module_id`, `course_id`, `question_description`, `question_option_1`, `question_option_2`, `question_option_3`, `question_option_4`, `question_correct_answer`, `question_points`) VALUES
(12, 49, 0, 4, 'The Manor is _____ star hotel', '4 star', '5 star', '9 star', '3 star', '4 star', 1),
(21, 49, 0, 4, 'Where The Manor was located?', 'Baguio City', 'La Union', 'Pangasinan', 'Ilocos', 'Baguio City', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  ADD PRIMARY KEY (`question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  MODIFY `question_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
