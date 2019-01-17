-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 07:40 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypersonality`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_table`
--

CREATE TABLE `answer_table` (
  `id_answer` int(10) NOT NULL,
  `id_user` int(7) NOT NULL,
  `id_question` int(3) NOT NULL,
  `answer` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_table`
--

CREATE TABLE `question_table` (
  `id_question` int(3) NOT NULL,
  `category` varchar(30) NOT NULL,
  `question` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id_user` int(7) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_table`
--
ALTER TABLE `answer_table`
  ADD PRIMARY KEY (`id_answer`);

--
-- Indexes for table `question_table`
--
ALTER TABLE `question_table`
  ADD PRIMARY KEY (`id_question`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_table`
--
ALTER TABLE `answer_table`
  MODIFY `id_answer` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_table`
--
ALTER TABLE `question_table`
  MODIFY `id_question` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id_user` int(7) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
