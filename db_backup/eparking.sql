-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 10:40 AM
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
-- Database: `eparking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'bagadarahul@gmail.com', 'rahul1212');

-- --------------------------------------------------------

--
-- Table structure for table `parkingslot`
--

CREATE TABLE `parkingslot` (
  `id` int(11) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parkingslot`
--

INSERT INTO `parkingslot` (`id`, `Area`, `City`, `State`) VALUES
(1, 'kkv hall', 'rajkot', 'gujarat'),
(2, 'jivraj park', 'ahemdabad', 'gujarat'),
(3, 'airport road', 'surat', 'gujarat'),
(4, 'railway station', 'vadodara', 'gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `user_id`, `name`, `username`, `email`, `password`) VALUES
(1, 1226, 'rahul bagada', 'rahul', 'bagadarahul@gmail.com', 'cmFodWwxMjM='),
(2, 4799, 'raviraj', 'ravi', 'raviraj@gmail.com', 'cmF2aTEyMw=='),
(3, 9004, 'brijesh pandey', 'brijesh', 'brijeshpandey@gmail.com', 'YnJpamVzaA==');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookslot`
--

CREATE TABLE `tbl_bookslot` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `slot` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bookslot`
--

INSERT INTO `tbl_bookslot` (`book_id`, `user_id`, `username`, `email`, `city`, `area`, `slot`, `mobile`, `start_date`, `end_date`, `rate`, `status`) VALUES
(1, 1226, 'rahul', 'bagadarahul@gmail.com', '1', 'kkv hall', 'P4', 9898333808, '2024-07-17T20:24', '2024-07-18T20:24', 120, 'Booked'),
(2, 4799, 'ravi', 'raviraj@gmail.com', '3', 'airport road', 'P1', 9924119963, '2024-07-18T20:47', '2024-07-19T20:47', 120, 'Booked'),
(3, 9004, 'brijesh', 'brijeshpandey@gmail.com', '2', 'jivraj park', 'P2', 906365656, '2024-07-19T10:59', '2024-07-20T10:59', 120, 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `city_name`) VALUES
(2, 'ahemdabad'),
(1, 'rajkot'),
(3, 'surat'),
(4, 'vadodara');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slot`
--

CREATE TABLE `tbl_slot` (
  `id` int(11) NOT NULL,
  `Rajkot` varchar(255) NOT NULL,
  `Ahemdabad` varchar(255) NOT NULL,
  `Surat` varchar(255) NOT NULL,
  `Vadodara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_slot`
--

INSERT INTO `tbl_slot` (`id`, `Rajkot`, `Ahemdabad`, `Surat`, `Vadodara`) VALUES
(1, 'P1', 'P1', 'booked', 'P1'),
(2, 'P2', 'booked', 'P2', 'P2'),
(3, 'P3', 'P3', 'P3', 'P3'),
(4, 'booked', 'P4', 'P4', 'P4'),
(5, 'P5', 'P5', 'P5', 'P5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parkingslot`
--
ALTER TABLE `parkingslot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bookslot`
--
ALTER TABLE `tbl_bookslot`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `city` (`city`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_name` (`city_name`);

--
-- Indexes for table `tbl_slot`
--
ALTER TABLE `tbl_slot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parkingslot`
--
ALTER TABLE `parkingslot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_bookslot`
--
ALTER TABLE `tbl_bookslot`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_slot`
--
ALTER TABLE `tbl_slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
