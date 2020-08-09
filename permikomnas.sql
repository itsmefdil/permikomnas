-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2020 at 04:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `permikomnas`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pengurus` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `kampus` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `pengurus`, `jabatan`, `kampus`, `foto`) VALUES
(2, 'Fadilah Riczky1', 'Pengurus Harian', 'Koordinator', 'Universitas Janabadra', 'donasi.png'),
(5, 'Ahmadal', 'Kominfo', 'Staff', 'Amikom', 'australia-4242493_1920.jpg'),
(6, 'Fadilah Riczky1', 'Pengurus Harian', 'Koordinator', 'Universitas Janabadra', 'ci3.png');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` text NOT NULL,
  `penulis` varchar(20) NOT NULL,
  `konten` text NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `penulis`, `konten`, `kategori`, `foto`, `waktu`) VALUES
(2, 'Indonesia Raya', 'Admin', '<p>Indonesia Raya</p>', 'Informasi', 'landscape-2265897_19201.jpg', '14-07-2020'),
(3, 'Permasalahan Anak Informatika Secara Umum', 'Admin', '<p>Apakah anda sedang mengalami masalah ?</p>', 'Informasi', 'australia-4242493_19201.jpg', '14-07-2020'),
(4, 'Allhamdulillah Berkah', 'Admin', '<p><b><span style=\"font-family: \"Times New Roman\";\">Alhamdulillah</span></b></p><p><span style=\"font-family: \"Times New Roman\";\">Hari ini</span><span style=\"font-family: \"Times New Roman\";\">﻿ kita telah melaksanakan</span></p>', 'Berita', 'lmxoMH.jpg', '14-07-2020'),
(5, 'Indonesia Raya', 'Admin', '<p>fgff</p>', 'Informasi', 'ci31.png', '19-07-2020'),
(6, 'Cara mengatasi gagal php a', 'Adminss', '<p>asasas</p>', 'Informasi', 'logo_ujb41.png', '21-07-2020');

-- --------------------------------------------------------

--
-- Table structure for table `kampus`
--

CREATE TABLE `kampus` (
  `id_kampus` int(11) NOT NULL,
  `nama_kampus` text NOT NULL,
  `logo_kampus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kampus`
--

INSERT INTO `kampus` (`id_kampus`, `nama_kampus`, `logo_kampus`) VALUES
(7, 'Univesitas Janabadra', 'logo_ujb.png'),
(8, 'Permikomnas', 'Logo_Permikomnas_mini1.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(2, 'Informasi'),
(3, 'Berita'),
(4, 'komputer');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kampus` varchar(200) NOT NULL,
  `pengurus` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `nama`, `kampus`, `pengurus`, `jabatan`, `foto`) VALUES
(1, 'Qodri Aziz', 'Janabadra', 'Pengurus Harian', 'Korwil', 'logo_ujb1.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pesan` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id_site` int(11) NOT NULL,
  `nama_site` text NOT NULL,
  `favicon_site` varchar(200) NOT NULL,
  `deskripsi_site` text NOT NULL,
  `alamat_sekre` text NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(20) NOT NULL,
  `instagram` varchar(20) NOT NULL,
  `youtube` varchar(50) NOT NULL,
  `kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id_site`, `nama_site`, `favicon_site`, `deskripsi_site`, `alamat_sekre`, `facebook`, `twitter`, `instagram`, `youtube`, `kontak`) VALUES
(1, 'PERMIKOMNAS', '', 'Selamat Datang di Official Website Perhimpunan Mahasiswa Komputer dan Informatika Nasional Republik Indonesia Wilayah Yogyakarta.', 'Kasihan , Bantul , DIY', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `foto` varchar(250) NOT NULL DEFAULT 'default.jpg',
  `password` varchar(50) NOT NULL,
  `pengurus` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `foto`, `password`, `pengurus`, `jabatan`, `role`) VALUES
(5, 'Fadilah Riczky', 'friczky@gmail.com', 'profile1.png', '21232f297a57a5a743894a0e4a801fc3', '', '', 0),
(7, 'Adminsssa', 'admin@admin.com', 'Logo_Permikomnas_mini6.png', '21232f297a57a5a743894a0e4a801fc3', 'Pengurus Harian', 'Staff', 0),
(8, 'Super Admin', 'superadmin@admin.com', 'cat-4097325_1920.jpg', '1e0d5d98e358f0fb84716b91dea68b24', 'Pengurus Harian', 'Staff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `id_web` int(11) NOT NULL,
  `nama_web` varchar(50) NOT NULL,
  `selamatdatang` text NOT NULL,
  `sejarah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `icon` text NOT NULL,
  `fb` varchar(40) NOT NULL,
  `ig` varchar(40) NOT NULL,
  `tw` varchar(40) NOT NULL,
  `yt` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id_web`, `nama_web`, `selamatdatang`, `sejarah`, `visi`, `misi`, `icon`, `fb`, `ig`, `tw`, `yt`) VALUES
(1, 'PERMIKOMNAS', 'Selamat Datang di Official Website Perhimpunan Mahasiswa Komputer dan Informatika Nasional Republik Indonesia Wilayah Yogyakarta.sssa', 'Selamat Datang di Official Website Perhimpunan Mahasiswa Komputer dan Informatika Nasional Republik Indonesia Wilayah Yogyakarta.sssw', 'Selamat Datang di Official Website Perhimpunan Mahasiswa Komputer dan Informatika Nasional Republik Indonesia Wilayah Yogyakarta.sssw', 'Selamat Datang di Official Website Perhimpunan Mahasiswa Komputer dan Informatika Nasional Republik Indonesia Wilayah Yogyakarta.sssw', 'Logo_Permikomnas_mini3.png', 'permikomnas_yogyakarta', 'permikomnas_yogyakarta', 'permikomnas_yk', 'permikomnas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`id_kampus`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id_site`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id_web`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kampus`
--
ALTER TABLE `kampus`
  MODIFY `id_kampus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id_site` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `id_web` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
