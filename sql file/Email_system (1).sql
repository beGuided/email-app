-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 18, 2021 at 09:51 AM
-- Server version: 5.7.34-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Email_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `sender_id` varchar(25) NOT NULL,
  `subject` varchar(25) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` varchar(255) NOT NULL,
  `receiver_email_id` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `sender_name`, `sender_id`, `subject`, `time`, `content`, `receiver_email_id`, `status`) VALUES
(1, 'new mail', 'adejoh91@gmail.com', 'new', '2021-08-07 00:00:00', 'new email....\r\nwelcome', 'adejoh91@gmail.com', 'draft'),
(2, 'first mail', 'louis', 'employment letter', '2021-08-07 23:32:06', 'first mail fromlouis ', 'adejoh93@email.com', ''),
(3, 'NBC', 'louis', 'employment letter', '2021-08-08 00:38:22', 'new mail from louis', 'adejoh93@email.com', ''),
(4, 'first mail', 'louis', 'employment letter', '2021-08-07 23:32:06', 'first mail fromlouis ', 'example@email.com', ''),
(5, 'first mail', 'louis', 'employment letter', '2021-08-07 23:32:06', 'first mail from louis ', 'example@email.com', ''),
(6, 'first mail', 'louis', 'employment letter emplo', '2021-08-07 23:32:06', 'employment letteremployment letteremployment letteremployment letteremployment letteremployment letter', 'example@email.com', ''),
(7, 'joshua', 'example@email.com', 'acceptance letter', '2021-08-12 14:42:55', '    welcome to my school', 'example@email.com', ''),
(8, 'somto', 'example@email.com', 'testing', '2021-08-12 15:39:11', '    testing ', 'adejoh91@email.com', ''),
(9, 'john', 'adejoh91@email.com', 'reply', '2021-08-12 15:39:46', '    message received', 'example@email.com', ''),
(10, ' samuel', 'adejohsamuel91@email.com', 'tryout', '2021-08-13 14:45:34', '    bhjk,', 'adejohsamuel91@gmail.com', ''),
(11, ' samuel', 'adejohsamuel91@email.com', 'tryout', '2021-08-13 14:46:24', '    iu', 'adejohsamuel91@email.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_email`, `user_password`) VALUES
(1, 'josh', 'Adejoh', 'adejoh382@email.com', '1234'),
(2, 'somto', 'edeh', 'example@email.com', '1234'),
(3, 'john', 'adejoh', 'adejoh91@email.com', '123'),
(8, 'jacob', 'louis', 'adejoh93@email.com', '1234'),
(9, '', '', '', ''),
(12, 'Wisdom', 'Oriero', 'Wisdom@email.com', '1234'),
(18, ' Elizabeth', 'Adejoh', 'Elizabeth@email.com', '1234'),
(19, 'Tobias', 'Otene', 'tobi@email.com', '1234'),
(20, ' samuel', 'Adejoh', 'adejohsamuel91@email.com', 'sam ade');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
