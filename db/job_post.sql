-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2025 at 02:46 PM
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
-- Database: `job_post`
--

-- --------------------------------------------------------

--
-- Table structure for table `applynow`
--

CREATE TABLE `applynow` (
  `sl` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `country` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `Resume` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applynow`
--

INSERT INTO `applynow` (`sl`, `jobid`, `name`, `email`, `country`, `company`, `Resume`) VALUES
(1, 7, 'Bilas Kumar', 'bilasroyduet@gmail.com', 'Dhaka', 'Google', 'CV.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(2550) NOT NULL,
  `objectionfile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `message`, `objectionfile`) VALUES
('Bilas Kumar', 'bilasroyduet@gmail.c', 'ajdshfkakafha', 'CV.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `emp_post`
--

CREATE TABLE `emp_post` (
  `id` int(11) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `profession` varchar(15) NOT NULL,
  `company` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `twitter` varchar(35) NOT NULL,
  `linkedin` varchar(35) NOT NULL,
  `facebook` varchar(35) NOT NULL,
  `instagram` varchar(35) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_post`
--

INSERT INTO `emp_post` (`id`, `uname`, `name`, `country`, `birthday`, `phone`, `profession`, `company`, `email`, `twitter`, `linkedin`, `facebook`, `instagram`, `bio`, `skills`, `exp`, `img`) VALUES
(2, 'Bilas ', 'Kumar', 'Bangladesh', '2000-02-14', '01705945433', 'Apps dev.', 'Apple', 'bilasroy70@gmail.com', 'https://www.linkedin.com/in/bilas70', 'https://www.linkedin.com/in/bilas70', 'https://www.linkedin.com/in/bilas70', 'https://www.linkedin.com/in/bilas70', 'WebApi.txt', 'WebApi.txt', 'WebApi.txt', 'best_11zon.jpg'),
(3, 'Morse', 'Akt', 'Bangladesh', '2025-04-08', '01705945400', 'SDE', 'Google', 'mor@gmail.com', 'https://www.twitter.com/in/bilas70/', 'https://www.linkedin.com/in/bilas70', 'https://www.facebook.com/in/bilas70', 'https://www.insta.com/in/bilas70/', 'WebApi.txt', 'WebApi.txt', 'WebApi.txt', 'ya.jpg'),
(4, 'Ayesha', 'Akt', 'Bangladesh', '2025-03-31', '01703345433', 'Game dev.', 'Kites Games Studio', 'ayesha@gmail.com', 'https://www.twitter.com/in/ayesha/', 'https://www.linkedin.com/in/ayesha/', 'https://www.facebook.com/in/ayesha/', 'https://www.insta.com/in/ayesha/', 'WebApi.txt', 'WebApi.txt', 'WebApi.txt', '3.jpg'),
(5, 'Tourist', 'Tourist', 'Germany', '2023-05-04', '01708245400', 'Programmer', 'Amazon', 'tourist@gmail.com', 'https://www.twitter.com/in/tourist/', 'https://www.linkedin.com/in/tourist', 'https://www.facebook.com/in/tourist', 'https://www.insta.com/in/tourist/', 'WebApi.txt', 'WebApi.txt', 'WebApi.txt', '3.jpg'),
(6, 'Chayan', 'Roy', 'Bangladesh', '2025-04-18', '01828245400', 'SDE', 'Google', 'chayan@gmail.com', 'https://www.twitter.com/in/chayan/', 'https://www.linkedin.com/in/chayan/', 'https://www.facebook.com/in/chayan/', 'https://www.insta.com/in/chayan/', 'WebApi.txt', 'WebApi.txt', 'WebApi.txt', '3.jpg'),
(7, 'Mim', 'Hoi', 'America', '2025-04-08', '01828245401', 'Game dev.', 'Kites Games Studio', 'mim@gmail.com', 'https://www.twitter.com/in/mim/', 'https://www.linkedin.com/in/mim/', 'https://www.facebook.com/in/mim/', 'https://www.insta.com/in/mim/', 'WebApi.txt', 'WebApi.txt', 'WebApi.txt', 'yesha.jpg'),
(8, 'Adnan', 'Toky', 'Bangladesh', '2025-04-08', '01828245499', 'Programmer', 'Microsoft', 'adnan@gmail.com', 'https://www.twitter.com/in/adnan/', 'https://www.linkedin.com/in/adnan/', 'https://www.facebook.com/in/adnan/', 'https://www.insta.com/in/adnan/', 'WebApi.txt', 'WebApi.txt', 'WebApi.txt', 'best_11zon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hire_table`
--

CREATE TABLE `hire_table` (
  `Eid` int(11) NOT NULL,
  `empMail` varchar(50) NOT NULL,
  `companyMail` varchar(40) NOT NULL,
  `Designation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hire_table`
--

INSERT INTO `hire_table` (`Eid`, `empMail`, `companyMail`, `Designation`) VALUES
(2, 'bilasroy70@gmail.com', 'google@gmail.com', 'Software-Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `posttable`
--

CREATE TABLE `posttable` (
  `JobId` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `company` varchar(20) NOT NULL,
  `wtype` varchar(20) NOT NULL,
  `officelocation` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `jtype` varchar(20) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posttable`
--

INSERT INTO `posttable` (`JobId`, `title`, `company`, `wtype`, `officelocation`, `location`, `category`, `jtype`, `file_name`) VALUES
(3, 'ML Engineer', 'Optimizely', 'On-site', 'Dhaka', 'Dhaka', 'datascience', 'Full-time', 'Resume (4).docx'),
(4, 'SWE', 'Microsoft', 'Remote', 'Dhaka', 'Delhi', 'cloud', 'Full-time', 'Speech from ......docx'),
(7, 'Manager', 'Google', 'Remote', 'Dhaka', 'NewYork, USA', 'sde', 'Full-time', 'CV.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applynow`
--
ALTER TABLE `applynow`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `emp_post`
--
ALTER TABLE `emp_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posttable`
--
ALTER TABLE `posttable`
  ADD PRIMARY KEY (`JobId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applynow`
--
ALTER TABLE `applynow`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_post`
--
ALTER TABLE `emp_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posttable`
--
ALTER TABLE `posttable`
  MODIFY `JobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
