-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 05, 2021 at 08:46 AM
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
-- Database: `ta_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_mex`
--

CREATE TABLE `reg_mex` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `street` varchar(60) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `passp` varchar(20) NOT NULL,
  `age` int(150) NOT NULL,
  `bday` date NOT NULL,
  `dest` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reg_spain`
--

CREATE TABLE `reg_spain` (
  `id` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `passp` varchar(20) NOT NULL,
  `age` int(150) NOT NULL,
  `bday` date NOT NULL,
  `dest` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
