-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2025 pada 08.41
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unsoed`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `email`) VALUES
(2, 'admin1', '254c5d0e7e790660c56fface4d78cdeac3d64de8', 'Admin 1', 'admin1@gmail.com'),
(3, 'admin2', '4f401449ef7a8c7278b34ef22e1c13adf6460a8a', 'Admin 2', 'admin2@gmail.com'),
(4, 'admin3', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'Admin 3', 'admin3@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul_kegiatan` varchar(100) NOT NULL,
  `deskripsi_kegiatan` varchar(1000) NOT NULL,
  `foto_kegiatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul_kegiatan`, `deskripsi_kegiatan`, `foto_kegiatan`) VALUES
(10, 'Sarasehan Eksternal 2024', 'Telah terlaksana program kerja dari kementerian adkesma yaitu sarasehan. Pada tanggal 15 November,\r\ntelah dilaksanakan sarasehan eksternal 2 di Aula Gedung F Fakultas Teknik. Tema dari kegiatan ini yaitu\r\n“Studiosum Welfare”. Diadakannya program kerja ini bertujuan untuk mewadahi berbagai aspirasi dan\r\ngagasan para KBMFT kepada pihak fakultas yang sekiranya kurang dapat di terima antara KBMFT dan\r\npihak fakultas. Terdapat 3 topik yang diangkat pada sarasehan eksternal yaitu mengenai fasilitas,\r\npelayanan akademik, dan pelayanan administrasi.', 'SARASEHAN1.png'),
(11, 'Refreshing Pengurus', 'Program kerja Refreshing Pengurus BEM Fakultas Teknik Unsoed Kabinet Gelora Cipta telah dilaksanakan pada\r\n18 Agustus 2024 di Fakultas Teknik dengan tema \"Agustusan Bersama Gelora Cipta\". Acara ini bertujuan\r\nsebagai sarana untuk melepas penat bagi para pengurus yang telah menjalani tugas dan program\r\nkerja selama beberapa bulan terrkahir.', 'REFRESHING_PENGURUS.png'),
(12, 'Mechanism 5.0', 'Telah terlaksana program kerja dari Kementerian Kaderisasi dan Pengembangan Mahasiswa BEM FT UNSOED\r\nyaitu PKKMB X MECHANISM 6.0 pada tanggal 16-17 Agustus 2024 dan 24-25 Agustus 2024. Kegiatan PKKMB X\r\nMECHANISM 6.0 merupakan bentuk penyambutan Mahasiswa Baru yang bertujuan untuk Memperkenalkan\r\nlingkungan dan lembaga yang terdapat di Kampus Fakultas teknik Unsoed.', 'MECHANISM_5_01.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `majalah`
--

CREATE TABLE `majalah` (
  `id_majalah` int(11) NOT NULL,
  `judul_majalah` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `majalah`
--

INSERT INTO `majalah` (`id_majalah`, `judul_majalah`, `cover`, `link`) VALUES
(1, 'AGUSTUS', 'konten2.png', 'https://drive.google.com/drive/folders/1U_2pfSCX_62RY3a5P687M7tkyPuLhNb8'),
(2, 'MARET', 'konten21.png', 'https://www.youtube.com/'),
(3, 'JUNI', 'konten22.png', 'https://www.youtube.com/'),
(6, 'JUNI', 'konten22.png', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `majalah`
--
ALTER TABLE `majalah`
  ADD PRIMARY KEY (`id_majalah`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `majalah`
--
ALTER TABLE `majalah`
  MODIFY `id_majalah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
