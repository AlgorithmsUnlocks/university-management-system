-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 06:53 AM
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
-- Table structure for table `books_list`
--

CREATE TABLE `books_list` (
  `id` int(100) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `book_category` varchar(100) NOT NULL,
  `isbn_number` varchar(100) NOT NULL,
  `books_price` varchar(1000) NOT NULL,
  `book_photo` varchar(200) NOT NULL,
  `creation_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `deletation_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_list`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books_list`
--
ALTER TABLE `books_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books_list`
--
ALTER TABLE `books_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
