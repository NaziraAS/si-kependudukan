-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Sep 2021 pada 19.02
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
  `jam` time NOT NULL,
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
(10, 'andre', 'Laki-laki', '2021-08-30', '01:30:00', 'jogja', 'RS', 1, 3, 4, '2938749872', '92837492837', '2938749872');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE `kematian` (
  `id_kematian` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `tgl_kematian` date NOT NULL,
  `jam` time NOT NULL,
  `tempat_kematian` varchar(32) NOT NULL,
  `umur` int(11) NOT NULL,
  `sebab_kematian` enum('Sakit Biasa/Tua','Wabah penyakit','Kecelakaan','') NOT NULL,
  `status` varchar(30) NOT NULL,
  `nik_ayah` varchar(50) NOT NULL,
  `nik_ibu` varchar(50) NOT NULL,
  `nik_saksi` varchar(50) NOT NULL,
  `nik_pelapor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kematian`
--

INSERT INTO `kematian` (`id_kematian`, `nik`, `hari`, `tgl_kematian`, `jam`, `tempat_kematian`, `umur`, `sebab_kematian`, `status`, `nik_ayah`, `nik_ibu`, `nik_saksi`, `nik_pelapor`) VALUES
(17, 92837492837, 'Senin', '2021-09-07', '22:00:00', 'rumah', 0, 'Sakit Biasa/Tua', 'Meninggal', '92837492837', '92837492837', '92837492837', '92837492837');

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
  `nomor_surat` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `kode_pos` int(11) NOT NULL,
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

INSERT INTO `penduduk` (`nik`, `nama`, `alamat`, `tempat_lahir`, `tgl_lahir`, `kode_pos`, `agama`, `status_perkawinan`, `pekerjaan`, `pendidikan`, `golongan_darah`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`) VALUES
(2938492349, 'atang', 'gerantung', 'sdfsdf', '2021-09-09', 598695, 'Islam', 'Menikah', 'Petani', 'SMP', 'A', 'Laki-laki', 'sdfsdfdfsdf', 'dasd');

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
  `alamat_tujuan` varchar(32) NOT NULL,
  `nomor_surat` varchar(30) NOT NULL,
  `alasan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ppindah`
--

INSERT INTO `ppindah` (`id`, `nik`, `tgl`, `nama`, `alamat_asal`, `alamat_tujuan`, `nomor_surat`, `alasan`) VALUES
(8, '2938492349', '2021-08-31', 'dani', 'lombok', 'banyuwangi', '1000009', 'tidak betah');

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
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
