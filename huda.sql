-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 06 Mar 2024 pada 04.28
-- Versi server: 8.0.31
-- Versi PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_hotel`
--

DROP TABLE IF EXISTS `fasilitas_hotel`;
CREATE TABLE IF NOT EXISTS `fasilitas_hotel` (
  `fasilitas_hotel` text NOT NULL,
  `fasilitas_umum` text NOT NULL,
  `fasilitas_terdekat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `fasilitas_hotel`
--

INSERT INTO `fasilitas_hotel` (`fasilitas_hotel`, `fasilitas_umum`, `fasilitas_terdekat`) VALUES
('', '', ''),
('security', 'toilet mewah', 'cafe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

DROP TABLE IF EXISTS `kamar`;
CREATE TABLE IF NOT EXISTS `kamar` (
  `no_kamar` int NOT NULL AUTO_INCREMENT,
  `type_kamar_id` int NOT NULL,
  PRIMARY KEY (`no_kamar`)
) ENGINE=InnoDB AUTO_INCREMENT=224 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`no_kamar`, `type_kamar_id`) VALUES
(1, 3),
(2, 1),
(12, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

DROP TABLE IF EXISTS `pemesanan`;
CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` int NOT NULL AUTO_INCREMENT,
  `no_kamar` int NOT NULL,
  `id_user` int NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `harga` double NOT NULL,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `no_kamar`, `id_user`, `checkin`, `checkout`, `harga`) VALUES
(1, 2, 12, '2023-02-06', '2027-07-20', 1386000),
(7, 2, 22, '2023-02-14', '2023-02-28', 1386000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_kamar`
--

DROP TABLE IF EXISTS `tipe_kamar`;
CREATE TABLE IF NOT EXISTS `tipe_kamar` (
  `type_kamar_id` int NOT NULL,
  `fasilitas` text NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tipe_kamar`
--

INSERT INTO `tipe_kamar` (`type_kamar_id`, `fasilitas`, `harga`) VALUES
(1, 'ff max hd parah di download nomor 1', 99000),
(2, 'free for all', 100000000),
(3, 'vip murah harga merakyat', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` enum('tamu','resepsionis','administator') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `user_type`) VALUES
(3, 'aragus', '12', 'administator'),
(12, 'argus', '12', 'tamu'),
(21, 'baxia', '12', 'resepsionis'),
(22, 'nana', '123', 'tamu'),
(23, 'saya', '12', 'administator');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
