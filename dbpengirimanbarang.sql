-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Mar 2021 pada 02.47
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpengirimanbarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbnota`
--

CREATE TABLE `tbnota` (
  `kodenota` int(11) NOT NULL,
  `sp` varchar(100) NOT NULL,
  `colli` varchar(100) NOT NULL,
  `berat` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `franco` varchar(100) NOT NULL,
  `confrancert` varchar(100) NOT NULL,
  `penerimabarang` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Kesalahan membaca data untuk tabel dbpengirimanbarang.tbnota: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `dbpengirimanbarang`.`tbnota`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbnota`
--
ALTER TABLE `tbnota`
  ADD PRIMARY KEY (`kodenota`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbnota`
--
ALTER TABLE `tbnota`
  MODIFY `kodenota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
