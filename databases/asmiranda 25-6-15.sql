-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jun 2015 pada 06.08
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `asmiranda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposition`
--

CREATE TABLE IF NOT EXISTS `disposition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disposition_description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `document_id` varchar(100) NOT NULL,
  `disposition_sender` varchar(100) NOT NULL,
  `disposition_status` enum('open','closed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `document_id` (`document_id`,`disposition_sender`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposition_role`
--

CREATE TABLE IF NOT EXISTS `disposition_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `disposition_id` int(11) NOT NULL,
  `disposition_note` text NOT NULL,
  `disposition_receiver` varchar(100) NOT NULL,
  `disposition_type` enum('cc','to') NOT NULL,
  `read_status` enum('read','unread') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `disposition_id` (`disposition_id`,`disposition_receiver`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` varchar(100) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `document_number` varchar(50) NOT NULL,
  `document_type` enum('keluar','masuk') NOT NULL,
  `document_description` text NOT NULL,
  `document_sender` varchar(100) NOT NULL,
  `document_receiver` varchar(100) NOT NULL,
  `document_clasification` varchar(100) NOT NULL,
  `softcopy` varchar(100) NOT NULL,
  `document_status` enum('active','inactive') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `unit_id` (`unit_id`,`folder_id`,`document_clasification`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `document_class`
--

CREATE TABLE IF NOT EXISTS `document_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `document_class`
--

INSERT INTO `document_class` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Memorandum', '2015-06-23 10:18:28', '2015-06-23 10:40:14'),
(2, 'Risalah Rapat', '2015-06-23 10:28:22', '2015-06-23 10:28:22'),
(3, 'Notulensi', '2015-06-24 08:52:32', '2015-06-24 08:52:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('user','admin','agendaris') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `staff_status` enum('active','inactive') NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_alias` varchar(30) NOT NULL,
  `staff_initial` enum('sdr','sdri') NOT NULL,
  `unit_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `unit_id` (`unit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `email`, `password`, `role`, `created_at`, `updated_at`, `staff_status`, `staff_name`, `staff_alias`, `staff_initial`, `unit_id`) VALUES
(5, 'admin@asmiranda.co', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2015-06-19 09:49:50', '2015-06-22 09:12:31', 'active', 'admin ganteng', 'admin', 'sdr', 18),
(8, 'bakti@asmiranda.co', '6b5c3b6e725a7703df483f2583215eef', 'user', '2015-06-22 09:12:03', '2015-06-22 09:12:03', 'active', 'Bakti Satria Adhityatama', 'Bakti', 'sdr', 17),
(9, 'fahmi@asmiranda.co', 'f11d50d63d3891a44c332e46d6d7d561', 'agendaris', '2015-06-22 09:13:27', '2015-06-22 10:12:21', 'active', 'Fahmi Kurniawan', 'Fahmi', 'sdr', 20),
(10, 'ade@asmiranda.co', 'a562cfa07c2b1213b3a5c99b756fc206', 'user', '2015-06-22 09:13:57', '2015-06-22 09:13:57', 'active', 'Ade Meidian Malik', 'Ade', 'sdri', 18),
(11, 'agendaris@asmiranda.co', 'd1b6570d48cbedbeb1febb572c5e4607', 'agendaris', '2015-06-22 11:59:33', '2015-06-22 11:59:33', 'active', 'agendaris asmiranda', 'agendaris', 'sdri', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`id`, `unit_name`, `created_at`, `updated_at`) VALUES
(17, 'DPSI', '2015-06-22 09:11:40', '2015-06-22 09:11:40'),
(18, 'DSDM', '2015-06-22 09:12:14', '2015-06-22 09:12:49'),
(20, 'Satuan Kerja Lain', '2015-06-22 10:12:08', '2015-06-22 10:12:08');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `unit_staff_fk` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
