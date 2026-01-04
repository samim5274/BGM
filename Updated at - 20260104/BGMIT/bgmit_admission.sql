-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2026 at 11:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bgmit_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` int(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `father_name` varchar(150) NOT NULL,
  `mother_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `message` text DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `course`, `full_name`, `father_name`, `mother_name`, `email`, `mobile`, `dob`, `present_address`, `permanent_address`, `qualification`, `message`, `photo`, `created_at`) VALUES
(1, 'Graphics-Design', 'Fahim Hossain', 'asdf', 'Shofiya Begum', 'akib454@gmail.com', '01799164746', '2026-01-01', 'asdfasd', 'fasdfasdf', 'Honors', 'asdfasdf', '1767524238_695a478e48fbc.jpg', '2026-01-04 10:57:18'),
(2, 'Web-Design-and-Development', 'Akib Hossain', 'Jamsher Ali', 'Shofiya Begum', 'akib454@gmail.com', '01799164746', '2026-01-07', 'asdfasdf', 'asdfasdfasd', 'Masters', 'asdfasdfasd', '1767524380_695a481c45e77.jpg', '2026-01-04 10:59:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
