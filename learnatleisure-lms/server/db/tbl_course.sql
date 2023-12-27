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
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_description` text NOT NULL,
  `instructor_id` int(10) NOT NULL,
  `department_id` int(10) NOT NULL,
  `course_date` varchar(20) NOT NULL,
  `course_status` varchar(15) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `certificate_templ` varchar(255) NOT NULL,
  `property` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `course_description`, `instructor_id`, `department_id`, `course_date`, `course_status`, `cover_image`, `certificate_templ`, `property`) VALUES
(4, 'Hospitality Management Studies - Hotel Operations', '<div class=\"course-headline l-info__headline\">Get up to speed with the essential principles of hospitality management with this free online course from Alison.</div>\r\n<div class=\"course-headline l-info__headline\">&nbsp;</div>\r\n<div class=\"course-description l-info__description\"><span class=\"l-info__description-full\">This free online hospitality management course is designed to give you an insight into hotel operations. It will teach you how hotel departments work behind the scenes to provide a memorable experience to guests. You will learn about the organizational structure of a hotel, the functions of different hotel departments, and how they can work together to provide guests with an excellent hotel stay every single time.</span></div>', 14, 10, '2023-09-16', '0', '432423432342.png', 'award-of-excellence.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
