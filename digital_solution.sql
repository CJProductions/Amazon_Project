-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2026 at 01:56 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_solution`
--

-- --------------------------------------------------------

--
-- Table structure for table `amazon_talent_team`
--

CREATE TABLE `amazon_talent_team` (
  `amazon_id` int NOT NULL,
  `recruitment` text NOT NULL,
  `selected_people` text NOT NULL,
  `employees` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career_adviser`
--

CREATE TABLE `career_adviser` (
  `career_id` int NOT NULL,
  `contact_details` text NOT NULL,
  `appointments` int NOT NULL,
  `placements` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_level_student`
--

CREATE TABLE `t_level_student` (
  `student_id` int NOT NULL,
  `f_name` text NOT NULL,
  `s_name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amazon_talent_team`
--
ALTER TABLE `amazon_talent_team`
  ADD PRIMARY KEY (`amazon_id`);

--
-- Indexes for table `career_adviser`
--
ALTER TABLE `career_adviser`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `t_level_student`
--
ALTER TABLE `t_level_student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amazon_talent_team`
--
ALTER TABLE `amazon_talent_team`
  MODIFY `amazon_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `career_adviser`
--
ALTER TABLE `career_adviser`
  MODIFY `career_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_level_student`
--
ALTER TABLE `t_level_student`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
