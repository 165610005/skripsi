-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Sep 2020 pada 13.29
-- Versi server: 10.4.12-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp-sms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `nama` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `nama`, `username`, `password`) VALUES
(1, 'Admin Sekolah', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_group`
--

CREATE TABLE `anggota_group` (
  `id_anggota` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `anggota_group`
--

INSERT INTO `anggota_group` (`id_anggota`, `id_group`, `id_siswa`) VALUES
(3, 1, 1),
(7, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `group_kontak`
--

CREATE TABLE `group_kontak` (
  `id_group` int(11) NOT NULL,
  `nama_group` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `group_kontak`
--

INSERT INTO `group_kontak` (`id_group`, `nama_group`, `keterangan`) VALUES
(1, 'Kelas XII IPA 1', 'Group Penagihan SPP'),
(4, 'Kelas XII IPA 2', 'Penagihan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama_kontak` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `id_siswa`, `nama_kontak`, `no_hp`) VALUES
(2, 1, 'Bambang', '08000800800'),
(3, 3, 'Julian', '082297207348');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_terkirim`
--

CREATE TABLE `pesan_terkirim` (
  `id_pesan_terkirim` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_terkirim` datetime NOT NULL,
  `status` enum('Berhasil','Gagal') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesan_terkirim`
--

INSERT INTO `pesan_terkirim` (`id_pesan_terkirim`, `id_siswa`, `pesan`, `tanggal_terkirim`, `status`) VALUES
(6, 1, 'Tagihan Pembayaran SPP Sekolah Tamansiswa Sumatera\r\n\r\nTanggal : Monday, 18 May 2020\r\nJumlah : Rp. 0-,\r\nKeterangan : Periode (2020/2021)\r\nBatas Pembayaran : (Thursday, 18 June 2020)\r\nCatatan : \"Pembayaran dilakukan di bagian keuangan\"\r\n\r\nTerimakasih                    ', '2020-05-18 05:13:17', 'Gagal'),
(7, 3, 'Tagihan Pembayaran SPP Sekolah Tamansiswa Sumatera\r\n\r\nTanggal : Monday, 18 May 2020\r\nJumlah : Rp. 0-,\r\nKeterangan : Periode (2020/2021)\r\nBatas Pembayaran : (Thursday, 18 June 2020)\r\nCatatan : \"Pembayaran dilakukan di bagian keuangan\"\r\n\r\nTerimakasih                    ', '2020-05-18 05:13:17', 'Gagal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_wali` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Aktif','Non-Aktif') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama`, `alamat`, `kelas`, `nama_wali`, `status`) VALUES
(1, 'Solihin', 'Banguntapan, Bantul', 'X IPA 1', 'Bambang', 'Aktif'),
(3, 'Rest', 'Disini', 'XII IPS 4', 'Julian', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `template_pesan`
--

CREATE TABLE `template_pesan` (
  `id_template` int(11) NOT NULL,
  `template_atas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_bawah` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `template_pesan`
--

INSERT INTO `template_pesan` (`id_template`, `template_atas`, `template_bawah`) VALUES
(1, 'Tagihan Pembayaran SPP Sekolah Tamansiswa Sumatera', 'Terimakasih');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `anggota_group`
--
ALTER TABLE `anggota_group`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_group` (`id_group`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `group_kontak`
--
ALTER TABLE `group_kontak`
  ADD PRIMARY KEY (`id_group`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `pesan_terkirim`
--
ALTER TABLE `pesan_terkirim`
  ADD PRIMARY KEY (`id_pesan_terkirim`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `template_pesan`
--
ALTER TABLE `template_pesan`
  ADD PRIMARY KEY (`id_template`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `anggota_group`
--
ALTER TABLE `anggota_group`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `group_kontak`
--
ALTER TABLE `group_kontak`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesan_terkirim`
--
ALTER TABLE `pesan_terkirim`
  MODIFY `id_pesan_terkirim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `template_pesan`
--
ALTER TABLE `template_pesan`
  MODIFY `id_template` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggota_group`
--
ALTER TABLE `anggota_group`
  ADD CONSTRAINT `anggota_group_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `anggota_group_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `group_kontak` (`id_group`);

--
-- Ketidakleluasaan untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD CONSTRAINT `kontak_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Ketidakleluasaan untuk tabel `pesan_terkirim`
--
ALTER TABLE `pesan_terkirim`
  ADD CONSTRAINT `pesan_terkirim_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
