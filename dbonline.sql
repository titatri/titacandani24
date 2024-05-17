-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 10:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nama`, `alamat`, `email`, `nohp`) VALUES
(1, 'Mustika ', 'Mutiara ', 'mus@gmail.com', 98765),
(2, 'Andri', 'Sungi Silo\r\n', 'andri@gmail.com', 37682656),
(32, 'Tita Tricandani', 'Sureng', 'jh@gmail.com11', 56789);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mhsw`
--

CREATE TABLE `tb_mhsw` (
  `nim` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_mhsw`
--

INSERT INTO `tb_mhsw` (`nim`, `nama`, `alamat`, `prodi`, `umur`) VALUES
(1234567, 'Gilang Willy', 'Tanjung Balai', 'Sistem Informasi', 22),
(22220425, 'Avin Suranta', 'Suluk ', 'Teknik Informatika', 19),
(22224567, 'Tita Tricandani', 'Sei Dadap', 'Sistem Informasi', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mhsw`
--
ALTER TABLE `tb_mhsw`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
