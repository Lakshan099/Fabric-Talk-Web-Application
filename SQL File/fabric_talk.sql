-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 04:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fabric_talk`
--

-- --------------------------------------------------------

--
-- Table structure for table `bedcovers`
--

CREATE TABLE `bedcovers` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Size` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Quantity` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bedcovers`
--

INSERT INTO `bedcovers` (`ID`, `Name`, `Type`, `Size`, `Price`, `Quantity`, `path`) VALUES
(1, 'Bedsheet + Two Pillow Covers', 'Egyptian Cotten', '60 x 90', '1450', '20', 'uploads/rt1.jpg'),
(2, 'Bedsheet + Two Pillow Covers', 'Egyptian Cotten', '60 x 90', '1500', '50', 'uploads/rt2.jpg'),
(3, 'Bedsheet + Two Pillow Covers', 'Egyptian Cotten', '60 x 90', '1800', '60', 'uploads/rt3.jpg'),
(4, 'Bedsheet + Two Pillow Covers', 'Egyptian Cotten', '60 x 90', '1650', '40', 'uploads/rt4.jpg'),
(5, 'Bedsheet + Two Pillow Covers', 'Egyptian Cotten', '90 x 90', '2000', '10', 'uploads/rt5.jpg'),
(17, 'cur1', 'Italy Cotten', 'Italy Cotten', '1500', '10', 'uploads/'),
(18, 'cur1', 'Italy Cotten', 'Italy Cotten', '1500', '10', 'uploads/'),
(19, 'cur1', 'Italy Cotten', 'Italy Cotten', '1500', '10', 'uploads/'),
(20, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(21, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(22, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(23, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(24, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(25, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(26, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(27, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(28, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(29, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(30, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(31, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(32, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(33, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(34, 'cvc', 'Egyptian Cotten', 'Egyptian Cotten', '1500', '10', 'uploads/'),
(35, 'cvc', 'Egyptian Cotten', '60 x 90', '1500', '10', 'uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Subject` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Fname`, `Lname`, `Country`, `Subject`) VALUES
(1, 'aaa', 'aaa', 'Sri Lanka', 'aaaa'),
(2, 'aaaxxxx', 'aaa', 'Sri Lanka', 'aaaaxx');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Bday` varchar(255) NOT NULL,
  `NIC` varchar(255) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Stype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Fname`, `Lname`, `Phone`, `Email`, `Password`, `Bday`, `NIC`, `Address`, `Gender`, `Stype`) VALUES
(1, 'Lakshan', 'Sandanayaka', '0770614866', 'lakshan@lakdew.com', '12345', '1999-03-09', '990691762V', 'Bandaragama', 'Male', 'Real Time'),
(2, 'Saman', 'perera', '0714188122', 'saman@gmail.com', '12345', '2004-05-03', '990692072V', 'Bandaragama', 'Male', 'Real Time'),
(3, 'teast', 'test2', '0714188122', 'test@gmail.com', '12345', '2021-11-16', '990692072V', 'horana', 'Male', 'Real Time');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bedcovers`
--
ALTER TABLE `bedcovers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bedcovers`
--
ALTER TABLE `bedcovers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
