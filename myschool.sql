-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 12, 2020 at 06:25 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

DROP TABLE IF EXISTS `todos`;
CREATE TABLE IF NOT EXISTS `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `todo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `todo`, `description`, `user_id`) VALUES
(1, 'Read Book', 'Book Titled Enlighted Minds cover 6 pages daily.', 2),
(3, 'Laptop', 'Update my lappy with new version today.', 2),
(4, 'Fresher Party', 'Arrange costumes for it and buy new shoes.', 3),
(5, 'Buy Gadget', 'New sale has been started, soon to buy new band.', 3),
(6, 'Go to gym', 'Exercise for 2 hour daily.', 2),
(7, 'Skill development', 'Learn new technologies.', 2),
(8, 'Project', 'Complete my project within 48 hours.', 3),
(10, 'Buy Bread', 'Go to big super market and purchase daily bases snacks.', 2),
(11, 'office work', 'Some clients work to finish today and rest in 3 days.', 2),
(12, 'Battery', 'Buy new battery for my UPS.', 3),
(13, 'Service', 'Need bike servicing till sunday.', 2),
(14, 'Learn', 'Today\'s leature to be learn.', 4),
(15, 'Writing', 'Write on my dairy about my day.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `pincode` int(6) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `dob`, `pincode`, `password`) VALUES
(2, 'Ayush ', 'ayush@gmail.com', 7485965456, '2014-02-28', 859654, '202cb962ac59075b964b07152d234b70'),
(3, 'Ritesh Kumar', 'ritesh123@gmail.com', 8596857445, '2007-11-23', 748596, '5eb6f7c468ae4d92813a8db00127150e'),
(4, 'Kavita', 'kavita@gmail.com', 7485965412, '2013-03-05', 859655, 'dababcc8b72edb7ba973c24b768e9b2f'),
(5, 'John Nero', 'john12@yahoo.com', 9685744569, '2015-10-09', 857445, '9a1158154dfa42caddbd0694a4e9bdc8');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `todos`
--
ALTER TABLE `todos`
  ADD CONSTRAINT `todos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
