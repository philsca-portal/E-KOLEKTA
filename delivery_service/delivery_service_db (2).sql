-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 04:33 PM
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
-- Database: `delivery_service_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `user_ID` int(100) NOT NULL,
  `First name` varchar(20) NOT NULL,
  `Last name` varchar(20) NOT NULL,
  `Contact number` int(20) NOT NULL,
  `Email address` varchar(50) NOT NULL,
  `Complete address` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirm password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`user_ID`, `First name`, `Last name`, `Contact number`, `Email address`, `Complete address`, `Username`, `Password`, `Confirm password`) VALUES
(43, 'Jico', 'SanBuenaventura', 321321, 'jico@gmail.com', 'Dugas', 'eqweqwe', 'qweqwe', 'qweqwe'),
(44, 'Junel', 'Sindac', 2147483647, 'junel@yahoo.com', 'qewqeqeqe', 'junelsindac', 'junel123', 'junel123'),
(45, 'Jico', 'dqwdqwdw', 12313131, 'erfefekjfnekfne@yahoo.com', 'Panatag', 'jics', '123123', '123123'),
(46, 'Jico', 'SanBuenaventura', 23424209, 'jico@gmail.com', 'PasayCity', 'jicojics', '123', '123'),
(47, 'Bryan', 'Tabajonda', 2147483647, 'tabajondabryan@yahoo.com', 'Mandaluyong', 'tabajondabryan', 'tabajonda123', 'tabajonda123'),
(48, 'Bryan', 'Tabajonda', 2147483647, 'jjrgbdeliverysystem@gmail.com', 'mandaluyong', 'yolanda', '123', '123'),
(49, 'Jico', 'Tabajonda', 2147483647, 'jjrgbdeliverysystem@gmail.com', 'pantagroad', 'bryan', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `adminname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `adminname`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `Branch_id` int(100) NOT NULL,
  `Branch_code` varchar(20) NOT NULL,
  `Street_Building_Brgy` varchar(50) NOT NULL,
  `City_State_Zip` varchar(50) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Contact_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`Branch_id`, `Branch_code`, `Street_Building_Brgy`, `City_State_Zip`, `Country`, `Contact_number`) VALUES
(9, 'WSmubH7WxC', 'PANGET STREET/ BUILDING BULOK/ BARANGGAY ENGOTTTTT', 'NEW YORK CITY/ EWANNNNNNN', 'ALABANG ', '12345'),
(10, 'WSmubH7WxC', 'kamyas/Building 2/Baranggay Mansyon', 'Pasay City/ Metro Manila', 'Philippines', '2147483647'),
(13, 'x7CWNpjYTz', 'Panatag Road/Building 1/Addition Hills', 'Mandaluyong City/Metro Manila/1550', 'Philippines', '09213350837'),
(15, '67D5YxKqHN', 'Dugas/Lot.1/Baranggay together', 'Makati/ Metro Manila/ 1550', 'Philippines', '123123'),
(16, 'GjsrrIsaQE', 'Dugas/Lot.1/Baranggay together', 'Makati/ Metro Manila/ 1550', 'Philippines', '321321321'),
(17, 'rolyTVLr1C', 'qweqwqweqw', 'qweqqeeqw', 'ewqeqeqwe', '98989898'),
(21, 'mwEd4k1lGx', 'wejlfnweglk', 'fewfwef', 'eqwqeqqeqw', '131313132323');

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

-- --------------------------------------------------------

--
-- Table structure for table `parcel-track`
--

