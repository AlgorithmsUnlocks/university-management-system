-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 02:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university-management-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tourism_teacher`
--

CREATE TABLE `tourism_teacher` (
  `id` int(200) NOT NULL,
  `teacher_name` varchar(200) NOT NULL,
  `teacher_title` varchar(200) NOT NULL,
  `teacher_eamil` varchar(200) NOT NULL,
  `teacher_cell` varchar(200) NOT NULL,
  `education_bg` varchar(200) NOT NULL,
  `conduct_course` varchar(200) NOT NULL,
  `teacher_photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourism_teacher`
--

INSERT INTO `tourism_teacher` (`id`, `teacher_name`, `teacher_title`, `teacher_eamil`, `teacher_cell`, `education_bg`, `conduct_course`, `teacher_photo`) VALUES
(1, 'Rafiqul Islam', 'Assistant Professor & Head (Acting)', 'rafiqulzyl@lus.ac.bd', '01716 446071', 'MS (Thesis) in Nanostructure Physics, 2008\r\nShahjalal University of Science and Technology, Sylhet-3114, Bangladesh\r\n\r\nBSc (Honors) in Physics, 2007\r\nShahjalal University of Science and Technology, Sy', 'Undergraduate Courses:\r\n1. Electrical Properties of Materials\r\n2. Electromagnetic Fields and Waves\r\n3. Optical Fiber Communication\r\n4. Electronics\r\n5. Electrical Circuits\r\n6. General Physics I & II\r\n7', 'upload/rafiq.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tourism_teacher`
--
ALTER TABLE `tourism_teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tourism_teacher`
--
ALTER TABLE `tourism_teacher`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
