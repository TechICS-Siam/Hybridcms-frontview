-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 12:01 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techics_hybrid`
--

-- --------------------------------------------------------

--
-- Table structure for table `solution_sub_two_crd`
--

CREATE TABLE `solution_sub_two_crd` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tag` varchar(255) DEFAULT NULL,
  `short_des` varchar(255) DEFAULT NULL,
  `amount` text NOT NULL,
  `pckg_title` text NOT NULL,
  `button_text` text NOT NULL,
  `button_url` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solution_sub_two_crd`
--

INSERT INTO `solution_sub_two_crd` (`id`, `date`, `tag`, `short_des`, `amount`, `pckg_title`, `button_text`, `button_url`, `status`) VALUES
(15, '2021-02-22 13:39:45', 'Essential', 'For smaller teams looking to manage all the essential aspects of their business in one place.', '$37', 'user / month, min. 5 users', 'SUGN UP', '#', 1),
(16, '2021-02-22 13:40:44', 'Essential', 'For smaller teams looking to manage all the essential aspects of their business in one place.', '$37', 'user / month, min. 5 users', 'SIGN IN', '#', 1),
(17, '2021-02-22 13:41:36', 'Essential', 'For smaller teams looking to manage all the essential aspects of their business in one place.', '$37', 'user / month, min. 5 users', 'SIGN IN', '#', 1),
(18, '2021-02-22 13:42:29', 'Essential', 'For smaller teams looking to manage all the essential aspects of their business in one place.', '$37', 'user / month, min. 5 users', 'SIGN IN', '#', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `solution_sub_two_crd`
--
ALTER TABLE `solution_sub_two_crd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `solution_sub_two_crd`
--
ALTER TABLE `solution_sub_two_crd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
