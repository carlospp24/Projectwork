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
-- Database: `destinations`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `hotel` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `passport` varchar(50) NOT NULL,
  `start` varchar(50) NOT NULL,
  `end` varchar(50) NOT NULL,
  `adults` varchar(50) NOT NULL,
  `children` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`hotel`, `name`, `lname`, `email`, `number`, `country`, `passport`, `start`, `end`, `adults`, `children`) VALUES
('Hotel Daniya Denia Spa & Business', 'Carlos', 'Pantin', 'carlosypepepantin@hotmail.com', '14141', 'Spain', '12132', '2021-03-19', '2021-03-26', '1', '0'),
('Ohla Barcelona', 'Alberto', 'Tapiola', 'prueba@orueba.com', '2131455', 'Finland', '2554542', '2021-03-12', '2021-03-15', '4', '2'),
('Hotel Mr Costa Blanca', 'Jose', 'Rodriguez', 'prueba222@orueba.com', '+358 46 1282818', 'United States', 'XD7274991', '2021-03-09', '2021-03-13', '2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ourdestinations`
--

CREATE TABLE `ourdestinations` (
  `Name` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Region` varchar(50) NOT NULL,
  `Availability` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ourdestinations`
--

INSERT INTO `ourdestinations` (`Name`, `Country`, `Region`, `Availability`) VALUES
('Hotel Daniya Denia Spa & Business', 'Spain', 'Denia', 'Yes'),
('Hotel Mr Costa Blanca', 'Spain', 'Denia,Alicant', 'Yes'),
('Negresco Princess 4* Sup', 'Spain', 'Barcelona', 'Yes'),
('Ohla Barcelona', 'Spain', 'Barcelona', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `ourdestinationsmexico`
--

CREATE TABLE `ourdestinationsmexico` (
  `Name` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Region` varchar(50) NOT NULL,
  `Availability` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ourdestinationsmexico`
--

INSERT INTO `ourdestinationsmexico` (`Name`, `Country`, `Region`, `Availability`) VALUES
('Royalton Chic Suites Cancun Resort & Spa  ', 'Mexico', 'Cancun', 'Yes'),
('Grand Fiesta Americana Coral Beach Cancun ', 'Mexico', 'Cancun', 'Yes'),
('Grand Fiesta Americana Puerto Vallarta', 'Mexico', 'Puerto Vallarta', 'Yes'),
(' Hotel Posada De Roger', 'Mexico', 'Puerto Vallarta', 'Yes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
