-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2023 pada 02.40
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_data_pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan_masyarakat`
--

CREATE TABLE `pengaduan_masyarakat` (
  `id` int(11) NOT NULL,
  `nama_pengadu` varchar(200) NOT NULL,
  `tempat_tinggal` varchar(200) NOT NULL,
  `media` varchar(200) NOT NULL,
  `pengaduan` varchar(200) NOT NULL,
  `tindak_lanjut` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengaduan_masyarakat`
--

INSERT INTO `pengaduan_masyarakat` (`id`, `nama_pengadu`, `tempat_tinggal`, `media`, `pengaduan`, `tindak_lanjut`) VALUES
(1, 'Ahmad', 'Jl. Kakatua, SP 4', 'Telepon Seluler', 'Pengaduan keberadaan orang mabuk di perempatan jalan di setiap pagi, mengganggu masyarakat.', 'Proses pelaporan ke pihak kepolisian.'),
(2, 'Shofiyah', 'Jl. Pemuda, SP 1', 'Media Sosial Instagram', 'Pencurian ponsel milik pelajar di salah satu sekolah di lingkungan SP 1 oleh masyarakat sekitar.', 'Proses pelaporan kepada pihak berwajib.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengaduan_masyarakat`
--
ALTER TABLE `pengaduan_masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengaduan_masyarakat`
--
ALTER TABLE `pengaduan_masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
