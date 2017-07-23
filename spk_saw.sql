-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jul 2017 pada 10.44
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_saw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_himpunan`
--

CREATE TABLE `tbl_himpunan` (
  `id` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `namahimpunan` varchar(255) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_himpunan`
--

INSERT INTO `tbl_himpunan` (`id`, `id_kriteria`, `namahimpunan`, `nilai`, `keterangan`) VALUES
(2, 6, '0 Tahun', '25', 'Kurang'),
(3, 5, 'D3', '50', 'Cukup'),
(5, 1, '0-49', '25', 'Kurang'),
(6, 7, 'potoshop', '50', 'mahir potoshop'),
(7, 7, 'koksdksd', '90', 'good'),
(8, 5, 'potoshop', '90', 'good');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id` int(11) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `atribut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id`, `nama_kriteria`, `atribut`) VALUES
(1, 'C1', 'benefit'),
(4, 'C2', 'benefit'),
(5, 'C3', 'benefit'),
(6, 'C4', 'benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelamar`
--

CREATE TABLE `tbl_pelamar` (
  `id` int(11) NOT NULL,
  `id_pelamar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `status_kawin` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelamar`
--

INSERT INTO `tbl_pelamar` (`id`, `id_pelamar`, `nama`, `jk`, `agama`, `alamat`, `email`, `no_telp`, `status_kawin`, `pendidikan_terakhir`) VALUES
(1, 'CP001', 'Tedi', 'L', 'Islam', 'Tangerang', '', '0982348', 'Menikah', 'S1'),
(2, 'CP002', 'Iman', 'L', 'Islam', 'jl. kutabumo Tangerang', '', '093849587', 'Kawin', 'D3'),
(5, 'CP003', 'Tedi', 'L', 'Islam', 'Tangerang', '', '0982348', 'Menikah', 'S1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembobotan`
--

CREATE TABLE `tbl_pembobotan` (
  `id` int(11) NOT NULL,
  `nama_bobot` varchar(255) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembobotan`
--

INSERT INTO `tbl_pembobotan` (`id`, `nama_bobot`, `nilai`) VALUES
(1, 'Sangat Rendah', 5),
(2, 'Rendah', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `full_name`, `username`, `password`, `email`, `role`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_himpunan`
--
ALTER TABLE `tbl_himpunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pelamar`
--
ALTER TABLE `tbl_pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pembobotan`
--
ALTER TABLE `tbl_pembobotan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_himpunan`
--
ALTER TABLE `tbl_himpunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pelamar`
--
ALTER TABLE `tbl_pelamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_pembobotan`
--
ALTER TABLE `tbl_pembobotan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
