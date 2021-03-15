-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2021 pada 13.38
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catshop023`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cats023`
--

CREATE TABLE `cats023` (
  `id_023` int(11) NOT NULL,
  `name_023` varchar(100) NOT NULL,
  `type_023` varchar(100) NOT NULL,
  `gender_023` varchar(100) NOT NULL,
  `age_023` int(11) NOT NULL,
  `price_023` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cats023`
--

INSERT INTO `cats023` (`id_023`, `name_023`, `type_023`, `gender_023`, `age_023`, `price_023`) VALUES
(1, 'jack', 'Angora', 'Male', 3, 400000),
(3, 'jhon', 'Persia', 'Male', 15, 300000),
(4, 'catty', 'Domestic', 'Female', 21, 400000),
(5, 'olive', 'Angora', 'Female', 6, 800000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cats023`
--
ALTER TABLE `cats023`
  ADD PRIMARY KEY (`id_023`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cats023`
--
ALTER TABLE `cats023`
  MODIFY `id_023` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
