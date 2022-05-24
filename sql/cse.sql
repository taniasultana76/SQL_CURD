-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 05:10 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_data`
--

CREATE TABLE `all_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_data`
--

INSERT INTO `all_data` (`id`, `name`, `email`, `password`) VALUES
(1, 'tania', 't@gmail.com', '1234'),
(2, 'Jannat', 'j@gmail.com', '12'),
(5, 'Lima', 'l@gmail.com', '1235');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(11) NOT NULL,
  `all_id` int(11) NOT NULL,
  `d_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `all_id`, `d_name`) VALUES
(1, 1, 'cse'),
(2, 2, 'llb');

-- --------------------------------------------------------

--
-- Table structure for table `roll`
--

CREATE TABLE `roll` (
  `id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `rol_no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roll`
--

INSERT INTO `roll` (`id`, `d_id`, `rol_no`) VALUES
(1, 1, '1234jk'),
(2, 2, '0987lk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_data`
--
ALTER TABLE `all_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Test` (`all_id`);

--
-- Indexes for table `roll`
--
ALTER TABLE `roll`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Test1` (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_data`
--
ALTER TABLE `all_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roll`
--
ALTER TABLE `roll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dept`
--
ALTER TABLE `dept`
  ADD CONSTRAINT `Test` FOREIGN KEY (`all_id`) REFERENCES `dept` (`id`);

--
-- Constraints for table `roll`
--
ALTER TABLE `roll`
  ADD CONSTRAINT `Test1` FOREIGN KEY (`d_id`) REFERENCES `roll` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
