-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2017 at 07:57 AM
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
-- Table structure for table `ail`
--

CREATE TABLE IF NOT EXISTS `ail` (
  `id_ail` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `petugas_id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `kode_rak` varchar(25) NOT NULL,
  `rayon_id` int(11) NOT NULL,
  `lemari_id` int(11) NOT NULL,
  `rak_id` int(11) NOT NULL,
  `kolom_id` int(11) NOT NULL,
  `baris_id` int(11) NOT NULL,
  `nomor_urut` int(11) DEFAULT NULL,
  `kode_map` varchar(25) DEFAULT NULL,
  `kondisi_amplop` int(11) DEFAULT NULL,
  `kondisi_ail` int(11) DEFAULT NULL,
  `surat_surat_permohonan` int(11) DEFAULT NULL,
  `surat_identitas_pelanggan` int(11) DEFAULT NULL,
  `surat_data_survei` int(11) DEFAULT NULL,
  `surat_jawaban` int(11) DEFAULT NULL,
  `surat_perjanjian` int(11) DEFAULT NULL,
  `surat_pernyataan` int(11) DEFAULT NULL,
  `surat_kuitansi` int(11) DEFAULT NULL,
  `surat_perintah_kerja` int(11) DEFAULT NULL,
  `surat_bap` int(11) DEFAULT NULL,
  `surat_pdl` int(11) DEFAULT NULL,
  `surat_lainlain` int(11) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ail`
--

INSERT INTO `ail` (`id_ail`, `tanggal_buat`, `tanggal_update`, `petugas_id`, `pelanggan_id`, `kode_rak`, `rayon_id`, `lemari_id`, `rak_id`, `kolom_id`, `baris_id`, `nomor_urut`, `kode_map`, `kondisi_amplop`, `kondisi_ail`, `surat_surat_permohonan`, `surat_identitas_pelanggan`, `surat_data_survei`, `surat_jawaban`, `surat_perjanjian`, `surat_pernyataan`, `surat_kuitansi`, `surat_perintah_kerja`, `surat_bap`, `surat_pdl`, `surat_lainlain`, `deskripsi`, `status`) VALUES
(11, '2017-08-23 11:03:51', '2017-08-23 11:03:51', 1, 1, 'A1-1', 53567, 1, 0, 1, 1, 0, 'A1-1-0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(12, '2017-08-23 11:04:34', '2017-08-23 11:04:34', 1, 1, 'A1-1', 53567, 1, 0, 1, 1, 1, 'A1-1-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(13, '2017-08-23 11:04:50', '2017-08-23 11:04:50', 1, 1, 'B1-1', 53567, 2, 0, 1, 1, 0, 'B1-1-0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(14, '2017-08-23 11:08:02', '2017-08-23 11:08:02', 1, 1, 'B1-1', 53567, 2, 0, 1, 1, 1, 'B1-1-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(15, '2017-08-23 11:08:12', '2017-08-23 11:08:12', 1, 1, 'C1-1', 53567, 3, 0, 1, 1, 0, 'C1-1-0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(16, '2017-08-23 11:08:20', '2017-08-23 11:08:20', 1, 1, 'C1-1', 53567, 3, 0, 1, 1, 1, 'C1-1-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(17, '2017-08-23 11:08:34', '2017-08-23 11:08:34', 1, 1, 'A1-1', 53567, 1, 0, 1, 1, 2, 'A1-1-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(18, '2017-08-23 11:09:53', '2017-08-23 11:09:53', 1, 1, 'A2-1', 53567, 1, 0, 1, 2, 0, 'A2-1-0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(19, '2017-08-23 11:11:50', '2017-08-23 11:11:50', 1, 1, 'A2-1', 53567, 1, 0, 1, 2, 1, 'A2-1-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(20, '2017-08-23 11:32:49', '2017-08-23 11:32:49', 1, 1, 'A3-1', 53567, 1, 0, 1, 3, 0, 'A3-1-0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(21, '2017-08-23 11:33:09', '2017-08-23 11:33:09', 1, 1, 'A2-1', 53567, 1, 0, 1, 2, 2, 'A2-1-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(22, '2017-08-23 11:37:59', '2017-08-23 11:37:59', 1, 1, 'A3-1', 53567, 1, 0, 1, 3, 1, 'A3-1-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(23, '2017-08-24 08:40:25', '2017-08-24 08:40:25', 1, 1, 'A3-1', 53567, 1, 0, 1, 3, 2, 'A3-1-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(24, '2017-08-24 08:41:06', '2017-08-24 08:41:06', 1, 1, 'A4-1', 53567, 1, 0, 1, 4, 0, 'A4-1-0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(25, '2017-08-24 08:45:39', '2017-08-24 08:45:39', 1, 1, 'A4-1', 53567, 1, 0, 1, 4, 1, 'A4-1-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(26, '2017-08-24 08:46:00', '2017-08-24 08:46:00', 1, 1, 'A4-1', 53567, 1, 0, 1, 4, 2, 'A4-1-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(27, '2017-08-24 08:51:22', '2017-08-24 08:51:22', 1, 1, 'B1-1', 53567, 2, 0, 1, 1, 2, 'B1-1-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(28, '2017-08-24 08:51:56', '2017-08-24 08:51:56', 1, 1, 'B2-1', 53567, 2, 0, 1, 2, 0, 'B2-1-0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(29, '2017-08-24 08:52:06', '2017-08-24 08:52:06', 1, 1, 'B2-1', 53567, 2, 0, 1, 2, 1, 'B2-1-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(30, '2017-08-24 08:52:17', '2017-08-24 08:52:17', 1, 1, 'B2-1', 53567, 2, 0, 1, 2, 2, 'B2-1-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(31, '2017-08-25 04:41:39', '2017-08-25 04:41:39', 1, 1, 'A5-1', 53567, 1, 0, 1, 5, 0, 'A5-1-0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(32, '2017-08-26 10:35:15', '2017-08-26 10:35:15', 1, 1, 'A5-1', 53567, 1, 0, 1, 5, 1, 'A5-1-1', 1, 1, 0, 1, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(33, '2017-08-26 10:42:50', '2017-08-26 10:42:50', 1, 1, 'A5-1', 53567, 1, 0, 1, 5, 2, 'A5-1-2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(34, '2017-08-27 12:16:12', '2017-08-27 12:16:12', 1, 1, 'A6-1', 53567, 1, 0, 1, 6, 0, 'A6-1-0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(35, '2017-08-27 01:04:35', '2017-08-27 01:04:35', 1, 1, 'A6-1', 53567, 1, 0, 1, 6, 1, 'A6-1-1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1),
(36, '2017-08-27 12:15:51', '2017-08-27 12:15:51', 1, 1, 'E1-1', 53567, 5, 0, 1, 1, 0, 'E1-1-0', 1, 1, 0, 1, 1, 0, 0, 0, 1, 1, 0, 1, 1, 'hluikj', 1),
(37, '2017-08-27 12:20:19', '2017-08-27 12:20:19', 1, 1, 'E1-1', 53567, 5, 0, 1, 1, 1, 'E1-1-1', 1, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 1);

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
-- Table structure for table `file_ail`
--

CREATE TABLE IF NOT EXISTS `file_ail` (
  `id` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ail_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_amplop`
--

CREATE TABLE IF NOT EXISTS `file_amplop` (
  `id` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ail_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_amplop`
--

INSERT INTO `file_amplop` (`id`, `tanggal_buat`, `tanggal_update`, `user_id`, `file`, `deskripsi`, `ail_id`, `status`) VALUES
(5, '2017-08-27 01:14:18', '2017-08-27 01:14:18', 1, '1-FileAmplop-A1-1-0.jpg', 'admin telah upload dokumen lampiran Amplop pada 27-08-2017 01:14:18', 11, 1),
(6, '2017-08-27 12:17:26', '2017-08-27 12:17:26', 1, '1-FileAmplop-E1-1-0.jpg', 'admin telah upload dokumen lampiran Amplop pada 27-08-2017 12:17:26', 36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `file_bap`
--

CREATE TABLE IF NOT EXISTS `file_bap` (
  `id` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ail_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_jawaban`
--

CREATE TABLE IF NOT EXISTS `file_jawaban` (
  `id` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ail_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_kuitansi`
--

CREATE TABLE IF NOT EXISTS `file_kuitansi` (
  `id` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ail_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_lain`
--

CREATE TABLE IF NOT EXISTS `file_lain` (
  `id` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ail_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_pdl`
--

CREATE TABLE IF NOT EXISTS `file_pdl` (
  `id` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ail_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_pelanggan`
--

CREATE TABLE IF NOT EXISTS `file_pelanggan` (
  `id` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ail_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_perintah_kerja`
--

CREATE TABLE IF NOT EXISTS `file_perintah_kerja` (
  `id` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ail_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_perjanjian`
--

CREATE TABLE IF NOT EXISTS `file_perjanjian` (
  `id` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ail_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_permohonan`
--

CREATE TABLE IF NOT EXISTS `file_permohonan` (
  `id` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ail_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_pernyataan`
--

CREATE TABLE IF NOT EXISTS `file_pernyataan` (
  `id` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ail_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file_survei`
--

CREATE TABLE IF NOT EXISTS `file_survei` (
  `id` int(11) NOT NULL,
  `tanggal_buat` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `tanggal_update` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `ail_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

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
-- Table structure for table `lemari`
--

CREATE TABLE IF NOT EXISTS `lemari` (
  `id_lemari` int(255) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `baris` int(11) DEFAULT NULL,
  `kolom` int(11) DEFAULT NULL,
  `maksimal` int(11) DEFAULT NULL,
  `tipe` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lemari`
--

INSERT INTO `lemari` (`id_lemari`, `kode`, `deskripsi`, `baris`, `kolom`, `maksimal`, `tipe`, `status`) VALUES
(1, 'A', 'Pengarsipan Dokumen Pelanggan 450 Watt', 7, 7, 3, 1, 1),
(2, 'B', 'Pengarsipan Dokumen Pelanggan 900 Watt', 7, 7, 3, 2, 1),
(3, 'C', 'Pengarsipan Dokumen Pelanggan > 1400 Watt', 7, 7, 3, 1, 1),
(4, 'D', 'Pengarsipan Dokumen Pelanggan > 2200 Watt', 7, 7, 3, 4, 1),
(5, 'E', 'sama', 7, 7, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tarif` varchar(5) NOT NULL,
  `daya` varchar(15) NOT NULL,
  `rupiah_uil` float(25,0) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `kode`, `nama`, `alamat`, `tarif`, `daya`, `rupiah_uil`, `status`) VALUES
(1, '53567-2121542', 'Opik', 'Jl. Soreang Km.16 Bandung', 'R1', '2', 222200, 1);

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
(1, 'Suci', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 1, 'suci@gmail.com', 1),
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
  `lemari_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id_rak`, `kode`, `deskripsi`, `lemari_id`, `status`) VALUES
(1, 'A1-1', 'Lemari A - Rak ke 1', 1, 450);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ail`
--
ALTER TABLE `ail`
  ADD PRIMARY KEY (`id_ail`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `file_ail`
--
ALTER TABLE `file_ail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_amplop`
--
ALTER TABLE `file_amplop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_bap`
--
ALTER TABLE `file_bap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_jawaban`
--
ALTER TABLE `file_jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_kuitansi`
--
ALTER TABLE `file_kuitansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_lain`
--
ALTER TABLE `file_lain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_pdl`
--
ALTER TABLE `file_pdl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_pelanggan`
--
ALTER TABLE `file_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_perintah_kerja`
--
ALTER TABLE `file_perintah_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_perjanjian`
--
ALTER TABLE `file_perjanjian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_permohonan`
--
ALTER TABLE `file_permohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_pernyataan`
--
ALTER TABLE `file_pernyataan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_survei`
--
ALTER TABLE `file_survei`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `lemari`
--
ALTER TABLE `lemari`
  ADD PRIMARY KEY (`id_lemari`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ail`
--
ALTER TABLE `ail`
  MODIFY `id_ail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `file_ail`
--
ALTER TABLE `file_ail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `file_amplop`
--
ALTER TABLE `file_amplop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `file_bap`
--
ALTER TABLE `file_bap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `file_jawaban`
--
ALTER TABLE `file_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `file_kuitansi`
--
ALTER TABLE `file_kuitansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `file_lain`
--
ALTER TABLE `file_lain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `file_pdl`
--
ALTER TABLE `file_pdl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `file_pelanggan`
--
ALTER TABLE `file_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `file_perintah_kerja`
--
ALTER TABLE `file_perintah_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `file_perjanjian`
--
ALTER TABLE `file_perjanjian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `file_permohonan`
--
ALTER TABLE `file_permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `file_pernyataan`
--
ALTER TABLE `file_pernyataan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `file_survei`
--
ALTER TABLE `file_survei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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
-- AUTO_INCREMENT for table `lemari`
--
ALTER TABLE `lemari`
  MODIFY `id_lemari` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
