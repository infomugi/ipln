-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2017 at 03:47 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i_pln`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama`, `status`) VALUES
(1, 'Bagian Tata Usaha', 1),
(2, 'Bidang Teknisi', 1),
(3, 'Bidang Gudang', 1),
(4, 'Bidang Administrasi', 1),
(5, 'Bidang Kelistrikan', 1),
(6, 'Bidang IT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_event` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `divisi_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_berakhir` date NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `progress` text NOT NULL,
  `hasil` text NOT NULL,
  `petugas_id` int(11) NOT NULL,
  `persentase` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `prioritas` varchar(25) NOT NULL,
  `skala` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `tanggal`, `divisi_id`, `kategori_id`, `tanggal_mulai`, `tanggal_berakhir`, `nama_kegiatan`, `deskripsi`, `progress`, `hasil`, `petugas_id`, `persentase`, `target`, `status`, `prioritas`, `skala`) VALUES
(2, '2016-04-19', 1, 1, '2016-08-06', '2016-08-17', 'Membuat Konsep Administrasi Baru', 'Kegiatan Membuat Konsep Administrasi Baru', 'sip', 'Oke', 1, 60, 100, 'Belum Diverifikasi', '', ''),
(3, '2016-04-19', 4, 1, '2016-04-19', '2016-04-28', 'Merancang Strategy Baru', 'Kegiatan Merancang Strategy Baru', '', '', 3, 40, 100, 'Belum Diverifikasi', '', ''),
(4, '2016-08-03', 5, 3, '2016-08-03', '2016-08-31', 'Sensus Penduduk 2016', '', '', '', 1, 50, 100, 'Belum Diverifikasi', '', ''),
(5, '2016-08-29', 1, 1, '2016-09-27', '2016-09-30', 'Pendataan PNS Kota Madya', '', '', '', 1, 50, 100, 'Belum Diverifikasi', 'Rendah', 'Menengah'),
(6, '2016-08-29', 3, 3, '2016-09-28', '2016-09-30', 'Rapat Anggaran Dasar Perubahan', '', '', '', 1, 0, 100, 'Belum Diverifikasi', 'Sedang', 'Kecil');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama`, `status`) VALUES
(1, 'Golongan I', 1),
(2, 'Golongan II', 1),
(3, 'Golongan III', 1),
(4, 'Golongan IV A', 1),
(5, 'Golongan IV C', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `status`) VALUES
(1, 'Kependudukan', 1),
(2, 'Kesehatan', 1),
(3, 'Pemerintahan', 1),
(4, 'Pendidikan', 1),
(5, 'Kenetagakerjaan', 1),
(6, 'Perdangan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama`, `bobot`) VALUES
(2, 'Administrasi Kegiatan', 25),
(3, 'Implementasi Kegiatan', 45),
(4, 'Perencanaan', 15),
(5, 'Evaluasi', 5);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `divisi` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `username`, `password`, `jabatan`, `divisi`, `email`, `level`) VALUES
(1, 'Beni Wijaya', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 1, 'beniwijaya@gmail.com', 1),
(2, 'Kepala BPS', 'pimpinan', '21232f297a57a5a743894a0e4a801fc3', '5', 2, 'pimpinan@gmail.com', 2),
(3, 'Kepala Staff', 'kepstaff', '21232f297a57a5a743894a0e4a801fc3', '3', 4, 'kepstaff@gmail.com', 3),
(4, 'Staff', 'staff', '21232f297a57a5a743894a0e4a801fc3', '4', 4, 'staff@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE IF NOT EXISTS `rak` (
  `id_rak` int(11) NOT NULL,
  `kode` varchar(15) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `ruangan_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id_setting` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `alamat` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `theme` varchar(15) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `favicon` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `nama`, `deskripsi`, `visi`, `misi`, `alamat`, `website`, `theme`, `logo`, `favicon`) VALUES
(1, 'BPS - Badan Pusat Statistik', 'BPS merupakan Badan Pusat Statistik.', 'Visi dari BPS merupakan Badan Pusat Statistik.', 'Misi dari BPS merupakan Badan Pusat Statistik.', 'Jl. Raya Soekarno Hatta No.456 Bandung', 'www.bps.go.id', 'style2', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
  `id_tugas` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `petugas_id` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(11) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `event_id`, `petugas_id`, `tanggal_mulai`, `tanggal_selesai`, `deskripsi`, `status`, `bobot`) VALUES
(17, 3, 4, '2016-08-29', '2016-08-29', 'Membuat Analisis Data', 2, 25),
(18, 2, 1, '2016-08-29', '2016-08-29', 'Membuat Deskripsi Tugas untuk project', 2, 10),
(19, 3, 4, '2016-08-29', '1970-01-01', 'Membuat Presentasi', 1, 30),
(20, 3, 4, '1970-01-01', '1970-01-01', 'Membuat Materi ', 0, 30),
(21, 3, 4, '2016-08-29', '2016-08-29', 'Hadir rapat', 2, 40),
(22, 6, 4, '1970-01-01', '1970-01-01', 'A', 0, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
