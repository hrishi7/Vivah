-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2017 at 04:55 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vivahdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `user_id`, `subject`, `question`) VALUES
(1, 11, 'paid Services', 'how can i activate paid services in my account?');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `request_by` varchar(30) NOT NULL,
  `request_from` varchar(30) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `height` varchar(25) NOT NULL,
  `weight` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(15) NOT NULL,
  `country` varchar(20) NOT NULL,
  `contact_no` bigint(30) NOT NULL,
  `looking_for` varchar(30) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `complexion` text NOT NULL,
  `age` int(10) NOT NULL,
  `approve` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `education` varchar(50) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `mother_tounge` varchar(30) NOT NULL,
  `caste` varchar(30) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `profile_summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `first_name`, `last_name`, `gender`, `height`, `weight`, `address`, `city`, `state`, `pincode`, `country`, `contact_no`, `looking_for`, `photo`, `complexion`, `age`, `approve`, `deleted`, `education`, `marital_status`, `religion`, `mother_tounge`, `caste`, `profession`, `profile_summary`) VALUES
(11, 'rasmi1', 'password', 'Rasmi', 'Saha', 'Female', '5.5', '70', 'Barasat', 'kolkata', 'west bengal', 700063, 'India', 6598785487, 'Male', 'akriti_singhd4e9af8d1779181f5e00cf8ee19bf0d5n.jpeg', 'Fair', 25, 'yes', 'no', 'Graduation', 'never married', 'hindu', 'gujarati', 'General', 'Student', 'Hello!'),
(12, 'aditi_singh', 'password', 'Aditi', 'Singh', 'Female', '5.5', '70', '132,BagBazar Road Hatibagan', 'kolkata', 'West Bengal', 700056, 'India', 9088598250, 'Male', 'varsa_patelc2f60a59f2d77a1343148a88fe92c9e4n.jpeg', 'Medium', 23, 'yes', 'no', 'Graduation', 'never married', 'hindu', 'gujarati', 'General', 'Not Working', 'Hello EveryBody.. I am Aditi From Kolkata.'),
(13, 'sangram_sen', 'password', 'Sangram', 'Sen', 'Male', '5.5', '65', '136, R.K Lane, Girish Park', 'Kolkata', 'West Bengal', 700056, 'India', 9685748598, 'Female', 'ankit_singhania0003868552a1979c15fab5848c825952n.jpeg', 'Medium', 28, 'yes', 'no', 'Graduation', 'never married', 'hindu', 'gujarati', 'General', 'Student', '  by injected humour, or randomised words which don\'t look even slightly believable.'),
(14, 'ipshita1', 'password', 'Ipshita', 'Roy', 'Female', '5.3', '59', '145, Bosepuruk Lk Road', 'kolkata', 'West Bengal', 700056, 'India', 6985748574, 'Male', 'bijay_sahac75d4e42aa9e9d5bf8cbeb231c338a55n.jpeg', 'Fair', 26, 'yes', 'no', 'Graduation', 'never married', 'hindu', 'gujarati', 'General', 'Student', 'by injected humour, or randomised words which don\'t look even slightly believable.'),
(15, 'Sneha1', 'password', 'Sneha ', 'Roy', 'Female', '5.5', '58', '158, AJC Bose Road', 'kolkata', 'West Bengal', 700063, 'India', 9685748598, 'Male', 'varsa_patelc2f60a59f2d77a1343148a88fe92c9e4n.jpeg', 'Fair', 26, 'yes', 'no', 'Graduation', 'never married', 'hindu', 'gujarati', 'General', 'Student', 'by injected humour, or randomised words which don\'t look even slightly believable.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