CREATE TABLE `parcel-track` (
  `id` int(255) NOT NULL,
  `Reference_number` varchar(20) NOT NULL,
  `Sender_Fname` varchar(20) NOT NULL,
  `Sender_Mname` varchar(20) NOT NULL,
  `Sender_Lname` varchar(20) NOT NULL,
  `Sender_Contactnum` varchar(20) NOT NULL,
  `Sender_address` varchar(20) NOT NULL,
  `Recipient_Fname` varchar(20) NOT NULL,
  `Recipient_Mname` varchar(20) NOT NULL,
  `Recipient_Lname` varchar(20) NOT NULL,
  `Recipient_Contactnum` varchar(20) NOT NULL,
  `Recipient_Destination` varchar(50) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Weight` varchar(20) NOT NULL,
  `Class` varchar(20) NOT NULL,
  `Type_of_Delivery` varchar(20) NOT NULL,
  `Type_of_Pick-up` varchar(20) NOT NULL,
  `Date_of_Pick-up` varchar(20) NOT NULL,
  `Time_of_Pick-up` varchar(20) NOT NULL,
  `Status` int(20) NOT NULL,
  `Date_created` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcel-track`
--

INSERT INTO `parcel-track` (`id`, `Reference_number`, `Sender_Fname`, `Sender_Mname`, `Sender_Lname`, `Sender_Contactnum`, `Sender_address`, `Recipient_Fname`, `Recipient_Mname`, `Recipient_Lname`, `Recipient_Contactnum`, `Recipient_Destination`, `Type`, `Size`, `Weight`, `Class`, `Type_of_Delivery`, `Type_of_Pick-up`, `Date_of_Pick-up`, `Time_of_Pick-up`, `Status`, `Date_created`) VALUES
(49, 'UAk6Z1lbPW', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '3123131', 'wejlfnweglk', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '3123113', 'Mandaluyong', 'Document', '40x60', '15kg', 'Regular - 50 php', 'Deliver to Recipient', 'Pick-up at your Addr', '2021-07-12', '10:40', 0, '2021-07-23 10:41:40.645759'),
(50, 'b6jn5CCGRH', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '123123', 'wejlfnweglk', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '312312', 'Mandaluyong', 'Document', '40x60', '15kg', 'Regular - 50 php', 'Deliver to Recipient', 'Pick-up at your Addr', '2021-07-28', '15:48', 0, '2021-07-23 15:48:12.935453'),
(51, 'cyWnUBoeDe', 'Bryan', 'R', 'Tabajonda', '09213350837', 'qweqewqeqwe', 'Jico', 'C', 'SanBuenaventura', '321321', 'Mandaluyong', 'Document', '40x60', '15kg', 'Regular - 50 php', 'Deliver to Recipient', 'Pick-up at your Addr', '2021-07-24', '08:00', 0, '2021-07-25 20:16:19.997060'),
(52, 'cyWnUBoeDe', 'Bryan', 'R', 'Tabajonda', '09213350837', 'qweqewqeqwe', 'Jico', 'C', 'SanBuenaventura', '321321', 'Mandaluyong', 'Document', '40x60', '15kg', 'Regular - 50 php', 'Deliver to Recipient', 'Pick-up at your Addr', '2021-07-24', '08:00', 1, '2021-07-25 20:17:11.532794'),
(53, 'b6jn5CCGRH', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '123123', 'wejlfnweglk', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '312312', 'Mandaluyong', 'Document', '40x60', '15kg', 'Regular - 50 php', 'Deliver to Recipient', 'Pick-up at your Addr', '2021-07-28', '15:48', 0, '2021-07-25 20:31:52.888521'),
(54, 'rlFG7j3k0y', 'Junel', 'S', 'Sindac', '31232133131', 'Panatagroad', 'Bryan', 'R', 'Tabajonda', '09213350837', 'Mandaluyong', 'Medium Box', '40x60', '15kg', 'Silver - 100 php', 'Deliver to Recipient', 'Pick-up at the neare', '2021-07-26', '10:00', 0, '2021-07-25 20:57:05.005707'),
(55, 'rlFG7j3k0y', 'Junel', 'S', 'Sindac', '31232133131', 'Panatagroad', 'Bryan', 'R', 'Tabajonda', '09213350837', 'Mandaluyong', 'Medium Box', '40x60', '15kg', 'Silver - 100 php', 'Deliver to Recipient', 'Pick-up at the neare', '2021-07-26', '10:00', 1, '2021-07-25 20:58:05.992166'),
(56, 'rlFG7j3k0y', 'Junel', 'S', 'Sindac', '31232133131', 'Panatagroad', 'Bryan', 'R', 'Tabajonda', '09213350837', 'Mandaluyong', 'Medium Box', '40x60', '15kg', 'Silver - 100 php', 'Deliver to Recipient', 'Pick-up at the neare', '2021-07-26', '10:00', 3, '2021-07-25 20:59:50.631461'),
(57, 'vIyoXV8zit', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '3312312312', 'wejlfnweglk', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '12313131231321', 'eqeqeqqeqw', 'Document', '40x60', '15kg', 'Regular - 50 php', 'Pick-up at the neare', 'Pick-up at the neare', '2021-07-27', '10:00', 0, '2021-07-25 21:20:48.167993'),
(58, 'vIyoXV8zit', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '3312312312', 'wejlfnweglk', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '12313131231321', 'eqeqeqqeqw', 'Document', '40x60', '15kg', 'Regular - 50 php', 'Pick-up at the neare', 'Pick-up at the neare', '2021-07-27', '10:00', 1, '2021-07-25 21:27:55.596494'),
(59, 'vIyoXV8zit', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '3312312312', 'wejlfnweglk', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '12313131231321', 'eqeqeqqeqw', 'Document', '40x60', '15kg', 'Regular - 50 php', 'Pick-up at the neare', 'Pick-up at the neare', '2021-07-27', '10:00', 8, '2021-07-25 21:36:03.381420'),
(60, 'zpiHjJZvXy', 'Jico', 'C', 'SanBuenaventura', '982304820', 'PasayCity', 'Bryan', 'R', 'Tabajonda', '239472349832', 'Mandaluyong', 'Pouch', '10x30', '1000g', 'Platinum - 150 php', 'Deliver to Recipient', 'Pick-up at the neare', '2021-07-27', '11:00', 0, '2021-07-26 10:48:42.425693'),
(61, 'zpiHjJZvXy', 'Jico', 'C', 'SanBuenaventura', '982304820', 'PasayCity', 'Bryan', 'R', 'Tabajonda', '239472349832', 'Mandaluyong', 'Pouch', '10x30', '1000g', 'Platinum - 150 php', 'Deliver to Recipient', 'Pick-up at the neare', '2021-07-27', '11:00', 1, '2021-07-26 10:56:19.592974'),
(62, 'zIFVSejQHz', 'Jico', 'C', 'SanBuenaventura', '09876543211', 'PasayCity', 'Bryan', 'R', 'Tabajonda', '09213350837', 'Mandaluyong', 'Small Box', '40x60', '15kg', 'Platinum - 150 php', 'Deliver to Recipient', 'Pick-up at the neare', '2021-07-27', '10:00', 0, '2021-07-26 13:35:55.122415'),
(63, 'zIFVSejQHz', 'Jico', 'C', 'SanBuenaventura', '09876543211', 'PasayCity', 'Bryan', 'R', 'Tabajonda', '09213350837', 'Mandaluyong', 'Small Box', '40x60', '15kg', 'Platinum - 150 php', 'Deliver to Recipient', 'Pick-up at the neare', '2021-07-27', '10:00', 1, '2021-07-26 13:42:53.800092'),
(64, 'cyWnUBoeDe', 'Bryan', 'R', 'Tabajonda', '09213350837', 'qweqewqeqwe', 'Jico', 'C', 'SanBuenaventura', '321321', 'Mandaluyong', 'Document', '40x60', '15kg', 'Regular - 50 php', 'Deliver to Recipient', 'Pick-up at your Addr', '2021-07-24', '08:00', 7, '2022-02-08 16:01:46.610254'),
(65, 'EhSgjK5RgZ', 'Bryan', 'C', 'Duterte', '2131311231', 'Blk.37 Panatag Road', 'Jico', 'B', 'Go', '09213350837', 'Mandaluyong', 'Small Box', '40x60', '15kg', 'Regular - 50 php', 'Deliver to Recipient', 'Pick-up at the neare', '2022-02-03', '09:15', 1, '2022-02-22 08:16:03.482135'),
(66, 'EhSgjK5RgZ', 'Bryan', 'C', 'Duterte', '2131311231', 'Blk.37 Panatag Road', 'Jico', 'B', 'Go', '09213350837', 'Mandaluyong', 'Small Box', '40x60', '15kg', 'Regular - 50 php', 'Deliver to Recipient', 'Pick-up at the neare', '2022-02-03', '09:15', 9, '2022-02-22 08:18:42.673914'),
(67, '3q6kUlIZ2d', 'eqweqweqe', 'C', 'eqweqwe', '09213350837', 'Blk.37 Panatag Road', 'Bryan', 'B', 'Tabajonda', '321321', 'Mandaluyong', 'Pouch', '40x60', '15kg', 'Regular - 50 php', 'Pick-up at the neare', 'Pick-up at the neare', '2022-02-23', '12:28', 2, '2022-02-22 08:29:30.793329'),
(68, '3q6kUlIZ2d', 'eqweqweqe', 'C', 'eqweqwe', '09213350837', 'Blk.37 Panatag Road', 'Bryan', 'B', 'Tabajonda', '321321', 'Mandaluyong', 'Pouch', '40x60', '15kg', 'Regular - 50 php', 'Pick-up at the neare', 'Pick-up at the neare', '2022-02-23', '12:28', 1, '2022-02-22 08:29:40.239628'),
(69, '3q6kUlIZ2d', 'eqweqweqe', 'C', 'eqweqwe', '09213350837', 'Blk.37 Panatag Road', 'Bryan', 'B', 'Tabajonda', '321321', 'Mandaluyong', 'Pouch', '40x60', '15kg', 'Regular - 50 php', 'Pick-up at the neare', 'Pick-up at the neare', '2022-02-23', '12:28', 6, '2022-02-22 09:32:19.348847'),
(70, 'fLb0WtSlTJ', 'Rodrigo', 'C', 'Duterte', '09213350837', 'Blk.37 Panatag Roa', 'Bong', 'C', 'Go', '09213350837', 'mandaluyong', 'Small Box', '40x60', '15kg', 'Regular - 50 php', 'Pick-up at the neare', 'Pick-up at your Addr', '2022-02-25', '10:00', 1, '2022-02-22 09:36:25.172619'),
(71, 'iB6hv0oIm8', 'Bryan', 'E', 'Tabajonda', '092133350837', 'Panatag Road', 'Bong', 'B', 'Go', '12313131231321', 'Mandaluyong', 'Small Box', '40x60', '15kg', 'Platinum - 150 php', 'Pick-up at the neare', 'Pick-up at the neare', '2022-02-24', '10:40', 9, '2022-02-22 09:42:49.782953');

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `Parcel_id` int(255) NOT NULL,
  `Reference_number` varchar(20) NOT NULL,
  `Sender_Fname` varchar(20) NOT NULL,
  `Sender_Mname` varchar(20) NOT NULL,
  `Sender_Lname` varchar(20) NOT NULL,
  `Sender_Contactnum` varchar(20) NOT NULL,
  `Sender_address` varchar(50) NOT NULL,
  `Recipient_Fname` varchar(20) NOT NULL,
  `Recipient_Mname` varchar(20) NOT NULL,
  `Recipient_Lname` varchar(20) NOT NULL,
  `Recipient_Contactnum` varchar(20) NOT NULL,
  `Recipient_Destination` varchar(50) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Weight` varchar(20) NOT NULL,
  `Class` varchar(20) NOT NULL,
  `Type_of_Delivery` varchar(50) NOT NULL,
  `Type_of_Pick-up` varchar(50) NOT NULL,
  `Date_of_Pick-up` varchar(20) NOT NULL,
  `Time_of_Pick-up` varchar(20) NOT NULL,
  `Status` int(20) NOT NULL,
  `Date_created` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`Parcel_id`, `Reference_number`, `Sender_Fname`, `Sender_Mname`, `Sender_Lname`, `Sender_Contactnum`, `Sender_address`, `Recipient_Fname`, `Recipient_Mname`, `Recipient_Lname`, `Recipient_Contactnum`, `Recipient_Destination`, `Type`, `Size`, `Weight`, `Class`, `Type_of_Delivery`, `Type_of_Pick-up`, `Date_of_Pick-up`, `Time_of_Pick-up`, `Status`, `Date_created`) VALUES
(60, 'b6jn5CCGRH', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '123123', 'wejlfnweglk', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '312312', 'Mandaluyong', 'Document', '40x60', '15kg', 'Regular - 50 php', 'Deliver to Recipient\'s Address', 'Pick-up at your Address', '2021-07-28', '15:48', 0, '2021-07-23 15:47:21.970181'),
(61, 'cyWnUBoeDe', 'Bryan', 'R', 'Tabajonda', '09213350837', 'qweqewqeqwe', 'Jico', 'C', 'SanBuenaventura', '321321', 'Mandaluyong', 'Document', '40x60', '15kg', 'Regular - 50 php', 'Deliver to Recipient\'s Address', 'Pick-up at your Address', '2021-07-24', '08:00', 7, '2021-07-23 19:10:14.113919'),
(63, 'vIyoXV8zit', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '3312312312', 'wejlfnweglk', 'eqweqweqe', 'wqeewqe', 'ewqeqwe', '12313131231321', 'eqeqeqqeqw', 'Document', '40x60', '15kg', 'Regular - 50 php', 'Pick-up at the nearest Branch', 'Pick-up at the nearest Branch', '2021-07-27', '10:00', 8, '2021-07-25 21:19:41.959909'),
(64, 'zpiHjJZvXy', 'Jico', 'C', 'SanBuenaventura', '982304820', 'PasayCity', 'Bryan', 'R', 'Tabajonda', '239472349832', 'Mandaluyong', 'Pouch', '10x30', '1000g', 'Platinum - 150 php', 'Deliver to Recipient\'s Address', 'Pick-up at the nearest Branch', '2021-07-27', '11:00', 1, '2021-07-26 10:47:18.070524'),
(65, 'zIFVSejQHz', 'Jico', 'C', 'SanBuenaventura', '09876543211', 'PasayCity', 'Bryan', 'R', 'Tabajonda', '09213350837', 'Mandaluyong', 'Small Box', '40x60', '15kg', 'Platinum - 150 php', 'Deliver to Recipient\'s Address', 'Pick-up at the nearest Branch', '2021-07-27', '10:00', 1, '2021-07-26 13:35:09.173115'),
(66, 'CPZeKSxlLD', 'Hur', 'P', 'Valdez', '123312313131', 'Blk.37 Panatag Road', 'Bryan', 'R', 'Tabajonda', '139191731', 'wqeqweqewqew', 'Small Box', '40x60', '15kg', 'Silver - 100 php', 'Pick-up at the nearest Branch', 'Pick-up at the nearest Branch', '2022-02-02', '03:55', 0, '2022-02-08 15:54:43.956056'),
(67, 'EhSgjK5RgZ', 'Bryan', 'C', 'Duterte', '2131311231', 'Blk.37 Panatag Road', 'Jico', 'B', 'Go', '09213350837', 'Mandaluyong', 'Small Box', '40x60', '15kg', 'Regular - 50 php', 'Deliver to Recipient\'s Address', 'Pick-up at the nearest Branch', '2022-02-03', '09:15', 9, '2022-02-22 08:15:26.332175'),
(68, '3q6kUlIZ2d', 'eqweqweqe', 'C', 'eqweqwe', '09213350837', 'Blk.37 Panatag Road', 'Bryan', 'B', 'Tabajonda', '321321', 'Mandaluyong', 'Pouch', '40x60', '15kg', 'Regular - 50 php', 'Pick-up at the nearest Branch', 'Pick-up at the nearest Branch', '2022-02-23', '12:28', 6, '2022-02-22 08:28:54.343058'),
(69, 'fLb0WtSlTJ', 'Rodrigo', 'C', 'Duterte', '09213350837', 'Blk.37 Panatag Roa', 'Bong', 'C', 'Go', '09213350837', 'mandaluyong', 'Small Box', '40x60', '15kg', 'Regular - 50 php', 'Pick-up at the nearest Branch', 'Pick-up at your Address', '2022-02-25', '10:00', 1, '2022-02-22 09:35:46.927366'),
(70, 'iB6hv0oIm8', 'Bryan', 'E', 'Tabajonda', '092133350837', 'Panatag Road', 'Bong', 'B', 'Go', '12313131231321', 'Mandaluyong', 'Small Box', '40x60', '15kg', 'Platinum - 150 php', 'Pick-up at the nearest Branch', 'Pick-up at the nearest Branch', '2022-02-24', '10:40', 9, '2022-02-22 09:41:16.216577');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `Staff_id` int(20) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Middle_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Contact_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`Staff_id`, `First_name`, `Middle_name`, `Last_name`, `Email`, `Contact_number`) VALUES
(2, 'BRYAN', 'REVILLA', 'TABAJONDA', 'TABAJONDABRYAN@YAHOO', '092819321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`Branch_id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`int`);

--
-- Indexes for table `parcel-track`
--
ALTER TABLE `parcel-track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`Parcel_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`Staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `user_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `Branch_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `int` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `parcel-track`
--
ALTER TABLE `parcel-track`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `Parcel_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `Staff_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
