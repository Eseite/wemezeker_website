-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 07:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `name`, `author`, `edition`, `status`, `quantity`, `department`) VALUES
(1, 'Fikir eske mekaber', 'Haddis Alemayehu', '18th', 'Available', 150, 'ff'),
(2, 'Oromay', 'Bealu Girma', '15th', 'Available', 120, 'ff'),
(3, 'Java', 'Ergete', '3rd', 'avaliable', 23, 'ee'),
(3, 'Java', 'Ergete', '3rd', 'avaliable', 23, 'ee'),
(4, 'os', 'demoz', '3', 'kjjii', 10, 'computing');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment`) VALUES
('hiiiii'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('hey there'),
('ee'),
('sajwkdakdwdklqsqkkwekqkqew');

-- --------------------------------------------------------

--
-- Table structure for table `newtable`
--

CREATE TABLE `newtable` (
  `id` int(15) DEFAULT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newtable`
--

INSERT INTO `newtable` (`id`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
(NULL, 'Eseite', 'Gosaye', 'esu', 'eseiteagonafer@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(NULL, 'Senait', 'Gosaye', 'seny', 'senyg@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`firstname`, `lastname`, `email`, `username`, `id`, `password`) VALUES
('qwer', 'asdf', 'fekirte4@gmail.com', 'cvbb', 13, '827ccb0eea8a706c4c34a16891f84e7b'),
('asdf', 'ghjk', 'as@gmail.com', 'cvb', 14, '827ccb0eea8a706c4c34a16891f84e7b'),
('tofik', 'tufao', 'tuf@gmail.com', 'tuff', 15, '827ccb0eea8a706c4c34a16891f84e7b'),
('Eseite', 'Gosaye', 'eseiteagonafer@gmail.com', 'esu', 16, '827ccb0eea8a706c4c34a16891f84e7b'),
('Senait', 'Gosaye', 'senyg@gmail.com', 'seny', 17, '827ccb0eea8a706c4c34a16891f84e7b'),
('behailu', 'Abebe', 'dessie2@gmail.com', 'Behe', 18, '827ccb0eea8a706c4c34a16891f84e7b'),
('fkrte', 'gossaye', 'fkr@gmail.com', 'fikir', 19, '25d55ad283aa400af464c76d713c07ad'),
('Fikre', 'Haile', 'fikre1@gmail.com', 'fik', 20, '827ccb0eea8a706c4c34a16891f84e7b'),
('abe', 'kebe', 'egtee@gmail.com', 'abe', 21, 'a3590023df66ac92ae35e3316026d17d'),
('domz', 'dagna', 'demoz@gmail.com', 'demoz', 22, '827ccb0eea8a706c4c34a16891f84e7b'),
('etsubdink', 'mekbib', 'etsub1@gmail.com', 'etsubit', 23, '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
