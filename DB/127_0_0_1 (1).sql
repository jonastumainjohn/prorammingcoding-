-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2022 at 07:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jonas`
--
CREATE DATABASE IF NOT EXISTS `jonas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jonas`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `contact` int(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `passward` text NOT NULL,
  `myfile` blob NOT NULL,
  `privelege` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `sname`, `username`, `gender`, `contact`, `dob`, `email`, `passward`, `myfile`, `privelege`, `comment`) VALUES
(10, 'frank', 'komba', 'frank komba', 'male', 755076599, '2022-07-18', '[jonas@gmail.com]', '1234', '', 'Student', '[this is how we do]'),
(12, 'jonas', 'john', 'jonas john', 'male', 628033508, '2000-05-16', '[jonas@gmail.com]', 'savimbi2000', '', 'admin', '[this is how we do]'),
(18, 'ezekiel', 'coder', 'ezekiel coder', 'male', 655076599, '2022-07-28', '[jonas@gmail.com]', 'mysql', '', 'Student', '[this is how we do]'),
(19, 'frolentina', 'john', 'frolentina john', 'female', 755076566, '2022-07-29', '[jonas@gmail.com]', 'mama', '', 'Student', '[this is how we do]'),
(20, 'jovian', 'john', 'jovian john', 'male', 628033508, '2022-07-05', '[jonas@gmail.com]', 'jovii', '', 'Student', '[this is how we do]'),
(23, 'savimbi', 'jtz', 'savimbi jtz', 'male', 795076599, '2022-07-29', '[jonas@gmail.com]', '2000', '', 'Student', '[this is how we do]'),
(25, 'kaka', 'upendo', 'kaka upendo', 'male', 795076578, '2022-08-01', '[jonas@gmail.com]', 'kakaa', '', 'Student', '[this is how we do]'),
(26, 'jesca', 'john', 'jesca john', 'female', 745076598, '2022-08-02', '[jonas@gmail.com]', 'jess', '', 'Student', '[this is how we do]'),
(29, 'kwetu', 'studio', 'kwetu studio', 'male', 735076590, '2022-08-11', '[jonas@gmail.com]', 'mwanza', '', 'Student', '[this is how we do]'),
(33, 'samsoni', 'komba', 'samsoni komba', 'male', 712076588, '2022-08-16', '[jonas@gmail.com]', '1234', '', 'Student', '[this is how we do]'),
(34, 'frank', 'mwanawima', 'frank mwanawima', 'female', 628076597, '2022-08-03', '[jonas@gmail.com]', '1234', '', 'Student', '[this is how we do]'),
(35, 'juma', 'wilson', 'juma wilson', 'male', 755076594, '2022-09-10', '[jonas@gmail.com]', '123', '', 'Student', '[this is how we do]'),
(36, 'Rhoda', 'Mwenda', 'Rhoda Mwenda', 'female', 715076599, '2022-08-13', '[jonas@gmail.com]', '12345', '', 'Student', '[this is how we do]'),
(37, 'Agness', 'Elias', 'Agness Elias', 'female', 755076589, '2022-08-26', '[jonas@gmail.com]', '@123', '', 'Student', '[this is how we do]'),
(38, 'Vumilia', 'Mayanga', 'Vumilia Mayanga', 'female', 650767869, '2022-08-12', '[jonas@gmail.com]', '@1234', '', 'Student', '[this is how we do]'),
(39, 'Sofia', 'Msafiri', 'Sofia Msafiri', 'female', 625076599, '2022-09-02', '[jonas@gmail.com]', '#@123', '', 'Student', '[this is how we do]'),
(40, 'christen', 'faustine', 'christen faustine', 'female', 655076543, '2022-09-08', '[jonas@gmail.com]', '#$12', '', 'Student', '[this is how we do]'),
(41, 'Kulwa', 'Marco', 'Kulwa Marco', 'male', 716076579, '2022-08-26', '[jonas@gmail.com]', '!@#12', '', 'Student', '[this is how we do]'),
(43, 'savimbi', 'savimbi', 'savimbi savimbi', 'male', 745110044, '2022-07-20', '[jonas@gmail.com]', 'coder', '', 'admin', '[this is how we do]'),
(44, 'test', 'test', 'test test', 'male', 745110044, '2022-08-26', '[jonas@gmail.com]', 'test@', '', 'Student', '[this is how we do]'),
(45, 'chibonge', 'mtu', 'chibonge mtu', 'female', 745678954, '2022-08-18', '[jonas@gmail.com]', 'chibonge', '', 'Student', '[this is how we do]'),
(46, 'mariam', 'mpya', 'mariam mpya', 'female', 754328656, '2022-08-24', '[jonas@gmail.com]', 'mam', '', 'Student', '[this is how we do]'),
(47, 'john', 'mpanduji', 'john mpanduji', 'male', 745110755, '2022-08-31', 'john@gmail.com', '112', '', 'Student', 'kweli ni show kali kaka yaan unyama ni mwingi sana had raha bro nakukubali coder'),
(48, 'zawadi', 'zawadi', 'zawadi zawadi', 'female', 754223311, '2022-08-26', 'zawadi@gmail.com', 'zawaa', 0x6d7966696c65, 'Student', 'ooooooh!!!!!! let me see this miracle'),
(49, 'baraka', 'theprinsi', 'baraka theprinsi', 'male', 712334422, '2022-08-25', 'baraka@gmail.com', 'baraka1', 0x66696c65, 'Student', 'hahahahahahahah!!!!!!!!!!!!!'),
(51, 'merry', 'rose', 'merry rose', 'female', 754832688, '2022-08-23', 'mery@gmail.com', 'mery@', 0x66696c65, 'Student', 'hayaaaaaa!!!!!'),
(52, 'kazungu', 'zungu', 'kazungu zungu', 'male', 754832699, '2022-08-23', 'kazungu@gmail.com', 'kazungu@', 0x6d7966696c65, 'Student', ''),
(54, 'kamu', 'mugisha', 'kamu mugisha', 'male', 754832688, '2022-08-23', 'kamu@gmail.com', 'kamu@', 0x6d7966696c65, 'Student', ''),
(55, 'demo', 'demoni', 'demo demoni', 'male', 754832699, '2022-08-09', 'zawadi@gmail.com', 'demoni', 0x6d7966696c65, 'Student', ''),
(56, 'demoni', 'demo', 'demoni demo', 'male', 754823688, '2022-08-09', 'demoni@gmail', 'demoni1', 0x6d7966696c65, 'Student', ''),
(57, 'tunatest', 'mitambo', 'tunatest mitambo', 'male', 628044608, '2022-08-19', 'tnatest@gmail.com', 'tunatest', 0x6d7966696c65, 'Student', ''),
(58, '', '', '', '', 0, '0000-00-00', '', '', 0x6d7966696c65, 'Student', ''),
(60, 'mwanza', 'mwanza', 'mwanza mwanza', 'female', 628033508, '2022-08-09', 'mwanza@gmail.com', 'mwanza', 0x6d7966696c65, 'Student', ''),
(66, 'jaribu', '', 'jaribu ', 'male', 0, '2022-08-27', 'baraka@gmail.com', '', 0x6d7966696c65, 'Student', ''),
(68, 'jonas 11', '', 'jonas 11 ', '', 0, '0000-00-00', '', '', 0x6d7966696c65, 'Student', ''),
(70, 'biaisha', 'halidi', 'biaisha halidi', 'female', 759001807, '2022-10-18', 'aisha71@gmail.com', 'aisha', 0x6d7966696c65, 'Student', 'this is the beautiful girl'),
(71, 'fatuma', 'ziad', 'fatuma ziad', 'female', 2147483647, '2022-10-19', 'fatuma@gmail.com', 'fatuma', 0x6d7966696c65, 'Student', 'huyu mtoto ni mbishi sana '),
(72, 'samu', 'toti', 'samu toti', 'male', 74566234, '2022-10-20', 'samsoni@gmail.com', 'samsoni', 0x6d7966696c65, 'Student', 'buda boy hapa'),
(73, 'ally', 'ally', 'ally ally', 'male', 765432677, '2022-11-04', 'ally@gmail.com', 'allyally', 0x6d7966696c65, 'Student', 'testing'),
(74, 'lulu', 'lulu', 'lulu lulu', 'female', 62645576, '2022-10-04', 'lulu@gmail.com', 'lulululu', 0x6d7966696c65, 'Student', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
