-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 08:19 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `companymaster`
--

CREATE TABLE `companymaster` (
  `id` int(2) NOT NULL,
  `name` varchar(200) NOT NULL,
  `package` varchar(10) DEFAULT NULL,
  `job_location` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companymaster`
--

INSERT INTO `companymaster` (`id`, `name`, `package`, `job_location`) VALUES
(1, 'CTS', '4 LPA', NULL),
(2, 'RensolTech', '1.8 LPA', 'Delhi'),
(3, '24*7 Online', '3 LPA', 'Kolkata'),
(4, 'Extensia', '3.13 LPA', 'Pune'),
(5, 'AchieveX', '3LPA', 'Kolkata'),
(6, 'CloudKaptan', '4LPA', 'Kolkata'),
(7, 'TCS', '3.36LPA', 'Pan India'),
(8, 'Wipro', '3.35LPA', 'Pan India'),
(9, 'Maventic', '3.38LPA', 'Bangalore'),
(10, 'cloudkaptan', '4LPA', 'Kolkata'),
(11, 'MindTree', '3.5LPA', 'Pan India'),
(12, 'amazon', '17Lpa', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `ssignup`
--

CREATE TABLE `ssignup` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rollno` varchar(15) NOT NULL,
  `passout_year` varchar(10) NOT NULL,
  `department` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cno` varchar(15) NOT NULL,
  `refcode` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isdeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ssignup`
--

INSERT INTO `ssignup` (`id`, `name`, `rollno`, `passout_year`, `department`, `email`, `cno`, `refcode`, `password`, `isdeleted`) VALUES
(3, 'Suvojit Mondal', '15600117006', '2021', 'cse', 'suvojit.guddo@gmail.com', '8777252467', 'cse8-2021', '123456', 0),
(4, 'Tanmay Sarkar', '15600117004', '2021', 'cse', 'tanmay@gmail.com', '8758974595', 'cse8-2021', '123', 0),
(5, 'Rahit Basak', '15600117019', '2021', 'cse', 'rahit@gmail.com', '8955985596', 'cse8-2021', '12345', 0),
(6, 'Abisekh Bar', '15600117001', '2021', 'cse', 'ab@gmail.com', '6876434779', 'cse8-2021', '12345', 0),
(7, 'Sucharita Das', '15600117007', '2021', 'cse', 'sucha@gmail.com', '8985856572', 'cse8-2021', '123456', 0),
(8, 'Agniva Bijali', '15600117015', '2021', 'cse', 'agniva@gmail.com', '5265897412', 'cse8-2021', '123456', 0),
(9, 'Saptarshi Karmakar', '15600117016', '2021', 'CSE', 'saptarshikarmakar68@gmail.com', '9679813425', 'cse8-2021', '123456', 0),
(10, 'Sapta', '16', '2021', 'CSE', 'Sapta@gmail.com', '0000000000', 'cse8-2021', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_company`
--

CREATE TABLE `student_company` (
  `id_c` int(255) NOT NULL,
  `student_roll` varchar(15) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `company_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_company`
--

INSERT INTO `student_company` (`id_c`, `student_roll`, `student_name`, `company_id`) VALUES
(20, '15600117006', 'Suvojit Mondal', 6),
(22, '15600117006', 'Suvojit Mondal', 5),
(23, '15600117006', 'Suvojit Mondal', 3),
(24, '15600117004', 'Tanmay Sarkar', 1),
(31, '15600117001', 'Abisekh Bar', 11);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(255) NOT NULL,
  `student_roll` varchar(15) NOT NULL,
  `10marks` int(255) NOT NULL,
  `12marks` int(255) NOT NULL,
  `btech` int(255) NOT NULL,
  `yeargap` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `student_roll`, `10marks`, `12marks`, `btech`, `yeargap`) VALUES
(1, '15600117004', 75, 69, 75, 1),
(2, '15600117006', 45, 33, 60, 1),
(3, '15600117001', 70, 80, 75, 2),
(4, '15600117019', 85, 88, 80, 0),
(5, '15600117016', 69, 68, 70, 0),
(7, '16', 69, 68, 70, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tpologin`
--

CREATE TABLE `tpologin` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tpologin`
--

INSERT INTO `tpologin` (`id`, `name`, `email`, `phno`, `password`) VALUES
(0, 'Saptarshi Karmakar', 'saptarshikarmakar68@gmail.com', '9679813425', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_company`
--

CREATE TABLE `upcoming_company` (
  `id` int(1) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `job_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upcoming_company`
--

INSERT INTO `upcoming_company` (`id`, `name`, `package`, `job_location`) VALUES
(0, 'Capgemini', '3.8LPA', 'Kolkata');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companymaster`
--
ALTER TABLE `companymaster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssignup`
--
ALTER TABLE `ssignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_company`
--
ALTER TABLE `student_company`
  ADD PRIMARY KEY (`id_c`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tpologin`
--
ALTER TABLE `tpologin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companymaster`
--
ALTER TABLE `companymaster`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ssignup`
--
ALTER TABLE `ssignup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_company`
--
ALTER TABLE `student_company`
  MODIFY `id_c` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
