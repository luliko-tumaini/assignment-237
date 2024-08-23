-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2024 at 12:54 AM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` char(6) NOT NULL,
  `favorites` char(10) NOT NULL,
  `education` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `firstname`, `lastname`, `gender`, `favorites`, `education`, `time`, `password`) VALUES
(1, 'tumaini', 'luliko', 'male', 'bachelar', 'night', 'pizza', ''),
(2, '', '', 'male', 'jr.high', 'morning', 'steak', 'tumain lul'),
(3, 'tumain', 'luliko', 'male', 'jr.high', 'morning', 'steak', 'tumain lul'),
(4, '', '', '', 'jr.high', 'morning', '', 'DIZZONE'),
(5, 'PITA', 'luliko', 'male', 'jr.high', 'morning', 'steak', 'DIZZONE'),
(6, 'tumaini', 'luliko', 'male', 'jr.high', 'morning', 'pizza', 'NIT/888'),
(7, 'tumaini', 'luliko', 'male', 'jr.high', 'morning', 'pizza', '$2y$10$Cae'),
(8, 'tumaini', 'luliko', 'male', 'bachelar', 'night', 'chicken', '$2y$10$g5.'),
(9, 'jamira', 'jamira', 'female', 'bachelar', 'morning', 'pizza', '$2y$10$cgT'),
(10, 'ACKLINE', 'ZUMBA', 'male', 'jr.high', 'morning', 'pizza', '$2y$10$eoF'),
(11, 'tumaini', 'luliko', 'male', 'jr.high', 'morning', 'pizza', '$2y$10$Gv6'),
(12, 'ACKLINE', 'ZUMBA', 'male', 'jr.high', 'morning', 'chicken', '$2y$10$4Qg'),
(13, 'ACKLINE', 'ZUMBA', 'female', 'jr.high', 'morning', 'pizza', '$2y$10$FNj'),
(14, 'ACKLINE', 'ACKLINE', 'male', 'jr.high', 'morning', 'pizza', '$2y$10$W88'),
(15, 'tumaini', 'TUMAINI', 'male', 'bachelar', 'night', 'chicken', '$2y$10$cEj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
