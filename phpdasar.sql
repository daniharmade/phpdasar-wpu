-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 12:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Dosen', '12250310356', '12250310356@students.uin-suska.ac.id', 'Sistem Informasi', 'foto1.jpg'),
(2, 'Tengku', '12250310356', '12250310356@students.uin-suska.ac.id', 'Teknik Informasi', '65599e188b5df.png'),
(3, 'Khairil', '12250310356', '12250310356@students.uin-suska.ac.id', 'Teknik Informatika', '65599e21d9859.jpg'),
(4, 'Ahsyar', '12250310356', '12250310356@students.uin-suska.ac.id', 'Teknik Industri', 'foto4.jpg'),
(5, 'Gantenk', '12250310356', '12250310356@students.uin-suska.ac.id', 'Teknik Elektro', 'foto5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'ngaturbangetbrow', '$2y$10$wJ5Zm.PVInXVZVih0JcEQuegpM9UTodx.fM9Rjf1ixCcKFW3478he'),
(6, 'admin', '$2y$10$2KNmPnNbPGdtto2eCumfEeJWqU3Elazht6QZLpcBClqb8RIvn0l1C'),
(7, 'dani', '$2y$10$RAYeHGUxGDpHohbDL.GzyekYAKOsAHzMTUWgyq1ve.SrgkyJCaTjK'),
(13, 'yadanz', '$2y$10$EE6m3iprALo/wfmDB4olOuQVscjb/t.As0PDcBWUBXBRfgZ0TkyYa'),
(14, 'yamade', '$2y$10$.brRljfv/rV6zsLzjjoDAuizjzYKJBPbI99ciVPdyvEM0lUeFv32K'),
(15, 'madeyamade', '$2y$10$lgkOxUFESs9tadPj9Z0vtu7pHW6zzltTVX1GW25AtgF8k/csDtwRO'),
(16, 'uhuy', '$2y$10$dqaIhJFaHmXftru9P47hmOuiwyO4lSr8p4DZQSHP3RaMoN30YGCue'),
(17, 'danihar', '$2y$10$UyGRDXAFOO2Zf04Ca6P1C.fsW1tjBBktIVtrGDf0q8MbWpzc2DOBW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
