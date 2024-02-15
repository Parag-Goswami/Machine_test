-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 08:55 AM
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
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `image`) VALUES
(15, 'Why government IT needs a better approach to budgeting', 'Defra minister, Mark Spencer was recently asked to give an update to how the Department for Environment, Food and Rural Affairs (Defra) is coping with its plans to renew ageing IT systems. The parliamentary question follows on from a damning report published by the Public Accounts Committee in May last year, which identified major IT challenges in the department, unsupported software and cybersecurity risks due to its reliance on over 1900 applications, many of which are legacy and require replacing or modernising.The National Audit Office (NAO) also produced a report on the dire state of Defra’s IT in December 2023. In its report, the NAO stated that Defra’s digital team explained that its budget on IT is often reduced to make savings, as competing priorities emerge.', 'blog2.png'),
(16, 'The UK PSTI Act and its implications for the print market', 'The UK Product Security and Telecommunications Infrastructure (PSTI) Act will come into effect on 29 April 2024. The product security aspect of this act stipulates a new regulatory scheme to make consumer connectable products more secure against cyberattacks by setting minimum security requirements.', 'blog3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `con_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `roll_number`, `con_password`) VALUES
(13, 'PARAG', 'parag@gmail.com', 123456789, '123456789'),
(14, 'naveen', 'nav@123.com', 1800506052, 'admin@123'),
(16, 'praneet', 'paranee@gmail.com', 1452636967, 'praneet@123'),
(17, 'prakhar', 'prakher@yahoo.com', 1826354262, 'asdasd'),
(19, 'nishi sharma', 'nishi@yahoo.com', 187546963, 'nishi@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
