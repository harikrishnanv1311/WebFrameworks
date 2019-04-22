-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 04:45 PM
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
-- Database: `elections`
--

-- --------------------------------------------------------

--
-- Table structure for table `voter_data`
--

CREATE TABLE `voter_data` (
  `Name` char(25) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Contact` int(10) NOT NULL,
  `City` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter_data`
--

INSERT INTO `voter_data` (`Name`, `Email`, `Password`, `Contact`, `City`) VALUES
('kruthik', 'jt.kruthik@gmail.com', 'a3J1dGhpaw==', 2147483647, 'BANGALORE'),
('Bhargav', 'bhargav@gmail.com', 'Ymhhcmdhdg==', 1234567890, 'BANGALORE'),
('Kaushik', 'jt.kaushik@gmail.com', 'kaushik', 1234567890, 'Bangalore');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
