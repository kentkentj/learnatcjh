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
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(20) NOT NULL,
  `author_id` int(20) NOT NULL,
  `department_id` int(20) NOT NULL,
  `news_headline` varchar(50) NOT NULL,
  `news_description` longtext NOT NULL,
  `news_date` varchar(50) NOT NULL,
  `new_save_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `author_id`, `department_id`, `news_headline`, `news_description`, `news_date`, `new_save_status`) VALUES
(4, 9, 13, 'BFP TRAINIG IN CAP', '                                                        The Department of the Interior and Local Government (DILG) today said that professionals engaged in the design, construction, and maintenance of fire safety systems and other related services should first secure a Certificate of Competency (COC) from the Bureau of Fire Protection (BFP) before they are allowed to engage in such services pursuant to relevant laws and issuances on fire safety.\r\n\r\nAt the same time, DILG Secretary Eduardo M. Año directed the BFP to ensure that only qualified fire safety practitioners (FSPs) who have undergone the required mandatory training program from a Fire Safety Practitioner Training Organization (FSPTO) and submitted the documentary requirements are issued with COCs in accordance with the Department’s guidelines in the issuance of COCs.\r\n\r\n“Fire safety is a matter of life and death for the victim, and we want to ensure that we have the right and competent people on top of this whether in private or public buildings, establishments, or facilities. Hence, the BFP must exercise due diligence in the issuance of COCs for fire safety professionals,” he said.\r\n\r\nSection 6.0.3.1 of the Revised Implementing Rules and Regulations (RIRR) of Republic Act (RA) No. 9514 or the Fire Code of the Philippines provides that a COC shall be issued to fire volunteers, fire volunteer organizations, and FSPs, except for company fire brigades after completion of mandatory training and evaluation conducted by the BFP and upon submission of the required documents.\r\n\r\nIn DILG Memorandum Circular (MC) No. 2022-072, Año said any licensed professional such as architects, civil, mechanical, electrical, and sanitary engineers, engaged in, but not limited to, design, construction, installation, repair and maintenance, assessment, and rehabilitation of fire safety construction, suppression and control systems, protective and warning systems, and life safety-related services are required to secure a COC from the BFP Chief before engaging in such work.\r\n\r\nHe said the BFP can only grant COC to FSPs who satisfactorily complied with the requirements such as the completion of 48 hours of mandatory training conducted by the Fire Safety Practitioner Training Organization (FSPTO) on passive and active fire protection such as protection of vertical opening and combustible concealed spaces, fire stopping, and automatic fire suppression system, among others.\r\n\r\nFSPs must likewise pass the evaluation on the submitted Fire Safety Compliance Report (FSCR) or Fire Safety Compliance and Commissioning Report (FSCCR), and submit pertinent documents such as a computerized duly accomplished form with an attached passport-sized photo; certified true copy, or authenticated copies of training certificate with an accumulated; and, valid Professional Identification Card (PRC license) authenticated by the Professional Regulatory Commission, among others.\r\n\r\nOn the other hand, the DILG Secretary said professionals who have distinguished themselves in the practice of fire safety engineering may be provided equivalency as to the required training, provided that they submit the required documents such as certificates of good and operational conditions of the projects.\r\n\r\n“Together with the BFP, we continue to find ways to ensure that our FSPs are competent and capable to carry out their duties because they serve as our first line of prevention responsible for making sure that every project and building proposal maintains all necessary fire protection and life safety features,” he added.\r\n\r\nAmong the responsibilities of FSPs are: to sign and certify that the design, criteria, and specifications of all safety features are appropriate to the proposed project and compliant with RA 9514 and RIRR and other applicable laws; certify that all fire protection and fire safety features indicated in FSCR for Building Permit and certify that the building complies with the fire safety requirements of RA 9514 and its RIRR; and, certify that all fire safety issues are addressed and that all required fire safety systems are installed and maintained as required under RA 9514 and its RIRR, among others.\r\n\r\nTraining for FSPTO must be approved by the BFP ensuring that the training and program adhere to the highest and internationally accepted standards on fire safety and protection.\r\n\r\nThe DILG Chief also directed through the said memorandum the creation of a Board for Issuance of Certificate of Competency (BICC) to be composed of the Director for Fire Safety and Enforcement as Chairperson, the Chief of Legal Services of the BFP-National Headquarters as Vice-Chairperson, and three other BFP Personnel with expertise in the said field, who will lead the processing of the applications and issuance of COCs to FSPs.\r\n\r\nAmong the other responsibilities of the BICC are to supervise and regulate the FSP and the FSPTO; determine and evaluate the compliance of the applicants of COC for FSP to the qualifications standards; and, to prepare and endorse the list of successful applicants for COC who pass the evaluation based on the submitted Fire Safety Compliance Report and Fire Safety Compliance and Commissioning Report, among others.\r\n\r\nThe BICC will hold an evaluation of the verified applicants monthly. Moreover, a resolution listing the names of the successful applicants will be published on the official website of the BFP.                                                      ', '2023-09-04', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
