-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 08:47 AM
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
-- Table structure for table `news_sub_tbl`
--

CREATE TABLE `news_sub_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `date` text NOT NULL,
  `image` text NOT NULL,
  `alt_tag` text NOT NULL,
  `fb_url` text NOT NULL,
  `tw_url` text NOT NULL,
  `insta_url` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_sub_tbl`
--

INSERT INTO `news_sub_tbl` (`id`, `title`, `slug`, `date`, `image`, `alt_tag`, `fb_url`, `tw_url`, `insta_url`, `description`, `status`) VALUES
(6, NULL, NULL, '', 'role-based-access-control3.jpg', 'Role-based access control', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, recusandae aliquam. Lorem ipsum', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news_sub_tbl`
--
ALTER TABLE `news_sub_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_sub_tbl`
--
ALTER TABLE `news_sub_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
