-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2018 at 03:03 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(99) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_details` varchar(255) NOT NULL,
  `course_add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `course_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `course_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_code`, `course_details`, `course_add_date`, `course_modified_date`, `course_status`) VALUES
(1, 'PHP', 'CSE-101', 'Personal Home Page', '2017-09-06 14:27:26', '2017-09-06 20:27:26', 1),
(2, 'JAVA', 'CSE-107', 'Object Oriented Programming', '2017-09-06 14:27:26', '2017-09-06 20:27:26', 1),
(3, 'Kotlin', 'CSE-102', 'Object Oriented for Android', '2017-09-06 14:28:36', '2017-09-06 20:28:36', 1),
(4, 'Python', 'CSE-105', 'Simple Object Oriented', '2017-09-06 14:28:36', '2017-09-06 20:28:36', 1),
(5, 'Java Script', 'CSE-108', 'Java Script is Most Popular', '2017-09-09 14:55:08', '2017-09-09 20:55:08', 1),
(6, 'Database', 'CSE-231', 'Database System Design', '2017-09-09 14:58:43', '2017-09-09 20:58:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses_student`
--

CREATE TABLE `courses_student` (
  `c_s_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses_student`
--

INSERT INTO `courses_student` (`c_s_id`, `student_id`, `course_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 2, 2),
(7, 2, 4),
(8, 2, 5),
(9, 5, 1),
(10, 10, 6),
(11, 13, 1),
(12, 3, 4),
(13, 3, 1),
(14, 4, 1),
(15, 4, 6),
(16, 9, 1),
(17, 9, 4),
(18, 5, 2),
(19, 11, 1),
(20, 11, 2),
(21, 11, 3),
(22, 11, 4),
(23, 11, 5),
(24, 11, 6),
(25, 5, 6),
(26, 5, 4),
(27, 5, 5),
(28, 8, 1),
(29, 8, 2),
(30, 12, 1),
(31, 12, 2),
(32, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(99) NOT NULL,
  `student_email` varchar(99) NOT NULL,
  `student_mobile` varchar(11) NOT NULL,
  `student_password` varchar(99) NOT NULL,
  `student_address` varchar(99) NOT NULL,
  `student_gender` varchar(6) NOT NULL,
  `student_hobbies` varchar(99) NOT NULL,
  `student_image` varchar(99) NOT NULL,
  `student_date_of_birth` date NOT NULL,
  `student_add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `student_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `student_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_email`, `student_mobile`, `student_password`, `student_address`, `student_gender`, `student_hobbies`, `student_image`, `student_date_of_birth`, `student_add_date`, `student_modified_date`, `student_status`) VALUES
(1, 'Abdullah', 'abdullah@gmail.com', '01737312878', 'abdullah123', 'Rajshahi', 'Male', 'Reading, Writing', 'abdullah.jpg', '1992-10-12', '2017-09-06 14:24:37', '2017-09-06 20:24:37', 1),
(2, 'Robiul', 'robiul@yahoo.com', '01712727272', 'robiul123', 'Chadpur', 'Male', 'Speaking, Sleep', 'robiul.jpg', '1990-09-09', '2017-09-06 14:24:37', '2017-09-06 20:24:37', 1),
(3, 'Abdur Rahman', 'abdur_rahman@ovi.com', '01837232878', 'simple123', 'Comilla', 'Male', 'Sleep, Writing', 'chan.jpg', '1991-05-05', '2017-09-09 16:42:53', '2017-09-09 22:42:53', 1),
(4, 'Nabil', 'nabil@yahoo.com', '01912343456', 'nabil123', 'Dinazpur', 'Male', 'Writing, Sleep', 'nabil.jpg', '1993-01-14', '2017-09-09 16:49:41', '2017-09-09 22:49:41', 1),
(5, 'Fatima', 'fatima@gmail.com', '01393939393', 'fatima123', 'Natore', 'Female', 'Reading, Sleep', 'fatima.jpg', '2013-07-25', '2017-09-09 16:58:20', '2017-09-09 22:58:20', 1),
(6, 'Fahim', 'fahim@pondit.com', '01712348490', 'fahim123', 'Gazipur', 'Male', 'Speaking', 'fahim.jpg', '1990-01-01', '2017-09-09 17:10:40', '2017-09-09 23:10:40', 1),
(7, 'Mehedi', 'mehedi@gmail.com', '01434567898', 'mehedi123', 'Noakhali', 'Male', 'Writing', 'mehedi.jpg', '1995-12-20', '2017-09-09 17:16:14', '2017-09-09 23:16:14', 1),
(8, 'Biplob', 'biplob@yahoo.com', '01716767654', 'biplob123', 'Satkhira', 'Male', 'Reading, Sleep', 'biplob.jpg', '1994-02-28', '2017-09-09 17:23:20', '2017-09-09 23:23:20', 1),
(9, 'Sohel', 'sohel@yahoo.com', '01720688443', 'sohel123', 'Kustia', 'Male', 'Sleep', 'sohel.jpg', '1990-09-06', '2017-09-09 17:35:03', '2017-09-09 23:35:03', 1),
(10, 'Jalal', 'jalal@gmail.com', '01740002521', 'jalal123', 'Tangail', 'Male', 'Speaking', 'jalal.jpg', '1996-04-04', '2017-09-10 00:36:14', '2017-09-10 06:36:14', 1),
(11, 'Faruk', 'faruk@yahoo.com', '01232345678', 'faruk123', 'Jessore', 'Male', 'Reading', 'faruk.jpg', '1985-09-15', '2017-09-10 00:43:42', '2017-09-10 06:43:42', 1),
(12, 'Saju', 'saju@gmail.com', '01725018915', 'saju123', 'Rangpur', 'Male', 'Writing', 'saju.jpg', '1991-09-12', '2017-09-10 00:55:01', '2017-09-10 06:55:01', 1),
(13, 'Sonju', 'sonju@lcc.com', '01840141158', 'sonju123', 'Rangamati', 'Male', 'Speaking', 'sonju.jpg', '1990-09-07', '2017-09-10 01:01:05', '2017-09-10 07:01:05', 1),
(14, 'Sakib', 'nms@gmail.com', '01714474747', 'n21221211', 'Kishorgonj', 'Male', 'Reading, Writing, Speaking, Sleep', '', '2017-12-05', '2017-12-04 16:20:44', '2017-12-04 22:20:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_password` varchar(255) NOT NULL,
  `teacher_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `teacher_name`, `teacher_password`, `teacher_status`) VALUES
(1, 'fahim', '123', 1),
(2, 'arif', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `courses_student`
--
ALTER TABLE `courses_student`
  ADD PRIMARY KEY (`c_s_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses_student`
--
ALTER TABLE `courses_student`
  MODIFY `c_s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses_student`
--
ALTER TABLE `courses_student`
  ADD CONSTRAINT `courses_student_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `courses_student_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
