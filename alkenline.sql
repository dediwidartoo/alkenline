-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2017 at 03:12 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alkenline`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_alumni`
--

CREATE TABLE `daftar_alumni` (
  `id_alumni` int(11) NOT NULL,
  `nama_alumni` varchar(50) NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(25) NOT NULL,
  `kesan` text NOT NULL,
  `pesan` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_alumni`
--

INSERT INTO `daftar_alumni` (`id_alumni`, `nama_alumni`, `tahun_lulus`, `kelas`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `email`, `alamat`, `nohp`, `kesan`, `pesan`, `foto`) VALUES
(1, 'dedi widarto', 2011, 'F', 'Jepara', '2017-02-01', 'L', 'dediwidarto78@gmail.com', 'sidigede, welahan, jepara', '089690427439', 'aneh', 'pertahankan belajarmu', '161310003592.jpg'),
(2, 'eddy', 2012, 'B', 'Kudus', '1996-10-31', 'L', 'edddy@gmail.com', 'mijen, demak', '089690427430', 'lucu', 'gemes', 'nilai.png'),
(3, 'ani', 2010, 'A', 'Jepara', '1996-11-10', 'P', 'ani@gmail.com', 'demak', '089', 'koplak', 'males', 'nilai.png'),
(4, 'amin', 2009, 'A', 'Demak', '1997-10-01', 'P', 'amin@yahoo.com', 'bugel, Kedung, Jepara', '085894346223', 'Pilu', 'Go', 'LOGO.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(12) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'Dedi Widarto', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_alumni`
--
ALTER TABLE `daftar_alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_alumni`
--
ALTER TABLE `daftar_alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
