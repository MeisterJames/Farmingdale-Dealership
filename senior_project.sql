-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 01, 2019 at 04:24 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senior_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookApp`
--

CREATE TABLE `bookApp` (
  `appID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `useremail` varchar(200) NOT NULL,
  `service` int(11) NOT NULL,
  `employeelist` int(11) NOT NULL,
  `carlist` int(11) NOT NULL,
  `appDate` varchar(100) NOT NULL,
  `appTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookApp`
--

INSERT INTO `bookApp` (`appID`, `username`, `useremail`, `service`, `employeelist`, `carlist`, `appDate`, `appTime`) VALUES
(34, 'steven', 'steven.rademacher1993@gmail.com', 1, 7, 45, '12/19/2018', '11:00:00'),
(35, 'steven', 'steven.rademacher1993@gmail.com', 2, 12, 0, '12/20/2018', '02:00:00'),
(36, 'steven', 'steven.rademacher1993@gmail.com', 3, 17, 0, '12/22/2018', '04:00:00'),
(37, 'steven', 'steven.rademacher1993@gmail.com', 4, 22, 0, '12/23/2018', '02:00:00'),
(38, 'steven', 'steven.rademacher1993@gmail.com', 1, 7, 68, '12/27/2018', '11:30:00'),
(39, 'villanmv', 'villanmv@farmingdale.edu', 1, 7, 66, '12/27/2018', '11:00:00'),
(40, 'villanmv', 'villanmv@farmingdale.edu', 3, 18, 0, '12/25/2018', '03:00:00'),
(41, 'steven', 'steven.rademacher1993@gmail.com', 1, 7, 69, '12/27/2018', '11:00:00'),
(42, 'James', 'james@gmail.com', 1, 9, 50, '12/28/2018', '11:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `car_trade`
--

CREATE TABLE `car_trade` (
  `id` int(11) NOT NULL,
  `fullName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(4) NOT NULL,
  `make` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `model` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `condi` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `miles` int(11) NOT NULL,
  `value` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_trade`
--

INSERT INTO `car_trade` (`id`, `fullName`, `year`, `make`, `model`, `condi`, `miles`, `value`) VALUES
(25, 'steven', 2015, 'Chevrolet', 'Cruze', 'Excellent', 42000, '5000'),
(26, 'James', 1991, 'Audi', 'subeiekd', 'New', 0, '0'),
(27, 'Doug', 1990, 'Alfa Romeo', 'subeiekd', 'Excellent', 0, '0'),
(28, 'James', 1991, 'Alfa Romeo', 'howareyoiu', 'Good', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `idEmps` int(11) NOT NULL,
  `eidEmps` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `emailEmps` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `pwdEmps` longtext COLLATE utf8_unicode_ci NOT NULL,
  `service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`idEmps`, `eidEmps`, `emailEmps`, `pwdEmps`, `service`) VALUES
(7, 'Robert', 'robert@gmail.com', '$2y$10$K/hB18q6Icazmme5YjsfiOgfYa8oyuV2HcHjJVVL68UwjBL.GB7GK', 1),
(8, 'Michael', 'michael@gmail.com', '$2y$10$RdRrNRpGjcx1rTomT5iQveJ5HDGi8weW0MjxIyvidEs32cc4YIhcS', 1),
(9, 'William', 'william@gmail.com', '$2y$10$r3N8LB0EJMBKfzh65kvccuSCvnEAA4ok80BEb4e6xmAl4ei4AY9x2', 1),
(10, 'David', 'david@gmail.com', '$2y$10$r3N8LB0EJMBKfzh65kvccuSCvnEAA4ok80BEb4e6xmAl4ei4AY9x2', 1),
(11, 'Richard', 'richard@gmail.com', '$2y$10$r3N8LB0EJMBKfzh65kvccuSCvnEAA4ok80BEb4e6xmAl4ei4AY9x2', 1),
(12, 'Joseph', 'joseph@gmail.com', '$2y$10$4HsiJJ9kZIklGqrvqJV2x..ARJJQ6GYVLRnegP9U95PCR3iBY0.Rm', 2),
(13, 'Thomas', 'thomas@gmail.com', '$2y$10$Y1pg2eUXSQjg8Bl8ocMYPOiETNOkkT9kB4JNMLVE.WNe2tJHYBPWe', 2),
(14, 'Daniel', 'daniel@gmail.com', '$2y$10$pqoQsn2bezG758ZLuqesWeVgTnGZ916Kn/eViGU4X2iplSEOmiqOW', 2),
(15, 'Matt', 'matt@gmail.com', '$2y$10$xlbkhQ.aSp5IQn.vGR.E4eWOHGITppFFp6EnNKBuYypp1UpR2sFu.', 2),
(16, 'Mark', 'mark@gmail.com', '$2y$10$29CahdSHYv0I1xMmXvRltuItpSmVdDTadqfiq.idjaj2A7wYEPlL2', 2),
(17, 'Andrew', 'andrew@gmail.com', '$2y$10$x/vPoe0LfI2KD6P.hadWfeutBZ0WLaQGR9c4js.cN5ZsTBLTYOkXy', 3),
(18, 'Greg', 'greg@gmail.com', '$2y$10$VKLVZkT.YoMlGhdhrdNNQ.S1omg2Pl53Tyz0CTOT.Zjjar.khnaw.', 3),
(19, 'Joshua', 'joshua@gmail.com', '$2y$10$1m9Q09geeru9azuw5ZhxxOqyqKOzbN3LbZh7r5EDhjEF1HUKLUUmW', 3),
(20, 'Jason', 'jason@gmail.com', '$2y$10$AuT5p9Ooroz0HQkP05LDv.ycxYfYzu8A5uS/6nvA6ulVR5wcC9wlW', 3),
(21, 'Eric', 'eric@gmail.com', '$2y$10$lK3LXwFrQdnbQn7Zpi3cCeCmqiGnbW.JdCYYSTMS72wGFYDaAi7Iu', 3),
(22, 'Frank', 'frank@gmail.com', '$2y$10$3zTXB2K7Q8xikOUZ5pInquSd5ffVxgNV3DGIZ4y6xihIiAo6fe3ta', 4),
(23, 'Jack', 'jack@gmail.com', '$2y$10$RJM4yysCtfxCmkZMmUqkCe3Nhopx.TufRXFlZs/6EmNFY9bJkhfDS', 4),
(24, 'Tyler', 'tyler@gmail.com', '$2y$10$TwsOk.dj0opDmNvAS3zE.etjNxVDsE0TdGDvY2cjpDAuo08LNQXtG', 4),
(25, 'Peter', 'peter@gmail.com', '$2y$10$ZNJLko4VjFmAWF0rsrbHr.BE8RrNHKp28gZUAMDOWgerZIVBS7xr.', 4),
(26, 'Walter', 'walter@gmail.com', '$2y$10$DdklsmVLIm3DX3vphdPXfuAZUFuM650W1kpOk/oJVwNKYjiFnVlS2', 4),
(27, 'aaa', 'thomasdupkavich@gmail.com', '$2y$10$sZLI0qUBpJJDeh8SnJxFA.R7.jA8468Gb9A/BkhcC19douUP6rUQS', NULL),
(28, 'test', 'test@gmail.com', '$2y$10$gyblk0OCs2Ti5o2VK6phHuZ6XM7kpT.CF..8tS4GEwLfebGEBzOT2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `invid` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `make` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `model` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `preown` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `condi` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `miles` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`invid`, `year`, `make`, `model`, `preown`, `condi`, `miles`, `price`) VALUES
(46, 2013, 'Chevrolet', 'Malibu', 'Yes', 'Excellent', 15000, '16999'),
(47, 2014, 'Chevrolet', 'Cruze', 'Yes', 'Good', 65000, '9999'),
(49, 2018, 'Chevrolet', 'Colorado', 'Yes', 'Good', 45000, '20999'),
(50, 2018, 'Chevrolet', 'Silverado 1500', 'No', 'New', 30, '29999'),
(51, 2017, 'Chevrolet', 'Silverado 1500', 'No', 'New', 65, '34999'),
(53, 2018, 'Audi', 'A3 Sedan', 'No', 'New', 100, '37499'),
(54, 2018, 'Audi', 'A5 Coupe', 'No', 'New', 76, '49999'),
(55, 2018, 'Audi', 'S5 Cabriolet', 'Yes', 'Excellent', 17349, '54999'),
(58, 2018, 'Dodge', 'Durango', 'Yes', 'Good', 52341, '22999'),
(60, 2018, 'Ford', 'Fusion', 'No', 'New', 21, '24995'),
(62, 2018, 'Ford', 'Taurus', 'Yes', 'Good', 29461, '17499'),
(64, 2018, 'Fiat', 'Spider', 'No', 'New', 44, '27999'),
(66, 2018, 'BMW', '230i Coupe', 'No', 'New', 49, '37999'),
(68, 2018, 'BMW', 'M4 Convertible', 'No', 'New', 49, '79999'),
(69, 2018, 'Toyota', 'Corolla', 'Yes', 'Fair', 94, '16'),
(70, 2018, 'Toyota', 'Camry', 'Yes', 'Excellent', 14348, '17999'),
(71, 2018, 'Toyota', 'Prius', 'No', 'New', 47, '26799'),
(72, 2018, 'Nissan', 'Sentra', 'Yes', 'Excellent', 36, '14'),
(74, 2018, 'Acura', 'ILX', 'No', 'New', 67, '27499'),
(75, 2015, 'Acura', 'RDX', 'Yes', 'Good', 34745, '28999'),
(76, 2018, 'Jeep', 'Grand Cherokee', 'No', 'New', 19, '44999'),
(77, 2018, 'Jeep', 'Wrangler', 'No', 'Excellent', 34, '35');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `InvoiceID` int(11) NOT NULL,
  `employee` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `customer` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `purchase` int(11) NOT NULL,
  `carlisting` int(11) NOT NULL,
  `cartrade` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`InvoiceID`, `employee`, `customer`, `purchase`, `carlisting`, `cartrade`, `price`) VALUES
(71, 'Frank', 'steven', 1, 45, 0, 16000),
(72, 'Frank', 'steven', 2, 0, 1, 25),
(73, 'William', 'Doug', 1, 43, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sold_inventory`
--

CREATE TABLE `sold_inventory` (
  `id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `make` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sold_inventory`
--

INSERT INTO `sold_inventory` (`id`, `year`, `make`, `model`, `price`) VALUES
(47, 2018, 'BMW', 'Alpina B6', 129999),
(48, 2018, 'Dodge', 'Charger', 29999),
(49, 2015, 'Chevrolet', 'Impala', 16999),
(50, 2018, 'Chevrolet', 'Equinox', 12999),
(51, 2018, 'BMW', 'Alpina B6', 129999),
(52, 2018, 'Dodge', 'Charger', 29999),
(53, 2015, 'Chevrolet', 'Impala', 16999),
(54, 2018, 'Chevrolet', 'Equinox', 12999),
(55, 2017, 'Chevrolet', 'Impala', 27995),
(58, 2018, 'Chevrolet', 'Malibu', 21000),
(59, 2017, 'Chevrolet', 'Cruze', 13499);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext CHARACTER SET latin1 NOT NULL,
  `emailUsers` tinytext CHARACTER SET latin1 NOT NULL,
  `pwdUsers` longtext CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(3, 'James', 'james@gmail.com', '$2y$10$.t5WXIUA1fA21oyxITP5n.VSlhYm7gBwu.4rpraowOKgFCQDnDqse'),
(7, 'steven', 'steven.rademacher1993@gmail.com', '$2y$10$Pc0g6rxartk2x2MNja4vFOcR61.jHyQCkDEaw4dfwLzVU8ez4ERVe'),
(9, 'Nick', 'Nick@gmail.com', '$2y$10$clq7e.KS9SE6fKXbeEb.GedNq0brKzxTkr3JyQfDWgOIKiSegiHl.'),
(10, 'Doug', 'doug@gmail.com', '$2y$10$gHxdig5MBQQkhm1LTsLpwudEYbO8/CR8U.uATSIC.9H5RSLvvDmvO'),
(11, 'Laila', 'Laila@gmail.com', '$2y$10$tk1xILFueHpQyZiivHcY.e0p9tcVxxeNiCjyr0T9iYU3O3vt8uYXq'),
(12, 'Joe', 'test@gmail.com', '$2y$10$129K/eNcdpHOIWpzMmBe0eQfvAD.MPsyyBr8i/FG7a7XpbJ4JsWy2'),
(13, 'john', 'test@gmail.com', '$2y$10$cGFJXGs1UCZPGjpJyC4Tj.mZNi8casWEDzddTMpuNh13q7.8UyQZu'),
(14, 'steve', 'test@gmail.com', '$2y$10$vhQV5TT3UevQHwNWnq2RoeC9GAQpWU/WiSb64xi0YFwbCM3.13Opa'),
(15, 'tjd', 'thomasdupkavich@gmail.com', '$2y$10$7nbHq3S1UX9YMijCyADEG.7k39JFBUJmlF96j1oLgo4lJ.MvBUfGy'),
(16, 'test', 'test@gmail.com', '$2y$10$2upjcee1gppXVCws//lMy.Ym3xHbjKe4JA3Rm/OyhKnKOqt0P9TZO'),
(17, 'villanmv', 'villanmv@farmingdale.edu', '$2y$10$Q/GM4eT6ZvAZvMZXcLeyCe662WAzZnyUu7O/JR2GmXyRabRYEmAhm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookApp`
--
ALTER TABLE `bookApp`
  ADD PRIMARY KEY (`appID`);

--
-- Indexes for table `car_trade`
--
ALTER TABLE `car_trade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`idEmps`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`invid`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`InvoiceID`);

--
-- Indexes for table `sold_inventory`
--
ALTER TABLE `sold_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookApp`
--
ALTER TABLE `bookApp`
  MODIFY `appID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `car_trade`
--
ALTER TABLE `car_trade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `idEmps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `invid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `sold_inventory`
--
ALTER TABLE `sold_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
