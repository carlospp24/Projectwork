-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Mar 05, 2021 at 04:55 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactus`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactinformation`
--

CREATE TABLE `contactinformation` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `question_or_feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactinformation`
--

INSERT INTO `contactinformation` (`name`, `email`, `country`, `question_or_feedback`) VALUES
('Carlos', 'carlosypepepantin@hotmail.com', 'Spain', ''),
('Alberto', 'prueba@orueba.com', 'Finland', 'This is a test to see if this works'),
('Antonia', 'antonia@email.com', 'Latvia', 'I really like your website!'),
('Toni Elizondo', 'prueba2@gmail.com', 'United States', 'This is just another test for the contact us form'),
('Tope Cantu', 'prueba222@orueba.com', 'Colombia', 'Can i travel due to the corona situation?'),
('Pota', 'pota@gmail.com', 'Mexico', 'This is just another test to make it look better'),
('11', '231', '1231', '3123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
