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
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `employee_id` int(100) NOT NULL,
  `employee_username` varchar(255) NOT NULL,
  `employee_mobile_number` varchar(50) NOT NULL,
  `employee_email` varchar(255) NOT NULL,
  `employee_password` varchar(255) NOT NULL,
  `employee_first_name` varchar(50) NOT NULL,
  `employee_last_name` varchar(50) NOT NULL,
  `employee_middle_name` varchar(20) NOT NULL,
  `employee_suffix` varchar(20) NOT NULL,
  `employee_job_title` varchar(50) NOT NULL,
  `department_id` int(20) NOT NULL,
  `employee_baguio_address` varchar(50) NOT NULL,
  `employee_present_address` varchar(50) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `account_status` varchar(20) NOT NULL,
  `property` varchar(50) NOT NULL,
  `employee_date_started` varchar(100) NOT NULL,
  `employment_status` varchar(100) NOT NULL,
  `birth_date` varchar(100) NOT NULL,
  `civil_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`employee_id`, `employee_username`, `employee_mobile_number`, `employee_email`, `employee_password`, `employee_first_name`, `employee_last_name`, `employee_middle_name`, `employee_suffix`, `employee_job_title`, `department_id`, `employee_baguio_address`, `employee_present_address`, `account_type`, `account_status`, `property`, `employee_date_started`, `employment_status`, `birth_date`, `civil_status`) VALUES
(9, 'kpc', '0975468732', 'kent.cabatuan@campjohnhay.ph', '$2y$10$zPjmrUV7MxTs3NGCjgsRc.Z6XL.VMbmdIwRqRUGEAKhicmqeUZ2z6', 'kent', 'cabatuan', 'peralta', '', 'IT ASSISTANT', 13, 'upper. gen luna', 'agno, pangasinan', 'administrator', 'active', 'manor', '2022-10-29', 'Rank/File', '2000-09-06', 'single'),
(10, 'root', '093243231', 'mis@email.com', '$2y$10$EJ1PLA0EMX2QXeSL6RfHAezsbZOiJuHDN.9/9UON7T0r7XqA/5qAi', 'mis', 'department', '', '', 'MIS DEPARTMENT', 13, '', '', 'administrator', 'active', 'manor', '', '', '', ''),
(11, 'dau', '092600779151', 'dau@email.com', '$2y$10$rLX5mnN/Iun4pDQOp2M4bebdc5BsOP1QOg6gvvjsJ1Xr2uJf3WMOa', 'desserei', 'ubassa', '', '', 'IT ASSISTANT', 13, '', '', 'user', 'active', 'manor', '2022-11-07', 'Supervisor', '2000-10-12', 'single'),
(14, 'faith.magsino', '0932313244', 'faithmagsino@gmail.com', '$2y$10$mb9qGmIS8thmCFOQv5bF1uOIEqfM01epXVzkS2FQwtIMBokaD62mm', 'Faith', 'Magsino', '', '', 'Training and Development Manager', 13, '', '', 'instructor', 'active', 'manor', '2017-06-01', 'Managers/Assistant Managers', '1986-06-11', 'married');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
