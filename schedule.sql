-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 11:48 PM
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
-- Database: `shuttle app`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Location` varchar(40) NOT NULL,
  `Lot Number` int(10) NOT NULL,
  `Departure Time` varchar(20) NOT NULL,
  `Arrival Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Location`, `Lot Number`, `Departure Time`, `Arrival Time`) VALUES
('Basie Hall - lot 60', 104, '5:00 PM', '5:15 PM'),
('Fenwick Hall - Main Campus', 103, '10:00 AM', '10:15 AM'),
('Lot 60 - Main Campus', 60, '7:50 AM', '8:10 AM'),
('Montclair Heights - Village', 107, '3:00 PM', '3:15 PM'),
('NJ Transit Garage - Main Campus', 102, '9:00 AM', '9:20 AM'),
('University Hall -NJ Transit Garage', 109, '2:00 PM', '2:15 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Location`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
