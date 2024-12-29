-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2024 pada 11.59
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql_web_3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Manfaat Menulis Catatan Harian', 'Menulis catatan harian adalah kegiatan yang dapat memberikan banyak manfaat, terutama bagi kesehatan mental. Dengan menuliskan apa yang kita rasakan dan pikirkan setiap hari, kita dapat lebih mengenal diri sendiri dan membantu melepaskan beban emosional yang terpendam. Banyak psikolog merekomendasikan kebiasaan ini untuk mengurangi stres dan meningkatkan kreativitas. Menurut beberapa penelitian, orang yang rutin menulis catatan harian memiliki tingkat kecemasan yang lebih rendah dan tidur yang lebih baik. Jadi, mulai hari ini, luangkan waktu beberapa menit untuk menulis catatan harianmu!', '20241211075459.jpg', '2024-12-11 07:54:59', 'daniel'),
(2, 'Mengapa Fotografi Penting dalam Kehidupan Sehari-hari?', 'Menulis catatan harian adalah kegiatan yang dapat memberikan banyak manfaat, terutama bagi kesehatan mental. Dengan menuliskan apa yang kita rasakan dan pikirkan setiap hari, kita dapat lebih mengenal diri sendiri dan membantu melepaskan beban emosional yang terpendam. Banyak psikolog merekomendasikan kebiasaan ini untuk mengurangi stres dan meningkatkan kreativitas. Menurut beberapa penelitian, orang yang rutin menulis catatan harian memiliki tingkat kecemasan yang lebih rendah dan tidur yang lebih baik. Jadi, mulai hari ini, luangkan waktu beberapa menit untuk menulis catatan harianmu!', 'https://images.unsplash.com/photo-1729433321272-9243b22c5f6e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwzfHx8ZW58MHx8fHx8', '2024-10-12 00:00:00', 'admin'),
(3, 'Manfaat Menulis Catatan Harian', 'Menulis catatan harian adalah kegiatan yang dapat memberikan banyak manfaat, terutama bagi kesehatan mental. Dengan menuliskan apa yang kita rasakan dan pikirkan setiap hari, kita dapat lebih mengenal diri sendiri dan membantu melepaskan beban emosional yang terpendam. Banyak psikolog merekomendasikan kebiasaan ini untuk mengurangi stres dan meningkatkan kreativitas. Menurut beberapa penelitian, orang yang rutin menulis catatan harian memiliki tingkat kecemasan yang lebih rendah dan tidur yang lebih baik. Jadi, mulai hari ini, luangkan waktu beberapa menit untuk menulis catatan harianmu!', 'https://plus.unsplash.com/premium_photo-1728391710545-3d7d0bcd0b21?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwyfHx8ZW58MHx8fHx8', '2024-10-12 00:00:00', 'admin'),
(4, 'Manfaat Menulis Catatan Harian', 'Menulis catatan harian adalah kegiatan yang dapat memberikan banyak manfaat, terutama bagi kesehatan mental. Dengan menuliskan apa yang kita rasakan dan pikirkan setiap hari, kita dapat lebih mengenal diri sendiri dan membantu melepaskan beban emosional yang terpendam. Banyak psikolog merekomendasikan kebiasaan ini untuk mengurangi stres dan meningkatkan kreativitas. Menurut beberapa penelitian, orang yang rutin menulis catatan harian memiliki tingkat kecemasan yang lebih rendah dan tidur yang lebih baik. Jadi, mulai hari ini, luangkan waktu beberapa menit untuk menulis catatan harianmu!', 'https://plus.unsplash.com/premium_photo-1728391710545-3d7d0bcd0b21?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwyfHx8ZW58MHx8fHx8', '2024-10-12 00:00:00', 'admin'),
(5, 'Manfaat Menulis Catatan Harian', 'Menulis catatan harian adalah kegiatan yang dapat memberikan banyak manfaat, terutama bagi kesehatan mental. Dengan menuliskan apa yang kita rasakan dan pikirkan setiap hari, kita dapat lebih mengenal diri sendiri dan membantu melepaskan beban emosional yang terpendam. Banyak psikolog merekomendasikan kebiasaan ini untuk mengurangi stres dan meningkatkan kreativitas. Menurut beberapa penelitian, orang yang rutin menulis catatan harian memiliki tingkat kecemasan yang lebih rendah dan tidur yang lebih baik. Jadi, mulai hari ini, luangkan waktu beberapa menit untuk menulis catatan harianmu!', 'https://plus.unsplash.com/premium_photo-1728391710545-3d7d0bcd0b21?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwyfHx8ZW58MHx8fHx8', '2024-10-12 00:00:00', 'admin'),
(6, 'Aku adalah Manusia', '[Edit] Manusia adalah makhluk sosial dengan memiliki akal budi', '20241211075317.jpg', '2024-12-11 07:53:17', 'daniel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_web`
--

CREATE TABLE `user_web` (
  `id` int(11) NOT NULL,
  `username` varchar(54) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_web`
--

INSERT INTO `user_web` (`id`, `username`, `password`, `foto`) VALUES
(1, 'daniel', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_web`
--
ALTER TABLE `user_web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_web`
--
ALTER TABLE `user_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
