-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 12:13 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek01`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `judul_artikel` varchar(64) NOT NULL,
  `isi_artikel` varchar(255) NOT NULL,
  `tgl_artikel` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_guru`, `judul_artikel`, `isi_artikel`, `tgl_artikel`) VALUES
(1, 1, 'menolak', 'saya menolak usulan anda', '2017-11-14'),
(2, 1, 'Setuju', 'Saya setuju akan usulan anda', '2017-11-14'),
(3, 1, 'Ntahlah', '', '2017-11-15'),
(4, 1, 'Mereka mulai', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dol', '2017-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_admin`
--

CREATE TABLE `daftar_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `user` varchar(16) NOT NULL,
  `pass` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_admin`
--

INSERT INTO `daftar_admin` (`id_admin`, `nama`, `user`, `pass`) VALUES
(1, 'kevin', 'artemis', '4510471');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_guru`
--

CREATE TABLE `daftar_guru` (
  `id_guru` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `user` varchar(16) NOT NULL,
  `pass` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_guru`
--

INSERT INTO `daftar_guru` (`id_guru`, `nama`, `user`, `pass`) VALUES
(1, 'Otiah, S.Pd.', 'otiah', 'otiah123');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_user`
--

CREATE TABLE `daftar_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `user` varchar(16) NOT NULL,
  `pass` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_user`
--

INSERT INTO `daftar_user` (`id_user`, `nama`, `user`, `pass`) VALUES
(1, 'Kevin Martinda Sodikin', 'marvin', '4510471'),
(2, 'Wasis Ramadhan', 'wasis', 'wasisbae'),
(4, 'Bronto Larras Elidanto', 'namaewa77', '5173'),
(5, 'Rasyid Salman', 'acids', 'matrix211');

-- --------------------------------------------------------

--
-- Table structure for table `kritikan`
--

CREATE TABLE `kritikan` (
  `id_kritik` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `isi_kritik` varchar(255) NOT NULL,
  `tgl_kritik` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritikan`
--

INSERT INTO `kritikan` (`id_kritik`, `id_user`, `id_guru`, `isi_kritik`, `tgl_kritik`) VALUES
(6, 1, 69, 'Ya rasanya pengin mual', '2017-11-14'),
(7, 1, 69, 'Biasanya ngga enak koh rasanya', '2017-11-14'),
(8, 1, 69, 'saya ingin ditambahkan ROG GX-800!', '2017-11-15'),
(9, 5, 1, 'hahaha', '2017-11-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `daftar_admin`
--
ALTER TABLE `daftar_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `daftar_guru`
--
ALTER TABLE `daftar_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `daftar_user`
--
ALTER TABLE `daftar_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `kritikan`
--
ALTER TABLE `kritikan`
  ADD PRIMARY KEY (`id_kritik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `daftar_admin`
--
ALTER TABLE `daftar_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `daftar_guru`
--
ALTER TABLE `daftar_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `daftar_user`
--
ALTER TABLE `daftar_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kritikan`
--
ALTER TABLE `kritikan`
  MODIFY `id_kritik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
