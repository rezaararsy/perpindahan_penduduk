-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2022 pada 02.03
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpindahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpindahan`
--

CREATE TABLE `perpindahan` (
  `id_perpindahan` int(11) NOT NULL,
  `kecamatan` varchar(11) NOT NULL,
  `kelurahan` varchar(11) NOT NULL,
  `rw` varchar(11) NOT NULL,
  `rt` varchar(11) NOT NULL,
  `nik` varchar(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jenis_pindah` varchar(11) NOT NULL,
  `skpwni` varchar(11) NOT NULL,
  `tgl_pindah` date NOT NULL,
  `alamat_rt` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perpindahan`
--

INSERT INTO `perpindahan` (`id_perpindahan`, `kecamatan`, `kelurahan`, `rw`, `rt`, `nik`, `nama`, `jenis_pindah`, `skpwni`, `tgl_pindah`, `alamat_rt`) VALUES
(7, '1', '1002', '1', '9', '0', 'RISCHKA MOUDY PUSPITASARI', '2', '	SKPWNI/357', '2022-03-30', 'JL TELUK PELABULAN RATU 25 RT 09 RW 01 ARJOSARI BLIMBING'),
(8, '1', '1002', '4', '7', '0', 'LULUK SHOLIKHATI', '1', '	SKPWNI/350', '2022-03-30', 'JL. TELUK CENDRAWASIH 110 RT 01 RW 02 ARJOSARI BLIMBING'),
(9, '1', '1002', '1', '1', '0', 'MOKHAMAD MUSLIQ', '2', 'SKPWNI/3573', '2022-03-29', 'JL. TELUK PELABUHAN RATU I / 5-D RT 06 RW 01 ARJOSARI BLIMBING'),
(15, '1', '1002', '4', '4', '0', 'ARIEF WIDYANTO', '2', 'SKPWNI/3573', '2022-03-22', 'JL. TAMAN RADEN INTAN KAV. 408'),
(16, '1', '1002', '3', '5', '0', 'BUDI PRIYANTO', '2', 'SKPWNI/3573', '2022-04-12', 'JL. TELUK CENDRAWASIH XIII / 13 A'),
(17, '1', '1002', '4', '4', '0', 'KAS APRIAL PERDANA', '2', 'SKPWNI/3573', '2022-03-16', 'JL TELUK ETNA III / 6'),
(18, '1', '1002', '5', '2', '0', 'AMIR MAHMUD', '2', 'SKPWNI/3573', '2022-03-07', 'JL. TELUK CENDRAWASIH 116'),
(19, '1', '1002', '5', '5', '0', 'ADAM M.H. SABTU', '2', 'SKPWNI/3573', '2022-03-07', 'JL. TELUK KENDARI NO.1'),
(20, '1', '1002', '5', '6', '0', 'GALUH AFIH NURMALASARI', '2', 'SKPWNI/3573', '2022-03-11', 'JL. TELUK MANADO 8 A'),
(21, '1', '1002', '3', '3', '0', 'DWIJA WISNU BRATA', '2', 'SKPWNI/3573', '2022-03-21', 'JL. PERUM CITRA ARJOSARI RESIDENCE'),
(22, '1', '1002', '3', '1', '0', 'LUKAS M. M. WURITIMUR	', '1', 'SKDWNI/3573', '2022-03-30', ' JL. TELUK PELABUHAN RATU NO. 26 B'),
(27, '1', '1002', '1', '1', '0', 'r', '1', '2', '2022-11-11', 'r'),
(28, '1', '1001', '3', '1', '0', 'CLARISSA GISELA FREDERICK', '2', 'SKPWNI/3573', '2022-03-29', 'THE BALEARJOSARI RESIDENCE B-9'),
(29, '1', '1001', '1', '3', '0', '	LASIADI', '1', 'SKDWNI/3573', '2022-03-18', 'JL PAHLAWAN'),
(30, '1', '1005', '1', '8', '0', 'MUHAMMAD WAHYUDI', '1', 'SKDWNI/3573', '2022-03-25', 'JL. A. YANI III NO. 26 A'),
(31, '1', '1005', '6', '2', '0', 'MARTHA KASTANJA LATUMETEN', '2', 'SKPWNI/3573', '2022-03-23', 'JL.A.YANI GG.SATRIA BARU NO.17'),
(32, '1', '1008', '20', '2', '0', 'AAQILA NASYIRA', '2', 'SKPWNI/3573', '2022-03-31', 'JL. WIDAS BLOK M -16'),
(33, '1', '1008', '5', '1', '0', 'SUGENG', '1', 'SKDWNI/3573', '2022-03-30', 'JL SAMPIAN NO.42'),
(34, '1', '1011', '6', '1', '0', 'NUR MUHAMMAD MUSTOFA', '1', 'SKDWNI/3573', '2022-05-24', 'JL. JODIPAN WETAN GG. 3B / 2210'),
(35, '1', '1011', '4', '4', '0', 'FARIZ SOKHINDA HAMZA', '2', 'SKPWNI/3573', '2022-07-21', 'JL. ZAENAL ZAKSE II / 2413'),
(36, '1', '1011', '6', '1', '0', 'NUR MUHAMMAD MUSTOFA', '1', 'SKDWNI/3573', '2022-05-24', 'JL. JODIPAN WETAN GG. 3B / 2210'),
(37, '1', '1006', '5', '3', '0', 'SANDI SETIAWAN', '2', 'SKPWNI/3573', '2022-03-23', 'JL. TERUSAN SULFAT 25'),
(38, '1', '1006', '3', '1', '0', 'GUNAWAN', '1', 'SKDWNI/3573', '2022-03-29', 'JL. LA SUCIPTO GG. TARUNA VI'),
(39, '1', '1010', '3', '9', '0', 'RIZKY BASATHA', '2', 'SKPWNI/3573', '2022-04-28', 'JL PUNTODEWO I NO.9'),
(40, '1', '1010', '2', '13', '0', 'ALIF ANGGARA PUTRA', '1', 'SKDWNI/3573', '2022-04-06', 'JL. ONTOSENO VIII / 60 B'),
(41, '1', '1003', '1', '8', '0', 'DYAH UTAMININGTYAS', '2', 'SKPWNI/3573', '2022-07-13', 'JL. CAKALANG I / 253'),
(42, '1', '1003', '4', '1', '0', 'MOCHAMMAD IQBAL PURWASITO', '1', 'SKDWNI/3573', '2022-07-13', 'JL. POLOWIJEN II / 306'),
(43, '1', '1007', '5', '5', '0', 'YOSHIKO STEFANO PAULUS RUMAMPUK', '2', 'SKPWNI/3573', '2022-05-09', 'JL. S. PARMAN I / 42'),
(44, '1', '1007', '1', '24', '0', 'TISELIA ISLIKO', '1', 'SKDWNI/3573', '2022-04-28', 'JL. PLANTINA NO.19'),
(45, '1', '1004', '11', '1', '0', 'YESICA PRAYOGI', '2', 'SKPWNI/3573', '2022-07-12', 'PONDOK BLIMBING INDAH BLOK M-4 / 4'),
(46, '1', '1004', '6', '1', '0', 'GALIH PRASETYO', '1', 'SKDWNI/3573', '2022-07-14', ' JL SAMPIL 3 NO 36A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Super', 101);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perpindahan`
--
ALTER TABLE `perpindahan`
  ADD PRIMARY KEY (`id_perpindahan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perpindahan`
--
ALTER TABLE `perpindahan`
  MODIFY `id_perpindahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
