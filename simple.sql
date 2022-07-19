-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 12:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple`
--

-- --------------------------------------------------------

--
-- Table structure for table `hukum`
--

CREATE TABLE `hukum` (
  `id` int(11) NOT NULL,
  `nama_hkm` varchar(100) NOT NULL,
  `nomor_hkm` varchar(100) NOT NULL,
  `ket_hkm` varchar(100) NOT NULL,
  `file_hkm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE `memo` (
  `id` int(11) NOT NULL,
  `no_mem` date NOT NULL,
  `tbt_mem` date NOT NULL,
  `blk_mem` varchar(100) NOT NULL,
  `surat_mem` varchar(100) NOT NULL,
  `kode_mem` varchar(100) NOT NULL,
  `jen_mem` varchar(100) NOT NULL,
  `div_mem` varchar(100) NOT NULL,
  `hal_mem` varchar(100) NOT NULL,
  `dic_mem` varchar(100) NOT NULL,
  `menc_mem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemegang_saham`
--

CREATE TABLE `pemegang_saham` (
  `id` int(11) NOT NULL,
  `nama_ps` varchar(100) NOT NULL,
  `nominal_ps` varchar(100) NOT NULL,
  `saham_ps` varchar(100) NOT NULL,
  `pers_ps` varchar(100) NOT NULL,
  `jenis_ps` varchar(50) NOT NULL,
  `saham_psl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemegang_saham_dir`
--

CREATE TABLE `pemegang_saham_dir` (
  `id` int(11) NOT NULL,
  `nama_ps2` varchar(100) NOT NULL,
  `jabatan_ps2` varchar(100) NOT NULL,
  `nominal_ps2` varchar(100) NOT NULL,
  `saham_ps2` varchar(100) NOT NULL,
  `pers_ps2` varchar(50) NOT NULL,
  `jenis_ps2` varchar(50) NOT NULL,
  `saham_psl2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(11) NOT NULL,
  `nama_peng` varchar(100) NOT NULL,
  `jabatan_peng` varchar(100) NOT NULL,
  `nominal_peng` varchar(100) NOT NULL,
  `saham_peng` varchar(100) NOT NULL,
  `pers_peng` varchar(100) NOT NULL,
  `jenis_peng` varchar(100) NOT NULL,
  `saham_pengl` varchar(100) NOT NULL,
  `keu_peng` varchar(100) NOT NULL,
  `kel_peng` varchar(100) NOT NULL,
  `mulai_peng` date NOT NULL,
  `akhir_peng` date NOT NULL,
  `rups_peng` date NOT NULL,
  `akte_rups` varchar(100) NOT NULL,
  `ojk_peng` varchar(100) NOT NULL,
  `sojk_peng` date NOT NULL,
  `certif_peng` varchar(100) NOT NULL,
  `jatem_peng` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus_eksekutif`
--

CREATE TABLE `pengurus_eksekutif` (
  `id` int(11) NOT NULL,
  `nama_pe` varchar(100) NOT NULL,
  `alamat_pe` varchar(100) NOT NULL,
  `ibu_pe` varchar(100) NOT NULL,
  `npwp_pe` varchar(100) NOT NULL,
  `ktp_pe` varchar(50) NOT NULL,
  `jabatan_pe` varchar(100) NOT NULL,
  `mjb_pe` date NOT NULL,
  `spb_pe` varchar(100) NOT NULL,
  `spo_pe` varchar(100) NOT NULL,
  `certif_pe` varchar(100) NOT NULL,
  `jatem_pe` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `se`
--

CREATE TABLE `se` (
  `id` int(11) NOT NULL,
  `no_se` varchar(100) NOT NULL,
  `tbt_se` date NOT NULL,
  `blk_se` date NOT NULL,
  `surat_se` varchar(100) NOT NULL,
  `kode_se` varchar(100) NOT NULL,
  `jen_se` varchar(100) NOT NULL,
  `div_se` varchar(100) NOT NULL,
  `hal_se` varchar(100) NOT NULL,
  `dic_se` varchar(100) NOT NULL,
  `menc_se` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sk`
--

CREATE TABLE `sk` (
  `id` int(11) NOT NULL,
  `no_sk` varchar(11) NOT NULL,
  `tbt_sk` date NOT NULL,
  `blk_sk` date NOT NULL,
  `surat_sk` varchar(100) NOT NULL,
  `kode_sk` varchar(100) NOT NULL,
  `jen_sk` varchar(50) NOT NULL,
  `div_sk` varchar(100) NOT NULL,
  `hal_sk` varchar(100) NOT NULL,
  `dic_sk` varchar(100) NOT NULL,
  `menc_sk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `jenis_srt` text NOT NULL,
  `sanksi` varchar(50) NOT NULL,
  `nomor_srt` varchar(25) NOT NULL,
  `ket` text NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hukum`
--
ALTER TABLE `hukum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memo`
--
ALTER TABLE `memo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemegang_saham`
--
ALTER TABLE `pemegang_saham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemegang_saham_dir`
--
ALTER TABLE `pemegang_saham_dir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengurus_eksekutif`
--
ALTER TABLE `pengurus_eksekutif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `se`
--
ALTER TABLE `se`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk`
--
ALTER TABLE `sk`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hukum`
--
ALTER TABLE `hukum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memo`
--
ALTER TABLE `memo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemegang_saham`
--
ALTER TABLE `pemegang_saham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemegang_saham_dir`
--
ALTER TABLE `pemegang_saham_dir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengurus_eksekutif`
--
ALTER TABLE `pengurus_eksekutif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `se`
--
ALTER TABLE `se`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sk`
--
ALTER TABLE `sk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
