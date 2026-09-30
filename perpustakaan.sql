-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2026 pada 10.28
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `pengarang` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `tahun_terbit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`) VALUES
(1, 'Pemrograman Web dengan PHP', 'Rudi Hartono', 'Informatika', 2021),
(2, 'Basis Data Lanjut', 'Siti Aminah', 'Andi Offset', 2020),
(3, 'Keamanan Sistem Informasi', 'Ahmad Dahlan', 'Tekno Press', 2022),
(4, 'Pemrograman Web dengan PHP', 'Rudi Hartono', 'Informatika', 2021),
(5, 'Basis Data Lanjut', 'Siti Aminah', 'Andi Offset', 2020),
(6, 'Keamanan Sistem Informasi', 'Ahmad Dahlan', 'Tekno Press', 2022),
(7, 'laut bercerita', 'Leila S. Chudori', 'Kepustakaan Populer Gramedia', 2017);


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `role`) VALUES
(1, 'admin', 'admin123', 'Administrator Utama', 'admin'),
(2, 'budi', 'budi123', 'Budi Santoso', 'member'),
(3, 'citra', 'citra123', 'Citra Dewi', 'member'),
(4, 'admin', 'admin123', 'Administrator Utama', 'admin'),
(5, 'budi', 'budi123', 'Budi Santoso', 'member'),
(6, 'citra', 'citra123', 'Citra Dewi', 'member');


ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
