-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2026 at 10:35 AM
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
  `username` text NOT NULL,
  `password` text NOT NULL,
  `phone_number` text NOT NULL,
  `amazon_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `amazon_talent_team`
--

INSERT INTO `amazon_talent_team` (`amazon_id`, `username`, `password`, `phone_number`, `amazon_email`) VALUES
(1, 'Allison', 'Burgers', '09865379', 'emploice@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `career_adviser`
--

CREATE TABLE `career_adviser` (
  `career_id` int NOT NULL,
  `f_name` text NOT NULL,
  `s_name` text NOT NULL,
  `career_email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` text NOT NULL,
  `school_id` int NOT NULL,
  `amazon_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int NOT NULL,
  `school_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `school_phone` text NOT NULL,
  `school_email` int NOT NULL,
  `amazon_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_level_student`
--

CREATE TABLE `t_level_student` (
  `student_id` int NOT NULL,
  `f_name` text NOT NULL,
  `s_name` text NOT NULL,
  `student_email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` text NOT NULL,
  `year_group` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pathway` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `school_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `amazon_id` int NOT NULL,
  `career_id` int NOT NULL
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
  ADD PRIMARY KEY (`career_id`),
  ADD KEY `amazon_id_2` (`amazon_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`),
  ADD KEY `amazon_id` (`amazon_id`);

--
-- Indexes for table `t_level_student`
--
ALTER TABLE `t_level_student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `amazon_id` (`amazon_id`),
  ADD UNIQUE KEY `school_id` (`amazon_id`),
  ADD KEY `career_id` (`career_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amazon_talent_team`
--
ALTER TABLE `amazon_talent_team`
  MODIFY `amazon_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_adviser`
--
ALTER TABLE `career_adviser`
  MODIFY `career_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_level_student`
--
ALTER TABLE `t_level_student`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `career_adviser`
--
ALTER TABLE `career_adviser`
  ADD CONSTRAINT `career_adviser_ibfk_1` FOREIGN KEY (`amazon_id`) REFERENCES `amazon_talent_team` (`amazon_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `school_ibfk_1` FOREIGN KEY (`amazon_id`) REFERENCES `amazon_talent_team` (`amazon_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_level_student`
--
ALTER TABLE `t_level_student`
  ADD CONSTRAINT `t_level_student_ibfk_1` FOREIGN KEY (`amazon_id`) REFERENCES `amazon_talent_team` (`amazon_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
