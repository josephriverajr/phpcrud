-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 01:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `josephqt`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `active` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `username`, `password`, `active`) VALUES
(1, 'joseph@gmail.com1234', '123', '1'),
(2, 'clairebear@gmai.com', 'asda', '0'),
(3, 'jsoeph12@gmail.com', '123', '0'),
(4, 'jsoeph12@gmail.com', '123', '0'),
(5, 'jsoeph12@gmail.com', '123', '0'),
(6, 'jsoeph12@gmail.com', '123', '0'),
(7, 'jsoeph125@gmail.com', '555', '0'),
(8, 'clairebear@gmai.com', '5', '0'),
(9, 'clairebear@gmai.com', '1231', '0'),
(10, 'jsoeph125@gmail.com', '131', '0'),
(12, 'joseph@gmail.com', '123', '1'),
(13, 'jsoephz@gmail.com', '123', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
