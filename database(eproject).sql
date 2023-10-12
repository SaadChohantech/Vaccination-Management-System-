-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 07:45 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `addchild`
--

CREATE TABLE `addchild` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `blood` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addchild`
--

INSERT INTO `addchild` (`id`, `Name`, `age`, `gender`, `blood`, `user_id`) VALUES
(27, 'rizwan', 19, 'Male', 'B+ve', 6),
(31, 'sudais', 15, 'Male', 'A+ve', 6),
(32, 'Qasim', 17, 'Male', 'O-ve', 3),
(34, 'umer', 18, 'Male', 'A+ve', 6),
(35, 'pakistan', 18, 'Male', 'A+ve', 6),
(36, 'saad', 18, 'Male', 'A+ve', 6),
(40, 'hamna', 19, 'Male', 'O+ve', 3),
(41, 'irfan', 17, 'Male', 'B-ve', 5),
(42, 'Usama', 17, 'Male', 'A-ve', 5),
(43, 'naeem', 19, 'Male', 'O+ve', 5),
(45, 'rohan', 17, 'Male', 'O+ve', 3),
(47, 'saad', 17, 'Male', 'B+ve', 3),
(48, 'yasir', 16, 'Male', 'B-ve', 3),
(49, 'karim', 16, 'Male', 'O+ve', 5);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Image`, `Email`, `Password`) VALUES
(2, 'Saad Chohan', 'img/saad.jpg', 'chohan@gmail.com', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `bookapp`
--

CREATE TABLE `bookapp` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `date2` date NOT NULL,
  `date3` date NOT NULL,
  `gender` varchar(200) NOT NULL,
  `hospital` varchar(200) NOT NULL,
  `status` varchar(255) DEFAULT 'Pending',
  `vaccine` varchar(200) NOT NULL,
  `status2` varchar(255) DEFAULT 'Pendings',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookapp`
--

INSERT INTO `bookapp` (`id`, `Name`, `date`, `date2`, `date3`, `gender`, `hospital`, `status`, `vaccine`, `status2`, `user_id`) VALUES
(1, 'Fahad', '2023-01-02', '2023-01-15', '2023-02-03', 'Male', 'South City', 'Reject', 'Fizer', 'Not Vaccinated', 0),
(2, 'Hamdan', '2023-01-03', '2023-01-17', '2023-02-05', 'Male', 'Aga khan', 'Pending', 'CanSino', 'Pending', 0),
(7, 'Hamna', '2023-01-16', '2023-01-19', '2023-02-09', 'Female', 'South City', 'Reject', 'Fizer', 'Vaccinated', 0),
(8, 'Ayesha', '2023-01-19', '2023-01-21', '2023-02-10', 'Female', 'South City', 'Approved', 'Sinovac	', 'Vaccinated', 0),
(9, 'sudais', '2023-01-21', '2023-01-23', '2023-02-15', 'Male', 'Aga khan', 'Approved', 'Fizer', 'Vaccinated', 0),
(10, 'Osama', '2023-02-24', '2023-01-23', '2023-02-19', 'Male', 'South City', 'Approved', 'Fizer', 'Vaccinated', 0),
(11, 'Tahir', '2023-02-27', '2023-01-29', '2023-02-28', 'Male', 'Bantva', 'Approved', 'CanSino', 'Vaccinated', 0),
(12, 'Waqas', '2023-03-14', '2023-03-19', '2023-03-27', 'Male', 'liqauat', 'Approved', 'CanSino', 'Vaccinated', 0),
(13, 'Kareem', '2023-02-27', '2023-03-09', '2023-03-19', 'Male', 'liqauat', 'Approved', 'Fizer', 'Pendings', 0),
(14, 'Umer', '2023-03-19', '0000-00-00', '0000-00-00', 'Male', 'Aga khan', 'Approved', 'Fizer', 'Vaccinated', 0),
(15, 'sudais', '2023-02-23', '0000-00-00', '0000-00-00', 'Male', 'South City', 'Pending', 'Fizer', 'Pendings', 0),
(16, 'umer', '2023-03-24', '0000-00-00', '0000-00-00', 'Male', 'liqauat', 'Pending', 'Fizer', 'Pendings', 0),
(17, 'saad', '2023-02-23', '0000-00-00', '0000-00-00', 'Male', 'liqauat', 'Pending', 'Fizer', 'Pendings', 0),
(18, 'pakistan', '2023-01-23', '0000-00-00', '0000-00-00', 'Male', 'liqauat', 'Pending', 'Fizer', 'Pendings', 6),
(19, 'sudais', '2023-02-24', '0000-00-00', '0000-00-00', 'Male', 'South City', 'Approved', 'CanSino', 'Vaccinated', 6),
(20, 'tahir', '2023-03-21', '0000-00-00', '0000-00-00', 'Male', 'South City', 'Approved', 'Fizer', 'Pendings', 3),
(23, 'hamna', '2023-03-25', '0000-00-00', '0000-00-00', 'Female', 'Bantva', 'Reject', 'Livzon', 'Pendings', 3),
(24, 'Qasim', '2023-02-25', '0000-00-00', '0000-00-00', 'Male', 'Bantva', 'Approved', 'MODERNA', 'Pendings', 3),
(25, 'irfan', '2023-02-18', '0000-00-00', '0000-00-00', 'Male', 'Aga khan', 'Approved', 'Livzon', 'Pendings', 5),
(26, 'Usama', '2023-03-16', '0000-00-00', '0000-00-00', 'Male', 'Bantva', 'Approved', 'Fizer', 'Pendings', 5),
(28, 'karim', '2023-03-18', '0000-00-00', '0000-00-00', 'Male', 'Bantva', 'Approved', 'Fizer', 'Pendings', 5),
(29, 'rohan', '2023-03-18', '0000-00-00', '0000-00-00', 'Male', 'Bantva', 'Approved', 'Fizer', 'Vaccinated', 3),
(30, 'saad', '2023-02-23', '0000-00-00', '0000-00-00', 'Male', 'Aga khan', 'Approved', 'MODERNA', 'Vaccinated', 3),
(31, 'yasir', '2023-02-23', '0000-00-00', '0000-00-00', 'Male', 'Ziauddin', 'Pending', 'Livzon', 'Pendings', 3),
(32, 'naeem', '2023-02-23', '0000-00-00', '0000-00-00', 'Male', 'Ziauddin', 'Approved', 'Fizer', 'Vaccinated', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `email`, `address`) VALUES
(45, 'liqauat', 'liaquat@gmail.com', 'Near Aga khan'),
(46, 'Bantva', 'bantva@gmail.com', 'Near kutiyana hall'),
(47, 'Aga khan', 'agakhan@gmail.com', 'Near Aga Khan'),
(48, 'Ziauddin ', 'zia@gmail.com', 'Near Clifton');

-- --------------------------------------------------------

--
-- Table structure for table `hregister`
--

CREATE TABLE `hregister` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` int(11) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hregister`
--

INSERT INTO `hregister` (`id`, `Name`, `email`, `password`, `address`) VALUES
(1, 'liqauat', 'liaquat@gmail.com', 1234, 'near agakhan'),
(2, '', '', 0, ''),
(3, 'Aga khan', 'agakhan@gmail.com', 1234, 'near liaquat hospital');

-- --------------------------------------------------------

--
-- Table structure for table `pregister`
--

CREATE TABLE `pregister` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `Password` int(11) NOT NULL,
  `Image` varchar(300) NOT NULL,
  `Contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pregister`
--

INSERT INTO `pregister` (`id`, `Name`, `email`, `Password`, `Image`, `Contact`) VALUES
(3, 'Huzaifa', 'huzaifa@gmail.com', 12345, 'img/doctor-thumb-04.jpg', 2147483647),
(5, 'jilani', 'j@gmail.com', 123, 'img/saad.jpg', 1234),
(6, 'sudais', 's@gmail.com', 1234, 'img/saad.jpg', 1234),
(8, 'huzia', 'h@gmail.com', 1223, 'img/saad.jpg', 18291892),
(9, 'Hamdan', 'ha@gmail.com', 1234, 'img/saad.jpg', 1234567),
(10, 'anus', 'a@gmail.com', 1234, 'img/saad.jpg', 1234567),
(11, 'tahir', 't@gmail.com', 1234, 'img/saad.jpg', 928918291),
(12, 'ibrahim', 'i@gmail.com', 1234, 'img/saad.jpg', 29302039),
(13, 'qasim', 'q@gmail.com', 1234, 'img/saad.jpg', 2147483647),
(14, 'ibrahim', 'i@gmail.com', 1234, 'img/saad.jpg', 2129182818),
(15, 'waqas', 'w@gmail.com', 1234, 'img/saad.jpg', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `statues` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`id`, `Name`, `statues`) VALUES
(2, 'PFIZER', 'Available'),
(4, 'MODERNA', 'Available'),
(5, 'Fizer', 'Available'),
(6, 'CanSino', 'Unavailable'),
(7, 'Livzon ', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addchild`
--
ALTER TABLE `addchild`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hregister`
--
ALTER TABLE `hregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pregister`
--
ALTER TABLE `pregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addchild`
--
ALTER TABLE `addchild`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookapp`
--
ALTER TABLE `bookapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `hregister`
--
ALTER TABLE `hregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pregister`
--
ALTER TABLE `pregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
