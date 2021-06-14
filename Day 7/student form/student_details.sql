-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 03:37 PM
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
-- Database: `student_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_form`
--

CREATE TABLE `student_form` (
  `id_stud` int(10) NOT NULL,
  `fname_stud` varchar(30) NOT NULL,
  `lname_stud` varchar(30) NOT NULL,
  `email_stud` varchar(45) NOT NULL,
  `mobile_stud` bigint(20) NOT NULL,
  `add_stud` varchar(256) NOT NULL,
  `city_stud` varchar(50) NOT NULL,
  `state_stud` varchar(30) NOT NULL,
  `pincode_stud` int(10) NOT NULL,
  `dob_stud` date NOT NULL,
  `gender_stud` varchar(20) NOT NULL,
  `hobby_stud` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_form`
--

INSERT INTO `student_form` (`id_stud`, `fname_stud`, `lname_stud`, `email_stud`, `mobile_stud`, `add_stud`, `city_stud`, `state_stud`, `pincode_stud`, `dob_stud`, `gender_stud`, `hobby_stud`) VALUES
(1, ' menshi', ' dodiya', '', 8487848466, 'vastral', 'ahmedabad', 'Gujarat', 404168, '2001-04-02', 'female', 'drawing'),
(2, 'bansari', ' dodiya', '', 9574777002, 'ambika sadan, kalpna socity', 'bhavnagar', 'Gujarat', 438215, '2005-02-18', 'female', 'dancing'),
(3, 'aditya', 'shah', '', 6351903809, 'varundavan vatika', 'ahmedabad', 'Gujarat', 404168, '1999-07-06', 'male', 'reading,singing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_form`
--
ALTER TABLE `student_form`
  ADD PRIMARY KEY (`id_stud`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_form`
--
ALTER TABLE `student_form`
  MODIFY `id_stud` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
