-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2019 at 04:28 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `Query_id` int(255) NOT NULL,
  `Answer` varchar(60000) NOT NULL,
  `Answer_id` int(11) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`Query_id`, `Answer`, `Answer_id`, `time`, `username`) VALUES
(26, 'Answer to Query 1.', 14, '2019-03-22 16:27:17', 'Vvyom Shah'),
(26, 'Answer to Query 1 by admin.', 15, '2019-03-22 16:39:05', 'Vvyom Shah');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `Toggle` int(1) NOT NULL,
  `File_id` int(255) NOT NULL,
  `Query_Answer` varchar(60000) NOT NULL,
  `Query_id` int(11) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`Toggle`, `File_id`, `Query_Answer`, `Query_id`, `time`, `username`) VALUES
(0, 61, 'Query 1', 27, '2019-03-22 17:02:29', 'Vvyom Shah');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(225) NOT NULL,
  `file_description` text NOT NULL,
  `file_type` varchar(225) NOT NULL,
  `file_uploader` varchar(225) NOT NULL,
  `file_uploaded_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `file_uploaded_to` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL DEFAULT 'not approved yet'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`file_id`, `file_name`, `file_description`, `file_type`, `file_uploader`, `file_uploaded_on`, `file_uploaded_to`, `file`, `status`) VALUES
(61, 'Review of Credit Card Fraud Detection Techniques', 'Blah Blah Blah', 'pdf', 'Diksha', '2019-03-18 05:53:32', 'Mechanical', '275004.pdf', 'approved'),
(60, 'Test', 'Test desc', 'pdf', 'parin', '2019-03-16 04:09:10', 'Computer Science', '925045.pdf', 'not approved yet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `about` varchar(300) NOT NULL DEFAULT 'N/A',
  `role` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `token` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `course` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL DEFAULT 'profile.jpg',
  `joindate` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `about`, `role`, `email`, `token`, `gender`, `password`, `course`, `image`, `joindate`) VALUES
(31, 'Diksha', 'Diksha', 'N/A', 'student', 'dik@gmail.com', '', 'Female', '$2y$10$qkjBYFWcdjfa8YFeLSE0tO4pF.d4noMzZ11ZPdV0SX.26nvkypHBG', 'Mechanical', 'profile.jpg', 'March 18, 2019'),
(28, 'VvyomShah', 'Vvyom Shah', 'Fuck you.', 'admin', 'vvyomms@gmail.com', '', 'Male', '$2y$10$Ev0IMYuqtdObs0R/mV91UuOqWHryLP0ILbj5D7qZU2l7Y9bhxgKfS', 'Computer Science', 'profile.jpg', 'March 12, 2019'),
(29, 'parin', 'Parin Shah', 'N/A', 'teacher', 'parin@gmal.com', '', 'Male', '$2y$10$XGJanHhpaVU/ybe.gFp.MO9hKLv1jn5BlrgAcbM99IjT.E4MaxcXe', 'Computer Science', 'profile.jpg', 'March 15, 2019'),
(30, 'Aditya', 'Aditya', 'N/A', 'student', 'adi@gmail.com', '', 'Male', '$2y$10$veTYr9RnXr/hmjrH7F9IA.JDfVkV/9SpN.WfYHjBJaGcGkPxJN2Ka', 'Computer Science', 'profile.jpg', 'March 15, 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`Answer_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`Query_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `Answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `Query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
