-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2018 pada 10.48
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `merk` varchar(80) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `bbm` varchar(80) NOT NULL,
  `nopol` varchar(80) NOT NULL,
  `norangka` varchar(80) NOT NULL,
  `nomesin` varchar(80) NOT NULL,
  `pemilik` varchar(80) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `jenis`, `merk`, `warna`, `tahun`, `bbm`, `nopol`, `norangka`, `nomesin`, `pemilik`, `alamat`) VALUES
(1, 'SPM RODA 2', 'HONDA BEAT', 'HIJAU', '2008', 'BENSIN', 'K-7863-UB', 'MH8FD34GJSX-245548', 'JFMM2FDKH', 'YOGA', 'SEMARANG KOTA'),
(3, 'SPM RODA 2', 'YAMAHA MIO J', 'PUTIH', '2014', 'BENSIN', 'H-4545-XZ', 'MHU6DH88DX-264837', 'YSSIUPOHD', 'AGUS', 'GENUK SEMARANG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
