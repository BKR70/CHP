-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2025 at 02:48 PM
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
-- Database: `employee_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirmPassword` varchar(30) NOT NULL,
  `userType` varchar(10) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`firstName`, `lastName`, `email`, `category`, `password`, `confirmPassword`, `userType`, `location`) VALUES
('Bilas ', 'Kumar', 'bilasroyduet@gmail.com', 'sde', 'ajdshfkakafha', 'ajdshfkakafha', 'Employee', 'Dhaka'),
('Google', '', 'google@gmail.com', '', 'purekakfaskl', 'purekakfaskl', 'Employer', 'NewYork, USA'),
('Amazon', '', 'amazon@gmail.com', '', 'purekakfaszz', 'purekakfaszz', 'Employer', 'London'),
('Virat', 'Kohli', 'bilasroy70@gmail.com', 'datascience', 'bilasroy70@', 'bilasroy70@', 'Employee', 'Delhi'),
('Jk', 'Chand', 'jkroyduet@gmail.com', 'datascience', 'jkroyduet', 'jkroyduet', 'Employee', 'Beijing');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
