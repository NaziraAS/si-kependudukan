-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2021 pada 19.40
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si-kependudukan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(3, 'atang', '123', 'admin'),
(4, 'kades', '123', 'kades');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id_kelahiran` int(11) NOT NULL,
  `nama_bayi` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jam` int(2) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tempat_dilahirkan` enum('RS','Rumah','Puskesmas','') NOT NULL,
  `kelahiran_ke` int(2) NOT NULL,
  `berat` int(11) NOT NULL,
  `panjang` int(11) NOT NULL,
  `nik_ibu` varchar(50) NOT NULL,
  `nik_ayah` varchar(50) NOT NULL,
  `nik_pelapor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id_kelahiran`, `nama_bayi`, `jenis_kelamin`, `tgl_lahir`, `jam`, `tempat_lahir`, `tempat_dilahirkan`, `kelahiran_ke`, `berat`, `panjang`, `nik_ibu`, `nik_ayah`, `nik_pelapor`) VALUES
(5, 'andre', 'Laki-laki', '2021-08-09', 3, 'banten', 'RS', 1, 3, 1, '29374987', '894792874', '8923749823'),
(6, 'lili', 'Perempuan', '2021-08-09', 4, 'lmapung', 'Puskesmas', 4, 4, 4, '9237498237', '405049', '03948509384'),
(7, 'sdhfkj', 'Laki-laki', '2021-08-09', 3, 'kjshdfjh', 'RS', 3, 3, 3, '87349878', '8749509', '09804934');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE `kematian` (
  `id_kematian` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `tgl_kematian` date NOT NULL,
  `jam` varchar(2) NOT NULL,
  `tempat_kematian` varchar(32) NOT NULL,
  `anak_ke` varchar(11) NOT NULL,
  `sebab_kematian` enum('Sakit Biasa/Tua','Wabah penyakit','Kecelakaan','') NOT NULL,
  `nik_ayah` varchar(50) NOT NULL,
  `nik_ibu` varchar(50) NOT NULL,
  `nik_saksi` varchar(50) NOT NULL,
  `nik_pelapor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kematian`
--

INSERT INTO `kematian` (`id_kematian`, `nik`, `hari`, `tgl_kematian`, `jam`, `tempat_kematian`, `anak_ke`, `sebab_kematian`, `nik_ayah`, `nik_ibu`, `nik_saksi`, `nik_pelapor`) VALUES
(7, 2147483647, 'Sabtu', '2021-08-09', '3', 'rumah', '1', 'Kecelakaan', '987349487', '92387489', '0340895897', '93487543'),
(8, 2147483647, '', '2021-08-08', '5', 'rumah', '3', 'Kecelakaan', '94985798', '237868', '9879345', '423423');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepala_desa`
--

CREATE TABLE `kepala_desa` (
  `id_kepala_desa` int(20) NOT NULL,
  `nip` char(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` enum('Tidak_Aktif','Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kepala_desa`
--

INSERT INTO `kepala_desa` (`id_kepala_desa`, `nip`, `nama`, `status`) VALUES
(3, '2934696', 'dadang', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `jdllaporan` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `nik` varchar(32) NOT NULL,
  `id_kades` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menikah`
--

CREATE TABLE `menikah` (
  `id_menikah` int(11) NOT NULL,
  `tempat_menikah` varchar(35) NOT NULL,
  `tgl_pernikahan` date NOT NULL,
  `nik_penduduk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pdatang`
--

CREATE TABLE `pdatang` (
  `id` int(11) NOT NULL,
  `nik` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `tgl` date DEFAULT NULL,
  `alamat_asal` varchar(32) NOT NULL,
  `alamat_tujuan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pdatang`
--

INSERT INTO `pdatang` (`id`, `nik`, `nama`, `tgl`, `alamat_asal`, `alamat_tujuan`) VALUES
(8, '1000007', 'dani', '2021-08-23', 'jakarta', 'surabaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` enum('Islam','Budha','Katolik','Kristen','Konghucu','Hindu','Protestan') NOT NULL,
  `status_perkawinan` enum('Lajang','Menikah','Cerai Hidup','Cerai Mati') NOT NULL,
  `pekerjaan` enum('Wirausaha','Nelayan','Petani','Pedagang','Karyawan','Buruh','PNS') NOT NULL,
  `pendidikan` enum('SD','SMP','SMA/K','DI','DII','DIII','DVI','S1','S2','S3') NOT NULL,
  `golongan_darah` enum('A','B','O','AB') NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `alamat`, `tempat_lahir`, `tgl_lahir`, `agama`, `status_perkawinan`, `pekerjaan`, `pendidikan`, `golongan_darah`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`) VALUES
(2938749872, 'dina', 'bandung', 'bandung', '2021-08-09', 'Islam', 'Menikah', '', '', 'A', 'Perempuan', 'reza', 'titik'),
(92837492837, 'dani', 'jakarta', 'jakarta', '2021-08-08', 'Islam', 'Lajang', 'PNS', 'DI', 'A', 'Laki-laki', 'bayu', 'aminah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppindah`
--

CREATE TABLE `ppindah` (
  `id` int(11) NOT NULL,
  `nik` varchar(32) NOT NULL,
  `tgl` date NOT NULL,
  `nama` varchar(32) NOT NULL,
  `alamat_asal` varchar(32) NOT NULL,
  `alamat_tujuan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ppindah`
--

INSERT INTO `ppindah` (`id`, `nik`, `tgl`, `nama`, `alamat_asal`, `alamat_tujuan`) VALUES
(7, '29384923490', '2021-08-23', 'atang sasmita', 'lombok', 'jakarta');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indeks untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indeks untuk tabel `kepala_desa`
--
ALTER TABLE `kepala_desa`
  ADD PRIMARY KEY (`id_kepala_desa`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menikah`
--
ALTER TABLE `menikah`
  ADD PRIMARY KEY (`id_menikah`);

--
-- Indeks untuk tabel `pdatang`
--
ALTER TABLE `pdatang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `ppindah`
--
ALTER TABLE `ppindah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kepala_desa`
--
ALTER TABLE `kepala_desa`
  MODIFY `id_kepala_desa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menikah`
--
ALTER TABLE `menikah`
  MODIFY `id_menikah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pdatang`
--
ALTER TABLE `pdatang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `ppindah`
--
ALTER TABLE `ppindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
