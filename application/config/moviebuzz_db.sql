-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 01:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviebuzz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `status`) VALUES
(3, 'rajkumar', 'rajkumar@gmail.com', 'bd94dcda26fccb4e68d6a31f9b5aac0b571ae266d822620e901ef7ebe3a11d4f', 1);

-- --------------------------------------------------------

--
-- Table structure for table `caragori`
--

CREATE TABLE `caragori` (
  `cata_id` int(11) NOT NULL,
  `main_cata` varchar(100) NOT NULL,
  `sub_cata` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caragori`
--

INSERT INTO `caragori` (`cata_id`, `main_cata`, `sub_cata`) VALUES
(4, 'Bollywood', 'Comedy'),
(5, 'Hollywood', 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`id`, `name`, `email`, `comment`, `status`) VALUES
(1, 'rajkumar', 'rajkumar@gmail.com', 'hgfhgfhgf', 1),
(2, 'Golam Foysol', 'rajkumar@gmail.com', 'rwrrwerewr', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(2, 'Golam Foysol', 'chondi33@gmail.com', 'dfsfsfsdf'),
(3, 'sdadasdsd', 'drajkumar@gmail.com', 'ssfsafasff'),
(4, 'chondi', 'chondi@gmail.com', 'sdsadsadsadsadasd');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `language` varchar(200) NOT NULL,
  `quality` varchar(100) NOT NULL,
  `moviesize` varchar(50) NOT NULL,
  `director` varchar(100) NOT NULL,
  `actors` varchar(250) NOT NULL,
  `writers` varchar(200) NOT NULL,
  `main_cata` varchar(100) NOT NULL,
  `sub_cata` varchar(100) NOT NULL,
  `wurl` varchar(300) NOT NULL,
  `durl` varchar(300) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `rating`, `language`, `quality`, `moviesize`, `director`, `actors`, `writers`, `main_cata`, `sub_cata`, `wurl`, `durl`, `picture`, `status`) VALUES
(1, 'Bourne', 55555, 'eng', 'hd', '780px', 'fdgdgdg', 'fgdgdfg', 'fgfdgdfg', 'Hollywood', 'Action', 'http://www.omouk.com', 'http://www.omouk.com', 'bourne.jpg', 1),
(3, 'this is a good post', 55555, '', '', '', '', '', '', 'Bollywood', 'Comedy', '', '', 'th.jpg', 1),
(4, '4 camara dddddd', 4444, '', '', '', '', '', '', 'Bollywood', 'Comedy', '', '', 'thCPY9ITS8.jpg', 1),
(5, 'efgdefg ddfgfd edvdf rrrrr', 4444, '', '', '', '', '', '', 'Bollywood', 'Comedy', '', '', 'thR37GDQTA.jpg', 1),
(6, 'ggggggggggg', 465765, 'eng', '', '', '', '', '', 'Bollywood', 'Comedy', '', '', 'th1.jpg', 1),
(8, 'efgdefg ddfgfd edvdf', 4444, 'eng', 'hd', '780px', 'fdgdgdg', 'fgdgdfg', '', 'Bollywood', 'Comedy', '', '', 'thRNUTWHNN.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caragori`
--
ALTER TABLE `caragori`
  ADD PRIMARY KEY (`cata_id`);

--
-- Indexes for table `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `caragori`
--
ALTER TABLE `caragori`
  MODIFY `cata_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
