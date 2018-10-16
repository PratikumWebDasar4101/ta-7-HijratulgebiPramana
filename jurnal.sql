-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Okt 2018 pada 12.37
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `nama` text NOT NULL,
  `nim` int(255) NOT NULL,
  `jk` text NOT NULL,
  `program_studi` text NOT NULL,
  `fakultas` text NOT NULL,
  `asal` text NOT NULL,
  `motto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`nama`, `nim`, `jk`, `program_studi`, `fakultas`, `asal`, `motto`) VALUES
('kurok', 3, 'pria', 'D3 sistem informasi', 'fakultas ilmu terapan', 'makkasar', 'lalok lamak'),
('unu', 12, 'pria', 'D3 sistem informasi', 'fakultas ilmu terapan', 'bogor', 'maju terus'),
('kelvin', 1234567, 'pria', 'D3 sistem informasi', 'fakultas ilmu terapan', 'cianjur', 'pantang mundur'),
('pram', 670174007, 'pria', 'D3 sistem informasi', 'fakultas ilmu terapan', 'bdg', 'keep strong'),
('hijratulgebi Pramana', 2147483647, 'pria', 'D3 sistem informasi', 'fakultas ilmu terapan', 'maek', 'makan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
