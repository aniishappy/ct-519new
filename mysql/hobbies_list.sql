-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 08:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_hobbies`
--

-- --------------------------------------------------------

--
-- Table structure for table `hobbies_list`
--

CREATE TABLE `hobbies_list` (
  `sequence` int(3) NOT NULL,
  `image` mediumtext NOT NULL,
  `name` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tmp_name` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hobbies_list`
--

INSERT INTO `hobbies_list` (`sequence`, `image`, `name`, `description`, `tmp_name`) VALUES
(1, 'img/3.jpg', 'drawing', 'EYE', ''),
(2, 'img/2.jpg', 'drawing', 'EMINEM', ''),
(3, 'img/4.jpg', 'drawing', 'PRABDA', ''),
(4, 'img/5.jpg', 'drawing', 'SOMEONE', ''),
(5, 'img/6.jpg', 'drawing', 'SOMEONE NOT FINISH YET', ''),
(6, 'img/7.jpg', 'drawing', 'PEACOCK', ''),
(7, 'img/532376_10150611090206568_895103104_n.jpg', 'drawing', 'CARTOON', ''),
(8, 'img/1.jpg', 'drawing FROM NOTE APP', 'EYE', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hobbies_list`
--
ALTER TABLE `hobbies_list`
  ADD PRIMARY KEY (`sequence`),
  ADD KEY `sequence` (`sequence`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
