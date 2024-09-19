-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 02:40 PM
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
-- Database: `eduinsight_sections`
--
CREATE DATABASE IF NOT EXISTS `eduinsight_sections` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `eduinsight_sections`;

-- --------------------------------------------------------

--
-- Table structure for table `1`
--

CREATE TABLE `1` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gradeyear` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `1`
--

INSERT INTO `1` (`id`, `firstname`, `middlename`, `lastname`, `gradeyear`, `age`, `email`, `address`, `gender`) VALUES
(1, 'sdada', 'sdadad', 'asdad', 4, 21, 'sdsdsd@GMAIL.COM', '1', 'Male'),
(2, 'sdada', 'sdadad', 'asdad', 4, 21, 'sdsdsd@GMAIL.COM', '1', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `a2021`
--

CREATE TABLE `a2021` (
  `id` int(20) NOT NULL,
  `firstname` int(50) NOT NULL,
  `middlename` int(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gradeyear` enum('1st year','2nd year','3rd year','4th year','dropped') NOT NULL,
  `age` int(10) NOT NULL,
  `email` int(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gender` enum('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `a2022`
--

CREATE TABLE `a2022` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gradeyear` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `a2022`
--

INSERT INTO `a2022` (`id`, `firstname`, `middlename`, `lastname`, `gradeyear`, `age`, `email`, `address`, `gender`) VALUES
(3, 'sdadaA', 'sdadadA', 'asdadA', 1, 1, 'sdsdsd@GMAIL.COMA', '1', 'Male'),
(4, 'Liezel', 'hagonoy', 'leson', 4, 25, 'sdsdsd@GMAIL.COM', '1', 'Female'),
(5, 'sdsds', 'dsdsd', 'sdsdsd', 2, 2, 'sdsdsd@GMAIL.COM', 'sdsdsds', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1`
--
ALTER TABLE `1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a2021`
--
ALTER TABLE `a2021`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a2022`
--
ALTER TABLE `a2022`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1`
--
ALTER TABLE `1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `a2022`
--
ALTER TABLE `a2022`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Database: `eduinsight_users`
--
CREATE DATABASE IF NOT EXISTS `eduinsight_users` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `eduinsight_users`;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expires` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(1, 'Admin', '', '', 'drejano21@gmail.com', '$2y$10$cvs2TlGPPjE9mQQmYdjmyuVcWr5nEgFxFRkErszVN1.rVC9ey6k.i', 'admin'),
(3, 'dom', '', '', 'drejano31@gmail.com', '$2y$10$Bua36eYIA41GDc5WlpXtp.3F1hy2UNw0EDyilDBcTfAkcJ8/0.2Fq', 'admin'),
(6, 'd-rejano', 'Dominic', 'Rejano', 'drejano41@gmail.com', '$2y$10$6ku644gcEo1xmgVtoglioOmjQFyOQhufY2p.gNk0yFtT2bCl83GqC', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
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
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
