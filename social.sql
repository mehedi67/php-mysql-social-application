-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 09:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `education` varchar(200) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `cell`, `username`, `password`, `gender`, `photo`, `age`, `education`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(5, 'Mehedi', 'mehedi@gmail.com', '01750952867', 'mehedi', '$2y$10$Ue1AP79kewTfQsILlyU5IOuIRR/w8t9RfRNGubk9xhWHzhwtXB9.C', 'Male', NULL, NULL, NULL, 1, 0, '2021-10-12 00:59:20', NULL),
(6, 'Miraj', 'miraj@gmail.com', '01750349711', 'miraj', '$2y$10$u9Id7sjPrd2.mT0vvF4JzOhw5smIKbLD0.06uQk.XEKKVG3wcg.X2', 'Male', NULL, NULL, NULL, 1, 0, '2021-10-12 00:59:54', NULL),
(7, 'Rita Khatun', 'rita@gmail.com', '01750658500', 'rita', '$2y$10$B0o962CttKEw1fX070H/c.O5mUxUexQZx..4MTmZB4rCctRilE8RC', 'Female', NULL, NULL, NULL, 1, 0, '2021-10-12 01:00:34', NULL),
(10, 'momotaz', 'momo@gmail.com', '01750321478', 'momo', '$2y$10$HkFbc7IVipWI1JEg3OXwEOk5TFCTJD8s/nRpQ.QwzUT4VUq.JgVzO', 'Female', NULL, NULL, NULL, 1, 0, '2021-10-15 10:17:10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
