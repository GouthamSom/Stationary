-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 10:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stationary_pgm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `doj` varchar(250) NOT NULL,
  `userid` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `cpwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`id`, `firstname`, `lastname`, `middlename`, `email`, `doj`, `userid`, `password`, `cpwd`) VALUES
(33, 'qwer', 'asdfg', 'goutham', 'asd@sd.sdf', '2023-03-04', 'goutham', '1234567', ''),
(34, 'sommm', 'asdggg', 'vbvb', 'asd@asd.gfds', '2023-03-03', '11554', 'qazx ', ''),
(35, 'goutham', 'soma', 'nani', 'nani.soma87@gmail.com', '1990-12-09', 'pg_g_s_1001', 'entitled', ''),
(36, '', '', '', '', '', '', '', ''),
(37, '', '', '', '', '', '', '', ''),
(38, '$fname', '$lname', '$mname', '$email', '$U_doj', '$uid', '$pwd', ''),
(39, 'asdfg', 'sdfg', 'sdfgh', 'sdfghj@jhgf.gfd', '1212-12-12', '12121212', '12121', ''),
(40, '', '', '', '', '', '', '', ''),
(41, 'asdfg', 'asdfg', 'asdfgn', 'asdfg@asdfg.cvbn', '1212-12-12', 'asdf', 'ASDF', '');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `name`) VALUES
(17, '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(250) NOT NULL,
  `first name` varchar(250) NOT NULL,
  `last name` varchar(250) NOT NULL,
  `middle name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `DOJ` date NOT NULL,
  `DOR` date NOT NULL,
  `DOB` date NOT NULL,
  `userid` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first name`, `last name`, `middle name`, `email`, `DOJ`, `DOR`, `DOB`, `userid`, `password`, `designation`) VALUES
(5, 'soma', 'nani', 'goutham', 'goutham@ban.soma', '1212-12-02', '1111-11-11', '1454-02-14', 'asdf', 'asd', 'asd'),
(6, 'soma', 'goutham', 'nani', 'nani.soma87@gmail.com', '2021-10-14', '2022-12-20', '1990-12-09', 'PGS001', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `heading`
--

CREATE TABLE `heading` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heading`
--
ALTER TABLE `heading`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
