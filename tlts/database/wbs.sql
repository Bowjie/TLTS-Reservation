-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 05:43 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cd`
--

CREATE TABLE `cd` (
  `cdid` varchar(25) NOT NULL,
  `eqtype` varchar(255) NOT NULL,
  `cdqty` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cd`
--

INSERT INTO `cd` (`cdid`, `eqtype`, `cdqty`) VALUES
('cd01', 'CD ni Pakyaw', '1'),
('cd02', 'CD NI CONG', '1');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `eqid` varchar(25) NOT NULL,
  `eqdesc` varchar(225) NOT NULL,
  `eqtype` varchar(35) NOT NULL,
  `eqstatus` varchar(45) NOT NULL,
  `eqqty` varchar(45) DEFAULT NULL,
  `eq_img` varchar(255) DEFAULT NULL,
  `additional_payment` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`eqid`, `eqdesc`, `eqtype`, `eqstatus`, `eqqty`, `eq_img`, `additional_payment`) VALUES
('ac01', 'CD-R King', 'Audio Cord', 'Available', '20', 'equipment/audio cord.jpg', ''),
('cdc01', 'Philips', 'CD Cassette', 'Available', '10', 'equipment/CD Cassette Player.jpeg', ''),
('dc01', 'Canon', 'Digital Camera', 'Available', '10', 'equipment/Digital Camera Still.jpg', ''),
('dc02', 'Miniso', 'Document Camera', 'Available', '10', 'equipment/Document Camera.jpg', ''),
('dvc01', 'Canon 2.0', 'Digital Video Camera', 'Available', '10', 'equipment/Digital Video Camera.jpg', ''),
('dvdp01', 'Sony', 'DVD Player', 'Available', '10', 'equipment/DVD Player.jpg', ''),
('ext01', 'CDR KING', 'Extension', 'Available', '20', 'equipment/extension.jpg', ''),
('hdmi01', 'CD-R King', 'HDMI Cord', 'Available', '20', 'equipment/hdmi.jpg', ''),
('k01', 'Karaoke', 'Karaoke', 'Available', '10', 'equipment/Karaoke.jpg', ''),
('lap01', 'Acer Predator', 'Laptop', 'Available', '10', 'equipment/Laptop.jpg', ''),
('lcd01', 'HP 5000', 'LCD Projector', 'Available', '10', 'equipment/LCD.jpg', ''),
('mic01', 'Seinheiser', 'Microphone', 'Available', '10', 'equipment/Microphone.jpg', ''),
('mirgp', 'MIR-GP', 'MIR-GP', 'Available', '1', 'equipment/mirgp.jpg', ''),
('mirlv', 'MIR-LV', 'MIR-LV', 'Available', '1', 'equipment/mirlv.jpg', ''),
('op01', 'CD-R King', 'Overhead Projector', 'Available', '10', 'equipment/Overhead Project.jpg', ''),
('pas01', 'Human', 'Personal Assistant Services', 'Available', '10', 'equipment/PAS.jpg', ''),
('sp01', 'Ximiso', 'Slide Projector', 'Available', '10', 'equipment/Slide Projector.jpg', ''),
('vcdp01', 'Philips', 'VCD Player', 'Available', '10', 'equipment/vcd.jpg', ''),
('vgac01', 'Sony', 'VGA Cord', 'Available', '20', 'equipment/vga.jpg', ''),
('vhs01', 'Philips', 'VHS Projector', 'Available', '10', 'equipment/VHS Player.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `admin_id` varchar(11) DEFAULT NULL,
  `equipment_id` varchar(25) NOT NULL,
  `nos` varchar(60) NOT NULL,
  `purpose` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  `num_stud` varchar(60) NOT NULL,
  `dates` varchar(60) NOT NULL,
  `start_time` varchar(60) NOT NULL,
  `end_time` varchar(60) NOT NULL,
  `campus` varchar(45) DEFAULT NULL,
  `room` varchar(45) DEFAULT NULL,
  `status` varchar(60) NOT NULL,
  `received_datetime` varchar(45) DEFAULT NULL,
  `fine` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `user_id`, `admin_id`, `equipment_id`, `nos`, `purpose`, `department`, `num_stud`, `dates`, `start_time`, `end_time`, `campus`, `room`, `status`, `received_datetime`, `fine`) VALUES
(18, '123', '123', 'cd01', 'academic', 'Preserntation/Lecture', 'CEIS', '1-99', '03/13/2018', '11:50', '18:30', 'GP', '508', 'finished', '03/28/2018', 'Overdue,&nbsp;P&nbsp;35760'),
(19, '123', '123', 'ac01', 'Co-curricular/Extra-curricular', 'Viewing', 'Pharmacy', '100-199', '03/13/2018', '11:50', '18:30', 'LV', '301', 'finished', '03/28/2018', 'Overdue,&nbsp;P&nbsp;35680'),
(20, '123', '123', 'cd02', 'Co-curricular/Extra-curricular', 'Viewing', 'Pharmacy', '100-199', '03/13/2018', '11:50', '18:30', 'LV', '301', 'approved', NULL, ''),
(21, '123', NULL, 'vhs01', 'academic', 'Preserntation/Lecture', 'Business Ad.', '1-99', '03/29/2018', '10:00', '12:00', 'GP', '104', 'approved', NULL, ''),
(22, '123', NULL, 'vhs01', 'academic', 'Preserntation/Lecture', 'Business Ad.', '1-99', '03/29/2018', '10:00', '12:00', 'GP', '104', 'pending', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`) VALUES
(91, 'Harold', 'Jones'),
(89, 'Christine', 'Smith'),
(88, 'Marker', 'Angela'),
(87, 'Romeo', 'Mary'),
(86, 'Smith', 'John');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(45) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `type`, `password`, `hash`, `active`, `status`, `avatar`) VALUES
('115dean', 'dean', 'Astilla', 'asd@gmail.com', 'user', 'f1290186a5d0b1ceab27f4e77c0c5d68', '20aee3a5f4643755a79ee5f6a73050ac', 0, 'Active', NULL),
('123', 'ceu', 'makati', 'raqibidris@gmail.com', 'admin', 'fae0b27c451c728867a567e8c1bb4e53', 'd41d8cd98f00b204e9800998ecf8427e', 0, 'Active', NULL),
('1234', 'Aira', 'Astilla', 'bojiastilla11@gmail.com', 'user', 'fae0b27c451c728867a567e8c1bb4e53', '1a5b1e4daae265b790965a275b53ae50', 0, 'Active', NULL),
('12345', 'Aira', 'Astilla', 'bojiastilla11@gmail.com', 'staff', 'fae0b27c451c728867a567e8c1bb4e53', 'edfbe1afcf9246bb0d40eb4d8027d90f', 0, 'Active', NULL),
('5tswq$#0', 'Aira', 'Astilla', 'bojiastilla11@gmail.com', 'user', '7694f4a66316e53c8cdd9d9954bd611d', '0d3180d672e08b4c5312dcdafdf6ef36', 0, 'Active', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cd`
--
ALTER TABLE `cd`
  ADD PRIMARY KEY (`cdid`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`eqid`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `user_id_idx` (`user_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
