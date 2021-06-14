-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 03:20 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `tlb_student`
--

CREATE TABLE `tlb_student` (
  `stud_id` int(10) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `stud_email` varchar(50) NOT NULL,
  `stud_mobile` bigint(20) NOT NULL,
  `stud_city` varchar(50) NOT NULL,
  `stud_pincode` int(10) NOT NULL,
  `stud_gender` varchar(20) NOT NULL,
  `stud_dob` date NOT NULL,
  `stud_bloodgrp` varchar(30) NOT NULL,
  `stud_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tlb_student`
--

INSERT INTO `tlb_student` (`stud_id`, `stud_name`, `stud_email`, `stud_mobile`, `stud_city`, `stud_pincode`, `stud_gender`, `stud_dob`, `stud_bloodgrp`, `stud_pass`) VALUES
(1, 'menshi', 'menhasi@gmail.com', 9457883789, 'ahemdabad', 382418, 'female', '2002-06-01', 'a+', '123456'),
(2, 'Rashmi', 'menshidodiya65@gmail.com', 6351903809, 'Pune', 564747, 'Female', '1999-06-05', 'A+', '345778'),
(4, 'Menshi Dodiya', 'menshidodiya65@gmail.com', 8487848466, 'Ahmedabad', 382418, 'Female', '2001-02-07', 'B+', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tlb_student`
--
ALTER TABLE `tlb_student`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tlb_student`
--
ALTER TABLE `tlb_student`
  MODIFY `stud_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
