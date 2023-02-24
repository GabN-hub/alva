-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 07:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alva`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apt_batangas`
--

CREATE TABLE `tbl_apt_batangas` (
  `no` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type_visa` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `type_apt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_apt_batangas`
--

INSERT INTO `tbl_apt_batangas` (`no`, `firstname`, `lastname`, `email`, `contact`, `address`, `type_visa`, `date`, `time`, `type_apt`) VALUES
(1, 'batr', 'test', 'bat@yahoo.com', '09876261234', 'quezon', 'partner', '2022-12-24', '1-2PM', 'Group'),
(2, 'Gustav', 'Neri', 'gustav@gmail.com', '09321987765', 'batangas', 'business', '2022-12-17', '3-4PM', 'Solo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apt_cdo`
--

CREATE TABLE `tbl_apt_cdo` (
  `no` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type_visa` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `type_apt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_apt_cdo`
--

INSERT INTO `tbl_apt_cdo` (`no`, `firstname`, `lastname`, `email`, `contact`, `address`, `type_visa`, `date`, `time`, `type_apt`) VALUES
(4, 'Miko', 'jona', 'miko@gmail.com', '09565477561', 'Laguna', 'guardian', '2022-12-31', '2-3PM', 'Solo'),
(5, 'makati', 'ciuty', 'makati@yahoo.com', '09565477562', 'rizal', 'student', '2022-12-12', '9-10AM', 'Solo'),
(6, 'makati2', 'city2', 'makati@yahoo.com', '09326171234', 'rizalk', 'guardian', '2022-12-24', '12-1PM', 'Solo'),
(7, 'Hannah', 'Cruz', 'hanna@gmail.com', '09326661234', 'taytay', 'tourist', '2022-12-15', '9-10AM', 'Solo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apt_cebu`
--

CREATE TABLE `tbl_apt_cebu` (
  `no` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type_visa` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `type_apt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_apt_cebu`
--

INSERT INTO `tbl_apt_cebu` (`no`, `firstname`, `lastname`, `email`, `contact`, `address`, `type_visa`, `date`, `time`, `type_apt`) VALUES
(1, 'Cebu', 'Test', 'cebu@gmail.com', '09321234444', 'cebu', 'partner', '2022-12-11', '10-11AM', 'Group'),
(2, 'Cebuano', 'tatyo', 'cebuano@gmail.com', '09561231111', 'batangas', 'partner', '2022-12-22', '1-2PM', 'Solo'),
(3, 'Ako', 'Cebu', 'ako@gmail.com', '09167771234', 'cebu city', 'guardian', '2022-12-19', '4-5PM', 'Group');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apt_makati`
--

CREATE TABLE `tbl_apt_makati` (
  `no` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type_visa` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `type_apt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_apt_makati`
--

INSERT INTO `tbl_apt_makati` (`no`, `firstname`, `lastname`, `email`, `contact`, `address`, `type_visa`, `date`, `time`, `type_apt`) VALUES
(1, 'ksd', 'pls', 'has@yahoo.com', '09328881923', 'Taytay', 'guardian', '2022-12-23', '12-1PM', 'Solo'),
(2, 'Rizal', 'Test', 'rizal@yahoo.com', '09321234444', 'Taytay', 'tourist', '2022-12-21', '9-10AM', 'Solo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apt_pampanga`
--

CREATE TABLE `tbl_apt_pampanga` (
  `no` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type_visa` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `type_apt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_apt_pampanga`
--

INSERT INTO `tbl_apt_pampanga` (`no`, `firstname`, `lastname`, `email`, `contact`, `address`, `type_visa`, `date`, `time`, `type_apt`) VALUES
(1, 'pam', 'test', 'pam@gmail.com', '09561234444', 'rizal', 'partner', '2022-12-17', '1-2PM', 'Group');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apt_rizal`
--

CREATE TABLE `tbl_apt_rizal` (
  `no` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type_visa` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `type_apt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_apt_rizal`
--

INSERT INTO `tbl_apt_rizal` (`no`, `firstname`, `lastname`, `email`, `contact`, `address`, `type_visa`, `date`, `time`, `type_apt`) VALUES
(1, 'Rizal1', 'Test1', 'rizal@gmail.com', '09325671223', 'manila', 'partner', '2022-12-23', '12-1PM', 'Solo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employeeaccs`
--

CREATE TABLE `tbl_employeeaccs` (
  `no` int(11) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employeeaccs`
--

INSERT INTO `tbl_employeeaccs` (`no`, `Email`, `Password`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'alvacdo@gmail.com', 'alvaCDO'),
(4, 'alvamakati2010@gmail.com', 'alvaMAKATI'),
(5, 'alvarizal2010@gmail.com', 'alvaRIZAL'),
(6, 'alvacebu2010@gmail.com', 'alvaCEBU'),
(7, 'alvapampanga@gmail.com', 'alvaPAMPANGA'),
(8, 'alvaplusbatangas2010@gmail.com', 'alvaBATANGAS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `no` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`no`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'gabie', 'neri', 'gabie@gmail.com', 'password'),
(2, 'Emman', 'Roxas', 'emman@gmail.com', 'password'),
(3, 'Giro', 'Neri', 'giro@gmail.com', 'password'),
(4, 'customer1', 'cus', 'cus@gmail.com', 'password'),
(5, 'Gabriellaa', 'Neri', 'gabriella@gmail.com', 'password'),
(6, 'jana', 'pongco', 'jana@gmail.com', 'password'),
(7, 'james', 'pongco', 'james@gmail.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_apt_batangas`
--
ALTER TABLE `tbl_apt_batangas`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_apt_cdo`
--
ALTER TABLE `tbl_apt_cdo`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_apt_cebu`
--
ALTER TABLE `tbl_apt_cebu`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_apt_makati`
--
ALTER TABLE `tbl_apt_makati`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_apt_pampanga`
--
ALTER TABLE `tbl_apt_pampanga`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_apt_rizal`
--
ALTER TABLE `tbl_apt_rizal`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_employeeaccs`
--
ALTER TABLE `tbl_employeeaccs`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_apt_batangas`
--
ALTER TABLE `tbl_apt_batangas`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_apt_cdo`
--
ALTER TABLE `tbl_apt_cdo`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_apt_cebu`
--
ALTER TABLE `tbl_apt_cebu`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_apt_makati`
--
ALTER TABLE `tbl_apt_makati`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_apt_pampanga`
--
ALTER TABLE `tbl_apt_pampanga`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_apt_rizal`
--
ALTER TABLE `tbl_apt_rizal`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_employeeaccs`
--
ALTER TABLE `tbl_employeeaccs`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
