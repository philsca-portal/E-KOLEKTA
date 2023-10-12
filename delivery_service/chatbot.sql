-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 02:33 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `int` int(11) NOT NULL,
  `messages` mediumtext NOT NULL,
  `response` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`int`, `messages`, `response`) VALUES
(3, 'How do I create an JJRGB Online account?', 'Creating an account is easy! Go to Book page to sign up!'),
(5, 'What happens if I book a pick-up?', 'Hello! Our Pick Up is a service that allows you to ship items without having to bring them personally to an JJRGVB branch. After booking a pick up online (through the Book page), an JJRGB express rider will come to your place the next business day, pick up your parcel, and collect your payment for the shipping.'),
(6, 'How long does it take to deliver the parcel/s to the recipients?', 'Nationwide delivery schedules are as follows: 3 days within Metro Manila, 5 days for Luzon and 7 days for Visayas and Mindanao (excluding Sundays, Holidays and natural circumstances beyond one’s control). \r\n\r\nHowever, you may experience delays due to the current pandemic due to limitations in air cargo and closure of some areas.\r\n'),
(7, 'Will the receipent get updates about the shipping status?', 'Yes! We send updates to the recipient with any changes in the shipping status.  '),
(8, 'What hours are you open? ', 'We understand that not every delivery is going to fall in between normal business hours so we are conveniently open 24/7 and can make a delivery at any time of day or night.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`int`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `int` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
