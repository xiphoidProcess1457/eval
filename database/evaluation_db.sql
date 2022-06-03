-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 06:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_list`
--

CREATE TABLE `academic_list` (
  `id` int(30) NOT NULL,
  `year` text NOT NULL,
  `semester` int(30) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0=Pending,1=Start,2=Closed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class_list`
--

CREATE TABLE `class_list` (
  `id` int(30) NOT NULL,
  `curriculum` text NOT NULL,
  `level` text NOT NULL,
  `section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `criteria_list`
--

CREATE TABLE `criteria_list` (
  `id` int(30) NOT NULL,
  `criteria` text NOT NULL,
  `order_by` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_answers`
--

CREATE TABLE `evaluation_answers` (
  `evaluation_id` int(30) NOT NULL,
  `question_id` int(30) NOT NULL,
  `rate` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation_answers`
--

INSERT INTO `evaluation_answers` (`evaluation_id`, `question_id`, `rate`) VALUES
(1, 1, 5),
(1, 6, 4),
(1, 3, 5),
(2, 1, 5),
(2, 6, 5),
(2, 3, 4),
(3, 1, 5),
(3, 6, 5),
(3, 3, 4),
(4, 1, 1),
(4, 6, 1),
(4, 8, 1),
(4, 3, 1),
(5, 1, 3),
(5, 6, 4),
(5, 8, 3),
(5, 3, 3),
(6, 1, 5),
(6, 6, 5),
(6, 8, 5),
(6, 3, 5),
(7, 1, 1),
(7, 6, 5),
(7, 8, 3),
(7, 3, 2),
(8, 1, 3),
(8, 6, 1),
(8, 8, 5),
(8, 3, 1),
(9, 1, 2),
(9, 6, 2),
(9, 8, 2),
(9, 3, 3),
(10, 1, 2),
(10, 6, 2),
(10, 8, 5),
(10, 3, 1),
(11, 1, 4),
(11, 6, 3),
(11, 8, 2),
(11, 3, 2),
(12, 1, 2),
(12, 6, 2),
(12, 8, 3),
(12, 3, 3),
(13, 1, 2),
(13, 6, 2),
(13, 8, 5),
(13, 3, 3),
(14, 1, 1),
(14, 6, 1),
(14, 8, 1),
(14, 3, 1),
(15, 1, 2),
(15, 6, 2),
(15, 8, 2),
(15, 3, 2),
(16, 1, 5),
(16, 6, 5),
(16, 8, 5),
(16, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_list`
--

CREATE TABLE `evaluation_list` (
  `evaluation_id` int(30) NOT NULL,
  `academic_id` int(30) NOT NULL,
  `class_id` int(30) NOT NULL,
  `student_id` int(30) NOT NULL,
  `subject_id` int(30) NOT NULL,
  `faculty_id` int(30) NOT NULL,
  `restriction_id` int(30) NOT NULL,
  `date_taken` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluation_list`
--

INSERT INTO `evaluation_list` (`evaluation_id`, `academic_id`, `class_id`, `student_id`, `subject_id`, `faculty_id`, `restriction_id`, `date_taken`) VALUES
(1, 3, 1, 1, 1, 1, 8, '2020-12-15 16:26:51'),
(2, 3, 2, 2, 2, 1, 9, '2020-12-15 16:33:37'),
(3, 3, 1, 3, 1, 1, 8, '2020-12-15 20:18:49'),
(4, 3, 3, 5, 3, 1, 10, '2022-05-04 17:44:03'),
(5, 3, 2, 6, 2, 1, 9, '2022-05-27 06:51:52'),
(6, 3, 2, 6, 2, 1, 13, '2022-05-29 06:57:04'),
(7, 3, 1, 7, 1, 1, 8, '2022-05-29 07:00:17'),
(8, 3, 1, 8, 1, 1, 8, '2022-05-29 07:02:14'),
(9, 3, 1, 9, 1, 1, 8, '2022-05-29 07:03:14'),
(10, 3, 2, 11, 2, 1, 13, '2022-05-30 20:10:00'),
(11, 3, 2, 11, 2, 1, 9, '2022-05-30 20:10:06'),
(12, 3, 2, 16, 2, 1, 9, '2022-05-30 21:21:51'),
(13, 3, 2, 16, 2, 1, 13, '2022-05-30 21:21:59'),
(14, 3, 2, 35, 2, 1, 9, '2022-05-31 11:56:28'),
(15, 3, 2, 35, 2, 1, 13, '2022-05-31 11:57:05'),
(16, 3, 2, 35, 2, 1, 13, '2022-05-31 11:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_list`
--

CREATE TABLE `faculty_list` (
  `id` int(30) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL DEFAULT 'no-image-available.png',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_list`
--

INSERT INTO `faculty_list` (`id`, `school_id`, `firstname`, `lastname`, `email`, `password`, `avatar`, `date_created`) VALUES
(1, '20140623', 'George', 'Wilson', 'gwilson@sample.com', 'd40242fb23c45206fadee4e2418f274f', '1608011100_avatar.jpg', '2020-12-15 13:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `question_list`
--

CREATE TABLE `question_list` (
  `id` int(30) NOT NULL,
  `academic_id` int(30) NOT NULL,
  `question` text NOT NULL,
  `order_by` int(30) NOT NULL,
  `criteria_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_list`
--

INSERT INTO `question_list` (`id`, `academic_id`, `question`, `order_by`, `criteria_id`) VALUES
(1, 3, 'Sample Question', 0, 1),
(3, 3, 'Test', 2, 2),
(5, 0, 'Question 101', 0, 1),
(6, 3, 'Sample 101', 4, 1),
(8, 3, 'Eum mollit aut porroEum mollit aut porroEum mollit aut porroEum mollit aut porroEum mollit aut porroEum mollit aut porroEum mollit aut porroEum mollit aut porroEum mollit aut porro', 6, 1),
(9, 4, 'asdasdas', 0, 2),
(10, 4, 'asdasdasd', 1, 0),
(11, 4, 'asdasdasd', 2, 2),
(12, 1, 'asdasdasdasdas', 0, 1),
(13, 1, 'asdasdasdasd', 1, 1),
(14, 4, 'fdgdfgdf', 3, 1),
(15, 4, 'dfgdfgdfgdf', 4, 1),
(16, 4, 'fgdfgdfgdfgdfgdgdfgsdf', 5, 2),
(17, 5, 'asdasdasd', 0, 1),
(18, 5, 'asdasdasdas', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `restriction_list`
--

CREATE TABLE `restriction_list` (
  `id` int(30) NOT NULL,
  `academic_id` int(30) NOT NULL,
  `faculty_id` int(30) NOT NULL,
  `class_id` int(30) NOT NULL,
  `subject_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restriction_list`
--

INSERT INTO `restriction_list` (`id`, `academic_id`, `faculty_id`, `class_id`, `subject_id`) VALUES
(8, 3, 1, 1, 1),
(9, 3, 1, 2, 2),
(11, 4, 1, 2, 2),
(12, 1, 1, 1, 1),
(13, 3, 1, 2, 2),
(14, 5, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student_list`
--

CREATE TABLE `student_list` (
  `id` int(30) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `clear_password` text NOT NULL,
  `class_id` int(30) NOT NULL,
  `avatar` text NOT NULL DEFAULT 'no-image-available.png',
  `user` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject_list`
--

CREATE TABLE `subject_list` (
  `id` int(30) NOT NULL,
  `code` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Faculty Evaluation System', 'info@sample.comm', '+6948 8542 623', '2102  Caldwell Road, Rochester, New York, 14608', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL DEFAULT 'no-image-available.png',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `avatar`, `date_created`) VALUES
(1, 'Administrator', '', 'admin@admin.com', '0192023a7bbd73250516f069df18b500', '1607135820_avatar.jpg', '2020-11-26 10:57:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_list`
--
ALTER TABLE `academic_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_list`
--
ALTER TABLE `class_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criteria_list`
--
ALTER TABLE `criteria_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation_list`
--
ALTER TABLE `evaluation_list`
  ADD PRIMARY KEY (`evaluation_id`);

--
-- Indexes for table `faculty_list`
--
ALTER TABLE `faculty_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_list`
--
ALTER TABLE `question_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restriction_list`
--
ALTER TABLE `restriction_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_list`
--
ALTER TABLE `student_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_list`
--
ALTER TABLE `subject_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_list`
--
ALTER TABLE `academic_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class_list`
--
ALTER TABLE `class_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `criteria_list`
--
ALTER TABLE `criteria_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `evaluation_list`
--
ALTER TABLE `evaluation_list`
  MODIFY `evaluation_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `faculty_list`
--
ALTER TABLE `faculty_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question_list`
--
ALTER TABLE `question_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `restriction_list`
--
ALTER TABLE `restriction_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_list`
--
ALTER TABLE `student_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `subject_list`
--
ALTER TABLE `subject_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
